<?php

namespace App\Http\Controllers;

use App\Models\Design;
use Illuminate\Http\Request;

class DesignController extends Controller
{
    public function index(Request $request)
    {
        $request->validate([
            'category_id' => 'nullable|integer|exists:categories,id',
        ]);

        $query = Design::with('categories');

        if ($request->has('category_id')) {
            $query->whereHas('categories', function ($q) use ($request) {
                $q->where('categories.id', $request->category_id);
            });
        }

        $designs = $query->get();

        return response()->json($designs);
    }
}

<?php

namespace App\Http\Controllers;

use App\Http\Resources\DesignResource;
use App\Models\Design;
use Illuminate\Http\Request;

class DesignController extends Controller
{
    public function index(Request $request)
    {
        $request->validate([
            'category_ids' => 'nullable|string',
            'per_page' => 'nullable|integer|min:1|max:100',
        ]);

        $query = Design::with('categories');

        if ($request->filled('category_ids')) {
            $ids = explode(',', $request->category_ids);
            $query->whereHas('categories', function ($q) use ($ids) {
                $q->whereIn('categories.id', $ids);
            });
        }

        $designs = $query->paginate($request->input('per_page', 15));

        return DesignResource::collection($designs);
    }
}

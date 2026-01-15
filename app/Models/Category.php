<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
    public function designs(): BelongsToMany
    {
        return $this->belongsToMany(Design::class, 'design_categories');
    }
}

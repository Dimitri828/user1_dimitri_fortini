<?php

namespace App\Models;
use App\Models\Article;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function articles(): HasMany
    {
        return $this->hasMany(Article::class);
    }
}

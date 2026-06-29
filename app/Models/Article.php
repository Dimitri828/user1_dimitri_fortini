<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\Category;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\User;

class Article extends Model
{
    protected $fillable=[
        "name",
        "price",
        "description",
        "category_id",
        "user_id",
    ];

     public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }
     public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}

<?php

namespace App;

use App\Book;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;


class Category extends Model
{
    protected $guarded = [];
    
    public function books(): HasMany {
        return $this->hasMany(Book::class);
    }
}

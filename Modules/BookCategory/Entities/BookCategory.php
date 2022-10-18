<?php

namespace Modules\BookCategory\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class BookCategory extends Model
{
    use HasFactory;

    protected $fillable = [];
    protected $table="bookcategories";

    protected static function newFactory()
    {
        return \Modules\BookCategory\Database\factories\BookCategoryFactory::new();
    }
}

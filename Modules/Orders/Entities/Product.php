<?php

namespace Modules\Orders\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [];
    protected $table='book_order';
    protected static function newFactory()
    {
        return \Modules\Orders\Database\factories\ProductFactory::new();
    }
}

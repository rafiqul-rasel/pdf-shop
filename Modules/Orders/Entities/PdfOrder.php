<?php

namespace Modules\Orders\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PdfOrder extends Model
{
    use HasFactory;
    protected $table='book_order';

    protected $fillable = [];

    protected static function newFactory()
    {
        return \Modules\Orders\Database\factories\PdfOrderFactory::new();
    }
}

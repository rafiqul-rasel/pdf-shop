<?php

namespace Modules\Orders\Entities;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\Book\Entities\Book;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [];

    protected static function newFactory()
    {
        return \Modules\Orders\Database\factories\OrderFactory::new();
    }
    public function books(){
        return $this->belongsToMany(Book::class)->withPivot('quantity');
}
public function user(){
    return $this->belongsTo(User::class);
}
}

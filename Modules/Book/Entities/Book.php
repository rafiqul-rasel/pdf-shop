<?php

namespace Modules\Book\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\Author\Entities\Author;
use Modules\BookCategory\Entities\BookCategory;

class Book extends Model
{
    use HasFactory;

    protected $fillable = [];
protected $table='books';

public function author(){
    return $this->belongsTo(Author::class);
}
    public function category(){
        return $this->belongsTo(BookCategory::class);
    }


}

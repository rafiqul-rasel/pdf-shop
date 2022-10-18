<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Modules\Book\Entities\Book;
use Modules\BookCategory\Entities\BookCategory;

class FrontendController extends Controller
{
    public function index()
    {
        $books=Book::all();
        $categories=BookCategory::all();
        $items = \Cart::getContent();
        return view('frontend.index',compact('books','categories','items'));
    }
    public function contact()
    {
        return view('frontend.contact');
    } public function service()
    {
        return view('frontend.service');
    }
    public function booksMedia()
    {
        $books=Book::all();
        return view('frontend.booksmedia',compact('books'));
    }
    public function blog()
    {
        return view('frontend.blog');
    }
    public function cart()
    {
        return view('frontend.cart');
    }
    public function checkout()
    {
        return view('frontend.checkout');
    }
}

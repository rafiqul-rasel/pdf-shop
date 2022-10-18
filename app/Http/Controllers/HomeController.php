<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Modules\Book\Entities\Book;
use Modules\BookCategory\Entities\BookCategory;
use Modules\Orders\Entities\Order;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if(Auth::user()->hasRole('user')){
          return redirect()->route('orders');
    }
        $users=User::all()->count();
        $books=Book::all()->count();
        $orders=Order::all()->count();
        $bookCat=BookCategory::all()->count();
        return view('home',compact('users','books','orders','bookCat'));
    }
}

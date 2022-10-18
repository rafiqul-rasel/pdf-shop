<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Modules\Book\Entities\Book;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function create($productId)
    {
        $book = Book::find($productId); // assuming you have a Product model with id, name, description & price
        $rowId = $book->id; // generate a unique() row ID
        $userID = 2; // the user ID to bind the cart contents

// add the product to cart
        \Cart::add(array(
            'id' => $rowId,
            'name' => $book->book_title,
            'price' => $book->price,
            'quantity' => 1,
            'attributes' => array(),
            'associatedModel' => $book
        ));
        toastr()->success("success","Book Add To Cart Successfully");

        return redirect()->route('homepage');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        \Cart::remove($id);
        toastr()->success("success","Book Remove To Cart Successfully");

        return redirect()->route('homepage');
    }
}

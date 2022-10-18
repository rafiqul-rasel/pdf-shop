<?php

namespace Modules\Book\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Author\Entities\Author;
use Modules\Book\Entities\Book;
use DataTables;
use Modules\BookCategory\Entities\BookCategory;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index(Request $request)
    {
        $data = Book::get();
        //dd($data);
        return view('book::index');
    }
    public function getAllBooks(Request $request)
    {
        if ($request->ajax()) {
            $data = Book::get();
            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function($row){
                    $actionBtn = ' <a href="'.sprintf(route('books.show',$row->id)).'" class="delete btn btn-primary btn-sm"><i class="nav-icon fas fa-eye"></i></a> <a href="'.sprintf(route('bookcategory.edit',$row->id)).'" class="edit btn btn-success btn-sm"><i class="nav-icon fas fa-edit"></i></a> <a href="'.sprintf(route('bookcategory.delete',$row->id)).'" onclick="return confirm(\'Are you sure you want to delete this item\');" class="delete btn btn-danger btn-sm"><i class="nav-icon fas fa-trash"></i></a>';
                    return $actionBtn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
    }
    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        $authors=Author::get();
        $bookCatagories=BookCategory::get();
        return view('book::create',compact('authors','bookCatagories'));
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(Request $request)
    {
        $book=new Book();
        $book->book_title=$request->book;
        $book->author_id=$request->author;
        $book->bookcatagories_id=$request->bookcategory;
        $book->edition=$request->edition;
        $book->page_no=$request->page;
        $book->publisher=$request->publisher;
        $book->isbn=$request->isbn;
        $book->pub_date=$request->pubdate;
        $book->price=$request->price;
        $book->copy=$request->copy;
        $book->arrival_date=$request->arrivalsdate;
        $book->description=$request->description;

        if($request->hasfile('thumbnail')) {
            $filename = time() . '.' . $request->thumbnail->extension();

            $request->thumbnail->move(public_path('images'), $filename);
            $book->thumbnail=$filename;
        }

        if($request->hasfile('pdf')) {
            $pdfFile = time() . '.' . $request->pdf->extension();

            $request->pdf->move(public_path('pdf'), $pdfFile);
            $book->source=$pdfFile;
        }
        $book->save();
        toastr()->success("success","Book  Added Successfully");

        return redirect()->route('books');
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        $authors=Author::get();
        $bookCatagories=BookCategory::get();
        $book=Book::find($id);
        return view('book::show',compact('authors','bookCatagories','book'));
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        $book=Book::find($id);
        return view('book::edit',compact('book'));
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
        $book=Book::find($id);
        $book->delete();
        toastr()->success("success","Book  Delete Successfully");

        return redirect()->route('books');
    }
}

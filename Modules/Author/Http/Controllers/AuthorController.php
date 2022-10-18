<?php

namespace Modules\Author\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Author\Entities\Author;
use DataTables;

class AuthorController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index(Request $request)
    {
        return view('author::index');
    }
    public function getAuthor(Request $request)
    {
        if ($request->ajax()) {
            $data = Author::get();
            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function($row){
                    $actionBtn = ' <a href="'.sprintf(route('author.show',$row->id)).'" class="delete btn btn-primary btn-sm"><i class="nav-icon fas fa-eye"></i></a> <a href="'.sprintf(route('author.edit',$row->id)).'" class="edit btn btn-success btn-sm"><i class="nav-icon fas fa-edit"></i></a> <a href="'.sprintf(route('author.delete',$row->id)).'" onclick="return confirm(\'Are you sure you want to delete this item\');" class="delete btn btn-danger btn-sm"><i class="nav-icon fas fa-trash"></i></a>';
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
        return view('author::create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(Request $request)
    {
        $category=new Author();
        $category->name=$request->author;
        $category->save();
        toastr()->success("success","Author Added Successfully");

        return redirect()->route('author');
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        $author=Author::find($id);
        return view('author::show',compact('author'));
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        $author=Author::find($id);
        return view('author::edit',compact('author'));
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(Request $request, $id)
    {
        $category= Author::find($id);
        $category->name=$request->author;
        $category->save();
        toastr()->success("success","Author Update Successfully");

        return redirect()->route('author');
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
        $author=Author::find($id);
        $author->delete();
        toastr()->success("success","Author Delete Successfully");

        return redirect()->route('author');
    }
}

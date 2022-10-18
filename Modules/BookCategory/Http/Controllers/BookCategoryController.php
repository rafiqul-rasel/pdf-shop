<?php

namespace Modules\BookCategory\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use DataTables;
use Modules\BookCategory\Entities\BookCategory;

class BookCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index(Request $request)
    {
        return view('bookcategory::index');
    }

    public function getbookcategory(Request $request)
    {
        if ($request->ajax()) {
            $data = BookCategory::get();
            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function($row){
                    $actionBtn = ' <a href="'.sprintf(route('bookcategory.show',$row->id)).'" class="delete btn btn-primary btn-sm"><i class="nav-icon fas fa-eye"></i></a> <a href="'.sprintf(route('bookcategory.edit',$row->id)).'" class="edit btn btn-success btn-sm"><i class="nav-icon fas fa-edit"></i></a> <a href="'.sprintf(route('bookcategory.delete',$row->id)).'" onclick="return confirm(\'Are you sure you want to delete this item\');" class="delete btn btn-danger btn-sm"><i class="nav-icon fas fa-trash"></i></a>';
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
        return view('bookcategory::create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(Request $request)
    {
        $category=new BookCategory();
        $category->name=$request->bookcategory;
        $category->save();
        toastr()->success("success","Book Category Added Successfully");

        return redirect()->route('bookcategory');

    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        $bookCategory=BookCategory::find($id);
        return view('bookcategory::show',compact('bookCategory'));
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        $bookCategory=BookCategory::find($id);
        return view('bookcategory::edit',compact('bookCategory'));
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(Request $request, $id)
    {
        $category= BookCategory::find($id);
        $category->name=$request->bookcategory;
        $category->save();
        toastr()->success("success","Book Category Update Successfully");

        return redirect()->route('bookcategory');
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
        $post=BookCategory::find($id);
        $post->delete();
        toastr()->success("success","Book Category Delete Successfully");

        return redirect()->route('bookcategory');
    }
}

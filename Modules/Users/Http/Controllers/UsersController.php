<?php

namespace Modules\Users\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Models\User;
use DataTables;
use Spatie\Permission\Models\Role;

class UsersController extends Controller
{
    public function index(Request $request)
    {
        return view('users::index');
    }
    public function getUsers(Request $request)
    {
        if ($request->ajax()) {
            $data = User::get();
            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function($row){
                    $actionBtn = ' <a href="'.sprintf(route('users.show',$row->id)).'" class="delete btn btn-primary btn-sm"><i class="nav-icon fas fa-eye"></i></a> <a href="'.sprintf(route('users.edit',$row->id)).'" class="edit btn btn-success btn-sm"><i class="nav-icon fas fa-edit"></i></a> <a href="'.sprintf(route('users.delete',$row->id)).'" onclick="return confirm(\'Are you sure you want to delete this item\');" class="delete btn btn-danger btn-sm"><i class="nav-icon fas fa-trash"></i></a>';
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
        $roles=Role::all();
        return view('users::create',compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return \Illuminate\Contracts\Foundation\Application|Renderable|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        $user=new User();
        $user->name=$request->name;
        $user->email=$request->email;
        $user->password=bcrypt($request->password);
        $user->save();
        if ($request->roles) {
            $user->assignRole($request->roles);
        }
        toastr()->success("success","New User Added uccessfully");
        return redirect(route('users'));
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        $user=User::find($id);
        $roles=Role::all();
        return view('users::show',compact('user','roles'));
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        $user=User::find($id);
        $roles=Role::all();
        return view('users::edit',compact('user','roles'));
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, $id)
    {
        $user=User::find($id);
        $user->name=$request->name;
        $user->email=$request->email;
        if(!is_null($request->password)){
            $user->password=bcrypt($request->password);
        }
        $user->save();
        $user->roles()->detach();
        if ($request->roles) {
            $user->assignRole($request->roles);
        }
        toastr()->success("success","User Updated !");
        return redirect()->route('users');
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        User::where('id',$id)->delete();
        toastr()->success("success"," User Deleted !");
        return redirect()->back();
    }
}

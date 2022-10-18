<?php

namespace Modules\Orders\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Modules\Orders\Entities\Order;
use DataTables;
use Modules\Orders\Entities\Product;


class OrdersController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index(Request $request)
    {
//       $order=Order::find(1);
//       foreach ($order->books as $book){
//           echo $book->id;
//       }
      // return $order->books;
        return view('orders::index');
    }
    public function getAllOrders(Request $request)
    {
        if ($request->ajax()) {
            if(Auth::user()->hasRole('Admin'))
            $data = Order::get();
            else
                $data = Order::where('user_id',Auth::user()->id)->get();
            return Datatables::of($data)
                ->addColumn('name', function($row){
                    return $row->first_name." ".$row->last_name;
                })
                ->rawColumns(['name'])
                ->addColumn('address', function($row){
                    return $row->address." ".$row->city.",".$row->country.",".$row->city." ".$row->zipcode;
                })
                ->rawColumns(['address'])
                ->addColumn('status', function($row){
                    $processing='';
                    switch($row->status){
                        case 0 :
                            $processing= "ordered pending";
                            break;
                        case 1:
                            $processing= "ordered Processing";
                            break;
                        case 2:
                            $processing= "ordered On The Way";
                            break;
                        case 3:
                            $processing= "ordered Deliver Successfully";
                            break;
                        case 4:
                            $processing= "ordered Cancelled";
                            break;
                    }

                    return $processing;
                })
                ->rawColumns(['status'])
                ->addIndexColumn()
                ->addColumn('action', function($row){
                    $actionBtn = ' <a href="'.sprintf(route('order.edit',$row->id)).'" class="delete btn btn-primary btn-sm"><i class="nav-icon fas fa-eye"></i></a>';
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

        return view('orders::create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        if(!Auth::check()){
            toastr()->error("Error","Please Login Before Order Books");
           return redirect()->route('login');
        }
      $order=new Order();
        $items = \Cart::getContent();
        $order->first_name=$request->billing_first_name;
        $order->last_name=$request->billing_last_name;
        $order->address=$request->billing_address_1;
        $order->city=$request->billing_city;
        $order->country=$request->billing_state;
        $order->zipcode=$request->billing_postcode;
        $order->phone=$request->billing_phone;
        $order->user_id=Auth::user()->id??0;
        $order->status=0;
        $order->total_price=\Cart::getTotal();
        $order->trax_Id=$request->trax_id;
        $order->save();

        foreach($items as $row) {
            $product=new Product();
            $product->order_id=$order->id;
            $product->book_id=$row->id;
            $product->quantity=$row->quantity;
            $product->save();
        }

        foreach(\Cart::getContent() as $item) {
            \Cart::remove($item->id);
        }

        toastr()->success("success","Thank You For Place Order");

        return redirect()->route('homepage');
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {

        return view('orders::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        $order=Order::find($id);
        return view('orders::edit',compact('order'));
    }
    public function status_update($order_id,$status)
    {
        Order::where('id',$order_id)->update(['status'=>$status]);
        return response()->json(['status'=>'success'], 200);
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
        //
    }
}

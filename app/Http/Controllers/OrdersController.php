<?php

namespace App\Http\Controllers;
use App\Order;
use Illuminate\Http\Request;
class OrdersController extends Controller
{
    protected function validator(array $data) {
        return validator()->make($data, [
            'order_number' => 'required|string',
        ]);
    } // validates data to ensure secure inputs


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('orders.index')->with('orders', Order::all());
    }
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function create()
    {
        return view('orders.create');
    }

    public function store(Request $request){


        $validator = $this->validator($request->all());
        if($validator->passes()){
            $order = Order::create($request->all());
            $order->products()->save($order);
            return response()->json(['success'=>true,'message'=>'Record added successfully','post'=>$order]);
        }else{
            return response()->json(['success'=>false,'message'=>'Invalid Input']);
        }


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $orders = Order::find($id);

        return view('orders.edit')->with('orders',$orders);
    }

    public function updateOrder(Request $request, $id){

        $validator = $this->validator($request->all());
        if($validator->passes()){
            $order  = Order::find($id);
            $order->order_number = $request->input('order_number');
            $order->save();
            return response()->json(['success'=>true,'message'=>'Record updated successfully','post'=>$order]);
        }else{
            return response()->json(['success'=>false,'message'=>'Invalid Input']);
        }

    }

    /**
     * Remove the specified from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function deleteOrder($id){
        $order  = Order::find($id);
        $order->delete();

        return response()->json(['message'=>'Removed successfully.']);
    }

    
}

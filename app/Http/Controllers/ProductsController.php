<?php

namespace App\Http\Controllers;
use App\Product;
use Illuminate\Http\Request;
class ProductsController extends Controller
{

    protected function validator(array $data) {
        return validator()->make($data, [
            'name' => 'required|string',
            'description' => 'required|string',
            'quantity' => 'required|integer',

        ]);
    } // validates data to ensure secure inputs


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('products.index')->with('products', Product::all());
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
        return view('products.create');
    }

    public function store(Request $request){


        $validator = $this->validator($request->all());
        if($validator->passes()){
            $product = Product::create($request->all());
            return response()->json(['success'=>true,'message'=>'Record added successfully','post'=>$product]);
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
        $products = Product::find($id);

        return view('products.edit')->with('products',$products);
    }

    public function updateProduct(Request $request, $id){


        $validator = $this->validator($request->all());
        if($validator->passes()){
            $product  = Product::find($id);
            $product->name = $request->input('name');
            $product->description = $request->input('description');
            $product->quantity = $request->input('quantity');
            $product->save();
            return response()->json(['success'=>true,'message'=>'Record updated successfully','post'=>$product]);
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

    public function deleteProduct($id){
        $product  = Product::find($id);
        $product->delete();

        return response()->json(['message'=>'Removed successfully.']);
    }


}

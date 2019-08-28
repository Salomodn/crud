<?php

namespace App\Http\Controllers;
use App\Supplier;
use Illuminate\Http\Request;
class SuppliersController extends Controller
{

    protected function validator(array $data) {
        return validator()->make($data, [
            'name' => 'required|string',
        ]);
    } // validates data to ensure secure inputs


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('suppliers.index')->with('suppliers', Supplier::all());
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
        return view('suppliers.create');
    }

    public function store(Request $request){


        $validator = $this->validator($request->all());
        if($validator->passes()){
            $supplier = Supplier::create($request->all());
            $supplier->suppliers()->save($supplier);
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
        $suppliers = Supplier::find($id);

        return view('suppliers.edit')->with('suppliers',$suppliers);
    }

    public function updateSupplier(Request $request, $id){


        $validator = $this->validator($request->all());
        if($validator->passes()){
            $supplier  = Supplier::find($id);
            $supplier->name = $request->input('name');
            $supplier->description = $request->input('description');
            $supplier->quantity = $request->input('quantity');
            $supplier->save();
            return response()->json(['success'=>true,'message'=>'Record added successfully','post'=>$order]);
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

    public function deleteSupplier($id){
        $supplier  = Supplier::find($id);
        $supplier->delete();

        return response()->json(['message'=>'Removed successfully.']);
    }


}

<?php

namespace App\Http\Controllers;

use App\Models\CustomerModel;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index(){
        $customer= CustomerModel::all();
        return view("CustomerView.Front",compact("customer"));

    }

    public function show($id){
        $c=CustomerModel::Find($id);
        return view ("CustomerView.Display",compact("c"));


    }
    public function create(){


        return view("CustomerView.Add");

    }
    public function edit($id){
        $citem = CustomerModel::find($id);
        return view ("CustomerView.Change",compact("citem"));
    }
    public function update(Request $request, $id){
        $this->validate($request,[
    "CustomerName" =>"required",
    "Gender"=>"required",
    "Tell"=>"required",
    "Email"=>"required",
    "Nationality"=>"required"

        ]);
        CustomerModel::find($id)->update($request->all());
        return redirect()->route("cu.index");
    }
public function store(Request $request){
    $this->validate($request,[
    "CustomerName" =>"required",
    "Gender"=>"required",
    "Tell"=>"required",
    "Email"=>"required",
    "Nationality"=>"required"

   ] );
   CustomerModel::create($request->all());
   return redirect()->route("cu.index");
}
    //
    public function destroy($id){
        CustomerModel::find($id)->delete();
        return redirect()->route("cu.index");
    }

}

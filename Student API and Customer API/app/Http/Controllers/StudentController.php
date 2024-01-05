<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\StudentModel;
class StudentController extends Controller
{
    public function index(){
       $data = StudentModel::all();
       return view ("StudentView.Front",compact("data"));

    }
    public function show($id){
           $x = StudentModel::find($id);
        return view("StudentView.Display",compact("x"));
    }
    public function create(){
        return view("StudentView.add");

    }
    public function edit($id){
        $item=StudentModel::find($id);
        return view("StudentView.change",compact("item"));


    }
    public function update(Request $request, $id  ){
        $this->validate($request,[
            "name"=>"required",
            "tell"=>"required"
        ]);
        StudentModel::find($id)->update($request->all());
        return redirect()->route("stu.index");
    }
    public function store(Request $request){
        $this->validate($request,[
            "name"=>"required",
            "tell"=>"required"
        ]);
        StudentModel::create($request->all());
        return redirect()->route("stu.index");
    }
    public function destroy($id){
        StudentModel::find($id)->delete();
        return redirect()->route("stu.index");
    }
}

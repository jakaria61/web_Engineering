<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
class EmployeeController extends Controller
{
      public function index(){
        $employees =Employee::paginate(3);
        return view('Employee.employee',['employees'=>$employees]);
    }
     public function create(){
        return view('Employee.create');
    }
    public function store(Request $request){
        $employe=new Employee();
        $employe->name=$request->name;
        $employe->job_title=$request->job_title;
        $employe->joining_date=$request->joining_date;
        $employe->salary=$request->salary;
        $employe->email=$request->email;
        $employe->mobile=$request->mobile;
        $employe->address=$request->address;
        $employe->save();
        
        return redirect('/');
    }
     public function edit(Request $request , $id){
        $employe=Employee::where('id',$id)->first();
       return view('Employee.edit',['employe'=>$employe]);
    }
    public function update(Request $request,$id){
        $employe=Employee::where('id',$id)->first();
        $employe->name=$request->name;
        $employe->job_title=$request->job_title;
        $employe->joining_date=$request->joining_date;
        $employe->salary=$request->salary;
        $employe->email=$request->email;
        $employe->mobile=$request->mobile;
        $employe->address=$request->address;
        $employe->save();
        return redirect('/');
    }
      public function destroy($id){
        $book =Employee::where('id',$id)->first();
        $book->delete();
        return redirect('/');
    }
    
}

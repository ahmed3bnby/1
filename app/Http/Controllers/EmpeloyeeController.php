<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Empeloyee;
use Illuminate\Support\Facades\DB;


class EmpeloyeeController extends Controller
{
    public function employees()
    {
        $employees = DB::select("select * from empeloyees");
        return view("empeloyee", compact('employees'));
    }


    public function edit($id){


        $employees = empeloyee::find($id);
        return view("edit", compact('employees'));


    }

    public function update(Request $request,$id)
    {
        $employees = empeloyee::find($id);
        $employees->first_name = $request->input('first_name');
        $employees->last_name = $request->input('last_name');
        $employees->email = $request->input('email');
        $employees->country = $request->input('company');
        $employees->age = $request->input('age');
        $employees->gender = $request->input('gender');
        $employees->update();
        return redirect('/employees');
    }


    public function delete($id)
    {
        $employees = empeloyee::find($id);
        $employees->delete();
        return redirect('/employees')->with('status','data deleted !');
    }
}

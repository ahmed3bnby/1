<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Empeloyee;
use Illuminate\Support\Facades\DB;
use PDO;

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
        return redirect('/employees')->with('edited', 'Employee edited successfully');
    }


    public function delete($id)
    {

        Empeloyee::findorfail($id)->delete();

       //  Empeloyee::destroy($id);

        /*
        $employees = empeloyee::find($id);
        $employees->delete();

        */
        return redirect('/employees')->with('deleted','data deleted !');
    }

public function create()
{
    return view('create');
}



/*
public function store(Request $request)
{
    $request->validate([
        'first_name' => 'required',
        'last_name' => 'required',
        'email' => 'required|email',
        'company' => 'required',
        'street' => 'required',
        'country' => 'required',
        'age' => 'required|numeric',
        'gender' => 'required|in:Male,Female',
    ]);

    Empeloyee::create([
        'first_name' => $request->input('first_name'),
        'last_name' => $request->input('last_name'),
        'email' => $request->input('email'),
        'company' => $request->input('company'),
        'street' => $request->input('street'),
        'country' => $request->input('country'),
        'age' => $request->input('age'),
        'gender' => $request->input('gender'),
    ]);

    return redirect()->route('employees.index')->with('success', 'Employee added successfully');
}
}

*/

public function store(Request $request)
{

     $request->validate([
        'first_name' => 'required',
        'last_name' => 'required',
        'email' => 'required|email',
        'company' => 'required',
        'street' => 'required',
        'country' => 'required',
        'age' => 'required|numeric',
        'gender' => 'required|in:Male,Female',
    ]);


    $employee = new Empeloyee();

    $employee->first_name = $request->input('first_name');
    $employee->last_name = $request->input('last_name');
    $employee->email = $request->input('email');
    $employee->company = $request->input('company');
    $employee->street = $request->input('street');
    $employee->age = $request->input('age');
    $employee->gender = $request->input('gender');

    $employee->save();

    return redirect('/employees')->with('success', 'Employee added successfully');
}
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class UserController extends Controller
{
           function show()
    {
        $data = Student::all();
        return view('main', ['members' => $data]);
    }

    function AddData(Request $req)
    {
        $students = new student();
        $students->Name = $req->Name;
        $students->password = $req->password;
        $students->Date = $req->Date;
        $students->save();

        return redirect('crud');
    }

    function delete($id)
    {

      $data = student::find($id);
      $data->delete();
      return redirect('crud');

    }

   
    function showdata($id)
    {

        $data = student::find($id);
        return view('update', ['data' =>$data]);


    }

    function update(Request $req)
    {
        $data = student::find($id);
        $data->Name = $req->Name;
        $data->password = $req->password;
        $data->Date = $req->Date;
        $data->save();

        return redirect('crud');
    }

    
    function viewrecord($id)
    {

        $data = student::find($id);
        return view('view', ['data' =>$data]);


    }



}



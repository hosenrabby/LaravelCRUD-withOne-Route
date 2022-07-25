<?php

namespace App\Http\Controllers;

use App\Models\userData;
use Illuminate\Http\Request;

class UserDataController extends Controller
{
    public function index()
    {
        $userData = userData::all();
        return view('CRUD.home' , ['passData' => $userData]);
    }
    public function create()
    {
       return view('CRUD.addData');
    }
    public function store(Request $request)
    {
        $userData = $request->all();
        userData::create($userData);
        return redirect('/user-data-information')->with('sucsMsg' , 'Your Data Inserted Successfully !!!');
    }
    public function edit($id)
    {
       $data = userData::find($id);
    //    dd($data);
       return view('CRUD.editData' , ['passData' => $data]);
    }
    public function update(Request $request , $id)
    {
        $findId = userData::find($id);
        // dd($findId);
        $Data = $request->all();
        $findId->update($Data);
        return redirect('/user-data-information')->with('sucsMsg' , 'Your Data Updated Successfully !!!');
    }
    public function destroy($id)
    {
        userData::destroy($id);
        return redirect('/user-data-information')->with('warnMsg' , 'Your Data Deleted !!!');

    }
}

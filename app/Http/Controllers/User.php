<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Result;

class User extends Controller
{
    public function homePage(Request $req){
        return view('home',["data" => result::all()]);
    }

    public function insert(Request $req){
        return view('insert');
    }

    public function insertData(Request $req){
        $req->validate([
            'name'=>'required',
            'roll_code'=>'required',
            'roll_no'=>'required',
            'school'=>'required',
            'city'=>'required',
            'gender'=>'required',
            'math'=>'required',
            'science'=>'required',
            'sst'=>'required',
            'hindi'=>'required',
            'english'=>'required',
        ]);
        result::create([
            'name'=> $req->name,
            'roll_code'=> $req->roll_code,
            'roll_no'=> $req->roll_no,
            'school'=> $req->school,
            'city'=> $req->city,
            'gender'=> $req->gender,
            'math'=> $req->math,
            'science'=> $req->science,
            'sst'=> $req->sst,
            'hindi'=> $req->hindi,
            'english'=> $req->english,
        ]);
        return redirect()->back();
    }
}

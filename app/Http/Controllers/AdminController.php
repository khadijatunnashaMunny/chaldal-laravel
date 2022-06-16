<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    //
    public function Adminhome(){
        return view('Admin.index');
    } 
    public function registerdata(Request $request){
        $user['name'] = $request->name;
        $user['email'] = $request->email;
        $user['password'] = Hash::make($request->password);

        $INS = DB::table('users')->insert($user);
        return Redirect()->back();
       
    }


}

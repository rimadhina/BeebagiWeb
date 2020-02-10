<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    function index(){

        echo "<a class='navbar-brand' href='/users/rima'>Aban pakri</a>";
    }
    function index1(){
        echo "<a class='navbar-brand' href='/users/'>teteh rima</a>";
    }

    public function input()
    {
        return view('input');
    }
 
    public function proses(Request $request)
    {
        echo $request->email;
        echo $request->password;
        return redirect()->route('home');
    }

 
}

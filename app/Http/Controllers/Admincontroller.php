<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Admincontroller extends Controller
{
    //
    public function dashboard(){

        //$data=post::all();
        return view('admin-dashboard');
    }
}

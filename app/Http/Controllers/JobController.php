<?php

namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Auth;
use App\Mail\requestmail;
use Illuminate\Support\Facades\Mail;

class JobController extends Controller
{
    public function job(){

        $data=post::all();
        return view('jobs',compact('data'));
    }

    public function request($user_id){

        $user = DB::table('users')->where('id', $user_id)->get();
        $data = Auth::user()->get();
        
       // $data = [
        //    'name' => $sender->name,
         //   'email' => $sender->email,
            // other data
       // ];
      //  $massage= 'hello';
        Mail::to('manodhyathiwankara1999@gmail.com')->send(new requestmail($data));

        // Redirect back to the previous page
        return redirect()->back()->with('status','Thank you for contact us. We will get back to asap.!');
       // return $sender;
    }
}

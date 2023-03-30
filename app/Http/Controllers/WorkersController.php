<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use DB;
class WorkersController extends Controller
{
    public function returnworkerblade(Request $request){



    $data = DB::table('users')->where('role', 'Worker & User')->get();
    return view('workers',compact('data'));

      //$data = User::all();
     // return view("workers", compact("data"));
    }

    public function search(Request $request){
  /*      // Get the search value from the request
        $search = $request->input('search');

        // Search in the title and body columns from the posts table
        $data = User::query()
            ->where('name', 'LIKE', "%{$search}%")
            ->orWhere('sub_category', 'LIKE', "%{$search}%")
            //->orWhere('location', 'LIKE', "%{$search}%")
           // ->orWhere('category', 'LIKE', "%{$search}%")
            ->get();

        // Return the search view with the resluts compacted
       return view('workers', compact('data'));

       //return 'succss'; */

      // $data = \DB::table('users');
     //  if( $request->input('search')){
       //    $data = $data->where('name', 'LIKE', "%" . $request->search . "%");
    //   }
       //$data = $data->paginate(10);
      // return view('workers', compact('data'));
    //  return $request;

    //$search = $request->search;
//return $request;
       $search = $request->search;
        $data = User::query()
        ->where('name', 'LIKE', "%{$search}%")
        ->orWhere('category', 'LIKE', "%{$search}%")
        ->orWhere('location', 'LIKE', "%{$search}%")
        ->orWhere('sub_category', 'LIKE', "%{$search}%")
        ->get();
        return view('workers', compact('data'));


    }

    public function filter(request $request){

        $fil_category = $request->category;
        $fil_location = $request->location;

        $data = User::query()
        ->orWhere('category', 'LIKE', "%{$fil_category}%")
        ->orWhere('location', 'LIKE', "%{$fil_location}%")
        ->get();
        return view('workers', compact('data'));

       // return $request;

    }

    public function about_us(){

        return view ('aboutus');

    }
}

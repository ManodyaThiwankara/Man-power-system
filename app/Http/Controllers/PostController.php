<?php

namespace App\Http\Controllers;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
//use Illuminate\Http\Request;

class PostController extends Controller
{
    public function postjob(Request $reqpost){

      //  $validatedData = $reqpost->validate([
            //'image' => 'image|mimes:jpg,png,jpeg,gif,svg|max:2048',
    
          // ]);
    
          
    
       //   $path = $reqpost->file('image')->store('public/images/post');
        

        $post =new Post();
        $post->user_id = Auth::id();
        $post->name = $reqpost->name;
        $post->category = $reqpost->category;
        $post->sub_category = $reqpost->sub_category;
        $post->location = $reqpost->location;
        $post->email = $reqpost->email;
        $post->mobile = $reqpost->mobile;
        $post->discription = $reqpost->discription;
       // $post->image = $name;
      //  $post->image = $path;

        
        $post->save();


        return redirect()->back();
        //return view('welcome');

    }

    /*public function myjob(){

        $myjob=Post::where('user_id',Auth::id())->get();
        return view('profile.my-post')->with($myjob);
        //return $myjob;
    }
*/

}

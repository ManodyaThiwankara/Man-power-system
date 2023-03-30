<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Redirect;

class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\View\View
     */
    public function edit(Request $request,)
    {

       // $myjob=Post::where('user_id',Auth::id())->get();// my changing
        
      /*  $posts=Post::where('user_id',Auth::id())->get();

        return view('profile.edit', [
            'posts'=>$posts->posts(),
            'user' => $request->user(),
        ]) ; */

        $user = $request->user();
        $posts = Post::where('user_id', $user->id)->get();
            
        return view('profile.edit', [
            'user' => $user,
            'posts' => $posts
        ]);

    }

    /**
     * Update the user's profile information.
     *
     * @param  \App\Http\Requests\ProfileUpdateRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(ProfileUpdateRequest $request)
    {
        $request->user()->fill($request->validated());

        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }

        $request->user()->save();

        return Redirect::route('profile.edit')->with('status', 'profile-updated');
    }

    /**
     * Delete the user's account.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Request $request)
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current-password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }

   /* public function myjob(){

        $myjob['myjob'] = Auth::user()->posts()->get(); // This will get you all products related to that user
        return view('profile.my-post')->with($myjob);
    }


    public function myjob(){

        $myjob=Post::where('user_id',Auth::id())->get();
        return view('profile', ['myjob'=>$myjob ]);
        //return $myjob;
       // return view('profile.edit',compact('myjob'));
    }*/

   // $data = DB::table('posts')->where('user_id',Auth::user(id))->get();

//return view('workers',compact('data'));


public function myjob_update($id){

    $post = Post::findOrFail($id); 
//return $post;
    return view('update',compact('post'));





   /* $post->name = $request->input('name');
    $post->category = $request->input('category');
    $post->sub_category = $request->input('sub_category');
    $post->location = $request->input('location');
    $post->email = $request->input('email');
    $post->mobile = $request->input('mobile');
    $post->discription = $request->input('discription');
    
    $post->save();*/

 // return redirect()->route('profile.edit')
              //   ->with('success', 'Post updated successfully');
      
  }

  public function store_update (request $request, $id){
   

    $post = Post::find($id);

    $post->name = $request->input('name');
    $post->category = $request->input('category');
    $post->sub_category = $request->input('sub_category');
    $post->location = $request->input('location');
    $post->email = $request->input('email');
    $post->mobile = $request->input('mobile');
    $post->discription = $request->input('discription');
    
    $post->save();
    return redirect()->route('profile.edit')
    ->with('success', 'sucsessfully updated');
  // return $request;
  }

  public function delete_post($id){

        $post = Post::find($id);

        $post->delete();
        return redirect()->route('profile.edit')
        ->with('success', 'sucsessfully updated');

  }

}

<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Comment;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;
use DB;
class CommentController extends Controller
{
    public function comment(Request $request){

//$post=Post::find($id);

        $comment =new Comment();
        $comment->user_id = \Auth::id();
        $comment->post_id = $request->postid;
        $comment->user_name=auth()->user()->name;


            //$comment->user_name=\Auth::name();
//$comment->user_name = $request->comment;
        $comment->comment = $request->comment;
        $comment->save();

           /* $comment = Comment::create([
            'user_id' =>  auth()->id(),
            'post_id' => $request->post_id,
            'comment' => $request->comment,
        ]);*/

//return $comment;
        return redirect()->back();
        //return view('welcome');
    }

    public function showcomment($id){

        $post = Post::findOrFail($id);
       $comment = DB::table('comments')->where('post_id', $id)->get();
       // $post = Post::where('post_id', $post->id)->get();
      //  $comment = Comment::where('post_id', $post->id)->get();
            
        //return $comment ;
      /*  return view('profile.edit', [
            'comment' => $comment,
            'posts' => $posts
        ]);
*/
            // return view('comment', [
            //     'comment' => $comment,
            //     'post' => $post
            // ]);
     
            return view('comment')->with(['comment' => $comment, 'post' => $post]);
    }
}

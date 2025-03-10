<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Comment;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function homePage () {
        $blogs = Blog::all();
        return view('welcome', compact('blogs'));
    }

    public function singleBlog($id)
    {
        $blog = Blog::find($id);
        $comments = Comment::where('blog_id', $id)->get();

        return view('single-blog', compact('blog', 'comments'));
    }


    public function commentPost(Request $request)
    {
        $comment = new Comment();
        $comment->blog_id = $request->blog_id;
        $comment->comment = $request->comment;
        $comment->name = $request->name;
        $comment->save();

        return back();
    }

}

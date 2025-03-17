<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class SettingController extends Controller
{

    public function viewBlog()
    {
        $blogs = Blog::all();
        return view('admin.blogs.blogs', compact('blogs'));
    }


    public function addBlog()
    {
        return view('admin.blogs.blogs-add');
    }

    public function storeBlog(Request $request)
    {


        $imageName = time() . '.png';
        $request->image->move(('admin-assets/images'), $imageName);

        $blog = new Blog();
        $blog->title = $request->title;
        $blog->image = $imageName;
        $blog->dec = $request->dec;
        $blog->cat = $request->cat;
        $blog->save();

        return back();
    }

    public function deleteBlog($id) // $id = 1 dhore naw
    {
        Blog::find($id)->delete();
        return back();
    }


    public function editBlog($id)
    {
        $blog = Blog::find($id);

        return view('admin.blogs.edit-blogs', compact('blog'));
    }

    public function updateSetting(Request $request, $id)
    {
        $blog = Blog::find($id);

        if ($request->image) {
            $imageName = time() . '.png'; // notun nam set kortese
            $request->image->move(('admin-assets/images'), $imageName); // file er maje store kortese

            $blog->image = $imageName; // database a nam ta set kortese
        }

        $blog->title = $request->title;
        $blog->dec = $request->dec;
        $blog->cat = $request->cat;
        $blog->save();

        return redirect('/blog-view');

        // return redirect('/')->with('success', 'Student added successfully');
    }
}

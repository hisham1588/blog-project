<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\SocialLink;
use Illuminate\Http\Request;
class LinkController extends Controller
{

    public function viewLink()
    {
        $socialLinks = SocialLink::all();
        return view('admin.links.links', compact('socialLinks'));
    }


    public function addLink()
    {
        return view('admin.links.links-add');
    }

    public function storeLink(Request $request)
    {


        $imageName = time() . '.png';
        $request->image->move(('admin-assets/images'), $imageName);

        $socialLink = new SocialLink();
        $socialLink->name = $request->name;
        $socialLink->image = $imageName;     
        $socialLink->link = $request->link;
        $socialLink->save();

        return back();
    }

    public function deleteLink($id) // $id = 1 dhore naw
    {
        SocialLink::find($id)->delete(); 
        return back();
    }


    public function editLink($id)
    {
        $link = SocialLink::find($id);

        return view('admin.links.edit-links', compact('link'));
    }

    public function updateLink(Request $request, $id)
    {
        $socialLink = SocialLink::find($id);

        if ($request->image) {
            $imageName = time() . '.png'; // notun nam set kortese
            $request->image->move(('admin-assets/images'), $imageName); // file er maje store kortese

            $socialLink->image = $imageName; // database a nam ta set kortese
        }

        $socialLink->name = $request->name;
        $socialLink->link = $request->link;
        $socialLink->save();

        return redirect('/link-view');

        // return redirect('/')->with('success', 'Student added successfully');
    }
}

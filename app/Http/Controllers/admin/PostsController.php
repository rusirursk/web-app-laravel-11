<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Posts;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function index(){
        $posts = Posts::all();
        return view('admin.posts',compact('posts'));
    }

    public function storepost(Request $request){

        $request->validate([
            'post_title' => 'required',
            'post_slug' => 'required',
            'post_body' => 'required',
            'post_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if($request->hasFile('post_image')){
            $imagePath = $request->file('post_image')->store('posts','public');
        }

        Posts::create([
            'title' => $request->post_title,
            'slug' => $request->post_slug,
            'body' => $request->post_body,
            'image' => $imagePath,
        ]);

        return redirect()->back()->with('success','Post added successfully! ');
    }

    public function updatepost(Request $request){   
        $request->validate([
            'post_title' => 'required',
            'post_slug' => 'required',
            'post_body' => 'required',
        ]);

        if($request->hasFile('post_image')){
            $imagePath = $request->file('post_image')->store('posts','public');
        }   

        $post = Posts::find($request->post_id);
        $post->title = $request->post_title;
        $post->slug = $request->post_slug;
        $post->body = $request->post_body;
        if($request->hasFile('post_image')){
            $post->image = $imagePath;
        }
        $post->save();
        return redirect()->back()->with('success','Post updated successfully! ');
        
    }

    public function deletepost($id){
        $post = Posts::find($id);
        $post->delete();
        return redirect()->back()->with('success','Post deleted successfully! ');
    }
}

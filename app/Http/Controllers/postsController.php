<?php

namespace App\Http\Controllers;


use App\Location;
use App\Post;
use Illuminate\Http\Request;
use App\Admin;
use App\Posts;
use App\User;

class postsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }







    public function showJobLocationForm()
    {
        return view('posts.location');
    }

    public function viewLocation(){
        $location = Post::orderBy('id')->get();
        return view('admin.showLocation')->with('location', $location);
    }


    public function storeLocation(Request $request)
    {
        $this->validate($request, [
            'job_location'=>'required'
        ]);

        $post = new Posts();

        $post->location = $request->input('job_location');
        $post->user_id = $request->input('user_id');
//        $post->user_id = auth()->admin()->id;
        $post->save();

    return redirect('admin/joblocation')->with('success', 'location added');


    }
}

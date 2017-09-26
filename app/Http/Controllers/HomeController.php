<?php

namespace App\Http\Controllers;

use App\Job;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function showJobForm()
    {
        return view('user.jobform');
    }
    public function createjob(Request $request)
    {
        $this->validate($request, [
            'job_title'=>'required',
            'job_description'=>'required'
        ]);

        $job = new Jobs();
        $job->job_title = $request->input('title');
        $job->job_description = $request->input('des');
//        $job->user_id = auth()->user()->id;
        $job->save();

        return redirect('/home')->with('success', 'job added');

    }

}

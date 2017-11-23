<?php

namespace App\Http\Controllers;

use App\Company;
use App\Job;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class FindJobController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
//        $job = Job::orderBy('created_at', 'desc')
//            ->take(20)
//            ->get();
//
//

//
//
//        return view('pages.findjob')->with(['job'=>$job, 'location'=>$jobLocation]);
//

        $jobLocation = Job::where('jobLocation', 'Phnom Penh')->count();

        $job = Job::with('company')->take(20)->get();
        return view('pages.findjob')->with(['job'=>$job, 'location'=>$jobLocation]);

}


//        foreach ($job->company as $com){
//            echo $com->companyName;
//        }

//        $company = Company::orderBy('created_at', 'desc')
//            ->take(20)
//            ->get();
//        return view('pages.findjob')->with('company', $company);



    public function countLocation()
    {
        $jobLocation = Job::where('jobLocation', 'Phnom Penh')->count();
        return $jobLocation;
        //return view('pages.findjob')->with('location', $jobLocation);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

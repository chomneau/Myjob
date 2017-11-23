<?php

namespace App\Http\Controllers;

use App\Company;
use Illuminate\Http\Request;
use App\Job;
use Session;
use Illuminate\Support\Facades\Auth;

class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $company = Company::all();
        return view('admin.job.create-job')->with('company', $company);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id)
    {
        $this->validate($request, [

        //validate for job table
            'jobTitle' => 'required',
            'jobDescription' => 'required',
            'jobRequirement' => 'required',
            'jobContract' => 'required',
            'jobCategory' => 'required',
            'jobSalary' => 'required',
            'jobLocation' => 'required',
            'jobHiring' => 'required',
            'jobDeadLine' => 'required',
        //validate for preferred candidate
             'level' => 'required',
             'degree' => 'required',
             'experience' => 'required',
             'language' => 'required',

        ]);

       // $user = Auth::user();
        $company = Company::find($id);
        $job = new Job();
        $job->jobTitle = $request->jobTitle;
        $job->jobDescription = $request->jobDescription;
        $job->jobRequirement = $request->jobRequirement;
        $job->contractType = $request->jobContract;
        $job->jobCategory = $request->jobCategory;
        $job->salary = $request->jobSalary;
        $job->jobLocation = $request->jobLocation;
        $job->hire = $request->jobHiring;
        $job->deadLine = $request->jobDeadLine;
        $job->level = $request->level;
        $job->degree = $request->degree;
        $job->experience = $request->experience;
        $job->language = $request->language;
        $job->company_id = $company->id;
        $job->save();

        Session::flash('success', 'You have created a new job successfully!');
        return redirect()->route('admin.company.profile', ['id'=>$company->id]);
       // return 123;


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

<?php

namespace App\Http\Controllers;

use App\Company;
use Illuminate\Http\Request;
use App\Job;
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
        return view('admin.job.create-job');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
        //validate for company table
            'companyName' => 'required',
            'contactPerson' => 'required',
            'employeeSize' => 'required',
            'type' => 'required',
            'industryType' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            //'website' => 'required|url',
            'address' => 'required',
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

        $company = new Company();
        $company->companyName = $request->companyName;
        $company->contactPerson = $request->contactPerson;
        $company->employeeSide = $request->employeeSize;
        $company->type = $request->type;
        $company->industryType = $request->industryType;
        $company->email = $request->email;
        $company->phone = $request->phone;
        $company->website = $request->website;
        $company->address = $request->address;
        $company->user_id = auth::user()->id;






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
        $job->user_id = Auth::user()->id;

//        $job->jobTitle = $request->jobTitle;
//        $job->jobDescription = $request->jobDescription;
//        $job->jobRequirement = $request->jobRequirement;
//        $job->contractType = $request->jobContract;
//        $job->jobCategory = $request->jobCategory;
//        $job->salary = $request->jobSalary;
//        $job->jobLocation = $request->jobLocation;
//        $job->hire = $request->jobHiring;
//        $job->deadLine = $request->jobDeadLine;
//        $job->user_id = Auth::user()->id;



        $job->save();

        return redirect('admin');


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

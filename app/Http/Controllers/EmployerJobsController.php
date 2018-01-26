<?php

namespace App\Http\Controllers;

use App\Company;
use Illuminate\Http\Request;
use App\Job;
use Session;
use View;
use Illuminate\Support\Facades\Auth;

use App\Category;

use App\CompanyType;

use App\ContractType;
use App\Degree;
use App\EmployeeNumber;
use App\IndustryType;
use App\Level;
use App\Location;
use App\Note;
use App\PreferredExperience;
use App\SalaryRange;

class EmployerJobsController extends Controller
{
    public function __construct()
    {

        //  $this->middleware('auth:admin');
        $this->middleware('auth:employer');

        $this->category = Category::all();
        View::share('category', $this->category);

        $this->industryType = IndustryType::all();
        View::share('industryType', $this->industryType);

        $this->location = Location::all();
        View::share('location', $this->location);

        $this->companyType = companyType::all();
        View::share('companyType', $this->companyType);

        $this->employeeSize = EmployeeNumber::all();
        View::share('employeeSize', $this->employeeSize);

        $this->contractType = ContractType::all();
        View::share('contractType', $this->contractType);

        $this->salaryRange = SalaryRange::orderBy('name', 'Asc')->get();
        View::share('salaryRange', $this->salaryRange);

        $this->level = Level::all();
        View::share('level', $this->level);

        $this->degree = Degree::all();
        View::share('degree', $this->degree);

        $this->preExperience = PreferredExperience::all();
        View::share('preExperience', $this->preExperience);

    }




    public function create(Request $request)
    {
        $company = Company::find($request->id);
        $job = Job::all();
        return view('employer.jobs.create-job')->with(['job' => $job, 'company'=>$company]);
    }
}

<?php

namespace App\Http\Controllers;

use App\Company;
use App\Note;
use Illuminate\Http\Request;
use Session;
use Auth;

class CompanyController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $company = Company::orderBy('created_at', 'desc')
            ->take(10)
            ->get();
        return view('admin.company.view-all-company')->with('company', $company);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.company.create-company');
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
            'location' => 'required',
            //'website' => 'required|url',
            'address' => 'required'
        ]);

        //$user = Auth::user();
        $company = new Company();
        //upload image for user

        $company->companyName = $request->companyName;
        $company->contactPerson = $request->contactPerson;
        $company->employeeSize = $request->employeeSize;
        $company->type = $request->type;
        $company->industryType = $request->industryType;
        $company->email = $request->email;
        $company->phone = $request->phone;
        $company->location = $request->location;
        $company->website = $request->website;
        $company->address = $request->address;
        $company->about = $request->about;
        $company->user_id = auth::user()->id;
        $company->save();

        if($request->hasFile('logo'))
        {
            $logo = $request->logo;
            $logo_new_name = time().$logo->getClientOriginalName();
            $logo->move('uploads/logos', $logo_new_name);
            $company->logo = 'uploads/logos/'.$logo_new_name;
            $company->save();
        }

        Session::flash('success', 'You successfully updated your profile');
        return redirect('admin/company');
//    $com = Company::all();
//        return dd($com);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {


       // $user = Auth::user();
        $company = Company::find($id);
        return view('admin.company.company-profile')
            ->with(['company'=>$company, 'note'=>$company->note, 'jobPost'=>$company->job]);
     //  return view('admin.company.company-profile')->with('company', $company);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $company = Company::find($id);
        return view('admin.company.edit-company')->with('company', $company);
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
        $this->validate($request, [
            //validate for company table
            'companyName' => 'required',
            'contactPerson' => 'required',
            'employeeSize' => 'required',
            'type' => 'required',
            'industryType' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'location' => 'required',
            //'website' => 'required|url',
            'address' => 'required'
        ]);

        //$user = Auth::user();
        $company = Company::find($id);
        //upload image for user

        $company->companyName = $request->companyName;
        $company->contactPerson = $request->contactPerson;
        $company->employeeSize = $request->employeeSize;
        $company->type = $request->type;
        $company->industryType = $request->industryType;
        $company->email = $request->email;
        $company->phone = $request->phone;
        $company->location = $request->location;
        $company->website = $request->website;
        $company->address = $request->address;
        $company->about = $request->about;
        $company->user_id = auth::user()->id;
        $company->save();

        if($request->hasFile('logo'))
        {
            $logo = $request->logo;
            $logo_new_name = time().$logo->getClientOriginalName();
            $logo->move('uploads/logos', $logo_new_name);
            $company->logo = 'uploads/logos/'.$logo_new_name;
            $company->save();
        }

        Session::flash('success', 'You successfully updated your profile');
        return redirect()->route('admin.company.profile', ['id'=>$company->id]);
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

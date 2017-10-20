<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use App\Profile;
use Auth;


class ProfileController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('user.profile');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user.profile');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        //return 123;
        $this->validate($request, [
            'first_Name' => 'required|max:255',
            'last_Name' => 'required|max:255',
            'sex' => 'required',
            'email' => 'required|email',
            'date_of_birth' => 'required|max:255',
            'phone' => 'required|number',
            'location' => 'required',
            'about_me' => 'required',
        ]);

        $userprofile = new Profile();

        $userprofile->first_name = $request->input('firstName');
        $userprofile->last_name = $request->input('lastName');
        $userprofile->sex = $request->input('sex');
        $userprofile->DateOfBirth = $request->input('dateofbirth');
        $userprofile->email = $request->input('email');
        $userprofile->phone = $request->input('phone');
        $userprofile->address = $request->input('address');
        $userprofile->location = $request->input('location');
        $userprofile->bio = $request->input('about_me');
        $userprofile->user_id = auth()->user()->id;

        $userprofile->save();

        return redirect('user/profile')->with('success', 'your profile is updated!');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {

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

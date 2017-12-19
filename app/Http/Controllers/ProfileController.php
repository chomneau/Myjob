<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use App\Profile;
use Auth;
use Session;


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

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        //return 12345;
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
    public function update(Request $request)
    {
        $this->validate($request, [
            'firstName' => 'required|max:255',
            'lastName' => 'required|max:255',
            'sex' => 'required',
            'email' => 'required|email',
            'date_of_birth' => 'required',
            'phone' => 'required',
            'location' => 'required'

        ]);

        $user = Auth::user();
        //upload image for user
        if($request->hasFile('avatar'))
        {
            $avatar = $request->avatar;
            $avatar_new_name = time().$avatar->getClientOriginalName();
            $avatar->move('uploads/avatar', $avatar_new_name);
            $user->profile->avatar = 'uploads/avatar/'.$avatar_new_name;
            $user->profile->save();
        }


        $user->email = $request->email;
        $user->name = $request->firstName;

        $user->profile->first_name = $request->firstName;
        $user->profile->last_name = $request->lastName;
        $user->profile->sex = $request->sex;
        $user->profile->date_of_birth = $request->date_of_birth;
        $user->profile->phone = $request->phone;
        $user->profile->address = $request->address;
        $user->profile->location = $request->location;
        $user->profile->bio = $request->bio;
        $user->profile->user_id = auth()->user()->id;


        $user->save();
        $user->profile->save();

        if($request->has('password'))
        {
            $user->password = bcrypt($request->password);
            $user->save();
        }

        Session::flash('success', 'You successfully updated your profile');

        return redirect('home');

          //  return 12345;
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

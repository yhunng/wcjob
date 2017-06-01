<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Location;
use App\Contact;
use App\Employer;

class EmployersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        $employer = $user->employer;
        $location = $employer->location;
        $contact = $employer->contact;

        return view('employer.index',compact('employer', 'location', 'contact'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('employer.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = Auth::user();
        $employer = new Employer;
        $employer->name = $request->name;
        $employer->description = $request->description;
        $employer->website = $request->website;
        $employer->slug = str_slug($request->name, '-');
        $employer->status = 'unapproved';
        $employer->save();

        $employer = $user->employer;
        $employer->location->create($request->location);

        $data = array('email' => $request->email,
                      'phone' => $request->phone,
                      'linkedin' => $request->linkedin,
                      'facebook' => $request->facebook,
                    );
        $contact = $employer->contact->create($data);

        return redirect()->route('employer.profile')->with('message', "Profile Updated Successfully");

    }

    public function profile()
    {
        $user = Auth::user();
        $employer = $user->employer;
        $location = $employer->location;
        $contact = $employer->contact;

        return view('employer.index',compact('employer', 'location', 'contact'));
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

<?php

namespace App\Http\Controllers;

use App\Models\applicant;
use App\Http\Requests\StoreapplicantRequest;
use App\Http\Requests\UpdateapplicantRequest;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class ApplicantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // dd('hello there new applicant!');//debugging process...
        $applicants = applicant::all();
        return view('applicants.index', compact('applicants'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('applicants.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreapplicantRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Validate the form data

        $loggedUser = Auth::user();
        // dd($request); //for debugging...
        //logic save to db
        $applicant = new applicant();
        $applicant->name = $request->name;
        $applicant->address = $request->address;
        $applicant->user_id = Auth::user()->id;
        $applicant->due_date = $request->due_date;
        $applicant->created_at = Carbon::now();
        // $todolist->created_by = Auth::user()->id;
        $todolist->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\applicant  $applicant
     * @return \Illuminate\Http\Response
     */
    public function show(applicant $applicant)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\applicant  $applicant
     * @return \Illuminate\Http\Response
     */
    public function edit(applicant $applicant)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateapplicantRequest  $request
     * @param  \App\Models\applicant  $applicant
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateapplicantRequest $request, applicant $applicant)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\applicant  $applicant
     * @return \Illuminate\Http\Response
     */
    public function destroy(applicant $applicant)
    {
        //
    }

}

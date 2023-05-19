<?php

namespace App\Http\Controllers;

use App\Models\academic;
use App\Http\Requests\StoreacademicRequest;
use App\Http\Requests\UpdateacademicRequest;

class AcademicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreacademicRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreacademicRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\academic  $academic
     * @return \Illuminate\Http\Response
     */
    public function show(academic $academic)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\academic  $academic
     * @return \Illuminate\Http\Response
     */
    public function edit(academic $academic)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateacademicRequest  $request
     * @param  \App\Models\academic  $academic
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateacademicRequest $request, academic $academic)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\academic  $academic
     * @return \Illuminate\Http\Response
     */
    public function destroy(academic $academic)
    {
        //
    }
}

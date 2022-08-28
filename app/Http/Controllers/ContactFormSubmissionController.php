<?php

namespace App\Http\Controllers;

use App\Models\ContactFormSubmission;
use Illuminate\Http\Request;

class ContactFormSubmissionController extends Controller
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $sr = new ContactFormSubmission;
        $sr->phone = $request->input("phone");
        $sr->first_name = $request->input("first_name");
        $sr->last_name = $request->input("last_name");
        $sr->email = $request->input("email");
        $sr->street_address = $request->input("street_address");
        $sr->city = $request->input("city");
        $sr->message = $request->input("message");
        return $sr->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ContactFormSubmission  $contactFormSubmission
     * @return \Illuminate\Http\Response
     */
    public function show(ContactFormSubmission $contactFormSubmission)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ContactFormSubmission  $contactFormSubmission
     * @return \Illuminate\Http\Response
     */
    public function edit(ContactFormSubmission $contactFormSubmission)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ContactFormSubmission  $contactFormSubmission
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ContactFormSubmission $contactFormSubmission)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ContactFormSubmission  $contactFormSubmission
     * @return \Illuminate\Http\Response
     */
    public function destroy(ContactFormSubmission $contactFormSubmission)
    {
        //
    }
}

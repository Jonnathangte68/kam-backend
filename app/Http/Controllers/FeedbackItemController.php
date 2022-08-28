<?php

namespace App\Http\Controllers;

use App\Models\FeedbackItem;
use Illuminate\Http\Request;

class FeedbackItemController extends Controller
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
        $sr = new FeedbackItem;
        $sr->name = $request->input("name");
        $sr->message = $request->input("message");
        return $sr->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\FeedbackItem  $feedbackItem
     * @return \Illuminate\Http\Response
     */
    public function show(FeedbackItem $feedbackItem)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FeedbackItem  $feedbackItem
     * @return \Illuminate\Http\Response
     */
    public function edit(FeedbackItem $feedbackItem)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\FeedbackItem  $feedbackItem
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, FeedbackItem $feedbackItem)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\FeedbackItem  $feedbackItem
     * @return \Illuminate\Http\Response
     */
    public function destroy(FeedbackItem $feedbackItem)
    {
        //
    }
}

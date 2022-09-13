<?php

namespace App\Http\Controllers;

use App\Models\Subategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class SubategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Subategory::with('category')->get();
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
        $sc = new Subategory;
        $sc->title = $request->input("title");
        $sc->type  = $request->input("type");
        $sc->description = $request->input("description");
        $sc->additionalservices = json_encode($request->input("additionalservices"));
        $sc->price = $request->input("price");
        $sc->image = $request->input("image");
        $sc->order = $request->input("order");
        $sc->category_id = $request->input("category");
        return $sc->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Subategory  $subategory
     * @return \Illuminate\Http\Response
     */
    public function show(Subategory $subategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Subategory  $subategory
     * @return \Illuminate\Http\Response
     */
    public function edit(Subategory $subategory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Subategory  $subategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Subategory $subategory)
    {
        Log::info("on update");
        Log::info($request->input("title"));
        $sc = Subategory::find($request->input("id"));
        $sc->title = $request->input("title");
        $sc->type  = $request->input("type");
        $sc->description = $request->input("description");
        $sc->additionalservices = json_encode($request->input("additionalservices"));
        $sc->price = $request->input("price");
        $sc->image = $request->input("image");
        $sc->order = $request->input("order");
        $sc->category_id = $request->input("category");
        return $sc->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Subategory  $subategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(Subategory $subategory, Request $request)
    {
        Log::info("DEL SUB.");
        $category = Subategory::find($request->deleteId);
        Log::info(json_encode($category));
        $category->services()->delete();
        return $category->delete();
    }
}

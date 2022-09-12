<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Subategory;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Category::all();
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
        $sc = new Category;
        $sc->title = $request->input("title");
        $sc->type = $request->input("type");
        $sc->image = $request->input("image");
        $sc->order = $request->input("order");
        return $sc->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        Log::info("on update");
        Log::info($request->input("title"));
        $sc = Category::find($request->input("id"));
        $sc->title = $request->input("title");
        $sc->type = $request->input("type");
        $sc->image = $request->input("image");
        $sc->order = $request->input("order");
        return $sc->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        //
    }

    public function getCategoriesCombined()
    {
        $result = [];
        $categories = Category::all();
        $categories = $categories->toArray();
        foreach($categories as $category) {
            if (!in_array($category["title"], $categories) && $category["title"]) {
                $result[] = array("name" => $category["title"], "type" => "category");
            }
        }

        return json_encode($result);

        // $subcategories = Subategory::all();
        // $subcategories = $subcategories->toArray();
        // foreach($subcategories as $subcategory) {
        //     if (!in_array($subcategory["type"], $subcategories) 
        //         && !in_array($subcategory["type"], $categories)
        //         && $subcategory["type"]
        //     ) {
        //         $result[] = array("name" => $subcategory["type"], "type" => "subcategory");
        //     }
        // }

        // $services = Service::all();
        // $services = $services->toArray();
        // foreach($services as $service) {
        //     if (!in_array($service["type"], $services) && $service["type"]) {
        //         $result[] = array("name" => $service["type"], "type" => "service");
        //     }
        // }
        // return json_encode($result);
    }
}

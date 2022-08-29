<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Service::with("subategory")->get();
    }

    public function getByCategory($category_id)
    {
        if ($category_id) {
            $result = array();
            $category = Category::find($category_id);
            foreach ($category->subategories()->get() as $sc) {
                $result[] = [
                    'subcategory' => $sc,
                    'services' => $sc->services()->get()
                ];
            }
            return json_encode($result);
        }
        return []; 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $sc = new Service;
        $sc->title = $request->input("title");
        $sc->image = $request->input("image");
        $sc->order = $request->input("order");
        $sc->description = $request->input("description");
        $sc->price = $request->input("price");
        $sc->subategory_id = $request->input("subcategory");
        return $sc->save();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Service $service = null)
    {
        Log::info("on update");
        Log::info($request->input("title"));
        $sc = Service::find($request->input("id"));
        $sc->title = $request->input("title");
        $sc->image = $request->input("image");
        $sc->description = $request->input("description");
        $sc->price = $request->input("price");
        // $sc->order = $request->input("order");
        $sc->subategory_id = $request->input("subcategory");
        return $sc->save();
    }
}

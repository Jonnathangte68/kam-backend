<?php

namespace App\Http\Controllers;

use App\Models\ServiceRequest;
use Illuminate\Http\Request;

class ServiceRequestController extends Controller
{

    public function index()
    {
        return ServiceRequest::all();
    }

    public function store(Request $request)
    {
        $sr = new ServiceRequest;
        $sr->phone = $request->input("phone");
        $sr->date = $request->input("date");
        $sr->time = $request->input("time");
        $sr->first_name = $request->input("first_name");
        $sr->last_name = $request->input("last_name");
        $sr->customer_phone = $request->input("customer_phone");
        $sr->email = $request->input("email");
        $sr->street_address = $request->input("street_address");
        $sr->apartment_no = $request->input("apartment_no");
        $sr->city = $request->input("city");
        $sr->message = $request->input("message");
        return $sr->save();
    }
}

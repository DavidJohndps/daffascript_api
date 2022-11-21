<?php

namespace App\Http\Controllers;

use App\Models\Contact_us;
use Illuminate\Http\Request;

class ContactUsController extends Controller
{
    public function index() 
    {
        $contact_us = Contact_us::orderBy('id','desc')->get();

        return response()->json(['data' => $contact_us], 200);
    }

    public function create(Request $request) 
    {
        $contact_us = new Contact_us;
        $contact_us->name_customer = $request->name_customer;
        $contact_us->email = $request->email;
        $contact_us->no_telp = $request->no_telp;
        $contact_us->name_company = $request->name_company;
        // $contact_us->desc = $request->desc; 
        $contact_us->save();

        return response()->json(['data' => $contact_us], 200);
    }

    public function update(Request $request, $id)
    {
        $contact_us = Contact_us::find($id);
        $contact_us->name_customer = $request->name_customer;
        $contact_us->email = $request->email;
        $contact_us->no_telp = $request->no_telp;
        $contact_us->name_company = $request->name_company;
        $contact_us->desc = $request->desc; 
        $contact_us->save();

        return response()->json(['data' => $contact_us], 200);
    }

    public function getByid($id)
    {
        $contact_us = Contact_us::find($id);
        return response()->json(['data' => $contact_us], 200);
    }

    public function destroy(Request $request) 
    {
        dd($request);
        $contact_us = Contact_us::find($request->id);
        $contact_us->delete();

        return response()->json(['data' => $contact_us], 200);
    }
}

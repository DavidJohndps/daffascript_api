<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
    {
        $service = Service::all();

        return response()->json(['services'=> $service], 200);
    }
    public function create(Request $request)
    {
        $service = new Service;
        $service->name = $request->name;
        $service->desc = $request->desc;
        $service->save();

        return response()->json(['services' => $service], 200);
    }
    public function destroy(Request $request)
    {
        $service = Service::find($request->id);
        $service->delete();

        return response()->json(['services' => $service], 200);
    }
}

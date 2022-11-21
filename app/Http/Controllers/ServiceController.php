<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
    {
        $service = Service::all();

        return response()->json(['data'=> $service], 200);
    }
    public function create(Request $request)
    {
        $service = new Service;
        $service->name = $request->name;
        $service->desc = json_encode($request->desc);
        $service->save();

        return response()->json(['data' => $service], 200);
    }

    public function update(Request $request, $id)
    {
        $service = Service::find($id);
        $service->name = $request->name;
        $service->desc = json_encode($request->desc);
        $service->save();

        return response()->json(['data' => $service], 200);
    }

    public function getByid($id)
    {
        $service = Service::find($id);

        return response()->json(['data' => $service], 200);
    }

    public function destroy(Request $request)
    {
        $service = Service::find($request->id);
        $service->delete();

        return response()->json(['data' => $service], 200);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Accomplishment;

class AccomplishmentController extends Controller
{
    //

    public function index() {
        $data = Accomplishment::all();

        return response()->json(['accomplishments'=> $data], 200);
    }

    public function create(Request $request) {
        $data = new Accomplishment;
        $data->no_completed_projects = $request->no_completed_projects;
        $data->rating = $request->rating;
        $data->save();

        return response()->json(['accomplishments' => $data], 200);
    }

    public function update(Request $request) {
        $data = Accomplishment::find($request->id);
        $data->no_completed_projects = $request->no_completed_projects;
        $data->rating = $request->rating;
        $data->save();

        return response()->json(['accomplishments' => $data], 200);
    }

    public function destroy(Request $request) {
        $data = Accomplishment::find($request->id);
        $data->delete();

        return response()->json(['accomplishments'=> $data],200);
    }
}

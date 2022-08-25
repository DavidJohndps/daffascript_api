<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Models\work;

class WorkController extends Controller
{
    //
    public function index(){
        $work = work::all();

        return response()->json(['work' => $work], 200);

    }

    public function create(Request $request){
        $work = new work;
        $work->name = $request->name;
        $work->name_company = $request->name_company;
        $work->img = $request->img;
        $work->desc = $request->desc;
        $work->link = $request->link;
        $work->save();

        return response()->json(['work' => $work], 200);

    }

    public function update(Request $request){
        $work = work::find($request->id);
        $work->name = $request->name;
        $work->name_company = $request->name_company;
        $work->img = $request->img;
        $work->desc = $request->desc;
        $work->link = $request->link;
        $work->save();

        return response()->json(['work' => $work], 200);

    }

    public function destroy(Request $request){
        $work = work::find($request->id);
        $work->delete();

        return response()->json(['work' => $work], 200);
    }

}

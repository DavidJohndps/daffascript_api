<?php

namespace App\Http\Controllers;

use app\Models\Team;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    //
    public function index()
    {
        $team = Team::all();
        return response()->json(['teams'=> $team], 200);
    }

    public function create(Request $request)
    {
        $team = new Team;
        $team->name = $request->name;
        $team->name_company = $request->name_company;
        if($request->file('img')){
            $file= $request->file('img');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file-> move(public_path('assets/team/img'), $filename);
            $team->img= $filename;

            $team->save();

        return response()->json(['teams' => $team], 200);
        }
    }

    public function update(Request $request, $id)
    {
        $team = Team::find($id);
        if($request->file('img')){
            $file= $request->file('img');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file-> move(public_path('assets/team/img'), $filename);
            $team->img= $filename;

            $team->save();

        return response()->json(['teams' => $team], 200);
        }
    }

    public function getByid(Request $request)
    {
        $team = Team::find($request->id);
        return response()->json(['teams' => $team], 200);
    }

    public function destroy(Request $request)
    {
        $team = Team::find($request->id);
        $team->delete();

        return response()->json(['teams' => $team], 200);
    }
}

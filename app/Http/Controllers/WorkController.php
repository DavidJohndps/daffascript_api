<?php

namespace App\Http\Controllers;

use App\Models\Work;
use Illuminate\Http\Request;

class WorkController extends Controller
{
    //
    public function index(){
        $work = Work::all();
        return response()->json(['data'=> $work], 200);

    }

    public function create(Request $request){
        $work = new Work;
        $work->name = $request->name;
        if($request->file('img')){
            $file= $request->file('img');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file-> move(public_path('assets/work/img'), $filename);
            $work->img= $filename;
        }
        if($request->file('logo')){
            $file= $request->file('logo');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file-> move(public_path('assets/work/logo'), $filename);
            $work->logo= $filename;
        }

        $work->save();

        return response()->json(['data' => $work], 200);

    }

    public function update(Request $request, $id){
        $work = Work::find($id);
        $work->name = $request->name;
        if($request->file('img')){
            $file= $request->file('img');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file-> move(public_path('assets/work/img'), $filename);
            $work->img= $filename;
        }
        if($request->file('logo')){
            $file= $request->file('logo');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file-> move(public_path('assets/work/logo'), $filename);
            $work->logo= $filename;
        }

        $work->save();

        return response()->json(['data' => $work], 200);

    }

    public function getById($id){
        $work = Work::find($id);

        return response()->json(['data' => $work], 200);
    }

    public function destroy($id){
        $work = Work::find($id);
        $work->delete();

        return response()->json(['data' => $work], 200);
    }
}

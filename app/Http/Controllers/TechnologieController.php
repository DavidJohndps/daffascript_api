<?php

namespace App\Http\Controllers;

use App\Models\Technologie;
use Illuminate\Http\Request;

class TechnologieController extends Controller
{
    //
    public function index()
    {
        $technologie = Technologie::all();
        return response()->json(['technologies'=>$technologie], 200);
    }

    public function create(Request $request)
    {
        $technologie = new Technologie;
        $technologie->name = $request->name;
        if($request->file('img')){
            $file= $request->file('img');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file-> move(public_path('assets/technologie/img'), $filename);
            $technologie->img= $filename;
        }

        return response()->json(['technologies'=>$technologie], 200);
    }

    public function update(Request $request, $id)
    {
        $technologie = Technologie::find($id);
        $technologie->name = $request->name;
        if($request->file('img')){
            $file= $request->file('img');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file-> move(public_path('assets/technologie/img'), $filename);
            $technologie->img= $filename;
        }
        
        $technologie->save();

        return response()->json(['technologies'=>$technologie], 200);
    }

    public function getByid($id)
    {
        $technologie = Technologie::find($id);

        return response()->json(['technologies'=>$technologie], 200);
    }

    public function destroy($id)
    {
    $technologie = Technologie::find($id);
    $technologie->delete();

    return response()->json(['technologies'=>$technologie], 200);
    }
}

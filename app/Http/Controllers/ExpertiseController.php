<?php

namespace App\Http\Controllers;

use app\Models\Expertise;
use Illuminate\Http\Request;

class ExpertiseController extends Controller
{
    //
    public function index()
    {
        $expertise = Expertise::all();
        return response()->json(['expertises'=>$expertise], 200);
    }

    public function create(Request $request)
    {
        $expertise = new Expertise;
        $expertise->name = $request->name;
        if($request->file('img')){
            $file= $request->file('img');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file-> move(public_path('assets/expertise/img'), $filename);
            $expertise->img= $filename;
        }
        $expertise->desc = $request->desc;

        $expertise->save();
        
        return response()->json(['experties' => $expertise], 200);
    }

    public function update (Request $request, $id)
    {
        $expertise = Expertise::find($id);
        $expertise->name = $request->name;
        if($request->file('img')){
            $file= $request->file('img');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file-> move(public_path('assets/expertise/img'), $filename);
            $expertise->img= $filename;
        }
        $expertise->desc = $request->desc;

        $expertise->save();

        return response()->json(['expertises' => $expertise], 200);
    }

    public function getByid ($id)
    {
        $expertise = Expertise::find($id);
        return response()->json(['expertises' => $expertise], 200);
    }

    public function destroy ($id)
    {
        $expertise = Expertise::find($id);
        $expertise->delete();

        return response()->json(['expertises' => $expertise], 200);

    }
}

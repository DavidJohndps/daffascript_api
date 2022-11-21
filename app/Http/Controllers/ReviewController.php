<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function index()
    {
        $review = Review::all();

        return response()->json(['data' => $review], 200);
    }
    public function create(Request $request)
    {
        $review = new Review();
        $review->name = $request->name;
        $review->name_company = $request->name_company;
        if ($request->file('img')) {
            $file = $request->file('img');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('assets/review/img'), $filename);
            $review->img = $filename;
        }
        $review->desc = $request->desc;
        $review->save();

        return response()->json(['data' => $review], 200);
    }
    public function update(Request $request)
    {
        $review = Review::find($request->id);
        $review->name = $request->name;
        $review->name_company = $request->name_company;
        if ($request->file('img')) {
            $file = $request->file('img');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('assets/review/img'), $filename);
            $review->img = $filename;
        }
        $review->desc = $request->desc;
        $review->save();

        return response()->json(['data' => $review], 200);
    }
    public function getByid(Request $request)
    {
        $review = Review::find($request->id);

        return response()->json(['data' => $review], 200);
    }
    public function destroy(Request $request)
    {
        $review = Review::find($request->id);
        $review->delete();

        return response()->json(['data' => $review], 200);
    }
}

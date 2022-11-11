<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function index()
    {
        $review = Review::all();

        return response()->json(['reviews'=> $review], 200);
    }
    public function create(Request $request)
    {
        $review = new Review;
        $review->name = $request->name;
        $review->rating = $request->rating;
        $review->desc = $request->desc;
        $review->save();

        return response()->json(['reviews'=> $review], 200);
    }
    public function update(Request $request)
    {
        $review = Review::find($request->id);
        $review->name = $request->name;
        $review->rating = $request->rating;
        $review->desc = $request->desc;
        $review->save();

        return response()->json(['reviews' => $review], 200);
    }
    public function getByid(Request $request)
    {
        $review = Review::find($request->id);

        return response()->json(['reviews'=> $review], 200);
    }
    public function destroy(Request $request)
    {
        $review = Review::find($request->id);
        $reviwe->delete();

        return response()->json(['reviews'=> $review], 200);
    }
}

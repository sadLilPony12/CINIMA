<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;
use Response;

class MovieController extends Controller
{
    public function index(Request $request){
        $movies=Movie::all();
        return response()->json($movies);
    }

    public function find($movies){
        return $movies=Movie::whereUserId($movies)->first();
    }

    public function list(){
        $movies=Movie::whereNull('deleted_at')
                        ->whereNotIn('id',[1])
                        ->get();
        return response()->json($movies);
    }
        
    public function save(Request $request){
        $movies=Movie::create ($request->all());
        return Response::json($movies, 200);
    }

    public function update(Request $request, Movie $movies){
        $movies->update($request->all());
        return Response::json($movies, 201);
    }

    public function destroy(Movie $movies){
        $movies->deleted_at = now();
        $movies->update();
        return response()->json(array('success'=>true));
    }
}

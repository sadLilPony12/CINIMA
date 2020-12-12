<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;
use Response, Carbon\Carbon;

class MovieController extends Controller
{
    public function index(Request $request){
        $movies=Movie::all();
        return response()->json($movies);
    }

    public function find($movies){
        return $movies=Movie::whereUserId($movies)->first();
    }

    public function expired(){
        return $movies=Movie::whereDate('ending_at', '<', Carbon::today()->toDateString())
                            ->get();
    }

    public function showing(){
        return $movies=Movie::whereDate('showing_at', '<=', Carbon::today()->toDateString())
                            ->whereDate('ending_at', '>=', Carbon::today()->toDateString())
                            ->limit(4)
                            ->get();
    }

    public function coming_soon(){
        return $movies=Movie::whereDate('showing_at', '>', Carbon::today()->toDateString())
                            ->limit(4)
                            ->get();
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

<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use App\Models\Movie;
use Illuminate\Http\Request;
use Response;

class GenreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $genres=Genre::all();
        return response()->json($genres);
    }
    public function movies(Request $request){
        $genres=Genre::with('movies')
                        ->where('name', 'like', "%{$request->key}%")
                        ->get();
        return response()->json($genres);
    }
    public function list(){
        $genres=Genre::all();
        return response()->json($genres);
    }    
}

<?php

namespace App\Http\Controllers;

use App\Models\Seat;
use Illuminate\Http\Request;
use Response;

class SeatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function save(Request $request)
    {
        // return $request;
        $seat_position = explode(",",$request->seat_position);
        // return (count($seat_position)/4)/2;
        $count = (count($seat_position)/4)/2;
        // return $seat_position;
        $add = 0;
        for ($i=0; $i < $count; $i++) { 
            $seat=Seat::create([
                'movie_id'=>$request->movie_id,
                'user_id'=>$request->user_id,
                'seat_type'=>$request->seat_type,
                'seat_column'=>$seat_position[3+$add],
                'seat_row'=>$seat_position[2+$add],
                'view_date'=>$request->view_date,
                'total_price'=>$request->total_price,
                'view_time'=>$request->view_time,
            ]);
            $add += 8;
        }

        
        return Response::json($seat, 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Seat  $seat
     * @return \Illuminate\Http\Response
     */
    public function reserve(Request $request)
    {
        // return $request;

        $seat_position = explode(",",$request->type);
        $count = (count($seat_position)/4)/2;
        $add = 0;
        for ($i=0; $i < $count; $i++) { 
            $seat = Seat::whereSeatType($seat_position[0+$add].','.$seat_position[1+$add])
                ->whereViewTime($request->time)
                ->whereViewDate($request->date)
                ->whereSeatRow($seat_position[2+$add])
                ->whereSeatColumn($seat_position[3+$add])
                ->get();
            $add += 8;
        }
        
        return $seat;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Seat  $seat
     * @return \Illuminate\Http\Response
     */
    public function edit(Seat $seat)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Seat  $seat
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Seat $seat)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Seat  $seat
     * @return \Illuminate\Http\Response
     */
    public function destroy(Seat $seat)
    {
        //
    }
}

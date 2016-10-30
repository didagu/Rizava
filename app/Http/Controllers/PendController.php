<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Event;

use App\Http\Requests;

class PendController extends Controller
{
    function __construct(){
        $this->middleware("auth");
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function index()
     {
        // Getting only pending data from the database
        $bookings = Event::where("pend_id",1)->where("accept_id",null)->where("cancel_id",null)->get();
        // return $bookings;
        // Initial test section
        // $bookings = Event::all();
        // $a = [];
        foreach($bookings as $booking){
          $this->accessor($booking);
        //
        //   if($booking->pend_id == 1 and ($booking->accept_id == null and $booking->cancel_id == null)){
        //     $a[] = $booking;
          // }
        }

        return view("admin.pend")->with("bookings",$bookings);
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

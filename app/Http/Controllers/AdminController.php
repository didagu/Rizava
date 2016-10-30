<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Carbon\Carbon;

use App\Event;

use App\Http\Requests;

class AdminController extends Controller
{
    function __construct(){
      $this->middleware("auth");
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
      // Main dashborad statistics
      // Pending Events count
      $a = Event::where("pend_id",1)->where("accept_id",null)->where("cancel_id",null)->count();
      // return $a;
      // Accepted Events count
      $b = Event::where("accept_id",1)->where("cancel_id",null)->count();
      // return $b;
      // Cancelled Events count
      $c = Event::where("cancel_id",1)->count();
      // return $c;


      // Section is where we initially tried the count with the regular php logic
      // $a = 0;
      // $b = 0;
      // $c = 0;
      // foreach($bookings as $booking){
      //   if($booking->pend_id == 1 and ($booking->accept_id == null and $booking->cancel_id == null)){
      //     $a += 1;
      //   }
      //   else if($booking->accept_id == 1 and $booking->cancel_id == null){
      //     $b += 1;
      //   }
      //   else if($booking->cancel_id == 1){
      //     $c += 1;
      //   }
      // }
      return view("admin.dashboard", compact("a","b","c"));
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
        $booking = Event::find($id);

        $this->accessor($booking);

        return $booking;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        $booking = Event::find($id);
        $booking->accept_id = 1;

        $booking->save();
        // return $booking;
        return back();
    }

    public function updateCancel(Request $request, $id){
        $booking = Event::find($id);

        $booking->cancel_id = 1;
        // $booking->accept_id = null;
        $booking->save();
        // return $booking;
        return back();
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

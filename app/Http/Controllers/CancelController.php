<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Event;

use Illuminate\Support\Facades\Route;

use App\Http\Requests;

class CancelController extends Controller
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
        $bookings = Event::where("cancel_id",1)->get();
        foreach($bookings as $booking){
          $this->accessor($booking);
        }
        return view("admin.cancel",compact("bookings"));
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
      $msg;

      $booking = Event::find($id);

      $booking->cancel_id = 1;
      // $booking->accept_id = null;
      $booking->save();
      $msg[] = [ "msg" => "Successfully Updated"];
      // return $booking;
      return view("/".Route::getCurrentRoute()->getPath()."/".$msg);
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

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Event;

use Illuminate\Support\Facades\Route;

use Carbon\Carbon;

class AcceptController extends Controller
{
    function __construct(){
        $this->middleware("auth");
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function index($msg = null)
     {
         $bookings = Event::where("accept_id",1)->where("cancel_id",null)->get();
        //  $b = [];
         foreach($bookings as $booking){
           $this->accessor($booking);
          //  if($booking->cancel_id == 1){
          //    continue;
          //  } else {
          //    $b[] = $booking;
          //  }
         }
        //  return Carbon::create();
        //  return $bookings;
        $msg = [];
        return view("admin.accept")->with("bookings",$bookings)->with("msg",$msg);
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
      $booking->accept_id = 1;

      $booking->save();
      $msg[] = ["msg" => "Successfully Updated!"];
      // return $booking;
      return view("/".Route::getCurrentRoute()->getPath())->with("msg", $msg);
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

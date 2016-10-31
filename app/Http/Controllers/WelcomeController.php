<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Route;

use Carbon\Carbon;

use App\Event;

class WelcomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      // Get bookings sorted by date and time
      $bookings = Event::where("accept_id",1)
                          ->where("cancel_id",null)->get()
                          ->sortBy("event_date")
                          ->filter(function($value,$key)
                          {
                            return $value["event_date"] > Carbon::today();
                          });
      $events;
      foreach($bookings as $key => $booking){
        $this->accessor($booking);
        $events[] = $booking;
        // if(Carbon::)
        if(count($events) > 8){
          break;
        }
      }

      // return $bookings;
      // $events = [];
      //
      // for($i = 0;$i < count($bookings);$i++){
      //     $this->accessor($bookings[$i]);
      //     if ($this->dateFormatter($bookings[$i]->event_date) > $this->dateFormatter("today")){
      //       $events[] = $bookings[$i];
      //     }
      // }
      // return $events;
      return view("events.welcome")->with("events",$events);
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
        //
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

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Event;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      return view('events.events');
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
      $mess = [];
      $mess['message'] = 'Successfully submitted your form! Expect a response soon.';

      $event = new Event;

      $event->company_name = $request->company_name;
      $event->event_name = $request->event_name;
      $event->company_website = $request->company_website;
      $event->previous_event = $request->previous_event;
      $event->internet_facility = $request->internet_facility;
      $event->video_coverage = $request->video_coverage;
      $event->catering = $request->catering;
      $event->other_services = $request->other_services;
      $event->event_type = $request->event_type;
      $event->event_date = $request->event_date;
      $event->event_start = $request->event_start;
      $event->event_end = $request->event_end;
      $event->event_space = $request->event_space;
      $event->eventPay = $request->eventPay;
      $event->first_name = $request->first_name;
      $event->last_name = $request->last_name;
      $event->email_address = $request->email_address;
      $event->phone_number = $request->phone_number;
      $event->rights = $request->rights;
      $event->pend_id = $request->pend_id;
      // return $request->all();
      $event->save();

      $mess['message'] = 'Successfully submitted your form! Expect a response soon.';

      return view('events.feedback')->with('mess', $mess);
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

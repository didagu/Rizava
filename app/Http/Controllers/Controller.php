<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function dateFormatter($date){
      $date = date_create($date);
      return date_format($date,"F j, Y");
    }

    public function timeFormatter($time){
      $time = date_create($time);
      return date_format($time,"h:i a");
    }

    public function accessor($booking){
      $booking->event_date = $this->dateFormatter($booking->event_date);
      $booking->event_start = $this->timeFormatter($booking->event_start);
      $booking->event_end = $this->timeFormatter($booking->event_end);
      $booking->company_name = ucfirst($booking->company_name);
      $booking->event_space = ucfirst($booking->event_space);
      $booking->event_name = ucwords($booking->event_name);
      $booking->event_type = ucwords($booking->event_type);
      $booking->internet_facility = ucwords($booking->internet_facility);
      $booking->video_coverage = ucwords($booking->video_coverage);
      $booking->catering = ucwords($booking->catering);
      $booking->first_name = ucwords($booking->first_name);
      $booking->last_name = ucwords($booking->last_name);
      $booking->other_services = ucwords($booking->other_services);
    }
}

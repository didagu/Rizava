 @extends('layouts.layout')

 @section('content')

<body>

<div style="margin-top: -20px;"> <!-- remove margin top above navbar -->
<div class="col-xs-12" style="background-image: url(img/homepage_hero.jpg); background-size: cover;background-attachment:fixed; height: 480px; width: 100%;"><!-- hero image full width-->

    <div class="row"> <!-- event button row -->
  <div class="col-xs-6 col-xs-offset-3" style="text-align: center;"> <!-- center book event button -->
    <div> <!-- book event button with inline css -->
            <p>
              <a class="btn btn-default btn-lg mdl-js-ripple-effect" href="/events"  role="button" style="margin-bottom: -100%;
               display: inline-block;
                vertical-align: -300px;
                background-color: #f99527;
                border: 0px;
                color: white;">Book Event</a>
            </p>
    </div> <!-- book event button end -->
  </div> <!-- centralize book event button end -->
</div> <!-- event button row end -->
  </div> <!-- hero image end -->
</div> <!-- remove margin top above navbar end -->


<div class="clearfix"></div>
<div class="container"> <!-- main body container -->
<hr class="featurette-divider">

      <div class="row">
        <div class="col-sm-4 " style="width: 100%; height: auto;">
          <div class="well">
            <center><h3>Upcoming Events</h3></center>
          </div>
        </div>
      </div>

      <div class="row">
        @foreach($events as $event)
        <div class="col-sm-4">
          <div class="demo-card-wide mdl-card mdl-shadow--2dp cards-spacing">
            <div class="mdl-card__title" style="background: url('http://hrb-family-business.wpengine.netdna-cdn.com/files/2013/11/Family-Business-Consulting-Technology.jpg') center / cover;">
            </div>
            <div class="mdl-card__supporting-text">
              <span>{{ date_format(date_create($event->event_date),"D, M d, Y") }} {{ date_format(date_create($event->event_start),"g:i A") }}</span>
              <p>
                <strong>
                  {{ $event->event_name }}
                </strong>
              </p>
              <span>Venue: {{ $event->event_space }}</span>
            </div>
          </div>
        </div>
        @endforeach

        </div>
        <hr class="featurette-divider">

        </div>

 @endsection

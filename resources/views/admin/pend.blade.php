@extends("layouts.admin")

@section("header")
<span>Pending events</span>
@endSection

@section("content")
<div class="right">
  <div class="_wrap">
    @if(count($bookings))
      <div class="event header">
        <div class="_title">
          Event Title
        </div>
        <div class="_host">
          Host
        </div>
        <div class="_date">
          Date/Time
        </div>
        <div class="_floor">
          Floor</span>
        </div>
      </div>

      @foreach ($bookings as $booking)
      <div class="event">
        <a href="#" data-toggle="modal" data-target="#view-more" title="Pending">
          <input type="hidden" name="id" value="{{ $booking->id }}">
          <div class="_title">
            <h2>{{ $booking->event_name }}</h2>
          </div>
          <div class="_host">
            <h3>{{ $booking->company_name }}</h3>
          </div>
          <div class="_date">
            {{ $booking->event_date }}
            <span>{{ $booking->event_time }}</span>
            <div class="_time">
              {{ $booking->event_start }} - {{ $booking->event_end }}
            </div>
          </div>
          <div class="_floor">
            <span>{{ $booking->event_space }}</span>
          </div>
        </a>
      </div>
      <hr>
      @endforeach
    @else
    <div class="row">
      <div class="col-lg-push-2 col-lg-8">
        <div class="alert alert-info">
          <h2>
            YIPPY!!! NO PENDING BOOKINGS!!! <i class="fa fa-smile-o"></i>
          </h2>
        </div>
      </div>
    </div>
    @endif
    </div>
  </div>
</div>

@endSection

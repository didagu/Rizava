@extends("layouts.admin")

@section("header")
<span>Main</span>
@endSection

@section("content")
<div class="right">
  <div class="container">
    <div class="statistic">
        <div class="col">
          <!-- Pending events count -->
          <div class="panel panel-primary">
            <div class="panel-heading">
              <div class="statis con">
                <div class="icon">
                  <i class="fa fa-list-alt fa-4x"></i>
                </div>
                <div class="count">
                  <h1 class="pull-right">{{ $a }}</h1>
                  <h5>Pending Event(s)</h5>
                </div>
              </div>
            </div>
            <div class="panel-footer">
              <div class="statis con">
                <div class="comment">
                  <a href="/pend">View Details</a>
                </div>
                <div class="dir">
                  <a href="/pend">
                    <i class="fa fa-arrow-circle-right"></i>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <!-- Accepted Events Count -->
          <div class="panel panel-success">
            <div class="panel-heading">
              <div class="statis con">
                <div class="icon">
                  <i class="fa fa-check-square-o fa-4x"></i>
                </div>
                <div class="count">
                  <h1 class="pull-right">{{ $b }}</h1>
                  <h5>Accepted Event(s)</h5>
                </div>
              </div>
            </div>
            <div class="panel-footer">
              <div class="statis con">
                <div class="comment">
                  <a href="/accept">View Details</a>
                </div>
                <div class="dir">
                  <a href="/accept">
                    <i class="fa fa-arrow-circle-right"></i>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <!-- Rejected events count -->
          <div class="panel panel-warning">
            <div class="panel-heading">
              <div class="statis con">
                <div class="icon">
                  <i class="fa fa-times-circle-o fa-4x"></i>
                </div>
                <div class="count">
                  <h1 class="pull-right">{{ $c }}</h1>
                  <h5>Cancelled Event(s)</h5>
                </div>
              </div>
            </div>
            <div class="panel-footer">
              <div class="statis con">
                <div class="comment">
                  <a href="/cancel">View Details</a>
                </div>
                <div class="dir">
                  <a href="/cancel">
                    <i class="fa fa-arrow-circle-right"></i>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>
    <div class="alert alert-info">
      @if(count($bookings) > 0)
      <h2>EVENTS THIS WEEK</h2>
      @else
      <h2>NO EVENTS THIS WEEK</h2>
      @endif
    </div>
  </div>
  <div class="_wrap">
    @if(count($bookings) > 0)
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
        <a href="#" title="Pending">
          <input type="hidden" name="id" value="{{ $booking->id }}">
          <div class="_title">
            <h2>{{ $booking->event_name }}</h2>
          </div>
          <div class="_host">
            <h4>{{ $booking->company_name }}</h4>
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
    @endif
    </div>
  </div>
</div>
@endSection

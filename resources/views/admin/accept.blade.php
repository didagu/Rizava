@extends("layouts.admin")

@section("header")
<span>Accepted events</span>
@endSection

@section("content")
<div class="right">
  <div class="_wrap">
    <!-- <div class="pull-right" style="position:relative;">
      <div class="form-group">
        <input type="text" name="search" value="" style="border-radius:50px;padding-left:35px" class="form-control">
        <i class="fa fa-search" style="position:absolute;top:0;margin:7px 0 0 10px;"></i>
      </div>
      <div style="position:absolute;width:100%;height:50px;border:1px solid black;">

      </div>
    </div>
    <div class="clearfix"></div> -->
    <!-- <script>
      $( "[name='search']" ).on( "keyup" , function(event){
        if (event.which in
        var x = $( this ).val() + " ";
        $.ajax("/search/" + x,{
          data : {x},
          success : function(response,status){
            console.log(response);
          }
        })
      });
      // document.getElementsByName("search")[0].onkeyup = function(){
      //   var x = this.value;
      //   var xhttp;
      //   if (window.XMLHttpRequest) {
      //     xhttp = new XMLHttpRequest();
      //     } else {
      //     // code for IE6, IE5
      //     xhttp = new ActiveXObject("Microsoft.XMLHTTP");
      //   }
      //   xhttp.onreadystatechange(){
      //     if(this.readyState = 4 && this.status = 200){
      //
      //     }
      //   }
      // }
    </script> -->
    @if(count($bookings) > 0)
      <!-- <div class="title-header">
        <p>
          <span>Upcoming</span>
          <span>Past</span>
        </p>
      </div> -->
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
        <div class="event upcoming">
          <a href="#" data-toggle="modal" data-target="#view-more" title="Accepted">
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
              NO ACCEPTED BOOKINGS YET!!!
            </h2>
          </div>
        </div>
      </div>
    @endif
  </div>
</div>
<div class="succ alert alert-success" style="position:fixed;right:0;margin:20px 20px;">
  {{ $msg }}
</div>
@endSection

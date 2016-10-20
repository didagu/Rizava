@extends("admin.accept")

@section("head")
<h3>Accepted Bookings - Future Events</h3>
<hr>
@endSection

@section("acontent")
<div class="table-responsive">
  <table class="table table-striped table-hover">
    <thead>
      <tr>
        <th><i class=""></i>Event</th>
        <th><i class="fa fa-clock-o"></i> Time</th>
        <th><i class="fa fa-calendar"></i> Date</th>
        <th><i class="fa fa-home"></i> Hall Requested</th>
        <th>State</th>
        <th>More</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Event_Name</td>
        <td>00/00/00</td>
        <td>00:00</td>
        <td>Hall_Requested</td>
        <td>
          <i class="fa fa-check fa-2x" data-toggle="tooltip" data-placement="auto bottom" title="Accepted but future event"></i>
        </td>
        <td>
          <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect" data-toggle="modal" data-target="#view-more">
            View More
          </button>
        </td>
      </tr>
    </tbody>
  </table>
</div>
@endSection

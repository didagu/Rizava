@extends("admin.accept")

@section("acontent")
<div id="hld" class="tab-pane fade in active">
  <h3>Accepted Bookings - Past Events</h3>
  <hr>
  <div class="table-responsive">
    <table class="table table-striped table-hover">
      <thead>
        <tr>
          <th>Event</th>
          <th>time</th>
          <th>Date</th>
          <th>Hall Requested</th>
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
            <i class="fa fa-check-square-o fa-2x" data-toggle="tooltip" data-placement="auto bottom" title="Accepted and past event"></i>
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
</div>
@endSection

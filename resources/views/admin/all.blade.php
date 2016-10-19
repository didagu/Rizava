@extends("layouts.admin")

@section("content")
<div id="all" class="tab-pane fade in active">
  <div class="tab-content-inside">
    <h3>All Bookings</h3>
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
            <td class="state"></td>
            <td>
              <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect" data-toggle="modal" data-target="#view-more">
                View More
              </button>
            </td>
          </tr>
          <tr>
            <td>Event_Name</td>
            <td>00/00/00</td>
            <td>00:00</td>
            <td>Hall_Requested</td>
            <td><i data-toggle="tooltip" data-placement="auto bottom" title="Rejected event" class="fa fa-times-circle-o fa-2x"></i></td>
            <td>
              <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect" data-toggle="modal" data-target="#view-more">
                View More
              </button>
            </td>
          </tr>
          <tr>
            <td>Event_Name</td>
            <td>00/00/00</td>
            <td>00:00</td>
            <td>Hall_Requested</td>
            <td><i data-toggle="tooltip" data-placement="auto bottom" title="Accepted and past event" class="fa fa-check-square-o fa-2x"></i></td>
            <td>
              <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect" data-toggle="modal" data-target="#view-more">
                View More
              </button>
            </td>
          </tr>
          <tr>
            <td>Event_Name</td>
            <td>00/00/00</td>
            <td>00:00</td>
            <td>Hall_Requested</td>
            <td><i data-toggle="tooltip" data-placement="auto bottom" title="Accepted but future event" class="fa fa-check fa-2x"></i></td><td>
              <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect" data-toggle="modal" data-target="#view-more">
                View More
              </button>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>
@endSection

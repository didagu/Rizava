@extends("admin")

@section("admin.modal")
<div id="view-more" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <div class="modal-title">
          <h4></h4>
        </div>
      </div>
      <div class="modal-body">
        <div class="detail">
          <div class="page-header">
            <h3></h3>
            <p class="time"></p>
          </div>
          <div>
            <div class="more-info">
              <p>This is a <span class="eventPay"></span> event.</p>
              <p>Services/Utilities Required:</p>
              <div class="ser">
                <p>
                  Service_One<br>
                  Service_Two<br>
                  Service_Three<br>
                  Service_Four<br>
                </p>
              </div>
            </div>
          </div>
          <div>
            <p class="cat">Event Type: <span></span></p>
            <div class="other-info">
              <p>Hall Requested: <span id="hall">Hall_booked</span></p>
              <p>Event History:</p>
              <div class="his">
                <p>
                  Url_one<br>
                  Url_two<br>
                  Url_three<br>
                  Url_four<br>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <div class="foot">
          <div>
            <div class="con-action">
              <!-- Contact Person's info -->
              <h3>Contact Person</h3><hr>
              <div class="con-info">
                <p>
                  Name: <span id="name">Name</span><br>
                  Email: <span id="email">Email</span><br>
                  Phone No.: <span id="pNo">Phone Number</span><br>
                </p>
              </div>
            </div>
          </div>
          <div>
            <fieldset id="fieldset">
              <legend>Action</legend>
              <!-- Modal Accept button -->
              <form class="acc"  method="post" style="display:inline;">
                {{ csrf_field() }}
                {{ method_field('PUT') }}
                <button type="submit" class="btn btn-success" id="accept"></button>
              </form>

              <!-- Modal Cancel button -->
              <form class="can" action="" method="post" style="display:inline">
                {{ csrf_field() }}
                {{ method_field('PUT') }}
                <button type="submit" class="btn btn-danger" id="cancel"></button>
              </form>
            </fieldset>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endSection

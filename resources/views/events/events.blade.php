@extends('layouts.layout')

@section('content')

<!-- <body> -->
<script type="text/javascript" src="{{ URL::asset('js/event.js') }}"></script>
  <section>

		<div class="container">
			<div class="row col-md-10 col-md-offset-1">
				<div class="panel panel-default">

	  				<div class="panel-heading">
	    				<h3 class="panel-title"
	    					style="font-size: 30px;
	    					text-align: center;
	    					color: #f99527;">
	    					Event Booking Form
	    				</h3>
	  				</div>
	  				<div class="panel-body">
	    				<div>
	    				   <div>
                    <form action="/createEvent" method="POST">
                      <div class="col-sm-6">
                          <div class="form-group">
                            <label for="company_name">Company Name <span style="color: red;">*</span></label>
                            <input type="text" class="form-control" name="company_name" required autofocus="autofocus">
                          </div>
                        </div>

                        <div class="col-sm-6">
                          <div class="form-group">
                            <label for="event_name" style="color: grey;">Event Name <span style="color: red;">*</span></label>
                            <input type="tel" class="form-control" name="event_name" required>
                          </div>
                        </div>

                        <div class="col-sm-6">
                          <div class="form-group">
                            <label for="company_website">Company website <span style="color: red;">*</span></label>
                            <input type="url" class="form-control" name="company_website" value:"http://">
                          </div>
                        </div>

                        <div class="col-sm-6">
                          <div class="form-group">
                            <label for="previous_event">Link to previous event (if any)</label>
                            <input type="url" class="form-control" name="previous_event" value:"http://">
                          </div>
                        </div>

                        <div class="col-sm-6">
                        <label for="" style="color: grey;">
                          Services needed <span style="color:red;">*</span>
                        </label><br>
                            <div class="checkbox col-sm-10">
                              <label>
                                <input type="checkbox" name="internet_facility" value="Internet facility"> Internet facility
                              </label> &nbsp;

                              <label>
                                <input type="checkbox" name="video_coverage" value="Video Coverage"> Video Coverage
                              </label>

                              <label>
                                <input type="checkbox" name="catering" value="Catering"> Catering
                              </label><br>

                            <input type="text" class="form-control" name="other_services" placeholder="Specify Others">

                            </div>
                        </div>

                        <div class="col-sm-6">
                        <label for="" style="color: grey;">
                          Type of event <span style="color: red;">*</span>
                        </label><br>
                            <div class="radio col-sm-10">
                              <label>
                                <input type="radio" name="event_type" value="technology" checked> Technology event
                              </label> &nbsp;

                              <label>
                                <input type="radio" name="event_type" value="education"> Education event
                              </label>

                              <label>
                                <input type="radio" name="event_type" value="social_change" > Social change
                              </label><br>
                            </div>
                        </div>

                        <div class="clearfix"></div>
                        <div class="col-sm-6">
                          <div class="form-group">
                            <label for="event_date">Pick a date <span style="color: red;">*</span></label>
                            <div class="input-group date" data-provide="datepicker" id="datepicker">
                              </div>
                              <input type="hidden" name="event_date" required>
                            </div>
                          </div>
                        </div>

                        <div class="col-sm-3">
                          <div class="form-group">
                            <label for="event_start">Event start time <span style="color: red;">*</span></label>
                            <input type="time" class="form-control" name="event_start" required>
                          </div>
                        </div>

                        <div class="col-sm-3">
                          <div class="form-group">
                            <label for="event_end">Event end time <span style="color: red;">*</span></label>
                            <input type="time" class="form-control" name="event_end" required>
                          </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group">
                              <strong>Which space are you booking? <span style="color: red;">*</span></strong><br><br>
                                <select name="event_space" id="event_space" >
                                  <option value="#" disabled>--------select---------</option>
                                  <option value="rooftop">Rooftop (max 100)</option>
                                  <option value="6th floor">6th floor (max 120)</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-sm-6" style="margin-left: -25px">
                            <div class="form-group">
                              <div class="checkbox">
                                  <label>
                                    <strong>Is it a paid event? <span style="color: red;">*</span> &nbsp; &nbsp; </strong>
                                  </label>
                                  <input name="eventPay" type="radio" value="yes"> Yes &nbsp;
                                 <input name="eventPay" type="radio" value="no" checked>  No
                              </div>
                            </div>
                        </div>

                        <div class="clearfix"></div>
                        <hr class="" style="width: 100%; background-color: smokewhite;">

                        <div class="col-sm-6">
                          <div class="form-group">
                            <label for="first_name">First Name <span style="color: red;">*</span></label>
                            <input type="text" class="form-control" name="first_name" required>
                          </div>
                        </div>

                        <div class="col-sm-6">
                          <div class="form-group">
                            <label for="last_name">Last Name <span style="color: red;">*</span></label>
                            <input type="text" class="form-control" name="last_name" required>
                          </div>
                        </div>

                        <div class="col-sm-6">
                          <div class="form-group">
                            <label for="email_address">Email Address <span style="color: red;">*</span></label>
                            <input type="email" class="form-control" name="email_address" required>
                          </div>
                        </div>

                        <div class="col-sm-6">
                          <div class="form-group">
                            <label for="phone_number">Phone Number <span style="color: red;">*</span></label>
                            <input type="tel" class="form-control" name="phone_number" placeholder="Example: 08012345678"
                              onkeypress="return isNumberKey(event)" required>
                          </div>
                        </div>
                        <script type="text/javascript">
                          function isNumberKey(evt){
                            var charCode = (evt.which) ? evt.which : event.keyCode
                            if (charCode > 31 && (charCode < 48 || charCode > 57))
                                return false;
                            return true;
                          }
                        </script>

                          <div class="clearfix"></div>
                          <div class="row col-sm-8 col-sm-offset-2" >
                          <br>
                             <label>
                                <input type="checkbox" name="rights" required> I accept that cchub reserves right to decline this event booking
                              </label><br>
                          </div>

                          <div class="clearfix"></div>
                          <!-- submit -->
                          <input type="hidden" name="pend_id" value="1">
                          <div class="row">
                              <div class="col-sm-4 col-sm-offset-4" style="margin-top: 5px;">

                                <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent" style="margin-right: 10px; background-color: #f99527;" type="submit">
                                  Submit
                                 </button>

                                 <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect" type="reset">
                                  Cancel
                                 </button>
                              </div>
                          </div>

                        </div>

                        {{ csrf_field() }}
                        <div class="clearfix"></div>
                  <!-- <button class="btn btn-default" type="submit">Submit</button> -->
                </form>
                 </div>

	  				   </div>
				    </div>
			  </div>
		</div>
	</section>
<!-- </body> -->
@endsection

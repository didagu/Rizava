@extends('layouts.layout')

@section('content')

<!-- <body> -->
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
	    				<class class="container">
	    				<form method="POST" action="/formSubmit" onsubmit="return formValidation()" name="eventBookingForm">
	    				{{ csrf_field() }}
	    					<class class="row col-sm-6"> <!-- first name row -->
	    						 <div class="mdl-textfield mdl-js-textfield	mdl-textfield--floating-label">
                						<input class="mdl-textfield__input" type="text" id="firstName" required>
                					<label class="mdl-textfield__label" for="firstName">
                						First Name
                					</label>
              					</div>
	    					</class>

	    					<class class="row col-sm-6"> <!-- last name row -->
		    					<div class="mdl-textfield mdl-js-textfield 		mdl-textfield--floating-label">
	                					<input class="mdl-textfield__input" type="text" id="lastName" required>
	               					<label class="mdl-textfield__label" for="lastName">
	               						Last Name
	               					</label>
              					</div>
	    					</class>
	    					
	    					<!-- email and phone number -->
	    					<class class="row col-sm-6"> <!-- email row -->
	    						 <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                						<input class="mdl-textfield__input" type="email" id="emailAddress" required>
                					<label class="mdl-textfield__label" for="emailAddress">
                						Email Address
                					</label>
              					</div>
	    					</class>

	    					<class class="row col-sm-6"> <!-- phone number row -->
		    					<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
	                					<input class="mdl-textfield__input" type="tel" id="phoneNumber" required>
	               					<label class="mdl-textfield__label" for="phoneNumber">
	               						Phone Number
	               					</label>
              					</div>
	    					</class>

	    					<div class="row col-sm-12">
	    						<hr class="" style="width: 100%; background-color: smokewhite;">
	    					</div>

	    					<!-- comany name and event name -->
	    					<class class="row col-sm-6"> <!-- company name row -->
	    						 <div class="mdl-textfield 	mdl-js-textfield mdl-textfield--floating-label">
                						<input class="mdl-textfield__input" type="text" id="companyName" required>
                					<label class="mdl-textfield__label" for="companyName">
                						Company Name
                					</label>
              					</div>
	    					</class>

	    					<class class="row col-sm-6"> <!-- event name row -->
		    					<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
	                					<input class="mdl-textfield__input" type="text" id="eventName" required>
	               					<label class="mdl-textfield__label" for="eventName">
	               						Event Name
	               					</label>
              					</div>
	    					</class>
							<!-- services needed row -->
	    					<class class="row col-sm-6" style=" width: auto;"> <!-- event type row -->
		    					<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label"><strong>Services Needed</strong>
	                				<ul class="demo-list-control mdl-list">
          								<li class="mdl-list__item">
            								<span class="mdl-list__item-primary-content">
              									<!-- <i class="material-icons  mdl-list__item-avatar">person</i> -->
              									Internet facility
            								</span>
            								<span class="mdl-list__item-secondary-action">
              									<label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for="internetService">
                									<input type="checkbox" id="internetService" class="mdl-checkbox__input" />
              									</label>
            								</span>
          								</li>
          								<li class="mdl-list__item">
            								<span class="mdl-list__item-primary-content">
              									<!-- <i class="material-icons  mdl-list__item-avatar">person</i> -->
              									Video coverage
            								</span>
            								<span class="mdl-list__item-secondary-action">
              									<label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for="videoService">
                									<input type="checkbox" id="videoService" class="mdl-checkbox__input" />
              									</label>
            								</span>
          								</li>
          								<li class="mdl-list__item">
            								<span class="mdl-list__item-primary-content">
              									<!-- <i class="material-icons  mdl-list__item-avatar">person</i> -->
              									Catering
            								</span>
            								<span class="mdl-list__item-secondary-action">
              									<label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for="cateringService">
                									<input type="checkbox" id="cateringService" class="mdl-checkbox__input" />
              									</label>
            								</span>
          								</li>
          								<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
	                					<input class="mdl-textfield__input" type="text" id="otherServices">
	               					<label class="mdl-textfield__label" for="otherServices">
	               						Specify others
	               					</label>
              					</div>
									</ul>
              					</div>
	    					</class>

							<!-- type of event and service needed row -->
							<class class="row col-sm-6 col-sm-offset-1" style=" width: auto;"> <!-- event type row -->
		    					<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label"><strong>Type of event</strong>
	                				<ul class="demo-list-control mdl-list">
          								<li class="mdl-list__item">
            								<span class="mdl-list__item-primary-content">
              									<!-- <i class="material-icons  mdl-list__item-avatar">person</i> -->
              									Technology Event
            								</span>
            								<span class="mdl-list__item-secondary-action">
              									<label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for="technologyEvent">
                									<input type="checkbox" id="technologyEvent" class="mdl-checkbox__input" />
              									</label>
            								</span>
          								</li>
          								<li class="mdl-list__item">
            								<span class="mdl-list__item-primary-content">
              									<!-- <i class="material-icons  mdl-list__item-avatar">person</i> -->
              									Education Event
            								</span>
            								<span class="mdl-list__item-secondary-action">
              									<label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for="educationEvent">
                									<input type="checkbox" id="educationEvent" class="mdl-checkbox__input" />
              									</label>
            								</span>
          								</li>
          								<li class="mdl-list__item">
            								<span class="mdl-list__item-primary-content">

              									Social Change Event
            								</span>
            								<span class="mdl-list__item-secondary-action">
              									<label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for="socialChangeEvent">
                									<input type="checkbox" id="socialChangeEvent" class="mdl-checkbox__input" />
              									</label>
            								</span>
          								</li>
									</ul>
              					</div>
	    					</class>


	    					<div class="clearfix"></div>
	    					<!-- event date row -->
	    					<class class="row col-sm-6" style=" width: auto;"> <!-- event type row -->
		    					<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label"><strong>Pick a date</strong>
                						<input class="mdl-textfield__input" type="date" id="eventDate" required	>
                					<label class="mdl-textfield__label" for="eventDate">

                					</label>
              					</div>
	    					</class>

	    					<!-- event time row -->
	    					<class class="row col-sm-6 col-sm-offset-1" style=" width: auto;"> <!-- event type row -->
	    					<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label"><strong>Event time</strong>
                						<input class="mdl-textfield__input" type="time" id="eventDate" required	>
                					<label class="mdl-textfield__label" for="eventDate">

                					</label>
              					</div>
								
	    					</class>
	    					<!-- end event time -->

	    					<!-- event floor -->
	    					


	    					<div class="clearfix"></div>
	    					<!-- url row -->
	    					<class class="row col-sm-6" style=" width: auto;"> <!-- event type row -->
		    					<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label"><strong>Paste a link to company website</strong>
                						<input class="mdl-textfield__input" type="url" id="eventUrl">
                					<label class="mdl-textfield__label" for="eventUrl">

                					</label>
              					</div>
	    					</class>


	    					<!-- event floor -->
	    					<div class="clearfix"></div>
	    					<class class="row col-sm-6 col-sm-offset-1" style=" width: auto;"> 
		    					<div>
	                				<ul class="demo-list-control mdl-list">
          								<li class="mdl-list__item">

          								<span class="mdl-list__item-secondary-action">
              									<label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for="rights">
                									<input type="checkbox" id="rights" class="mdl-checkbox__input" required/>
              									</label>
            								</span>
            								<span class="mdl-list__item-primary-content">
              									<!-- <i class="material-icons  mdl-list__item-avatar">person</i> -->
              									I accept that cchub reserves right to decline this event booking
            								</span>
            								
          								</li>
									</ul>
              					</div>
	    					</class>

							<div class="clearfix"></div>
							<!-- submit -->
							<div class="row">
  								<div class="col-sm-4 col-sm-offset-4"  style="margin-top: 5px;">


  									<button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent" style="    margin-right: 10px;
          background-color: #f99527;" 	type="submit">
  										Submit
									</button>
									<button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect" type="reset">
										Cancel
									</button>
  								</div>
							</div>



							</div>

	    				</class>

	    				</form>

	  				</div>
				</div>
			</div>
		</div>
	</section>
<!-- </body> -->
@endsection

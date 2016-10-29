<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Rizava</title>
    <script type="text/javascript" src="{{ URL::asset('js/jquery-3.1.0.min.js') }}"></script>
    <script type="text/javascript" src="jquery-ui-1.12.1/jquery-ui.min.js"></script>
    <link rel="stylesheet" href="jquery-ui-1.12.1/jquery-ui.min.css" media="screen" title="no title">

    <!-- localhost Bootstrap css-->
    <link rel="stylesheet" href="{{ URL::asset('css/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/css/bootstrap-datepicker.min.css') }}">
    <script src="{{ URL::asset('js/bootstrap.min.js')}}"></script>
    <script type="text/javascript" src="{{ URL::asset('js/js/bootstrap-datepicker.min.js') }}"></script>

    <!-- google material design cdn -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <!-- <link rel="stylesheet" href="https://code.getmdl.io/1.2.1/material.indigo-pink.min.css"> -->
    <script defer src="https://code.getmdl.io/1.2.1/material.min.js"></script>

    <!-- localhost google material design css -->
    <link rel="stylesheet" href="mdl/material.css">


    <!-- fontawesome icons -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">


    <link href="css/front-style.css" rel="stylesheet">
    <!-- <link rel="stylesheet" href="https://code.getmdl.io/1.2.1/material.orange-deep_orange.min.css" /> -->


      <nav class="navbar navbar-default navbar-static-top cus-navbar-margin">
        <div class="container-fluid">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header" style="margin-left: 30px;">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=" #bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
               <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
                <a class="navbar-brand cus-navbar-brand" href="{{ url('/') }}" style="color: #f99527;">Rizava</a>
          </div>

          <!-- nav links at the top and menu toggle -->
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right cus-navbar-links">
              @if(Route::getCurrentRoute()->getPath() == "events")
                <li><a href="{{ url('/') }}"  style="color: #f99527;">Home</a></li>
              @elseif (Route::getCurrentRoute()->getPath() == "/")
                <li><a href="/events">Book Event</a></li>
              @else
                <li><a href="{{ url('/') }}"  style="color: #f99527;">Home</a></li>
                <li><a href="/events">Book Another Event</a></li>
              @endif
            </ul>
          </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
      </nav>
   <!-- end -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

  </head>

    <section> <!-- body content goes here -->

    @yield('content')

    </section> <!-- end body section -->


      <!-- FOOTER -->
      <!-- <footer>
        <p class="pull-right"><a href="#">Back to top</a></p>
        <p>&copy; 2016 Rizava, Inc. &middot; <a href="#">About</a> &middot; <a href="#">Contact</a></p>
      </footer> -->


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <div style="width: 100%;">
      <footer class="mdl-mini-footer">
      <div class="mdl-mini-footer__left-section">
        <div class="mdl-logo">
          &copy; Rizava 2016
        </div>
        <!-- <ul class="mdl-mini-footer__link-list">
          <li><a href="#">Help</a></li>
          <li><a href="#">Privacy and Terms</a></li>
          <li><a href="#">User Agreement</a></li>

        </ul> -->
      </div>
      <div class="mdl-mini-footer__right-section">
      <a href="https://www.facebook.com/CcHUBNigeria/" target="_blank"><i class="fa fa-facebook-square fa-2x social-icons" aria-hidden="true"></i></a>
      <a href="https://twitter.com/Cc_HUB" target="_blank"><i class="fa fa-twitter-square fa-2x social-icons" aria-hidden="true"></i></a>
      </div>



    </footer>
    </div>
    <!-- Include all compiled jquery plugins (below), or include individual files as needed -->
    <script src="js/material.min.js"></script> <!-- add cdn material jquery -->
  </body>
</html>

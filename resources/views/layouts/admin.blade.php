<!doctype html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!--[if lt IE 9]><script src="http://cdnjs.cloudflare.com/ajax/libs/es5-shim/2.0.8/es5-shim.min.js"></script><![endif]-->
  <title>Rizava</title>
  <script   src="https://code.jquery.com/jquery-3.1.0.min.js"   integrity="sha256-cCueBR6CsyA4/9szpPfrX3s49M9vUU5BgtiJj06wt/s="   crossorigin="anonymous"></script>

  <script type="text/javascript" src="jquery-ui-1.12.1/jquery-ui.min.js"></script>

	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">

  <link  href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css" rel="stylesheet">

  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}">
  <script type="text/javascript" src="{{ URL::asset('js/admin.js') }}"></script>
  @if(Route::getCurrentRoute()->getPath() == "admin")
    <link rel="stylesheet" href="/css/master.css">
  @endif
</head>

<body>
  <input type="hidden" name="route" value="{{Route::getCurrentRoute()->getPath()}}">
  <div id="main-content">
    <header>
      <div class="container-fluid">
        <div class="row">
          <div class="col-sm-2">
            <a href="/admin">
              <h2>Rizava</h2>
            </a>
          </div>
          <div class="col-sm-10 page-title">
            <div id="pg-description">
              <i class="fa fa-dashboard"></i> Dashboard<span> - @yield("header")</span>
            </div>
          </div>
        </div>
      </div>
    </header>

    <section id="main-body">
      <div class="body_wrapper">
        <div class="left navigation">
          <ul>
            <li>
              <a href="/admin">
                Dashboard <i class="fa fa-area-chart pull-right"></i>
              </a>
            </li>
            <li>
              <a href="/pend">
                Pending <i class="fa fa-list-alt pull-right"></i>
              </a>
            </li>
            <li>
              <a href="/accept">
                Accepted <i class="fa fa-check-square-o pull-right"></i>
              </a>
            </li>
            <li>
              <a href="/cancel">
                Cancelled <i class="fa fa-times-circle-o pull-right"></i>
              </a>
            </li>
            <li style="position:absolute;bottom:0;min-width:275px">
              <a href="{{ url('/logout') }}"
                onclick="event.preventDefault();
                  document.getElementById('logout-form').submit();">
                  Logout <i class="fa fa-sign-out pull-right"></i>
              </a>
              <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
              </form>
            </li>
          </ul>
        </div>
        @yield("content")
      </div>
    </section>
  </div>

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

  <div class="loading">
    <p>Loading...  <i class="fa fa-circle-o-notch fa-spin"></i></p>
  </div>
</body>

</html>

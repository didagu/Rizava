<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <script   src="https://code.jquery.com/jquery-3.1.0.min.js"   integrity="sha256-cCueBR6CsyA4/9szpPfrX3s49M9vUU5BgtiJj06wt/s="   crossorigin="anonymous"></script>

		<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

		<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">

    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">

    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.2.1/material.yellow-amber.min.css" />
    <script defer src="https://code.getmdl.io/1.2.1/material.min.js"></script>

    <script type="text/javascript" src="{{ URL::asset('js/admin.js') }}"></script>
    <link rel="stylesheet" href="{{ URL::asset('css/admin.css') }}">
    <title>Rizava Admin</title>
  </head>

  <body>
    <header class="pull-right">
      <div class="container-fluid">
        <div class="wrap">
          <div class="row">
            <div class="col-lg-3">
              <div class="imghdr">
                <a href="{{ url('admin') }}"><h2>Rizava</h2></a>
              </div>
            </div>
            <div class="col-lg-7">
              <h2>DASHBOARD</h2>
            </div>
            <div class="col-sm-2">
              <button class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored" >
                Logout
              </button>
            </div>
          </div>
        </div>
      </header>

    <section>
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-3">
            <div class="side-nav">
              <ul class="list-group">
                <a href="{{ url('/admin') }}" class="list-group-item"><li>Pending</li></a>
                <a href="{{ url('/admin/accept') }}" class="list-group-item"><li>Accepted</li></a>
                <a href="{{ url('/admin/reject') }}" class="list-group-item"><li>Rejected</li></a>
                <a href="{{ url('/admin/all') }}" class="list-group-item"><li>ALL BOOKINGS</li></a>
              </ul>
            </div>
          </div>

          <div class="col-lg-9">
            @yield("content")
          </div>
        </div>
      </div>
    </section>

    <div class="container-fluid">
      <div id="view-more" class="modal fade" role="dialog">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title">Event_Name</h4>
            </div>
            <div class="modal-body">
              <div class="row">
                <div class="col-lg-6">
                  <div class="detail">
                    <h5>Host_Name</h5>
                    <div class="more-info">
                      <p>Expected Guests: <span id="guest">No.</span></p>
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
                </div>
                <div class="col-lg-6">
                  <div class="extra">
                    <h5>Event_Type</h5>
                    <div class="other-info">
                      <p>Hall Requested: <span id="hall">Hall_booked</span></p>
                      <p>Event History:</p>
                      <div class="his">
                        <p style="margin-bottom:5px;">
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
            </div>
            <div class="modal-footer">
              <div class="row">
                <div class="col-lg-6">
                  <div class="con-action">
                  <h5>Contact Person</h5><hr>
                  <div class="con-info">
                    <p>
                      Name: <span id="name">Name</span><br>
                      Email: <span id="email">Email</span><br>
                      Phone No.: <span id="pNo">Phone Number</span><br>
                    </p>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6">
                  <fieldset>
                    <legend>Action</legend>
                    <button type="button" class="btn btn-success" data-dismiss="modal">Accept</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Reject</button>
                  </fieldset>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      </div>
    </div>

    <div class="topBtn">
      <a href="#top">
        <i class="fa fa-chevron-up fa-2x" style="opacity:0.6;"></i>
      </a>
    </div>

    <script>
      function clearMe(){
        var hd = document.getElementsByTagName("header")[0].clientHeight;
        document.getElementsByTagName("section")[0].style.marginTop = hd + 15 + "px";
      }
      clearMe();
      window.addEventListener("resize",clearMe);
      // clientHeight
      // scrollHeight
      // offsetHeight
    </script>
  </body>
</html>

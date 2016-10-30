<!DOCTYPE html>
<html>
  <head>
      <meta charset="utf-8">
      <meta name="description" content="">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Rizava Admin</title>
      <script src="https://code.jquery.com/jquery-3.1.0.min.js"   integrity="sha256-cCueBR6CsyA4/9szpPfrX3s49M9vUU5BgtiJj06wt/s="   crossorigin="anonymous"></script>

      <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

      <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">

      <link type="text/css" rel="stylesheet" href="style.css">
      <script type="text/javascript" src="main.js"></script>
  </head>

  <body>
      <header>
        <div class="container-fluid">
          <h1 style="color: #f99527">Rizava</h1>
      </header>

      <section>
        <div class="container">
          <div class="row">
            <div class="col-md-push-3 col-md-6">
              <div class="login">
                <div class="panel panel-default">
                  <div class="panel-body">
                    <div class="col-md-push-2 col-md-8">
                      <div id="form">
                        <form action="/admin.php" method="POST" class="form-horizontal">
                          <div class="form-group">
                            <label class="control-label col-md-4" for="login">Login:</label>
                            <div class="col-md-8">
                              <input type="text" placeholder="Enter Login ID..." class="form-control" id="login">
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="control-label col-md-4" for="pword">Password:</label>
                            <div class="col-md-8">
                              <input type="password" placeholder="Enter Password..." class="form-control" id="pword">
                            </div>
                          </div>
                          <button type="button" class="btn btn-default pull-right" name="logIn">Log in</button>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

  </body>
</html>

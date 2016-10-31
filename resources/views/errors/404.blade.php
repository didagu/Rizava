<!DOCTYPE html>
<html>
    <head>
        <title>Page not found</title>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">

        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                color: #B0BEC5;
                display: table;
                font-weight: 100;
                font-family: 'Lato', sans-serif;
            }

            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }

            .content {
                text-align: center;
                display: inline-block;
            }

            .title {
                font-size: 72px;
                margin-bottom: 40px;
            }
            .homeButton {
                background-color: #f99527;
                color: white;
                font-size: 30px;
                border-radius: 4px;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="content">
                {{--<div class="title">Be right back.</div>--}}
                <div class="title">Oops! Page not found</div>
                <div class="title">
                    <a href="{{ url("/") }}"><button type="button" class="btn btn-warning" style="background-color: #f99527; color: white; font-size: 30px">Go to Homepage</button></a>
                    {{--<input type="submit" value="Go to Homepage" class="title homeButton">--}}
                </div>

            </div>
        </div>
    </body>
</html>

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
              <div class="panel-heading"></div>
                <div class="panel-body">
                @if($mess['message'])
                  <b><center>{{ $mess['message'] }}</center></b>
                @endif
                <br>
                <center><a href="/" role="button" class="btn btn-default">Back to home</a></center>
              </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
  window.setTimeout(goHome,5000);

  function goHome(){
    window.location = "/";
  }
</script>
@endsection

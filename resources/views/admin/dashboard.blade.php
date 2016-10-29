@extends("layouts.admin")

@section("header")
<span>Main</span>
@endSection

@section("content")
<div class="container">
  <div class="row">
    <div class="statistic">
      <div class="col-sm-4">
        <!-- Pending events count -->
        <div class="panel panel-primary">
          <div class="panel-heading">
            <div class="statis con">
              <div class="icon">
                <i class="fa fa-list-alt fa-4x"></i>
              </div>
              <div class="count">
                <h1 class="pull-right">{{ $a }}</h1>
                <h5>Pending Event(s)</h5>
              </div>
            </div>
          </div>
          <div class="panel-footer">
            <div class="statis con">
              <div class="comment">
                <a href="/pend">View Details</a>
              </div>
              <div class="dir">
                <a href="/pend">
                  <i class="fa fa-arrow-circle-right"></i>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-4">
        <!-- Accepted Events Count -->
        <div class="panel panel-success">
          <div class="panel-heading">
            <div class="statis con">
              <div class="icon">
                <i class="fa fa-check-square-o fa-4x"></i>
              </div>
              <div class="count">
                <h1 class="pull-right">{{ $b }}</h1>
                <h5>Accepted Event(s)</h5>
              </div>
            </div>
          </div>
          <div class="panel-footer">
            <div class="statis con">
              <div class="comment">
                <a href="/accept">View Details</a>
              </div>
              <div class="dir">
                <a href="/accept">
                  <i class="fa fa-arrow-circle-right"></i>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-4">
        <!-- Rejected events count -->
        <div class="panel panel-warning">
          <div class="panel-heading">
            <div class="statis con">
              <div class="icon">
                <i class="fa fa-times-circle-o fa-4x"></i>
              </div>
              <div class="count">
                <h1 class="pull-right">{{ $c }}</h1>
                <h5>Cancelled Event(s)</h5>
              </div>
            </div>
          </div>
          <div class="panel-footer">
            <div class="statis con">
              <div class="comment">
                <a href="/cancel">View Details</a>
              </div>
              <div class="dir">
                <a href="/cancel">
                  <i class="fa fa-arrow-circle-right"></i>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endSection

@extends("layouts.admin")

@section("content")
<div id="accept" class="tab-pane fade in active">
  <div class="tab-content-inside">
    <ul class="nav nav-tabs">
      <li class="active"><a style="" data-toggle="tab" href="#yth"><strong>Future</strong></a></li>
      <li><a style="" data-toggle="tab" href="#hld"><strong>Past</strong></a></li>
    </ul>

    <div class="tab-content">
      @yield("acontent")
    </div>
  </div>
</div>
@endSection

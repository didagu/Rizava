@extends("layouts.admin")

@section("content")
<div class="tab-content-inside" id="accept">
  @yield("head")
  <div class="list-group">
    <a href="{{ url('/admin/accept') }}" class="list-group-item"><strong>Future</strong></a>
    <a href="{{ url('/accept/past') }}" class="list-group-item"><strong>Past</strong></a>
  </div>

  <div class="tab-content">
    @yield("acontent")
  </div>
</div>
@endSection

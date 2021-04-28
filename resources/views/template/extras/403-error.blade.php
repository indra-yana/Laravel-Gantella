@extends('template.layouts.app_layout')

@section('title', '403 Error')

@section('styles')
  <!-- Add custom styles here-->
@endsection

@section('section_content')
<div class="col-md-12">
  <div class="col-middle">
    <div class="text-center text-center">
      <h1 class="error-number">403</h1>
      <h2>Access denied</h2>
      <p>Full authentication is required to access this resource. <a href="#">Report this?</a>
      </p>
      <div class="mid_center">
        <h3>Search</h3>
        <form>
          <div class="col-xs-12 form-group pull-right top_search">
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Search for...">
              <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Go!</button>
                  </span>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection

@section('scripts')
  <!-- Add custom scripts here-->
  <script type="text/javascript">
    $(function(){
      //** Do something here with JQuery **//
    });
  </script>
@endsection
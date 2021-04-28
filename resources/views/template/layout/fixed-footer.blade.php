@extends('template.layouts.app_layout')

@extends('template.layouts.section_top_nav')
@extends('template.layouts.section_sidebar')
@extends('template.layouts.section_footer')

@section('title', 'Fixed Footer')

@section('styles')
  <!-- Add custom styles here-->
@endsection

@section('section_content')
<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>Fixed Footer <small> Just add class <strong>footer_fixed</strong></small></h3>
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
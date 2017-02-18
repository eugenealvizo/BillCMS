<!doctype html>
<html lang="en">
	<head>
		@include('layouts.includes.sources')
		<!-- @include('layouts.includes.progress') -->
	</head>
	<?php 
	if (Request::segment(1) == '') 
	{
		$class = 'slanted';
	} 
	else if (Request::segment(1) == 'our-residences')
	{
		$class = 'residences-load';
	} 
	else
	{
		$class = '';
	}
	?>
	<body class="{{$class}}">
		<div id="dtBox" class="yes"></div>
		<!-- POPUPS -->
		@include('layouts.includes.popups')
		<!-- HEADER -->
		<header>
			@include('layouts.includes.header')
		</header>
		<!-- MAIN WRAP -->
			@yield('content')
		<!-- JAVASCRIPT -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
		<!-- VENDOR HERE -->
		<script src="{{url('dist/js/vendor/pace.js')}}" type="text/javascript"></script>
		<script src="{{url('dist/js/vendor/slick.min.js')}}" type="text/javascript" charset="utf-8"></script>
		<script src="{{url('dist/js/vendor/jquery.ellipsis.min.js')}}" type="text/javascript" charset="utf-8"></script>
		<script src="{{url('dist/js/vendor/enquire.min.js')}}" type="text/javascript" charset="utf-8"></script>
		<script src="{{url('dist/js/vendor/jquery.mb.YTPlayer.min.js')}}" type="text/javascript" charset="utf-8"></script>

		<!-- END VENDOR -->
		<script src="{{url('js/site.js')}}" type="text/javascript"></script>
		<script src="{{url('dist/js/init.min.js')}}" type="text/javascript"></script>
		<script src="{{url('dist/js/vendor/DateTimePicker.js')}}" type="text/javascript" charset="utf-8"></script>
		<!-- JAVASCRIPT -->

		<script type="text/javascript">
    	var baseurl = '{{url("/")}}';
    	var module  = '{{Request::segment(1)}}';
		</script>
	</body>
</html>
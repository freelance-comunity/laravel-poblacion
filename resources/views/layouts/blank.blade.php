<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>SICAP | @yield('title')</title>

    <!-- Bootstrap -->
    <link href="{{ asset("css/bootstrap.min.css") }}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{ asset("css/font-awesome.min.css") }}" rel="stylesheet">
    <!-- Custom Theme Style -->
    <link href="{{ asset("css/gentelella.min.css") }}" rel="stylesheet"> 
    {{-- Datatables --}}
    <link href="//cdn.datatables.net/1.10.15/css/jquery.dataTables.min.css" rel="stylesheet">
    {{-- Datepicker --}}
    @stack('stylesheets')

</head>

<body class="nav-md">
<div id="fullscreen">
    <div class="container body">
        <div class="main_container">

            @include('includes/sidebar')
            
            @include('includes/topbar') 
            
            @yield('main_container') 
            
            @include('includes/footer')

        </div>
    </div>
</div>
    <!-- jQuery -->
    <script src="{{ asset("js/jquery.min.js") }}"></script>
    <!-- Bootstrap -->
    <script src="{{ asset("js/bootstrap.min.js") }}"></script>
    <!-- Custom Theme Scripts -->
    <script src="{{ asset("js/gentelella.min.js") }}"></script>
    {{-- Datatables --}}
    <script src="//cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
    {{-- Fullscreen --}}
    <script src="{{ asset("js/jquery.fullscreen.min.js") }}"></script>
    	<script type="text/javascript">
				$(function() {
					// check native support
					$('#support').text($.fullscreen.isNativelySupported() ? 'supports' : 'doesn\'t support');

					// open in fullscreen
					$('#fullscreen .requestfullscreen').click(function() {
						$('#fullscreen').fullscreen();
						return false;
					});

					// exit fullscreen
					$('#fullscreen .exitfullscreen').click(function() {
						$.fullscreen.exit();
						return false;
					});

					// document's event
					$(document).bind('fscreenchange', function(e, state, elem) {
						// if we currently in fullscreen mode
						if ($.fullscreen.isFullScreen()) {
							$('#fullscreen .requestfullscreen').hide();
							$('#fullscreen .exitfullscreen').show();
						} else {
							$('#fullscreen .requestfullscreen').show();
							$('#fullscreen .exitfullscreen').hide();
						}

						$('#state').text($.fullscreen.isFullScreen() ? '' : 'not');
					});
				});
		</script>

    @stack('scripts')

</body>

</html>
<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from radixtouch.in/templates/admin/zivi/source/light/advance-table.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 17 Jan 2020 13:34:40 GMT -->
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Demo Cart</title>
  <link rel="stylesheet" href="{{ asset('assets/css/app.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}">
</head>
<body>
  <div class="loader"></div>
	<div id="app">
		<div class="main-wrapper main-wrapper-1">
			<!-- <div class="navbar-bg"></div> -->
				<!-- <div class="col-md-2">
				</div> -->
				<div class="col-md-12">
					<!-- <div class="row" style="background:#fff;">
					</div> -->
					<div class="row">
						@yield('content')
					</div>
				</div>
			</div>
		</div> <!-- end container -->
	</div>


		@yield('page_script')
</body>
</html>
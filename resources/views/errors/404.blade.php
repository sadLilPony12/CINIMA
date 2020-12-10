<!DOCTYPE html>
<html>
<head>
	<!-- Basic Page Info -->
	<meta charset="utf-8">
	<title>Cinema | 404</title>

	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('images/favicon.jpg') }}">

	<!-- CSS -->
	<link href="{{ asset('css/core.css') }}" rel="stylesheet">
    <link href="{{ asset('css/icon-font.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>
<body>
	<div class="error-page d-flex align-items-center flex-wrap justify-content-center pd-20">
		<div class="pd-10">
			<div class="error-page-wrap text-center">
				<h1>404</h1>
				<h3>Error: 404 Page Not Found</h3>
				<p>Sorry, the page you’re looking for cannot be accessed.<br>Please click the button to go back to the Home page.</p>
				<div class="pt-20 mx-auto max-width-200">
					<a href="{{ route('home') }}" class="btn btn-primary btn-block btn-lg">Back To Home</a>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
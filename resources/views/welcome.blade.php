<!DOCTYPE html>
<html>
<head>
	<!-- Basic Page Info -->
	<meta charset="utf-8">
	<title>Cinema | Welcome</title>

	<!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('images/favicon.jpg') }}">

    <!-- CSS -->
    <link href="{{ asset('css/core.css') }}" rel="stylesheet">
    <link href="{{ asset('css/icon-font.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>
<body class="login-page">
	<div class="login-header box-shadow">
		<div class="container-fluid d-flex justify-content-between align-items-center">
			<div class="brand-logo">
				<a href="{{ route('welcome') }}">
                    <img src="{{ asset('images/logo.png') }}" width="20%" alt="">
                    <h4>Cinema</h4>
				</a>
			</div>
            <div class="login-menu">
                <ul>
                    @if (Route::has('login'))
                        @auth
                            <li><a href="{{ route('home') }}">Home</a></li>
                        @else
                            <li style="float:left; margin-left: -5%; margin-right: 5%;"><a href="{{ route('login') }}">Login |</a></li>
                            <li style="float:left;"><a href="{{ route('register') }}">Register</a></li>
                        @endauth
                    @endif
                </ul>                
			</div>
		</div>
    </div>

	<div class="login-wrap d-flex align-items-center flex-wrap justify-content-center">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-md-6 col-lg-7">
					<!-- Slides only -->
                    <div class="card-box mb-30">
                        <div class="clearfix pd-20">
                            <div class="pull-left">
                                <h4 class="h4">Now showing on cinemas</h4>
                            </div>
                        </div>
                        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img class="d-block w-100" src="{{ asset('images/avatar/train-to-busan.jpeg') }}" alt="First slide">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="{{ asset('images/avatar/peemak.jpg') }}" alt="Second slide">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="{{ asset('images/avatar/faf 8.jpg') }}" alt="Third slide">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="{{ asset('images/avatar/dora.jpg') }}" alt="Third slide">
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
				</div>
				<div class="col-md-6 col-lg-5">
					<div class="login-box bg-white box-shadow border-radius-10">
						<div class="login-title">
							<h2 class="text-center text-primary">Now showing worldwide!</h2>
                        </div>
                        <div class="pd-20 card-box height-100-p">
                            <ul class="list-group list-group-flush" id="showing-list"></ul>
                        </div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- js -->
    <script src="{{ asset('js/core.js') }}"></script>
    <script src="{{ asset('js/process.js') }}"></script>
    <script type="module" src="{{ asset('js/actors/movies/index.js') }}"></script>
</body>
</html>
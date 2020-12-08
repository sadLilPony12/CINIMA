<!DOCTYPE html>
<html>

<head>
	<!-- Basic Page Info -->
	<meta charset="utf-8">
	<title>Cinema | Register</title>

	<!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('images/favicon.jpg') }}">

	<!-- CSS -->
	<link href="{{ asset('css/core.css') }}" rel="stylesheet">
    <link href="{{ asset('css/icon-font.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/jquery.steps.css') }}" rel="stylesheet">
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
					<li><a href="{{ route('login') }}">Login</a></li>
				</ul>
			</div>
		</div>
	</div>
	<div class="register-page-wrap d-flex align-items-center flex-wrap justify-content-center">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-md-6 col-lg-7">
					<img src="vendors/images/register-page-img.png" alt="">
				</div>
				<div class="col-md-6 col-lg-5">
					<div class="register-box bg-white box-shadow border-radius-10">
						<div class="wizard-content">
							<form id="registration-form" class="tab-wizard2 wizard-circle wizard" method="POST" action="{{ route('register') }}">
                                @csrf
								<h5>Basic Account Credentials</h5>
								<section>
									<div class="form-wrap max-width-600 mx-auto">
										<div class="form-group row">
											<label class="col-sm-4 col-form-label">Email Address*</label>
											<div class="col-sm-8">
												<input type="email" id="email" name="email" value="{{ old('email') }}" class="form-control" required>
											</div>
										</div>
										<div class="form-group row">
											<label class="col-sm-4 col-form-label">Username*</label>
											<div class="col-sm-8">
												<input type="text" id="username" name="username" value="{{ old('username') }}" class="form-control" required>
											</div>
										</div>
										<div class="form-group row">
											<label class="col-sm-4 col-form-label">Password*</label>
											<div class="col-sm-8">
												<input type="password" id="password" name="password" class="form-control passwords">
											</div>
										</div>
										<div class="form-group row">
											<label class="col-sm-4 col-form-label">Confirm Password*</label>
											<div class="col-sm-8">
												<input type="password" id="confirm-password" name="password_confirmation" class="form-control passwords">
											</div>
										</div>
										<div class="alert alert-warning alert-dismissible fade show" role="alert">
											<strong>Passwords does not match</strong> Try typing it precisely and more carefully.
										</div>
									</div>
								</section>
								<!-- Step 2 -->
								<h5>Personal Information</h5>
								<section>
									<div class="form-wrap max-width-600 mx-auto">
										<div class="form-group row">
											<label class="col-sm-4 col-form-label">First Name*</label>
											<div class="col-sm-8">
												<input type="text" id="first-name" name="first_name" value="{{ old('first_name') }}" class="form-control" required>
											</div>
                                        </div>
                                        <div class="form-group row">
											<label class="col-sm-4 col-form-label">Middle Name*</label>
											<div class="col-sm-8">
												<input type="text" id="middle-name" name="middle_name" value="{{ old('middle_name') }}" class="form-control">
											</div>
                                        </div>
                                        <div class="form-group row">
											<label class="col-sm-4 col-form-label">Last Name*</label>
											<div class="col-sm-8">
												<input type="text" id="last-name" name="last_name" value="{{ old('last_name') }}" class="form-control" required>
											</div>
										</div>
										<div class="form-group row align-items-center">
											<label class="col-sm-4 col-form-label">Gender*</label>
											<div class="col-sm-8">
												<div class="custom-control custom-radio custom-control-inline pb-0">
													<input type="radio" id="male" name="gender" value="Male" class="custom-control-input" checked="checked">
													<label class="custom-control-label" for="male">Male</label>
												</div>
												<div class="custom-control custom-radio custom-control-inline pb-0">
													<input type="radio" id="female" name="gender" value="Female" class="custom-control-input">
													<label class="custom-control-label" for="female">Female</label>
												</div>
											</div>
										</div>
										<div class="form-group row">
											<label class="col-sm-4 col-form-label">Address*</label>
											<div class="col-sm-8">
												<input type="text" id="address" name="address" value="{{ old('address') }}" class="form-control" required>
											</div>
										</div>
									</div>
								</section>
								<!-- Step 3 -->
								<h5>Payment Method & Info</h5>
								<section>
									<div class="form-wrap max-width-600 mx-auto">
										<div class="form-group row">
											<label class="col-sm-4 col-form-label">Credit Card Type</label>
											<div class="col-sm-8">
												<select class="form-control selectpicker" title="Select Card Type">
													<option value="1">Option 1</option>
													<option value="2">Option 2</option>
													<option value="3">Option 3</option>
												</select>
											</div>
										</div>
										<div class="form-group row align-items-center">
											<label class="col-sm-4 col-form-label">Credit Card Number</label>
											<div class="col-sm-8">
												<input type="text" class="form-control">
											</div>
										</div>
										<div class="form-group row">
											<label class="col-sm-4 col-form-label">CVC</label>
											<div class="col-sm-3">
												<input type="text" class="form-control">
											</div>
										</div>
										<div class="form-group row">
											<label class="col-sm-4 col-form-label">Expiration Date</label>
											<div class="col-sm-8">
												<div class="row">
													<div class="col-6">
														<select class="form-control selectpicker" title="Month" data-size="5">
															<option value='01'>January</option>
															<option value='02'>February</option>
															<option value='03'>March</option>
															<option value='04'>April</option>
															<option value='05'>May</option>
															<option value='06'>June</option>
															<option value='07'>July</option>
															<option value='08'>August</option>
															<option value='09'>September</option>
															<option value='10'>October</option>
															<option value='11'>November</option>
															<option value='12'>December</option>
														</select>
													</div>
													<div class="col-6">
														<select class="form-control selectpicker" title="Year" data-size="5">
															<option>2020</option>
															<option>2019</option>
															<option>2018</option>
															<option>2017</option>
															<option>2016</option>
															<option>2015</option>
															<option>2014</option>
															<option>2013</option>
															<option>2012</option>
															<option>2011</option>
															<option>2010</option>
															<option>2009</option>
														</select>
													</div>
												</div>
											</div>
										</div>
									</div>
								</section>
								<!-- Step 4 -->
								<h5>Overview Information</h5>
								<section>
									<div class="form-wrap max-width-600 mx-auto">
										<ul class="register-info">
											<li>
												<div class="row">
													<div class="col-sm-4 weight-600">Email Address</div>
													<div id="show-email" class="col-sm-8"></div>
												</div>
											</li>
											<li>
												<div class="row">
													<div class="col-sm-4 weight-600">Username</div>
													<div id="show-username" class="col-sm-8"></div>
												</div>
											</li>
											<li>
												<div class="row">
													<div class="col-sm-4 weight-600">Gender</div>
													<div id="show-gender" class="col-sm-8"></div>
												</div>
											</li>
											<li>
												<div class="row">
													<div class="col-sm-4 weight-600">Full Name</div>
													<div id="show-fullname" class="col-sm-8"></div>
												</div>
											</li>
											<li>
												<div class="row">
													<div class="col-sm-4 weight-600">Address</div>
													<div id="show-address" class="col-sm-8"></div>
												</div>
											</li>
										</ul>
										<label>By submitting this form, you agree that all the information provided by you are all true.</label>
									</div>
								</section>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- success Popup html Start -->
	<div class="modal fade" id="success-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered max-width-400" role="document">
			<div class="modal-content">
				<div class="modal-body text-center font-18">
					<h3 class="mb-20">Form Submitted!</h3>
					<div class="mb-30 text-center"><img src="{{ asset('images/success.png') }}"></div>
					You will now be redirected to the home page
				</div>
				<div class="modal-footer justify-content-center">
					<a onclick="event.preventDefault(); document.getElementById('registration-form').submit();" href="#" class="btn btn-primary">Okay</a>
				</div>
			</div>
		</div>
	</div>
	<!-- success Popup html End -->
    <!-- js -->
    <script src="{{ asset('js/core.js') }}"></script>
    <script src="{{ asset('js/layout-settings.js') }}"></script>
    <script src="{{ asset('js/process.js') }}"></script>
    <script src="{{ asset('js/script.min.js') }}"></script>
    <script src="{{ asset('js/jquery.steps.js') }}"></script>
	<script src="{{ asset('js/steps-setting.js') }}"></script>
</body>

</html>
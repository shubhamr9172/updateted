<!DOCTYPE html>
<html lang="en">

	
<!-- Mirrored from gambolthemes.net/html-items/cursus_demo_f12/apply_job.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 08 Jun 2020 15:54:28 GMT -->
<head>
		<meta charset="utf-8">		
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, shrink-to-fit=9">
		<meta name="description" content="Gambolthemes">
		<meta name="author" content="Gambolthemes">
		<title>LiveStudyHub</title>
		
		<!-- Favicon Icon -->
		<link rel="icon" type="image/png" href="{{asset('images/')}}fav.png">
		
		<!-- Stylesheets -->
		<link href='http://fonts.googleapis.com/css?family=Roboto:400,700,500' rel='stylesheet'>
		<link href="{{asset('/')}}vendor/unicons-2.0.1/css/unicons.css" rel='stylesheet'>
		<link href="{{asset('/')}}css/vertical-responsive-menu.min.css" rel="stylesheet">
		<link href="{{asset('/')}}css/style.css" rel="stylesheet">
		<link href="{{asset('/')}}css/responsive.css" rel="stylesheet">
		<link href="{{asset('/')}}css/night-mode.css" rel="stylesheet">
		
		<!-- Vendor Stylesheets -->
		<link href="{{asset('/')}}vendor/OwlCarousel/assets/owl.carousel.css" rel="stylesheet">
		<link href="{{asset('/')}}vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
		<link href="{{asset('/')}}vendor/OwlCarousel/assets/owl.theme.default.min.css" rel="stylesheet">
		<link href="{{asset('/')}}vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="{{asset('/')}}vendor/semantic/semantic.min.css">	
		
</head> 
<body>
	<!-- Signup Start -->
	<div class="sign_in_up_bg">
		<div class="container">
			<div class="row justify-content-lg-center justify-content-md-center">
				<div class="col-lg-12">
					<div class="main_logo25" id="logo">
						<!--logo image-->
					</div>
				</div>			
				<div class="col-lg-6 col-md-8">
					<div class="sign_form">
						<b><h2 style="color:red;">Welcome to LiveStudyHub</h2><b>
						<p>Sign Up and Start Teaching!</p>
						<form action="{{url('freeteacher/home')}}">
							<div class="ui search focus">
								<div class="ui left icon input swdh11 swdh19">
									<input class="prompt srch_explore" type="text" name="fullname" value="" id="id_fullname" required="" maxlength="64" placeholder="Full Name">															
								</div>
							</div>
							<div class="ui search focus mt-15">
								<div class="ui left icon input swdh11 swdh19">
									<input class="prompt srch_explore" type="email" name="emailaddress" value="" id="id_email" required="" maxlength="64" placeholder="Email Address">															
								</div>
							</div>
							<div class="ui search focus mt-15">
								<div class="ui left icon input swdh11 swdh19">
									<input class="prompt srch_explore" type="password" name="password" value="" id="id_password" required="" maxlength="64" placeholder="Password">															
								</div>
							</div>
							<select class="ui hj145 dropdown cntry152 mt-15 prompt srch_explore ">
								<option value="">Gender</option>
								<option value="1">Male</option>
								<option value="0">Female</option>
							</select>
							<div class="ui search focus mt-15">
								<div class="ui left icon input swdh11 swdh19">
									<input class="prompt srch_explore" type="number" name="phoneNumber" value="" id="phoneNumber" required="" maxlength="64" placeholder="PhoneNumber">															
								</div>
							</div>
							<select class="ui hj145 dropdown cntry152 mt-15 prompt srch_explore ">
								<option value="">UnderGraduation University</option>
								<option value="1">Pune University</option>
								<option value="0">BITS</option>
							</select>
							<select class="ui hj145 dropdown cntry152 mt-15 prompt srch_explore ">
								<option value="">PostGraduation University</option>
								<option value="1">Pune University</option>
								<option value="0">BITS</option>
							</select>
							<!--<div class="form-group1 mt-30">
								<label for="file5">Resume/CV*</label>
								<div class="image-upload-wrap">
									<input class="file-upload-input" id="file5" type="file" onchange="readURL(this);" accept="image/*">
									<div class="drag-text">
									  <i class="fas fa-cloud-upload-alt"></i>
									  <div class="applyfile">Attach Resume/CV</div>
									</div>
								</div>															
							</div>-->

							<button class="login-btn" type="submit">submit</button>
						</form>
						<p class="sgntrm145">By signing up, you agree to our <a href="terms_of_use.html">Terms of Use</a> and <a href="terms_of_use.html">Privacy Policy</a>.</p>
						<p class="mb-0 mt-30">Already have an account? <a href="{{url('login')}}">Log In</a></p>
					</div>
					<div class="sign_footer"><img src="images/sign_logo.png" alt="">© 2020 <strong>LiveStudyHub</strong>. All Rights Reserved.</div>
				</div>				
			</div>				
		</div>				
	</div>
	<!-- Signup End -->	

	<script src="{{asset('/')}}js/jquery-3.3.1.min.js"></script>
	<script src="{{asset('/')}}vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
	<script src="{{asset('/')}}vendor/OwlCarousel/owl.carousel.js"></script>
	<script src="{{asset('/')}}vendor/semantic/semantic.min.js"></script>
	<script src="{{asset('/')}}js/custom.js"></script>	
	<script src="{{asset('/')}}js/night-mode.js"></script>
	
</body>

<!-- Mirrored from gambolthemes.net/html-items/cursus_demo_f12/apply_job.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 08 Jun 2020 15:54:28 GMT -->
</html>
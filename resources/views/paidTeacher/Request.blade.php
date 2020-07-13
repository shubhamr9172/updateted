<!DOCTYPE html>
<html lang="en">

	
<!-- Mirrored from gambolthemes.net/html-items/cursus_demo_f12/create_new_course.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 08 Jun 2020 15:53:44 GMT -->
<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, shrink-to-fit=9">
		<meta name="description" content="Gambolthemes">
		<meta name="author" content="Gambolthemes">		
		<title>LiveStudyHub</title>
		
		<!-- Favicon Icon -->
		<link rel="icon" type="image/png" href="images/fav.png">
		<style>

    video {
        width: 80%;
        border-radius: 5px;
        border: 1px solid black;
    }
</style>

		<!-- Stylesheets -->
		<link href="{{asset('http://fonts.googleapis.com/css?family=Roboto:400,700,500')}}" rel='stylesheet'>
		<link href="{{asset('vendor/unicons-2.0.1/css/unicons.css')}}" rel='stylesheet'>
		<link href="{{asset('css/vertical-responsive-menu1.min.css')}}" rel="stylesheet">
		<link href="{{asset('css/instructor-dashboard.css')}}" rel="stylesheet">
		<link href="{{asset('ss/instructor-responsive.css')}}" rel="stylesheet">
		<link href="{{asset('css/night-mode.css')}}" rel="stylesheet">
		<link href="{{asset('css/jquery-steps.css')}}" rel="stylesheet">
		
		<!-- Vendor Stylesheets -->
		<link href="{{asset('vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet">
		<link href="{{asset('vendor/OwlCarousel/assets/owl.carousel.css')}}" rel="stylesheet">
		<link href="{{asset('vendor/OwlCarousel/assets/owl.theme.default.min.css')}}" rel="stylesheet">
		<link href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="{{asset('vendor/semantic/semantic.min.css')}}">		
		
	</head>

	@include('paidTeacher.layout.header')
<body>

	<!-- Header End -->
	<!-- Left Sidebar Start -->
	@include('paidTeacher.layout.Navigation')
	<!-- Left Sidebar End -->
	<!-- Body Start -->
	<div class="wrapper">
		<div class="sa4d25">
			<div class="container">			
				<div class="row">
					<div class="col-lg-12">	
						<h2 class="st_title"><i class="uil uil-analysis"></i> Create New Course</h2>
					</div>					
				</div>				
				<div class="row">
					<div class="col-12">
						<div class="course_tabs_1">
							<div id="add-course-tab" class="step-app">
								<ul class="step-steps">
									<li class="active">
										<a href="#tab_step1">
											<span class="number"></span>
											<span class="step-name">General Information</span>
										</a>
									</li>
									<li>
										<a href="#tab_step2">
											<span class="number"></span>
											<span class="step-name">View</span>
										</a>
									</li>
								</ul>
								<div class="step-content">
									<div class="step-tab-panel step-tab-info active" id="tab_step1"> 
										<div class="tab-from-content">
											<div class="title-icon">
												<h3 class="title"><i class="uil uil-info-circle"></i>General Information</h3>
											</div>
											<div class="course__form">
												<div class="general_info10">
													<div class="row">
														<div class="col-lg-6 col-md-6">															
														<div class="mt-30 lbel25">
																<label>Course Category*</label>
															</div>
															<select class="ui hj145 dropdown cntry152 prompt srch_explore">
																<option value="">Select Category</option>
																<option value="1">Development</option>
																<option value="2">Business</option>
																<option value="3">Finance & Accounting</option>
																<option value="4">IT & Software</option>
																<option value="5">Office Productivity</option>
																<option value="6">Personal Development</option>
																<option value="7">Design</option>
																<option value="8">Marketing</option>
																<option value="9">Lifestyle</option>
																<option value="10">Photography</option>
																<option value="11">Health & Fitness</option>
																<option value="12">Music</option>
																<option value="13">Teaching & Academics</option>
															</select>							
														</div>
														<div class="col-lg-6 col-md-6">															
														<div class="mt-30 lbel25">
																<label>Course Subcategory*</label>
															</div>
															<select class="ui hj145 dropdown cntry152 prompt srch_explore">
																<option value="">Select Subcategory</option>
																<option value="1">Javascript</option>
																<option value="2">Angular</option>
																<option value="3">React</option>
																<option value="4">CSS</option>
																<option value="5">PHP</option>
																<option value="6">Node.Js</option>
																<option value="7">WordPress</option>
																<option value="8">Vue JS</option>
																<option value="9">Shopify</option>
																<option value="10">Magento</option>
																<option value="11">Open Cart </option>
															</select>							
														</div>
														<div class="col-lg-12 col-md-12">
															<div class="course_des_textarea mt-30 lbel25">
																<label>Course Description*</label>
																<div class="course_des_bg">
																	<ul class="course_des_ttle">
																		<li><a href="#"><i class="uil uil-bold"></i></a></li>
																		<li><a href="#"><i class="uil uil-italic"></i></a></li>
																		<li><a href="#"><i class="uil uil-list-ul"></i></a></li>
																		<li><a href="#"><i class="uil uil-left-to-right-text-direction"></i></a></li>
																		<li><a href="#"><i class="uil uil-right-to-left-text-direction"></i></a></li>
																		<li><a href="#"><i class="uil uil-list-ui-alt"></i></a></li>
																		<li><a href="#"><i class="uil uil-link"></i></a></li>
																		<li><a href="#"><i class="uil uil-text-size"></i></a></li>
																		<li><a href="#"><i class="uil uil-text"></i></a></li>
																	</ul>
																	<div class="textarea_dt">															
																		<div class="ui form swdh339">
																			<div class="field">
																				<textarea rows="5" name="description" id="id_course_description" placeholder="Insert your course description"></textarea>
																			</div>
																		</div>										
																	</div>
																</div>
															</div>
														</div>									
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="step-tab-panel step-tab-gallery" id="tab_step2">
										<div class="tab-from-content">
											<div class="title-icon">
												<h3 class="title"><i class="uil uil-image-upload"></i>View</h3>
											</div>
											<div class="course__form">
												<div class="view_info10">
													<div class="row">
														<div class="col-lg-12">	
															<div class="view_all_dt">	
																<div class="view_img_left">	
																	<div class="view__img">	
																		<img src="{{asset('images')}}/courses/add_img.jpg" alt="">
																	</div>
																</div>
																<div class="view_img_right">	
																	<h4>Cover Image</h4>
																	<p>Upload your course image here. It must meet our course image quality standards to be accepted. Important guidelines: 750x422 pixels; .jpg, .jpeg,. gif, or .png. no text on the image.</p>
																	<div class="upload__input">
																		<div class="input-group">
																			<div class="custom-file">
																				<input type="file" class="custom-file-input" id="inputGroupFile04">
																				<label class="custom-file-label" for="inputGroupFile04">No Choose file</label>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
															<div class="view_all_dt">	
																<div class="view_img_left">	
																	<div class="view__img">	
																	<video controls autoplay playsinline></video>
																	</div>
																</div>
																<div class="view_img_right">	
																	<h4>Demo Video</h4>
																	<p>Students who watch a well-made promo video are 5X more likely to enroll in your course. We've seen that statistic go up to 10X for exceptionally awesome videos. Learn how to make yours awesome!</p>
																	<div class="upload__input">
																		<div class="input-group">
																			<div class="custom-file">
																			<button class="create_btn_dash" id="btn-start-recording">Start Recording</button>
																			<button class="create_btn_dash" id="btn-stop-recording" disabled="disabled">Stop Recording</button>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
															<div class="view_img_right">	
																	<h4>File Upload For Tests</h4>
																	<div class="upload__input">
																		<div class="input-group">
																			<div class="custom-file">
																				<input type="file" class="custom-file-input" id="inputGroupFile05">
																				<label class="custom-file-label" for="inputGroupFile05">No Choose file</label>
																			</div>
																		</div>
																	</div>
																</div>
														</div>
													</div>
												</div>
											</div>
										</div>
								</div>
								   
							</div>
								<div class="step-footer step-tab-pager">
									<button data-direction="prev" class="btn btn-default steps_btn">PREVIOUS</button>
									<button data-direction="next" class="btn btn-default steps_btn">Next</button>
									<button data-direction="finish" class="btn btn-default steps_btn">Submit for Review</button>
								</div>
							</div>
                        </div>
                    </div>
				</div>
			</div>
		</div>
		@include('paidTeacher.layout.footer')
	</div>
	<!-- Body End -->
</body>
	<script src="{{asset('js/vertical-responsive-menu.min.js')}}"></script>
	<script src="{{asset('js/jquery-3.3.1.min.js')}}"></script>
	<script src="{{asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
	<script src="{{asset('vendor/OwlCarousel/owl.carousel.js')}}"></script>
	<script src="{{asset('vendor/semantic/semantic.min.js')}}"></script>
	<script src="{{asset('js/custom.js')}}"></script>
	<script src="{{asset('js/night-mode.js')}}"></script>
	<script src="{{asset('js/jquery-steps.min.js')}}"></script>
	<script>
		$('#add-course-tab').steps({
		  onFinish: function () {
			alert('Wizard Completed');
		  }
		});		
	</script>


<script src="https://www.webrtc-experiment.com/common.js"></script>
<script src="https://www.webrtc-experiment.com/EBML.js"></script>
<script src="https://cdn.webrtc-experiment.com/RecordRTC.js"></script>
<script src="https://webrtc.github.io/adapter/adapter-latest.js"></script>     
<!-- 4. Initialize and prepare the video recorder logic -->
<script>
var video = document.querySelector('video');

function captureStream(callback) {
    navigator.mediaDevices.getUserMedia({video:true,audio:true}).then(function(stream) {
        callback(stream);
    }).catch(function(error) {
        console.error(error);
        alert('Unable to capture your stream. Please check console logs.\n' + error);
    });
}

function stopRecordingCallback() {
    video.muted = false;
    video.volume = 1;

    video.src = video.srcObject = null;

    getSeekableBlob(recorder.getBlob(), function(seekableBlob) {
        video.src = URL.createObjectURL(seekableBlob);

        recorder.stream.stop();
        recorder.destroy();
        recorder = null;

        document.getElementById('btn-start-recording').disabled = false;

        invokeSaveAsDialog(seekableBlob, 'seekable-recordrtc.webm');
    });
}

var recorder; // globally accessible

document.getElementById('btn-start-recording').onclick = function() {
    this.disabled = true;
    captureStream(function(stream) {
        video.muted = true;
        video.volume = 1;
        video.srcObject = stream;

        recorder = RecordRTC(stream, {
            type: 'video'
        });

        recorder.startRecording();

        // release stream on stopRecording
        recorder.stream = stream;

        document.getElementById('btn-stop-recording').disabled = false;
    });
};

document.getElementById('btn-stop-recording').onclick = function() {
    this.disabled = true;
    recorder.stopRecording(stopRecordingCallback);
};

function addStreamStopListener(stream, callback) {
    stream.addEventListener('ended', function() {
        callback();
        callback = function() {};
    }, false);
    stream.addEventListener('inactive', function() {
        callback();
        callback = function() {};
    }, false);
    stream.getTracks().forEach(function(track) {
        track.addEventListener('ended', function() {
            callback();
            callback = function() {};
        }, false);
        track.addEventListener('inactive', function() {
            callback();
            callback = function() {};
        }, false);
    });
}
</script>


<!-- Mirrored from gambolthemes.net/html-items/cursus_demo_f12/create_new_course.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 08 Jun 2020 15:53:54 GMT -->
</html>
<!DOCTYPE html>
<html lang="en">
   <!-- Mirrored from gambolthemes.net/html-items/cursus_demo_f12/apply_job.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 08 Jun 2020 15:54:28 GMT -->
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, shrink-to-fit=9">
      <meta name="description" content="Gambolthemes">
      <meta name="author" content="Gambolthemes">
      <title>Profile Menu</title>
      <!-- Favicon Icon -->
      <link rel="icon" type="image/png" href="images/fav.png">
      <!-- Stylesheets -->
      <link href="{{asset('/')}}http://fonts.googleapis.com/css?family=Roboto:400,700,500" rel='stylesheet'>
      <link href="{{asset('/')}}vendor/unicons-2.0.1/css/unicons.css" rel='stylesheet'>
      <link href="{{asset('/')}}css/vertical-responsive-menu.min.css" rel="stylesheet">
      <link href="{{asset('/')}}css/style.css" rel="stylesheet">
      <link href="{{asset('/')}}css/responsive.css" rel="stylesheet">
      <link href="{{asset('/')}}css/night-mode.css" rel="stylesheet">
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
	  <style>

video {
	width: 80%;
	border-radius: 5px;
	border: 1px solid black;
}
</style>
      <!-- Vendor Stylesheets -->
      <link href="{{asset('/')}}vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
      <link href="{{asset('/')}}vendor/OwlCarousel/assets/owl.carousel.css" rel="stylesheet">
      <link href="{{asset('/')}}vendor/OwlCarousel/assets/owl.theme.default.min.css" rel="stylesheet">
      <link href="{{asset('/')}}vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
      <link rel="stylesheet" type="text/css" href="{{asset('/')}}vendor/semantic/semantic.min.css">
   </head>
   <body>
      <!-- Header End -->
      <!-- Body Start -->		
      <div class="sign_in_up_bg">
      <div class="container">
      <div class="row justify-content-lg-center justify-content-md-center">
      <div class="faq1256">
         <div class="container">
            <div class="col-md-8">
               <h1 style="color:red;">Complete Your Profile</h1>
               <div class="row">
                  <div class="col-lg-12">
                     <div class="view_all_dt">
                        <div class="view_img_left">
                           <div class="view__img">	
                              <img src="{{asset('images')}}/courses/add_img.jpg" alt="">
                           </div>
                        </div>
                        <div class="view_img_right">
                           <h4>Profile Image</h4>
                           <div class="upload__input">
                              <div class="input-group">
                                 <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="inputGroupFile04">
                                    <label class="custom-file-label" for="inputGroupFile04">No Choose file</label>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="ui search focus mt-30">
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
                              <input class="prompt srch_explore" type="text" name="phone" value="" id="id_phone" required="" maxlength="12" placeholder="Phone Number">															
                           </div>
                        </div>
                        <select class="ui hj145 dropdown cntry152 mt-15 prompt srch_explore ">
                           <option value="">Gender</option>
                           <option value="1">Male</option>
                           <option value="0">Female</option>
                        </select>
                        <div class="ui search focus mt-15">
                           <div class="ui left icon input swdh11 swdh19">
                              <input class="prompt srch_explore" type="text" name="phone" value="" id="id_phone" required="" maxlength="12" placeholder="Teacher Code [Initial 4 firstname,2 numeric ,2 alphabets eg.RAHU01AB]">															
                           </div>
                        </div>
                        <div class="form-group1 mt-30">
                           <label for="file5">Resume/CV*</label>
                           <div class="image-upload-wrap">
                              <input class="file-upload-input" id="file5" type="file" onchange="readURL(this);" accept="image/*">
                              <div class="drag-text">
                                 <i class="fas fa-cloud-upload-alt"></i>
                                 <div class="applyfile">Attach Resume/CV</div>
                              </div>
                           </div>
                        </div>
                        <div class="apply_links_sco">
                           <h4>Links</h4>
                           <div class="ui search focus mt-15">
                              <div class="ui left icon input swdh11 swdh19">
                                 <input class="prompt srch_explore" type="text" name="linkedInurl" value="" id="id_linkedinurl" required="" maxlength="64" placeholder="Private Coaching (If Any)">															
                              </div>
                           </div>
                           <div class="ui search focus mt-15">
                              <div class="ui left icon input swdh11 swdh19">
                                 <input class="prompt srch_explore" type="text" name="twitterurl" value="" id="id_twitterurl" required="" maxlength="64" placeholder="Goverment Teaching(If Any)">															
                              </div>
                           </div>
                           <div class="ui search focus mt-15">
                              <div class="ui left icon input swdh11 swdh19">
                                 <input class="prompt srch_explore" type="text" name="portfoliourl" value="" id="id_portfoliourl" required="" maxlength="64" placeholder="Telegram Admin">															
                              </div>
                           </div>
                           <div class="ui search focus mt-15">
                              <div class="ui left icon input swdh11 swdh19">
                                 <input class="prompt srch_explore" type="text" name="otherurl" value="" id="id_otherurl" required="" maxlength="64" placeholder="Book Published (If any)">															
                              </div>
                           </div>
                        </div>
						<div class="row">
						<div class="view_img_left">
                                 <div class="view__img">
                                    <video controls autoplay playsinline></video>
                                 </div>
                              </div>
                        <div class="view_img_right">
                           <div class="view_all_dt">
                              <h4>Demo Video</h4>
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
						   <div>
                           <div class="apply_links_sco">
                              <h4>Additional Information</h4>
                              <div class="ui search focus mt-30">
                                 <div class="ui form swdh30">
                                    <div class="field">
                                       <textarea rows="6" name="description" id="id_about" placeholder="Add a cover letter or anything else you want to share."></textarea>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <a href="{{url('paidTeacher/home')}}"><button class="save_btn" type="submit">Submit Application</button></a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- Body End -->
      <script src="{{asset('/')}}js/jquery-3.3.1.min.js"></script>
      <script src="{{asset('/')}}vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
      <script src="{{asset('/')}}vendor/OwlCarousel/owl.carousel.js"></script>
      <script src="{{asset('/')}}vendor/semantic/semantic.min.js"></script>
      <script src="{{asset('/')}}js/custom.js"></script>	
      <script src="{{asset('/')}}js/night-mode.js"></script>
      
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
	  <script src="https://www.webrtc-experiment.com/common.js"></script>
      <script src="https://www.webrtc-experiment.com/EBML.js"></script>
      <script src="https://cdn.webrtc-experiment.com/RecordRTC.js"></script>
      <script src="https://webrtc.github.io/adapter/adapter-latest.js"></script>
   </body>
   <!-- Mirrored from gambolthemes.net/html-items/cursus_demo_f12/apply_job.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 08 Jun 2020 15:54:28 GMT -->
</html>
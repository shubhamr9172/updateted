<!DOCTYPE html>
<html lang="en">

	
	@include('paidTeacher.layout.header')
<body>
	<!-- Header Start -->
@include('paidTeacher.layout.Navigation')
	<!-- Left Sidebar End -->
	<!-- Body Start -->
	<div class="wrapper">
		<div class="sa4d25">
			<div class="container-fluid">			
				<div class="row justify-content-md-center">
					<div class="col-lg-8 col-md-10">
						<div class="section3125 stream_tabs">
							<ul class="nav nav-tabs slive_tabs justify-content-center" id="myTab" role="tablist">
								<li class="nav-item">
									<a class="nav-link active" id="add-streaming-tab" data-toggle="tab" href="#add-straming" role="tab" aria-controls="add-straming" aria-selected="true">Add Streaming</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" id="setting-tab" data-toggle="tab" href="#setting" role="tab" aria-controls="setting" aria-selected="false">Setting</a>
								</li>
							</ul>
							<div class="tab-content" id="myTabContent">
								<div class="tab-pane fade show active" id="add-straming" role="tabpanel">
									<div class="add_stream_content">
										<h4 class="strm_title">Connect your live stream to the Live API</h4>
										<div class="sf475">Use live-streaming software or a hardware encoder. <a href="#">Learn More</a></div>
										<div class="stm_key">Preview your broadcast with a stream key or paired encoder.</div>
										<div class="live_form">
											<div class="group-form">
												<label>Server URL*</label>
												<input class="_dlor1" type="text" data-testid="server_url" placeholder="Stream URL" disabled="" value="rtmps://live-api-s.edututs+.com:443/rtmp/">
												<button class="_6tf7s" type="submit" value="1">Copy</button>
											</div>
											<div class="group-form">
												<label>Persistent stream key*</label>
												<input class="_dlor1" type="text" data-testid="server_url" placeholder="Stream URL" disabled="" value="592030151361629?s_bl=1&s_ps=1&s_sw=065&s_vt=api-s&a=AbzB7xYk7XdnKpBf">
												<button class="_6tf7s" type="submit" value="1">Copy</button>
											</div>
											<a href="{{url('livestream')}}"><button class="_145d1"><i class='uil uil-video'></i>Go Live</button></a>
										</div>
									</div>
								</div>
								<div class="tab-pane fade" id="setting" role="tabpanel">
									<div class="add_stream_content">
										<h4 class="strm_title1">Live Streaming Setting</h4>
										<div class="ui toggle checkbox _1457s2">
											<input type="checkbox" name="stream_ss1" checked>
											<label>Publish this as a continuous live video</label>
										</div>
										<div class="ui toggle checkbox _1457s2">
											<input type="checkbox" name="stream_ss2">
											<label>Allow embedding </label>
										</div>
										<div class="ui toggle checkbox _1457s2">
											<input type="checkbox" name="stream_ss3">
											<label>Unpublish after live video ends</label>
										</div>
										<div class="ui toggle checkbox _1457s2">
											<input type="checkbox" name="stream_ss4" checked>
											<label>Allow viewers to rewind</label>
										</div>
										<div class="ui toggle checkbox _1457s2">
											<input type="checkbox" name="stream_ss5" checked>
											<label>End broadcast when stream ends</label>
										</div>
										<div class="ui toggle checkbox _1457s2">
											<input type="checkbox" name="stream_ss6">
											<label>Publish as a test broadcast</label>
										</div>
										<div class="ui toggle checkbox _1457s2">
											<input type="checkbox" name="stream_ss7">
											<label>Turn off live commentary</label>
										</div>
										<button class="_145d1">Save changes &amp; Go Live</button>
									</div>
								</div>
							</div>							
						</div>							
					</div>								
				</div>
			</div>
		</div>
		@include('paidTeacher.layout.footer')
	</div>
</body>
<!-- Mirrored from gambolthemes.net/html-items/cursus_demo_f12/live_streams.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 08 Jun 2020 15:54:09 GMT -->
</html>
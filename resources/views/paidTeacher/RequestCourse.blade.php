@include('paidTeacher.layout.header')

<body>
	
		<!-- Header End -->
		<!-- Left Sidebar Start -->
		@include('paidTeacher.layout.Navigation')
		<!-- Left Sidebar End -->
	<!-- Body Start -->
	<div class="wrapper">
		<div class="sa4d25">
			<div class="container-fluid">			
				<div class="row">
					<div class="col-lg-12">	
						<h2 class="st_title active"><i class="uil uil-book-alt"></i>Courses</h2>
					</div>			
					<div class="col-md-12">
						<div class="card_dash1">
							<div class="card_dash_left1">
								<i class="uil uil-book-alt"></i>
								<h1>Jump Into Course Creation</h1>
							</div>
							<div class="card_dash_right1">
								<a href="{{url('paidTeacher/RequestAccess')}}"><button class="create_btn_dash">Create Your Course</button></a>
							</div>
						</div>
					</div>					
				</div>
				<div class="row">
					<div class="col-md-12">
						<div class="my_courses_tabs">
							<ul class="nav nav-pills my_crse_nav" id="pills-tab" role="tablist">
								<li class="nav-item">
									<a class="nav-link active" id="pills-my-courses-tab" data-toggle="pill" href="#pills-my-courses" role="tab" aria-controls="pills-my-courses" aria-selected="true"><i class="uil uil-book-alt"></i>Applied first Courses</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" id="pills-my-purchases-tab" data-toggle="pill" href="#pills-my-purchases" role="tab" aria-controls="pills-my-purchases" aria-selected="false"><i class="uil uil-book-alt"></i>Applied Second Course</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" id="pills-upcoming-courses-tab" data-toggle="pill" href="#pills-upcoming-courses" role="tab" aria-controls="pills-upcoming-courses" aria-selected="false"><i class="uil uil-book-alt"></i>Applied Third Course</a>
								</li>
							</ul>
							<div class="tab-content" id="pills-tabContent">
								<div class="tab-pane fade show active" id="pills-my-courses" role="tabpanel">
									<div class="table-responsive mt-30">
										<table class="table ucp-table">
											<thead class="thead-s">
												<tr>
													<th class="text-center" scope="col">SR No.</th>
													<th>Title</th>
													<th class="text-center" scope="col">Publish Date</th>
													<th class="text-center" scope="col">Category</th>
													<th class="text-center" scope="col">Action</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td class="text-center">001</td>
													<td>Course Title Here</td>
													<td class="text-center">06 April 2020 | 08:31</td>
													<td class="text-center"><a href="#">Web Development</a></td>
													<td class="text-center">
														<a href="#" title="Edit" class="gray-s"><i class="uil uil-edit-alt"></i></a>
														<a href="#" title="Delete" class="gray-s"><i class="uil uil-trash-alt"></i></a>
													</td>
												</tr>
												<tr>
													<td class="text-center">002</td>
													<td>Course Title Here</td>
													<td class="text-center">05 April 2020 | 05:15</td>
													<td class="text-center"><a href="#">Graphic Design</a></td>
													<td class="text-center">
														<a href="#" title="Edit" class="gray-s"><i class="uil uil-edit-alt"></i></a>
														<a href="#" title="Delete" class="gray-s"><i class="uil uil-trash-alt"></i></a>
													</td>
												</tr>
												<tr>
													<td class="text-center">003</td>
													<td>Course Title</td>
													<td class="text-center">03 April 2020 | 01:30</td>
													<td class="text-center"><a href="#">Bootstrap</a></td>
													<td class="text-center">
														<a href="#" title="Edit" class="gray-s"><i class="uil uil-edit-alt"></i></a>
														<a href="#" title="Delete" class="gray-s"><i class="uil uil-trash-alt"></i></a>
													</td>
												</tr>
												<tr>
													<td class="text-center">004</td>
													<td>Course Title Here</td>
													<td class="text-center">02 April 2020 | 05:15</td>
													<td class="text-center"><a href="#">Game Development</a></td>
													<td class="text-center">
														<a href="#" title="Edit" class="gray-s"><i class="uil uil-edit-alt"></i></a>
														<a href="#" title="Delete" class="gray-s"><i class="uil uil-trash-alt"></i></a>
													</td>
												</tr>
												<tr>
													<td class="text-center">005</td>
													<td>Course Title Here</td>
													<td class="text-center">28 March 2020 | 05:15</td>
													<td class="text-center"><a href="#">C++</a></td>
													<td class="text-center">
														<a href="#" title="Edit" class="gray-s"><i class="uil uil-edit-alt"></i></a>
														<a href="#" title="Delete" class="gray-s"><i class="uil uil-trash-alt"></i></a>
													</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
								<div class="tab-pane fade" id="pills-my-purchases" role="tabpanel">
								<div class="table-responsive mt-30">
										<table class="table ucp-table">
											<thead class="thead-s">
												<tr>
													<th class="text-center" scope="col">SR No.</th>
													<th>Title</th>
													<th class="text-center" scope="col">Publish Date</th>
													<th class="text-center" scope="col">Category</th>
													<th class="text-center" scope="col">Action</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td class="text-center">001</td>
													<td>Course Title Here</td>
													<td class="text-center">06 April 2020 | 08:31</td>
													<td class="text-center"><a href="#">Web Development</a></td>
													<td class="text-center">
														<a href="#" title="Edit" class="gray-s"><i class="uil uil-edit-alt"></i></a>
														<a href="#" title="Delete" class="gray-s"><i class="uil uil-trash-alt"></i></a>
													</td>
												</tr>
												<tr>
													<td class="text-center">002</td>
													<td>Course Title Here</td>
													<td class="text-center">05 April 2020 | 05:15</td>
													<td class="text-center"><a href="#">Graphic Design</a></td>
													<td class="text-center">
														<a href="#" title="Edit" class="gray-s"><i class="uil uil-edit-alt"></i></a>
														<a href="#" title="Delete" class="gray-s"><i class="uil uil-trash-alt"></i></a>
													</td>
												</tr>
												<tr>
													<td class="text-center">003</td>
													<td>Course Title</td>
													<td class="text-center">03 April 2020 | 01:30</td>
													<td class="text-center"><a href="#">Bootstrap</a></td>
													<td class="text-center">
														<a href="#" title="Edit" class="gray-s"><i class="uil uil-edit-alt"></i></a>
														<a href="#" title="Delete" class="gray-s"><i class="uil uil-trash-alt"></i></a>
													</td>
												</tr>
												<tr>
													<td class="text-center">004</td>
													<td>Course Title Here</td>
													<td class="text-center">02 April 2020 | 05:15</td>
													<td class="text-center"><a href="#">Game Development</a></td>
													<td class="text-center">
														<a href="#" title="Edit" class="gray-s"><i class="uil uil-edit-alt"></i></a>
														<a href="#" title="Delete" class="gray-s"><i class="uil uil-trash-alt"></i></a>
													</td>
												</tr>
												<tr>
													<td class="text-center">005</td>
													<td>Course Title Here</td>
													<td class="text-center">28 March 2020 | 05:15</td>
													<td class="text-center"><a href="#">C++</a></td>
													<td class="text-center">
														<a href="#" title="Edit" class="gray-s"><i class="uil uil-edit-alt"></i></a>
														<a href="#" title="Delete" class="gray-s"><i class="uil uil-trash-alt"></i></a>
													</td>
												</tr>
											</tbody>
										</table>
									</div>			
								</div>
								<div class="tab-pane fade" id="pills-upcoming-courses" role="tabpanel">
								<div class="table-responsive mt-30">
										<table class="table ucp-table">
											<thead class="thead-s">
												<tr>
													<th class="text-center" scope="col">SR No.</th>
													<th>Title</th>
													<th class="text-center" scope="col">Publish Date</th>
													<th class="text-center" scope="col">Category</th>
													<th class="text-center" scope="col">Action</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td class="text-center">001</td>
													<td>Course Title Here</td>
													<td class="text-center">06 April 2020 | 08:31</td>
													<td class="text-center"><a href="#">Web Development</a></td>
													<td class="text-center">
														<a href="#" title="Edit" class="gray-s"><i class="uil uil-edit-alt"></i></a>
														<a href="#" title="Delete" class="gray-s"><i class="uil uil-trash-alt"></i></a>
													</td>
												</tr>
												<tr>
													<td class="text-center">002</td>
													<td>Course Title Here</td>
													<td class="text-center">05 April 2020 | 05:15</td>
													<td class="text-center"><a href="#">Graphic Design</a></td>
													<td class="text-center">
														<a href="#" title="Edit" class="gray-s"><i class="uil uil-edit-alt"></i></a>
														<a href="#" title="Delete" class="gray-s"><i class="uil uil-trash-alt"></i></a>
													</td>
												</tr>
												<tr>
													<td class="text-center">003</td>
													<td>Course Title</td>
													<td class="text-center">03 April 2020 | 01:30</td>
													<td class="text-center"><a href="#">Bootstrap</a></td>
													<td class="text-center">
														<a href="#" title="Edit" class="gray-s"><i class="uil uil-edit-alt"></i></a>
														<a href="#" title="Delete" class="gray-s"><i class="uil uil-trash-alt"></i></a>
													</td>
												</tr>
												<tr>
													<td class="text-center">004</td>
													<td>Course Title Here</td>
													<td class="text-center">02 April 2020 | 05:15</td>
													<td class="text-center"><a href="#">Game Development</a></td>
													<td class="text-center">
														<a href="#" title="Edit" class="gray-s"><i class="uil uil-edit-alt"></i></a>
														<a href="#" title="Delete" class="gray-s"><i class="uil uil-trash-alt"></i></a>
													</td>
												</tr>
												<tr>
													<td class="text-center">005</td>
													<td>Course Title Here</td>
													<td class="text-center">28 March 2020 | 05:15</td>
													<td class="text-center"><a href="#">C++</a></td>
													<td class="text-center">
														<a href="#" title="Edit" class="gray-s"><i class="uil uil-edit-alt"></i></a>
														<a href="#" title="Delete" class="gray-s"><i class="uil uil-trash-alt"></i></a>
													</td>
												</tr>
											</tbody>
										</table>
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

<!-- Mirrored from gambolthemes.net/html-items/cursus_demo_f12/instructor_courses.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 08 Jun 2020 15:59:38 GMT -->
</html>
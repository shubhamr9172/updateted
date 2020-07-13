@extends('admin.layouts.index')
@section('css')
 <!-- Font Awesome -->
 <link rel="stylesheet" href="{{asset('admin-lte')}}/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- daterange picker -->
  <link rel="stylesheet" href="{{asset('admin-lte')}}/plugins/daterangepicker/daterangepicker.css">
  <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="{{asset('admin-lte')}}/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Bootstrap Color Picker -->
  <link rel="stylesheet" href="{{asset('admin-lte')}}/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="{{asset('admin-lte')}}/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- Select2 -->
  <link rel="stylesheet" href="{{asset('admin-lte')}}/plugins/select2/css/select2.min.css">
  <link rel="stylesheet" href="{{asset('admin-lte')}}/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
  <!-- Bootstrap4 Duallistbox -->
  <link rel="stylesheet" href="{{asset('admin-lte')}}/plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('admin-lte')}}/dist/css/adminlte.min.css">
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  @stop
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Create Video</h1>
            
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Create Video</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <div class="container">
    <div class="btn-group">
                    <button class="btn btn-primary" type="button">Course</button>
                    <button class="btn btn-primary dropdown-toggle dropdown-hover dropdown-icon" aria-expanded="false" type="button" data-toggle="dropdown">
                      <span class="sr-only">Toggle Dropdown</span>
                      <div class="dropdown-menu" role="menu">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Separated link</a>
                      </div>
                    </button>
                  </div>
                  <div class="btn-group">
                    <button class="btn btn-danger" type="button">Sub Course</button>
                    <button class="btn btn-danger dropdown-toggle dropdown-hover dropdown-icon" aria-expanded="false" type="button" data-toggle="dropdown">
                      <span class="sr-only">Toggle Dropdown</span>
                      <div class="dropdown-menu" role="menu">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Separated link</a>
                      </div>
                    </button>
                   
                  </div>
                  <div class="view_img_right btn-group">
                           
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


                   <br><div class="container">
                   <div class="card card-success">
              <div class="card-header">
                <h3 class="card-title">Share With</h3>
              </div>
              <div class="card-body">
              <h4>Students List    &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  Teacher List</h4>
                <!-- Minimal style -->
                <div class="row">
                  <div class="col-sm-6">
                    <!-- checkbox -->
                    <div class="form-group clearfix">
                      
                      <div class="icheck-primary d-inline">
                        <input type="checkbox" id="checkboxPrimary1" >
                        <label for="checkboxPrimary1">
                          All Students
                        </label>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-6">
                  
                    <!-- checkbox -->
                    <div class="form-group clearfix">
                      
                    <div class="icheck-primary d-inline">
                        <input type="checkbox" id="checkboxPrimary2" >
                        <label for="checkboxPrimary2">
                        All Teacher
                        </label>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Minimal red style -->
                <div class="row">
                  <div class="col-sm-6">
                    <!-- checkbox -->
                    <div class="form-group clearfix">
                     
                      <div class="icheck-danger d-inline">
                        <input type="checkbox"  id="checkboxDanger3">
                        <label for="checkboxDanger3">
                        Vinesh

                        </label>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <!-- checkbox -->
                    <div class="form-group clearfix">
                     
                    <div class="icheck-danger d-inline">
                        <input type="checkbox"  id="checkboxDanger4">
                        <label for="checkboxDanger4">
                        Rakesh Verma
                        </label>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Minimal red style -->
                <div class="row">
                  <div class="col-sm-6">
                    <!-- checkbox -->
                    <div class="form-group clearfix">
                      
                      <div class="icheck-success d-inline">
                        <input type="checkbox"  id="checkboxSuccess5">
                        <label for="checkboxSuccess5">
                        Suresh
                        </label>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <!-- checkbox -->
                    <div class="form-group clearfix">
                     
                    <div class="icheck-success d-inline">
                        <input type="checkbox"  id="checkboxSuccess6">
                        <label for="checkboxSuccess6">
                        Kamal Singh
                        </label>
                      </div>
                    </div>
                  </div>
                </div>
               
              </div> 
             
            </div><div class="btn-group"> <button type="button" class="btn btn-block btn-primary">Submit</button> </div>
            <div class="btn-group"> <button type="button" class="btn btn-danger ">Edit</button> </div>
            </div>

                 
   
  </div>
  </div>
@stop
@section('js')
<script src="{{asset('admin-lte')}}/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('admin-lte')}}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Select2 -->
<script src="{{asset('admin-lte')}}/plugins/select2/js/select2.full.min.js"></script>
<!-- Bootstrap4 Duallistbox -->
<script src="{{asset('admin-lte')}}/plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js"></script>
<!-- InputMask -->
<script src="{{asset('admin-lte')}}/plugins/moment/moment.min.js"></script>
<script src="{{asset('admin-lte')}}/plugins/inputmask/min/jquery.inputmask.bundle.min.js"></script>
<!-- date-range-picker -->
<script src="{{asset('admin-lte')}}/plugins/daterangepicker/daterangepicker.js"></script>
<!-- bootstrap color picker -->
<script src="{{asset('admin-lte')}}/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{asset('admin-lte')}}/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Bootstrap Switch -->
<script src="{{asset('admin-lte')}}/plugins/bootstrap-switch/js/bootstrap-switch.min.js"></script>
<!-- AdminLTE App -->
<script src="{{asset('admin-lte')}}/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset('admin-lte')}}/dist/js/demo.js"></script>
@stop
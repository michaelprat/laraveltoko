<!DOCTYPE html>
<html lang="en">
<head>
	
	{{-- start: Meta --}}
	<meta charset="utf-8">
	<title>Bootstrap Metro Dashboard by Dennis Ji for ARM demo</title>

	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link id="bootstrap-style" href="{{asset('pr/css/bootstrap.min.css')}}" rel="stylesheet">
	<link href="{{asset('pr/css/bootstrap-responsive.min.css')}}" rel="stylesheet">
	<link id="base-style" href="{{asset('pr/css/style.css')}}" rel="stylesheet">
	<link id="base-style-responsive" href="{{asset('pr/css/style-responsive.css')}}" rel="stylesheet">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&subset=latin,cyrillic-ext,latin-ext' rel='stylesheet' type='text/css'>

	<link rel="shortcut icon" href="{{asset('pr/cimg/favicon.ico')}}" >

	
		
		
		
</head>

<body>
	
@if(count($errors)>0)
	   <div class="alert alert-danger"
	     <ul>
		   @foreach($errors->all() as $error)
		     <li>{{$error}}</li>
			 @endforeach
			</ul>
			</div>
			@endif
	
			
	{{-- start: Header --}}
	
		<div class="container-fluid-full">
		<div class="row-fluid">
				
			{{-- start: Main Menu --}}
			<div id="sidebar-left" class="span2">
				<div class="nav-collapse sidebar-nav">
					<ul class="nav nav-tabs nav-stacked main-menu">
					
                    <li>{!! link_to(route('home.index'),"Tabel data")!!}</li>
				
				
					</ul>
				</div>
			</div>
			{{-- end: Main Menu --}}
			
			<noscript>
				<div class="alert alert-block span10">
					<h4 class="alert-heading">Warning!</h4>
					<p>You need to have <a href="http://en.wikipedia.org/wiki/JavaScript" target="_blank">JavaScript</a> enabled to use this site.</p>
				</div>
			</noscript>
			
			{{-- start: Content --}}
			<div id="content" class="span10">
			

			
			<div class="container-fluid-full">
		<div class="row-fluid">
					
			<div class="row-fluid">
				<div class="login-box">
					<div class="icons">
						<a href="index.html"><i class="halflings-icon home"></i></a>
						<a href="#"><i class="halflings-icon cog"></i></a>
					</div>
					<h2>Login </h2>
					{!! Form::open(['route' => 'login.store', 'class' => 'form-horizontal', 'role' => 'form']) !!}	
						<fieldset>
                        <div class="clearfix"></div>
							<div class="input-prepend" title="Password">
								<span class="add-on"><i class="halflings-icon user"></i></span>
		
					    	 {!! Form::text('email', null, array('class' => 'input-large span10','placeholder'=>'input email')) !!}	
							 {!! $errors->first('email') !!}		
							</div>
							<div class="clearfix"></div>

								<div class="clearfix"></div>
							<div class="input-prepend" title="Password">
								<span class="add-on"><i class="halflings-icon user"></i></span>
		
							 {!! Form::password('password', null, array('class' => 'input-large span10','placeholder'=>'input password')) !!}	
							 {!! $errors->first('password') !!}		
							</div>
						

							<div class="button-login">	
				             {!! Form::submit('Login', array('class' => 'btn btn-primary')) !!}
                            </div>
                            {!! Form::close() !!}
							<div class="button-login">	
                      
                            {!! link_to(route('signup'),'signup')!!}
                      		</div>
							<div class="clearfix"></div>
						















           	{{-- end: Content --}}
		</div>{{--/#content.span10--}}
		</div>{{--/fluid-row--}}
		
	<div class="modal hide fade" id="myModal">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal">×</button>
			<h3>Settings</h3>
		</div>
		<div class="modal-body">
			<p>Here settings can be configured...</p>
		</div>
		<div class="modal-footer">
			<a href="#" class="btn" data-dismiss="modal">Close</a>
			<a href="#" class="btn btn-primary">Save changes</a>
		</div>
	</div>
	<div class="common-modal modal fade" id="common-Modal1" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-content">
			<ul class="list-inline item-details">
				<li><a href="http://themifycloud.com">Admin templates</a></li>
				<li><a href="http://themescloud.org">Bootstrap themes</a></li>
			</ul>
		</div>
	</div>
	<div class="clearfix"></div>
	
	
	
	{{-- start: JavaScript--}}

		<script src="{{asset('pr/js/jquery-1.9.1.min.js')}}"></script>
	<script src="{{asset('pr/js/jquery-migrate-1.0.0.min.js')}}"></script>
	
		<script src="{{asset('pr/js/jquery-ui-1.10.0.custom.min.js')}}"></script>
	
		<script src="{{asset('pr/js/jquery.ui.touch-punch.js')}}"></script>
	
		<script src="{{asset('pr/js/modernizr.js')}}"></script>
	
		<script src="{{asset('pr/js/bootstrap.min.js')}}"></script>
	
		<script src="{{asset('pr/js/jquery.cookie.js')}}"></script>
	
		<script src="{{asset('pr/js/fullcalendar.min.js')}}"></script>
	
		<script src="{{asset('pr/js/jquery.dataTables.min.js')}}"></script>

		<script src="{{asset('pr/js/excanvas.js')}}"></script>
	<script src="{{asset('pr/js/jquery.flot.js')}}"></script>
	<script src="{{asset('pr/js/jquery.flot.pie.js')}}"></script>
	<script src="{{asset('pr/js/jquery.flot.stack.js')}}"></script>
	<script src="{{asset('pr/js/jquery.flot.resize.min.js')}}"></script>
	
		<script src="{{asset('pr/js/jquery.chosen.min.js')}}"></script>
	
		<script src="{{asset('pr/js/jquery.uniform.min.js')}}"></script>
		
		<script src="{{asset('pr/js/jquery.cleditor.min.js')}}"></script>
	
		<script src="{{asset('pr/js/jquery.noty.js')}}"></script>
	
		<script src="{{asset('pr/js/jquery.elfinder.min.js')}}"></script>
	
		<script src="{{asset('pr/js/jquery.raty.min.js')}}"></script>
	
		<script src="{{asset('pr/js/jquery.iphone.toggle.js')}}"></script>
	
		<script src="{{asset('pr/js/jquery.uploadify-3.1.min.js')}}"></script>
	
		<script src="{{asset('pr/js/jquery.gritter.min.js')}}"></script>
	
		<script src="{{asset('pr/js/jquery.imagesloaded.js')}}"></script>
	
		<script src="{{asset('pr/js/jquery.masonry.min.js')}}"></script>
	
		<script src="{{asset('pr/js/jquery.knob.modified.js')}}"></script>
	
		<script src="{{asset('pr/js/jquery.sparkline.min.js')}}"></script>
	
		<script src="{{asset('pr/js/counter.js')}}"></script>
	
		<script src="{{asset('pr/js/retina.js')}}"></script>

		<script src="{{asset('pr/js/custom.js')}}"></script>
	{{-- end: JavaScript--}}
	
</body>
</html>

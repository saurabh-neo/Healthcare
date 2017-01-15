
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="csrf-token" content="{{ csrf_token() }}">
		<title>Healthcare</title>
		
		<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans|Raleway|Candal">
		<link rel="stylesheet" type="text/css" href="dist/css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="dist/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="dist/css/style.css">
		<link rel="stylesheet" type="text/css" href="dist/css/custom.css">

 		  <script src="https://cdn.jsdelivr.net/jquery/1.12.4/jquery.min.js"></script>
		<script src="https://cdn.jsdelivr.net/jquery.validation/1.15.1/jquery.validate.min.js"></script>
			<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.0/additional-methods.min.js"></script>

		
	</head>
	<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">
		<!--banner-->
		<section id="banner" class="banner">
			<div class="bg-color" >
				<nav class="navbar navbar-default navbar-fixed-top">
					<div class="container">
						<div class="col-md-12">
							<div class="navbar-header">
								<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
								</button>
								<a class="navbar-brand" href="#"><i class="fa fa-heartbeat fa-2x" style="color:red; opacity:0.40" aria-hidden="true"></i></a>
							</div>
							
							<div class="collapse navbar-collapse navbar-right" id="myNavbar">
								<ul class="nav navbar-nav">
									<li class="active"><a href="{{url('/demographics')}}" onclick="event.preventDefault();document.getElementById('logout-form2').submit();">Demographics</a></li>
									<li class=""><a href="{{ url('/medicalhistory') }}" onclick="event.preventDefault();document.getElementById('logout-form3').submit();">Medical History</a></li>
									<li class=""><a href="#footer">Contact</a></li>
								</ul>
									<form id="logout-form2" action="{{ url('/demographics') }}" method="GET" style="display: none;">
										{{ csrf_field() }}
									</form>
									<form id="logout-form3" action="{{ url('/medicalhistory') }}" method="GET" style="display: none;">
										{{ csrf_field() }}
									</form>
							</div>


								<!-- Right Side Of Navbar -->
								<ul class="nav navbar-nav navbar-right">
									<!-- Authentication Links -->
										<li class="dropdown" >
											<a href="#" class="dropdown-toggle" style="background:transparent;color: #fcfcfc;" data-toggle="dropdown" role="button" aria-expanded="false">
												{{ Session::get('pname') }} <span class="caret"></span>
											</a>

											<ul class="dropdown-menu nav" role="menu" style="background:transparent;color: #fcfcfc;">
												<li>
													<a href="{{ url('/plogout') }}"
														onclick="event.preventDefault();
																document.getElementById('logout-form').submit();"
																style="background:transparent;color: #fcfcfc;">
														Logout
													</a>

													<form id="logout-form" action="{{ url('/plogout') }}" method="POST" style="display: none;">
															{{ csrf_field() }}
													</form>
												</li>
											</ul>
										</li>
								</ul>

						</div>
					</div>					
				</nav>


				<div class="container">
					<div class="row">
						<div class="banner-info">

							<div class=" text-center" style="margin-top:-30px;">
								<br><h2 class="white text-center"><strong>   Demographics Details    <i class="fa fa-heartbeat" style="color:deeppink;opacity: 0.60;" aria-hidden="true"></i></strong></h1><br>
									<div class="overlay-detail text-center">
										<a href="#demographics" style="color:white;">JUMP To Form<i class="fa fa-angle-down"></i></a>
									</div>		
							</div>
						</div>
				<div class="col-md-6" style="margin-top:-30px;"><br>	
					<br><br><h3>Fill The Details Carefully<br><br>
					If You are an existing user, then your old data will be updated with new data</h3>
					</div>
				<div>

					</div>

				</div>


				<div class="overlay-detail text-center">
					<a href="#demographics"><i class="fa fa-angle-down"></i></a>
				</div>		
				
			</div>
			
		</section>
		<!--/banner-->




		<!--Demographics Registration-->
		<section id="demographics" class="">
			<div class="jumbotron" style="">			
				
				<div class="container" id="reg" style="max-width:850px;padding:0px 0px 0px;">
					<form class="form-horizontal" action="\demographics" method="POST" name="dform" role="form">
						
						<h3>Demographics												
							<button type="submit" style="margin-left:720px;margin-top:-50px" class="btn btn-primary">SAVE</button>
						</h3>
						
						
						<h4><strong>Basic Details</strong></h4>
						<div class="" style="max-width:800px;padding:60px 20px;border:1px solid black;border-radius: 25px;">
							<div class="form-group">
								<label for="gender" class ="control-label col-sm-3">Gender</label>
								<div class="col-sm-4">
									<select class="selectpicker form-control" id="gender" name="gender">
										<option value="" selected disabled>Please select</option>
										<option value="Male">Male</option>
										<option value="Female">Female</option>
									</select>
								</div>
							</div>

							<div class="form-group">
								<label for="race" class ="control-label col-sm-3">Race</label>
								<div class="col-sm-4">
									<select class="selectpicker form-control" id="race" name="race">
										<option value="" selected disabled>Please select</option>
										@foreach ($race as $i) 
												<option value="{{$i->categories}}">{{$i->categories}}</option>
										@endforeach		
									</select>
								</div>
							</div>

							<div class="form-group">
								<label for="ethinicity" class ="control-label col-sm-3">Ethnicity</label>
								<div class="col-sm-4">
									<select class="selectpicker form-control" id="ethinicity" name="ethinicity">
										<option value="" selected disabled>Please select</option>
											@foreach ($ethn as $i) 
												<option value="{{$i->type}}">{{$i->type}}</option>
											@endforeach		
									</select>
								</div>
							</div>

							<div class="form-group">
								<label for="pref_language" class ="control-label col-sm-3">Preferred Language</label>
								<div class="col-sm-4">
									<select class="selectpicker form-control" id="pref_language" name="pref_language">
										<option value="" selected disabled>Please select</option>
											@foreach ($lang as $i) 
												<option value="{{$i->type}}">{{$i->type}}</option>
											@endforeach		
									</select>
								</div>
							</div>

							<div class="form-group">
								<label for="home_phone" class ="control-label col-sm-3">Home Phone</label>
								<div class="col-sm-8">
									<input type="text" required class="form-control" id="home_phone" name="home_phone" placeholder="Enter Home hpone">
								</div>
							</div>

							<div class="form-group">
								<label for="cell_phone" class ="control-label col-sm-3">Cell Phone</label>
								<div class="col-sm-8">
									<input type="name" class="form-control" id="cell_phone" name="cell_phone" placeholder="Enter Cell phone">
								</div>
							</div>

							<div class="form-group">
								<label for="work_phone" class ="control-label col-sm-3">Work Phone</label>
								<div class="col-sm-8">
									<input type="text" required class="form-control" id="work_phone" name="work_phone" placeholder="Enter Work phone">
								</div>
							</div>

							<div class="form-group">
								<label for="email" class ="control-label col-sm-3">Email</label>
								<div class="col-sm-8">
									<input type="email" class="form-control" id="email" name="email" placeholder="Enter email">
								</div>
							</div>

							<div class="form-group">
								<label for="direct_address" class ="control-label col-sm-3">Direct Address</label>
								<div class="col-sm-8">
									<input type="text" class="form-control" id="direct_address" name="direct_address" placeholder="Enter direct address">
								</div>
							</div>
						</div>
						
						
						<h4><strong>Physical Address</strong></h4>
						<div class="" style="max-width:800px;padding:60px 20px;border:1px solid blue;border-radius: 25px;">
							
							<div class="form-group">
								<label for="address1" class ="control-label col-sm-3">Address 1</label>
								<div class="col-sm-8">
									<input type="text" class="form-control" id="address1" name="address1" placeholder="Enter name here">
								</div>
							</div>
							
							<div class="form-group">
								<label for="address2" class ="control-label col-sm-3">Address 2</label>
								<div class="col-sm-8">
									<input type="text" class="form-control" id="address2" name="address2" placeholder="Enter Address2">
								</div>
							</div>
							
							<div class="form-group">
								<label for="city" class ="control-label col-sm-3">City</label>
								<div class="col-sm-8">
									<input type="text" class="form-control" id="city" name="city" placeholder="Enter city">
								</div>
							</div>

							<div class="form-group">
								<label for="state" class ="control-label col-sm-3">State</label>
								<div class="col-sm-4">
									<select class="selectpicker form-control" name="state" id='state'>
										<option value="" selected disabled>Please select</option>
											@foreach ($state as $i) 
												<option value="{{$i->state}}">{{$i->state}}</option>
											@endforeach		
									</select>
								</div>
							</div>

							<div class="form-group">
								<label for="zip" class ="control-label col-sm-3">Zip</label>
								<div class="col-sm-8">
									<input type="text" class="form-control" id="zip" name="zip" placeholder="Enter zip">
								</div>
							</div>

						</div>
						
						
						<h4><strong>Billing Address</strong></h4>
						<div class="" style="max-width:800px;padding:60px 20px;border:1px solid blue;border-radius: 25px;">

							<div class="form-group">
								<div class="material-switch">
									<span class="control-label col-sm-3" style="margin-left:20px"><strong>Copy Physical Address</strong></span>
									<input id="checkbox1" required name="checkbox1" type="checkbox"/>
									<label for="checkbox1" class="label-info"></label>
								</div><br>
							</div>

							<div class="form-group">
								<label for="baddress1" class ="control-label col-sm-3">Address 1</label>
								<div class="col-sm-8">
									<input type="text" class="form-control" id="baddress1" name="baddress1" placeholder="Enter name here">
								</div>
							</div>
							
							<div class="form-group">
								<label for="baddress2" class ="control-label col-sm-3">Address 2</label>
								<div class="col-sm-8">
									<input type="text" class="form-control" name="baddress2" id="baddress2" placeholder="Enter Address2">
								</div>
							</div>
							
							<div class="form-group">
								<label for="bcity" class ="control-label col-sm-3">City</label>
								<div class="col-sm-8">
									<input type="text" class="form-control" id="bcity" name="bcity" placeholder="Enter city">
								</div>
							</div>

							<div class="form-group">
								<label for="bstate" class ="control-label col-sm-3">State</label>
								<div class="col-sm-4">
									<select class="selectpicker form-control" id="bstate" name="bstate">
										<option value="" selected disabled>Please select</option>
											@foreach ($state as $i) 
												<option value="{{$i->state}}">{{$i->state}}</option>
											@endforeach		
									</select>
								</div>
							</div>

							<div class="form-group">
								<label for="bzip" class ="control-label col-sm-3">Zip</label>
								<div class="col-sm-8">
									<input type="text" class="form-control" id="bzip"name="bzip" placeholder="Enter zip">
								</div>
							</div>

						</div>						


						<h3>General</h3>
						<div class="" style="max-width:800px;padding:60px 20px;border:1px solid blue;border-radius: 25px;">
							<div class="form-group">
								<label for="insurance" class ="control-label col-sm-3">Insurance</label>
								<div class="col-sm-8">
									<input type="text" class="form-control" id="insurance" name="insurance" placeholder="Enter insurance">
								</div>
							</div>
							<div class="form-group">
								<label for="aboutus" class ="control-label col-sm-3">How Did You Hear About Us</label>
								<div class="col-sm-8">
									<select class="selectpicker form-control" name="aboutus">
										<option value="" selected disabled>Please select</option>
										<option value="Internet">Internet</option>
										<option value="Friend">Friend</option>
										<option value="Family">Family</option>
										<option value="Social Networking">Social Networking</option>
										<option value="Other">Other</option>
									</select>
								</div>
							</div>
							<div class="form-group">
								<label for="reference" class ="control-label col-sm-3">Referring Provider</label>
								<div class="col-sm-8">
									<input type="text" class="form-control" id="reference" name="reference" placeholder="Enter Referring Provider">
								</div>
							</div>
						</div>						
						
						
						<h4><strong>Employer : </strong></h4>
						<div class="" style="max-width:800px;padding:60px 20px;border:1px solid blue;border-radius: 25px;">
							<div class="form-group">
								<label for="ename" class ="control-label col-sm-3">Name</label>
								<div class="col-sm-8">
									<input type="text" class="form-control" id="ename" name="ename" placeholder="Enter name">
								</div>
							</div>
							<div class="form-group">
								<label for="eaddress1" class ="control-label col-sm-3">Address 1</label>
								<div class="col-sm-8">
									<input type="text" class="form-control" id="eaddress1" name="eaddress1" placeholder="Enter name here">
								</div>
							</div>
							
							<div class="form-group">
								<label for="eaddress2" class ="control-label col-sm-3">Address 2</label>
								<div class="col-sm-8">
									<input type="text" class="form-control" id="eaddress2" name="eaddress2" placeholder="Enter Address2">
								</div>
							</div>
							
							<div class="form-group">
								<label for="ecity" class ="control-label col-sm-3">City</label>
								<div class="col-sm-8">
									<input type="text" class="form-control" id="ecity" name="ecity" placeholder="Enter city">
								</div>
							</div>

							<div class="form-group">
								<label for="estate" class ="control-label col-sm-3">State</label>
								<div class="col-sm-4">
									<select class="selectpicker form-control" id="estate" name="estate">
										<option value="" selected disabled>Please select</option>
											@foreach ($state as $i) 
												<option value="{{$i->state}}">{{$i->state}}</option>
											@endforeach		
									</select>
								</div>
							</div>

							<div class="form-group">
								<label for="ezip" class ="control-label col-sm-3">Zip</label>
								<div class="col-sm-8">
									<input type="text" class="form-control" id="ezip" name="ezip" placeholder="Enter zip">
								</div>
							</div>
							
						</div>						
						
						
						<h4><strong>Emergency Contact 1</strong></h4>
						<div class="" style="max-width:800px;padding:60px 20px;border:1px solid blue;border-radius: 25px;">
							<div class="form-group">
								<div class="material-switch">
									<span class="control-label col-sm-3" style="margin-left:20px"><strong>Copy Physical Address</strong></span>
									<input id="checkbox2" name="checkbox2" type="checkbox"/>
									<label for="checkbox2" class="label-info"></label>
								</div><br>
							</div>

							<div class="form-group">
								<label for="em1name" class ="control-label col-sm-3">Name</label>
								<div class="col-sm-8">
									<input type="text" class="form-control" id="em1name" name="em1name" placeholder="Enter name">
								</div>
							</div>
							<div class="form-group">
								<label for="em1address1" class ="control-label col-sm-3">Address 1</label>
								<div class="col-sm-8">
									<input type="text" class="form-control" id="em1address1" name="em1address1" name="" placeholder="Enter name here">
								</div>
							</div>
							
							<div class="form-group">
								<label for="em1address2" class ="control-label col-sm-3">Address 2</label>
								<div class="col-sm-8">
									<input type="text" class="form-control" id="em1address2" name="em1address2" placeholder="Enter Address2">
								</div>
							</div>
							
							<div class="form-group">
								<label for="em1city" class ="control-label col-sm-3">City</label>
								<div class="col-sm-8">
									<input type="text" class="form-control" id="em1city" name="em1city" placeholder="Enter city">
								</div>
							</div>

							<div class="form-group">
								<label for="em1state" class ="control-label col-sm-3">State</label>
								<div class="col-sm-4">
									<select class="selectpicker form-control" id="em1state" name="em1state">
										<option value="" selected disabled>Please select</option>
											@foreach ($state as $i) 
												<option value="{{$i->state}}">{{$i->state}}</option>
											@endforeach		
									</select>
								</div>
							</div>

							<div class="form-group">
								<label for="em1zip" class ="control-label col-sm-3">Zip</label>
								<div class="col-sm-8">
									<input type="text" class="form-control" id="em1zip" name="em1zip" placeholder="Enter zip">
								</div>
							</div>

							<div class="form-group">
								<label for="em1home_phone" class ="control-label col-sm-3">Home Phone</label>
								<div class="col-sm-8">
									<input type="text" class="form-control" id="em1home_phone" name="em1home_phone" placeholder="Enter Home hpone">
								</div>
							</div>

							<div class="form-group">
								<label for="em1cell_phone" class ="control-label col-sm-3">Cell Phone</label>
								<div class="col-sm-8">
									<input type="text" class="form-control" id="em1cell_phone" name="em1cell_phone" placeholder="Enter Cell phone">
								</div>
							</div>

							<div class="form-group">
								<label for="em1work_phone" class ="control-label col-sm-3">Work Phone</label>
								<div class="col-sm-8">
									<input type="text" class="form-control" id="em1work_phone" name="em1work_phone" placeholder="Enter Work phone">
								</div>
							</div>

							<div class="form-group">
								<label for="em1relation" class ="control-label col-sm-3">Relation To Patient</label>
								<div class="col-sm-4">
									<select class="selectpicker form-control" id="em1relation" name="em1relation">
										<option value="" selected disabled>Please select</option>
											@foreach ($relation as $i) 
												<option value="{{$i->relation}}">{{$i->relation}}</option>
											@endforeach		
									</select>
								</div>
							</div>

						</div>						
						
						
						<h4><strong>Emergency Contact 2</strong></h4>
						<div class="" style="max-width:800px;padding:60px 20px;border:1px solid blue;border-radius: 25px;">
							<div class="form-group">
								<div class="material-switch">
									<span class="control-label col-sm-3" style="margin-left:20px"><strong>Copy Physical Address</strong></span>
									<input id="checkbox3" name="checkbox3" type="checkbox"/>
									<label for="checkbox3" class="label-info"></label>
								</div><br>
							</div>
							
							<div class="form-group">
								<label for="em2name" class ="control-label col-sm-3">Name</label>
								<div class="col-sm-8">
									<input type="text" class="form-control" id="em2name" name="em2name" placeholder="Enter name">
								</div>
							</div>
							<div class="form-group">
								<label for="em2address1" class ="control-label col-sm-3">Address 1</label>
								<div class="col-sm-8">
									<input type="text" class="form-control" id="em2address1" name="em2address1" name="" placeholder="Enter name here">
								</div>
							</div>
							
							<div class="form-group">
								<label for="em2address2" class ="control-label col-sm-3">Address 2</label>
								<div class="col-sm-8">
									<input type="text" class="form-control" id="em2address2" name="em2address2" placeholder="Enter Address2">
								</div>
							</div>
							
							<div class="form-group">
								<label for="em2city" class ="control-label col-sm-3">City</label>
								<div class="col-sm-8">
									<input type="text" class="form-control" id="em2city" name="em2city" placeholder="Enter city">
								</div>
							</div>

							<div class="form-group">
								<label for="em2state" class ="control-label col-sm-3">State</label>
								<div class="col-sm-4">
									<select class="selectpicker form-control" id="em2state" name="em2state">
										<option value="" selected disabled>Please select</option>
											@foreach ($state as $i) 
												<option value="{{$i->state}}">{{$i->state}}</option>
											@endforeach		
									</select>
								</div>
							</div>

							<div class="form-group">
								<label for="em2zip" class ="control-label col-sm-3">Zip</label>
								<div class="col-sm-8">
									<input type="text" class="form-control" id="em2zip" name="em2zip" placeholder="Enter zip">
								</div>
							</div>

							<div class="form-group">
								<label for="em2home_phone" class ="control-label col-sm-3">Home Phone</label>
								<div class="col-sm-8">
									<input type="text" class="form-control" id="em2home_phone" name="em2home_phone" placeholder="Enter Home hpone">
								</div>
							</div>

							<div class="form-group">
								<label for="em2cell_phone" class ="control-label col-sm-3">Cell Phone</label>
								<div class="col-sm-8">
									<input type="name" class="form-control" id="em2cell_phone" name="em2cell_phone" placeholder="Enter Cell phone">
								</div>
							</div>

							<div class="form-group">
								<label for="em2work_phone" class ="control-label col-sm-3">Work Phone</label>
								<div class="col-sm-8">
									<input type="text" class="form-control" id="em2work_phone" name="em2work_phone" placeholder="Enter Work phone">
								</div>
							</div>

							<div class="form-group">
								<label for="em2relation" class ="control-label col-sm-3">Relation To Patient</label>
								<div class="col-sm-4">
									<select class="selectpicker form-control" id="em2relation" name="em2relation">
										<option value="" selected disabled>Please select</option>
											@foreach ($relation as $i) 
												<option value="{{$i->relation}}">{{$i->relation}}</option>
											@endforeach		
									</select>
								</div>
							</div>
						</div>						
						
						
						<h4><strong>Emergency Contact 3</strong></h4>
						<div class="" style="max-width:800px;padding:60px 20px;border:1px solid blue;border-radius: 25px;">
							<div class="form-group">
								<div class="material-switch">
									<span class="control-label col-sm-3" style="margin-left:20px"><strong>Copy Physical Address</strong></span>
									<input id="checkbox4" name="checkbox4" onchange="copyvals(this)" type="checkbox"/>
									<label for="checkbox4" class="label-info"></label>
								</div><br>
							</div>

							<div class="form-group">
								<label for="em3name" class ="control-label col-sm-3">Name</label>
								<div class="col-sm-8">
									<input type="text" class="form-control" id="em3name" name="em3name" placeholder="Enter name">
								</div>
							</div>
							<div class="form-group">
								<label for="em3address1" class ="control-label col-sm-3">Address 1</label>
								<div class="col-sm-8">
									<input type="text" class="form-control" id="em3address1" name="em3address1" placeholder="Enter name here">
								</div>
							</div>
							
							<div class="form-group">
								<label for="em3address2" class ="control-label col-sm-3">Address 2</label>
								<div class="col-sm-8">
									<input type="text" class="form-control" id="em3address2" name="em3address2" placeholder="Enter Address2">
								</div>
							</div>
							
							<div class="form-group">
								<label for="em3city" class ="control-label col-sm-3">City</label>
								<div class="col-sm-8">
									<input type="text" class="form-control" id="em3city" name="em3city" placeholder="Enter city">
								</div>
							</div>

							<div class="form-group">
								<label for="em3state" class ="control-label col-sm-3">State</label>
								<div class="col-sm-4">
									<select class="selectpicker form-control" id="em3state" name="em3state">
										<option value="" selected disabled>Please select</option>
											@foreach ($state as $i) 
												<option value="{{$i->state}}">{{$i->state}}</option>
											@endforeach		
									</select>
								</div>
							</div>

							<div class="form-group">
								<label for="em3zip" class ="control-label col-sm-3">Zip</label>
								<div class="col-sm-8">
									<input type="text" class="form-control" id="em3zip" name="em3zip" placeholder="Enter zip">
								</div>
							</div>

							<div class="form-group">
								<label for="em3home_phone" class ="control-label col-sm-3">Home Phone</label>
								<div class="col-sm-8">
									<input type="text" class="form-control" id="em3home_phone" name="em3home_phone" placeholder="Enter Home hpone">
								</div>
							</div>

							<div class="form-group">
								<label for="em3cell_phone" class ="control-label col-sm-3">Cell Phone</label>
								<div class="col-sm-8">
									<input type="name" class="form-control" id="em3cell_phone" name="em3cell_phone" placeholder="Enter Cell phone">
								</div>
							</div>

							<div class="form-group">
								<label for="em3work_phone" class ="control-label col-sm-3">Work Phone</label>
								<div class="col-sm-8">
									<input type="text" class="form-control" id="em3work_phone" name="em3work_phone" placeholder="Enter Work phone">
								</div>
							</div>

							<div class="form-group">
								<label for="em3relation" class ="control-label col-sm-3">Relation To Patient</label>
								<div class="col-sm-4">
									<select class="selectpicker form-control" id="em3relation" name="em3relation">
										<option value="" selected disabled>Please select</option>
											@foreach ($relation as $i) 
												<option value="{{$i->relation}}">{{$i->relation}}</option>
											@endforeach		
								</select>
								</div>
							</div>
						</div>												
						
						
						
						<div class="form-group" style="margin-top:50px">
							<div class="col-sm-offset-5 col-sm-8">
								<button type="submit" class="btn btn-primary btn-lg"> SAVE </button>
							</div>
						</div>							

						
					</form>
				</div>	
			</div>
		</section>	
		<!--/Demographics Registration-->		
		
		
		
		<!--footer-->		
		<section id="contact">
			<footer id="footer">
				<div class="top-footer">
					<div class="container">
						<div class="row">
							
						</div>
					</div>
				</div>
				<div class="footer-line">
					<div class="container">
						<div class="row">
							<div class="col-md-12 text-center">
								
								<div class="credits" style="margin-bottom:10px">
									Developed from <i class="fa fa-heartbeat" style="color:red" aria-hidden="true"></i> by <a href="https://saurabh-neo.github.io/">©Saurabh Harwadikar</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</footer>			
		</section>
		<!--/ footer-->
		
		<script src="dist/js/jquery.easing.min.js"></script>
		<script src="dist/js/bootstrap.min.js"></script>
		<script src="dist/js/custom.js"></script>
		
	</body>
</html>






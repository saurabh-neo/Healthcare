
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
									<li class="active"><a href="{{ url('/demographics') }}">Demographics</a></li>
									<li class=""><a href="{{ url('/medicalhistory') }}">Medical History</a></li>
									<li class=""><a href="#footer">Contact</a></li>
								</ul>
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
  							  <br><h2 class="white text-center"><strong>   MedicalHistory Details    <i class="fa fa-heartbeat" style="color:deeppink;opacity: 0.60;" aria-hidden="true"></i></strong></h1><br>
								<div class="overlay-detail text-center">
									<a href="#demographics" style="color:white;">JUMP To Form<i class="fa fa-angle-down"></i></a>
								</div>		
							</div>

							<div class="col-md-6"><br>	
								@if (Session::has('demosuccess'))
								<div class="alert alert-success fade-out" style="color: #fcfcfc;background-color:transparent;">{{ Session::get('demosuccess') }} <i class="fa fa-close" style="opacity: 0.60;" aria-hidden="true"></i></div>
								@endif
							<div>
							<div class="col-md-8"><br>	
								@if (Session::has('medsuccess'))
								<div class="alert alert-success fade-out" style="color: #fcfcfc;background-color:transparent;"> The {{ Session::get('medsuccess') }} <i class="fa fa-close" style="opacity: 0.60;" aria-hidden="true"></i></div>
								@endif
							<div>

						</div>
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
					<form class="form-horizontal" action="\medicalhistory" method="POST" name="mform" role="form">
						
						<h3>Medical/SocialHistory												
							<button type="submit" style="margin-left:720px;margin-top:-50px" class="btn btn-primary">SAVE</button>
						</h3>
						
						
						<h4><strong>Medical history</strong></h4>
						<div class="" style="max-width:800px;padding:60px 20px;border:1px solid black;border-radius: 25px;">

							<div class="form-group">
								@foreach ($medhistory as $i) 
								<div class="checkbox col-md-5">
									<label>
										<input type="checkbox" id="mtype[]" name="mtype[]" value="{{$i->mtype}}">
										{{$i->mtype}}
									</label>
								</div>
								@endforeach		
							</div>

						</div>
						
						
						<h4><strong>Family Medical History</strong></h4>
						<div class="" style="max-width:800px;padding:60px 20px;border:1px solid blue;border-radius: 25px;">

							<div class="form-group">
									@foreach ($medhistory as $i) 
									<div class="checkbox col-md-6">
										<label>
											<input type="checkbox" id="fmtype[]" name="fmtype[]" value="{{$i->mtype}}">
											{{$i->mtype}}
										</label>

											<br><label for="relation">Relation To Patient</label>
												<select class="selectpicker " id="relation[{{$i->s_no}}]" name="relation[{{$i->s_no}}]">
													<option value="" selected disabled>Please select</option>
														@foreach ($relation as $i) 
															<option value="{{$i->relation}}">{{$i->relation}}</option>
														@endforeach		
												</select>										
									</div>
									@endforeach		
							</div>							

						</div>
						
						
						<h4><strong>Patient Otherhistory</strong></h4>
						<div class="" style="max-width:800px;padding:60px 20px;border:1px solid blue;border-radius: 25px;">

							<div class="form-group">
								<label class ="control-label col-sm-3">Surgical History</label>
								<div class="col-sm-3">
									<input type="date" class="form-control" id="surgeryyear" name="surgeryyear" placeholder="Enter Surgery Year">
								</div>
								<div class="col-sm-3">
									<input type="text" class="form-control" id="surgery" name="surgery" placeholder="Surgery">
								</div>
								<div class="col-sm-3">
									<input type="text" class="form-control" id="surgerylocation" name="surgerylocation" placeholder="SurgeryLocation">
								</div>
							</div>
							
							<div class="form-group">
								<label for="allergies" class ="control-label col-sm-3">Allergies</label>
								<div class="col-sm-8">
									<input type="text" class="form-control" name="allergies" id="allergies" placeholder="Enter Alergies">
								</div>
							</div>
							
							<div class="form-group">
								<label for="bcity" class ="control-label col-sm-3">Pharmacy</label>
								<div class="col-sm-8">
									<input type="text" class="form-control" id="pharmacy" name="pharmacy" placeholder="Enter pharmacy">
								</div>
							</div>

							<div class="form-group">
								<label class ="control-label col-sm-3">Medications</label>
								<div class="col-sm-3">
									<input type="text" class="form-control" id="medication" name="medication" placeholder="Enter medication">
								</div>
								<div class="col-sm-3">
									<input type="text" class="form-control" id="medication_strength" name="medication_strength" placeholder="medication_strength">
								</div>
								<div class="col-sm-3">
									<input type="text" class="form-control" id="medication_dose" name="medication_dose" placeholder="medication_dose">
								</div>
							</div>

							<div class="form-group">
								<label for="othermedhistory" class ="control-label col-sm-3">Othermedhistory</label>
								<div class="col-sm-8">
									<input type="text" class="form-control" id="othermedhistory"name="othermedhistory" placeholder="Enter othermedhistory details if any">
								</div>
							</div>

						</div>						


						<h4>Patient Social Details</h4>
						<div class="" style="max-width:800px;padding:60px 20px;border:1px solid blue;border-radius: 25px;">
							<div class="form-group">
								<label for="marital_status" class ="control-label col-sm-3">Parent Marital Status</label>
								<div class="col-sm-8">
									<select class="selectpicker form-control" name="marital_status" id="marital_status">
										<option value="" selected disabled>Please select</option>
										<option value="Divorsed">Diverosed</option>
										<option value="Married">Married</option>
									</select>
								</div>
							</div>
							<div class="form-group">
								<label for="liveswith" class ="control-label col-sm-3">Lives With</label>
								<div class="col-sm-8">
									<select class="selectpicker form-control" name="liveswith" id="liveswith">
										<option value="" selected disabled>Please select</option>
										<option value="Friends">Friends</option>
										<option value="Parents">Parents</option>
										<option value="Separate">Separate</option>
										<option value="Hostel">Hostel</option>
									</select>
								</div>
							</div>
							<div class="form-group">
								<label for="occupation" class ="control-label col-sm-3">Occupation</label>
								<div class="col-sm-8">
									<select class="selectpicker form-control" name="occupation" id="occupation">
										<option value="" selected disabled>Please select</option>
										<option value="Student">Student</option>
										<option value="Professional">Professional</option>
										<option value="Doctor">Doctor</option>
										<option value="Engineer">Engineer</option>
									</select>
								</div>
							</div>
							<div class="form-group">
								<label for="occupation" class ="control-label col-sm-3">Pets</label>
								<div class="col-sm-8">
									<select class="selectpicker form-control" name="pets" id="pets">
										<option value="" selected disabled>Please select</option>
										<option value="Dog">Dog</option>
										<option value="Cat">Cat</option>
										<option value="Bird">Bird</option>
										<option value="Lion">Lion</option>
									</select>
								</div>
							</div>
					</div>
						
						<h4><strong>Smoking Details : </strong></h4>
						<div class="" style="max-width:800px;padding:60px 20px;border:1px solid blue;border-radius: 25px;">
					
							<div class="form-group">
								<label for="smoke_detector" class ="control-label col-sm-3">Smoke Detectors in Home ?</label>
								<div class="btn-group" data-toggle="buttons">
									<label class="btn btn-primary">
										<input type="radio" value="YES" name="smoke_detector" id="smoke_detector" autocomplete="off"> YES
									</label>
									<label class="btn btn-primary">
										<input type="radio" value="NO" name="smoke_detector" id="smoke_detector" autocomplete="off"> NO
									</label>
								</div>
							</div>

							<div class="form-group">
								<label for="occupation" class ="control-label col-sm-3">Smoking Status</label>
								<div class="col-sm-8">
									<select class="selectpicker form-control" name="smoking_status" id="smoking_status">
										<option value="" selected disabled>Please select</option>
										<option value="Quit">Quit</option>
										<option value="Regular">Regular</option>
										<option value="Irregular">Irregular</option>
										<option value="Highly Addicted">Highly Addicted</option>										
									</select>
								</div>
							</div>
							
							<div class="form-group">
								<label for="comments" class ="control-label col-sm-3">comments</label>
								<div class="col-sm-8">
									<input type="text" class="form-control" id="comments" name="comments" placeholder="Enter comments">
								</div>
							</div>
							
							<div class="form-group">
								<label for="start_date" class ="control-label col-sm-3">start_date</label>
								<div class="col-sm-8">
									<input type="date" class="form-control" id="start_date" name="start_date" placeholder="start_date">
								</div>
							</div>

							<div class="form-group">
								<label for="quit_date" class ="control-label col-sm-3">quit_date</label>
								<div class="col-sm-8">
									<input type="date" class="form-control" id="quit_date" name="quit_date" placeholder="quit_date">
								</div>
							</div>

							<div class="form-group">
								<label for="smoke_exposure" class ="control-label col-sm-3">Is patient routinely exposed to smoke ?</label>
								<div class="btn-group" data-toggle="buttons">
									<label class="btn btn-primary">
										<input type="radio" value="YES" name="smoke_exposure" id="smoke_exposure" autocomplete="off"> YES
									</label>
									<label class="btn btn-primary">
										<input type="radio" value="NO" name="smoke_exposure" id="smoke_exposure" autocomplete="off"> NO
									</label>
								</div>
							</div>

							<div class="form-group">
								<label for="co_detector" class ="control-label col-sm-3">Is co_detector present ?</label>
								<div class="btn-group" data-toggle="buttons">
									<label class="btn btn-primary">
										<input type="radio" value="YES" name="co_detector" id="co_detector" autocomplete="off"> YES
									</label>
									<label class="btn btn-primary">
										<input type="radio" value="NO" name="co_detector" id="co_detector" autocomplete="off"> NO
									</label>
								</div>
							</div>
							<div class="form-group">
								<label for="firearms" class ="control-label col-sm-3">Is firearms present ?</label>
								<div class="btn-group" data-toggle="buttons">
									<label class="btn btn-primary">
										<input type="radio" value="YES" name="firearms" id="firearms" autocomplete="off"> YES
									</label>
									<label class="btn btn-primary">
										<input type="radio" value="NO" name="firearms" id="firearms" autocomplete="off"> NO
									</label>
								</div>
							</div>
							<div class="form-group">
								<label for="firearms_secured" class ="control-label col-sm-3">Is firearms Secured ?</label>
								<div class="btn-group" data-toggle="buttons">
									<label class="btn btn-primary">
										<input type="radio" value="YES" name="firearms_secured" id="firearms_secured" autocomplete="off"> YES
									</label>
									<label class="btn btn-primary">
										<input type="radio" value="NO" name="firearms_secured" id="firearms_secured" autocomplete="off"> NO
									</label>
								</div>
							</div>							
					</div>						
						
						
						<h4><strong>Patient Habbits</strong></h4>
						<div class="" style="max-width:800px;padding:60px 20px;border:1px solid blue;border-radius: 25px;">
							<div class="form-group">
								<label for="daycaretype" class ="control-label col-sm-3">Day care type</label>
								<div class="col-sm-4">
									<select class="selectpicker form-control" id="daycaretype" name="daycaretype">
										<option value="" selected disabled>Please select</option>
										<option value="Type 1">Type 1</option>
										<option value="Type 2">Type 2</option>
									</select>
								</div>
							</div>

							<div class="form-group">
								<label for="daycareperweek" class ="control-label col-sm-3">Day care per week</label>
								<div class="col-sm-4">
									<select class="selectpicker form-control" id="daycareperweek" name="daycareperweek">
										<option value="" selected disabled>Please select</option>
										<option value="2">2</option>
										<option value="4">4</option>
									</select>
								</div>
							</div>
							<div class="form-group">
								<label for="curschool" class ="control-label col-sm-3">Current School Level</label>
								<div class="col-sm-4">
									<select class="selectpicker form-control" id="curschool" name="curschool">
										<option value="" selected disabled>Please select</option>
										<option value="Type 1">Type 1</option>
										<option value="Type 2">Type 2</option>
									</select>
								</div>
							</div>
							<div class="form-group">
								<label for="avggrades" class ="control-label col-sm-3">Average grades</label>
								<div class="col-sm-4">
									<select class="selectpicker form-control" id="avggrades" name="avggrades">
										<option value="" selected disabled>Please select</option>
										<option value="Type 1">Type 1</option>
										<option value="Type 2">Type 2</option>
									</select>
								</div>
							</div>
							<div class="form-group">
								<label for="activities" class ="control-label col-sm-3">activities</label>
								<div class="col-sm-8">
									<input type="text" class="form-control" id="activities" name="activities" placeholder="Enter activities">
								</div>
							</div>
							<div class="form-group">
								<label for="helmetusage" class ="control-label col-sm-3">Bike helmetusage</label>
								<div class="col-sm-4">
									<select class="selectpicker form-control" id="helmetusage" name="helmetusage">
										<option value="" selected disabled>Please select</option>
										<option value="Regular" selected>Regular</option>
										<option value="Never" selected>NEVER</option>
									</select>
								</div>
							</div>
							<div class="form-group">
								<label for="seatbelt" class ="control-label col-sm-3">seatbelt</label>
								<div class="col-sm-4">
									<select class="selectpicker form-control" id="seatbelt" name="seatbelt">
										<option value="" selected disabled>Please select</option>
										<option value="Regular" selected>Regular</option>
										<option value="Never" selected>NEVER</option>
									</select>
								</div>
							</div>
							<div class="form-group">
								<label for="avgdiet" class ="control-label col-sm-3">Average Diet</label>
								<div class="col-sm-4">
									<select class="selectpicker form-control" id="avgdiet" name="avgdiet">
										<option value="" selected disabled>Please select</option>
										<option value="Type 1">Type 1</option>
										<option value="Type 2">Type 2</option>
									</select>
								</div>
							</div>
							<div class="form-group">
								<label for="numoz" class ="control-label col-sm-3">Number of OZ/Day</label>
								<div class="col-sm-4">
									<select class="selectpicker form-control" id="numoz" name="numoz">
										<option value="" selected disabled>Please select</option>
										<option value="Type 1">Type 1</option>
										<option value="Type 2">Type 2</option>
									</select>
								</div>
							</div>

							<div class="form-group">
								<label for="water" class ="control-label col-sm-3">Water Usage</label>
								<div class="col-sm-4">
									<select class="selectpicker form-control" id="water" name="water">
										<option value="" selected disabled>Please select</option>
										<option value="Type 1">Type 1</option>
										<option value="Type 2">Type 2</option>
									</select>
								</div>
							</div>
							
							<div class="form-group">
								<label for="sleep_location" class ="control-label col-sm-3">Sleeping location</label>
								<div class="col-sm-4">
									<select class="selectpicker form-control" id="sleep_location" name="sleep_location">
										<option value="" selected disabled>Please select</option>
										<option value="Type 1">Type 1</option>
										<option value="Type 2">Type 2</option>
									</select>
								</div>
							</div>

							<div class="form-group">
								<label for="sleepfreq" class ="control-label col-sm-3">Sleeping frequency</label>
								<div class="col-sm-4">
									<select class="selectpicker form-control" id="sleepfreq" name="sleepfreq">
										<option value="" selected disabled>Please select</option>
										<option value="Type 1">Type 1</option>
										<option value="Type 2">Type 2</option>
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






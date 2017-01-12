
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Healthcare</title>
		
		<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans|Raleway|Candal">
		<link rel="stylesheet" type="text/css" href="dist/css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="dist/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="dist/css/style.css">
		<link rel="stylesheet" type="text/css" href="dist/css/custom.css">
		
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
								<a class="navbar-brand" href="#"><i class="fa fa-heartbeat fa-2x" style="color:red" aria-hidden="true"></i></a>
							</div>
							
							<div class="collapse navbar-collapse navbar-right" id="myNavbar">
								<ul class="nav navbar-nav">
									<li class="active"><a href="{{ url('/demographics') }}">Demographics</a></li>
									<li class=""><a href="{{ url('/medicalhistory') }}">Medical History</a></li>
									<li class=""><a href="{{ url('/plogin') }}">Logout</a></li>
									<li class=""><a href="#footer">Contact</a></li>
								</ul>
							</div>
							
						</div>
					</div>
					
					
					
				</nav>
				
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
					<form class="form-horizontal" role="form">
						
						<h3>Demographics												
							<button type="submit" style="margin-left:720px;margin-top:-50px" class="btn btn-primary">SAVE</button>
						</h3>
						
						
						<h4><strong>Basic Details</strong></h4>
						<div class="" style="max-width:800px;padding:60px 20px;border:1px solid black;border-radius: 25px;">
							<div class="form-group">
								<label for="name" class ="control-label col-sm-3">First name</label>
								<div class="col-sm-8">
									<input type="name" class="form-control" id="name" placeholder="Enter name">
								</div>
							</div>
							<div class="form-group">
								<label for="address" class ="control-label col-sm-3">Second name</label>
								<div class="col-sm-8">
									<input type="address" class="form-control" id="address" placeholder="Enter address">
								</div>
							</div>
							<div class="form-group">
								<label for="email" class ="control-label col-sm-3">Email</label>
								<div class="col-sm-8">
									<input type="email" class="form-control" id="email" placeholder="Enter email">
								</div>
							</div>
							<div class="form-group">
								<label for="pwd" class ="control-label col-sm-3">Password</label>
								<div class="col-sm-8">
									<input type="password" class="form-control" id="pwd" placeholder="Enter password">
								</div>
							</div>
						</div>
						
						
						<h4><strong>Physical Address</strong></h4>
						<div class="" style="max-width:800px;padding:60px 20px;border:1px solid blue;border-radius: 25px;">
							<div class="form-group">
								<label for="name" class ="control-label col-sm-3">First name</label>
								<div class="col-sm-8">
									<input type="name" class="form-control" id="name" placeholder="Enter name">
								</div>
							</div>
							<div class="form-group">
								<label for="address" class ="control-label col-sm-3">Second name</label>
								<div class="col-sm-8">
									<input type="address" class="form-control" id="address" placeholder="Enter address">
								</div>
							</div>
							<div class="form-group">
								<label for="email" class ="control-label col-sm-3">Email</label>
								<div class="col-sm-8">
									<input type="email" class="form-control" id="email" placeholder="Enter email">
								</div>
							</div>
							<div class="form-group">
								<label for="pwd" class ="control-label col-sm-3">Password</label>
								<div class="col-sm-8">
									<input type="password" class="form-control" id="pwd" placeholder="Enter password">
								</div>
							</div>
						</div>
						
						
						<h4><strong>Billing Address</strong></h4>
						<div class="" style="max-width:800px;padding:60px 20px;border:1px solid blue;border-radius: 25px;">
							<div class="form-group">
								<div class="material-switch">
									<span class="control-label col-sm-3" style="margin-left:20px"><strong>Copy Physical Address</strong></span>
									<input id="checkbox1" name="checkbox1" onchange="copyvals(this)" type="checkbox"/>
									<label for="checkbox1" class="label-info"></label>
								</div><br>
							</div>
							<div class="form-group">
								<label for="name" class ="control-label col-sm-3">First name</label>
								<div class="col-sm-8">
									<input type="name" class="form-control" id="name" placeholder="Enter name">
								</div>
							</div>
							<div class="form-group">
								<label for="address" class ="control-label col-sm-3">Second name</label>
								<div class="col-sm-8">
									<input type="address" class="form-control" id="address" placeholder="Enter address">
								</div>
							</div>
							<div class="form-group">
								<label for="email" class ="control-label col-sm-3">Email</label>
								<div class="col-sm-8">
									<input type="email" class="form-control" id="email" placeholder="Enter email">
								</div>
							</div>
							<div class="form-group">
								<label for="pwd" class ="control-label col-sm-3">Password</label>
								<div class="col-sm-8">
									<input type="password" class="form-control" id="pwd" placeholder="Enter password">
								</div>
							</div>
						</div>						
						
						<h3>General</h3>
						<div class="" style="max-width:800px;padding:60px 20px;border:1px solid blue;border-radius: 25px;">
							<div class="form-group">
								<label for="name" class ="control-label col-sm-3">First name</label>
								<div class="col-sm-8">
									<input type="name" class="form-control" id="name" placeholder="Enter name">
								</div>
							</div>
							<div class="form-group">
								<label for="address" class ="control-label col-sm-3">Second name</label>
								<div class="col-sm-8">
									<input type="address" class="form-control" id="address" placeholder="Enter address">
								</div>
							</div>
							<div class="form-group">
								<label for="email" class ="control-label col-sm-3">Email</label>
								<div class="col-sm-8">
									<input type="email" class="form-control" id="email" placeholder="Enter email">
								</div>
							</div>
						</div>						
						
						
						<h4><strong>Employer</strong></h4>
						<div class="" style="max-width:800px;padding:60px 20px;border:1px solid blue;border-radius: 25px;">
							<div class="form-group">
								<label for="name" class ="control-label col-sm-3">First name</label>
								<div class="col-sm-8">
									<input type="name" class="form-control" id="name" placeholder="Enter name">
								</div>
							</div>
							<div class="form-group">
								<label for="address" class ="control-label col-sm-3">Second name</label>
								<div class="col-sm-8">
									<input type="address" class="form-control" id="address" placeholder="Enter address">
								</div>
							</div>
							<div class="form-group">
								<label for="email" class ="control-label col-sm-3">Email</label>
								<div class="col-sm-8">
									<input type="email" class="form-control" id="email" placeholder="Enter email">
								</div>
							</div>
							<div class="form-group">
								<label for="pwd" class ="control-label col-sm-3">Password</label>
								<div class="col-sm-8">
									<input type="password" class="form-control" id="pwd" placeholder="Enter password">
								</div>
							</div>
						</div>						
						
						
						<h4><strong>Emergency Contact 1</strong></h4>
						<div class="" style="max-width:800px;padding:60px 20px;border:1px solid blue;border-radius: 25px;">
							<div class="form-group">
								<div class="material-switch">
									<span class="control-label col-sm-3" style="margin-left:20px"><strong>Copy Physical Address</strong></span>
									<input id="checkbox2" name="checkbox2" onchange="copyvals(this)" type="checkbox"/>
									<label for="checkbox2" class="label-info"></label>
								</div><br>
							</div>						
							<div class="form-group">
								<label for="name" class ="control-label col-sm-3">First name</label>
								<div class="col-sm-8">
									<input type="name" class="form-control" id="name" placeholder="Enter name">
								</div>
							</div>
							<div class="form-group">
								<label for="address" class ="control-label col-sm-3">Second name</label>
								<div class="col-sm-8">
									<input type="address" class="form-control" id="address" placeholder="Enter address">
								</div>
							</div>
							<div class="form-group">
								<label for="email" class ="control-label col-sm-3">Email</label>
								<div class="col-sm-8">
									<input type="email" class="form-control" id="email" placeholder="Enter email">
								</div>
							</div>
							<div class="form-group">
								<label for="pwd" class ="control-label col-sm-3">Password</label>
								<div class="col-sm-8">
									<input type="password" class="form-control" id="pwd" placeholder="Enter password">
								</div>
							</div>
						</div>						
						
						
						<h4><strong>Emergency Contact 2</strong></h4>
						<div class="" style="max-width:800px;padding:60px 20px;border:1px solid blue;border-radius: 25px;">
							<div class="form-group">
								<div class="material-switch">
									<span class="control-label col-sm-3" style="margin-left:20px"><strong>Copy Physical Address</strong></span>
									<input id="checkbox3" name="checkbox3" onchange="copyvals(this)" type="checkbox"/>
									<label for="checkbox3" class="label-info"></label>
								</div><br>
							</div>
							
							<div class="form-group">
								<label for="name" class ="control-label col-sm-3">First name</label>
								<div class="col-sm-8">
									<input type="name" class="form-control" id="name" placeholder="Enter name">
								</div>
							</div>
							<div class="form-group">
								<label for="address" class ="control-label col-sm-3">Second name</label>
								<div class="col-sm-8">
									<input type="address" class="form-control" id="address" placeholder="Enter address">
								</div>
							</div>
							<div class="form-group">
								<label for="email" class ="control-label col-sm-3">Email</label>
								<div class="col-sm-8">
									<input type="email" class="form-control" id="email" placeholder="Enter email">
								</div>
							</div>
							<div class="form-group">
								<label for="pwd" class ="control-label col-sm-3">Password</label>
								<div class="col-sm-8">
									<input type="password" class="form-control" id="pwd" placeholder="Enter password">
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
								<label for="name" class ="control-label col-sm-3">First name</label>
								<div class="col-sm-8">
									<input type="name" class="form-control" id="name" placeholder="Enter name">
								</div>
							</div>
							<div class="form-group">
								<label for="address" class ="control-label col-sm-3">Second name</label>
								<div class="col-sm-8">
									<input type="address" class="form-control" id="address" placeholder="Enter address">
								</div>
							</div>
							<div class="form-group">
								<label for="email" class ="control-label col-sm-3">Email</label>
								<div class="col-sm-8">
									<input type="email" class="form-control" id="email" placeholder="Enter email">
								</div>
							</div>
							<div class="form-group">
								<label for="pwd" class ="control-label col-sm-3">Password</label>
								<div class="col-sm-8">
									<input type="password" class="form-control" id="pwd" placeholder="Enter password">
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
		
		<script src="dist/js/jquery.min.js"></script>
		<script src="dist/js/jquery.easing.min.js"></script>
		<script src="dist/js/bootstrap.min.js"></script>
		<script src="dist/js/custom.js"></script>
		
	</body>
</html>






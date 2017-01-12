<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Healthcare</title>
		
		<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans|Raleway|Candal">
		<link rel="stylesheet" type="text/css" href="{{asset('dist/css/font-awesome.min.css')}}">
		<link rel="stylesheet" type="text/css" href="{{asset('dist/css/bootstrap.min.css')}}">
		<link rel="stylesheet" type="text/css" href="{{asset('dist/css/style.css')}}">

		</head>
	<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">
		<!--banner-->
		<section id="banner" class="banner">
			<div class="bg-color">
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
									<li class=""><a href="{{ url('/demographics') }}">Demographics</a></li>
									<li class="active"><a href="{{ url('/medicalhistory') }}">Medical History</a></li>
									<li class=""><a href="{{ url('/plogin') }}">Logout</a></li>
									<li class=""><a href="#footer">Contact</a></li>
								</ul>
							</div>
						</div>
					</div>
				</nav>
            </div>
        </section> 












        		<!--footer-->
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
								Developed from <i class="fa fa-heartbeat" style="color:hotpink" aria-hidden="true"></i> by <a href="https://saurabh-neo.github.io/">©Saurabh Harwadikar</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</footer>
		<!--/ footer-->
		
		
		
	</body>
</html>



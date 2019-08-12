<?php
session_start();
if(!isset($_SESSION['a']))
		echo"<script>location.href='index.php';</script>";
?>
<html>
	<head>
  <title>Bootstrap 4 Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <style>
		/* Make the image fully responsive */
			.carousel-inner img {
			width: 100%;
			height: 50%;
						}
			</style>
	</head>
	<body>
		
				<nav class="navbar navbar-expand-md bg-warning navbar-dark">
					<a href="#" class="navbar-brand ">
						<img src="logo1.jpg" alt="Logo" style="width:40px;">
					</a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#css">
						<span class="navbar-toggler-icon">
					</button>
					<div class="collapse navbar-collapse" id="css">
						<ul class="navbar-nav">
							<li class="nav-item">
								<a href="home.php" class="nav-link" ><i class="fas fa-home"></i> HOME</a>
							</li>
							<li class="btn-group">
							<div class="btn-group">
							<button type="button" class="btn btn-warning text-light dropdown-toggle" data-toggle="dropdown">
								EVENTS
							</button>
							<div class="dropdown-menu">
							<a class="dropdown-item" href="#">workshop</a>
								<a class="dropdown-item" href="#">WEB DEVELOPMENT</a>
							</div>
							
						</div>
							<li class="nav-item" >
							<a class="nav-link" href="delete.php"><i class="fas fa-users-cog"></i> CANCELREGISTRATION</a>
							</li>
							<li class="nav-item">
							<a class="nav-link" href="logout.php"><i class="fas fa-chalkboard-teacher"></i>LOGOUT</a>
							</li>	
							<li class="nav-item" >
								<a class="nav-link" href="aboutus.php"><i class="fas fa-users-cog"></i>ABOUT US</a>
							</li>
							
						</ul>
					</div>
				</nav>
				<div id="css1" class="carousel slide" data-ride="carousel">
					<ul class="carousel-indicators">
						<li data-target="#css1" data-slide-to="0" class="active"></li>
						<li data-target="#css1" data-slide-to="1"></li>
						<li data-target="#css1" data-slide-to="2"></li>
					</ul>
				
					<div class="carousel-inner" >
						<div class="carousel-item active">
							<img src="la.jpg" alt="Los Angeles" >
							 <div class="carousel-caption">
								<h3>Los Angeles</h3>
								<p>We had such a great time in LA!</p>
							</div>
						</div>
						<div class="carousel-item">
							<img src="ny.jpg" alt="NEW YORK" >
								<div class="carousel-caption">
									<h3>NEW YORK</h3>
									<p>We had such a great time in NY!</p>
									</div>
						</div>
						<div class="carousel-item">
							<img src="chicago.jpg" alt="CALIFORNIA" >
								<div class="carousel-caption">
									<h3>CHICAGO</h3>
									<p>We had such a great time in CA!</p>
								</div>
						</div>
					</div>
					<a class="carousel-control-prev" href="#css1" data-slide="prev">
						<span class="carousel-control-prev-icon"></span>
					</a>
					<a class="carousel-control-next" href="#css1" data-slide="next">
						<span class="carousel-control-next-icon"></span>
					</a>
				</div>
		
				<nav class=" navbar navbar-expand-md bg-warning fixed-bottom justify-content-center">
					<div  class="row">
						<div class="col-sm-4">
						</div>
						<div class="col-sm-4">
							<a href="#">&copy;copyrights@2019</a>
							<!--<h5>hii</h5>-->
						</div>
						<div class="col-sm-4">
						</div>
	
					</div>
					
				</nav>
	</body>
</html>
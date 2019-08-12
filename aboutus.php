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
	<body class="bg-secondary">
		
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
							<!--<li class="nav-item" >
								<a class="nav-link" href="event.php"><i class="fas fa-users-cog"></i>EVENTS</a>
							</li>-->
						<li class="btn-group">
						<div class="btn-group">
							<button type="button" class="btn btn-warning text-light dropdown-toggle" data-toggle="dropdown">
								EVENTS
							</button>
							<div class="dropdown-menu">
							<a class="dropdown-item" href="event1.php">workshop</a>
								<a class="dropdown-item" href="event2.php">WEB DEVELOPMENT</a>
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
					</div>
				</nav>
				<div class="container-fluid">
					<div class="row">
						<div class="col-sm-4" style="padding-top:5%;">
							<img src="logo1.jpg">
					</div>
				<div class="col-sm-8" style="padding-top:15%;">
				<blockquote class="blockquote">
						<p class="text-primary">Panimalar Institute of Technology started by Jaisakthi Educational Trust focusses on disseminating knowledge coupled with discipline and ethics.

					It is a Christian Minority Institution and a self- financing engineering college with five streams viz. CSE, IT, ECE,EEE and MECH at present.</p>
				</blockquote>
				
				</div>
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
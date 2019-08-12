<?php
				if(isset($_POST['sub']))
				{
					$a=$_POST['email'];
					$b=$_POST['name'];
					$c=$_POST['phone'];
					$d=$_POST['section'];
					$e=$_POST['class'];
					$f=$_POST['year'];
					$g=$_POST['PASSWORD'];
			
				$con=mysqli_connect("localhost","root","","event");
				if(!$con)
					echo"not connected";
				$cd="INSERT INTO `eventregistration`(`EMAIL`, `NAME`, `PHONE`, `DEPT`, `CLASS`, `YEAR`, `PASSWORD`) VALUES ('$a','$b','$c','$d','$e','$f','$g')";
				$result=mysqli_query($con,$cd);
				}
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
</head>
<body>	
				

				<div class="jumbotron jumbotron-fluid">
					<div class="container">
						 <img src="logo.png" alt="logo" class="img-fluid">
					</div>
				</div>
				<div class="container-fluid">
						<!--<div class="row">
							<div class="col-sm-">
							</div>-->
						<div class="col-sm-12" style="padding-top:5%;">
							
									
						<h1 class="text-danger">PANIMALAR INSTITUTE OF TECHNOLOGY WELCOMES YOU TO OUR SYMPOSIUM 2K-19</h1>
								
						</div>	
				</div>
			<div class="container-fluid">
				<div class="row">
					<div class="col-sm-4">
					</div>
				<div class="col-sm-8" style="padding-left:15%">
					<form action="index.php" method="post">
						<div class="form-group">
							<input type="submit" class=" btn btn-primary" value="LOGIN" name="home" />	
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

<?php
session_start();
if(!isset($_SESSION['b']))
		echo"<script>location.href='index.php';</script>";
?>
<html>
<head>
  <title>DELETE</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
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
								<a href="homeadm.php" class="nav-link" ><i class="fas fa-home"></i> HOME</a>
							</li>
							<li class="nav-item">
								<a href="select.php" class="nav-link" ><i class="fas fa-home"></i>REGISTRATIONDETAILS </a>
							</li>
							<!--<li class="nav-item" >
							<a class="nav-link" href="login.html"><i class="fas fa-users-cog"></i> ADMIN LOGIN</a>
							</li>-->
							<li class="nav-item" >
							<a class="nav-link" href="delete.php"><i class="fas fa-users-cog"></i> CANCELREGISTRATION</a>
							</li>
							<li class="nav-item">
							<a class="nav-link" href="logout1.php" name="ad"><i class="fas fa-chalkboard-teacher"></i>LOGOUT</a>
							</li>	
							
						</ul>
					</div>
			</nav>
		<marquee><h1 class="text-info">SYMPOSIUM-2K19</h1></marquee>
		<br>
		<br>
	<div class="container-fluid">
			<div class="row">
						<div class="col-sm-4">
			</div>
	<div class="col-sm-4" style="padding-top:5%">
		<form action="" method="post">
			<div class="form-group">
				<label for="email">EMAIL:</label>
			<i class="fas fa-user-shield"></i><input type="input" class="form-control" name="email" />	
			</div>
			<!--EMAIL:<input type="text" name="bb"/>-->
			<br>
			<br>
			<input  class="btn btn-primary" type="submit" name="sa"/>
			&nbsp;&nbsp;&nbsp;<input class="btn btn-danger" type="reset" name="r"/>
			
		</form>
	</div>
</div>
		<?php
		if(isset($_POST['sa']))
		{
			$ro=$_POST['email'];
			
			$con=mysqli_connect("localhost","root","","event");
			if(!$con)
				echo"not connected";
			$cd="DELETE FROM `eventregistration` WHERE EMAIL='$ro'";
			$result=mysqli_query($con,$cd);
			//echo"<h1 align='center' class='text-primary'>ThankYOU FOR INTEREST,WE HOPE YOU WILL REGISTER AGAIN!</h1>";
		}
		
	?>
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
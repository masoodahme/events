<?php
session_start();
if(!isset($_SESSION['b']))
		echo"<script>location.href='index.php';</script>";
?>
<html>
	<head>
		<title>STUDENT DETAILS</title>
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
								<li class="nav-item">
									<a href="homeadm.php" class="nav-link" ><i class="fas fa-home"></i> HOME</a>
							</li>
								<a href="select.php" class="nav-link" ><i class="fas fa-home"></i>REGISTRATIONDETAILS </a>
							</li>
							<!--<li class="nav-item" >
							<a class="nav-link" href="login.html"><i class="fas fa-users-cog"></i> ADMIN LOGIN</a>
							</li>-->
							<li class="nav-item" >
							<a class="nav-link" href="delete2.php"><i class="fas fa-users-cog"></i> CANCELREGISTRATION</a>
							</li>
							<li class="nav-item">
							<a class="nav-link" href="logout1.php" name="ad"><i class="fas fa-chalkboard-teacher"></i>LOGOUT</a>
							</li>	
							
						</ul>
					</div>
			</nav>
	
		<h1 align="center" class="text-info">STUDENT DETAILS</h1>
		<marquee><h1 class="text-info">SYMPOSIUM-2K19</h1></marquee>
		<br>
		<br>
		<!--<form action="" method="post">
			
			ROLLNO:<input type="text" name="bb"/>
			<br>
			<br>
			<input type="submit" name="sa"/>
			&nbsp;&nbsp;<input type="reset" name="r"/>
			<!--&nbsp;&nbsp;<button type="button" name="br">SHOW ALL</button>-->
			<!--&nbsp;&nbsp;<input type="submit" name="br" value="Show All"/>
			
		</form>-->
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
			<input  class="btn btn-primary" type="submit" value="SELECT" name="sa"/>
			&nbsp;&nbsp;&nbsp;<input class="btn btn-danger" type="reset" name="r"/>
			&nbsp;&nbsp;&nbsp;<input type="submit" name="br" value="SHOW ALL" class="btn btn-success"/>
			
		</form>
	</div>
	</div>
	<?php
		
	if(isset($_POST['br']))
	{
			//$a=$_POST['aa'];
			$b=$_POST['email'];
			//$c=$_POST['cc'];
			//$d=$_POST['dd'];
			//$e=$_POST['e'];
			//$f=$_POST['f'];
			//$g=$_POST['do'];
			$row=array();
			$con=mysqli_connect("localhost","root","","event");
			if(!$con)
				echo"not connected";
			$cd="SELECT `EMAIL`, `NAME`, `PHONE`, `DEPT`, `CLASS`, `YEAR`, `PASSWORD` FROM `eventregistration` ";
			$result=mysqli_query($con,$cd);
			echo"<table align=center border=2px>";
			echo"<tr>";
			echo"<th>NAME</th>";
			echo"<th>ROLLNO</th>";
			echo"<th>PASSWORD</th>";
			echo"<th>YEAR</th>";
			echo"<th>DEPARTMENT</th>";
			echo"<th>SECTION</th>";
			echo"<th>DOB</th>";
			echo"</tr>";		
		while($row=mysqli_fetch_array($result))
		{
			echo"<tr>";
			echo"<td>$row[0]</td>";
			echo"<td>$row[1]</td>";
			echo"<td>$row[2]</td>";
			echo"<td>$row[3]</td>";
			echo"<td>$row[4]</td>";
			echo"<td>$row[5]</td>";
			echo"<td>$row[6]</td>";
			echo"</tr>";
		}
			
			echo"</table>";
		
			
					
	}
 ?>
 <?php
		
	if(isset($_POST['sa']))
	{
			//$a=$_POST['aa'];
			$b=$_POST['email'];
			//$c=$_POST['cc'];
			//$d=$_POST['dd'];
			//$e=$_POST['e'];
			//$f=$_POST['f'];
			//$g=$_POST['do'];
			$row=array();
			$con=mysqli_connect("localhost","root","","event");
			if(!$con)
				echo"not connected";
			$cd="SELECT `EMAIL`, `NAME`, `PHONE`, `DEPT`, `CLASS`, `YEAR`, `PASSWORD` FROM `eventregistration` WHERE  EMAIL='$b'";
			$result=mysqli_query($con,$cd);
			echo"<table align=center border=2px>";
			echo"<tr>";
			echo"<th>NAME</th>";
			echo"<th>ROLLNO</th>";
			echo"<th>PASSWORD</th>";
			echo"<th>YEAR</th>";
			echo"<th>DEPARTMENT</th>";
			echo"<th>SECTION</th>";
			echo"<th>DOB</th>";
			echo"</tr>";		
		while($row=mysqli_fetch_array($result))
		{
			echo"<tr>";
			echo"<td>$row[0]</td>";
			echo"<td>$row[1]</td>";
			echo"<td>$row[2]</td>";
			echo"<td>$row[3]</td>";
			echo"<td>$row[4]</td>";
			echo"<td>$row[5]</td>";
			echo"<td>$row[6]</td>";
			echo"</tr>";
		}
			
			echo"</table>";
		
			
					
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
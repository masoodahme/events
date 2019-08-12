<?php
	if(isset($_POST['sub']))
	{
			session_start();
			$ab=$_POST['email'];
			$bb=$_POST['PASSword'];
			//$be=md5($b);
			$con=mysqli_connect("localhost","root","","event");
			//if($con)
			//	echo"connected";
			$cdd="SELECT `EMAIL`,'PASSWORD` FROM `eventregistration` WHERE EMAIL='$ab' and PASSWORD='$bb'";
			echo"<script>console.log('hii');</script>";
			$result=mysqli_query($con,$cdd);		
			//mysqli_error($result);
			//mysqli_error($con);
			echo"<script>console.log('hii');</script>";
			//if (($result=mysqli_query($con,$cdd)))
			
				echo"<script>console.log('hii');</script>";
				//echo"connected";
				// Return the number of rows in result set
				
				//printf("Result set has %d rows.\n",$rowcount);
				// Free result set
				//mysqli_free_result($result);
				if(($ab=='gayazunnisa@gmail.com'))
				{
					$row=mysqli_fetch_array($result);
					$_SESSION['a']='1';
					echo"login valid";
					echo"<script>location.href='home.php';</script>";
				}	
				else
				{
					echo"not valid";
				}
			
		
	}
					
?>
<?php
	if(isset($_POST['adm']))
	{
			session_start();
			$ab=$_POST['email'];
			$bb=$_POST['PASSword'];
			//$be=md5($b);
			$con=mysqli_connect("localhost","root","","event");
			//if($con)
			//	echo"connected";
			$cdd="SELECT `EMAIL`,'PASSWORD` FROM `eventregistration` WHERE EMAIL='$ab' and PASSWORD='$bb'";
			echo"<script>console.log('hii');</script>";
			$result=mysqli_query($con,$cdd);		
			//mysqli_error($result);
			//mysqli_error($con);
			echo"<script>console.log('hii');</script>";
			//if (($result=mysqli_query($con,$cdd)))
			
				echo"<script>console.log('hii');</script>";
				//echo"connected";
				// Return the number of rows in result set
				
				//printf("Result set has %d rows.\n",$rowcount);
				// Free result set
				//mysqli_free_result($result);
				if(($ab=='ayishanaznee@gmail.com'))
				{
					$row=mysqli_fetch_array($result);
					$_SESSION['b']='1';
					echo"login valid";
					echo"<script>location.href='homeadm.php';</script>";
				}	
				else
				{
					echo"not valid";
				}
			
		
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
					<div class="container">
						<div class="row">
							<div class="col-sm-4">
							</div>
						<div class="col-sm-5" style="padding-top:10%;">
							<div class="shawdow bg-white rounded border-info">
							
							<form action="" method="post">	
								<div class="form-group">
									<label for="email">EMAIL:</label>
									<i class="fas fa-user-shield"></i><input type="input" class="form-control" name="email" />	
								</div>
								<div class="form-group">
									<label for="PASSWORD">PASSWORD :</label>
									<i class="fas fa-unlock"></i><input type="PASSWORD" class="form-control" name="PASSword" />	
								</div>
								<input type="submit" class="btn btn-primary" name='sub' value="USER LOGIN"/>
									<i class="fas fa-sign-in-alt"></i>
							
								&nbsp;&nbsp;<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#myModal">
									<i class="fas fa-user-edit"></i>Forget Password?
								</button>
								&nbsp;&nbsp;<input type="submit" class="btn btn-info" name='adm' value="ADMIN LOGIN"/>
									<i class="fas fa-sign-in-alt"></i>
								<br>
								<br>
								<a href="signup.php">CLICK HERE FOR NEW REGISTRATION</a>
								<div class="modal" id="myModal">
									<div class="modal-dialog">
										<div class="modal-content">
      
											<!-- Modal Header -->
											<div class="modal-header">
												<h4 class="modal-title">Enter the number</h4>
												<button type="button" class="close" data-dismiss="modal">&times;</button>
											</div>
        
									<div class="modal-body">
											<input type="number" class="form-control" id="number" name="example4"/>
									</div>
        
        <!-- Modal footer -->
								<div class="modal-footer">
									<button type="button" class="btn btn-primary" data-dismiss="modal">SUBMIT</button>
								</div>
        
								</div>
								</div>
								</div>
							</form>
						</div>	
						</div>
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
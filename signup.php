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
			<?php
			/*	if(isset($_POST['sub']))
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
				}*/
			?>
				<div class="jumbotron jumbotron-fluid">
					<div class="container">
						 <img src="logo.png" alt="logo" class="img-fluid">
					</div>
				</div>
					<div class="container">
						<div class="row">
							<div class="col-sm-4">
							</div>
						<div class="col-sm-4" style="padding-top:1%;">
							<div class="shawdow bg-white rounded border-info">
							
							<form action="signupback.php" method="post">	
								<div class="form-group">
									<label for="name">NAME:</label>
									<input type="input" class="form-control" name="name" required/> 	
								</div>
								<div class="form-group">
									<label for="name">EMAIL:</label>
									<input type="input" class="form-control" name="email" required/> 	
								</div>
								<div class="form-group">
									<label for="phonenumber">PHONE NUMBER:</label>
									<input type="number"  class="form-control" name="phone" required/> 	
								</div>
								<div class="form-group">
									<label for="dept">DEPT:</label>
									<!--<input type="input" class="form-control" name="emai"/>-->
										<select  name="section" class="form-control" />
											<option value="cse">
												C.S.E
											</option>
											<option value="ece">
												E.C.E
											</option>
											<option value="mech">
												MECH
											</option>
											<option value="civil">
												civil
											</option>
											<option value="EEE">
												E.E.E
											</option>
										</select>
								</div>
								<div class="form-group">
									<label for="class">CLASS:</label>
									<select  name="class" class="form-control" />
										<option value="A">
											A
										</option>
										<option value="B">
											B	
										</option>
										<option value="C">
											C	
										</option>
									</select> 	
								</div>
								<div class="form-group">
									<label for="year">YEAR:</label>
									<select  name="year" class="form-control"/>
										<option value="1st">
											1st
										</option>
										<option value="2nd">
											2nd	
										</option>
										<option value="3rd">
											3rd	
										</option>
										<option value="4th">
											4th
										</option>
									</select> 	 	
								</div>
								<div class="form-group">
									<label for="PASSWORD">PASSWORD:</label>
									<input type="PASSWORD" class="form-control" name="PASSWORD" required />	
								</div>
								<input type="submit" class="btn btn-primary" name='sub' value="SINGUP"/>
								<br>
								<br>
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
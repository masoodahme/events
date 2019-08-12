
<?php
		//if(isset($_POST['sub'])
		
			session_start();
			$a=$_POST['em'];
			$b=$_POST['PASS'];
			//$be=md5($b);
			$con=mysqli_connect("localhost","root","","event");
			if(!$con)
				echo"connected";
			$cdd="SELECT `EMAIL`,'PASSWORD` FROM `eventregistration` WHERE EMAIL='$a' and PASSWORD='$b'";
			$result=mysqli_query($con,$cdd);		
			if(mysqli_num_rows($result)==1)
			{
				$row=mysqli_fetch_array($result);
				$_SESSION['a']=$row[1];
				echo"login valid";
				echo"<script>location.href='index1.php';</script>";
					
			}
			else
				echo"LOGIN AND PASSWORD IS INVALID";
			
		
		
?>
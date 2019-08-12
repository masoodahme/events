
<?php
			session_start();
			$ab=$_POST['em'];
			$bb=$_POST['PASS'];
			//$be=md5($b);
			$con=mysqli_connect("localhost","root","","event");
			//if($con)
			//	echo"connected";
			$cdd="SELECT `EMAIL`,'PASSWORD` FROM `eventregistration` WHERE EMAIL='$ab' and PASSWORD='$bb'";
			//$result=mysqli_query($con,$cdd);		
			//mysqli_error($result);
			//mysqli_error($con);
			if (($result=mysqli_query($con,$cdd)))
			{
				echo"connected";
				// Return the number of rows in result set
				$rowcount=mysqli_num_rows($result);
				//printf("Result set has %d rows.\n",$rowcount);
				// Free result set
				//mysqli_free_result($result);
				if(($rowcount)==1)
				{
					$row=mysqli_fetch_array($result);
					$_SESSION['a']=$row[0];
					echo"login valid";
					echo"<script>location.href='index1.php';</script>";
				}	
				else
				{
					echo"not valid";
				}
			
			}
		
					
?>

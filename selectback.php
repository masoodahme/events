<?php
session_start();
if(!isset($_SESSION['a']))
		echo"<script>location.href='project.php';</script>";
?>
<html>
	<body >
		<h1 align="center">STUDENT DATABASAE</h1>
<?php
		
	if((isset($_post['sa'])))
	{
			//$a=$_POST['aa'];
			$b=$_POST['bb'];
			//$c=$_POST['cc'];
			//$d=$_POST['dd'];
			//$e=$_POST['e'];
			//$f=$_POST['f'];
			//$g=$_POST['do'];
			$row=array();
			$con=mysqli_connect("localhost","root","","student");
			if(!$con)
				echo"not connected";
			$cd="SELECT `NAME`, `ROLLNO`, `PASSWORD`, `YEAR`, `DEPARTMENT`, `SECTION`, `DOB` FROM `studentdetails` WHERE ROLLNO='$b'";
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
	if((isset($_post['br'])))
	{
			//$a=$_POST['aa'];
			$b=$_POST['bb'];
			//$c=$_POST['cc'];
			//$d=$_POST['dd'];
			//$e=$_POST['e'];
			//$f=$_POST['f'];
			//$g=$_POST['do'];
			$row=array();
			$con=mysqli_connect("localhost","root","","student");
			if(!$con)
				echo"not connected";
			$cd="SELECT `NAME`, `ROLLNO`, `PASSWORD`, `YEAR`, `DEPARTMENT`, `SECTION`, `DOB` FROM `studentdetails`;" ;
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
	</body>
</html>
<?php

$conn=mysqli_connect($servername="localhost",$username="root",$password="",$dbname="mca_dept");	

	$st_name=$_POST['name'];
	$st_sem=$_POST['sem'];
	$st_roll=$_POST['rollno'];
	$date=$_POST['date'];
	
	$query_atten="INSERT INTO attentance(st_name,sem,rollno,date) value('$st_name','$st_sem','$st_roll','$date')";
	
	mysqli_query($conn,$query_atten);
	if($query_atten)
	{
		echo "<script>alert('Attendance Done!!')</script>";
		echo '<script>window.location.href="index.php"</script>';
	}
	else
	{
		echo "<script>alert('Some Error!')</script>";
		echo '<script>window.location.href="index.php"</script>';
	}

?>
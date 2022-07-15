<?php
$conn=mysqli_connect($servername="localhost",$username="root",$password="",$dbname="mca_dept");

	
?>
<html>
<head>
 <title>Result Search</title>
 <link rel="shortcut icon" href="images/logo_uni.png" type="image/x-icon">
 <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
<style>
.main
{
	height:250px;
	width:800px;
	margin:0px auto;
	margin-top:60px;
	background-color:whitesmoke;
	border:10px double #5e0209;
}
#l1
{
	color:white;
	background-color:#5e0209;
	border-radius:3px;	
}
#t1
{
	background-color:#5e0209;
	color:white;
	text-align:center;
}
</style>
</head>
<body>
<div class="container-fluid">
<div class="row">
<div class="col-sm-12">
<form action="" method="post">
<div class="main">
<button onclick="window.history.back()" class="btn btn-default" style="background-color:gray; color:white;"><i class="fa fa-refresh"> </i>Back </button>
<form action="" method="post">
<fieldset>
<center>
<label style="font-family:verdana;">ENTER ROLL NO</label><br>
<input type="text" id="t1" name="roll" placeholder="Enter Roll No."/>
<br>
<br>
<input type="submit" name="submit" class="btn btn-default" style="background-color:#5e0209; color:white;"/>
</center>
</fieldset>
</form>
</div>
</div>
</div>
</div>
</body>
</html>

<?php

	if(isset($_POST['submit']))
	{
		$rollno=$_POST['roll'];
		$query="SELECT * FROM MARKSHEET WHERE roll='$rollno' and semester='Third Semester'";
		$data=mysqli_query($conn,$query);
		$res=mysqli_num_rows($data);
		if($res>=1)
		{
			#echo $res;
			while($row=mysqli_fetch_array($data))
			{
				echo $row['name'];
			}
		}
		else
		{
			echo "<script>alert('Your Roll No. does not exist in MCA Third Semester');</script>";
		}
	}

?>

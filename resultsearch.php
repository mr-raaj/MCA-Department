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
	width:860px;
	margin:0px auto;
	margin-top:60px;
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
<fieldset>
<fieldset style="margin:0px auto;">
<legend align="center">SELECT SEMESTER</legend>
<center><label>Semester : </label>&nbsp; &nbsp; <input type="text" list="sem" placeholder="Choose Semester" name="sem" required="true" id="t1"/></center>
	<datalist id="sem">
	<option>First Semester</option>
	<option>Second Semester</option>
	<option>Third Semester</option>
	<option>Fourth Semester</option>
	</datalist>
</fieldset>
<hr>


<center>
<input type="reset"  class="btn btn-secondary"/>
<input type="Submit" value="Search" name="search" class="btn btn-danger" />
</center>
</fieldset>
</div>
</form>

<br>
<fieldset style="background-color:whitesmoke; width:75%; margin:0px auto;">
<?php
if(isset($_POST['search']))
{
	#echo "<script>alert('OK')</script>";
	#$rollno=$_POST['roll'];
	$semester=$_POST['sem'];
	
	$query="SELECT * FROM marksheet WHERE semester='$semester'";
	
	$data=mysqli_query($conn,$query);
	$number=mysqli_num_rows($data);
	if($number>=1)
	{
		echo "<p style='color:white;background-color:#5e0209;'>&nbsp;".$number." Records Found</p>";
		echo "<br/>";
		
	while($row=mysqli_fetch_array($data))
	{
		?>
		<form action="resultview.php" method="post">
		<input type="hidden" name="id1" value="<?php
		echo $row['m_id'];
		?>"/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		
		<label id="l1" style="">&nbsp; &nbsp; Name: &nbsp; &nbsp;</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<?php
		echo $row['name'];
		?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<label id="l1">&nbsp; &nbsp; Semester : &nbsp; &nbsp;</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<?php
		echo $row['semester'];
		?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<button name="view" class="btn btn-success" style="height:35px; font-size:13px;">View Result</button>
		</form>
		<br>
		<?php 
	}	
	}
	else
	{
		echo "<p style='color:white;background-color:#5e0209;'>&nbsp;".$number." :  No Record Found</p>";
	}
}
?>
</fieldset>
</div>
</div>
</div>
</body>
</html>




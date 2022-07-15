<?php

$conn=mysqli_connect($servername="localhost",$username="root",$password="",$dbname="mca_dept");	
if(isset($_POST['attendance_btn']))
{
	$id=$_POST['attendance'];
	//echo $id;
	$data="SELECT * FROM register where id='$id'";
	$result=mysqli_query($conn,$data);
	?>


<html lang="en">
	<head>
	<title>Attendance : Student</title>
	<link rel="shortcut icon" href="../Images/logo_uni.png" type="image/x-icon">
    <meta charset="utf-8">
    <link rel="shortcut icon" href="$baseUrl/../Images/logo_uni.png" type="image/x-icon">
    <!-- css style goes here -->
      <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">
      <link rel="stylesheet" type="text/css" href="../css/footer.css">
      <link rel="stylesheet" type="text/css" href="../css/style.css">
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <!-- css style go to end here -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<style>
		.edit
		{
			
			width:80%;
			//border:1px solid;
			margin:0px auto;
			height:500px;
			
		}
		#infl
		{
			background-color:whitesmoke;
			font-family:sans-serif;
			font-size:14px;
			text-align:center;
		}
		td
		{
			width:500px;
			text-align:center;
			font-family:verdana;
			font-weight:bold;
		}
	</style>
	<script>		
		</script>
  </head>
  <body oncontextmenu="return false">
    <nav class="navbar navbar-expand-lg navbar-dark header-back sticky-top header-navbar-fonts">
      <a class="navbar-brand d-flex align-items-center">
        <img src="../Images/logo_uni.png" class="logo-image" width="50" height="50">
       <h4 class="text-light text-uppercase ml-2">Department of Master of Computer Application <br> <span style="font-size:15px;">IET, Dr Rammanohar Lohia Avadh University</span></h4>
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button> 
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav ml-auto">
		 <li class="nav-item active">
            <a class="nav-link" href="#">STUDENT ATTENDANCE &nbsp; <i class="fa fa-BOOK"> </i><span class="sr-only">(current)</span></a>
          </li>
          
        </ul>
      </div>
    </nav>
	
	
	<hr/>
<div class="container-fluid">
<button onclick="window.history.back()" class="btn btn-info"><i class="fa fa-refresh"> &nbsp; </i>Back </button>
	<div class="row edit">
		<div class="col-sm-3">
		</div>
		
 <?php
 while($row=mysqli_fetch_array($result))
	{
		?>
		<div class="col-sm-6">
		<form action="attendancecode.php" method="post">
		<table border="1" cellpadding="10" cellspacing="10">
		<tr>
		<th><span class="form-control" style="text-align:center;background-color:#5e0209;color:white;font-family:verdana;">Name</span></th>
		<td><input type="text" name="name" class="form-control" value="<?php echo $row['name'];?>"/></td>
		</tr>
		<tr>
		<th><span class="form-control" style="text-align:center;background-color:#5e0209;color:white;font-family:verdana;">Semester</span></th>
		<td>
		<input type="text" name="sem"  class="form-control" value="<?php echo $row['sem'];?>"/>
		</td>
		</tr>
		
		<tr>
		<th><span class="form-control" style="text-align:center;background-color:#5e0209;color:white;font-family:verdana;">Roll No.</span></th>
		<td><input type="text" class="form-control" name="rollno" value="<?php echo $row['rollno'];?>"/></td>
		</tr>
		
		<tr>
		<th><span class="form-control" style="text-align:center;background-color:#5e0209;color:white;font-family:verdana;">Date</span></th>
		<td><input type="date" class="form-control" name="date"/></td>
		</tr>
		
		
		</table>
		
		<br>
		<center><input type="submit" name="attendance_btn"class="btn btn-success" value="TAKE ATTENDANCE" style="font-weight:bold;"/></center>
		</form>
	<?php
	}
	}
	?>
	<br>
	<br>
	<br>
	<br>
	<br>
	<p align="center" style="color:#5e0209;">Powered By : Department of MCA</p>
		</div>
		<div class="col-sm-3"></div>
		</div>
		</div>
	<hr/>
<?php include('../common/footer.php') ?>

</body>
</html>


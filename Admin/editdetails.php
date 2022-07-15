<?php

$conn=mysqli_connect($servername="localhost",$username="root",$password="",$dbname="mca_dept");	
if(isset($_POST['edit_btn']))
{
	$id=$_POST['edit_id'];
	//echo $id;
	$data="SELECT * FROM register where id='$id'";
	$result=mysqli_query($conn,$data);
	?>


<html lang="en">
	<head>
	<title>Edit | Admin Panel</title>
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
			
		}
		#infl
		{
			background-color:whitesmoke;
			font-family:sans-serif;
			font-size:14px;
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
            <a class="nav-link" href="#">ADMIN EDIT&nbsp;<i class="fa fa-pencil"> </i><span class="sr-only">(current)</span></a>
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
		<form action="editcode.php" method="post" enctype="multipart/form-data">
		<table border="1" cellpadding="10" cellspacing="10">
		<input type="hidden" name="edit_id" value="<?php echo $row['id'];?>" class="form-control" id="infl"/>
		<tr>
		<th><span class="form-control" style="text-align:center;background-color:#5e0209;color:white;font-family:verdana;">Admission No.</span></th>
		<td><input type="text" value="<?php echo $row['admno'];?>" class="form-control" id="infl" name="edit_admno"/></td>
		</tr>
		
		<tr>
		<th><span class="form-control" style="text-align:center;background-color:#5e0209;color:white;font-family:verdana;">Enrollment No.</span></th>
		<td><input type="text" value="<?php echo $row['enrollno'];?>" class="form-control" id="infl" name="edit_enrollno"/></td>
		</tr>
		
		<tr>
		<th><span class="form-control" style="text-align:center;background-color:#5e0209;color:white;font-family:verdana;">Semester</span></th>
		<td>
		<input type="text" value="<?php echo $row['sem'];?>" class="form-control" id="infl" name="edit_semester"/>
		</td>
		</tr>
		
		
		<tr>
		<th><span class="form-control" style="text-align:center;background-color:#5e0209;color:white;font-family:verdana;">Roll No.</span></th>
		<td><input type="text" value="<?php echo $row['rollno'];?>" class="form-control" id="infl" name="edit_rollno"/></td>
		</tr>
		
		<tr>
		<th><span class="form-control" style="text-align:center;background-color:#5e0209;color:white;font-family:verdana;">Name</span></th>
		<td><input type="text" value="<?php echo $row['name'];?>" class="form-control" id="infl" name="edit_name"/></td>
		</tr>
		
		<tr>
		<th><span class="form-control" style="text-align:center;background-color:#5e0209;color:white;font-family:verdana;">Father Name</span></th>
		<td><input type="text" value="<?php echo $row['fname'];?>" class="form-control" id="infl" name="edit_fname"/></td>
		</tr>
		
		<tr>
		<th><span class="form-control" style="text-align:center;background-color:#5e0209;color:white;font-family:verdana;">Date of Birth</span></th>
		<td><input type="text" value="<?php echo $row['dob'];?>" class="form-control" id="infl" name="edit_dob"/></td>
		</tr>
		
		<tr>
		<th><span class="form-control" style="text-align:center;background-color:#5e0209;color:white;font-family:verdana;">Gender</span></th>
		<td><input type="text" value="<?php echo $row['gender'];?>" class="form-control" id="infl" name="edit_gender"/></td>
		</tr>
		
		
		<tr>
		<th><span class="form-control" style="text-align:center;background-color:#5e0209;color:white;font-family:verdana;">Email</span></th>
		<td><input type="text" value="<?php echo $row['email'];?>" class="form-control" id="infl" name="edit_email"/></td>
		</tr>
		
		<tr>
		<th><span class="form-control" style="text-align:center;background-color:#5e0209;color:white;font-family:verdana;">Mobile No.</span></th>
		<td><input type="text" value="<?php echo $row['mobile'];?>" class="form-control" id="infl" name="edit_mobile"/></td>
		</tr>
		<tr>
		<th><span class="form-control" style="text-align:center;background-color:#5e0209;color:white;font-family:verdana;">Category</span></th>
		<td><input type="text" value="<?php echo $row['cat'];?>" class="form-control" id="infl" name="edit_cat"/></td>
		</tr>
		
		<tr>
		<th><span class="form-control" style="text-align:center;background-color:#5e0209;color:white;font-family:verdana;">Aadhar No.</span></th>
		<td><input type="text" value="<?php echo $row['aadhar'];?>" class="form-control" id="infl" name="edit_aadhar"/></td>
		</tr>
		<tr>
		<th><span class="form-control" style="text-align:center;background-color:#5e0209;color:white;font-family:verdana;">Address</span></th>
		<td><input type="text" value="<?php echo $row['address'];?>" class="form-control" id="infl" name="edit_address" style="height:80px; text-align:justify;"/></td>
		</tr>
		<tr>
		<th><span class="form-control" style="text-align:center;background-color:#5e0209;color:white;font-family:verdana;">Password</span></th>
		<td><input type="password" value="<?php echo $row['password'];?>" class="form-control" id="infl" name="edit_password"/></td>
		</tr>
		<tr>
		<th style="height:100px;"><span class="form-control" style="text-align:center;background-color:#5e0209;color:white;font-family:verdana;">Photo</span></th>
		<td><img src="<?php echo $row['photo'];?>" class="form-control" id="inf1"  style="height:100px; width:100px; margin:0px auto;"/>
		<input type="file" class="form-control"  name="edit_photo"/>
		</td>
		</tr>
		
		
		</table>
		
		<br>
		<center><button name="update_btn" type="submit" class="btn btn-success" style="font-weight:bold;">Update</button></center>
		</form>
	<?php
	}
	}
	?>
		</div>
		<div class="col-sm-3"></div>
		</div>
		</div>
	<hr/>
<?php include('../common/footer.php') ?>

</body>
</html>
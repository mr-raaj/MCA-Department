<?php
session_start();
 include("connect.php");	
	
	$u=$_SESSION['user'];
	$query="SELECT * FROM register WHERE email='$u'";
		$data=mysqli_query($conn, $query);
		$total=mysqli_num_rows($data);
if($row=mysqli_fetch_array($data))
{
	?>
<html lang="en">
	<head>
    <meta charset="utf-8">
	<title>Student Profile</title>
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
    <!-- css style go to end here -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<style>
	.header
	{
		height:45px;
		width:400px;
		border:1px solid;
		margin:0px auto;
		background-color:#5e0209;
	}
	.st
	{
		text-align:center;
		font-size:20px;
		font-weight:bold;
		color:white;
		padding:5px;
		font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
	}
	.st1
	{
		text-align:center;
		font-size:20px;
		font-weight:bold;
		color:#5e0209;
		padding:5px;
		font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
	}
.dropbtn {
  background-color: transparent;
  padding: 0px;
  color:white;
  font-size: 16px;
  border: none;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}
.dropdown-content a:hover {background-color: #ddd;}

.dropdown:hover .dropdown-content {display: block;}

.dropdown:hover .dropbtn {background-color: transparent;}

.roundpic
{
	height:210px; 
	width:210px;
	border-top:5px solid #5e0209;
	border-bottom:5px solid #5e0209;
	margin:0px auto;
	margin-top:10px;
	//margin-right:10px;
	box-shadow:0px 0px 8px 0px black;
}

td
	{
		height:40px;
		width:400px;
		background-color:whitesmoke;
		text-align:center;
		font-weight:bold;
	}
	td:hover
	{
		background-color:teal;
		color:white;
		transition:.5s;
	}
	th
	{
		background-color:#5e0209;
		color:white;
		
	}
	label
	{
		font-size:15px;
		font-weight:bold;
		margin-left:8px;
	}
	.rl:hover
	{
		border:1px solid white;
		color:white;
	}
.dropbtn {
  background-color: transparent;
  padding: 0px;
  color:white;
  font-size: 16px;
  border: none;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #ddd;}

.dropdown:hover .dropdown-content {display: block;}

.dropdown:hover .dropbtn {background-color: transparent;}
</style>
 </head> 
<body>
    <nav class="navbar navbar-expand-lg navbar-dark header-back sticky-top header-navbar-fonts">
      <a class="navbar-brand d-flex align-items-center" href="">
        <img src="../Images/logo_uni.png" class="logo-image" width="50" height="50">
       <h4 class="text-light text-uppercase ml-2">Department of Master of Computer Application <br> <span style="font-size:15px;">IET, Dr Rammanohar Lohia Avadh University</span></h4>
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button> 
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav ml-auto">
         
         <li class="nav-item active">
            <a class="nav-link"><i class="fa fa-user"></i> &nbsp;<u><strong><span style="color:;"><?php echo $row['email']; ?></span></strong></u> <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item active">
		  
		  <div class="dropdown">
			<span class="dropbtn">	<a class="nav-link" href="" style="color:white;">SETTINGS &nbsp;<span class="fa fa-cog" aria-hidden="true">&nbsp;</span><span class="sr-only">(current)</span></a>
			</span>
  <div class="dropdown-content">
   
   <a href="../login/logoutpreview.php">Logout</a>
    <a href="../login/changepassword.php">Change Password</a>
    
  </div>
</div>
            
          </li>
        </ul>
      </div>
    </nav>
	
	
	
	<div class="container-fluid">	
		<br>
			
	
		<div class="row">
			<div class="col-sm-5">
				<div class="row roundpic">
				<div class="col-sm-12">
					<img src="<?php echo $row['photo'];?>" height="190px" width="190px;" style="border-radius:50%; border:2px solid; margin-top:2px; cursor:pointer;" title="<?php echo $row['name'] ?>"/>
				</div>
				</div><br>
				<center><form action="updatedetails.php" method="post">
							<input type="hidden" name="edit_id" value="<?php echo $row['id']; ?>"/>
							<button type="submit" name="edit_btn" class="btn btn-default" style="border:2px solid teal;">Update Profile</a></button>
							
							</form>
							<br/>
							</center>
											<center><form action="attendance.php" method="post">
							<input type="hidden" name="attendance" value="<?php echo $row['id']; ?>"/>
							<button type="submit" name="attendance_btn" class="btn btn-default" style="border:2px solid teal;">Take Attendance</a></button>
							
							</form></center>
							
			</div>
			
			<div class="col-sm-7" style="height:450px;">
				
				<label></label>
				
				<table border="1" cellspacing="5px" cellpadding="5px" align="center" style="" >
						<tr><th></th>
						<td><img src="../images/logo_uni.png" height="50px" width="50px"/></td>
						</tr>
						<tr>
						<th>Enrollment No.</th>
						<td><?php echo $row['enrollno']; ?></td>
						</tr>
						<tr>
						<th>Student Name</th>
						<td><?php echo $row['name']; ?></td>
						</tr>
						<tr>
						<th>Father Name</th>
						<td><?php echo $row['fname']; ?></td>
						</tr>
						<tr>
						<th>Roll No.</th>
						<td><button class="btn btn-default" id="rl" style="border:2px solid white;color:white; background-color:#5e0209; " title=" Your Roll No. <?php echo $row['rollno']; ?>"><?php echo $row['rollno']; ?></button></td>
						</tr>
						<tr>
						<th>Course (Semester)</th>
						<td><?php echo $row['course']; ?> &nbsp;  ( <?php echo $row['sem']; ?> )</td>
						</tr>
						<tr>
						<th>Address</th>
						<td><?php echo $row['address']; ?>
						</td>
						</tr>
						<tr>
						<th>Email</th>
						<td><i class="fa fa-envelope"></i>&nbsp;<?php echo $row['email']; ?></td>
						</tr>
						<tr>
						<th>Mobile</th>
						<td><i class="fa fa-phone"></i>&nbsp;<?php echo $row['mobile']; ?></td></tr>
						
						</table>
			</div>
		</div>
			
			
		<div class="row">
		
			<?php
				
				$connection=mysqli_connect("localhost","root","","mca_dept");
				$links="SELECT * FROM links";
				$reslink=mysqli_query($connection,$links);
				
				while($rowlink=mysqli_fetch_assoc($reslink))
				{
					//echo $rowlink['title'];
				
				
			?>
			<div class="col-sm-4"></div>
				<div class="col-sm-4" style="height:50px;color:white; text-align:center;font-size:22px;">
					<marquee behavior="alternate" scrollamount="2" onmouseover="stop()" onmouseout="start()"><a href="../resultsearch.php" target="_blank"><button class="btn btn-default" style="border:2px solid teal;">Result</button></a>
				<img src="newgif.gif" height="40px" width="40px"/>
				</marquee>
				</div>
				
			<?php
			}
			
			?>
				<div class="col-sm-4"></div>
			</div>
			<br>
			
		<div class="row">
		<div class="col-sm-12" style="background-color:#5e0209; text-align:center;height:80px;">
		<br/>
				<button class="btn btn-default"  style="background-color:white;color:#5e0209; border:3px solid teal;" type="button" data-toggle="modal" data-target="#myModalComplain">
							   Complain Here  <i class="fa fa-send"></i>
							  </button>
							  
			<div id="myModalComplain" class="modal fade" role="dialog">
		  <div class="modal-dialog modal-md">

			<!-- Modal content-->
			<div class="modal-content">
			  <div class="modal-header">
			   
				<h4 class="modal-title text-center">Enter Your Complain </h4>
				 <button type="button" class="close" data-dismiss="modal">&times;</button>
			  </div>
			  <div class="modal-body">
				<form action="complain.php" method="post" enctype="multipart/form-data" >
				<div class="row">
					<label>Enter Name</label><input type="text" name="cmpl_name" class="form-control" placeholder="Enter Your Name" required="true"/>
					<label>Enter Roll No.</label><input type="text" name="cmpl_roll" class="form-control" placeholder="Enter Your Name(if Available)" />
					<label>Email Address</label><input type="email" name="cmpl_email" class="form-control" placeholder="Enter Your Email Address" required="true"/>
					<label>Phone/Mobile</label><input type="number" name="cmpl_mobile" class="form-control" placeholder="Enter Your Mobile No" required="true"/>
					<label>Select Subject</label><input type="text" name="cmpl_subject" list="sub" class="form-control" placeholder="Subject"/>
					<datalist id="sub">
					<option>Anti-Ragging</option>
					<option>Admission Issue</option>
					<option>Roll No Issue</option>
					<option>Result Issue</option>
					</datalist>
					<label>Enter Problem</label><textarea class="form-control" name="cmpl_problem" placeholder="Enter Details" style="min-height:120px;"></textarea>
					<br>
					
					
				</div>
				<br>
				<div class="row">
					
					<div class="col-sm-12" style="text-align:center;"><input type="submit" value="Complain" onclick="if(!this.form.checkbox.checked){alert('You must to the terms first.');return false}" class="btn btn-danger" style="font-family:verdana;;height:40px;width:150px;background-color:color:white;font-weight:bold;" /></div>
				</div>
				</form>
			  </div>
			  <div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			  </div>
			</div>

		  </div>
		</div>
	</div>
	</div>
	</div>
	<?php include('../common/footer.php') ?>
	</body>
	</html>
<?php
}
?>
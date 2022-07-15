<?php 
session_start();
	
	$conn=mysqli_connect($servername="localhost",$username="root",$password="",$dbname="mca_dept");
	

if(isset($_GET['delete']))
{
	$id=$_GET['delete'];

	$qe="DELETE FROM register WHERE id=$id ";
	mysqli_query($conn,$qe);
	
	$message="Deleted Data";
}
?>
<?php
			$pq="SELECT gender,count(*) as number FROM register group BY gender";
			$query_run=mysqli_query($conn,$pq);
			
			?>
			
<html lang="en">
	<head>
	<title>Admin Panel</title>
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
		#edit
		{
			background-color:blue;
			color:white;	
		}
		#del
		{
			background-color:red;
			color:white;
		}
		.counter
		{
			height:300px;
			border:1px solid;
		}
		#bx1
		{
			background-color:whitesmoke;
		}
	</style>
	<script>
			
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
		
          ['Gender', 'Number'],
    
		<?php
			while($row=mysqli_fetch_array($query_run))
			{
			echo "['".$row["gender"]."',".$row["number"]."],";
			}
			
		?>
          
        ]);

        var options = {
          title: 'Percentage of Male and Female Student',
          is3D: true,
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
        chart.draw(data, options);
      }
    
	
				
		</script>
  </head>
  <body>
					  
	<script>
	window.oncontextmenu=function()
	{
		alert("Right Click Disabled!");
		return false;
	}
	</script>

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
            <a class="nav-link" href="">Welcome ADMIN&nbsp;<i class="fa fa-user"> </i><span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="../admin/adminlogout.php">Logout<i class="fa fa-sign-out text-white fa-lg" aria-hidden="true"></i><span class="sr-only">(current)</span></a>
          </li>
        </ul>
      </div>
    </nav>
	
	<?php
	
	$conn=mysqli_connect($servername="localhost",$username="root",$password="",$dbname="mca_dept");
		
		
		$data="SELECT * FROM register";
		$result=mysqli_query($conn,$data);

		
		?>
		<br>
	
<?php
			$pq="SELECT id FROM register ORDER BY id";
			$query_run=mysqli_query($conn,$pq);
			$r=mysqli_num_rows($query_run);
			//echo 'number of rows='.$r;
			
		?>
		
	<div class="container-fluid">
					
		<div class="row" style="background-color:#5e0209;padding:10px;text-align:center;">
					<div class="col-sm-3">
					<button class="btn btn-default" style="background-color:white;" type="button" data-toggle="modal" data-target="#myModal">
					   Add Student Details  <i class="fa fa-plus"></i>
					  </button> 
					  
					  
					  <!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
       
        <h4 class="modal-title text-center">Enter Student Details</h4>
		 <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
        <form action="adddetails.php" method="post" enctype="multipart/form-data" >
		<div class="row reg">
			<div class="col-sm-1"></div>
			<div class="col-sm-5">
				<span style="font-size:20px;">Course.:*</span>
				<select class="form-control" name="course" ><option>MCA</option></select>
				<span style="font-size:20px;">Entrollment No.:</span><input type="text" name="enroll" class="form-control" placeholder="Enter Enrollment No.(if Available)" />
				<hr>
				<span style="font-size:20px;">Enter Student Name:*</span><input type="text" name="name" class="form-control" required="true" placeholder="Enter Student Name" />
				
				<span style="font-size:20px;">Enter Student DOB:*</span><input type="date" name="dob" class="form-control" required="true" />
				<hr>
				<span style="font-size:20px;">Enter Email:*</span><input type="email" name="email" class="form-control" required="true" placeholder="Enter Email Address" />
				
				<span style="font-size:20px;">Category:*</span>
				<input type="text"  list="cate" name="category" required="true" class="form-control" placeholder="Select Category"/>
				<datalist id="cate">
				<option value="General"/>
				<option value="EWS"/>
				<option value="OBC"/>
				<option value="SC/ST"/>
				</datalist>
				<span style="font-size:20px;">Enter Password:*</span><input type="password" name="password" class="form-control" required="true" placeholder="Enter Password" />
				<hr>
				<span style="font-size:20px;">Enter Address:*</span>
				<textarea class="form-control" name="address">
				</textarea>
				<br>
				<br>
				<input type="checkbox" name="checkbox" value="check"/>&nbsp; <span style="color:#5e0209;font-weight:bold;">I agree all the Terms*</span>
				
				
				
			</div>
			
			<div class="col-sm-5">
			
			<span style="font-size:20px;">Current Semester:*</span>
				
					<input type="text"  list="sem" name="semester" required="true" class="form-control" placeholder="Select Semester"/>
				<datalist id="sem">
				<option value="First Semester"/>
				<option value="Second Semester"/>
				<option value="Third Semester"/>
				<option value="Fourth Semester"/>
				</datalist>
			
				<span style="font-size:20px;">Roll No.:</span><input type="text" name="rollno" class="form-control" placeholder="Enter Roll No.(if Available)" />
				<hr>
				<span style="font-size:20px;">Admission No.:</span><input type="text" name="admno" class="form-control" placeholder="Enter Admission No.(if Available)" />
				<span style="font-size:20px;">Enter Father Name:*</span><input type="text" name="fname" class="form-control" required="true" placeholder="Enter Father Name" />
				<hr>
				<span style="font-size:20px;">Gender*</span>
				<input type="text" list="gnd" class="form-control" name="gender" required="true" placeholder="Select Your Gender"/>
				<datalist id="gnd">
				<option value="Male"/>
				<option value="Female"/>
				</datalist>
				
				<span style="font-size:20px;">Enter Mobile No.:*</span><input type="number" name="mobile" class="form-control" maxlength="10" required="true" placeholder="Enter Mobile No.)" />
				<span style="font-size:20px;">Enter Aadhar:</span><input type="number" name="aadhar" class="form-control" maxlength="14" placeholder="Enter Aadhar No.(if Available)" />
				<hr>
				<span style="font-size:20px;">Upload Photo:*</span><input type="file" name="photo" class="form-control" required="true"/>
				<span style="font-size:20px;">Upload Examination Form:</span><input type="file" name="examform" class="form-control"/>
			</div>
			<div class="col-sm-1"></div>
			
		</div>
		<br>
		<div class="row">
			
			<div class="col-sm-12" style="text-align:center;"><input type="submit" value="Add" onclick="if(!this.form.checkbox.checked){alert('You must to the terms first.');return false}" class="btn btn-success" style="font-family:verdana;;height:40px;width:150px;background-color:color:white;font-weight:bold;" /></div>
		</div>
		</form>
      </div>
      <div class="modal-footer">* Only Admin &nbsp; &nbsp;
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
					</div>
					<div class="col-sm-3"><button class="btn btn-default" style="background-color:white;" type="button" data-toggle="modal" data-target="#myModal1">
					  View Registered Student Details &nbsp;<i class="fa fa-tasks"></i>
					  </button>
					  <!-- Modal -->
	<div id="myModal1" class="modal fade" role="dialog">
	  <div class="modal-dialog modal-xl">
		<!-- Modal content-->
		<div class="modal-content">
		  <div class="modal-header">
			<h4 class="modal-title text-center">All Student Details (Total)<span class="badge badge-danger">
			<?php
			$pq="SELECT id FROM register ORDER BY id";
			$query_run=mysqli_query($conn,$pq);
			$r=mysqli_num_rows($query_run);
		    echo $r;
		   ?>
			</span> </h4>
			 <button type="button" class="close" data-dismiss="modal">&times;</button> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			 <a href="downloaddetails.php"><button class="btn btn-default" style="background-color:#5e0209; color:white;">Print</button></a>
		  </div>
		    <div class="modal-body">
				<div class="row">
			<table border="1" align="center" cellspacing="8px" cellpadding="8" style="text-align:center;">
						<tr style="background-color:#5e0209;color:white;">
							<!---<th>Course</th>--->
							<th>Roll No.</th>
							<th>Admission No.</th>
							<th>Entrollment No.</th>
							<th>Student Name</th>
							<th>Email </th>
							<th>Mobile</th>
							<th>Date of Birth</th>
							<th>Gender</th>
							<!---<th>Password</th>--->
							<!----<th>Date of Registration</th>---->
							<th>Student Photo</th>
							<th>Edit</th>
							<th>Delete Details</th>
						</tr>
			<?php
			
			while($row=mysqli_fetch_array($result))
				{
			?>
			
						<tr>
							<!---<td> <?php echo $row['course']; ?></td>--->
							<td> <?php echo $row['rollno']; ?></td>
							<td> <?php echo $row['admno']; ?></td>
							<td> <?php echo $row['enrollno']; ?></td>
							<td> <?php echo $row['name']; ?></td>
							<td> <input type="button" class="btn btn-default" value="<?php echo $row['email']; ?>"/></td>
							<td> <?php echo $row['mobile']; ?></td>
							<td> <?php echo $row['dob']; ?></td>
							<td> <?php echo $row['gender']; ?></td>
							<!---<td> <?php echo $row['password']; ?></td>--->
							<!----<td> <?php echo $row['date']; ?></td>---->
							<td> <img src="../Login/<?php echo $row['photo'];?>" height="100px" width="90px" title="<?php echo $row['name']; ?>"/></td>

							<td> 
							<form action="editdetails.php" method="post">
							<input type="hidden" name="edit_id" value="<?php echo $row['id']; ?>"/>
							<button type="submit" name="edit_btn" class="btn btn-info"><i class="fa fa-pencil"></i></a></button>
							
							</form>
							</td>
							
							<td> 
							<a href="adminprofile.php?delete=<?php echo $row['id'] ?>" class="btn btn-danger" ><i class="fa fa-trash"></i></a>
							</td>
						</tr>
			
			<?php
				}
			?>
				</table>
				</div>	  
					  
			</div>	
		<div class="modal-footer">
        <button type="button" class="btn btn-info" data-dismiss="modal">Close</button>
		</div>				
				</div>
				</div>
				</div>
					  </div>
					  
					<div class="col-sm-3"><button class="btn btn-default" style="background-color:white;" type="button" data-toggle="modal" data-target="#myModalComplainDetails">
					  <i class="fa fa-info"></i> View Complains Details
					  </button>

						<?php
						
						$con_cmpl=mysqli_connect("localhost","root","","mca_dept");
						$cmpl="select * from complain";
						$cmpl_res=mysqli_query($con_cmpl,$cmpl);
						?>
						<div id="myModalComplainDetails" class="modal fade" role="dialog">
						  <div class="modal-dialog modal-lg">
							<!-- Modal content-->
							<div class="modal-content">
							  <div class="modal-header">
								<h4 class="modal-title text-center">Complains </h4>
								 <button type="button" class="close" data-dismiss="modal">&times;</button>
							  </div>
							  <div class="modal-body">
								<table border="1" cellspacing="10" cellpadding="10" align="center">
								<tr style="background-color:#5e0209;color:white;text-align:center;">
								<th>ID</th>
								<th>Name</th>
								<th>Email</th>
								<th>Mobile</th>
								<th>Subject</th>
								<th>Problem</th>
								</tr>
								<?php 
								while($cmp=mysqli_fetch_array($cmpl_res))
							{
						?>
								<tr>
								<td><?php echo $cmp['cmpl_id']; ?></td>
								<td><?php echo $cmp['cmpl_name']; ?></td>
								<td><?php echo $cmp['cmpl_email']; ?></td>
								<td><?php echo $cmp['cmpl_mobile']; ?></td>
								<td><?php echo $cmp['cmpl_subject'];?></td>
								<td><?php echo $cmp['cmpl_problem']; ?></td>
								
								</tr>
								<?php
								}
								?>
								</table>
							  </div>
							  <div class="modal-footer">
								<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
							  </div>
							</div>
						  </div>
						</div>
					  </div>
					  
					<div class="col-sm-3"><button class="btn btn-default" style="background-color:white;" type="button" data-toggle="modal" data-target="#myModalUploadFormStudent">
					  <i class="fa fa-plus"></i> Upload Notice For Student
					  </button>
					  
					  
					  <div id="myModalUploadFormStudent" class="modal fade" role="dialog">
						  <div class="modal-dialog modal-lg">
							<!-- Modal content-->
							<div class="modal-content">
							  <div class="modal-header">
								<h4 class="modal-title text-center">Upload Notice for Students </h4>
								 <button type="button" class="close" data-dismiss="modal">&times;</button>
							  </div>
							  <div class="modal-body">
								<form action="linksforstudents" method="post">
									
									<p style="font-size:22px;">Notice Title:</p><input type="text" name="title" placeholder="Title Here (Mandatory) "class="form-control" required="true"/>
									<p style="font-size:22px;">Notice Link:</p><input type="text" name="link" placeholder="Link Here" class="form-control"/>
									<br>
									<input type="submit" value="Submit" class="btn btn-success form-control"/>
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
		<div class="row" style="padding:10px; background-color:whitesmoke;">
			<div class="col-sm-3" style="height:300px;background-color:whitesmoke; border-top:5px solid #5e0209;border-bottom:5px solid #5e0209; text-align:center; padding:30px; box-shadow:0px 0px 10px 0px black;"><br><br> <h3 style="color:#5e0209;">Total Registered Student</h3><br>
			 <span style="font-size:30px; background-color:#5e0209; color:whitesmoke; font-weight:bold; font-family:;"> &nbsp; <?php  echo $r; ?> &nbsp;</span>
			</div>
			<div class="col-sm-1"></div>
			<div class="col-sm-3" style="height:300px;background-color:whitesmoke; border-top:5px solid #5e0209;border-bottom:5px solid #5e0209; padding:10px; text-align:center; box-shadow:0px 0px 10px 0px black;">
				
				<button class="btn btn-default" style="background-color:#5e0209;color:white;">Percentage of Male and Female</button>
				<!--- Pie Chart of Students ---->
				<div id="piechart_3d" style="height:230px;box-shadow:0px 0px 5px 0px black;"></div>	
				
			</div>
			<div class="col-sm-1"></div>
			<div class="col-sm-4" style="height:300px;background-color:#5e0209; border-radius:0px; text-align:center; color:white; padding:30px;">
			
			<button class="btn btn-danger" style="width:90%">Notification</button>
			
			<?php
			
			$querylinks="SELECT * FROM links";
			$links=mysqli_query($conn,$querylinks);
			while($rowlinks=mysqli_fetch_array($links)){
				
			
			?>
			
			<hr color="white"/>
			<marquee height="130px" onmouseover="stop()" onmouseout="start()" behavior="scroll" direction="up" scrolldelay="25" hspace="10%" scrollamount="2" bgcolor="">
			<hr/ color="white">
			<h6> <i class="fa fa-bullhorn"></i><a href="<?php echo $rowlinks['link'];?>" target="_blank" style="color:white;"> &nbsp; 1. <?php echo $rowlinks['title'];?></a></h6>
			<hr/ color="white">
			<h6><i class="fa fa-bullhorn"></i> &nbsp; 2. Upcoming Updates</h6>
			<hr/ color="white">
			<h6><i class="fa fa-bullhorn"></i> &nbsp; 3. Upcoming Updates</h6>
			
			<hr/ color="white">
			</marquee><hr/>
			
			<?php }
		?>
			<span ><a href="notification.php" target="_blank" style="color:white; background-color:green;border-radius:5px;">&nbsp; View All &nbsp;</a></span>
			</div>	
		</div>
		<hr/>
		<div class="row" style="height:150px; background-color:whitesmoke;">
			<div class="col-sm-6">
			
			  <center>
						<br/>
						<br/>
					<div class="col-sm-6"><button class="btn btn-default" style="background-color:#5e0209;color:white;" type="button" data-toggle="modal" data-target="#myModalAttDetails">
					  <i class="fa fa-eye"></i> View Attendance Details
					  </button>

						<?php
						
						$con_att=mysqli_connect("localhost","root","","mca_dept");
						$attendance_query="select * from attentance";
						$att_res=mysqli_query($con_att,$attendance_query);
						?>
						<div id="myModalAttDetails" class="modal fade" role="dialog">
						  <div class="modal-dialog modal-lg">
							<!-- Modal content-->
							<div class="modal-content">
							  <div class="modal-header">
								<h4 class="modal-title text-center">List Today </h4>
								 <button type="button" class="close" data-dismiss="modal">&times;</button>
							  </div>
							  <div class="modal-body">
								<table border="1" cellspacing="10" cellpadding="10" align="center">
								<tr style="background-color:#5e0209;color:white;text-align:center;">
								<th>ID</th>
								<th>Name</th>
								<th>Semester</th>
								<th>Roll No.</th>
								<th>Date</th>
								
								</tr>
								<?php 
								while($att=mysqli_fetch_array($att_res))
							{
								
						?>
								<tr>
								<td><?php echo $att['attendance_id']; ?></td>
								<td><?php echo $att['st_name']; ?></td>
								<td><?php echo $att['sem']; ?></td>
								<td><?php echo $att['rollno']; ?></td>
								<td><?php echo $att['date'];?></td>
								
								
								</tr>
								<?php
								}
								?>
								</table>
							  </div>
							  <div class="modal-footer">
								<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
							  </div>
							</div>
						  </div>
						</div>
					  </div>	  
				</center>
			</div>
			<div class="col-sm-6">
			<br/>
			<a href="marksheet.php" target="_blank"><button class="btn btn-danger">Marksheet Entry</button></a>
			<br/>
			<center>
			<button class="btn btn-default" style="background-color:#5e0209;color:white;" type="button" data-toggle="modal" data-target="#myModalAddTeacherDetails">
					  <i class="fa fa-eye"></i> View Teachers Details
					  </button>

						<?php
						
						$con_att=mysqli_connect("localhost","root","","mca_dept");
						$teacher_query="select * from teachers";
						$teacher_res=mysqli_query($con_att,$teacher_query);
						?>
						<div id="myModalAddTeacherDetails" class="modal fade" role="dialog">
						  <div class="modal-dialog modal-lg">
							<!-- Modal content-->
							<div class="modal-content">
							  <div class="modal-header">
								<h4 class="modal-title text-center"> <a href="addteacher.php"><button class="btn btn-default" style="border:2px solid teal;">Add More Teachers &nbsp; <i class="fa fa-plus" style="background-color:red;color:white;width:30px; padding:5px; height:25px; border-radius:2px;"></i> </button> </a></h4>
								 <button type="button" class="close" data-dismiss="modal">&times;</button>
							  </div>
							  <div class="modal-body" style="background-color:whitesmoke;">
								<table border="1" cellspacing="10" cellpadding="20" align="center">
								<tr style="background-color:#5e0209;color:white;text-align:center;">
								<th>Teacher ID</th>
								<th>Teacher Name</th>
								<th>Designation</th>
								<th>Address</th>
								<th>Photo</th>
								
								</tr>
								<?php 
								while($t=mysqli_fetch_array($teacher_res))
							{
								
						?>
								<tr>
								<td><?php echo $t['t_id']; ?></td>
								<td><?php echo $t['t_name']; ?></td>
								<td><?php echo $t['t_designation']; ?></td>
								<td><?php echo $t['t_address']; ?></td>
								<td><img src="<?php echo $t['t_photo']; ?>" title="<?php echo $t['t_name']; ?>"/></td>
								</tr>
								<?php
								}
								?>
								</table>
							  </div>
							  <div class="modal-footer">
								<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
							  </div>
							</div>
						  </div>
						</div>
			</center>
			
			</div>
		</div>	
	</div>
	
<hr>
<?php include('../common/footer.php') ?>

</body>
</html>
	

<?php
?>
<html lang="en">
	<head>
	<title>Student Registration Form</title>
	<link rel="shortcut icon" href="../Images/logo_uni.png" type="image/x-icon">
    <meta charset="utf-8">
    <link rel="shortcut icon" href="$baseUrl/../Images/logo_uni.png" type="image/x-icon">
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
	.reg
	{
		
		//border:1px solid;
		text-align:center;
		//background-color:whitesmoke;
	}
	.header {
  position: fixed;
  top: 0;
  z-index: 1;
  width: 100%;
  background-color: #f1f1f1;
  margin-top:85px;
}
.progress-container {
  width: 100%;
  height: 8px;
  background: black;
}

.progress-bar {
  height: 8px;
  background:red;
  width: 0%;
}
.content {
  padding: 10px 0;
  margin: 50px auto 0 auto;
  width: 85%;
}
</style>
	<script>
	window.onscroll = function() {myFunction()};
	function myFunction() {
				  var winScroll = document.body.scrollTop || document.documentElement.scrollTop;
				  var height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
				  var scrolled = (winScroll / height) * 100;
				  document.getElementById("myBar").style.width = scrolled + "%";
						  }
	</script>
</head>
<body>
 

    <nav class="navbar navbar-expand-lg navbar-dark header-back sticky-top header-navbar-fonts">
      <a class="navbar-brand d-flex align-items-center" href="../index.php">
        <img src="../Images/logo_uni.png" class="logo-image" width="50" height="50">
       <h4 class="text-light text-uppercase ml-2">Department of Master of Computer Application <br> <span style="font-size:15px;">IET, Dr Rammanohar Lohia Avadh University</span></h4>
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button> 
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="../index.php">HOME<span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="../admissionpage.php">ADMISSION<span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="../login/login.php">LOGIN<i class="fa fa-sign-out text-white fa-lg" aria-hidden="true"></i><span class="sr-only">(current)</span></a>
          </li>
        </ul>
      </div>
    </nav>
	
	<div class="header">
  <div class="progress-container">
    <div class="progress-bar" id="myBar"></div>
  </div>  
</div>

<div class="content">
	
	<div class="container-fluid">
	<br>
	
		<div class="row" style="height:50px;width:90%; border:1px solid;background-color:navy;margin:0px auto;padding:2px;border-radius:3px;box-shadow:2px 0px 5px 0px navy;">
			<div class="col-sm-12"><h3 style="text-align:center;font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;color:white;">REGISTRATION FORM &nbsp;<i class="fa fa-book text-white fa-lg" aria-hidden="true"></i></h3>
			</div>
		</div>
		<br>
		<form action="regcode.php" method="post" enctype="multipart/form-data" >
		<div class="row reg">
			<div class="col-sm-1"></div>
			<div class="col-sm-5">
				<span style="font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;font-size:20px;">Course.:*</span>
				<select class="form-control" name="course" ><option>MCA</option></select>
				<span style="font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;font-size:20px;">Entrollment No.:</span><input type="text" name="enroll" class="form-control" placeholder="Enter Enrollment No.(if Available)" />
				<hr>
				<span style="font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;font-size:20px;">Enter Student Name:*</span><input type="text" name="name" class="form-control" required="true" placeholder="Enter Student Name" />
				
				<span style="font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;font-size:20px;">Enter Student DOB:*</span><input type="date" name="dob" class="form-control" required="true" />
				<hr>
				<span style="font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;font-size:20px;">Enter Email:*</span><input type="email" name="email" class="form-control" required="true" placeholder="Enter Email Address" />
				
				<span style="font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;font-size:20px;">Category:*</span>
				<input type="text"  list="cate" name="category" required="true" class="form-control" placeholder="Select Category"/>
				<datalist id="cate">
				<option value="General"/>
				<option value="EWS"/>
				<option value="OBC"/>
				<option value="SC/ST"/>
				</datalist>
				<span style="font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;font-size:20px;">Enter Password:*</span><input type="password" name="password" class="form-control" required="true" placeholder="Enter Password" />
				<hr>
				<span style="font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;font-size:20px;">Enter Address:*</span>
				<textarea class="form-control" name="address">
				</textarea>
				<br>
				<br>
				<input type="checkbox" name="checkbox" value="check"/>&nbsp; <span style="color:#5e0209;font-weight:bold;">I agree*</span>
				
				
				
			</div>
			
			<div class="col-sm-5">
			
			<span style="font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;font-size:20px;">Current Semester:*</span>
				
					<input type="text"  list="sem" name="semester" required="true" class="form-control" placeholder="Select Semester"/>
				<datalist id="sem">
				<option value="First Semester"/>
				<option value="Second Semester"/>
				<option value="Third Semester"/>
				<option value="Fourth Semester"/>
				</datalist>
			
				<span style="font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;font-size:20px;">Roll No.:</span><input type="text" name="rollno" class="form-control" placeholder="Enter Roll No.(if Available)" />
				<hr>
				<span style="font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;font-size:20px;">Admission No.:</span><input type="text" name="admno" class="form-control" placeholder="Enter Admission No.(if Available)" />
				<span style="font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;font-size:20px;">Enter Father Name:*</span><input type="text" name="fname" class="form-control" required="true" placeholder="Enter Father Name" />
				<hr>
				<span style="font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;font-size:20px;">Gender*</span>
				<input type="text" list="gnd" class="form-control" name="gender" required="true" placeholder="Select Your Gender"/>
				<datalist id="gnd">
				<option value="Male"/>
				<option value="Female"/>
				</datalist>
				
				<span style="font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;font-size:20px;">Enter Mobile No.:*</span><input type="number" name="mobile" class="form-control" maxlength="10" required="true" placeholder="Enter Mobile No.)" />
				<span style="font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;font-size:20px;">Enter Aadhar:</span><input type="number" name="aadhar" class="form-control" maxlength="14" placeholder="Enter Aadhar No.(if Available)" />
				<hr>
				<span style="font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;font-size:20px;">Upload Photo:*</span><input type="file" name="photo" class="form-control" required="true"/>
				<span style="font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;font-size:20px;">Upload Examination Form:</span><input type="file" name="examform" class="form-control"/>
			</div>
			<div class="col-sm-1"></div>
			
		</div>
		<br>
		<div class="row">
			
			<div class="col-sm-12" style="text-align:center;"><input type="submit" value="Register" onclick="if(!this.form.checkbox.checked){alert('You must to the terms first.');return false}" class="btn btn-success" style="font-family:verdana;;height:40px;width:150px;background-color:color:white;font-weight:bold;" /></div>
		</div>
		</form>
	</div></div>
	<?php include('../common/footer.php') ?>
	
	</body>
	</html>

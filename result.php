<?php
$conn=mysqli_connect("localhost","root","","mca_dept");
?>
<html>
	<head>
	<title>Result | Department of MCA</title>
	<link rel="shortcut icon" href="Images/logo_uni.png" type="image/x-icon">
      <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
      <link rel="stylesheet" type="text/css" href="css/footer.css">
      <link rel="stylesheet" type="text/css" href="css/style.css">
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<style>
		ul
		{
			list-style-type:none;
		}
	</style>
	<script>		
		</script>
  </head>
  <body oncontextmenu="return false">
    <nav class="navbar navbar-expand-lg navbar-dark header-back sticky-top header-navbar-fonts">
      <a class="navbar-brand d-flex align-items-center">
        <img src="Images/logo_uni.png" class="logo-image" width="50" height="50">
       <h4 class="text-light text-uppercase ml-2">Department of Master of Computer Application <br> <span style="font-size:15px;">IET, Dr Rammanohar Lohia Avadh University</span></h4>
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button> 
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav ml-auto">
		 <li class="nav-item active">
            <a class="nav-link" href="#">&nbsp; <i class="fa fa-eye"> </i><span class="sr-only">(current)</span></a>
          </li>
          
        </ul>
      </div>
    </nav>
	
	
	<hr/>
<div class="container-fluid">

	<div class="row edit">
		<div class="col-sm-3">
		
		</div>
		
		<div class="col-sm-6">
		<center>
		<ul>
		<li>
		<a href="mca_i_sem.php" style="color:black;"><button  class="btn btn-default" style="border:2px solid teal; color:black;">MCA I Semester </button></a>
		</li>
		<br>
		<li>
		<a href="mca_ii_sem.php" style="color:black;"><button  class="btn btn-default" style="border:2px solid teal; color:black;"> MCA II Semester  </button></a>
		</li>
		<br>
		<li>
		<a href="resultsearch.php" style="color:black;"><button  class="btn btn-default" style="border:2px solid teal; color:black;"> MCA III Semester  </button></a>
		</li>
		<br>
		<li>
		<a href="resultsearch.php" style="color:black;"><button  class="btn btn-default" style="border:2px solid teal; color:black;"> MCA IV Semester  </button></a>
		</li>
		</ul>
		</center>
	
	<br>
	<br>
	<p align="center" style="color:#5e0209;">Powered By : Department of MCA</p>
		</div>
		<div class="col-sm-3"></div>
		</div>
		</div>
	<hr/>


</body>
</html>
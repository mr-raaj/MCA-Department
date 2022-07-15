<?php
?>

<html>
<head>
<title>Notification | Department of Master of Application</title>
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
	.notification
	{
		height:600px;
		width:65%;
		//border:1px solid;
		margin:0px auto;
		box-shadow:0px 1px 10px 0px #5e0209;
		background-color:whitesmoke;
	}
	#ab
	{
		color:#5e0209;
	}
	#ab:hover
	{
		color:white;
		background-color:#5e0209;
		padding:5px;
		border-radius:0px 15px 0px 15px;
		text-decoration:none;
		
		transition:1s;
	}
	hr
	{
		height:1px;
	}
	</style>
</head>
<body>

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
            <a class="nav-link" href="">NOTIFICATION &nbsp; &nbsp; <i class="fa fa-bell"> </i><span class="sr-only">(current)</span></a>
          </li>
        </ul>
      </div>
    </nav>
	
	
	<div class="container-fluid">
	<hr/>
		<div class="row notification">
		
			<div class="row" style="height:40px; width:90%; margin:0px auto; background-color:#5e0209;margin-top:10px;color:white;">
				<div class="col-sm-12" style="text-align:center;font-family:verdana;font-weight:bold; font-size:18px;padding:5px;">ALL NOTIFICATION &nbsp; <i class="fa fa-bell"></i>
				</div>
				</div>
				<div class="row" style="height:550px; width:90%; margin:0px auto; background-color:#5e0209;">
				<div class="col-sm-12" style="height:550px;background-color:white;">
					<hr/ color="#5e0209;">
					<h6> <i class="fa fa-bullhorn"></i> &nbsp; <a  id="ab" href="#">1. Upcoming Updates</a></h6>
					<hr/ color="#5e0209;">
					<h6><i class="fa fa-bullhorn"></i> &nbsp; <a  id="ab" href="#">2. Upcoming Updates</a></h6>
					<hr/ color="#5e0209;">
					<h6><i class="fa fa-bullhorn"></i> &nbsp; <a  id="ab" href="#">3. Upcoming Updates</a></h6>
					<hr/ color="#5e0209;">
					<h6><i class="fa fa-bullhorn"></i> &nbsp; <a  id="ab" href="#">4. Upcoming Updates</a></h6>
					<hr/ color="#5e0209;">
					<h6><i class="fa fa-bullhorn"></i> &nbsp; <a  id="ab" href="#">5. Upcoming Updates</a></h6>
					<hr/ color="#5e0209;">
					<h6><i class="fa fa-bullhorn"></i> &nbsp; <a  id="ab" href="#">6. Upcoming Updates</a></h6>
					<hr/ color="#5e0209;">
					<h6><i class="fa fa-bullhorn"></i> &nbsp; <a  id="ab" href="#">7. Upcoming Updates</a></h6>
					<hr/ color="#5e0209;">
				</div>
				</div>

			</div>
			
			
		
		</div>
	<hr/>
	</div>



<?php	include("../Common/footer.php");	?>
</body>
</html>
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

.change
{
	height:620px;
	background-color:whitesmoke;
}
td
{
	background-color:teal;
}
th
{
	background-color:#5e0209;
	color:white;
}
</style>
<!----
<script>  
function validateForm() {  
    var pw1 = document.getElementById("pswd1").value;  
    var pw2 = document.getElementById("pswd2").value;  
    if(pw1 == "") {  
      document.getElementById("message1").innerHTML = "**Fill the password please!";  
      return false;  
    }  
    if(pw2 == "") {  
      document.getElementById("message2").innerHTML = "**Enter the password please!";  
      return false;  
    }   
    if(pw1.length < 8) {  
      document.getElementById("message1").innerHTML = "**Password length must be atleast 8 characters";  
      return false;  
    }    
    if(pw1.length > 15) {  
      document.getElementById("message1").innerHTML = "**Password length must not exceed 15 characters";  
      return false;  
    }  
    
    if(pw1 != pw2) {  
      document.getElementById("message2").innerHTML = "**Passwords are not same";  
      return false;  
    } else {  
      return false; 
    }  
 }  

</script>
 ---->
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
        </ul>
      </div>
    </nav>
	
	<div class="container-fluid">			
			<div class="row">
				<div class="col-sm-12 change">
				<button class="btn btn-secondary" style="margin-top:5px;" onclick="window.history.back();">Back To Home</button>
				<hr/>
					<h2 style="text-align:center; color:#5e0209; font-family:verdana;">Change Password</h2>
					<hr/>
					<br>
					<form action="changepasswordcode.php" method="post" onsubmit ="return validateForm()">
					<table align="center" cellspacing="10px" cellpadding="10px" >
					<tr>
						<th>Enter Current Password</th>
						<td><input type="password" placeholder="Enter Cuurent Password" name="cur_password" class="form-control" required="true"/></td>
						</tr>
						<tr>
						<th>Enter New Password</th>
						<td><input type="password" placeholder="Enter New Password" name="new_password" class="form-control" required="true" id = "pswd1"/></td><span id = "message1" style="color:red"> </span> 
						</tr>
						<tr>
						<th>Enter Confirm Password</th>
						<td><input type="password" placeholder="Enter Confirm Password" name="cnf_new_password" class="form-control" required="true" id = "pswd2"/></td><span id = "message2" style="color:red"> </span>
						</tr>
						 
					</table>
					<br>
						<center><input type="submit" value="SUBMIT" class="btn btn-info" name="change_password"/></center>
						</form>
						<br/>
						<br/>
						<br/>
						<br/>
						<br/>
						<p align="center" style="color:#5e0209;">Powered By : Department of MCA</p>
				</div>
				
			</div>
	</div>

	
	<?php include('../common/footer.php') ?>
	</body>
	</html>
<?php
}
?>


	


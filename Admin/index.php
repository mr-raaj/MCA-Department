<?php
?>
<html lang="en">
	<head>
	<title>Admin Login</title>
    <meta charset="utf-8">
    <link rel="shortcut icon" href="$baseUrl/../Images/logo_uni.png" type="image/x-icon">
    
    <!-- css style goes here -->

      <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">
      <link rel="stylesheet" type="text/css" href="../css/footer.css">
      <link rel="stylesheet" type="text/css" href="../css/style.css">

    <!-- css style go to end here -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
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
            <a class="nav-link" href="../admin/index.php">ADMIN LOGIN<i class="fa fa-sign-out text-white fa-lg" aria-hidden="true"></i><span class="sr-only">(current)</span></a>
          </li>
        </ul>
      </div>
    </nav>
	<div class="login-div mt-3 rounded">
            <div class="logo-div text-center">
                <img src="../Images/logo_uni.png" alt="" class="align-items-center" width="100" height="100">
            </div>
            <div class="login-padding">
                <h2 class="text-center text-white">ADMIN LOGIN</h2>
                <form class="p-1" action="adminlogincode.php" method="POST">
                    <div class="form-group">
                        <label><h6>Enter Your Username:</h6></label>
                        <input type="text" name="username" placeholder="Enter Username" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label><h6>Enter Password:</h6></label>
                        <input type="Password" name="password" placeholder="Enter Password" class="form-control border-bottom" required>
                
                    </div>
                    <div class="form-group text-center mb-3 mt-4">
                        <input type="submit" name="btnlogin" value="LOGIN" class="btn btn-white pl-5 pr-5 ">
                    </div>
					<p><a href="adminforgot.php" style="color:white;">Forgetten Password *</a></p>
                </form>
            </div>
        </div>
	</body>
	</html>
	

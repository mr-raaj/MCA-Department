<?php

?>
   <html>
	<head>
		<title>Login</title>
	</head>
	<body class="login-background">
		<?php include('../common/common-header.php') ?>
        <div class="login-div mt-3 rounded">
            <div class="logo-div text-center">
                <img src="../Images/logo_uni.png" alt="" class="align-items-center" width="100" height="100">
            </div>
            <div class="login-padding">
                <h2 class="text-center text-white">Forgotten Password</h2>
                <form class="p-1" action="forgotcode.php" method="POST">
                    <div class="form-group">
                        <label><h6>Enter Your ID/Email:</h6></label>
                        <input type="text" name="email" placeholder="Enter User Email" class="form-control" required>
                    </div>
					<div class="form-group">
                        <label><h6>Enter Your Mobile:</h6></label>
                        <input type="number" name="mobile" placeholder="Enter User Phone Number" class="form-control" required>
                    </div>
                   
                    <div class="form-group text-center mb-3 mt-4">
                        <input type="submit" name="btnlogin" value="Forgot" class="btn btn-white pl-5 pr-5 ">
                    </div>
					<div class="form-group text-center mb-3 mt-4">
                        <a href="login.php" style="color:white;"><input type="button" name="btnlogin" value="Login" class="btn btn-white pl-5 pr-5 "/></a>
                    </div>
					
                </form>
            </div>
        </div>
    </body>
</html>




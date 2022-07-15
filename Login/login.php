	<?php
    session_start();
    include("connect.php");
    ?>

<html>
    <head>
		<title>Student Login</title>
		<script>
			window.history.forward();
			function noBack()
			{
				window.history.forward();
				
				
			}
			
		</script>
	</head>
	<body class="login-background" onload="noBack();" onpageshow="if(event.persisted) noBack();" onunload="">
		<?php include('../common/common-header.php') ?>
        <div class="login-div mt-3 rounded">
            <div class="logo-div text-center">
                <img src="../Images/logo_uni.png" alt="" class="align-items-center" width="100" height="100">
            </div>
            <div class="login-padding">
                <h2 class="text-center text-white">LOGIN</h2>
                <form class="p-1" action="" method="POST">
                    <div class="form-group">
                        <label><h6>Enter Your ID/Email:</h6></label>
                        <input type="text" name="email" placeholder="Enter User ID" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label><h6>Enter Password:</h6></label>
                        <input type="Password" name="password" placeholder="Enter Password" class="form-control border-bottom" required>
                
                    </div>
                    <div class="form-group text-center mb-3 mt-4">
                        <input type="submit" name="btnlogin" value="LOGIN" class="btn btn-white pl-5 pr-5 ">
                    </div>
					<p><a href="forgot.php" style="color:white;">Forgetten Password *</a></p>
					<p style="color:yellow; font-size:13px;">If you have not registered yet - <a href="register.php" style="color:white;">Sign Up</a></p>
                </form>
            </div>
        </div>
    </body>
</html>

<?php
if(isset($_POST['btnlogin']))
{
    $email=$_POST['email'];
    $password=$_POST['password'];
    $query="SELECT * FROM register WHERE email='$email' && password='$password'";
    $data=mysqli_query($conn, $query);
    $total=mysqli_num_rows($data);
    
    if($total==1)
    {
        $_SESSION['user']=$email;
       header('location:index.php');
    }
    else
    {
        echo "<script>alert('Please Enter Valid Email or Password')</script>";
    }
}
?>
<br>
<?php include('../Common/footer.php') ?>




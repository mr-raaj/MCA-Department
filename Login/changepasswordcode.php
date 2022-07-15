<?php
$conn=mysqli_connect($servername="localhost",$username="root",$password="",$dbname="mca_dept");
			
			$cur_pass=$_POST['cur_password'];
			$new_pass=$_POST['new_password'];
			$cnf_new_pass=$_POST['cnf_new_password'];
			
			#echo $cur_pass;
			if($new_pass==$cnf_new_pass)
			{
			$change_pass="UPDATE register SET password='$cnf_new_pass' WHERE password='$cur_pass'";
			mysqli_query($conn,$change_pass);
			if($change_pass)
			{
			echo "<script>alert('Password Changed!')</script>";
			echo '<script>window.location.href="index.php"</script>';
			}
			else
			{
				echo "<script>alert('Password Not Changed!')</script>";
				echo '<script>window.location.href="changepassword.php"</script>';
			}
			}
			
			else
			{
				echo "<script>alert('New Password and Confirm New Password are differ!!')</script>";
				echo '<script>window.location.href="changepassword.php"</script>';
			}
			
			
?>
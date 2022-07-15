<?php
session_start();

$email=$_POST['email'];
$mob=$_POST['mobile'];
//echo $email;

$conn=mysqli_connect($servername="localhost",$username="root",$password="",$dbmane="mca_dept");
//mysql_connect("localhost","root","");
//mysql_select_db("mca_dept");

$q="select password from register where email='$email' and mobile='$mob'";
$res=mysqli_query($conn,$q);
//mysql_query($q);
//$res=mysql_query($q);

//if($row=mysql_fetch_array($res,MYSQL_BOTH))
	if($row=mysqli_fetch_array($res))
{
	$_SESSION['user']="$email";
	echo "<script>alert('Your Password is : $row[password]')</script>";
	echo "<script>window.location.href='login.php'</script>";
}
else
{
	echo "<script>alert('Enter Correct Details?')</script>";
	echo "<script>window.location.href='forgot.php'</script>";
}


?>
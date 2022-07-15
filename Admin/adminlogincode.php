<?php
$u=$_POST['username'];
$p=$_POST['password'];


$conn=mysqli_connect($servername="localhost",$username="root",$password="",$dbname="mca_dept");

$sql="select * from admin where username='$u' and password='$p'";
$result=mysqli_query($conn,$sql);

if($row=mysqli_fetch_array($result))

{
	$_SESSION['user']="$u";
	header("location:adminprofile.php");
	die();
}
else
{
	echo "<script>alert('Enter Correct Email or Password..')</script>";
	echo "<script>window.location.href='index.php'</script>";
}


?>
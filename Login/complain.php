<?php

include("connect.php");

$name=$_POST['cmpl_name'];
$email=$_POST['cmpl_email'];
$roll=$_POST['cmpl_roll'];
$mobile=$_POST['cmpl_mobile'];
$subject=$_POST['cmpl_subject'];
$problem=$_POST['cmpl_problem'];

$con=mysqli_connect("localhost","root","","mca_dept");

$complain="Insert into complain(cmpl_name,cmpl_email,cmpl_roll,cmpl_mobile,cmpl_subject,cmpl_problem,date) value('$name','$email','$roll','$mobile','$subject','$problem',curdate())";

mysqli_query($con,$complain);
echo "<script>alert('Your Complain Registered!')</script>";
echo '<script>window.location.href="index.php"</script>';


?>
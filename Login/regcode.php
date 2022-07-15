<?php
$course=$_POST['course'];
$enroll=$_POST['enroll'];
$semester=$_POST['semester'];
$rollno=$_POST['rollno'];
$admno=$_POST['admno'];
$n=$_POST['name'];
$fname=$_POST['fname'];
$dob=$_POST['dob'];
$g=$_POST['gender'];
$email=$_POST['email'];
$mob=$_POST['mobile'];
$cat=$_POST['category'];
$aadhar=$_POST['aadhar'];
$address=$_POST['address'];
$p=$_POST['password'];

$file=$_FILES['photo'];
$filename=$_FILES['photo']['name'];
$type=$_FILES['photo']['type'];
$size=$_FILES['photo']['size'];
$tmp_name=$_FILES['photo']['tmp_name'];

$file1=$_FILES['examform'];
$filename1=$_FILES['examform']['name'];
$type1=$_FILES['examform']['type'];
$size1=$_FILES['examform']['size'];
$tmp_name1=$_FILES['photo']['tmp_name'];

$conn=mysqli_connect($servername="localhost",$username="root",$password="",$dbname="mca_dept");
//mysql_connect("localhost","root","");
//mysql_select_db("mca_dept");

	$fileext1=explode('.',$filename1);
	$filecheck1=strtolower(end($fileext1));
	$fileextstored1=array('pdf','docx','doc');
	if(in_array($filecheck1,$fileextstored1))
	{
		$destinationfile1='upload/pdf/'.$filename1;
		move_uploaded_file($tmp_name1,$destinationfile1);
	}
	$fileext=explode('.',$filename);
	$filecheck=strtolower(end($fileext));
	$fileextstored=array('png','jpg','jpeg');
	if(in_array($filecheck,$fileextstored))
	{
		$destinationfile='upload/'.$filename;
		move_uploaded_file($tmp_name,$destinationfile);
		
	}
	$q="insert into register(course,sem,enrollno,rollno,admno,name,fname,dob,gender,email,mobile,cat,aadhar,address,password,photo,examform,date) value('$course','$semester','$enroll','$rollno','$admno','$n','$fname','$dob','$g','$email','$mob','$cat','$aadhar','$address','$p','$destinationfile','$destinationfile1',curdate())";


	mysqli_query($conn,$q);
	

echo "<script>alert('Registration Successfully Done! Please Go back to Login')</script>";
echo "<script>window.location.href='login.php'</script>";
?>
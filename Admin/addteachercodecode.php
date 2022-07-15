<?php
$t_id=$_POST['t_id'];
$t_name=$_POST['t_name'];
$t_des=$_POST['t_des'];
$t_address=$_POST['t_address'];



$file=$_FILES['t_photo'];
$filename=$_FILES['t_photo']['name'];
$type=$_FILES['t_photo']['type'];
$size=$_FILES['t_photo']['size'];
$tmp_name=$_FILES['t_photo']['tmp_name'];


$conn=mysqli_connect($servername="localhost",$username="root",$password="",$dbname="mca_dept");

	$fileext=explode('.',$filename);
	$filecheck=strtolower(end($fileext));
	$fileextstored=array('png','jpg','jpeg');
	if(in_array($filecheck,$fileextstored))
	{
		$destinationfile='upload/'.$filename;
		move_uploaded_file($tmp_name,$destinationfile);
		
	}
	$q="insert into teachers(t_id,t_name,t_designation,t_address,t_photo,date) value('$t_id','$t_name','$t_des','$t_address','$destinationfile',curdate())";


	mysqli_query($conn,$q);
	

echo "<script>alert('Details Added')</script>";
echo "<script>window.location.href='adminprofile.php'</script>";
?>
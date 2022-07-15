<?php

$conn=mysqli_connect($servername="localhost",$username="root",$password="",$dbname="mca_dept");	
if(isset($_POST['update_btn']))
{
	$e_id=$_POST['edit_id'];
	$adm=$_POST['edit_admno'];
	$enroll=$_POST['edit_enrollno'];
	$semester=$_POST['edit_semester'];
	$roll=$_POST['edit_rollno'];
	$e_name=$_POST['edit_name'];
	$father=$_POST['edit_fname'];
	$e_dob=$_POST['edit_dob'];
	$gen=$_POST['edit_gender'];
	$e=$_POST['edit_email'];
	$mob=$_POST['edit_mobile'];
	$e_cat=$_POST['edit_cat'];
	$e_aadhar=$_POST['edit_aadhar'];
	$add=$_POST['edit_address'];
	$pass=$_POST['edit_password'];
	$file=$_FILES['edit_photo'];
	$filename=$_FILES['edit_photo']['name'];
	$type=$_FILES['edit_photo']['type'];
	$size=$_FILES['edit_photo']['size'];
	$tmp_name=$_FILES['edit_photo']['tmp_name'];
	
	$fileext=explode('.',$filename);
	$filecheck=strtolower(end($fileext));
	$fileextstored=array('png','jpg','jpeg');
	if(in_array($filecheck,$fileextstored))
	{
		$destinationfile='../Login/upload/'.$filename;
		move_uploaded_file($tmp_name,$destinationfile);
		
	}
	
	$query_edit="UPDATE register SET admno='$adm', enrollno='$enroll', sem='$semester', rollno='$roll', name='$e_name', fname='$father', dob='$e_dob', gender='$gen', email='$e', mobile='$mob', cat='$e_cat', aadhar='$e_aadhar', address='$add', password='$pass', photo='$destinationfile' WHERE id='$e_id' ";
	
	mysqli_query($conn,$query_edit);
	if($query_edit)
	{
		echo "<script>alert('Data Updated')</script>";
		echo '<script>window.location.href="adminprofile.php"</script>';
	}
	else
	{
		echo "<script>alert('Data Not Updated')</script>";
		echo '<script>window.location.href="adminprofile.php"</script>';
	}
}

?>
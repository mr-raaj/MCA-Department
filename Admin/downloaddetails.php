<?php
session_start();
require('vendor/autoload.php');
$con=mysqli_connect($servername="localhost",$username="root",$password="",$dbname="mca_dept");
$res=mysqli_query($con,"select * from register");
if(mysqli_num_rows($res)>0){
	$html='
	<html>
	<head>
	<style>
	th
	{
		background-color:black;
		color:white;
	}
	#photo
	{
		height:80px;
		width:95%;
		//border:1px solid;
		margin:0px auto;
	}
	#body
	{
		height:100%;
		width:100%;
		border:5px solid #5e0209;
		padding:20px;
	}
	</style>
	</head>
	<body>
	<div id="body">
	<div id="photo"><img src="dept.png" height="80"/></div>
	<hr/>
	<table border="" cellspacing="5" cellpading="5" class="table">';
		
		$html.='<tr>
							<th>Semester</th>
							<th>Roll No.</th>
							<th>Admission No.</th>
							<th>Entrollment No.</th>
							<th>Student Name</th>
							<th>Gender</th>
							<th>Email Address</th>
							<th>Mobile</th>
							<th>Date of Birth</th>
							<th>Date of Registration</th>
							
		</tr>';
	
		while($row=mysqli_fetch_assoc($res)){
			
			
			$html.='
			<tr>
			<td>'.$row['sem'].'</td>
			<td>'.$row['rollno'].'</td>
			<td>'.$row['admno'].'</td>
			<td>'.$row['enrollno'].'</td>
			<td>'.$row['name'].'</td>
			<td>'.$row['gender'].'</td>
			<td>'.$row['email'].'</td>
			<td>'.$row['mobile'].'</td>
			<td>'.$row['dob'].'</td>
			
			<td>'.$row['date'].'</td>
			</tr>';
		}
	$html.='</table></div></body></html>';
}else{
	$html="Data not found";
}
$mpdf=new \Mpdf\Mpdf();
$mpdf->WriteHTML($html);
$file='MCA_Department/'.time().'.pdf';
$mpdf->output($file,'D');
//D
//I
//F
//S
?>

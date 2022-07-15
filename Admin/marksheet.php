<?php
$conn=mysqli_connect($servername="localhost",$username="root",$password="",$dbname="mca_dept");

if(isset($_POST['add']))
{
	#echo "<script>alert('OK')</script>";
	
	$n=$_POST['name'];
	$rollno=$_POST['roll'];
	$semester=$_POST['sem'];
	$cp=$_POST['cp'];
	$ds=$_POST['ds'];
	$pp=$_POST['pp'];
	$dbms=$_POST['dbms'];
	
	//echo $n;
	
	$query="INSERT into marksheet(name,roll,semester,cp,ds,pp,dbms,date) value('$n','$rollno','$semester','$cp','$ds','$pp','$dbms',curdate())";
	
	$data=mysqli_query($conn,$query);
	if($data<=1)
	{
		echo "<script>alert('Data Added')</script>";
	}
	else
	{
		echo "<script>alert('Some Error')</script>";
	}
	
}

?>
<html>
<head>
 <title>Marks Entry</title> 
 <link rel="shortcut icon" href="image/logo_uni.png" type="image/x-icon">
<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">
<style>
.main
{
	width:860px;
	margin:0px auto;
	margin-top:60px;
}

.hover_bkgr_fricc{
    background:rgba(0,0,0,.4);
    cursor:pointer;
    display:none;
    height:100%;
    position:fixed;
    text-align:center;
    top:0;
    width:100%;
    z-index:10000;
}
.hover_bkgr_fricc .helper{
    display:inline-block;
    height:100%;
    vertical-align:middle;
}
.hover_bkgr_fricc > div {
    background-color: #fff;
    box-shadow: 10px 10px 60px #555;
    display: inline-block;
    height: auto;
    max-width: 551px;
    min-height: 100px;
    vertical-align: middle;
    width: 60%;
    position: relative;
    border-radius: 8px;
    padding: 15px 5%;
}
.popupCloseButton {
    background-color: #fff;
    border: 3px solid #999;
    border-radius: 50px;
    cursor: pointer;
    display: inline-block;
    font-family: arial;
    font-weight: bold;
    position: absolute;
    top: -20px;
    right: -20px;
    font-size: 25px;
    line-height: 30px;
    width: 30px;
    height: 30px;
    text-align: center;
}
.popupCloseButton:hover {
    background-color: #ccc;
}
.trigger_popup_fricc {
    cursor: pointer;
    font-size: 20px;
    margin: 20px;
    display: inline-block;
    font-weight: bold;
}
</style>
<script>
$(window).load(function () {
    $(".trigger_popup_fricc").click(function(){
       $('.hover_bkgr_fricc').show();
    });
    $('.hover_bkgr_fricc').click(function(){
        $('.hover_bkgr_fricc').hide();
    });
    $('.popupCloseButton').click(function(){
        $('.hover_bkgr_fricc').hide();
    });
});
</script>
</head>
<body>
<form action="" method="post">
<div class="main">
<fieldset>
<fieldset>
<legend align="center">Student Details</legend>
<label>Name : </label>&nbsp; &nbsp; <input type="text" placeholder="Enter Student Name" name="name" required="true"/> &nbsp; &nbsp; 
<label>Roll No : </label>&nbsp; &nbsp; <input type="text" placeholder="Enter Student Roll No" name="roll" required="true"/>&nbsp; &nbsp; 
<label>Semester : </label>&nbsp; &nbsp; <input type="text" list="sem" placeholder="Choose Semester" name="sem" required="true"/>
	<datalist id="sem">
	<option>First Semester</option>
	<option>Second Semester</option>
	<option>Third Semester</option>
	<option>Fourth Semester</option>
	</datalist>
</fieldset>
<hr>

<fieldset>
<legend align="center">Marks Entry</legend>
<table align="center" cellspacing="10" cellpadding="10" style="">
<tr style="background-color:gray;color:white;">
<th>Subject</th>
<th>Max. Marks</th>
<th>Obtained Marks</th>
</tr>
<tr>
<th>C Programming</th>
<th>100</th>
<td><input type="number" name="cp" required="true"/></td>
</tr>

<tr>
<th>Data Structure</th>
<th>100</th>
<td><input type="number" name="ds" required="true"/></td>
</tr>

<tr>
<th>Programming with Python</th>
<th>100</th>
<td><input type="number" name="pp" required="true"/></td>
</tr>

<tr>
<th>DBMS</th>
<th>100</th>
<td><input type="number" name="dbms" required="true"/></td>
</tr>

</table>
</fieldset>
<br>
<br>
<center>
<input type="reset"  class="btn btn-secondary"/>
<input type="Submit" value="Add" name="add" class="btn btn-danger" />
</center>
</fieldset>
</div>
</form>
<center>
<a href="pageform.php"> Open Form</a>
</center>
</body>
</html>


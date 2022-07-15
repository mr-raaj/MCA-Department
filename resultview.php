<?php
$conn=mysqli_connect("localhost","root","","mca_dept");
if(isset($_POST['view']))
{
	$id1=$_POST['id1'];
	$q="SELECT * FROM marksheet WHERE m_id='$id1'";
	$d=mysqli_query($conn,$q);
	?>
	
	

<html>
	<head>
	<title>Result View</title>
	<link rel="shortcut icon" href="Images/logo_uni.png" type="image/x-icon">
      <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
      <link rel="stylesheet" type="text/css" href="css/footer.css">
      <link rel="stylesheet" type="text/css" href="css/style.css">
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<style>
		td
		{
			width:500px;
			text-align:center;
			font-family:verdana;
			font-weight:bold;
			height:35px;
		}
		th
		
		{
			width:500px;
			text-align:center;
			background-color:#5e0209;
			color:white;
			padding:5px;
		}
	</style>
	<script>		
		</script>
  </head>
  <body oncontextmenu="return false">
    <nav class="navbar navbar-expand-lg navbar-dark header-back sticky-top header-navbar-fonts">
      <a class="navbar-brand d-flex align-items-center">
        <img src="Images/logo_uni.png" class="logo-image" width="50" height="50">
       <h4 class="text-light text-uppercase ml-2">Department of Master of Computer Application <br> <span style="font-size:15px;">IET, Dr Rammanohar Lohia Avadh University</span></h4>
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button> 
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav ml-auto">
		 <li class="nav-item active">
            <a class="nav-link" href="#" style="font-family:verdana;" >&nbsp; RESULT <i class="fa fa-eye" ></i><span class="sr-only">(current)</span></a>
          </li>
          
        </ul>
      </div>
    </nav>
	
	
	<hr/>
<div class="container-fluid">
<button onclick="window.history.back()" class="btn btn-default" style="background-color:gray; color:white;"><i class="fa fa-refresh"> </i>Back </button>
	<div class="row edit">
		<div class="col-sm-3">
		
		</div>
		
		<div class="col-sm-6">
		<fieldset>
		
		<legend style="text-align:center;">Student Details</legend>
		
		</fieldset>
		<table>
	<tr>
	<th>Roll No</th>
	<th>Name</th>
	<th>Semester</th>
	</tr>
	
		<?php 
	while($r=mysqli_fetch_array($d))
	{
		?>
		<tr>
		 <td><?php echo $r['roll']; ?></td>
		 <td><?php echo $r['name']; ?></td>
		 <td><?php echo $r['semester']; ?></td>
		</tr>
		</table>
		<hr/>
		<fieldset>
		
		<legend style="text-align:center;">Marks</legend>
		<table>
		<tr>
		<th>Subjects</th>
		<th>Max. Marks</th>
		<th>Obtained Marks</th>
		</tr>
		<tr>
			<th style="background-color:white;color:black;">C Programming</th>
			<th style="background-color:white;color:black;">100</th>
			<td><?php echo $r['cp'];?></td>
		</tr>
		<tr>
			<th style="background-color:white;color:black;">Data Structure</th>
			<th style="background-color:white;color:black;">100</th>
			<td><?php echo $r['ds'];?></td>
		</tr>
		<tr>
			<th style="background-color:white;color:black;">Programming with Python	</th>
			<th style="background-color:white;color:black;">100</th>
			<td><?php echo $r['pp'];?></td>
		</tr>
		<tr>
			<th style="background-color:white;color:black;">DBMS</th>
			<th style="background-color:white;color:black;">100</th>
			<td><?php echo $r['dbms'];?></td>
		</tr>
		<tr>
		<th>Grand Total</th>
		<td style="font-weight:bold;font-size:15px;">Max. 400</td>
		<th style="background-color:whitesmoke; color:red; font-weight:bold;font-size:15px;font-family:arial black;">
		<?php 
		
		$sum=$r['cp']+$r['ds']+$r['pp']+$r['dbms'];
		echo $sum;
		?>
		
		</th>
		</tr>
		</fieldset>
		</table>
<?php 
if($sum>=370)
{
	 $short="You have been shortlisted.";
}
else
{
	$short="You have not been shortlisted.";
}
?>
		
	
	<br>
	<p style="color:red;">Remark : <?php echo $short; ?></p>
	<p align="center" style="color:#5e0209;">Powered By : Department of MCA</p>
		</div>
		<div class="col-sm-3"><button style="margin-left:200px; background-color:#5e0209; color:white;" class="btn btn-default" onclick="window.print();">Print</button></div>
		</div>
		</div>
	<hr/>
<?php	
	}
}
?>

</body>
</html>

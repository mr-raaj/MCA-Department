<?php
if(isset($_POST['submit']))
{
	
}
?>

<html>
<head>
<style>

td
{
	padding:5px;
}
th
{
	background-color:teal;
	color:white;
}
td
{
	background-color:whitesmoke;
}	
p
{
	text-align:center;
	margin-top:100px;
	font-family:verdana;
}
</style>
</head>
<body>
<form action="" method="post">
<p>Input type Properties</p>
<table align="center">
<tr>
<th>Attribute</th>
<th>Properties</th>
</tr>
<tr>
<td><label>Color</label></td>
<td><input type="color" name="color"/></td>
</tr>
<tr>
<td><label>Date Time Local</label></td>
<td><input type="datetime-local"  name="datetime"/></td>
</tr>
<tr>
<td><label>Time</label></td>
<td><input type="time"  name="time"/>
<br></td>
</tr>
<tr>
<td><label>Week</label></td>
<td><input type="week" name="week"/></td>
</tr>
<tr>
<td><label>Month</label></td>
<td><input type="month" name="month"/></td>
</tr>
<tr>
<td><label>URL</label></td>
<td><input type="url" name="url"/></td>
</tr>
<tr>
<td><label>Range</label></td>
<td><input type="range" name="range"/></td>
</tr>
<tr>
<td><label>Search</label></td>
<td><input type="search" name="search"/></td>
</tr>
<tr>
<td><label>Telephone</label></td>
<td><input type="tel" name="tel"/></td>
</tr>
</table>
<center><input type="submit" name="submit" style="width:150px; height:40px;font-family:verdana;"/></center>
</form>
</body>
</html>
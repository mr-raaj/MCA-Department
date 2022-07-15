<?php

$title=$_POST['title'];
$links=$_POST['link'];

$con=mysqli_connect("localhost","root","","mca_dept");

$q="insert into links(title,link) value('$title','$links')";
mysqli_query($con,$q);
echo '<script>alert("Title and Link Added!")</script>';
echo  '<script>window.location.href="adminprofile.php"</script>';

?>
<?php
session_start();
echo "<script>alert('Are you sure want to Logout?')</script>";
unset($_SESSION['LoginUser']);
session_destroy();
echo "<script>window.location.href='index.php'</script>";
?>
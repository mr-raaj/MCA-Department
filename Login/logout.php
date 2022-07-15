<?php

session_start();
unset($_SESSION['LoginUser']);
session_destroy();
echo "<script>alert('Logout Success..')</script>";
echo "<script>window.location.href='login.php'</script>";
?>
<?php 
include('includes/dbconnect.php');
session_start();
$user_id=$_SESSION['user_id'];
$update = $con->prepare("UPDATE tbl_users set userstatus='Offline now' where user_id='$user_id'");
$update->execute();
session_unset();
session_destroy();


header('location:login.php');
?>



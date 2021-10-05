<?php 
include('includes/dbconnect.php');
session_start();
  $email = $_POST['email'];
  $password = $_POST['password'];
$message = array();
if(!empty($email) || !empty($password)) {
    if((filter_var($email,FILTER_VALIDATE_EMAIL)) || empty($email)){
        if(empty($email) && !empty($password) ) {
            $message="Email should be not empty";
        }else if (!empty($email) && empty($password)) {
            $message="password should be not empty";
        }else{
            $sql = "select * from tbl_users where useremail='$email' and userpassword = '$password' ";  
            $data = $con->prepare($sql);
            $data->execute();  
$x = false ;
foreach($data as $row){
  if ($row['useremail']==$email and $row['userpassword']==$password AND $x == false) {
    $_SESSION['user_id']=$row['user_id'];
    $_SESSION['userfirstname']=$row['userfirstname'];
    $_SESSION['useremail']=$row['useremail'];
    $x = true ;
    $message ="ok";
    $user_id=$row['user_id'];
    $update = $con->prepare("UPDATE tbl_users set userstatus='Active now' where user_id='$user_id'");
    $update->execute();
  }
}
 if ($x == false) {  
  //  header('location:./login.php') ;
  $message ="Email or password incorrect";
 }
    }

    }else{
      $message ="email not valid";
  }
    
}else {
    $message ="All Inputs are required";
}
echo $message; 

?>
<?php 
include('includes/dbconnect.php');

$firstname = $_POST['txtfirstname'];
$lastname = $_POST['txtlastname'];
$email = $_POST['txtemail'];
$password = $_POST['txtpassword'];
$message = array();

if(!empty($firstname) && !empty($lastname) && !empty($email) && !empty($password)) {
    if((filter_var($email,FILTER_VALIDATE_EMAIL)) ) {
        $data = $con->prepare("SELECT * from tbl_users ");
        $data->execute(); 
        $x = false ;
      foreach($data as $row)  {
        if ($row['useremail']==$email AND $x == false){
          $message = "Already Registrated";
          $x = true ;
        }
      }
       if ($x == false) {  
         $added_on = date('y-m-d h:i:s');
        //  $con->query("INSERT into tbl_users(userfirstname ,userlastname ,useremail , userpassword ,userdate,userstatus) values ('$firstname', '$lastname','$email','$password','$added_on','Offline now')"); 
         $data = $con->prepare("INSERT into tbl_users(userfirstname ,userlastname ,useremail , userpassword ,userdate,userstatus) values ('$firstname', '$lastname','$email','$password','$added_on','Offline now')"); 
         $data->execute();
        $message ="ok";
      }
    }else {
        $message="email not valid";
    }
}else {
  $message = "All Input are required";
}
echo $message;
?>
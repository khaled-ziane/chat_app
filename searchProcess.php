<?php 
include('includes/dbconnect.php');
session_start();
$val = $_POST['val'];
$val = str_replace(' ', '', $val);

$message = array();
$user_id = $_SESSION['user_id'];

$result = $con->prepare("SELECT * from tbl_users where 
 (userfirstname LIKE '%".$val."%' OR  userlastname LIKE '%".$val."%' OR 
 CONCAT(userfirstname,userlastname) LIKE '%".$val."%' OR  
 CONCAT(userlastname,userfirstname) LIKE '%".$val."%'  ) AND 
 user_id!='$user_id' ");

$result->execute();
?>
<?php foreach($result as $row) { ?>
       <!-- User 1 -->
       <div class="searching">
         <div class="header-container">
          <div class="flex-box">
       <img src="./images/hacker.jpg" >
         <div class="user-name">
       <h4><?php echo $row['userfirstname'].' '.$row['userlastname'] ?> </h4>
       <p>No message available</p>
        </div>
        </div>
        <?php if($row['userstatus']=="Offline now") {  ?>
        <i class="fas fa-circle off"></i>
        <?php }else if($row['userstatus']=='Active now') {  ?>
          <i class="fas fa-circle on"></i>
         <?php }?>
      </div>
<hr>
</div>

<?php }?>

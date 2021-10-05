<?php 
 include ('includes/dbconnect.php');
session_start();
$sender_id = $_SESSION['user_id'];
$reciver_id = $_SESSION['reciver_id'];
$select = $con->prepare("SELECT * from tbl_messages where (sender_id='$sender_id' AND reciver_id='$reciver_id') OR (sender_id='$reciver_id' AND reciver_id='$sender_id') ");
$select->execute();
?>


<?php foreach($select as $row) { 
    if($row['sender_id']==$sender_id) {?>
<div class="sender"><p><?php echo $row['message_txt'] ?> </p></div>
<?php }else {  ?>
<div class="reciver"> <img src="./images/windigo.jpg"> <p> <?php echo $row['message_txt'] ?> </p></div>
<?php }}?>
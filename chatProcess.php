<?php 
include('includes/dbconnect.php');

$sender_id = $_POST['sender_id'];
$reciver_id = $_POST['reciver_id'];
$message = $_POST['txtmessage'];
$added_on = date('y-m-d h:i:s');
$message = trim($message," ");
if(!$message=='' || $message=='0' ) {
    $data = $con->prepare("INSERT into tbl_messages (sender_id,reciver_id,message_txt,messagedate)VALUES('$sender_id','$reciver_id','$message','$added_on')");
    $data->execute();
}


$select = $con->prepare("SELECT * from tbl_messages where (sender_id='$sender_id' AND reciver_id='$reciver_id') OR (sender_id='$reciver_id' AND reciver_id='$sender_id') ");
$select->execute();

?>

<?php foreach($select as $row) { 
    if($row['sender_id']==$sender_id) {?>
<div class="sender"><p><?php echo $row['message_txt'] ?> </p></div>
<?php }else {  ?>
<div class="reciver"> <img src="./images/windigo.jpg"> <p> <?php echo $row['message_txt'] ?> </p></div>
<?php }}?>
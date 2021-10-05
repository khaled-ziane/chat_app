<?php 
 include ('includes/dbconnect.php');
include('includes/head.php'); 
session_start();
if(isset($_GET['id'])) {
  $id = $_GET['id'];
  $_SESSION['reciver_id'] = $id;
  $select = $con->prepare("SELECT * from tbl_users where user_id='$id'");
  $select->execute();

// $sender_id = $_SESSION['user_id'];
// $select2 = $con->prepare("SELECT * from tbl_messages where (sender_id='$sender_id' AND reciver_id='$id') OR (sender_id='$id' AND reciver_id='$sender_id') ");
// $select2->execute();
}

?>
     <title>Realtime | Chat Messenger</title>
</head>
<body>
    <div class="chat-container container">
    <div class="header-container">
          <div class="flex-box">
       <img src="./images/hacker.jpg" >
         <div class="user-name">
        <?php foreach($select as $row) {  ?>   
       <h4><?php echo $row['userfirstname'].' '.$row['userlastname'] ?> </h4>
       <?php }?>
       <p> <?php echo $row['userstatus'] ?> </p>
        </div>
        </div>
        <i></i>
      </div>
        <hr>
      <div class="messages-container">
      <!-- <?php foreach($select2 as $row) { 
        if($row['sender_id']==$sender_id) {?>
       <div class="sender"><p><?php echo $row['message_txt'] ?> </p></div>
        <?php }else{  ?>
        <div class="reciver"> <img src="./images/windigo.jpg"> <p> <?php echo $row['message_txt'] ?> </p></div>
         <?php }}?> -->
        </div>
        <form action="chatProcess.php" id="mytypeform" method="POST">
      <div class="send-input">
          <input type="text" name="txtmessage" id="txtmessage" placeholder="Type a message here">
          <input type="hidden" name="sender_id" value="<?php echo $_SESSION['user_id'] ?>">
          <input type="hidden" name="reciver_id" value="<?php echo $id ?>">
          <button name="btn" class="btn-send"><i class="fas fa-paper-plane"></i></button>
      </div>
      </form>
    </div>
    <script src="./js/jquery.min.js"></script>
    <script src="./js/chatttjs.js"></script>
    <script src="./js/getdataaa.js"></script>
    <?php include('includes/footer.php')?>
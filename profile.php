<?php 
  include ('includes/dbconnect.php');
  include('includes/head.php');
  session_start(); 
  if(!isset($_SESSION['useremail'])) {
    header('location:login.php');
   }else {
    $user_id = $_SESSION['user_id'];
    $select = $con->prepare("SELECT * from tbl_users where user_id='$user_id'");
    $select->execute();
    $data = $con->prepare("SELECT * from tbl_users where user_id!='$user_id' ");
    $data->execute();
   }
?>
    <title>Document</title>
</head>
<body>
     <div class="container">
         <div class="header-container">
            <div class="flex-box">
         <img src="./images/windigo.jpg" >
           <div class="user-name">
         <?php if(isset($_SESSION['useremail'])) { 
                  foreach($select as $row) {  ?>
                   <h4><?php echo $row['userfirstname'].' '.$row['userlastname'] ?></h4>
         <?php } }?>  
         <p>Active now</p>
          </div>
          </div>
          <a href="./clearsession.php"><button class="btn btn-logout">Logout</button></a>
        </div>
        <hr>
         <!-- <p class="p-profile">Select an user to start chat</p> -->
            <div class="search">
         <input type="text" placeholder="Search ">
         <i class="fas fa-search"></i>
            </div>
         <!-- <p>No users are available to chat</p> -->
         <div class="users">
         <?php foreach($data as $row) {   ?>
       <!-- User 1 -->
       <div class="searching">
     <a href="messenger.php?id=<?php echo $row['user_id'] ?> "><div class="header-container">
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
      </div></a>
     <hr>
</div>
<?php }?>
         </div>
     </div>
     <script src="./js/jquery.min.js"></script>
      <script src="./js/searchhjs.js"></script>
     <?php include('includes/footer.php')?>
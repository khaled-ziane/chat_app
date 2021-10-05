    <?php foreach($data as $row) {   ?>
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
     
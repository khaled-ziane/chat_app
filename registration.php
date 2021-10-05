<?php include('includes/head.php') ?>
    <title>Realtime | Chat App</title>
</head>
<body>
    <div class="container">
            <h1>Real time Chat App</h1>
            <hr> 
            <p class="error">This is error message</p>
            <form action="registrationProcess.php" id="myform" method="POST">
               <div class="fullname-container">
                <div>
            <label for="">First Name</label> <br>
            <input type="text" name="txtfirstname" id="firstname" class="firstname-input" placeholder="Fisrt name" required >
               </div>
                <div>
            <label for="">Last Name</label> <br>
            <input type="text" name="txtlastname" id="lastname" placeholder="Last name" required> 
               </div>
            </div>
                <div>
            <label for="">Email Address</label> <br>
            <input type="text" name="txtemail" id="email" placeholder="email@gmail.com" required>
               </div>
                <div class="password-div">
            <label for="">Password</label> <br>
            <input type="password" id="eye" name="txtpassword" placeholder="Enter your password" required>
            <i class="fas fa-eye-slash"></i>
              </div>
                <div>
            <label for="">Select image</label> <br>
            <input type="file" >
                </div>
                <button type="submit" name="btn" class="btn" >Continue to Chat</button>  
                <p class="p-login">Already signed up? Login now</p>
                </form>
    </div>
    <script src="./js/jquery.min.js"></script>
    <script src="./js/registrationnjs.js"></script>
    <?php include('includes/footer.php')?>
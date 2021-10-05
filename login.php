<?php 
include('includes/head.php');
session_start();
if(isset($_SESSION['useremail'])) {
    header('location:profile.php');
  }
?>
    <title>Realtime | Chat Login</title>
</head>
<body>
    <div class="container">
        <h1>Real time Chat App</h1>
        <hr> 
        <p class="error">This is error message</p>
        <form action="loginProcess.php" id="myform" method="POST">
            <div>
        <label for="">Email Address</label> <br>
        <input type="text" id="email" name="email" placeholder="email@gmail.com" required>
           </div>
            <div class="password-div">
        <label for="">Password</label> <br>
        <input type="password" id="eye" name="password" placeholder="Enter your password" required >
        <i class="fas fa-eye-slash"></i>
            </div>
            <button type="submit" name="btn" class="btn">Continue to Chat</button>
            <p>Not yet signed up? Signup now</p>
        </form> 
</div>
<script src="./js/jquery.min.js"></script>
<script src="./js/loginjs.js"></script>

<?php include('includes/footer.php')?>
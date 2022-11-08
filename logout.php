<?php
 session_start();
function function_alert($message) {
      
    // Display the alert box 
    echo "<script>alert('$message');</script>";
}

// Function call 
function_alert("Do you wanna logout :(");

      if($_SESSION!=NULL){
       
     session_unset();
     session_destroy();
      }
      else{
        header("Location:index.php");
        
      }
      
      ?>
<html>
<title>Logout</title>
    <link rel="stylesheet" href="logout.css">
</head>
<body>
    <!-- this is main content  -->
    <div class="main">
<div class="wrapper">
    <img src="image.jpg" alt="" width="90px">
<h1>Logged Out</h1>
<a href="login2.php">
    Click here to login again..
</a>
</div>
    </div>
    <!-- this is end of main content  -->
    <!-- this is footer initialisation  -->
    <div class="footer">
        
    </div>
    <!-- end of footer  -->
</body>
</html>

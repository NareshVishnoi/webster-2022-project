<?php
session_start();
if($_SESSION['name']==NULL){
header("Location:index.php");
}
else{

function function_alert($message) {
      
   
    echo "<script>alert('$message');</script>";
}
  

function_alert("Logged in successfully");


    
}


?>
<html> 
    <head>
        <link rel="stylesheet" href="style.css">
<div class="this">
    
</div>
    </head>
    <body>
       
        <p class="p1"><?php
              
              if($_SESSION['name']!=NULL){
               echo "Hello👋 ".$_SESSION['name'];
              }
              else{
                echo "Login first ";
              }
               
               ?></p>
               <!-- <p class="p2">
                <!-- <?php
                if($_SESSION['email']!=NULL){
                echo "Your email ".$_SESSION['email'];
                }
                ?> -->
               </p>
        <div class="me">
            
            <div class="wrapper">
    
               <button class="home">Home</button>
               <button class="home">About Us</button>
               <button class="home">Contact Us</button>
              
              <button class="logout">
              <a href="logout.php">Logout
                <?php
                session_unset();
                session_destroy();
                ?>
              </a>
              </button>
        
               </ul>
               <form action="login.php" method="post">
                <input type="text" name="name" class="name" placeholder="Search for your items">
                <input type="button" value="Search" id=this>
                
            </form>
            </div>
        </div>
        <!-- head ends here -->
        <!-- main content starts from here -->
<div class="main">
    <div class="wrapper">
       
    </div>
</div>
        <!-- main content ends here  -->
       <!-- footer goes from here  -->
       <div class="footer">
        <div class="wrapper">
     © 2022 Team Learner,Inc. All rights reserved 
        </div>
       </div>
       <!-- footer ends here -->
    </body>
    
</html>

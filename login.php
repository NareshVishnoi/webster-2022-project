<?php


function function_alert($message) {
      
    // Display the alert box 
    echo "<script>alert('$message');</script>";
}
  
  
// Function call
function_alert("Logged-in successfully");


    
 


?>
<html>
    <head>
        <link rel="stylesheet" href="style.css">
<div class="this">
    
</div>
    </head>
    <body>
        <!-- head goes from here -->
        <p><?php
              session_start();
               echo "USER : ".$_SESSION['name'];
              
               
               ?></p>
               <p>
                <?php
                echo "E-MAIL : ".$_SESSION['email'];
                ?>
               </p>
        <div class="me">
            
            <div class="wrapper">
           
               <ul class="list">
               <li><a href="#">Home</a></li>
               <li><a href="#">About</a></li>
               <li><a href="#">Contact Us</a></li>
               
              <li><a href="index.php">Login</a></li> 
               <li><a href="Sign-up.php">Sign-Up</a></li>
              
             
               
              <li><a href="logout.php">Log-out
                <?php
                session_unset();
                session_destroy();
                ?>
              </a></li>
             
               
            
               </ul>
               <form action="login.php" method="post">
                <input type="text" name="name" class="name" placeholder="Enter your request">
                <input type="button" value="Search" id=this>
                
            </form>
            </div>
        </div>
        <!-- head ends here -->
        <!-- main content starts from here -->
<div class="main">
    <div class="wrapper">
       
       <div class="your">
        
       <h1>1</h1>
        kulhadi
       </div>
       <div class="your">
       <h1>2</h1>
        favra
       </div>
       <div class="your">
       <h1>3</h1>
        hammer
       </div>
       <div class="your">
       <h1>4</h1>
        chisel
       </div>
    </div>
</div>
        <!-- main content ends here  -->
       <!-- footer goes from here  -->
       <div class="footer">
        <div class="wrapper">
            all rights are reserved under section 1990 , By naresh vishnoi.
        </div>
       </div>
       <!-- footer ends here -->
    </body>
    
</html>

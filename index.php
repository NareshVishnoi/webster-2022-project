<?php


$insert=true;
$server="localhost";
$username="root";
$password="";
$database="login";
$con=mysqli_connect($server,$username,$password,$database);
if(isset($_POST['naresh'])){
    
    
   
     $name=$_POST['name'];
     $email=$_POST['email'];
     $query="select * from login where name='$name' and email='$email'";
     $result=mysqli_query($con,$query);
     $rows=mysqli_num_rows($result);
     if($rows>0){
        
        session_start();
        $_SESSION['name']=$name;
        $_SESSION['email']=$email;
    header("Location:login.php");
     }
     else{
        $insert=false;
     }
     $con->close();
}

?>
<html>
    <head>
        <link rel="stylesheet" href="login.css">
        <title>login</title>
    </head>
    <body>
        <div class="head">
            <h1>Login</h1>
        </div>
        <div class="main">
            <!-- this is main content -->
            <div class="wrapper">
                <form action="index.php" method="post">
                    <input type="text" name="name" id="name" placeholder="name">
                    <input type="email" name="email" id="email" placeholder="Email">
                    <br>
                   <button name="naresh" value="Login" class="btn">Login</button>
                   <button class="btn"><a href="Sign-up.php">New-user</a></button>
                </form>
                <?php
                if($insert==false){
                    echo "Please check you credentials";
                }
           ?>
            </div>
           
        </div>
        <div class="footer">
            <!-- here goes our footer  -->
            All rights reserved under section 1990 Act, 343041,jalore,rajasthan(India)
        </div>
    </body>
</html>
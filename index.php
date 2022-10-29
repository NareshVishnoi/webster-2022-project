<?php


$insert=true;
$server="localhost";
$username="root";
$password="";
$database="login";
$con=mysqli_connect($server,$username,$password,$database);
if(isset($_POST['name']) && isset($_POST['password'])){
    
    
   
     $name=$_POST['name'];
     $password=$_POST['password'];
     $query="select * from login where name='$name' and password='$password'";
     $result=mysqli_query($con,$query);
     $rows=mysqli_num_rows($result);
     if($rows>0){
        
        session_start();
        $_SESSION['name']=$name;
        $_SESSION['password']=$password;
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
        </div>
        <div class="main">
            <!-- this is main content -->
            <div class="wrapper"> 
            <a href="login.php"><img src="https://see.fontimg.com/api/renderfont4/VGORe/eyJyIjoiZnMiLCJoIjozMywidyI6MTUwMCwiZnMiOjIyLCJmZ2MiOiIjRkZGRUZFIiwiYmdjIjoiI0ZGRkZGRiIsInQiOjF9/U01JVC1FLVNIT1A/minecraft-ten.png" alt="Minecraft fonts"></a>
                <form action="index.php" method="post">
                    <input class="input1" type="text" class="input" name="name"  id="name" placeholder="Name">
                    <input class ="input2" type="password" class="input" name="password" id="password" placeholder="Password">
                    <br>
                    <br>
                    <br>
                   <button  value="Login" class="btn1">Login</button>
                   <p>or</p>
                   <button class="btn2"><a href="Sign-up.php">Create an account</a></button>
                </form>
                <?php
                if($insert==false){
                    echo "Incorrect details entered";
                }
           ?>
            </div>
           <div class="chat">
            <p class="para">Trouble logging in</p>
            <a href="web.whatsapp">
                <img src="chat.png" alt="" class="img1">
            </a>
            <!-- <img class="img1" src="chat.png" alt=""> -->
           </div>
        </div>
        <div class="footer">
            <!-- here goes our footer  -->
           <p class="p1"> © 2022 Team Learner,Inc. All rights reserved</p>
        </div>
    </body>
</html>

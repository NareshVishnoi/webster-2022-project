<?php
$insert=false;
if(isset($_POST['name'])){
$server="localhost";
$username="root";
$password="";
$con=mysqli_connect($server,$username,$password);
if(!$con){
    die("connection failure ".mysqli_connect_error());
}
$name=$_POST['name']; 
$password=$_POST['password'];
$email=$_POST['email'];
if(!empty($name) && !empty($email)){
$sql="INSERT INTO `login`.`login`( `name`, `password`, `email`) VALUES ('$name', '$password', '$email');";

if($con->query($sql)==true){
   $insert=true;

}
else{
    echo "ERROR: $sql <br> $con->error";
}
}
$con->close();

}
if($insert==true){
    header("Location: index.php");
}
?>
<html>
    <head>
        <link rel="stylesheet" href="Sign-up_css.css">
        <div class="HEADER">
        <!-- <h1 class="shop">SMIT-E-SHOP</h1> -->
</div>
    </head>
    <body>
        <!-- head goes from here  -->
        <div class="head">
        <a class="a1" href="login.php"><img src="https://see.fontimg.com/api/renderfont4/VGORe/eyJyIjoiZnMiLCJoIjozMywidyI6MTUwMCwiZnMiOjIyLCJmZ2MiOiIjRkZGRUZFIiwiYmdjIjoiI0ZGRkZGRiIsInQiOjF9/U01JVC1FLVNIT1A/minecraft-ten.png" alt=""></a>
            <h2 class="field">Register here</h2>
        </div>
       
            <div class="wrapper">
                <div class="box">
                    <form action="Sign-up.php" method="post">
                        <input type="text" name ="name" id="name" class="Name" placeholder="Enter Name">
                        <input type="Password" name="password" id="password" class="Name" placeholder="Enter Password">
                        <input type="email" name="email"  id="email" class="Name" placeholder="Enter Email address">
                        <br>
                       <button class="btn">Submit</button>
                    </form>
                </div>
            </div>
        </div>
       

        <div class="footer">

        </div>
       
    </body>
</html>


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
$phone=$_POST['phone'];
$email=$_POST['email'];
$sql="INSERT INTO `login`.`login`( `name`, `phone`, `email`) VALUES ('$name', '$phone', '$email');";
// echo $sql;
if($con->query($sql)==true){
   $insert=true;
//    header("Location: https://www.example.com/login.php");

}
else{
    echo "ERROR: $sql <br> $con->error";
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
        <h1>SMITH-E-SHOP</h1>
</div>
    </head>
    <body>
        <!-- head goes from here  -->
        <div class="head">
            fill the following credentials to login in our web
        </div>
        <!-- head ends here  -->
        <!-- main content form here  -->


        <!-- here i am gonna put the differenret kind of tags which will help me to access all these  -->
        <div class="main">
            <div class="wrapper">
                <div class="box">
                    <form action="Sign-up.php" method="post">
                        <input type="text" name ="name" id="name" class="Name" placeholder="Enter your Name">
                       
                        <input type="phone" name="phone" id="phone" class="Name" placeholder="Enter your PhoneNo.">
                        <input type="email" name="email"  id="email" class="Name" placeholder="Enter your email">
                        <br>
                       <button class="btn">Submit</button>
                    </form>
                </div>
            </div>
        </div>
        <!-- main content ends here  -->
        <!-- footer start from here  -->
        <div class="footer">

        </div>
        <!-- footer ends here  -->
    </body>
</html>
<!-- here goes my php  -->

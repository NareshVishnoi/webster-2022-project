<?php
$insert=false;
if(isset($_POST['name'])){
$server="localhost";
$username="root";
$password="";
$database="login";
$con=mysqli_connect($server,$username,$password,$database);
if(!$con){
    die("connection failure ".mysqli_connect_error());
}
$name=$_POST['name']; 
$password=$_POST['password'];
$email=$_POST['email'];
$confirm_password=$_POST['confirm_password'];
$query="SELECT * FROM `login` WHERE `email` LIKE '$email'";
$result=mysqli_query($con,$query);
$rows=mysqli_num_rows($result);
// echo $rows;
if($rows==0){
    if($password==$confirm_password){
$sql="INSERT INTO `login`.`login` ( `name`, `email`, `password`, `confirm_password`) VALUES ('$name', '$email', '$password', '$confirm_password');";

if($con->query($sql)==true){
    
   $insert=true;
   
 
 
header("Location:login2.php");
}
else{
    echo "ERROR: $sql <br> $con->error";
}
}
else{
    $insert="Password does not match";
}

}
else{
   $insert="This email already has an account Please try another one";
}

$con->close();

}

?>

<!DOCTYPE html>
<html>

<head>
    
   
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,700"> 
    <title>Sign-up</title>
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> 
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script> 
    
    
    <style>
        body {
            color: #fff;
            background: #19aa8d;
            font-family: 'Roboto', sans-serif;
        }

        .container {
            width: 400px;
            margin: 0 auto;
            padding: 30px 0;
        }

        .container form {
            color: #999;
            border-radius: 3px;
            margin-bottom: 15px;
            background: #fff;
            box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
            padding: 30px;
        }

        .container h2 {
            color: #333;
            font-weight: bold;
            margin-top: 0;
        }

        .container hr {
            margin: 0 -30px 20px;
        }

        .container .form-filed {
            margin-bottom: 20px;
        }

        .container label {
            font-weight: normal;
            font-size: 15px;
        }

        .container .form-control {
            min-height: 38px;
            box-shadow: none !important;
        }

        .container .input-group-addon {
            max-width: 42px;
            text-align: center;
        }

        .container .btn,
        .container .btn:active {
            font-size: 16px;
            font-weight: bold;
            background: #19aa8d !important;
            border: none;
            min-width: 140px;
        }
        .signup-form .btn:hover, .signup-form .btn:focus {
	background: #179b81 !important;
}
.container a {
	color: #fff;	
	text-decoration: underline;
}
.container a:hover {
	text-decoration: none;
}
.container form a {
	color: #19aa8d;
	text-decoration: none;
}	
.container form a:hover {
	text-decoration: underline;
}
        .container .fa {
	font-size: 21px;
}
.container .fa-paper-plane {
	font-size: 18px;
}
        .container .fa-check {
	color: #fff;
	left: 17px;
	top: 18px;
	font-size: 7px;
	position: absolute;
}
.error {
  border:"2px solid red";
}
    </style>
</head>

<body>

    <div class="container">
        <form id="signup" class="form" action="Sign-up.php" method="post">
            <h2>Sign Up</h2>
            <p>Please fill in this form to create an account!</p>
            <hr>
            <div class="form-field my-2 py-2">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text">
                            <span class="fa fa-user"></span>
                        </span>
                    </div>
                    <!-- <label for="username">Username:</label> -->
                    <input type="text" name="name" id="username" placeholder="Username" autocomplete="off">
                    <small></small>
                </div>
            </div>

            <div class="form-field my-2 py-2">

                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text">
                            <i class="fa fa-paper-plane"></i>
                        </span>
                    </div>
                    <!-- <label for="email">Email:</label> -->
                    <input type="email" name="email" id="email" placeholder="Email" autocomplete="off">
                    <small></small>
                </div>
            </div>

            <div class="form-field my-2 py-2">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text">
                            <i class="fa fa-lock"></i>
                        </span>
                    </div>
                    <!-- <label for="password">Password:</label> -->
                    <input type="password" name="password" id="password" placeholder="Password" autocomplete="off">
                    <small></small>
                </div>
            </div>


            <div class="form-field my-2 py-2">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text">
                            <i class="fa fa-lock">
                            
                            </i>
                            <i class="fa fa-check"></i>
                            
                        </span>
                    </div>
                    <!-- <label for="confirm-password">Confirm Password:</label> -->
                    <input type="password" name="confirm_password" id="confirm_password" placeholder="Confirm Password" autocomplete="off">
                    <small></small>
                </div>
            </div>
            <div class="form-group">
                
                    <label class="form-check-label"><input type="checkbox" required="required"> I accept the <a href="#">Terms of Use</a> &amp; <a href="#">Privacy Policy</a></label>
                     
                </div>
                <div class="form-group">
                   
                    <button type="submit" class="btn btn-primary btn-lg">Sign Up</button>
                </div>
              
            </form>
           
            <div class="text-center">Already have an account? <a href="login2.php">Login here</a></div>
        </div>

        <script type="text/javascript" src="valid.js"></script>
        
</body>

</html>
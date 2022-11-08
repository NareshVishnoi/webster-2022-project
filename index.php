<!-- printing login alert on screen -->
<?php
function function_alert($message) {
      
   
  echo "<script>alert('$message');</script>";
  
}
session_start();

?>
<!-- here goes our html and differnet tags with it  -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SMITH-E-SHOP
      
    </title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel=”stylesheet” href=”https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css”/>
</head>
<body>
  <div class="conntainer mt-1 py-1" style="text-align:center;
  color:red;
  font-weight:bold;">
    <?php
  if($_SESSION==NULL){
// header("Location:login2.php");
echo "LOGIN TO USE OUR SERVICES";
}
else if($_SESSION!=NULL){
header("Location:user.php");
}
?>
  </div>
  <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">
      <a href="login.php"><img src="https://see.fontimg.com/api/renderfont4/VGORe/eyJyIjoiZnMiLCJoIjozMywidyI6MTUwMCwiZnMiOjIyLCJmZ2MiOiIjRkZGRUZFIiwiYmdjIjoiI0ZGRkZGRiIsInQiOjF9/U01JVC1FLVNIT1A/minecraft-ten.png" alt="Minecraft fonts"></a>
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse ml-1" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0 mr-5">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <!-- <li class="nav-item">
            <a class="nav-link" href="profile.php">Profile</a>
          </li> -->
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            my_order
            </a>
            </li>
        </ul>
        <?php
            if(array_key_exists('signup',$_POST)){
              header("Location:Sign-up.php");
            }
            else if(array_key_exists('login',$_POST)){
              header("Location:login2.php");
            }
            ?>
        <form class="d-flex" method="post">
         <button class="form-control me-2" name="signup" >Sign-up</button>

          <button class="btn btn-outline-success" name="login" >
          Login
           
          </button>
        </form>
        
        <span class="nav-cart-icon nav-sprite" style="    -webkit-text-size-adjust: 100%;
    font-size: 14px;
    font-family: inherit;
    cursor: pointer;
    color: #d6d6d6;
    line-height: 44px;
    background-repeat: repeat-x;
    -webkit-box-sizing: border-box;
    
    background-size: 350px;
    overflow: hidden;
    left: 10px;
    top: 11px;
    display: flex;
    position: static;
    float: none;
    -webkit-box-align: center;
    align-items: center;
    padding: 0;
    margin: 0;
    width: 41px;
    height: 28px;
    background-position: -218px -337px;"></span>
      </div>
    </div>
  </nav>
  
  <!-- here is our main products  -->
  <!-- this is first one which is main for everyhting  -->
  <div class="container text-center">
  <div class="row row-cols-2 row-cols-lg-5 g-2 g-lg-3 my-2">
    <div class="col">
      <div class="p-3 border bg-light">Macbook Pro
        <img src="macbook.jpg
        " alt="" class="img-fluid img-thumbnail mt-1 mb-2 ">
        <p>PRICE : <s>$500</s> $345</p>
        <form action="#" method="post">
        <button type="button" class="btn btn-primary btn-sm">
        ADD TO CART
          <i class="fa fa-shopping-cart fa-lg"></i>
        
        </button>
        </form>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
</div>
</div>
<div class="col">
      <div class="p-3 border bg-light">iPhone-13-pro-max
        <img src="iphone-13.jpg" alt="" class="img-fluid img-thumbnail   ">
        <p>PRICE : <s>$600</s> $300</p>
        <form action="#" method="post">
        <button type="button" class="btn btn-primary btn-sm">
        ADD TO CART
          <i class="fa fa-shopping-cart fa-lg"></i>
        
        </button>
        </form>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
</div>
</div>
<div class="col">
      <div class="p-3 border bg-light">Samsung S-20
        <img src="samsung S-20.jpg" alt="" class="img-fluid img-thumbnail mt-1 mb-2 ">
        <p>PRICE : <s>$200</s> $189</p>
        <form action="#" method="post">
        <button type="button" class="btn btn-primary btn-sm">
        ADD TO CART
          <i class="fa fa-shopping-cart fa-lg"></i>
        
        </button>
        </form>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
</div>
</div>
<div class="col">
      <div class="p-3 border bg-light">Samsung S-21
        <img src="samsung s-21.jpg" alt="" class="img-fluid img-thumbnail mt-1 mb-2 ">
        <p>PRICE : <s>$300</s> $250</p>
        <form action="#" method="post">
        <button type="button" class="btn btn-primary btn-sm">
        ADD TO CART
          <i class="fa fa-shopping-cart fa-lg"></i>
        
        </button>
        </form>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
</div>
</div>
<div class="col">
      <div class="p-3 border bg-light">iphone 14
        <img src="iphone14.jpg" alt="" class="img-fluid img-thumbnail mt-1 mb-2 " >
        <p>PRICE : <s>$350</s> $300</p>
        <form action="#" method="post">
        <button type="button" class="btn btn-primary btn-sm">
        ADD TO CART
          <i class="fa fa-shopping-cart fa-lg"></i>
        
        </button>
        </form>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
</div>
</div>
   
  </div>
</div>
<!-- here goes second row  -->
<div class="container text-center">
  <div class="row row-cols-2 row-cols-lg-5 g-2 g-lg-3 my-2">
    <div class="col">
      <div class="p-3 border bg-light">Macbook Pro
        <img src="macbook-pro.png" alt="" class="img-fluid img-thumbnail mt-1 mb-2 ">
        <p>PRICE : <s>$500</s> $345</p>
        <form action="#" method="post">
        <button type="button" class="btn btn-primary btn-sm">
        ADD TO CART
          <i class="fa fa-shopping-cart fa-lg"></i>
        
        </button>
        </form>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
</div>
</div>
<div class="col">
      <div class="p-3 border bg-light">Macbook Pro
        <img src="macbook-pro.png" alt="" class="img-fluid img-thumbnail mt-1 mb-2 ">
        <p>PRICE : <s>$500</s> $345</p>
        <form action="#" method="post">
        <button type="button" class="btn btn-primary btn-sm">
        ADD TO CART
          <i class="fa fa-shopping-cart fa-lg"></i>
        
        </button>
        </form>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
</div>
</div>
<div class="col">
      <div class="p-3 border bg-light">Macbook Pro
        <img src="macbook-pro.png" alt="" class="img-fluid img-thumbnail mt-1 mb-2 ">
        <p>PRICE : <s>$500</s> $345</p>
        <form action="#" method="post">
        <button type="button" class="btn btn-primary btn-sm">
        ADD TO CART
          <i class="fa fa-shopping-cart fa-lg"></i>
        
        </button>
        </form>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
</div>
</div>
<div class="col">
      <div class="p-3 border bg-light">Macbook Pro
        <img src="macbook-pro.png" alt="" class="img-fluid img-thumbnail mt-1 mb-2 ">
        <p>PRICE : <s>$500</s> $345</p>
        <form action="#" method="post">
        <button type="button" class="btn btn-primary btn-sm">
        ADD TO CART
          <i class="fa fa-shopping-cart fa-lg"></i>
        
        </button>
        </form>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
</div>
</div>
<div class="col">
      <div class="p-3 border bg-light">Macbook Pro
        <img src="macbook-pro.png" alt="" class="img-fluid img-thumbnail mt-1 mb-4 ">
        <p>PRICE : <s>$500</s> $345</p>
        <form action="#" method="post">
        <button type="button" class="btn btn-primary btn-sm">
        ADD TO CART
          <i class="fa fa-shopping-cart fa-lg"></i>
        
        </button>
        </form>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
</div>
</div>
   
  </div>
</div>

 <!-- Footer -->
<footer class="page-footer font-small cyan darken-3">

<!-- Footer Elements -->


<!-- Copyright -->
<div class="footer-copyright text-center  bg-dark text-light">
<a href="#" style="padding:2%;
text-decoration:none;">
<i class="fa fa-facebook fa-2x "></i>
              
</a>
<a href="#" style="padding:2%;
text-decoration:none;">
<i class="fa fa-github fa-2x"></i>
</a>
<a href="#" style="padding:2%;
text-decoration:none;">
<i class="fa fa-google fa-2x"></i>
</a>
<a href="#" style="padding:2% ;
text-decoration:none;">
  <i class="fa fa-twitter fa-2x"></i>
</a>
<a href="#" style="padding:2%;
text-decoration:none;">
  <i class="fa fa-instagram fa-2x"></i>
</a>
<br>


© 2022 Copyright
  <p>Team RNA</p>
</div>
<!-- Copyright -->

</footer>
<!-- Footer -->
  
</body>
</html>
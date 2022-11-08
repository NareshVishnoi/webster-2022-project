<?php
session_start();
if($_SESSION['email']==NULL){
    header("Location:login2.php");
}
else{
    $server="localhost";
    $username="root";
    $password="";
    $database="login";
    $con=mysqli_connect($server,$username,$password,$database);
    if(!$con){
        die("connnection failure".$mysqli_connect_error());
    }
    // echo "connection success";
$EMAIL=$_SESSION['email'];
    $query="SELECT * FROM `login` where email='$EMAIL'" ;
    $result=mysqli_query($con,$query);
    
    $count=mysqli_num_rows($result);
    $row=mysqli_fetch_assoc($result);
    

}
$con->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>profile</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
</head>
<body>
    
<section class="h-100 gradient-custom-2">
  <!-- <h6>is this the best location for logout</h6> -->
  <div class="container py-5 h-150 " >
    <div class="row d-flex justify-content-center align-items-center h-150">
      <div class="col col-lg-9 col-xl-7">
        <div class="card">
          <div class="rounded-top text-white d-flex flex-row" style="background-color: #000; height:200px;">
            <div class="ms-4 mt-5 d-flex flex-column" style="width: 190px;">
              <img src="avatar.jpg"
                alt="Generic placeholder image" class="img-fluid img-thumbnail  mb-4"
                style="width: 130px; z-index: 1">
               
               
             
              
              
              
             
            </div>
            <div class="ms-3" style="margin-top: 20px;">
              <h6>
                <?php
              echo "Name : ".$row["name"];
             
              echo "<br>";
              echo "<br>";
              echo "Email : ".$row["email"];
              echo "<br>";
              echo "<br>";
              echo "password : ".$row["password"];
              
             
             
              ?>
              <br>
               
              
               </h6>

              
            </div>
            
          </div>
          <div class="p-4 text-black" style="background-color: #f8f9fa;">
            <div class="d-flex justify-content-end text-center py-1" >
              <form class="d-flex" method="post">
            <button type="submit" class="btn btn-outline-dark mt-2" name="edit" data-mdb-ripple-color="light" style="z-index: 1;">
                Edit profile
              </button>
              </form>
            </div>
          </div>
          <div class="card-body p-4 text-black">
            <div class="mb-5">
              <p class="lead fw-normal mb-1">About</p>
              <div class="p-4" style="background-color: #f8f9fa;">
                <p class="font-italic mb-1">
                    programmer
                </p>
                <p class="font-italic mb-1">
                    viewer
                </p>
                
              </div>
            </div>
            <div class="d-flex justify-content-between align-items-center mb-4">
              <p class="lead fw-normal mb-0">Recent photos</p>
              <p class="mb-0"><a href="#!" class="text-muted">Show all</a></p>
            </div>
            <div class="row g-2">
              <div class="col mb-2">
                <!-- <img src="https://mdbcdn.b-cdn.net/img/Photos/Lightbox/Original/img%20(112).webp"
                  alt="image 1" class="w-100 rounded-3"> -->
              </div>
              <div class="col mb-2">
                <!-- <img src="https://mdbcdn.b-cdn.net/img/Photos/Lightbox/Original/img%20(107).webp"
                  alt="image 1" class="w-100 rounded-3"> -->
              </div>
            </div>
            <div class="row g-2">
              <div class="col">
                <!-- <img src="https://mdbcdn.b-cdn.net/img/Photos/Lightbox/Original/img%20(108).webp"
                  alt="image 1" class="w-100 rounded-3"> -->
              </div>
              <div class="col">
                <!-- <img src="https://mdbcdn.b-cdn.net/img/Photos/Lightbox/Original/img%20(114).webp"
                  alt="image 1" class="w-100 rounded-3"> -->
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</body>
</html>
<?php
              if(array_key_exists('edit',$_POST)){
                header("Location:Edit_pr.php");
              }
              ?>
<?php
$showAlert = false;
if($_SERVER["REQUEST_METHOD"] == "POST"){
  include '_dbconnector.php';
  include '_dbconnect.php';
  $username = $_POST["username"];
  $password = $_POST["password"];
  $cpassword = $_POST["cpassword"];



  if(($password == $cpassword) && $exists==false){
    $sql = "INSERT INTO `user1` ( `username`, `password`, `dt`) VALUES ( '$username', '$password', current_timestamp())";
    $result = mysqli_query($conn, $sql);
    if ($result){
        $showAlert = true;
    }
}
}
?>



<!doctype html>
<html lang="en">
  <head>
  <link rel="stylesheet" href="style.css" type="text/css">
    <!-- new -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
        <style>
          body{
           /* background-image: url(background-image.jpeg);
           background-size: cover; */
           
            
          }
          form{
            background-color: white;
            margin-top: 6em;
            margin-left: 30em;
            margin-right:10em;
            padding:30px;
            box-shadow: 10px 10px 8px 10px #888888;
            
          }
          </style>


    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body style="background-image: url(background_img_backend.jpeg)">
<?php require "_nav.php"?>

<!-- ......................alert .............................................-->
<?php
    if($showAlert){
    echo ' <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success!</strong> Your account is now created and you can login
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div> ';
    }
    if($showError){
    echo ' <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Error!</strong> '. $showError.'
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div> ';
    }
    ?>
<!-- .................................alert.................................... -->
<!-- <div class="container">
  <h1 class="text-center">Sign Up to my website</h1>
  <form action="signup.php" method="post">
  <div class="form-group">
    <label for="username">Username</label>
    <input type="text" class="form-control" id="username" aria-describedby="emailHelp" name="username">
  </div>
  <div class="form-group">
    <label for="password">Password</label>
    <input type="password" class="form-control" id="password"name="password">
  </div>
  <div class="form-group">
    <label for="cpassword">Confirm-Password</label>
    <input type="password" class="form-control" id="cpassword"name="cpassword">
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>  
<div> -->



   
       <div class="container">

       <form method="POST">
       <div class="mb-3">
    <label for="username">Full Name </label>
    <input type="text" class="form-control" id="username" name="username">
  </div>
  <div class="mb-3">
    <label for="password">password</label>
    <input type="password" class="form-control" id="password" aria-describedby="emailHelp" name="password">
  </div>

  <div class="mb-3">
    <label for="cpassword">Confirm-password</label>
    <input type="password" class="form-control" id="cpassword" aria-describedby="emailHelp" name="cpassword">
  </div>
  <button type="submit" class="btn btn-primary"name="submit">Submit</button>
  <br>
  Already Registered <a href="Login.php">Login</a>
</form>
       </div>
        
       <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
        
    </body>
</html>

    
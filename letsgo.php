<?php
$login=false;
$showAlert = false;
if($_SERVER["REQUEST_METHOD"] == "POST"){
  include '_dbconnectorAdmin.php';
  include '_dbconnectoAdmin.php';
  $username = $_POST["username"];
  $password = $_POST["password"];



  $sql = "Select * from user1 where username='$username'AND password='$password'";    
  $result = mysqli_query($conn, $sql);
  $num = mysqli_num_rows($result);
  if ($num == 1){
      while($row=mysqli_fetch_assoc($result)){
              $login = true;
              session_start();
              $_SESSION['loggedin'] = true;
              $_SESSION['username'] = $username;
              header("location: YouHaveToWorkNow.php");
          } 
          
      }
      
  } 
  else{
      $showError = "Invalid Credentials";
  }

  
?>



<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Login</title>
    <style>
          body{
           background-image: url(background.jpg);
           background-size: cover;
            
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
  </head>
  <body>
<?php require "_nav.php"?>

<!-- ......................alert .............................................-->
<?php
    if($login){
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
<div class="container">
  <h1 class="text-center">Sign Up to my website</h1>
  <form action="login.php" method="post">
  <!-- <div class="form-group">
    <label for="username">Username</label>
    <input type="text" class="form-control" id="username" aria-describedby="emailHelp" name="username">
  </div>
  <div class="form-group">
    <label for="password">Password</label>
    <input type="password" class="form-control" id="password"name="password">
  </div> -->
  <!-- <button type="submit" class="btn btn-primary">Login</button> -->

  <div class="mb-3">
    <label for="username" >Username</label>
    <input type="text" class="form-control" id="username" name="username">
  </div>
 
  <div class="mb-3">
    <label for="password">Password</label>
    <input type="password" class="form-control" id="password" name="password">
  </div>
  
  
  <button type="submit" class="btn btn-primary"name="Login">Submit</button>
  <p style="text-align: center;">New user ? <br>Create Account <a href="registration.php">Sign up</p>

    </form>  
  </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>
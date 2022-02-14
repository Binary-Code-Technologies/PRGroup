<?php
$showAlert = false;
$showError = false;
if($_SERVER["REQUEST_METHOD"] == "POST"){
  include 'partial/dbconnect.php';
  $username = $_POST["username"];
  $password = $_POST["password"];
  $firm = $_POST["firm"];
  //$cpassword = $_POST["cpassword"];
  //$exists = false;
  //check for exitsinh name
  $existSql = "SELECT * FROM `$firm` WHERE uName = '$username'";
  $result = mysqli_query($conn, $existSql);
  $numExistsrows = mysqli_num_rows($result);
  if($numExistsrows > 0){
    //$exists = true;
    $showError = " username already exists";
   
  }

  else{
    //$exists = false;
    if(($password == $password)){
      $hash = password_hash($password , PASSWORD_DEFAULT); 
      $sql = "INSERT INTO `loginpage` ( `username`, `password`, `dt`) VALUES ( '$username', '$hash', current_timestamp());";
      $result = mysqli_query($conn, $sql);
      if($result){
          $showAlert = true;
      }
    }
    
    else{
      $showError = "password doesnot match ";
   
    } 
  }    
   
}

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>welcome</title>
    <!--<link rel="stylesheet" href="style.css"> -->

  </head>
  <body>
  <!--<img class="bg" src="bg.jpg" alt="travel">-->

<?php require 'partial/nav.php'?>

<?php

if($showAlert){
echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>success</strong> sucessfully sign in now you can log in
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
    </button>
</div>';
} 
if($showError){
 echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>error!</strong> '.$showError.'
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
    </button>
</div>';
}  


 
?>
<div class="container">
  <h1>sign up</h1>

<!--<div class="container "><h1>sign up to your website</h1>-->
<form action = "/loginjs/signup.php" method= "post" >
  <div class="form-group col-md-4">
    <label for="username ">username</label>
    <input type="text"  maxlength="20" class="form-control" name="username" id="username" aria-describedby="emailHelp" placeholder="Enter name">
  
  </div>
  <div class="form-group col-md-4">
    <label for="password">password</label>
    <input type="password" class="form-control" id="password" name="password"  placeholder="password">
  </div>
  
  <button type="submit" class="btn btn-primary col-md-1  ">Sign up</button>
</form>
</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>
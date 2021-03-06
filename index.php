<?php
session_start();
if(isset($_SESSION['loggedin'])){
    header("Location: login.php");
    if($_SESSION['loggedin']==true){
        if($_SESSION['firm']=='realestate'){
            header("location:realestate");
        }else{
            if ($_SESSION['firm']=='consultancy') {
                header("location:consultancy");
            }
        }
    }
}
    
$login = false;
$showError = false;
$showAlert = false;


if($_SERVER["REQUEST_METHOD"] == "POST"){
  
  include 'partial/dbconnect.php';
  $username = $_POST["username"];
  $password = $_POST["password"];
  $firm = $_POST["firm"];
  

  if(isset($_POST["signUp"])){
      $existSql = "SELECT * FROM `$firm` WHERE username = '$username'";
      $result = mysqli_query($conn, $existSql);
      $numExistsrows = mysqli_num_rows($result);
      if($numExistsrows > 0){
         $exists = true;
         $showError = " username already exists";
        }
      else{
          $exists = false;
          if(($password == $password)){
               $hash = password_hash($password , PASSWORD_DEFAULT); 
       
               $sql = "INSERT INTO `$firm` ( `username`, `password`, `dt`) VALUES ( '$username', '$hash',    current_timestamp());";
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


 
  if(isset($_POST["logIn"])){
   
       include 'partial/dbconnect.php';
       $formUname = $_POST["username"];
       $formPasswd = $_POST["password"];
       $firm = $_POST["firm"];
       //$sql = "select * from firm where username ='$username' AND password = '$password'";
       $sql = "select * from $firm where username ='$formUname'";
       $result = mysqli_query($conn, $sql);
       $num = mysqli_num_rows($result);
       
       if($num == 1){
           while($row=mysqli_fetch_assoc($result) ){
               if(password_verify($formPasswd, $row['password'])){  //(password and data base password)
                //if($num['password']==$password){
                 $login = true;
                 session_start();
                 $_SESSION['loggedin'] = true;
                 $_SESSION['firm'] = $firm;
                 $_SESSION['username'] = $formUname;
                 $_SESSION['password'] = $formPasswd;
                header("location:$firm");
               }
                else{
                  $showError = "invalid password";
                }
           }
       }
       
     else{
      $showError = "invalid password";
        }
    }    
       
} 
  
 

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>PR Group | Login/SignUp</title>

    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css'>
    <link rel='stylesheet' href='https://unicons.iconscout.com/release/v2.1.9/css/unicons.css'>
    <link rel="stylesheet" href="styles/loginForm.css">   
</head>

<body>
<div class="section">
        <div class="container">
            <div class="row full-height justify-content-center">
                <div class="col-12 text-center align-self-center py-5">
                    <div class="section pb-5 pt-5 pt-sm-2 text-center">
                        <h6 class="mb-0 pb-3"><span>Log In </span><span>Sign Up</span></h6>
                        <input class="checkbox" type="checkbox" id="reg-log" name="reg-log" />
                        <label for="reg-log"></label>
                        <div class="card-3d-wrap mx-auto">
                            <div class="card-3d-wrapper">
                                <div class="card-front">
                                    <div class="center-wrap">
                                        <form action="index.php" method="post" name="logIn">
                                            <div class="section text-center">
                                                <h4 class="mb-4 pb-3">Log In</h4>
                                                <div class="form-group">
                                                    <input type="text" name="username" class="form-style"
                                                        placeholder="Your Username" id="username" autocomplete="off"
                                                        required>
                                                    <i class="input-icon uil uil-user"></i>
                                                </div>
                                                <div class="form-group mt-2">
                                                    <input type="password" name="password" class="form-style"
                                                        placeholder="Your Password" id="password" autocomplete="off"
                                                        required>
                                                    <i class="input-icon uil uil-lock-alt"></i>
                                                </div>
                                                <div class="form-group mt-2">
                                                    <br>
                                                    <input type="radio" name="firm"id="firm" value="consultancy"
                                                        checked>
                                                    <label for="firm" claSs="mr-4">Consultancy</label>
                                                    <input type="radio" name="firm" id="firm" value="realestate">
                                                    <label for="firm">Real Estate</label><br>
                                                </div>
                                                <?php
                                                  if($login){
                                                    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                                                    <strong>success</strong> sucessfully logged <a href="Consultancy/index.php" in
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
                                                  /*if($showAlert){
                                                    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                                                      <strong>error!</strong> '.$showAlert.'
                                                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                      <span aria-hidden="true">&times;</span>
                                                      </button>
                                                      </div>';
                                                    } */
                                                  ?>
                                                  <button type="submit" class="btn" name="logIn">Submit</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="card-back">
                                    <div class="center-wrap">
                                        <form action="index.php" method="post" name="signUp">
                                            <div class="section text-center">
                                                <h4 class="mb-4 pb-3">Sign Up</h4>
                                                <div class="form-group">
                                                    <input type="text" name="username" class="form-style"
                                                        placeholder="Your username" id="username" autocomplete="off"
                                                        required>
                                                    <i class="input-icon uil uil-user"></i>
                                                </div>
                                                <div class="form-group mt-2">
                                                    <input type="password" name="password" class="form-style"
                                                        placeholder="Your Password" id="password" autocomplete="off"
                                                        required>
                                                    <i class="input-icon uil uil-lock-alt"></i>
                                                </div>
                                                <div class="form-group mt-2">
                                                    <br>
                                                    <input type="radio" name="firm" value="consultancy"
                                                        checked>
                                                    <label for="firm" claSs="mr-4">Consultancy</label>
                                                    <input type="radio" name="firm" value="realestate">
                                                    <label for="firm">Real Estate</label><br>
                                                </div>
                                                <button type="submit" class="btn mt-4" name="signUp">Submit</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>


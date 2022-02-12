<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>PR Group | Login/SignUp</title>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css'>
    <link rel='stylesheet' href='https://unicons.iconscout.com/release/v2.1.9/css/unicons.css'>
    <link rel="stylesheet" href="styles/loginForm.css">
    <?php 
    if(!isset($_COOKIE['token'])){
        $cookie_name = "token";
        $cookie_value = "nil";
        setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/PRGroup%20FrontEnd");
    } else {
        if($_COOKIE['token']==="Consultancy"){
            header("Location: ./Consultancy/index.php");
        }else if($_COOKIE['token']=== "realEstate"){
            header("Location: ./realEstate/index.php");
        }
    }
    ?>
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
                                        <form action="logIn.php" method="post" name="logIn">
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
                                                    <input type="radio" name="firm"id="firm" value="Consultancy"
                                                        checked>
                                                    <label for="firm" claSs="mr-4">Consultancy</label>
                                                    <input type="radio" name="firm"id="firm" value="realEstate">
                                                    <label for="firm">Real Estate</label><br>
                                                </div>
                                                <button type="submit" class="btn mt-4" name="Submit">Submit</button>

                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="card-back">
                                    <div class="center-wrap">
                                        <form action="signUp.php" method="post" name="form">
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
                                                    <input type="radio" name="firm" value="Consultancy"
                                                        checked>
                                                    <label for="firm" claSs="mr-4">Consultancy</label>
                                                    <input type="radio" name="firm" value="realEstate">
                                                    <label for="firm">Real Estate</label><br>
                                                </div>
                                                <button type="submit" class="btn mt-4">Submit</button>
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
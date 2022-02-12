<?php
    //Getting username and passwords
    $uName = $_POST['username']; 
    $passwd = $_POST['password'];
    $firm = $_POST['firm'];
  

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "PRGroup";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }
    
    $sql = "SELECT * FROM $firm;";
    $result = $conn->query($sql);
    // echo "<script>console.log(\"$result\")</script>";
    
    if ($result->num_rows > 0) {
      // output data of each row
      while($row = $result->fetch_assoc()) {
        $user = $row["uName"];
        $pass=$row["password"];
        $login=false;
        $secPasswd=password_hash($passwd, PASSWORD_DEFAULT);

        $hash= $secPasswd;
        if(password_verify('passwd', $hash)) {
            echo "Logged in";
            $login=true;
            echo "<script>console.log(\"Logged in\")</script>";
            setcookie("token", $firm, time() + (86400 * 30), "/PRGroup%20FrontEnd");
            header("Location: ./$firm/index.php");
            break;
          }
          
          else{
            echo "
            <link rel=\"stylesheet\" href=\"styles/loginForm.css\">
            <body>
            <h1>Wrong username or password</h1>
            <button class='btn' onclick=\"window.location.href='./index.php'\"style=\"text-align:center\">Go Back</button>
            </body>";
            break;
          }
          // if($login == true){
          //   //store $firm in session
          //   setcookie("token", $firm, time() + (86400 * 30), "/PRGroup%20FrontEnd");
          //   header("Location: ./index.php");
          //  }
        }
      }
      else {
        echo "<script>console.log(\"No Res\")</script>";
      }
  $conn->close();
?>
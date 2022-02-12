<?php 
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
        $secPasswd=password_hash($passwd, PASSWORD_DEFAULT);
        $sql = "INSERT INTO $firm VALUES ('$uName', '$secPasswd');";
        if ($conn->query($sql) === TRUE) {
            echo "<script>alert('New record created successfully');</script>";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    
    
    header("Location: ./index.php");

    $conn->close();
?>
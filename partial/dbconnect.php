<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "prgroup";
$conn = mysqli_connect($servername,$username,$password,$dbname);
if(!$conn){
 /*   echo"success";
}
else{*/
    
    die("error" . mysqli_connect_error());
}
?>
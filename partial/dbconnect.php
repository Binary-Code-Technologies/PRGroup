<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "firm";
$conn = mysqli_connect($servername,$username,$password,$dbname);
if(!$conn){
 /*   echo"success";
}
else{*/
    
    die("error" . mysqli_connect_error());
}
?>
<?php
$servername = "u570873310_theprgroup";
$username = "u570873310_prgroup";
$password = "Avestan@2018";
$dbname = "prgroup";
$conn = mysqli_connect($servername,$username,$password,$dbname);
if(!$conn){
 /*   echo"success";
}
else{*/
    
    die("error" . mysqli_connect_error());
}
?>
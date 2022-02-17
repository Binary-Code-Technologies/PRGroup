<?php
$servername = "sql261.main-hosting.eu";
$username = "u570873310_prgroup";
$password = "Avestan@2018";
$dbname = "u570873310_theprgroup";
$conn = mysqli_connect($servername,$username,$password,$dbname);
if(!$conn){
 /*   echo"success";
}
else{*/
    
    die("error" . mysqli_connect_error());
}
?>

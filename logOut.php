<?php 

    $cookie_name = "token";
    $cookie_value = "nil";
    setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/PRGroup%20FrontEnd");
    header("Location: ./index.php");

?>
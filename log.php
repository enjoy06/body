<?php
session_start();
$username = $_POST["username"];
$password = $_POST["password"];
if($username == "gimbrut" AND $password=="uX5eHEv")
{
    $_SESSION["username"] = $username;
    header("location: ./");
}
else{
    $_SESSION["login_error"] = true;
    header("location: _login.php?login_error");
     exit();
}

?>
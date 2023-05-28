<?php

session_start();

if(isset($_POST["submit"])){

    $username = $_POST["username"];
    $useremail = $_POST["useremail"];
    $userpass = $_POST["userpass"];
    $userchoose = $_POST["choose"];
    $logout = $_POST["logout"]


    $_SESSION["username"] = $username;
    $_SESSION["useremail"] = $useremail;
    $_SESSION["userpass"] = $userpass;
    $_SESSION["userchoose"] = $userchoose;
    $_SESSION["logout"] = $logout;




    header("Location: login.php");
   exit();

}

?>
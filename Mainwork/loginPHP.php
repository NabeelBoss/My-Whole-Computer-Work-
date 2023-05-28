<?php
session_start();

$email = ""; // Initialize the $email variable

if(isset($_POST["consubmit"])) {
    $email = $_POST["conemail"];
    $pass = $_POST["conpass"];
}

if( $email == $_SESSION["useremail"] && $pass == $_SESSION["userpass"] ) {
    header("Location: alag.php");

} else {
    echo "Nhi hoa";
}
?>

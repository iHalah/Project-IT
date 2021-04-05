
<?php

session_start();

$username = $_POST["username"];
$pass = $_POST["password"];
$error = "username or password is incorrect";
$score = $_COOKIE["headvalue"];


$server = "localhost";
$user = "root";
$password = "";

$conn = mysqli_connect($server, $user, $password, "Project438");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error() . "</body></html>");
}
    



$validate = $conn->query("SELECT * FROM `userInfo` WHERE `username` = '$username' AND `password_` = $pass");

       
$matchFound = mysqli_num_rows($validate) > 0 ?    1 : 0;


if ($matchFound) {
    $_SESSION["username"] = $username;
    $_SESSION["pass"] = $pass;

    $addScore = $conn->query("UPDATE `userInfo` SET `score`='$score' WHERE `username` = '$username'");

    if ( $addScore ) {
        header("location: index.html"); //send user to homepage, for example.
    }

    
}

else {
    $_SESSION["error"] = $error;
    header("location: end.php"); //send user back to the login page.
}

    
?>


<script src= "end.js"> </script>
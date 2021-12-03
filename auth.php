<?php
session_start();
include('function.php');
$email = $_POST['email'];
$password = $_POST['password'];

$sql = "select * from user where email = '$email' and password = '$password'";
$result = $db->con->query("SELECT * FROM user where email = '$email' and password = '$password'");
$count = mysqli_num_rows($result);
if ($count == 1) {
    echo "login sucssifly";
    $_SESSION['login'] = 1;
    $_SESSION['email'] = $email;
    header("Location: index.php");
} else {
    echo "fuckyou";
}

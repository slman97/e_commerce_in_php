<?php
session_start();
include('function.php');
$email = $_POST['email'];
$password = $_POST['password'];
$date = date("y - m - d h : i : s");
$sql = "INSERT INTO user (email,password,register_date)
	 VALUES ('$email','$password','$date')";
$result = $db->con->query("SELECT * FROM user where email = '$email'");
$count = mysqli_num_rows($result);
if ($count == 1) {
    echo "change the email";;
} else if (mysqli_query($db->con, $sql) == true) {
    $_SESSION['login'] = 1;
    $_SESSION['email'] = $email;
    header("Location: index.php");
} else {
    echo "fuckyou";
}

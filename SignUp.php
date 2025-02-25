<?php
$hostname = "localhost";
$username = "root";
$password = "";
$database = "weblog";
$conn = mysqli_connect($hostname, $username, $password , $database);

$name = $_POST['name'];
$user = $_POST['username'];
$email = $_POST['email'];
$pass = $_POST['password'];

session_start();
$_SESSION['id'] = $name;


if($conn)
    $query = "INSERT INTO `users`(`name`, `username`, `email`,`password`) VALUES ('$name','$user','$email','$pass')";
$result = mysqli_query($conn, $query);

$_SESSION['message'] = "ثبت نام موفقیت امیز بود";

if($conn) {
    $query1 = "SELECT * FROM `users` WHERE `username` = '$user' AND `password` = '$pass' AND `is_admin` = '0'";
    $result1 = mysqli_query($conn, $query1);
    $query2 = "SELECT * FROM `users` WHERE `email` = '$user' AND `password` = '$pass' AND `is_admin` = '0'";
    $result2 = mysqli_query($conn, $query2);

if (mysqli_num_rows($result1) > 0){
    session_start();
    $users = mysqli_fetch_all($result1);
    $_SESSION['id'] = $users[0][0];
    header('location:post_list.php');
} elseif (mysqli_num_rows($result2) > 0) {
    session_start();
    $users = mysqli_fetch_all($result2);
    $_SESSION['id'] = $users[0][0];
    header('location:post_list.php');
}
}
if($result)
    header('location:post_list.php');



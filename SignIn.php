<?php
$hostname = "localhost";
$username = "root";
$password = "";
$database = "weblog";
$conn = mysqli_connect($hostname, $username, $password , $database);

$user = $_POST['username'];
$pass = $_POST['password'];

if($conn) {
    $query = "SELECT * FROM `users` WHERE `username` = '$user' AND `password` = '$pass' AND `is_admin` = '0'";
    $result = mysqli_query($conn, $query);
    $query1 = "SELECT * FROM `users` WHERE `email` = '$user' AND `password` = '$pass' AND `is_admin` = '0'";
    $result1 = mysqli_query($conn, $query1);
    $query2 = "SELECT * FROM `users` WHERE `username` = '$user' AND `password` = '$pass' AND `is_admin` = '1'";
    $result2 = mysqli_query($conn, $query2);
    $query3 = "SELECT * FROM `users` WHERE `username` = '$user' AND `password` = '$pass' AND `is_admin` = '1'";
    $result3 = mysqli_query($conn, $query3);

}

if (mysqli_num_rows($result2) > 0) {
    session_start();
    $_SESSION['message'] = "مخلص ادمین هم هستیم";
    header('location:main.php');
} elseif (mysqli_num_rows($result3) > 0) {
    session_start();
    $_SESSION['message'] = "مخلص ادمین هم هستیم";
    header('location:main.php');
}elseif (mysqli_num_rows($result) > 0){
    session_start();
    $users = mysqli_fetch_all($result);
    $_SESSION['id'] = $users[0][0];
    header('location:post_list.php');
} elseif (mysqli_num_rows($result1) > 0) {
    session_start();
    $users = mysqli_fetch_all($result1);
    $_SESSION['id'] = $users[0][0];
    header('location:post_list.php');
} else{
    session_start();
    $_SESSION['message'] = "your username or password is not correct";
    header('location:main.php');
}

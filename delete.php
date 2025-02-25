<?php
$hostname = "localhost";
$username = "root";
$password = "";
$database = "weblog";
$conn = mysqli_connect($hostname, $username, $password, $database);

if ($conn) {
    session_start();
    $id = $_GET['id'];
    mysqli_query($conn, "DELETE FROM `posts` WHERE id = '$id'");
    header("Location:../post_list.php");
}
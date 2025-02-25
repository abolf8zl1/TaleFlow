<?php
$hostname = "localhost";
$username = "root";
$password = "";
$database = "weblog";
$conn = mysqli_connect($hostname, $username, $password , $database);

$title = $_POST['title'];
$body = $_POST['body'];
$img = $_FILES['img'];

move_uploaded_file($img['tmp_name'], __DIR__ . '/image/' . $img['name']);
$path = "http://localhost:8080/MyOwnWeblog//image/" . $img['name'];


if($conn)
    session_start();
    $user_id = $_SESSION['id'];
    $query = "INSERT INTO `posts`(`title`, `post_body`, `image_path`, `user_id`) VALUES ('$title','$body','$path','$user_id')";
$result = mysqli_query($conn, $query);

if($result)
    header('location:post_list.php');
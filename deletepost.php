<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, maximum-scale=1">
    <title>قالب سایت شرکتی</title>
    <link href="http://localhost:8080/MyOwnWeblog/css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="http://localhost:8080/MyOwnWeblog/css/font-awesome.css" rel="stylesheet" type="text/css">
    <link href='https://cdn.fontcdn.ir/Font/Persian/Vazir/Vazir.css' rel='stylesheet' type='text/css'>
    <link href="http://localhost:8080/MyOwnWeblog/css/style.css" rel="stylesheet" type="text/css">
    <link href="http://localhost:8080/MyOwnWeblog/css/style2.css" rel="stylesheet" type="text/css">
    <link href="css/style2.css" rel="stylesheet" type="text/css">
    <!--[if IE]>
    <style type="text/css">.pie {behavior:url(PIE.htc);}</style>
    <![endif]-->
    <!--[if lt IE 9]>
    <script src="http://localhost:8080/MyOwnWeblog/js/respond-1.1.0.min.js"></script>
    <script src="http://localhost:8080/MyOwnWeblog/js/html5shiv.js"></script>
    <script src="http://localhost:8080/MyOwnWeblog/js/html5element.js"></script>
    <![endif]-->
</head>
<body>
<?php
$hostname = "localhost";
$username = "root";
$password = "";
$database = "weblog";
$conn = mysqli_connect($hostname, $username, $password, $database);

if ($conn) {
    session_start();
    if (isset($_SESSION['id'])) {
        $id = $_SESSION['id'];
    }
    $delete = $_GET['id'];

}

?>
<div class="main-menu">
    <div class="container">
        <ul>
            <?php
            if (isset($_SESSION['id'])) {
                ?>
                <li><a href="post_list.php">My Tales</a></li>
                <li><a href="add_post.php">Share Your Tale</a></li>
                <li><a href="users/signout.php">Sign Out</a></li>
                <?php
            } else {
                ?>
                <li><a href="main2.php">Share Your Tale</a></li>
                <li><a href="main.php">SignUp/Login</a></li>
                <?php
            }
            ?>
        </ul>
    </div>
</div>
<div class="top-section">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
            </div>
            <div class="logo">
                <span class="flow">Flow</span>
                <span class="tale">Tale</span>
            </div>
        </div>
    </div>
</div>
<br>
<center>
    <p style="font-size: 30px;color: #444;">?Are You Sure You Want To Delete This Tale</p>
</center>
<hr>
<div class="container text-center">
    <a class="btn btn-danger" href="../delete.php/?id=<?=$delete?>">Yes! Delete This Tale</a>
    <a class="btn btn-info" href="../post_list.php">!No</a>
</div>
</body>
</html>


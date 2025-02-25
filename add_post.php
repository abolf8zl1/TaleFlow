<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, maximum-scale=1">
    <title>Weblook</title>
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="css/font-awesome.css" rel="stylesheet" type="text/css">
    <link href='https://cdn.fontcdn.ir/Font/Persian/Vazir/Vazir.css' rel='stylesheet' type='text/css'>
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <link href="css/style2.css" rel="stylesheet" type="text/css">
    <!--[if IE]>
    <style type="text/css">.pie {behavior:url(PIE.htc);}</style>
    <![endif]-->
    <!--[if lt IE 9]>
    <script src="js/respond-1.1.0.min.js"></script>
    <script src="js/html5shiv.js"></script>
    <script src="js/html5element.js"></script>
    <![endif]-->
</head>
<body>
<div class="main-menu">
    <div class="container">
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="post_list.php">My Tales</a></li>
            <li><a href="users/signout.php">Sign Out</a></li>
        </ul>
    </div>
</div>
<div class="top-section">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
            </div>
            <div class="col-md-5">
                <form method="" action="" class="search-form">
                    <input type="text" name="" placeholder="...Search">
                    <button type="submit"><i class="fa fa-search"></i></button>
                </form>
            </div>
            <div class="logo">
                <span class="flow">Flow</span>
                <span class="tale">Tale</span>
            </div>
        </div>
    </div>
</div>
<br>

<div class="container">
    <form method="post" action="postcontroller.php" enctype="multipart/form-data">
        <label for="title">Title: </label>
        <input type="text" name="title" id="title" class="form-control" required>
        <label for="body">Your Tale: </label>
        <textarea rows="8" type="text" name="body" id="body" class="form-control" required></textarea>
        <label for="img">Image: </label>
        <input type="file" name="img" id="img" class="form-control" required>
        <input type="submit" value="Share" class="btn btn-success text-center col-md-12">
    </form>
</div>
<script type="text/javascript" src="js/jquery.1.8.3.min.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
<script type="text/javascript" src="js/wow.js"></script>
<script type="text/javascript" src="js/jquery.particleground.js"></script>
<script>
    jQuery("[data-toggle='tooltip']").tooltip();
    jQuery('.footer').particleground({
        dotColor: '#515151',
        lineColor: '#515151'
    });
</script>
</body>
</html>
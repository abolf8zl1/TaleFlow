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
       $id = $_GET['id'];
       if (isset($_SESSION['id'])) {
       }
       $post = mysqli_fetch_all(mysqli_query($conn, "SELECT * FROM `posts` WHERE id = '$id'"));
   }

   ?>
      <div class="main-menu">
         <div class="container">
            <ul>
                <?php
                if (isset($_SESSION['id'])) {
                    ?>
                    <li><a href="../post_list.php">My Tales</a></li>
                    <li><a href="../add_post.php">Share Your Tale</a></li>
                    <li><a href="../users/signout.php">Sign Out</a></li>
                    <?php
                } else {
                    ?>
                    <li><a href="../main2.php">Share Your Tale</a></li>
                    <li><a href="../main.php">SignUp/Login</a></li>
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
      <hr>
      <div class="container">
         <div class="row">
            <div class="col-md-3">
            </div>
            <div class="col-md-9">
               <div class="col-md-12">
                  <div class="single-content container">
                     <div class="single-img">
                        <img src="<?= $post[0][2] ?>">
                     </div>
                     <div class="single-title">
                        <h1><?= $post[0][1] ?></h1>
                     </div>
                     <p><?= $post[0][3] ?></p>
                     <hr>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <br><br>
      <script type="http://localhost:8080/MyOwnWeblog/text/javascript" src="js/jquery.1.8.3.min.js"></script>
      <script type="http://localhost:8080/MyOwnWeblog/text/javascript" src="js/bootstrap.js"></script>
      <script type="http://localhost:8080/MyOwnWeblog/text/javascript" src="js/wow.js"></script>
      <script type="http://localhost:8080/MyOwnWeblog/text/javascript" src="js/jquery.particleground.js"></script>
      <script>
         jQuery("[data-toggle='tooltip']").tooltip();
         jQuery('.footer').particleground({
         dotColor: '#515151',
         lineColor: '#515151'
         });   
      </script>
   </body>
</html>
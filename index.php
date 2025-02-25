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
       $posts = mysqli_fetch_all(mysqli_query($conn, "SELECT * FROM `posts`"));
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
      <center>
         <p style="font-size: 16px;color: #444;">Last Tales</p>
      </center>
      <hr>
   <div class="container">
       <div class="row">
           <?php
           foreach ($posts as $post) {
               $user = mysqli_fetch_all(mysqli_query($conn, "SELECT * FROM `users` WHERE id = $post[4]"));
               ?>
               <div class="col-md-4">
                   <a href="single.php/?id=<?=$post[0]?>">
                       <div class="post-content">
                           <figure>
                               <img src="<?= $post[2] ?>">
                               <figcaption class="hover-fig">
                                   <i class="fa fa-arrow-right"></i>
                               </figcaption>
                               <figcaption class="date-fig">
                                       <span><?=$post[1]?>
                                    </span>
                                   <i class="fa fa-date"></i>
                               </figcaption>
                           </figure>
                           <p class="font"> <?= mb_strimwidth($post[3], 0,40,"...") ?></p>
                           <p class="font">Shared By:<?= $user[0][1]?></p>
                       </div>
                   </a>
               </div>
               <?php
           }
           ?>
       </div>
         </div>
      </div>
      <br><br>
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
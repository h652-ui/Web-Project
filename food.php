<?php
include 'account/includes/connect.php';
$sql = mysqli_query($con, "SELECT * FROM items;");
?>

<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>NPAY</title>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="css/JKS-icons.css">
<link rel="stylesheet" type="text/css" href="css/settings.css">
<link rel="stylesheet" type="text/css" href="css/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="css/owl.transitions.css">
<link rel="stylesheet" type="text/css" href="css/jquery.fancybox.css">
<link rel="stylesheet" type="text/css" href="css/zerogrid.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/loader.css">
<link rel="stylesheet" type="text/css" href="css/nav.css">
<link rel="shortcut icon" href="images/mylogo.png">

<!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

<style>
  .item-container img{
    width: 30vw;
    height: 18vw;
  }
</style>

</head>

<body>

<!--Loader-->
<div class="loader"> 
   <div class="cssload-container">
     <div class="cssload-circle"></div>
     <div class="cssload-circle"></div>
   </div>
</div>

<!--Top bar-->


<!--Topbar-->
<div class="topbar">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <p class="pull-left hidden-xs">NPAY Foods and Restaurant, the Best in NUST</p>
        <p class="pull-right"><i class="fa fa-phone"></i>Order Online +92-322-8186509</p>
      </div>
    </div>
  </div>
</div>

<!--Header-->
<header id="main-navigation">
  <div id="navigation" data-spy="affix" data-offset-top="20">
    <div class="container">
      <div class="row">
      <div class="col-md-12">
        <nav class="navbar navbar-default">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#fixed-collapse-navbar" aria-expanded="false"> 
            <span class="icon-bar top-bar"></span> <span class="icon-bar middle-bar"></span> <span class="icon-bar bottom-bar"></span> 
            </button>
           <a class="navbar-brand" href="index.php"><img src="images/mylogo.png" alt="logo" class="img-responsive"></a> 
         </div>
            <div id="fixed-collapse-navbar" class="navbar-collapse collapse navbar-right">
              <ul class="nav navbar-nav">
                <li class="dropdown active">
                   <a href="index.php">Home</a>
                </li>
                <li><a href="food.php" style="color : #e25111;background-color: white;">Our Food</a></li>
                <li class="dropdown active">
                  <a data-toggle="dropdown" href="#." class="dropdown-toggle">gallery</a>
                  <ul class="dropdown-menu">
                    <li><a href="gallery.html">Gallery 1</a></li>
                    <li><a href="gallery4c.html">Gallery 2</a></li>
                  </ul>
                </li>
                <li><a href="blog.php">blog</a></li>
                <li><a href="order.html">Order Now</a></li>
                <li class="dropdown active">
                  <a href="location.html" >Location</a>
                </li>
                <li class="dropdown active">
                  <a data-toggle="dropdown" href="#." class="dropdown-toggle">More...</a>
                  <ul class="dropdown-menu">
                    <li><a href="about.html">About Us</a></li>
                    <li><a href="menu.php">Menu</a></li>
                    
                    <li><a href="faq.html">FAQ</a></li>
                  </ul>
                 </li>
                 
              </ul>
            </div>
         </nav>
         </div>
       </div>
     </div>
  </div>
</header>


<!--Page header & Title-->
<section id="page_header" style="background-image: url('./images/Nust.jpg');">
<div class="page_title">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
         <h2 class="title">Our Food</h2>
         <p>Check out our menu and some of our special, featured recipies!</p>
      </div>
    </div>
  </div>
</div>  
</section>



<!--Welcome-->
<section id="welcome" class="padding">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
         <h2 class="heading">Welcome &nbsp; to &nbsp; NPAY</h2>
         <hr class="heading_space">
      </div>
      <div class="col-md-7 col-sm-6">
        <p class="half_space">Launched in NUTS, NPAY has grown from a home project to one of the largest food service in the NUTS. We are present in 24 sectors and 10000+ rooms locally, enabling our vision of better food for more people. We not only connect people to food in every context but work closely with cafes to enable a sustainable ecosystem.</p>
        <p class="half_space"></p>
         <ul class="welcome_list">
        <li>Business Events</li>
        <li>Birthdays</li>
        <li>Party & Others</li>
        </ul> 
      </div>
      <div class="col-md-5 col-sm-6">
       <img class="img-responsive" src="images/Chef2.jpg" alt="welcome JKS">
      </div>
    </div>
  </div>
</section> 


<!--Food Facilities-->
<section id="food" class="padding bg_grey">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h2 class="heading">Our &nbsp; Menu</h2>
        <hr class="heading_space">
      </div>
    </div>
    <div class="row">
      <div class="col-md-4">
        <ul class="menu_widget">
        <?php
        // mysqli_data_seek($sql,0);
          while ($row = mysqli_fetch_assoc($sql)) {
            
            echo "<li>".$row['name']."<span> PKR ". $row['price']."</span></li>";
          }
         
          ?>
        </ul>
         <h3>Other Special Menu</h3>
         <p>Enjoy Delicious Food!</p>
      </div>
      <div class="col-md-8 grid_layout">
      <div class="row">
      <div class="zerogrid">
          <div class="wrap-container">
            <div class="wrap-content clearfix">
              <?php
              mysqli_data_seek($sql,0);
              $count=0;
              while($row = mysqli_fetch_assoc($sql) )
              {
              echo "<div class=\"col-1-2\">
              <div class=\"wrap-col first\">
                  <div class=\"item-container\"> 
                  <img src=\"data:image/jpeg;base64," . base64_encode($row['image'])." \"alt=\"cook\"/>
                   <div class=\"overlay\">
                       <a class=\"overlay-inner fancybox\" href=\"\"  data-fancybox-group=\"gallery\">
                           ".$row['name'] ."
                       </a> 
                   </div>".$row['name'] ."
                  </div>
                </div>
              </div>";
              $count++;
              if($count==4)
              break;
            }
              
              ?>
              <!-- <div class="col-1-2">
              <div class="wrap-col first">
                  <div class="item-container"> 
                   <img src="images/Samosa.png" alt="cook"/> 
                   <div class="overlay">
                      <a class="overlay-inner fancybox" href="images/Samosa.png" data-fancybox-group="gallery">
                         Tasty Samosa
                      </a>
                   </div>
                   </div>
                </div>
              </div> -->
              <!-- <div class="col-1-2">
              <div class="wrap-col">
                  <div class="item-container"> 
                   <img src="images/Kabab.jpg" alt="cook"/> 
                   <div class="overlay">
                       <a class="overlay-inner fancybox" href="images/Kabab.jpg" data-fancybox-group="gallery">
                        Juicy Kabab
                       </a>
                   </div>
                    </div>
                </div>
              </div> -->
              <!-- <div class="col-1-2">
              <div class="wrap-col">
                  <div class="item-container"> 
                   <img src="images/Burger.jpg" alt="cook"/> 
                   <div class="overlay">
                       <a class="fancybox overlay-inner" href="images/Burger.jpg" data-fancybox-group="gallery"> 
                         Burgers
                       </a>
                    </div>
                   </div>
                 </div>
               </div> -->
            </div>
          </div>
        </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!--Featured Receipes -->
<section id="news" class="bg_grey padding">
  <div class="container">
    <div class="row">
      <div class="col-md-12 text-center">
      <h2 class="heading">Featured &nbsp; Food &nbsp; Receipes</h2>
      <hr class="heading_space">
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="cheffs_wrap_slider">
          <div id="news-slider" class="owl-carousel">
          <?php
              mysqli_data_seek($sql,0);
              $count=0;
              while($row = mysqli_fetch_assoc($sql) )
              {
              echo "<div class=\"item\">
              <div class=\"news_content\">
              <img src=\"data:image/jpeg;base64," . base64_encode($row['image'])." \"alt=\"cook\"/>
               <div class=\"date_comment\">
                  <span>22<small>apr</small></span>
                  <a href=\"#.\"><i class=\"icon-comment\"></i> 5</a>
               </div>
               <div class=\"comment_text\">
                 <h3><a href=\"#.\">".$row['name']."</a></h3>
                 <p>Enjoy Delicious Food!</p>
               </div>
              </div>
            </div>";
            }
              
              ?>
            
            <!-- <div class="item">
              <div class="news_content">
               <img src="images/Kabab.jpg" alt="Docotor">
               <div class="date_comment">
                  <span>22<small>apr</small></span>
                  <a href="#."><i class="icon-comment"></i> 5</a>
               </div>
               <div class="comment_text">
                 <h3><a href="#.">Seekh Kabab</a></h3>
                 <p>Enjoy Delicious Food!</p>
               </div>
              </div>
            </div>
            <div class="item">
              <div class="news_content">
               <img src="images/Shawarma.jpg" alt="Docotor">
               <div class="date_comment">
                  <span>22<small>apr</small></span>
                  <a href="#."><i class="icon-comment"></i> 5</a>
               </div>
               <div class="comment_text">
                 <h3><a href="#.">Chicken Shawarma</a></h3>
                 <p>Enjoy Delicious Food!</p>
               </div>
              </div>
            </div>
            
            <div class="item">
              <div class="news_content">
               <img src="images/Burger.jpg" alt="Docotor">
               <div class="date_comment">
                  <span>22<small>apr</small></span>
                   <a href="#."><i class="icon-comment"></i> 5</a>
               </div>
               <div class="comment_text">
                 <h3><a href="#.">Beef Burger</a></h3>
                 <p>Enjoy Delicious Food!</p>
               </div>
              </div>
            </div> -->
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<!-- testinomial -->
<section id="testinomial" class="padding">
  <div class="container">
  <div class="row">
      <div class="col-md-12 text-center">
      <h2 class="heading">Our &nbsp; happy &nbsp; Customers</h2>
      <hr class="heading_space">
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
      <div id="testinomial-slider" class="owl-carousel text-center">
        <div class="item">
          <h3>Awesome Food. Food from some of the finest cafes in NUST!</h3>
          <p>Jhonny Sins</p>
        </div>
        <div class="item">
          <h3>Good Recipes, Nice staff and customer care. A good service overall</h3>
          <p>Mia Khalifa</p>
        </div>
        <div class="item">
          <h3>Awesome Food. Food from some of the finest cafes in NUST!</h3>
          <p>Lana Rhoades</p>
        </div>
       </div>
      </div>
    </div>
  </div>
</section>

<!--Footer-->
<footer class="padding-top bg_black">
  <div class="container">
    <div class="row">
      <div class="col-md-3 col-sm-6 footer_column">
        <h4 class="heading">Who are we?</h4>
        <hr class="half_space">
        <p class="half_space"></p>
        <p style="text-align: justify;">Launched in NUTS, NPAY has grown from a home project to one of the largest food service in the NUTS. We are present in 24 sectors and 10000+ rooms locally, enabling our vision of better food for more people. We not only connect people to food in every context but work closely with cafes to enable a sustainable ecosystem.</p>
      </div>
      <div class="col-md-3 col-sm-6 footer_column">
        <h4 class="heading">Quick Links</h4>
        <hr class="half_space">
        <ul class="widget_links">
          <li><a href="index.php">Home</a></li>
          <li><a href="food.php">Our Food</a></li>
          <li><a href="about.html">About Us</a></li>
          
          <li><a href="faq.html">FAQ's</a></li>
          <li><a href="./account/register.php">Order Now</a></li>
          
        </ul>
      </div>
      <div class="col-md-3 col-sm-6 footer_column">
        <h4 class="heading">Newsletter</h4>
        <hr class="half_space">
        <p class="icon"><i class="icon-dollar"></i>Sign up with your name and email to get updates fresh updates.</p>
        <div id="result1" class="text-center"></div>        
        
       <form action="http://themesindustry.us13.list-manage.com/subscribe/post-json?u=4d80221ea53f3a4487ddebd93&id=494727d648&c=?" method="get" onSubmit="return false" class="newsletter">
          <div class="form-group">
            <input type="email" placeholder="E-mail Address" required name="EMAIL" id="EMAIL" class="form-control" />
          </div>
          <div class="form-group">
            <input type="submit" class="btn-submit button3" value="Subscribe" />
          </div>
        </form>
      </div>
      <div class="col-md-3 col-sm-6 footer_column">
        <h4 class="heading">Get in Touch</h4>
        <hr class="half_space">
        <p></p>
        <p style="text-align: justify;" class="address"><i class="icon-location"></i>NPAY, Rector NUTS Ayesha Hostel, Sirinagar Highway, Islamabad, 192834.</p>
        <p class="address"><i class="fa fa-phone"></i>(+92) 322 8186509</p>
        <p class="address"><i class="icon-dollar"></i><a href="office@npay.com">office@npay.com</a></p>
      </div> 
    </div>
    <div class="row">
     <div class="col-md-12">
        <div class="copyright clearfix">
          <p>Copyright &copy; 2022 NPAY. All Right Reserved</p>
          <ul class="social_icon">
               <li><a href="#" class="facebook"><i class="icon-facebook5"></i></a></li>
               <li><a href="#" class="twitter"><i class="icon-twitter4"></i></a></li>
               <li><a href="#" class="google"><i class="icon-google"></i></a></li>
              </ul>
        </div>
      </div>
    </div>
  </div>
</footer>


<a href="#" id="back-top"><i class="fa fa-angle-up fa-2x"></i></a>

<script src="js/jquery-2.2.3.js" type="text/javascript"></script>
<script src="js/bootstrap.min.js" type="text/javascript"></script>
<script src="js/jquery.parallax-1.1.3.js"></script>
<script src="js/jquery.appear.js"></script>  
<script src="js/jquery-countTo.js"></script> 
<script src="js/owl.carousel.min.js" type="text/javascript"></script>
<script src="js/jquery.fancybox.js"></script>
<script src="js/jquery.mixitup.min.js"></script>
<script src="js/functions.js" type="text/javascript"></script>

</body>
</html>

<?php
include 'account/includes/connect.php';
$id = $_GET['id'];
$sql = mysqli_query($con, "SELECT * FROM blog where ID=$id;");
$row = mysqli_fetch_assoc($sql);
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
<link rel="stylesheet" type="text/css" href="css/bistro-icons.css">
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
                <li><a href="food.php">Our Food</a></li>
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
                  <a data-toggle="dropdown" href="#." class="dropdown-toggle" style="color : #e25111;background-color: white;">More...</a>
                  <ul class="dropdown-menu">
                    <li><a href="about.html">About Us</a></li>
                    <li><a href="menu.php">Menu</a></li>
                    <li><a href="blog-detail.php" style="color : #e25111;background-color: white;">Blog Detail</a></li>
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
<section id="page_header">
<div class="page_title">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
         <h2 class="title">Blog</h2>
         <p>Enjoy our Delicious Food!</p>
      </div>
    </div>
  </div>
</div>  
</section>


<!-- Blog Details -->
<section id="blog" class="padding-top">
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-sm-7">
        <div class="blog_item padding-bottom order-page">
           <h2><?php echo $row['Heading'] ?></h2>
           <ul class="comments">
             <li><a href="#."><?php echo $row['Date'] ?></a></li>
             <li><a href="#."><i class="icon-chat-2"></i><?php echo $row['Writer'] ?></a></li>
           </ul>
          <div class="image_container">
          <img src="images/blog1.jpg" class="img-responsive" alt="blog post">
          </div>
          <?php echo $row['Blog'] ?>
          <div class="clearfix">
          <ul class="comments pull-left">
          <li><a href="#."><i class="icon-tag2"></i>benefits, continental, food</a></li>
          </ul>
          <ul class="social_icon pull-right">
               <li><a href="#." class="black"><i class="fa fa-facebook"></i></a></li>
               <li><a href="#." class="black"><i class="fa fa-twitter"></i></a></li>
               <li><a href="#." class="black"><i class="fa fa-google-plus"></i></a></li>
              </ul>
          </div>  
        </div>
      </div>
      <div class="col-md-4 col-sm-5">
        <aside class="sidebar">
           <div class="widget">
            <ul class="tabs">
              <li class="active" rel="tab1">Popular </li>
              <li rel="tab2">Latest</li>
              <li rel="tab3">Comments</li>
            </ul>
           <div class="tab_container bg_grey">
          <h3 class="d_active tab_drawer_heading" rel="tab1">Popular</h3>
          <div id="tab1" class="tab_content">
            <div class="single_comments">
              <img alt="" src="images/avator1.jpg">
              <p><a href="#.">Celebration with Music </a>
              <span>Nov 05, 2016</span>
              </p>
              
            </div>
            <div class="clearfix"></div>
            <div class="single_comments">
              <img alt="" src="images/avator1.jpg">
              <p><a href="#.">Duis autem vel eum iriure dolor</a><span>Nov 25, 2016</span></p>
            </div>
            <div class="clearfix"></div>
            <div class="single_comments no-margin">
              <img alt="" src="images/avator1.jpg">
              <p><a href="#.">Lorem ipsum dolor sit amet</a> <span>Nov 05, 2016</span></p>
            </div>
            <div class="clearfix"></div>
          </div>
          <h3 class="tab_drawer_heading" rel="tab2">Latest</h3>
          <div id="tab2" class="tab_content">
            <div class="single_comments">
              <img alt="" src="images/avator1.jpg">
              <p><a href="#.">Lorem ipsum dolor sit amet</a> <span>Nov 05, 2016</span></p>
            </div>
          </div>
           <h3 class="tab_drawer_heading" rel="tab3">Comments</h3>
          <div id="tab3" class="tab_content">
            <div class="single_comments">
                <img alt="" src="images/avator1.jpg">
                <p><a href="#.">Ut wisi enim ad minim</a> <span>Nov 05, 2016</span></p>
                
             </div>
             <div class="single_comments">
              <img alt="" src="images/avator1.jpg">
              <p><a href="#.">Lorem ipsum dolor</a> <span>Nov 05, 2016</span></p>
              
            </div>
          </div> 
        </div>
           </div>
           <div class="widget">
             <h3>Categories</h3>
             <ul class="widget_links">
               <li><a href="#.">Food</a></li>
               <li><a href="#.">Special Occasion</a></li>
               <li><a href="#.">Presentation</a></li>
               <li><a href="#.">Corporate Dining</a></li>
               <li><a href="#.">Reservation</a></li>
             </ul>
           </div>
           <div class="widget">
             <h3>Tags</h3>
             <ul class="tags">
             <li><a href="#.">Our Events</a></li>
             <li><a href="#.">Lorem ipsum</a></li>
             <li><a href="#.">sit amet</a></li>
             <li><a href="#.">Lorem ipsum </a></li>
             <li><a href="#.">Presentation</a></li>
             <li><a href="#.">Reservation</a></li>
             <li><a href="#.">Special Occasion</a></li>
             <li><a href="#."> Lunch</a></li>
             </ul>
           </div>
        </aside>
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


<a href="#." id="back-top"><i class="fa fa-angle-up fa-2x"></i></a>

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

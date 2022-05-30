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
<link rel="stylesheet" type="text/css" href="css/bistro-icons.css">
<link rel="stylesheet" type="text/css" href="css/animate.min.css">
<link rel="stylesheet" type="text/css" href="css/settings.css">
<link rel="stylesheet" type="text/css" href="css/navigation.css">
<link rel="stylesheet" type="text/css" href="css/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="css/owl.transitions.css">
<link rel="stylesheet" type="text/css" href="css/jquery.fancybox.css">
<link rel="stylesheet" type="text/css" href="css/zerogrid.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/loader.css">
<link rel="stylesheet" type="text/css" href="css/nav.css">
<link rel="shortcut icon" href="images/mylogo.png">


<style>
  .cheffs_wrap img{
    height:35vw;
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
           <a class="navbar-brand" href="index.html"><img src="images/mylogo.png" alt="logo" class="img-responsive"></a> 
         </div>
            <div id="fixed-collapse-navbar" class="navbar-collapse collapse navbar-right">
              <ul class="nav navbar-nav">
                <li class="dropdown active">
                   <a href="index.html"  style="color : #e25111;background-color: white;" >Home</a>
                </li>
                <li><a href="food.html">Our Food</a></li>
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
                    <li><a href="menu.html">Menu</a></li>
                    <li><a href="blog-detail.html">Blog Detail</a></li>
                    <li><a href="faq.html">FAQ</a></li>
                  </ul>
                 </li>
                 <li class="dropdown active">
                   <a href="" style="background-color: white; border: 2px solid #e25111; margin-top: 20px"><input type="search" style="background-color:white ;" placeholder="Search Here" name="" id=""></a>
                 </li>
                 <li >
                  <button style=" padding: 5px;margin-top: 20.5px;border-radius: 10px;border: 2px solid #e25111;">🔍 </button>
                 </li>
              </ul>
            </div>
         </nav>
         </div>
       </div>
     </div>
  </div>
</header>




<!-- REVOLUTION SLIDER -->			

				<div id="rev_slider_34_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container" data-alias="news-gallery34" style="margin:0px auto;background-color:#ffffff;padding:0px;margin-top:0px;margin-bottom:0px;">
				<!-- START REVOLUTION SLIDER 5.0.7 fullwidth mode -->
					<div id="rev_slider_34_1" class="rev_slider fullwidthabanner" style="display:none;" data-version="5.0.7">
						<ul>	<!-- SLIDE  -->
							<li data-index="rs-129" data-transition="fade" data-slotamount="default" data-rotate="0"  data-fstransition="fade" data-fsmasterspeed="1500" data-fsslotamount="7"  data-title="N(ust)PAY" data-description="Enjoy Nust's Delicious Food!">
								<!-- MAIN IMAGE -->
								<img src="images/Nust.jpg"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
								<!-- LAYER NR. 2 -->
								<h1 class="tp-caption tp-resizeme" 
                          data-x="left" data-hoffset="15"
                          data-y="70" 
                          data-transform_idle="o:1;"
                          data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" 
                          data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;" 
                          data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" 
                          data-mask_out="x:0;y:0;s:inherit;e:inherit;" 
                          data-start="500" 
                          data-splitin="none" 
                          data-splitout="none" 
                          style="z-index: 6;">
                          <span class="small_title">Yes We have</span> <br> The &nbsp; Best &nbsp; Food &nbsp; in &nbsp;<span class="color">NUST</span>
                       </h1>
								<!-- LAYER NR. 2 -->
                        <p class="tp-caption tp-resizeme"
                          data-x="left" data-hoffset="15"
                          data-y="210" 
                          data-transform_idle="o:1;"
                          data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" 
                          data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;" 
                          data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" 
                          data-mask_out="x:0;y:0;s:inherit;e:inherit;" 
                          data-start="800"
                          style="z-index: 9;">Enjoy Delicious Food!
                          
                        </p>
                        <div class="tp-caption fade tp-resizeme"
                           data-x="left" data-hoffset="15"
                           data-y="280"
                           data-width = "full"  
                           data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;"
                           data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;"  
                           data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" 
                           data-mask_out="x:0;y:0;s:inherit;e:inherit;" 
                          data-start="1200"
                           style="z-index: 12;">
                       <a href="./account/register.php" class="btn-common btn-white page-scroll">Order Now</a>
                       </div>
                        
                       
							</li>
							
							<li class="text-center" data-index="rs-130" data-transition="slideleft" data-slotamount="default" data-rotate="0"  data-title="BBQ &nbsp; Items" data-description="Enjoy Delicious Food!">
								<img src="images/Tikka.jpg"  alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
                        <h1 class="tp-caption tp-resizeme" 
                          data-x="center" data-hoffset="15"
                          data-y="70" 
                          data-transform_idle="o:1;"
                          data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" 
                          data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;" 
                          data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" 
                          data-mask_out="x:0;y:0;s:inherit;e:inherit;" 
                          data-start="500" 
                          data-splitin="none" 
                          data-splitout="none" 
                          style="z-index: 6;">
                          <span class="small_title">  Delicious &nbsp; BBQ &nbsp; Items</span> <br>  &nbsp; Tikka &nbsp;
                        </h1>
                        <p class="tp-caption tp-resizeme"
                          data-x="center" data-hoffset="15"
                          data-y="210" 
                          data-transform_idle="o:1;"
                          data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" 
                          data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;" 
                          data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" 
                          data-mask_out="x:0;y:0;s:inherit;e:inherit;" 
                          data-start="800"
                          style="z-index: 9;">Enjoy Delicious Food!
                        </p>
							
                            
                          <div class="tp-caption fade tp-resizeme"
                           data-x="center" data-hoffset="15"
                           data-y="280"
                           data-width = "full"  
                           data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;"
                           data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;"  
                           data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" 
                           data-mask_out="x:0;y:0;s:inherit;e:inherit;" 
                          data-start="1200"
                           style="z-index: 12;">
                          <a href="#specialities" class="btn-common btn-white page-scroll">Learn &nbsp; More</a> &nbsp; <a href="#order-form" class="btn-common btn-orange page-scroll">Order &nbsp; Now</a>
                       </div>  
                            
                            
                            
                            </li>
						
							<li class="text-right" data-index="rs-131" data-transition="slideleft"   data-rotate="0" data-title="Fresh &nbsp; Juices" data-description="Enjoy Delicious Food!">
								<img src="images/Juice.jpg" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
                        <h1 class="tp-caption tp-resizeme" 
                          data-x="right" data-hoffset="" 
                          data-y="70" 
                          data-transform_idle="o:1;"
                          data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" 
                          data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;" 
                          data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" 
                          data-mask_out="x:0;y:0;s:inherit;e:inherit;" 
                          data-start="500" 
                          data-splitin="none" 
                          data-splitout="none" 
                          style="z-index: 6;">
                          <span class="small_title">We Prepare</span> <br> Fresh &nbsp; Fruit &nbsp; <span class="color">Juices</span>
                        </h1>
                        <p class="tp-caption tp-resizeme"
                          data-x="right" data-hoffset="" 
                          data-y="210" 
                          data-transform_idle="o:1;"
                          data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" 
                          data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;" 
                          data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" 
                          data-mask_out="x:0;y:0;s:inherit;e:inherit;" 
                          data-start="800"
                          style="z-index: 9;">Enjoy Delicious Food!
                        </p>
							
                           <div class="tp-caption fade tp-resizeme"
                           data-x="right" data-hoffset=""
                           data-y="280"
                           data-width = "full" 
                           data-transform_idle="o:1;"
                           data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;"
                           data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;"  
                           data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" 
                           data-mask_out="x:0;y:0;s:inherit;e:inherit;" 
                          data-start="1200"
                           style="z-index: 12;">
                       <a href="./account/register.php" class="btn-common btn-white page-scroll">Order Now</a>
                       </div>  
                            </li>
							<!-- SLIDE  -->
						</ul>
					</div>
				</div>
 <!-- END REVOLUTION SLIDER -->
						




<!--Features Section-->
<section class="feature_wrap padding-half" id="specialities">
  <div class="container">
    <div class="row">
     <div class="col-md-12 text-center">
        <h2 class="heading ">Our &nbsp; Specialities</h2>
        <hr class="heading_space">
      </div>
    </div>
    <div class="row">
      <div class="col-md-3 col-sm-6 feature text-center">
        <i class="icon-glass"></i>
        <h3><a href="./account/register.php">Dinner &amp; Dessert</a></h3>
        <p> Enjoy Delicious Food!</p>
      </div>
      <div class="col-md-3 col-sm-6 feature text-center">
        <i class="icon-coffee"></i>
        <h3><a href="./account/register.php">Breakfast</a></h3>
        <p> Enjoy Delicious Food!</p>
      </div>
      <div class="col-md-3 col-sm-6 feature text-center">
        <i class="icon-glass"></i>
        <h3><a href="./account/register.php">Ice Shakes</a></h3>
        <p> Enjoy Delicious Food!</p>
      </div>
      <div class="col-md-3 col-sm-6 feature text-center">
        <i class="icon-coffee"></i>
        <h3><a href="./account/register.php">Beverges</a></h3>
        <p> Enjoy Delicious Food!</p>
      </div>
    </div>
    
  </div>
</section>


<!--Services plus working hours-->
<section id="services" class="padding-bottom">
  <div class="container">
    <div class="row">
      <div class="col-md-8">
         <h2 class="heading">Featured &nbsp; Food</h2>
         <hr class="heading_space">
         <div class="slider_wrap">
        <div id="service-slider" class="owl-carousel">
          <?php
          while ($row = mysqli_fetch_assoc($sql)) {
            echo " <div class=\"item\">
            <div class=\"item_inner\">
            <div class=\"image\">
            <img src=\"data:image/jpeg;base64," . base64_encode($row['image']). "\" alt=\"Services Image\">
              <a  href=\"./account/register.php\"></a>
            </div>
              <h3><a href=\"./account/register.php\">".$row['name']."</a></h3>
              <p>Enjoy Delicious Food!</p>
            </div>
          </div>";
          
          }
         
          ?>
          <!-- <div class="item">
            <div class="item_inner">
              <div class="image">
              <img src="images/Burger.jpg" alt="Services Image">
              <a  href="./account/register.php"></a>
              </div>
              <h3><a href="./account/register.php">Beef Burger</a></h3>
              <p>Enjoy Delicious Food!</p>
            </div>
          </div>
          <div class="item">
            <div class="item_inner">
              <div class="image">
              <img src="images/Kabab.jpg" alt="Services Image">
              <a  href="./account/register.php"></a>
              </div>
              <h3><a href="./account/register.php">Seekh Kabab</a></h3>
              <p>Enjoy Delicious Food!</p>
            </div>
          </div>
          <div class="item">
            <div class="item_inner">
              <div class="image">
              <img src="images/Samosa.png" alt="Services Image">
              <a  href="./account/register.php"></a>
              </div>
              <h3><a href="./account/register.php">Aaallu Samosa</a></h3>
              <p>Enjoy Delicious Food!</p>
            </div> -->
          <!-- </div> -->
        </div>
        </div>
      </div>
      <div class="col-md-4">
        <h2 class="heading">Our &nbsp; Menu</h2>
        <hr class="heading_space">
        <ul class="menu_widget">
        <?php
        mysqli_data_seek($sql,0);
          while ($row = mysqli_fetch_assoc($sql)) {
            
            echo "<li>".$row['name']."<span> PKR ". $row['price']."</span></li>";
          }
         
          ?>
        </ul>
         <h3>Other Special Menu</h3>
         <p>Enjoy Delicious Food!</p>
      </div>
    </div>
  </div>
</section>


<!-- image with content -->
<section class="info_section paralax">
  <div class="container">
    <div class="row">
      <div class="col-md-2"> </div>
      <div class="col-md-8">
         <div class="text-center">
         <h2 class="heading_space">HOT Deal of the Day</h2>
         <p class="heading_space detail">Enjoy Delicious Food!</p>
         <a href="./account/register.php" class="btn-common-white page-scroll">Order Now</a>
         </div>          
      </div>
      <div class="col-md-2"></div>
    </div>
  </div>
</section>



<!-- Food Gallery -->
<section id="gallery" class="padding">
  <div class="container">
      <div class="row">
     <div class="col-md-12 text-center">
        <h2 class="heading ">Delicious &nbsp; Food</h2>
        <hr class="heading_space">
        <div class="work-filter">
          <ul class="text-center">
             <li><a href="javascript:;" data-filter="all" class="active filter">All Food</a></li>
             <li><a href="javascript:;" data-filter=".starters" class="filter">Starters</a></li>
             <li><a href="javascript:;" data-filter=".drinks" class="filter">Drinks & Beverges</a></li>
             <li><a href="javascript:;" data-filter=".dinner" class="filter"> Dinner</a></li>
             <li><a href="javascript:;" data-filter=".lunch" class="filter">Breakfast & Lunch</a></li>
          </ul>
        </div>
      </div>
    </div>
     <div class="row">
      <div class="zerogrid">
        <div class="wrap-container">
          <div class="wrap-content clearfix home-gallery">
            <div class="col-1-4 mix work-item drinks">
              <div class="wrap-col">
                <div class="item-container">
                  <div class="image">
                    <img src="images/f1.jpg" alt="cook"/>
                    <div class="overlay">
                        <a class="fancybox overlay-inner" href="images/f1.jpg"><i class=" icon-eye6"></i></a>
                    </div>
                  </div> 
                </div>
              </div>
            </div>
            <div class="col-1-4 mix work-item starters">
              <div class="wrap-col">
                <div class="item-container">
                  <div class="image">
                    <img src="images/f2.jpg" alt="cook"/>
                    <div class="overlay">
                        <a class="fancybox overlay-inner" href="images/f2.jpg" data-fancybox-group="gallery"><i class=" icon-eye6"></i></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-1-4 mix work-item dinner">
              <div class="wrap-col">
                <div class="item-container">
                  <div class="image">
                    <img src="images/f3.jpg" alt="cook"/>
                    <div class="overlay">
                        <a class="fancybox overlay-inner" href="images/f3.jpg" data-fancybox-group="gallery"><i class=" icon-eye6"></i></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-1-4 mix work-item drinks">
              <div class="wrap-col">
                <div class="item-container">
                  <div class="image">
                    <img src="images/f4.jpg" alt="cook"/>
                    <div class="overlay">
                        <a class="fancybox overlay-inner" href="images/f4.jpg" data-fancybox-group="gallery"><i class=" icon-eye6"></i></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>  
            <div class="col-1-4 mix work-item dinner">
              <div class="wrap-col">
                <div class="item-container">
                  <div class="image">
                    <img src="images/f5.jpg" alt="cook"/>
                    <div class="overlay">
                        <a class="fancybox overlay-inner" href="images/f5.jpg" data-fancybox-group="gallery"><i class=" icon-eye6"></i></a>
                    </div> 
                  </div>
                </div>
              </div>
            </div>
            <div class="col-1-4 mix work-item lunch">
              <div class="wrap-col">
                <div class="item-container">
                  <div class="image">
                    <img src="images/f6.jpg" alt="cook"/>
                    <div class="overlay">
                        <a class="fancybox overlay-inner" href="images/f6.jpg" data-fancybox-group="gallery"><i class=" icon-eye6"></i></a>
                    </div>
                  </div> 
                </div>
              </div>
            </div>
            <div class="col-1-4 mix work-item starters">
              <div class="wrap-col">
                <div class="item-container">
                  <div class="image">
                    <img src="images/f7.jpg" alt="cook"/>
                    <div class="overlay">
                        <a class="fancybox overlay-inner" href="images/f7.jpg" data-fancybox-group="gallery"><i class=" icon-eye6"></i></a>
                    </div>
                  </div> 
                </div>
              </div>
            </div>
            <div class="col-1-4 mix work-item starters">
              <div class="wrap-col">
                <div class="item-container">
                  <div class="image">
                    <img src="images/f8.jpg" alt="cook"/>
                    <div class="overlay">
                        <a class="fancybox overlay-inner" href="images/f8.jpg"><i class=" icon-eye6"></i></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
       </div>
      </div>
  </div>
</section>




<!-- facts counter  -->
<section id="facts">
  <div class="container">
    <div class="row number-counters"> 
      <!-- first count item -->
      <div class="col-sm-3 col-xs-12 text-center wow fadeInDown" data-wow-duration="500ms" data-wow-delay="300ms">
        <div class="counters-item row">
        <i class="icon-smile"></i> 
        <h2><strong data-to="4680">0</strong></h2>
          <p>Happy Customers</p>
        </div>
      </div>
      <div class="col-sm-3 col-xs-12 text-center wow fadeInDown" data-wow-duration="500ms" data-wow-delay="600ms">
        <div class="counters-item  row"> 
        <i class="icon-food"></i>
        <h2><strong data-to="865">0</strong></h2>
          <p>Dishes Served</p>
        </div>
      </div>
      <div class="col-sm-3 col-xs-12 text-center wow fadeInDown" data-wow-duration="500ms" data-wow-delay="900ms">
        <div class="counters-item  row"> 
        <i class="icon-glass"></i>
        <h2><strong data-to="510">0</strong></h2>
          <p>Total Beverages</p>
        </div>
      </div>
      <div class="col-sm-3 col-xs-12 text-center wow fadeInDown" data-wow-duration="500ms" data-wow-delay="1200ms">
        <div class="counters-item  row"> 
        <i class="icon-coffee"></i>
        <h2><strong data-to="1350">0</strong></h2>
          <p>Cup of coffees</p>
        </div>
      </div>
    </div>  
  </div>
</section>



<!-- Our cheffs -->
<section id="cheffs" class="padding">
  <div class="container">
    <div class="row">
      <div class="col-md-12 text-center">
      <h2 class="heading">Our &nbsp; Kitchen &nbsp; Staff</h2>
      <hr class="heading_space">
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="cheffs_wrap_slider">
          <div id="our-cheffs" class="owl-carousel">
            <div class="item">
              <div class="cheffs_wrap">
               <img src="images/ht.jpg" alt="Kitchen Staff">
               <h3>Chef 1</h3>
               <small>Head Of Kitchen</small>
               <p>Enjoy Delicious Food!</p>
              </div>
            </div>
            <div class="item">
              <div class="cheffs_wrap">
               <img src="images/Chef2.jpg" alt="Kitchen Staff">
               <h3>Chef 2</h3>
               <small>Food Supervisor</small>
               <p>Enjoy Delicious Food!</p>
              </div>
            </div>
            <div class="item">
              <div class="cheffs_wrap">
               <img src="images/ht.jpg" alt="Kitchen Staff">
               <h3>Chef 3</h3>
               <small>Head Cook</small>
               <p>Enjoy Delicious Food!</p>
              </div>
            </div>
            <div class="item">
              <div class="cheffs_wrap">
               <img src="images/Chef2.jpg" alt="Kitchen Staff">
               <h3>Chef 4</h3>
               <small>Food Supervisor</small>
               <p>Enjoy Delicious Food!</p>
              </div>
            </div>
            <div class="item">
              <div class="cheffs_wrap">
               <img src="images/ht.jpg" alt="Kitchen Staff">
               <h3>Chef 5</h3>
               <small>Food Supervisor</small>
               <p>Enjoy Delicious Food!</p>
              </div>
            </div>
            <div class="item">
              <div class="cheffs_wrap">
               <img src="images/Chef2.jpg" alt="Kitchen Staff">
               <h3>Chef 6</h3>
               <small>Food Supervisor</small>
               <p>Enjoy Delicious Food!</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>



<!-- Order Online --> 
<section id="order-form" class="order_section">
  <div class="container order_form padding">
    <div class="row">
      <div class="col-md-12 appointment_form" style="text-align: center;">
        <h2 class="heading">Online Order</h2>
        <hr class="heading_space">
      <div class="row">  
       <div class="col-md-8" style="margin-left:12vw">
       <form onSubmit="return false" id="order_form" class="callus">
            <div class="row">
            <div class="form-group col-md-12">
            <div id="result" class="text-center"></div></div></div>
             <div class="row">
             <div class="form-group col-md-12">
            </div></div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <input type="text" class="form-control" placeholder="Name"  name="name" id="name"  required>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                   <input type="email" class="form-control" placeholder="Email address" name="email" id="email" required>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <input type="text" class="form-control" placeholder="Phone No" name="phone" id="phone" required>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    
                    <select class="form-control" id="deal" name="deal">
                       <option> Select Deal </option>
                       <option> Deal One ($200) </option>
                       <option> Deal Two ($500) </option>
                       <option> Deal Three ($900) </option>
                       <option> Deal Four ($1300) </option>
                    </select>
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group">
                    <textarea placeholder="Order Details"  id="message" name="message" required></textarea>
                  </div>
                  <div class="form-group">
                     <div class="btn-submit btn-common-white">
                    <input type="submit" value="Place &nbsp; Order" id="btn_order_submit" />
                    </div>
                  </div>
                </div>
              </div>
            </form>
           </div> 
           </div>
      </div>
      <div class="col-md-3">
      </div>
    </div>
    <div class="col-md-3"></div>
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
            <div class="item">
              <div class="news_content">
               <img src="images/Samosa.png" alt="Docotor">
               <div class="date_comment">
                  <span>22<small>apr</small></span>
                  <a href="#."><i class="icon-comment"></i> 5</a>
               </div>
               <div class="comment_text">
                 <h3><a href="#.">Aaallu Samosa</a></h3>
                 <p>Enjoy Delicious Food!</p>
               </div>
              </div>
            </div>
            <div class="item">
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
            </div>
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
          <li><a href="index.html">Home</a></li>
          <li><a href="food.html">Our Food</a></li>
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
<script src="js/jquery.themepunch.tools.min.js"></script>
<script src="js/jquery.themepunch.revolution.min.js"></script>
<script src="js/revolution.extension.layeranimation.min.js"></script>
<script src="js/revolution.extension.navigation.min.js"></script>
<script src="js/revolution.extension.parallax.min.js"></script>
<script src="js/revolution.extension.slideanims.min.js"></script>
<script src="js/revolution.extension.video.min.js"></script>
<script src="js/slider.js" type="text/javascript"></script>
<script src="js/owl.carousel.min.js" type="text/javascript"></script>
<script src="js/jquery.parallax-1.1.3.js"></script>
<script src="js/jquery.mixitup.min.js"></script>
<script src="js/jquery-countTo.js"></script>
<script src="js/jquery.appear.js"></script>  
<script src="js/jquery.fancybox.js"></script>
<script src="js/functions.js" type="text/javascript"></script>
 
</body>
</html>

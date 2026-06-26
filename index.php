<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <title>Productive families | Home</title>
    
    <!-- Font awesome -->
    <link href="css/font-awesome.css" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">   
    <!-- SmartMenus jQuery Bootstrap Addon CSS -->
    <link href="css/jquery.smartmenus.bootstrap.css" rel="stylesheet">
    <!-- Product view slider -->
    <link rel="stylesheet" type="text/css" href="css/jquery.simpleLens.css">    
    <!-- slick slider -->
    <link rel="stylesheet" type="text/css" href="css/slick.css">
    <!-- price picker slider -->
    <link rel="stylesheet" type="text/css" href="css/nouislider.css">
    <!-- Theme color -->
    <link id="switcher" href="css/theme-color/default-theme.css" rel="stylesheet">
    <!-- <link id="switcher" href="css/theme-color/bridge-theme.css" rel="stylesheet"> -->
    <!-- Top Slider CSS -->
    <link href="css/sequence-theme.modern-slide-in.css" rel="stylesheet" media="all">

    <!-- Main style sheet -->
    <link href="css/style.css" rel="stylesheet">    

    <!-- Google Font -->
    <link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
    

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  

  </head>
  <body> 
   <!-- wpf loader Two -->
    <div id="wpf-loader-two">          
      <div class="wpf-loader-two-inner">
        <span>Loading</span>
      </div>
    </div> 
    <!-- / wpf loader Two -->
    <script>
    /* Fallback: always hide the loading overlay even if jQuery/CDN is slow or fails */
    (function(){function h(){var l=document.getElementById('wpf-loader-two');if(l){l.style.transition='opacity .4s';l.style.opacity='0';setTimeout(function(){l.style.display='none';},400);}}window.addEventListener('load',h);document.addEventListener('DOMContentLoaded',function(){setTimeout(h,1200);});setTimeout(h,4000);})();
    </script>       
  <!-- SCROLL TOP BUTTON -->
    <a class="scrollToTop" href="#"><i class="fa fa-chevron-up"></i></a>
  <!-- END SCROLL TOP BUTTON -->


  <!-- Start header section -->
  <header id="aa-header">
    <!-- start header top  -->
    <div class="aa-header-top">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="aa-header-top-area">
              <!-- start header top left -->
              <div class="aa-header-top-left">
                
                
              </div>
              <!-- / header top left -->
              <div class="aa-header-top-right">
                <ul class="aa-head-top-nav-right">
                  <li><a href="clienthome.php">My Account</a></li>
                  <li class="hidden-xs"><a href="clientcart.php">My Cart</a></li>
                  <li><a href="" data-toggle="modal" data-target="#login-modal">Login</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- / header top  -->

    <!-- start header bottom  -->
    <div class="aa-header-bottom">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="aa-header-bottom-area">
              <!-- logo  -->
              <div class="aa-logo">
                <!-- Text based logo -->
                <a href="index.html">
                  <span class="fa fa-shopping-cart"></span>
                  <p>Productive <strong>Families</strong> <span>at your service</span></p>
                </a>
                <!-- img based logo -->
                <!-- <a href="index.html"><img src="img/logo.jpg" alt="logo img"></a> -->
              </div>
              <!-- / logo  -->
               <!-- cart box -->
              <div class="aa-cartbox">
                <a class="aa-cart-link" href="#">
                  <span class="fa fa-shopping-basket"></span>
                  <span class="aa-cart-title"></span>
                  <span class="aa-cart-notify"></span>
                </a>
             
              </div>
              <!-- / cart box -->
              <!-- search box -->
              
              <!-- / search box -->             
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- / header bottom  -->
  </header>
  <!-- / header section -->
  <!-- menu -->
  <section id="menu">
    <div class="container">
      <div class="menu-area">
        <!-- Navbar -->
        <div class="navbar navbar-default" role="navigation">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>          
          </div>
          <div class="navbar-collapse collapse">
            <!-- Left nav -->
            <ul class="nav navbar-nav">
              <li><a href="index.php">Home</a></li>
              <li><a href="#">Account <span class="caret"></span></a>
                <ul class="dropdown-menu"> 
                     <li><a href="accountadmin.php">Admin</a></li>
                    <li><a href="accountpro.php">Productive family</a></li>
                  <li><a href="accountclient.php">client</a></li>
                  
                  <li><a href="accountagent.php">Delivery Agent</a></li>
                                                                 
                  
                  
                </ul>
              </li>
              <li><a href="profamily.php">Productive families </a>
                
              </li>
                    
              <li><a href="#">Category <span class="caret"></span></a>
                <ul class="dropdown-menu">                
                   <li><a href="food.php">Food</a></li>
                  <li><a href="health.php">Health and Beauty</a></li>                
                  <li><a href="Accessories.php">Accessories</a></li>  
                    <li><a href="handicrafts.php">Handicrafts</a></li> 
                     <li><a href="clothes.php">Clothes</a></li>
                </ul>
              </li>
                 <li><a href="about.php">About us</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>       
    </div>
  </section>
  <!-- / menu -->
  <!-- Start slider -->
  <section id="aa-slider">
    <div class="aa-slider-area">
      <div id="sequence" class="seq">
        <div class="seq-screen">
          <ul class="seq-canvas">
            <!-- single slide item -->
            <li>
              <div class="seq-model">
                <img data-seq src="img/slider/1.jpg" alt="Men slide img" />
              </div>
              <div class="seq-title">
                               
                <h2 data-seq>Productive Families</h2>                
                <p data-seq>AT Your Service</p>
                
              </div>
            </li>
            <!-- single slide item -->
            <li>
              <div class="seq-model">
                <img data-seq src="img/slider/22.jpeg" alt="Wristwatch slide img" />
              </div>
              <div class="seq-title">
                                
                <h2 data-seq>Homemade Food</h2>                
                <p data-seq> Best Collection</p>
                
              </div>
            </li>
            <!-- single slide item -->
            <li>
              <div class="seq-model">
                <img data-seq src="img/slider/980.jpg" alt="Women Jeans slide img" />
              </div>
              <div class="seq-title">
                                
                <h2 data-seq>Health and Beauty</h2>                
                <p data-seq> Best Collection</p>
               
              </div>
            </li>
            <!-- single slide item -->           
            <li>
              <div class="seq-model">
                <img data-seq src="img/slider/7864.jpg" alt="Shoes slide img" />
              </div>
              <div class="seq-title">
                                
                <h2 data-seq>Accessories</h2>                
                <p data-seq> Best Collection</p>
                
              </div>
            </li>
            <!-- single slide item -->  
             <li>
              <div class="seq-model">
                <img data-seq src="img/slider/768.jpg" alt="Male Female slide img" />
              </div>
              <div class="seq-title">
                                
                <h2 data-seq>Handicrafts </h2>                
                <p data-seq> Best Collection</p>
                
              </div>
            </li>                   
          </ul>
        </div>
        <!-- slider navigation btn -->
        <fieldset class="seq-nav" aria-controls="sequence" aria-label="Slider buttons">
          <a type="button" class="seq-prev" aria-label="Previous"><span class="fa fa-angle-left"></span></a>
          <a type="button" class="seq-next" aria-label="Next"><span class="fa fa-angle-right"></span></a>
        </fieldset>
      </div>
    </div>
  </section>
  <!-- / slider -->
  <!-- Start Promo section -->

  <!-- / Promo section -->
  <!-- Products section -->
  <section id="aa-product">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="row">
            <div class="aa-product-area">
              <div class="aa-product-inner">
                <!-- start prduct navigation -->
                 <ul class="nav nav-tabs aa-products-tab">
                    <li class="active"><a href="#food" data-toggle="tab">Food</a></li>
                    <li><a href="#Health" data-toggle="tab">Health and Beauty</a></li>
                    <li><a href="#Accessories" data-toggle="tab">Accessories</a></li>
                    <li><a href="#Clothes" data-toggle="tab">Clothes</a></li>
                     <li><a href="#Hand" data-toggle="tab">Handicrafts</a></li>
                  </ul>
                  <!-- Tab panes -->
                  <div class="tab-content">
                    <!-- Start men product category -->
                    <div class="tab-pane fade in active" id="food">
                      <ul class="aa-product-catg">
                        <!-- start single product item -->
                          <?php 
                    
require 'config.php';
   $type= "food";                  
$result = mysqli_query($con,"SELECT * FROM product where catname='$type'")
or die(mysqli_error());
// display data in table
while($row = mysqli_fetch_array( $result )) {
// echo out the contents of each row into a table
 $_SESSION['productno']=$row['productno'];
?>
                        <li>
                          <figure>
                            <a class="aa-product-img" href="productdetailclient.php?productno=<?php echo htmlentities($row['productno']);?>"><img src="<?php echo htmlentities($row['image']);?>" alt="polo shirt img"></a>
                            <a class="aa-add-card-btn"href="addtocart.php?productno=<?php echo htmlentities($row['productno']);?>"><span class="fa fa-shopping-cart"></span>Add To Cart</a>
                              <figcaption>
                              <h4 class="aa-product-title"><a href="#"><?php echo htmlentities($row['productname']);?></a></h4>
                              <span class="aa-product-price">SR <?php echo htmlentities($row['price']);?></span><span class="aa-product-price"></span>
                            </figcaption>
                          </figure>                        
                          <div class="aa-product-hvr-content">
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><span class="fa fa-exchange"></span></a>
                            <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View" data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>                          
                          </div>
                          <!-- product badge -->
                          <span class="aa-badge aa-sale" href="#"><?php echo htmlentities($row['proid']);?></span>
                        </li>
                          <?php
}
                       
?>
                        
                        
                        <!-- start single product item -->
                        
                        <!-- start single product item -->
                           
                        
                      
                        <!-- start single product item -->
                                            
                      </ul> <center>
                      <a class="aa-browse-btn" href="#">Browse all Product <span class="fa fa-long-arrow-right"></span></a> </center>
                    </div>
                    <!-- / men product category -->
                    <!-- start women product category -->
                    <div class="tab-pane fade" id="Health">
                      <ul class="aa-product-catg">
                        <!-- start single product item -->
                          <?php 
                    
require 'config.php';
   $type= "Health and Beauty";                  
$result = mysqli_query($con,"SELECT * FROM product where catname='$type'")
or die(mysqli_error());
// display data in table
while($row = mysqli_fetch_array( $result )) {
// echo out the contents of each row into a table
 $_SESSION['productno']=$row['productno'];
?>
                        <li>
                          <figure>
                         <a class="aa-product-img" href="productdetailclient.php?productno=<?php echo htmlentities($row['productno']);?>"><img src="<?php echo htmlentities($row['image']);?>" alt="polo shirt img"></a>
                            <a class="aa-add-card-btn"href="addtocart.php?productno=<?php echo htmlentities($row['productno']);?>"><span class="fa fa-shopping-cart"></span>Add To Cart</a>
                              <figcaption>
                              <h4 class="aa-product-title"><a href="#"><?php echo htmlentities($row['productname']);?></a></h4>
                              <span class="aa-product-price">SR <?php echo htmlentities($row['price']);?></span><span class="aa-product-price"></span>
                            </figcaption> 
                                 </figure>                        
                          <div class="aa-product-hvr-content">
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><span class="fa fa-exchange"></span></a>
                            <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View" data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>                            
                          </div>
                          <!-- product badge -->
                           <span class="aa-badge aa-sale" href="#"><?php echo htmlentities($row['proid']);?></span>
                        </li>
                          <?php
}
                       
?>
                        
                        <!-- start single product item -->
                       
                        
                        
                          
                           
                        <!-- start single product item -->
                        
                        <!-- start single product item -->
                                               
                      </ul>
                     <center>
                      <a class="aa-browse-btn" href="#">Browse all Product <span class="fa fa-long-arrow-right"></span></a> </center>
                        <br>
                    </div>
                    <!-- / women product category -->
                    <!-- start sports product category -->
                    <div class="tab-pane fade" id="Accessories">
                      <ul class="aa-product-catg">
                        <!-- start single product item -->
                        <?php 
                    
require 'config.php';
   $type= "Accessories";                  
$result = mysqli_query($con,"SELECT * FROM product where catname='$type'")
or die(mysqli_error());
// display data in table
while($row = mysqli_fetch_array( $result )) {
// echo out the contents of each row into a table
 $_SESSION['productno']=$row['productno'];
?>
                        <li>
                         <figure>
                          <a class="aa-product-img" href="productdetailclient.php?productno=<?php echo htmlentities($row['productno']);?>"><img src="<?php echo htmlentities($row['image']);?>" alt="polo shirt img"></a>
                            <a class="aa-add-card-btn"href="addtocart.php?productno=<?php echo htmlentities($row['productno']);?>"><span class="fa fa-shopping-cart"></span>Add To Cart</a>
                              <figcaption>
                              <h4 class="aa-product-title"><a href="#"><?php echo htmlentities($row['productname']);?></a></h4>
                              <span class="aa-product-price">SR <?php echo htmlentities($row['price']);?></span><span class="aa-product-price"></span>
                            </figcaption> 
                                 </figure>                         
                          <div class="aa-product-hvr-content">
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><span class="fa fa-exchange"></span></a>
                            <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View" data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>                            
                          </div>
                          <!-- product badge -->
                           <span class="aa-badge aa-sale" href="#"><?php echo htmlentities($row['proid']);?></span>
                        </li>
                          <?php
}
                       
?>
                        <!-- start single product item -->
                        <li>
                          <figure>
                            <a class="aa-product-img" href="#"><img src="img/789.jpg" alt="polo shirt img"></a>
                            <a class="aa-add-card-btn"href="#"><span class="fa fa-shopping-cart"></span>Add To Cart</a>
                            <figcaption>
                              <h4 class="aa-product-title"><a href="#">Ring</a></h4>
                              <span class="aa-product-price">SR45.50</span>
                            </figcaption>
                          </figure>                         
                          <div class="aa-product-hvr-content">
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><span class="fa fa-exchange"></span></a>
                            <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View" data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>
                          </div>
                          <!-- product badge -->
                           <span class="aa-badge aa-sold-out" href="#">Sold Out!</span>
                        </li>
                        <!-- start single product item -->
                        <li>
                          <figure>
                            <a class="aa-product-img" href="#"><img src="img/789.jpg" alt="polo shirt img"></a>
                            <a class="aa-add-card-btn"href="#"><span class="fa fa-shopping-cart"></span>Add To Cart</a>
                            <figcaption>
                              <h4 class="aa-product-title"><a href="#">Ring</a></h4>
                              <span class="aa-product-price">SR45.50</span>
                            </figcaption>
                          </figure>                          
                          <div class="aa-product-hvr-content">
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><span class="fa fa-exchange"></span></a>
                            <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View" data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>
                          </div>
                        </li>
                        <!-- start single product item -->
                       
                        <!-- start single product item -->
                        
                        <!-- start single product item -->
                        <li>
                          <figure>
                            <a class="aa-product-img" href="#"><img src="img/789.jpg" alt="polo shirt img"></a>
                            <a class="aa-add-card-btn"href="#"><span class="fa fa-shopping-cart"></span>Add To Cart</a>
                            <figcaption>
                              <h4 class="aa-product-title"><a href="#">Ring</a></h4>
                              <span class="aa-product-price">SR45.50</span>
                            </figcaption>
                          </figure>                         
                          <div class="aa-product-hvr-content">
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><span class="fa fa-exchange"></span></a>
                            <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View" data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>
                          </div>
                        </li>
                        <!-- start single product item -->
                        
                        <!-- start single product item -->
                        <li>
                          <figure>
                            <a class="aa-product-img" href="#"><img src="img/789.jpg" alt="polo shirt img"></a>
                            <a class="aa-add-card-btn"href="#"><span class="fa fa-shopping-cart"></span>Add To Cart</a>
                            <figcaption>
                              <h4 class="aa-product-title"><a href="#">Ring</a></h4>
                              <span class="aa-product-price">SR45.50</span>
                            </figcaption>
                          </figure>                         
                          <div class="aa-product-hvr-content">
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><span class="fa fa-exchange"></span></a>
                            <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View" data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>
                          </div>
                          <!-- product badge -->
                           <span class="aa-badge aa-sold-out" href="#">Sold Out!</span>
                        </li>                        
                      </ul>
                        <center>
                      <a class="aa-browse-btn" href="#">Browse all Product <span class="fa fa-long-arrow-right"></span></a> </center>
                        <br>
                    </div>
                    <!-- / sports product category -->
                      
                    <!-- start electronic product category -->
                    <div class="tab-pane fade" id="Clothes">
                       <ul class="aa-product-catg">
                        <!-- start single product item -->
                           
                        <?php 
                    
require 'config.php';
   $type= "Clothes";                  
$result = mysqli_query($con,"SELECT * FROM product where catname='$type'")
or die(mysqli_error());
// display data in table
while($row = mysqli_fetch_array( $result )) {
// echo out the contents of each row into a table
 $_SESSION['productno']=$row['productno'];
?>
                        <li>
                             <figure>
                            <a class="aa-product-img" href="productdetailclient.php?productno=<?php echo htmlentities($row['productno']);?>"><img src="<?php echo htmlentities($row['image']);?>" alt="polo shirt img"></a>
                            <a class="aa-add-card-btn"href="addtocart.php?productno=<?php echo htmlentities($row['productno']);?>"><span class="fa fa-shopping-cart"></span>Add To Cart</a>
                              <figcaption>
                              <h4 class="aa-product-title"><a href="#"><?php echo htmlentities($row['productname']);?></a></h4>
                              <span class="aa-product-price">SR <?php echo htmlentities($row['price']);?></span><span class="aa-product-price"></span>
                            </figcaption> 
                                 </figure> 
                           <div class="aa-product-hvr-content">
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><span class="fa fa-exchange"></span></a>
                            <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View" data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>
                          </div>
                          <!-- product badge -->
                           <span class="aa-badge aa-sale" href="#"><?php echo htmlentities($row['proid']);?></span>
                        </li>
                          <?php
}
                       
?>
                        <!-- start single product item -->
                        <li>
                          <figure>
                            <a class="aa-product-img" href="#"><img src="img/908.jpg" alt="polo shirt img"></a>
                            <a class="aa-add-card-btn"href="#"><span class="fa fa-shopping-cart"></span>Add To Cart</a>
                            <figcaption>
                              <h4 class="aa-product-title"><a href="#">Evening Dress</a></h4>
                              <span class="aa-product-price">SR450.50</span>
                            </figcaption>
                          </figure>                         
                          <div class="aa-product-hvr-content">
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><span class="fa fa-exchange"></span></a>
                            <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View" data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>
                          </div>
                          <!-- product badge -->
                           <span class="aa-badge aa-sold-out" href="#">Sold Out!</span>
                        </li>
                        <!-- start single product item -->
                       
                        
                        <!-- start single product item -->
                        <li>
                          <figure>
                            <a class="aa-product-img" href="#"><img src="img/908.jpg" alt="polo shirt img"></a>
                            <a class="aa-add-card-btn"href="#"><span class="fa fa-shopping-cart"></span>Add To Cart</a>
                            <figcaption>
                              <h4 class="aa-product-title"><a href="#">Evening Dress</a></h4>
                              <span class="aa-product-price">SR450.50</span>
                            </figcaption>
                          </figure> >                         
                          <div class="aa-product-hvr-content">
                           <a href="#" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><span class="fa fa-exchange"></span></a>
                            <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View" data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>
                          </div>
                        </li>
                        <!-- start single product item -->
                       
                        <!-- start single product item -->
                       
                        <!-- start single product item -->
                        
                          <!-- product badge -->
                           <span class="aa-badge aa-sold-out" href="#">Sold Out!</span>
                        </li>                        
                      </ul>
                      <center>
                      <a class="aa-browse-btn" href="#">Browse all Product <span class="fa fa-long-arrow-right"></span></a> </center>
                        <br>
                    </div>
                    <!-- / electronic product category -->
                      <div class="tab-pane fade" id="Hand">
                       <ul class="aa-product-catg">
                        <!-- start single product item -->
                           
                        <?php 
                    
require 'config.php';
   $type= "Handicrafts";                  
$result = mysqli_query($con,"SELECT * FROM product where catname='$type'")
or die(mysqli_error());
// display data in table
while($row = mysqli_fetch_array( $result )) {
// echo out the contents of each row into a table
 $_SESSION['productno']=$row['productno'];
?>
                        <li>
                            <figure>
                          <a class="aa-product-img" href="productdetailclient.php?productno=<?php echo htmlentities($row['productno']);?>"><img src="<?php echo htmlentities($row['image']);?>" alt="polo shirt img"></a>
                            <a class="aa-add-card-btn"href="addtocart.php?productno=<?php echo htmlentities($row['productno']);?>"><span class="fa fa-shopping-cart"></span>Add To Cart</a>
                              <figcaption>
                              <h4 class="aa-product-title"><a href="#"><?php echo htmlentities($row['productname']);?></a></h4>
                              <span class="aa-product-price">SR <?php echo htmlentities($row['price']);?></span><span class="aa-product-price"></span>
                            </figcaption> 
                                 </figure> 
                           <div class="aa-product-hvr-content">
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><span class="fa fa-exchange"></span></a>
                            <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View" data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>
                          </div>
                          <!-- product badge -->
                           <span class="aa-badge aa-sale" href="#"><?php echo htmlentities($row['proid']);?></span>
                        </li>
                          <?php
}
                       
?>
                        <!-- start single product item -->
                        <li>
                          <figure>
                            <a class="aa-product-img" href="#"><img src="img/098.jpg" alt="polo shirt img"></a>
                            <a class="aa-add-card-btn"href="#"><span class="fa fa-shopping-cart"></span>Add To Cart</a>
                            <figcaption>
                              <h4 class="aa-product-title"><a href="#">Baby bed</a></h4>
                              <span class="aa-product-price">SR100</span>
                            </figcaption>
                          </figure>                         
                          <div class="aa-product-hvr-content">
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><span class="fa fa-exchange"></span></a>
                            <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View" data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>
                          </div>
                          <!-- product badge -->
                           <span class="aa-badge aa-sold-out" href="#">Sold Out!</span>
                        </li>
                        <!-- start single product item -->
                       
                        
                        <!-- start single product item -->
                        <li>
                          <figure>
                            <a class="aa-product-img" href="#"><img src="img/098.jpg" alt="polo shirt img"></a>
                            <a class="aa-add-card-btn"href="#"><span class="fa fa-shopping-cart"></span>Add To Cart</a>
                            <figcaption>
                              <h4 class="aa-product-title"><a href="#">Baby bed</a></h4>
                              <span class="aa-product-price">SR100</span>
                            </figcaption>
                          </figure>                          
                          <div class="aa-product-hvr-content">
                           <a href="#" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><span class="fa fa-exchange"></span></a>
                            <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View" data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>
                          </div>
                        </li>
                        <!-- start single product item -->
                        <li>
                          <figure>
                            <a class="aa-product-img" href="#"><img src="img/098.jpg" alt="polo shirt img"></a>
                            <a class="aa-add-card-btn"href="#"><span class="fa fa-shopping-cart"></span>Add To Cart</a>
                            <figcaption>
                              <h4 class="aa-product-title"><a href="#">Baby bed</a></h4>
                              <span class="aa-product-price">SR100</span>
                            </figcaption>
                          </figure>                         
                          <div class="aa-product-hvr-content">
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><span class="fa fa-exchange"></span></a>
                            <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View" data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>
                          </div>
                        </li>
                        <!-- start single product item -->
                        
                        <!-- start single product item -->
                                                
                      </ul>
                      <center>
                      <a class="aa-browse-btn" href="#">Browse all Product <span class="fa fa-long-arrow-right"></span></a> </center>
                        <br>
                    </div>
                  </div>
                  <!-- quick view modal -->                  
                 <!-- / quick view modal -->              
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- / Products section -->
  <!-- banner section -->
  
  <!-- popular section -->
  
  <!-- / popular section -->
  <!-- Support section -->
  <section id="aa-support">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="aa-support-area">
            <!-- single support -->
            <div class="col-md-4 col-sm-4 col-xs-12">
              <div class="aa-support-single">
                <span class="fa fa-truck"></span>
                <h4>SHIPPING</h4>
                <P>Shipping to anywhere in the Kingdom</P>
              </div>
            </div>
            <!-- single support -->
            <div class="col-md-4 col-sm-4 col-xs-12">
              <div class="aa-support-single">
                <span class="fa fa-clock-o"></span>
                <h4>24-hour service</h4>
                <P>We can serve you anytime and anywhere</P>
              </div>
            </div>
            <!-- single support -->
            <div class="col-md-4 col-sm-4 col-xs-12">
              <div class="aa-support-single">
                <span class="fa fa-phone"></span>
                <h4>Call us</h4>
                <P>Our services are always available</P>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- / Support section -->
  <!-- Testimonial -->
  <section id="aa-testimonial">  
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="aa-testimonial-area">
            <ul class="aa-testimonial-slider">
              <!-- single slide -->
              <li>
                <div class="aa-testimonial-single">
                <img class="aa-testimonial-img" src="img/22.jpg" alt="testimonial img">
                  <span class="fa fa-quote-left aa-testimonial-quote"></span>
                  <p>The Productive Families Project aims mainly to support low-income families to improve their own resources and transform them from dependent families into productive families that contribute to economic development</p>
                  <div class="aa-testimonial-info">
                    
                  </div>
                </div>
              </li>
              <!-- single slide -->
              
               <!-- single slide -->
             
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- / Testimonial -->

  <!-- Latest Blog -->
  <section id="aa-latest-blog">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="aa-latest-blog-area">
            <h2>Agants Cars</h2>
            <div class="row">
              <!-- single latest blog -->
               <?php 
                    
require 'config.php';
                    
$result = mysqli_query($con,"SELECT * FROM agentcar ORDER BY carid DESC LIMIT 3")
or die(mysqli_error());
// display data in table
while($row = mysqli_fetch_array( $result )) {
// echo out the contents of each row into a table
 
?>
              <div class="col-md-4 col-sm-4">
                   
                <div class="aa-latest-blog-single">
                    
                  <figure class="aa-blog-img">                    
                    <a href="#"><img src="<?php echo htmlentities($row['carimage']);?>" alt="img"></a>  
                      <figcaption class="aa-blog-img-caption">
                      <span href="#"><i class="fa fa-eye"></i></span>
                      <a href="#"><i class="fa fa-thumbs-o-up"></i></a>
                      <a href="#"><i class="fa fa-comment-o"></i></a>
                      <span href="#"><i class="fa fa-clock-o"></i></span>
                    </figcaption>                          
                  </figure>
                  <div class="aa-blog-info">
                    <h3 class="aa-blog-title"><a href="#"><?php echo htmlentities($row['kind']);?></a><?php echo htmlentities($row['model']);?></h3>
                    <p><?php echo htmlentities($row['carnumber']);?></p> 
                                    </div>
                    
                </div>
                  
                </div>
                <?php
}
                       
?>     
             
              
             
              <!-- single latest blog -->
              
            </div>
          </div>
        </div>    
      </div>
    </div>
  </section>
  <!-- / Latest Blog -->

  <!-- Client Brand -->
 
  <!-- / Client Brand -->

  <!-- Subscribe section -->
  
  <!-- / Subscribe section -->

  <!-- footer -->  
  <footer id="aa-footer">
    <!-- footer bottom -->
    
    <!-- footer-bottom -->
    <div class="aa-footer-bottom">
      <div class="container">
        <div class="row">
        <div class="col-md-12">
          <div class="aa-footer-bottom-area">
            <p>Designed by <a href="http://www.markups.io/">MarkUps.io</a></p>
            <div class="aa-footer-payment">
              <span class="fa fa-cc-mastercard"></span>
              <span class="fa fa-cc-visa"></span>
              <span class="fa fa-paypal"></span>
              <span class="fa fa-cc-discover"></span>
            </div>
          </div>
        </div>
      </div>
      </div>
    </div>
  </footer>
  <!-- / footer -->
<?php	
require 'config.php';
if (isset($_POST['log']))
{
$userkind=$_POST['userkind'];
$user=$_POST['username'];
$pass=$_POST['password'];
if ($userkind=="4"){
 $sql="SELECT * FROM admin where username='$user' AND password='$pass' ";
 $result=mysqli_query($con,$sql);
 $numrows=mysqli_num_rows($result);
 if ($numrows == 1 )
 {
  $row=mysqli_fetch_assoc($result);
  $adno=$row['adno'];
    
  $_SESSION['adno'] =$adno;
     ?>
<script type="text/javascript">
window.location.href = 'adminhome.php?success';
</script>
<?php
 
 }
 else
 {
 echo "<script>alert('username or password false');</script>";
 }

}
    
if ($userkind=="1"){
 $sql="SELECT * FROM profamily where username='$user' AND password='$pass' ";
 $result=mysqli_query($con,$sql);
 $numrows=mysqli_num_rows($result);
 if ($numrows == 1 )
 {
  $row=mysqli_fetch_assoc($result);
  $proid=$row['proid'];
  $_SESSION['proid'] =$proid;
     
     ?>
<script type="text/javascript">
window.location.href = 'profamilyhome.php?success';
</script>
<?php
 
 }
 else
 {
 echo "<script>alert('username or password false');</script>";
 }

}
 if ($userkind=="2") {
 $sql1="SELECT * from client where username='$user' AND password='$pass' ";
 $result1=mysqli_query($con,$sql1);
 $numrows=mysqli_num_rows($result1);
 if ($numrows == 1 )
 {
  $row=mysqli_fetch_assoc($result1);
 $clientid=$row['clientid'];        
 $_SESSION['clientid'] =$clientid;
  ?>
<script type="text/javascript">
window.location.href = 'clienthome.php?success';
</script>
<?php

  
 }
 else
 {
echo "<script>alert('username or password false');</script>";
 }

}

if ($userkind=="3") {
 $sql1="SELECT * from deliveryagent where username='$user' AND password='$pass' ";
 $result1=mysqli_query($con,$sql1);
 $numrows=mysqli_num_rows($result1);
 if ($numrows == 1 )
 {
  $row=mysqli_fetch_assoc($result1);
 $agentid=$row['agentid'];        
 $_SESSION['agentid'] =$agentid;
  ?>
<script type="text/javascript">
window.location.href = 'agenthome.php?success';
</script>
<?php

  
 }
 else
 {
echo "<script>alert('username or password false');</script>";
 }

} 

}


?>
  <!-- Login Modal -->  
  <div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">                      
        <div class="modal-body">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4>Login or Register</h4>
          <form class="aa-login-form" action="" method="post">
              <label for="">Role<span>*</span></label>
                     
                     <select name="userkind" required style=" border: 1px solid #ccc;
  color: #999;
  height: 40px;
  padding: 10px;
  width: 100%; " >
                                  <option value="0">user role</option>
                                  <option value="4">Admin</option>
                                  <option value="1">Productive family</option>
                                  <option value="2">client</option>
                                  <option value="3">Delivery agent</option>
                                  
                                  
                                </select>
            <label for="">Username or Email address<span>*</span></label>
            <input type="text" placeholder="Username or email" name="username" required>
            <label for="">Password<span>*</span></label>
            <input type="password" placeholder="Password" name="password" required>
            <button class="aa-browse-btn" type="submit" name="log">Login</button>
            
            <p class="aa-lost-password"><a href="#">Lost your password?</a></p>
            <div class="aa-register-now">
              Don't have an account?<a href="accountclient.php">Register now!</a>
            </div>
          </form>
        </div>                        
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div>    

  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="js/bootstrap.js"></script>  
  <!-- SmartMenus jQuery plugin -->
  <script type="text/javascript" src="js/jquery.smartmenus.js"></script>
  <!-- SmartMenus jQuery Bootstrap Addon -->
  <script type="text/javascript" src="js/jquery.smartmenus.bootstrap.js"></script>  
  <!-- To Slider JS -->
  <script src="js/sequence.js"></script>
  <script src="js/sequence-theme.modern-slide-in.js"></script>  
  <!-- Product view slider -->
  <script type="text/javascript" src="js/jquery.simpleGallery.js"></script>
  <script type="text/javascript" src="js/jquery.simpleLens.js"></script>
  <!-- slick slider -->
  <script type="text/javascript" src="js/slick.js"></script>
  <!-- Price picker slider -->
  <script type="text/javascript" src="js/nouislider.js"></script>
  <!-- Custom js -->
  <script src="js/custom.js"></script> 

  </body>
</html>
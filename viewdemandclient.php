<?php
session_start();
$clientid=$_SESSION['clientid'];
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <title>Productive Family | Request Details</title>
    
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
                <!-- start language -->
                
                <!-- / language -->

                <!-- start currency -->
                
                <!-- / currency -->
                <!-- start cellphone -->
                
                <!-- / cellphone -->
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
                  <p>Productive <strong>families</strong> <span>at your service</span></p>
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
 
  <!-- catg header banner section -->
  <section id="aa-catg-head-banner">
   <img src="img/fashion/1.jpg" alt="fashion img">
   <div class="aa-catg-head-banner-area">
     <div class="container">
      <div class="aa-catg-head-banner-content">
        <h2>Request 
          details</h2>
        <ol class="breadcrumb">
          <li><a href="index.html">Home</a></li>         
          <li><a href="clienthome.php">Account</a></li>
          
        </ol>
      </div>
     </div>
   </div>
  </section>
  <!-- / catg header banner section -->

  <!-- product category -->
  <section id="aa-product-details">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="aa-product-details-area">
            <div class="aa-product-details-content">
              <div class="row">
                <!-- Modal view slider -->
                 <?php 
                    
require 'config.php';
$clientid=$_SESSION['clientid'] ;
    $productno=$_GET['productno'];
   $result1 = mysqli_query($con,"SELECT * FROM product where productno='$productno' ")
or die(mysqli_error());
while($row = mysqli_fetch_array( $result1 )) { 
?> 
                <div class="col-md-5 col-sm-5 col-xs-12">                              
                  <div class="aa-product-view-slider">                                
                    <div id="demo-1" class="simpleLens-gallery-container">
                      <div class="simpleLens-container">
                        <div class="simpleLens-big-image-container"><a data-lens-image="<?php echo htmlentities($row['image']);?>" class="simpleLens-lens-image"><img src="<?php echo htmlentities($row['image']);?>" class="simpleLens-big-image"></a></div>
                      </div>
                     <?php 
                                             }
                  ?>
                    </div>
                  </div>
                </div>
                <!-- Modal view content -->
               <?php 
                    
require 'config.php';
$clientid=$_SESSION['clientid'] ;
$demandno=$_GET['demandno'];
$result = mysqli_query($con,"SELECT * FROM demand where demandno='$demandno' ")
or die(mysqli_error());
while($row = mysqli_fetch_array( $result )) {
// echo out the contents of each row into a table
    $productno=$row['productno'];
    ?>
                <div class="col-md-7 col-sm-7 col-xs-12">
                  <div class="aa-product-view-content">
                    <h3>Request No : <?php echo htmlentities($row['demandno']);?></h3>
                      <h3>Product Name : <?php echo htmlentities($row['productname']);?></h3>
                      <form method="post" action="sendshipping.php" enctype="multipart/form-data">
                    <div class="aa-price-block">
                      <span class="aa-product-view-price">Price </span>
                      <p class="aa-product-avilability"><?php echo htmlentities($row['price']);?><span></span></p>
                    </div>
                    
                    <h4>Units : <?php echo htmlentities($row['unitsno']);?></h4>
                    <div class="aa-prod-view-size">
                     
                    </div>
                    <div class="aa-prod-quantity">              
                      <p class="aa-prod-category">
                        Total: <a href="#"><?php echo htmlentities($row['total']);?></a>
                      </p>
                    
                        <p class="aa-prod-category">
                        Status: <a href="#"><?php echo htmlentities($row['status']);?></a>
                      </p>
                        <p class="aa-prod-category">
                        Date: <a href="#"><?php echo htmlentities($row['ddate']);?></a>
                      </p>
                    </div>
                   
                      </form>
                  </div>
                </div>
              </div>
            </div>
              <?php 
}?>
            <div class="aa-product-details-bottom">
              <ul class="nav nav-tabs" id="myTab2">
                <li><a href="#description" data-toggle="tab">Shipping Address</a></li>
                               
              </ul>
               <?php 
                    
require 'config.php';
$clientid=$_SESSION['clientid'] ;
$result = mysqli_query($con,"SELECT * FROM client where clientid='$clientid' ")
or die(mysqli_error());
while($row = mysqli_fetch_array( $result )) {
// echo out the contents of each row into a table
    
    ?>  
                 <ul class="nav nav-tabs" id="myTab2">
                <li><a href="#description" data-toggle="tab"> Client Name :<?php echo htmlentities($row['cname']);?></a></li>
                  <li><a href="#description" data-toggle="tab">Phone no :<?php echo htmlentities($row['phoneno']);?></a></li>             
              </ul>
<?php 
}?>
     
              <!-- Tab panes -->
              <?php 
                    
require 'config.php';
$clientid=$_SESSION['clientid'] ;
$result = mysqli_query($con,"SELECT * FROM clientaddress where clientid='$clientid' ")
or die(mysqli_error());
while($row = mysqli_fetch_array( $result )) {
// echo out the contents of each row into a table
    
    ?>  
            <div class="tab-content">
                <div class="tab-pane fade in active" id="description">
                    <p>City : <?php echo htmlentities($row['city']);?><span> Street : <?php echo htmlentities($row['street']);?></span>  </p>
                  <iframe src="<?php echo htmlentities($row['location']);?>" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
                         
              </div>
                <?php 
}?>
            </div>
            <!-- Related product -->
           

  <!-- Subscribe section -->
 
  <!-- / Subscribe section -->

  <!-- footer -->  
  <footer id="aa-footer">
    <!-- footer bottom -->
    <div class="aa-footer-top">
     <div class="container">
        <div class="row">
        
      </div>
     </div>
    </div>
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
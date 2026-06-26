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
    <title>Productive Families | Edit Demand</title>
    
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
                    <li class="hidden-xs"><a href="index.php">Home</a></li>
                  <li><a href="clienthome.php">My Account</a></li>
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
                  <p>Prodcutive <strong>families</strong> <span>at your service</span></p>
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
  
  <!-- / catg header banner section -->
<?php 
require 'config.php';
$demandno= $_GET['demandno'];         
$result = mysqli_query($con,"SELECT * FROM demand where demandno= '$demandno' ")
or die(mysqli_error());
// display data in table
while($row = mysqli_fetch_array( $result )) {
// echo out the contents of each row into a table
?>
 <!-- Cart view section -->
 <section id="aa-myaccount">
   <div class="container">
     <div class="row">
       <div class="col-md-12">
        <div class="aa-myaccount-area">         
            <div class="row">
              <div class="col-md-6">
                <div class="aa-myaccount-login">
                <h4>Edit  Demand</h4>
                              <form action=""  method="post" class="aa-login-form">
                     
                      
                    <label for="">Number<span>*</span></label>
                    <input type="text" value="<?php echo htmlentities($row['productno']);?>" placeholder="name" name="pno">
                    <label for="">Name<span>*</span></label>
                    <input type="text" value="<?php echo htmlentities($row['productname']);?>" placeholder="name" name="name">
                     <label for="">Price<span>*</span></label>
                    <input type="text" value="<?php echo htmlentities($row['price']);?>" placeholder="Price" name="price">
                     
                                        <label for="">Units No<span>*</span></label>
                    <input type="text" value="<?php echo htmlentities($row['unitsno']);?>" placeholder="properties" name="unitsno">
                   
                                  <label for="">Total<span>*</span></label>
                    <input type="text" placeholder="properties" value="<?php echo htmlentities($row['total']);?>" name="total">
                    <button type="submit" name="add" class="aa-browse-btn">Edit Demand</button>  
                                  <?php
}
                      
?>
                  </form>
                </div>
              </div>
              <div class="col-md-6">
                <div class="aa-myaccount-register"> 
                    <br>
                 <img src="img/01.jpg" width="500" height="500"  >
                </div>
              </div>
            </div>          
         </div>
       </div>
     </div>
   </div>
 </section>
 <!-- / Cart view section -->
<?php
                        
require 'config.php';

if (isset($_POST['add']))
{
    $demandno= $_GET['demandno'];
$price=$_POST['price'];
$unitsno=$_POST['unitsno'];
$total=$price * $unitsno;

$sql="update demand set unitsno='$unitsno',total='$total' where demandno='$demandno'";
	mysqli_query($con,$sql);
	echo "<script>alert('Successfully update demand ');</script>";
    	
?>
<script type="text/javascript">
window.location.href = 'clienthome.php?success';
</script>
<?php


}


?> 
  <!-- footer -->  
  <footer id="aa-footer">
    <!-- footer bottom -->
    <div class="aa-footer-top">
     <div class="container">
        
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
          <form class="aa-login-form" action="">
              <label for="">Role<span>*</span></label>
                     
                     <select name="utype" required style=" border: 1px solid #ccc;
  color: #999;
  height: 40px;
  padding: 10px;
  width: 100%; " >
                                  <option value="0">user role</option>
                                  <option value="1">Productive family</option>
                                  <option value="2">client</option>
                                  <option value="3">Delivery agent</option>
                                  <option value="4">Admin</option>
                                  
                                </select>
            <label for="">Username or Email address<span>*</span></label>
            <input type="text" placeholder="Username or email">
            <label for="">Password<span>*</span></label>
            <input type="password" placeholder="Password">
            <button class="aa-browse-btn" type="submit">Login</button>
            
            <p class="aa-lost-password"><a href="#">Lost your password?</a></p>
            <div class="aa-register-now">
              Don't have an account?<a href="account.html">Register now!</a>
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
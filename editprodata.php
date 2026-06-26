<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <title>Productive Families | Account Page</title>
    
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
              <!-- / header top left -->
              <div class="aa-header-top-right">
                 <ul class="aa-head-top-nav-right">
                    <li class="hidden-xs"><a href="index.php">Home</a></li>
                  <li><a href="profamilyhome.php">My Account</a></li>
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
                  <p>Prodcutive <strong>Families</strong> <span>at your service</span></p>
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
$proid= $_GET['proid'];         
$result = mysqli_query($con,"SELECT * FROM profamily where proid= '$proid' ")
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
                <h4></h4>
                 <img src="img/343.jpg" width="500" height="600">
                </div>
              </div>
              <div class="col-md-6">
                <div class="aa-myaccount-register">                 
                 <h4>Productive family Edit Information</h4>
                 <form action="" class="aa-login-form" method="post">
                     <label for="">City<span>*</span></label>
                     
                     <select name="city" required style=" border: 1px solid #ccc;
  color: #999;
  height: 40px;
  padding: 10px;
  width: 100%; " >
                                  <option value="<?php echo htmlentities($row['city']);?>"><?php echo htmlentities($row['city']);?></option>
                                  <option value="Arar">ARAR</option>
                                  <option value="Riyade">Riyade</option>
                                  <option value="Macca"> Macca</option>
                                  <option value="Elmadena">El Madena</option>
                                  
                                </select>
                     <label for="">Sex<span>*</span></label>
                     
                     <select name="kind" required style=" border: 1px solid #ccc;
  color: #999;
  height: 40px;
  padding: 10px;
  width: 100%; " >
                         <option value="<?php echo htmlentities($row['kind']);?>"><?php echo htmlentities($row['kind']);?></option>         
                         <option value="Male">Male</option>
                                  <option value="Femail">Female</option>
                                                                    
                                </select>
                     
                    <label for="">Name<span>*</span></label>
                    <input type="text" placeholder="name" value="<?php echo htmlentities($row['proname']);?>" name="name" required>
                     <label for="">Summary<span>*</span></label>
                     <div class="form-group">                        
                      <textarea class="form-control" rows="3"  placeholder="summary" name="summary"><?php echo htmlentities($row['summary']);?></textarea>
                    </div>
                     <label for="">Phone number<span>*</span></label>
                    <input type="tel" placeholder="Enter correct phone number" value="<?php echo htmlentities($row['phoneno']);?>" name="phone" pattern="[05]{2}[0-9]{4}[0-9]{4}" required style=" border: 1px solid #ccc;
  color: #999;
  height: 40px;
  padding: 10px;
  width: 100%; " >
                    <label for="">Username or Email address<span>*</span></label>
                    <input type="text" placeholder="Username or email" value="<?php echo htmlentities($row['username']);?>" name="username" required>
                    <label for="">Password<span>*</span></label>
                     <input type="password" placeholder="Password" value="<?php echo htmlentities($row['password']);?>" name="password" required minlength="8" data-msg="Password is not less than 8 characters">
                    <button type="submit" class="aa-browse-btn" name="log">Register</button>                    
                  </form>
                    <?php


}


?>
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

if (isset($_POST['log']))
{
$proid=$_SESSION['proid'];
$city=$_POST['city'];
$kind=$_POST['kind'];
$name=$_POST['name'];
$phone=$_POST['phone'];
$summary=$_POST['summary'];
$username=$_POST['username'];
$password=$_POST['password'];
  
$sql="update profamily set proname='$name',city='$city',kind='$kind',phoneno='$phone',summary='$summary',username='$username',password='$password' where proid='$proid' ";
	mysqli_query($con,$sql);
	echo "<script>alert('Successfully Edit ');</script>";
    	
?>
<script type="text/javascript">
window.location.href = 'profamilyhome.php?success';
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
  <?php	
require 'config.php';
if (isset($_POST['login']))
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
 echo "<script>alert('اسم المستخدم او كلمة المرور خطأ');</script>";
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
window.location.href = 'profhome.php?success';
</script>
<?php
 
 }
 else
 {
 echo "<script>alert('اسم المستخدم او كلمة المرور خطأ');</script>";
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
echo "<script>alert('اسم المستخدم او كلمة المرور خطأ');</script>";
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
echo "<script>alert('اسم المستخدم او كلمة المرور خطأ');</script>";
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
                                  <option value="1">Productive family</option>
                                  <option value="2">client</option>
                                  <option value="3">Delivery agent</option>
                                  <option value="4">Admin</option>
                                  
                                </select>
            <label for="">Username or Email address<span>*</span></label>
            <input type="text" placeholder="Username or email" name="username">
            <label for="">Password<span>*</span></label>
            <input type="password" placeholder="Password" name="password">
            <button class="aa-browse-btn" type="submit" name="login">Login</button>
            
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
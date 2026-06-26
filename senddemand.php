<?php
session_start();
$clientid=$_SESSION['clientid'];

require 'config.php';
if(isset($_SESSION['clientid']))
{
    $clientid=$_SESSION['clientid'];
    
$result = mysqli_query($con,"SELECT * FROM client where clientid='$clientid' ")
or die(mysqli_error());
// display data in table
while($row = mysqli_fetch_array( $result )) {
    $clientname=$row['cname'];
    
}
$cartno= $_GET['cartno'];
$result = mysqli_query($con,"SELECT * FROM cart where cartno='$cartno' ")
or die(mysqli_error());
// display data in table
while($row = mysqli_fetch_array( $result )) {
  $productno=$row['productno'];
$pname=$row['productname'];
    
    $unitno=$row['unitno'];
    $clientid=$row['clientid'];
    $price=$row['price'];
	 $total= $row['total'];
	$proid=$row['proid'];
    
		$sql="INSERT INTO demand (productname,productno,unitsno,price,total,clientid,proid,clientname) VALUES 
		('$pname','$productno','$unitno','$price','$total','$clientid','$proid','$clientname')";
		mysqli_query($con,$sql);
        $sql1= "delete from cart where cartno=$cartno";
	mysqli_query($con,$sql1);
		?>
		<script>
		alert('Successfully send demand');
       window.location.href='clientcart.php?success';
        </script>
		<?php
	}
	}
else{
    ?>
 <script>
		alert('Erro while sending');
       window.location.href='clientcart.php?fail';
        </script>
		<?php   
    
}

?>
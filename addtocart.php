<?php
session_start();
$clientid=$_SESSION['clientid'];
?>
<?php
require 'config.php';
if (isset($_SESSION['clientid'])){
$productno=$_GET['productno'];
$result = mysqli_query($con,"SELECT * FROM product where productno='$productno' ")
or die(mysqli_error());
// display data in table
while($row = mysqli_fetch_array( $result )) {
    $productno=$row['productno'];
    $productname=$row['productname'];
	$price=$row['price'];
	$image=$row['image'];
	$proid=$row['proid'];
	
		$sql="INSERT INTO cart (productname,productno,image,price,clientid,proid) VALUES 
		('$productname','$productno','$image','$price','$clientid','$proid')";
		mysqli_query($con,$sql);
        
		?>
		<script>
		alert('Successfully add to cart');
       window.location.href='index.php?success';
        </script>
		<?php
	}
	}
else{
    ?>
 <script>
		alert('Must login first');
       window.location.href='index.php?fail';
        </script>
		<?php   
    
}

?>
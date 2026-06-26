<?php
session_start();
$clientid=$_SESSION['clientid'];
?>
<?php
require 'config.php';
if(isset($_POST['edit']))
{

$cartno= $_POST['cartno'];
    echo $cartno;
   
    $unitno= $_POST['unitno'];
     echo $unitno;
$result = mysqli_query($con,"SELECT * FROM cart where cartno='$cartno' ")
or die(mysqli_error());
// display data in table
while($row = mysqli_fetch_array( $result )) {
  
    $price=$row['price'];
	 $total= $unitno * $price;
	
		$sql="update cart  set total='$total',unitno='$unitno' where cartno='$cartno'";
		mysqli_query($con,$sql);
        
		?>
		<script>
		alert('Successfully update cart');
       window.location.href='clientcart.php?success';
        </script>
		<?php
	}
	}
else{
    ?>
 <script>
		alert('Erro while update');
       window.location.href='clientcart.php?fail';
        </script>
		<?php   
    
}

?>
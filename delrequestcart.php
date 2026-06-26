<?php




//In this page I am going to use session:
session_start();
$clientid= $_SESSION['clientid'];

 ?>
<?php

/*

DELETE.PHP

Deletes a specific entry from the 'players' table

*/
error_reporting(0);


// connect to the database

include('config.php');

if (isset($_GET['cartno']))

{

$cartno= $_GET['cartno'];

// delete the entry

$sql= "delete from cart where cartno=$cartno";
	mysqli_query($con,$sql);


    ?>
		<script>
		alert('Successfully delete');
       window.location.href='clientcart.php?success';
        </script>
		<?php


}

else

// if id isn't set, or isn't valid, redirect back to view page

{
     ?>
		<script>
		alert('Fail delete !! Try again ');
       window.location.href='clientcart.php?success';
        </script>
		<?php

}



?>
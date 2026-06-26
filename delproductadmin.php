<?php
//In this page I am going to use session:
session_start();
$adno= $_SESSION['adno'];
 ?>
<?php
/*
DELETE.PHP
Deletes a specific entry from the 'players' table
*/
error_reporting(0);
// connect to the database
include('config.php');
// check if the 'id' variable is set in URL, and check that it is valid
if (isset($_GET['productno']))
{
// get id value
$productno= $_GET['productno'];

// delete the entry

$sql= "delete from product where productno=$productno";
	mysqli_query($con,$sql);

 ?>
		<script>
		alert('Successfully delete');
       window.location.href='adminhome.php?success';
        </script>
		<?php


}

else

// if id isn't set, or isn't valid, redirect back to view page

{
     ?>
		<script>
		alert('Fail delete !! Try again ');
       window.location.href='adminhome.php?success';
        </script>
		<?php

}



?>
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

if (isset($_GET['demandno']))

{

$demandno= $_GET['demandno'];

// delete the entry

$sql= "delete from demand where demandno=$demandno";
	mysqli_query($con,$sql);


// redirect back to the view page
 ?>
		<script>
		alert('Successfully delete');
       window.location.href='clienthome.php?success';
        </script>
		<?php


}

else

// if id isn't set, or isn't valid, redirect back to view page

{
     ?>
		<script>
		alert('Fail delete !! Try again ');
       window.location.href='clienthome.php?success';
        </script>
		<?php

}



?>
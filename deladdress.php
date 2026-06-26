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

if (isset($_GET['clientid']))

{

$clientid= $_GET['clientid'];

// delete the entry

$sql= "delete from clientaddress where clientid=$clientid";
	mysqli_query($con,$sql);


// redirect back to the view page
echo "<script>alert('Successfully delete');</script>";
header("Location: clienthome.php");

}

else

// if id isn't set, or isn't valid, redirect back to view page

{
echo "<script>alert('Fail delete !! Try again ');</script>";
header("Location: clienthome.php ");

}



?>
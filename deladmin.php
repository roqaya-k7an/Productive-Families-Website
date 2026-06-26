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
if (isset($_GET['adno']))
{
// get id value
$productno= $_GET['adno'];

// delete the entry

$sql= "delete from product where adno=$adno";
	mysqli_query($con,$sql);


// redirect back to the view page
echo "<script>alert('Successfully delete admin');</script>";
header("Location: adminhome.php");

}

else

// if id isn't set, or isn't valid, redirect back to view page

{
echo "<script>alert('Fail delete !! Try again ');</script>";
header("Location: adminhome.php ");

}



?>
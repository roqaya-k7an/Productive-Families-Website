<?php

//In this page I am going to use session:
session_start();
$agentid= $_SESSION['agentid'];

 ?>
<?php

error_reporting(0);


// connect to the database

include('config.php');

if (isset($_GET['carid']))

{

$carid= $_GET['carid'];

// delete the entry

$sql= "delete from agentcar where carid=$carid";
	mysqli_query($con,$sql);


// redirect back to the view page
echo "<script>alert('Successfully delete');</script>";
header("Location: agenthome.php");

}

else

// if id isn't set, or isn't valid, redirect back to view page

{
echo "<script>alert('Fail delete !! Try again ');</script>";
header("Location: agenthome.php ");

}



?>
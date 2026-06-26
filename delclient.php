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
if (isset($_GET['clientid']))
{
// get id value
$clientid= $_GET['clientid'];

// delete the entry

$sql= "delete from client where clientid=$clientid";
	mysqli_query($con,$sql);

?>
		<script>
		alert('Delete successfully');
       window.location.href='adminhome.php?success';
        </script>
		<?php
	}
	else
	{
	?>
		<script>
		alert('Error !! Try again');
       window.location.href='adminhome.php?Fail';
        </script>
		<?php
    }

?>
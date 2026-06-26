<?php
include('config.php');

// check if the 'id' variable is set in URL, and check that it is valid

if (isset($_GET['demandno']))

{

// get id value

$demandno= $_GET['demandno'];

// delete the entry
    
	
    
	$accept="accept";
    
    
	
		$sql= "update demand set accept='$accept' WHERE demandno='$demandno'";
            
            
		mysqli_query($con,$sql);
        
		?>
		<script>
		alert('Request accepted ');
       window.location.href='profamilyhome.php?success';
        </script>
		<?php
	}
	else
	{
		?>
		<script>
		alert('Erro !! Please Try Again');
        window.location.href='profamilyhome.php?fail';
        </script>
		<?php
	} 
    //
?>
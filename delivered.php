<?php
session_start();
$agentid=$_SESSION['agentid'];

require 'config.php';
if(isset($_GET['demandno']))
{


$deno=$_GET['demandno'];


        $accept="Delivered";
    
    
	
		$sql1= "update deliverydemand set accept='$accept' WHERE demandno='$deno'";
            
            
		mysqli_query($con,$sql1);
    $sql2= "update demand set status='$accept' WHERE demandno='$deno'";
            
            
		mysqli_query($con,$sql2);
        
       	?>
		<script>
		alert('Successfully delivered demand');
       window.location.href='agenthome.php?success';
        </script>
		<?php
    
	}
	
else{
    ?>
 <script>
		alert('Erro while sending');
       window.location.href='agenthome.php?fail';
        </script>
		<?php   
    
}

?>
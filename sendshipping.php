<?php
session_start();
$proid=$_SESSION['proid'];

require 'config.php';
if(isset($_POST['send']))
{

$demandno= $_POST['demandno'];
$agid=$_POST['chname'];

$result = mysqli_query($con,"SELECT * FROM demand where demandno='$demandno' ")
or die(mysqli_error());
// display data in table
while($row = mysqli_fetch_array( $result )) {

    $clientid=$row['clientid'];
    $total= $row['total'];
	$proid=$row['proid'];
      
}
    
$result = mysqli_query($con,"SELECT * FROM client where clientid='$clientid' ")
or die(mysqli_error());
// display data in table
while($row = mysqli_fetch_array( $result )) {
    $address=$row['address'];
    
		$sql="INSERT INTO deliverydemand (demandno,clientid,proid,address,total,agentid) VALUES 
		('$demandno','$clientid','$proid','$address','$total','$agid')";
		mysqli_query($con,$sql);
    
        $accept="Send to shipping";
    
    
	
		$sql1= "update demand set status='$accept' WHERE demandno='$demandno'";
            
            
		mysqli_query($con,$sql1);
        
       	?>
		<script>
		alert('Successfully send demand');
       window.location.href='profamilyhome.php?success';
        </script>
		<?php
    
	}
	}
else{
    ?>
 <script>
		alert('Erro while sending');
       window.location.href='profamilyhome.php?fail';
        </script>
		<?php   
    
}

?>
<?php
session_start();
$agentid=$_SESSION['agentid'];
?>
<?php
require 'config.php';
if(isset($_POST['add']))
{    
     
	$file = $_FILES['file']['name'];
    $file_loc = $_FILES['file']['tmp_name'];
	$file_size = $_FILES['file']['size'];
	$file_type = $_FILES['file']['type'];
    $folder="img/";
    
	$kind=$_POST['kind'];
    $color=$_POST['color'];
	$model=$_POST['model'];
	$carnum=$_POST['carnum'];
    $agentid=$_POST['agentid'];
	
	
	// new file size in KB
	$new_size = $file_size/1024;  
	// new file size in KB
 
	// make file name in lower case
	$new_file_name = strtolower($file);
	// make file name in lower case
	
	$final_file=str_replace(' ','-',$new_file_name);
    // new file size in KB
	
	
	if(move_uploaded_file($file_loc,$folder.$final_file))
	{
		$sql="INSERT INTO agentcar (kind,color,model,carimage,carnumber,agentno) VALUES 
		('$kind','$color','$model','$folder$file','$carnum','$agentid')";
		mysqli_query($con,$sql);
        
		?>
		<script>
		alert('Add Car successfully');
       window.location.href='agenthome.php?success';
        </script>
		<?php
	}
	else
	{
		
    //
}}
?>
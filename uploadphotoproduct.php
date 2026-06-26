<?php
session_start();
$proid=$_SESSION['proid'];
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
    
	$catname=$_POST['catname'];
    $productname=$_POST['name'];
	$discribe=$_POST['summary'];
    $price=$_POST['price'];
	$properties=$_POST['properties'];
	$preset=$_POST['preset'];
	$proid=$_POST['proid'];
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
		$sql="INSERT INTO product (productname,catname,image,price,discribe,properties,preset,proid) VALUES 
		('$productname','$catname','$folder$file','$price','$discribe','$properties','$preset','$proid')";
		mysqli_query($con,$sql);
        
		?>
		<script>
		alert('Successfully add product');
       window.location.href='addproduct.php?success';
        </script>
		<?php
	}
	else
	{
		?>
		<script>
		alert('error while uploading file');
        window.location.href='addproduct.php?fail';
        </script>
		<?php
	} 
    //
}
?>

<?php
session_start();
// remove all session variables
session_unset(); 

// destroy the session 
session_destroy();
session_write_close();
 ?>
<script language="javascript">
document.location="index.php";
</script>
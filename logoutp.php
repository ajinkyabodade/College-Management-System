
<?php
 session_start();
?>



<html>
<head>
</head><body>

<?php
session_unset(); 
session_destroy(); 
?>
<script> alert("LogOut Succesfully");</script>  <?php
include("principallogin.html");

?>



</body>
</html>
  
  
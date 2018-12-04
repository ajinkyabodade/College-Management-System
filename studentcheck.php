
<?php
 session_start();
?>
<html>
<head>
</head><body>




<?php
$conn=new mysqli("localhost","root","","collegemanagement");
$emailid = $_POST["emailid"];
$pass = $_POST["pass"];
$result = $conn->query("SELECT * FROM student where username= '$emailid' and password= '$pass'");
	if ($result->num_rows > 0) {
	
	
	             $_SESSION["user"] = $emailid; 
				 $_SESSION["pass"] = $pass; 
				header("Location: studentportal.php"); 	 
include("studentportal.php");
		 	}		
else
{
?> <script> alert("Invalid Login");</script>
<?php include("studentlogin.html"); }?>

</pre>

</body>
</html>
  
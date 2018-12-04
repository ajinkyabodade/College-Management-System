<html>
<head>
</head><body>

<h3 align="center" pbzloc="58"><em><strong><span style="font-size: 36px"><span style="font-family: comic sans ms,cursive">Student Portal</span></span></strong></em></h3>

<hr><hr>

<pre align="center">
<?php
$conn=new mysqli("localhost","root","","collegemanagement");
$emailid = $_POST["emailid"];
$pass = $_POST["pass"];

$result = $conn->query("SELECT * FROM student where username= '$emailid' and password= '$pass'");
	if ($result->num_rows > 0) {
	 	 $row = $result->fetch_assoc();

include("studentportal.php");		
				    
	 }
	else{
		echo "Login Id or Password in Invalid";
		
	}
?>
<br>
</pre>

<hr><hr>
</body>
</html>
  
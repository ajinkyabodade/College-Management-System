<?php
session_start();
?>
<?php 
    
     $check=$_SESSION["user"];
    if($check=='') 
    { 
        
header("Location: principallogin.html"); 
         
        die("Redirecting to principallogin.html"); 
    } 
?>
<html>
<head>
<title>Request&Suggestion portal</title>
<link href="bootstrap.min.css" rel="stylesheet">
</head><body>

	  <div class="progress">
        <div class="progress-bar progress-bar-info" style="width: 100%; height:100%;"></div>
      </div>
      
<h3 align="center"><em><strong><span style="font-size: 36px"><span style="font-family: Georgia">Request&Suggestion portal  <div class="form-group" style="margin:30px;" align="center" >
	<a href="principalportal.php" target=""><input type="submit" class="btn btn-primary" value="Home"></a>  <a href="allstdview1.php" target=""><input type="submit" class="btn btn-primary" value="Student Details"></a>    <a href="tgviewp.php" target=""><input type="submit" class="btn btn-primary" value="View/Edit T/G Form"></a>    <a href="feedbackview.html" target=""><input type="submit" class="btn btn-primary" value="Feedbacks"></a>     <a href="utf.html" target=""><input type="submit" class="btn btn-primary" value="View UT Marks"></a>    <a href="attendancefv1.html" target=""><input type="submit" class="btn btn-primary" value="View Attendance"></a>       <a href="requestandsuggestionview.php" target=""><input type="submit" class="btn btn-primary" value="Request & Suggestions"></a>       <a href="newsandevents.html" target=""><input type="submit" class="btn btn-primary" value="Upload News And Events"></a>    <a href="logoutp.php" target=""><input type="submit" class="btn btn-primary" value="Logout"></a>  
	</div><div class="progress">
        <div class="progress-bar progress-bar-info" style="width: 100%; height:100%;"></div>
      </div>
	  
 
<?php

$conn=new mysqli("localhost","root","","collegemanagement");
$result = $conn->query("SELECT * FROM suggestion ");
	if ($result->num_rows > 0) {
?>
	<table align="center" width="100%">
	  <?php
	    while($row = $result->fetch_assoc()){

?>

  
	<tr><td align="center">   <?php echo "".$row['date'];?>            </td> <td align="center"><?php echo "".$row['rs'];?> </td>

	
<?php  } }?>

</table>


<ul><li> </li></ul>
<div class="progress">
        <div class="progress-bar progress-bar-info" style="width: 100%; height:100%;"><p style="font-size: 18px; font-family: comic sans ms,cursive; color:black; ">Created by Ajinkya Bodade</p></div>
		</div>


</body>
</html>

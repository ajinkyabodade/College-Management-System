<html>
<head>
<title>Attendance portal</title>
<link href="bootstrap.min.css" rel="stylesheet">
</head><body>

	  <div class="progress">
        <div class="progress-bar progress-bar-info" style="width: 100%; height:100%;"></div>
      </div>
      
<h3 align="center"><em><strong><span style="font-size: 36px"><span style="font-family: Georgia">Attendance portal <div class="form-group" style="margin:30px;" align="center" >
	<a href="studentportal.php" target=""><input type="submit" class="btn btn-primary" value="Home"></a>  <a href="studentprofile.html" target=""><input type="submit" class="btn btn-primary" value="View/Edit Profile"></a>    <a href="tgedit.html" target=""><input type="submit" class="btn btn-primary" value="View/Edit T/G Form"></a>    <a href="tgfill.html" target=""><input type="submit" class="btn btn-primary" value="Fill TG Form"></a>     <a href="attendances1.html" target=""><input type="submit" class="btn btn-primary" value="View Attendance"></a>    <a href="feedbackstd.html" target=""><input type="submit" class="btn btn-primary" value="Feedback Form"></a>       <a href="utsv1.html" target=""><input type="submit" class="btn btn-primary" value="View UT Marks"></a>   <a href="logouts.php" target=""><input type="submit" class="btn btn-primary" value="Logout"></a>  
	</div></span></span></strong></em></h3>
<div class="progress">
        <div class="progress-bar progress-bar-info" style="width: 100%; height:100%;"></div>
      </div>
	  

<font size="6">
<?php

$branch = $_POST["branch"];
$year = $_POST["year"];
$sub = $_POST["subject"];
$rollno = $_POST["rollno"];

$conn=new mysqli("localhost","root","","collegemanagement");
$result = $conn->query("SELECT * FROM attendance where subject= '$sub' and year= '$year' and branch='$branch' and rollno='$rollno'");
	if ($result->num_rows > 0) {
	   
	    while($row = $result->fetch_assoc()){

?>
<table align="center" width="50%" border="1">
<form action="attendances1.html" method="post">
	<tr><td align="center">Date	    :<?php echo "".$row['date'];?></td>
    </td> <td align="center">Attendance  	    :<?php echo "".$row['attend'];?></tr></td>
	
	
<?php } }?>

</table>
<div class="form-group" style="margin:30px;" align="center" >	
<input type="submit" value="Check For Another Subject" class="btn btn-primary"  >  </div>
</form>
<div class="progress">
        <div class="progress-bar progress-bar-info" style="width: 100%; height:100%;"><p style="font-size: 18px; font-family: comic sans ms,cursive; color:black; ">Created by Ajinkya Bodade</p></div>
		</div>
</body>
</html>

<html>
<head>
<title>Attendance portal</title>
<link href="bootstrap.min.css" rel="stylesheet">
</head><body>

<body >	  
	  <div class="progress">
        <div class="progress-bar progress-bar-info" style="width: 100%; height:100%;"></div>
      </div>
      
<h3 align="center"><em><strong><span style="font-size: 36px"><span style="font-family: Georgia">Attendance portal	  <div class="form-group" style="margin:30px;" align="center" >
	<a href="principalportal.php" target=""><input type="submit" class="btn btn-primary" value="Home"></a>  <a href="allstdview1.php" target=""><input type="submit" class="btn btn-primary" value="Student Details"></a>    <a href="tgviewp.php" target=""><input type="submit" class="btn btn-primary" value="View/Edit T/G Form"></a>    <a href="feedbackview.html" target=""><input type="submit" class="btn btn-primary" value="Feedbacks"></a>     <a href="utf.html" target=""><input type="submit" class="btn btn-primary" value="View UT Marks"></a>    <a href="attendancefv1.html" target=""><input type="submit" class="btn btn-primary" value="View Attendance"></a>       <a href="requestandsuggestionview.php" target=""><input type="submit" class="btn btn-primary" value="Request & Suggestions"></a>       <a href="newsandevents.html" target=""><input type="submit" class="btn btn-primary" value="Upload News And Events"></a>    <a href="logoutp.php" target=""><input type="submit" class="btn btn-primary" value="Logout"></a>  
	</div></span></span></strong></em></h3>
<div class="progress">
        <div class="progress-bar progress-bar-info" style="width: 100%; height:100%;"></div>
      </div>
<div class="main" >
<font size="6">
<?php

$branch = $_POST["branch"];
$year = $_POST["year"];
$sub = $_POST["subject"];


$conn=new mysqli("localhost","root","","collegemanagement");
$result = $conn->query("SELECT * FROM attendance where subject= '$sub' and year= '$year' and branch='$branch' ");
	if ($result->num_rows > 0) {
	   
	    while($row = $result->fetch_assoc()){

?>
<table align="center">
<form action="attendancefv1.html" method="post">
	<tr><td>Date	    :</td>	<td><input type="text" name="rollno" value="<?php echo "".$row['date'];?>"><br></td>
	<td>Roll No	    :</td>	<td><input type="text" name="rollno" value="<?php echo "".$row['rollno'];?>"><br></td>
	<td>Attendance  :</td>	<td><input type="text" name="attend0" value="<?php echo "".$row['attend'];?>"><br></tr></td>
	

<?php } }?>

</table>
<div class="form-group" style="margin:30px;" align="center" >
<pre align="center"><input type="submit" class="btn btn-primary"  value="Check For Another Subject"></pre></div>
</form>
<div class="progress">
        <div class="progress-bar progress-bar-info" style="width: 100%; height:100%;"><p style="font-size: 18px; font-family: comic sans ms,cursive; color:black; ">Created by Ajinkya Bodade</p></div>
		</div>

</body>
</html>

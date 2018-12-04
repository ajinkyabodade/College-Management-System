
<html>
<head>
<title>Feedback Portal</title>
<link href="bootstrap.min.css" rel="stylesheet">
</head><body>

	  <div class="progress">
        <div class="progress-bar progress-bar-info" style="width: 100%; height:100%;"></div>
      </div>
      
<h3 align="center"><em><strong><span style="font-size: 36px"><span style="font-family: Georgia"> Feedback Portal 	  <div class="form-group" style="margin:30px;" align="center" >
	<a href="principalportal.php" target=""><input type="submit" class="btn btn-primary" value="Home"></a>  <a href="allstdview1.php" target=""><input type="submit" class="btn btn-primary" value="Student Details"></a>    <a href="tgviewp.php" target=""><input type="submit" class="btn btn-primary" value="View/Edit T/G Form"></a>    <a href="feedbackview.html" target=""><input type="submit" class="btn btn-primary" value="Feedbacks"></a>     <a href="utf.html" target=""><input type="submit" class="btn btn-primary" value="View UT Marks"></a>    <a href="attendancefv1.html" target=""><input type="submit" class="btn btn-primary" value="View Attendance"></a>       <a href="requestandsuggestionview.php" target=""><input type="submit" class="btn btn-primary" value="Request & Suggestions"></a>       <a href="newsandevents.html" target=""><input type="submit" class="btn btn-primary" value="Upload News And Events"></a>    <a href="logoutp.php" target=""><input type="submit" class="btn btn-primary" value="Logout"></a>  
	</div></span></span></strong></em></h3>
<div class="progress">
        <div class="progress-bar progress-bar-info" style="width: 100%; height:100%;"></div>
      </div>

</div>

<?php

$tname = $_POST["tname"];
$sub = $_POST["sub"];
$branch1 = array('Computer Science','Civil Engineering','Electrical Engineering','Electronics&Telecommunication','Mechanical Engineering','First Year');
$branch = $_POST['branch'];
$year1 = array('First Year','Second Year','Third Year','Final Year');
$year = $_POST['year'];

$conn=new mysqli("localhost","root","","collegemanagement");
$result = $conn->query("SELECT * FROM feedback where teachern= '$tname' and year= '$year' and branch='$branch' and sub= '$sub' ");
	if ($result->num_rows > 0) {
	   $i=1;
	  
	    while($row = $result->fetch_assoc()){

?>
<table align="center" >
<form action="feedbackview.html" method="post">
    	<tr><td>.</td></tr>
		<tr><td align="center">Date    :</td>   <td align="center"><?php echo "".$row['date'];?> </td>	
    <tr><td align="center">Student<?php echo"".$i;?>:    </td></tr>
	<tr><td align="center">Question 1     :</td>   <td align="center"><?php echo "".$row['q1'];?> </td>
	<tr><td align="center">Question 2     :</td>	<td align="center"><?php echo "".$row['q2'];?> </td>
	<tr><td align="center">Question 3     :</td>	<td align="center"><?php echo "".$row['q3'];?> </td>
	<tr><td align="center">Question 4     :</td>	<td align="center"><?php echo "".$row['q4'];?> </td>
	<tr><td align="center">Question 5     :</td>	<td align="center"><?php echo "".$row['q5'];?> </td>
	<tr><td align="center">Question 6     :</td>	<td align="center"><?php echo "".$row['q6'];?> </td>
	<tr><td align="center">Question 7     :</td>	<td align="center"><?php echo "".$row['q7'];?> </td>
	<tr><td align="center">Question 8     :</td>	<td align="center"><?php echo "".$row['q8'];?> </td>
	<tr><td align="center">Question 9     :</td>	<td align="center"><?php echo "".$row['q9'];?> </td>
	<tr><td align="center">Question 10    :</td>	<td align="center"><?php echo "".$row['q10'];?> </td>
	<tr><td align="center">Question 11    :</td>	<td align="center"><?php echo "".$row['q11'];?> </td>
	<tr><td align="center">Question 12    :</td>	<td align="center"><?php echo "".$row['q12'];?> </td>
	<tr><td align="center">Question 13    :</td>	<td align="center"><?php echo "".$row['q13'];?> </td>
	<tr><td align="center">Question 14    :</td>	<td align="center"><?php echo "".$row['q14'];?> </td>
	<tr><td align="center">Question 15    :</td>	<td align="center"><?php echo "".$row['q15'];?> </td>
	


<?php $i++; } }?>

</table>
<div class="form-group" style="margin:30px;" align="center" >	
<input type="submit" value="Check For Another Staff" class="btn btn-primary"  >  
</div>
</form>
<div class="progress">
        <div class="progress-bar progress-bar-info" style="width: 100%; height:100%;"><p style="font-size: 18px; font-family: comic sans ms,cursive; color:black; ">Created by Ajinkya Bodade</p></div>
		</div>

</form>

</body>
</html>

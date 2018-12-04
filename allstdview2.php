<html>
<head>
<title>Principal portal</title>
<link href="bootstrap.min.css" rel="stylesheet">
</head><body>

	  <div class="progress">
        <div class="progress-bar progress-bar-info" style="width: 100%; height:100%;"></div>
      </div>
      
<h3 align="center"><em><strong><span style="font-size: 36px"><span style="font-family: Georgia">All Students Details	  <div class="form-group" style="margin:30px;" align="center" >
	<a href="principalportal.php" target=""><input type="submit" class="btn btn-primary" value="Home"></a>  <a href="allstdview1.php" target=""><input type="submit" class="btn btn-primary" value="Student Details"></a>    <a href="tgviewp.php" target=""><input type="submit" class="btn btn-primary" value="View/Edit T/G Form"></a>    <a href="feedbackview.html" target=""><input type="submit" class="btn btn-primary" value="Feedbacks"></a>     <a href="utf.html" target=""><input type="submit" class="btn btn-primary" value="View UT Marks"></a>    <a href="attendancefv1.html" target=""><input type="submit" class="btn btn-primary" value="View Attendance"></a>       <a href="requestandsuggestionview.php" target=""><input type="submit" class="btn btn-primary" value="Request & Suggestions"></a>       <a href="newsandevents.html" target=""><input type="submit" class="btn btn-primary" value="Upload News And Events"></a>    <a href="logoutp.php" target=""><input type="submit" class="btn btn-primary" value="Logout"></a>  
	</div></span></span></strong></em></h3>
<div class="progress">
        <div class="progress-bar progress-bar-info" style="width: 100%; height:100%;"></div>
      </div>
	  
	
<?php 
$branch1 = array('Computer Science','Civil Engineering','Electrical Engineering','Electronics&Telecommunication','Mechanical Engineering','First Year');
$branch = $_POST['branch'];
$year1 = array('First Year','Second Year','Third Year','Final Year');
$year = $_POST['year'];
$conn=new mysqli("localhost", "root","","collegemanagement");

	$result = $conn->query("SELECT * FROM student where branch='$branch' and year='$year'");

	while($row = $result->fetch_assoc()){
?>	

<table align="center" border="1">
	<tr>
		    
			<th>Name</th>
			<th>Branch</th>
			<th>Year </th>
			<th>Email Id</th>
			<th>LinkedIn Id</th>
			<th>Student Id</th>
			<th>Roll No</th>
			<th>Date of Birth </th>
			<th>Address </th>
			<th>Mobile No </th>
	</tr>


<form action="studentprofile2.php" method="post">
	<tr>	<td><?php echo "".$row['name'];?>  </td>
	 	<td> <?php echo "".$row['branch'];?>  </td>
	<td> <?php echo "".$row['year'];?>  </td>
	<td> <?php echo "".$row['emailid'];?>  </td>
		<td> <?php echo "".$row['linkinid'];?>  </td>
	<td> <?php echo "".$row['studentid'];?>  </td>
	 	<td> <?php echo "".$row['rollno'];?>  </td>
		<td> <?php echo "".$row['dob'];?>  </td>
		<td> <?php echo "".$row['address'];?>  </td>
	 	<td> <?php echo "".$row['mobno'];?>  </td></tr>
</table>
</form>
<ul>
           </ul>
<p> &nbsp;</p>
<?php }?>
<a href="allstdview1.php">Search Again</a>
<div class="progress">
        <div class="progress-bar progress-bar-info" style="width: 100%; height:100%;"><p style="font-size: 18px; font-family: comic sans ms,cursive; color:black; ">Created by Ajinkya Bodade</p></div>
		</div>
</body>
</html>
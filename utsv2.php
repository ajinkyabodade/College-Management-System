<html>
<head>
<title>Unit Test portal</title>
<link href="bootstrap.min.css" rel="stylesheet">
</head><body>

	  <div class="progress">
        <div class="progress-bar progress-bar-info" style="width: 100%; height:100%;"></div>
      </div>
      
<h3 align="center"><em><strong><span style="font-size: 36px"><span style="font-family: Georgia">Unit Test portal <div class="form-group" style="margin:30px;" align="center" >
	<a href="studentportal.php" target=""><input type="submit" class="btn btn-primary" value="Home"></a>  <a href="studentprofile.html" target=""><input type="submit" class="btn btn-primary" value="View/Edit Profile"></a>    <a href="tgedit.html" target=""><input type="submit" class="btn btn-primary" value="View/Edit T/G Form"></a>    <a href="tgfill.html" target=""><input type="submit" class="btn btn-primary" value="Fill TG Form"></a>     <a href="attendances1.html" target=""><input type="submit" class="btn btn-primary" value="View Attendance"></a>    <a href="feedbackstd.html" target=""><input type="submit" class="btn btn-primary" value="Feedback Form"></a>       <a href="utsv1.html" target=""><input type="submit" class="btn btn-primary" value="View UT Marks"></a>   <a href="logouts.php" target=""><input type="submit" class="btn btn-primary" value="Logout"></a>  
	</div></span></span></strong></em></h3>
<div class="progress">
        <div class="progress-bar progress-bar-info" style="width: 100%; height:100%;"></div>
      </div>

<font size="6">
<?php
$branch1 = array('Computer Science','Civil Engineering','Electrical Engineering','Electronics&Telecommunication','Mechanical Engineering','First Year');
$branch = $_POST['branch'];
$year1 = array('First Semester','Second Semester','Third Semester','Fourth Semester','Fifth Semester','Sixth Semester','Seventh Semester','Eighth Semester');
$sem = $_POST['semester'];
$utno1 = array('1','2','3');
$utno = $_POST['utno'];
$rollno=$_POST['rollno'];
$conn=new mysqli("localhost","root","","collegemanagement");
$result = $conn->query("SELECT * FROM unittest where rollno='$rollno' and  sem= '$sem' and branch='$branch' and utno='$utno'");
	if ($result->num_rows > 0) {
	   
	    $row = $result->fetch_assoc();

?>
<table align="center" border="1" width="50%">
<form action="utsv1.html" method="post">

	<tr><td align="center"><?php echo "".$row['sub1'];?></td><td align="center"><?php echo "".$row['sub1o'];?><br></td></tr>
	<tr><td align="center"><?php echo "".$row['sub2'];?></td><td align="center"> <?php echo "".$row['sub2o'];?><br></td></tr>
	<tr><td align="center"> <?php echo "".$row['sub3'];?></td><td align="center"> <?php echo "".$row['sub3o'];?> <br></td></tr>
	<tr><td align="center"> <?php echo "".$row['sub4'];?></td><td align="center"> <?php echo "".$row['sub4o'];?> <br></td></tr>
	<tr><td align="center"> <?php echo "".$row['sub5'];?></td><td align="center"> <?php echo "".$row['sub5o'];?> <br></td></tr>
	<tr><td align="center"> <?php echo "".$row['sub6'];?></td><td align="center"> <?php echo "".$row['sub6o'];?> <br></td></tr>
	</table align="center">
	<?php  }?>
	<div class="form-group" style="margin:30px;" align="center" >	
<input type="submit" value="Check For Another Unit Test " class="btn btn-primary"  >  
</div>
</form>
<div class="progress">
        <div class="progress-bar progress-bar-info" style="width: 100%; height:100%;"><p style="font-size: 18px; font-family: comic sans ms,cursive; color:black; ">Created by Ajinkya Bodade</p></div>
		</div>
</form>


</body>
</html>

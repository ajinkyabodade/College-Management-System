<html>
<head>
<title>Unit Test Portal</title>
<link href="bootstrap.min.css" rel="stylesheet">
</head><body>

<body >	  	
	  <div class="progress">
        <div class="progress-bar progress-bar-info" style="width: 100%; height:100%;"></div>
      </div>
      
<h3 align="center"><em><strong><span style="font-size: 36px"><span style="font-family: Georgia">Unit Test Portal <div class="form-group" style="margin:30px;" align="center" >
	<a href="facultyportal.php" target=""><input type="submit" class="btn btn-primary" value="Home"></a>  <a href="newsandeventsf.html" target=""><input type="submit" class="btn btn-primary" value="Upload News And Events"></a>    <a href="tgviewp.php" target=""><input type="submit" class="btn btn-primary" value="View/Edit T/G Form"></a>    <a href="attendancef.html" target=""><input type="submit" class="btn btn-primary" value="Upload Attendance"></a>     <a href="attendancefv1.html" target=""><input type="submit" class="btn btn-primary" value="View Attendance"></a>    <a href="utf.html" target=""><input type="submit" class="btn btn-primary" value="Upload UT Marks"></a>       <a href="utfv1.html" target=""><input type="submit" class="btn btn-primary" value="View UT Marks"></a>    <a href="logoutf.php" target=""><input type="submit" class="btn btn-primary" value="Logout"></a>  
	</div></span></span></strong></em></h3>
<div class="progress">

        <div class="progress-bar progress-bar-info" style="width: 100%; height:100%;"></div>
      </div>
	
</div>
<div class="main" >
<font size="6">
<?php
$branch1 = array('Computer Science','Civil Engineering','Electrical Engineering','Electronics&Telecommunication','Mechanical Engineering','First Year');
$branch = $_POST['branch'];
$year1 = array('First Semester','Second Semester','Third Semester','Fourth Semester','Fifth Semester','Sixth Semester','Seventh Semester','Eighth Semester');
$sem = $_POST['semester'];
$utno1 = array('1','2','3');
$utno = $_POST['utno'];
$conn=new mysqli("localhost","root","","collegemanagement");
$result = $conn->query("SELECT * FROM unittest where  sem= '$sem' and branch='$branch' and utno='$utno'");
	if ($result->num_rows > 0) {
	   
	   while( $row = $result->fetch_assoc()){

?>
<table align="center">
<form action="utfv1.html" method="post">
    <tr><td>Roll No<input type="text" value="<?php echo "".$row['rollno'];?>">:</td></tr> 
	<tr><td><input type="text" value="<?php echo "".$row['sub1'];?>">:</td><td><input type="text" value="<?php echo "".$row['sub1o'];?>"><br></td></tr>
	<tr><td><input type="text" value="<?php echo "".$row['sub2'];?>">:</td><td><input type="text" value="<?php echo "".$row['sub2o'];?>"><br></td></tr>
	<tr><td><input type="text" value="<?php echo "".$row['sub3'];?>">:</td><td><input type="text" value="<?php echo "".$row['sub3o'];?>"><br></td></tr>
	<tr><td><input type="text" value="<?php echo "".$row['sub4'];?>">:</td><td><input type="text" value="<?php echo "".$row['sub4o'];?>"><br></td></tr>
	<tr><td><input type="text" value="<?php echo "".$row['sub5'];?>">:</td><td><input type="text" value="<?php echo "".$row['sub5o'];?>"><br></td></tr>
	<tr><td><input type="text" value="<?php echo "".$row['sub6'];?>">:</td><td><input type="text" value="<?php echo "".$row['sub6o'];?>"><br></td></tr>
	</table>
	<?php  }}?>
	<div class="form-group" style="margin:30px;" align="center" >
	<input type="submit" class="btn btn-primary" value="Check For Another UT">
</div>
</form>
<div class="progress">
        <div class="progress-bar progress-bar-info" style="width: 100%; height:100%;"><p style="font-size: 18px; font-family: comic sans ms,cursive; color:black; ">Created by Ajinkya Bodade</p></div>
		</div>


</body>
</html>

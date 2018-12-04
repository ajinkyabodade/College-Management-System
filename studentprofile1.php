


<html>
<head>
<title>Student portal</title>
<link href="bootstrap.min.css" rel="stylesheet">
</head><body>

	  <div class="progress">
        <div class="progress-bar progress-bar-info" style="width: 100%; height:100%;"></div>
      </div>
      
<h3 align="center"><em><strong><span style="font-size: 36px"><span style="font-family: Georgia">Student portal  <div class="form-group" style="margin:30px;" align="center" >
	<a href="studentportal.php" target=""><input type="submit" class="btn btn-primary" value="Home"></a>  <a href="studentprofile.html" target=""><input type="submit" class="btn btn-primary" value="View/Edit Profile"></a>    <a href="tgedit.html" target=""><input type="submit" class="btn btn-primary" value="View/Edit T/G Form"></a>    <a href="tgfill.html" target=""><input type="submit" class="btn btn-primary" value="Fill TG Form"></a>     <a href="attendances1.html" target=""><input type="submit" class="btn btn-primary" value="View Attendance"></a>    <a href="feedbackstd.html" target=""><input type="submit" class="btn btn-primary" value="Feedback Form"></a>       <a href="utsv1.html" target=""><input type="submit" class="btn btn-primary" value="View UT Marks"></a>   <a href="logouts.php" target=""><input type="submit" class="btn btn-primary" value="Logout"></a>  
	</div></span></span></strong></em></h3>
<div class="progress">
        <div class="progress-bar progress-bar-info" style="width: 100%; height:100%;"></div>
      </div>

<div class="main" >



<?php 
  $emailid = $_POST["emailid"]; 
			$pass =	 $_POST["pass"] ; 
$conn=new mysqli("localhost", "root","","collegemanagement");
	$result = $conn->query("SELECT * FROM student where username='$emailid' and password='$pass' ");
	$row = $result->fetch_assoc()
?>	
<table align="center">
<form action="studentprofile2.php" method="post">
	<tr><td>Name		    :</td>	<td><input type="text" name="name" value="<?php echo "".$row['name'];?>"><br></tr></td>
	<tr><td>Branch          :</td>	<td><input type="text" name="branch" value="<?php echo "".$row['branch'];?>"><br></tr></td>
	<tr><td>Year            :</td>	<td><input type="text" name="year" value="<?php echo "".$row['year'];?>"></tr></td>
	<tr><td>Email Id        :</td>	<td><input type="text" name="emailid" value="<?php echo "".$row['emailid'];?>"><br></tr></td>
	<tr><td>LinkedIn Id	    :</td>	<td><input type="text" name="linkinid" value="<?php echo "".$row['linkinid'];?>"><br></tr></td>
	<tr><td>Student Id:	    :</td>	<td><input type="text" name="stdid" value="<?php echo "".$row['studentid'];?>"><br></tr></td>
	<tr><td>Roll No  	    :</td>	<td><input type="text" name="rollno" value="<?php echo "".$row['rollno'];?>"><br></tr></td>
	<tr><td>Date of Birth	:</td>	<td><input type="text" name="dob" value="<?php echo "".$row['dob'];?>"><br></tr></td>
	<tr><td>Address		    :</td>	<td><input type="text" name="address" value="<?php echo "".$row['address'];?>"><br></tr></td>
	<tr><td>Mobile No.	    :</td>	<td><input type="text" name="mobileno" value="<?php echo "".$row['mobno'];?>"><br></tr></td>
	<tr><td>UserName        :</td>	<td><input type="text" name="userid" value="<?php echo "".$row['username'];?>"><br></tr></td>
	<tr><td>Password	    :</td>	<td><input type="password" name="pass" value="<?php echo "".$row['password'];?>"><br><tr><td><tr><td>
<tr><td><div class="form-group" style="margin:30px;" align="center" >	
<input type="submit" value="Submit" class="btn btn-primary"  >  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <input type="reset" class="btn btn-primary" value="Reset">
</div>
</table>
<input name="id" type="hidden" value="<?php echo $row['id']; ?>">
</form>
<div class="progress">
        <div class="progress-bar progress-bar-info" style="width: 100%; height:100%;"><p style="font-size: 18px; font-family: comic sans ms,cursive; color:black; ">Created by Ajinkya Bodade</p></div>
		</div>
</body>
</html>
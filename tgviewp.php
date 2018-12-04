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
<title>Principal portal</title>
<link href="bootstrap.min.css" rel="stylesheet">
</head><body>

	  <div class="progress">
        <div class="progress-bar progress-bar-info" style="width: 100%; height:100%;"></div>
      </div>
      
<h3 align="center"><em><strong><span style="font-size: 36px"><span style="font-family: Georgia">Principal portal	  <div class="form-group" style="margin:30px;" align="center" >
	<a href="principalportal.php" target=""><input type="submit" class="btn btn-primary" value="Home"></a>  <a href="allstdview1.php" target=""><input type="submit" class="btn btn-primary" value="Student Details"></a>    <a href="tgviewp.php" target=""><input type="submit" class="btn btn-primary" value="View/Edit T/G Form"></a>    <a href="feedbackview.html" target=""><input type="submit" class="btn btn-primary" value="Feedbacks"></a>     <a href="utf.html" target=""><input type="submit" class="btn btn-primary" value="View UT Marks"></a>    <a href="attendancefv1.html" target=""><input type="submit" class="btn btn-primary" value="View Attendance"></a>       <a href="requestandsuggestionview.php" target=""><input type="submit" class="btn btn-primary" value="Request & Suggestions"></a>       <a href="newsandevents.html" target=""><input type="submit" class="btn btn-primary" value="Upload News And Events"></a>    <a href="logoutp.php" target=""><input type="submit" class="btn btn-primary" value="Logout"></a>  
	</div></span></span></strong></em></h3>
<div class="progress">
        <div class="progress-bar progress-bar-info" style="width: 100%; height:100%;"></div>
      </div>
	  
	  	  

<h3 align="center" pbzloc="58"><em><strong><span style="font-size: 36px"><span style="font-family: comic sans ms,cursive">Student T/G Form</span></span></strong></em></h3>



<form action="tgfill1p.php" method="POST"  >
<table align="center">

<tr><td>Branch:</td>   	<td><select name="branch"  label =" Select Branch" id="eee" required>
<option value="Computer Science">Computer Science</option>
<option value="Civil Engineering">Civil Engineering</option>
<option value="Electrical Engineering">Electrical Engineering</option>
<option value="Electronics&Telecommunication">Electronics&Telecommunication </option>
<option value="Mechanical Engineering">Mechanical Engineering</option>
<option value="First Year">First Year</option>
</select><br></tr></td>
<tr><td>Year:</td> <td><select name="year"  label ="Select Year" required>
<option value="First Year">First Year</option>
<option value="Second Year">Second Year</option>
<option value="Third Year">Third Year</option>
<option value="Final Year">Final Year </option>
</select><br> </tr></td>
<tr><td>Name:</td> <td><input name="name" type="text" placeholder="Enter Students Name">
</table>
<div class="form-group" style="margin:30px;" align="center" >	
<input type="submit" value="Submit" class="btn btn-primary"  >  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <input type="reset" class="btn btn-primary" value="Reset">
</div>

<div class="progress">
        <div class="progress-bar progress-bar-info" style="width: 100%; height:100%;"><p style="font-size: 18px; font-family: comic sans ms,cursive; color:black; ">Created by Ajinkya Bodade</p></div>
		</div>
<hr><hr>
</form>
</body>
</html>
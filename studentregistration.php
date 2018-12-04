<html>
<head></head><body>
<hr><hr>

<font size="6">
<?php
$name = $_POST["name"];
$emailid = $_POST["emailid"];
$pass = $_POST["pass"];
$address = $_POST["address"];
$branch1 = array('Computer Science','Civil Engineering','Electrical Engineering','Electronics&Telecommunication','Mechanical Engineering','First Year');
$branch = $_POST['branch'];
$year1 = array('First Year','Second Year','Third Year','Final Year');
$year = $_POST['year'];
$mobileno= $_POST["mobileno"];
$linkid = $_POST["linkid"];
$stdid = $_POST["stdid"];
$rollno = $_POST["rollno"];
$dob = $_POST["dob"];
$userid = $_POST["userid"];

$conn=new mysqli("localhost","root","","collegemanagement");

$stmt=$conn->prepare("insert into student (name,branch,year,emailid,linkinid,studentid,rollno,dob,address,mobno,username,password) value(?,?,?,?,?,?,?,?,?,?,?,?) ");
$stmt->bind_param("ssssssssssss", $name,$branch,$year,$emailid,$linkid,$stdid,$rollno,$dob,$address,$mobileno,$userid,$pass);
$stmt->execute();
$stmt->close();
?>
<script>
alert("Registration Successfull........");
</script>
<?php
include("studentportal.php")
?>

<hr><hr>
</font>
</body>
</html>
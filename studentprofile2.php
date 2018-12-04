<html>
<head>
</head><body>



<hr />
<hr />

<?php
$conn=new mysqli("localhost","root","","collegemanagement");


$name = $_POST["name"];
$emailid = $_POST["emailid"];
$pass = $_POST["pass"];
$address = $_POST["address"];
$branch = $_POST["branch"];
$year = $_POST["year"];
$mobileno= $_POST["mobileno"];
$linkid = $_POST["linkinid"];
$stdid = $_POST["stdid"];
$rollno = $_POST["rollno"];
$dob = $_POST["dob"];
$userid = $_POST["userid"];

$id=$_POST['id'];

if($result = $conn->query("update student set name='$name',branch='$branch',year='$year',emailid='$emailid',linkid='$linkid',studentid='$stdid',rollno='$rollno',dob='$dob',address='$address',mobno='$mobileno',username='$userid',password='$pass'  where id=".$id))
{
?>  <script>alert("Successful")</script><?php
}
 include("studentportal.php")
?>









</body>
</html>
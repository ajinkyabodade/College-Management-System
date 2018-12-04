<html>
<head></head><body>
<hr><hr>
<font size="6">
<?php
$date = $_POST["date"];
$tname = $_POST["tname"];
$sub = $_POST["sub"];
$branch1 = array('Computer Science','Civil Engineering','Electrical Engineering','Electronics&Telecommunication','Mechanical Engineering','First Year');
$branch = $_POST['branch'];
$year1 = array('First Year','Second Year','Third Year','Final Year');
$year = $_POST['year'];
$que = array('Never','Rarely','Sometime','Always');
$q1 = $_POST['q1'];
$q2 = $_POST['q2'];
$q3 = $_POST['q3'];
$q4 = $_POST['q4'];
$q5 = $_POST['q5'];
$q6 = $_POST['q6'];
$q7 = $_POST['q7'];
$q8 = $_POST['q8'];
$q9 = $_POST['q9'];
$q10 = $_POST['q10'];
$q11 = $_POST['q11'];
$q12 = $_POST['q12'];
$q13 = $_POST['q13'];
$q14 = $_POST['q14'];
$q15 = $_POST['q15'];
$conn=new mysqli("localhost","root","","collegemanagement");
$stmt=$conn->prepare("insert into feedback(branch,year,teachern,sub,date,q1,q2,q3,q4,q5,q6,q7,q8,q9,q10,q11,q12,q13,q14,q15) values(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?) ");
$stmt->bind_param("ssssssssssssssssssss", $branch,$year,$tname,$sub,$date,$q1,$q2,$q3,$q4,$q5,$q6,$q7,$q8,$q9,$q10,$q11,$q12,$q13,$q14,$q15 );
$stmt->execute();
$stmt->close();
?>
<script>
alert("Feedback Submitted Successfull........");
</script>
<?php
include("studentportal.php")
?>

<hr><hr>
</font>
</body>
</html>
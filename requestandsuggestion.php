<html>
<head></head><body>
<hr><hr>
<font size="6">
<?php
$sugg = $_POST["sugg"];
$date = $_POST["date"];


$conn=new mysqli("localhost","root","","collegemanagement");
$stmt=$conn->prepare("insert into suggestion (rs,date) values(?,?) ");
$stmt->bind_param("ss", $sugg,$date );
$stmt->execute();
$stmt->close();
?>
<script>
alert("Request/Suggestion Submitted Successfull........");
</script>
<?php
include("studentportal.php")
?>

<hr><hr>
</font>
</body>
</html>
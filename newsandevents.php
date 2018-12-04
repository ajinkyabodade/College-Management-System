<html>
<head></head><body>

<font size="6">
<?php
$sugg = $_POST["sugg"];
$date = $_POST["date"];


$conn=new mysqli("localhost","root","","collegemanagement");

$stmt=$conn->prepare("insert into newsandevents (ns,date) values (?,?) ");
$stmt->bind_param("ss", $sugg,$date);
$stmt->execute();
$stmt->close();

?>
<script>
alert("News/Events Submitted Successfull........");
</script>
<?php
include("principalportal.php")
?>


</font>
</body>
</html>
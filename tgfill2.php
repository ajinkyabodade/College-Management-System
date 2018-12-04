<html>
<head></head><body>
<hr><hr>

<font size="6">
<?php
$name = $_POST["name"];
$branch = $_POST['branch'];
$year = $_POST['year'];
$emailid = $_POST["emailid"];
$linkid = $_POST["linkid"];
$dob = $_POST["dob"];
$add0 = $_POST["add"];
$mobs = $_POST["mobs"];
$mobf = $_POST["mobf"];
$pname = $_POST["pname"];
$padd = $_POST["padd"];
$year1 = $_POST["yer1"];
$per1 = $_POST["per1"];
$spass1 = $_POST["spass1"];
$year2 = $_POST["yer2"];
$per2 = $_POST["per2"];
$spass2 = $_POST["spass2"];
$year3 = $_POST["yer3"];
$per3 = $_POST["per3"];
$spass3 = $_POST["spass3"];
$year4 = $_POST["yer4"];
$per4 = $_POST["per4"];
$spass4 = $_POST["spass4"];
$year5 = $_POST["yer5"];
$per5 = $_POST["per5"];
$spass5 = $_POST["spass5"];
$year6 = $_POST["yer6"];
$per6 = $_POST["per6"];
$spass6 = $_POST["spass6"];
$year7 = $_POST["yer7"];
$per7 = $_POST["per7"];
$spass7 = $_POST["spass7"];
$year8 = $_POST["yer8"];
$per8 = $_POST["per8"];
$spass8 = $_POST["spass8"];
$year9 = $_POST["yer9"];
$per9 = $_POST["per9"];
$spass9 = $_POST["spass9"];
$year10 = $_POST["yer10"];
$per10 = $_POST["per10"];
$spass10 = $_POST["spass10"];
$year11 = $_POST["yer11"];
$per11 = $_POST["per11"];
$spass11 = $_POST["spass11"];
$fedu = $_POST["fedu"];
$focc = $_POST["focc"];
$medu = $_POST["medu"];
$mocc = $_POST["mocc"];
$inc = $_POST['inc'];
$fpro = $_POST["fpro"];
$yer12 = $_POST["yer12"];
$roll1 = $_POST["roll1"];
$tgn = $_POST["tgn"];
$yer13 = $_POST["yer13"];
$roll2 = $_POST["roll2"];
$tgn1 = $_POST["tgn1"];
$yer14 = $_POST["yer14"];
$roll3 = $_POST["roll3"];
$tgn2 = $_POST["tgn2"];
$yer15 = $_POST["yer15"];
$roll4 = $_POST["roll4"];
$tgn3 = $_POST["tgn3"];
$id=$_POST['id'];


$conn=new mysqli("localhost","root","","collegemanagement");
if($result = $conn->query("update tgform set name='$name',branch='$branch',year='$year',emailid='$emailid',linkid='$linkid',dob='$dob',add0='$add0',mobs='$mobs',mobf='$mobf',pname='$pname',padd='$padd',year1='$year1',per1='$per1',spass1='$spass1',year2='$year2',per2='$per2',spass2='$spass2',year3='$year3',per3='$per3',spass3='$spass3',year4='$year4',per4='$per4',spass4='$spass4',year5='$year5',per5='$per5',spass5='$spass5',year6='$year6',per6='$per6',spass6='$spass6',year7='$year7',per7='$per7',spass7='$spass7',year8='$year8',per8='$per8',spass8='$spass8',year9='$year9',per9='$per9',spass9='$spass9',year10='$year10',per10='$per10',spass10='$spass10',year11='$year11',per11='$per11',spass11='$spass11',fedu='$fedu',focc='$focc',medu='$medu',mocc='$mocc',inc='$inc',fpro='$fpro',yer12='$yer12',roll1='$roll1',tgn='$tgn',yer13='$yer13',roll2='$roll2',tgn1='$tgn1',yer14='$yer14',roll3='$roll3',tgn2='$tgn2',yer15='$yer15',roll4='$roll4',tgn3='$tgn3'  where id=".$id))
{    
?>  <script>alert("Successful")</script>
<?php  }include("studentportal.php") ?>




</body>
</html>
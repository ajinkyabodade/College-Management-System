<html>
<head></head><body>
<hr><hr>

<font size="6">
<?php
$pre = $_POST["attend0"];
$branch = $_POST["branch"];
$year = $_POST["year"];
$date = $_POST["date"];
$sub = $_POST["sub"];
$rollno = $_POST["rollno"];
$conn=new mysqli("localhost","root","","collegemanagement");
 if($pre=='a' || $pre=='A' || $pre=='p' || $pre=='P' ){
$stmt=$conn->prepare("insert into attendance (branch,year,subject,date,attend,rollno) value(?,?,?,?,?,?) ");
$stmt->bind_param("ssssss", $branch,$year,$sub,$date,$pre,$rollno);
$stmt->execute();
$stmt->close(); }

?>
<?php

$pre = $_POST["attend1"];
$branch = $_POST["branch1"];
$year = $_POST["year1"];
$date = $_POST["date1"];
$sub = $_POST["sub1"];
$rollno = $_POST["rollno1"];
 if($pre=='a' || $pre=='A' || $pre=='p' || $pre=='P' ){
$stmt=$conn->prepare("insert into attendance (branch,year,subject,date,attend,rollno) value(?,?,?,?,?,?) ");
$stmt->bind_param("ssssss", $branch,$year,$sub,$date,$pre,$rollno);
$stmt->execute();
$stmt->close(); }
?>
<?php
$pre = $_POST["attend2"];
$branch = $_POST["branch2"];
$year = $_POST["year2"];
$date = $_POST["date2"];
$sub = $_POST["sub2"];
$rollno = $_POST["rollno2"];


 if($pre=='a' || $pre=='A' || $pre=='p' || $pre=='P' ){

$stmt=$conn->prepare("insert into attendance (branch,year,subject,date,attend,rollno) value(?,?,?,?,?,?) ");
$stmt->bind_param("ssssss", $branch,$year,$sub,$date,$pre,$rollno);
$stmt->execute();
$stmt->close(); }
?>
<?php
$pre = $_POST["attend3"];
$branch = $_POST["branch3"];
$year = $_POST["year3"];
$date = $_POST["date3"];
$sub = $_POST["sub3"];
$rollno = $_POST["rollno3"];


 if($pre=='a' || $pre=='A' || $pre=='p' || $pre=='P' ){

$stmt=$conn->prepare("insert into attendance (branch,year,subject,date,attend,rollno) value(?,?,?,?,?,?) ");
$stmt->bind_param("ssssss", $branch,$year,$sub,$date,$pre,$rollno);
$stmt->execute();
$stmt->close(); }
?>
<?php
$pre = $_POST["attend4"];
$branch = $_POST["branch4"];
$year = $_POST["year4"];
$date = $_POST["date4"];
$sub = $_POST["sub4"];
$rollno = $_POST["rollno4"];


 if($pre=='a' || $pre=='A' || $pre=='p' || $pre=='P' ){

$stmt=$conn->prepare("insert into attendance (branch,year,subject,date,attend,rollno) value(?,?,?,?,?,?) ");
$stmt->bind_param("ssssss", $branch,$year,$sub,$date,$pre,$rollno);
$stmt->execute();
$stmt->close(); }
?>
<?php
$pre = $_POST["attend5"];
$branch = $_POST["branch5"];
$year = $_POST["year5"];
$date = $_POST["date5"];
$sub = $_POST["sub5"];
$rollno = $_POST["rollno5"];


 if($pre=='a' || $pre=='A' || $pre=='p' || $pre=='P' ){

$stmt=$conn->prepare("insert into attendance (branch,year,subject,date,attend,rollno) value(?,?,?,?,?,?) ");
$stmt->bind_param("ssssss", $branch,$year,$sub,$date,$pre,$rollno);
$stmt->execute();
$stmt->close(); }
?>
<?php
$pre = $_POST["attend6"];
$branch = $_POST["branch6"];
$year = $_POST["year6"];
$date = $_POST["date6"];
$sub = $_POST["sub6"];
$rollno = $_POST["rollno6"];


 if($pre=='a' || $pre=='A' || $pre=='p' || $pre=='P' ){

$stmt=$conn->prepare("insert into attendance (branch,year,subject,date,attend,rollno) value(?,?,?,?,?,?) ");
$stmt->bind_param("ssssss", $branch,$year,$sub,$date,$pre,$rollno);
$stmt->execute();
$stmt->close(); }
?><?php
$pre = $_POST["attend7"];
$branch = $_POST["branch7"];
$year = $_POST["year7"];
$date = $_POST["date7"];
$sub = $_POST["sub7"];
$rollno = $_POST["rollno7"];


 if($pre=='a' || $pre=='A' || $pre=='p' || $pre=='P' ){

$stmt=$conn->prepare("insert into attendance (branch,year,subject,date,attend,rollno) value(?,?,?,?,?,?) ");
$stmt->bind_param("ssssss", $branch,$year,$sub,$date,$pre,$rollno);
$stmt->execute();
$stmt->close(); }
?>
<?php
$pre = $_POST["attend8"];
$branch = $_POST["branch8"];
$year = $_POST["year8"];
$date = $_POST["date8"];
$sub = $_POST["sub8"];
$rollno = $_POST["rollno8"];


 if($pre=='a' || $pre=='A' || $pre=='p' || $pre=='P' ){

$stmt=$conn->prepare("insert into attendance (branch,year,subject,date,attend,rollno) value(?,?,?,?,?,?) ");
$stmt->bind_param("ssssss", $branch,$year,$sub,$date,$pre,$rollno);
$stmt->execute();
$stmt->close(); }
?>
<?php
$pre = $_POST["attend9"];
$branch = $_POST["branch9"];
$year = $_POST["year9"];
$date = $_POST["date9"];
$sub = $_POST["sub9"];
$rollno = $_POST["rollno9"];


 if($pre=='a' || $pre=='A' || $pre=='p' || $pre=='P' ){

$stmt=$conn->prepare("insert into attendance (branch,year,subject,date,attend,rollno) value(?,?,?,?,?,?) ");
$stmt->bind_param("ssssss", $branch,$year,$sub,$date,$pre,$rollno);
$stmt->execute();
$stmt->close(); }
?>
<?php
$pre = $_POST["attend10"];
$branch = $_POST["branch10"];
$year = $_POST["year10"];
$date = $_POST["date10"];
$sub = $_POST["sub10"];
$rollno = $_POST["rollno10"];


 if($pre=='a' || $pre=='A' || $pre=='p' || $pre=='P' ){

$stmt=$conn->prepare("insert into attendance (branch,year,subject,date,attend,rollno) value(?,?,?,?,?,?) ");
$stmt->bind_param("ssssss", $branch,$year,$sub,$date,$pre,$rollno);
$stmt->execute();
$stmt->close(); }
?>
<?php
$pre = $_POST["attend11"];
$branch = $_POST["branch11"];
$year = $_POST["year11"];
$date = $_POST["date11"];
$sub = $_POST["sub11"];
$rollno = $_POST["rollno11"];


 if($pre=='a' || $pre=='A' || $pre=='p' || $pre=='P' ){

$stmt=$conn->prepare("insert into attendance (branch,year,subject,date,attend,rollno) value(?,?,?,?,?,?) ");
$stmt->bind_param("ssssss", $branch,$year,$sub,$date,$pre,$rollno);
$stmt->execute();
$stmt->close(); }
?>
<?php
$pre = $_POST["attend12"];
$branch = $_POST["branch12"];
$year = $_POST["year12"];
$date = $_POST["date12"];
$sub = $_POST["sub12"];
$rollno = $_POST["rollno12"];


 if($pre=='a' || $pre=='A' || $pre=='p' || $pre=='P' ){

$stmt=$conn->prepare("insert into attendance (branch,year,subject,date,attend,rollno) value(?,?,?,?,?,?) ");
$stmt->bind_param("ssssss", $branch,$year,$sub,$date,$pre,$rollno);
$stmt->execute();
$stmt->close(); }
?>
<?php
$pre = $_POST["attend13"];
$branch = $_POST["branch13"];
$year = $_POST["year13"];
$date = $_POST["date13"];
$sub = $_POST["sub13"];
$rollno = $_POST["rollno13"];


 if($pre=='a' || $pre=='A' || $pre=='p' || $pre=='P' ){

$stmt=$conn->prepare("insert into attendance (branch,year,subject,date,attend,rollno) value(?,?,?,?,?,?) ");
$stmt->bind_param("ssssss", $branch,$year,$sub,$date,$pre,$rollno);
$stmt->execute();
$stmt->close(); }
?>
<?php
$pre = $_POST["attend14"];
$branch = $_POST["branch14"];
$year = $_POST["year14"];
$date = $_POST["date14"];
$sub = $_POST["sub14"];
$rollno = $_POST["rollno14"];


 if($pre=='a' || $pre=='A' || $pre=='p' || $pre=='P' ){

$stmt=$conn->prepare("insert into attendance (branch,year,subject,date,attend,rollno) value(?,?,?,?,?,?) ");
$stmt->bind_param("ssssss", $branch,$year,$sub,$date,$pre,$rollno);
$stmt->execute();
$stmt->close(); }
?>
<?php
$pre = $_POST["attend15"];
$branch = $_POST["branch15"];
$year = $_POST["year15"];
$date = $_POST["date15"];
$sub = $_POST["sub15"];
$rollno = $_POST["rollno15"];


 if($pre=='a' || $pre=='A' || $pre=='p' || $pre=='P' ){

$stmt=$conn->prepare("insert into attendance (branch,year,subject,date,attend,rollno) value(?,?,?,?,?,?) ");
$stmt->bind_param("ssssss", $branch,$year,$sub,$date,$pre,$rollno);
$stmt->execute();
$stmt->close(); }
?>
<?php
$pre = $_POST["attend16"];
$branch = $_POST["branch16"];
$year = $_POST["year16"];
$date = $_POST["date16"];
$sub = $_POST["sub16"];
$rollno = $_POST["rollno16"];


 if($pre=='a' || $pre=='A' || $pre=='p' || $pre=='P' ){

$stmt=$conn->prepare("insert into attendance (branch,year,subject,date,attend,rollno) value(?,?,?,?,?,?) ");
$stmt->bind_param("ssssss", $branch,$year,$sub,$date,$pre,$rollno);
$stmt->execute();
$stmt->close(); }
?>
<?php
$pre = $_POST["attend17"];
$branch = $_POST["branch17"];
$year = $_POST["year17"];
$date = $_POST["date17"];
$sub = $_POST["sub17"];
$rollno = $_POST["rollno17"];


 if($pre=='a' || $pre=='A' || $pre=='p' || $pre=='P' ){

$stmt=$conn->prepare("insert into attendance (branch,year,subject,date,attend,rollno) value(?,?,?,?,?,?) ");
$stmt->bind_param("ssssss", $branch,$year,$sub,$date,$pre,$rollno);
$stmt->execute();
$stmt->close(); }
?>
<?php
$pre = $_POST["attend18"];
$branch = $_POST["branch18"];
$year = $_POST["year18"];
$date = $_POST["date18"];
$sub = $_POST["sub18"];
$rollno = $_POST["rollno18"];


 if($pre=='a' || $pre=='A' || $pre=='p' || $pre=='P' ){

$stmt=$conn->prepare("insert into attendance (branch,year,subject,date,attend,rollno) value(?,?,?,?,?,?) ");
$stmt->bind_param("ssssss", $branch,$year,$sub,$date,$pre,$rollno);
$stmt->execute();
$stmt->close(); }
?>
<?php
$pre = $_POST["attend19"];
$branch = $_POST["branch19"];
$year = $_POST["year19"];
$date = $_POST["date19"];
$sub = $_POST["sub19"];
$rollno = $_POST["rollno19"];


 if($pre=='a' || $pre=='A' || $pre=='p' || $pre=='P' ){

$stmt=$conn->prepare("insert into attendance (branch,year,subject,date,attend,rollno) value(?,?,?,?,?,?) ");
$stmt->bind_param("ssssss", $branch,$year,$sub,$date,$pre,$rollno);
$stmt->execute();
$stmt->close(); }
?>
<?php
$pre = $_POST["attend20"];
$branch = $_POST["branch20"];
$year = $_POST["year20"];
$date = $_POST["date20"];
$sub = $_POST["sub20"];
$rollno = $_POST["rollno20"];


 if($pre=='a' || $pre=='A' || $pre=='p' || $pre=='P' ){

$stmt=$conn->prepare("insert into attendance (branch,year,subject,date,attend,rollno) value(?,?,?,?,?,?) ");
$stmt->bind_param("ssssss", $branch,$year,$sub,$date,$pre,$rollno);
$stmt->execute();
$stmt->close(); }
?>
<?php
$pre = $_POST["attend21"];
$branch = $_POST["branch21"];
$year = $_POST["year21"];
$date = $_POST["date21"];
$sub = $_POST["sub21"];
$rollno = $_POST["rollno21"];


 if($pre=='a' || $pre=='A' || $pre=='p' || $pre=='P' ){

$stmt=$conn->prepare("insert into attendance (branch,year,subject,date,attend,rollno) value(?,?,?,?,?,?) ");
$stmt->bind_param("ssssss", $branch,$year,$sub,$date,$pre,$rollno);
$stmt->execute();
$stmt->close(); }
?>
<?php
$pre = $_POST["attend22"];
$branch = $_POST["branch22"];
$year = $_POST["year22"];
$date = $_POST["date22"];
$sub = $_POST["sub22"];
$rollno = $_POST["rollno22"];


 if($pre=='a' || $pre=='A' || $pre=='p' || $pre=='P' ){

$stmt=$conn->prepare("insert into attendance (branch,year,subject,date,attend,rollno) value(?,?,?,?,?,?) ");
$stmt->bind_param("ssssss", $branch,$year,$sub,$date,$pre,$rollno);
$stmt->execute();
$stmt->close(); }
?>
<?php
$pre = $_POST["attend23"];
$branch = $_POST["branch23"];
$year = $_POST["year23"];
$date = $_POST["date23"];
$sub = $_POST["sub23"];
$rollno = $_POST["rollno23"];


 if($pre=='a' || $pre=='A' || $pre=='p' || $pre=='P' ){

$stmt=$conn->prepare("insert into attendance (branch,year,subject,date,attend,rollno) value(?,?,?,?,?,?) ");
$stmt->bind_param("ssssss", $branch,$year,$sub,$date,$pre,$rollno);
$stmt->execute();
$stmt->close(); }
?>
<?php
$pre = $_POST["attend24"];
$branch = $_POST["branch24"];
$year = $_POST["year24"];
$date = $_POST["date24"];
$sub = $_POST["sub24"];
$rollno = $_POST["rollno24"];


 if($pre=='a' || $pre=='A' || $pre=='p' || $pre=='P' ){

$stmt=$conn->prepare("insert into attendance (branch,year,subject,date,attend,rollno) value(?,?,?,?,?,?) ");
$stmt->bind_param("ssssss", $branch,$year,$sub,$date,$pre,$rollno);
$stmt->execute();
$stmt->close(); }
?>
<?php
$pre = $_POST["attend25"];
$branch = $_POST["branch25"];
$year = $_POST["year25"];
$date = $_POST["date25"];
$sub = $_POST["sub25"];
$rollno = $_POST["rollno25"];


 if($pre=='a' || $pre=='A' || $pre=='p' || $pre=='P' ){

$stmt=$conn->prepare("insert into attendance (branch,year,subject,date,attend,rollno) value(?,?,?,?,?,?) ");
$stmt->bind_param("ssssss", $branch,$year,$sub,$date,$pre,$rollno);
$stmt->execute();
$stmt->close(); }
?>
<?php
$pre = $_POST["attend26"];
$branch = $_POST["branch26"];
$year = $_POST["year26"];
$date = $_POST["date26"];
$sub = $_POST["sub26"];
$rollno = $_POST["rollno26"];


 if($pre=='a' || $pre=='A' || $pre=='p' || $pre=='P' ){

$stmt=$conn->prepare("insert into attendance (branch,year,subject,date,attend,rollno) value(?,?,?,?,?,?) ");
$stmt->bind_param("ssssss", $branch,$year,$sub,$date,$pre,$rollno);
$stmt->execute();
$stmt->close(); }
?><?php
$pre = $_POST["attend27"];
$branch = $_POST["branch27"];
$year = $_POST["year27"];
$date = $_POST["date27"];
$sub = $_POST["sub27"];
$rollno = $_POST["rollno27"];


 if($pre=='a' || $pre=='A' || $pre=='p' || $pre=='P' ){

$stmt=$conn->prepare("insert into attendance (branch,year,subject,date,attend,rollno) value(?,?,?,?,?,?) ");
$stmt->bind_param("ssssss", $branch,$year,$sub,$date,$pre,$rollno);
$stmt->execute();
$stmt->close(); }
?>
<?php
$pre = $_POST["attend28"];
$branch = $_POST["branch28"];
$year = $_POST["year28"];
$date = $_POST["date28"];
$sub = $_POST["sub28"];
$rollno = $_POST["rollno28"];


 if($pre=='a' || $pre=='A' || $pre=='p' || $pre=='P' ){

$stmt=$conn->prepare("insert into attendance (branch,year,subject,date,attend,rollno) value(?,?,?,?,?,?) ");
$stmt->bind_param("ssssss", $branch,$year,$sub,$date,$pre,$rollno);
$stmt->execute();
$stmt->close(); }
?>
<?php
$pre = $_POST["attend29"];
$branch = $_POST["branch29"];
$year = $_POST["year29"];
$date = $_POST["date29"];
$sub = $_POST["sub29"];
$rollno = $_POST["rollno29"];


 if($pre=='a' || $pre=='A' || $pre=='p' || $pre=='P' ){

$stmt=$conn->prepare("insert into attendance (branch,year,subject,date,attend,rollno) value(?,?,?,?,?,?) ");
$stmt->bind_param("ssssss", $branch,$year,$sub,$date,$pre,$rollno);
$stmt->execute();
$stmt->close(); }
?>
<?php
$pre = $_POST["attend30"];
$branch = $_POST["branch30"];
$year = $_POST["year30"];
$date = $_POST["date30"];
$sub = $_POST["sub30"];
$rollno = $_POST["rollno30"];


 if($pre=='a' || $pre=='A' || $pre=='p' || $pre=='P' ){

$stmt=$conn->prepare("insert into attendance (branch,year,subject,date,attend,rollno) value(?,?,?,?,?,?) ");
$stmt->bind_param("ssssss", $branch,$year,$sub,$date,$pre,$rollno);
$stmt->execute();
$stmt->close(); }
?>
<?php
$pre = $_POST["attend31"];
$branch = $_POST["branch31"];
$year = $_POST["year31"];
$date = $_POST["date31"];
$sub = $_POST["sub31"];
$rollno = $_POST["rollno31"];


 if($pre=='a' || $pre=='A' || $pre=='p' || $pre=='P' ){

$stmt=$conn->prepare("insert into attendance (branch,year,subject,date,attend,rollno) value(?,?,?,?,?,?) ");
$stmt->bind_param("ssssss", $branch,$year,$sub,$date,$pre,$rollno);
$stmt->execute();
$stmt->close(); }
?>
<?php
$pre = $_POST["attend32"];
$branch = $_POST["branch32"];
$year = $_POST["year32"];
$date = $_POST["date32"];
$sub = $_POST["sub32"];
$rollno = $_POST["rollno32"];


 if($pre=='a' || $pre=='A' || $pre=='p' || $pre=='P' ){

$stmt=$conn->prepare("insert into attendance (branch,year,subject,date,attend,rollno) value(?,?,?,?,?,?) ");
$stmt->bind_param("ssssss", $branch,$year,$sub,$date,$pre,$rollno);
$stmt->execute();
$stmt->close(); }
?>
<?php
$pre = $_POST["attend33"];
$branch = $_POST["branch33"];
$year = $_POST["year33"];
$date = $_POST["date33"];
$sub = $_POST["sub33"];
$rollno = $_POST["rollno33"];


 if($pre=='a' || $pre=='A' || $pre=='p' || $pre=='P' ){

$stmt=$conn->prepare("insert into attendance (branch,year,subject,date,attend,rollno) value(?,?,?,?,?,?) ");
$stmt->bind_param("ssssss", $branch,$year,$sub,$date,$pre,$rollno);
$stmt->execute();
$stmt->close(); }
?>
<?php
$pre = $_POST["attend34"];
$branch = $_POST["branch34"];
$year = $_POST["year34"];
$date = $_POST["date34"];
$sub = $_POST["sub34"];
$rollno = $_POST["rollno34"];


 if($pre=='a' || $pre=='A' || $pre=='p' || $pre=='P' ){

$stmt=$conn->prepare("insert into attendance (branch,year,subject,date,attend,rollno) value(?,?,?,?,?,?) ");
$stmt->bind_param("ssssss", $branch,$year,$sub,$date,$pre,$rollno);
$stmt->execute();
$stmt->close(); }
?>
<?php
$pre = $_POST["attend35"];
$branch = $_POST["branch35"];
$year = $_POST["year35"];
$date = $_POST["date35"];
$sub = $_POST["sub35"];
$rollno = $_POST["rollno35"];


 if($pre=='a' || $pre=='A' || $pre=='p' || $pre=='P' ){

$stmt=$conn->prepare("insert into attendance (branch,year,subject,date,attend,rollno) value(?,?,?,?,?,?) ");
$stmt->bind_param("ssssss", $branch,$year,$sub,$date,$pre,$rollno);
$stmt->execute();
$stmt->close(); }
?>
<?php
$pre = $_POST["attend36"];
$branch = $_POST["branch36"];
$year = $_POST["year36"];
$date = $_POST["date36"];
$sub = $_POST["sub36"];
$rollno = $_POST["rollno36"];


 if($pre=='a' || $pre=='A' || $pre=='p' || $pre=='P' ){

$stmt=$conn->prepare("insert into attendance (branch,year,subject,date,attend,rollno) value(?,?,?,?,?,?) ");
$stmt->bind_param("ssssss", $branch,$year,$sub,$date,$pre,$rollno);
$stmt->execute();
$stmt->close(); }
?>
<?php
$pre = $_POST["attend37"];
$branch = $_POST["branch37"];
$year = $_POST["year37"];
$date = $_POST["date37"];
$sub = $_POST["sub37"];
$rollno = $_POST["rollno37"];


 if($pre=='a' || $pre=='A' || $pre=='p' || $pre=='P' ){

$stmt=$conn->prepare("insert into attendance (branch,year,subject,date,attend,rollno) value(?,?,?,?,?,?) ");
$stmt->bind_param("ssssss", $branch,$year,$sub,$date,$pre,$rollno);
$stmt->execute();
$stmt->close(); }
?>
<?php
$pre = $_POST["attend38"];
$branch = $_POST["branch38"];
$year = $_POST["year38"];
$date = $_POST["date38"];
$sub = $_POST["sub38"];
$rollno = $_POST["rollno38"];


 if($pre=='a' || $pre=='A' || $pre=='p' || $pre=='P' ){

$stmt=$conn->prepare("insert into attendance (branch,year,subject,date,attend,rollno) value(?,?,?,?,?,?) ");
$stmt->bind_param("ssssss", $branch,$year,$sub,$date,$pre,$rollno);
$stmt->execute();
$stmt->close(); }
?>
<?php
$pre = $_POST["attend39"];
$branch = $_POST["branch39"];
$year = $_POST["year39"];
$date = $_POST["date39"];
$sub = $_POST["sub39"];
$rollno = $_POST["rollno39"];


 if($pre=='a' || $pre=='A' || $pre=='p' || $pre=='P' ){

$stmt=$conn->prepare("insert into attendance (branch,year,subject,date,attend,rollno) value(?,?,?,?,?,?) ");
$stmt->bind_param("ssssss", $branch,$year,$sub,$date,$pre,$rollno);
$stmt->execute();
$stmt->close(); }
?>
<?php
$pre = $_POST["attend40"];
$branch = $_POST["branch40"];
$year = $_POST["year40"];
$date = $_POST["date40"];
$sub = $_POST["sub40"];
$rollno = $_POST["rollno40"];


 if($pre=='a' || $pre=='A' || $pre=='p' || $pre=='P' ){

$stmt=$conn->prepare("insert into attendance (branch,year,subject,date,attend,rollno) value(?,?,?,?,?,?) ");
$stmt->bind_param("ssssss", $branch,$year,$sub,$date,$pre,$rollno);
$stmt->execute();
$stmt->close(); }
?><?php
$pre = $_POST["attend41"];
$branch = $_POST["branch41"];
$year = $_POST["year41"];
$date = $_POST["date41"];
$sub = $_POST["sub41"];
$rollno = $_POST["rollno41"];


 if($pre=='a' || $pre=='A' || $pre=='p' || $pre=='P' ){

$stmt=$conn->prepare("insert into attendance (branch,year,subject,date,attend,rollno) value(?,?,?,?,?,?) ");
$stmt->bind_param("ssssss", $branch,$year,$sub,$date,$pre,$rollno);
$stmt->execute();
$stmt->close(); }
?>
<?php
$pre = $_POST["attend42"];
$branch = $_POST["branch42"];
$year = $_POST["year42"];
$date = $_POST["date42"];
$sub = $_POST["sub42"];
$rollno = $_POST["rollno42"];


 if($pre=='a' || $pre=='A' || $pre=='p' || $pre=='P' ){

$stmt=$conn->prepare("insert into attendance (branch,year,subject,date,attend,rollno) value(?,?,?,?,?,?) ");
$stmt->bind_param("ssssss", $branch,$year,$sub,$date,$pre,$rollno);
$stmt->execute();
$stmt->close(); }
?>
<?php
$pre = $_POST["attend43"];
$branch = $_POST["branch43"];
$year = $_POST["year43"];
$date = $_POST["date43"];
$sub = $_POST["sub43"];
$rollno = $_POST["rollno43"];


 if($pre=='a' || $pre=='A' || $pre=='p' || $pre=='P' ){

$stmt=$conn->prepare("insert into attendance (branch,year,subject,date,attend,rollno) value(?,?,?,?,?,?) ");
$stmt->bind_param("ssssss", $branch,$year,$sub,$date,$pre,$rollno);
$stmt->execute();
$stmt->close(); }
?>
<?php
$pre = $_POST["attend44"];
$branch = $_POST["branch44"];
$year = $_POST["year44"];
$date = $_POST["date44"];
$sub = $_POST["sub44"];
$rollno = $_POST["rollno44"];


 if($pre=='a' || $pre=='A' || $pre=='p' || $pre=='P' ){

$stmt=$conn->prepare("insert into attendance (branch,year,subject,date,attend,rollno) value(?,?,?,?,?,?) ");
$stmt->bind_param("ssssss", $branch,$year,$sub,$date,$pre,$rollno);
$stmt->execute();
$stmt->close(); }
?><?php
$pre = $_POST["attend45"];
$branch = $_POST["branch45"];
$year = $_POST["year45"];
$date = $_POST["date45"];
$sub = $_POST["sub45"];
$rollno = $_POST["rollno45"];


 if($pre=='a' || $pre=='A' || $pre=='p' || $pre=='P' ){

$stmt=$conn->prepare("insert into attendance (branch,year,subject,date,attend,rollno) value(?,?,?,?,?,?) ");
$stmt->bind_param("ssssss", $branch,$year,$sub,$date,$pre,$rollno);
$stmt->execute();
$stmt->close(); }
?>
<?php
$pre = $_POST["attend46"];
$branch = $_POST["branch46"];
$year = $_POST["year46"];
$date = $_POST["date46"];
$sub = $_POST["sub46"];
$rollno = $_POST["rollno46"];


 if($pre=='a' || $pre=='A' || $pre=='p' || $pre=='P' ){

$stmt=$conn->prepare("insert into attendance (branch,year,subject,date,attend,rollno) value(?,?,?,?,?,?) ");
$stmt->bind_param("ssssss", $branch,$year,$sub,$date,$pre,$rollno);
$stmt->execute();
$stmt->close(); }
?>
<?php
$pre = $_POST["attend47"];
$branch = $_POST["branch47"];
$year = $_POST["year47"];
$date = $_POST["date47"];
$sub = $_POST["sub47"];
$rollno = $_POST["rollno47"];


 if($pre=='a' || $pre=='A' || $pre=='p' || $pre=='P' ){

$stmt=$conn->prepare("insert into attendance (branch,year,subject,date,attend,rollno) value(?,?,?,?,?,?) ");
$stmt->bind_param("ssssss", $branch,$year,$sub,$date,$pre,$rollno);
$stmt->execute();
$stmt->close(); }
?>
<?php
$pre = $_POST["attend48"];
$branch = $_POST["branch48"];
$year = $_POST["year48"];
$date = $_POST["date48"];
$sub = $_POST["sub48"];
$rollno = $_POST["rollno48"];


 if($pre=='a' || $pre=='A' || $pre=='p' || $pre=='P' ){

$stmt=$conn->prepare("insert into attendance (branch,year,subject,date,attend,rollno) value(?,?,?,?,?,?) ");
$stmt->bind_param("ssssss", $branch,$year,$sub,$date,$pre,$rollno);
$stmt->execute();
$stmt->close(); }
?>
<?php
$pre = $_POST["attend49"];
$branch = $_POST["branch49"];
$year = $_POST["year49"];
$date = $_POST["date49"];
$sub = $_POST["sub49"];
$rollno = $_POST["rollno49"];


 if($pre=='a' || $pre=='A' || $pre=='p' || $pre=='P' ){

$stmt=$conn->prepare("insert into attendance (branch,year,subject,date,attend,rollno) value(?,?,?,?,?,?) ");
$stmt->bind_param("ssssss", $branch,$year,$sub,$date,$pre,$rollno);
$stmt->execute();
$stmt->close(); }
?>

<script>
alert("Attendance Uploaded Successfull........");
</script>
<?php  include("facultyportal.php"); ?>

<hr><hr>
</font>
</body>
</html>
<html>
<head></head><body>
<hr><hr>

<font size="6">
<?php
           $utno = $_POST["utno"];
        $branch = $_POST["branch"];
               $sem = $_POST["sem"];
          $rollno = $_POST["rollno"];
               $suba = $_POST["sub1"];
			  $subao = $_POST["sub1o"];
                 $subb = $_POST["sub2"];
                $subbo = $_POST["sub2o"];
                   $subc = $_POST["sub3"];
                  $subco = $_POST["sub3o"];
                     $subd = $_POST["sub4"];
                    $subdo = $_POST["sub4o"];
                       $sube = $_POST["sub5"];
                      $subeo = $_POST["sub5o"];
                         $subf = $_POST["sub6"];
                        $subfo = $_POST["sub6o"];
if($subao!=''){
$conn=new mysqli("localhost","root","","collegemanagement");
$stmt=$conn->prepare("insert into unittest (branch,sem,utno,rollno,sub1,sub1o,sub2,sub2o,sub3,sub3o,sub4,sub4o,sub5,sub5o,sub6,sub6o) values(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?) ");
$stmt->bind_param("ssssssssssssssss", $branch,$sem,$utno,$rollno,$suba,$subao,$subb,$subbo,$subc,$subco,$subd,$subdo,$sube,$subeo,$subf,$subfo);
$stmt->execute();
$stmt->close(); }
?>
<?php
           $utno = $_POST["utno1"];
        $branch = $_POST["branch1"];
               $sem = $_POST["sem1"];
          $rollno = $_POST["rollno1"];
               $suba = $_POST["sub11"];
			  $subao = $_POST["sub1o1"];
                 $subb = $_POST["sub21"];
                $subbo = $_POST["sub2o1"];
                   $subc = $_POST["sub31"];
                  $subco = $_POST["sub3o1"];
                     $subd = $_POST["sub41"];
                    $subdo = $_POST["sub4o1"];
                       $sube = $_POST["sub51"];
                      $subeo = $_POST["sub5o1"];
                         $subf = $_POST["sub61"];
                        $subfo = $_POST["sub6o1"];
if($subao!=''){
$conn=new mysqli("localhost","root","","collegemanagement");
$stmt=$conn->prepare("insert into unittest (branch,sem,utno,rollno,sub1,sub1o,sub2,sub2o,sub3,sub3o,sub4,sub4o,sub5,sub5o,sub6,sub6o) values(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?) ");
$stmt->bind_param("ssssssssssssssss", $branch,$sem,$utno,$rollno,$suba,$subao,$subb,$subbo,$subc,$subco,$subd,$subdo,$sube,$subeo,$subf,$subfo);
$stmt->execute();
$stmt->close(); }
?>
<?php
           $utno = $_POST["utno2"];
        $branch = $_POST["branch2"];
               $sem = $_POST["sem2"];
          $rollno = $_POST["rollno2"];
               $suba = $_POST["sub12"];
			  $subao = $_POST["sub1o2"];
                 $subb = $_POST["sub22"];
                $subbo = $_POST["sub2o2"];
                   $subc = $_POST["sub32"];
                  $subco = $_POST["sub3o2"];
                     $subd = $_POST["sub42"];
                    $subdo = $_POST["sub4o2"];
                       $sube = $_POST["sub52"];
                      $subeo = $_POST["sub5o2"];
                         $subf = $_POST["sub62"];
                        $subfo = $_POST["sub6o2"];
if($subao!=''){
$conn=new mysqli("localhost","root","","collegemanagement");
$stmt=$conn->prepare("insert into unittest (branch,sem,utno,rollno,sub1,sub1o,sub2,sub2o,sub3,sub3o,sub4,sub4o,sub5,sub5o,sub6,sub6o) values(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?) ");
$stmt->bind_param("ssssssssssssssss", $branch,$sem,$utno,$rollno,$suba,$subao,$subb,$subbo,$subc,$subco,$subd,$subdo,$sube,$subeo,$subf,$subfo);
$stmt->execute();
$stmt->close(); }
?>
<?php
           $utno = $_POST["utno3"];
        $branch = $_POST["branch3"];
               $sem = $_POST["sem3"];
          $rollno = $_POST["rollno3"];
               $suba = $_POST["sub13"];
			  $subao = $_POST["sub1o3"];
                 $subb = $_POST["sub23"];
                $subbo = $_POST["sub2o3"];
                   $subc = $_POST["sub33"];
                  $subco = $_POST["sub3o3"];
                     $subd = $_POST["sub43"];
                    $subdo = $_POST["sub4o3"];
                       $sube = $_POST["sub53"];
                      $subeo = $_POST["sub5o3"];
                         $subf = $_POST["sub63"];
                        $subfo = $_POST["sub6o3"];
if($subao!=''){
$conn=new mysqli("localhost","root","","collegemanagement");
$stmt=$conn->prepare("insert into unittest (branch,sem,utno,rollno,sub1,sub1o,sub2,sub2o,sub3,sub3o,sub4,sub4o,sub5,sub5o,sub6,sub6o) values(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?) ");
$stmt->bind_param("ssssssssssssssss", $branch,$sem,$utno,$rollno,$suba,$subao,$subb,$subbo,$subc,$subco,$subd,$subdo,$sube,$subeo,$subf,$subfo);
$stmt->execute();
$stmt->close(); }
?>
<?php
           $utno = $_POST["utno4"];
        $branch = $_POST["branch4"];
               $sem = $_POST["sem4"];
          $rollno = $_POST["rollno4"];
               $suba = $_POST["sub14"];
			  $subao = $_POST["sub1o4"];
                 $subb = $_POST["sub24"];
                $subbo = $_POST["sub2o4"];
                   $subc = $_POST["sub34"];
                  $subco = $_POST["sub3o4"];
                     $subd = $_POST["sub44"];
                    $subdo = $_POST["sub4o4"];
                       $sube = $_POST["sub54"];
                      $subeo = $_POST["sub5o4"];
                         $subf = $_POST["sub64"];
                        $subfo = $_POST["sub6o4"];
if($subao!=''){
$conn=new mysqli("localhost","root","","collegemanagement");
$stmt=$conn->prepare("insert into unittest (branch,sem,utno,rollno,sub1,sub1o,sub2,sub2o,sub3,sub3o,sub4,sub4o,sub5,sub5o,sub6,sub6o) values(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?) ");
$stmt->bind_param("ssssssssssssssss", $branch,$sem,$utno,$rollno,$suba,$subao,$subb,$subbo,$subc,$subco,$subd,$subdo,$sube,$subeo,$subf,$subfo);
$stmt->execute();
$stmt->close(); }
?>
<?php
           $utno = $_POST["utno5"];
        $branch = $_POST["branch5"];
               $sem = $_POST["sem5"];
          $rollno = $_POST["rollno5"];
               $suba = $_POST["sub15"];
			  $subao = $_POST["sub1o5"];
                 $subb = $_POST["sub25"];
                $subbo = $_POST["sub2o5"];
                   $subc = $_POST["sub35"];
                  $subco = $_POST["sub3o5"];
                     $subd = $_POST["sub45"];
                    $subdo = $_POST["sub4o5"];
                       $sube = $_POST["sub55"];
                      $subeo = $_POST["sub5o5"];
                         $subf = $_POST["sub65"];
                        $subfo = $_POST["sub6o5"];
if($subao!=''){
$conn=new mysqli("localhost","root","","collegemanagement");
$stmt=$conn->prepare("insert into unittest (branch,sem,utno,rollno,sub1,sub1o,sub2,sub2o,sub3,sub3o,sub4,sub4o,sub5,sub5o,sub6,sub6o) values(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?) ");
$stmt->bind_param("ssssssssssssssss", $branch,$sem,$utno,$rollno,$suba,$subao,$subb,$subbo,$subc,$subco,$subd,$subdo,$sube,$subeo,$subf,$subfo);
$stmt->execute();
$stmt->close(); }
?>
<?php
           $utno = $_POST["utno6"];
        $branch = $_POST["branch6"];
               $sem = $_POST["sem6"];
          $rollno = $_POST["rollno6"];
               $suba = $_POST["sub16"];
			  $subao = $_POST["sub1o6"];
                 $subb = $_POST["sub26"];
                $subbo = $_POST["sub2o6"];
                   $subc = $_POST["sub36"];
                  $subco = $_POST["sub3o6"];
                     $subd = $_POST["sub46"];
                    $subdo = $_POST["sub4o6"];
                       $sube = $_POST["sub56"];
                      $subeo = $_POST["sub5o6"];
                         $subf = $_POST["sub66"];
                        $subfo = $_POST["sub6o6"];
if($subao!=''){
$conn=new mysqli("localhost","root","","collegemanagement");
$stmt=$conn->prepare("insert into unittest (branch,sem,utno,rollno,sub1,sub1o,sub2,sub2o,sub3,sub3o,sub4,sub4o,sub5,sub5o,sub6,sub6o) values(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?) ");
$stmt->bind_param("ssssssssssssssss", $branch,$sem,$utno,$rollno,$suba,$subao,$subb,$subbo,$subc,$subco,$subd,$subdo,$sube,$subeo,$subf,$subfo);
$stmt->execute();
$stmt->close(); }
?>
<?php
           $utno = $_POST["utno7"];
        $branch = $_POST["branch7"];
               $sem = $_POST["sem7"];
          $rollno = $_POST["rollno7"];
               $suba = $_POST["sub17"];
			  $subao = $_POST["sub1o7"];
                 $subb = $_POST["sub27"];
                $subbo = $_POST["sub2o7"];
                   $subc = $_POST["sub37"];
                  $subco = $_POST["sub3o7"];
                     $subd = $_POST["sub47"];
                    $subdo = $_POST["sub4o7"];
                       $sube = $_POST["sub57"];
                      $subeo = $_POST["sub5o7"];
                         $subf = $_POST["sub67"];
                        $subfo = $_POST["sub6o7"];
if($subao!=''){
$conn=new mysqli("localhost","root","","collegemanagement");
$stmt=$conn->prepare("insert into unittest (branch,sem,utno,rollno,sub1,sub1o,sub2,sub2o,sub3,sub3o,sub4,sub4o,sub5,sub5o,sub6,sub6o) values(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?) ");
$stmt->bind_param("ssssssssssssssss", $branch,$sem,$utno,$rollno,$suba,$subao,$subb,$subbo,$subc,$subco,$subd,$subdo,$sube,$subeo,$subf,$subfo);
$stmt->execute();
$stmt->close(); }
?>
<?php
           $utno = $_POST["utno8"];
        $branch = $_POST["branch8"];
               $sem = $_POST["sem8"];
          $rollno = $_POST["rollno8"];
               $suba = $_POST["sub18"];
			  $subao = $_POST["sub1o8"];
                 $subb = $_POST["sub28"];
                $subbo = $_POST["sub2o8"];
                   $subc = $_POST["sub38"];
                  $subco = $_POST["sub3o8"];
                     $subd = $_POST["sub48"];
                    $subdo = $_POST["sub4o8"];
                       $sube = $_POST["sub58"];
                      $subeo = $_POST["sub5o8"];
                         $subf = $_POST["sub68"];
                        $subfo = $_POST["sub6o8"];
if($subao!=''){
$conn=new mysqli("localhost","root","","collegemanagement");
$stmt=$conn->prepare("insert into unittest (branch,sem,utno,rollno,sub1,sub1o,sub2,sub2o,sub3,sub3o,sub4,sub4o,sub5,sub5o,sub6,sub6o) values(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?) ");
$stmt->bind_param("ssssssssssssssss", $branch,$sem,$utno,$rollno,$suba,$subao,$subb,$subbo,$subc,$subco,$subd,$subdo,$sube,$subeo,$subf,$subfo);
$stmt->execute();
$stmt->close(); }
?>
<?php
           $utno = $_POST["utno9"];
        $branch = $_POST["branch9"];
               $sem = $_POST["sem9"];
          $rollno = $_POST["rollno9"];
               $suba = $_POST["sub19"];
			  $subao = $_POST["sub1o9"];
                 $subb = $_POST["sub29"];
                $subbo = $_POST["sub2o9"];
                   $subc = $_POST["sub39"];
                  $subco = $_POST["sub3o9"];
                     $subd = $_POST["sub49"];
                    $subdo = $_POST["sub4o9"];
                       $sube = $_POST["sub59"];
                      $subeo = $_POST["sub5o9"];
                         $subf = $_POST["sub69"];
                        $subfo = $_POST["sub6o9"];
if($subao!=''){
$conn=new mysqli("localhost","root","","collegemanagement");
$stmt=$conn->prepare("insert into unittest (branch,sem,utno,rollno,sub1,sub1o,sub2,sub2o,sub3,sub3o,sub4,sub4o,sub5,sub5o,sub6,sub6o) values(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?) ");
$stmt->bind_param("ssssssssssssssss", $branch,$sem,$utno,$rollno,$suba,$subao,$subb,$subbo,$subc,$subco,$subd,$subdo,$sube,$subeo,$subf,$subfo);
$stmt->execute();
$stmt->close(); }
?>
<?php
           $utno = $_POST["utno10"];
        $branch = $_POST["branch10"];
               $sem = $_POST["sem10"];
          $rollno = $_POST["rollno10"];
               $suba = $_POST["sub110"];
			  $subao = $_POST["sub1o10"];
                 $subb = $_POST["sub210"];
                $subbo = $_POST["sub2o10"];
                   $subc = $_POST["sub310"];
                  $subco = $_POST["sub3o10"];
                     $subd = $_POST["sub410"];
                    $subdo = $_POST["sub4o10"];
                       $sube = $_POST["sub510"];
                      $subeo = $_POST["sub5o10"];
                         $subf = $_POST["sub610"];
                        $subfo = $_POST["sub6o10"];
if($subao!=''){
$conn=new mysqli("localhost","root","","collegemanagement");
$stmt=$conn->prepare("insert into unittest (branch,sem,utno,rollno,sub1,sub1o,sub2,sub2o,sub3,sub3o,sub4,sub4o,sub5,sub5o,sub6,sub6o) values(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?) ");
$stmt->bind_param("ssssssssssssssss", $branch,$sem,$utno,$rollno,$suba,$subao,$subb,$subbo,$subc,$subco,$subd,$subdo,$sube,$subeo,$subf,$subfo);
$stmt->execute();
$stmt->close(); }
?>

<?php
           $utno = $_POST["utno11"];
         $branch = $_POST["branch11"];
                 $sem = $_POST["sem11"];
             $rollno = $_POST["rollno11"];
                   $suba = $_POST["sub111"];
			       $subao = $_POST["sub1o11"];
                       $subb = $_POST["sub211"];
                       $subbo = $_POST["sub2o11"];
                           $subc = $_POST["sub311"];
                           $subco = $_POST["sub3o11"];
                               $subd = $_POST["sub411"];
                               $subdo = $_POST["sub4o11"];
                                   $sube = $_POST["sub511"];
                                   $subeo = $_POST["sub5o11"];
                                       $subf = $_POST["sub611"];
                                       $subfo = $_POST["sub6o11"];
if($subao!=''){
$conn=new mysqli("localhost","root","","collegemanagement");
$stmt=$conn->prepare("insert into unittest (branch,sem,utno,rollno,sub1,sub1o,sub2,sub2o,sub3,sub3o,sub4,sub4o,sub5,sub5o,sub6,sub6o) values(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?) ");
$stmt->bind_param("ssssssssssssssss", $branch,$sem,$utno,$rollno,$suba,$subao,$subb,$subbo,$subc,$subco,$subd,$subdo,$sube,$subeo,$subf,$subfo);
$stmt->execute();
$stmt->close(); }
?>

<?php
           $utno = $_POST["utno12"];
         $branch = $_POST["branch12"];
                 $sem = $_POST["sem12"];
             $rollno = $_POST["rollno12"];
                   $suba = $_POST["sub112"];
			       $subao = $_POST["sub1o12"];
                       $subb = $_POST["sub212"];
                       $subbo = $_POST["sub2o12"];
                           $subc = $_POST["sub312"];
                           $subco = $_POST["sub3o12"];
                               $subd = $_POST["sub412"];
                               $subdo = $_POST["sub4o12"];
                                   $sube = $_POST["sub512"];
                                   $subeo = $_POST["sub5o12"];
                                       $subf = $_POST["sub612"];
                                       $subfo = $_POST["sub6o12"];
if($subao!=''){
$conn=new mysqli("localhost","root","","collegemanagement");
$stmt=$conn->prepare("insert into unittest (branch,sem,utno,rollno,sub1,sub1o,sub2,sub2o,sub3,sub3o,sub4,sub4o,sub5,sub5o,sub6,sub6o) values(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?) ");
$stmt->bind_param("ssssssssssssssss", $branch,$sem,$utno,$rollno,$suba,$subao,$subb,$subbo,$subc,$subco,$subd,$subdo,$sube,$subeo,$subf,$subfo);
$stmt->execute();
$stmt->close(); }
?>

<?php
           $utno = $_POST["utno13"];
         $branch = $_POST["branch13"];
                 $sem = $_POST["sem13"];
             $rollno = $_POST["rollno13"];
                   $suba = $_POST["sub113"];
			       $subao = $_POST["sub1o13"];
                       $subb = $_POST["sub213"];
                       $subbo = $_POST["sub2o13"];
                           $subc = $_POST["sub313"];
                           $subco = $_POST["sub3o13"];
                               $subd = $_POST["sub413"];
                               $subdo = $_POST["sub4o13"];
                                   $sube = $_POST["sub513"];
                                   $subeo = $_POST["sub5o13"];
                                       $subf = $_POST["sub613"];
                                       $subfo = $_POST["sub6o13"];
if($subao!=''){
$conn=new mysqli("localhost","root","","collegemanagement");
$stmt=$conn->prepare("insert into unittest (branch,sem,utno,rollno,sub1,sub1o,sub2,sub2o,sub3,sub3o,sub4,sub4o,sub5,sub5o,sub6,sub6o) values(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?) ");
$stmt->bind_param("ssssssssssssssss", $branch,$sem,$utno,$rollno,$suba,$subao,$subb,$subbo,$subc,$subco,$subd,$subdo,$sube,$subeo,$subf,$subfo);
$stmt->execute();
$stmt->close(); }
?>

<?php
           $utno = $_POST["utno14"];
         $branch = $_POST["branch14"];
                 $sem = $_POST["sem14"];
             $rollno = $_POST["rollno14"];
                   $suba = $_POST["sub114"];
			       $subao = $_POST["sub1o14"];
                       $subb = $_POST["sub214"];
                       $subbo = $_POST["sub2o14"];
                           $subc = $_POST["sub314"];
                           $subco = $_POST["sub3o14"];
                               $subd = $_POST["sub414"];
                               $subdo = $_POST["sub4o14"];
                                   $sube = $_POST["sub514"];
                                   $subeo = $_POST["sub5o14"];
                                       $subf = $_POST["sub614"];
                                       $subfo = $_POST["sub6o14"];
if($subao!=''){
$conn=new mysqli("localhost","root","","collegemanagement");
$stmt=$conn->prepare("insert into unittest (branch,sem,utno,rollno,sub1,sub1o,sub2,sub2o,sub3,sub3o,sub4,sub4o,sub5,sub5o,sub6,sub6o) values(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?) ");
$stmt->bind_param("ssssssssssssssss", $branch,$sem,$utno,$rollno,$suba,$subao,$subb,$subbo,$subc,$subco,$subd,$subdo,$sube,$subeo,$subf,$subfo);
$stmt->execute();
$stmt->close(); }
?>

<?php
           $utno = $_POST["utno15"];
         $branch = $_POST["branch15"];
                 $sem = $_POST["sem15"];
             $rollno = $_POST["rollno15"];
                   $suba = $_POST["sub115"];
			       $subao = $_POST["sub1o15"];
                       $subb = $_POST["sub215"];
                       $subbo = $_POST["sub2o15"];
                           $subc = $_POST["sub315"];
                           $subco = $_POST["sub3o15"];
                               $subd = $_POST["sub415"];
                               $subdo = $_POST["sub4o15"];
                                   $sube = $_POST["sub515"];
                                   $subeo = $_POST["sub5o15"];
                                       $subf = $_POST["sub615"];
                                       $subfo = $_POST["sub6o15"];
if($subao!=''){
$conn=new mysqli("localhost","root","","collegemanagement");
$stmt=$conn->prepare("insert into unittest (branch,sem,utno,rollno,sub1,sub1o,sub2,sub2o,sub3,sub3o,sub4,sub4o,sub5,sub5o,sub6,sub6o) values(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?) ");
$stmt->bind_param("ssssssssssssssss", $branch,$sem,$utno,$rollno,$suba,$subao,$subb,$subbo,$subc,$subco,$subd,$subdo,$sube,$subeo,$subf,$subfo);
$stmt->execute();
$stmt->close(); }
?>

<?php
           $utno = $_POST["utno16"];
         $branch = $_POST["branch16"];
                 $sem = $_POST["sem16"];
             $rollno = $_POST["rollno16"];
                   $suba = $_POST["sub116"];
			       $subao = $_POST["sub1o16"];
                       $subb = $_POST["sub216"];
                       $subbo = $_POST["sub2o16"];
                           $subc = $_POST["sub316"];
                           $subco = $_POST["sub3o16"];
                               $subd = $_POST["sub416"];
                               $subdo = $_POST["sub4o16"];
                                   $sube = $_POST["sub516"];
                                   $subeo = $_POST["sub5o16"];
                                       $subf = $_POST["sub616"];
                                       $subfo = $_POST["sub6o16"];
if($subao!=''){
$conn=new mysqli("localhost","root","","collegemanagement");
$stmt=$conn->prepare("insert into unittest (branch,sem,utno,rollno,sub1,sub1o,sub2,sub2o,sub3,sub3o,sub4,sub4o,sub5,sub5o,sub6,sub6o) values(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?) ");
$stmt->bind_param("ssssssssssssssss", $branch,$sem,$utno,$rollno,$suba,$subao,$subb,$subbo,$subc,$subco,$subd,$subdo,$sube,$subeo,$subf,$subfo);
$stmt->execute();
$stmt->close(); }
?>

<?php
           $utno = $_POST["utno17"];
         $branch = $_POST["branch17"];
                 $sem = $_POST["sem17"];
             $rollno = $_POST["rollno17"];
                   $suba = $_POST["sub117"];
			       $subao = $_POST["sub1o17"];
                       $subb = $_POST["sub217"];
                       $subbo = $_POST["sub2o17"];
                           $subc = $_POST["sub317"];
                           $subco = $_POST["sub3o17"];
                               $subd = $_POST["sub417"];
                               $subdo = $_POST["sub4o17"];
                                   $sube = $_POST["sub517"];
                                   $subeo = $_POST["sub5o17"];
                                       $subf = $_POST["sub617"];
                                       $subfo = $_POST["sub6o17"];
if($subao!=''){
$conn=new mysqli("localhost","root","","collegemanagement");
$stmt=$conn->prepare("insert into unittest (branch,sem,utno,rollno,sub1,sub1o,sub2,sub2o,sub3,sub3o,sub4,sub4o,sub5,sub5o,sub6,sub6o) values(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?) ");
$stmt->bind_param("ssssssssssssssss", $branch,$sem,$utno,$rollno,$suba,$subao,$subb,$subbo,$subc,$subco,$subd,$subdo,$sube,$subeo,$subf,$subfo);
$stmt->execute();
$stmt->close(); }
?>

<?php
           $utno = $_POST["utno18"];
         $branch = $_POST["branch18"];
                 $sem = $_POST["sem18"];
             $rollno = $_POST["rollno18"];
                   $suba = $_POST["sub118"];
			       $subao = $_POST["sub1o18"];
                       $subb = $_POST["sub218"];
                       $subbo = $_POST["sub2o18"];
                           $subc = $_POST["sub318"];
                           $subco = $_POST["sub3o18"];
                               $subd = $_POST["sub418"];
                               $subdo = $_POST["sub4o18"];
                                   $sube = $_POST["sub518"];
                                   $subeo = $_POST["sub5o18"];
                                       $subf = $_POST["sub618"];
                                       $subfo = $_POST["sub6o18"];
if($subao!=''){
$conn=new mysqli("localhost","root","","collegemanagement");
$stmt=$conn->prepare("insert into unittest (branch,sem,utno,rollno,sub1,sub1o,sub2,sub2o,sub3,sub3o,sub4,sub4o,sub5,sub5o,sub6,sub6o) values(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?) ");
$stmt->bind_param("ssssssssssssssss", $branch,$sem,$utno,$rollno,$suba,$subao,$subb,$subbo,$subc,$subco,$subd,$subdo,$sube,$subeo,$subf,$subfo);
$stmt->execute();
$stmt->close(); }
?>

<?php
           $utno = $_POST["utno19"];
         $branch = $_POST["branch19"];
                 $sem = $_POST["sem19"];
             $rollno = $_POST["rollno19"];
                   $suba = $_POST["sub119"];
			       $subao = $_POST["sub1o19"];
                       $subb = $_POST["sub219"];
                       $subbo = $_POST["sub2o19"];
                           $subc = $_POST["sub319"];
                           $subco = $_POST["sub3o19"];
                               $subd = $_POST["sub419"];
                               $subdo = $_POST["sub4o19"];
                                   $sube = $_POST["sub519"];
                                   $subeo = $_POST["sub5o19"];
                                       $subf = $_POST["sub619"];
                                       $subfo = $_POST["sub6o19"];
if($subao!=''){
$conn=new mysqli("localhost","root","","collegemanagement");
$stmt=$conn->prepare("insert into unittest (branch,sem,utno,rollno,sub1,sub1o,sub2,sub2o,sub3,sub3o,sub4,sub4o,sub5,sub5o,sub6,sub6o) values(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?) ");
$stmt->bind_param("ssssssssssssssss", $branch,$sem,$utno,$rollno,$suba,$subao,$subb,$subbo,$subc,$subco,$subd,$subdo,$sube,$subeo,$subf,$subfo);
$stmt->execute();
$stmt->close(); }
?>

<?php
           $utno = $_POST["utno20"];
         $branch = $_POST["branch20"];
                 $sem = $_POST["sem20"];
             $rollno = $_POST["rollno20"];
                   $suba = $_POST["sub120"];
			       $subao = $_POST["sub1o20"];
                       $subb = $_POST["sub220"];
                       $subbo = $_POST["sub2o20"];
                           $subc = $_POST["sub320"];
                           $subco = $_POST["sub3o20"];
                               $subd = $_POST["sub420"];
                               $subdo = $_POST["sub4o20"];
                                   $sube = $_POST["sub520"];
                                   $subeo = $_POST["sub5o20"];
                                       $subf = $_POST["sub620"];
                                       $subfo = $_POST["sub6o20"];
if($subao!=''){
$conn=new mysqli("localhost","root","","collegemanagement");
$stmt=$conn->prepare("insert into unittest (branch,sem,utno,rollno,sub1,sub1o,sub2,sub2o,sub3,sub3o,sub4,sub4o,sub5,sub5o,sub6,sub6o) values(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?) ");
$stmt->bind_param("ssssssssssssssss", $branch,$sem,$utno,$rollno,$suba,$subao,$subb,$subbo,$subc,$subco,$subd,$subdo,$sube,$subeo,$subf,$subfo);
$stmt->execute();
$stmt->close(); }
?>

<?php
           $utno = $_POST["utno21"];
         $branch = $_POST["branch21"];
                 $sem = $_POST["sem21"];
             $rollno = $_POST["rollno21"];
                   $suba = $_POST["sub121"];
			       $subao = $_POST["sub1o21"];
                       $subb = $_POST["sub221"];
                       $subbo = $_POST["sub2o21"];
                           $subc = $_POST["sub321"];
                           $subco = $_POST["sub3o21"];
                               $subd = $_POST["sub421"];
                               $subdo = $_POST["sub4o21"];
                                   $sube = $_POST["sub521"];
                                   $subeo = $_POST["sub5o21"];
                                       $subf = $_POST["sub621"];
                                       $subfo = $_POST["sub6o21"];
if($subao!=''){
$conn=new mysqli("localhost","root","","collegemanagement");
$stmt=$conn->prepare("insert into unittest (branch,sem,utno,rollno,sub1,sub1o,sub2,sub2o,sub3,sub3o,sub4,sub4o,sub5,sub5o,sub6,sub6o) values(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?) ");
$stmt->bind_param("ssssssssssssssss", $branch,$sem,$utno,$rollno,$suba,$subao,$subb,$subbo,$subc,$subco,$subd,$subdo,$sube,$subeo,$subf,$subfo);
$stmt->execute();
$stmt->close(); }
?>

<?php
           $utno = $_POST["utno22"];
         $branch = $_POST["branch22"];
                 $sem = $_POST["sem22"];
             $rollno = $_POST["rollno22"];
                   $suba = $_POST["sub122"];
			       $subao = $_POST["sub1o22"];
                       $subb = $_POST["sub222"];
                       $subbo = $_POST["sub2o22"];
                           $subc = $_POST["sub322"];
                           $subco = $_POST["sub3o22"];
                               $subd = $_POST["sub422"];
                               $subdo = $_POST["sub4o22"];
                                   $sube = $_POST["sub522"];
                                   $subeo = $_POST["sub5o22"];
                                       $subf = $_POST["sub622"];
                                       $subfo = $_POST["sub6o22"];
if($subao!=''){
$conn=new mysqli("localhost","root","","collegemanagement");
$stmt=$conn->prepare("insert into unittest (branch,sem,utno,rollno,sub1,sub1o,sub2,sub2o,sub3,sub3o,sub4,sub4o,sub5,sub5o,sub6,sub6o) values(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?) ");
$stmt->bind_param("ssssssssssssssss", $branch,$sem,$utno,$rollno,$suba,$subao,$subb,$subbo,$subc,$subco,$subd,$subdo,$sube,$subeo,$subf,$subfo);
$stmt->execute();
$stmt->close(); }
?>

<?php
           $utno = $_POST["utno23"];
         $branch = $_POST["branch23"];
                 $sem = $_POST["sem23"];
             $rollno = $_POST["rollno23"];
                   $suba = $_POST["sub123"];
			       $subao = $_POST["sub1o23"];
                       $subb = $_POST["sub223"];
                       $subbo = $_POST["sub2o23"];
                           $subc = $_POST["sub323"];
                           $subco = $_POST["sub3o23"];
                               $subd = $_POST["sub423"];
                               $subdo = $_POST["sub4o23"];
                                   $sube = $_POST["sub523"];
                                   $subeo = $_POST["sub5o23"];
                                       $subf = $_POST["sub623"];
                                       $subfo = $_POST["sub6o23"];
if($subao!=''){
$conn=new mysqli("localhost","root","","collegemanagement");
$stmt=$conn->prepare("insert into unittest (branch,sem,utno,rollno,sub1,sub1o,sub2,sub2o,sub3,sub3o,sub4,sub4o,sub5,sub5o,sub6,sub6o) values(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?) ");
$stmt->bind_param("ssssssssssssssss", $branch,$sem,$utno,$rollno,$suba,$subao,$subb,$subbo,$subc,$subco,$subd,$subdo,$sube,$subeo,$subf,$subfo);
$stmt->execute();
$stmt->close(); }
?>

<?php
           $utno = $_POST["utno24"];
         $branch = $_POST["branch24"];
                 $sem = $_POST["sem24"];
             $rollno = $_POST["rollno24"];
                   $suba = $_POST["sub124"];
			       $subao = $_POST["sub1o24"];
                       $subb = $_POST["sub224"];
                       $subbo = $_POST["sub2o24"];
                           $subc = $_POST["sub324"];
                           $subco = $_POST["sub3o24"];
                               $subd = $_POST["sub424"];
                               $subdo = $_POST["sub4o24"];
                                   $sube = $_POST["sub524"];
                                   $subeo = $_POST["sub5o24"];
                                       $subf = $_POST["sub624"];
                                       $subfo = $_POST["sub6o24"];
if($subao!=''){
$conn=new mysqli("localhost","root","","collegemanagement");
$stmt=$conn->prepare("insert into unittest (branch,sem,utno,rollno,sub1,sub1o,sub2,sub2o,sub3,sub3o,sub4,sub4o,sub5,sub5o,sub6,sub6o) values(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?) ");
$stmt->bind_param("ssssssssssssssss", $branch,$sem,$utno,$rollno,$suba,$subao,$subb,$subbo,$subc,$subco,$subd,$subdo,$sube,$subeo,$subf,$subfo);
$stmt->execute();
$stmt->close(); }
?>

<?php
           $utno = $_POST["utno25"];
         $branch = $_POST["branch25"];
                 $sem = $_POST["sem25"];
             $rollno = $_POST["rollno25"];
                   $suba = $_POST["sub125"];
			       $subao = $_POST["sub1o25"];
                       $subb = $_POST["sub225"];
                       $subbo = $_POST["sub2o25"];
                           $subc = $_POST["sub325"];
                           $subco = $_POST["sub3o25"];
                               $subd = $_POST["sub425"];
                               $subdo = $_POST["sub4o25"];
                                   $sube = $_POST["sub525"];
                                   $subeo = $_POST["sub5o25"];
                                       $subf = $_POST["sub625"];
                                       $subfo = $_POST["sub6o25"];
if($subao!=''){
$conn=new mysqli("localhost","root","","collegemanagement");
$stmt=$conn->prepare("insert into unittest (branch,sem,utno,rollno,sub1,sub1o,sub2,sub2o,sub3,sub3o,sub4,sub4o,sub5,sub5o,sub6,sub6o) values(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?) ");
$stmt->bind_param("ssssssssssssssss", $branch,$sem,$utno,$rollno,$suba,$subao,$subb,$subbo,$subc,$subco,$subd,$subdo,$sube,$subeo,$subf,$subfo);
$stmt->execute();
$stmt->close(); }
?>

<?php
           $utno = $_POST["utno26"];
         $branch = $_POST["branch26"];
                 $sem = $_POST["sem26"];
             $rollno = $_POST["rollno26"];
                   $suba = $_POST["sub126"];
			       $subao = $_POST["sub1o26"];
                       $subb = $_POST["sub226"];
                       $subbo = $_POST["sub2o26"];
                           $subc = $_POST["sub326"];
                           $subco = $_POST["sub3o26"];
                               $subd = $_POST["sub426"];
                               $subdo = $_POST["sub4o26"];
                                   $sube = $_POST["sub526"];
                                   $subeo = $_POST["sub5o26"];
                                       $subf = $_POST["sub626"];
                                       $subfo = $_POST["sub6o26"];
if($subao!=''){
$conn=new mysqli("localhost","root","","collegemanagement");
$stmt=$conn->prepare("insert into unittest (branch,sem,utno,rollno,sub1,sub1o,sub2,sub2o,sub3,sub3o,sub4,sub4o,sub5,sub5o,sub6,sub6o) values(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?) ");
$stmt->bind_param("ssssssssssssssss", $branch,$sem,$utno,$rollno,$suba,$subao,$subb,$subbo,$subc,$subco,$subd,$subdo,$sube,$subeo,$subf,$subfo);
$stmt->execute();
$stmt->close(); }
?>

<?php
           $utno = $_POST["utno27"];
         $branch = $_POST["branch27"];
                 $sem = $_POST["sem27"];
             $rollno = $_POST["rollno27"];
                   $suba = $_POST["sub127"];
			       $subao = $_POST["sub1o27"];
                       $subb = $_POST["sub227"];
                       $subbo = $_POST["sub2o27"];
                           $subc = $_POST["sub327"];
                           $subco = $_POST["sub3o27"];
                               $subd = $_POST["sub427"];
                               $subdo = $_POST["sub4o27"];
                                   $sube = $_POST["sub527"];
                                   $subeo = $_POST["sub5o27"];
                                       $subf = $_POST["sub627"];
                                       $subfo = $_POST["sub6o27"];
if($subao!=''){
$conn=new mysqli("localhost","root","","collegemanagement");
$stmt=$conn->prepare("insert into unittest (branch,sem,utno,rollno,sub1,sub1o,sub2,sub2o,sub3,sub3o,sub4,sub4o,sub5,sub5o,sub6,sub6o) values(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?) ");
$stmt->bind_param("ssssssssssssssss", $branch,$sem,$utno,$rollno,$suba,$subao,$subb,$subbo,$subc,$subco,$subd,$subdo,$sube,$subeo,$subf,$subfo);
$stmt->execute();
$stmt->close(); }
?>

<?php
           $utno = $_POST["utno28"];
         $branch = $_POST["branch28"];
                 $sem = $_POST["sem28"];
             $rollno = $_POST["rollno28"];
                   $suba = $_POST["sub128"];
			       $subao = $_POST["sub1o28"];
                       $subb = $_POST["sub228"];
                       $subbo = $_POST["sub2o28"];
                           $subc = $_POST["sub328"];
                           $subco = $_POST["sub3o28"];
                               $subd = $_POST["sub428"];
                               $subdo = $_POST["sub4o28"];
                                   $sube = $_POST["sub528"];
                                   $subeo = $_POST["sub5o28"];
                                       $subf = $_POST["sub628"];
                                       $subfo = $_POST["sub6o28"];
if($subao!=''){
$conn=new mysqli("localhost","root","","collegemanagement");
$stmt=$conn->prepare("insert into unittest (branch,sem,utno,rollno,sub1,sub1o,sub2,sub2o,sub3,sub3o,sub4,sub4o,sub5,sub5o,sub6,sub6o) values(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?) ");
$stmt->bind_param("ssssssssssssssss", $branch,$sem,$utno,$rollno,$suba,$subao,$subb,$subbo,$subc,$subco,$subd,$subdo,$sube,$subeo,$subf,$subfo);
$stmt->execute();
$stmt->close(); }
?>

<?php
           $utno = $_POST["utno29"];
         $branch = $_POST["branch29"];
                 $sem = $_POST["sem29"];
             $rollno = $_POST["rollno29"];
                   $suba = $_POST["sub129"];
			       $subao = $_POST["sub1o29"];
                       $subb = $_POST["sub229"];
                       $subbo = $_POST["sub2o29"];
                           $subc = $_POST["sub329"];
                           $subco = $_POST["sub3o29"];
                               $subd = $_POST["sub429"];
                               $subdo = $_POST["sub4o29"];
                                   $sube = $_POST["sub529"];
                                   $subeo = $_POST["sub5o29"];
                                       $subf = $_POST["sub629"];
                                       $subfo = $_POST["sub6o29"];
if($subao!=''){
$conn=new mysqli("localhost","root","","collegemanagement");
$stmt=$conn->prepare("insert into unittest (branch,sem,utno,rollno,sub1,sub1o,sub2,sub2o,sub3,sub3o,sub4,sub4o,sub5,sub5o,sub6,sub6o) values(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?) ");
$stmt->bind_param("ssssssssssssssss", $branch,$sem,$utno,$rollno,$suba,$subao,$subb,$subbo,$subc,$subco,$subd,$subdo,$sube,$subeo,$subf,$subfo);
$stmt->execute();
$stmt->close(); }
?>

<?php
           $utno = $_POST["utno30"];
         $branch = $_POST["branch30"];
                 $sem = $_POST["sem30"];
             $rollno = $_POST["rollno30"];
                   $suba = $_POST["sub130"];
			       $subao = $_POST["sub1o30"];
                       $subb = $_POST["sub230"];
                       $subbo = $_POST["sub2o30"];
                           $subc = $_POST["sub330"];
                           $subco = $_POST["sub3o30"];
                               $subd = $_POST["sub430"];
                               $subdo = $_POST["sub4o30"];
                                   $sube = $_POST["sub530"];
                                   $subeo = $_POST["sub5o30"];
                                       $subf = $_POST["sub630"];
                                       $subfo = $_POST["sub6o30"];
if($subao!=''){
$conn=new mysqli("localhost","root","","collegemanagement");
$stmt=$conn->prepare("insert into unittest (branch,sem,utno,rollno,sub1,sub1o,sub2,sub2o,sub3,sub3o,sub4,sub4o,sub5,sub5o,sub6,sub6o) values(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?) ");
$stmt->bind_param("ssssssssssssssss", $branch,$sem,$utno,$rollno,$suba,$subao,$subb,$subbo,$subc,$subco,$subd,$subdo,$sube,$subeo,$subf,$subfo);
$stmt->execute();
$stmt->close(); }
?>

<?php
           $utno = $_POST["utno31"];
         $branch = $_POST["branch31"];
                 $sem = $_POST["sem31"];
             $rollno = $_POST["rollno31"];
                   $suba = $_POST["sub131"];
			       $subao = $_POST["sub1o31"];
                       $subb = $_POST["sub231"];
                       $subbo = $_POST["sub2o31"];
                           $subc = $_POST["sub331"];
                           $subco = $_POST["sub3o31"];
                               $subd = $_POST["sub431"];
                               $subdo = $_POST["sub4o31"];
                                   $sube = $_POST["sub531"];
                                   $subeo = $_POST["sub5o31"];
                                       $subf = $_POST["sub631"];
                                       $subfo = $_POST["sub6o31"];
if($subao!=''){
$conn=new mysqli("localhost","root","","collegemanagement");
$stmt=$conn->prepare("insert into unittest (branch,sem,utno,rollno,sub1,sub1o,sub2,sub2o,sub3,sub3o,sub4,sub4o,sub5,sub5o,sub6,sub6o) values(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?) ");
$stmt->bind_param("ssssssssssssssss", $branch,$sem,$utno,$rollno,$suba,$subao,$subb,$subbo,$subc,$subco,$subd,$subdo,$sube,$subeo,$subf,$subfo);
$stmt->execute();
$stmt->close(); }
?>

<?php
           $utno = $_POST["utno32"];
         $branch = $_POST["branch32"];
                 $sem = $_POST["sem32"];
             $rollno = $_POST["rollno32"];
                   $suba = $_POST["sub132"];
			       $subao = $_POST["sub1o32"];
                       $subb = $_POST["sub232"];
                       $subbo = $_POST["sub2o32"];
                           $subc = $_POST["sub332"];
                           $subco = $_POST["sub3o32"];
                               $subd = $_POST["sub432"];
                               $subdo = $_POST["sub4o32"];
                                   $sube = $_POST["sub532"];
                                   $subeo = $_POST["sub5o32"];
                                       $subf = $_POST["sub632"];
                                       $subfo = $_POST["sub6o32"];
if($subao!=''){
$conn=new mysqli("localhost","root","","collegemanagement");
$stmt=$conn->prepare("insert into unittest (branch,sem,utno,rollno,sub1,sub1o,sub2,sub2o,sub3,sub3o,sub4,sub4o,sub5,sub5o,sub6,sub6o) values(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?) ");
$stmt->bind_param("ssssssssssssssss", $branch,$sem,$utno,$rollno,$suba,$subao,$subb,$subbo,$subc,$subco,$subd,$subdo,$sube,$subeo,$subf,$subfo);
$stmt->execute();
$stmt->close(); }
?>

<?php
           $utno = $_POST["utno33"];
         $branch = $_POST["branch33"];
                 $sem = $_POST["sem33"];
             $rollno = $_POST["rollno33"];
                   $suba = $_POST["sub133"];
			       $subao = $_POST["sub1o33"];
                       $subb = $_POST["sub233"];
                       $subbo = $_POST["sub2o33"];
                           $subc = $_POST["sub333"];
                           $subco = $_POST["sub3o33"];
                               $subd = $_POST["sub433"];
                               $subdo = $_POST["sub4o33"];
                                   $sube = $_POST["sub533"];
                                   $subeo = $_POST["sub5o33"];
                                       $subf = $_POST["sub633"];
                                       $subfo = $_POST["sub6o33"];
if($subao!=''){
$conn=new mysqli("localhost","root","","collegemanagement");
$stmt=$conn->prepare("insert into unittest (branch,sem,utno,rollno,sub1,sub1o,sub2,sub2o,sub3,sub3o,sub4,sub4o,sub5,sub5o,sub6,sub6o) values(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?) ");
$stmt->bind_param("ssssssssssssssss", $branch,$sem,$utno,$rollno,$suba,$subao,$subb,$subbo,$subc,$subco,$subd,$subdo,$sube,$subeo,$subf,$subfo);
$stmt->execute();
$stmt->close(); }
?>

<?php
           $utno = $_POST["utno34"];
         $branch = $_POST["branch34"];
                 $sem = $_POST["sem34"];
             $rollno = $_POST["rollno34"];
                   $suba = $_POST["sub134"];
			       $subao = $_POST["sub1o34"];
                       $subb = $_POST["sub234"];
                       $subbo = $_POST["sub2o34"];
                           $subc = $_POST["sub334"];
                           $subco = $_POST["sub3o34"];
                               $subd = $_POST["sub434"];
                               $subdo = $_POST["sub4o34"];
                                   $sube = $_POST["sub534"];
                                   $subeo = $_POST["sub5o34"];
                                       $subf = $_POST["sub634"];
                                       $subfo = $_POST["sub6o34"];
if($subao!=''){
$conn=new mysqli("localhost","root","","collegemanagement");
$stmt=$conn->prepare("insert into unittest (branch,sem,utno,rollno,sub1,sub1o,sub2,sub2o,sub3,sub3o,sub4,sub4o,sub5,sub5o,sub6,sub6o) values(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?) ");
$stmt->bind_param("ssssssssssssssss", $branch,$sem,$utno,$rollno,$suba,$subao,$subb,$subbo,$subc,$subco,$subd,$subdo,$sube,$subeo,$subf,$subfo);
$stmt->execute();
$stmt->close(); }
?>

<?php
           $utno = $_POST["utno35"];
         $branch = $_POST["branch35"];
                 $sem = $_POST["sem35"];
             $rollno = $_POST["rollno35"];
                   $suba = $_POST["sub135"];
			       $subao = $_POST["sub1o35"];
                       $subb = $_POST["sub235"];
                       $subbo = $_POST["sub2o35"];
                           $subc = $_POST["sub335"];
                           $subco = $_POST["sub3o35"];
                               $subd = $_POST["sub435"];
                               $subdo = $_POST["sub4o35"];
                                   $sube = $_POST["sub535"];
                                   $subeo = $_POST["sub5o35"];
                                       $subf = $_POST["sub635"];
                                       $subfo = $_POST["sub6o35"];
if($subao!=''){
$conn=new mysqli("localhost","root","","collegemanagement");
$stmt=$conn->prepare("insert into unittest (branch,sem,utno,rollno,sub1,sub1o,sub2,sub2o,sub3,sub3o,sub4,sub4o,sub5,sub5o,sub6,sub6o) values(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?) ");
$stmt->bind_param("ssssssssssssssss", $branch,$sem,$utno,$rollno,$suba,$subao,$subb,$subbo,$subc,$subco,$subd,$subdo,$sube,$subeo,$subf,$subfo);
$stmt->execute();
$stmt->close(); }
?>

<?php
           $utno = $_POST["utno36"];
         $branch = $_POST["branch36"];
                 $sem = $_POST["sem36"];
             $rollno = $_POST["rollno36"];
                   $suba = $_POST["sub136"];
			       $subao = $_POST["sub1o36"];
                       $subb = $_POST["sub236"];
                       $subbo = $_POST["sub2o36"];
                           $subc = $_POST["sub336"];
                           $subco = $_POST["sub3o36"];
                               $subd = $_POST["sub436"];
                               $subdo = $_POST["sub4o36"];
                                   $sube = $_POST["sub536"];
                                   $subeo = $_POST["sub5o36"];
                                       $subf = $_POST["sub636"];
                                       $subfo = $_POST["sub6o36"];
if($subao!=''){
$conn=new mysqli("localhost","root","","collegemanagement");
$stmt=$conn->prepare("insert into unittest (branch,sem,utno,rollno,sub1,sub1o,sub2,sub2o,sub3,sub3o,sub4,sub4o,sub5,sub5o,sub6,sub6o) values(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?) ");
$stmt->bind_param("ssssssssssssssss", $branch,$sem,$utno,$rollno,$suba,$subao,$subb,$subbo,$subc,$subco,$subd,$subdo,$sube,$subeo,$subf,$subfo);
$stmt->execute();
$stmt->close(); }
?>

<?php
           $utno = $_POST["utno37"];
         $branch = $_POST["branch37"];
                 $sem = $_POST["sem37"];
             $rollno = $_POST["rollno37"];
                   $suba = $_POST["sub137"];
			       $subao = $_POST["sub1o37"];
                       $subb = $_POST["sub237"];
                       $subbo = $_POST["sub2o37"];
                           $subc = $_POST["sub337"];
                           $subco = $_POST["sub3o37"];
                               $subd = $_POST["sub437"];
                               $subdo = $_POST["sub4o37"];
                                   $sube = $_POST["sub537"];
                                   $subeo = $_POST["sub5o37"];
                                       $subf = $_POST["sub637"];
                                       $subfo = $_POST["sub6o37"];
if($subao!=''){
$conn=new mysqli("localhost","root","","collegemanagement");
$stmt=$conn->prepare("insert into unittest (branch,sem,utno,rollno,sub1,sub1o,sub2,sub2o,sub3,sub3o,sub4,sub4o,sub5,sub5o,sub6,sub6o) values(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?) ");
$stmt->bind_param("ssssssssssssssss", $branch,$sem,$utno,$rollno,$suba,$subao,$subb,$subbo,$subc,$subco,$subd,$subdo,$sube,$subeo,$subf,$subfo);
$stmt->execute();
$stmt->close(); }
?>

<?php
           $utno = $_POST["utno38"];
         $branch = $_POST["branch38"];
                 $sem = $_POST["sem38"];
             $rollno = $_POST["rollno38"];
                   $suba = $_POST["sub138"];
			       $subao = $_POST["sub1o38"];
                       $subb = $_POST["sub238"];
                       $subbo = $_POST["sub2o38"];
                           $subc = $_POST["sub338"];
                           $subco = $_POST["sub3o38"];
                               $subd = $_POST["sub438"];
                               $subdo = $_POST["sub4o38"];
                                   $sube = $_POST["sub538"];
                                   $subeo = $_POST["sub5o38"];
                                       $subf = $_POST["sub638"];
                                       $subfo = $_POST["sub6o38"];
if($subao!=''){
$conn=new mysqli("localhost","root","","collegemanagement");
$stmt=$conn->prepare("insert into unittest (branch,sem,utno,rollno,sub1,sub1o,sub2,sub2o,sub3,sub3o,sub4,sub4o,sub5,sub5o,sub6,sub6o) values(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?) ");
$stmt->bind_param("ssssssssssssssss", $branch,$sem,$utno,$rollno,$suba,$subao,$subb,$subbo,$subc,$subco,$subd,$subdo,$sube,$subeo,$subf,$subfo);
$stmt->execute();
$stmt->close(); }
?>

<?php
           $utno = $_POST["utno39"];
         $branch = $_POST["branch39"];
                 $sem = $_POST["sem39"];
             $rollno = $_POST["rollno39"];
                   $suba = $_POST["sub139"];
			       $subao = $_POST["sub1o39"];
                       $subb = $_POST["sub239"];
                       $subbo = $_POST["sub2o39"];
                           $subc = $_POST["sub339"];
                           $subco = $_POST["sub3o39"];
                               $subd = $_POST["sub439"];
                               $subdo = $_POST["sub4o39"];
                                   $sube = $_POST["sub539"];
                                   $subeo = $_POST["sub5o39"];
                                       $subf = $_POST["sub639"];
                                       $subfo = $_POST["sub6o39"];
if($subao!=''){
$conn=new mysqli("localhost","root","","collegemanagement");
$stmt=$conn->prepare("insert into unittest (branch,sem,utno,rollno,sub1,sub1o,sub2,sub2o,sub3,sub3o,sub4,sub4o,sub5,sub5o,sub6,sub6o) values(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?) ");
$stmt->bind_param("ssssssssssssssss", $branch,$sem,$utno,$rollno,$suba,$subao,$subb,$subbo,$subc,$subco,$subd,$subdo,$sube,$subeo,$subf,$subfo);
$stmt->execute();
$stmt->close(); }
?>

<?php
           $utno = $_POST["utno40"];
         $branch = $_POST["branch40"];
                 $sem = $_POST["sem40"];
             $rollno = $_POST["rollno40"];
                   $suba = $_POST["sub140"];
			       $subao = $_POST["sub1o40"];
                       $subb = $_POST["sub240"];
                       $subbo = $_POST["sub2o40"];
                           $subc = $_POST["sub340"];
                           $subco = $_POST["sub3o40"];
                               $subd = $_POST["sub440"];
                               $subdo = $_POST["sub4o40"];
                                   $sube = $_POST["sub540"];
                                   $subeo = $_POST["sub5o40"];
                                       $subf = $_POST["sub640"];
                                       $subfo = $_POST["sub6o40"];
if($subao!=''){
$conn=new mysqli("localhost","root","","collegemanagement");
$stmt=$conn->prepare("insert into unittest (branch,sem,utno,rollno,sub1,sub1o,sub2,sub2o,sub3,sub3o,sub4,sub4o,sub5,sub5o,sub6,sub6o) values(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?) ");
$stmt->bind_param("ssssssssssssssss", $branch,$sem,$utno,$rollno,$suba,$subao,$subb,$subbo,$subc,$subco,$subd,$subdo,$sube,$subeo,$subf,$subfo);
$stmt->execute();
$stmt->close(); }
?>

<?php
           $utno = $_POST["utno41"];
         $branch = $_POST["branch41"];
                 $sem = $_POST["sem41"];
             $rollno = $_POST["rollno41"];
                   $suba = $_POST["sub141"];
			       $subao = $_POST["sub1o41"];
                       $subb = $_POST["sub241"];
                       $subbo = $_POST["sub2o41"];
                           $subc = $_POST["sub341"];
                           $subco = $_POST["sub3o41"];
                               $subd = $_POST["sub441"];
                               $subdo = $_POST["sub4o41"];
                                   $sube = $_POST["sub541"];
                                   $subeo = $_POST["sub5o41"];
                                       $subf = $_POST["sub641"];
                                       $subfo = $_POST["sub6o41"];
if($subao!=''){
$conn=new mysqli("localhost","root","","collegemanagement");
$stmt=$conn->prepare("insert into unittest (branch,sem,utno,rollno,sub1,sub1o,sub2,sub2o,sub3,sub3o,sub4,sub4o,sub5,sub5o,sub6,sub6o) values(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?) ");
$stmt->bind_param("ssssssssssssssss", $branch,$sem,$utno,$rollno,$suba,$subao,$subb,$subbo,$subc,$subco,$subd,$subdo,$sube,$subeo,$subf,$subfo);
$stmt->execute();
$stmt->close(); }
?>

<?php
           $utno = $_POST["utno42"];
         $branch = $_POST["branch42"];
                 $sem = $_POST["sem42"];
             $rollno = $_POST["rollno42"];
                   $suba = $_POST["sub142"];
			       $subao = $_POST["sub1o42"];
                       $subb = $_POST["sub242"];
                       $subbo = $_POST["sub2o42"];
                           $subc = $_POST["sub342"];
                           $subco = $_POST["sub3o42"];
                               $subd = $_POST["sub442"];
                               $subdo = $_POST["sub4o42"];
                                   $sube = $_POST["sub542"];
                                   $subeo = $_POST["sub5o42"];
                                       $subf = $_POST["sub642"];
                                       $subfo = $_POST["sub6o42"];
if($subao!=''){
$conn=new mysqli("localhost","root","","collegemanagement");
$stmt=$conn->prepare("insert into unittest (branch,sem,utno,rollno,sub1,sub1o,sub2,sub2o,sub3,sub3o,sub4,sub4o,sub5,sub5o,sub6,sub6o) values(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?) ");
$stmt->bind_param("ssssssssssssssss", $branch,$sem,$utno,$rollno,$suba,$subao,$subb,$subbo,$subc,$subco,$subd,$subdo,$sube,$subeo,$subf,$subfo);
$stmt->execute();
$stmt->close(); }
?>

<?php
           $utno = $_POST["utno43"];
         $branch = $_POST["branch43"];
                 $sem = $_POST["sem43"];
             $rollno = $_POST["rollno43"];
                   $suba = $_POST["sub143"];
			       $subao = $_POST["sub1o43"];
                       $subb = $_POST["sub243"];
                       $subbo = $_POST["sub2o43"];
                           $subc = $_POST["sub343"];
                           $subco = $_POST["sub3o43"];
                               $subd = $_POST["sub443"];
                               $subdo = $_POST["sub4o43"];
                                   $sube = $_POST["sub543"];
                                   $subeo = $_POST["sub5o43"];
                                       $subf = $_POST["sub643"];
                                       $subfo = $_POST["sub6o43"];
if($subao!=''){
$conn=new mysqli("localhost","root","","collegemanagement");
$stmt=$conn->prepare("insert into unittest (branch,sem,utno,rollno,sub1,sub1o,sub2,sub2o,sub3,sub3o,sub4,sub4o,sub5,sub5o,sub6,sub6o) values(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?) ");
$stmt->bind_param("ssssssssssssssss", $branch,$sem,$utno,$rollno,$suba,$subao,$subb,$subbo,$subc,$subco,$subd,$subdo,$sube,$subeo,$subf,$subfo);
$stmt->execute();
$stmt->close(); }
?>

<?php
           $utno = $_POST["utno44"];
         $branch = $_POST["branch44"];
                 $sem = $_POST["sem44"];
             $rollno = $_POST["rollno44"];
                   $suba = $_POST["sub144"];
			       $subao = $_POST["sub1o44"];
                       $subb = $_POST["sub244"];
                       $subbo = $_POST["sub2o44"];
                           $subc = $_POST["sub344"];
                           $subco = $_POST["sub3o44"];
                               $subd = $_POST["sub444"];
                               $subdo = $_POST["sub4o44"];
                                   $sube = $_POST["sub544"];
                                   $subeo = $_POST["sub5o44"];
                                       $subf = $_POST["sub644"];
                                       $subfo = $_POST["sub6o44"];
if($subao!=''){
$conn=new mysqli("localhost","root","","collegemanagement");
$stmt=$conn->prepare("insert into unittest (branch,sem,utno,rollno,sub1,sub1o,sub2,sub2o,sub3,sub3o,sub4,sub4o,sub5,sub5o,sub6,sub6o) values(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?) ");
$stmt->bind_param("ssssssssssssssss", $branch,$sem,$utno,$rollno,$suba,$subao,$subb,$subbo,$subc,$subco,$subd,$subdo,$sube,$subeo,$subf,$subfo);
$stmt->execute();
$stmt->close(); }
?>

<?php
           $utno = $_POST["utno45"];
         $branch = $_POST["branch45"];
                 $sem = $_POST["sem45"];
             $rollno = $_POST["rollno45"];
                   $suba = $_POST["sub145"];
			       $subao = $_POST["sub1o45"];
                       $subb = $_POST["sub245"];
                       $subbo = $_POST["sub2o45"];
                           $subc = $_POST["sub345"];
                           $subco = $_POST["sub3o45"];
                               $subd = $_POST["sub445"];
                               $subdo = $_POST["sub4o45"];
                                   $sube = $_POST["sub545"];
                                   $subeo = $_POST["sub5o45"];
                                       $subf = $_POST["sub645"];
                                       $subfo = $_POST["sub6o45"];
if($subao!=''){
$conn=new mysqli("localhost","root","","collegemanagement");
$stmt=$conn->prepare("insert into unittest (branch,sem,utno,rollno,sub1,sub1o,sub2,sub2o,sub3,sub3o,sub4,sub4o,sub5,sub5o,sub6,sub6o) values(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?) ");
$stmt->bind_param("ssssssssssssssss", $branch,$sem,$utno,$rollno,$suba,$subao,$subb,$subbo,$subc,$subco,$subd,$subdo,$sube,$subeo,$subf,$subfo);
$stmt->execute();
$stmt->close(); }
?>

<?php
           $utno = $_POST["utno46"];
         $branch = $_POST["branch46"];
                 $sem = $_POST["sem46"];
             $rollno = $_POST["rollno46"];
                   $suba = $_POST["sub146"];
			       $subao = $_POST["sub1o46"];
                       $subb = $_POST["sub246"];
                       $subbo = $_POST["sub2o46"];
                           $subc = $_POST["sub346"];
                           $subco = $_POST["sub3o46"];
                               $subd = $_POST["sub446"];
                               $subdo = $_POST["sub4o46"];
                                   $sube = $_POST["sub546"];
                                   $subeo = $_POST["sub5o46"];
                                       $subf = $_POST["sub646"];
                                       $subfo = $_POST["sub6o46"];
if($subao!=''){
$conn=new mysqli("localhost","root","","collegemanagement");
$stmt=$conn->prepare("insert into unittest (branch,sem,utno,rollno,sub1,sub1o,sub2,sub2o,sub3,sub3o,sub4,sub4o,sub5,sub5o,sub6,sub6o) values(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?) ");
$stmt->bind_param("ssssssssssssssss", $branch,$sem,$utno,$rollno,$suba,$subao,$subb,$subbo,$subc,$subco,$subd,$subdo,$sube,$subeo,$subf,$subfo);
$stmt->execute();
$stmt->close(); }
?>

<?php
           $utno = $_POST["utno47"];
         $branch = $_POST["branch47"];
                 $sem = $_POST["sem47"];
             $rollno = $_POST["rollno47"];
                   $suba = $_POST["sub147"];
			       $subao = $_POST["sub1o47"];
                       $subb = $_POST["sub247"];
                       $subbo = $_POST["sub2o47"];
                           $subc = $_POST["sub347"];
                           $subco = $_POST["sub3o47"];
                               $subd = $_POST["sub447"];
                               $subdo = $_POST["sub4o47"];
                                   $sube = $_POST["sub547"];
                                   $subeo = $_POST["sub5o47"];
                                       $subf = $_POST["sub647"];
                                       $subfo = $_POST["sub6o47"];
if($subao!=''){
$conn=new mysqli("localhost","root","","collegemanagement");
$stmt=$conn->prepare("insert into unittest (branch,sem,utno,rollno,sub1,sub1o,sub2,sub2o,sub3,sub3o,sub4,sub4o,sub5,sub5o,sub6,sub6o) values(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?) ");
$stmt->bind_param("ssssssssssssssss", $branch,$sem,$utno,$rollno,$suba,$subao,$subb,$subbo,$subc,$subco,$subd,$subdo,$sube,$subeo,$subf,$subfo);
$stmt->execute();
$stmt->close(); }
?>

<?php
           $utno = $_POST["utno48"];
         $branch = $_POST["branch48"];
                 $sem = $_POST["sem48"];
             $rollno = $_POST["rollno48"];
                   $suba = $_POST["sub148"];
			       $subao = $_POST["sub1o48"];
                       $subb = $_POST["sub248"];
                       $subbo = $_POST["sub2o48"];
                           $subc = $_POST["sub348"];
                           $subco = $_POST["sub3o48"];
                               $subd = $_POST["sub448"];
                               $subdo = $_POST["sub4o48"];
                                   $sube = $_POST["sub548"];
                                   $subeo = $_POST["sub5o48"];
                                       $subf = $_POST["sub648"];
                                       $subfo = $_POST["sub6o48"];
if($subao!=''){
$conn=new mysqli("localhost","root","","collegemanagement");
$stmt=$conn->prepare("insert into unittest (branch,sem,utno,rollno,sub1,sub1o,sub2,sub2o,sub3,sub3o,sub4,sub4o,sub5,sub5o,sub6,sub6o) values(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?) ");
$stmt->bind_param("ssssssssssssssss", $branch,$sem,$utno,$rollno,$suba,$subao,$subb,$subbo,$subc,$subco,$subd,$subdo,$sube,$subeo,$subf,$subfo);
$stmt->execute();
$stmt->close(); }
?>

<?php
           $utno = $_POST["utno49"];
         $branch = $_POST["branch49"];
                 $sem = $_POST["sem49"];
             $rollno = $_POST["rollno49"];
                   $suba = $_POST["sub149"];
			       $subao = $_POST["sub1o49"];
                       $subb = $_POST["sub249"];
                       $subbo = $_POST["sub2o49"];
                           $subc = $_POST["sub349"];
                           $subco = $_POST["sub3o49"];
                               $subd = $_POST["sub449"];
                               $subdo = $_POST["sub4o49"];
                                   $sube = $_POST["sub549"];
                                   $subeo = $_POST["sub5o49"];
                                       $subf = $_POST["sub649"];
                                       $subfo = $_POST["sub6o49"];
if($subao!=''){
$conn=new mysqli("localhost","root","","collegemanagement");
$stmt=$conn->prepare("insert into unittest (branch,sem,utno,rollno,sub1,sub1o,sub2,sub2o,sub3,sub3o,sub4,sub4o,sub5,sub5o,sub6,sub6o) values(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?) ");
$stmt->bind_param("ssssssssssssssss", $branch,$sem,$utno,$rollno,$suba,$subao,$subb,$subbo,$subc,$subco,$subd,$subdo,$sube,$subeo,$subf,$subfo);
$stmt->execute();
$stmt->close(); }
?>



<script>
alert("Marks Uploaded Successfull........");
</script>
<?php  include("facultyportal.php"); ?>

<hr><hr>
</font>
</body>
</html>
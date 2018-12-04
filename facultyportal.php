<?php
session_start();
?>
<?php 
    
     $check=$_SESSION["user"];
    if($check=='') 
    { 
        
header("Location: facultylogin.html"); 
         
        die("Redirecting to facultylogin.html"); 
    } 
?>
<html >
<head>
<title>Faculty Portal</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="css/coin-slider.css" />
<script type="text/javascript" src="js/cufon-yui.js"></script>
<script type="text/javascript" src="js/cufon-georgia.js"></script>
<script type="text/javascript" src="js/jquery-1.4.2.min.js"></script>
<script type="text/javascript" src="js/script.js"></script>
<script type="text/javascript" src="js/coin-slider.min.js"></script>
</head>
<body >
<font  size="4"  align="right">
<div  >Welcome Sir,<a href="logoutf.php"><font  size="4" color="violet" align="right">&nbsp;LoggOut</font></a></div></font>
   

<div class="main">
 <div class="logo">
        <h1><a href="main.php">Faculty &nbsp;<span>Portal</span></a></h1>
      </div>
  <div class="header">
    <div class="header_resize">
	 
      <div class="menu_nav">
        <ul>
          <li><a href="main.php"><span>Home</span></a></li>
		  <li><a href="newsandeventsf.html"><span>Upload News And Events</span></a></li>
		<li><a href="tgeditf.html"><span>View/Edit T/G Form</span></a></li>	
			
        </ul>
      </div> </div>
      
  <div class="header">
  
    <div class="header_resize">
      <div class="menu_nav">
        <ul>
        
          <li><a href="attendancef.html"><span>Upload Attendance</span></a></li>
          <li><a href="attendancepv1.html"><span>View Attendance</span></a></li>
          <li><a href="utff.html"><span>Upload UT Marks</span></a></li>
          <li><a href="utfv1.html"><span>View UT Marks</span></a></li>
		    
			
		
				  
        </ul>
      </div>
   </div>
      <div class="clr"></div>
      <div class="slider">
        <div id="coin-slider"> <a href="#"><img src="images/456.jpg" width="960" height="360" alt="" /><span> Pankaj Laddhad Institute Of Technology And Management Studies Buldana</span></a> <a href="#"><img src="images/147,.jpg" width="960" height="360" alt="" /><span> Pankaj Laddhad Institute Of Technology And Management Studies Buldana</span></a> <a href="#"><img src="images/960360.jpg" width="960" height="360" alt="" /><span> Pankaj Laddhad Institute Of Technology And Management Studies Buldana</span></a> </div>
        <div class="clr"></div>
      </div>
      <div class="clr"></div>
    </div>
	<h2 style="text-align:right;"><a href="http://www.facebook.com/ajinkya.bodade.3" >Created by Ajinkya Bodade</a></h2>
 

</body>
</html>
  
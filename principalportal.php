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
<html >
<head>
		
<title>Principal Portal</title>
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
<div  >Welcome Dr.P.M Jawandiya<a href="logoutp.php"><font  size="4" color="violet" align="right">&nbsp;LoggOut</font></a></div></font>
   
<div class="main">
 <div class="logo">
        <h1><a href="main.php">Principal &nbsp;<span>Portal</span></a></h1>
      </div>
  <div class="header">
   <div class="header_resize">
	       <div class="menu_nav">
	
        <ul>
          <li><a href="main.php"><span>Home</span></a></li>
		      
		   <li><a href="allstdview1.php"><span>Student Details</span></a></li>
		<li><a href="tgviewp.php"><span>View/Edit T/G Form</span></a></li>	
		    <li><a href="feedbackview.html"><span>Feedbacks</span></a></li>
			
			
			        </ul>
					
      </div> </div>
	  
        <div class="header">
      <div class="header_resize">
      <div class="menu_nav">
        <ul>
            <li><a href="utpv1.html"><span>View UT Marks</span></a></li>   
          <li><a href="attendancefv1.html"><span>View Attendance </span></a></li>
           <li><a href="requestandsuggestionview.php"><span>Request & Suggestions</span></a></li>
		  <li><a href="newsandevents.html"><span>Upload News And Events</span></a></li>
          
  
  
		          </ul>
      </div>
   </div>
   
        <div class="clr"></div>
      <div class="slider">
        <div id="coin-slider"> <a href="http://plit.ac.in"><img src="images/369.jpg" width="960" height="360" alt="" /><span> Pankaj Laddhad Institute Of Technology And Management Studies Buldana</span></a> <a href="http://plit.ac.in"><img src="images/852.jpg" width="960" height="360" alt="" /><span> Pankaj Laddhad Institute Of Technology And Management Studies Buldana</span></a> <a href="http://plit.ac.in"><img src="images/960360.jpg" width="960" height="360" alt="" /><span> Pankaj Laddhad Institute Of Technology And Management Studies Buldana</span></a> </div>
        <div class="clr"></div>
      </div>
      <div class="clr"></div>
    </div>
	<h2 style="text-align:right;"><a href="http://www.facebook.com/ajinkya.bodade.3" >Created by Ajinkya Bodade</a></h2>


	</body>
</html>
  








  





  













































  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
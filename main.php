<html >
<head>
<title>Home </title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="css/coin-slider.css" />
<script type="text/javascript" src="js/cufon-yui.js"></script>
<script type="text/javascript" src="js/cufon-georgia.js"></script>
<script type="text/javascript" src="js/jquery-1.4.2.min.js"></script>
<script type="text/javascript" src="js/script.js"></script>
<script type="text/javascript" src="js/coin-slider.min.js"></script>

</head>
<body>


<div class="main">
 <div class="logo">
        <h1><a href="index.html">PLIT<span>SOFT</span></a></h1>
      </div>
  <div class="header">
    <div class="header_resize">
	 
      <div class="menu_nav">
        <ul>
		<li><a href="principallogin.html"><span>Principal Portal</span></a></li>
		  <li><a href="facultylogin.html"><span>Faculty Portal</span></a></li>
                 		  <li><a href="studentlogin.html"><span>Student portal </span></a></li>      
          <li><a href="studentregistration.html"><span>Student Registration</span></a></li>

        </ul>
      </div>
      
      <div class="clr"></div>
      <div class="slider">
        <div id="coin-slider"> <a href="http://plit.ac.in"><img src="images/img12.jpg" width="960" height="360" alt="" /><span> Pankaj Laddhad Institute Of Technology And Management Studies Buldana</span></a> <a href="http://plit.ac.in"><img src="images/img13.jpg" width="960" height="360" alt="" /><span> Pankaj Laddhad Institute Of Technology And Management Studies Buldana</span></a> <a href="http://plit.ac.in"><img src="images/img14.jpg" width="960" height="360" alt="" /><span> Pankaj Laddhad Institute Of Technology And Management Studies Buldana</span></a> </div>
        <div class="clr"></div>
      </div>
      <div class="clr"></div>
    </div>
  </div>
  <div class="content">
    <div class="content_resize">
      <div class="mainbar" align="left">
       
              </div>
      <div class="sidebar">
        <div class="searchform"></div>
        <div class="gadget">
          <h2 align="left" class="star"><span>Design And Developed By:</span></h2>
          <div class="clr"></div>
          <div align="left">
            <ul class="sb_menu">
             <font size="4"><li><a href="http://www.facebook.com/ajinkya.bodade.3">Ajinkya Pandurang Bodade</a></li></font>
                       <font size="4">  <li><a href="">Second Year CSE(2016)</a></li></font>
						<font size="4"> <a href="mailto:bodadeajinkya@gmail.com" target="">bodadeajinkya@gmail.com</a></font>
						<font size="4"> <p>9146709417</p></font>
											</ul>
          </div>
        </div>
          </div>
  	   
	 
        <div class="article">
         <font size="6">Features:</font>
          <ul>
		<font size="4"><li>Attendance</li><br>
		  <li>Unit Test Marks</li><br>
		  <li>Teacher Feedback</li><br>
		  <li>News And Events</li><br>
		  <li>Teacher Guardian Form</li><br>
		  <li>Request And Suggestion </li><br>
		  		  <li>Student Details </li>
		  <ul></font>
          <div class="clr"></div>
          <div class="img"></div>
          <div class="post_content">
            
          </div>
          <div class="clr"></div>
        </div>
	   
	   
	   
	   
	   
	   
	    <?php $conn=new mysqli("localhost", "root","","collegemanagement");
		 	$result = $conn->query("SELECT * FROM newsandevents "); ?>
        
      		<marquee direction="up" scrolldelay="200" width="100%">   <h2><span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;New</span><a href="#"></a>s and Events:</h2>		<?php while($row = $result->fetch_assoc())
		{?><font size="4"> <?php echo "".$row['date'];?> --><?php echo "".$row['ns'];  ?> <br><br>  <?php } ?>  </font></marquee>

          </div>
          <div class="clr"></div>
        </div>
   </div>
        <div class="clr"></div>
  
   </div>

  <div class="fbg">
    <div class="fbg_resize">
      <div class="clr"></div>
    </div>
  </div>
  <div class="footer">
    <div class="footer_resize">
      <p class="lf">Copyright &copy; <a href="http://www.facebook.com/ajinkya.bodade.3">Ajinkya_Bodade</a>. All Rights Reserved</p>
      <p class="rf">Design by<a href="http://www.facebook.com/ajinkya.bodade.3"> Ajinkya Bodade</a></p>
      <div style="clear:both;"></div>
    </div>
  </div>
</div>
   
</body>
</html>

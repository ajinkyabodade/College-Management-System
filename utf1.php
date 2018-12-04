<html>
<head>
<title>Unit Test portal</title>
<link href="bootstrap.min.css" rel="stylesheet">
</head><body>

<body >	  
	  <div class="progress">
        <div class="progress-bar progress-bar-info" style="width: 100%; height:100%;"></div>
      </div>
      
<h3 align="center"><em><strong><span style="font-size: 36px"><span style="font-family: Georgia">Unit Test portal	    <div class="form-group" style="margin:30px;" align="center" >
	<a href="principalportal.php" target=""><input type="submit" class="btn btn-primary" value="Home"></a>  <a href="allstdview1.php" target=""><input type="submit" class="btn btn-primary" value="Student Details"></a>    <a href="tgviewp.php" target=""><input type="submit" class="btn btn-primary" value="View/Edit T/G Form"></a>    <a href="feedbackview.html" target=""><input type="submit" class="btn btn-primary" value="Feedbacks"></a>     <a href="utf.html" target=""><input type="submit" class="btn btn-primary" value="View UT Marks"></a>    <a href="attendancefv1.html" target=""><input type="submit" class="btn btn-primary" value="View Attendance"></a>       <a href="requestandsuggestionview.php" target=""><input type="submit" class="btn btn-primary" value="Request & Suggestions"></a>       <a href="newsandevents.html" target=""><input type="submit" class="btn btn-primary" value="Upload News And Events"></a>    <a href="logoutp.php" target=""><input type="submit" class="btn btn-primary" value="Logout"></a>  
	</div></span></span></strong></em></h3>
<div class="progress">
        <div class="progress-bar progress-bar-info" style="width: 100%; height:100%;"></div>
      </div>
	  

<div class="main" >

<?php
$branch1 = array('Computer Science','Civil Engineering','Electrical Engineering','Electronics&Telecommunication','Mechanical Engineering','First Year');
$branch = $_POST['branch'];
$year1 = array('First Semester','Second Semester','Third Semester','Fourth Semester','Fifth Semester','Sixth Semester','Seventh Semester','Eighth Semester');
$sem = $_POST['semester'];
$utno1 = array('1','2','3');
$utno = $_POST['utno'];

$i=1;
?>
<p color="red" >Note-  Enter Full Name In Sub Column</p>
<font size="6">
<table align="center">
<form action="utf2.php" method="POST">
		<tr><td></td><td><input type="hidden" name="branch" value="<?php echo "".$branch;?>"></td>
				<td></td><td><input type="hidden" name="sem" value="<?php echo "".$sem;?>"></td>
				<td></td><td><input type="hidden" name="utno" value="<?php echo "".$utno;?>"></td>
		 <td>RollNo</td>  <td><input type="text" name="rollno" value="<?php echo "".$i;?>"></td><?php ++$i;?>
		<td>Subject1</td>   <td> <input type="text" name="sub1" > </td> 	
	  <td>Marks Obtained</td><td><input type="text" name="sub1o" > </td> 	
		<td>Subject2  </td>   <td> <input type="text" name="sub2" > </td> 	
   <td>Marks Obtained </td>   <td> <input type="text" name="sub2o" > </td> 	
		  <td>Subject3  </td>   <td> <input type="text" name="sub3" > </td> 	
	 <td>Marks Obtained </td>   <td> <input type="text" name="sub3o" > </td> 	
	      	 <td>Subject4 </td>   <td> <input type="text" name="sub4" > </td> 	
	   <td>Marks Obtained </td>   <td> <input type="text" name="sub4o" > </td> 	
		       <td>Subject5 </td>   <td> <input type="text" name="sub5" > </td> 	
	     <td>Marks Obtained </td>   <td> <input type="text" name="sub5o" > </td> 	
		         <td>Subject6 </td>   <td> <input type="text" name="sub6" > </td> 	
	       <td>Marks Obtained </td>   <td> <input type="text" name="sub6o" > </td> 	

	<tr><td></td><td><input type="hidden" name="branch1" value="<?php echo "".$branch;?>"></td>
				<td></td><td><input type="hidden" name="sem1" value="<?php echo "".$sem;?>"></td>
				<td></td><td><input type="hidden" name="utno1" value="<?php echo "".$utno;?>"></td>
		 <td>RollNo</td>  <td><input type="text" name="rollno1" value="<?php echo "".$i;?>"></td><?php ++$i;?>
		<td>Subject1</td>   <td> <input type="text" name="sub11" > </td> 	
	  <td>Marks Obtained</td><td><input type="text" name="sub1o1" > </td> 	
		<td>Subject2  </td>   <td> <input type="text" name="sub21" > </td> 	
   <td>Marks Obtained </td>   <td> <input type="text" name="sub2o1" > </td> 	
		  <td>Subject3  </td>   <td> <input type="text" name="sub31" > </td> 	
	 <td>Marks Obtained </td>   <td> <input type="text" name="sub3o1" > </td> 	
	      	 <td>Subject4 </td>   <td> <input type="text" name="sub41" > </td> 	
	   <td>Marks Obtained </td>   <td> <input type="text" name="sub4o1" > </td> 	
		       <td>Subject5 </td>   <td> <input type="text" name="sub51" > </td> 	
	     <td>Marks Obtained </td>   <td> <input type="text" name="sub5o1" > </td> 	
		         <td>Subject6 </td>   <td> <input type="text" name="sub61" > </td> 	
	       <td>Marks Obtained </td>   <td> <input type="text" name="sub6o1" > </td> 
		   
		   <tr><td></td><td><input type="hidden" name="branch2" value="<?php echo "".$branch;?>"></td>
				<td></td><td><input type="hidden" name="sem2" value="<?php echo "".$sem;?>"></td>
				<td></td><td><input type="hidden" name="utno2" value="<?php echo "".$utno;?>"></td>
		 <td>RollNo</td>  <td><input type="text" name="rollno2" value="<?php echo "".$i;?>"></td><?php ++$i;?>
		<td>Subject1</td>   <td> <input type="text" name="sub12" > </td> 	
	  <td>Marks Obtained</td><td><input type="text" name="sub1o2" > </td> 	
		<td>Subject2  </td>   <td> <input type="text" name="sub22" > </td> 	
   <td>Marks Obtained </td>   <td> <input type="text" name="sub2o2" > </td> 	
		  <td>Subject3  </td>   <td> <input type="text" name="sub32" > </td> 	
	 <td>Marks Obtained </td>   <td> <input type="text" name="sub3o2" > </td> 	
	      	 <td>Subject4 </td>   <td> <input type="text" name="sub42" > </td> 	
	   <td>Marks Obtained </td>   <td> <input type="text" name="sub4o2" > </td> 	
		       <td>Subject5 </td>   <td> <input type="text" name="sub52" > </td> 	
	     <td>Marks Obtained </td>   <td> <input type="text" name="sub5o2" > </td> 	
		         <td>Subject6 </td>   <td> <input type="text" name="sub62" > </td> 	
	       <td>Marks Obtained </td>   <td> <input type="text" name="sub6o2" > </td> 
		   
		   <tr><td></td><td><input type="hidden" name="branch3" value="<?php echo "".$branch;?>"></td>
				<td></td><td><input type="hidden" name="sem3" value="<?php echo "".$sem;?>"></td>
				<td></td><td><input type="hidden" name="utno3" value="<?php echo "".$utno;?>"></td>
		 <td>RollNo</td>  <td><input type="text" name="rollno3" value="<?php echo "".$i;?>"></td><?php ++$i;?>
		<td>Subject1</td>   <td> <input type="text" name="sub13" > </td> 	
	  <td>Marks Obtained</td><td><input type="text" name="sub1o3" > </td> 	
		<td>Subject2  </td>   <td> <input type="text" name="sub23" > </td> 	
   <td>Marks Obtained </td>   <td> <input type="text" name="sub2o3" > </td> 	
		  <td>Subject3  </td>   <td> <input type="text" name="sub33" > </td> 	
	 <td>Marks Obtained </td>   <td> <input type="text" name="sub3o3" > </td> 	
	      	 <td>Subject4 </td>   <td> <input type="text" name="sub43" > </td> 	
	   <td>Marks Obtained </td>   <td> <input type="text" name="sub4o3" > </td> 	
		       <td>Subject5 </td>   <td> <input type="text" name="sub53" > </td> 	
	     <td>Marks Obtained </td>   <td> <input type="text" name="sub5o3" > </td> 	
		         <td>Subject6 </td>   <td> <input type="text" name="sub63" > </td> 	
	       <td>Marks Obtained </td>   <td> <input type="text" name="sub6o3" > </td> 
		   
		   <tr><td></td><td><input type="hidden" name="branch4" value="<?php echo "".$branch;?>"></td>
				<td></td><td><input type="hidden" name="sem4" value="<?php echo "".$sem;?>"></td>
				<td></td><td><input type="hidden" name="utno4" value="<?php echo "".$utno;?>"></td>
		 <td>RollNo</td>  <td><input type="text" name="rollno4" value="<?php echo "".$i;?>"></td><?php ++$i;?>
		<td>Subject1</td>   <td> <input type="text" name="sub14" > </td> 	
	  <td>Marks Obtained</td><td><input type="text" name="sub1o4" > </td> 	
		<td>Subject2  </td>   <td> <input type="text" name="sub24" > </td> 	
   <td>Marks Obtained </td>   <td> <input type="text" name="sub2o4" > </td> 	
		  <td>Subject3  </td>   <td> <input type="text" name="sub34" > </td> 	
	 <td>Marks Obtained </td>   <td> <input type="text" name="sub3o4" > </td> 	
	      	 <td>Subject4 </td>   <td> <input type="text" name="sub44" > </td> 	
	   <td>Marks Obtained </td>   <td> <input type="text" name="sub4o4" > </td> 	
		       <td>Subject5 </td>   <td> <input type="text" name="sub54" > </td> 	
	     <td>Marks Obtained </td>   <td> <input type="text" name="sub5o4" > </td> 	
		         <td>Subject6 </td>   <td> <input type="text" name="sub64" > </td> 	
	       <td>Marks Obtained </td>   <td> <input type="text" name="sub6o4" > </td> 
		   
		   <tr><td></td><td><input type="hidden" name="branch5" value="<?php echo "".$branch;?>"></td>
				<td></td><td><input type="hidden" name="sem5" value="<?php echo "".$sem;?>"></td>
				<td></td><td><input type="hidden" name="utno5" value="<?php echo "".$utno;?>"></td>
		 <td>RollNo</td>  <td><input type="text" name="rollno5" value="<?php echo "".$i;?>"></td><?php ++$i;?>
		<td>Subject1</td>   <td> <input type="text" name="sub15" > </td> 	
	  <td>Marks Obtained</td><td><input type="text" name="sub1o5" > </td> 	
		<td>Subject2  </td>   <td> <input type="text" name="sub25" > </td> 	
   <td>Marks Obtained </td>   <td> <input type="text" name="sub2o5" > </td> 	
		  <td>Subject3  </td>   <td> <input type="text" name="sub35" > </td> 	
	 <td>Marks Obtained </td>   <td> <input type="text" name="sub3o5" > </td> 	
	      	 <td>Subject4 </td>   <td> <input type="text" name="sub45" > </td> 	
	   <td>Marks Obtained </td>   <td> <input type="text" name="sub4o5" > </td> 	
		       <td>Subject5 </td>   <td> <input type="text" name="sub55" > </td> 	
	     <td>Marks Obtained </td>   <td> <input type="text" name="sub5o5" > </td> 	
		         <td>Subject6 </td>   <td> <input type="text" name="sub65" > </td> 	
	       <td>Marks Obtained </td>   <td> <input type="text" name="sub6o5" > </td> 
		   
		   <tr><td></td><td><input type="hidden" name="branch6" value="<?php echo "".$branch;?>"></td>
				<td></td><td><input type="hidden" name="sem6" value="<?php echo "".$sem;?>"></td>
				<td></td><td><input type="hidden" name="utno6" value="<?php echo "".$utno;?>"></td>
		 <td>RollNo</td>  <td><input type="text" name="rollno6" value="<?php echo "".$i;?>"></td><?php ++$i;?>
		<td>Subject1</td>   <td> <input type="text" name="sub16" > </td> 	
	  <td>Marks Obtained</td><td><input type="text" name="sub1o6" > </td> 	
		<td>Subject2  </td>   <td> <input type="text" name="sub26" > </td> 	
   <td>Marks Obtained </td>   <td> <input type="text" name="sub2o6" > </td> 	
		  <td>Subject3  </td>   <td> <input type="text" name="sub36" > </td> 	
	 <td>Marks Obtained </td>   <td> <input type="text" name="sub3o6" > </td> 	
	      	 <td>Subject4 </td>   <td> <input type="text" name="sub46" > </td> 	
	   <td>Marks Obtained </td>   <td> <input type="text" name="sub4o6" > </td> 	
		       <td>Subject5 </td>   <td> <input type="text" name="sub56" > </td> 	
	     <td>Marks Obtained </td>   <td> <input type="text" name="sub5o6" > </td> 	
		         <td>Subject6 </td>   <td> <input type="text" name="sub66" > </td> 	
	       <td>Marks Obtained </td>   <td> <input type="text" name="sub6o6" > </td> 
		   
		   <tr><td></td><td><input type="hidden" name="branch7" value="<?php echo "".$branch;?>"></td>
				<td></td><td><input type="hidden" name="sem7" value="<?php echo "".$sem;?>"></td>
				<td></td><td><input type="hidden" name="utno7" value="<?php echo "".$utno;?>"></td>
		 <td>RollNo</td>  <td><input type="text" name="rollno7" value="<?php echo "".$i;?>"></td><?php ++$i;?>
		<td>Subject1</td>   <td> <input type="text" name="sub17" > </td> 	
	  <td>Marks Obtained</td><td><input type="text" name="sub1o7" > </td> 	
		<td>Subject2  </td>   <td> <input type="text" name="sub27" > </td> 	
   <td>Marks Obtained </td>   <td> <input type="text" name="sub2o7" > </td> 	
		  <td>Subject3  </td>   <td> <input type="text" name="sub37" > </td> 	
	 <td>Marks Obtained </td>   <td> <input type="text" name="sub3o7" > </td> 	
	      	 <td>Subject4 </td>   <td> <input type="text" name="sub47" > </td> 	
	   <td>Marks Obtained </td>   <td> <input type="text" name="sub4o7" > </td> 	
		       <td>Subject5 </td>   <td> <input type="text" name="sub57" > </td> 	
	     <td>Marks Obtained </td>   <td> <input type="text" name="sub5o7" > </td> 	
		         <td>Subject6 </td>   <td> <input type="text" name="sub67" > </td> 	
	       <td>Marks Obtained </td>   <td> <input type="text" name="sub6o7" > </td> 
		   
		   <tr><td></td><td><input type="hidden" name="branch8" value="<?php echo "".$branch;?>"></td>
				<td></td><td><input type="hidden" name="sem8" value="<?php echo "".$sem;?>"></td>
				<td></td><td><input type="hidden" name="utno8" value="<?php echo "".$utno;?>"></td>
		 <td>RollNo</td>  <td><input type="text" name="rollno8" value="<?php echo "".$i;?>"></td><?php ++$i;?>
		<td>Subject1</td>   <td> <input type="text" name="sub18" > </td> 	
	  <td>Marks Obtained</td><td><input type="text" name="sub1o8" > </td> 	
		<td>Subject2  </td>   <td> <input type="text" name="sub28" > </td> 	
   <td>Marks Obtained </td>   <td> <input type="text" name="sub2o8" > </td> 	
		  <td>Subject3  </td>   <td> <input type="text" name="sub38" > </td> 	
	 <td>Marks Obtained </td>   <td> <input type="text" name="sub3o8" > </td> 	
	      	 <td>Subject4 </td>   <td> <input type="text" name="sub48" > </td> 	
	   <td>Marks Obtained </td>   <td> <input type="text" name="sub4o8" > </td> 	
		       <td>Subject5 </td>   <td> <input type="text" name="sub58" > </td> 	
	     <td>Marks Obtained </td>   <td> <input type="text" name="sub5o8" > </td> 	
		         <td>Subject6 </td>   <td> <input type="text" name="sub68" > </td> 	
	       <td>Marks Obtained </td>   <td> <input type="text" name="sub6o8" > </td> 
		   
		   <tr><td></td><td><input type="hidden" name="branch9" value="<?php echo "".$branch;?>"></td>
				<td></td><td><input type="hidden" name="sem9" value="<?php echo "".$sem;?>"></td>
				<td></td><td><input type="hidden" name="utno9" value="<?php echo "".$utno;?>"></td>
		 <td>RollNo</td>  <td><input type="text" name="rollno9" value="<?php echo "".$i;?>"></td><?php ++$i;?>
		<td>Subject1</td>   <td> <input type="text" name="sub19" > </td> 	
	  <td>Marks Obtained</td><td><input type="text" name="sub1o9" > </td> 	
		<td>Subject2  </td>   <td> <input type="text" name="sub29" > </td> 	
   <td>Marks Obtained </td>   <td> <input type="text" name="sub2o9" > </td> 	
		  <td>Subject3  </td>   <td> <input type="text" name="sub39" > </td> 	
	 <td>Marks Obtained </td>   <td> <input type="text" name="sub3o9" > </td> 	
	      	 <td>Subject4 </td>   <td> <input type="text" name="sub49" > </td> 	
	   <td>Marks Obtained </td>   <td> <input type="text" name="sub4o9" > </td> 	
		       <td>Subject5 </td>   <td> <input type="text" name="sub59" > </td> 	
	     <td>Marks Obtained </td>   <td> <input type="text" name="sub5o9" > </td> 	
		         <td>Subject6 </td>   <td> <input type="text" name="sub69" > </td> 	
	       <td>Marks Obtained </td>   <td> <input type="text" name="sub6o9" > </td> 
		   
		   <tr><td></td><td><input type="hidden" name="branch10" value="<?php echo "".$branch;?>"></td>
				<td></td><td><input type="hidden" name="sem10" value="<?php echo "".$sem;?>"></td>
				<td></td><td><input type="hidden" name="utno10" value="<?php echo "".$utno;?>"></td>
		 <td>RollNo</td>  <td><input type="text" name="rollno10" value="<?php echo "".$i;?>"></td><?php ++$i;?>
		<td>Subject1</td>   <td> <input type="text" name="sub110" > </td> 	
	  <td>Marks Obtained</td><td><input type="text" name="sub1o10" > </td> 	
		<td>Subject2  </td>   <td> <input type="text" name="sub210" > </td> 	
   <td>Marks Obtained </td>   <td> <input type="text" name="sub2o10" > </td> 	
		  <td>Subject3  </td>   <td> <input type="text" name="sub310" > </td> 	
	 <td>Marks Obtained </td>   <td> <input type="text" name="sub3o10" > </td> 	
	      	 <td>Subject4 </td>   <td> <input type="text" name="sub410" > </td> 	
	   <td>Marks Obtained </td>   <td> <input type="text" name="sub4o10" > </td> 	
		       <td>Subject5 </td>   <td> <input type="text" name="sub510" > </td> 	
	     <td>Marks Obtained </td>   <td> <input type="text" name="sub5o10" > </td> 	
		         <td>Subject6 </td>   <td> <input type="text" name="sub610" > </td> 	
	       <td>Marks Obtained </td>   <td> <input type="text" name="sub6o10" > </td> 
		   
		   <tr><td></td><td><input type="hidden" name="branch11" value="<?php echo "".$branch;?>"></td>
				<td></td><td><input type="hidden" name="sem11" value="<?php echo "".$sem;?>"></td>
				<td></td><td><input type="hidden" name="utno11" value="<?php echo "".$utno;?>"></td>
		 <td>RollNo</td>  <td><input type="text" name="rollno11" value="<?php echo "".$i;?>"></td><?php ++$i;?>
		<td>Subject1</td>   <td> <input type="text" name="sub111" > </td> 	
	  <td>Marks Obtained</td><td><input type="text" name="sub1o11" > </td> 	
		<td>Subject2  </td>   <td> <input type="text" name="sub211" > </td> 	
   <td>Marks Obtained </td>   <td> <input type="text" name="sub2o11" > </td> 	
		  <td>Subject3  </td>   <td> <input type="text" name="sub311" > </td> 	
	 <td>Marks Obtained </td>   <td> <input type="text" name="sub3o11" > </td> 	
	      	 <td>Subject4 </td>   <td> <input type="text" name="sub411" > </td> 	
	   <td>Marks Obtained </td>   <td> <input type="text" name="sub4o11" > </td> 	
		       <td>Subject5 </td>   <td> <input type="text" name="sub511" > </td> 	
	     <td>Marks Obtained </td>   <td> <input type="text" name="sub5o11" > </td> 	
		         <td>Subject6 </td>   <td> <input type="text" name="sub611" > </td> 	
	       <td>Marks Obtained </td>   <td> <input type="text" name="sub6o11" > </td> 
		   
		   <tr><td></td><td><input type="hidden" name="branch12" value="<?php echo "".$branch;?>"></td>
				<td></td><td><input type="hidden" name="sem12" value="<?php echo "".$sem;?>"></td>
				<td></td><td><input type="hidden" name="utno12" value="<?php echo "".$utno;?>"></td>
		 <td>RollNo</td>  <td><input type="text" name="rollno12" value="<?php echo "".$i;?>"></td><?php ++$i;?>
		<td>Subject1</td>   <td> <input type="text" name="sub112" > </td> 	
	  <td>Marks Obtained</td><td><input type="text" name="sub1o12" > </td> 	
		<td>Subject2  </td>   <td> <input type="text" name="sub212" > </td> 	
   <td>Marks Obtained </td>   <td> <input type="text" name="sub2o12" > </td> 	
		  <td>Subject3  </td>   <td> <input type="text" name="sub312" > </td> 	
	 <td>Marks Obtained </td>   <td> <input type="text" name="sub3o12" > </td> 	
	      	 <td>Subject4 </td>   <td> <input type="text" name="sub412" > </td> 	
	   <td>Marks Obtained </td>   <td> <input type="text" name="sub4o12" > </td> 	
		       <td>Subject5 </td>   <td> <input type="text" name="sub512" > </td> 	
	     <td>Marks Obtained </td>   <td> <input type="text" name="sub5o12" > </td> 	
		         <td>Subject6 </td>   <td> <input type="text" name="sub612" > </td> 	
	       <td>Marks Obtained </td>   <td> <input type="text" name="sub6o12" > </td> 
		   
		   <tr><td></td><td><input type="hidden" name="branch13" value="<?php echo "".$branch;?>"></td>
				<td></td><td><input type="hidden" name="sem13" value="<?php echo "".$sem;?>"></td>
				<td></td><td><input type="hidden" name="utno13" value="<?php echo "".$utno;?>"></td>
		 <td>RollNo</td>  <td><input type="text" name="rollno13" value="<?php echo "".$i;?>"></td><?php ++$i;?>
		<td>Subject1</td>   <td> <input type="text" name="sub113" > </td> 	
	  <td>Marks Obtained</td><td><input type="text" name="sub1o13" > </td> 	
		<td>Subject2  </td>   <td> <input type="text" name="sub213" > </td> 	
   <td>Marks Obtained </td>   <td> <input type="text" name="sub2o13" > </td> 	
		  <td>Subject3  </td>   <td> <input type="text" name="sub313" > </td> 	
	 <td>Marks Obtained </td>   <td> <input type="text" name="sub3o13" > </td> 	
	      	 <td>Subject4 </td>   <td> <input type="text" name="sub413" > </td> 	
	   <td>Marks Obtained </td>   <td> <input type="text" name="sub4o13" > </td> 	
		       <td>Subject5 </td>   <td> <input type="text" name="sub513" > </td> 	
	     <td>Marks Obtained </td>   <td> <input type="text" name="sub5o13" > </td> 	
		         <td>Subject6 </td>   <td> <input type="text" name="sub613" > </td> 	
	       <td>Marks Obtained </td>   <td> <input type="text" name="sub6o13" > </td> 
		   
		   <tr><td></td><td><input type="hidden" name="branch14" value="<?php echo "".$branch;?>"></td>
				<td></td><td><input type="hidden" name="sem14" value="<?php echo "".$sem;?>"></td>
				<td></td><td><input type="hidden" name="utno14" value="<?php echo "".$utno;?>"></td>
		 <td>RollNo</td>  <td><input type="text" name="rollno14" value="<?php echo "".$i;?>"></td><?php ++$i;?>
		<td>Subject1</td>   <td> <input type="text" name="sub114" > </td> 	
	  <td>Marks Obtained</td><td><input type="text" name="sub1o14" > </td> 	
		<td>Subject2  </td>   <td> <input type="text" name="sub214" > </td> 	
   <td>Marks Obtained </td>   <td> <input type="text" name="sub2o14" > </td> 	
		  <td>Subject3  </td>   <td> <input type="text" name="sub314" > </td> 	
	 <td>Marks Obtained </td>   <td> <input type="text" name="sub3o14" > </td> 	
	      	 <td>Subject4 </td>   <td> <input type="text" name="sub414" > </td> 	
	   <td>Marks Obtained </td>   <td> <input type="text" name="sub4o14" > </td> 	
		       <td>Subject5 </td>   <td> <input type="text" name="sub514" > </td> 	
	     <td>Marks Obtained </td>   <td> <input type="text" name="sub5o14" > </td> 	
		         <td>Subject6 </td>   <td> <input type="text" name="sub614" > </td> 	
	       <td>Marks Obtained </td>   <td> <input type="text" name="sub6o14" > </td> 
		   
		   <tr><td></td><td><input type="hidden" name="branch15" value="<?php echo "".$branch;?>"></td>
				<td></td><td><input type="hidden" name="sem15" value="<?php echo "".$sem;?>"></td>
				<td></td><td><input type="hidden" name="utno15" value="<?php echo "".$utno;?>"></td>
		 <td>RollNo</td>  <td><input type="text" name="rollno15" value="<?php echo "".$i;?>"></td><?php ++$i;?>
		<td>Subject1</td>   <td> <input type="text" name="sub115" > </td> 	
	  <td>Marks Obtained</td><td><input type="text" name="sub1o15" > </td> 	
		<td>Subject2  </td>   <td> <input type="text" name="sub215" > </td> 	
   <td>Marks Obtained </td>   <td> <input type="text" name="sub2o15" > </td> 	
		  <td>Subject3  </td>   <td> <input type="text" name="sub315" > </td> 	
	 <td>Marks Obtained </td>   <td> <input type="text" name="sub3o15" > </td> 	
	      	 <td>Subject4 </td>   <td> <input type="text" name="sub415" > </td> 	
	   <td>Marks Obtained </td>   <td> <input type="text" name="sub4o15" > </td> 	
		       <td>Subject5 </td>   <td> <input type="text" name="sub515" > </td> 	
	     <td>Marks Obtained </td>   <td> <input type="text" name="sub5o15" > </td> 	
		         <td>Subject6 </td>   <td> <input type="text" name="sub615" > </td> 	
	       <td>Marks Obtained </td>   <td> <input type="text" name="sub6o15" > </td> 
		   
		   <tr><td></td><td><input type="hidden" name="branch16" value="<?php echo "".$branch;?>"></td>
				<td></td><td><input type="hidden" name="sem16" value="<?php echo "".$sem;?>"></td>
				<td></td><td><input type="hidden" name="utno16" value="<?php echo "".$utno;?>"></td>
		 <td>RollNo</td>  <td><input type="text" name="rollno16" value="<?php echo "".$i;?>"></td><?php ++$i;?>
		<td>Subject1</td>   <td> <input type="text" name="sub116" > </td> 	
	  <td>Marks Obtained</td><td><input type="text" name="sub1o16" > </td> 	
		<td>Subject2  </td>   <td> <input type="text" name="sub216" > </td> 	
   <td>Marks Obtained </td>   <td> <input type="text" name="sub2o16" > </td> 	
		  <td>Subject3  </td>   <td> <input type="text" name="sub316" > </td> 	
	 <td>Marks Obtained </td>   <td> <input type="text" name="sub3o16" > </td> 	
	      	 <td>Subject4 </td>   <td> <input type="text" name="sub416" > </td> 	
	   <td>Marks Obtained </td>   <td> <input type="text" name="sub4o16" > </td> 	
		       <td>Subject5 </td>   <td> <input type="text" name="sub516" > </td> 	
	     <td>Marks Obtained </td>   <td> <input type="text" name="sub5o16" > </td> 	
		         <td>Subject6 </td>   <td> <input type="text" name="sub616" > </td> 	
	       <td>Marks Obtained </td>   <td> <input type="text" name="sub6o16" > </td> 
		   
		   <tr><td></td><td><input type="hidden" name="branch17" value="<?php echo "".$branch;?>"></td>
				<td></td><td><input type="hidden" name="sem17" value="<?php echo "".$sem;?>"></td>
				<td></td><td><input type="hidden" name="utno17" value="<?php echo "".$utno;?>"></td>
		 <td>RollNo</td>  <td><input type="text" name="rollno17" value="<?php echo "".$i;?>"></td><?php ++$i;?>
		<td>Subject1</td>   <td> <input type="text" name="sub117" > </td> 	
	  <td>Marks Obtained</td><td><input type="text" name="sub1o17" > </td> 	
		<td>Subject2  </td>   <td> <input type="text" name="sub217" > </td> 	
   <td>Marks Obtained </td>   <td> <input type="text" name="sub2o17" > </td> 	
		  <td>Subject3  </td>   <td> <input type="text" name="sub317" > </td> 	
	 <td>Marks Obtained </td>   <td> <input type="text" name="sub3o17" > </td> 	
	      	 <td>Subject4 </td>   <td> <input type="text" name="sub417" > </td> 	
	   <td>Marks Obtained </td>   <td> <input type="text" name="sub4o17" > </td> 	
		       <td>Subject5 </td>   <td> <input type="text" name="sub517" > </td> 	
	     <td>Marks Obtained </td>   <td> <input type="text" name="sub5o17" > </td> 	
		         <td>Subject6 </td>   <td> <input type="text" name="sub617" > </td> 	
	       <td>Marks Obtained </td>   <td> <input type="text" name="sub6o17" > </td> 
		   
		   <tr><td></td><td><input type="hidden" name="branch18" value="<?php echo "".$branch;?>"></td>
				<td></td><td><input type="hidden" name="sem18" value="<?php echo "".$sem;?>"></td>
				<td></td><td><input type="hidden" name="utno18" value="<?php echo "".$utno;?>"></td>
		 <td>RollNo</td>  <td><input type="text" name="rollno18" value="<?php echo "".$i;?>"></td><?php ++$i;?>
		<td>Subject1</td>   <td> <input type="text" name="sub118" > </td> 	
	  <td>Marks Obtained</td><td><input type="text" name="sub1o18" > </td> 	
		<td>Subject2  </td>   <td> <input type="text" name="sub218" > </td> 	
   <td>Marks Obtained </td>   <td> <input type="text" name="sub2o18" > </td> 	
		  <td>Subject3  </td>   <td> <input type="text" name="sub318" > </td> 	
	 <td>Marks Obtained </td>   <td> <input type="text" name="sub3o18" > </td> 	
	      	 <td>Subject4 </td>   <td> <input type="text" name="sub418" > </td> 	
	   <td>Marks Obtained </td>   <td> <input type="text" name="sub4o18" > </td> 	
		       <td>Subject5 </td>   <td> <input type="text" name="sub518" > </td> 	
	     <td>Marks Obtained </td>   <td> <input type="text" name="sub5o18" > </td> 	
		         <td>Subject6 </td>   <td> <input type="text" name="sub618" > </td> 	
	       <td>Marks Obtained </td>   <td> <input type="text" name="sub6o18" > </td> 
		   
		   <tr><td></td><td><input type="hidden" name="branch19" value="<?php echo "".$branch;?>"></td>
				<td></td><td><input type="hidden" name="sem19" value="<?php echo "".$sem;?>"></td>
				<td></td><td><input type="hidden" name="utno19" value="<?php echo "".$utno;?>"></td>
		 <td>RollNo</td>  <td><input type="text" name="rollno19" value="<?php echo "".$i;?>"></td><?php ++$i;?>
		<td>Subject1</td>   <td> <input type="text" name="sub119" > </td> 	
	  <td>Marks Obtained</td><td><input type="text" name="sub1o19" > </td> 	
		<td>Subject2  </td>   <td> <input type="text" name="sub219" > </td> 	
   <td>Marks Obtained </td>   <td> <input type="text" name="sub2o19" > </td> 	
		  <td>Subject3  </td>   <td> <input type="text" name="sub319" > </td> 	
	 <td>Marks Obtained </td>   <td> <input type="text" name="sub3o19" > </td> 	
	      	 <td>Subject4 </td>   <td> <input type="text" name="sub419" > </td> 	
	   <td>Marks Obtained </td>   <td> <input type="text" name="sub4o19" > </td> 	
		       <td>Subject5 </td>   <td> <input type="text" name="sub519" > </td> 	
	     <td>Marks Obtained </td>   <td> <input type="text" name="sub5o19" > </td> 	
		         <td>Subject6 </td>   <td> <input type="text" name="sub619" > </td> 	
	       <td>Marks Obtained </td>   <td> <input type="text" name="sub6o19" > </td> 
		   
		   <tr><td></td><td><input type="hidden" name="branch20" value="<?php echo "".$branch;?>"></td>
				<td></td><td><input type="hidden" name="sem20" value="<?php echo "".$sem;?>"></td>
				<td></td><td><input type="hidden" name="utno20" value="<?php echo "".$utno;?>"></td>
		 <td>RollNo</td>  <td><input type="text" name="rollno20" value="<?php echo "".$i;?>"></td><?php ++$i;?>
		<td>Subject1</td>   <td> <input type="text" name="sub120" > </td> 	
	  <td>Marks Obtained</td><td><input type="text" name="sub1o20" > </td> 	
		<td>Subject2  </td>   <td> <input type="text" name="sub220" > </td> 	
   <td>Marks Obtained </td>   <td> <input type="text" name="sub2o20" > </td> 	
		  <td>Subject3  </td>   <td> <input type="text" name="sub320" > </td> 	
	 <td>Marks Obtained </td>   <td> <input type="text" name="sub3o20" > </td> 	
	      	 <td>Subject4 </td>   <td> <input type="text" name="sub420" > </td> 	
	   <td>Marks Obtained </td>   <td> <input type="text" name="sub4o20" > </td> 	
		       <td>Subject5 </td>   <td> <input type="text" name="sub520" > </td> 	
	     <td>Marks Obtained </td>   <td> <input type="text" name="sub5o20" > </td> 	
		         <td>Subject6 </td>   <td> <input type="text" name="sub620" > </td> 	
	       <td>Marks Obtained </td>   <td> <input type="text" name="sub6o20" > </td> 
		   
		   <tr><td></td><td><input type="hidden" name="branch21" value="<?php echo "".$branch;?>"></td>
				<td></td><td><input type="hidden" name="sem21" value="<?php echo "".$sem;?>"></td>
				<td></td><td><input type="hidden" name="utno21" value="<?php echo "".$utno;?>"></td>
		 <td>RollNo</td>  <td><input type="text" name="rollno21" value="<?php echo "".$i;?>"></td><?php ++$i;?>
		<td>Subject1</td>   <td> <input type="text" name="sub121" > </td> 	
	  <td>Marks Obtained</td><td><input type="text" name="sub1o21" > </td> 	
		<td>Subject2  </td>   <td> <input type="text" name="sub221" > </td> 	
   <td>Marks Obtained </td>   <td> <input type="text" name="sub2o21" > </td> 	
		  <td>Subject3  </td>   <td> <input type="text" name="sub321" > </td> 	
	 <td>Marks Obtained </td>   <td> <input type="text" name="sub3o21" > </td> 	
	      	 <td>Subject4 </td>   <td> <input type="text" name="sub421" > </td> 	
	   <td>Marks Obtained </td>   <td> <input type="text" name="sub4o21" > </td> 	
		       <td>Subject5 </td>   <td> <input type="text" name="sub521" > </td> 	
	     <td>Marks Obtained </td>   <td> <input type="text" name="sub5o21" > </td> 	
		         <td>Subject6 </td>   <td> <input type="text" name="sub621" > </td> 	
	       <td>Marks Obtained </td>   <td> <input type="text" name="sub6o21" > </td> 
		   
		   <tr><td></td><td><input type="hidden" name="branch22" value="<?php echo "".$branch;?>"></td>
				<td></td><td><input type="hidden" name="sem22" value="<?php echo "".$sem;?>"></td>
				<td></td><td><input type="hidden" name="utno22" value="<?php echo "".$utno;?>"></td>
		 <td>RollNo</td>  <td><input type="text" name="rollno22" value="<?php echo "".$i;?>"></td><?php ++$i;?>
		<td>Subject1</td>   <td> <input type="text" name="sub122" > </td> 	
	  <td>Marks Obtained</td><td><input type="text" name="sub1o22" > </td> 	
		<td>Subject2  </td>   <td> <input type="text" name="sub222" > </td> 	
   <td>Marks Obtained </td>   <td> <input type="text" name="sub2o22" > </td> 	
		  <td>Subject3  </td>   <td> <input type="text" name="sub322" > </td> 	
	 <td>Marks Obtained </td>   <td> <input type="text" name="sub3o22" > </td> 	
	      	 <td>Subject4 </td>   <td> <input type="text" name="sub422" > </td> 	
	   <td>Marks Obtained </td>   <td> <input type="text" name="sub4o22" > </td> 	
		       <td>Subject5 </td>   <td> <input type="text" name="sub522" > </td> 	
	     <td>Marks Obtained </td>   <td> <input type="text" name="sub5o22" > </td> 	
		         <td>Subject6 </td>   <td> <input type="text" name="sub622" > </td> 	
	       <td>Marks Obtained </td>   <td> <input type="text" name="sub6o22" > </td> 
		   
		   <tr><td></td><td><input type="hidden" name="branch23" value="<?php echo "".$branch;?>"></td>
				<td></td><td><input type="hidden" name="sem23" value="<?php echo "".$sem;?>"></td>
				<td></td><td><input type="hidden" name="utno23" value="<?php echo "".$utno;?>"></td>
		 <td>RollNo</td>  <td><input type="text" name="rollno23" value="<?php echo "".$i;?>"></td><?php ++$i;?>
		<td>Subject1</td>   <td> <input type="text" name="sub123" > </td> 	
	  <td>Marks Obtained</td><td><input type="text" name="sub1o23" > </td> 	
		<td>Subject2  </td>   <td> <input type="text" name="sub223" > </td> 	
   <td>Marks Obtained </td>   <td> <input type="text" name="sub2o23" > </td> 	
		  <td>Subject3  </td>   <td> <input type="text" name="sub323" > </td> 	
	 <td>Marks Obtained </td>   <td> <input type="text" name="sub3o23" > </td> 	
	      	 <td>Subject4 </td>   <td> <input type="text" name="sub423" > </td> 	
	   <td>Marks Obtained </td>   <td> <input type="text" name="sub4o23" > </td> 	
		       <td>Subject5 </td>   <td> <input type="text" name="sub523" > </td> 	
	     <td>Marks Obtained </td>   <td> <input type="text" name="sub5o23" > </td> 	
		         <td>Subject6 </td>   <td> <input type="text" name="sub623" > </td> 	
	       <td>Marks Obtained </td>   <td> <input type="text" name="sub6o23" > </td> 
		   
		   <tr><td></td><td><input type="hidden" name="branch24" value="<?php echo "".$branch;?>"></td>
				<td></td><td><input type="hidden" name="sem24" value="<?php echo "".$sem;?>"></td>
				<td></td><td><input type="hidden" name="utno24" value="<?php echo "".$utno;?>"></td>
		 <td>RollNo</td>  <td><input type="text" name="rollno24" value="<?php echo "".$i;?>"></td><?php ++$i;?>
		<td>Subject1</td>   <td> <input type="text" name="sub124" > </td> 	
	  <td>Marks Obtained</td><td><input type="text" name="sub1o24" > </td> 	
		<td>Subject2  </td>   <td> <input type="text" name="sub224" > </td> 	
   <td>Marks Obtained </td>   <td> <input type="text" name="sub2o24" > </td> 	
		  <td>Subject3  </td>   <td> <input type="text" name="sub324" > </td> 	
	 <td>Marks Obtained </td>   <td> <input type="text" name="sub3o24" > </td> 	
	      	 <td>Subject4 </td>   <td> <input type="text" name="sub424" > </td> 	
	   <td>Marks Obtained </td>   <td> <input type="text" name="sub4o24" > </td> 	
		       <td>Subject5 </td>   <td> <input type="text" name="sub524" > </td> 	
	     <td>Marks Obtained </td>   <td> <input type="text" name="sub5o24" > </td> 	
		         <td>Subject6 </td>   <td> <input type="text" name="sub624" > </td> 	
	       <td>Marks Obtained </td>   <td> <input type="text" name="sub6o24" > </td> 
		   
		   <tr><td></td><td><input type="hidden" name="branch25" value="<?php echo "".$branch;?>"></td>
				<td></td><td><input type="hidden" name="sem25" value="<?php echo "".$sem;?>"></td>
				<td></td><td><input type="hidden" name="utno25" value="<?php echo "".$utno;?>"></td>
		 <td>RollNo</td>  <td><input type="text" name="rollno25" value="<?php echo "".$i;?>"></td><?php ++$i;?>
		<td>Subject1</td>   <td> <input type="text" name="sub125" > </td> 	
	  <td>Marks Obtained</td><td><input type="text" name="sub1o25" > </td> 	
		<td>Subject2  </td>   <td> <input type="text" name="sub225" > </td> 	
   <td>Marks Obtained </td>   <td> <input type="text" name="sub2o25" > </td> 	
		  <td>Subject3  </td>   <td> <input type="text" name="sub325" > </td> 	
	 <td>Marks Obtained </td>   <td> <input type="text" name="sub3o25" > </td> 	
	      	 <td>Subject4 </td>   <td> <input type="text" name="sub425" > </td> 	
	   <td>Marks Obtained </td>   <td> <input type="text" name="sub4o25" > </td> 	
		       <td>Subject5 </td>   <td> <input type="text" name="sub525" > </td> 	
	     <td>Marks Obtained </td>   <td> <input type="text" name="sub5o25" > </td> 	
		         <td>Subject6 </td>   <td> <input type="text" name="sub625" > </td> 	
	       <td>Marks Obtained </td>   <td> <input type="text" name="sub6o25" > </td> 
		   
		   <tr><td></td><td><input type="hidden" name="branch26" value="<?php echo "".$branch;?>"></td>
				<td></td><td><input type="hidden" name="sem26" value="<?php echo "".$sem;?>"></td>
				<td></td><td><input type="hidden" name="utno26" value="<?php echo "".$utno;?>"></td>
		 <td>RollNo</td>  <td><input type="text" name="rollno26" value="<?php echo "".$i;?>"></td><?php ++$i;?>
		<td>Subject1</td>   <td> <input type="text" name="sub126" > </td> 	
	  <td>Marks Obtained</td><td><input type="text" name="sub1o26" > </td> 	
		<td>Subject2  </td>   <td> <input type="text" name="sub226" > </td> 	
   <td>Marks Obtained </td>   <td> <input type="text" name="sub2o26" > </td> 	
		  <td>Subject3  </td>   <td> <input type="text" name="sub326" > </td> 	
	 <td>Marks Obtained </td>   <td> <input type="text" name="sub3o26" > </td> 	
	      	 <td>Subject4 </td>   <td> <input type="text" name="sub426" > </td> 	
	   <td>Marks Obtained </td>   <td> <input type="text" name="sub4o26" > </td> 	
		       <td>Subject5 </td>   <td> <input type="text" name="sub526" > </td> 	
	     <td>Marks Obtained </td>   <td> <input type="text" name="sub5o26" > </td> 	
		         <td>Subject6 </td>   <td> <input type="text" name="sub626" > </td> 	
	       <td>Marks Obtained </td>   <td> <input type="text" name="sub6o26" > </td> 
		   
		   <tr><td></td><td><input type="hidden" name="branch27" value="<?php echo "".$branch;?>"></td>
				<td></td><td><input type="hidden" name="sem27" value="<?php echo "".$sem;?>"></td>
				<td></td><td><input type="hidden" name="utno27" value="<?php echo "".$utno;?>"></td>
		 <td>RollNo</td>  <td><input type="text" name="rollno27" value="<?php echo "".$i;?>"></td><?php ++$i;?>
		<td>Subject1</td>   <td> <input type="text" name="sub127" > </td> 	
	  <td>Marks Obtained</td><td><input type="text" name="sub1o27" > </td> 	
		<td>Subject2  </td>   <td> <input type="text" name="sub227" > </td> 	
   <td>Marks Obtained </td>   <td> <input type="text" name="sub2o27" > </td> 	
		  <td>Subject3  </td>   <td> <input type="text" name="sub327" > </td> 	
	 <td>Marks Obtained </td>   <td> <input type="text" name="sub3o27" > </td> 	
	      	 <td>Subject4 </td>   <td> <input type="text" name="sub427" > </td> 	
	   <td>Marks Obtained </td>   <td> <input type="text" name="sub4o27" > </td> 	
		       <td>Subject5 </td>   <td> <input type="text" name="sub527" > </td> 	
	     <td>Marks Obtained </td>   <td> <input type="text" name="sub5o27" > </td> 	
		         <td>Subject6 </td>   <td> <input type="text" name="sub627" > </td> 	
	       <td>Marks Obtained </td>   <td> <input type="text" name="sub6o27" > </td> 
		   
		   <tr><td></td><td><input type="hidden" name="branch28" value="<?php echo "".$branch;?>"></td>
				<td></td><td><input type="hidden" name="sem28" value="<?php echo "".$sem;?>"></td>
				<td></td><td><input type="hidden" name="utno28" value="<?php echo "".$utno;?>"></td>
		 <td>RollNo</td>  <td><input type="text" name="rollno28" value="<?php echo "".$i;?>"></td><?php ++$i;?>
		<td>Subject1</td>   <td> <input type="text" name="sub128" > </td> 	
	  <td>Marks Obtained</td><td><input type="text" name="sub1o28" > </td> 	
		<td>Subject2  </td>   <td> <input type="text" name="sub228" > </td> 	
   <td>Marks Obtained </td>   <td> <input type="text" name="sub2o28" > </td> 	
		  <td>Subject3  </td>   <td> <input type="text" name="sub328" > </td> 	
	 <td>Marks Obtained </td>   <td> <input type="text" name="sub3o28" > </td> 	
	      	 <td>Subject4 </td>   <td> <input type="text" name="sub428" > </td> 	
	   <td>Marks Obtained </td>   <td> <input type="text" name="sub4o28" > </td> 	
		       <td>Subject5 </td>   <td> <input type="text" name="sub528" > </td> 	
	     <td>Marks Obtained </td>   <td> <input type="text" name="sub5o28" > </td> 	
		         <td>Subject6 </td>   <td> <input type="text" name="sub628" > </td> 	
	       <td>Marks Obtained </td>   <td> <input type="text" name="sub6o28" > </td> 
		   
		   <tr><td></td><td><input type="hidden" name="branch29" value="<?php echo "".$branch;?>"></td>
				<td></td><td><input type="hidden" name="sem29" value="<?php echo "".$sem;?>"></td>
				<td></td><td><input type="hidden" name="utno29" value="<?php echo "".$utno;?>"></td>
		 <td>RollNo</td>  <td><input type="text" name="rollno29" value="<?php echo "".$i;?>"></td><?php ++$i;?>
		<td>Subject1</td>   <td> <input type="text" name="sub129" > </td> 	
	  <td>Marks Obtained</td><td><input type="text" name="sub1o29" > </td> 	
		<td>Subject2  </td>   <td> <input type="text" name="sub229" > </td> 	
   <td>Marks Obtained </td>   <td> <input type="text" name="sub2o29" > </td> 	
		  <td>Subject3  </td>   <td> <input type="text" name="sub329" > </td> 	
	 <td>Marks Obtained </td>   <td> <input type="text" name="sub3o29" > </td> 	
	      	 <td>Subject4 </td>   <td> <input type="text" name="sub429" > </td> 	
	   <td>Marks Obtained </td>   <td> <input type="text" name="sub4o29" > </td> 	
		       <td>Subject5 </td>   <td> <input type="text" name="sub529" > </td> 	
	     <td>Marks Obtained </td>   <td> <input type="text" name="sub5o29" > </td> 	
		         <td>Subject6 </td>   <td> <input type="text" name="sub629" > </td> 	
	       <td>Marks Obtained </td>   <td> <input type="text" name="sub6o29" > </td> 
		   
		   <tr><td></td><td><input type="hidden" name="branch30" value="<?php echo "".$branch;?>"></td>
				<td></td><td><input type="hidden" name="sem30" value="<?php echo "".$sem;?>"></td>
				<td></td><td><input type="hidden" name="utno30" value="<?php echo "".$utno;?>"></td>
		 <td>RollNo</td>  <td><input type="text" name="rollno30" value="<?php echo "".$i;?>"></td><?php ++$i;?>
		<td>Subject1</td>   <td> <input type="text" name="sub130" > </td> 	
	  <td>Marks Obtained</td><td><input type="text" name="sub1o30" > </td> 	
		<td>Subject2  </td>   <td> <input type="text" name="sub230" > </td> 	
   <td>Marks Obtained </td>   <td> <input type="text" name="sub2o30" > </td> 	
		  <td>Subject3  </td>   <td> <input type="text" name="sub330" > </td> 	
	 <td>Marks Obtained </td>   <td> <input type="text" name="sub3o30" > </td> 	
	      	 <td>Subject4 </td>   <td> <input type="text" name="sub430" > </td> 	
	   <td>Marks Obtained </td>   <td> <input type="text" name="sub4o30" > </td> 	
		       <td>Subject5 </td>   <td> <input type="text" name="sub530" > </td> 	
	     <td>Marks Obtained </td>   <td> <input type="text" name="sub5o30" > </td> 	
		         <td>Subject6 </td>   <td> <input type="text" name="sub630" > </td> 	
	       <td>Marks Obtained </td>   <td> <input type="text" name="sub6o30" > </td> 
		   
		   <tr><td></td><td><input type="hidden" name="branch31" value="<?php echo "".$branch;?>"></td>
				<td></td><td><input type="hidden" name="sem31" value="<?php echo "".$sem;?>"></td>
				<td></td><td><input type="hidden" name="utno31" value="<?php echo "".$utno;?>"></td>
		 <td>RollNo</td>  <td><input type="text" name="rollno31" value="<?php echo "".$i;?>"></td><?php ++$i;?>
		<td>Subject1</td>   <td> <input type="text" name="sub131" > </td> 	
	  <td>Marks Obtained</td><td><input type="text" name="sub1o31" > </td> 	
		<td>Subject2  </td>   <td> <input type="text" name="sub231" > </td> 	
   <td>Marks Obtained </td>   <td> <input type="text" name="sub2o31" > </td> 	
		  <td>Subject3  </td>   <td> <input type="text" name="sub331" > </td> 	
	 <td>Marks Obtained </td>   <td> <input type="text" name="sub3o31" > </td> 	
	      	 <td>Subject4 </td>   <td> <input type="text" name="sub431" > </td> 	
	   <td>Marks Obtained </td>   <td> <input type="text" name="sub4o31" > </td> 	
		       <td>Subject5 </td>   <td> <input type="text" name="sub531" > </td> 	
	     <td>Marks Obtained </td>   <td> <input type="text" name="sub5o31" > </td> 	
		         <td>Subject6 </td>   <td> <input type="text" name="sub631" > </td> 	
	       <td>Marks Obtained </td>   <td> <input type="text" name="sub6o31" > </td> 
		   
		   <tr><td></td><td><input type="hidden" name="branch32" value="<?php echo "".$branch;?>"></td>
				<td></td><td><input type="hidden" name="sem32" value="<?php echo "".$sem;?>"></td>
				<td></td><td><input type="hidden" name="utno32" value="<?php echo "".$utno;?>"></td>
		 <td>RollNo</td>  <td><input type="text" name="rollno32" value="<?php echo "".$i;?>"></td><?php ++$i;?>
		<td>Subject1</td>   <td> <input type="text" name="sub132" > </td> 	
	  <td>Marks Obtained</td><td><input type="text" name="sub1o32" > </td> 	
		<td>Subject2  </td>   <td> <input type="text" name="sub232" > </td> 	
   <td>Marks Obtained </td>   <td> <input type="text" name="sub2o32" > </td> 	
		  <td>Subject3  </td>   <td> <input type="text" name="sub332" > </td> 	
	 <td>Marks Obtained </td>   <td> <input type="text" name="sub3o32" > </td> 	
	      	 <td>Subject4 </td>   <td> <input type="text" name="sub432" > </td> 	
	   <td>Marks Obtained </td>   <td> <input type="text" name="sub4o32" > </td> 	
		       <td>Subject5 </td>   <td> <input type="text" name="sub532" > </td> 	
	     <td>Marks Obtained </td>   <td> <input type="text" name="sub5o32" > </td> 	
		         <td>Subject6 </td>   <td> <input type="text" name="sub632" > </td> 	
	       <td>Marks Obtained </td>   <td> <input type="text" name="sub6o32" > </td> 
		   
		   <tr><td></td><td><input type="hidden" name="branch33" value="<?php echo "".$branch;?>"></td>
				<td></td><td><input type="hidden" name="sem33" value="<?php echo "".$sem;?>"></td>
				<td></td><td><input type="hidden" name="utno33" value="<?php echo "".$utno;?>"></td>
		 <td>RollNo</td>  <td><input type="text" name="rollno33" value="<?php echo "".$i;?>"></td><?php ++$i;?>
		<td>Subject1</td>   <td> <input type="text" name="sub133" > </td> 	
	  <td>Marks Obtained</td><td><input type="text" name="sub1o33" > </td> 	
		<td>Subject2  </td>   <td> <input type="text" name="sub233" > </td> 	
   <td>Marks Obtained </td>   <td> <input type="text" name="sub2o33" > </td> 	
		  <td>Subject3  </td>   <td> <input type="text" name="sub333" > </td> 	
	 <td>Marks Obtained </td>   <td> <input type="text" name="sub3o33" > </td> 	
	      	 <td>Subject4 </td>   <td> <input type="text" name="sub433" > </td> 	
	   <td>Marks Obtained </td>   <td> <input type="text" name="sub4o33" > </td> 	
		       <td>Subject5 </td>   <td> <input type="text" name="sub533" > </td> 	
	     <td>Marks Obtained </td>   <td> <input type="text" name="sub5o33" > </td> 	
		         <td>Subject6 </td>   <td> <input type="text" name="sub633" > </td> 	
	       <td>Marks Obtained </td>   <td> <input type="text" name="sub6o33" > </td> 
		   
		   <tr><td></td><td><input type="hidden" name="branch34" value="<?php echo "".$branch;?>"></td>
				<td></td><td><input type="hidden" name="sem34" value="<?php echo "".$sem;?>"></td>
				<td></td><td><input type="hidden" name="utno34" value="<?php echo "".$utno;?>"></td>
		 <td>RollNo</td>  <td><input type="text" name="rollno34" value="<?php echo "".$i;?>"></td><?php ++$i;?>
		<td>Subject1</td>   <td> <input type="text" name="sub134" > </td> 	
	  <td>Marks Obtained</td><td><input type="text" name="sub1o34" > </td> 	
		<td>Subject2  </td>   <td> <input type="text" name="sub234" > </td> 	
   <td>Marks Obtained </td>   <td> <input type="text" name="sub2o34" > </td> 	
		  <td>Subject3  </td>   <td> <input type="text" name="sub334" > </td> 	
	 <td>Marks Obtained </td>   <td> <input type="text" name="sub3o34" > </td> 	
	      	 <td>Subject4 </td>   <td> <input type="text" name="sub434" > </td> 	
	   <td>Marks Obtained </td>   <td> <input type="text" name="sub4o34" > </td> 	
		       <td>Subject5 </td>   <td> <input type="text" name="sub534" > </td> 	
	     <td>Marks Obtained </td>   <td> <input type="text" name="sub5o34" > </td> 	
		         <td>Subject6 </td>   <td> <input type="text" name="sub634" > </td> 	
	       <td>Marks Obtained </td>   <td> <input type="text" name="sub6o34" > </td> 
		   
		   <tr><td></td><td><input type="hidden" name="branch35" value="<?php echo "".$branch;?>"></td>
				<td></td><td><input type="hidden" name="sem35" value="<?php echo "".$sem;?>"></td>
				<td></td><td><input type="hidden" name="utno35" value="<?php echo "".$utno;?>"></td>
		 <td>RollNo</td>  <td><input type="text" name="rollno35" value="<?php echo "".$i;?>"></td><?php ++$i;?>
		<td>Subject1</td>   <td> <input type="text" name="sub135" > </td> 	
	  <td>Marks Obtained</td><td><input type="text" name="sub1o35" > </td> 	
		<td>Subject2  </td>   <td> <input type="text" name="sub235" > </td> 	
   <td>Marks Obtained </td>   <td> <input type="text" name="sub2o35" > </td> 	
		  <td>Subject3  </td>   <td> <input type="text" name="sub335" > </td> 	
	 <td>Marks Obtained </td>   <td> <input type="text" name="sub3o35" > </td> 	
	      	 <td>Subject4 </td>   <td> <input type="text" name="sub435" > </td> 	
	   <td>Marks Obtained </td>   <td> <input type="text" name="sub4o35" > </td> 	
		       <td>Subject5 </td>   <td> <input type="text" name="sub535" > </td> 	
	     <td>Marks Obtained </td>   <td> <input type="text" name="sub5o35" > </td> 	
		         <td>Subject6 </td>   <td> <input type="text" name="sub635" > </td> 	
	       <td>Marks Obtained </td>   <td> <input type="text" name="sub6o35" > </td> 
		   
		   <tr><td></td><td><input type="hidden" name="branch36" value="<?php echo "".$branch;?>"></td>
				<td></td><td><input type="hidden" name="sem36" value="<?php echo "".$sem;?>"></td>
				<td></td><td><input type="hidden" name="utno36" value="<?php echo "".$utno;?>"></td>
		 <td>RollNo</td>  <td><input type="text" name="rollno36" value="<?php echo "".$i;?>"></td><?php ++$i;?>
		<td>Subject1</td>   <td> <input type="text" name="sub136" > </td> 	
	  <td>Marks Obtained</td><td><input type="text" name="sub1o36" > </td> 	
		<td>Subject2  </td>   <td> <input type="text" name="sub236" > </td> 	
   <td>Marks Obtained </td>   <td> <input type="text" name="sub2o36" > </td> 	
		  <td>Subject3  </td>   <td> <input type="text" name="sub336" > </td> 	
	 <td>Marks Obtained </td>   <td> <input type="text" name="sub3o36" > </td> 	
	      	 <td>Subject4 </td>   <td> <input type="text" name="sub436" > </td> 	
	   <td>Marks Obtained </td>   <td> <input type="text" name="sub4o36" > </td> 	
		       <td>Subject5 </td>   <td> <input type="text" name="sub536" > </td> 	
	     <td>Marks Obtained </td>   <td> <input type="text" name="sub5o36" > </td> 	
		         <td>Subject6 </td>   <td> <input type="text" name="sub636" > </td> 	
	       <td>Marks Obtained </td>   <td> <input type="text" name="sub6o36" > </td> 
		   
		   <tr><td></td><td><input type="hidden" name="branch37" value="<?php echo "".$branch;?>"></td>
				<td></td><td><input type="hidden" name="sem37" value="<?php echo "".$sem;?>"></td>
				<td></td><td><input type="hidden" name="utno37" value="<?php echo "".$utno;?>"></td>
		 <td>RollNo</td>  <td><input type="text" name="rollno37" value="<?php echo "".$i;?>"></td><?php ++$i;?>
		<td>Subject1</td>   <td> <input type="text" name="sub137" > </td> 	
	  <td>Marks Obtained</td><td><input type="text" name="sub1o37" > </td> 	
		<td>Subject2  </td>   <td> <input type="text" name="sub237" > </td> 	
   <td>Marks Obtained </td>   <td> <input type="text" name="sub2o37" > </td> 	
		  <td>Subject3  </td>   <td> <input type="text" name="sub337" > </td> 	
	 <td>Marks Obtained </td>   <td> <input type="text" name="sub3o37" > </td> 	
	      	 <td>Subject4 </td>   <td> <input type="text" name="sub437" > </td> 	
	   <td>Marks Obtained </td>   <td> <input type="text" name="sub4o37" > </td> 	
		       <td>Subject5 </td>   <td> <input type="text" name="sub537" > </td> 	
	     <td>Marks Obtained </td>   <td> <input type="text" name="sub5o37" > </td> 	
		         <td>Subject6 </td>   <td> <input type="text" name="sub637" > </td> 	
	       <td>Marks Obtained </td>   <td> <input type="text" name="sub6o37" > </td> 
		   
		   <tr><td></td><td><input type="hidden" name="branch38" value="<?php echo "".$branch;?>"></td>
				<td></td><td><input type="hidden" name="sem38" value="<?php echo "".$sem;?>"></td>
				<td></td><td><input type="hidden" name="utno38" value="<?php echo "".$utno;?>"></td>
		 <td>RollNo</td>  <td><input type="text" name="rollno38" value="<?php echo "".$i;?>"></td><?php ++$i;?>
		<td>Subject1</td>   <td> <input type="text" name="sub138" > </td> 	
	  <td>Marks Obtained</td><td><input type="text" name="sub1o38" > </td> 	
		<td>Subject2  </td>   <td> <input type="text" name="sub238" > </td> 	
   <td>Marks Obtained </td>   <td> <input type="text" name="sub2o38" > </td> 	
		  <td>Subject3  </td>   <td> <input type="text" name="sub338" > </td> 	
	 <td>Marks Obtained </td>   <td> <input type="text" name="sub3o38" > </td> 	
	      	 <td>Subject4 </td>   <td> <input type="text" name="sub438" > </td> 	
	   <td>Marks Obtained </td>   <td> <input type="text" name="sub4o38" > </td> 	
		       <td>Subject5 </td>   <td> <input type="text" name="sub538" > </td> 	
	     <td>Marks Obtained </td>   <td> <input type="text" name="sub5o38" > </td> 	
		         <td>Subject6 </td>   <td> <input type="text" name="sub638" > </td> 	
	       <td>Marks Obtained </td>   <td> <input type="text" name="sub6o38" > </td> 
		   
		   <tr><td></td><td><input type="hidden" name="branch39" value="<?php echo "".$branch;?>"></td>
				<td></td><td><input type="hidden" name="sem39" value="<?php echo "".$sem;?>"></td>
				<td></td><td><input type="hidden" name="utno39" value="<?php echo "".$utno;?>"></td>
		 <td>RollNo</td>  <td><input type="text" name="rollno39" value="<?php echo "".$i;?>"></td><?php ++$i;?>
		<td>Subject1</td>   <td> <input type="text" name="sub139" > </td> 	
	  <td>Marks Obtained</td><td><input type="text" name="sub1o39" > </td> 	
		<td>Subject2  </td>   <td> <input type="text" name="sub239" > </td> 	
   <td>Marks Obtained </td>   <td> <input type="text" name="sub2o39" > </td> 	
		  <td>Subject3  </td>   <td> <input type="text" name="sub339" > </td> 	
	 <td>Marks Obtained </td>   <td> <input type="text" name="sub3o39" > </td> 	
	      	 <td>Subject4 </td>   <td> <input type="text" name="sub439" > </td> 	
	   <td>Marks Obtained </td>   <td> <input type="text" name="sub4o39" > </td> 	
		       <td>Subject5 </td>   <td> <input type="text" name="sub539" > </td> 	
	     <td>Marks Obtained </td>   <td> <input type="text" name="sub5o39" > </td> 	
		         <td>Subject6 </td>   <td> <input type="text" name="sub639" > </td> 	
	       <td>Marks Obtained </td>   <td> <input type="text" name="sub6o39" > </td> 
		   
		   <tr><td></td><td><input type="hidden" name="branch40" value="<?php echo "".$branch;?>"></td>
				<td></td><td><input type="hidden" name="sem40" value="<?php echo "".$sem;?>"></td>
				<td></td><td><input type="hidden" name="utno40" value="<?php echo "".$utno;?>"></td>
		 <td>RollNo</td>  <td><input type="text" name="rollno40" value="<?php echo "".$i;?>"></td><?php ++$i;?>
		<td>Subject1</td>   <td> <input type="text" name="sub140" > </td> 	
	  <td>Marks Obtained</td><td><input type="text" name="sub1o40" > </td> 	
		<td>Subject2  </td>   <td> <input type="text" name="sub240" > </td> 	
   <td>Marks Obtained </td>   <td> <input type="text" name="sub2o40" > </td> 	
		  <td>Subject3  </td>   <td> <input type="text" name="sub340" > </td> 	
	 <td>Marks Obtained </td>   <td> <input type="text" name="sub3o40" > </td> 	
	      	 <td>Subject4 </td>   <td> <input type="text" name="sub440" > </td> 	
	   <td>Marks Obtained </td>   <td> <input type="text" name="sub4o40" > </td> 	
		       <td>Subject5 </td>   <td> <input type="text" name="sub540" > </td> 	
	     <td>Marks Obtained </td>   <td> <input type="text" name="sub5o40" > </td> 	
		         <td>Subject6 </td>   <td> <input type="text" name="sub640" > </td> 	
	       <td>Marks Obtained </td>   <td> <input type="text" name="sub6o40" > </td> 
		   
		   <tr><td></td><td><input type="hidden" name="branch41" value="<?php echo "".$branch;?>"></td>
				<td></td><td><input type="hidden" name="sem41" value="<?php echo "".$sem;?>"></td>
				<td></td><td><input type="hidden" name="utno41" value="<?php echo "".$utno;?>"></td>
		 <td>RollNo</td>  <td><input type="text" name="rollno41" value="<?php echo "".$i;?>"></td><?php ++$i;?>
		<td>Subject1</td>   <td> <input type="text" name="sub141" > </td> 	
	  <td>Marks Obtained</td><td><input type="text" name="sub1o41" > </td> 	
		<td>Subject2  </td>   <td> <input type="text" name="sub241" > </td> 	
   <td>Marks Obtained </td>   <td> <input type="text" name="sub2o41" > </td> 	
		  <td>Subject3  </td>   <td> <input type="text" name="sub341" > </td> 	
	 <td>Marks Obtained </td>   <td> <input type="text" name="sub3o41" > </td> 	
	      	 <td>Subject4 </td>   <td> <input type="text" name="sub441" > </td> 	
	   <td>Marks Obtained </td>   <td> <input type="text" name="sub4o41" > </td> 	
		       <td>Subject5 </td>   <td> <input type="text" name="sub541" > </td> 	
	     <td>Marks Obtained </td>   <td> <input type="text" name="sub5o41" > </td> 	
		         <td>Subject6 </td>   <td> <input type="text" name="sub641" > </td> 	
	       <td>Marks Obtained </td>   <td> <input type="text" name="sub6o41" > </td> 
		   
		   <tr><td></td><td><input type="hidden" name="branch42" value="<?php echo "".$branch;?>"></td>
				<td></td><td><input type="hidden" name="sem42" value="<?php echo "".$sem;?>"></td>
				<td></td><td><input type="hidden" name="utno42" value="<?php echo "".$utno;?>"></td>
		 <td>RollNo</td>  <td><input type="text" name="rollno42" value="<?php echo "".$i;?>"></td><?php ++$i;?>
		<td>Subject1</td>   <td> <input type="text" name="sub142" > </td> 	
	  <td>Marks Obtained</td><td><input type="text" name="sub1o42" > </td> 	
		<td>Subject2  </td>   <td> <input type="text" name="sub242" > </td> 	
   <td>Marks Obtained </td>   <td> <input type="text" name="sub2o42" > </td> 	
		  <td>Subject3  </td>   <td> <input type="text" name="sub342" > </td> 	
	 <td>Marks Obtained </td>   <td> <input type="text" name="sub3o42" > </td> 	
	      	 <td>Subject4 </td>   <td> <input type="text" name="sub442" > </td> 	
	   <td>Marks Obtained </td>   <td> <input type="text" name="sub4o42" > </td> 	
		       <td>Subject5 </td>   <td> <input type="text" name="sub542" > </td> 	
	     <td>Marks Obtained </td>   <td> <input type="text" name="sub5o42" > </td> 	
		         <td>Subject6 </td>   <td> <input type="text" name="sub642" > </td> 	
	       <td>Marks Obtained </td>   <td> <input type="text" name="sub6o42" > </td> 
		   
		   <tr><td></td><td><input type="hidden" name="branch43" value="<?php echo "".$branch;?>"></td>
				<td></td><td><input type="hidden" name="sem43" value="<?php echo "".$sem;?>"></td>
				<td></td><td><input type="hidden" name="utno43" value="<?php echo "".$utno;?>"></td>
		 <td>RollNo</td>  <td><input type="text" name="rollno43" value="<?php echo "".$i;?>"></td><?php ++$i;?>
		<td>Subject1</td>   <td> <input type="text" name="sub143" > </td> 	
	  <td>Marks Obtained</td><td><input type="text" name="sub1o43" > </td> 	
		<td>Subject2  </td>   <td> <input type="text" name="sub243" > </td> 	
   <td>Marks Obtained </td>   <td> <input type="text" name="sub2o43" > </td> 	
		  <td>Subject3  </td>   <td> <input type="text" name="sub343" > </td> 	
	 <td>Marks Obtained </td>   <td> <input type="text" name="sub3o43" > </td> 	
	      	 <td>Subject4 </td>   <td> <input type="text" name="sub443" > </td> 	
	   <td>Marks Obtained </td>   <td> <input type="text" name="sub4o43" > </td> 	
		       <td>Subject5 </td>   <td> <input type="text" name="sub543" > </td> 	
	     <td>Marks Obtained </td>   <td> <input type="text" name="sub5o43" > </td> 	
		         <td>Subject6 </td>   <td> <input type="text" name="sub643" > </td> 	
	       <td>Marks Obtained </td>   <td> <input type="text" name="sub6o43" > </td> 
		   
		   <tr><td></td><td><input type="hidden" name="branch44" value="<?php echo "".$branch;?>"></td>
				<td></td><td><input type="hidden" name="sem44" value="<?php echo "".$sem;?>"></td>
				<td></td><td><input type="hidden" name="utno44" value="<?php echo "".$utno;?>"></td>
		 <td>RollNo</td>  <td><input type="text" name="rollno44" value="<?php echo "".$i;?>"></td><?php ++$i;?>
		<td>Subject1</td>   <td> <input type="text" name="sub144" > </td> 	
	  <td>Marks Obtained</td><td><input type="text" name="sub1o44" > </td> 	
		<td>Subject2  </td>   <td> <input type="text" name="sub244" > </td> 	
   <td>Marks Obtained </td>   <td> <input type="text" name="sub2o44" > </td> 	
		  <td>Subject3  </td>   <td> <input type="text" name="sub344" > </td> 	
	 <td>Marks Obtained </td>   <td> <input type="text" name="sub3o44" > </td> 	
	      	 <td>Subject4 </td>   <td> <input type="text" name="sub444" > </td> 	
	   <td>Marks Obtained </td>   <td> <input type="text" name="sub4o44" > </td> 	
		       <td>Subject5 </td>   <td> <input type="text" name="sub544" > </td> 	
	     <td>Marks Obtained </td>   <td> <input type="text" name="sub5o44" > </td> 	
		         <td>Subject6 </td>   <td> <input type="text" name="sub644" > </td> 	
	       <td>Marks Obtained </td>   <td> <input type="text" name="sub6o44" > </td> 
		   
		   <tr><td></td><td><input type="hidden" name="branch45" value="<?php echo "".$branch;?>"></td>
				<td></td><td><input type="hidden" name="sem45" value="<?php echo "".$sem;?>"></td>
				<td></td><td><input type="hidden" name="utno45" value="<?php echo "".$utno;?>"></td>
		 <td>RollNo</td>  <td><input type="text" name="rollno45" value="<?php echo "".$i;?>"></td><?php ++$i;?>
		<td>Subject1</td>   <td> <input type="text" name="sub145" > </td> 	
	  <td>Marks Obtained</td><td><input type="text" name="sub1o45" > </td> 	
		<td>Subject2  </td>   <td> <input type="text" name="sub245" > </td> 	
   <td>Marks Obtained </td>   <td> <input type="text" name="sub2o45" > </td> 	
		  <td>Subject3  </td>   <td> <input type="text" name="sub345" > </td> 	
	 <td>Marks Obtained </td>   <td> <input type="text" name="sub3o45" > </td> 	
	      	 <td>Subject4 </td>   <td> <input type="text" name="sub445" > </td> 	
	   <td>Marks Obtained </td>   <td> <input type="text" name="sub4o45" > </td> 	
		       <td>Subject5 </td>   <td> <input type="text" name="sub545" > </td> 	
	     <td>Marks Obtained </td>   <td> <input type="text" name="sub5o45" > </td> 	
		         <td>Subject6 </td>   <td> <input type="text" name="sub645" > </td> 	
	       <td>Marks Obtained </td>   <td> <input type="text" name="sub6o45" > </td> 
		   
		   <tr><td></td><td><input type="hidden" name="branch46" value="<?php echo "".$branch;?>"></td>
				<td></td><td><input type="hidden" name="sem46" value="<?php echo "".$sem;?>"></td>
				<td></td><td><input type="hidden" name="utno46" value="<?php echo "".$utno;?>"></td>
		 <td>RollNo</td>  <td><input type="text" name="rollno46" value="<?php echo "".$i;?>"></td><?php ++$i;?>
		<td>Subject1</td>   <td> <input type="text" name="sub146" > </td> 	
	  <td>Marks Obtained</td><td><input type="text" name="sub1o46" > </td> 	
		<td>Subject2  </td>   <td> <input type="text" name="sub246" > </td> 	
   <td>Marks Obtained </td>   <td> <input type="text" name="sub2o46" > </td> 	
		  <td>Subject3  </td>   <td> <input type="text" name="sub346" > </td> 	
	 <td>Marks Obtained </td>   <td> <input type="text" name="sub3o46" > </td> 	
	      	 <td>Subject4 </td>   <td> <input type="text" name="sub446" > </td> 	
	   <td>Marks Obtained </td>   <td> <input type="text" name="sub4o46" > </td> 	
		       <td>Subject5 </td>   <td> <input type="text" name="sub546" > </td> 	
	     <td>Marks Obtained </td>   <td> <input type="text" name="sub5o46" > </td> 	
		         <td>Subject6 </td>   <td> <input type="text" name="sub646" > </td> 	
	       <td>Marks Obtained </td>   <td> <input type="text" name="sub6o46" > </td> 
		   
		   <tr><td></td><td><input type="hidden" name="branch47" value="<?php echo "".$branch;?>"></td>
				<td></td><td><input type="hidden" name="sem47" value="<?php echo "".$sem;?>"></td>
				<td></td><td><input type="hidden" name="utno47" value="<?php echo "".$utno;?>"></td>
		 <td>RollNo</td>  <td><input type="text" name="rollno47" value="<?php echo "".$i;?>"></td><?php ++$i;?>
		<td>Subject1</td>   <td> <input type="text" name="sub147" > </td> 	
	  <td>Marks Obtained</td><td><input type="text" name="sub1o47" > </td> 	
		<td>Subject2  </td>   <td> <input type="text" name="sub247" > </td> 	
   <td>Marks Obtained </td>   <td> <input type="text" name="sub2o47" > </td> 	
		  <td>Subject3  </td>   <td> <input type="text" name="sub347" > </td> 	
	 <td>Marks Obtained </td>   <td> <input type="text" name="sub3o47" > </td> 	
	      	 <td>Subject4 </td>   <td> <input type="text" name="sub447" > </td> 	
	   <td>Marks Obtained </td>   <td> <input type="text" name="sub4o47" > </td> 	
		       <td>Subject5 </td>   <td> <input type="text" name="sub547" > </td> 	
	     <td>Marks Obtained </td>   <td> <input type="text" name="sub5o47" > </td> 	
		         <td>Subject6 </td>   <td> <input type="text" name="sub647" > </td> 	
	       <td>Marks Obtained </td>   <td> <input type="text" name="sub6o47" > </td> 
		   
		   <tr><td></td><td><input type="hidden" name="branch48" value="<?php echo "".$branch;?>"></td>
				<td></td><td><input type="hidden" name="sem48" value="<?php echo "".$sem;?>"></td>
				<td></td><td><input type="hidden" name="utno48" value="<?php echo "".$utno;?>"></td>
		 <td>RollNo</td>  <td><input type="text" name="rollno48" value="<?php echo "".$i;?>"></td><?php ++$i;?>
		<td>Subject1</td>   <td> <input type="text" name="sub148" > </td> 	
	  <td>Marks Obtained</td><td><input type="text" name="sub1o48" > </td> 	
		<td>Subject2  </td>   <td> <input type="text" name="sub248" > </td> 	
   <td>Marks Obtained </td>   <td> <input type="text" name="sub2o48" > </td> 	
		  <td>Subject3  </td>   <td> <input type="text" name="sub348" > </td> 	
	 <td>Marks Obtained </td>   <td> <input type="text" name="sub3o48" > </td> 	
	      	 <td>Subject4 </td>   <td> <input type="text" name="sub448" > </td> 	
	   <td>Marks Obtained </td>   <td> <input type="text" name="sub4o48" > </td> 	
		       <td>Subject5 </td>   <td> <input type="text" name="sub548" > </td> 	
	     <td>Marks Obtained </td>   <td> <input type="text" name="sub5o48" > </td> 	
		         <td>Subject6 </td>   <td> <input type="text" name="sub648" > </td> 	
	       <td>Marks Obtained </td>   <td> <input type="text" name="sub6o48" > </td> 
		   
		   <tr><td></td><td><input type="hidden" name="branch49" value="<?php echo "".$branch;?>"></td>
				<td></td><td><input type="hidden" name="sem49" value="<?php echo "".$sem;?>"></td>
				<td></td><td><input type="hidden" name="utno49" value="<?php echo "".$utno;?>"></td>
		 <td>RollNo</td>  <td><input type="text" name="rollno49" value="<?php echo "".$i;?>"></td><?php ++$i;?>
		<td>Subject1</td>   <td> <input type="text" name="sub149" > </td> 	
	  <td>Marks Obtained</td><td><input type="text" name="sub1o49" > </td> 	
		<td>Subject2  </td>   <td> <input type="text" name="sub249" > </td> 	
   <td>Marks Obtained </td>   <td> <input type="text" name="sub2o49" > </td> 	
		  <td>Subject3  </td>   <td> <input type="text" name="sub349" > </td> 	
	 <td>Marks Obtained </td>   <td> <input type="text" name="sub3o49" > </td> 	
	      	 <td>Subject4 </td>   <td> <input type="text" name="sub449" > </td> 	
	   <td>Marks Obtained </td>   <td> <input type="text" name="sub4o49" > </td> 	
		       <td>Subject5 </td>   <td> <input type="text" name="sub549" > </td> 	
	     <td>Marks Obtained </td>   <td> <input type="text" name="sub5o49" > </td> 	
		         <td>Subject6 </td>   <td> <input type="text" name="sub649" > </td> 	
	       <td>Marks Obtained </td>   <td> <input type="text" name="sub6o49" > </td> 
		   
		   <tr><td></td><td><input type="hidden" name="branch50" value="<?php echo "".$branch;?>"></td>
				<td></td><td><input type="hidden" name="sem50" value="<?php echo "".$sem;?>"></td>
				<td></td><td><input type="hidden" name="utno50" value="<?php echo "".$utno;?>"></td>
		 <td>RollNo</td>  <td><input type="text" name="rollno50" value="<?php echo "".$i;?>"></td><?php ++$i;?>
		<td>Subject1</td>   <td> <input type="text" name="sub150" > </td> 	
	  <td>Marks Obtained</td><td><input type="text" name="sub1o50" > </td> 	
		<td>Subject2  </td>   <td> <input type="text" name="sub250" > </td> 	
   <td>Marks Obtained </td>   <td> <input type="text" name="sub2o50" > </td> 	
		  <td>Subject3  </td>   <td> <input type="text" name="sub350" > </td> 	
	 <td>Marks Obtained </td>   <td> <input type="text" name="sub3o50" > </td> 	
	      	 <td>Subject4 </td>   <td> <input type="text" name="sub450" > </td> 	
	   <td>Marks Obtained </td>   <td> <input type="text" name="sub4o50" > </td> 	
		       <td>Subject5 </td>   <td> <input type="text" name="sub550" > </td> 	
	     <td>Marks Obtained </td>   <td> <input type="text" name="sub5o50" > </td> 	
		         <td>Subject6 </td>   <td> <input type="text" name="sub650" > </td> 	
	       <td>Marks Obtained </td>   <td> <input type="text" name="sub6o50" > </td> 
		   
</table>
<div class="form-group" style="margin:30px;" align="center" >	
<input type="submit" value="Submit" class="btn btn-primary"  >  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <input type="reset" class="btn btn-primary" value="Reset">
</div>
</form>
<div class="progress">
        <div class="progress-bar progress-bar-info" style="width: 100%; height:100%;"><p style="font-size: 18px; font-family: comic sans ms,cursive; color:black; ">Created by Ajinkya Bodade</p></div>
		</div>

<hr><hr>
</font>
</body>
</html>
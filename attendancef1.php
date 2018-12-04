<html>
<head>
<title>Attendance portal</title>
<link href="bootstrap.min.css" rel="stylesheet">
</head><body>

	  <div class="progress">
        <div class="progress-bar progress-bar-info" style="width: 100%; height:100%;"></div>
      </div>
      
<h3 align="center"><em><strong><span style="font-size: 36px"><span style="font-family: Georgia">Attendance portal <div class="form-group" style="margin:30px;" align="center" >
	<a href="facultyportal.php" target=""><input type="submit" class="btn btn-primary" value="Home"></a>  <a href="newsandeventsf.html" target=""><input type="submit" class="btn btn-primary" value="Upload News And Events"></a>    <a href="tgviewp.php" target=""><input type="submit" class="btn btn-primary" value="View/Edit T/G Form"></a>    <a href="attendancef.html" target=""><input type="submit" class="btn btn-primary" value="Upload Attendance"></a>     <a href="attendancefv1.html" target=""><input type="submit" class="btn btn-primary" value="View Attendance"></a>    <a href="utf.html" target=""><input type="submit" class="btn btn-primary" value="Upload UT Marks"></a>       <a href="utfv1.html" target=""><input type="submit" class="btn btn-primary" value="View UT Marks"></a>    <a href="logoutf.php" target=""><input type="submit" class="btn btn-primary" value="Logout"></a>  
	</div></span></span></strong></em></h3>
<div class="progress">
        <div class="progress-bar progress-bar-info" style="width: 100%; height:100%;"></div>
      </div>
	  

<div class="main" >


<font size="6">
<?php
$branch1 = array('Computer Science','Civil Engineering','Electrical Engineering','Electronics&Telecommunication','Mechanical Engineering','First Year');
$branch = $_POST['branch'];
$year1 = array('First Year','Second Year','Third Year','Final Year');
$year = $_POST['year'];
$date = $_POST["date"];
$subject = $_POST["subject"];
$i=1;
?>

<table align="center">
<form action="attendancef2.php" method="POST">
		<tr><td>          </td>	<td><input type="hidden" name="branch" value="<?php echo "".$branch;?>"></td>
	<td>           </td>	<td><input type="hidden" name="year" value="<?php echo "".$year;?>"></td>
	<td>       	</td>	<td><input type="hidden" name="date" value="<?php echo "".$date;?>"></td>
	<td>	   </td>	<td><input type="hidden" name="sub" value="<?php echo "".$subject;?>"></td>
	<td>RollNo	    </td>	<td><input type="text" name="rollno" value="<?php echo "".$i;?>"></td><?php ++$i;?>
	<td>Attendance  </td>   <td> <input type="text" name="attend0" > </td> </tr>	
	
	<tr><td>         </td>	<td><input type="hidden" name="branch1" value="<?php echo "".$branch;?>"></td>
	<td>          </td>	<td><input type="hidden" name="year1" value="<?php echo "".$year;?>"></td>
	<td>       	</td>	<td><input type="hidden" name="date1" value="<?php echo "".$date;?>"></td>
	<td>	   </td>	<td><input type="hidden" name="sub1" value="<?php echo "".$subject;?>"></td>
	<td>RollNo	    </td>	<td><input type="text" name="rollno1" value="<?php echo "".$i;?>"></td><?php ++$i;?>
	<td>Attendance        </td>	<td><input type="text" name="attend1" value=""  > </td> </tr>	
	
		<tr><td>         </td>	<td><input type="hidden" name="branch2" value="<?php echo "".$branch;?>"></td>
	<td>          </td>	<td><input type="hidden" name="year2" value="<?php echo "".$year;?>"></td>
	<td>        	</td>	<td><input type="hidden" name="date2" value="<?php echo "".$date;?>"></td>
	<td>	   </td>	<td><input type="hidden" name="sub2" value="<?php echo "".$subject;?>"></td>
	<td>RollNo	    </td>	<td><input type="text" name="rollno2" value="<?php echo "".$i;?>"></td><?php ++$i;?>
	<td>Attendance        </td>	<td><input type="text" name="attend2" value=""   ></td> </tr>	
	
		<tr><td>         </td>	<td><input type="hidden" name="branch3" value="<?php echo "".$branch;?>"></td>
	<td>          </td>	<td><input type="hidden" name="year3" value="<?php echo "".$year;?>"></td>
	<td>        	</td>	<td><input type="hidden" name="date3" value="<?php echo "".$date;?>"></td>
	<td>	   </td>	<td><input type="hidden" name="sub3" value="<?php echo "".$subject;?>"></td>
	<td>RollNo	    </td>	<td><input type="text" name="rollno3" value="<?php echo "".$i;?>"></td><?php ++$i;?>
	<td>Attendance        </td>	<td><input type="text" name="attend3" value=""  ></td> </tr>	
	
	<tr><td>         </td>	<td><input type="hidden" name="branch4" value="<?php echo "".$branch;?>"></td>
	<td>          </td>	<td><input type="hidden" name="year4" value="<?php echo "".$year;?>"></td>
	<td>        	</td>	<td><input type="hidden" name="date4" value="<?php echo "".$date;?>"></td>
	<td>	   </td>	<td><input type="hidden" name="sub4" value="<?php echo "".$subject;?>"></td>
	<td>RollNo	    </td>	<td><input type="text" name="rollno4" value="<?php echo "".$i;?>"></td><?php ++$i;?>
	<td>Attendance        </td>	<td><input type="text" name="attend4" value=""  ></td> </tr>	
	
		<tr><td>         </td>	<td><input type="hidden" name="branch5" value="<?php echo "".$branch;?>"></td>
	<td>          </td>	<td><input type="hidden" name="year5" value="<?php echo "".$year;?>"></td>
	<td>        	</td>	<td><input type="hidden" name="date5" value="<?php echo "".$date;?>"></td>
	<td>	   </td>	<td><input type="hidden" name="sub5" value="<?php echo "".$subject;?>"></td>
	<td>RollNo	    </td>	<td><input type="text" name="rollno5" value="<?php echo "".$i;?>"></td><?php ++$i;?>
	<td>Attendance        </td>	<td><input type="text" name="attend5" value=""  > </td> </tr>	
	
		<tr><td>         </td>	<td><input type="hidden" name="branch6" value="<?php echo "".$branch;?>"></td>
	<td>          </td>	<td><input type="hidden" name="year6" value="<?php echo "".$year;?>"></td>
	<td>        	</td>	<td><input type="hidden" name="date6" value="<?php echo "".$date;?>"></td>
	<td>	   </td>	<td><input type="hidden" name="sub6" value="<?php echo "".$subject;?>"></td>
	<td>RollNo	    </td>	<td><input type="text" name="rollno6" value="<?php echo "".$i;?>"></td><?php ++$i;?>
	<td>Attendance        </td>	<td><input type="text" name="attend6" value=""  ></td> </tr>	
	
		<tr><td>         </td>	<td><input type="hidden" name="branch7" value="<?php echo "".$branch;?>"></td>
	<td>          </td>	<td><input type="hidden" name="year7" value="<?php echo "".$year;?>"></td>
	<td>        	</td>	<td><input type="hidden" name="date7" value="<?php echo "".$date;?>"></td>
	<td>	   </td>	<td><input type="hidden" name="sub7" value="<?php echo "".$subject;?>"></td>
	<td>RollNo	    </td>	<td><input type="text" name="rollno7" value="<?php echo "".$i;?>"></td><?php ++$i;?>
	<td>Attendance        </td>	<td><input type="text" name="attend7" value=""  ></td> </tr>
	
	<tr><td>         </td>	<td><input type="hidden" name="branch8" value="<?php echo "".$branch;?>"></td>
	<td>          </td>	<td><input type="hidden" name="year8" value="<?php echo "".$year;?>"></td>
	<td>        	</td>	<td><input type="hidden" name="date8" value="<?php echo "".$date;?>"></td>
	<td>	   </td>	<td><input type="hidden" name="sub8" value="<?php echo "".$subject;?>"></td>
	<td>RollNo	    </td>	<td><input type="text" name="rollno8" value="<?php echo "".$i;?>"></td><?php ++$i;?>
	<td>Attendance        </td>	<td><input type="text" name="attend8" value=""  ></td> </tr>	
	
		<tr><td>         </td>	<td><input type="hidden" name="branch9" value="<?php echo "".$branch;?>"></td>
	<td>          </td>	<td><input type="hidden" name="year9" value="<?php echo "".$year;?>"></td>
	<td>        	</td>	<td><input type="hidden" name="date9" value="<?php echo "".$date;?>"></td>
	<td>	   </td>	<td><input type="hidden" name="sub9" value="<?php echo "".$subject;?>"></td>
	<td>RollNo	    </td>	<td><input type="text" name="rollno9" value="<?php echo "".$i;?>"></td><?php ++$i;?>
	<td>Attendance        </td>	<td><input type="text" name="attend9" value=""  ></td> </tr>	
	
		<tr><td>         </td>	<td><input type="hidden" name="branch10" value="<?php echo "".$branch;?>"></td>
	<td>          </td>	<td><input type="hidden" name="year10" value="<?php echo "".$year;?>"></td>
	<td>        	</td>	<td><input type="hidden" name="date10" value="<?php echo "".$date;?>"></td>
	<td>	   </td>	<td><input type="hidden" name="sub10" value="<?php echo "".$subject;?>"></td>
	<td>RollNo	    </td>	<td><input type="text" name="rollno10" value="<?php echo "".$i;?>"></td><?php ++$i;?>
	<td>Attendance        </td>	<td><input type="text" name="attend10" value=""  ></td> </tr>	
	
		<tr><td>         </td>	<td><input type="hidden" name="branch11" value="<?php echo "".$branch;?>"></td>
	<td>          </td>	<td><input type="hidden" name="year11" value="<?php echo "".$year;?>"></td>
	<td>        	</td>	<td><input type="hidden" name="date11" value="<?php echo "".$date;?>"></td>
	<td>	   </td>	<td><input type="hidden" name="sub11" value="<?php echo "".$subject;?>"></td>
	<td>RollNo	    </td>	<td><input type="text" name="rollno11" value="<?php echo "".$i;?>"></td><?php ++$i;?>
	<td>Attendance        </td>	<td><input type="text" name="attend11" value=""  ></td> </tr>	
	
	<tr><td>         </td>	<td><input type="hidden" name="branch12" value="<?php echo "".$branch;?>"></td>
	<td>          </td>	<td><input type="hidden" name="year12" value="<?php echo "".$year;?>"></td>
	<td>        	</td>	<td><input type="hidden" name="date12" value="<?php echo "".$date;?>"></td>
	<td>	   </td>	<td><input type="hidden" name="sub12" value="<?php echo "".$subject;?>"></td>
	<td>RollNo	    </td>	<td><input type="text" name="rollno12" value="<?php echo "".$i;?>"></td><?php ++$i;?>
	<td>Attendance        </td>	<td><input type="text" name="attend12" value=""  ></td> </tr>	
	
		<tr><td>         </td>	<td><input type="hidden" name="branch13" value="<?php echo "".$branch;?>"></td>
	<td>          </td>	<td><input type="hidden" name="year13" value="<?php echo "".$year;?>"></td>
	<td>        	</td>	<td><input type="hidden" name="date13" value="<?php echo "".$date;?>"></td>
	<td>	   </td>	<td><input type="hidden" name="sub13" value="<?php echo "".$subject;?>"></td>
	<td>RollNo	    </td>	<td><input type="text" name="rollno13" value="<?php echo "".$i;?>"></td><?php ++$i;?>
	<td>Attendance        </td>	<td><input type="text" name="attend13" value=""  ></td> </tr>	
	
		<tr><td>         </td>	<td><input type="hidden" name="branch14" value="<?php echo "".$branch;?>"></td>
	<td>          </td>	<td><input type="hidden" name="year14" value="<?php echo "".$year;?>"></td>
	<td>        	</td>	<td><input type="hidden" name="date14" value="<?php echo "".$date;?>"></td>
	<td>	   </td>	<td><input type="hidden" name="sub14" value="<?php echo "".$subject;?>"></td>
	<td>RollNo	    </td>	<td><input type="text" name="rollno14" value="<?php echo "".$i;?>"></td><?php ++$i;?>
	<td>Attendance        </td>	<td><input type="text" name="attend14" value=""  ></td> </tr>	
	
		<tr><td>         </td>	<td><input type="hidden" name="branch15" value="<?php echo "".$branch;?>"></td>
	<td>          </td>	<td><input type="hidden" name="year15" value="<?php echo "".$year;?>"></td>
	<td>        	</td>	<td><input type="hidden" name="date15" value="<?php echo "".$date;?>"></td>
	<td>	   </td>	<td><input type="hidden" name="sub15" value="<?php echo "".$subject;?>"></td>
	<td>RollNo	    </td>	<td><input type="text" name="rollno15" value="<?php echo "".$i;?>"></td><?php ++$i;?>
	<td>Attendance        </td>	<td><input type="text" name="attend15" value=""  ></td> </tr>
	
	<tr><td>         </td>	<td><input type="hidden" name="branch16" value="<?php echo "".$branch;?>"></td>
	<td>          </td>	<td><input type="hidden" name="year16" value="<?php echo "".$year;?>"></td>
	<td>        	</td>	<td><input type="hidden" name="date16" value="<?php echo "".$date;?>"></td>
	<td>	   </td>	<td><input type="hidden" name="sub16" value="<?php echo "".$subject;?>"></td>
	<td>RollNo	    </td>	<td><input type="text" name="rollno16" value="<?php echo "".$i;?>"></td><?php ++$i;?>
	<td>Attendance        </td>	<td><input type="text" name="attend16" value=""  ></td> </tr>	
	
		<tr><td>         </td>	<td><input type="hidden" name="branch17" value="<?php echo "".$branch;?>"></td>
	<td>          </td>	<td><input type="hidden" name="year17"value="<?php echo "".$year;?>"></td>
	<td>        	</td>	<td><input type="hidden" name="date17" value="<?php echo "".$date;?>"></td>
	<td>	   </td>	<td><input type="hidden" name="sub17" value="<?php echo "".$subject;?>"></td>
	<td>RollNo	    </td>	<td><input type="text" name="rollno17" value="<?php echo "".$i;?>"></td><?php ++$i;?>
	<td>Attendance        </td>	<td><input type="text" name="attend17" value=""  ></td> </tr>	
	
		<tr><td>         </td>	<td><input type="hidden" name="branch18" value="<?php echo "".$branch;?>"></td>
	<td>          </td>	<td><input type="hidden" name="year18" value="<?php echo "".$year;?>"></td>
	<td>        	</td>	<td><input type="hidden" name="date18" value="<?php echo "".$date;?>"></td>
	<td>	   </td>	<td><input type="hidden" name="sub18" value="<?php echo "".$subject;?>"></td>
	<td>RollNo	    </td>	<td><input type="text" name="rollno18" value="<?php echo "".$i;?>"></td><?php ++$i;?>
	<td>Attendance        </td>	<td><input type="text" name="attend18" value=""  ></td> </tr>	
	
		<tr><td>         </td>	<td><input type="hidden" name="branch19" value="<?php echo "".$branch;?>"></td>
	<td>          </td>	<td><input type="hidden" name="year19" value="<?php echo "".$year;?>"></td>
	<td>        	</td>	<td><input type="hidden" name="date19" value="<?php echo "".$date;?>"></td>
	<td>	   </td>	<td><input type="hidden" name="sub19" value="<?php echo "".$subject;?>"></td>
	<td>RollNo	    </td>	<td><input type="text" name="rollno19" value="<?php echo "".$i;?>"></td><?php ++$i;?>
	<td>Attendance        </td>	<td><input type="text" name="attend19" value=""  ></td> </tr>	
	
	<tr><td>         </td>	<td><input type="hidden" name="branch20" value="<?php echo "".$branch;?>"></td>
	<td>          </td>	<td><input type="hidden" name="year20" value="<?php echo "".$year;?>"></td>
	<td>        	</td>	<td><input type="hidden" name="date20" value="<?php echo "".$date;?>"></td>
	<td>	   </td>	<td><input type="hidden" name="sub20" value="<?php echo "".$subject;?>"></td>
	<td>RollNo	    </td>	<td><input type="text" name="rollno20" value="<?php echo "".$i;?>"></td><?php ++$i;?>
	<td>Attendance        </td>	<td><input type="text" name="attend20" value=""  ></td> </tr>	
	
		<tr><td>         </td>	<td><input type="hidden" name="branch21" value="<?php echo "".$branch;?>"></td>
	<td>          </td>	<td><input type="hidden" name="year21" value="<?php echo "".$year;?>"></td>
	<td>        	</td>	<td><input type="hidden" name="date21" value="<?php echo "".$date;?>"></td>
	<td>	   </td>	<td><input type="hidden" name="sub21" value="<?php echo "".$subject;?>"></td>
	<td>RollNo	    </td>	<td><input type="text" name="rollno21" value="<?php echo "".$i;?>"></td><?php ++$i;?>
	<td>Attendance        </td>	<td><input type="text" name="attend21" value=""  > </td> </tr>	
	
		<tr><td>         </td>	<td><input type="hidden" name="branch22" value="<?php echo "".$branch;?>"></td>
	<td>          </td>	<td><input type="hidden" name="year22" value="<?php echo "".$year;?>"></td>
	<td>        	</td>	<td><input type="hidden" name="date22" value="<?php echo "".$date;?>"></td>
	<td>	   </td>	<td><input type="hidden" name="sub22" value="<?php echo "".$subject;?>"></td>
	<td>RollNo	    </td>	<td><input type="text" name="rollno22" value="<?php echo "".$i;?>"></td><?php ++$i;?>
	<td>Attendance        </td>	<td><input type="text" name="attend22" value=""  ></td> </tr>	
	
		<tr><td>         </td>	<td><input type="hidden" name="branch23" value="<?php echo "".$branch;?>"></td>
	<td>          </td>	<td><input type="hidden" name="year23" value="<?php echo "".$year;?>"></td>
	<td>        	</td>	<td><input type="hidden" name="date23" value="<?php echo "".$date;?>"></td>
	<td>	   </td>	<td><input type="hidden" name="sub23" value="<?php echo "".$subject;?>"></td>
	<td>RollNo	    </td>	<td><input type="text" name="rollno23" value="<?php echo "".$i;?>"></td><?php ++$i;?>
	<td>Attendance        </td>	<td><input type="text" name="attend23" value=""  ></td> </tr>
	
	<tr><td>         </td>	<td><input type="hidden" name="branch24" value="<?php echo "".$branch;?>"></td>
	<td>          </td>	<td><input type="hidden" name="year24" value="<?php echo "".$year;?>"></td>
	<td>        	</td>	<td><input type="hidden" name="date24" value="<?php echo "".$date;?>"></td>
	<td>	   </td>	<td><input type="hidden" name="sub24" value="<?php echo "".$subject;?>"></td>
	<td>RollNo	    </td>	<td><input type="text" name="rollno24" value="<?php echo "".$i;?>"></td><?php ++$i;?>
	<td>Attendance        </td>	<td><input type="text" name="attend24" value=""  ></td> </tr>	
	
		<tr><td>         </td>	<td><input type="hidden" name="branch25" value="<?php echo "".$branch;?>"></td>
	<td>          </td>	<td><input type="hidden" name="year25" value="<?php echo "".$year;?>"></td>
	<td>        	</td>	<td><input type="hidden" name="date25" value="<?php echo "".$date;?>"></td>
	<td>	   </td>	<td><input type="hidden" name="sub25" value="<?php echo "".$subject;?>"></td>
	<td>RollNo	    </td>	<td><input type="text" name="rollno25" value="<?php echo "".$i;?>"></td><?php ++$i;?>
	<td>Attendance        </td>	<td><input type="text" name="attend25" value=""  ></td> </tr>	
	
		<tr><td>         </td>	<td><input type="hidden" name="branch26" value="<?php echo "".$branch;?>"></td>
	<td>          </td>	<td><input type="hidden" name="year26" value="<?php echo "".$year;?>"></td>
	<td>        	</td>	<td><input type="hidden" name="date26" value="<?php echo "".$date;?>"></td>
	<td>	   </td>	<td><input type="hidden" name="sub26" value="<?php echo "".$subject;?>"></td>
	<td>RollNo	    </td>	<td><input type="text" name="rollno26" value="<?php echo "".$i;?>"></td><?php ++$i;?>
	<td>Attendance        </td>	<td><input type="text" name="attend26" value=""  ></td> </tr>	
	
		<tr><td>         </td>	<td><input type="hidden" name="branch27" value="<?php echo "".$branch;?>"></td>
	<td>          </td>	<td><input type="hidden" name="year27" value="<?php echo "".$year;?>"></td>
	<td>        	</td>	<td><input type="hidden" name="date27" value="<?php echo "".$date;?>"></td>
	<td>	   </td>	<td><input type="hidden" name="sub27" value="<?php echo "".$subject;?>"></td>
	<td>RollNo	    </td>	<td><input type="text" name="rollno27" value="<?php echo "".$i;?>"></td><?php ++$i;?>
	<td>Attendance        </td>	<td><input type="text" name="attend27" value=""  ></td> </tr>	
	
	<tr><td>         </td>	<td><input type="hidden" name="branch28" value="<?php echo "".$branch;?>"></td>
	<td>          </td>	<td><input type="hidden" name="year28" value="<?php echo "".$year;?>"></td>
	<td>        	</td>	<td><input type="hidden" name="date28" value="<?php echo "".$date;?>"></td>
	<td>	   </td>	<td><input type="hidden" name="sub28" value="<?php echo "".$subject;?>"></td>
	<td>RollNo	    </td>	<td><input type="text" name="rollno28" value="<?php echo "".$i;?>"></td><?php ++$i;?>
	<td>Attendance        </td>	<td><input type="text" name="attend28" value=""  ></td> </tr>	
	
		<tr><td>         </td>	<td><input type="hidden" name="branch29" value="<?php echo "".$branch;?>"></td>
	<td>          </td>	<td><input type="hidden" name="year29" value="<?php echo "".$year;?>"></td>
	<td>        	</td>	<td><input type="hidden" name="date29" value="<?php echo "".$date;?>"></td>
	<td>	   </td>	<td><input type="hidden" name="sub29" value="<?php echo "".$subject;?>"></td>
	<td>RollNo	    </td>	<td><input type="text" name="rollno29" value="<?php echo "".$i;?>"></td><?php ++$i;?>
	<td>Attendance        </td>	<td><input type="text" name="attend29" value=""  ></td> </tr>	
	
		<tr><td>         </td>	<td><input type="hidden" name="branch30" value="<?php echo "".$branch;?>"></td>
	<td>          </td>	<td><input type="hidden" name="year30" value="<?php echo "".$year;?>"></td>
	<td>        	</td>	<td><input type="hidden" name="date30" value="<?php echo "".$date;?>"></td>
	<td>	   </td>	<td><input type="hidden" name="sub30" value="<?php echo "".$subject;?>"></td>
	<td>RollNo	    </td>	<td><input type="text" name="rollno30" value="<?php echo "".$i;?>"></td><?php ++$i;?>
	<td>Attendance        </td>	<td><input type="text" name="attend30" value=""  ></td> </tr>	
	
		<tr><td>         </td>	<td><input type="hidden" name="branch31" value="<?php echo "".$branch;?>"></td>
	<td>          </td>	<td><input type="hidden" name="year31" value="<?php echo "".$year;?>"></td>
	<td>        	</td>	<td><input type="hidden" name="date31" value="<?php echo "".$date;?>"></td>
	<td>	   </td>	<td><input type="hidden" name="sub31" value="<?php echo "".$subject;?>"></td>
	<td>RollNo	    </td>	<td><input type="text" name="rollno31" value="<?php echo "".$i;?>"></td><?php ++$i;?>
	<td>Attendance        </td>	<td><input type="text" name="attend31" value=""  ></td> </tr>
	
	<tr><td>         </td>	<td><input type="hidden" name="branch32" value="<?php echo "".$branch;?>"></td>
	<td>          </td>	<td><input type="hidden" name="year32" value="<?php echo "".$year;?>"></td>
	<td>        	</td>	<td><input type="hidden" name="date32" value="<?php echo "".$date;?>"></td>
	<td>	   </td>	<td><input type="hidden" name="sub32" value="<?php echo "".$subject;?>"></td>
	<td>RollNo	    </td>	<td><input type="text" name="rollno32" value="<?php echo "".$i;?>"></td><?php ++$i;?>
	<td>Attendance        </td>	<td><input type="text" name="attend32" value=""  ></td> </tr>	
	
		<tr><td>         </td>	<td><input type="hidden" name="branch33" value="<?php echo "".$branch;?>"></td>
	<td>          </td>	<td><input type="hidden" name="year33" value="<?php echo "".$year;?>"></td>
	<td>        	</td>	<td><input type="hidden" name="date33" value="<?php echo "".$date;?>"></td>
	<td>	   </td>	<td><input type="hidden" name="sub33" value="<?php echo "".$subject;?>"></td>
	<td>RollNo	    </td>	<td><input type="text" name="rollno33" value="<?php echo "".$i;?>"></td><?php ++$i;?>
	<td>Attendance        </td>	<td><input type="text" name="attend33" value=""  ></td> </tr>	
	
		<tr><td>         </td>	<td><input type="hidden" name="branch34" value="<?php echo "".$branch;?>"></td>
	<td>          </td>	<td><input type="hidden" name="year34" value="<?php echo "".$year;?>"></td>
	<td>        	</td>	<td><input type="hidden" name="date34" value="<?php echo "".$date;?>"></td>
	<td>	   </td>	<td><input type="hidden" name="sub34" value="<?php echo "".$subject;?>"></td>
	<td>RollNo	    </td>	<td><input type="text" name="rollno34" value="<?php echo "".$i;?>"></td><?php ++$i;?>
	<td>Attendance        </td>	<td><input type="text" name="attend34" value=""  ></td> </tr>	
	
		<tr><td>         </td>	<td><input type="hidden" name="branch35" value="<?php echo "".$branch;?>"></td>
	<td>          </td>	<td><input type="hidden" name="year35" value="<?php echo "".$year;?>"></td>
	<td>        	</td>	<td><input type="hidden" name="date35" value="<?php echo "".$date;?>"></td>
	<td>	   </td>	<td><input type="hidden" name="sub35" value="<?php echo "".$subject;?>"></td>
	<td>RollNo	    </td>	<td><input type="text" name="rollno35" value="<?php echo "".$i;?>"></td><?php ++$i;?>
	<td>Attendance        </td>	<td><input type="text" name="attend35" value=""  ></td> </tr>	
	
	<tr><td>         </td>	<td><input type="hidden" name="branch36" value="<?php echo "".$branch;?>"></td>
	<td>          </td>	<td><input type="hidden" name="year36" value="<?php echo "".$year;?>"></td>
	<td>        	</td>	<td><input type="hidden" name="date36" value="<?php echo "".$date;?>"></td>
	<td>	   </td>	<td><input type="hidden" name="sub36" value="<?php echo "".$subject;?>"></td>
	<td>RollNo	    </td>	<td><input type="text" name="rollno36" value="<?php echo "".$i;?>"></td><?php ++$i;?>
	<td>Attendance        </td>	<td><input type="text" name="attend36" value=""  ></td> </tr>	
	
		<tr><td>         </td>	<td><input type="hidden" name="branch37" value="<?php echo "".$branch;?>"></td>
	<td>          </td>	<td><input type="hidden" name="year37" value="<?php echo "".$year;?>"></td>
	<td>        	</td>	<td><input type="hidden" name="date37" value="<?php echo "".$date;?>"></td>
	<td>	   </td>	<td><input type="hidden" name="sub37" value="<?php echo "".$subject;?>"></td>
	<td>RollNo	    </td>	<td><input type="text" name="rollno37" value="<?php echo "".$i;?>"></td><?php ++$i;?>
	<td>Attendance        </td>	<td><input type="text" name="attend37" value=""  ></td> </tr>	
	
		<tr><td>         </td>	<td><input type="hidden" name="branch38" value="<?php echo "".$branch;?>"></td>
	<td>          </td>	<td><input type="hidden" name="year38" value="<?php echo "".$year;?>"></td>
	<td>        	</td>	<td><input type="hidden" name="date38" value="<?php echo "".$date;?>"></td>
	<td>	   </td>	<td><input type="hidden" name="sub38" value="<?php echo "".$subject;?>"></td>
	<td>RollNo	    </td>	<td><input type="text" name="rollno38" value="<?php echo "".$i;?>"></td><?php ++$i;?>
	<td>Attendance        </td>	<td><input type="text" name="attend38" value=""  ></td> </tr>	
	
		<tr><td>         </td>	<td><input type="hidden" name="branch39" value="<?php echo "".$branch;?>"></td>
	<td>          </td>	<td><input type="hidden" name="year39" value="<?php echo "".$year;?>"></td>
	<td>        	</td>	<td><input type="hidden" name="date39" value="<?php echo "".$date;?>"></td>
	<td>	   </td>	<td><input type="hidden" name="sub39" value="<?php echo "".$subject;?>"></td>
	<td>RollNo	    </td>	<td><input type="text" name="rollno39" value="<?php echo "".$i;?>"></td><?php ++$i;?>
	<td>Attendance        </td>	<td><input type="text" name="attend39" value=""  ></td> </tr>
	
	<tr><td>         </td>	<td><input type="hidden" name="branch40" value="<?php echo "".$branch;?>"></td>
	<td>          </td>	<td><input type="hidden" name="year40" value="<?php echo "".$year;?>"></td>
	<td>        	</td>	<td><input type="hidden" name="date40" value="<?php echo "".$date;?>"></td>
	<td>	   </td>	<td><input type="hidden" name="sub40" value="<?php echo "".$subject;?>"></td>
	<td>RollNo	    </td>	<td><input type="text" name="rollno40" value="<?php echo "".$i;?>"></td><?php ++$i;?>
	<td>Attendance        </td>	<td><input type="text" name="attend40" value=""  ></td> </tr>	
	
		<tr><td>         </td>	<td><input type="hidden" name="branch41" value="<?php echo "".$branch;?>"></td>
	<td>          </td>	<td><input type="hidden" name="year41" value="<?php echo "".$year;?>"></td>
	<td>        	</td>	<td><input type="hidden" name="date41" value="<?php echo "".$date;?>"></td>
	<td>	   </td>	<td><input type="hidden" name="sub41" value="<?php echo "".$subject;?>"></td>
	<td>RollNo	    </td>	<td><input type="text" name="rollno41" value="<?php echo "".$i;?>"></td><?php ++$i;?>
	<td>Attendance        </td>	<td><input type="text" name="attend41" value=""  ></td> </tr>	
	
		<tr><td>         </td>	<td><input type="hidden" name="branch42" value="<?php echo "".$branch;?>"></td>
	<td>          </td>	<td><input type="hidden" name="year42" value="<?php echo "".$year;?>"></td>
	<td>        	</td>	<td><input type="hidden" name="date42" value="<?php echo "".$date;?>"></td>
	<td>	   </td>	<td><input type="hidden" name="sub42" value="<?php echo "".$subject;?>"></td>
	<td>RollNo	    </td>	<td><input type="text" name="rollno42" value="<?php echo "".$i;?>"></td><?php ++$i;?>
	<td>Attendance        </td>	<td><input type="text" name="attend42" value=""  ></td> </tr>	
	
		<tr><td>         </td>	<td><input type="hidden" name="branch43" value="<?php echo "".$branch;?>"></td>
	<td>          </td>	<td><input type="hidden" name="year43" value="<?php echo "".$year;?>"></td>
	<td>        	</td>	<td><input type="hidden" name="date43" value="<?php echo "".$date;?>"></td>
	<td>	   </td>	<td><input type="hidden" name="sub43" value="<?php echo "".$subject;?>"></td>
	<td>RollNo	    </td>	<td><input type="text" name="rollno43" value="<?php echo "".$i;?>"></td><?php ++$i;?>
	<td>Attendance        </td>	<td><input type="text" name="attend43" value=""  ></td> </tr>	
	
	<tr><td>         </td>	<td><input type="hidden" name="branch44" value="<?php echo "".$branch;?>"></td>
	<td>          </td>	<td><input type="hidden" name="year44" value="<?php echo "".$year;?>"></td>
	<td>        	</td>	<td><input type="hidden" name="date44" value="<?php echo "".$date;?>"></td>
	<td>	   </td>	<td><input type="hidden" name="sub44" value="<?php echo "".$subject;?>"></td>
	<td>RollNo	    </td>	<td><input type="text" name="rollno44" value="<?php echo "".$i;?>"></td><?php ++$i;?>
	<td>Attendance        </td>	<td><input type="text" name="attend44" value=""  ></td> </tr>	
	
		<tr><td>         </td>	<td><input type="hidden" name="branch45" value="<?php echo "".$branch;?>"></td>
	<td>          </td>	<td><input type="hidden" name="year45" value="<?php echo "".$year;?>"></td>
	<td>        	</td>	<td><input type="hidden" name="date45" value="<?php echo "".$date;?>"></td>
	<td>	   </td>	<td><input type="hidden" name="sub45" value="<?php echo "".$subject;?>"></td>
	<td>RollNo	    </td>	<td><input type="text" name="rollno45" value="<?php echo "".$i;?>"></td><?php ++$i;?>
	<td>Attendance        </td>	<td><input type="text" name="attend45" value=""  ></td> </tr>	
	
		<tr><td>         </td>	<td><input type="hidden" name="branch46" value="<?php echo "".$branch;?>"></td>
	<td>          </td>	<td><input type="hidden" name="year46" value="<?php echo "".$year;?>"></td>
	<td>        	</td>	<td><input type="hidden" name="date46" value="<?php echo "".$date;?>"></td>
	<td>	   </td>	<td><input type="hidden" name="sub46" value="<?php echo "".$subject;?>"></td>
	<td>RollNo	    </td>	<td><input type="text" name="rollno46" value="<?php echo "".$i;?>"></td><?php ++$i;?>
	<td>Attendance        </td>	<td><input type="text" name="attend46" value=""  ></td> </tr>	
	
		<tr><td>         </td>	<td><input type="hidden" name="branch47" value="<?php echo "".$branch;?>"></td>
	<td>          </td>	<td><input type="hidden" name="year47" value="<?php echo "".$year;?>"></td>
	<td>        	</td>	<td><input type="hidden" name="date47" value="<?php echo "".$date;?>"></td>
	<td>	   </td>	<td><input type="hidden" name="sub47" value="<?php echo "".$subject;?>"></td>
	<td>RollNo	    </td>	<td><input type="text" name="rollno47" value="<?php echo "".$i;?>"></td><?php ++$i;?>
	<td>Attendance        </td>	<td><input type="text" name="attend47" value=""  ></td> </tr>
	
	<tr><td>         </td>	<td><input type="hidden" name="branch48" value="<?php echo "".$branch;?>"></td>
	<td>          </td>	<td><input type="hidden" name="year48" value="<?php echo "".$year;?>"></td>
	<td>        	</td>	<td><input type="hidden" name="date48" value="<?php echo "".$date;?>"></td>
	<td>	   </td>	<td><input type="hidden" name="sub48" value="<?php echo "".$subject;?>"></td>
	<td>RollNo	    </td>	<td><input type="text" name="rollno48" value="<?php echo "".$i;?>"></td><?php ++$i;?>
	<td>Attendance        </td>	<td><input type="text" name="attend48" value=""  ></td> </tr>
	
	<tr><td>         </td>	<td><input type="hidden" name="branch49" value="<?php echo "".$branch;?>"></td>
	<td>          </td>	<td><input type="hidden" name="year49" value="<?php echo "".$year;?>"></td>
	<td>        	</td>	<td><input type="hidden" name="date49" value="<?php echo "".$date;?>"></td>
	<td>	   </td>	<td><input type="hidden" name="sub49" value="<?php echo "".$subject;?>"></td>
	<td>RollNo	    </td>	<td><input type="text" name="rollno49" value="<?php echo "".$i;?>"></td><?php ++$i;?>
	<td>Attendance        </td>	<td><input type="text" name="attend49" value=""  ></td> </tr>

</table>
<div class="form-group" style="margin:30px;" align="center" >	
<input type="submit" value="Submit" class="btn btn-primary"  >  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <input type="reset" class="btn btn-primary" value="Reset">
</div>
</form>
<div class="progress">
        <div class="progress-bar progress-bar-info" style="width: 100%; height:100%;"><p style="font-size: 18px; font-family: comic sans ms,cursive; color:black; ">Created by Ajinkya Bodade</p></div>
		</div>


</font>
</body>
</html>
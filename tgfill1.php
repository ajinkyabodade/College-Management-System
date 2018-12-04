
<html>
<head>
<title>T/G Form</title>
		<link href="bootstrap.min.css" rel="stylesheet">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="css/coin-slider.css" />
<script type="text/javascript" src="js/cufon-yui.js"></script>
<script type="text/javascript" src="js/cufon-georgia.js"></script>
<script type="text/javascript" src="js/jquery-1.4.2.min.js"></script>
<script type="text/javascript" src="js/script.js"></script>
<script type="text/javascript" src="js/coin-slider.min.js"></script>
</head>

<body  style="background: url(images/main_bg.gif) repeat left top;">
<div class="main" >
 <div class="logo">
        
      </div>
	  
	  <div class="progress">
        <div class="progress-bar progress-bar-info" style="width: 100%; height:100%;"></div>
      </div>
      
<h1><a href="index.html">Teacher Guardian &nbsp;<span>Form</span></a></h1>
<div class="progress">
        <div class="progress-bar progress-bar-info" style="width: 100%; height:100%;"></div>
      </div>
	  
	        </div>
	  
	  <div  style="margin:30px;" align="Right" >
	<a href="principalportal.php" target=""><input type="submit" class="btn btn-primary" value="Home"></a><a href="logoutp.php" target=""><input type="submit" class="btn btn-primary" value="Logout"></a>
	

<form action="tgfill2.php" method="POST"  >
<div class="container">
	<div class="panel panel-primary" 
style="margin:25px 350px 12px 120px;text-align:center;width:900px;border-radius:10px;">
<div class="panel-heading">
              <h1 class="panel-title" style="font-size:30px;">T/G Form</h1>
            </div>

		 
<?php 
$name=$_POST["name"];
$dob=$_POST["dob"];
$emailid=$_POST["emailid"];
$conn=new mysqli("localhost", "root","","collegemanagement");
	$result = $conn->query("SELECT * FROM tgform where name='$name' and emailid='$emailid' and dob='$dob'");
	$row = $result->fetch_assoc()
?>	

<table align="center" style="color:#000000;">
	<div class="form-group" style="margin:30px;" >
<tr><td>Full Name </td>		<td><input class="form-control" type="text" name="name" value="<?php echo "".$row['name'];?>" required><br>
<td style="padding-left:50px;">Upload Image</td> <td style="padding-left:50px;"> <input class="form-control" type="file" name="image" required ><br></td></tr></div>
<div class="form-group" style="margin:30px;" >
<tr><td>Branch</td>   	<td><input class="form-control" name="branch" value="<?php echo "".$row['branch'];?> "required></div>

</td>
<div class="form-group" style="margin:30px;" >
<td style="padding-left:50px;"> Select Year </td> <td style="padding-left:50px;"><input name="year" class="form-control" value="<?php echo "".$row['year'];?>"></div>
 </tr></td>
<div class="form-group" style="margin:30px;" >
<tr><td>Email Id </td>	<td><input class="form-control" type="text" name="emailid" value="<?php echo "".$row['emailid'];?>" required></td>
<td style="padding-left:50px;">LinkedIn Id </td> <td style="padding-left:50px;"> <input class="form-control" type="text" name="linkid" value="<?php echo "".$row['linkid'];?>" ><br></td></tr></div>
<div class="form-group" style="margin:30px;" >
<tr><td>Date Of Birth</td>	<td><input class="form-control" type="date" name="dob" value="<?php echo "".$row['dob'];?>" ></td>
<td style="padding-left:50px;">Address</td> <td style="padding-left:50px;"> <input class="form-control" type="text" name="add" value="<?php echo "".$row['add0'];?>" ><br></td></tr></div>
<div class="form-group" style="margin:30px;" >
<tr><td>Mobile No Self</td>	<td><input class="form-control" type="text" name="mobs" value="<?php echo "".$row['mobs'];?>" ></td>
<td style="padding-left:50px;">Mobile No Father's </td> <td style="padding-left:50px;"> <input class="form-control" type="text" name="mobf" value="<?php echo "".$row['mobf'];?>" ><br></td></tr></div>
<div class="form-group" style="margin:30px;" >
<tr><td>Parents Full Name</td>	<td><input class="form-control" type="text" name="pname" value="<?php echo "".$row['pname'];?>"></td>
<td style="padding-left:50px;">Parents Address  </td> <td style="padding-left:50px;"> <input class="form-control" type="text" name="padd" value="<?php echo "".$row['padd'];?>" ><br></td></tr></div>



<table align="center" style="color:#000000;">
<font size="5">Academic Record:</font>
<tr><td>SSC:-</td>
<td style="padding-left:50px;">Year  </td> <td style="padding-left:50px;"> <input class="form-control" type="text" name="yer1" value="<?php echo "".$row['year1'];?>"><br></td>
<td style="padding-left:50px;">Percentage  </td> <td style="padding-left:50px;"> <input class="form-control" type="text" name="per1" value="<?php echo "".$row['per1'];?>"><br></td>
<td style="padding-left:50px;">Subject Passed  </td> <td style="padding-left:50px;"> <input class="form-control" type="text" name="spass1" value="<?php echo "".$row['spass1'];?>" ><br></td></tr></div>

<tr><td>HSC:-</td>
<td style="padding-left:50px;">Year  </td> <td style="padding-left:50px;"> <input class="form-control" type="text" name="yer2" value="<?php echo "".$row['year2'];?>"><br></td>
<td style="padding-left:50px;">Percentage  </td> <td style="padding-left:50px;"> <input class="form-control" type="text" name="per2" value="<?php echo "".$row['per2'];?>"><br></td>
<td style="padding-left:50px;">Subject Passed  </td> <td style="padding-left:50px;"> <input class="form-control" type="text" name="spass2" value="<?php echo "".$row['spass2'];?>" ><br></td></tr></div>

<tr><td>Diploma:-</td>
<td style="padding-left:50px;">Year  </td> <td style="padding-left:50px;"> <input class="form-control" type="text" name="yer3" value="<?php echo "".$row['year3'];?>"><br></td>
<td style="padding-left:50px;">Percentage  </td> <td style="padding-left:50px;"> <input class="form-control" type="text" name="per3" value="<?php echo "".$row['per3'];?>" ><br></td>
<td style="padding-left:50px;">Subject Passed  </td> <td style="padding-left:50px;"> <input class="form-control" type="text" name="spass3" value="<?php echo "".$row['spass3'];?>" ><br></td></tr></div>

<tr><td>I SEM:-</td>
<td style="padding-left:50px;">Year  </td> <td style="padding-left:50px;"> <input class="form-control" type="text" name="yer4" value="<?php echo "".$row['year4'];?>"><br></td>
<td style="padding-left:50px;">Percentage  </td> <td style="padding-left:50px;"> <input class="form-control" type="text" name="per4" value="<?php echo "".$row['per4'];?>" ><br></td>
<td style="padding-left:50px;">Subject Passed  </td> <td style="padding-left:50px;"> <input class="form-control" type="text" name="spass4" value="<?php echo "".$row['spass4'];?>" ><br></td></tr></div>

<tr><td>II Sem:-</td>
<td style="padding-left:50px;">Year  </td> <td style="padding-left:50px;"> <input class="form-control" type="text" name="yer5" value="<?php echo "".$row['year5'];?>"><br></td>
<td style="padding-left:50px;">Percentage  </td> <td style="padding-left:50px;"> <input class="form-control" type="text" name="per5" value="<?php echo "".$row['per5'];?>" ><br></td>
<td style="padding-left:50px;">Subject Passed  </td> <td style="padding-left:50px;"> <input class="form-control" type="text" name="spass5" value="<?php echo "".$row['spass5'];?>"><br></td></tr></div>

<tr><td>III SEM:-</td>
<td style="padding-left:50px;">Year  </td> <td style="padding-left:50px;"> <input class="form-control" type="text" name="yer6" value="<?php echo "".$row['year6'];?>"><br></td>
<td style="padding-left:50px;">Percentage  </td> <td style="padding-left:50px;"> <input class="form-control" type="text" name="per6" value="<?php echo "".$row['per6'];?>" ><br></td>
<td style="padding-left:50px;">Subject Passed  </td> <td style="padding-left:50px;"> <input class="form-control" type="text" name="spass6" value="<?php echo "".$row['spass6'];?>"><br></td></tr></div>

<tr><td>IV SEM:-</td>
<td style="padding-left:50px;">Year  </td> <td style="padding-left:50px;"> <input class="form-control" type="text" name="yer7" value="<?php echo "".$row['year7'];?>" ><br></td>
<td style="padding-left:50px;">Percentage  </td> <td style="padding-left:50px;"> <input class="form-control" type="text" name="per7" placeholder="Percentage" value="<?php echo "".$row['per7'];?>"><br></td>
<td style="padding-left:50px;">Subject Passed  </td> <td style="padding-left:50px;"> <input class="form-control" type="text" name="spass7" value="<?php echo "".$row['spass7'];?>" ><br></td></tr></div>

<tr><td>V SEM:-</td>
<td style="padding-left:50px;">Year  </td> <td style="padding-left:50px;"> <input class="form-control" type="text" name="yer8" value="<?php echo "".$row['year8'];?>"><br></td>
<td style="padding-left:50px;">Percentage  </td> <td style="padding-left:50px;"> <input class="form-control" type="text" name="per8" value="<?php echo "".$row['per8'];?>"><br></td>
<td style="padding-left:50px;">Subject Passed  </td> <td style="padding-left:50px;"> <input class="form-control" type="text" name="spass8" value="<?php echo "".$row['spass8'];?>" ><br></td></tr></div>

<tr><td>VI SEM:-</td>
<td style="padding-left:50px;">Year  </td> <td style="padding-left:50px;"> <input class="form-control" type="text" name="yer9" value="<?php echo "".$row['year9'];?>" ><br></td>
<td style="padding-left:50px;">Percentage  </td> <td style="padding-left:50px;"> <input class="form-control" type="text" name="per9" value="<?php echo "".$row['per9'];?>" ><br></td>
<td style="padding-left:50px;">Subject Passed  </td> <td style="padding-left:50px;"> <input class="form-control" type="text" name="spass9" value="<?php echo "".$row['spass9'];?>"><br></td></tr></div>

<tr><td>VII SEM:-</td>
<td style="padding-left:50px;">Year  </td> <td style="padding-left:50px;"> <input class="form-control" type="text" name="yer10" value="<?php echo "".$row['year10'];?>" ><br></td>
<td style="padding-left:50px;">Percentage  </td> <td style="padding-left:50px;"> <input class="form-control" type="text" name="per10" value="<?php echo "".$row['per10'];?>" ><br></td>
<td style="padding-left:50px;">Subject Passed  </td> <td style="padding-left:50px;"> <input class="form-control" type="text" name="spass10" value="<?php echo "".$row['spass10'];?>" ><br></td></tr></div>

<tr><td>VII SEM:-</td>
<td style="padding-left:50px;">Year  </td> <td style="padding-left:50px;"> <input class="form-control" type="text" name="yer11" pvalue="<?php echo "".$row['year11'];?>"><br></td>
<td style="padding-left:50px;">Percentage  </td> <td style="padding-left:50px;"> <input class="form-control" type="text" name="per11" value="<?php echo "".$row['per11'];?>" ><br></td>
<td style="padding-left:50px;">Subject Passed  </td> <td style="padding-left:50px;"> <input class="form-control" type="text" name="spass11" value="<?php echo "".$row['spass11'];?>" ><br></td></tr></div>

</table></table>
<table align="center" style="color:#000000;">
<div class="form-group" style="margin:30px;" >
<tr><td>Fathers Education</td>	<td><input class="form-control" type="text" name="fedu" value="<?php echo "".$row['fedu'];?>" ></td>
<td style="padding-left:50px;">Fathers Occupation </td> <td style="padding-left:50px;"> <input class="form-control" type="text" name="focc" value="<?php echo "".$row['focc'];?>"><br></td></tr></div>
<div class="form-group" style="margin:30px;" >
<tr><td>Mothers Education</td>	<td><input class="form-control" type="text" name="medu" value="<?php echo "".$row['medu'];?>" ></td>
<td style="padding-left:50px;">Mothers Occupation </td> <td style="padding-left:50px;"> <input class="form-control" type="text" name="mocc" value="<?php echo "".$row['mocc'];?>" ><br></td></tr></div>

<div class="form-group" style="margin:30px;" >
<tr><td> Annual Income </td> <td >
<input name="inc" class="form-control" value="<?php echo "".$row['inc'];?>" required>
</td>
<td style="padding-left:50px;">Final Year Project </td> <td style="padding-left:50px;"> <input class="form-control" type="text" name="fpro" value="<?php echo "".$row['fpro'];?>" ><br></td></tr></div>
</table>


<table align="center" style="color:#000000;">
<font size="5">Teacher Guardian:</font>
<tr><td>Ist Year:-</td>
<td style="padding-left:50px;">Year  </td> <td style="padding-left:50px;"> <input class="form-control" type="text" name="yer12" value="<?php echo "".$row['yer12'];?>"><br></td>
<td style="padding-left:50px;">Roll No  </td> <td style="padding-left:50px;"> <input class="form-control" type="text" name="roll1" value="<?php echo "".$row['roll1'];?>" ><br></td>
<td style="padding-left:50px;">T/G Name  </td> <td style="padding-left:50px;"> <input class="form-control" type="text" name="tgn" value="<?php echo "".$row['tgn'];?>" ><br></td></tr></div>

<tr><td>II nd Year:-</td>
<td style="padding-left:50px;">Year  </td> <td style="padding-left:50px;"> <input class="form-control" type="text" name="yer13" value="<?php echo "".$row['yer13'];?>" ><br></td>
<td style="padding-left:50px;">Roll No  </td> <td style="padding-left:50px;"> <input class="form-control" type="text" name="roll2" value="<?php echo "".$row['roll2'];?>"><br></td>
<td style="padding-left:50px;">T/G Name </td> <td style="padding-left:50px;"> <input class="form-control" type="text" name="tgn1" value="<?php echo "".$row['tgn1'];?>" ><br></td></tr></div>

<tr><td>III rd Year:-</td>
<td style="padding-left:50px;">Year  </td> <td style="padding-left:50px;"> <input class="form-control" type="text" name="yer14" value="<?php echo "".$row['yer14'];?>"><br></td>
<td style="padding-left:50px;">Roll No  </td> <td style="padding-left:50px;"> <input class="form-control" type="text" name="roll3" value="<?php echo "".$row['roll3'];?>" ><br></td>
<td style="padding-left:50px;">T/G Name </td> <td style="padding-left:50px;"> <input class="form-control" type="text" name="tgn2" value="<?php echo "".$row['tgn2'];?>" ><br></td></tr></div>

<tr><td>Final Year:-</td>
<td style="padding-left:50px;">Year  </td> <td style="padding-left:50px;"> <input class="form-control" type="text" name="yer15" value="<?php echo "".$row['yer15'];?>" ><br></td>
<td style="padding-left:50px;">Roll No  </td> <td style="padding-left:50px;"> <input class="form-control" type="text" name="roll4" value="<?php echo "".$row['roll4'];?>"><br></td>
<td style="padding-left:50px;">T/G Name </td> <td style="padding-left:50px;"> <input class="form-control" type="text" name="tgn3" value="<?php echo "".$row['tgn3'];?>"><br></td></tr></div>


</table>








<div class="form-group" style="margin:30px;" >	
<input class="btn btn-primary" type="submit" value="Submit" >  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<input class="btn btn-primary" type="reset" value="Reset"></div>
</div>

</div>
</div>
</div>
	<div class="progress">
        <div class="progress-bar progress-bar-info" style="width: 100%; height:100%;"><p style="font-size: 20px; font-family: comic sans ms,cursive; color:black; ">Created by Ajinkya Bodade</p></div>
		</div>
				
				
<input name="id" type="hidden" value="<?php echo $row['id']; ?>">
</form>
</table>
</form>

</body>
</html>
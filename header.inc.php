<?php require_once("connect.inc.php"); 
  session_start();
?>
<html>
<head>
	<title>TEC Manamgement System</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>
	<!-- navbar -->
	<nav class="navbar navbar-default">
  <div class="container">
    <div class="navbar-header">
      <a class="navbar-brand" href="index.php">TMS</a>
    </div>
    <div>
      <ul class="nav navbar-nav pull-right">
        
        <?php
          /*menu when user is not loggedin*/
          if(isset($_SESSION['id'])){
echo '<form action="" method="post">
Select Year & Branch<select name="year"><option value="3N">3N</option></select>
Select Subject<select name="subject"><option value="Web Technology">Web Technology</option></select>
<input type="submit"></form><li><a href="index.php">Submit TEC</a></li>
            <li><a href="logout.php">Logout</a></li>';
          }else{/*menu when user is loggedin*/
            echo "<li><a href='login.php'>Login</a></li>
                  <li><a href='register.php'>Register</a></li>";
          }
          
        ?>
        
      </ul>
    </div>
  </div>
</nav>
	<!-- /navbar -->
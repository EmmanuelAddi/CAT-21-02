<!DOCTYPE html>
<html>
<head>
	<title>School Chingu</title>
	<link rel="stylesheet" type="text/css" href="Cssjs/bootstrap.css">
 <script type="text/javascript" href="Cssjs/bootstrap.min.js"></script>   
 <script type="text/javascript" href="Cssjs/jquery.min.js"></script>
<style type="text/css">
	.navbar{
		background-color: #ffcccc;
	}
	.pageheader{
		background-color: #ffcccc;
	}
	body{
		background-image: url(pictures/pexels-photo-207691.jpeg);
	}
	form{
		background-color: #ffffff;
	}
	#Home{
		background-color: #ffcccc;
	}
</style>
   

</head>
<body>
	<div class="pageheader text-center">
		<strong><h1>Dummy High School</h1></strong>
		<h1 style="font-style: italic;">"Infide Vade"</h1>
	</div>
	
	<nav class="navbar"> 
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Dummy School</a>
    </div>
    <ul class="nav navbar-nav navbar-right">
      <li class="active"><a href="#Aaaa">Registration</a></li>
      <li><a href="#Home">Home</a></li>
      <li><a href="#H2">Departments</a></li>
      <li><a href="#H3">Contact Us</a></li>
    </ul>
  </div>
</nav>

	


     		<div class="container-fluid" id="Aaaa">
     			<div class="col-md-4 col-md-offset-4">
     				<fieldset>
     					<legend>Grade Calculator</legend>
     					<form method="GET">
      						<div><label>Maths:</label><input type="number" name="S1" placeholder="Maths" class="form-control" required=""></div>

     						<div><label>English:</label><input type="number" name="S2" placeholder="English"  class="form-control" required=""></div>
     						<div><label>Kiswahili:</label><input type="number" name="S3" placeholder="Kiswahili" class="form-control" required=""></div>
     						<div><label>Biology:</label><input type="number" name="S4" placeholder="Biology" class="form-control" required=""></div>
     						<div><label>Physics:</label><input type="number" name="S5" placeholder="Physics" class="form-control" required=""></div>
     						<div><label>Chemistry:</label><input type="number" name="S6" placeholder="Chemistry" class="form-control" required=""></div>
     						<div><label>Geography:</label><input type="number" name="S7" placeholder="Geography" class="form-control" required=""></div>
     						<div><label>Computer Studies:</label><input type="number" name="S8" placeholder="Computer Studies" class="form-control" required=""></div>

     						<button class="btn btn-info">Calculate</button>

     						<?php 
     						if (isset($_GET['S1'])) {
								# code...
							$T1=$_GET['S1'];
							}		
     						if (isset($_GET['S2'])) {
								# code...
							$T2=$_GET['S2'];
							}		
     						if (isset($_GET['S3'])) {
								# code...
							$T3=$_GET['S3'];
							}		
     						if (isset($_GET['S4'])) {
								# code...
							$T4=$_GET['S4'];
							}		
     						if (isset($_GET['S5'])) {
								# code...
							$T5=$_GET['S5'];
							}		
     						if (isset($_GET['S6'])) {
								# code...
							$T6=$_GET['S6'];
							}		
     						if (isset($_GET['S7'])) {
								# code...
							$T7=$_GET['S7'];
							}		
     						if (isset($_GET['S8'])) {
								# code...
							$T8=$_GET['S8'];
							}

							$Total=$T1+$T2+$T3+$T4+$T5+$T6+$T7+$T8;
							echo "<br>";
							echo "Total marks= " . $Total;

							echo "<br>";
							$avg=$Total/8;
							echo "Your Average is: " . $avg;	

							echo "<br>";
							if ($avg>80) {
									# code...
								echo "Grade: A";
								}	elseif ($avg>70) {
									# code...
									echo "Grade: A-";
								} elseif ($avg>60) {
									# code...
									echo "Grade: B";
								} elseif ($avg>50) {
									# code...
									echo "Grade: C";
								} elseif ($avg>40) {
									# code...
									echo "Grade: D";
								} else{
									echo "Grade: E";
								}


     						 ?>
     					</form>
     				</fieldset>     			
     			</div>
     		</div>
 	

<div class="container-fluid" id="Home">
	<div class="col-md-4">
		<h3 class="text-center">Motto</h3>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
	</p>

	</div>

	<div class="col-md-4">
		<h3 class="text-center">Vision</h3>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
	</p>

	</div>

	<div class="col-md-4">
		<h3 class="text-center">Mission</h3>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
	</p>

	</div>


</div>

</body>
</html>
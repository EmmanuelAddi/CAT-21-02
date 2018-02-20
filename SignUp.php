<!DOCTYPE html>
<html>
<head>
	<title>Sign Up</title>
<link rel="stylesheet" type="text/css" href="Cssjs/bootstrap.css">
 <script type="text/javascript" href="Cssjs/bootstrap.min.js"></script>   
 <script type="text/javascript" href="Cssjs/jquery.min.js"></script>   

</head>
<style type="text/css">
	form{
		padding: 40px;
	}
	body{background-image: url(pictures/pexels-photo-267885.jpeg);}
</style>

<body>

<div class="container-fluid col-md-4 col-md-offset-4">
  	<fieldset>
  		<legend>Sign Up</legend>
  		<form class="form-group" method="GET" action="School.php">
  			<div class="input-group"><span class="input-group-addon"><strong>First Name</strong><i class="glyphicon glyphicon-user"></i></span><input type="text" name="Fname" placeholder="First Name"></div>
  			<?php 
  				if (empty($_GET['Fname'])) {
  					# code...
  					echo "First Name Required";
  				} else{
  					echo "";
  				}

  			 ?> <br>			
  			<div class="input-group" ><span class="input-group-addon"><strong>Second Name</strong><i class="glyphicon glyphicon-user"></i></span><input type="text" name="Sname" placeholder="Second Name"></div>
  			<?php 
  				if (empty($_GET['Sname'])) {
  					# code...
  					echo "Second Name Required";
  				} else{
  					echo "";
  				}

  			 ?><br>
  			<div class="input-group"><span class="input-group-addon"><strong>Email</strong><i class="glyphicon glyphicon-envelope"></i></span><input type="text" name="Email" placeholder="Email Address"></div>
  			<?php 
  			if (empty($_GET['Email'])) {
  					# code...
  					echo "Email Address Required";
  				} else{
  					echo "";
  				}

  			 ?><br>
  			<div class="input-group"><span class="input-group-addon"><strong>Region</strong><i class="glyphicon glyphicon-home"></i></span><input list="Region" name="Region" placeholder="Please select your Region">
   <datalist id="Region">
    <option value="Rift Valley">
    <option value="Coast">
    <option value="Central">
    <option value="Nairobi">
    <option value="Eastern">
    <option value="North Eastern">
    <option value="Western">
    <option value="Nyanza">
  </datalist>
        </div>
        <?php 
        if (empty($_GET['Region'])) {
  					# code...
  					echo "Your Region is Required";
  				} else{
  					echo "";
  				}

         ?><br>
        <div class="input-group">
            <span class="input-group-addon"><strong>Date of Birth</strong><i class="glyphicon glyphicon-home"></i></span>
   
    <select size="1" class="button">
            <option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option>
            <option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option>
            <option value="9">9</option>
    </select>
            <select size="1" class="button">
            <option value="2010">2010</option>
            <option value="2011">2011</option>
            <option value="2012">2012</option>
            <option value="2013">2013</option>
            <option value="2014">2014</option>
            <option value="2015">2015</option>
            <option value="2016">2016</option>
            <option value="2017">2017</option>
            <option value="2018">2018</option>
            <option value="2019">2019</option>
            <option value="2020">2020</option>
            <option value="2021">2021</option>
            <option value="2022">2022</option>
    </select> 
   
    <select size="1" class="button">
            <option value="January">January</option>
            <option value="February">February</option>
            <option value="March">March</option>
            <option value="April">April</option>
            <option value="May">May</option>
            <option value="June">June</option>
            <option value="July">July</option>
            <option value="August">August</option>
            <option value="September">September</option>
            <option value="October">October</option>
            <option value="November">November</option>
            <option value="December">December</option>
    </select>
        </div>
       <br>
  			<div class="input-group"><span class="input-group-addon"><strong>Password</strong><i class="glyphicon glyphicon-lock"></i></span><input type="password" name="pass" placeholder="Password"></div>
  			<?php 
  			if (empty($_GET['pass'])) {
  					# code...
  					echo "Password Required";
  				} else{
  					echo "";
  				}
  				$psd=$_GET['pass'];

  			 ?><br>
  			<div class="input-group"><span class="input-group-addon"><strong>Confirm Password</strong><i class="glyphicon glyphicon-lock"></i></span><input type="password" name="pass1" placeholder="Confirm Password"></div>
  			<?php 
  			if (empty($_GET['pass1'])) {
  					# code...
  					echo "Please confirm your Password";
  				} else{
  					echo "";
  				}
  			
  				echo "<br>";
  				$psd1=$_GET['pass1'];
  				if ($psd===$psd1) {
  					# code...
  					echo "";
  				} else{
  					echo "Password Mismatch error";
  				}
  				

  			 ?><br>

  			<div class="btn-group"><button class="btn btn-info" type="send">Sign Up<span class="glyphicon glyphicon-log-in"></span></button>
  			<button class="btn btn-warning" type="reset">Reset</button></div>
  			<?php 


  			 ?>
  		</form>
  	</fieldset>
  </div>


</body>
</html>
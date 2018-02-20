<!DOCTYPE html>
<html>
<head>
	<title>Sign In</title>
	<link rel="stylesheet" type="text/css" href="bootstrap.css">
   <link rel="stylesheet" type="text/css" href="Cssjs/bootstrap.css">
 <script type="text/javascript" href="Cssjs/bootstrap.min.js"></script>   
 <script type="text/javascript" href="Cssjs/jquery.min.js"></script>
</head>
<style type="text/css">
  form{
    padding-left: 500px;
    padding-top: 100px;
    background-color: #ffffff;
  }
  body{background-image: url(pictures/pexels-photo-267885.jpeg);
    }
 
 
</style>
<body>

	<div class="container-fluid">
		<fieldset>
			<legend>Sign In</legend>
			<form class="form-group" method="GET" action="School.php">


				<div class="input-group"><span class="input-group-addon"><strong>Student's ID</strong><i class="glyphicon glyphicon-user"></i></span><input type="text" name="sID" placeholder="Student's ID"></div>
        <?php 
          if (empty($_GET['sID'])) {
            # code...
            echo "Input Student's ID";;
          } else{
            echo "";
          }

         ?><br>
				<div class="input-group"><span class="input-group-addon"><strong>Password</strong><i class="glyphicon glyphicon-user"></i></span><input type="password" name="Pas" placeholder="Password"></div>
        <?php 
          if (empty($_GET['Pas'])) {
            # code...
            echo "Password Required";
          } else {
            echo "";
          }

         ?><br>

				<button class="btn btn-info" type="send"><span class="glyphicon glyphicon-log-in"></span> Log In</button>
        <?php 



         ?>
        <br><br>
        <a href="SignUp.php">Don't have an account? Create new account</a>
			</form>
		</fieldset>
	</div><!--end of Sign in-->
  
  
</body>
</html>
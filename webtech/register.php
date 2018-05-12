<?php
	session_start();
	require_once('dbconfig/config.php');
	//phpinfo();
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Sign Up Page</title>
<link rel="stylesheet" href="css/login.css">
<link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/datepicker3.css" rel="stylesheet">
  <link href="css/styles.css" rel="stylesheet">
</head>
<body style="background-image: url(regisbg.jpg);">
	<div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
		  <div class="login-panel panel panel-info text-center">
		<div class="panel-heading">Sign Up Form</div>
		<form action="register.php" method="post">
			<div class="panel-body">
				<fieldset>
					 <div class="form-group text-center">
					 		<input class="form-control" type="text" placeholder="Enter Username" name="username" required>
					</div>
				<div class="form-group text-center">
				<input class="form-control" type="password" placeholder="Enter Password" name="password" minlength="8" required>
			</div>
			<div class="form-group text-center">
				<input class="form-control" type="password" placeholder="Re-Enter Password" name="cpassword" minlength="8" required>
			</div>
				<button name="register" class="btn btn-primary btn-lg" type="submit">Sign Up</button>
				
				<a href="index.php"><button type="button" class="btn btn-primary btn-lg">Back to Login</button></a>
			</div>
	</fieldset>
</div>
</form>
</div>

		
		<?php
			if(isset($_POST['register']))
			{
				@$username=$_POST['username'];
				@$password=$_POST['password'];
				@$cpassword=$_POST['cpassword'];
				
				if($password==$cpassword)
				{
					$query = "select * from user where username='$username'";
					//echo $query;
				$query_run = mysqli_query($con,$query);
				//echo mysql_num_rows($query_run);
				if($query_run)
					{
						if(mysqli_num_rows($query_run)>0)
						{
							echo '<script type="text/javascript">alert("This Username Already exists.. Please try another username!")</script>';
						}
						else
						{
							$stmt = $con->prepare("INSERT INTO user (username, password) VALUES (?, ?)");
							$stmt->bind_param('ss', $username, $password);
							$username = $username;
							$password = $password;
							$stmt->execute();
							
							//$query = "insert into user values('$username','$password')";
							//$query_run = mysqli_query($con,$query);
							if($query_run)
							{
								
								$_SESSION['username'] = $username;
								$_SESSION['password'] = $password;
								echo '<script type="text/javascript">alert("You are now Registered.. Proceed to Login")</script>';

							}
							else
							{
								echo '<p class="bg-danger msg-block">Registration Unsuccessful due to server error. Please try later</p>';
							}
						}
					}
					else
					{
						echo '<script type="text/javascript">alert("DB error")</script>';
					}
				}
				else
				{
					echo '<script type="text/javascript">alert("Password and Confirm Password do not match")</script>';
				}
				
			}
			else
			{
			}
		?>
	</div>
</body>
</html>
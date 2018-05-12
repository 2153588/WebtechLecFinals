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
<title>Login Page</title>

<link rel="stylesheet" href="css/login.css">
<link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/datepicker3.css" rel="stylesheet">
  <link href="css/styles.css" rel="stylesheet">
</head>
<body style="background-image: url(loginbg.jpg);">
  <div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
    <div class="login-panel panel panel-primary text-center">
 <div class="panel-heading">Log in</div>
    <div class="panel-body">
    <form action="index.php" method="post" role="form">
    <fieldset>
      <div class="form-group text-center">
        <input class="form-control" type="text" placeholder="Enter Username" name="username" required>
      </div>
      <div class="form-group text-center">
        <input class="form-control" type="password" placeholder="Enter Password" name="password" required size="20">
      </div>
      <div class="form-group text-center">
        <button class="btn btn-primary btn-lg" name="login" type="submit">Login</button>
        <a href="register.php"><button type="button" class="btn btn-success btn-lg">Register</button></a>
      </div>
        </fieldset>
    </form>
  </div>
  </div>
    
    <?php
      if(isset($_POST['login']))
      {
        @$username=$_POST['username'];
        @$password=$_POST['password'];
        $query = "select * from user where username='$username' and password='$password' ";
        //echo $query;
        $query_run = mysqli_query($con,$query);
        //echo mysql_num_rows($query_run);
        if($query_run)
        {
          if(mysqli_num_rows($query_run)>0)
          {
          $row = mysqli_fetch_array($query_run,MYSQLI_ASSOC);
          
          $_SESSION['username'] = $username;
          $_SESSION['password'] = $password;
          
          header( "Location: homepage.php");
          }
          else
          {
            echo '<script type="text/javascript">alert("No such User exists. Invalid Credentials")</script>';
          }
        }
        else
        {
          echo '<script type="text/javascript">alert("Database Error")</script>';
        }
      }
      else
      {
      }
    ?>
    
  </div>
</body>
</html>
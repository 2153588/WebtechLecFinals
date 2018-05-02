<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Account Login</title>
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <script src="http://cdn.ckeditor.com/4.6.1/standard/ckeditor.js"></script>
  </head>
  <body>

    <nav class="navbar navbar-default">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Webtech</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">

        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <header id="header">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h1 class="text-center">Account Login</h1>
          </div>
        </div>
      </div>
    </header>

    <section id="main">
      <div class="container">
        <div class="row">
          <div class="col-md-4 col-md-offset-4">
            
              <?php
              include "config.php";
              if(isset($_POST['username']) && isset($_POST['password'])){
                $username = $_POST['username'];
                $password = ($_POST['password']);
                $stmt = $db->prepare("SELECT * FROM login WHERE username=? AND password=? ");
                $stmt->bindParam(1, $username);
                $stmt->bindParam(2, $password);
                $stmt->execute();
                $row = $stmt->fetch();
                $user = $row['username'];
                $pass = $row['password'];
                $id = $row['id'];
                $type = $row['type'];
                if($username==$user && $pass==$password){
                  session_start();
                  $_SESSION['username'] = $user;
                  $_SESSION['password'] = $pass;
                  $_SESSION['id'] = $id;
                  $_SESSION['type'] = $type;
                  ?>
                  <script>window.location.href='index.php'</script>
                  <?php

                }else{
                  ?>
                  <div class="alert alert-danger alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <strong>STUPID!</strong>Wrong Username or Password.
                  </div>
                  <?php
                }
              }

              ?>
                <form method="post">
                <div class="form-group">
                  <label>Username</label>
                  <input type="text" class="form-control" name="username"/>
                </div>
                <div class="form-group">
                  <label>Password</label>
                  <input type="password" class="form-control" name="password" />
                </div>
                <input type="submit" value="Login" class="btn btn-primary" />
              </form>
          </div>
        </div>
      </div>
      <div class="col-md-4"></div>
    </section>


  <script>
     CKEDITOR.replace( 'editor1' );
 </script>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>

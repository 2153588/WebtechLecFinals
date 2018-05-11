

<?php
include 'config.php';
  session_start();

  if(isset($_POST['add'])){

	$username = mysqli_real_escape_string($con, $_POST['username']);
	$password = mysqli_real_escape_string($con, $_POST['password']);

    $addAdmin = "INSERT INTO login (username,password) values ('$username','$password')";

	$allAdmin = mysqli_query($con,"SELECT username FROM login WHERE username = '$username'");

         if(mysqli_num_rows($allAdmin) >= 1){
              echo "<div class='alert'>"; 
              echo "Name already taken! Please Try Again.";
              echo "</div>";
         }else{
            $registerAdmin = mysqli_query($con, $addAdmin);   
            echo "<div class='alertsuccess'>"; 
            echo "Successful!";
            echo "</div>"; 
             header("location:pages.php");
            }
    }
?>
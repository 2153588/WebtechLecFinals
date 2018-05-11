<?php
include 'config.php';
session_start();
if(!isset($_SESSION['username'])){
header('location: login.php'); 
}
?>

<?php
$user_id = $_POST['user_id'];
$delete = "DELETE FROM login WHERE id = $user_id";

if (!mysqli_query($con, $delete)) {
	echo 'not deleted';
} else  {
	header("Location:pages.php");
}
header("refresher:2 url=pages.php");
?>
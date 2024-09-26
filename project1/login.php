<?php
session_start();
include('includes/config.php');

 $username = $_POST['name'];
 $password = md5($_POST['pwd']);

// $username = "admin";
// $password = md5('admin');

 $query = "SELECT * FROM user WHERE username='$username' AND password='$password'";
$result = mysql_query($query)or die(mysql_error());
$num_row = mysql_num_rows($result);
if($num_row){echo mysql_error();}
		$row=mysqli_fetch_array($result);
		if( $num_row >=1 ) {
			echo 'true';
			$_SESSION['user_name']=$row['username'];
		}
		else{
			echo 'false';
		}
?>
<?php
	session_start();
	if(!isset($_SESSION['login_user']))
	{
		header("location:login.php");
	}
	
	include('config.php');
	$user_check = $_SESSION['login_user'];
	$ses_sql = mysql_query("SELECT * FROM user WHERE u_email = '$user_check' ");
	$row = mysql_fetch_array($ses_sql);
	
	echo"WELCOME ".$login_user=$row['u_name'];

?>
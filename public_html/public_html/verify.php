<?php

if(isset($_POST['submit'])){
$con = mysql_connect('mysql9.000webhost.com','a4378887_root','wildcat2016') or die ("Error connecting to MySQL");
mysql_select_db('a4378887_dfkdb', $con) or die ("Coudn't select the database");
$user = mysql_real_escape_string($_POST['username']);
$salt = 'zbn75';
$pass = hash('sha1', $salt.mysql_real_escape_string($_POST['password']));
$sql ="SELECT * FROM admin WHERE username='$user' AND password='$pass' LIMIT 1";
$mysql = mysql_query($sql) or die ($sql."<br/><br/>".mysql_error());
if(mysql_num_rows($mysql) == 1){
	$row=mysql_fetch_array($mysql);
	session_start();
	$_SESSION['username']=$row['username'];
	$_SESSION['password']=$row['password'];
	$_SESSION['logged']=TRUE;
	setcookie('admin','DFK', time()+3600);
	header("Location: adminpage.php");
	exit;
	}else{
	header("Location: adminlogin.php");
	exit;
	}
}else{
	exit;
}
?>
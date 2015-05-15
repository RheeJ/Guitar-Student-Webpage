<?php
session_start();
if(!$_SESSION['logged']){
	header("adminlogin.php");
	exit;
}
echo 'Welcome, '.$_SESSION['username'];
?>

<form action='test.php' method='post'
enctype='multipart/form-data'>

<label for='file'>Upload Photo:</label>
<input type='file' name='file' id='file'><br>
<input type='submit' name='submit' value='Submit'>
</form>

<form action='updateabout.php' method='post'>
About Me: <textarea name="am" rows="5" cols="75" wrap="hard"></textarea><br>
<input type='submit' name='submi' value='Submit'>
</form>

<form action = 'updatecontact.php' method='post'>
Email: <input type='text' name= "em"><br>
Facebook: <input type='text' name ="fm"><br>
Twitter: <input type='text' name="tm"><br>
Youtube: <input type='text' name= "ym"><br>
<input type='submit' name='sub' value='Submit'>
</form>

<form action = 'updatecomposer.php' method='post'>
Soundcloud File: <input type=' text' name = "sc">
<input type= 'submit' name= 'sub2' value='Submit'>
</form>

<form action = 'updateguitarist.php' method='post'>
Youtube File: <input type=' text' name = "yt">
<input type= 'submit' name= 'sub3' value='Submit'>
</form>

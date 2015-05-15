<?php

if (isset($_POST ['submi'])){
     $con = mysql_connect('mysql9.000webhost.com','a4378887_root','wildcat2016') or die ("Error connecting to MySQL");
     mysql_select_db('a4378887_dfkdb', $con) or die ("Coudn't select the database");
     $about = mysql_real_escape_string($_POST ['am']);
     $mysql = "UPDATE Content SET content =('$about') WHERE id = 1";
     $sql = mysql_query($mysql) or die ($sql."<br/><br/>".mysql_error());
     echo "add successful";
}
else { exit; }
?>
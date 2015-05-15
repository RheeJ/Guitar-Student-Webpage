<?php

if (isset($_POST ['sub2'])){
     $con = mysql_connect('mysql9.000webhost.com','a4378887_root','wildcat2016') or die ("Error connecting to MySQL");
     mysql_select_db('a4378887_dfkdb', $con) or die ("Coudn't select the database");
     $sound = mysql_real_escape_string($_POST ['sc']);
     $mysql = "INSERT INTO sc_content (content) VALUES ('$sound')";
     $sql = mysql_query($mysql) or die ($sql."<br/><br/>".mysql_error());
     echo "add successful";
}
else { exit; }
?>
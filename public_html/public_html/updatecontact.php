<?php
if (isset($_POST ['sub'])){
     $con = mysql_connect('mysql9.000webhost.com','a4378887_root','wildcat2016') or die ("Error connecting to MySQL");
     mysql_select_db('a4378887_dfkdb', $con) or die ("Coudn't select the database");
     $email = mysql_real_escape_string($_POST ['em']);
     $mysql = "UPDATE Content SET content =('$email') WHERE id = 2";
     $sql = mysql_query($mysql) or die ($sql."<br/><br/>".mysql_error());
     $facebook = mysql_real_escape_string($_POST ['fm']);
     $mysql2 = "UPDATE Content SET content =('$facebook') WHERE id = 3";
     $sql2 = mysql_query($mysql2) or die ($sql."<br/><br/>".mysql_error());
     $twitter = mysql_real_escape_string($_POST ['tm']);
     $mysql3 = "UPDATE Content SET content =('$twitter') WHERE id = 4";
     $sql3 = mysql_query($mysql3) or die ($sql."<br/><br/>".mysql_error());
     $youtube = mysql_real_escape_string($_POST ['ym']);
     $mysql4 = "UPDATE Content SET content =('$youtube') WHERE id = 5";
     $sql4 = mysql_query($mysql4) or die ($sql."<br/><br/>".mysql_error());
     echo "add successful";
}
else{
     exit;
}
?>
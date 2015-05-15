<?php

function updc()
{
    $con = mysql_connect('mysql9.000webhost.com','a4378887_root','wildcat2016') or die ("Error connecting to MySQL");
    mysql_select_db('a4378887_dfkdb', $con) or die ("Coudn't select the database");
    $maxint = mysql_query("SELECT * FROM sc_content;", $con);
    $numrows = mysql_num_rows($maxint);
    $int = 1;
    $result = array();
    while ($int <= $numrows){
    $sql = "SELECT * FROM sc_content WHERE id = $int";
    $mysql = mysql_query($sql) or die ($sql."<br/><br/>".mysql_error());
            $row = mysql_fetch_array($mysql);
            $retval = $row['content'];
            $post = nl2br(htmlspecialchars($retval));
            $result[] = $post;
            $int = $int + 1;
}
return $result;
}


?>
<?php

function upa()
{
    $con = mysql_connect('mysql9.000webhost.com','a4378887_root','wildcat2016') or die ("Error connecting to MySQL");
    mysql_select_db('a4378887_dfkdb', $con) or die ("Coudn't select the database");
    $sql = "SELECT * FROM Content WHERE id = 1";
    $mysql = mysql_query($sql) or die ($sql."<br/><br/>".mysql_error());
    if (mysql_num_rows($mysql) == 1){
            $row = mysql_fetch_array($mysql);
            $retval = $row['content'];
            $post = nl2br(htmlspecialchars($retval));
            $post = '<p>' . preg_replace('#(<br>[\r\n]+){2}#', '</p><p>', $post) . '</p>';
            $post = stripslashes($post);
            return $post;
    }
    else{ exit;}
}

?>
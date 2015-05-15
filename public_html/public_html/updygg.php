<?php
function updg()
{
   $link = mysql_connect('mysql9.000webhost.com','a4378887_root','wildcat2016') or die ("Error connecting to MySQL");
   mysql_select_db('a4378887_dfkdb', $link) or die ("Couldn't select the database");
   $top = mysql_query("SELECT * FROM yt_content;", $link);
   $toprows = mysql_num_rows ($top);
   $i = 1;
   $rarray =  array();
   while ($i <= $toprows) {
          $az = "SELECT * FROM yt_content WHERE id = $i";
          $myaz = mysql_query($az) or die ($az."<br/><br/>".mysql_error());
                $ro = mysql_fetch_array($myaz);
                $reval = $ro['content'];
                $pos = nl2br(htmlspecialchars($reval));
                $rarray[] = $pos;
                $i = $i + 1;
   }
   return $rarray;
}
?>
<?php
function getImages($dir)
{
	$root = scandir($dir);
	foreach($root as $value)
	{
		if($value === '.' || $value === '..') {continue;}
		if(is_file("$dir/$value")) {$result[]="$dir/$value"; continue;}
	}
	return $result;	
}
?>
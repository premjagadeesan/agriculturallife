<?php
$connection = mysql_connect("localhost", "localhost", "") or die(mysql_error()); 
$database =	mysql_select_db("test") or die(mysql_error());
?>
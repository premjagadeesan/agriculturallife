<?php

$id = $_GET['id']; #WARNING INSECURE. FOR DEMO ONLY!!!

 include 'connection.php';


$sql = "SELECT photo4 FROM advertisement WHERE sno= $id";

$result = mysql_query($sql) or die(mysql_error());  
$row = mysql_fetch_array($result);

header("Content-type: image/png/jpeg");
echo $row['photo4'];
$db->close();

?>
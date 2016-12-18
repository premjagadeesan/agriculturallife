<?php

$id = $_GET['id']; #WARNING INSECURE. FOR DEMO ONLY!!!

 include 'connection.php';


$sql = "SELECT photo FROM forum WHERE sno= $id";

$result = mysql_query($sql) or die(mysql_error());  
$row = mysql_fetch_array($result);

header("Content-type: image/jpeg");
echo $row['photo'];
$db->close();

?>
<?php

$id = $_GET['id']; #WARNING INSECURE. FOR DEMO ONLY!!!
$file = $_GET['id2'];

 include 'connection.php';


$sql = "SELECT document FROM forum WHERE sno= $id";

$result = mysql_query($sql) or die(mysql_error());  
$row = mysql_fetch_array($result);

$mime_type='';

 $known_mime_types=array(
    "htm" => "text/html",
    "exe" => "application/octet-stream",
    "zip" => "application/zip",
    "doc" => "application/msword",
	"docx" => "application/msword",
    "jpg" => "image/jpg",
    "php" => "text/plain",
    "xls" => "application/vnd.ms-excel",
    "ppt" => "application/vnd.ms-powerpoint",
    "gif" => "image/gif",
    "pdf" => "application/pdf",
    "txt" => "text/plain",
    "html"=> "text/html",
    "png" => "image/png",
    "jpeg"=> "image/jpg"
 );
 
 if($mime_type==''){
     $file_extension = strtolower(substr(strrchr($file,"."),1));
     if(array_key_exists($file_extension, $known_mime_types)){
        $mime_type=$known_mime_types[$file_extension];
     } else {
        $mime_type="application/force-download";
     };
 };
 
$withoutExt = preg_replace('/\\.[^.\\s]{3,4}$/', '', $file);


header("Content-Type:$mime_type");
header('Content-Disposition: attachment; filename="'.$withoutExt.'"');
header("Content-Transfer-Encoding: binary");


echo $row['document'];


?>
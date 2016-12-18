<?php 
header('Location: forum.php');  
 //This is the directory where images will be saved 
 $target = "ideaimages/"; 
 $target = $target . basename( $_FILES['photo']['name']); 
 
 //This gets all the other information from the form 
 $title=$_POST['title']; 
 $contents=$_POST['contents'];  
 
 $name=$_POST['name']; 
 $emailid=$_POST['emailid'];
 $phoneno=$_POST['phoneno'];  
 
 $fp = fopen($_FILES['photo']['tmp_name'], "r");
 
 $content = fread($fp, $_FILES['photo']['size']);
     fclose($fp);
	
     // Add slashes to the content so that it will escape special characters.
     // As pointed out, mysql_real_escape_string can be used here as well. Your choice.		 
     $pic = addslashes($content);
	 
	 
$filep = fopen($_FILES['document']['tmp_name'], "r");
 
	$contentii = fread($filep, $_FILES['document']['size']);
     fclose($filep);
	
     // Add slashes to the content so that it will escape special characters.
     // As pointed out, mysql_real_escape_string can be used here as well. Your choice.		 
	$picii = addslashes($contentii);



$iptamil='english';


	 
	 $filename=($_FILES['document']['name']);
	 
	 echo $filename;
 // Connects to your Database 
   include 'connection.php';
   
   
 //Writes the information to the database 
 mysql_query("INSERT INTO `forum` (title,contents,photo,name,emailid,phoneno,filename,document,lang) VALUES('$title', '$contents', '$pic','$name','$emailid','$phoneno','$filename','$picii','$iptamil')") ; 
 
 //Writes the photo to the server 
 if(move_uploaded_file($_FILES['photo']['tmp_name'], $target)) 
 { 
 
 //Tells you if its all ok 
 echo "The file ". basename( $_FILES['uploadedfile']['name']). " has been uploaded, and your information has been added to the directory"; 
 } 
 else { 
 
 //Gives and error if its not 
 echo "Sorry, there was a problem uploading your file."; 
 } 
 ?> 
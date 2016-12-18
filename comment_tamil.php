<?php 
$ipno=$_GET['to_id'];
header("Location: ideas_tamil.php?to_id=$ipno");

 $var1=$_GET['to_id'];
 
 echo $var1;
 
 //This is the directory where images will be saved 
 $target = "ideaimages/"; 
 $target = $target . basename( $_FILES['photo']['name']); 
 
 //This gets all the other information from the form 
 $ipno=$_GET['to_id'];
 $contents=$_POST['contents'];   
 $name=$_POST['name']; 
$mail=$_POST['emailid'];  
 // Connects to your Database 
   include 'connection.php';
 //Writes the information to the database 
 mysql_query("INSERT INTO `comment` (contents,name,emailid,postsno) VALUES('$contents','$name','$mail','$ipno')") ; 
 
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
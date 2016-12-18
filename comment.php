<?php 
$ipno=$_GET['to_id'];
//header("Location: ideas.php?to_id=$ipno");

 $var1=$_GET['to_id'];
 
 echo $var1;
 
 //This is the directory where images will be saved 

 
 //This gets all the other information from the form 
 $ipno=$_GET['to_id'];
 
 
 echo 'prem';

 $name=$_POST['name']; 
$mail=$_POST['emailid']; 

$contents=$_POST['contents'];  
 echo $contents; 
 // Connects to your Database 
   include 'connection.php';
 //Writes the information to the database 
 mysql_query("INSERT INTO `comment` (contents,name,emailid,postsno) VALUES('$contents','$name','$mail','$ipno')") ; 
 
 //Writes the photo to the server 
 

 ?> 
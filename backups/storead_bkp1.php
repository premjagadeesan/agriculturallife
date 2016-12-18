<?php 

 header('Location: market.php'); 
 //This gets all the other information from the form 
 
 
	$product=$_GET['to_id']; 
	$subproduct=$_GET['to_id2'];

	if($subproduct == 'Other')
		{						
		$subproduct=$_POST['subproduct'];
		}
	
	$fp = fopen($_FILES['photo']['tmp_name'], "r");
 
	$content = fread($fp, $_FILES['photo']['size']);
     fclose($fp);
	
     // Add slashes to the content so that it will escape special characters.
     // As pointed out, mysql_real_escape_string can be used here as well. Your choice.		 
	$pic = addslashes($content);	
	
	$filep = fopen($_FILES['photo2']['tmp_name'], "r");
 
	$contentii = fread($filep, $_FILES['photo2']['size']);
     fclose($filep);
	
     // Add slashes to the content so that it will escape special characters.
     // As pointed out, mysql_real_escape_string can be used here as well. Your choice.		 
	$picii = addslashes($contentii);
	
	
$filepp = fopen($_FILES['photo3']['tmp_name'], "r");
 
	$contentiii = fread($filepp, $_FILES['photo3']['size']);
     fclose($filepp);
	
     // Add slashes to the content so that it will escape special characters.
     // As pointed out, mysql_real_escape_string can be used here as well. Your choice.		 
	$piciii = addslashes($contentiii);
	
	$fileppp = fopen($_FILES['photo4']['tmp_name'], "r");
 
	$contentiv = fread($fileppp, $_FILES['photo4']['size']);
     fclose($fileppp);
	
     // Add slashes to the content so that it will escape special characters.
     // As pointed out, mysql_real_escape_string can be used here as well. Your choice.		 
	$piciv = addslashes($contentiv);
	
	$filepppp = fopen($_FILES['photo5']['tmp_name'], "r");
 
	$contentv = fread($filepppp, $_FILES['photo5']['size']);
     fclose($filepppp);
	
     // Add slashes to the content so that it will escape special characters.
     // As pointed out, mysql_real_escape_string can be used here as well. Your choice.		 
	$picv = addslashes($contentv);
	
	$picture2=($_FILES['photo2']['name']);
	echo $picture2;
	
 $picture1=($_FILES['photo']['name']);
	echo $picture1; 
	 $description=$_POST['description']; 
	 $quantity=$_POST['quantity']; 
	 $totalquanity=$_POST['totalquantity'];  
	 $price=$_POST['price']; 
	 $name=$_POST['name']; 
	 $emailid=$_POST['emailid'];
	 $phoneno=$_POST['phoneno']; 
	 $address=$_POST['address'];
	 $state=$_POST['state']; 
	 $pincode=$_POST['pincode']; 
	 
	include 'connection.php';
 
 // Connects to your Database 
   
 
 //Writes the information to the database 
 mysql_query("INSERT INTO `advertisement` (product,subproduct,photo,photo2,photo3,photo4,photo5,description,quantity,totalquanity,price,name,emailid,phoneno,address,state,pincode
 ) VALUES ('$product', '$subproduct', '$pic','$picii','$piciii','$piciv','$picv','$description','$quantity','$totalquanity','$price','$name','$emailid','$phoneno','$address','$state','$pincode')") ; 
 
mysql_query("INSERT INTO `photos` (photo1,photo2) VALUES ('$pic','$picii')") ; 
 
 ?> 
<?php 

 header('Location: market.php'); 
 //This gets all the other information from the form 
 
 
	$product=$_GET['to_id']; 
	$subproduct=$_GET['to_id2'];

	if($subproduct == 'Other')
		{						
		$subproduct=$_POST['subproduct'];
		}
		
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
																		
						$data = mysql_query("SELECT photo FROM photos where serial='1'; ") 
						or die(mysql_error()); 
						$var=$var1=$var2=$var3=$var4=null;
						
						while($info = mysql_fetch_array( $data )) 
						 { 
						 	if (isset($info['photo']))
							{
							$var=$info['photo'];
							}						
						}	
												
						 $data1 = mysql_query("SELECT photo FROM photos where serial='2'; ") 
						or die(mysql_error()); 
						
						while($info1 = mysql_fetch_array( $data1 )) 
						 { 
							if (isset($info1['photo']))
							{
							$var1=$info1['photo'];						
							}						
								
						 }	
						 					 
						 $data2 = mysql_query("SELECT photo FROM photos where serial='3'; ") 
						or die(mysql_error()); 
						
						while($info2 = mysql_fetch_array( $data2 )) 
						 { 
							if (isset($info2['photo']))
							{
							$var2=$info2['photo'];						
							}						
								
						 }	
						 						
						 
						 $data3 = mysql_query("SELECT photo FROM photos where serial='4'; ") 
						or die(mysql_error()); 
						
						while($info3 = mysql_fetch_array( $data3 )) 
						 { 
							if (isset($info3['photo']))
							{
							$var3=$info3['photo'];							
							}						
							
						 }	
												 
						 $data4 = mysql_query("SELECT photo FROM photos where serial='5'; ") 
						or die(mysql_error()); 
						
						while($info4 = mysql_fetch_array( $data4 )) 
						 { 
							if (isset($info4['photo']))
							{
							$var4=$info4['photo'];								
							}						
								
						 }	
						 
						$pic=$var;
						$picii=$var1;
						$piciii=$var2;
						$piciv=$var3;
						$picv=$var4;
						  
						  
						  
 // Connects to your Database 
   
 
 //Writes the information to the database 
 mysql_query("INSERT INTO `advertisement` (product,subproduct,photo,photo2,photo3,photo4,photo5,description,quantity,totalquanity,price,name,emailid,phoneno,address,state,pincode
 ) VALUES ('$product', '$subproduct', '$pic','$picii','$piciii','$piciv','$picv','$description','$quantity','$totalquanity','$price','$name','$emailid','$phoneno','$address','$state','$pincode')") ; 
 
mysql_query("TRUNCATE TABLE `test`.`photos`;") ; 
 
 ?> 
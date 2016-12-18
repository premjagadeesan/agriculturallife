<!DOCTYPE HTML>
<html>
<head>
	<meta charset="UTF-8">
	<title>Agricultural Life</title>
	
	<meta name="viewport" content="width=device-width">

	<meta name="Keywords" content="agriculture tutorial,agriculture information,agriculture market,agriculture forum,agriculture,agricultural technologies,agriculture advertisement,agriculture buy,agriculture sell,agriculture tips,agriculture techniques">

	<meta name="Description" content="Articles on modern agricultural techniques">
	
	<link rel="icon" type="image/ico" href="images/favicon.ico"/>
	<link rel="stylesheet" href="css/style.css" type="text/css">
	<link rel="stylesheet" href="css/bjqs.css">

    <!-- some pretty fonts for this demo page - not required for the slider -->
    <link href='http://fonts.googleapis.com/css?family=Source+Code+Pro|Open+Sans:300' rel='stylesheet' type='text/css'> 

    <!-- demo.css contains additional styles used to set up this demo page - not required for the slider --> 
    

    <!-- load jQuery and the plugin -->
    <script src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
    <script src="js/bjqs-1.3.min.js"></script>
	
	<style>
	h3{
color:Black;
font-family: "Helvetica Neue", Arial, sans-serif;
font-size: 20px;
text-align:center;
}
</style>
</head>
<body>
	<div id="header">
		<div class="clearfix">		
				<div id="navigation">
					<a href="index.html"><img src="agrilifeimage/frontagrilogo.png" alt="LOGO" height="50" width="300"></a>	
					
					<a href="index.html">Home</a>
				
				
					<a href="agriculturaltechnologies.html">Agri Technologies</a>
				

					<a href="tutorials.html">Tutorials</a>					
							
			
					<a href="information.html">Information</a>
				
					<a href="market.php" style="color:aqua;" >Market</a>
			
					<a href="forum.php"  >Forum</a>
				</div>
		</div>
	</div>
	<div id="1">
	<div id="contents">
		<div class="clearfix">
		<div class="singlead">
			<div class="singleadsellinfo">				
					<?php	

					$new=$_GET['to_id'];
						
					  include 'connection.php';				

					 $data = mysql_query("SELECT * FROM advertisement where sno='$new' ; ") 
					 or die(mysql_error()); 
					
					 while($info = mysql_fetch_array( $data )) 
					 
					 
					 { 
					
					 Print "<br><img src='images/indianrupee.png' height='30' width='30'>&nbsp<p class='pricetag'> ".$info['price'] . "</p><br> ";
					 Print "<img src='images/human_icon.png' height='25' width='25'>&nbsp<b>&nbsp&nbsp</b><td>".$info['name'] . " <br>";
					 
					 Print "<img src='images/phone_icon.png' height='25' width='25'>&nbsp<b>&nbsp&nbsp</b>".$info['phoneno'] . " <br>";	
					 
					 Print "<img src='images/email_icon.png' height='25' width='25'>&nbsp<b>&nbsp&nbsp</b>".$info['emailid'] . " <br>"; 
					 	 
					 Print "<img src='images/quantity.png' height='25' width='25'>&nbsp<b>&nbsp&nbsp</b><td>".$info['totalquanity'] . "";
					 Print "&nbsp&nbsp-".$info['quantity'] . " <br>";
					 	
					 			 	
					
					
				 
					 } 

							
					
					if (!isset($_POST["submit"])) {
					$self = $_SERVER['PHP_SELF'];
					
					
					print '<form    method="post" action="'.$self.'?to_id='.$new.'">';


					?>
				  			 
				 
				  <br>
				  <br>
				 <b style="color:#000;font-size:20px;height:20px;"> From: </b>
				  <input type="text" name="from"  style="height:20px;" class="txtinput">				  
				 <b style="color:#000;font-size:20px;">  Message:</b>
				  <br>				  
				  <textarea rows="10" cols="20" name="message" class="txtinput"></textarea><br>
				  <input type="submit" name="submit" value="Submit Feedback">
				   <br>
				    <br>
					 <br>
					  <br>
					
						
						   
				  </form>
				  <?php 
				} else {    // the user has submitted the form
				  // Check if the "from" input field is filled out
				  if (isset($_POST["from"])) {
					$from = $_POST["from"]; // sender
					$subject = "Product Enquiry";
					$message = $_POST["message"];
					// message lines should not exceed 70 characters (PHP rule), so wrap it
					$message = wordwrap($message, 70);
					// send mail
					mail("premjagadeesan@gmail.com",$subject,$message,"From: $from\n");
					echo "Thank you for product enquire, supplier will get back you as soon as possible";
				  }
				}					
				?>							
			</div>
			<div class="singleadproductinfo">
				
				 <?php 
				  					
					$new=$_GET['to_id'];
						
					 
					 $data = mysql_query("SELECT * FROM advertisement where sno='$new' ; ") 
					 or die(mysql_error()); 
					
					 while($info = mysql_fetch_array( $data )) 
					 { 
					Print "<h3>".$info['subproduct'] . "</h3> "; 
					
					Print "<img src='images/location_icon.png' height='25' width='25'>&nbsp&nbsp".$info['address'] . ",";
					 Print "".$info['state'] . " <br>";
					
					print "<br>";
										 
					  //if (!empty($info['photo']))
					  
						//echo '<img src="market_img_fetch.php?id=' . $info['sno'] . '" >';

						
					// else
						//print "<img src=agrilifeimage/frontagrilogo.png height='400' width='400' style='margin-left:80px'>";
						
					 			 
					 ?>
					 <div id="container">
  						  
						  <!--  Outer wrapper for presentation only, this can be anything you like -->
						  <div id="banner-slide">

							<!-- start Basic Jquery Slider -->
							<ul class="bjqs">
							
							
							<?php
							$pic1=$pic2=$pic3=$pic4=$pic5='';
							
							$pic1=$info['photo'];
							$pic2=$info['photo2'];
							$pic3=$info['photo3'];
							$pic4=$info['photo4'];
							$pic5=$info['photo5'];
							
					 //echo $pic1;
					  
					 
					 if (!empty($info['photo']))
					 {
						?>
					<li><img src="<?php echo $pic1; ?>" height='150' width='150' > </li>					
					<?php
					}
					 if (!empty($info['photo2']))
					 {
						?>
					<li><img src="<?php echo $pic2; ?>" height='150' width='150' > </li>					
					<?php
					}
					if (!empty($info['photo3']))
					 {
						?>
					<li><img src="<?php echo $pic3; ?>" height='150' width='150' > </li>					
					<?php
					}					
					 if (!empty($info['photo4']))
					 {
						?>
					<li><img src="<?php echo $pic4; ?>" height='150' width='150' > </li>					
					<?php
					}
					 if (!empty($info['photo5']))
					 {
						?>
					<li><img src="<?php echo $pic5; ?>" height='150' width='150' > </li>					
					<?php
					}					
					?>
								
							
							</ul>
							<!-- end Basic jQuery Slider -->

						  </div>
						  <!-- End outer wrapper -->
						  
						  <!-- attach the plug-in to the slider parent element and adjust the settings as required -->
						  <script class="secret-source">
							jQuery(document).ready(function($) {
							  
							  $('#banner-slide').bjqs({
								animtype      : 'slide',
								height        : 240,
								width         : 490,
								responsive    : true,
								randomstart   : true
							  });
							  
							});
						  </script>

						</div>
					 
						
						
					 <?php
					print "<br>";
					print "<br>";
					 Print "<img src='images/product_desc.png' height='25' width='25'>&nbsp&nbsp</b><td>".$info['description'] . " <br><br><br>";
					 
					//print '<a href="market_img_fetch.php?id=' . $info['sno'] . '">go to link</a>';
					 } 

							
					 ?> 
			</div>
		</div>
	</div>
	</div>
	</div>
	<div id="footer">
		<center>
		<a href="#1"><img id="img12"src="images/uparrow1.png" alt="Img" height="60" width="60" ></a>
		</center>	
		<div id="footnote">
			<div class="clearfix">
				<div class="connect">
				<a href="https://www.facebook.com/pages/Agricultural-Life/1411377029126080?skip_nax_wizard=true" class="facebook"></a><a href="https://twitter.com/AgriculturalLif" class="twitter"></a>				
				</div>
				<center>
				<p style="color:white">
				
					© Copyright 2014 <i> Agricultural Life </i>. All Rights Reserved. &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a href="faq.html" >FAQ</a> &nbsp |&nbsp <a href="aboutal.html" > About AL </a> &nbsp | &nbsp  <a href="termsofuse.html"  >Terms of Use </a> &nbsp |&nbsp  <a href="marketingrules.html"> Marketing Rules </a> &nbsp| &nbsp <a href="marketingtips.html" > Marketing Tips </a> &nbsp| &nbsp <a href="contactal.html"> Contact AL <a>
				
				</p>
				</center>
			</div>
		</div>
	</div>
</body>
</html>
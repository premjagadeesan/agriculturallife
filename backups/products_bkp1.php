<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
<meta name="viewport" content="width=device-width">

	<meta name="Keywords" content="agriculture tutorial,agriculture information,agriculture market,agriculture forum,agriculture,agricultural technologies,agriculture advertisement,agriculture buy,agriculture sell,agriculture tips,agriculture techniques">

	<meta name="Description" content="to buy,to sell agriculture products, to buy and to sell crops,fruits,vegetables">
	<title>Agricultural Life</title>
	<link rel="icon" type="image/ico" href="images/favicon.ico"/>
	<link rel="stylesheet" href="css/style.css" type="text/css">
	<style type="text/css">
		code{ padding:10px 8px; margin:3px 0; display:block; background-color:#333; color:#eee; }
		body{ margin:0; padding:0; font-size:12px; font-family:arial; }
		
		
		.header {
z-index:9999;
max-width: 960px;
margin: 0 auto; left:0px; right:0px;
float:clear;
top: 0;
width: 100%;
height: 60px;
text-align:left;
text-decoration: none;
padding-top: 10px;

/* Adds shadow to the bottom of the bar */
-webkit-box-shadow: 0px 5px 8px 0px #000000;
-moz-box-shadow: 0px 0px 8px 0px #000000;
box-shadow: 0px 0px 8px 0px #000000;
/* Adds the transparent background */
background-color: rgba(1, 1, 1, 0.8);
color: rgba(1, 1, 1, 0.8);
}

.header a {
font-size: 14px;
padding-left: 15px;
padding-right: 15px;
text-decoration: none;
color:white;
font-family: "Helvetica Neue", Arial, sans-serif;
}

.header a:hover {
color: aqua;
}
		
		.content{ padding:10px 10px 30px; width:960px; margin:0 auto; background-color:#ffffff; position:relative; }
			.wrap{ min-height:400px; padding:20px; background-color:#E0E0D1; margin:0 330px; color:#333; }
				.wrap h2{ font-size:2em; }
				.wrap ul{ list-style:none; padding:0; }
					.wrap ul li{ margin-bottom:20px; }
						.wrap ul li h3{ font-size:1.2em; padding:0; margin:0; }
			.ad{ position:absolute; top:10px; right:10px; width:240px; height:100px; background:#8B0000; color:#FFF; font-size:2em; text-align:center; line-height:100px; }
			.menu{ position:absolute; left:10px; padding:15px; width:290px; background:#f1f1f1;color:#FFF; }
				.menu .easing{ overflow:hidden; margin:10px 0; }
				.menu .easing button{ font-size:1.1em; float:left; clear:left; line-height:1; cursor:pointer; }
				.menu h3{ border-bottom:1px solid #FFF; padding:3px 8px; margin:0; }
				.menu label{ display:block; overflow:hidden; margin-bottom:5px; line-height:1.6; }
				.menu label input{ float:right; }
				.menu label input[type=text]{ width:60px; }
			.menu2_wrap{ position:absolute; top:10px; right:0; bottom:30px; }
			.menu2{ right:10px; left:auto; background-color:#f1f1f1; width:600px; height:100px; }
			.transition200 .duration,
			.transition200 .delay{ visibility:hidden; }
			.transition200{ transition:200ms; -webkit-transition:200ms; -o-transition:200ms; }
		
		.footer {
	margin-top:20px;
}
.footer .section {
	float: left;
	min-height: 146px;
	width: 259px;
	border-left: 1px solid #c2c2c2;
	padding: 30px;
}
.footer .section h4 {
	color: #626262;
	font: bold 12px/24px Arial, Helvetica, sans-serif;
	margin: 0;
	text-transform: uppercase;
}
.footer .section p {
	font-size: 12px;
	margin: 0;
}
.footer .section:first-child {
	border: 0;
}
.footer .contact p span {
	text-transform: uppercase;
}
#footnote {
	background: url(images/bg-footnote.jpg) repeat-x left top;
	border-top: 1px solid #fff;
	padding: 6px 0 3px;
	width:100%;
}
#footnote p {
	color: #b5c1aa;
	font: 11px/30px Arial, Helvetica, sans-serif;
	margin: 0;
	padding-right: 10px;
	text-align: right;
	text-decoration: none;
	text-transform: uppercase;
}
#footnote .connect {
	float: left;
	display: inline-block;
	margin: 0 10px;
	padding: 6px 0;
}
#footnote .connect a {
	display: inline-block;
	height: 18px;
	width: 18px;
	margin-right: 6px;
}
#footnote .connect a.facebook {
	background-position: 0 -112px;
}
#footnote .connect a.twitter {
	background-position: 0 -140px;
}
#footnote .connect a.googleplus {
	background-position: 0 -168px;
}
#footnote .connect a.pinterest {
	background-position: 0 -196px;
}
	</style>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<script src='js/stickyfloat.js'></script>
	
	
	
</head>
<body>
	<div class="header">
	<a href="index.html"><img src="agrilifeimage/frontagrilogo.png" alt="LOGO" height="50" width="300"></a>	
		
					<a href="index.html">Home</a>
				
					<a href="agriculturaltechnologies.html">Agri Technologies</a>
				
					<a href="tutorials.html">Tutorials</a>					
				
					<a href="informations.html">Informations</a>
				
					<a href="market.php" style="color:aqua;">Market</a>
				
					<a href="forum.php">Forum</a>
	</div>
	
	<div class="content">
		<div class="menu" sytle="padding-top:300px">
			<?php
					$subprdt=$_GET['to_id'];
					$prdt=$_GET['to_id2'];									
												
					?>
					<b style="color:#000000;font-size:20px">Choosen Category</b><br><br>			
					<b style="color:#ff0000;font-size:20px"><?php echo $prdt; ?></b>	
			
						<?php
						if($subprdt != 'Other')
								{
								?>
						
						<b style="color:#0fff00;font-size:20px">&nbsp:&nbsp</b>
						<b style="color:#006699;font-size:20px"><?php echo $subprdt; ?></b><br><br>
						<hr>
						<?php
						}
						$self = $_SERVER['PHP_SELF'];
						
						
						?>
						<b style="color:#000000;font-size:20px">States</b>
																				
						 <form action="../">
						 <select class="txtinput1" onchange="window.open(this.options[this.selectedIndex].value,'_top')">
						 
						 	<?php
						 
						 print ' <option value="products.php?to_id2='.$prdt.'&to_id='.$subprdt .'">Select...</option>';
						 print ' <option style="color:#ff0000; "value="products.php?to_id2='.$prdt.'&to_id='.$subprdt .'">All States</option>';
						 print ' <option value="products.php?state=Andaman and Nicobar Islands&to_id2='.$prdt.'&to_id='.$subprdt .'">Andaman and Nicobar Islands</option>';
						 print ' <option value="products.php?state=Andhra Pradesh&to_id2='.$prdt.'&to_id='.$subprdt .'">Andhra Pradesh</option>';
						 print ' <option value="products.php?state=Arunachal Pradesh&to_id2='.$prdt.'&to_id='.$subprdt .'">Arunachal Pradesh</option>';
						 print ' <option value="products.php?state=Bihar&to_id2='.$prdt.'&to_id='.$subprdt .'">Bihar</option>';
						 print ' <option value="products.php?state=Chandigarh&to_id2='.$prdt.'&to_id='.$subprdt .'">Chandigarh</option>';
						 print ' <option value="products.php?state=Dadra and Nagar Haveli&to_id2='.$prdt.'&to_id='.$subprdt .'">Dadra and Nagar Haveli</option>';
						 print ' <option value="products.php?state=Daman and Diu&to_id2='.$prdt.'&to_id='.$subprdt .'">Daman and Diu</option>';
						 print ' <option value="products.php?state=Delhi&to_id2='.$prdt.'&to_id='.$subprdt .'">Delhi</option>';
						 print ' <option value="products.php?state=Goa&to_id2='.$prdt.'&to_id='.$subprdt .'">Goa</option>';
						 print ' <option value="products.php?state=Gujarat&to_id2='.$prdt.'&to_id='.$subprdt .'">Gujarat</option>';
						 print ' <option value="products.php?state=Haryana&to_id2='.$prdt.'&to_id='.$subprdt .'">Haryana</option>';
						 print ' <option value="products.php?state=Himachal Pradesh&to_id2='.$prdt.'&to_id='.$subprdt .'">Himachal Pradesh</option>';
						 print ' <option value="products.php?state=Jammu and Kashmir&to_id2='.$prdt.'&to_id='.$subprdt .'">Jammu and Kashmir</option>';
						 print ' <option value="products.php?state=Jharkhand&to_id2='.$prdt.'&to_id='.$subprdt .'">Jharkhand</option>';
						 print ' <option value="products.php?state=Karnataka&to_id2='.$prdt.'&to_id='.$subprdt .'">Karnataka</option>';
						 print ' <option value="products.php?state=Kerala&to_id2='.$prdt.'&to_id='.$subprdt .'">Kerala</option>';
						 print ' <option value="products.php?state=Lakshadweep&to_id2='.$prdt.'&to_id='.$subprdt .'">Lakshadweep</option>';
						 print ' <option value="products.php?state=Madhya Pradesh&to_id2='.$prdt.'&to_id='.$subprdt .'">Madhya Pradesh</option>';
						 print ' <option value="products.php?state=Maharashtra&to_id2='.$prdt.'&to_id='.$subprdt .'">Maharashtra</option>';						
						 print ' <option value="products.php?state=Manipur&to_id2='.$prdt.'&to_id='.$subprdt .'">Manipur</option>';
						 print ' <option value="products.php?state=Meghalaya&to_id2='.$prdt.'&to_id='.$subprdt .'">Meghalaya</option>';
						 print ' <option value="products.php?state=Mizoram&to_id2='.$prdt.'&to_id='.$subprdt .'">Mizoram</option>';
						 print ' <option value="products.php?state=Nagaland&to_id2='.$prdt.'&to_id='.$subprdt .'">Nagaland</option>';
						 print ' <option value="products.php?state=Orissa&to_id2='.$prdt.'&to_id='.$subprdt .'">Orissa</option>';
						 print ' <option value="products.php?state=Pondicherry&to_id2='.$prdt.'&to_id='.$subprdt .'">Pondicherry</option>';
						 print ' <option value="products.php?state=Punjab&to_id2='.$prdt.'&to_id='.$subprdt .'">Punjab</option>';
						 print ' <option value="products.php?state=Rajasthan&to_id2='.$prdt.'&to_id='.$subprdt .'">Rajasthan</option>';
						 print ' <option value="products.php?state=Sikkim&to_id2='.$prdt.'&to_id='.$subprdt .'">Sikkim</option>';
					     print ' <option value="products.php?state=Tamil Nadu&to_id2='.$prdt.'&to_id='.$subprdt .'">Tamil Nadu</option>';
					     print ' <option value="products.php?state=Tripura&to_id2='.$prdt.'&to_id='.$subprdt .'">Tripura</option>';
						 print ' <option value="products.php?state=Uttaranchal&to_id2='.$prdt.'&to_id='.$subprdt .'">Uttaranchal</option>';
						 print ' <option value="products.php?state=Uttar Pradesh&to_id2='.$prdt.'&to_id='.$subprdt .'">Uttar Pradesh</option>';
						 print ' <option value="products.php?state=West Bengal&to_id2='.$prdt.'&to_id='.$subprdt .'">West Bengal</option>';					 
														
					?>	
					</select>
					</form>
					<hr>
					<b style="color:#000000;font-size:20px">Price Range</b><br><br>	
					
					
					<?php
					
					$ipstate=null;
					
					if(isset($_GET['state']))
					{
						$ipstate=$_GET['state'];
						//echo $pageNum;
					}	
										
					$self = $_SERVER['PHP_SELF'];		
					
					print '<form    method="post" action="'.$self.'? to_id2='.$prdt.' & to_id='.$subprdt .' & state='.$ipstate.' ">';


					?>	
				  			 
				 
				 
					
				<input type="text"  name="minprice" style="width:80px;height:30px" data-validetta="required,minLength[2],maxLength[30]" class="txtinput" /> 
					<b style="color:#006699;font-size:20px">-</b>
					<input type="text"  name="maxprice" style="width:80px;height:30px"   data-validetta="required,minLength[2],maxLength[30]" class="txtinput" /> &nbsp&nbsp
					

				<input type="submit" name="View" Value="View" style="width:80px;height:38px">				
				</form>

			
					
			
		</div>
		
		
		
		<div class='menu2_wrap'>
			<div class="menu menu2">
				
				<?php 
					 // Connects to your Database 
					 include 'connection.php';
					
					if(isset($_GET['state']))
					{
						$ipstate=$_GET['state'];
						//echo $pageNum;
					}	
					
					 if (isset($_POST["minprice"])) {
					$startprice = $_POST["minprice"]; // sender
					$endprice = $_POST["maxprice"];										
				  }
					
					
														
					$rowsPerPage =10;
					
					$pageNum = 1;
					// if $_GET['page'] defined, use it as page number
					if(isset($_GET['page']))
					{
						$pageNum = $_GET['page'];
						//echo $pageNum;
					}
					// counting the offset
					$offset = ($pageNum - 1) * $rowsPerPage;
													
					if (!empty($subprdt)){
										
					$data = mysql_query("SELECT * FROM advertisement where subproduct='$subprdt' LIMIT $offset, $rowsPerPage ; ") 
					 or die(mysql_error()); 
					}
					if (!empty($subprdt) && !empty($ipstate) ){
										
					$data = mysql_query("SELECT * FROM advertisement where state='$ipstate' and subproduct='$subprdt' LIMIT $offset, $rowsPerPage ; ") 
					 or die(mysql_error()); 
					 
					Print "<b style='color:#ff9900;font-weight:bold;font-size:20px'>";		
					echo "State:";				
					Print "</b>";
					 
					
					Print "<b style='color:#006699;font-weight:bold;font-size:20px'>";
					 
					echo $ipstate;
					
					echo "&nbsp&nbsp>>&nbsp&nbsp";
					
					Print "</b>";
					
					
					}
					
										
					if (!empty($subprdt) && !empty($startprice) && !empty($endprice)){
										
					$data = mysql_query("SELECT * FROM advertisement where price='$startprice' and subproduct='$subprdt' LIMIT $offset, $rowsPerPage ; ") 
					 or die(mysql_error()); 
					 			
					Print "<b style='color:#ff9900;font-weight:bold;font-size:20px'>";		
					echo "Price:";				
					Print "</b>";
					
					Print "<b style='color:#006699;font-weight:bold;font-size:20px'>";
					//Print "<img src='images/indianrupee.png' height='20' width='20'>";
					echo $startprice; 
					echo "&nbsp-&nbsp";
					//Print "<img src='images/indianrupee.png' height='20' width='20'>";
					echo $endprice;
					Print "</b>";
					
					
					
									
					}
					
					if (!empty($subprdt) && !empty($startprice) && !empty($endprice) && !empty($ipstate) ){
										
					$data = mysql_query("SELECT * FROM advertisement where state='$ipstate' and price='$startprice' and subproduct='$subprdt' LIMIT $offset, $rowsPerPage ; ") 
					 or die(mysql_error()); 
					
					}
				?>
				
			</div>
		</div>
		
				
		<div class="wrap" style="width:590px;margin-top:120px;">		
			<div class="addisplay">
								 
					
				<?php
										
					 while($info = mysql_fetch_array( $data )) 
					 { 
					
					 
					 
					 print "<table style='background:#ffffff;font-size:14px;font-family:'Helvetica Neue', Arial, sans-serif;height:50px;margin-left:330px;'>";
					 print "<tr>";
					 print "<COLGROUP ALIGN=top'>";
					 print "<td style='width:150px;'>";
					 if (!empty($info['photo']))
						echo '<img src="market_img_fetch.php?id=' . $info['sno'] . '" height="150" width="150">';
					 else
						print "<img src=agrilifeimage/defaultimage.gif height='150' width='150'>";
				 		print "</td>"; 
										 
					 
					Print "<td style='width:500px;vertical-align: top;'>";
					
					print "<h2 style='font-size:20px;'>";
					Print '<a style="color:#006789;text-decoration:none;" href="testphp.php?to_id='.$info['sno'] .'">'.$info['product'] .":&nbsp&nbsp".$info['subproduct'] . '</a>'; 	
					print "</h2>";
					
								 
					 $string=$info['description'];
					 if (strlen($string) > 100) {

					// truncate string
					$stringCut = substr($string, 0, 150);

					// make sure it ends in a word so assassinate doesn't become ass...
					$string = substr($stringCut, 0, strrpos($stringCut, ' ')).'...'; 
						}
						
					echo $string;
					
					
					$timestamp= $info['time2'];
					$test = new DateTime($timestamp);
					Print "<div style='padding-top:20px;color:#ff9900;font-weight:bold'>";
					echo date_format($test, 'F j, Y, g:i a');
					Print "</div>";
					
					
					
					
					 if (!empty($info['totalquanity']))
					 {
					Print "<td style='width:200px;'>";
					 Print "".$info['totalquanity'] . "";
					 Print "&nbsp&nbsp-".$info['quantity'] . " <br><br>";
					 }
					 if (!empty($info['price']))
					 {
					 Print "<img src='images/indianrupee.png' height='10' width='10'>&nbsp".$info['price'] . " <br>";	
					 }
					Print "</td>";					 
					?>
					
					 <?php
					 
					 print "</table>";
					
					print "<br>";
					
					 
					 }
					
					 print "<br>";
					 
					 
					 
					$total_records =  mysql_query("SELECT COUNT(DISTINCT sno) FROM advertisement where subproduct='$subprdt' ;") 
					 or die(mysql_error());
					 
					 
					 
					 
					 if (!empty($subprdt)){
										
					$result = mysql_query("SELECT sno FROM advertisement where subproduct='$subprdt' ");  
					}
					if (!empty($subprdt) && !empty($ipstate) ){
										
					 $result = mysql_query("SELECT sno FROM advertisement where state='$ipstate' and subproduct='$subprdt' "); 
					}
					 
					 
					 
					$num_rows = mysql_num_rows($result); 
					// Display the results 
								
					if($num_rows == null)
					{
					Print "<b style='color:#ff0000;font-weight:bold;font-size:20px'>";
					echo "No Advertisements Found";
					Print "</b>";
					}
					
					$maxPage = ceil($num_rows/$rowsPerPage);
					
					
				
					
					//print "maximum page:";
					//echo $maxPage;
					// print the link to access each page
					$self = $_SERVER['PHP_SELF'];
					$nav  = '';

					for($page = 1; $page <= $maxPage; $page++)
					{
					   if ($page == $pageNum)
					   {
						  $nav .= " $page "; // no need to create a link to current page
					   }
					   else
					   {
						  $nav .= " <a href=\"$self?page=$page&to_id2=$prdt&to_id=$subprdt\">$page</a> ";
					   } 
					}
					
					 if ($pageNum > 1)
					{
					   $page  = $pageNum - 1;
					   $prev  = " <a href=\"$self?page=$page&to_id2=$prdt&to_id=$subprdt\">Prev</a> ";					   

					   $first = " <a href=\"$self?page=1&to_id2=$prdt&to_id=$subprdt\">First Page</a> ";
					} 
					else
					{
					   $prev  = '&nbsp;'; // we're on page one, don't print previous link
					   $first = '&nbsp;'; // nor the first page link
					}
					if ($pageNum < $maxPage)
					{
					   $page = $pageNum + 1;
					   $next = " <a href=\"$self?page=$page&to_id2=$prdt&to_id=$subprdt\">Next</a> ";

					   $last = " <a href=\"$self?page=$maxPage&to_id2=$prdt&to_id=$subprdt\">Last Page</a> ";
					} 
					else
					{
					   $next = '&nbsp;'; // we're on the last page, don't print next link
					   $last = '&nbsp;'; // nor the last page link
					}
					// print the navigation link
					?> 
					
					
					
					<?php
								
					print '<ul class="tsc_pagination tsc_paginationC tsc_paginationC01" style="align:center;">';
					print '	<li class="first link" id="first">';
					echo $first;							
					print '</li>';
					
					print '	<li class="first link" id="first">';
					echo $prev;							
					print '</li>';
					
					print '	<li class="first link" id="first">';
					echo $next;						
					print '</li>';	
					
					print '	<li class="first link" id="first">';
					echo $last;							
					print '</li>';						
										
					 ?> 
					
									
				</div>					
				</div>
			</div>		
		</div>
	
	
	<div class="footer">	
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
				
					© Copyright 2014 <i> Agricultural Life </i>. All Rights Reserved. &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a href="faq.html" >FAQ</a> &nbsp |&nbsp <a href="aboutal.html" > About AL </a> &nbsp | &nbsp  <a href="termsofuse.html"  >Terms of Use </a> &nbsp |&nbsp  <a href="marketingrules.html"> Marketing Rules </a> &nbsp| &nbsp <a href="marketingtips.html" > Marketing Tips </a> &nbsp| &nbsp <a href="contactal.html" id="active"> Contact AL <a>
				
				</p>
				</center>
			</div>
		</div>
	</div>	
	<script>
		/*
		* jQuery easing functions (for this demo)
		*/
		jQuery.extend( jQuery.easing,{
			def: 'easeOutQuad',
			swing: function (x, t, b, c, d) {
				//alert(jQuery.easing.default);
				return jQuery.easing[jQuery.easing.def](x, t, b, c, d);
			},
			easeInQuad: function (x, t, b, c, d) {
				return c*(t/=d)*t + b;
			},
			easeOutQuad: function (x, t, b, c, d) {
				return -c *(t/=d)*(t-2) + b;
			},
			easeInOutQuad: function (x, t, b, c, d) {
				if ((t/=d/2) < 1) return c/2*t*t + b;
				return -c/2 * ((--t)*(t-2) - 1) + b;
			},
			easeOutElastic: function (x, t, b, c, d) {
				var s=1.70158;var p=0;var a=c;
				if (t==0) return b;  if ((t/=d)==1) return b+c;  if (!p) p=d*.3;
				if (a < Math.abs(c)) { a=c; var s=p/4; }
				else var s = p/(2*Math.PI) * Math.asin (c/a);
				return a*Math.pow(2,-10*t) * Math.sin( (t*d-s)*(2*Math.PI)/p ) + c + b;
			},
			easeInOutElastic: function (x, t, b, c, d) {
				var s=1.70158;var p=0;var a=c;
				if (t==0) return b;  if ((t/=d/2)==2) return b+c;  if (!p) p=d*(.3*1.5);
				if (a < Math.abs(c)) { a=c; var s=p/4; }
				else var s = p/(2*Math.PI) * Math.asin (c/a);
				if (t < 1) return -.5*(a*Math.pow(2,10*(t-=1)) * Math.sin( (t*d-s)*(2*Math.PI)/p )) + b;
				return a*Math.pow(2,-10*(t-=1)) * Math.sin( (t*d-s)*(2*Math.PI)/p )*.5 + c + b;
			},
			easeInBack: function (x, t, b, c, d, s) {
				if (s == undefined) s = 1.70158;
				return c*(t/=d)*t*((s+1)*t - s) + b;
			},
			easeOutBack: function (x, t, b, c, d, s) {
				if (s == undefined) s = 1.70158;
				return c*((t=t/d-1)*t*((s+1)*t + s) + 1) + b;
			},
			easeInOutBack: function (x, t, b, c, d, s) {
				if (s == undefined) s = 1.70158; 
				if ((t/=d/2) < 1) return c/2*(t*t*(((s*=(1.525))+1)*t - s)) + b;
				return c/2*((t-=2)*t*(((s*=(1.525))+1)*t + s) + 2) + b;
			}
		});
		
		// init the plug-in and bind it to the #menu element
		//------------------------------------------------------
		$('.menu').stickyfloat();
		$('.menu2').stickyfloat('update',{ duration:0 });
		
		
		// Stuff which are for this DEMO page only
		//------------------------------------------------------
		$('.menu').on('click', 'button', function(){
			var elem = $(this).parents('.menu');
			elem.stickyfloat('update', { easing:this.innerHTML });
		});
		
		$('.menu input').on('change', function(){
			var elem = $(this).parents('.menu'),
				prop = this.className,
				value = this.value,
				options = {};

			if( (value|0) === parseInt(value) ) // if number, normalize
				value = value|0;

			options[prop] = value;
			elem.stickyfloat('update', options);
		});
		
		// after page refresh, make sure the values are returned to their defaults
		$('.menu :text').each(function(){
			$(this).val(this.defaultValue);
		});
		
		$('.menu :checkbox').on('change', function(){
			var elem = $(this).parents('.menu'),
				prop = this.className,
				options = {};

			options[prop] = this.checked ? true : false;
			elem.stickyfloat('update', options);
		});

		$('.menu .cssTransition:checkbox').on('change', function(){
			var elem = $(this).parents('.menu'),
				val = this.checked ? 0 : elem.find('.duration').val();
			
			elem.toggleClass('transition200');
			elem.stickyfloat('update',{cssTransition: this.checked});
		});
		
		$('.menu :checkbox').each(function(){
			$(this).prop('checked', this.defaultChecked);
		});
</script>
</body>
</html>
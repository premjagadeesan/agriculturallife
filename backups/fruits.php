<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width">

	<meta name="Keywords" content="agriculture tutorial,agriculture information,agriculture market,agriculture forum,agriculture,agricultural technologies,agriculture advertisement,agriculture buy,agriculture sell,agriculture tips,agriculture techniques">

	<meta name="Description" content="to buy,to sell agriculture products, to buy and to sell crops,fruits,vegetables">
	<title>Agricultural Life</title>
	<link rel="icon" type="image/ico" href="images/favicon.ico"/>
	<link rel="stylesheet" href="css/style.css" type="text/css">
	
<style>
h3{
font-size:15px;
	text-align: center;
	text-decoration: none;
	text-transform: uppercase;
}
b{
color:#000000;
}
.sidebar {
	float: left;
	width: 190px;
	padding-right: 18px;
}
.sidebar ul {
	list-style: none;
	margin: 0;
	padding: 0;
}
.sidebar ul li {
	background-position: left bottom;
	background-repeat: repeat-x;
	display: inline-block;
	min-height: 36px;
	width: 180px;
	padding: 6px 0 10px 10px;
}
.sidebar ul li > a span.box {
	float: left;
	margin-right: 20px;
}
.sidebar ul li a {
	color: #755c02;
	font: 13px/24px Arial, Helvetica, sans-serif;
	text-decoration: none;
}
.sidebar ul li b {
	color: #ffffff;
	font: 13px/24px Arial, Helvetica, sans-serif;
	text-decoration: none;
}
</style>
</head>
<body>
	<div id="header">
		<div class="clearfix">			
			<div id="navigation" style="text-decoration: none;">
			
					<a href="index.html"><img src="agrilifeimage/frontagrilogo.png" alt="LOGO" height="50" width="300"></a>	
		
					<a href="index.html">Home</a>
				
					<a href="agriculturaltechnologies.html">Agri Technologies</a>
				
					<a href="tutorials.html">Tutorials</a>					
				
					<a href="informations.html">Informations</a>
				
					<a href="market.php" style="color:aqua;">Market</a>
				
					<a href="forum.php">Forum</a>
            </div>				
		</div>
	</div>
	<div id="1">
	<div id="contents">
		<div class="clearfix">	
		
		<a href="submitad.html"><img src="images/adlogo.png" alt="LOGO" height="120" width="200" style="margin-left:700px;"></a>	
								
			<div id="contents">
		<div class="clearfix">
			<div class="sidebar">
				<a href="market.php"><h1>Products</h1></a>
					<ul>
						<li>
							<a href="crop.php"><b >Crops</b></a>
						</li>
						<li>
							<a href="vegetables.php"><b>Vegetables</b></a>
						</li>
						<li>
							<a href="fruits.php"><b id='active'>Fruits</b></a>
						</li>																	
					</ul>
			</div>
			<div class="main">		
							
								 <?php 
					 // Connects to your Database 
					 mysql_connect("localhost", "localhost", "") or die(mysql_error()); 
					 mysql_select_db("test") or die(mysql_error());   
					 $data = mysql_query("SELECT * FROM advertisement where product=2 ORDER BY sno DESC; ") 
					 or die(mysql_error()); 
					
					 while($info = mysql_fetch_array( $data )) 
					 { 
					 print "<ul class='news'>";					 
					 print "<li>";
					 print "<div class='box'>";
					 print "<img src=http://localhost/Agricultural%20Life/adimages/".$info['photo'] .  " height='245' width='213'>";				 
					 print "</div>";					 
					 Print "<h3>".$info['subproduct'] . " </h3> "; 
					 Print "<img src='images/product_desc.png' height='15' width='15'>&nbsp<b>Description&nbsp&nbsp&nbsp:&nbsp&nbsp</b><td>".$info['description'] . " <br><br><br>";
					 Print "<img src='images/quantity.png' height='15' width='15'>&nbsp<b>Quantity&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp:&nbsp&nbsp</b><td>".$info['totalquanity'] . "";
					 Print "&nbsp&nbsp-".$info['quantity'] . " <br>";
					 Print "<img src='images/price.png' height='15' width='15'>&nbsp<b>Total Price&nbsp&nbsp:&nbsp&nbsp</b><td>".$info['price'] . " <br>";	
					 Print "<img src='images/user.png' height='15' width='15'>&nbsp<b>Name &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp:&nbsp&nbsp</b><td>".$info['name'] . " <br>";
					 Print "<img src='images/email.png' height='15' width='15'>&nbsp<b>Email Id&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<td>:&nbsp&nbsp</b>".$info['emailid'] . " <br>"; 
					 Print "<img src='images/phone.png' height='15' width='15'>&nbsp<b>Phone No&nbsp&nbsp&nbsp&nbsp<td>:&nbsp&nbsp</b>".$info['phoneno'] . " <br>";					 
					 print "</li>";					
					 print "<br>";
					 print "</ul>";
					 
					 } 
					 
					 
					 ?> 
									
				</div>					
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
				
					© Copyright 2014 <i> Agricultural Life </i>. All Rights Reserved. &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a href="faq.html" >FAQ</a> &nbsp |&nbsp <a href="aboutal.html" > About AL </a> &nbsp | &nbsp  <a href="termsofuse.html"  >Terms of Use </a> &nbsp |&nbsp  <a href="marketingrules.html"> Marketing Rules </a> &nbsp| &nbsp <a href="marketingtips.html" > Marketing Tips </a> &nbsp| &nbsp <a href="contactal.html" id="active"> Contact AL <a>
				
				</p>
				</center>
			</div>
		</div>
	</div>
</body>	
</html>


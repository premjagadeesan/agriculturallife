<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width">

	<meta name="Keywords" content="agriculture tutorial,agriculture information,agriculture market,agriculture forum,agriculture,agricultural technologies,agriculture advertisement,agriculture buy,agriculture sell,agriculture tips,agriculture techniques">

	<meta name="Description" content="to buy,to sell agriculture products, to buy and to sell crops,fruits,vegetables">
	<title>Agricultural Life</title>
	<link rel="icon" type="image/ico" href="images/favicon.ico"/>
	<link rel="stylesheet" href="css/style.css" type="text/css">
	<link rel=”stylesheet” type=”text/css” href=”numlinkstyle.css”>
	<script src="js/jquery-1.8.0.min.js" type="text/javascript" charset="utf-8"></script>
	
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
						
						
						<?php
						
						
						 print '<form name="dropdown">';
						 print ' <select name="list" accesskey="E" id="target">';
						 print ' <option selected>Select...</option>';
						 print ' <option value="state.php?state=Tamil Nadu">state</option>';
						 print ' <option value="http://www.search.com/">Search.com</option>';
						 print ' <option value="http://www.dogpile.com/">Dogpile</option>';
						 print ' <select>';
						 print ' <input type=button value="Go" onclick="goToNewPage(document.dropdown.list)">';
						 print '</form>';						
					?>
						
						print '<a href="testphp.php?to_id='.$info['emailid'] .'">Profile</a>';
						
						<script>
						function goToNewPage() {
							if(document.getElementById('target').value){
								window.location.href = document.getElementById('target').value;
							}
						}
						</script>
						
			</div>
			<div class="main">		
											<?php
						include_once('db.php');
						include_once('function.php');

						if(isset($_GET['pageId']) && !empty($_GET['pageId']))
						{
							$id=$_GET['pageId'];
						}
						else
						{
							$id='0';
						}
						
						echo $id;
						
						$pageLimit=PAGE_PER_NO*$id;
						$query="SELECT * FROM advertisement
						limit $pageLimit,".PAGE_PER_NO;
						//echo $query;
						$res=mysql_query($query);
						$count=mysql_num_rows($res);
						$HTML='';
						if($count > 0)
						{
							while($info = mysql_fetch_array( $res )) 
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
								 
							
								
								print '<a href="testphp.php?to_id='.$info['emailid'] .'">Profile</a>';
								
								 
								 }
						}				    					 
						else
						{
							$HTML='No Data Found';
						}
						echo $HTML;
						?>		
																	 
					<?php
					$content ='<script type="text/javascript" src="js/jquery-1.8.0.min.js"></script>
					<style type="text/css">
					ul.tsc_pagination { margin:4px 0; padding:0px; height:100%; overflow:hidden; font:12px \'Tahoma\'; list-style-type:none; }
					ul.tsc_pagination li { float:left; margin:0px; padding:0px; margin-left:5px; }
					ul.tsc_pagination li:first-child { margin-left:0px; }
					ul.tsc_pagination li a { color:black; display:block; text-decoration:none; padding:7px 10px 7px 10px; }
					ul.tsc_pagination li a img { border:none; }
					ul.tsc_paginationC li a { color:#707070; background:#FFFFFF; border-radius:3px; -moz-border-radius:3px; -webkit-border-radius:3px; border:solid 1px #DCDCDC; padding:6px 9px 6px 9px; }
					ul.tsc_paginationC li { padding-bottom:1px; }
					ul.tsc_paginationC li a:hover,
					ul.tsc_paginationC li a.current { color:#FFFFFF; box-shadow:0px 1px #EDEDED; -moz-box-shadow:0px 1px #EDEDED; -webkit-box-shadow:0px 1px #EDEDED; }
					ul.tsc_paginationC01 li a:hover,
					ul.tsc_paginationC01 li a.current { color:#893A00; text-shadow:0px 1px #FFEF42; border-color:#FFA200; background:#FFC800; background:-moz-linear-gradient(top, #FFFFFF 1px, #FFEA01 1px, #FFC800); background:-webkit-gradient(linear, 0 0, 0 100%, color-stop(0.02, #FFFFFF), color-stop(0.02, #FFEA01), color-stop(1, #FFC800)); }
					ul.tsc_paginationC li a.In-active {
					   pointer-events: none;
					   cursor: default;
					}
					</style>


					<script type="text/javascript">
					function changePagination(pageId,liId){
						 $(".flash").show();
						 $(".flash").fadeIn(400).html
									(\'Loading <img src="image/ajax-loading.gif" />\');
						 var dataString = \'pageId=\'+ pageId;
						 $.ajax({
							   type: "GET",
							   url: "newmarket.php",
							   data: dataString,
							   cache: false,
							   success: function(result){
									 $(".flash").hide();
									 $(".link a").removeClass("In-active current") ;
									 $("#"+liId+" a").addClass( "In-active current" );
									 $("#pageData").html(result);
							   }
						  });
					}
					</script>';

					include_once('db.php');
					include_once('function.php');
					
					 
					$query="SELECT sno FROM advertisement ";
					$res=mysql_query($query);
					$count=mysql_num_rows($res);
					 
					echo $count;
					if($count > 0){
						  $paginationCount=getPagination($count);						 
					}
					
					echo $paginationCount;
					
					$content .='<div id="pageData"></div>';
					if($count > 0){

					$content .='<ul class="tsc_pagination tsc_paginationC tsc_paginationC01">
						<li class="first link" id="first">
							<a  href="javascript:void(0)" onclick="changePagination(\'0\',\'first\')">F i r s t</a>
							
						</li>';
						print "working first";
						for($i=0;$i<$paginationCount;$i++){
						
							$content .='<li id="'.$i.'_no" class="link">
							  <a  href="javascript:void(0)" onclick="changePagination(\''.$i.'\',\''.$i.'_no\')">
								  '.($i+1).'
							  </a>
						</li>';
						}
						
						$content .='<li class="last link" id="last">
							 <a href="javascript:void(0)" onclick="changePagination(\''.($paginationCount-1).'\',\'last\')">L a s t</a>
						</li>
						<li class="flash"></li>
					</ul>';
					
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


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
	
<style>
h3{
font-size:15px;
color: #777;
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
<script>
function goToNewPage() {
    if(document.getElementById('target').value){
        window.location.href = document.getElementById('target').value;
    }
}
</script>

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
		
		<a href="submitad.html"><img src="images/adlogo.jpg" alt="LOGO" height="40" width="150" style="margin-left:750px;"></a><br>	<br>	
			<div class="marketmain">
			<div class="sidebar">
														
					<?php
					$subprdt=$_GET['to_id'];
					$prdt=$_GET['to_id2'];									
												
					?>
					<b style="color:#000000;font-size:30px">Choosen Category</b><br><br>			
					<b style="color:#ff0000;font-size:30px"><?php echo $prdt; ?></b>	
			
						<?php
						if($subprdt != 'Other')
								{
								?>
						
						<b style="color:#0fff00;font-size:30px">&nbsp>&nbsp</b><br>
						<b style="color:#006699;font-size:30px">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<?php echo $subprdt; ?></b><br><br>
						<?php
						}
						?>
					<b style="color:#000000;font-size:30px">Choose State</b><br><br>
					<?php																
						 print '<form name="dropdown">';
						 print ' <select name="list" accesskey="E" id="target" class="txtinput">';
						 print ' <option value="state.php?state=Andaman and Nicobar Islands&to_id2='.$prdt.'&to_id='.$subprdt .'">Select...</option>';
						  print ' <option value="state.php?state=Andaman and Nicobar Islands&to_id2='.$prdt.'&to_id='.$subprdt .'">Andaman and Nicobar Islands</option>';
						 print ' <option value="state.php?state=Andhra Pradesh&to_id2='.$prdt.'&to_id='.$subprdt .'">Andhra Pradesh</option>';
						 print ' <option value="state.php?state=Arunachal Pradesh&to_id2='.$prdt.'&to_id='.$subprdt .'">Arunachal Pradesh</option>';
						 print ' <option value="state.php?state=Bihar&to_id2='.$prdt.'&to_id='.$subprdt .'">Bihar</option>';
						 print ' <option value="state.php?state=Chandigarh&to_id2='.$prdt.'&to_id='.$subprdt .'">Chandigarh</option>';
						 print ' <option value="state.php?state=Dadra and Nagar Haveli&to_id2='.$prdt.'&to_id='.$subprdt .'">Dadra and Nagar Haveli</option>';
						 print ' <option value="state.php?state=Daman and Diu&to_id2='.$prdt.'&to_id='.$subprdt .'">Daman and Diu</option>';
						 print ' <option value="state.php?state=Delhi&to_id2='.$prdt.'&to_id='.$subprdt .'">Delhi</option>';
						 print ' <option value="state.php?state=Goa&to_id2='.$prdt.'&to_id='.$subprdt .'">Goa</option>';
						 print ' <option value="state.php?state=Gujarat&to_id2='.$prdt.'&to_id='.$subprdt .'">Gujarat</option>';
						 print ' <option value="state.php?state=Haryana&to_id2='.$prdt.'&to_id='.$subprdt .'">Haryana</option>';
						 print ' <option value="state.php?state=Himachal Pradesh&to_id2='.$prdt.'&to_id='.$subprdt .'">Himachal Pradesh</option>';
						 print ' <option value="state.php?state=Jammu and Kashmir&to_id2='.$prdt.'&to_id='.$subprdt .'">Jammu and Kashmir</option>';
						 print ' <option value="state.php?state=Jharkhand&to_id2='.$prdt.'&to_id='.$subprdt .'">Jharkhand</option>';
						 print ' <option value="state.php?state=Karnataka&to_id2='.$prdt.'&to_id='.$subprdt .'">Karnataka</option>';
						 print ' <option value="state.php?state=Kerala&to_id2='.$prdt.'&to_id='.$subprdt .'">Kerala</option>';
						 print ' <option value="state.php?state=Lakshadweep&to_id2='.$prdt.'&to_id='.$subprdt .'">Lakshadweep</option>';
						 print ' <option value="state.php?state=Madhya Pradesh&to_id2='.$prdt.'&to_id='.$subprdt .'">Madhya Pradesh</option>';
						 print ' <option value="state.php?state=Maharashtra&to_id2='.$prdt.'&to_id='.$subprdt .'">Maharashtra</option>';						
						 print ' <option value="state.php?state=Manipur&to_id2='.$prdt.'&to_id='.$subprdt .'">Manipur</option>';
						 print ' <option value="state.php?state=Meghalaya&to_id2='.$prdt.'&to_id='.$subprdt .'">Meghalaya</option>';
						 print ' <option value="state.php?state=Mizoram&to_id2='.$prdt.'&to_id='.$subprdt .'">Mizoram</option>';
						 print ' <option value="state.php?state=Nagaland&to_id2='.$prdt.'&to_id='.$subprdt .'">Nagaland</option>';
						 print ' <option value="state.php?state=Orissa&to_id2='.$prdt.'&to_id='.$subprdt .'">Orissa</option>';
						 print ' <option value="state.php?state=Pondicherry&to_id2='.$prdt.'&to_id='.$subprdt .'">Pondicherry</option>';
						 print ' <option value="state.php?state=Punjab&to_id2='.$prdt.'&to_id='.$subprdt .'">Punjab</option>';
						 print ' <option value="state.php?state=Rajasthan&to_id2='.$prdt.'&to_id='.$subprdt .'">Rajasthan</option>';
						 print ' <option value="state.php?state=Sikkim&to_id2='.$prdt.'&to_id='.$subprdt .'">Sikkim</option>';
					     print ' <option value="state.php?state=Tamil Nadu&to_id2='.$prdt.'&to_id='.$subprdt .'">Tamil Nadu</option>';
					     print ' <option value="state.php?state=Tripura&to_id2='.$prdt.'&to_id='.$subprdt .'">Tripura</option>';
						 print ' <option value="state.php?state=Uttaranchal&to_id2='.$prdt.'&to_id='.$subprdt .'">Uttaranchal</option>';
						 print ' <option value="state.php?state=Uttar Pradesh&to_id2='.$prdt.'&to_id='.$subprdt .'">Uttar Pradesh</option>';
						 print ' <option value="state.php?state=West Bengal&to_id2='.$prdt.'&to_id='.$subprdt .'">West Bengal</option>';					 
						 print ' <select>';
						 print ' <input type=button value="GO" class="more" onclick="goToNewPage(document.dropdown.list)">';
						 print '</form>';						
					?>	
			</div>
				
			<div class="addisplay">
								 <?php 
					 // Connects to your Database 
					 include 'connection.php';
					
					$new=$_GET['state'];		
					
					$rowsPerPage =10;
					
					$pageNum = 1;
					// if $_GET['page'] defined, use it as page number
					if(isset($_GET['page']))
					{
						$pageNum = $_GET['page'];
						echo $pageNum;
					}
					// counting the offset
					$offset = ($pageNum - 1) * $rowsPerPage;
													
					if (!empty($subprdt)){
										
					$data = mysql_query("SELECT * FROM advertisement where state='$new' and subproduct='$subprdt' LIMIT $offset, $rowsPerPage ; ") 
					 or die(mysql_error()); 
					}
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
										 
					 
					Print "<td style='width:300px;vertical-align: top;'>";
					
					print "<h2 style='font-size:20px;'>";
					Print '<a style="color:#006789;text-decoration:none;" href="testphp.php?to_id='.$info['sno'] .'">'.$info['product'] .":&nbsp&nbsp".$info['subproduct'] . '</a>'; 	
					print "</h2>";
					
								 
					 $string=$info['description'];
					 if (strlen($string) > 100) {

					// truncate string
					$stringCut = substr($string, 0, 50);

					// make sure it ends in a word so assassinate doesn't become ass...
					$string = substr($stringCut, 0, strrpos($stringCut, ' ')).'...'; 
						}
					echo $string;
					 if (!empty($info['totalquanity']))
					 {
					Print "<td style='width:140px;'>";
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
					$timestamp= $info['time2'];
					$test = new DateTime($timestamp);
					Print "<td style='width:160px;text-align:center;'>";
					echo date_format($test, 'F j, Y, g:i a');
					Print "</td>";
					 ?>
					 <?php
					 
					 print "</table>";
					
					print "<br>";
					
					 
					 }
					
					 print "<br>";
					 
					 
					 
					$total_records =  mysql_query("SELECT COUNT(DISTINCT sno) FROM advertisement where state='$new' ;") 
					 or die(mysql_error());
					 
					 $result = mysql_query("SELECT sno FROM advertisement where state='$new' "); 
					$num_rows = mysql_num_rows($result); 
					// Display the results 
					echo $num_rows; 

					
					
					$maxPage = ceil($num_rows/$rowsPerPage);
					
					
				
					
					print "maximum page:";
					echo $maxPage;
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
						  $nav .= " <a href=\"$self?page=$page\">$page</a> ";
					   } 
					}
 
					 if ($pageNum > 1)
					{
					   $page  = $pageNum - 1;
					   $prev  = " <a href=\"$self?page=$page\">Prev</a> ";

					   $first = " <a href=\"$self?page=1\">First Page</a> ";
					} 
					else
					{
					   $prev  = '&nbsp;'; // we're on page one, don't print previous link
					   $first = '&nbsp;'; // nor the first page link
					}
					if ($pageNum < $maxPage)
					{
					   $page = $pageNum + 1;
					   $next = " <a href=\"$self?page=$page\">Next</a> ";

					   $last = " <a href=\"$self?page=$maxPage\">Last Page</a> ";
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


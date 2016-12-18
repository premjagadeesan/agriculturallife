<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width">

	<meta name="Keywords" content="agriculture tutorial,agriculture information,agriculture market,agriculture forum,agriculture,agricultural technologies,agriculture advertisement,agriculture buy,agriculture sell,agriculture tips,agriculture techniques">

	<meta name="Description" content="to buy,to sell agriculture products, to buy and to sell crops,fruits,vegetables">
	<title>Agricultural Life</title>
	<link rel="icon" type="image/ico" href="images/favicon.ico"/>
	<link rel="stylesheet" href="css/style.css" type="text/css">
	
	<link href="css/main.css" rel="stylesheet" type="text/css" />
  <script src="js/script.js"></script>
  <script type="text/javascript" src="js/nicEdit.js"></script>
					<script type="text/javascript">
						bkLib.onDomLoaded(function() { nicEditors.allTextAreas() });
	</script>



<link rel="stylesheet" type="text/css" href="css/validetta.css">
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="js/jquery.js?v1.10.2"><\/script>')</script>
<script type="text/javascript" src="js/validetta-min.js"></script>
<!-- 
    <script type="text/javascript" src="../languages/validettaLang-tr.js"></script> 
-->
<script type="text/javascript">
$(function(){
	$('#exm1').validetta({
		customReg : {
			regname : {
				method : /^[\+][0-9]+?$|^[0-9]+?$/,
				errorMessage : 'Custom Reg Error Message !'
			},
            // you can add more
			example : { 
				method : /^[\+][0-9]+?$|^[0-9]+?$/,
				errorMessage : 'Lan mal !'
			}
		},
        realTime : true
	});
	$('#exm2').validetta({
        display : 'inline',
        errorClass    : 'validetta-inline',
        errorClose : false,
		ajax : {
			call 		: true,
			type 		: 'POST',
			url			: 'ajax.json',
            dataType    : 'json',
			success		: function(object,data){
				alert('Student Name : '+data.student[0].name+' Student No :'+data.student[0].no);
			},
			beforeSend : function(){
				console.log('start')	
			},
			complete : function(){
				console.log('Finish him')	
			},
			fail : function(jqXHR, textStatus){
				console.log(textStatus+':'+jqXHR.status+' : '+jqXHR.statusText);
			}
		}
	});
    $('#exm3').validetta({
        onCompleteFunc : function(object,event){
            event.preventDefault(); // if you dont break submit and if form doesnt have error, page will post
            var _inp = $('#exm3').find('input[name=exm3-name]');
            object.window.open.call(object, _inp, 'This is an example about how you can focus an input after completion of form validation.');
            event.preventDefault();
        }
    });
});
</script>
<script>
				$(document).ready(function(){
				// do your checks of the radio buttons here and show/hide what you want to
				$(".subQuestion").hide();

				 $(document).on('click', '.myradio' , function() {
					 if (this.value > 0){ 
						$(".subQuestion").show();           
					 }
					 else {
						$(".subQuestion").hide();           
					 }       
				  })

				});
</script>
<style type="text/css">
body{ margin:0; padding:0;}
a{text-decoration:none;}
ul{list-style:none;}
li{position:relative;}
input{}
label{width:300px; display:block;}
label[for]{width:100px}
.ilblock{display:inline-block;}
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
				
					<a href="market.php" >Market</a>
				
					<a href="forum.php" style="color:aqua;">Forum</a>
            </div>				
		</div>
	</div>
	<div id="1">
	<div id="contents">
		<div class="clearfix">	
		
		<a href="addanidea.html"><img src="images/idealogo.png" alt="LOGO" height="40" width="150" style="margin-left:750px;"></a><br><br>	
								
			<div id="contents" style='background:#ffffff;padding-left:20px;padding-right:20px;padding-top:20px;padding-bottom:20px;' >
					 <?php 
					 // Connects to your Database 
					 include 'connection.php';
					 
					
					 
					 $rowsPerPage =1;
					
					$pageNum = 1;
					// if $_GET['page'] defined, use it as page number
					if(isset($_GET['page']))
					{
						$pageNum = $_GET['page'];						
					}
					// counting the offset
					$offset = ($pageNum - 1) * $rowsPerPage;
					
					
					 
					 $data = mysql_query("SELECT * FROM forum  ORDER BY sno DESC LIMIT $offset, $rowsPerPage; ") 
					 or die(mysql_error()); 
					
					 while($info = mysql_fetch_array( $data )) 
					 {
					print "<div style='background:#ffffff'>";	
					print "<div class='post' >";
					?>
					 <div class="posthead"><span></span></div>
								 
					 <?php
					print "<div class='posterinfo'>";	
					 print "<br>";
					 print "<br>";
					 Print "<img src='images/user.png'  height='25' width='25'>&nbsp<span style='text-transform: capitalize;'>&nbsp&nbsp<td>".$info['name'] . "</span><br>";
					 Print "<img src='images/email.png' height='25' width='25'><span>&nbsp&nbsp&nbsp".$info['emailid'] . "</span><br>"; 
					 Print "<img src='images/phone.png' height='25' width='25'><span>&nbsp&nbsp&nbsp".$info['phoneno'] . "</span><br>";					 
					 print "<br>";
					print "</div>";
					print "<div class='postmsg'>";
					
					Print "<img src='images/document.png' height='20' width='20'><span style='color:#006699;font-size:15px;text-transform:capitalize;font-weight:bold;'>&nbsp&nbsp&nbsp".$info['title'] . "</span><br>";
					$timestamp= $info['storetime'];
					$test = new DateTime($timestamp);	
					?>
					<div style="text-align:right;">
					<?php
					
					echo date_format($test, 'F j, Y, g:i a');
					
					 print "</div>";
						
					print '<hr>';
					 Print "".$info['contents'] . "<br><br><br>";
					echo '<img src="imgfetch.php?id=' . $info['sno'] . '" height="250" width="400"><br>';
					Print "<br>";Print "<br>";
					Print "<span style='color:#ff9900;font-size:15px;text-transform:capitalize;font-weight:bold;'>";
					echo 'Attachments:';
					Print "</span>";
					Print "<br>";
					Print "<br>";
					Print "<img src='images/attachment.png' height='20' width='20'>";
					print '<a style="color:black;text-decoration:none;font-size:14px;" href="filefetch.php?id=' . $info['sno'] . ' & id2=' . $info['filename'] . '">'.$info['filename'].'</a>';
						
					 						
					 print "</div>";
					 print "</div>";
					 ?>
					 <div class="posthead"><span></span></div>
								 
					 <?php
					 print "</div>";
					 print "<br>";
					 $inputno= $info['sno'];					 
					 
					 $data1 = mysql_query("SELECT * FROM comment WHERE postsno='$inputno'; ") 
					 or die(mysql_error());
					 
					 while($info1 = mysql_fetch_array( $data1 )) 
					 {
					 ?>
					
					 
					 <?php
					 print "<div class='post1' >";
					 ?>
					 <div class="posthead"><span></span></div>
								 
					 <?php
					  print "<div class='posterinfo'>";
					  print "<br>";
					 //Print "<img src='images/user.png' height='25' width='25'><b style='text-transform: capitalize;'> &nbsp&nbsp".$info1['name'] . " </b> ";
					  Print "<img src='images/user.png'  height='25' width='25'>&nbsp<span style='text-transform: capitalize;'>&nbsp&nbsp<td>".$info1['name'] . "</span><br>";	
					  Print "<img src='images/email.png' height='25' width='25'><span>&nbsp&nbsp&nbsp".$info1['emailid'] . "</span><br>"; 					  
					  print "<br>";
					  print "</div>";
					  print "<div class='postmsg1'>";
					  
					  Print "<img src='images/document.png' height='20' width='20'><span style='color:#006699;font-size:15px;text-transform:capitalize;font-weight:bold;'>Re: &nbsp&nbsp&nbsp".$info['title'] . "</span><br>";
					  
					 				  
					  $timestamp= $info1['time'];
					$test = new DateTime($timestamp);
					?>
					<div style="text-align:right;">
					<?php				
					echo date_format($test, 'F j, Y, g:i a'); 	
					print ' </div>'; 
					  print '<hr>';
					  Print "<p style='color:#000;text-decoration:none;'>".$info1['contents'] . " </p> ";	
								 
					 ?>
					 
					  </div>
					  <div class="posthead"><span></span></div>
					  </div>			  
					  
					  <br>
					  <?php
					  
					  
					 
					 }
					 
					
						
						$inputno=$info['sno'];
									
					 } 
					 
					 
					 
					 ?> 
					 <hr>
					 
					 <div id="Create-pool">
					 
					<?php

			

					print '<form style="padding-top:20px;"  id="exm1" method="post" action="comment.php?to_id='.$inputno.'&page='.$pageNum.'">';
					?>
					<ul>
					
					<h2  style="color:#ff9900;font-size:30px;font-weight: bold;"> Leave a Comment </h2><br>
					<li><label style="color: #006699;font-size: 20px;text-transform: capitalize;font-weight: bold;"	>Name:</label><input type="text" id="name" name="name" data-validetta="required,minLength[2],maxLength[30]" class="txtinput" /></li>				 
					<li><label style="color: #006699;font-size: 20px;text-transform: capitalize;font-weight: bold;" >Email:</label><input type="text" id="email" name="emailid"  data-validetta="email,required" class="txtinput" /></li>        
					<li><label style="color: #006699;font-size: 20px;text-transform: capitalize;font-weight: bold;" >Comments:</label><br><textarea name="contents" style="width:460px;height:150px;" ></textarea></li>
					<br>	
															
					<li><input type="submit" value="Reply" style="width:120px;height:35px;margin-left:300px;vertical-align:top;"  /></li>
					</ul>
					<form>
			
			
			</div>
			
			<br>
			
			<?php
					
					
					 
					 $result = mysql_query("SELECT sno FROM forum;") or die(mysql_error());; 
					$num_rows = mysql_num_rows($result); 
					// Display the results 					
					$maxPage = ceil($num_rows/$rowsPerPage);				
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
												 
					print '<ul class="tsc_pagination tsc_paginationC tsc_paginationC01" style="margin-left:360px">';
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
					
					print '</ul>';					
					 ?> 
					<br><br><br><br>
					 
			
			<html>

						
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


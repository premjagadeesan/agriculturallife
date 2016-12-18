<?php



$inputno=$_GET['to_id'];
echo $inputno;
print '<form  enctype="multipart/form-data" id="Create-pool" method="post" action="comment.php?to_id='.$inputno.'">';
					print '<div id="wrapping" class="clearfix">';					
					print '<h2 style="color:aqua;">Comment</h2>'; 					 
					print '<section id="container">';			
					print '<h3>Name: </h3>';
					print '<input type="text" name="name" id="name"style="width:220px" autocomplete="off" tabindex="1" class="txtinput">';		
					print '<h3>Description: </h3>';
					print '<textarea  name="contents" style="width:400px;height:200px" class="txtinput" ></textarea>	';    
										
			print '</section>'; 					
												
		    print '<input type="submit" value="Reply" class="more" style="margin-left:700px;">';
			
			print '</form>';		
			?>
			
			<html>

<?php

					if (!empty($subprdt)){
										
					$data = mysql_query("SELECT * FROM advertisement where subproduct='$subprdt' ORDER BY sno DESC LIMIT $offset, $rowsPerPage  ; ") 
					 or die(mysql_error()); 
					}
					
					
					
					if (!empty($subprdt) && !empty($ipstate) ){
										
					$data = mysql_query("SELECT * FROM advertisement where state='$ipstate' and subproduct='$subprdt' ORDER BY sno DESC LIMIT $offset, $rowsPerPage; ") 
					 or die(mysql_error()); 
					 
					Print "<b style='color:#ff9900;font-weight:bold;font-size:15px'>";		
					echo "State:";				
					Print "</b>";
					 
					
					Print "<b style='color:#006699;font-weight:bold;font-size:15px'>";
					 
					echo $ipstate;
					
					
					
					Print "</b>";
					
					
					}
					
										
					if (!empty($subprdt) && !empty($startprice) && !empty($endprice)){
										
					$data = mysql_query("SELECT * FROM advertisement where price='$startprice' and subproduct='$subprdt' ORDER BY sno DESC LIMIT $offset, $rowsPerPage; ") 
					 or die(mysql_error()); 
					
					Print "<b style='color:#006699;font-weight:bold;font-size:15px'>";	
					echo "&nbsp&nbsp|&nbsp&nbsp";
					Print "</b>";
					
					Print "<b style='color:#ff9900;font-weight:bold;font-size:15px'>";		
					echo "Price:";				
					Print "</b>";
					 				
					Print "<b style='color:#006699;font-weight:bold;font-size:15px'>";					
					echo $startprice; 
					echo "&nbsp-&nbsp";					
					echo $endprice;
					
													
					}
					
					if (!empty($subprdt) && !empty($startprice) && !empty($endprice) && !empty($ipstate) ){
					
					Print "<b style='color:#006699;font-weight:bold;font-size:15px'>";						
					Print "</b>";
										
					$data = mysql_query("SELECT * FROM advertisement where state='$ipstate' and Price BETWEEN  '$startprice' and '$endprice' and subproduct='$subprdt' ORDER BY sno DESC LIMIT $offset, $rowsPerPage  ; ") 
					 or die(mysql_error()); 
					
					}
					
					
					if (!empty($subprdt) && !empty($startprice) && !empty($endprice) && !empty($ipstate) && !empty($startquantity) && !empty($endquantity) ){
										
					$data = mysql_query("SELECT * FROM advertisement where state='$ipstate' and Price BETWEEN  '$startprice' and '$endprice' and totalquanity BETWEEN  '$startquantity' AND '$endquantity' and subproduct='$subprdt' ORDER BY sno DESC LIMIT $offset, $rowsPerPage  ; ") 
					 or die(mysql_error()); 
					 
					 Print "<b style='color:#006699;font-weight:bold;font-size:15px'>";	
					echo "&nbsp&nbsp|&nbsp&nbsp";
					Print "</b>";
					 
					 
					 Print "<b style='color:#ff9900;font-weight:bold;font-size:15px'>";		
					echo "Quantity:";				
					Print "</b>";
					 
					 
					 
					 Print "<b style='color:#006699;font-weight:bold;font-size:15px'>";
					 
					echo $startquantity;
					
					echo "&nbsp-&nbsp";					
					echo $endquantity;
										
					
					Print "</b>";
					
					
					 
					
					}
					
					if (!empty($ipstate)){
					Print "<br><hr>";
					}
					
					
				?>
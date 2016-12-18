<!DOCTYPE HTML>
<html>
<head>
	<meta charset="UTF-8">
	
	<meta name="viewport" content="width=device-width">

	<meta name="Keywords" content="agriculture tutorial,agriculture information,agriculture market,agriculture forum,agriculture,agricultural technologies,agriculture advertisement,agriculture buy,agriculture sell,agriculture tips,agriculture techniques">

	<meta name="Description" content="Advertisment for selling and buying fruits,vegetables,crops">
	<title>Agricultural Life</title>
	<link rel="icon" type="image/ico" href="images/favicon.ico"/>
	<link rel="stylesheet" href="css/style.css" type="text/css">
	<link rel="stylesheet" type="text/css" media="all" href="style1.css"/>
	<link rel="stylesheet" type="text/css" media="all" href="responsive.css"/>
	<link rel="stylesheet" type="text/css" media="all" href="searchstyle.css"/>
	<link rel="stylesheet" href="css/pickmeup.css" type="text/css" />
	<link rel="stylesheet" media="screen" type="text/css" href="css/demo.css" />
	<link rel="stylesheet" href="css/pikaday.css">
	<link rel="stylesheet" href="css/site.css">
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/jquery.pickmeup.js"></script>
	<script type="text/javascript" src="js/demo.js"></script>
	  <link href="css/main.css" rel="stylesheet" type="text/css" />
	  <script src="js/script.js"></script>
 
					<script type="text/javascript">
						bkLib.onDomLoaded(function() { nicEditors.allTextAreas() });
					</script>
  <style>
.error {color: #FF0000;}
h2{
font-size:45px;
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
				
					<a href="informations.html">Informations</a>
				
					<a href="market.php" style="color:aqua;">Market</a>
				
					<a href="forum.php">Forum</a>
				</div>
		</div>
	</div>
	
	<div id="1">
	
		<span class="chyron"><em><a href="index.html">&laquo; back to the site</a></em></span>	
		
		<center>
			<h1 style="color:#E54040;font-size:40px">Submit Advertisment </h1><br>
			</center>
			<h2 style="color:aqua;">Product Information</h2>			
			<?php
			$subprdt=$_GET['to_id'];
			$prdt=$_GET['to_id2'];
			?>	
		
		<?php
		print '<form   method="post" action="storead.php?to_id='.$prdt.' & to_id2='.$subprdt.'">';
			?>
			
			<div id="wrapping" class="clearfix">				
			<section id="container">		
			
			
		<img src='images/products_clipart.png' height='50' width='50'>&nbsp&nbsp&nbsp&nbsp&nbsp			
			<b style="color:#ff0000;font-size:30px"><?php echo $prdt; ?></b>	
			
			<?php
			if($subprdt != 'Other')
					{
					?>
			
			<b style="color:#0fff00;font-size:30px">:&nbsp</b>
			<b style="color:#006699;font-size:30px"><?php echo $subprdt; ?></b>
			<?php
			}
			?>
			<?php
				if($subprdt == 'Other')
					{
						
				              														
				print '<h3>Enter Product:<h3>';								
				print '<input  name="subproduct" type="text"  id="vegetables" style="width:220px" autocomplete="off"  class="txtinput">';
				
				}
				?>
				<h3>Add Photo: <h3> <input type="file" name="photo" style="width:300px" class="txtinput"><br> 
				<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
							  
				  <input name="answer" class="myradio" type="radio" value="1" />
				  <label for="answerYes">Add More Photos</label>
				  
				  <input name="answer" class="myradio" type="radio" value="0" />
				  <label for="answerNo">No</label>

				<div class="subQuestion">

				 <input type="file" name="photo2" style="width:300px" class="txtinput">
				 <input type="file" name="photo3" style="width:300px" class="txtinput">
				 <input type="file" name="photo4" style="width:300px" class="txtinput">
				 <input type="file" name="photo5" style="width:300px" class="txtinput">

				</div>
		
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


				
				<h3>Product Description:</h3>
				<textarea  name="description" id="price" style="width:300px" placeholder="Describe about your product.."class="txtinput" ></textarea>	
                 <h3>Choose Quantity:</h3>

				<select name="quantity" id="price" style="width:300px" class="txtinput">
				<script id="price" language="javascript">
							var quantity = new Array("Kilograms","Quintals","Tones");

							for(var hi=0; hi<quantity.length; hi++)
							document.write("<option value=\""+quantity[hi]+"\">"+quantity[hi]+"</option>");
				</script>
				</select>							
				<h3>Total Quantity in kg/quintal/tone:</h3>
				<input type="text"  name="totalquantity" id="quantity" onkeyup="AllowAlphabet()" style="width:220px" autocomplete="off" tabindex="1" class="txtinput">				
				<h3>Expecting Price:</h3>
				<input type="text"  name="price" id="price" onkeyup="AllowAlphabet()" style="width:220px" autocomplete="off" tabindex="1" class="txtinput">		
					
					</section >
                    
					<h2 style="color:aqua;">Sellers Information</h2>  	
				 
					<section id="container">			
			
					<h3>Contact Name: </h3>		
					<input type="text" name="name" id="name"style="width:220px" autocomplete="off" tabindex="1" class="txtinput">
						
					<h3>Email Id: </h3>
					<input type="email" name="emailid" id="email" style="width:220px" autocomplete="off" tabindex="2" class="txtinput">
					
					<h3>Phone No: </h3>
					<input  type="tel" name="phoneno" id="telephone" placeholder="0xxxxxxxxxx" tabindex="3" class="txtinput" style="width:120px">
					
					<h3>Address: </h3>
					<textarea name="address"  style="width:300px" class="txtinput" ></textarea>
					
					 <h3>State:</h3>
							<select name="state" style="width:320px" class="txtinput">
										<script language="javascript">
										var states = new Array("Select a state","Andaman and Nicobar Islands", "Andhra Pradesh", "Arunachal Pradesh", "Assam", "Bihar", "Chandigarh", "Chhattisgarh", "Dadra and Nagar Haveli", "Daman and Diu", "Delhi", "Goa", "Gujarat", "Haryana", "Himachal Pradesh", "Jammu and Kashmir", "Jharkhand", "Karnataka", "Kerala", "Lakshadweep", "Madhya Pradesh", "Maharashtra", "Manipur", "Meghalaya", "Mizoram", "Nagaland", "Orissa", "Pondicherry", "Punjab", "Rajasthan", "Sikkim", "Tamil Nadu", "Tripura", "Uttaranchal", "Uttar Pradesh", "West Bengal");

										for(var hi=0; hi<states.length; hi++)
										document.write("<option value=\""+states[hi]+"\">"+states[hi]+"</option>");
										</script>
						</select>
					<h3>Advertisement Validity Date:</h3>							
					<input type="text" name="pincode" id="datepicker" style="width:150px">
					<script src="js/pikaday.js"></script>
					<script>

					var picker = new Pikaday(
					{
						field: document.getElementById('datepicker'),
						firstDay: 1,
						minDate: new Date('2000-01-01'),
						maxDate: new Date('2020-12-31'),
						yearRange: [2000,2020]
					});

					</script>
					</section>
						                  
										
				</section> 
				<section>
							
				
				 <input type="submit" value="Submit" class="more" style="margin-left:700px;"> 
				 
				
			</form>				
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
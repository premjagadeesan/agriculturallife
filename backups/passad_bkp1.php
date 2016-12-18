<!DOCTYPE HTML>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Agricultural Life</title>

<meta charset="UTF-8">
	
	<meta name="viewport" content="width=device-width">

	<meta name="Keywords" content="agriculture tutorial,agriculture information,agriculture market,agriculture forum,agriculture,agricultural technologies,agriculture advertisement,agriculture buy,agriculture sell,agriculture tips,agriculture techniques">

	<meta name="Description" content="Advertisment for selling and buying fruits,vegetables,crops">
	
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
		
						
<section id="container">

			<?php
			$subprdt=$_GET['to_id'];
			$prdt=$_GET['to_id2'];
			?>



<?php
		print '<form id="exm1"  enctype="multipart/form-data"  method="post" action="storead.php?to_id='.$prdt.' & to_id2='.$subprdt.'">';
			?>

	<ul>
	<div id="Create-pool">
			<center><h3 style="color:#ff9900;" > Product Information </h3></center>	<br>
			
			<label>Choosen Product:</label><br>			
			
			<b style="color:#ff0000;font-size:25px"><?php echo $prdt; ?></b>	
			
			<?php
			if($subprdt != 'Other')
					{
					?>
			
			<b style="color:#0fff00;font-size:25px">:&nbsp</b>
			<b style="color:#003366;font-size:25px"><?php echo $subprdt; ?></b>
			<?php
			}
			?>
			
			<?php
				if($subprdt == 'Other')
					{
						
				              														
											
				print '<li><label style="padding-top:20px;">Enter Product:</label><input type="text" class="txtinput" style="width:300px" name="subproduct" data-validetta="required,minLength[2],maxLength[30]"  /></li>';
				
				}
				?>
				
				
				
				<label style="padding-top:20px;">Photos:</label><input type="file" name="photo" style="width:300px" class="txtinput"><br> 
				
							  
				  <input name="answer" class="myradio" type="radio" value="1" />
				  <label for="answerYes">Add More Photos</label>
				  
				  <input name="answer" class="myradio" type="radio" value="0" />
				  <label for="answerNo">No</label><br>

				<div class="subQuestion">

				 <input type="file" name="photo2" style="width:300px" class="txtinput">
				 <input type="file" name="photo3" style="width:300px" class="txtinput">
				 <input type="file" name="photo4" style="width:300px" class="txtinput">
				 <input type="file" name="photo5" style="width:300px" class="txtinput">

				</div>
		
				
	
	
		
		<li><label>Product Description:</label><textarea name="description" style="width:300px;height:150px;" placeholder="Describe about your product.."  data-validetta="required" class="txtinput" ></textarea></li>
		
		
			<?php
			if($prdt == 'Crop' || $prdt == 'Vegetable' || $prdt == 'Fruit' )
					{
					?>
		
		<label>Choose Quantity:</label>
				<select name="quantity" id="price" style="width:300px;height:45px;" class="txtinput">
				<script id="price" language="javascript">
							var quantity = new Array("Kilograms","Quintals","Tones");

							for(var hi=0; hi<quantity.length; hi++)
							document.write("<option value=\""+quantity[hi]+"\">"+quantity[hi]+"</option>");
				</script>
				</select>
		
		<li><label>Total Quantity in kg/quintal/tone:</label><input type="text" id="quantity"  name="totalquantity" style="width:300px" data-validetta="number,required" class="txtinput" /></li>
		<?php
		}
		?>		
		<li><label>Expecting Price:</label><input type="text" id="price" style="width:300px"  name="price" data-validetta="number,required" class="txtinput" /></li>	
		
		<br>
		<hr>
		
		<center><h3 style="color:#ff9900;"> Sellers Information </h3><br></center>
		
		<li><label>Contact Name:</label><input type="text" id="name" name="name" style="width:300px" data-validetta="required,minLength[2],maxLength[30]" class="txtinput" /></li>
		<li><label>Phone No:</label><input type="text" id="telephone"  name="phoneno" style="width:300px"  data-validetta="number,required" class="txtinput" /></li>		 
	    <li><label>Email</label><input type="text" id="email" name="emailid" style="width:300px" data-validetta="email,required" class="txtinput" /></li>        
	    <li><label>Address</label><textarea name="address" style="width:300px;height:150px;" data-validetta="required" class="txtinput" ></textarea></li>  

<label>State:</label>
							<select name="state"  style="width:320px;height:45px;" class="txtinput">
										<script language="javascript">
										var states = new Array("Select a state","Andaman and Nicobar Islands", "Andhra Pradesh", "Arunachal Pradesh", "Assam", "Bihar", "Chandigarh", "Chhattisgarh", "Dadra and Nagar Haveli", "Daman and Diu", "Delhi", "Goa", "Gujarat", "Haryana", "Himachal Pradesh", "Jammu and Kashmir", "Jharkhand", "Karnataka", "Kerala", "Lakshadweep", "Madhya Pradesh", "Maharashtra", "Manipur", "Meghalaya", "Mizoram", "Nagaland", "Orissa", "Pondicherry", "Punjab", "Rajasthan", "Sikkim", "Tamil Nadu", "Tripura", "Uttaranchal", "Uttar Pradesh", "West Bengal");

										for(var hi=0; hi<states.length; hi++)
										document.write("<option value=\""+states[hi]+"\">"+states[hi]+"</option>");
										</script>
						</select>
						
		<label>Advertisement Validity Date:</label>							
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
		
	    <li><input type="submit" value="Submit Ad" /><input sytle="bg-color:#440000;" type="reset"/></li>
	</ul>
</form>
</section>
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
<!DOCTYPE html>
<html lang="en">
   	<head>
    	<title>Enquiry</title>
     	<meta name="viewport" content="width=device-width, initial-scale=1">
     	<link rel="stylesheet" type="text/css" href="css/style.css">
	 	<link rel="preconnect" href="https://fonts.googleapis.com">
	 	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">  
	 	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	 	<link href="https://fonts.googleapis.com/css2?family=Anton&family=Oswald&display=swap" rel="stylesheet">
	 	<script src="script.js"></script>
   	</head>
   	<body>
  
	   	<?php 
         	$activeSection = 'enquiry';
         	include 'header.php';
      	?>

		<?php 
			$bannerImgClass = 'banner-image-enquire';
         	$title = 'Enquire Now!';
         	$isShowBtn = false;
         	include 'banner.php';
      	?>
	  
      	<div class="form-container feed-background-image" >
	  		<h2 align="center">Enquiry</h2><br>
	  		<article>
					<div class="contentbox-white">
        		<form id="form" action="#" method="post" name="enquiryform" onsubmit="" autocomplete="on">
					<fieldset>
						<legend>Personal Details</legend>
						<table>
							<tr>
								<td class="row"><label for="fname">First name:</label></td>
								<td><input type="text" id="fname" placeholder="Your first name" maxlength="25" required="required" /><span class="alert fname"></span>* </td>
					
							</tr>
							<tr>
								<td class="row"><label for="lname">Last name:</label></td>
								<td><input type="text" id="lname" placeholder="Your last name" maxlength="25" required="required" /><span class="alert lname"></span>*</td>
							</tr>
							<tr>
								<td class="row"><label for="DOB">Date of birth</label></td>
								<td><input type="date" id="DOB" placeholder="Your date of birth" required="required" maxlength="10"  /><span class="alert DOB"></span>*</td>
							</tr>
							<tr>
								<td class="row"><label for="number">Phone number:</label></td>
								<td><input type="text" id="number" placeholder="Your phone number" maxlength="10" required="required"  /><span class="alert number"></span>*</td>
							</tr>
							<tr>
								<td class="row"><label for="email">Email:</label></td>
								<td><input type="text" id="email" name="email" placeholder="Your email" required="required" /><span class="alert email"></span>*</td>
							</tr>
						</table>
					</fieldset>
					<fieldset>
						<legend>Address</legend>
						<table>
							<tr>
								<td class="row"><label for="street">Street address:</label></td>
								<td><input type="text" id="street" placeholder="Your street address" maxlength="40" required="required"  /><span class="alert street"></span>*</td>
							</tr>
							<tr>
								<td class="row"><label for="city">City/town:</label></td>
								<td><input type="text" id="city" placeholder="Your city/town" maxlength="20" required="required" /><span class="alert city"></span>*</td>
							</tr>
							<tr>
								<td class="row"><label for="state">State:</label></td>
								<td>
									<select name="state" id="state" required="required" />
										<option value="" disabled selected hidden>Select your state</option>
										<option value="Punjab">Punjab</option>
										<option value="Balochistan">Balochistan</option>
										<option value="KPK">KPK</option>
										<option value="Sindh">Sindh</option>
									</select>
									<span class="alert state"></span>* 
								</td>
							</tr>
							<tr>
								<td class="row"><label for="postcode">Postcode:</label></td>
								<td><input type="text"  name="postcode" maxlength="5"  id="postcode" " placeholder="Your postcode" required="required" /><span class="alert postcode"></span>*</td>	
							</tr>
						</table>
					</fieldset>
					<fieldset>
        				<legend>Services and Enquiry:</legend><br><br>
        				<!-- <form action="#" method="POST" enctype="text/plain" name="rent_enquiry" onsubmit="return validateForm(this)"> -->
          				<div>
              				<div><label for="subject" id="row">RE: Enquiry on</label></div>
              				<div><input type="text" name="subject" id="subject"></div>
          				</div>
						<div>
              				<div>
								<label for="product">Destination/Class 
									<span class="asterisk">*</span>
								</label>
							</div>
              				<div>
                  				<select name="product" id="product" onchange="change()">
                  					<optgroup label="Lahore">
                      					<script>productlist1()</script>
                  					</optgroup>
                  					<optgroup label="Karachi">
                      					<script>productlist2()</script>
                  					</optgroup>
                  					<optgroup label="Islamabad">
                      					<script>productlist3()</script>
                  					</optgroup>
                  					<optgroup label="Multan">
                      					<script>productlist4()</script>
                  					</optgroup>
								</select>
			  					<span class="alert product"></span>
              				</div>
						</select>*</td>
						</tr>
						<tr>
							<td class="row"><label for="txt">Your comment:</label></td>
							<td><textarea name="txt" rows="5" cols="40" id="comment" placeholder="Enter comments here"></textarea></td>
						</tr>
					</table>
				</fieldset>
				<div id="submit-reset">
					<input type="button" id="submit" value="Submit" onclick="return validateForm(this)"/>
					<input type="reset" id="reset" />
				</div>
			</form>
			</div>
		</article>
    </div>
</fieldset>
<br>
<!-- <script src="script.js"></script> -->
<footer>
    <div class="footer-conatiner">
    	<p>© Osama Iftikhar | Last updated: 06/10/2021</p>
    </div>
</footer>
</body>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
</html>
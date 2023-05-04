<!DOCTYPE html>
<html lang="en">
   	<head>
    	<title>Travel</title>
      	<meta name="viewport" content="width=device-width, initial-scale=1">
      	<link rel="stylesheet" type="text/css" href="css/style.css">
	 	<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
 		<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">  
		<link href="https://fonts.googleapis.com/css2?family=Anton&family=Oswald&display=swap" rel="stylesheet">
		<script src="script.js"></script>
   	</head>
   	<body>
  		
	   	<?php 
		   $activeSection = 'travel';
		   include 'header.php';
		?>

		<?php 	
			$bannerImgClass = 'banner-image-islam';
         	$title = 'Islamabad';
         	$isShowBtn = false;
         	include 'banner.php';
      	?>
     
	 	<div class="desci">
	   		<div class="desc2">
            	<h2>The Capital City</h2>
				<h5> he capital  of Pakistan, Islamabad, is located in the northwest of the country on the Potohar plateau. . The city was built in 1960 to replace Karachi as the capital of Pakistan, which  has been since 1963. 
 					Compared to other cities in the country, Islamabad is a clean, spacious and quiet city with lots of greenery. The location of the city has a history dating back to the earliest human settlements in Asia. This area has seen the first settlement of Aryans from Central Asia, ancient caravans  from Central Asia, and the massive armies of Tamerlane and Alexander. 
 					North of the city are the Margalla Hills. Hot summers, monsoons and cold winters with little snowfall on the hills almost summarize the climate of this area. Islamabad also has abundant wildlife ranging from wild boars to leopards.
				</h5>
 			</div>
 		</div>

 		<br>
 		<br>

 		<section class="backg">
			<div class="desc2">
            	<h2>To Lahore</h2>
			</div>
	  		
			<?php 
				$mainclass = 'card-col';
         		$bus_class = 'Economy';
         		$title = 'Islamabad To Lahore';
				$departure = '12:00pm';
				$arrival = '5:00am';
				$rate = '3500 PKR';
				$clickInfo = 'Islamabad-Lahore Economy Class';
         		include 'bus_section.php';
      		?>
			
			<?php 
				$mainclass = 'card-col2';
         		$bus_class = 'Business Class';
         		$title = 'Islamabad To Lahore';
				$departure = '1:00pm';
				$arrival = '6:00am';
				$rate = '5000 PKR';
				$clickInfo = 'Islamabad-Lahore Business Class';
         		include 'bus_section.php';
      		?>

 			<div class="desc2">
            	<h2>To Multan</h2>
			</div>

			<?php 
				$mainclass = 'card-col';
         		$bus_class = 'Economy';
         		$title = 'Islamabad To Multan';
				$departure = '12:00pm';
				$arrival = '4:00am';
				$rate = '4500 PKR';
				$clickInfo = 'Islamabad-Multan Economy Class';
         		include 'bus_section.php';
      		?>

			<?php 
				$mainclass = 'card-col2';
         		$bus_class = 'Business Class';
         		$title = 'Islamabad To Multan';
				$departure = '1:00pm';
				$arrival = '4:00pm';
				$rate = '5500 PKR';
				$clickInfo = 'Islamabad-Multan Business Class';
         		include 'bus_section.php';
      		?>

 			<div class="desc2">
            	<h2>To Karachi</h2>
			</div>

			<?php 
				$mainclass = 'card-col';
         		$bus_class = 'Economy';
         		$title = 'Islamabad To Karachi';
				$departure = '12:00pm';
				$arrival = '8:00pm';
				$rate = '2800 PKR';
				$clickInfo = 'Islamabad-Karachi Economy Class';
         		include 'bus_section.php';
      		?>

			<?php 
				$mainclass = 'card-col2';
         		$bus_class = 'Business Class';
         		$title = 'Islamabad To Karachi';
				$departure = '1:00pm';
				$arrival = '9:00pm';
				$rate = '4000 PKR';
				$clickInfo = 'Islamabad-Karachi Business Class';
         		include 'bus_section.php';
      		?>
   		</section>
      	
		<br>

      	<footer>
        	<div class="footer-conatiner">
            	<p>© Osama Iftikhar Last updated: 06/10/2021</p>
         	</div>
      	</footer>
   	</body>
</html>
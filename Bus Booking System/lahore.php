<!DOCTYPE html>
<html lang="en">
   	<head>
      	<title>Travel</title>
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
		   $activeSection = 'travel';
		   include 'header.php';
		?>

		<?php 
			$bannerImgClass = 'banner-image-lahore';
         	$title = 'Lahore';
         	$isShowBtn = false;
         	include 'banner.php';
      	?>
     
	  	<div class="desc">
	   		<div class="desc2">
            	<h2>The City Of Gardens</h2>
				<h5> Lahore's origins date back to the 1st and 7th centuries AD. However, historians conclude that Lahore was  founded by Loh and Rama's son, who is referred to as the Hindu god in Ramayana. According to Sir Robert Montgomery, Lahore gained importance between the 2nd and 4th centuries. According to the Greek geographer Ptolemy, Lahore was founded in the late 1st century. According to the book, oodeAalamahore emerged as a city in 882 AD. 
 					Lahore residents say "Lahore is Lahore" when they want to highlight the uniqueness of their city. The traditional capital of Punjab was the cultural center of North India for a thousand years,  from Peshawar to New Delhi. It also occupies this prominent position  in Pakistan. Lahore is the city of poets, artists and the center of the film industry. It has the largest number of educational institutions in the country and some of the most beautiful gardens on the continent.
				</h5>
        	</div>
	  	</div>
	    
		<section class="backg">
	 	 	<div class="desc2">
            	<h2>To Karachi</h2>
			</div>

			<?php 
				$mainclass = 'card-col';
         		$bus_class = 'Economy';
         		$title = 'Lahore to Karachi';
				$departure = '12:00pm';
				$arrival = '5:00am';
				$rate = '3500 PKR';
				$clickInfo = 'Lahore-Karachi Economy Class';
         		include 'bus_section.php';
      		?>

			<?php 
				$mainclass = 'card-col2';
         		$bus_class = 'Business Class';
         		$title = 'Lahore to Karachi';
				$departure = '1:00pm';
				$arrival = '6:00am';
				$rate = '5000 PKR';
				$clickInfo = 'Lahore-Karachi Business Class';
         		include 'bus_section.php';
      		?>
  			
			<div class="desc2">
            	<h2>To Islamabad</h2>
			</div>

			<?php 
				$mainclass = 'card-col';
         		$bus_class = 'Economy';
         		$title = 'Lahore to Islamabad';
				$departure = '12:00pm';
				$arrival = '3:00pm';
				$rate = '1500 PKR';
				$clickInfo = 'Lahore-Islamabad Economy Class';
         		include 'bus_section.php';
      		?>
			
			<?php 
				$mainclass = 'card-col2';
         		$bus_class = 'Business Class';
         		$title = 'Lahore to Islamabad';
				$departure = '1:00pm';
				$arrival = '4:00pm';
				$rate = '2500 PKR';
				$clickInfo = 'Lahore-Islamabad Business Class';
         		include 'bus_section.php';
      		?>

			<div class="desc2">
            	<h2>To Multan</h2>
			</div>

			<?php 
				$mainclass = 'card-col';
         		$bus_class = 'Economy';
         		$title = 'Lahore to Multan';
				$departure = '12:00pm';
				$arrival = '8:00pm';
				$rate = '2800 PKR';
				$clickInfo = 'Lahore-Multan Economy Class';
         		include 'bus_section.php';
      		?>

			<?php 
				$mainclass = 'card-col2';
         		$bus_class = 'Business Class';
         		$title = 'Lahore to Multan';
				$departure = '1:00pm';
				$arrival = '9:00pm';
				$rate = '4000 PKR';
				$clickInfo = 'Lahore-Multan Business Class';
         		include 'bus_section.php';
      		?>
     	</section>
      	<br>
	  	<script src="script.js"></script>
      	<footer>
         	<div class="footer-conatiner">
            	<p>© Osama Iftikhar | Last updated: 06/10/2021</p>
         	</div>
      	</footer>
   	</body>
</html>
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
			$bannerImgClass = 'banner-image-karachi';
         	$title = 'Karachi';
         	$isShowBtn = false;
         	include 'banner.php';
      	?>

	  	<div class="desck">
	   		<div class="desc2">
            	<h2>The City Of Lights</h2>
				<h5> Karachi is the capital of the Pakistani province of Sindh. Located on the Arabian Sea, Karachi serves as a transportation hub and is home to Pakistan's two largest seaports, the Port of Karachi and Port Bin Qasim, as well as Pakistan's busiest airport. Although the Karachi region has been inhabited for millennia, the city was established as a fortified Kolachi village  in 1729. 
 					Karachi is one of the  fastest growing cities in the world and has parishes representing almost all ethnic groups in Pakistan. 
 					Karachi is located on a coastal plain with isolated rocky outcrops, hills, and coastal marshes. Coastal mangrove forests grow in the brackish waters around the port of Karachi  and further southeast towards the vast Indus  Delta. To the west of the city of Karachi  is  Cape Monze, known locally  as Ras Muari,  an area characterized by sea cliffs, rocky sandstone ledges and undeveloped beaches.
				</h5> 
			</div>
	  	</div>
	   	
		<section class="backg">
	   		<div class="desc2">
            	<h2>To Lahore</h2>
			</div>

			<?php 
				$mainclass = 'card-col';
         		$bus_class = 'Economy';
         		$title = 'Karachi To Lahore';
				$departure = '12:00pm';
				$arrival = '5:00am';
				$rate = '3500 PKR';
				$clickInfo = 'Karachi-Lahore Economy Class';
         		include 'bus_section.php';
      		?>

			<?php 
				$mainclass = 'card-col2';
         		$bus_class = 'Business Class';
         		$title = 'Karachi To Lahore';
				$departure = '1:00pm';
				$arrival = '6:00am';
				$rate = '5000 PKR';
				$clickInfo = 'Karachi-Lahore Business Class';
         		include 'bus_section.php';
      		?>

 			<div class="desc2">
           		<h2>To Islamabad</h2>
			</div>

			<?php 
				$mainclass = 'card-col';
         		$bus_class = 'Economy';
         		$title = 'Karachi To Islamabad';
				$departure = '12:00pm';
				$arrival = '4:00am';
				$rate = '4500 PKR';
				$clickInfo = 'Karachi-Islamabad Economy Class';
         		include 'bus_section.php';
      		?>

			<?php 
				$mainclass = 'card-col2';
         		$bus_class = 'Business Class';
         		$title = 'Karachi To Islamabad';
				$departure = '1:00pm';
				$arrival = '4:00pm';
				$rate = '5500 PKR';
				$clickInfo = 'Karachi-Islamabad Business Class';
         		include 'bus_section.php';
      		?>

 			<div class="desc2">
            	<h2>To Multan</h2>
			</div>

			<?php 
				$mainclass = 'card-col';
         		$bus_class = 'Economy';
         		$title = 'Karachi To Multan';
				$departure = '12:00pm';
				$arrival = '8:00pm';
				$rate = '2800 PKR';
				$clickInfo = 'Karachi-Multan Economy Class';
         		include 'bus_section.php';
      		?>

			<?php 
				$mainclass = 'card-col2';
         		$bus_class = 'Business Class';
         		$title = 'Karachi To Multan';
				$departure = '1:00pm';
				$arrival = '9:00pm';
				$rate = '4000 PKR';
				$clickInfo = 'Karachi-Multan Business Class';
         		include 'bus_section.php';
      		?>
     	</section>
     
      	<br>
      		
		<footer>
         	<div class="footer-conatiner">
            	<p>©Osama Iftikhar | Last updated: 12/11/2021</p>
         	</div>
      	</footer>
  	</body>
</html>
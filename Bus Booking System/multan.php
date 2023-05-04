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
			$bannerImgClass = 'banner-image-multan';
         	$title = 'Multan';
         	$isShowBtn = false;
         	include 'banner.php';
      	?>
   
 		<section class="backg">
	  		<div class="descm">
	   			<div class="desc2">
            		<h2>The City Of Saints</h2>
					<h5> Multan, one of the oldest cities in the Asian subcontinent and known as the "City of Saints", is located in central Pakistan, about 562 km from the capital, Islamabad. 
 						Hindu legends mention Multan as the capital of the  Kingdom of Trigarta, which was ruled by the Katoch dynasty, which was involved in the Mahabharata War mentioned in the Hindu epic of the same name. 
 						Multan became part of Pakistan after the partition of the Indian subcontinent in 1947, and buildings  from the 17th and 18th centuries became historical monuments of Multan. The old town remains in a dilapidated state,  political and security problems deter development and tourists from the area.
 						It is multani sand used as Clay for beauty mask for absorbing moisture. It is available in most of the cosmetics shops and is very famous among women who are conscious about their skin. It is demanded all over the country by different parlors’ and skin care institutions.Sohan Halwa is another specialty of Multan and is popular throughout the country.It is famous for the cultivation of wheat, cotton, rice and sugar cane as well as other fruits apart from mangoes such as citrus, guavas and pomegranates.
					</h5>
 				</div>
 				<br>
  				<section class="backg">
	   				<div class="desc2">
            			<h2>To Lahore</h2>
					</div>

					<?php 
						$mainclass = 'card-col';
         				$bus_class = 'Economy';
         				$title = 'Multan To Lahore';
						$departure = '12:00pm';
						$arrival = '5:00am';
						$rate = '3500 PKR';
						$clickInfo = 'Multan-Lahore Economy Class';
         				include 'bus_section.php';
      				?>

					<?php 
						$mainclass = 'card-col2';
         				$bus_class = 'Business Class';
         				$title = 'Multan To Lahore';
						$departure = '1:00pm';
						$arrival = '6:00am';
						$rate = '5000 PKR';
						$clickInfo = 'Multan-Lahore Business Class';
         				include 'bus_section.php';
      				?>	

 					<div class="desc2">
            			<h2>To Islamabad</h2>
					</div>

					<?php 
						$mainclass = 'card-col';
         				$bus_class = 'Economy';
         				$title = 'Multan To Islamabad';
						$departure = '12:00pm';
						$arrival = '4:00am';
						$rate = '4500 PKR';
						$clickInfo = 'Multan-Islamabad Economy Class';
         				include 'bus_section.php';
      				?>

					<?php 
						$mainclass = 'card-col2';
         				$bus_class = 'Business Class';
         				$title = 'Multan To Islamabad';
						$departure = '1:00pm';
						$arrival = '4:00pm';
						$rate = '5500 PKR';
						$clickInfo = 'Multan-Islamabad Business Class';
         				include 'bus_section.php';
      				?>

 					<div class="desc2">
            			<h2>To Karachi</h2>
					</div>

					<?php 
						$mainclass = 'card-col';
         				$bus_class = 'Economy';
         				$title = 'Multan To Karachi';
						$departure = '12:00pm';
						$arrival = '8:00pm';
						$rate = '2800 PKR';
						$clickInfo = 'Multan-Karachi Economy Class';
         				include 'bus_section.php';
      				?>

					<?php 
						$mainclass = 'card-col2';
         				$bus_class = 'Business Class';
         				$title = 'Multan To Karachi';
						$departure = '1:00pm';
						$arrival = '9:00pm';
						$rate = '4000 PKR';
						$clickInfo = 'Multan-Karachi Business Class';
         				include 'bus_section.php';
      				?>
				</div>
			</section>

      		<br>

       		<footer>
         		<div class="footer-conatiner">
            		<p>© Osama Iftikhar Last updated: 06/10/2021</p>
         		</div>
      		</footer>
   		</body>
	</html>
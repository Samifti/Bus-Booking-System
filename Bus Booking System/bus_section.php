<div class=<?php echo $mainclass?> >
	<div class="container2">
	   	<div class="image">
			<img src="img/bus.png" alt="redbus" class="png-block">
	 		<div class="middle">
                <div class="text"><?php echo $bus_class?></div>
            </div>
			<h4><?php echo $title?> </h4>
			<h5>Departure: <?php echo $departure?> </h5>  
			<h5>Arrival: <?php echo $arrival?></h5>
			<hr>
			<p><?php echo $rate?></p>
			<button>
				<a class="book" onclick="storeitem(<?php echo $clickInfo?>)" type="submit" name="button">Enquiry</a>
			</button>
		</div>
	</div>
</div>
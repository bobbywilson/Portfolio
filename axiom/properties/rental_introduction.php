
<?php
	
	include("../config.php");
	
	$page = "Rental Introduction";

	$properties_status = 'class="active"';

	include("../includes/header.php");

?>



<div class="jumbotron" id="main">

	<div class="container-fluid">

		<div class="jumbotron" id="nested">
		
    		<h2>Rental Introduction</h2>
    		
    		<h3 class="text-info">Renting a Home Should be Fast and Easy</h3> </br>
    		
    		<p class="text-justify" class="text-muted">Our goal is to make renting a home easy and affordable!  Our available rentals include all price ranges and several metro Indianapolis areas. Take a moment to browse our availability list which is updated daily.  If you see a home you are interested in, contact us to view the property.</br></br>

Not finding what you want?  Let our expert staff assist you in locating the perfect home.  You will save time and money by working with our rental specialists.</br></br>

			Our office is open <?php echo constant("BUSINESS_HOURS"); ?>. For your convenience we are available 7 days a week for showings by appointment.  Our mailing address is <?php echo constant("BUSINESS_ADDRESS"); ?>.</p>
    		    
   			
    
    	</div>
    
  </div>

</div>



<?php

	include("../includes/footer.php");

?>
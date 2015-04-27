
<?php
	
	include("../config.php");
	
	$page = "Resident Resources";

	$residents_status = 'class="active"';

	include("../includes/header.php");
	
	
	$resources = array(
		'utilities' => '<?php echo include("utilities.php");?>',
		'rent_or_buy' => '<?php echo include("rent_or_buy.php");?>',
		'landlord' => '?php echo include("landlord.php");?>',
		'rental_home' => '?php echo include("rental_home.php");?>',
		'credit_score' => '?php echo include("credit_score.php");?>'
	);


	$utilities = $resources["utilities"];
	$rent_or_buy = $resources["rent_or_buy"];
	$landlord = $resources["landlord"];
	$rental_home = $resources["rental_home"];
	$credit_score = $resources["credit_score"];
	

?>



<div class="jumbotron" id="main">

	<div class="container-fluid">

		<div class="jumbotron" id="nested">
		
    		<h2>Resident Resources</h2> </br> 
  
    				<div class="container" id="button-group-wrapper">
  
  						<button type="button" class="btn btn-default" id="button-group" onclick="loadUtilities()">Utilities</button>
  						<button type="button" class="btn btn-default" id="button-group" onclick="loadRentBuy()">Rent or Buy</button>
  						<button type="button" class="btn btn-default" id="button-group" onclick="loadLandlord()">The Landlord</button>
  						<button type="button" class="btn btn-default" id="button-group" onclick="loadRentals()">Rentals</button>
  						<button type="button" class="btn btn-default" id="button-group" onclick="loadCredit()">Credit Score</button>
  						
					</div>
  					
  					</br></br>
  					
  					<div class="jumbotron" id="resources">
  					
  					<p class="text-justify" class="text-muted">Select one of the articles listed above for helpful hints and timely topics related to real estate. No matter whether you're buying, selling or renting there's an article here for you.  We hope you find them very informative.</p></br>
   
  					</div>
  					
    
    	</div>
    
  	</div>

</div>



<?php

	include("../includes/footer.php");

?>
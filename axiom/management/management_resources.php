<?php
	
	include("../config.php");
	
	$page = "Client Resources";

	$client_status = 'class="active"';

	include("../includes/header.php");
	
	

?>



<div class="jumbotron" id="main">

	<div class="container-fluid">

		<div class="jumbotron" id="nested">
		
    		<h2>Client Resources</h2> </br> 
  
    				<div class="container" id="button-group-wrapper-client">
  
  						<button type="button" class="btn btn-default" id="button-group-client" onclick="loadInvest()">Why Invest</button>
  						<button type="button" class="btn btn-default" id="button-group-client" onclick="loadBuy()">Buying Process</button>
  						<button type="button" class="btn btn-default" id="button-group-client" onclick="loadProfit()">Maximize Profit</button>
  						<button type="button" class="btn btn-default" id="button-group-client" onclick="loadManagement()">Management</button>
  						<button type="button" class="btn btn-default" id="button-group-client" onclick="loadContact()">Contact Us</button>
  						
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








<?php
	
	include("../config.php");
	
	$page = "Total Real Estate Package";

	$client_status = 'class="active"';

	include("../includes/header.php");

?>



<div class="jumbotron" id="main">

	<div class="container-fluid">

		<div class="jumbotron" id="nested">
		
    		<h2>Total Real Estate Package</h2></br>
    		
    		<div class="container" id="button-group-wrapper-client">
  
  						<button type="button" class="btn btn-default" id="button-group-client" onclick="loadPlacement()">Placement</button>
  						<button type="button" class="btn btn-default" id="button-group-client" onclick="loadProfessional()">Professionalism</button>
  						<button type="button" class="btn btn-default" id="button-group-client" onclick="loadMaintenance()">Maintenance</button>
  						<button type="button" class="btn btn-default" id="button-group-client" onclick="loadReporting()">Reporting</button>
  						<button type="button" class="btn btn-default" id="button-group-client" onclick="loadFee()">Fees & Charges</button>
  						<button type="button" class="btn btn-default" id="button-group-client" onclick="loadOther()">Other Services</button>
  				
			</div>
  					
  					</br></br>
  					
  					<div class="jumbotron" id="resources">
  					
  					<h3>Full Residential Property Management Package</h3></br>

  					
  					<p class="text-justify" class="text-muted">Here is what is included in our Full Residential Property Management Package. Click the buttons above to see each section.</p>
   
  					</div>
  					
  					
  						
			
			
			
			
    	</div>
    
  	</div>

</div>



<?php

	include("../includes/footer.php");

?>




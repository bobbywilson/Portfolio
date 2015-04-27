
<?php
	
	include("../config.php");
	
	$page = "Resident Intoduction";

	$residents_status = 'class="active"';

	include("../includes/header.php");

?>



<div class="jumbotron" id="main">

	<div class="container-fluid">

		<div class="jumbotron" id="nested">
		
    		<h2>Resident Introduction</h2> </br> 
    		
    		    
   			<p class="text-justify" class="text-muted">Thank you for choosing a home managed by <?php echo constant("BUSINESS_NAME"); ?> as your new home.&nbsp; We know that you will find that living in a Axiom Property Management home will be a hassel free experience.</br></br>
    
    		Our goal is to provide you with the highest quality of residential services. Please let us know when you have questions or need assistance with your home. </br></br>

			Our property management team is available to assist you <?php echo constant("BUSINESS_HOURS"); ?>. We are on call evenings and weekends for emergency issues.</br></br>

			If you have an after hours emergency please call our Emergency Maintenance Line at <?php echo constant("BUSINESS_PHONE"); ?>  and press option 7. If a member of our maintenance team does not answer please leave a detailed message with your name, address and the nature of your emergency and a maintenance technician will return your call as soon as possible.</br></br>

			Axiom Property Management provides fee-management services for commercial and residential real estate. Mr. Attinger directly oversees the development and implementation of all business operations, property management software and policies and procedures. Mr. Attinger meets with clients upon their request.</br></br>

			If someone you know needs a home to rent, we have a large selection of fine homes in the Metropolitan area.</p>
    
    	</div>
    
  </div>

</div>



<?php

	include("../includes/footer.php");

?>
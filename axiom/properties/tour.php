
<?php
	
	include("../config.php");
	
	$page = "Property Tour";

	$properties_status = 'class="active"';

	include("../includes/header.php");

?>



<div class="jumbotron" id="main">

	<div class="container-fluid">

		<div class="jumbotron" id="nested">
		
    		<h2 class>Schedule a Property Tour</h2>
    		
    		<h3 class="text-info">Renting a Home Should be Fast and Easy</h3> </br>
    		
    		<p class="text-justify" class="text-muted">Getting started can be overwhelming and deter you from taking the first step. A property specialist can have you moving forward in the time you (or perhaps while you) drink a cup of coffee. The objectives of this first visit include:</p>
    		
    		<ul>
    			<li class="text-justify" class="text-muted">Tour properties of interest</li>
    			<li class="text-justify" class="text-muted">Review a sample agreement</li>
    			<li class="text-justify" class="text-muted">Check your credit</li>
    			
    		</ul>

			<p class="text-justify" class="text-muted">This visit typically takes between five and ten minutes based upon the nature of your questions. Call or complete the information below to schedule a visit now.</p>


			<p class="text-justify" class="text-muted">Our office is open <?php echo constant("BUSINESS_HOURS"); ?>. For your convenience, we are available 7 days a week for showings by appointment. Our mailing address is, Axiom Property Management <?php echo constant("BUSINESS_ADDRESS"); ?>. You can also give us a call at  <?php echo constant("BUSINESS_PHONE"); ?> or send a fax to <?php echo constant("BUSINESS_FAX"); ?> .</p>
			
			

    
    	</div>
    
  </div>

</div>



<?php

	include("../includes/footer.php");

?>
<div class="jumbotron" id="main">

	<div class="container-fluid">

		<div class="jumbotron" id="nested-contact">
		
    		<h2>Contact Us</h2> </br>
    		
    		<p id="normal-justify-text">For information regarding our Property Management Services or one of the many Rental Properties that Axiom Property Management currently manages, you can contact us at <span class='glyphicon glyphicon-phone'></span> (317) 259-0200 or send us a email to <?php echo constant("BUSINESS_EMAIL")?>.
    		
    		If you are a resident or an owner and would like to submit a Service Request you can reach us at <?php echo constant("BUSINESS_MAINTENANCE_EMAIL")?>.

		If you are a resident experiencing an after hours Maintenance Emergency please call <?php echo constant("BUSINESS_MAINTENANCE_AFTER_HOURS")?>.</p> </br>
		
		
		
						<?php
						
							include("../includes/error_display.php");
						
						?>
						
		<div class="bg-danger text-justify text-danger" id="client-errors-box"><p class="text-justify text-danger" class="text-muted"></p></div>
		
			</br>

    		 <h5 class="text-right">Fields marked with a "<span class="required"> &bull; </span>" are required.</h5>   
			
				<div class="row">
   				
   					<div class="col-md-5" id="col-md-left">
   					
						<a href="https://www.google.com/maps/place/2453+N+Delaware+St,+Indianapolis,+IN+46205/@39.802718,-86.152734,17z/data=!3m1!4b1!4m2!3m1!1s0x886b51184e2e5ccb:0x94ff3fef7ff5f2ce" target="_blank">
   						<div class="col-md-12" id="map-canvas">
							
						</div>
						
						</a>
							
						
						
						<hr>
						
						
						<span class="small-text phone-numbers-col"><p class="text-justify" class="text-muted"><span class="glyphicon glyphicon-home"></span> <b><?php echo constant("BUSINESS_NAME") . "</b></br>" . constant("BUSINESS_ADDRESS") . "</br>" . constant("BUSINESS_HOURS")?></p>
   						
   						<hr>
   						
   						
   					
   						<p class="text-justify" class="text-muted"><span class="glyphicon glyphicon-info-sign"></span> Main Office Information</br><?php echo constant("BUSINESS_PHONE") . " (main office)" . "</br>" . constant("BUSINESS_FAX") . " (main fax)". "</br>" . constant("BUSINESS_EMAIL")?></p>
   						
   						<hr>
      
      					<p class="text-justify" class="text-muted"><?php echo '<span class="glyphicon glyphicon-user"></span>' . " " . constant("CEO_NAME") . "</br>" . '<span class="glyphicon glyphicon-user" id="spacer"></span>' . " " . constant("CEO_TITLE") . "</br>" . " " . constant("CEO_PHONE") . "</br>" . " " . constant("CEO_EMAIL")?></p>
      					
      					<hr>
      					
      					<p class="text-justify" class="text-muted"><?php echo '<span class="glyphicon glyphicon-user"></span>' . " " . constant("VICE_NAME") . "</br>" . '<span class="glyphicon glyphicon-user" id="spacer"></span>' . " " . constant("VICE_TITLE") . "</br>" . " " . constant("VICE_PHONE") . "</br>" . " " . constant("VICE_EMAIL")?></p>
      					
      					<hr>
      					
      					<p class="text-justify" class="text-muted"><?php echo constant("BUSINESS_MAINTENANCE") . "</br>" . constant("BUSINESS_MAINTENANCE_EMERGENCY") . "</br>"  . constant("BUSINESS_MAINTENANCE_AFTER_HOURS") . " (emergency)" .  "</br>"?></p>
      					
						</span>
    
    				</div>
   				
    				<div class="col-md-7" id="col-md-center">
    				
    				
      
      					<form method="POST" role="form-inline" name="contact_form" id="contact_form" onsubmit="return validateForm()">
    						<div class="form-group">
    							<div class="col-xs-12" id="col-xs">
      								<label class="control-label" for="first_name">First Name<span class="required"> &bull;</span></label>
      							
        							<input type="text" class="form-control" id="first_name" name="first_name" placeholder="i.e. John" value="<?php echo $first_name?>" onfocus="firstNameError()" onblur="return upper()" tabindex="1">
      							</div>
    						</div>
    						
    						
    						
    						<div class="form-group">
    							<div class="col-xs-12" id="col-xs">
      								<label class="control-label" for="last_name">Last Name<span class="required"> &bull;</span></label>
      							
        							<input type="text" class="form-control" id="last_name" name="last_name" placeholder="i.e. Smith" value="<?php echo$last_name?>" onfocus="return lastNameError()" onblur="return upper()" tabindex="2">
        							
      							</div>
    						</div>
    						
    						<div class="form-group">
    							<div class="col-xs-12" id="col-xs">
      								<label class="control-label" for="email">Email<span class="required"> &bull;</span></label>
      							
        							<input type="email" class="form-control" id="email" name="email" placeholder="i.e. john.smith@example.com" value="<?php echo $email?>" onfocus="emailError()" tabindex="3">
      							</div>
    						</div>
    					
    					
    						
    						<div class="form-group">
    							<div class="col-xs-12" id="col-xs">
  									<label class="control-label" for="comment">Comments<span class="required"> &bull;</span></label>
  									<textarea class="form-control" rows="14" maxlength="500" id="comment" name="comment" placeholder="Please enter a comment." onfocus="commentError()" onblur="return upper()" tabindex="11"><?php echo$comment?></textarea>
  								</div>
							</div>   
							
							
							<div class="form-group" id="submit-button-box">
    							<div class="col-xs-12" id="col-xs">
  									<label class="sr-only" for="submit">Submit</label>
										<button type="submit" class="btn btn-default btn-lg" id="submit" name="submit" tabindex="12">Submit</button>
								</div>
								
							</div>
							
  						</form>
  						
  						
    			</div>
    			
  			</div>
  			
  	 	</div>
    
  	</div>

</div>		
  			
  			
  			
  			
  			
  			
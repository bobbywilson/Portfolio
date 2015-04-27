
<?php

if (!(isset($_SESSION['views']) && $_SESSION['views'] != "")) {

require_once("../config.php");
require_once("../includes/header.php");
require_once("../includes/login_error_display.php");
require_once("../includes/footer.php");
!include("../includes/update_property_form.php");

}

?>

<div class="jumbotron" id="main">

	<div class="container-fluid">

		<div class="jumbotron" id="nested-contact">
		
		
    		<h2>Axiom Property Management Administration</h2> </br>
    		
    		
    		<?php
    		
	
				echo '<p class="text-success">' . $_SESSION['views'] . ', you have successfully logged in. </p>';
    		
    		?>
    		
    		
    				<?php include("menu_buttons.php"); ?>
    				
    		
    		<p id="normal-justify-text">Use this form to add or delete properties from the Axiom Property Mangagent LLC property portfolio.</p> </br>
		
			
		
		
		
						<?php
						
							include("../includes/error_display.php");
						
						?>
						
		<div class="bg-danger text-justify text-danger" id="client-errors-box"><p class="text-justify text-danger" class="text-muted"></p></div>
		
			</br>

				<div class="row">
   				
    				<div class="col-md-8" id="col-md-admin">
    				
    				
      
      					<form method="POST" action="" enctype="multipart/form-data" role="form-inline" name="contact_form" id="contact_form" onsubmit="return validateForm()">
    						<div class="form-group">
    							<div class="col-xs-12" id="col-xs">
      								<label class="control-label" for="property_name">Property Name</label>
      							
        							<input type="text" class="form-control" id="property_name" name="property_name" placeholder="i.e. All Utilities Included - One Bedroom Efficiency" value="<?php echo $property_name?>" onblur="return upper()" tabindex="1">
      							</div>
    						</div>
    						
    						
    						<div class="form-group">
    							<div class="col-xs-12" id="col-xs">
      								<label class="control-label" for="street">Street <span class="required"> &bull;</span></label>
      							
        							<input type="text" class="form-control" id="street" name="street" placeholder="i.e. 28A Manchester Street" value="<?php echo$street?>" onblur="return upper()" tabindex="2">
      							</div>
    						</div>
    						
    						
    						
    						<div class="form-group">
    							<div class="col-xs-4" id="col-xs">
      								<label class="control-label" for="city">City <span class="required"> &bull;</span></label>
        							<input type="text" class="form-control" id="city" name="city" placeholder="i.e. Anytown" value="<?php echo$city?>" onblur="return upper()" tabindex="3">
      							</div>
    						</div>
    						
    						
    						
    						<div class="form-group">
    							<div class="col-xs-4" id="col-xs">
    								<label class="control-label" for="state">State <span class="required"> &bull;</span></label>
    								
    								<select class="form-control" id="state-admin" name="state" value="<?php echo$state?>" tabindex="4">
    									
										<option selected>Choose a State</option>
          								
          								<?php states_list();?>
          								
      								</select>
      								
      								
      								
    							</div>
    							
    						</div>
    						
    						
    						<div class="form-group">
    							<div class="col-xs-4" id="col-xs">
      								<label class="control-label" for="zip-code" id="zip-error">Zip Code <span class="required"> &bull;</span></label>
        							<input type="text" class="form-control" id="zip_code" name="zip_code" maxlength="5" placeholder="i.e. 12345" value="<?php echo$zip_code?>" tabindex="5">
      							</div>
    						</div>
    						
    						
    						
    						<div class="form-group">
    							<div class="col-xs-4" id="col-xs">
      								<label class="control-label" for="beds" id="beds">Bedrooms <span class="required"> &bull;</span></label>
        							<input type="text" class="form-control" id="beds" name="beds" maxlength="3" placeholder="i.e. 3" value="<?php echo$beds?>" tabindex="6">
      							</div>
    						</div>
    						
    						
    						<div class="form-group">
    							<div class="col-xs-4" id="col-xs">
      								<label class="control-label" for="baths" id="baths">Bathrooms <span class="required"> &bull;</span></label>
        							<input type="text" class="form-control" id="baths" name="baths" maxlength="3" placeholder="i.e. 2" value="<?php echo$baths?>" tabindex="7">
      							</div>
    						</div>
    						
    						
    						
    						<div class="form-group">
    							<div class="col-xs-4" id="col-xs">
      								<label class="control-label" for="square_feet" id="zip-error">Square Feet <span class="required"> &bull;</span></label>
        							<input type="text" class="form-control" id="square_feet" name="square_feet" maxlength="5" placeholder="i.e. 1500" value="<?php echo$square_feet?>" tabindex="8">
      							</div>
    						</div>
    						
    						
    						<div class="form-group">
    							<div class="col-xs-4" id="col-xs">
      								<label class="control-label" for="rent" id="zip-error">Rent <span class="required"> &bull;</span></label>
        							<input type="text" class="form-control" id="rent" name="rent" maxlength="5" placeholder="i.e. 600" value="<?php echo$rent?>" tabindex="9">
      							</div>
    						</div>
    						
    						
    						<div class="form-group">
    							<div class="col-xs-4" id="col-xs">
      								<label class="control-label" for="deposit" id="zip-error">Security Deposit <span class="required"> &bull;</span></label>
        							<input type="text" class="form-control" id="deposit" name="deposit" maxlength="5" placeholder="i.e. 600" value="<?php echo$deposit?>" tabindex="10">
      							</div>
    						</div>
    						
    						
    						<div class="form-group">
    							<div class="col-xs-4" id="col-xs">
      								<label class="control-label" for="apply" id="zip-error">Application Fee <span class="required"> &bull;</span></label>
        							<input type="text" class="form-control" id="fee" name="fee" maxlength="3" placeholder="i.e. 35" value="<?php echo$fee?>" tabindex="11">
      							</div>
    						</div>
    						
    						
    						<div class="form-group">
    							<div class="col-xs-12" id="col-xs">
  									<label class="control-label" for="property_description">Property Description</label>
  									<textarea class="form-control" rows="8" maxlength="1000" id="property_description" name="property_description" placeholder="Please enter a description." onblur="return upper()" tabindex="12"><?php echo$property_description?></textarea>
  								</div>
							</div>   
							
							
							<div class="form-group">
    							<div class="col-xs-12" id="col-xs">
  									<label class="control-label" for="amenities">Amenities</label>
  									<textarea class="form-control" rows="8" maxlength="1000" id="amenities" name="amenities" placeholder="Please enter any amenities." onblur="return upper()" tabindex="13"><?php echo$amenities?></textarea>
  								</div>
							</div>
							
							
							
							<div class="form-group">
    							<div class="col-xs-12" id="col-xs">
  									<label class="control-label" for="promotions">Promotions</label>
  									<textarea class="form-control" rows="8" maxlength="100" id="promotions" name="promotions" placeholder="Please enter any promotions." onblur="return upper()" tabindex="14"><?php echo$amenities?></textarea>
  								</div>
							</div>
							
							
							<div class="form-group">
    							<div class="col-xs-12" id="col-xs">
  									<label class="control-label" for="availability">Availability</label>
  									<textarea class="form-control" rows="2" maxlength="100" id="availability" name="availability" placeholder="Please enter availability." onblur="return upper()" tabindex="15"><?php echo$amenities?></textarea>
  								</div>
							</div>
							
							
							<div class="form-group">
    							<div class="col-xs-12" id="col-xs">
  									<label class="control-label" for="apply">Appfolio Application Link <span class="required"> &bull;</span></label>
  									<textarea class="form-control" id="apply" name="apply" placeholder="Please enter a link to the Appfolio application page." onblur="return upper()" tabindex="16"><?php echo$amenities?></textarea>
  								</div>
							</div>

							
							
							
							
							<div class="form-group" id="submit-button-box">
    							<div class="col-xs-12" id="col-xs">
  									<label class="sr-only" for="submit">Submit</label>
										<button type="submit" class="btn btn-default btn-lg" id="submit" name="submit" tabindex="17">Submit</button>
								</div>
								
							</div>
						
  						
    			</div>
    			
    				<div class="col-md-4" id="col-md-admin-image">
  					
  							<div class="form-group">
    							<div class="col-xs-12" id="col-xs" ng-app="">
    							
  									<label class="control-label" for="image">Choose Images </label>
    								<p class="text-justify" class="text-muted">
    								<input type="file" name="image_1" class="custom" id="image_1" value=""> </p>
    								<hr>
    								
    								<label class="control-label" for="image">Choose Images </label>
    								<p class="text-justify" class="text-muted">
    								<input type="file" name="image_2" class="custom" id="image_2" value=""> </p>
    								<hr>
    								
    								<label class="control-label" for="image">Choose Images </label>
    								<p class="text-justify" class="text-muted">
    								<input type="file" name="image_3" class="custom" id="image_3" value=""> </p>
    								<hr>
    								
    								<label class="control-label" for="image">Choose Images </label>
    								<p class="text-justify" class="text-muted">
    								<input type="file" name="image_4" class="custom" id="image_4" value=""> </p>
    								<hr>
    								
    								<label class="control-label" for="image">Choose Images </label>
    								<p class="text-justify" class="text-muted">
    								<input type="file" name="image_5" class="custom" id="image_5" value=""> </p>
    								<hr>
    								
    								<label class="control-label" for="image">Choose Images </label>
    								<p class="text-justify" class="text-muted">
    								<input type="file" name="image_6" class="custom" id="image_6" value=""> </p>
    								<hr>
    								
    								<label class="control-label" for="image">Choose Images </label>
    								<p class="text-justify" class="text-muted">
    								<input type="file" name="image_7" class="custom" id="image_7" value=""> </p>
    								<hr>
    								
    								<label class="control-label" for="image">Choose Images </label>
    								<p class="text-justify" class="text-muted">
    								<input type="file" name="image_8" class="custom" id="image_8" value=""> </p>
    								<hr>
    								
    								<!-- <label class="control-label" for="image">Choose Images </label>
    								<p class="text-justify" class="text-muted">
    								<input type="file" name="image_9" class="custom" id="image_9" value=""> </p>
    								<hr>
    								
    								<label class="control-label" for="image">Choose Images </label>
    								<p class="text-justify" class="text-muted">
    								<input type="file" name="image_10" class="custom" id="image_10" value=""> </p>
    								<hr> -->
    								
    								
    							</div>
							</div>
  						</form>
  					
  					</div>
    			
  			</div>
  			
  	 	</div>
    
  	</div>

</div>		
  			
  			
  			
  			
  			
  			
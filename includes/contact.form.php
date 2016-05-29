<div class="container">

		<div class="jumbotron" id="nested-contact">
		
		</br>
    		<h2 class="text-center">Contact</h2> </br>
    		
    		<p class="body-font-2">Please use this form to send me a message, or contact me at <?php echo constant("PHONE")?> or send an email to <span class="email-hyperlink"> <?php echo constant("EMAIL")?> </span>. </p> </br>
		
						<?php
						
							include("../includes/error.display.php");
						
						?>
						
		<div class="bg-danger text-justify text-danger" id="client-errors-box"><p class="text-justify text-danger" class="text-muted"></p></div>
		

    		 <h5 class="text-center" id="mobile-center">Fields marked with a "<span class="required"> &bull; </span>" are required.</h5>   
			
			
			</br>
			
			
				<div class="row">
   				
   					<div class="col-md-5" id="col-md-left">
   					
						<a href="https://www.google.com/maps/place/Soldiers+and+Sailors+Monument/@39.7685271,-86.158044,17z/data=!3m1!4b1!4m2!3m1!1s0x886b50bc261a1291:0x4efb96966bb31be9" target="_blank">
   						<div class="col-md-12" id="map-canvas">
							
						</div>
						
						</a>
      					
      				
      					
      					<p class="body-sub-font"><?php echo '<span class="glyphicon glyphicon-user"></span>' . " " . constant("NAME") . "</br>" . '<span class="glyphicon glyphicon-user" id="spacer"></span>' . " " . constant("TITLE") . "</br>" . " " . constant("PHONE") . "</br>" . " " . '<span class="email-hyperlink">' . constant("EMAIL")?> </span> </p>
      					
      					
      			
    				</div>
   				
    				<div class="col-md-7" id="col-md-center">
    				
    				
      
      				<form method="POST" role="form-inline" name="contact_form" id="contact_form" onsubmit="return validateForm()">
    					<div class="form-group">
    						<div class="col-xs-12" id="col-xs">
      						<label class="control-label" id="firstname-label" name="firstname-label" for="first_name" onfocus="firstNameError()">
                                First Name<span class="required" id="fname-required" onfocus="firstNameError()"> &bull;</span>
                            </label>

                            <input type="text" class="form-control" id="first_name" name="first_name" placeholder="i.e. John" value="<?php echo $first_name?>" onfocus="firstNameError()" onblur="return upper()" tabindex="1">
                            <span class="hidden hidden-error text-right" id="firstname-hidden"> First Name is required and must be letters only.</span>
      					</div>
    				</div>
    						
    						
    						
    				<div class="form-group">
                        <div class="col-xs-12" id="col-xs">
                            <label class="control-label" id="lastname-label" name="lastname-label" for="last_name" onfocus="lastNameError()">
                                Last Name<span class="required" id="lname-required" onfocus="lastNameError()"> &bull;</span>
                            </label>

                            <input type="text" class="form-control" id="last_name" name="last_name" placeholder="i.e. Smith" value="<?php echo $last_name?>" onfocus="return lastNameError()" onblur="return upper()" tabindex="2">
                            <span class="hidden text-right hidden-error" id="lastname-hidden"> Last Name is required and must be letters only.</span>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-xs-12" id="col-xs">
                            <label class="control-label" id="email-label" name="email-label" for="email" onfocus="emailNameError()">
                                Email<span class="required" id="email-required" onfocus="emailNameError()"> &bull;</span>
                            </label>

                            <input type="email" class="form-control" id="email" name="email" placeholder="i.e. john.smith@example.com" value="<?php echo $email?>" onfocus="emailError()" tabindex="3">
                            <span class="hidden text-right hidden-error" id="email-hidden"> Email is required and must be formated correctly.</span>
                        </div>
                    </div>



                    <div class="form-group">
                        <div class="col-xs-12" id="col-xs">
                            <label class="control-label" id="comment-label" name="comment-label" for="comment" onfocus="commentError()">
                                Comments<span class="required" id="comment-required" onfocus="commentError()"> &bull;</span>
                            </label>
                            <textarea class="form-control" rows="14" maxlength="500" id="comment" name="comment" placeholder="Please enter a comment." onfocus="commentError()" onblur="return upper()" tabindex="11"><?php echo $comment?></textarea>
                            <span class="hidden text-right hidden-error" id="comment-hidden"> Comment must be at least 50 characters.</span>
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

</div>
</div>
</div>


				<hr class="hr-contact">
				
				</br></br></br></br>
			

  					
  			
  			
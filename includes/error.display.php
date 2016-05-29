<?php
						
		if(isset($errors) && count($errors) > 0) {
	
		
			echo '<h4 class="text-danger">Please review and complete required fields.</h4>' . "\n";
								
			echo "\t" . '<div class="bg-danger" id="errors-box">';
								
			echo "\t\t" . '<p class="text-center text-danger" class="text-muted" id="normal-justify-text">';
								
		
				foreach($errors as $error) {
		
					echo "\t\t" . '<span>&bull; </span>' . $error . " ";
			
				}
		
			echo "\t" . '</div>';
								
			echo "\t\t" . '</p>';
		
		}
						
?>
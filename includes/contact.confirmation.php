<?php

	
		echo '<div class="jumbotron" id="main">';

		echo "\t" . '<div class="container-fluid confirmation-box">';
		
   		echo '<h3>' . $page . '</h3></br>';
   		
   		echo "<h4> Thank you for your comment.</h4> \n <h4>$first_name $last_name \n </h4> <h4><a href=\"mailto:$email\" title = \"Email Address: $first_name $last_name\" class='response-text'>$email</a> \n </h4>";
   		
		echo '<p id="normal-justify-text">' . htmlspecialchars($comment, ENT_QUOTES, 'utf-8') . '</p>';
		
		echo '<p class="confirmation small" id="normal-justify-text"> <b>Submitted: ' . date('l, F, d, Y') . '</b></p>';
		
		echo '</br><h4 class="mobile-nav-return">Return To</h4>';
		
		echo '</br><p class="mobile-nav-return confirmation small" id="normal-justify-text"><a href="' . ABSOLUTE_PATH . '">Home</a> | 
			 <a href="' . ABSOLUTE_PATH . 'portfolio/">Portfolio</a> | 
			 <a href="' . ABSOLUTE_PATH . 'skills/">Skills</a> | 
			 <a href="' . ABSOLUTE_PATH . 'contact/">Contact</a></br></br><hr class="hr"></p>';
	
		echo "\t" . "\t" . '</div>';
	
		echo '</div>';
		
		
		
?>
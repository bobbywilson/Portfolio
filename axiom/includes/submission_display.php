<?php

	
		echo '<div class="jumbotron" id="main">';

		echo "\t" . '<div class="container-fluid">';

		echo "\t" . "\t" . '<div class="jumbotron" id="nested">';
		
   		echo '<h2>' . $page . '</h2>';
   		
   		echo "</br><h4> Thank you for your comment!</h3> \n <p class='text-justify'><b>$first_name $last_name</b> \n </br> <a href=\"mailto:$email\" title = \"Email Address $first_name $last_name\">$email</a> \n </br> </p></h4>";
   		
		echo '<p class="text-justify" class="text-muted">' . htmlspecialchars($comment, ENT_QUOTES, 'utf-8') . '</p>';
		
		echo '<p class="text-justify" class="text-muted"> <b>Updated: ' . date('l, F, d, Y') . '</b></p>';
		
		echo "\t" . "\t" . '</div>';
		echo "\t" . '</div>';
		echo '</div>';
		
		
?>
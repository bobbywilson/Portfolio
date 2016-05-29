<?php

	session_start();

	if ((isset($_SESSION['views']) && $_SESSION['views'] == "loggedout" || $_SESSION['views'] == "")) {
	
	header('Location: ../includes/login_error_display.php');
	
	}


include("../config.php");

$page = "Comments";

	include("../classes/comments.class.php");
			
		$comment = new Comments();
			
		$get_comment = $comment->get_comment_blog();
		$count = $get_comment->rowCount();
	
		
			if($count > 0) {
		
				while ($item = $get_comment->fetch(PDO::FETCH_OBJ)) {
			
						 
				$output_comment .= '<p class="text-center">' . $item->comment . '</p>' .
				
				'<hr><p class="text-center text-muted" id="small"><b>posted on: </b>' . date("m/d/Y", strtotime($item->created_at)) . " - " . 
				'<b>by: </b>' . $item->first_name . " " . $item->last_name . " - " . '<b>email: </b> <a href="mailto:' . $item->email . '?Subject=Bon Appétit!" target="_top">' . $item->email . '</a></p>';
					
					}	
					
				
				} else {
					
						$output_comment = '<p class="text-justify"> No comments to display </p>';		
					
				}
				
			unset($comment);

include("../includes/header.php");



?>

		
	<div class="jumbotron" id="main">

		<div class="container-fluid">

			<div class="jumbotron" id="nested">
			
			<h2><?php echo $page; ?></h2></br>
			
			<?php
    		
	
				echo '<p class="text-success">' . $_SESSION['views'] . ', you have successfully logged in. </p>';
    		
    		?>
			
			
   	
			<?php include("../includes/menu_buttons.php");?>

	
			<?=$output_comment;?>

			</div>
			
		</div>
		
	</div>
 
 
 <?php 
 
 
 include("../includes/footer.php");
 
 
 ?>
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
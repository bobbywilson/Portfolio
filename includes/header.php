 <?php

	function page_title($page="") {
	
		$title = constant("NAME");
		
		if ($page !== "") {
		
			echo $title = $title . " | " . $page;
			
		} else {
			
			echo $title = $title . " | " . "Home";
			
		}

	}
	
	
	function states_list() {
	
			$states = array('AK'=>'Alaska', 'HI'=>'Hawaii', 'CA'=>'California', 'NV'=>'Nevada', 'OR'=>'Oregon', 'WA'=>'Washington', 'AZ'=>'Arizona', 'CO'=>'Colorado', 'ID'=>'Idaho', 'yT'=>'Montana', 'NE'=>'Nebraska', 'NM'=>'New Mexico', 'ND'=>'North Dakota', 'UT'=>'Utah', 'WY'=>'Wyoming', 'AL'=>'Alabama', 'AR'=>'Arkansas', 'IL'=>'Illinois', 'IA'=>'Iowa', 'KS'=>'Kansas', 'KY'=>'Kentucky', 'LA'=>'Louisiana', 'MN'=>'Minnesota', 'MS'=>'Mississippi', 'MO'=>'Missouri', 'OK'=>'Oklahoma', 'SD'=>'South Dakota', 'TX'=>'Texas', 'TN'=>'Tennessee', 'WI'=>'Wisconsin', 'CT'=>'Connecticut', 'DE'=>'Delaware', 'FL'=>'Florida', 'GA'=>'Georgia', 'IN'=>'Indiana', 'ME'=>'Maine', 'MD'=>'Maryland', 'MA'=>'Massachusetts', 'MI'=>'Michigan', 'NH'=>'New Hampshire', 'NJ'=>'New Jersey', 'NY'=>'New York', 'NC'=>'North Carolina', 'OH'=>'Ohio', 'PA'=>'Pennsylvania', 'RI'=>'Rhode Island', 'SC'=>'South Carolina', 'VT'=>'Vermont', 'VA'=>'Virginia', 'WV'=>'West Virginia');
			sort($states);
	
	 
	
	
		foreach ($states as $key => $value) {
			
				echo '<option>' . " " . $value . " " . '</option>' . "</br>" . "\n" . "\t\t\t\t\t\t\t\t\t\t";
		}
		
	}

?>


<!DOCTYPE html>

<html lang="en">

<head>

	<title><?php echo page_title($page); ?></title>
	
	<meta http-equiv="content-type" content="text/html; charset=utf-8" >
	<meta name="description" content="bobby w wilson, bobby wilson, bobbywwilson">
	<meta name="keywords" content="bobby w wilson, bobby wilson, bobbywwilson">
	<meta name="author" content="Bobby Wilson">
	<meta property="og:image" content="http://www.bobbywwilson.com/assets/img/bobby-wilson.png" />
	
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<link rel="icon" href="<?php echo ABSOLUTE_PATH . 'assets/img/favicon.ico' ?>" />
	
	<link rel="apple-touch-icon" sizes="152x152" href="<?php echo ABSOLUTE_PATH . 'assets/img/ios/Icon.png' ?>" />
	<link rel="apple-touch-icon" sizes="144x144" href="<?php echo ABSOLUTE_PATH . 'assets/img/ios/Icon.png' ?>" />
	<link rel="apple-touch-icon" sizes="120x120" href="<?php echo ABSOLUTE_PATH . 'assets/img/ios/Icon.png' ?>" />
	<link rel="apple-touch-icon" sizes="114x114" href="<?php echo ABSOLUTE_PATH . 'assets/img/ios/Icon.png' ?>" />
	<link rel="apple-touch-icon" sizes="72x72" href="<?php echo ABSOLUTE_PATH . 'assets/img/ios/Icon.png' ?>" />
	<link rel="apple-touch-icon" href="<?php echo ABSOLUTE_PATH . 'assets/img/ios/Icon.png' ?>">
	
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	
	<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700italic 700,900,900italic' rel='stylesheet' type='text/css'>
	
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
	
	<link href='https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300italic,400,700,400italic,700italic' rel='stylesheet' type='text/css'>
	
	<script src="https://maps.googleapis.com/maps/api/js"></script>
	
	<link rel="stylesheet" href="<?php echo ABSOLUTE_PATH . 'assets/css/stylesheet.css'?>">
	<link rel="stylesheet" href="<?php echo ABSOLUTE_PATH . 'assets/css/responsive.css'?>">
	
	<?php
	
		if(isset($js)) {
		
			echo '<script src="' . $js . '">' . '</script>';
	
		}
		
	?>
	
	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
	
	  ga('create', 'UA-68574378-1', 'auto');
	  ga('send', 'pageview');
	
	</script>
	
	<a class="sr-only" href="https://plus.google.com/u/0/114194462070597222604/posts" rel="author" >Google +</a>
	
</head>

<body>
	
	<nav class="navbar" id="navbar-wrapper">
  		<div class="container-fluid">
    		<div class="navbar-header">
      			<a class="" href="<?php echo ABSOLUTE_PATH?>"><img src="<?php echo ABSOLUTE_PATH . 'assets/img/bobby-wilson.png'?>" alt="Bobby Wilson" class="img-circle img-responsive logo-img-self"></a>
      			
      			<a class="navbar-brand-text" href="<?php echo ABSOLUTE_PATH?>">
      				Bobby Wilson
      			</a>
      			
        		
    		</div>
    		
    		<div class="nav-buttons" id="nav-buttons">
      			<!--<ul class="nav navbar-nav" id="nav navbar-nav">-->
      			<ul class="nav navbar-nav navbar-right">
        			<li class="<?php if ($page == "") {echo "active-heading";} ?>" ><a href="<?php echo ABSOLUTE_PATH ?>" >Home</a></li>
        			<!--<li class="<?php if ($page == "About") {echo "active-heading";} ?>" ><a href="<?php echo ABSOLUTE_PATH . "about/"?>">About</a></li>-->
        			<li class="<?php if ($page == "Portfolio") {echo "active-heading";} ?>" ><a href="<?php echo ABSOLUTE_PATH . "portfolio/"?>">Portfolio</a></li>
        			<li class="<?php if ($page == "Skills") {echo "active-heading";} ?>" ><a href="<?php echo ABSOLUTE_PATH . "skills/"?>">Skills</a></li>
        	 		<li class="<?php if ($page == "Contact") {echo "active-heading";} ?>" ><a href="<?php echo ABSOLUTE_PATH . "contact/"?>">Contact</a></li>
        		</ul>
        		
        		<!--<ul class="nav navbar-nav navbar-right" id="header-contact">
					<li><a href="<?php echo ABSOLUTE_PATH . "contact/"?>"><?php echo constant("PHONE"); ?></a></li>
					<li><?php echo constant("EMAIL"); ?></li>
				</ul>-->
        	
        	</div>
        	
        	<div class="dropdown mobile-dropdown pull-right">
        	  <a href="" class="btn btn-default dropdown-toggle mobile-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
        	    <i class="fa fa-bars fa-2x mobile-menu"></i>
        	  </a>
        	  <ul class="dropdown-menu mobile-dropdown-menu" aria-labelledby="dropdownMenu1">
        	    <li><a href="<?php echo ABSOLUTE_PATH ?>">Home</a></li>
        	    <li role="separator" class="divider"></li>
        	    <li><a href="<?php echo ABSOLUTE_PATH . "portfolio/"?>">Portfolio</a></li>
        	    <li role="separator" class="divider"></li>
        	    <li><a href="<?php echo ABSOLUTE_PATH . "skills/"?>">Skills</a></li>
        	    <li role="separator" class="divider"></li>
        	    <li><a href="<?php echo ABSOLUTE_PATH . "contact/"?>">Contact</a></li>
        	  </ul>
        	</div>
    		
  		</div>
  		    		
	</nav>

	<div class="hero-image">

		<div class="row hero-text">

			<div class="col-sm-4 col-md-4 col-lg-4">
			
				<!--<div class="row">
					<p class="text-left"><?php echo constant("GITHUB"); ?></p>
					<p class="text-left"><?php echo constant("LINKEDIN"); ?></p>
					<p class="text-left"><?php echo constant("FACEBOOK"); ?></p>
				</div>-->
			
			</div>

			<div class="col-sm-4 col-md-4 col-lg-4 main-hero-heading">
				
				<h1 class="text-center">
					<span class="text-uppercase">Bobby Wilson</span> </br> 
					<span class="text-uppercase heading-small">Web Developer</span>
				</h1>
				
			</div>

			<div class="col-sm-4 col-md-4 col-lg-4">
				
			</div>

		</div>
		

	</div>
	
	
	
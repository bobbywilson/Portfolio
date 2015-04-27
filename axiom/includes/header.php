
<?php


	function page_title($page="") {
	
		$title = constant("BUSINESS_NAME");
		
		if ($page !== "") {
		
			echo $title = $title . " :: " . $page;
			
		} else {
			
			echo $title = $title . " :: " . "Home";
			
		}

	}
	
	
	
	function states_list() {
	
			$states = array('AK'=>'Alaska', 'HI'=>'Hawaii', 'CA'=>'California', 'NV'=>'Nevada', 'OR'=>'Oregon', 'WA'=>'Washington', 'AZ'=>'Arizona', 'CO'=>'Colorada', 'ID'=>'Idaho', 'MT'=>'Montana', 'NE'=>'Nebraska', 'NM'=>'New Mexico', 'ND'=>'North Dakota', 'UT'=>'Utah', 'WY'=>'Wyoming', 'AL'=>'Alabama', 'AR'=>'Arkansas', 'IL'=>'Illinois', 'IA'=>'Iowa', 'KS'=>'Kansas', 'KY'=>'Kentucky', 'LA'=>'Louisiana', 'MN'=>'Minnesota', 'MS'=>'Mississippi', 'MO'=>'Missouri', 'OK'=>'Oklahoma', 'SD'=>'South Dakota', 'TX'=>'Texas', 'TN'=>'Tennessee', 'WI'=>'Wisconsin', 'CT'=>'Connecticut', 'DE'=>'Delaware', 'FL'=>'Florida', 'GA'=>'Georgia', 'IN'=>'Indiana', 'ME'=>'Maine', 'MD'=>'Maryland', 'MA'=>'Massachusetts', 'MI'=>'Michigan', 'NH'=>'New Hampshire', 'NJ'=>'New Jersey', 'NY'=>'New York', 'NC'=>'North Carolina', 'OH'=>'Ohio', 'PA'=>'Pennsylvania', 'RI'=>'Rhode Island', 'SC'=>'South Carolina', 'VT'=>'Vermont', 'VA'=>'Virginia', 'WV'=>'West Virginia');
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
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
	
	<script src="https://maps.googleapis.com/maps/api/js"></script>
	
	<link rel="stylesheet" href="<?php echo ABSOLUTE_PATH . 'assets/css/index.css'?>">
	<link rel="stylesheet" href="<?php echo ABSOLUTE_PATH . 'assets/css/responsive.css'?>">
	
	<?php $js = URL_ROOT . "assets/js/javascript.js"; ?>
	
	<script>
	
	function loadRentBuy()	{var xmlhttp; if (window.XMLHttpRequest){xmlhttp=new XMLHttpRequest();} else	
	{xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");}xmlhttp.onreadystatechange=function()	{
  	if (xmlhttp.readyState==4 && xmlhttp.status == 200)	{document.getElementById("resources").innerHTML=xmlhttp.responseText;}}
	xmlhttp.open("GET","<?php echo ABSOLUTE_PATH . 'assets/ajax/resident/rent_or_buy.txt'?>",true);xmlhttp.send();}
	
	function loadRentals()	{var xmlhttp; if (window.XMLHttpRequest){xmlhttp=new XMLHttpRequest();} else	
	{xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");}xmlhttp.onreadystatechange=function()	{
  	if (xmlhttp.readyState==4 && xmlhttp.status == 200)	{document.getElementById("resources").innerHTML=xmlhttp.responseText;}}
	xmlhttp.open("GET","<?php echo ABSOLUTE_PATH . 'assets/ajax/resident/rentals.txt'?>",true);xmlhttp.send();}
		
	function loadLandlord()	{var xmlhttp; if (window.XMLHttpRequest){xmlhttp=new XMLHttpRequest();} else	
	{xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");}xmlhttp.onreadystatechange=function()	{
  	if (xmlhttp.readyState==4 && xmlhttp.status == 200)	{document.getElementById("resources").innerHTML=xmlhttp.responseText;}}
	xmlhttp.open("GET","<?php echo ABSOLUTE_PATH . 'assets/ajax/resident/landlord.txt'?>",true);xmlhttp.send();}
		
	function loadCredit()	{var xmlhttp; if (window.XMLHttpRequest){xmlhttp=new XMLHttpRequest();} else	
	{xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");}xmlhttp.onreadystatechange=function()	{
  	if (xmlhttp.readyState==4 && xmlhttp.status == 200)	{document.getElementById("resources").innerHTML=xmlhttp.responseText;}}
	xmlhttp.open("GET","<?php echo ABSOLUTE_PATH . 'assets/ajax/resident/credit_score.txt'?>",true);xmlhttp.send();}
	
	function loadUtilities()	{var xmlhttp; if (window.XMLHttpRequest){xmlhttp=new XMLHttpRequest();} else	
	{xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");}xmlhttp.onreadystatechange=function()	{
  	if (xmlhttp.readyState==4 && xmlhttp.status == 200)	{document.getElementById("resources").innerHTML=xmlhttp.responseText;}}
	xmlhttp.open("GET","<?php echo ABSOLUTE_PATH . 'assets/ajax/resident/utilities.txt'?>",true);xmlhttp.send();}



	function loadPlacement() {var xmlhttp; if (window.XMLHttpRequest){xmlhttp=new XMLHttpRequest();} else	
	{xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");}xmlhttp.onreadystatechange=function()	{
  	if (xmlhttp.readyState==4 && xmlhttp.status == 200)	{document.getElementById("resources").innerHTML=xmlhttp.responseText;}}
	xmlhttp.open("GET","<?php echo ABSOLUTE_PATH . 'assets/ajax/client/client_package/placement.txt'?>",true);xmlhttp.send();}
		
	function loadProfessional()	{var xmlhttp; if (window.XMLHttpRequest){xmlhttp=new XMLHttpRequest();} else	
	{xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");}xmlhttp.onreadystatechange=function()	{
  	if (xmlhttp.readyState==4 && xmlhttp.status == 200)	{document.getElementById("resources").innerHTML=xmlhttp.responseText;}}
	xmlhttp.open("GET","<?php echo ABSOLUTE_PATH . 'assets/ajax/client/client_package/professional.txt'?>",true);xmlhttp.send();}
	
	function loadMaintenance()	{var xmlhttp; if (window.XMLHttpRequest){xmlhttp=new XMLHttpRequest();} else	
	{xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");}xmlhttp.onreadystatechange=function()	{
  	if (xmlhttp.readyState==4 && xmlhttp.status == 200)	{document.getElementById("resources").innerHTML=xmlhttp.responseText;}}
	xmlhttp.open("GET","<?php echo ABSOLUTE_PATH . 'assets/ajax/client/client_package/maintenance.txt'?>",true);xmlhttp.send();}
	
	function loadReporting()	{var xmlhttp; if (window.XMLHttpRequest){xmlhttp=new XMLHttpRequest();} else	
	{xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");}xmlhttp.onreadystatechange=function()	{
  	if (xmlhttp.readyState==4 && xmlhttp.status == 200)	{document.getElementById("resources").innerHTML=xmlhttp.responseText;}}
	xmlhttp.open("GET","<?php echo ABSOLUTE_PATH . 'assets/ajax/client/client_package/reporting.txt'?>",true);xmlhttp.send();}
	
	function loadFee()	{var xmlhttp; if (window.XMLHttpRequest){xmlhttp=new XMLHttpRequest();} else	
	{xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");}xmlhttp.onreadystatechange=function()	{
  	if (xmlhttp.readyState==4 && xmlhttp.status == 200)	{document.getElementById("resources").innerHTML=xmlhttp.responseText;}}
	xmlhttp.open("GET","<?php echo ABSOLUTE_PATH . 'assets/ajax/client/client_package/fee.txt'?>",true);xmlhttp.send();}
	
	function loadOther()	{var xmlhttp; if (window.XMLHttpRequest){xmlhttp=new XMLHttpRequest();} else	
	{xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");} xmlhttp.onreadystatechange=function()	{
  	if (xmlhttp.readyState==4 && xmlhttp.status == 200)	{document.getElementById("resources").innerHTML=xmlhttp.responseText;}}
	xmlhttp.open("GET","<?php echo ABSOLUTE_PATH . 'assets/ajax/client/client_package/other.txt'?>",true);xmlhttp.send();}
	
	
	
	function loadInvest()	{var xmlhttp; if (window.XMLHttpRequest){xmlhttp=new XMLHttpRequest();} else	
	{xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");}xmlhttp.onreadystatechange=function()	{
  	if (xmlhttp.readyState==4 && xmlhttp.status == 200)	{document.getElementById("resources").innerHTML=xmlhttp.responseText;}}
	xmlhttp.open("GET","<?php echo ABSOLUTE_PATH . 'assets/ajax/client/client_resources/why_invest.txt'?>",true);xmlhttp.send();}
	
	function loadBuy()	{var xmlhttp; if (window.XMLHttpRequest){xmlhttp=new XMLHttpRequest();} else	
	{xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");}xmlhttp.onreadystatechange=function()	{
  	if (xmlhttp.readyState==4 && xmlhttp.status == 200)	{document.getElementById("resources").innerHTML=xmlhttp.responseText;}}
	xmlhttp.open("GET","<?php echo ABSOLUTE_PATH . 'assets/ajax/client/client_resources/buying_process.txt'?>",true);xmlhttp.send();}
	
	function loadProfit() {var xmlhttp; if (window.XMLHttpRequest){xmlhttp=new XMLHttpRequest();} else	
	{xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");}xmlhttp.onreadystatechange=function()	{
  	if (xmlhttp.readyState==4 && xmlhttp.status == 200)	{document.getElementById("resources").innerHTML=xmlhttp.responseText;}}
	xmlhttp.open("GET","<?php echo ABSOLUTE_PATH . 'assets/ajax/client/client_resources/profit.txt'?>",true);xmlhttp.send();}
	
	function loadManagement()	{var xmlhttp; if (window.XMLHttpRequest){xmlhttp=new XMLHttpRequest();} else	
	{xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");}xmlhttp.onreadystatechange=function()	{
  	if (xmlhttp.readyState==4 && xmlhttp.status == 200)	{document.getElementById("resources").innerHTML=xmlhttp.responseText;}}
	xmlhttp.open("GET","<?php echo ABSOLUTE_PATH . 'assets/ajax/client/client_resources/management.txt'?>",true);xmlhttp.send();}
	
	function loadContact()	{var xmlhttp; if (window.XMLHttpRequest){xmlhttp=new XMLHttpRequest();} else	
	{xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");} xmlhttp.onreadystatechange=function()	{
  	if (xmlhttp.readyState==4 && xmlhttp.status == 200)	{document.getElementById("resources").innerHTML=xmlhttp.responseText;}}
	xmlhttp.open("GET","<?php echo ABSOLUTE_PATH . 'assets/ajax/client/client_resources/contact_us.txt'?>",true);xmlhttp.send();}
	
</script>

<?php

	if(isset($js)) {
	
		echo '<script src="' . $js . '">' . '</script>';
	
	
	}
	
?>
	
</head>

<body>
	

	<nav class="navbar navbar-inverse" id="navbar-wrapper">
  		<div class="container-fluid">
    		<div class="navbar-header">
      			<a class="navbar-brand" href="<?php echo ABSOLUTE_PATH . "index.php"?>"><span class="glyphicon glyphicon-home" <?php echo $home_icon; ?> ></span></a>
    		</div>
    		
    		<div class="nav-buttons" id="header-buttons">
      			<ul class="nav navbar-nav">
        			<li <?php echo $home_status; ?> ><a href="<?php echo ABSOLUTE_PATH . "index.php"?>">Home</a></li>
        			<li <?php echo $about_status; ?> ><a href="<?php echo ABSOLUTE_PATH . "about/index.php"?>">About Us</a></li>
        	
        			<li <?php echo $properties_status; ?>><a class="dropdown-toggle" data-toggle="dropdown" href="<?php echo ABSOLUTE_PATH . "properties/index.php"?>">Available Properties</a>
        				<ul class="dropdown-menu" id="properties">
            				<li class="dropdown" id="dropdown"><a href="<?php echo ABSOLUTE_PATH . "properties/index.php"?>"><span class="glyphicon glyphicon-search"></span> Browse Rental Property</a></li>
            				<li role="presentation" class="divider"></li>
            				<li class="dropdown" id="dropdown"><a href="<?php echo ABSOLUTE_PATH . "properties/rental_introduction.php"?>"><span class="glyphicon glyphicon-book"></span> Read Rental Introduction</a></li>
            				<li role="presentation" class="divider"></li>
            				<li class="dropdown" id="dropdown"><a href="<?php echo ABSOLUTE_PATH . "properties/tour.php"?>"><span class="glyphicon glyphicon-calendar"></span> Schedule a Property Tour</a></li>
            				<li role="presentation" class="divider"></li>
           					<li class="dropdown" id="dropdown"><a href="<?php echo ABSOLUTE_PATH . "properties/rental_application.php"?>"><span class="glyphicon glyphicon-list-alt"></span> Complete Rental Application</a></li>
          				</ul>
          			</li>
        			
        		
        			<li <?php echo $residents_status; ?>><a class="dropdown-toggle" data-toggle="dropdown" href="<?php echo ABSOLUTE_PATH . "residents/index.php"?>">Residents</a>
        				<ul class="dropdown-menu" id="residents">
            				<li class="dropdown" id="dropdown"><a href="<?php echo ABSOLUTE_PATH . "residents/resident_introduction.php"?>"><span class="glyphicon glyphicon-book"></span> Read Resident Introduction</a></li>
            				
            				<li role="presentation" class="divider"></li>
            				<li class="dropdown" id="dropdown"><a href="<?php echo ABSOLUTE_PATH . "residents/resident_handbook.php"?>"><span class="glyphicon glyphicon-info-sign"></span> Read Resident Handbook</a></li>
            				
            				<li role="presentation" class="divider"></li>
           					<li class="dropdown" id="dropdown"><a href="<?php echo ABSOLUTE_PATH . "residents/resident_resources.php"?>"><span class="glyphicon glyphicon-check"></span> View Resident Resources</a></li>
           					
           					<li role="presentation" class="divider"></li>
           					<li class="dropdown" id="dropdown"><a href="<?php echo ABSOLUTE_PATH . "residents/facts_questions.php"?>"><span class="glyphicon glyphicon-question-sign"></span> Read Resident FAQ</a></li>
           					
           					<!--<li role="presentation" class="divider"></li>
           					<li class="dropdown" id="dropdown"><a href="<?php echo ABSOLUTE_PATH . "residents/resident_login.php"?>"><span class="glyphicon glyphicon-log-in"></span> Login as a Resident</a></li>-->
          				</ul>
          			</li>
        			
        			
        			
       				<li <?php echo $client_status; ?>><a class="dropdown-toggle" data-toggle="dropdown" href="<?php echo ABSOLUTE_PATH . "management/index.php"?>">Property Management</a>
        				<ul class="dropdown-menu" id="clients">
            				<li class="dropdown" id="dropdown"><a href="<?php echo ABSOLUTE_PATH . "management/client_introduction.php"?>"><span class="glyphicon glyphicon-book"></span> Read Client Introduction</a></li>
            				
            				<li role="presentation" class="divider"></li>
            				<li class="dropdown" id="dropdown"><a href="<?php echo ABSOLUTE_PATH . "management/why_manager.php"?>"><span class="glyphicon glyphicon-link"></span> Why Get a Property Manager</a></li>
            				
            				<li role="presentation" class="divider"></li>
            				<li class="dropdown" id="dropdown"><a href="<?php echo ABSOLUTE_PATH . "management/real_package.php"?>"><span class="glyphicon glyphicon-tag"></span> Total Real Estate Package</a></li>
            				
            				<li role="presentation" class="divider"></li>
           					<li class="dropdown" id="dropdown"><a href="<?php echo ABSOLUTE_PATH . "management/management_resources.php"?>"><span class="glyphicon glyphicon-check"></span> View Client Resources</a></li>
           					
           					<li role="presentation" class="divider"></li>
           					<li class="dropdown" id="dropdown"><a href="<?php echo ABSOLUTE_PATH . "management/facts_questions.php"?>"><span class="glyphicon glyphicon-question-sign"></span> Read Client FAQ</a></li>
           					
           					<!--<li role="presentation" class="divider"></li>
           					<li class="dropdown" id="dropdown"><a href="<?php echo ABSOLUTE_PATH . "management/management_login.php"?>"><span class="glyphicon glyphicon-log-in"></span> Login as a Client</a></li>-->
          				</ul>
          			</li>
        			<li <?php echo $contact_status; ?>><a href="<?php echo ABSOLUTE_PATH . "contact/index.php"?>">Contact Us</a></li>
      			</ul>
      			
      			<ul class="nav navbar-nav navbar-right" id="header-contact">
      				<li><a href="<?php echo ABSOLUTE_PATH . "contact/index.php"?>"><?php echo constant("BUSINESS_PHONE"); ?></a></li>
      				<li><a href="<?php echo ABSOLUTE_PATH . "contact/index.php"?>"><?php echo constant("BUSINESS_FAX"); ?></a></li>
      				<li><a href="<?php echo ABSOLUTE_PATH . "administrator/index.php"?>"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      				
      		
      			</ul>
    		</div>
    		
  		</div>
  		
  		<div class="navbar-header" id="navbar-header">
    
    			<ul class="nav navbar-nav">
    	
    				<li><a class="dropdown-toggle" data-toggle="dropdown" href="<?php echo ABSOLUTE_PATH . "properties/index.php"?>"><span class="glyphicon glyphicon-align-justify" id="align-justify" ></span></a>
        				<ul class="dropdown-menu" id="iphone-menu">
            				
        					<li class="dropdown" id="dropdown"><a href="<?php echo ABSOLUTE_PATH . "about/index.php"?>"><span class="glyphicon glyphicon-question-sign"></span> About Us</a></li>
        					<li role="presentation" class="divider" id="divider"></li>
        					<li class="dropdown" id="dropdown"><a href="<?php echo ABSOLUTE_PATH . "properties/index.php"?>"><span class="glyphicon glyphicon-search"></span> Browse Rental Property</a></li>
            				<li role="presentation" class="divider" id="divider"></li>
            				<li class="dropdown" id="dropdown"><a href="<?php echo ABSOLUTE_PATH . "properties/rental_introduction.php"?>"><span class="glyphicon glyphicon-book"></span> Read Rental Introduction</a></li>
            				<li role="presentation" class="divider" id="divider"></li>
            				<li class="dropdown" id="dropdown"><a href="<?php echo ABSOLUTE_PATH . "properties/tour.php"?>"><span class="glyphicon glyphicon-calendar"></span> Schedule a Property Tour</a></li>
            				<li role="presentation" class="divider" id="divider"></li>
           					<li class="dropdown" id="dropdown"><a href="<?php echo ABSOLUTE_PATH . "properties/rental_application.php"?>"><span class="glyphicon glyphicon-list-alt"></span> Complete Rental Application</a></li>
           					<li role="presentation" class="divider" id="divider"></li>
           					<li class="dropdown" id="dropdown"><a href="<?php echo ABSOLUTE_PATH . "residents/resident_introduction.php"?>"><span class="glyphicon glyphicon-book"></span> Read Resident Introduction</a></li>
            				
            				<li role="presentation" class="divider" id="divider"></li>
            				<li class="dropdown" id="dropdown"><a href="<?php echo ABSOLUTE_PATH . "residents/resident_handbook.php"?>"><span class="glyphicon glyphicon-info-sign"></span> Read Resident Handbook</a></li>
            				
            				<li role="presentation" class="divider" id="divider"></li>
           					<li class="dropdown" id="dropdown"><a href="<?php echo ABSOLUTE_PATH . "residents/resident_resources.php"?>"><span class="glyphicon glyphicon-check"></span> View Resident Resources</a></li>
           					
           					<li role="presentation" class="divider" id="divider"></li>
           					<li class="dropdown" id="dropdown"><a href="<?php echo ABSOLUTE_PATH . "residents/facts_questions.php"?>"><span class="glyphicon glyphicon-question-sign"></span> Read Resident FAQ</a></li>
           					<li role="presentation" class="divider" id="divider"></li>
           					<li class="dropdown" id="dropdown"><a href="<?php echo ABSOLUTE_PATH . "management/client_introduction.php"?>"><span class="glyphicon glyphicon-book"></span> Read Client Introduction</a></li>
            				
            				<li role="presentation" class="divider" id="divider"></li>
            				<li class="dropdown" id="dropdown"><a href="<?php echo ABSOLUTE_PATH . "management/why_manager.php"?>"><span class="glyphicon glyphicon-link"></span> Why Get a Property Manager</a></li>
            				
            				<li role="presentation" class="divider" id="divider"></li>
            				<li class="dropdown" id="dropdown"><a href="<?php echo ABSOLUTE_PATH . "management/real_package.php"?>"><span class="glyphicon glyphicon-tag"></span> Total Real Estate Package</a></li>
            				
            				<li role="presentation" class="divider" id="divider"></li>
           					<li class="dropdown" id="dropdown"><a href="<?php echo ABSOLUTE_PATH . "management/management_resources.php"?>"><span class="glyphicon glyphicon-check"></span> View Client Resources</a></li>
           					
           					<li role="presentation" class="divider" id="divider"></li>
           					<li class="dropdown" id="dropdown"><a href="<?php echo ABSOLUTE_PATH . "management/facts_questions.php"?>"><span class="glyphicon glyphicon-question-sign"></span> Read Client FAQ</a></li>
           					<li role="presentation" class="divider" id="divider"></li>
           					<li class="dropdown" id="dropdown"><a href="<?php echo ABSOLUTE_PATH . "contact/index.php"?>"><span class="glyphicon glyphicon-envelope"></span> Contact Us</a></li>
           					<li role="presentation" class="divider" id="divider"></li>
           					<li class="dropdown" id="dropdown"><a href="<?php echo ABSOLUTE_PATH . "administrator/index.php"?>"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
           					<li role="presentation" class="divider" id="divider"></li>
           					
           					
          			</ul>
          		</li>
          	</ul>	
        </div>
    		
	</nav>
	
	<nav class="navbar navbar-inverse" id="logo-wrapper">
  		<div class="container-fluid">
    		<div class="navbar-header">
      			<a class="navbar-brand" href="<?php echo ABSOLUTE_PATH . "index.php"?>"><img src="<?php echo ABSOLUTE_PATH . 'assets/images/id5.jpg'?>" alt="" id="logo"></a>
    		</div>
  		</div>
	</nav>


<div id="carousel-wrapper">
	
	<div id="carousel" data-interval="7000" class="carousel slide" data-ride="carousel">
  		<!-- Indicators -->
  		<ol class="carousel-indicators" id="bullet-indicators">
    		<li data-target="#carousel" data-slide-to="0" class="active"></li>
    		<li data-target="#carousel" data-slide-to="1"></li>
   			<li data-target="#carousel" data-slide-to="2"></li>
    		<li data-target="#carousel" data-slide-to="3"></li>
  		</ol>

  		<!-- Wrapper for slides -->
  		<div class="carousel-inner" role="listbox">
    		<div class="item active">
      			<img src="<?php echo ABSOLUTE_PATH . 'assets/images/id1.jpg'?>" alt="" class="img-full-width">
    		</div>

    		<div class="item">
      			<img src="<?php echo ABSOLUTE_PATH . 'assets/images/id2.jpg'?>" alt="" class="img-full-width">
    		</div>

    		<div class="item">
      			<img src="<?php echo ABSOLUTE_PATH . 'assets/images/id3.jpg'?>" alt="" class="img-full-width">
    		</div>
    		
    		<div class="item">
      			<img src="<?php echo ABSOLUTE_PATH . 'assets/images/id4.jpg'?>" alt="" class="img-full-width">
    		</div>
    		
    	
    		
  		</div>

  			<!-- Left and right controls -->
  			<a class="left carousel-control" id="iphone" href="#carousel" role="button" data-slide="prev">
    			<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    			<span class="sr-only">Previous</span>
  			</a>
  			
  			<a class="right carousel-control" id="iphone" href="#carousel" role="button" data-slide="next">
    			<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    			<span class="sr-only">Next</span>
  			</a>
	</div>

</div>
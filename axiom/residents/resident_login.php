
<?php
	
	include("../config.php");
	
	$page = "About Us";

	$about_status = 'class="active"';

	include("../includes/header.php");

?>



<div class="jumbotron" id="main">

	<div class="container-fluid">

		<div class="jumbotron" id="nested">
		
    		<h2>About Us</h2> </br> 
    		    
   			<p class="text-justify" class="text-muted">Axiom Property Management prides itself on being a company committed to both our clients and our residents. Below are the key members of our team and their contact information:</br></br>
    
    <?php echo '<span class="glyphicon glyphicon-user"></span>' . " " . constant("CEO_NAME") . "</br>" . '<span class="glyphicon glyphicon-user" id="spacer"></span>' . " " . constant("CEO_TITLE") . "</br>" . '<span class="glyphicon glyphicon-phone"></span>' . " " . constant("CEO_PHONE") . "</br>" . '<span class="glyphicon glyphicon-envelope"></span>' . " " . constant("CEO_EMAIL")?></br></br>
    
    		Rob Attinger, President/CEO of Axiom Property Management, began his successful career in property management in 1994.  Mr. Attinger is a former Regional Manager for CMS, Inc. which provided third party management services with over 16,000 units in over seven states until the company sold in 2007.</br></br>

			Real-estate is a very demanding business and the multi-family industry is even more so. Through his experiences with his past employers Mr. Attinger has developed an innate understanding of the industry. It is due to this understanding of the industry that Mr. Attinger can assist his clients through the process of stabilizing their current portfolio as well as evaluating prospective additions to their portfolios.</br></br>

			Mr. Attinger entered the property management industry as a leasing consultant on a 176 unit tax-credit property. After just a short time in leasing, he was promoted to the assistant manager. After nine months in the industry Mr. Attinger was recruited to be the Property Manager of a Class A property less than one year old. From there his career advanced rapidly. These successes culminated in the birth of a new company- Axiom Property Management.</br></br>

			Axiom Property Management provides fee-management services for commercial and residential real estate. Mr. Attinger directly oversees the development and implementation of all business operations, property management software and policies and procedures. Mr. Attinger meets with clients upon their request.</br></br>

			Being a strong leader and a firm believer that to be successful in this or any industry, you must be as dedicated to your industry and community as you are to your position. Mr. Attinger has volunteered for the Apartment Association in each of the markets in which he has worked.</br></br>
			
			
			<?php echo '<span class="glyphicon glyphicon-user"></span>' . " " . constant("VICE_NAME") . "</br>" . '<span class="glyphicon glyphicon-user" id="spacer"></span>' . " " . constant("VICE_TITLE") . "</br>" . '<span class="glyphicon glyphicon-phone"></span>' . " " . constant("VICE_PHONE") . "</br>" . '<span class="glyphicon glyphicon-envelope"></span>' . " " . constant("VICE_EMAIL")?></br></br>
			
			Pat Hachtel, Vice-President of Operations, began her career in the property management field in 1992.  Ms. Hachtel is a former Area Manager for CMS, Inc. which provided third party management services with over 16,000 units over 7 states until the company sold in 2007.</br></br>

Ms. Hachtel entered the property management industry as a bookkeeper/office manager for a commercial property management company. After working in the business for a short time she obtained her real estate license and began working as a property manager responsible for seven commercial properties. Her focus was on maintenance scheduling and supervision, tenant relations, advertising, security provision, budgeting, monthly reports and owner relations.</br></br>

Ms. Hachtel transitioned from commercial to residential property management in 1997. Since that time she has been responsible for leasing, preparing daily and weekly operating reports, delinquency control, preparation of annual budgets, creation and implementation of outreach marketing, scheduling and supervision of turn-key operations, vendor selection and contract administration, invoice remittance, budget control, resident relations and hiring and training staff. Ms. Hachtel managed office buildings, strip shopping centers and warehouse space while working in the commercial arena. In residential management she has been responsible for properties ranging from 184 units up to 640 units and classified as B+ properties; as well as, class C distressed properties.</p>
    
    	</div>
    
  </div>

</div>



<?php

	include("../includes/footer.php");

?>

<?php
	
	include("../config.php");
	
	$page = "Apply Now";

	$properties_status = 'class="active"';

	include("../includes/header.php");

?>



<div class="jumbotron" id="main">

	<div class="container-fluid">

		<div class="jumbotron" id="nested">
		
    		<h2>Complete a Rental Application <button type="button" id="button-top" class="btn btn-success btn-lg"><a href="<?php echo ABSOLUTE_PATH . "properties/index.php"?>">Apply Now</a></button></h2> </br>
    		    
   			<p class="text-justify" class="text-muted">Once you have selected the home you want it is necessary to apply to lease the home. Applications will be available for you to complete at the time of your showing. Applications may also be faxed to you or downloaded from this website.
No one under 18 can apply as a party to a residential leasing agreement. Each adult that will reside in the home must complete his/her own application. To be considered an application must be completely filled out and have an original signature. Signatures on faxed copies are accepted with the original to be mailed to our office.  Our property managers are available <?php echo constant("BUSINESS_HOURS"); ?>. to answer questions and assist with the application process.</br></br>
    
    		There is a non-refundable application fee of $35 per applicant. The fee is to cover our screening and processing cost.  We are a pet friendly company. Pet rent is $20 per month per pet. There is also a non-refunable pet fee that is paid at the time of the lease execution. This fee is $200 for one pet plus $100 for each additional pet. The number of pets accepted varies from property to property.  **Some breed restrictions do apply.</br></br>

			Most applications can be processed in one day. The application holding fee is a minimum of one-half of the first month’s rent. This fee is refunded if the application is not accepted. If the application is accepted, this fee is credited to the Security Deposit.  The balance of the deposit must be paid within 14 days of notification of the approval. Any application that is accepted and then withdrawn by the applicant more than 72 hours from the time of applying will forfeit the holding fee paid.</br></br>

			The screening process includes obtaining previous landlord references. If the applicant is a homeowner and does not have a prior landlord, a realtor or property manager reference is usually sufficient. Our property managers can assist applicants in choosing an appropriate reference for their prior living circumstances.</br></br>
			
			An applicant's income should be at least three times the rental amount. As part of the screening process we verify employment references and salary. For self-employed and non-employment income we verify sources and amounts. Examples of verification of non-employee income are: tax returns, bank and business references, government documents.</br></br>

			The screening process includes running a credit report, criminal background report as well as various others. Based upon the score returned on the application an application will either be approved, conditionally approved or denied. If there is more than one adult applying for the home, each applicant will be scored individually and then a joint score will be given as well.  The approval of an application with more than one adult will be based on the joint score. Please discuss any questions or concerns over credit and/or background requirements with one of our property managers before submitting the application.
Pets are often negotiable. Ask one of our property managers if pets are negotiable for the home being applied for.  Pets are accepted or rejected based on the homeowners discretion.  All applications with a pet must have an appropriate pet reference from someone that has knowledge as to the condition of the property where the pet has previously resided.  Prior landlords and/or realtors are examples of appropriate pet references.</br></br>

			Once the application is accepted the applicant must execute a residential leasing agreement within thirty days from the date of the application.  This can be done at the home, by mail or by fax.  If the application is accepted, and the applicant does not enter into a residential leasing agreement, the application deposit can be forfeited and the property placed back on the rental market.  If a residential lease agreement is not executed within the specified 30 day period and the applicant wishes to extend this period, there is a fee equal to one-half of a month's rent that must be paid to hold the home for an additional 15 days.
If you would like to submit an application for one of our available properties please visit that property on the "Rentals" tab of this site.  If you have any questions, please contact us at <?php echo constant("BUSINESS_PHONE"); ?>.</br></br></p>

<button type="button" id="button" class="btn btn-success btn-lg"><a href="<?php echo ABSOLUTE_PATH . "properties/index.php"?>">Apply Now</a></button></br>
    
    	</div>
    
  </div>

</div>



<?php

	include("../includes/footer.php");

?>
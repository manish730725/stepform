<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Document</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
		<link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@500;600;700&display=swap" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css2?family=Palanquin&display=swap" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700&display=swap" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="https://www.motor.market/temp-desgin-work/style/style.css">

	</head>
	<body>
		<div class="container-lg container-fluid mt-5">
			<div class="form-holder">
				<form id="add_applicant">
				<input type="hidden" data-emp="Yes" id="Employment_Status" name="Employment_Status[]" value="Full-Time Employment" />
				<input type="hidden" id="pre-emp-history"  value="" />
	 	        <input type="hidden" id="pre-address-history"  value="" />
				<input type="hidden" name="monthly-budget" id="monthly-budget" value="£151 - £200 / month">
				<input type="hidden" name="driving-licence" id="driving-licence" value="Full UK">
				<input type="hidden" name="marital-status" id="marital-status" value="Single">
				<input type="hidden" name="uk-passport" id="uk-passport" value="Yes">
				<input type="hidden" name="date-of-birth" id="date-of-birth" value="">
				<input type="hidden" name="Net-monthly-income" id="Net-monthly-income" value="">
				
				<input type="hidden" name="employment-address-required" id="employment-address-required" value="Yes">
			    <input type="hidden" name="employer_final_value" id="employer_final_value" value="">
				<input type="hidden" name="jobtitle_final_value" id="jobtitle_final_value" value="">
					<input type="hidden"  id="Temp-Employment_Status"  value="" />
					<div class="row">
						<div class="col-md-12 car-finance-eligibility text-center">
							<h3>Car Finance Eligibility Checker</h3>
							<p>No impact on your credit. We use a 'soft search', to check records held at the credit reference agencies </p>
						</div>
						<div class="col-md-12">
							<div class="progress-container form-progress" data-step="1">
								<div class="progress-step-container">
									<div class="progress-line-container">
										<div class="progress-line"></div>
									</div>
									<div class="progress-bullet-container progress-bullet-1" style="left:0;">
										<div class="progress-bullet active"></div>
									</div>
									<div class="progress-bullet-container progress-bullet-2" style="left:33.333%;">
										<div class="progress-bullet"></div>
									</div>
									<div class="progress-bullet-container progress-bullet-3" style="left:66.333%;">
										<div class="progress-bullet"></div>
									</div>
									<div class="progress-bullet-container progress-bullet-4" style="left:100%;">
										<div class="progress-bullet"></div>
									</div>
								</div>
							</div>
						</div>
						
					</div>
					<!--=====step-1 monthly budget===========-->
					<div class="step-1 ">
						<div class="row" data-name="monthly-budget-step">
							<div class="col-md-12 step-form-content text-center">
								<h3>Monthly Budget</h3>
								<p>What would you like to spend?</p>
							</div>
							<div class="button-list col-lg-4  col-md-6 col-sm-12" data-value="Under £150 / month">
								<div class="button-list-holder monthly-budget-step">Under £150 / month</div>
							</div>
							<div class="col-lg-4 button-list col-md-6 col-sm-12" data-value="£151 - £200 / month">
								<div class="button-list-holder monthly-budget-step add-class-active">£151 - £200 / month</div>
							</div>
							<div class="col-lg-4 button-list col-md-6 col-sm-12" data-value="£201 - £250 / month">
								<div class="button-list-holder monthly-budget-step">£201 - £250 / month</div>
							</div>
							<div class="col-lg-4 button-list col-md-6 col-sm-12" data-value="£251 - £300 / month">
								<div class="button-list-holder monthly-budget-step">£251 - £300 / month</div>
							</div>
							<div class="col-lg-4 button-list col-md-6 col-sm-12" data-value="£301 - £400 / month">
								<div class="button-list-holder monthly-budget-step">£301 - £400 / month</div>
							</div>
							<div class="col-lg-4 button-list col-md-6 col-sm-12" data-value="Over £400 / month">
								<div class="button-list-holder monthly-budget-step">Over £400 / month</div>
							</div>
						</div>
						<div class="row justify-content-center">
							<div class="col-md-4 next-step" step-button-value="monthly-budget-step">
								<a href="javascript:void(0)" class="btn btn-block btn-next btn-default js-btn-next">Next Step</a>
							</div>
						</div>
					</div>
					<!--======step-2 driving licence====-->
					<div class="step-2 d-none">
						<div class="row" data-name="driving-licence-step">
							<div class="col-md-12 step-form-content text-center">
								<h3>Driving Licence</h3>
								<p>What kind do you have?</p>
							</div>
							<div class="col-lg-3 button-list col-md-4 col-sm-6 col-12" data-value="Full UK">
								<div class="button-list-holder driving-licence-step add-class-active">Full UK</div>
							</div>
							<div class="col-lg-3 button-list col-md-4 col-sm-6 col-12" data-value="Provisional UK">
								<div class="button-list-holder driving-licence-step">Provisional UK</div>
							</div>
							<div class="col-lg-3 button-list col-md-4 col-sm-6 col-12" data-value="CBT">
								<div class="button-list-holder driving-licence-step">CBT</div>
							</div>
							<div class="col-lg-3 button-list col-md-4 col-sm-6 col-12"  data-value="A2">
								<div class="button-list-holder driving-licence-step">A2</div>
							</div>
							<div class="col-lg-3 button-list col-md-4 col-sm-6 col-12" data-value="Full A Class">
								<div class="button-list-holder driving-licence-step">Full A Class</div>
							</div>
							<div class="col-lg-3 button-list col-md-4 col-sm-6 col-12" data-value="European">
								<div class="button-list-holder driving-licence-step">European</div>
							</div>
							<div class="col-lg-3 button-list col-md-4 col-sm-6 col-12" data-value="International">
								<div class="button-list-holder driving-licence-step">International</div>
							</div>
							<div class="col-lg-3 button-list col-md-4 col-sm-6 col-12"  data-value="No Licence">
								<div class="button-list-holder driving-licence-step">No Licence</div>
							</div>
						</div>
						<div class="row justify-content-center">
							<div class="col-md-4 next-step" step-button-value="driving-licence-step">
								<a href="javascript:void(0)" class="btn btn-block btn-next btn-default js-btn-next">Next Step</a>
							</div>
						</div>
					</div>
					<!--======step-3 Marital Status====-->
					<div class="step-3 d-none">
						<div class="row"  data-name="marital-status-step">
							<div class="col-md-12 step-form-content text-center">
								<h3>Marital Status</h3>
								<p>Are you...</p>
							</div>
							<div class="col-lg-3 button-list col-md-4 col-sm-6 col-12" data-value="Single">
								<div class="button-list-holder marital-status-step add-class-active">Single</div>
							</div>
							<div class="col-lg-3 button-list col-md-4 col-sm-6 col-12" data-value="Married">
								<div class="button-list-holder marital-status-step">Married</div>
							</div>
							<div class="col-lg-3 button-list col-md-4 col-sm-6 col-12" data-value="Cohabiting">
								<div class="button-list-holder marital-status-step">Cohabiting</div>
							</div>
							<div class="col-lg-3 button-list col-md-4 col-sm-6 col-12" data-value="Divorced">
								<div class="button-list-holder marital-status-step">Divorced</div>
							</div>
							<div class="col-lg-3 button-list col-md-4 col-sm-6 col-12" data-value="Separated">
								<div class="button-list-holder marital-status-step">Separated</div>
							</div>
							<div class="col-lg-3 button-list col-md-4 col-sm-6 col-12" data-value="Widowed">
								<div class="button-list-holder marital-status-step">Widowed</div>
							</div>
							<div class="col-lg-3 button-list col-md-4 col-sm-6 col-12" data-value="Civil Partnership">
								<div class="button-list-holder marital-status-step">Civil Partnership</div>
							</div>
							<div class="col-lg-3 button-list col-md-4 col-sm-6 col-12" data-value="Partner">
								<div class="button-list-holder marital-status-step">Partner</div>
							</div>
						</div>
						<div class="row justify-content-center">
							<div class="col-md-4 next-step" step-button-value="marital-status-step">
								<a href="javascript:void(0)" class="btn btn-block btn-next btn-default js-btn-next">Next Step</a>
							</div>
						</div>
					</div>
					
					<!--======step-4 UK Passport====-->
					<div class="step-4 d-none">
						<div class="row" data-name="uk-passport-step">
							<div class="col-md-12 step-form-content text-center">
								<h3>UK Passport</h3>
								<p>Do you hold a valid UK passport?</p>
							</div>
							<div class="col-md-6 center-block">
								<div class="row px-3" data-name="uk-passport-step">
									<div class="col-lg-6 button-list col-md-6 col-sm-6" data-value="Yes">
										<div class="button-list-holder uk-passport-step add-class-active">Yes</div>
									</div>
									<div class="col-lg-6 button-list col-md-6 col-sm-6" data-value="No">
										<div class="button-list-holder uk-passport-step">No</div>
									</div>
								</div>
							</div>
						</div>
						<div class="row justify-content-center">
							<div class="col-md-4 next-step" step-button-value="uk-passport-step">
								<a href="javascript:void(0)" class="btn btn-block btn-next btn-default js-btn-next">Next Step</a>
							</div>
						</div>
					</div>
					<!--======step-5 Are you eligible====-->
					<div class="step-5 d-none">
						<div class="row">
							<div class="col-md-12 step-form-content text-center">
								<h3>Are you eligible?</h3>
								<p>What is your date of birth?</p>
							</div>
							<div class="center-block col-sm-5">
								<div class="form-group has-error">
									<input type="tel" class="form-control date custom-inputs" id="Dob" name="Dob" data-error="Please enter your date of birth" required="" autocomplete="Dob" original-name="Dob" placeholder="DD / MM / YYYY" maxlength="10">
									
									<span class="d-none dob-error" style="color:#ff0000"><ul><li>Please enter Vaild date of birth</li></ul></span>
									<span class="d-none eligible-error" style="color:#ff0000"><ul><li>You're not eligible</li></ul></span>
								
								</div>
							</div>
						</div>
						<div class="row justify-content-center">
							<div class="col-md-4 next-step" id="Dob-next"  disabled="disabled" step-button-value="dob-step">
								<a href="javascript:void(0)" class="btn btn-block btn-next btn-default js-btn-next">Next Step</a>
							</div>
						</div>
					</div>
					<!--======step-6 Employment====-->
					<div class="step-6  d-none">
						<div class="row" data-name="employment-step">
							<div class="col-md-12 step-form-content text-center">
								<h3>Employment</h3>
							<span class="help-block with-errors d-none employment-status-error" style="color:#ff0000"><ul class="list-unstyled"><li>We require at least 1 years worth of employment history. Please select your previous employment status.</li></ul></span>
								<p>What is your employment status?</p>
							</div>
							<div class="col-lg-4 button-list  col-lg-4  col-md-6 col-sm-12" data-value="Full-Time Employment" emp-address-required="Yes">
								<div class="button-list-holder employment-step add-class-active">Full-Time Employment</div>
							</div>
							<div class="col-lg-4 button-list  col-lg-4  col-md-6 col-sm-12" data-value="Part-Time Employment" emp-address-required="Yes">
								<div class="button-list-holder employment-step">Part-Time Employment</div>
							</div>
							<div class="col-lg-4 button-list  col-lg-4  col-md-6 col-sm-12" data-value="Self-Employed" emp-address-required="Yes">
								<div class="button-list-holder employment-step">Self-Employed</div>
							</div>
							<div class="col-lg-4 button-list  col-lg-4  col-md-6 col-sm-12" data-value="Temporary/Contract" emp-address-required="Yes">
								<div class="button-list-holder employment-step">Temporary/Contract</div>
							</div>
							<div class="col-lg-4 button-list  col-lg-4  col-md-6 col-sm-12" data-value="Retired" emp-address-required="No">
								<div class="button-list-holder employment-step">Retired</div>
							</div>
							<div class="col-lg-4 button-list  col-lg-4  col-md-6 col-sm-12" data-value="Homemaker" emp-address-required="No">
								<div class="button-list-holder employment-step">Homemaker</div>
							</div>
							<div class="col-lg-4 button-list  col-lg-4  col-md-6 col-sm-12" data-value="Carer" emp-address-required="No">
								<div class="button-list-holder employment-step">Carer</div>
							</div>
							<div class="col-lg-4 button-list  col-lg-4  col-md-6 col-sm-12" data-value="Education" emp-address-required="No">
								<div class="button-list-holder employment-step">Education</div>
							</div>
							<div class="col-lg-4 button-list  col-lg-4  col-md-6 col-sm-12" data-value="Benefits" emp-address-required="No">
								<div class="button-list-holder employment-step">Benefits</div>
							</div>
							<div class="col-lg-4 button-list  col-lg-4  col-md-6 col-sm-12" data-value="Armed Forces" emp-address-required="Yes">
								<div class="button-list-holder employment-step">Armed Forces</div>
							</div>
						</div>
						<div class="row justify-content-center">
							<div class="col-md-4 next-step" step-button-value="employment-step">
								<a href="javascript:void(0)" class="btn btn-block btn-next btn-default js-btn-next">Next Step</a>
							</div>
						</div>
					</div>
					<!--======step-7 Employment When doing job ====-->
					<div class="step-7 d-none">
						<div class="row">
							<div class="col-md-12 step-form-content text-center">
								<h3>Employment</h3>
								<p>Who is your employer? We never contact your employer</p>
							</div>
							<div class="center-block col-sm-6">
								<div class="form-group has-error">
									<label class="form-label" for="employer">Employer</label>
									<input type="text" class="form-control  custom-inputs" required="required"  placeholder="Company name here" id="employer">
									<span class="d-none employer-error" style="color:#ff0000"><ul><li>Please enter your company name</li></ul></span>
								</div>
								<div class="form-group has-error">
									<label class="form-label" for="job-title">Job Title</label>
									<input type="text" class="form-control  custom-inputs" required="required" placeholder="Job title here" id="job-title">
									<span class="d-none  Job-title-error" style="color:#ff0000"><ul><li>Please enter your company name</li></ul></span>
								</div>
							</div>
						</div>
						<div class="row justify-content-center">
							<div class="col-md-4 next-step" step-button-value="employment-details-step">
								<a href="javascript:void(0)" class="btn btn-block btn-next btn-default js-btn-next">Next Step</a>
							</div>
						</div>
					</div>
					<!--======step-8 when doing job Employment ====-->
					<div class="step-8 d-none">
						<div class="row">
							<div class="col-md-12 step-form-content text-center">
								<h3>Employment</h3>
								<p>How long have you worked there?</p>
							</div>
							<div class="center-block col-sm-9">
								<div class="form-group">
									<div class="col-xs-6 no-padding">
										<input type="number" class="form-control no-radius-right custom-inputs employment-years" id="employment-years" name="employment-years"  autocomplete="employment-years" placeholder="Enter Years" min="0" max="99" original-name="employment-years">
									</div>
									<div class="col-xs-6 no-padding">
										<label for="employment-years" class="form-label form-control label-button no-radius-left ">Years</label>
									</div>
										<span class="help-block with-errors d-none emp-years-error"><ul class="list-unstyled "><li>Please enter Years of employment</li></ul></span>
								</div>
								<div class="form-group has-error">
									<div class="col-xs-6 no-padding">
										<input type="number" class="form-control no-radius-right custom-inputs employment-months" id="employment-months" name="employment-months" data-error="Please enter months of employment" required="" autocomplete="employment-months" placeholder="Enter Months" min="1" max="11" original-name="employment-months">
									</div>
									<div class="col-xs-6 no-padding">
										<label for="employment-months" class="form-label form-control label-button no-radius-left">Months</label>
									</div>
									<span class="help-block with-errors d-none emp-months-error"><ul class="list-unstyled "><li>Please enter Months of employment</li></ul></span>
								</div>
							</div>
						</div>
						<div class="row justify-content-center">
							<div class="col-md-4 next-step" step-button-value="employment-time-step">
								<a href="javascript:void(0)" class="btn btn-block btn-next btn-default js-btn-next">Next Step</a>
							</div>
						</div>
					</div>
					<!--======step-9 Monthly Income ====-->
					<div class="step-9 d-none">
						<div class="row">
							<div class="col-md-12 step-form-content text-center">
								<h3>Monthly Income</h3>
								<p>What is your total <span class="net-monthly">NET monthly </span>income, after tax?</p>
							</div>
							<div class="center-block col-sm-6">
								<div class="form-group has-error">
									<div class="col-sm-12">
										<input type="number" class="form-control custom-inputs amount-input" id="MonthlyIncome" name="NetMonthlyIncome" min="2000" required="" placeholder="Net Monthly Income">
										<div class="pound-icon">£</div>
										<span class="help-block with-errors d-none"><ul class="list-unstyled"><li>Please enter your total NET monthly income</li></ul></span>
									</div>
								</div>
							</div>
						</div>
						<div class="row justify-content-center">
							<div class="col-md-4 next-step" step-button-value="monthly-income-step">
								<a href="javascript:void(0)" class="btn btn-block btn-next btn-default js-btn-next">Next Step</a>
							</div>
						</div>
					</div>
					<!--======step-10 Address Details ====-->
					<div class="step-10 d-none">
						<div class="row">
							<div class="col-md-12 step-form-content text-center">
								<h3>Address Details</h3>
							
								<p class="qus-postcode">What is your postcode?</p>
								<p class="confirm-address d-none" id="confirm-address"></p>
							</div>
							<div class="col-sm-7 center-block col-lg-7 mannual-postcode">
								<!-- Postcode field -->
								<div id="postcode_lookup" class=""></div>  
								<div class="select-address-field" style="display: none;">
									<div class="d-flex justify-content-center"><button class="btn btn-block btn-postcode postcode-lookup ">Enter Manually</button></div>
								</div>
							</div>
							<div class="col-lg-12 custom-address d-none	">
								<div class="row">
									<div class="col-xs-12 col-sm-4">
										<div class="form-group">
											<label class="">Building Number</label>
											<input type="text" id="BuildingNumber" class="form-control" data-error="Please enter your building number">
											<span class="help-block with-errors"></span>
										</div>
									</div>
									<div class="col-xs-12 col-sm-4">
										<div class="form-group">
											<label class="">Building Name</label>
											<input type="text" id="BuildingName" class="form-control" data-error="Please enter your building Name">
											<span class="help-block with-errors"></span>
										</div>
									</div>
									<div class="col-xs-12 col-sm-4">
										<div class="form-group">
											<label class="">Sub Building Name</label>
											<input type="text" id="SubBuildingName" class="form-control" data-error="Please enter your Sub building Name">
											<span class="help-block with-errors"></span>
										</div>
									</div>
									<div class="col-xs-12 col-sm-4">
										<div class="form-group">
											<label class="">Street</label>
											<input type="text" id="street" class="form-control" data-error="Please enter your Street">
											<span class="help-block with-errors"></span>
										</div>
									</div>
									<div class="col-xs-12 col-sm-4">
										<div class="form-group">
											<label class="">Town</label>
											<input type="text" id="town" class="form-control" data-error="Please enter your Town">
											<span class="help-block with-errors"></span>
										</div>
									</div>
									<div class="col-xs-12 col-sm-4">
										<div class="form-group">
											<label class="">County</label>
											<input type="text" id="county" class="form-control" data-error="Please enter your County">
											<span class="help-block with-errors"></span>
										</div>
									</div>
									<div class="col-xs-12 col-sm-4">
										<div class="form-group">
											<label class="">Postcode</label>
											<input type="text" id="postcode" class="form-control" data-error="Please enter your Post Code">
											<span class="help-block with-errors"></span>
										</div>
									</div>
								</div>
							</div>
							
						</div>
						<div class="row justify-content-center">
							<div class="col-md-4">
								<a href="javascript:void(0)" class="btn btn-block btn-next btn-default js-btn-next">Next Step</a>
							</div>
						</div>
					</div>
					<!--======step-11 residential status Address Details ====-->
					<div class="step-11 d-none">
						<div class="row">
							<div class="col-md-12 step-form-content text-center">
								<h3>Address Details</h3>
								<p>What is your residential status?</p>
							</div>
							<div class="col-lg-4 button-list">
								<div class="button-list-holder">Homeowner</div>
							</div>
							<div class="col-lg-4 button-list">
								<div class="button-list-holder">Tenant - Private</div>
							</div>
							<div class="col-lg-4 button-list">
								<div class="button-list-holder">Tenant - Housing</div>
							</div>
							<div class="col-lg-4 button-list">
								<div class="button-list-holder">Tenant - Council</div>
							</div>
							<div class="col-lg-4 button-list">
								<div class="button-list-holder">Living with family</div>
							</div>
							<div class="col-lg-4 button-list">
								<div class="button-list-holder">Military Accommodation</div>
							</div>
							<div class="col-lg-4 button-list">
								<div class="button-list-holder">Work Accommodation</div>
							</div>
							<div class="col-lg-4 button-list">
								<div class="button-list-holder">Student Accommodation</div>
							</div>
							<div class="col-lg-4 button-list">
								<div class="button-list-holder">Other</div>
							</div>
							
						</div>
						<div class="row justify-content-center">
							<div class="col-md-4">
								<a href="#" class="btn btn-block btn-next btn-default js-btn-next">Next Step</a>
							</div>
						</div>
					</div>

					<!--======step-12 Address Details ====-->
					<div class="step-12  d-none">
						<div class="row">
							<div class="col-md-12 step-form-content text-center">
								<h3>Address Details</h3>
								<p>How long have you lived there? (3 years required)</p>
							</div>
							<div class="center-block col-sm-9">
								<div class="form-group">
									<div class="col-xs-6 no-padding">
										<input type="number" class="form-control no-radius-right custom-inputs employment-years" id="employment-years" name="employment-years"  autocomplete="employment-years" placeholder="Enter Years" min="0" max="99" original-name="employment-years">
									</div>
									<div class="col-xs-6 no-padding">
										<label for="employment-years" class="form-label form-control label-button no-radius-left ">Years</label>
									</div>
									<span class="help-block with-errors"></span>
								</div>
								<div class="form-group has-error">
									<div class="col-xs-6 no-padding">
										<input type="number" class="form-control no-radius-right custom-inputs employment-months" id="employment-months" name="employment-months" data-error="Please enter months of employment" required="" autocomplete="employment-months" placeholder="Enter Months" min="1" max="11" original-name="employment-months">
									</div>
									<div class="col-xs-6 no-padding">
										<label for="employment-months" class="form-label form-control label-button no-radius-left">Months</label>
									</div>
									<span class="help-block with-errors d-none"><ul class="list-unstyled "><li>Please enter months of employment</li></ul></span>
								</div>
							</div>
						</div>
						<div class="row justify-content-center">
							<div class="col-md-4">
								<a href="#" class="btn btn-block btn-next btn-default js-btn-next">Next Step</a>
							</div>
						</div>
					</div>

						<!--======step-13 residential status Address Details ====-->
					<div class="step-13 d-none">
						<div class="row">
							<div class="col-md-12 step-form-content text-center">
								<h3>Almost done</h3>
								<p>Let us know who you are</p>
							</div>
							<div class="col-lg-3 button-list">
								<div class="button-list-holder">Mr</div>
							</div>
							<div class="col-lg-3 button-list">
								<div class="button-list-holder">Mrs</div>
							</div>
							<div class="col-lg-3 button-list">
								<div class="button-list-holder">Miss</div>
							</div>
							<div class="col-lg-3 button-list">
								<div class="button-list-holder">Ms</div>
							</div>	
							<div class="col-lg-6 button-list almost-done">
								<label for="Forename" class="form-label font-weight-bold"><span data-jointapp-text="Their "></span>First name</label>
								<input type="text" class="form-control has-success custom-inputs" id="Forename" name="fname" data-error="Please enter your first name  (min 2 characters)" required="" autocomplete="given-name" data-minlength="2" placeholder="First name here" original-name="fname">
								<span class="help-block with-errors"><ul class="list-unstyled mt-2"><li>Please enter your first name  (min 2 characters)</li></ul></span>
							</div>	
							<div class="col-lg-6 button-list almost-done">
								<label for="Surname" class="form-label font-weight-bold"><span data-jointapp-text="Their "></span>Surname</label>
								<input type="text" class="form-control custom-inputs" id="Surname" name="lname" data-error="Please enter your surname (min 2 characters)" required="" autocomplete="family-name" data-minlength="2" placeholder="Surname here" original-name="lname">
								<span class="help-block with-errors"><ul class="list-unstyled mt-2"><li>Please enter your surname (min 2 characters)</li></ul></span>
							</div>		
						</div>
						<div class="row justify-content-center">
							<div class="col-md-4">
								<a href="#" class="btn btn-block btn-next btn-default js-btn-next">Next Step</a>
							</div>
						</div>
					</div>


						<!--======step-14 Submit Application ====-->
					<div class="step-14 d-none">
						<div class="row">
							<div class="col-md-12 step-form-content text-center">
								<h3>Submit Application</h3>
								<p>How can we contact you?</p>
							</div>
				
							<div class="col-lg-6 button-list almost-done px-3">
								<label for="Forename" class="form-label font-weight-bold"><span data-jointapp-text="Their "></span>Mobile Number</label>
								<input type="tel" class="form-control custom-inputs custom-placeholder" placeholder="Mobile number here" id="MobileNumber" name="mobile" data-error="Must start 07 and be 11 characters long" autocomplete="tel" required="" original-name="mobile">
								<span class="help-block with-errors d-none"><ul class="list-unstyled mt-2"><li>Please enter your first name  (min 2 characters)</li></ul></span>
							</div>	
							<div class="col-lg-6 button-list almost-done px-3">
								<label for="Surname" class="form-label font-weight-bold"><span data-jointapp-text="Their "></span>Email Address</label>
								<input type="email" pattern="^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$" class="form-control custom-inputs custom-placeholder" id="Email" name="email" data-error="Please enter a valid email address" required="" autocomplete="email" placeholder="Email address here" original-name="email">
								<span class="help-block with-errors d-none"><ul class="list-unstyled mt-2"><li>Please enter your surname (min 2 characters)</li></ul></span>

							</div>	
							
        <div class="col-md-12">
            <p class="aggrement-text p-0 m-0 mt-1" >By submitting your application, you agree to our <a href="http://www.motor.market/terms-of-use.html" target="_blank">terms and conditions</a> and <a href="http://www.motor.market/privacy-policy.html" target="_blank">privacy policy</a>.</p>
            <input type="hidden" name="TermsAndConditions" value="on" original-name="TermsAndConditions">
        </div>
<div class="col-md-12">
            <p class="sh-marketing-text mt-2">
                Receive electronic marketing from us with our other deals &amp; offers.
                <span class="">
                    <label for="sh-marketing" class="label-sh-marketing">
                        <input type="checkbox" name="AgreeToMarketing" value="" id="sh-marketing" checked="" original-name="AgreeToMarketing">
                        <span></span>
                    </label>
                </span>
            </p>
        </div>
        
   
						</div>
						<div class="row justify-content-center">
							<div class="col-md-4">
								<a href="#" class="btn btn-block btn-next btn-default js-btn-next">Next Step</a>
							</div>
						</div>
					</div>
				</form>
			</div>
			<div class="row representative-example">
				<div class="col-md-12">
					<p class="text-center">Representative example: borrowing £7,000 over 5 years with a representative APR of 19.56% (Fixed) and a deposit of £0.00, the amount payable would be £183.75 per month, with a total cost of credit of £4,025 and a total amount payable of £11,025</p>
				</div>
			</div>
		</div>

	<script src="https://getaddress.io/Scripts/jquery-3.3.1.js"></script>
<script src="https://getaddress-cdn.azureedge.net/scripts/jquery.getAddress-4.0.0.min.js"></script>
<script src="https://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.0/jquery.validate.min.js"></script>

<!-- Add after your form -->
<script>
$('#postcode_lookup').getAddress(
    {
    api_key: 'QBgkouRm9k-B0wux37Bl2w28598',  
    output_fields:{
		building_number: '#BuildingNumber',
		building_name: '#BuildingName',
		sub_building_name: '#SubBuildingName ',
		thoroughfare: '#street',
        county: '#county',
		post_town: '#town',
        postcode: '#postcode'
	}
});
</script>
	
	<script>
	
    //Using document.body.contains.
 
	</script>


<script>
$(document).ready(function() {
	
	$("#getaddress_button").prop("disabled", true);
	// $("#getaddress_button").removeAttr('disabled');
	$('input[name=getaddress_input]').change(function() {
	
   var toCheck = $("#getaddress_input").val();
			    // Permitted letters depend upon their position in the postcode.
  var alpha1 = "[abcdefghijklmnoprstuwyz]";                       // Character 1
  var alpha2 = "[abcdefghklmnopqrstuvwxy]";                       // Character 2
  var alpha3 = "[abcdefghjkpmnrstuvwxy]";                         // Character 3
  var alpha4 = "[abehmnprvwxy]";                                  // Character 4
  var alpha5 = "[abdefghjlnpqrstuwxyz]";                          // Character 5
  var BFPOa5 = "[abdefghjlnpqrst]";                               // BFPO alpha5
  var BFPOa6 = "[abdefghjlnpqrstuwzyz]";                          // BFPO alpha6
  
  // Array holds the regular expressions for the valid postcodes
  var pcexp = new Array ();
  
  // BFPO postcodes
  pcexp.push (new RegExp ("^(bf1)(\\s*)([0-6]{1}" + BFPOa5 + "{1}" + BFPOa6 + "{1})$","i"));

  // Expression for postcodes: AN NAA, ANN NAA, AAN NAA, and AANN NAA
  pcexp.push (new RegExp ("^(" + alpha1 + "{1}" + alpha2 + "?[0-9]{1,2})(\\s*)([0-9]{1}" + alpha5 + "{2})$","i"));
  
  // Expression for postcodes: ANA NAA
  pcexp.push (new RegExp ("^(" + alpha1 + "{1}[0-9]{1}" + alpha3 + "{1})(\\s*)([0-9]{1}" + alpha5 + "{2})$","i"));

  // Expression for postcodes: AANA  NAA
  pcexp.push (new RegExp ("^(" + alpha1 + "{1}" + alpha2 + "{1}" + "?[0-9]{1}" + alpha4 +"{1})(\\s*)([0-9]{1}" + alpha5 + "{2})$","i"));
  
  // Exception for the special postcode GIR 0AA
  pcexp.push (/^(GIR)(\s*)(0AA)$/i);
  
  // Standard BFPO numbers
  pcexp.push (/^(bfpo)(\s*)([0-9]{1,4})$/i);
  
  // c/o BFPO numbers
  pcexp.push (/^(bfpo)(\s*)(c\/o\s*[0-9]{1,3})$/i);
  
  // Overseas Territories
  pcexp.push (/^([A-Z]{4})(\s*)(1ZZ)$/i);  
  
  // Anguilla
  pcexp.push (/^(ai-2640)$/i);

  // Load up the string to check
  var postCode = toCheck;

  // Assume we're not going to find a valid postcode
  var valid = false;
  
  // Check the string against the types of post codes
  for ( var i=0; i<pcexp.length; i++) {
  
    if (pcexp[i].test(postCode)) {
    
      // The post code is valid - split the post code into component parts
      pcexp[i].exec(postCode);
      
      // Copy it back into the original string, converting it to uppercase and inserting a space 
      // between the inward and outward codes
      postCode = RegExp.$1.toUpperCase() + " " + RegExp.$3.toUpperCase();
      
      // If it is a BFPO c/o type postcode, tidy up the "c/o" part
      postCode = postCode.replace (/C\/O\s*/,"c/o ");
      
      // If it is the Anguilla overseas territory postcode, we need to treat it specially
      if (toCheck.toUpperCase() == 'AI-2640') {postCode = 'AI-2640'};
      
      // Load new postcode back into the form element
      valid = true;
      
      // Remember that we have found that the code is valid and break from loop
      break;
    }
  }
  
  // Return with either the reformatted valid postcode or the original invalid postcode
  if (valid) {
	  alert('postcode is valid');
	  $("#getaddress_button").removeAttr('disabled');

	  return postCode;

		
	  } else 
		alert('postcode is invalid');  
	  return false;

	
	});
	
});
</script>

	<script>
$(document).ready(function() {
	$('#getaddress_button').click(function () {
		//$('.select-address-field').show;
		$('.select-address-field').fadeIn(1000,function(){
			$("#getaddress_dropdown").on("change",function(){
		 $("#postcode_lookup").addClass("d-none");
		 $(".select-address-field").addClass("d-none");
		});
		});
		

	});
	$('.btn-postcode').click(function () {
		$('.custom-address').removeClass('d-none');
	});
});
</script>
	<script>
	
$(document).ready(function() {

    $(".button-list").click(function() {
        var div_value = $(this).attr("data-value");
        var div_name = $(this).parent().attr("data-name");

        if (div_name == 'monthly-budget-step') {
            $('#monthly-budget').val(div_value);
        } else if (div_name == 'driving-licence-step') {

            $('#driving-licence').val(div_value);
        } else if (div_name == 'marital-status-step') {

            $('#marital-status').val(div_value);
        } else if (div_name == 'uk-passport-step') {

            $('#uk-passport').val(div_value);
        } else if (div_name == 'employment-step') {
			    var f_id=$("input:hidden").attr("id");
           
			$('#Temp-Employment_Status').val(div_value);
			 alert(f_id);
			 if (typeof f_id === "undefined") {
     $('#add_applicant').prepend('<input type="hidden" data-emp="Yes" id="Employment_Status" name="Employment_Status[]" value="'+div_value+'" />');
}else{
	
			 if(f_id=='Employment_Status'){
				  $('#Employment_Status').val(div_value);
			 }
			 else{
				 $('#add_applicant').prepend('<input type="hidden" data-emp="Yes" id="Employment_Status" name="Employment_Status[]" value="'+div_value+'" />');
			 }
    
}
			 
			 
	       //$('#employment').val(div_value);
		   
            var div_req_check = $(this).attr("emp-address-required");
            $('#employment-address-required').val(div_req_check);
        }




        $(".button-list").find('.' + div_name).removeClass("add-class-active");
        $(this).find(".button-list-holder").addClass("add-class-active");
        alert(div_value);
    });

});
		
	</script>
	<script>
$(document).ready(function() {

    $(".next-step").click(function() {

        var step_name = $(this).attr("step-button-value");

        if (step_name == 'monthly-budget-step') {

            $(".step-1").addClass("d-none");
            $(".step-2").removeClass("d-none");
        } else if (step_name == 'driving-licence-step') {
            $(".step-2").addClass("d-none");
            $(".step-3").removeClass("d-none");
        } else if (step_name == 'marital-status-step') {
            $(".step-3").addClass("d-none");
            $(".step-4").removeClass("d-none");
        } else if (step_name == 'uk-passport-step') {
            $(".step-4").addClass("d-none");
            $(".step-5").removeClass("d-none");
        } else if (step_name == 'dob-step') {

            var final_value = $("#Dob").val();
            if (final_value.length < 10) {
                $(".dob-error").removeClass("d-none");
            } else {
                function underAgeValidate(birthday) {
                    var my_date = birthday.split("/");
                    var day = my_date[0];
                    var month = my_date[1];
                    var year = my_date[2];
                    var final_date = year + "-" + month + "-" + day;

                    // set date based on birthday at 01:00:00 hours GMT+0100 (CET)
                    var myBirthday = new Date(final_date);

                    // set current day on 01:00:00 hours GMT+0100 (CET)
                    var currentDate = new Date().toJSON().slice(0, 10) + ' 01:00:00';
                    // calculate age comparing current date and borthday
                    var myAge = ~~((Date.now(currentDate) - myBirthday) / (31557600000));
                    if (myAge < 18) {

                        $(".eligible-error").removeClass("d-none");

                    } else {
                        $('#date-of-birth').val(final_value);
                        $(".step-5").addClass("d-none");
                        $(".step-6").removeClass("d-none");
                    }
                }
                underAgeValidate(final_value);

            }




        } else if (step_name == 'employment-step') {

            var emp = $("#employment-address-required").val();
            if (emp == 'Yes') {

                $(".step-6").addClass("d-none");
                $(".step-7").removeClass("d-none");
            } else {
				
				$("[data-exp=Yes]").remove();
                $("[data-emp=Yes]").remove();
				var temempst = $("#Temp-Employment_Status").val();
				 $('#add_applicant').prepend('<input type="hidden"  id="Employment_Status" name="Employment_Status[]" value="'+temempst+'" />');
                $(".step-6").addClass("d-none");
                $(".step-9").removeClass("d-none");

            }
        } else if (step_name == 'employment-details-step') {
            var employer_final_value = $("#employer").val();
            var jobtitle_final_value = $("#job-title").val();


            if (employer_final_value == '') {
                if (jobtitle_final_value != '') {
                    $(".Job-title-error").addClass("d-none");
                }
                $(".employer-error").removeClass("d-none");

            } else if (jobtitle_final_value == '') {

                if (employer_final_value != '') {
                    $(".employer-error").addClass("d-none");
                }
                $(".Job-title-error").removeClass("d-none");
            } else {

                //$('#employer_final_value').val(employer_final_value);
                //$('#jobtitle_final_value').val(jobtitle_final_value);
          $('#add_applicant').prepend('<input type="hidden" data-exp="Yes" name="Employer[]" value="'+employer_final_value+'" />');
		 $('#add_applicant').prepend('<input type="hidden" data-exp="Yes" name="Job_Title[]" value="'+jobtitle_final_value+'" />');                
				
                $(".step-7").addClass("d-none");
                $(".step-8").removeClass("d-none");
            }




        }
		else if (step_name == 'employment-time-step') {
            var emp_year_final_value = $("#employment-years").val();
            var emp_month_final_value = $("#employment-months").val();
			var history =$('#pre-emp-history').val();

			


            if (emp_year_final_value == '') {
                if (emp_month_final_value != '') {
                    $(".Job-title-error").addClass("d-none");
                }
                $(".employer-error").removeClass("d-none");

            } else if (emp_month_final_value == '') {

                if (emp_year_final_value != '') {
                    $(".employer-error").addClass("d-none");
                }
                $(".Job-title-error").removeClass("d-none");
            } else {
				
		var total_year=Number(emp_year_final_value)*12;
		var total_time=Number(total_year)+Number(emp_month_final_value)+Number(history);
         					
	if(total_time < 12){
		$('#pre-emp-history').val(total_time);
		$('#employment-years').val('');	
		$('#employment-months').val('');	
	    $('#add_applicant').prepend('<input type="hidden" data-exp="Yes" name="Months_At_Employer[]" value="'+emp_month_final_value+'" />');
		$('#add_applicant').prepend('<input type="hidden" data-exp="Yes" name="Years_At_Employer[]" value="'+emp_year_final_value+'" />');
		  $(".employment-status-error").removeClass("d-none");
		$('#add_applicant').prepend('<input type="hidden" data-emp="Yes" id="Employment_Status" name="Employment_Status[]" value="Full-Time Employment" />');
		$(".step-8").addClass("d-none");
        $(".step-6").removeClass("d-none");

	}else{
					
		 $('#add_applicant').prepend('<input type="hidden" data-exp="Yes" name="Months_At_Employer[]" value="'+emp_month_final_value+'" />');
		 $('#add_applicant').prepend('<input type="hidden" data-exp="Yes" name="Years_At_Employer[]" value="'+emp_year_final_value+'" />');
         $(".step-8").addClass("d-none");
         $(".step-9").removeClass("d-none");
          
		  }
			}



        }
		else if (step_name == 'monthly-income-step') {
			 var nmi = $("#MonthlyIncome").val();
			 $('#Net-monthly-income').val(nmi);
			   $(".step-9").addClass("d-none");
         $(".step-10").removeClass("d-none");
			 
		}
    });
});
	</script>
	
<script type="text/javascript">
var date = document.getElementById('Dob');

function checkValue(str, max) {
    if (str.charAt(0) !== '0' || str == '00') {
        var num = parseInt(str);
        if (isNaN(num) || num <= 0 || num > max) num = 1;
        str = num > parseInt(max.toString().charAt(0)) && num.toString().length == 1 ? '0' + num : num.toString();
    };
    return str;
};

date.addEventListener('input', function(e) {
    this.type = 'text';
    var input = this.value;
    if (/\D\/$/.test(input)) input = input.substr(0, input.length - 3);
    var values = input.split('/').map(function(v) {
        return v.replace(/\D/g, '')
    });
    if (values[0]) values[0] = checkValue(values[0], 31);
    if (values[1]) values[1] = checkValue(values[1], 12);
    var output = values.map(function(v, i) {
        return v.length == 2 && i < 2 ? v + '/' : v;
    });
    this.value = output.join('').substr(0, 14);
});

date.addEventListener('blur', function(e) {
    this.type = 'text';
    var input = this.value;
    var values = input.split('/').map(function(v, i) {
        return v.replace(/\D/g, '')
    });
    var output = '';

    if (values.length == 3) {
        var year = values[2].length !== 4 ? parseInt(values[2]) + 2000 : parseInt(values[2]);
        var day = parseInt(values[0]) - 1;
        var month = parseInt(values[1]);
        var d = new Date(year, day, month);
        if (!isNaN(d)) {
            //document.getElementById('result').innerText = d.toString();
            var dates = [d.getDate(), d.getMonth() + 1, d.getFullYear()];
            output = dates.map(function(v) {
                v = v.toString();
                return v.length == 1 ? '0' + v : v;
            }).join('/');
        };
    };
    //this.value = output;


});
</script>

	
		</body>
	
</html>	
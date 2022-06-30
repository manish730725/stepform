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
		<div class="container mt-5">
			<div class="form-holder">
				<form>
				<input type="hidden" name="monthly-budget" id="monthly-budget" value="£151 - £200 / month">
				<input type="hidden" name="driving-licence" id="driving-licence" value="Full UK">
				<input type="hidden" name="marital-status" id="marital-status" value="Single">
				<input type="hidden" name="uk-passport" id="uk-passport" value="Yes">
				<input type="hidden" name="date-of-birth" id="date-of-birth" value="">
				<input type="hidden" name="employment" id="employment" value="Full-Time Employment">
				<input type="hidden" name="employment-address-required" id="employment-address-required" value="Yes">
			   <input type="hidden" name="employer_final_value" id="employer_final_value" value="">
				<input type="hidden" name="jobtitle_final_value" id="jobtitle_final_value" value="">
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
							<div class="col-lg-4 button-list" data-value="Under £150 / month">
								<div class="button-list-holder monthly-budget-step">Under £150 / month</div>
							</div>
							<div class="col-lg-4 button-list" data-value="£151 - £200 / month">
								<div class="button-list-holder monthly-budget-step add-class-active">£151 - £200 / month</div>
							</div>
							<div class="col-lg-4 button-list" data-value="£201 - £250 / month">
								<div class="button-list-holder monthly-budget-step">£201 - £250 / month</div>
							</div>
							<div class="col-lg-4 button-list" data-value="£251 - £300 / month">
								<div class="button-list-holder monthly-budget-step">£251 - £300 / month</div>
							</div>
							<div class="col-lg-4 button-list" data-value="£301 - £400 / month">
								<div class="button-list-holder monthly-budget-step">£301 - £400 / month</div>
							</div>
							<div class="col-lg-4 button-list" data-value="Over £400 / month">
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
							<div class="col-lg-3 button-list" data-value="Full UK">
								<div class="button-list-holder driving-licence-step add-class-active">Full UK</div>
							</div>
							<div class="col-lg-3 button-list" data-value="Provisional UK">
								<div class="button-list-holder driving-licence-step">Provisional UK</div>
							</div>
							<div class="col-lg-3 button-list" data-value="CBT">
								<div class="button-list-holder driving-licence-step">CBT</div>
							</div>
							<div class="col-lg-3 button-list"  data-value="A2">
								<div class="button-list-holder driving-licence-step">A2</div>
							</div>
							<div class="col-lg-3 button-list" data-value="Full A Class">
								<div class="button-list-holder driving-licence-step">Full A Class</div>
							</div>
							<div class="col-lg-3 button-list" data-value="European">
								<div class="button-list-holder driving-licence-step">European</div>
							</div>
							<div class="col-lg-3 button-list" data-value="International">
								<div class="button-list-holder driving-licence-step">International</div>
							</div>
							<div class="col-lg-3 button-list"  data-value="No Licence">
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
							<div class="col-lg-3 button-list" data-value="Single">
								<div class="button-list-holder marital-status-step add-class-active">Single</div>
							</div>
							<div class="col-lg-3 button-list" data-value="Married">
								<div class="button-list-holder marital-status-step">Married</div>
							</div>
							<div class="col-lg-3 button-list" data-value="Cohabiting">
								<div class="button-list-holder marital-status-step">Cohabiting</div>
							</div>
							<div class="col-lg-3 button-list" data-value="Divorced">
								<div class="button-list-holder marital-status-step">Divorced</div>
							</div>
							<div class="col-lg-3 button-list" data-value="Separated">
								<div class="button-list-holder marital-status-step">Separated</div>
							</div>
							<div class="col-lg-3 button-list" data-value="Widowed">
								<div class="button-list-holder marital-status-step">Widowed</div>
							</div>
							<div class="col-lg-3 button-list" data-value="Civil Partnership">
								<div class="button-list-holder marital-status-step">Civil Partnership</div>
							</div>
							<div class="col-lg-3 button-list" data-value="Partner">
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
									<div class="col-lg-6 button-list" data-value="Yes">
										<div class="button-list-holder uk-passport-step add-class-active">Yes</div>
									</div>
									<div class="col-lg-6 button-list" data-value="No">
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
								<p>What is your employment status?</p>
							</div>
							<div class="col-lg-4 button-list" data-value="Full-Time Employment" emp-address-required="Yes">
								<div class="button-list-holder employment-step add-class-active">Full-Time Employment</div>
							</div>
							<div class="col-lg-4 button-list" data-value="Part-Time Employment" emp-address-required="Yes">
								<div class="button-list-holder employment-step">Part-Time Employment</div>
							</div>
							<div class="col-lg-4 button-list" data-value="Self-Employed" emp-address-required="Yes">
								<div class="button-list-holder employment-step">Self-Employed</div>
							</div>
							<div class="col-lg-4 button-list" data-value="Temporary/Contract" emp-address-required="Yes">
								<div class="button-list-holder employment-step">Temporary/Contract</div>
							</div>
							<div class="col-lg-4 button-list" data-value="Retired" emp-address-required="No">
								<div class="button-list-holder employment-step">Retired</div>
							</div>
							<div class="col-lg-4 button-list" data-value="Homemaker" emp-address-required="No">
								<div class="button-list-holder employment-step">Homemaker</div>
							</div>
							<div class="col-lg-4 button-list" data-value="Carer" emp-address-required="No">
								<div class="button-list-holder employment-step">Carer</div>
							</div>
							<div class="col-lg-4 button-list" data-value="Education" emp-address-required="No">
								<div class="button-list-holder employment-step">Education</div>
							</div>
							<div class="col-lg-4 button-list" data-value="Benefits" emp-address-required="No">
								<div class="button-list-holder employment-step">Benefits</div>
							</div>
							<div class="col-lg-4 button-list" data-value="Armed Forces" emp-address-required="Yes">
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
										<input type="number" class="form-control custom-inputs amount-input" id="MonthlyIncome" name="NetMonthlyIncome" min="50" required="" placeholder="Net Monthly Income">
										<div class="pound-icon">£</div>
										<span class="help-block with-errors d-none"><ul class="list-unstyled"><li>Please enter your total NET monthly income</li></ul></span>
									</div>
								</div>
							</div>
						</div>
						<div class="row justify-content-center">
							<div class="col-md-4">
								<a href="#" class="btn btn-block btn-next btn-default js-btn-next">Next Step</a>
							</div>
						</div>
					</div>
					<!--======step-10 Address Details ====-->
					<div class="step-10 d-none">
						<div class="row">
							<div class="col-md-12 step-form-content text-center">
								<h3>Address Details</h3>
								<p>What is your postcode?</p>
							</div>
							<div class="col-sm-7 center-block col-lg-7">
								<!-- Postcode field -->
								<div id="postcode_lookup"></div>  
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
								<a href="#" class="btn btn-block btn-next btn-default js-btn-next">Next Step</a>
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
	</body>
	
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

            $('#employment').val(div_value);
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

                $('#employer_final_value').val(employer_final_value);
                $('#jobtitle_final_value').val(jobtitle_final_value);

                $(".step-7").addClass("d-none");
                $(".step-8").removeClass("d-none");
            }




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
    this.value = output;


});
</script>
<style>
button#getaddress_button {
    display: block;
    color: #7ab048;
    border-color: #7ab048;
    height: 54px;
    margin-top: 0px;
    padding-top: 8px;
    font-size: 16px;
    background-color: white;
    line-height: 40px;
    display: block;
    width: 100%;
    padding: 6px 12px;
    border-radius: 4px;
    text-align: center;
    white-space: nowrap;
    vertical-align: middle;
}
input#getaddress_input {
    height: 100px;
    text-align: center;
    font-size: 26px;
    display: block;
    width: 100%;
    padding: 6px 12px;
    line-height: 1.42857143;
    color: #555;
    background-color: #fff;
    background-image: none;
    border: 1px solid #ccc;
    border-radius: 4px;
    -webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.075);
    box-shadow: inset 0 1px 1px rgba(0,0,0,.075);
    -webkit-transition: border-color ease-in-out .15s,-webkit-box-shadow ease-in-out .15s;
    -o-transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
    transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
    margin-top: 2px;
    margin-bottom: 20px;
}
select#getaddress_dropdown {
    margin-top: 2px;
    border-color: #d8dfe7;
    color: #444;
    height: 100px;
    font-weight: bold;
    font-size: 20px;
    text-align: center;
    padding: 6px 12px;
    width: 100%;
    margin: 20px 0;
}
</style>
<script>
$(document).ready(function() {
	$('#getaddress_button').click(function () {
		//$('.select-address-field').show;
		$('.select-address-field').css('display', 'block');
	});
	$('.btn-postcode').click(function () {
		$('.custom-address').removeClass('d-none');
	});
});
</script>
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
	
	
	
</html>	
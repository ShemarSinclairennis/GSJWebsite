
<?php  ?>
<head>
	<meta charset="utf-8">
	<title>form-v1 by Colorlib</title>
	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<!-- Font-->
	<link rel="stylesheet" type="text/css" href="css/opensans-font.css">
	<link rel="stylesheet" type="text/css" href="fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">
	<!-- Main Style Css -->
    <link rel="stylesheet" href="css/style.css"/>
</head>
<body>
	<div class="page-content">
		<div class="form-v1-content">
			<div class="wizard-form">
		        <form class="form-register" action="#" method="post">
		        	<div id="form-total">
		        		<!-- SECTION 1 -->
			            <h2>
			            	<p class="step-icon"><span>01</span></p>
			            	<span class="step-text">Peronal Infomation</span>
			            </h2>
			            <section>
			                <div class="inner">
			                	<div class="wizard-header">
									<h3 class="heading">Peronal Infomation</h3>
									<p>Please enter your infomation and proceed to the next step so we can register your information within our database.  </p>
								</div>
								<div class="form-row form-row-date">
									<div class="form-holder form-holder-2">
										<label class="special-label">Prefered Title:</label>
										<select name="title_name" id="title_name">
											<option value="null" disabled selected>--</option>
											<option value="0">Ms</option>
											<option value="1">Mrs</option>
											<option value="2">Mr</option>
											<option value="3">Dr</option>
											<option value="4">Prof.</option>
											<option value="5">Sir</option>
										</select>
									</div>
								</div>

								<div class="form-row">
									<div class="form-holder">
										<fieldset>
											<legend>First Name</legend>
											<input type="text" class="form-control" id="first-name" name="first-name" placeholder="First Name" required>
										</fieldset>
									</div>
									<div class="form-holder">
										<fieldset>
											<legend>Last Name</legend>
											<input type="text" class="form-control" id="last-name" name="last-name" placeholder="Last Name" required>
										</fieldset>
									</div>
								</div>
								<div class="form-row">
									<div class="form-holder form-holder-2">
										<fieldset>
											<legend>Your Email</legend>
											<input type="text" name="your_email" id="your_email" class="form-control" pattern="[^@]+@[^@]+.[a-zA-Z]{2,6}" placeholder="example@email.com" required>
										</fieldset>
									</div>
								</div>
								<div class="form-row">
									<div class="form-holder form-holder-2">
										<fieldset>
											<legend>Phone Number</legend>
											<input type="text" class="form-control" id="phone" name="phone" placeholder="+1 888-999-7777" required>
										</fieldset>
									</div>
								</div>
		

								<label class="special-label">Address:</label>
								<div class="form-row">

									<div class="form-holder">
										<fieldset>
											<legend>Country</legend>
											<input type="text" class="form-control" id="country" name="country" placeholder="eg. Jamaica" required>
										</fieldset>
									</div>
									<div class="form-holder">
										<fieldset>
											<legend>Parish</legend>
											<input type="text" class="form-control" id="parish" name="parish" placeholder="eg. St.Andrew" required>
										</fieldset>
										<fieldset>
											<legend>Street</legend>
											<input type="text" class="form-control" id="street" name="street" placeholder="eg. 15 Bogle Avenue" required>
										</fieldset>
									</div>
								</div>
								<div class="form-row">
									<div class="form-holder form-holder-2">
										<fieldset>
											<legend>Organization</legend>
											<input type="text" name="org" id="org" class="form-control"  required>
										</fieldset>
									</div>
								</div>
								<div class="form-row">
									<div class="form-holder form-holder-2">
										<fieldset>
											<legend>Department/Unit</legend>
											<input type="text" name="depart" id="depart" class="form-control"  required>
										</fieldset>
									</div>
								</div>
								<div class="form-row">
									<div class="form-holder form-holder-2">
										<fieldset>
											<legend>Position</legend>
											<input type="text" name="position" id="position" class="form-control"  required>
										</fieldset>
									</div>
								</div>
								<div class="form-row">
									<div class="form-holder form-holder-2">
										<fieldset>
											<legend>Areas of Interest</legend>
											<input type="text" name="interest" id="interest" class="form-control"  required>
										</fieldset>
									</div>
								</div>
								
							</div>
			            </section>
						<!-- SECTION 2 -->
			           
			            <h2>
			            	<p class="step-icon"><span>02</span></p>
			            	<span class="step-text">Select Membership</span>
			            </h2>
			            <section>
			                <div class="inner">
			                	<div class="wizard-header">
									<h3 class="heading">Select Membership</h3>
									<p>Please select you membership so we can ensure you are placed in the correct category .</p>
								</div>
								<div class="form-row">
			                		<div class="form-holder form-holder-2">
			                			<input type="radio" class="radio" name="radio1" id="plan-1" value="plan-1">
			                			<label class="plan-icon plan-1-label" for="plan-1">
		                					<img src="images/form-v1-icon-2.png" alt="pay-1">
			                			</label>
			                			<div class="plan-total">
		                					<span class="plan-title">Institutional</span>
		                					<p class="plan-text">Pellentesque nec nam aliquam sem et volutpat consequat mauris nunc congue nisi.</p>
		                				</div>
			                			<input type="radio" class="radio" name="radio1" id="plan-2" value="plan-2">
			                			<label class="plan-icon plan-2-label" for="plan-2">
			                					<img src="images/form-v1-icon-2.png" alt="pay-1">
			                			</label>
			                			<div class="plan-total">
		                					<span class="plan-title">Professional</span>
		                					<p class="plan-text">Pellentesque nec nam aliquam sem et volutpat consequat mauris nunc congue nisi.</p>
		                				</div>
										<input type="radio" class="radio" name="radio1" id="plan-3" value="plan-3" checked>
										<label class="plan-icon plan-3-label" for="plan-3">
		                					<img src="images/form-v1-icon-3.png" alt="pay-2">
										</label>
										<div class="plan-total">
		                					<span class="plan-title">Associate</span>
		                					<p class="plan-text">Pellentesque nec nam aliquam sem et volutpat consequat mauris nunc congue nisi.</p>
		                				</div>
		                				<input type="radio" class="radio" name="radio1" id="plan-4" value="plan-4" checked>
		                				<label class="plan-icon plan-4-label" for="plan-4">
		                					<img src="images/form-v1-icon-3.png" alt="pay-2">
										</label>
										<div class="plan-total">
		                					<span class="plan-title">Student</span>
		                					<p class="plan-text">Pellentesque nec nam aliquam sem et volutpat consequat mauris nunc congue nisi.</p>
		                				</div>
			                		</div>
			                	</div>
							</div>
			            </section>
		        	</div>

		        	<button type="submit">Submit</button>
		        </form>
			</div>
		</div>
	</div>
	<script src="js/jquery-3.3.1.min.js"></script>
	<script src="js/jquery.steps.js"></script>
	<script src="js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
<?php ?>

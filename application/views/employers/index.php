<?php $this->load->view('templates/header'); ?>
<?php $this->load->view('templates/menu'); ?>

<div class="inner-content loginWrp">
	<div class="container">
		<div class="row">
			<div class="col-lg-2 col-md-2"></div>
			<div class="col-lg-8 col-md-8">
				<div class="login">
					<div class="contctxt">Employer Application Form</div>
					<h4 class="title">Let’s work together! Fill out this form.</h4>
					<p>
						Your Business'Goal is our Important!
					</p>
					<div class="formint conForm">
						<?php $this->load->view('templates/shared/alert'); ?>

						<form method="post" action="<?php echo site_url('employers/save'); ?>" autocomplete="off">

							<div class="input-wrap">
								<input autocomplete="off" type="text" class="form-control" placeholder="Company Name" name="company_name" value="<?php echo set_value('company_name'); ?>">
							</div>

							<div class="row">
								<div class="col-lg-6">
									<div class="input-wrap">
										<input autocomplete="off" type="text" style="background-color: white;" class="form-control" placeholder="Type Of Company" name="company_type" value="<?php echo set_value('company_type'); ?>">
									</div>
								</div>

								<div class="col-lg-6">
									<div class="input-wrap">
										<input type="email" style="background-color: white;" class="form-control" placeholder="Company Email Address" name="email" value="<?php echo set_value('email'); ?>">
									</div>
								</div>

								<div class="col-lg-6">
									<div class="input-wrap">
										<input autocomplete="off" type="text" style="background-color: white;" class="form-control" placeholder="Company Phone Number" name="phone" value="<?php echo set_value('phone'); ?>">
									</div>
								</div>

								<div class="col-lg-6">
									<div class="input-wrap">
										<input autocomplete="off" type="text" style="background-color: white;" class="form-control" placeholder="Company Website" name="website" value="<?php echo set_value('website'); ?>">
									</div>
								</div>

								<div class="col-lg-12">
									<div class="input-wrap">
										<input autocomplete="off" type="text" style="background-color: white;" class="form-control" placeholder="Company Location" name="location" value="<?php echo set_value('location'); ?>">
									</div>
								</div>

								<div class="col-lg-4">
									<div class="input-wrap">
										<input autocomplete="off" type="text" style="background-color: white;" class="form-control" placeholder="Job Category" name="job_category" value="<?php echo set_value('job_category'); ?>">
									</div>
								</div>

								<div class="col-lg-4">
									<div class="input-wrap">
										<input autocomplete="off" type="text" style="background-color: white;" class="form-control" placeholder="Age Limit: 20-40" name="age_limit" value="<?php echo set_value('age_limit'); ?>">
									</div>
								</div>

								<div class="col-xl-4 col-md-4 col-lg-4 col-sm-12">
									<div class="input-wrap">
										<input autocomplete="off" type="text" style="background-color: white;" class="form-control" placeholder="Gender: Male = 10, Female = 5" name="gender" value="<?php echo set_value('gender'); ?>">
									</div>
								</div>

								<div class="col-lg-12">
									<div class="input-wrap">
										<textarea class="form-control" name="educational_requirement" placeholder="Educational Requirement"><?php echo set_value('educational_requirement'); ?></textarea>
									</div>
								</div>

								<div class="col-xl-12 col-md-12 col-lg-12 col-sm-12">
									<div class="input-wrap">
										<textarea class="form-control" name="working_experience_requirement" placeholder="Working Experience Requirement"><?php echo set_value('working_experience_requirement'); ?></textarea>
									</div>
								</div>

								<div class="col-xl-12 col-md-12 col-lg-12 col-sm-12">
									<div class="input-wrap">
										<textarea class="form-control" name="other_additional_requirement" placeholder="Other Additional Requirement"><?php echo set_value('other_additional_requirement'); ?></textarea>
									</div>
								</div>

								<div class="col-xl-4 col-md-4 col-lg-4 col-sm-12">
									<div class="input-wrap">
										<input autocomplete="off" type="text" style="background-color: white;" class="form-control" placeholder="Estimate Salary Offer" name="estimate_salary_offer" value="<?php echo set_value('estimate_salary_offer'); ?>">
									</div>
								</div>

								<div class="col-xl-4 col-md-4 col-lg-4 col-sm-12">
									<div class="input-wrap">
										<input autocomplete="off" type="text" style="background-color: white;" class="form-control" placeholder="Other Allowance/Benefits" name="other_allowance" value="<?php echo set_value('other_allowance'); ?>">
									</div>
								</div>

								<div class="col-xl-4 col-md-4 col-lg-4 col-sm-12">
									<div class="input-wrap">
										<input autocomplete="off" type="text" style="background-color: white;" class="form-control" placeholder="Interview Type" name="interview_type" value="<?php echo set_value('interview_type'); ?>">
									</div>
								</div>


								<div class="col-lg-12">
									<div class="sub-btn">
										<input type="submit" class="sbutn" value="Apply Now">
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
			<div class="col-lg-2 col-md-2"></div>
		</div>
	</div>
</div>

<?php $this->load->view('templates/footer'); ?>
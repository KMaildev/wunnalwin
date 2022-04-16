<?php $this->load->view('templates/header'); ?>
<?php $this->load->view('templates/menu'); ?>

<div class="inner-content loginWrp">
	<div class="container">
		<div class="row">
			<div class="col-lg-2 col-md-2"></div>
			<div class="col-lg-8 col-md-8">

				<ul class="nav nav-tabs">
					<li class="nav-item">
						<button class="nav-link act1" id="ApplicationFormBtn">
							Application Form
						</button>
					</li>
					<li class="nav-item">
						<button class="nav-link act2" id="UploadCVBtn">
							Upload Your CV
						</button>
					</li>
				</ul>

				<div class="login">
					<div class="contctxt">Employment Application Form</div>
					<h4 class="title">Apply for your job.</h4>
					<div class="formint conForm">
						<?php $this->load->view('templates/shared/alert'); ?>

						<div id="ApplicationForm">
							<form method="post" action="<?php echo site_url('job_seeker/save'); ?>" autocomplete="off">
								<div class="row">

									<div class="col-xl-6 col-md-6 col-sm-12 mb-2">
										<div class="input-wrap">
											<label for="nameInput" class="form-label">Name</label>
											<input type="text" style="background-color: white;" class="form-control" placeholder="Name" name="name" value="<?php echo set_value('name'); ?>">
										</div>
									</div>

									<div class="col-xl-6 col-md-6 col-sm-12 mb-2">
										<div class="input-wrap">
											<label for="nameInput" class="form-label">NRC No</label>
											<input type="text" style="background-color: white;" class="form-control" placeholder="NRC No" name="nrc" value="<?php echo set_value('nrc'); ?>">
										</div>
									</div>

									<div class="col-xl-6 col-md-6 col-sm-12 mb-2">
										<div class="input-wrap">
											<label for="nameInput" class="form-label">Email Address</label>
											<input type="email" style="background-color: white;" class="form-control" placeholder="Email Address" name="email" value="<?php echo set_value('email'); ?>">
										</div>
									</div>

									<div class="col-xl-6 col-md-6 col-sm-12 mb-2">
										<div class="input-wrap">
											<label for="nameInput" class="form-label">Phone Number</label>
											<input type="text" style="background-color: white;" class="form-control" placeholder="Phone Number" name="phone" value="<?php echo set_value('phone'); ?>">
										</div>
									</div>

									<div class="col-xl-6 col-md-6 col-sm-12 mb-2">
										<div class="input-wrap">
											<label for="nameInput" class="form-label">Date Of Birth</label>
											<input type="text" style="background-color: white;" class="form-control" placeholder="Date Of Birth" name="date_of_birth" value="<?php echo set_value('name'); ?>">
										</div>
									</div>

									<div class="col-xl-6 col-md-6 col-sm-12 mb-2">
										<div class="input-wrap">
											<label for="nameInput" class="form-label">Health Status</label>
											<input type="text" style="background-color: white;" class="form-control" placeholder="Health Status" name="health_status" value="<?php echo set_value('health_status'); ?>">
										</div>
									</div>


									<div class="col-xl-6 col-md-6 col-sm-12 mb-2">
										<div class="input-wrap">
											<label for="nameInput" class="form-label">Age</label>
											<input type="text" style="background-color: white;" class="form-control" placeholder="Age" name="age" value="<?php echo set_value('age'); ?>">
										</div>
									</div>


									<div class="col-xl-6 col-md-6 col-sm-12 mb-2">
										<div class="input-wrap">
											<label for="nameInput" class="form-label">Gender</label>
											<ul class="row featchoose">
												<div class="col-md-4">
													<input type="radio" name="gender" value="Male" checked> Male
												</div>
												<div class="col-md-6">
													<input type="radio" name="gender" value="Female"> Female
												</div>
											</ul>
										</div>
									</div>
								</div>


								<div class="row">

									<div class="col-xl-6 col-md-6 col-sm-12 mb-2">
										<div class="input-wrap">
											<label for="nameInput" class="form-label">Height</label>
											<input type="text" style="background-color: white;" class="form-control" placeholder="Height" name="height" value="<?php echo set_value('height'); ?>">
										</div>
									</div>

									<div class="col-xl-6 col-md-6 col-sm-12 mb-2">
										<div class="input-wrap">
											<label for="nameInput" class="form-label">Weight <small><i>(lb)</i></small></label>
											<input type="text" style="background-color: white;" class="form-control" placeholder="Weight" name="weight" value="<?php echo set_value('weight'); ?>">
										</div>
									</div>

									<div class="col-xl-6 col-md-6 col-sm-12 mb-2">
										<div class="input-wrap">
											<label for="nameInput" class="form-label">Passport</label>
											<input type="text" style="background-color: white;" class="form-control" placeholder="Passport" name="passport" value="<?php echo set_value('passport'); ?>">
										</div>
									</div>

									<div class="col-xl-6 col-md-6 col-sm-12 mb-2">
										<div class="input-wrap">
											<label for="nameInput" class="form-label">Date Of Expiry (Passport)</label>
											<input type="text" style="background-color: white;" class="form-control" placeholder="Date Of Expiry (Passport)" name="expire_date" value="<?php echo set_value('expire_date'); ?>">
										</div>
									</div>

									<div class="col-xl-12 col-md-12 col-sm-12 mb-2">
										<div class="input-wrap">
											<label for="nameInput" class="form-label">Education</label>
											<input type="text" style="background-color: white;" class="form-control" placeholder="Education" name="education" value="<?php echo set_value('education'); ?>">
										</div>
									</div>

									<div class="col-xl-12 col-md-12 col-sm-12 mb-2">
										<div class="input-wrap">
											<label for="nameInput" class="form-label">Skill</label>
											<input type="text" style="background-color: white;" class="form-control" placeholder="Skill" name="skill" value="<?php echo set_value('skill'); ?>">
										</div>
									</div>

									<div class="col-xl-12 col-md-12 col-sm-12 mb-2">
										<div class="input-wrap">
											<label for="nameInput" class="form-label">Language</label>
											<input type="text" style="background-color: white;" class="form-control" placeholder="English 4 skills, N5 Japanese" name="language" value="<?php echo set_value('language'); ?>">
										</div>
									</div>

									<div class="col-xl-12 col-md-12 col-sm-12 mb-2">
										<div class="input-wrap">
											<label for="nameInput" class="form-label">Current Address</label>
											<input type="text" style="background-color: white;" class="form-control" placeholder="Current Address" name="current_address" value="<?php echo set_value('current_address'); ?>">
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

						<div id="UploadCV">
							<form method="post" action="<?php echo site_url('job_seeker/upload_cv'); ?>" enctype="multipart/form-data">
								<div class="row">
									<div class="col-xl-6 col-md-6 col-sm-12 col-lg-6 mb-4">
										<div class="input-wrap">
											<label for="nameInput" class="form-label">Name</label>
											<input type="text" style="background-color: white;" class="form-control" placeholder="Name" name="name" value="<?php echo set_value('name'); ?>" required autocomplete="off">
										</div>
									</div>

									<div class="col-xl-6 col-md-6 col-sm-12 col-lg-6 mb-4">
										<div class="input-wrap">
											<label for="nameInput" class="form-label">Phone Number</label>
											<input type="text" style="background-color: white;" class="form-control" placeholder="Phone Number" name="phone" value="<?php echo set_value('phone'); ?>" required autocomplete="off">
										</div>
									</div>

									<div class="col-xl-12 col-md-12 col-sm-12 col-lg-12 mb-4">
										<div class="input-wrap">
											<label for="nameInput" class="form-label">Upload Your CV</label>
											<input type="file" name="attached_file" required accept=".pdf, .doc, .docx">
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
			</div>
			<div class="col-lg-2 col-md-2"></div>
		</div>
	</div>
</div>

<?php $this->load->view('templates/footer'); ?>
<script>
	$(document).ready(function() {
		$("#ApplicationFormBtn").click(function() {
			$("#ApplicationForm").show();
			$("#UploadCV").hide();

			$('.act2').removeClass('active');
			$('.act1').addClass('active');
		});

		$("#UploadCVBtn").click(function() {
			$("#ApplicationForm").hide();
			$("#UploadCV").show();

			$('.act1').removeClass('active');
			$('.act2').addClass('active');
		});

		$("#ApplicationForm").show();
		$("#UploadCV").hide();
		$('.act1').addClass('active');
	});
</script>
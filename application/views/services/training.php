<?php $this->load->view('templates/header'); ?>
<?php $this->load->view('templates/menu'); ?>

<section class="employers-details-area pt-100 pb-70">
	<div class="container">
		<div class="row">
			<div class="col-lg-8">
				<div class="hot-jobs-list">
					<div class="row align-items-center">
						<div class="col-lg-2">
							<div>
								<img src="<?php echo base_url('public/data/japan_pic.jpg') ?>" alt="Image">
							</div>
						</div>

						<div class="col-lg-10">
							<div class="hot-jobs-content">
								<h3>Mother Sky Japanese & Education Centre</h3>
								<span class="sub-title">
									Training & Education Centre
								</span>
							</div>
						</div>
					</div>
				</div>

				<div class="employers-details-content">
					<h4>Training Photos</h4>

					<div class="row">
						<?php
						foreach ($trainings as $training) {
							$temp_arr = explode(',', $training->photo);
							$total_count = count($temp_arr);
							for ($i = 0; $i < $total_count; $i++) {
						?>
								<div class="col-lg-3 col-md-3 col-sm-12">
									<div class="office-photo">
										<img src="<?php echo base_url(); ?>admin/<?php print_r($temp_arr[$i]); ?>" alt="Image" data-enlargeable="" style="width: 100%; height:140px; object-fit:contain; box-shadow: 0px 1px 1px 1px #000000;">
									</div>
								</div>
							<?php } ?>
						<?php } ?>
					</div>
				</div>
			</div>

			<div class="col-lg-4">
				<div class="employers-details-sidebar">
					<div class="employer-widget">
						<h3>Share This Job</h3>

						<ul class="social-icon">
							<li>
								<a href="#">
									<i class="bx bxl-facebook"></i>
								</a>
							</li>
							<li>
								<a href="#">
									<i class="bx bxl-instagram"></i>
								</a>
							</li>
							<li>
								<a href="#">
									<i class="bx bxl-linkedin-square"></i>
								</a>
							</li>
							<li>
								<a href="#">
									<i class="bx bxl-twitter"></i>
								</a>
							</li>
						</ul>
					</div>

					<div class="employer-widget">
						<h3>Contact Us</h3>
						<?php $this->load->view('templates/shared/alert'); ?>
						<form class="contact-us" method="post" action="<?php echo site_url('contact/save'); ?>" style="background-color: #ffffff;">
							<div class="row">
								<div class="col-lg-6 col-sm-6">
									<div class="form-group">
										<label>Your Name</label>
										<input type="text" name="name" class="form-control" required data-error="Please enter your name">
										<div class="help-block with-errors"></div>
									</div>
								</div>

								<div class="col-lg-6 col-sm-6">
									<div class="form-group">
										<label>Your Email</label>
										<input type="email" name="email" class="form-control" required data-error="Please enter your email">
										<div class="help-block with-errors"></div>
									</div>
								</div>

								<div class="col-lg-6 col-sm-6">
									<div class="form-group">
										<label>Your Phone</label>
										<input type="text" name="phone" required data-error="Please enter your number" class="form-control">
										<div class="help-block with-errors"></div>
									</div>
								</div>

								<div class="col-lg-6 col-sm-6">
									<div class="form-group">
										<label>Subject</label>
										<input type="text" name="subject" class="form-control" required data-error="Please enter your subject">
										<div class="help-block with-errors"></div>
									</div>
								</div>

								<div class="col-12">
									<div class="form-group">
										<label>Your Message</label>
										<textarea name="message" class="form-control" id="message" cols="10" rows="6" required data-error="Write your message"></textarea>
										<div class="help-block with-errors"></div>
									</div>
								</div>


								<div class="col-lg-12 col-md-12">
									<button type="submit" class="default-btn">
										<span>Send Message</span>
									</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<?php $this->load->view('templates/footer'); ?>
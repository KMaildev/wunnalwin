<?php $this->load->view('templates/header'); ?>
<?php $this->load->view('templates/menu'); ?>

<div class="single-page-header" data-background-image="<?php echo base_url(); ?>public/assets/images/single-job.jpg">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="utf-single-page-header-inner-aera">
					<div class="utf-left-side">
						<div class="utf-header-image">
							<img src="<?php echo base_url(); ?>public/data/services.jpeg" alt="">
						</div>
						<div class="utf-header-details">
							<span class="dashboard-status-button utf-job-status-item green"><i class="icon-material-outline-business-center"></i> Our Services</span>
							<h3>RECRUITMENT & PLACEMENT PROCESS
								<span class="utf-verified-badge" title="Verified" data-tippy-placement="top"></span>
							</h3>
							<h5>
								<i class="icon-brand-wpforms"></i>
								<a href="<?php echo site_url('job_seeker'); ?>">
									Job Seeker
								</a>
							</h5>
							<h5>
								<i class="icon-material-outline-add-photo-alternate"></i>
								<a href="<?php echo site_url('activities'); ?>">
									Company Activities
								</a>
							</h5>
						</div>
					</div>
					<div class="utf-right-side">
						<div class="salary-box">
							<a href="<?php echo site_url('about'); ?>" class="apply-now-button popup-with-zoom-anim margin-top-0">
								Our Company
								<i class="icon-feather-chevron-right"></i>
							</a>
							<a href="<?php echo site_url('services/training'); ?>" class="button save-job-btn margin-top-20">
								Training
								<i class="icon-feather-chevron-right"></i></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="container" style="padding: 20px;">
	<div class="row">
		<div class="col-xl-8 col-lg-8 utf-content-right-offset-aera" style="background-color: #e3edfc; padding: 20px;">
			<div class="utf-single-page-section-aera">
				<div class="job-description-image-aera">
					<img src="<?php echo base_url(); ?>public/data/services.jpg" alt="" />
				</div>
				<div class="utf-boxed-list-headline-item">
					<h3>
						<i class="icon-material-outline-description"></i>
						RECRUITMENT & PLACEMENT PROCESS
					</h3>
				</div>
				<p style="text-align: justify">
					Based on the client’s demand, we organize the entire manpower recruitment and placement process. We submit the client’s demand Letter (Job Offer) to Department of labour, Republic of the Union of Myanmar Ministry of Labour, Immigration And Population, Employment and Social Security and after a process of discussion and negotiation, final agreement is made with the labour authority on behalf of the client.
					<br><br>

					Under the supervision of the Department of Labour, we advertise for the required qualified workers in Journals and newspapers for recruitment. After that, we arrange the medical checks for the workers (according to the requirements) at the accredited medical clinics, apply for the passports for the workers (under the auspices of the Ministries of Labour, Employment and Social Security and Home Affairs).
					<br><br>

					We plan the workers to have interviews with the employers from overseas companies. After the selection process, we help workers applying for visas and organizing travel arrangements and departure formalities.
					<br><br>

					Before worker’s departure, we provide one week training and education courses, including the briefings and orientation.
					All the manpower recruitment and processing activities are carried out in strict compliance with the Myanmar Department of Labour rules and regulations and in accordance with the requirements of the employer or the employing organization.
					<br><br>

					All the manpower recruitment and processing activities are carried out in strict compliance with the Myanmar Department of Labour rules and regulations and in accordance with the requirements of the employer or the employing organization.
				</p>
				<div class="row">
					<div class="col-xl-6 col-lg-6 col-sm-12">
						<a href="<?php echo site_url('job_seeker'); ?>" class="apply-now-button margin-top-0">Apply Now <i class="icon-feather-chevron-right"></i></a>
					</div>
					<div class="col-xl-6 col-lg-6 col-sm-12">
						<a href="<?php echo site_url('contact'); ?>" class="button save-job-btn">Contact Us <i class="icon-feather-chevron-right"></i></a>
					</div>
				</div>
				<div class="utf-detail-social-sharing margin-top-25">
					<span><strong>Social Media:-</strong></span>
					<ul class="margin-top-15">
						<li><a href="https://www.facebook.com/MML.MYANMARMANPOWERLINK" target="_blank" title="Facebook" data-tippy-placement="top"><i class="icon-brand-facebook-f"></i></a></li>
						<li><a href="#" title="Twitter" data-tippy-placement="top"><i class="icon-brand-twitter"></i></a></li>
						<li><a href="#" title="LinkedIn" data-tippy-placement="top"><i class="icon-brand-linkedin-in"></i></a></li>
						<li><a href="#" title="Google Plus" data-tippy-placement="top"><i class="icon-brand-google"></i></a></li>
						<li><a href="#" title="Whatsapp" data-tippy-placement="top"><i class="icon-brand-whatsapp"></i></a></li>
						<li><a href="#" title="Pinterest" data-tippy-placement="top"><i class="icon-brand-pinterest-p"></i></a></li>
					</ul>
				</div>
			</div>
		</div>

		<!-- Sidebar -->
		<div class="col-xl-4 col-lg-4">
			<div class="utf-sidebar-container-aera">


				<div class="utf-sidebar-widget-item">
					<div class="utf-quote-box utf-jobs-listing-utf-quote-box">
						<div class="utf-quote-info">
							<h4>
								Job Seekers
							</h4>
							<p>
								We help employees transition quickly and successfully into new jobs and career opportunities.
							</p>
							<a href="<?php echo site_url('job_seeker') ?>" class="button utf-ripple-effect-dark utf-button-sliding-icon margin-top-0">
								Apply Now
								<i class="icon-feather-chevron-right"></i>
							</a>
						</div>
					</div>
				</div>

				<div class="utf-sidebar-widget-item">
					<h3>Quick Contacts</h3>
					<form method="post" name="contactform" id="contact">
						<div class="row">
							<div class="col-md-12">
								<div class="utf-no-border">
									<input class="utf-with-border" name="fristname" type="text" id="fristname" placeholder="Name" required />
								</div>
							</div>

							<div class="col-md-12">
								<div class="utf-no-border">
									<input class="utf-with-border" name="email" type="email" id="email" placeholder="Email Address" required />
								</div>
							</div>

							<div class="col-md-12">
								<div class="utf-no-border">
									<input class="utf-with-border" name="lastname" type="text" id="lastname" placeholder="Phone" required />
								</div>
							</div>

							<div class="col-md-12">
								<div class="utf-no-border">
									<input class="utf-with-border" name="subject" type="text" id="subject" placeholder="Subject" required />
								</div>
							</div>
						</div>
						<div>
							<textarea class="utf-with-border" name="comments" cols="40" rows="2" id="comments" placeholder="Message..." required></textarea>
						</div>
						<div class="utf-centered-button margin-top-10">
							<input type="submit" class="submit button" id="submit" value="Send Message" />
						</div>
					</form>
				</div>

				<div class="utf-sidebar-widget-item">
					<h3>Useful Links</h3>
					<div class="utf-tags-container-item">
						<div class="tag">
							<input type="checkbox" id="tag1"/>
							<label for="tag1">
								<a href="<?php echo site_url('welcome'); ?>" style="color: black;">
									Home
								</a>
							</label>
						</div>

						<div class="tag">
							<input type="checkbox" id="tag1"/>
							<label for="tag1">
								<a href="<?php echo site_url('about'); ?>" style="color: black;">
									About Us
								</a>
							</label>
						</div>

						<div class="tag">
							<input type="checkbox" id="tag1"/>
							<label for="tag1">
								<a href="<?php echo site_url('services'); ?>" style="color: black;">
									Our Services
								</a>
							</label>
						</div>

						<div class="tag">
							<input type="checkbox" id="tag1"/>
							<label for="tag1">
								<a href="<?php echo site_url('job_seeker'); ?>" style="color: black;">
									Job Seeker
								</a>
							</label>
						</div>

						<div class="tag">
							<input type="checkbox" id="tag1"/>
							<label for="tag1">
								<a href="<?php echo site_url('activities'); ?>" style="color: black;">
									Company Activities
								</a>
							</label>
						</div>

						<div class="tag">
							<input type="checkbox" id="tag1"/>
							<label for="tag1">
								<a href="<?php echo site_url('contact'); ?>" style="color: black;">
									Contact Us
								</a>
							</label>
						</div>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php $this->load->view('templates/footer'); ?>

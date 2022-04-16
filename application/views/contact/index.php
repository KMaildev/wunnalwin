<?php $this->load->view('templates/header'); ?>
<?php $this->load->view('templates/menu'); ?>

<div class="inner-heading">
	<div class="container">
		<h3>Contact Us</h3>
	</div>
</div>


<div class="inner-content contact-now">
	<div class="container">
		<div class="row">
			<div class="col-lg-4">
				<div class="contact"> <span><i class="fa fa-home"></i></span>
					<div class="information"> <strong>Address:</strong>
						<p>
							Bldo 1/(6-A), East Myo Pat Street, South Sayarsan Quorter, Bahan Township, Yangon, Myanmar
						</p>
					</div>
				</div>
			</div>
			<div class="col-lg-4">
				<div class="contact"> <span><i class="fa fa-phone"></i></span>
					<div class="information"> <strong>Phone No:</strong>
						<p>
							<a href="+959 429 289 656">+95 9 429 289 656</a>
						</p>
						<p>
							<a href="tel:+95 9 450 672149">
								+95 9 450 672149
							</a>
						</p>
					</div>
				</div>
			</div>
			<div class="col-lg-4">
				<div class="contact"> <span><i class="fa fa-envelope"></i></span>
					<div class="information"> <strong>Email Address:</strong>
						<p>
							<a href="info@wunnalwincompany.com">
								info@wunnalwincompany.com
							</a>
							<a href="admin@wunnalwincompany.com">
								admin@wunnalwincompany.com
							</a>
						</p>
					</div>
				</div>
			</div>
		</div>


		<div class="row formCont">
			<div class="col-lg-6">
				<?php $this->load->view('templates/shared/alert'); ?>
				<form method="post" action="<?php echo site_url('contact/save'); ?>" autocomplete="off">
					<div class="row">
						<div class="col-md-6">
							<div class="input-wrap">
								<input type="text" name="name" placeholder="Full Name" class="form-control">
								<div class="form-icon"><i class="fa fa-user" aria-hidden="true"></i></div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="input-wrap">
								<input type="text" name="phone" placeholder="Your Phone" class="form-control">
								<div class="form-icon"><i class="fa fa-phone" aria-hidden="true"></i></div>
							</div>
						</div>
					</div>
					<div class="input-wrap">
						<input type="text" name="email" placeholder="Your Email" class="form-control">
						<div class="form-icon"><i class="fa fa-envelope" aria-hidden="true"></i></div>
					</div>
					<div class="input-wrap">
						<input type="text" name="subject" placeholder="Subject" class="form-control">
						<div class="form-icon"><i class="fa fa-comment" aria-hidden="true"></i></div>
					</div>
					<div class="input-wrap">
						<textarea class="form-control" placeholder="Type Your Message here.." name="message"></textarea>
						<div class="form-icon"><i class="fa fa-comment" aria-hidden="true"></i></div>
					</div>
					<div class="contact-btn">
						<button class="sub" type="submit" value="submit" name="submitted"> <i class="fa fa-paper-plane" aria-hidden="true"></i> Send Message</button>
					</div>
				</form>
			</div>
			<div class="col-lg-6">
				<div class="mapWrp">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3439665.415133291!2d-85.42187768895461!3d32.658159955276645!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88f136c51d5f8157%3A0x6684bc10ec4f10e7!2sGeorgia!5e0!3m2!1sen!2sus!4v1505905563776" width="100" height="300" style="border:0" allowfullscreen=""></iframe>
				</div>
			</div>
		</div>
	</div>
</div>

<?php $this->load->view('templates/footer'); ?>
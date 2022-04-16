<div class="header-wrap">
	<div class="container">
		<div class="row">

			<div class="col-lg-3 col-md-3 navbar-light">
				<div class="logo">
					<a href="<?php echo site_url('welcome'); ?>">
						<img src="<?php echo base_url(); ?>public/assets/images/logo.png" alt="">
					</a>
				</div>
				<button onclick="myFunction()" class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
			</div>

			<div class="col-lg-9 col-md-9">
				<div class="navigationwrape">
					<div class="navbar navbar-expand-lg navbar-default navbar-light" role="navigation">
						<div class="navbar-header"> </div>
						<div class="navbar-collapse collapse" id="navbarScroll">
							<ul class="nav navbar-nav">
								<li>
									<a href="<?php echo site_url('welcome'); ?>">
										Home
									</a>
								</li>

								<li>
									<a href="<?php echo site_url('about'); ?>">
										Company Profile
									</a>
								</li>

								<li class="dropdown">
									<a href="#">
										Foreign Employment
										<span class="caret"></span>
									</a>
									<ul class="dropdown-menu">
										<?php
										foreach ($country_lists as $key => $value) {
										?>
											<li>
												<a href="<?php echo site_url('oversea_jobs/category/' . $value->id); ?>" class="dropdown-item">
													<?php echo $value->name; ?>
												</a>
											</li>
										<?php } ?>
									</ul>
								</li>

								<li>
									<a href="<?php echo site_url('job_seeker'); ?>">Job Seekers</a>
								</li>

								<li>
									<a href="<?php echo site_url('employers'); ?>">Employers</a>
								</li>

								<li>
									<a href="<?php echo site_url('activities'); ?>">
										Gallery
									</a>
								</li>

								<li>
									<a href="<?php echo site_url('contact'); ?>">
										Knowledge
									</a>
								</li>

								<li>
									<a href="<?php echo site_url('contact'); ?>">
										Contact us
									</a>
								</li>
							</ul>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
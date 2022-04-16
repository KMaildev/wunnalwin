<?php $this->load->view('templates/header'); ?>
<?php $this->load->view('templates/menu'); ?>

<div class="inner-content listing">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-8 col-xl-9">
				<div class="sortbybar">
					<div class="sortbar listingSearch">
						<div class="form-wrap">
							<form class="search-job" method="get" action="<?php echo site_url('oversea_jobs/category/' . $country_title->id); ?>" autocomplete="off">
								<div class="row">
									<div class="col-xl-10">
										<div class="input-group">
											<input type="text" name="keyword" placeholder="Job title" class="form-control">
										</div>
									</div>
									<div class="col-xl-2">
										<div class="input-btn">
											<input type="submit" class="sbutn" value="Search">
										</div>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
				<ul class="listService">
					<?php
					foreach ($oversea_jobs as $key => $value) {
						if ($value->country_id == $country_title->id) {
					?>
							<li>
								<div class="listWrpService featured-wrap">
									<div class="row">
										<div class="col-xl-2 col-md-3 col-xs-3">
											<div class="listImg">
												<img src="<?php echo base_url(); ?>public/data/apply.png" alt="">
											</div>
										</div>
										<div class="col-xl-10 col-md-9 col-xs-9">

											<div class="row">
												<div class="col-xl-9">
													<h3>
														<a href="#">
															<?php echo $value->name; ?>
														</a>
													</h3>
													<ul class="featureInfo innerfeat">
														<li>
															<i class="fa fa-map-marker" aria-hidden="true" style="color: white;">
																<?php echo $country_title->name; ?>
															</i>
														</li>
													</ul>
													<p class="para">
														<?php echo $value->description ?>
													</p>
												</div>
												<div class="col-xl-3">
													<div class="click-btn apply">
														<a href="<?php echo site_url('contact'); ?>" style="margin: 2px;">Contact Us</a>
														<a href="<?php echo site_url('job_seeker'); ?>" style="margin: 2px;">Apply Now</a>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</li>
						<?php } ?>
					<?php } ?>
				</ul>
			</div>
		</div>
	</div>
</div>

<?php $this->load->view('templates/footer'); ?>
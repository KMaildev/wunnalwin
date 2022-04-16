<?php $this->load->view('templates/header'); ?>
<?php $this->load->view('templates/menu'); ?>

<div class="blog-wrap" style="background-color: #f3f2f2;">
	<div class="container">
		<ul class="row blogGrid">
			<?php
			foreach ($activities as $activitie) {
				$temp_arr = explode(',', $activitie->photo);
				$total_count = count($temp_arr);
				for ($i = 0; $i < $total_count; $i++) {
			?>
					<li class="col-lg-3">
						<div class="blog-inter">
							<div class="postimg">
								<img src="<?php echo base_url(); ?>admin/<?php print_r($temp_arr[$i]); ?>" alt="Blog Title" style="width: 100%; height: 180px; object-fit: center; background-size: contain;" data-enlargeable="">
							</div>
						</div>
					</li>
				<?php } ?>
			<?php } ?>
		</ul>
	</div>
</div>

<?php $this->load->view('templates/footer'); ?>
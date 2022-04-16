<?php
if ($this->session->flashdata('success')) {
?>
	<div class="alert alert-dismissible alert-primary" style="background-color: green; padding: 10px;">
		<strong style="color: white;"><?php echo $this->session->flashdata('success'); ?></strong>
	</div>

<?php } elseif ($this->session->flashdata('error')) { ?>
	<div class="alert alert-dismissible alert-danger" style="background-color: red; padding: 10px;">
		<strong style="color: white;"><?php echo $this->session->flashdata('error'); ?></strong>
	</div>
<?php } ?>

<?php echo validation_errors(); ?>


<style>
	.error {
		color: red;
	}
</style>
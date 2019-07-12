<?php echo validation_errors(); ?>

<?php echo form_open_multipart('vehicles/login'); ?>
	<div class="row">
		<div class="col-md-4 col-md-offset-4">
			<h1 class="text-center"><?= $title; ?></h1>

			<div class="form-group">
				<label>Vehicle name</label>
				<input type="text" class="form-control" name="vehicle_name" placeholder="Vehicle name">
			</div>
			<div class="form-group">
				<label>License</label>
				<input type="text" class="form-control" name="license" placeholder="License">
			</div>
			<button type="submit" class="btn btn-primary btn-block">Submit</button>
		</div>
	</div>
<?php echo form_close(); ?>
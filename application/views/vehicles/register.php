<?php echo validation_errors(); ?>

<?php echo form_open_multipart('vehicles/register'); ?>
	<div class="row">
		<div class="col-md-4 col-md-offset-4">
			<h1 class="text-center"><?= $title; ?></h1>
			<div class="form-group">
				<label>Make</label>
				<input type="text" class="form-control" name="make" placeholder="Make">
			</div>
			<div class="form-group">
				<label>Model</label>
				<input type="text" class="form-control" name="model" placeholder="Model">
			</div>
			<div class="form-group">
				<label>Vehicle name</label>
				<input type="text" class="form-control" name="vehicle_name" placeholder="Vehicle name">
			</div>
			<div class="form-group">
				<label>License</label>
				<input type="text" class="form-control" name="license" placeholder="License">
			</div>
      <div class="form-group">
	      <label>Upload Image</label>
	      <input type="file" name="image" size="200">
      </div>

			<button type="submit" class="btn btn-primary btn-block">Submit</button>
		</div>
	</div>
<?php echo form_close(); ?>
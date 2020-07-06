<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Tour Add</h3>
            </div>
            <?php echo form_open('tour/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="Name" class="control-label">Name</label>
						<div class="form-group">
							<input type="text" name="Name" value="<?php echo $this->input->post('Name'); ?>" class="form-control" id="Name" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="Schedule" class="control-label">Schedule</label>
						<div class="form-group">
							<input type="text" name="Schedule" value="<?php echo $this->input->post('Schedule'); ?>" class="form-control" id="Schedule" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="Start" class="control-label">Start</label>
						<div class="form-group">
							<input type="text" name="Start" value="<?php echo $this->input->post('Start'); ?>" class="form-control" id="Start" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="NoDay" class="control-label">NoDay</label>
						<div class="form-group">
							<input type="text" name="NoDay" value="<?php echo $this->input->post('NoDay'); ?>" class="form-control" id="NoDay" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="NoNight" class="control-label">NoNight</label>
						<div class="form-group">
							<input type="text" name="NoNight" value="<?php echo $this->input->post('NoNight'); ?>" class="form-control" id="NoNight" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="Vehicle" class="control-label">Vehicle</label>
						<div class="form-group">
							<input type="text" name="Vehicle" value="<?php echo $this->input->post('Vehicle'); ?>" class="form-control" id="Vehicle" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="Hotel" class="control-label">Hotel</label>
						<div class="form-group">
							<input type="text" name="Hotel" value="<?php echo $this->input->post('Hotel'); ?>" class="form-control" id="Hotel" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="NoTicket" class="control-label">NoTicket</label>
						<div class="form-group">
							<input type="text" name="NoTicket" value="<?php echo $this->input->post('NoTicket'); ?>" class="form-control" id="NoTicket" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="Price" class="control-label">Price</label>
						<div class="form-group">
							<input type="text" name="Price" value="<?php echo $this->input->post('Price'); ?>" class="form-control" id="Price" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="IdTourType" class="control-label">IdTourType</label>
						<div class="form-group">
							<input type="text" name="IdTourType" value="<?php echo $this->input->post('IdTourType'); ?>" class="form-control" id="IdTourType" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="Note" class="control-label">Note</label>
						<div class="form-group">
							<input type="text" name="Note" value="<?php echo $this->input->post('Note'); ?>" class="form-control" id="Note" />
						</div>
					</div>
				</div>
			</div>
          	<div class="box-footer">
            	<button type="submit" class="btn btn-success">
            		<i class="fa fa-check"></i> Save
            	</button>
          	</div>
            <?php echo form_close(); ?>
      	</div>
    </div>
</div>
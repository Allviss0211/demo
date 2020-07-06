<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Tourdescription Add</h3>
            </div>
            <?php echo form_open('tourdescription/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="Description" class="control-label">Description</label>
						<div class="form-group">
							<input type="text" name="Description" value="<?php echo $this->input->post('Description'); ?>" class="form-control" id="Description" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="Timeline" class="control-label">Timeline</label>
						<div class="form-group">
							<input type="text" name="Timeline" value="<?php echo $this->input->post('Timeline'); ?>" class="form-control" id="Timeline" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="Image" class="control-label">Image</label>
						<div class="form-group">
							<input type="text" name="Image" value="<?php echo $this->input->post('Image'); ?>" class="form-control" id="Image" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="IdTour" class="control-label">IdTour</label>
						<div class="form-group">
							<input type="text" name="IdTour" value="<?php echo $this->input->post('IdTour'); ?>" class="form-control" id="IdTour" />
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
<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Billinfo Edit</h3>
            </div>
			<?php echo form_open('billinfo/edit/'.$billinfo['IdBillInfo']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="IdBill" class="control-label">IdBill</label>
						<div class="form-group">
							<input type="text" name="IdBill" value="<?php echo ($this->input->post('IdBill') ? $this->input->post('IdBill') : $billinfo['IdBill']); ?>" class="form-control" id="IdBill" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="NoAdult" class="control-label">NoAdult</label>
						<div class="form-group">
							<input type="text" name="NoAdult" value="<?php echo ($this->input->post('NoAdult') ? $this->input->post('NoAdult') : $billinfo['NoAdult']); ?>" class="form-control" id="NoAdult" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="NoChildren" class="control-label">NoChildren</label>
						<div class="form-group">
							<input type="text" name="NoChildren" value="<?php echo ($this->input->post('NoChildren') ? $this->input->post('NoChildren') : $billinfo['NoChildren']); ?>" class="form-control" id="NoChildren" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="TotalPrice" class="control-label">TotalPrice</label>
						<div class="form-group">
							<input type="text" name="TotalPrice" value="<?php echo ($this->input->post('TotalPrice') ? $this->input->post('TotalPrice') : $billinfo['TotalPrice']); ?>" class="form-control" id="TotalPrice" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="Note" class="control-label">Note</label>
						<div class="form-group">
							<input type="text" name="Note" value="<?php echo ($this->input->post('Note') ? $this->input->post('Note') : $billinfo['Note']); ?>" class="form-control" id="Note" />
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
<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Chỉnh sửa loại Tour</h3>
            </div>
			<?php echo form_open('tourtype/edit/'.$tourtype['IdTourType']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="Name" class="control-label">Tên</label>
						<div class="form-group">
							<input type="text" name="Name" value="<?php echo ($this->input->post('Name') ? $this->input->post('Name') : $tourtype['Name']); ?>" class="form-control" id="Name" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="Note" class="control-label">Ghi chú</label>
						<div class="form-group">
							<input type="text" name="Note" value="<?php echo ($this->input->post('Note') ? $this->input->post('Note') : $tourtype['Note']); ?>" class="form-control" id="Note" />
						</div>
					</div>
				</div>
			</div>
			<div class="box-footer">
            	<button type="submit" class="btn btn-success">
					<i class="fa fa-check"></i> Lưu
				</button>
	        </div>				
			<?php echo form_close(); ?>
		</div>
    </div>
</div>
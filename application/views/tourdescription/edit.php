<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Chỉnh sửa chi tiết Tour</h3>
            </div>
			<?php echo form_open('tourdescription/edit/'.$tourdescription['IdDesciption']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="Description" class="control-label">Giới thiệu</label>
						<div class="form-group">
							<input type="text" name="Description" value="<?php echo ($this->input->post('Description') ? $this->input->post('Description') : $tourdescription['Description']); ?>" class="form-control" id="Description" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="Timeline" class="control-label">Timeline</label>
						<div class="form-group">
							<input type="text" name="Timeline" value="<?php echo ($this->input->post('Timeline') ? $this->input->post('Timeline') : $tourdescription['Timeline']); ?>" class="form-control" id="Timeline" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="Image" class="control-label">Hình ảnh</label>
						<div class="form-group">
							<input type="file" name="Image" value="<?php echo ($this->input->post('Image') ? $this->input->post('Image') : $tourdescription['Image']); ?>" class="form-control" id="Image" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="IdTour" class="control-label">Tên tour</label>
						<div class="form-group">
							<select name="IdTour" id="IdTour" class="form-control">
								<option value="0">Chọn tour</option>
								<?php foreach ($tour as $t) {
									if($tourdescription['IdTour'] === $t['IdTour']) {
										echo "<option value='{$t['IdTour']}' selected>{$t["NameTour"]}</option>";
									}
									else 
										echo "<option value='{$t['IdTour']}'>{$t["NameTour"]}</option>";
								} ?>
							</select>
						</div>
					</div>
					<div class="col-md-6">
						<label for="Note" class="control-label">Ghi chú</label>
						<div class="form-group">
							<input type="text" name="Note" value="<?php echo ($this->input->post('Note') ? $this->input->post('Note') : $tourdescription['Note']); ?>" class="form-control" id="Note" />
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
<div class="row">
	<div class="col-md-12">
		<div class="box box-info">
			<div class="box-header with-border">
				<h3 class="box-title">Thêm chi tiết Tour</h3>
			</div>
			<?php echo form_open('tourdescription/add'); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="Description" class="control-label">Giới thiệu</label>
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
						<label for="IdTour" class="control-label">Tên tour</label>
						<div class="form-group">
							<select name="IdTour" id="IdTour" class="form-control">
								<option value="0">Chọn tour</option>
								<?php foreach ($tour as $t) { ?>
									<option value="<?php echo $t['IdTour']; ?>"><?php echo $t["NameTour"] ?></option>;
								<?php }
								?>
							</select>
						</div>
					</div>
					<div class="col-md-6">
						<label for="Image" class="control-label">Hình ảnh</label>
						<div class="form-group">
							<!-- boostrap 3.3.6 -->
							<div class="input-group mb-3">
								<div class="custom-file">
								<input type="file" name="Image" value="<?php echo $this->input->post('Image'); ?>" class="custom-file-input" id="Image" />
									<!-- <label class="custom-file-label" for="inputGroupFile01">Chọn hình ảnh</label> -->
								</div>
							</div>

							<!-- boostrap 4.0 -->
							<!-- <input type="file" name="Image" value="<?php echo $this->input->post('Image'); ?>" class="form-control" id="Image" /> -->
						</div>
					</div>
					<div class="col-md-6">
						<label for="Note" class="control-label">Ghi chú</label>
						<div class="form-group">
							<input type="text" name="Note" value="<?php echo $this->input->post('Note'); ?>" class="form-control" id="Note" />
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
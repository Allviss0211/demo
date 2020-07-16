<div class="row">

	<div class="col-md-12">

		<div class="box">

			<div class="box-header">

				<h3 class="box-title">Danh sách hóa đơn</h3>

				<div class="box-tools">

					<a href="<?php echo site_url('bill/add'); ?>" class="btn btn-success btn-sm">Thêm</a>

				</div>

			</div>

			<div class="box-body">

				<table class="table table-striped">

					<tr>

						<!-- <th>ID</th> -->

						<th>Ngày đặt vé</th>

						<th>Tour</th>

						<th>Họ tên</th>

						<th>Số người lớn</th>

						<th>Số trẻ em</th>

						<th>Trạng thái</th>

						<th>Tiền đã trả</th>

						<th>CMND/CCCD</th>

						<th>Ngày sinh</th>

						<th>Địa chỉ</th>

						<th>SĐT</th>

						<th>Email</th>

						<!-- <th>Ghi chú</th> -->

						<th>Thao tác</th>

					</tr>

					<?php foreach ($bill as $b) { ?>

						<tr>

							<!-- <td><?php echo $b['IdBill']; ?></td> -->

							<td>
								<div style="width: 75px;"><?php echo $b['OrderDate']; ?></div>
							</td>

							<td><?php echo $b['Name']; ?></td>

							<td><?php echo $b['CustomerName']; ?></td>

							<td><?php echo $b['NoAdult']; ?></td>

							<td><?php echo $b['NoChildren']; ?></td>

							<td><?php echo $b['Status'] . "%"; ?></td>

							<td><?php echo $b['TotalPrice']; ?></td>

							<td><?php echo $b['CustomerIdentityCard']; ?></td>

							<td>
								<div style="width: 75px;"><?php echo $b['CustomerBirthday']; ?></div>
							</td>

							<td><?php echo $b['CustomerAddress']; ?></td>

							<td><?php echo $b['CustomerPhone']; ?></td>

							<td>
								<div class="truncate-text"><?php echo $b['CustomerEmail']; ?></div>
							</td>

							<!-- <td><?php echo $b['Note']; ?></td> -->

							<td>

								<a href="<?php echo site_url('bill/edit/' . $b['IdBill']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Sửa</a>

								<a href="<?php echo site_url('bill/remove/' . $b['IdBill']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Xóa</a>

							</td>

						</tr>

					<?php } ?>

				</table>

			</div>

		</div>

	</div>

</div>

<style>
	.truncate-text {
		width: 120px;
		overflow: hidden;
		text-overflow: ellipsis;
		white-space: nowrap;
	}
</style>
<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Tour Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('tour/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>IdTour</th>
						<th>Tên</th>
						<th>Lịch trình</th>
						<th>Nơi khởi hành</th>
						<th>Số ngày</th>
						<th>Số đêm</th>
						<th>Phuông tiện</th>
						<th>Khách sạn</th>
						<th>Số lượng vé</th>
						<th>Giá</th>
						<th>Loại tour</th>
						<th>Ghi chú</th>
						<th>Hành sự</th>
                    </tr>
                    <?php foreach($tour as $t){ ?>
                    <tr>
						<td><?php echo $t['IdTour']; ?></td>
						<td><?php echo $t['Name']; ?></td>
						<td><?php echo $t['Schedule']; ?></td>
						<td><?php echo $t['Start']; ?></td>
						<td><?php echo $t['NoDay']; ?></td>
						<td><?php echo $t['NoNight']; ?></td>
						<td><?php echo $t['Vehicle']; ?></td>
						<td><?php echo $t['Hotel']; ?></td>
						<td><?php echo $t['NoTicket']; ?></td>
						<td><?php echo $t['Price']; ?></td>
						<td><?php echo $this->Tourtype_model->get_tourtype($t["IdTourType"])["Name"]; ?></td>
						<td><?php echo $t['Note']; ?></td>
						<td>
                            <a href="<?php echo site_url('tour/edit/'.$t['IdTour']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('tour/remove/'.$t['IdTour']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>

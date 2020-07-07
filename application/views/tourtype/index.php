<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Danh sách loại Tour</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('tourtype/add'); ?>" class="btn btn-success btn-sm">Thêm</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<!-- <th>ID</th> -->
						<th>Tên</th>
						<th>Ghi chú</th>
						<th>Thao tác</th>
                    </tr>
                    <?php foreach($tourtype as $t){ ?>
                    <tr>
						<!-- <td><?php echo $t['IdTourType']; ?></td> -->
						<td><?php echo $t['Name']; ?></td>
						<td><?php echo $t['Note']; ?></td>
						<td>
                            <a href="<?php echo site_url('tourtype/edit/'.$t['IdTourType']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Sửa</a> 
                            <a href="<?php echo site_url('tourtype/remove/'.$t['IdTourType']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Xóa</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>

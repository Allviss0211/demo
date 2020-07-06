<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Billinfo Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('billinfo/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>IdBillInfo</th>
						<th>IdBill</th>
						<th>NoAdult</th>
						<th>NoChildren</th>
						<th>TotalPrice</th>
						<th>Note</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($billinfo as $b){ ?>
                    <tr>
						<td><?php echo $b['IdBillInfo']; ?></td>
						<td><?php echo $b['IdBill']; ?></td>
						<td><?php echo $b['NoAdult']; ?></td>
						<td><?php echo $b['NoChildren']; ?></td>
						<td><?php echo $b['TotalPrice']; ?></td>
						<td><?php echo $b['Note']; ?></td>
						<td>
                            <a href="<?php echo site_url('billinfo/edit/'.$b['IdBillInfo']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('billinfo/remove/'.$b['IdBillInfo']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>

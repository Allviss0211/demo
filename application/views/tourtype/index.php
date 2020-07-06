<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Tourtype Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('tourtype/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>IdTourType</th>
						<th>Name</th>
						<th>Note</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($tourtype as $t){ ?>
                    <tr>
						<td><?php echo $t['IdTourType']; ?></td>
						<td><?php echo $t['Name']; ?></td>
						<td><?php echo $t['Note']; ?></td>
						<td>
                            <a href="<?php echo site_url('tourtype/edit/'.$t['IdTourType']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('tourtype/remove/'.$t['IdTourType']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>

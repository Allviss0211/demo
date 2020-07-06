<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Tourdescription Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('tourdescription/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>IdDesciption</th>
						<th>Description</th>
						<th>Timeline</th>
						<th>Image</th>
						<th>IdTour</th>
						<th>Note</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($tourdescription as $t){ ?>
                    <tr>
						<td><?php echo $t['IdDesciption']; ?></td>
						<td><?php echo $t['Description']; ?></td>
						<td><?php echo $t['Timeline']; ?></td>
						<td><?php echo $t['Image']; ?></td>
						<td><?php echo $t['IdTour']; ?></td>
						<td><?php echo $t['Note']; ?></td>
						<td>
                            <a href="<?php echo site_url('tourdescription/edit/'.$t['IdDesciption']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('tourdescription/remove/'.$t['IdDesciption']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>

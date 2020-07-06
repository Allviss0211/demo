<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">User Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('user/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>IdUser</th>
						<th>Username</th>
						<th>Password</th>
						<th>IdDecentralization</th>
						<th>Fullname</th>
						<th>IdentityCard</th>
						<th>Birthday</th>
						<th>Phone</th>
						<th>Email</th>
						<th>Address</th>
						<th>Note</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($user as $u){ ?>
                    <tr>
						<td><?php echo $u['IdUser']; ?></td>
						<td><?php echo $u['Username']; ?></td>
						<td><?php echo $u['Password']; ?></td>
						<td><?php echo $u['IdDecentralization']; ?></td>
						<td><?php echo $u['Fullname']; ?></td>
						<td><?php echo $u['IdentityCard']; ?></td>
						<td><?php echo $u['Birthday']; ?></td>
						<td><?php echo $u['Phone']; ?></td>
						<td><?php echo $u['Email']; ?></td>
						<td><?php echo $u['Address']; ?></td>
						<td><?php echo $u['Note']; ?></td>
						<td>
                            <a href="<?php echo site_url('user/edit/'.$u['IdUser']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('user/remove/'.$u['IdUser']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>

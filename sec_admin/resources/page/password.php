<?php change_admin_password(); ?>
        <form action="" method="POST">
        	<div class="content" style="min-height: 80vh;">
        		<div class="orders">
        			<div class="row">
        				<div class="col-xl-12">
        					<div class="card">
        						<div class="card-body">
        							<h4 class="box-title">Change Password</h4>
        						</div>
        						<div class="card-body">
        							<form>
        								<div class="form-group">
        									<label>Current Password</label>
        									<input type="password" name="current_password" class="form-control" placeholder="Type your current password" required>
        								</div>
        								<div class="form-group">
        									<label>New Password</label>
        									<input type="password" name="new_password" class="form-control" placeholder="Type your new password" required>
        								</div>
        								<div class="form-group">
        									<label>Confirm New Password</label>
        									<input type="password" name="confirm_password" class="form-control" placeholder="Re-Type your new password" required>
        								</div>
        								<div class="form-group">
        									<button type="submit" name="change_password" class="btn btn-success form-control"> Change Password</button>
        								</div>
        							</form>
        						</div>
        					</div> <!-- /.card -->
        				</div>  <!-- /.col-lg-8 -->
        			</div>
        		</div>
        	</div>
        </form>
        <!-- /.content -->

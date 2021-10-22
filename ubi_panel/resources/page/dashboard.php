<?php $ubi = get_ubi_info($_SESSION['ubi_id']); extract($ubi); ?>
<?php if ($status == 1) { $edit = "";} else {$edit = '<a href="edit_ubi.php" target="_blank" class="btn-sm btn-primary"><i class="fa fa-edit"></i> Edit Application</a>';}

?>
        <!-- /#header -->
        <!-- Content -->
        <div class="content" style="min-height: 100vh;">
            <!-- Animated -->
            <div class="animated fadeIn">
                <!-- Widgets  -->
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <h3 class="text-success">Status</h3>
                                <?php if ($status == 1) { ?>
                                    <p class="">Your application approved successfully.<br>One-Time Code: <b><?php echo $one_time_code ?></b></p>
                                <?php } elseif ($status == 2) { ?>
                                    <p class="">Your application declined by admin please reviwe and update.</p>
                                <?php } elseif ($status == 0) {  ?>
                                    <p class="">Your application is in under admin review.</p>
                                <?php } echo $edit; ?>
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <h3 class="text-danger">Rejected</h3>
                                <p>Your application is rejected <b class="text-danger"><?php echo $rejected; ?> Times</b>.</p>
                                <?php echo $edit; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- .animated -->
        </div>
        <!-- /.content -->

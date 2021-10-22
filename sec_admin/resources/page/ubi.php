<?php accept_registration("ubi_registrations"); decline_registration("ubi_registrations"); ?>
        <!-- /#header -->
        <!-- Content -->
        <div class="content" style="min-height: 80vh;">
            <div class="orders">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="box-title">Search Registration </h4>
                            </div>
                            <div class="card-body">
                                <form method="POST">
                                    <div class="row">
                                        <div class="col-9">
                                            <div class="form-group">
                                                <input type="text" placeholder="Enter Name,Email,Pocketbook ID, ID Code or 16 Digit Code" class="form-control" name="keywords" required>
                                            </div>
                                        </div>
                                        <div class="col-3">
                                            <button class="btn btn-primary w-100" name="search">Search</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div> <!-- /.card -->
                    </div>  <!-- /.col-lg-8 -->
                </div>
            </div>

            <div class="orders">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="box-title">All UBI Registrations </h4>
                            </div>
                            <div class="card-body">
                                <div class="table-stats order-table ov-h">
                                    <table class="table " id="user_table">
                                        <thead>
                                            <tr>
                                                <th class="serial">#</th>
                                                <th>ID Code</th>
                                                <th>Pocketbook Code</th>
                                                <th>Full Name</th>
                                                <th>Gender</th>
                                                <th>Email</th>
                                                <th>Rejected</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                           <?php get_all_ubis(); ?>
                                        </tbody>
                                    </table>
                                </div> <!-- /.table-stats -->
                            </div>
                        </div> <!-- /.card -->
                    </div>  <!-- /.col-lg-8 -->
                </div>
            </div>
        </div>
        <!-- /.content -->

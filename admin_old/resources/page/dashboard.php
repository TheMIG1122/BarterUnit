        <!-- /#header -->
        <!-- Content -->
        <div class="content" style="min-height: 100vh;">
            <!-- Animated -->
            <div class="animated fadeIn">
                <!-- Widgets  -->
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="card">

                            <div class="card-body">
                                <div class="stat-widget-five">
                                    <div class="stat-icon dib flat-color-1">
                                        <i class="ti-write"></i>
                                    </div>
                                    <div class="stat-content">
                                        <div class="text-left dib">
                                            <div class="stat-text"><span class="count"><?php echo count_as_total("ubi_registrations"); ?></span></div>
                                            <div class="stat-heading">UBI</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="stat-widget-five">
                                    <div class="stat-icon dib flat-color-2">
                                        <i class="ti-write"></i>
                                    </div>
                                    <div class="stat-content">
                                        <div class="text-left dib">
                                            <div class="stat-text"><span class="count"><?php echo count_as_total("edc_registrations"); ?></span></div>
                                            <div class="stat-heading">EDC</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="stat-widget-five">
                                    <div class="stat-icon dib flat-color-3">
                                        <i class="ti-wallet"></i>
                                    </div>
                                    <div class="stat-content">
                                        <div class="text-left dib">
                                            <div class="stat-text"><span class="count"><?php echo count_as_total("ubi_registrations")+count_as_total("edc_registrations"); ?></span></div>
                                            <div class="stat-heading">All</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="box-title">Search Registration EDC | UBI </h4>
                        </div>
                        <div class="card-body">
                            <form method="POST" action="index.php?page=all">
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
                    </div>
                </div>
            </div>
            <!-- .animated -->
        </div>
        <!-- /.content -->

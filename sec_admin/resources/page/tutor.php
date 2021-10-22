<?php block_tutor(); unblock_tutor(); delete_user("tutor");?>
<div class="page-wrapper">
	<div class="page-breadcrumb">
		<div class="row align-items-center">
			<div class="col-5">
				<h4 class="page-title">Dashboard</h4>
				<div class="d-flex align-items-center">
					<nav aria-label="breadcrumb">
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="#">Home</a></li>
							<li class="breadcrumb-item active" aria-current="page">Tutors</li>
						</ol>
					</nav>
				</div>
			</div>
		</div>
	</div>
        <div class="container container_mt_dms">
               <div class="row">
                      <div class="col-xl-12 col-md-12 mb-4">
                             <?php 
                             display_message(); 
                             display_error_message();
                             ?>

                     </div>
             </div>
             <div class="card shadow mb-4">
                <h3 class="alert alert-info text-center">All Tutors</h3>
             <div class="card-body">
                <table id="data_table" class="table table-bordered">
                    <thead>
                           <tr>
                          <th>Sr</th>
                          <th style="width: 220px">Name</th>
                          <th>Email</th>
                          <th>Number</th>
                          <th>Status</th>
                          <th>Number of Purchases</th>
                          <th style="width: 100px;">Action</th>
                          </tr>
                  </thead>
                  <tbody>
                   <?php
                   get_all_tutors();
                   ?>
           </tbody>
   </table>
</div>
</div>
</div>

</div>
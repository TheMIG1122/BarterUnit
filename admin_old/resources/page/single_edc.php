<?php $edc = get_edc_info($_GET['id']); extract($edc); ?>
<!-- /#header -->
<!-- Content -->
<div class="content" style="min-height: 80vh;">
	<div class="orders">
		<div class="row">
			<div class="col-xl-12">
				<div class="card">
					<div class="card-body">
						<h4 class="box-title">EDC Registration Detail</h4>
						<hr>
					</div>
					<div class="card-body">
						<div class="row">
							<div class="col-12">
								<p><?php if ($one_time_code != "") { echo "<b>One Time Code :</b> ".$one_time_code; } ?></p>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<p>
									<b>I.D. Code</b> : <?php echo $id_code; ?>
								</p>
								<hr>
							</div>
							<div class="col-md-6">
								<p>
									<b>Pocketbook Code</b> : <?php echo $pocketbook_code; ?>
								</p>
								<hr>
							</div>
						</div>
						<div class="row">
							<div class="col-12">
								<h5 class="alert alert-info text-center">BUSINESS INFORMATION</h5>
							</div>
							<div class="col-md-12">
								<p>
									<b>ACCEPTS BARTER UNITS?</b> : <?php echo $accepts_barter_units; ?>
								</p>
								<hr>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<p>
									<b>Business Legal Name</b> : <?php echo $business_name; ?>
								</p>
								<hr>
							</div>
							<div class="col-md-12">
								<p>
									<b>Physical Address</b> : <?php echo $business_address; ?>
								</p>
								<hr>
							</div>
							<div class="col-md-12">
								<p>
									<b>Business Keywords</b> : <?php echo $business_keywords; ?>
								</p>
								<hr>
							</div>
						</div>
						<div class="row">
							<div class="col-md-3">
								<p>
									<b>City</b> : <?php echo $business_city; ?>
								</p>
								<hr>
							</div>
							<div class="col-md-3">
								<p>
									<b>State</b> : <?php echo $business_state; ?>
								</p>
								<hr>
							</div>
							<div class="col-md-3">
								<p>
									<b>Zip Code</b> : <?php echo $business_zipcode; ?>
								</p>
								<hr>
							</div>
							<div class="col-md-3">
								<p>
									<b>Country</b> : <?php echo $business_country; ?>
								</p>
								<hr>
							</div>
						</div>
						<div class="row">
							<div class="col-md-4">
								<p>
									<b>Phone 1</b> : <?php echo $business_phone_1; ?>
								</p>
								<hr>
							</div>
							<div class="col-md-4">
								<p>
									<b>Phone 2</b> : <?php echo $business_phone_2; ?>
								</p>
								<hr>
							</div>
							<div class="col-md-4">
								<p>
									<b>Website</b> : <?php echo $business_website; ?>
								</p>
								<hr>
							</div>
							<div class="col-md-12">
								<p>
									<b>COMPANY LOGO :</b>
								</p>
								<div class="row justify-content-center">
									<div class="col-3">
										<div class="img-thumbnail">
											<img src="../resources/uploads/<?php echo $business_logo ?>" style="width: 100%">
										</div>
									</div>
								</div>
								<hr>
							</div>
						</div>
						<div class="row">
							<div class="col-12">
								<h5 class="alert alert-info text-center">OPERATION HOURS</h5>
							</div>
						</div>
						<div class="row">
							<div class="col-md-3">
								<p>
									<b>Monday :</b>
									<br>
									<?php echo $monday; ?>
								</p>
								<hr>
							</div>
							<div class="col-md-3">
								<p>
									<b>Tuesday :</b>
									<br>
									<?php echo $tuesday; ?>
								</p>
								<hr>
							</div>
							<div class="col-md-3">
								<p>
									<b>Wednesday :</b>
									<br>
									<?php echo $wednesday; ?>
								</p>
								<hr>
							</div>
							<div class="col-md-3">
								<p>
									<b>Thursday :</b>
									<br>
									<?php echo $thursday; ?>
								</p>
								<hr>
							</div>
							<div class="col-md-3">
								<p>
									<b>Friday :</b>
									<br>
									<?php echo $friday; ?>
								</p>
								<hr>
							</div>
							<div class="col-md-3">
								<p>
									<b>Saturday :</b>
									<br>
									<?php echo $saturday; ?>
								</p>
								<hr>
							</div>
							<div class="col-md-3">
								<p>
									<b>Sunday :</b>
									<br>
									<?php echo $sunday; ?>
								</p>
								<hr>
							</div>
						</div>
						<div class="row">
							<div class="col-12">
								<h5 class="alert alert-info text-center">BUSINESS DETAILS</h5>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<p>
									<b>Email Address :</b>
									<br>
									<?php echo $email; ?>
								</p>
								<hr>
							</div>
							<div class="col-md-6">
								<p>
									<b>Business Owner Legal Name :</b>
									<br>
									<?php echo $business_owner_name; ?>
								</p>
								<hr>
							</div>
							<div class="col-md-6">
								<p>
									<b>Business Owner Phone :</b>
									<br>
									<?php echo $business_owner_phone; ?>
								</p>
								<hr>
							</div>
							<div class="col-md-6">
								<p>
									<b>Year Founded :</b>
									<br>
									<?php echo $year_founded; ?>
								</p>
								<hr>
							</div>
							<div class="col-md-6">
								<p>
									<b>Tax ID Number :</b>
									<br>
									<?php echo $tax_id_number; ?>
								</p>
								<hr>
							</div>
							<div class="col-md-6">
								<p>
									<b>Employer Identification Number (EIN) :</b>
									<br>
									<?php echo $ein_number; ?>
								</p>
								<hr>
							</div>
							<div class="col-md-6">
								<p>
									<b>Business License Number :</b>
									<br>
									<?php echo $business_license_number; ?>
								</p>
								<hr>
							</div>
						</div>
						<div class="row">
							<div class="col-12">
								<h5 class="alert alert-info text-center">LEGAL DOCUMENTS</h5>
							</div>
						</div>
						<p><b>BUSINESS OWNER STATE IDENTIFICATION OR DRIVER’S LICENSE OR U.S PASSPORT</b></p>
						<div class="row">
							<?php echo genrate_download_resource_btn($identity_document); ?>
						</div>
						<hr>
						<p><b>ARTCILES OF ORGANIZATION</b></p>
						<div class="row">
							<?php echo genrate_download_resource_btn($articles_of_organization); ?>
						</div>
						<hr>
						<p><b>OFFICIAL STATE OR CITY BUSINESS LICENSE DOCUMENT</b></p>
						<div class="row">
							<?php echo genrate_download_resource_btn($official_state); ?>
						</div>
						<hr>
					</div>
				</div> <!-- /.card -->
			</div>  <!-- /.col-lg-8 -->
		</div>
	</div>
</div>
<!-- /.content -->

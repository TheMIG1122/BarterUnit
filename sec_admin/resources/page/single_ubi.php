<?php $ubi = get_ubi_info($_GET['id']); extract($ubi); ?>
<!-- /#header -->
<!-- Content -->
<div class="content" style="min-height: 80vh;">
	<div class="orders">
		<div class="row">
			<div class="col-xl-12">
				<div class="card">
					<div class="card-body">
						<h4 class="box-title">UBI Registration Detail</h4>
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
								<h5 class="alert alert-info text-center">PERSONAL INFORMATION</h5>
							</div>
						</div>
						<div class="row">
							<div class="col-md-4">
								<p>
									<b>First Name</b> : <?php echo $first_name; ?>
								</p>
								<hr>
							</div>
							<div class="col-md-4">
								<p>
									<b>Middle Name</b> : <?php echo $middle_name; ?>
								</p>
								<hr>
							</div>
							<div class="col-md-4">
								<p>
									<b>Last Name</b> : <?php echo $last_name; ?>
								</p>
								<hr>
							</div>
						</div>
						<div class="row">
							<div class="col-md-4">
								<p>
									<b>Date of Birth</b> : <?php echo $date_of_birth; ?>
								</p>
								<hr>
							</div>
							<div class="col-md-4">
								<p>
									<b>Sex</b> : <?php echo $sex; ?>
								</p>
								<hr>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<p>
									<b>Email</b> : <?php echo $email; ?>
								</p>
								<hr>
							</div>
							<div class="col-md-6">
								<p>
									<b>Social Security Number</b> : <?php echo $social_security_number; ?>
								</p>
								<hr>
							</div>
							<div class="col-md-6">
								<p>
									<b>State Identification Number</b> : <?php echo $stat_identification_number; ?>
								</p>
								<hr>
							</div>
							<div class="col-md-6">
								<p>
									<b>State Driver’s License Number</b> : <?php echo $driving_license_number; ?>
								</p>
								<hr>
							</div>
						</div>
						<div class="row">
							<div class="col-12">
								<h5 class="alert alert-info text-center">CURRENT ADDRESS</h5>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<p>
									<b>Address Number</b> : <?php echo $address_number; ?>
								</p>
								<hr>
							</div>
							<div class="col-md-3">
								<p>
									<b>City</b> : <?php echo $city; ?>
								</p>
								<hr>
							</div>
							<div class="col-md-3">
								<p>
									<b>State</b> : <?php echo $state; ?>
								</p>
								<hr>
							</div>
							<div class="col-md-3">
								<p>
									<b>Postal Code</b> : <?php echo $postal_code; ?>
								</p>
								<hr>
							</div>
							<div class="col-md-3">
								<p>
									<b>Country</b> : <?php echo $country; ?>
								</p>
								<hr>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<p>
									<b>ARE YOU U.S. CITIZEN?</b> : <?php echo $are_you_us_citizen; ?>
								</p>
								<hr>
							</div>
							<div class="col-md-12">
								<p>
									<b>HAVE YOU EVER BEEN CONVICTED OF A FELONY?</b> : <?php echo $have_you_ever_convicted; ?><br>
									<b>IF, SO WHAT WERE THE CHARGES?</b> : <?php echo $have_you_ever_convicted_if; ?>
								</p>
								<hr>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<p>
									<b>ARE YOU CURRENTLY INCARCERATED?</b> : <?php echo $currently_incarcerated; ?><br>
									<b>IF SO, WHAT IS YOUR EXPECTED RELEASE DATE?</b> : <?php echo $currently_incarcerated_if; ?>
								</p>
								<hr>
							</div>
						</div>
						<div class="row">
							<div class="col-12">
								<h5 class="alert alert-info text-center">PROOF OF IDENTITY</h5>
							</div>
						</div>
						<p><b>CERTIFIED COPY OF A U.S. BIRTH CERTIFICATE</b></p>
						<div class="row">
							<?php echo genrate_download_resource_btn($birth_certificate); ?>
						</div>
						<hr>
						<p><b>U.S. PASSPORT</b></p>
						<div class="row">
							<?php echo genrate_download_resource_btn($us_passport); ?>
						</div>
						<hr>
						<p><b>STATE IDENTIFICAION CARD / STATE DRIVERS LICENSE CARD</b></p>
						<div class="row">
							<?php echo genrate_download_resource_btn($identity_document); ?>
						</div>
						<hr>
						<p><b>PERMANENT RESIDENT CARD OR FOREIGN PASSPORT</b></p>
						<div class="row">
							<?php echo genrate_download_resource_btn($resident_card); ?>
						</div>
						<hr>
						<p><b>SOCIAL SECURITY NUMBER CARD (SSN)</b></p>
						<div class="row">
							<?php echo genrate_download_resource_btn($ssn_card); ?>
						</div>
						<hr>
					</div>
				</div> <!-- /.card -->
			</div>  <!-- /.col-lg-8 -->
		</div>
	</div>
</div>
<!-- /.content -->

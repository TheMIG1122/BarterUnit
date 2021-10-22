<?php 



$info = get_tutor_info_admin();



extract($info);

update_alert_status();


// approve_referees();



approve_national_id();



approve_account();



send_notification();



?>

<div class="page-wrapper">

	<div class="page-breadcrumb">

		<div class="row align-items-center">

			<div class="col-5">

				<h4 class="page-title">Dashboard</h4>

				<div class="d-flex align-items-center">

					<nav aria-label="breadcrumb">

						<ol class="breadcrumb">

							<li class="breadcrumb-item"><a href="#">Home</a></li>

							<li class="breadcrumb-item active" aria-current="page"><a href="index.php?page=tutor">Tutor</a></li>

              <li class="breadcrumb-item active" aria-current="page">Tutor Detail</li>

            </ol>

          </nav>

        </div>

      </div>

    </div>

  </div>

  <div class="container container_mt_dms">


<div class="row">
            <div class="col-xl-12 col-md-12 mb-4">
              <?php #
                  display_message(); 
              ?>

            </div>
          </div>

    <div class="row">

      <div class="col-md-12">

        <div class="card shadow mb-4">

          <h4 class="alert alert-danger text-center">Send Notification to Tutor</h4>

          <div class="card-body">

            <form method="POST">

              <div class="form-group row">

                <div class="col-md-4">

                  
                  <label>Title</label>
                  <input type="hidden" name="email" value="<?php echo $email ?>">
                  <input type="hidden" name="name" value="<?php echo $first_name." ".$last_name ?>">

                  <input type="text" class="form-control form-control-user" placeholder="Title of Notification" name="title" required>

                </div>

                <div class="col-md-4">

                  <label>Detail</label>

                  <input type="text" class="form-control form-control-user" placeholder="Detail of Notification" name="detail" required>

                </div>

                <div class="col-md-4">

                  <label style="opacity: 0">S</label>

                  <br>

                  <input type="submit" class="btn btn-success" name="send_notification" value="Send">

                </div>

              </div>

            </form>

          </div>

        </div>

      </div>

    </div>



    <div class="row">

      <div class="col-xl-12 col-md-12 mb-4">

        <div class="card border-left-primary shadow h-100 py-2">

          <div class="card-body">

            <h4 class="alert alert-info text-center mb-2">Profile Status</h4>

              <div class="table-responsive">

                <table class="table table-bordered">

                  <tbody>

                    <tr>

                      <td><b>Account Approved</b></td>

                      <td><?php check_admin_approved_id(); ?></td>

                      <td><b>Referees</b></td>

                      <td><?php check_referees_admin(); ?></td>

                    </tr>

                    <tr>

                      <td><b>Profile Picture</b></td>

                      <td><?php check_profile_pic_admin(); ?></td>

                      <td><b>Qualification Documents</b></td>

                      <td><?php check_qualification_documents_admin(); ?></td>

                    </tr>

                    <tr>

                      <td><b>National ID</b></td>

                      <td><?php check_national_id_admin(); ?></td>

                      <td><b>Email</b></td>

                      <td><?php check_email_status_admin(); ?></td>

                    </tr>

                  </tbody>

                </table>

              </div>

              <div class="row justify-content-center">
                <div class="col-4 text-center">
                  <?php create_approve_btn($admin_approved); ?>
                </div>
              </div>

            </div>

          </div>

        </div>

      </div>



      <div class="row justify-content-center" id="TutorInformation">

        <div class="col-xl-12 col-md-12 mb-4">

         <div class="card shadow">

          <div class="card-body">

            <h4 class="alert alert-info text-center mb-2">Tutor Information</h4>

              <div class="row">

                <div class="col-xl-4 col-md-4 mb-4">

                  <div class="image-container text-center">

                    <img src="../resources/uploads/<?php get_tutor_profile_pic_admin(); ?>" class="profile-image">

                  </div>

                  <br>

                  <p class="text-center">

                    <?php create_approve_btn($admin_approved); ?>

                  </p>

                </div>

                <div class="col-xl-8 col-md-8">

                  <div class="row">

                    <div class="col-sm-4">

                      <label><b>Name</b></label>

                      <div>

                        <?php echo $first_name." ".$last_name; ?>

                      </div>

                      <hr>

                    </div>

                    <div class="col-sm-4">

                      <label><b>Email</b></label>

                      <div>

                        <?php echo $email; ?>

                      </div>

                      <hr>

                    </div>

                    <div class="col-sm-4">

                      <label><b>Phone</b></label>

                      <div>

                        <?php echo $number; ?>

                      </div>

                      <hr>

                    </div>

                  </div>

                  <div class="row">

                    <div class="col-sm-6">

                      <label><b>Address 01</b></label>

                      <div>

                        <?php echo $address_01; ?>

                      </div>

                      <hr>

                    </div>

                    <div class="col-sm-6">

                      <label><b>Address 02</b></label>

                      <div>

                        <?php echo $address_02; ?>

                      </div>

                      <hr>

                    </div>

                  </div>

                  <div class="row">

                    <div class="col-sm-6">

                      <label><b>Country</b></label>

                      <div>

                        <?php echo $country; ?>

                      </div>

                      <hr>

                    </div>

                    <div class="col-sm-6">

                      <label><b>Post Code</b></label>

                      <div>

                        <?php echo $post_code; ?>

                      </div>

                      <hr>

                    </div>

                  </div>

                  <!-- <p>

                    <label><b>Search visibility</b></label><br>

                    I want Vital Educators to rank my profile in search results.

                    <br>

                    <b><big><?php echo $search_visibilty; ?>!</big></b>

                  </p>

                  <hr>

                  <label><b>Special Offers</b></label><br>

                  I want to receive offers or promotions from Vital Educators.

                  <br>

                  <b><big><?php echo $promotions_agree; ?>!</big></b>

                  <br>

                  I want to receive offers or promotions by e-mail or text from carefully selected third parties.

                  <br>

                  <b><big><?php echo $email_promotions; ?>!</big></b> -->

                </div>

              </div>

            </div>

          </div>

        </div>

      </div>



      <div class="row justify-content-center">

        <div class="col-xl-12 col-md-12 mb-4">

         <div class="card shadow">

          <div class="card-body">

            <h4 class="alert alert-info text-center mb-2">Tutoring Details</h4>

              <div class="form-group">

                <label><b>About</b></label>

                <div>

                  <?php echo $about; ?>

                </div>

              </div>

              <hr>

              <div class="form-group">

                <label><b>Experience</b></label>

                <div>

                  <?php echo $experience; ?>

                </div>

              </div>

              <hr>

              <div class="form-group">

                <label><b>Approach</b></label>

                <div>

                  <?php echo $approach; ?>

                </div>

              </div>

              <hr>

              <div>

                <label><b>Availability</b></label>

                <div><?php echo $availability; ?></div>

                <div>



                </div>

              </div>

            </div>

          </div>

        </div>

      </div>



      <div class="row justify-content-center" id="NationalID">

        <div class="col-xl-12 col-md-12 mb-4">

          <div class="card shadow">

            <div class="card-body">

              <h4 class="alert alert-info text-center mb-2">Tutor National ID</h4>

                <?php get_tutor_national_id_admin(); ?>

                <?php create_national_id_button_admin(); ?>

              </div>

            </div>

          </div>

        </div>


        <div class="row justify-content-center" id="CriminalRecord">

        <div class="col-xl-12 col-md-12 mb-4">

          <div class="card shadow">

            <div class="card-body">

              <h4 class="alert alert-info text-center mb-2">Tutor's Criminal Record</h4>

                <?php create_criminal_record_button_admin(); ?>

              </div>

            </div>

          </div>

        </div>



        <div class="all-referee-div" id="Referees">

          <div class="row">

            <div class="col-xl-12 col-md-12 mb-4">

              <div class="card border-left-primary shadow h-100 py-2" >

                <div class="card-body">

                  <h4 class="alert alert-info text-center mb-2">All Referees</h4>

                    <div class="table-responsive">

                      <table class="table table-bordered">

                        <thead>

                          <tr>

                            <th>Sr</th>

                            <th>First Name</th>

                            <th>Last Name</th>

                            <th>E-mail</th>

                            <th>Telephone</th>

                            <th>Relationship</th>

                            <th>Action</th>

                          </tr>

                        </thead>

                        <tbody>

                          <?php get_all_referees_admin(); ?>

                        </tbody>

                      </table>

                    </div>

                  </div>

                </div>

              </div>

            </div>

          </div>



          <div class="row justify-content-center" id="Qualifications">

            <div class="col-xl-12 col-md-12 mb-4">

             <div class="card shadow">

              <div class="card-body">

                <input type="file" id="qualifications_documents" data-for="0" multiple style="display: none;">

                <h4 class="alert alert-info text-center mb-2">All Qualifications</h4>

                  <div class="table-responsive">

                    <table class="table table-bordered">

                      <thead>

                        <tr>

                          <th>Sr</th>

                          <th>Title</th>

                          <th>Level</th>

                          <th>Institute</th>

                          <th>Year</th>

                          <th width="150px">Document</th>

                        </tr>

                      </thead>

                      <tbody>

                        <?php get_all_qualification_admin(); ?>

                      </tbody>

                    </table>

                  </div>

                </div>

              </div>

            </div>

          </div>



          <div class="row justify-content-center" id="Subjects">

            <div class="col-xl-12 col-md-12 mb-4">

             <div class="card shadow">

              <div class="card-body">

                <h4 class="alert alert-info text-center mb-2">All Subjects</h4>

                  <div class="table-responsive">

                    <table class="table table-bordered">

                      <thead>

                        <tr align="center">

                          <th><div><span>Sr</span></div></th>

                          <th><div><span>Title</span></div></th>

                          <th class="rotate" width="10px"><div><span>Primary</span></div></th>

                          <th class="rotate" width="10px"><div><span>Secondary</span></div></th>

                          <th class="rotate" width="10px"><div><span>GCSE or National</span></div></th>

                          <th class="rotate" width="10px"><div><span>University</span></div></th>

                          <th class="rotate" width="10px"><div><span>Adult/Casual</span></div></th>

                          <th class="rotate" width="10px"><div><span>A-Level</span></div></th>

                          <!-- <th class="rotate" width="10px"><div><span>Resources</span></div></th> -->

                        </tr>

                      </thead>

                      <tbody>

                        <?php get_all_subjects_admin(); ?>

                      </tbody>

                    </table>

                  </div>

                </div>

              </div>

            </div>

          </div>

        </div>



      </div>
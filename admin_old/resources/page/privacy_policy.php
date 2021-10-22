<?php update_content(2) ?>
<!-- /#header -->
<!-- Content -->
<div class="content"  style="min-height: 80vh;">
	<div class="orders">
		<div class="row">
			<div class="col-xl-12">
				<div class="card">
					<div class="card-body">
						<h4 class="box-title">Edit Privacy Policy Content <div class="float-right"><a href="../privacy_policy.php" target="_blank" class="btn-sm btn-primary"><i class="fa fa-eye"></i> View</a></div></h4>
					</div>
					<div class="card-body" id="editor">
						<form method="POST">
							<div class="row">
								<div class="col-12">
                                    <script src="https://cdn.ckeditor.com/ckeditor5/19.0.0/classic/ckeditor.js"></script>
                                    <textarea id='html_editor' name="content" style="margin-top: 30px;" placeholder="Type some text">
                                        <?php echo get_content(2) ?>
                                    </textarea>
                                    <script>
                                        ClassicEditor
                                        .create( document.querySelector( '#html_editor' ) )
                                        .catch( error => {
                                            console.error( error );
                                        } );
                                    </script>
                                </div>
                                <div class="col-12">
                                   <div class="mt-3">
                                      <button type="submit" class="w-100 btn btn-primary" name="update_content">Update Content</button>
                                  </div>
                              </div>
                          </div>
                      </form>
                  </div>
              </div> <!-- /.card -->
          </div>  <!-- /.col-lg-8 -->
      </div>
  </div>
</div>
<div class="wrapper theme-1-active pimary-color-blue">


<?php include("header.php");
if(!isValidUser())   redirect("login.php"); ?>
<?php include("left_sidebar.php") ?>

<?php include("right_sidebar_backdrop.php") ?>
<!-- Main Content -->
			<div class="page-wrapper">
				<div class="container-fluid">
					
					<!-- Title -->
					<div class="row heading-bg">
						<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
							<h5 class="txt-dark">About Content</h5>
						</div>

						<?php
                          if (isset($_POST['add'])) {

	                         $description = mysqli_real_escape_string($dblink,$_POST['description']);
	                       $insert_query = "update about_temple set description = '$description', edit_date = now() where id = 1 ";
	                           $run_query = mysqli_query($dblink,$insert_query);
	                         if ($run_query) {
	                         	echo '<script> success_message("Updated","success","Updated Successfully","add_about_content.php"); </script>';
	                         }
	                         else{
	                         	 echo '<script> my_function("Error in Update"); </script>';
	                         }
                          }
                          list($content) = exc_qry("select * from about_temple");
                        ?>
					
						<!-- Breadcrumb -->
						<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
							<ol class="breadcrumb">
								<li><a href="index.php">Dashboard</a></li>
								<li class="active"><span>About Temple</span></li>
							</ol>
						</div>
						<!-- /Breadcrumb -->
					
					</div>
					<!-- /Title -->
					
					<!-- Row -->
					<div class="row">
						<div class="col-md-12">
							<div class="panel panel-default card-view">
								<div class="panel-heading">
									<div class="pull-left">
										<h6 class="panel-title txt-dark">Add About Content</h6>
									</div>
									<div class="clearfix"></div>
								</div>
								<div class="panel-wrapper collapse in">
									<div class="panel-body">
										<div class="row">
											<div class="col-sm-12 col-xs-12">
												<div class="form-wrap">
													<form method="post" action="" enctype="multipart/form-data">
														
														
														<div class="form-group">
															<label class="control-label mb-10" for="exampleInputpwd_1">Description *</label>
															<div class="input-group">
																<div class="input-group-addon"><i class="icon-lock"></i></div>
																<textarea id="myeditor" type="text" name="description"  class="form-control"   placeholder="Description"><?php echo $content[0]['description']; ?></textarea>
															</div>
														</div>
														
														<button type="submit" class="btn btn-success mr-10" name="add">Add</button>
													</form>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- /Row -->	
									
				
				</div>
				
				<!-- Footer -->
				<footer class="footer container-fluid pl-30 pr-30">
					<div class="row">
						<div class="col-sm-12">
							<p>2018 &copy; Shree Siddhivinayak Trust Temple</p>
						</div>
					</div>
				</footer>
				<!-- /Footer -->

				
				<script type="text/javascript">
	                 CKEDITOR.replace('myeditor');
                 </script>
			
			</div>
			<!-- /Main Content -->

 </div><!--wrapper End-->


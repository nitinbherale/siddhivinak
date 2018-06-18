<div class="wrapper theme-1-active pimary-color-blue">
	<?php include("header.php");
 if(!isValidUser())   redirect("login.php");  ?>
<?php include("left_sidebar.php") ?>

<?php include("right_sidebar_backdrop.php") ?>
<?php

                        
                          if (isset($_POST['add'])) {

	                         $title = mysqli_real_escape_string($dblink,$_POST['title']);
	                         $url = mysqli_real_escape_string($dblink,$_POST['url']);

	                       $insert_query = "INSERT INTO imp_links (id, title, url)
                                   VALUES ('NULL', '$title', '$url')";


	                           $run_query = mysqli_query($dblink,$insert_query);


	                         if ($run_query) {
	                         	echo "<script>alert('Data Inserted Succussfully')</script>";
	                         }
	                         else{
	                         	echo("Error description: " . mysqli_error($dblink));
	                         }

                          }

                        ?>
					



<!-- Main Content -->
			<div class="page-wrapper">
				<div class="container-fluid">
					
					<!-- Title -->
					<div class="row heading-bg">
						<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
							<h5 class="txt-dark">Important Links</h5>
						</div>

						<!-- Breadcrumb -->
						<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
							<ol class="breadcrumb">
								<li><a href="#">Dashboard</a></li>
								<li><a href="#"><span>form</span></a></li>
								<li class="active"><span>form-layout</span></li>
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
										<h6 class="panel-title txt-dark">Add Links here</h6>
									</div>
									<div class="clearfix"></div>
								</div>
								<div class="panel-wrapper collapse in">
									<div class="panel-body">
										<div class="row">
											<div class="col-sm-12 col-xs-12">
												<div class="form-wrap">
													<form method="post" action="link_list.php">
														<div class="row">
															<div class="col-md-5">
																<div class="form-group">
															<label class="control-label mb-10" for="exampleInputuname_1">Title *</label>
															<div class="input-group">
																<div class="input-group-addon"><i class="icon-user"></i></div>
																<input type="text" class="form-control" id="exampleInputuname_1" placeholder="Title" name="title">
															</div>
														</div>
															</div>
															<div class="col-md-5">
																<div class="form-group">
															<label class="control-label mb-10" for="exampleInputuname_1">URL *</label>
															<div class="input-group">
																<div class="input-group-addon"><i class="icon-user"></i></div>
																<input type="text" class="form-control" id="exampleInputuname_1" placeholder="Enter URL Here" name="url">
															</div>
														</div>
															</div>
															<div class="col-md-2">
																<button type="submit" class="btn btn-success mr-10" name="add">Add</button>  
															</div>
														</div>	
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
			
			</div>
			<!-- /Main Content -->

 </div><!--wrapper End-->


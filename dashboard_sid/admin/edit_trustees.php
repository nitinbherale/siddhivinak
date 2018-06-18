<link href="vendors/bower_components/dropify/dist/css/dropify.min.css" rel="stylesheet" type="text/css"/>
<div class="wrapper theme-1-active pimary-color-blue">

<?php include("header.php");
if(!isValidUser())   redirect("login.php");  ?>
<?php include("left_sidebar.php") ?>

<?php include("right_sidebar_backdrop.php") ?>

<!-- Main Content -->
			<div class="page-wrapper">
				<div class="container-fluid">
					
					<!-- Title -->
					<div class="row heading-bg">
						<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
							<h5 class="txt-dark">Trustee</h5>
						</div>

						<?php
						$id = $_POST['id'];
						 if ($id>0) {
				       		list($trustee) = exc_qry("select * from trustees where trustee_id = $id");
				       		$trustee_name = $trustee[0]['trustee_name'];
				       		$trustee_img = $trustee[0]['trustee_image'];
				       		$role = $trustee[0]['trustee_work'];
				       		$seniority = $trustee[0]['seniority'];
				       }
				       else{
				       		//header("location:trustees.php");
				       }

                          if (isset($_POST['add'])) {
                          		$id = $_POST['id'];
	                         $trustee_name = mysqli_real_escape_string($dblink,$_POST['trustee_name']);
	                         $seniority = mysqli_real_escape_string($dblink,$_POST['seniority']);
	                         $role = mysqli_real_escape_string($dblink,$_POST['role']);
	                         $img = $_FILES['trustee_img']; //image
                             $tmp_name = strtolower(time()."_".$img['name']);
                             $imgpath = "../../images/trustees/";
                             $go = 1;
                             $qry="";
	                         	if(strlen($img["name"])>0) {
			                        if(!move_uploaded_file($img["tmp_name"],$imgpath.$tmp_name))//storing image in file
		                            {
		                             echo '<script> my_function("File Upload File"); </script>';
		            					$go = 0;
	                                }
	                                else{
	                                	$qry = ",trustee_image = '$tmp_name'";
	                                }
	                            }

                               
                            if($go==1){
	                       		$insert_query = "update trustees set trustee_name = '$trustee_name',trustee_work = '$role',seniority = $seniority ".$qry." where trustee_id = $id";
	                           	$run_query = mysqli_query($dblink,$insert_query);

		                        if ($run_query) {
		                        	echo '<script> success_message("Updated","success","Edited Successfully","trustees.php"); </script>';
		                        }
		                        else{
		                        	$msg=mysqli_error($dblink);
		                        	echo '<script> my_function("Error"); </script>';
		                        }
		                        }

                          }

                        ?>
					
						<!-- Breadcrumb -->
						<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
							<ol class="breadcrumb">
								<li><a href="index.php">Dashboard</a></li>
								<li><a href="trustees.php">Trustee</a></li>
								<li class="active"><span>Edit Trustee</span></li>
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
										<h6 class="panel-title txt-dark">Edit Trustee Info</h6>
									</div>
									<div class="clearfix"></div>
								</div>
								<div class="panel-wrapper collapse in">
									<div class="panel-body">
										<div class="row">
											<div class="col-sm-12 col-xs-12">
												<div class="form-wrap">
													<form method="post" enctype="multipart/form-data">
														<input type="hidden" name="id" value="<?php echo $id; ?>" >
														<div class="form-group">
															<label class="control-label mb-10" for="exampleInputuname_1">Name Of Trustee *</label>
															<div class="input-group">
																<div class="input-group-addon"><i class="icon-user"></i></div>
																<input type="text" class="form-control" id="exampleInputuname_1" placeholder="Name of Trustee" value="<?php echo $trustee_name; ?>" name="trustee_name" required>
															</div>
														</div>
														<div class="form-group">
															<label class="control-label mb-10" for="exampleInputEmail_1">Trustee Image *</label>
															<div class="input-group">
																<div class="input-group-addon"><i class="icon-envelope-open"></i></div>
																<input type="file"  name="trustee_img" accept="image/gif, image/jpg, image/jpeg, image/png"  id="input-file-max-fs" class="dropify"  data-max-file-size="2M" data-default-file="../../images/trustees/<?php echo $trustee_img; ?>"  />
															</div>
														</div>
														
														<div class="form-group">
															<label class="control-label mb-10" for="exampleInputpwd_1">Role</label>
															<div class="input-group">
																<div class="input-group-addon"><i class="icon-lock"></i></div>
																<input type="text" name="role" required="required"  class="form-control" value="<?php echo $role; ?>" placeholder="Role">
															</div>
														</div>

														<div class="form-group">
															<label class="control-label mb-10" for="exampleInputpwd_1"> Seniority (0 to 10)</label>
															<div class="input-group">
																<div class="input-group-addon"><i class="icon-lock"></i></div>
																<input type="number" name="seniority" min="0" max="10" class="form-control"  placeholder="Seniority " required="required" value="<?php echo $seniority; ?>">
															</div>
														</div>
														
														<button type="submit" class="btn btn-success mr-10" name="add">Edit</button>
														<a href="trustees.php" class="btn btn-default">Back</a>
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

				<script type="text/javascript" src="ckeditor/ckeditor.js"></script>
				<script type="text/javascript">
	                 CKEDITOR.replace('myeditor');
                 </script>
			
			</div>
			<!-- /Main Content -->

 </div><!--wrapper End-->
 <script src="vendors/bower_components/dropify/dist/js/dropify.min.js"></script>		
		<!-- Form Flie Upload Data JavaScript -->
<script src="dist/js/form-file-upload-data.js"></script>
<style type="text/css">
	input[type='number'] {
    -moz-appearance:textfield;
}
input[type=number]::-webkit-inner-spin-button,
input[type=number]::-webkit-outer-spin-button {
    -webkit-appearance: none;
    margin: 0;
}
thead{background:#f05737;}
 .table > thead > tr > th{color: #fff;font-weight: 600;font-size: 14px;}
 .butn {background-color: transparent;border: none;}
</style>

<link href="vendors/bower_components/dropify/dist/css/dropify.min.css" rel="stylesheet" type="text/css"/>
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
							<h5 class="txt-dark">Tenders</h5>
						</div>

						<?php

                         
                          if (isset($_POST['add'])) {
                          	 $go = 1;
	                         $title = mysqli_real_escape_string($dblink,$_POST['tender_title']);
	                         $file = $_FILES['tender_file']; //image
                             $tmp_name = strtolower(time()."_".$file['name']);
                             $imgpath = "../../upload/tenders/";
	                         $issue_date = mysqli_real_escape_string($dblink,$_POST['issue_date']);
	                         $tender_type = mysqli_real_escape_string($dblink,$_POST['tender_type']);
	                         $ref_no = mysqli_real_escape_string($dblink,$_POST['tender_ref_no']);
	                       
	                         if(!move_uploaded_file( $file["tmp_name"],$imgpath.$tmp_name))//storing image in file
                             {
                             	 echo '<script> my_function("File Upload Fail"); </script>';
            					 $go = 0;
                               }
                             if($go==1){
			                       $insert_query = "INSERT INTO tenders (tender_title, tender_type,  tender_refe_no, issue_date, tender_file)
		                                   VALUES ( '$title', '$tender_type' , '$ref_no','$issue_date', '$tmp_name')";
			                           $run_query = mysqli_query($dblink,$insert_query);
			                         if ($run_query) {
			                         	echo '<script> success_message("Success","success","Tender Added Successfully","tenders.php"); </script>';
			                         }
			                         else{
			                         	$msg = mysqli_error($dblink);
			                         	echo '<script> my_function("'.$msg.'"); </script>';
			                         }
	                     		}

                          }

                          if (isset($_POST['delete'])) {
                          	 $id = $_POST['id'];
                          	 $del_query = "update tenders set status = 1 WHERE id = '$id' ";

					        $run_query = mysqli_query($dblink,$del_query);

					        if ($run_query) {
					        	echo '<script> success_message("Success","success","Tender Deleted","tenders.php");  </script>';
					        }
					        else{
					        	$msg = mysqli_error($dblink);
									echo '<script> my_function("Error"); </script>';
					        }
                          }

                          if (isset($_POST['edit_tender'])) {
                         	 $id = $_POST['id'];
                         	 $go = 1;
	                         $title = mysqli_real_escape_string($dblink,$_POST['tender_title']);
	                         $file = $_FILES['tender_file']; //image
                             $tmp_name = strtolower(time()."_".$file['name']);
                             $imgpath = "../../upload/tenders/";
	                         $issue_date = mysqli_real_escape_string($dblink,$_POST['issue_date']);
	                         $tender_type = mysqli_real_escape_string($dblink,$_POST['tender_type']);
	                         $ref_no = mysqli_real_escape_string($dblink,$_POST['tender_ref_no']);
	                         $qry = "";
	                         //echo $title.$tmp_name.$date.$duration.$address.$description;
                         	//echo '<script> my_function("Error"); time_out(); </script>';
	                         if(strlen($file['name'])>0){
		                        if(!move_uploaded_file($file["tmp_name"],$imgpath.$tmp_name))//storing image in file
	                            {
	                             	echo '<script> my_function("File Upload Fail"); </script>';
	            					$go = 0;
	                            }
	                            else{
	                            	$qry = ",tender_file = '$tmp_name'";
	                            }
                           	}
                             if($go==1){
			                       $upd_query = "update tenders set tender_title = '$title', tender_type = '$tender_type', issue_date = '$issue_date', tender_refe_no = '$ref_no' ".$qry." where id = $id";
			                           $run_query = mysqli_query($dblink,$upd_query);
			                         if ($run_query) {
			                         	echo '<script> success_message("Success","success","Tender updated Successfully","tenders.php");  </script>';
			                         }
			                         else{
			                         	$msg = mysqli_error($dblink);
			                         	echo '<script> my_function("Error");</script>';
			                         }
	                     		}
                         }

                         if (isset($_POST['edit'])) {
                         	$id = $_POST['id'];
                         	list($tender) = exc_qry("select * from tenders where id = $id");
                         	$title = $tender[0]['tender_title'];
                         	$file = $tender[0]['tender_file'];
                         	$issue_date = $tender[0]['issue_date'];
                         	$tender_type = $tender[0]['tender_type'];
                         	$ref_no = $tender[0]['tender_refe_no'];

                         }

                         
                        ?>
						
						<!-- Breadcrumb -->
						<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
							<ol class="breadcrumb">
								<li><a href="index.php">Dashboard</a></li>
								<li class="active"><span>Tenders</span></li>
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
										<h6 class="panel-title txt-dark">Tenders</h6>
									</div>
									<div class="clearfix"></div>
								</div>
								<div class="panel-wrapper collapse in">
									<div class="panel-body">
										<div class="row">
											<div class="col-sm-12 col-xs-12">
												<div class="form-wrap">
													<form method="post"  enctype="multipart/form-data">
														<input type="hidden" name="id"  value="<?php echo($id); ?>">
														<div class="form-group">
															<label class="control-label mb-10" for="exampleInputuname_1">Tender Title *</label>
															<div class="input-group">
																<div class="input-group-addon"><i class="icon-user"></i></div>
																<input type="text" class="form-control" id="exampleInputuname_1" placeholder="Tender Title" name="tender_title" value="<?php echo $title; ?>" required>
															</div>
														</div>
														<div class="form-group">
															<label class="control-label mb-10" for="exampleInputpwd_1">Type Of Tender *</label>
															<div class="input-group">
																<div class="input-group-addon"><i class="icon-lock"></i></div>
																<input type="text" class="form-control" id="exampleInputpwd_1" placeholder="Tender Type*" name="tender_type" value="<?php echo $tender_type; ?>" required>
															</div>
														</div>
														<div class="form-group">
															<label class="control-label mb-10" for="exampleInputpwd_1">Tender Reference No.*</label>
															<div class="input-group">
																<div class="input-group-addon"><i class="icon-lock"></i></div>
																<input type="text" class="form-control" id="exampleInputpwd_1" placeholder="Tender Reference No.*" name="tender_ref_no" value="<?php echo $ref_no; ?>" required>
															</div>
														</div>
														<div class="form-group">
															<label class="control-label mb-10" for="exampleInputpwd_1">Date Of Issue*</label>
															<div class="input-group">
																<div class="input-group-addon"><i class="icon-lock"></i></div>
																<input type="date" class="form-control" id="exampleInputpwd_1" placeholder="Date Of Issue" name="issue_date" value="<?php echo $issue_date; ?>"  required>
															</div>
														</div>

														<div class="form-group">
															<label class="control-label mb-10" for="exampleInputEmail_1">Tender File *</label>
															<div class="input-group">
																<div class="input-group-addon"><i class="icon-envelope-open"></i></div>
																<input type="file"  name="tender_file" accept="application/pdf"  id="input-file-max-fs" class="dropify"    data-default-file="../../images/tenders/<?php echo $file; ?>" <?php if($id>0){} else{echo "required";} ?> />
															</div>
														</div>
														
														<?php if($id > 0) {?>
														<button type="submit" class="btn btn-success mr-10" name="edit_tender">Edit</button>
														<button type="button" class="btn btn-default  mr-10" onclick="window.location='tenders.php'">Cancel</button>
														<?php } else { ?>
														<button type="submit" class="btn btn-success mr-10" name="add">Add</button>
														<?php  } ?>
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
							
					<div class="row">
						<div class="col-sm-12">
							<div class="panel panel-default card-view">

								<div class="panel-wrapper collapse in">
									<div class="panel-body">
										<div class="table-wrap">
											<div class="table-responsive">
												<table id="example" class="table table-hover table-bordered display  pb-30" >
													<thead>
														<tr>
															<th>Id</th>
															<th>Tender Title</th>
															<th>Tender File</th>
															<th>Issue date</th>
															<th>Tender Type</th>
															<th>Tender Ref No</th>
															<th>Actions</th>
														</tr>
													</thead>
													
													<tbody>
														 <?php														

	                                                     $select_qry = "SELECT * FROM tenders where status = 0 order by id desc";

	                                                     $result = mysqli_query($dblink,$select_qry) or die("Cannot Fetch Data From Database" .mysqli_error($dblink));
	                                                     	 $id=1;
	                                                        while ($row = mysqli_fetch_assoc($result)) { ?>
	                                                        
													   <tr>
														  <td><?php echo $id; ?></td>
														  <td> <?php echo $row['tender_title']; ?></td>
														  <td>
														  	<a target="_blank" href="../../upload/tenders/<?php echo $row['tender_file']; ?>"><center><i class="fa fa-file" style="font-size: 22px;"></i></center></a>
														  </td>
														  <td><?php echo $row['issue_date']; ?> </td>
														   <td> <?php echo $row['tender_type']; ?></td>
														    <td> <?php echo $row['tender_refe_no']; ?></td>
														  <td class="text-nowrap">
														    <ul>
														    	<li>
															    <form method="post">
																    <input type="hidden" name="id" value="<?php echo $row['id'];?>">
																	  <button class="butn" type="submit" data-toggle="tooltip" data-original-title="Edit" name="edit"> <i class="fa fa-pencil text-inverse m-r-10"></i> </button>
		                                                        </form>
		                                                         </li>
		                                                         <li> 	
		                                                        <form method="post">
		                                                          <input type="hidden" name="id" value="<?php echo $row['id'];?>">
																  <button class="butn" type="submit" data-toggle="tooltip" data-original-title="Delete" name="delete"> <i class="fa fa-trash text-danger"></i> </button>
																</form>
																</li>
															</ul>
														  </td>
														</tr>
														<?php $id++; } ?>
														
													</tbody>
												</table>
											</div>
										</div>
									</div>
								</div>
							</div>	
						</div>
					</div>				
				
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
<script src="vendors/bower_components/dropify/dist/js/dropify.min.js"></script>		
		<!-- Form Flie Upload Data JavaScript -->
<script src="dist/js/form-file-upload-data.js"></script>
<style type="text/css">
	.img-wd-200{width: 200px;}
	.butn{border: none;background: transparent;}
td ul{
  display:flex;  
  list-style:none;
}
thead{background:#f05737;}
 .table > thead > tr > th {color: #fff;font-weight: 600;font-size: 14px;}
</style>

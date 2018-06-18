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
					<!-- Breadcrumb -->
					<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
					  <ol class="breadcrumb">
						<li><a href="index.php">Dashboard</a></li>
						<li class="active"><span>About</span></li>
					  </ol>
					</div>
					<!-- /Breadcrumb -->
				</div>
				<!-- /Title -->
				
				<!-- Row -->
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
														<th>Title</th>
														<th>Description</th>
														<th>Image</th>
														<th>Advertise Image</th>
														<th>Actions</th>
													</tr>
												</thead>
												
												<tbody>
													 <?php include("connect.php");

															$id = $_POST['id'];

                                                            if (isset($_POST['delete'])) {
                                                               
                                                                $id = $_POST['id'];

                                                                $del_query = "DELETE FROM about_content WHERE id = '$id' ";

                                                                $run_query = mysqli_query($dblink,$del_query);

                                                                if ($run_query) {
                                                                	echo "<script>alert('Data Deleted successfully');</script>";
                                                                }
                                                              }
															

                                                     $select_qry = "SELECT * FROM about_content";

                                                     $result = mysqli_query($dblink,$select_qry) or die("Cannot Fetch Data From Database" .mysqli_error($dblink));

                                                      while ($row = mysqli_fetch_assoc($result)) { ?>
                                                        
												   <tr>
													  <td><?php echo $row['id']; ?></td>
													  <td> <?php echo $row['title']; ?></td>
													  <td> <?php echo $row['description']; ?></td>
													  <td><img src="../../images/slider/<?php echo $row['image'];?>" class="img-responsive"></td>
													  <td><img src="../../images/slider/<?php echo $row['ad_image'];?>" class="img-responsive"></td>
													
														<td colspan="2">
															<a href="" class="btn btn-primary">Edit</a>
	
														</td>
													</tr>




													<?php } ?>
													
												</tbody>
											
												<!--<tfoot>
													<tr>
														<th>Name</th>
														<th>Position</th>
														<th>Office</th>
														<th>Age</th>
														<th>Start date</th>
														<th>Salary</th>
														<th colspan="2">Action</th>
													</tr>
												</tfoot>-->
											</table>
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
						<p>2018 &copy; Siddhivinayak Trust Temple</p>
					</div>
				</div>
			</footer>
			<!-- /Footer -->
			
		</div>
		<!-- /Main Content -->

 </div><!--wrapper End-->

 <style type="text/css">.btn_edit {background-image: url(img/edit.png);width: 30px;height: 27px;background-size: contain;background-color: transparent;border: none;}
 .btn_delete {background-image: url(img/delete.png);width: 30px;height: 27px;background-size: contain;background-color: transparent;border: none;}
 thead{background:#f05737;}
 .table > thead > tr > th{color: #fff;font-weight: 600;font-size: 14px;}
 </style>
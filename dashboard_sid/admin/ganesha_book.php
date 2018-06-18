<link href="vendors/bower_components/dropify/dist/css/dropify.min.css" rel="stylesheet" type="text/css"/>
<div class="wrapper theme-1-active pimary-color-blue">

<?php include("header.php");
if(!isValidUser())   redirect("login.php"); ?>
<?php include("left_sidebar.php") ?>

<?php include("right_sidebar_backdrop.php") ?>
<script type="text/javascript">
	function time_out() {
		setTimeout("location.href = 'news.php';",1500);
	}
</script>
<!-- Main Content -->
			<div class="page-wrapper">
				<div class="container-fluid">
					
					<!-- Title -->
					<div class="row heading-bg">
						<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
							<h5 class="txt-dark">Ganesha Stories</h5>
						</div>

						<?php

                         
                          if (isset($_POST['add'])) {
                          	 $go = 1;
	                         $bk_name = mysqli_real_escape_string($dblink,$_POST['bk_name']);
	                         $bk_writer = mysqli_real_escape_string($dblink,$_POST['bk_writer']);
	                         
	                         $insert_query = "INSERT INTO  ganesha_book (bk_name, bk_writer)
		                                   VALUES ('$bk_name','$bk_writer')";
			                           $run_query = mysqli_query($dblink,$insert_query);
			                         if ($run_query) {
			                         	echo '<script> success_message("Success","success","Book Added Successfully","ganesha_book.php");  </script>';
			                         }
			                         else{
			                         	echo '<script> my_function("Error"); </script>';
			                        }

                          }

                          if (isset($_POST['delete'])) {
                          	 $id = $_POST['id'];
                          	 $del_query = "update ganesha_book set status = 1 WHERE id = '$id' ";

					        $run_query = mysqli_query($dblink,$del_query);

					        if ($run_query) {
					        	echo '<script> success_message("Success","success","Book Deleted","ganesha_book.php");  </script>';
					        }
					        else{
					        	$msg = mysqli_error($dblink);
									echo '<script> my_function("Error");  </script>';
					        }
                          }

                          if (isset($_POST['edit_news'])) {
                         	 $id = $_POST['id'];
                         	  $bk_name = mysqli_real_escape_string($dblink,$_POST['bk_name']);
	                         $bk_writer = mysqli_real_escape_string($dblink,$_POST['bk_writer']);

							$upd_query = "update ganesha_book set bk_name = '$bk_name', bk_writer = '$bk_writer' where id = $id";
			                           $run_query = mysqli_query($dblink,$upd_query);
			                         if ($run_query) {
			                         	echo '<script> success_message("Success","success","Book updated Successfully","ganesha_book.php"); </script>';
			                         }
			                         else{
			                         	$msg = mysqli_error($dblink);
			                         	echo '<script> my_function("'.$upd_query.'");</script>';
			                         }
	                     		
                         }

                         if (isset($_POST['edit'])) {
                         	$id = $_POST['id'];
                         	list($book) = exc_qry("select * from ganesha_book where id = $id");
                         	$bk_name = $book[0]['bk_name'];
                         	$bk_writer = $book[0]['bk_writer'];
                         }

                         
                        ?>
						
						<!-- Breadcrumb -->
						<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
							<ol class="breadcrumb">
								<li><a href="index.php">Dashboard</a></li>
								<li class="active"><span>Ganesha Stories</span></li>
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
										<h6 class="panel-title txt-dark">Ganesha Stories</h6>
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
															<label class="control-label mb-10" for="exampleInputuname_1">Book Name *</label>
															<div class="input-group">
																<div class="input-group-addon"><i class="icon-user"></i></div>
																<input type="text" class="form-control" id="exampleInputuname_1" placeholder="Book Name" name="bk_name" value="<?php echo $bk_name; ?>" required>
															</div>
														</div>
														<div class="form-group">
															<label class="control-label mb-10" for="exampleInputuname_1">Book Writer *</label>
															<div class="input-group">
																<div class="input-group-addon"><i class="icon-user"></i></div>
																<input type="text" class="form-control" id="exampleInputuname_1" placeholder="Book Writer" name="bk_writer" value="<?php echo $bk_writer; ?>" required>
															</div>
														</div>
														
														
														<?php if($id > 0) {?>
														<button type="submit" class="btn btn-success mr-10" name="edit_news">Edit</button>
														<button type="button" class="btn btn-default mr-10" onclick="window.location='ganesha_book.php'">Cancel</button>
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
															<th>Book Name</th>
															<th>Book Writer</th>
															<th>Actions</th>
														</tr>
													</thead>
													
													<tbody>
														 <?php														

	                                                     $select_qry = "SELECT * FROM ganesha_book where status = 0 order by id desc";

	                                                     $result = mysqli_query($dblink,$select_qry) or die("Cannot Fetch Data From Database" .mysqli_error($dblink));
	                                                     	$id=1;
	                                                      while ($row = mysqli_fetch_assoc($result)) { ?>
	                                                        
													   <tr>
														  <td><?php echo $id; ?></td>
														 <td> <?php echo $row['bk_name']; ?></td>
														  <td> <?php echo $row['bk_writer']; ?></td>
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
<script type="text/javascript">
	                 CKEDITOR.replace('myeditor');
                 </script>
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

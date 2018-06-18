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
							<h5 class="txt-dark">Temple Activities</h5>
						</div>

	<?php
	if (isset($_POST['edit_data'])) {

		$id = $_POST['id'];
		$go = 1;
		$name = mysqli_real_escape_string($dblink,$_POST['name']);
		$img = $_FILES['img']; //image
		$tmp_name = strtolower(time()."_".$img['name']);
		$imgpath = "../../images/ashtavinayak/";
		$description = mysqli_real_escape_string($dblink,$_POST['description']);
		$qry = "";

		if(strlen($img['name'])>0){
		    if(!move_uploaded_file($img["tmp_name"],$imgpath.$tmp_name))//storing image in file
		    {
		     	echo '<script> my_function("File Upload File"); </script>';
				$go = 0;
		    }
		    else{
		    	$qry = ",image = '$tmp_name'";
		    }
		}

	 	if($go==1){
	       $upd_query = "update ashtavinayak set name = '$name', description = '$description' ".$qry."  ,edit_date = now() where id = $id";
	           $run_query = mysqli_query($dblink,$upd_query);
	         if ($run_query) {
	         	echo '<script> success_message("Updated","success","Data Updated Successfully","ashtavinayak.php"); </script>';
	         }
	         else{
	         	$msg = mysqli_error($dblink);
	         	echo '<script> my_function("Error");</script>';
	        }
		}
	}

	if (isset($_POST['edit'])) {
		$id = $_POST['id'];
		list($ashtavinayak) = exc_qry("select * from ashtavinayak where id = $id");
		$name = $ashtavinayak[0]['name'];
		$img = $ashtavinayak[0]['image'];
		$description = $ashtavinayak[0]['description'];
	}

	?>

						<!-- Breadcrumb -->
						<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
							<ol class="breadcrumb">
								<li><a href="index.php">Dashboard</a></li>
								<li class="active"><span>Temple Activities</span></li>
							</ol>
						</div>
						<!-- /Breadcrumb -->
					
					</div>
					<!-- /Title -->
					
					<!-- Row -->
					<?php if($id>0){ ?>
					<div class="row">
						<div class="col-md-12">
							<div class="panel panel-default card-view">
								<div class="panel-heading">
									<div class="pull-left">
										<h6 class="panel-title txt-dark">Temple Activities</h6>
									</div>
									<div class="clearfix"></div>
								</div>
								<div class="panel-wrapper collapse in">
									<div class="panel-body">
										<div class="row">
											<div class="col-sm-12 col-xs-12">
												<div class="form-wrap">
													<form method="post"  enctype="multipart/form-data">
														<input type="hidden" name="id" value="<?php echo $id; ?>">
														<div class="form-group">
															<label class="control-label mb-10" for="exampleInputuname_1">Name *</label>
															<div class="input-group">
																<div class="input-group-addon"><i class="icon-user"></i></div>
																<input type="text" class="form-control" id="exampleInputuname_1" placeholder="name" name="name" value="<?php echo $name; ?>" required>
															</div>
														</div>
														<div class="form-group">
															<label class="control-label mb-10" for="exampleInputEmail_1">Image *</label>
															<div class="input-group">
																<div class="input-group-addon"><i class="icon-envelope-open"></i></div>
																<input type="file" name="img" accept="image/gif, image/jpg, image/jpeg, image/png"  id="input-file-max-fs" class="dropify"  data-max-file-size="2M"  data-default-file="../../images/ashtavinayak/<?php echo $img; ?>" <?php if($id>0){} else{echo "required";} ?> />
															</div>
														</div>
														
														<div class="form-group">
															<label class="control-label mb-10" for="exampleInputpwd_1">Description *</label>
															<div class="input-group">
																<div class="input-group-addon"><i class="icon-lock"></i></div>
																<textarea class="form-control" id="exampleInputpwd_1" placeholder="Description" name="description" rows="6"><?php echo $description; ?></textarea>
															</div>
														</div>
														<button type="submit" class="btn btn-success mr-10" name="edit_data">Edit</button>
														<button type="button" class="btn btn-default mr-10" onclick="window.location='ashtavinayak.php'" >Cancel</button>
													</form>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				<?php } ?>
					<!-- /Row -->	
					
					<!--temple activities-->
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
															<th>Actions</th>
														</tr>
													</thead>
													
													<tbody>
														 <?php														

	                                                     $select_qry = "SELECT * FROM ashtavinayak  order by id";

	                                                     $result = mysqli_query($dblink,$select_qry) or die("Cannot Fetch Data From Database" .mysqli_error($dblink));
	                                                     	$a=1;
	                                                      while ($row = mysqli_fetch_assoc($result)) { ?>
	                                                        
													   	<tr>
														  <td><?php echo $a; ?></td>
														  <td> <?php echo $row['name']; ?></td>
														  <td> <?php echo substr($row['description'], 0,300)." ..."; ?></td>
														  <td><img src="../../images/ashtavinayak/<?php echo $row['image']; ?>" class="img img-wd-200"> </td>
														  <td class="text-nowrap">
														    <ul>
														    	<li>
															    <form method="post">
																    <input type="hidden" name="id" value="<?php echo $row['id'];?>">
																	  <button class="butn" type="submit" data-toggle="tooltip" data-original-title="Edit" name="edit"> <i class="fa fa-pencil text-inverse m-r-10"></i> </button>
		                                                        </form>
		                                                         </li>
															</ul>
														  </td>
														</tr>
														<?php $a++; } ?>
														
													</tbody>
												</table>
											</div>
										</div>
									</div>
								</div>
							</div>	
						</div>
					</div>			
					<!--/temple activities-->

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
 .table > thead > tr > th{color: #fff;font-weight: 600;font-size: 14px;}
</style>

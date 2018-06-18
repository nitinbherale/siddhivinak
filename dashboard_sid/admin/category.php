 <link href="vendors/bower_components/dropify/dist/css/dropify.min.css" rel="stylesheet" type="text/css"/>

 <div class="wrapper theme-1-active pimary-color-blue">

<?php include("header.php");  
if(!isValidUser())   redirect("login.php"); ?>
<?php include("left_sidebar.php"); ?>
<?php include("right_sidebar_backdrop.php"); 

	//delete image
	if (isset($_POST['delete']))
	{
		
		$id = $_POST['id'];
			$del_qry = "update category set status = 1 where id = $id";
    	$del_res = mysqli_query($dblink,$del_qry);
    	if($del_res){
    		 echo '<script> success_message("Success","success","Category deleted successfully","category.php"); </script>';
    	}
    	else{
		     echo '<script> my_function("Error in delete"); </script>';
		    }	
	}
	//delete image

	if(isset($_POST['edit']))
	{
		$id = $_POST['id'];
		list($category) = exc_qry("select * from category where id = $id");
		$title = $category[0]['title'];
		//echo '<script> my_function("'.$img.'"); </script>';
	}
	

	//insert image
	if(isset($_POST['add'])){
		$title = $_POST['title']; 
    	$ins_qry = "insert into category set title = '$title'";
    	$ins_res = mysqli_query($dblink,$ins_qry);
    	if($ins_res){
    		 echo '<script> success_message("Success","success","category added successfully","category.php"); </script>';
    	}
    	else{
    		$msg = mysqli_error($dblink);
		     echo '<script> my_function("Error in insert"); </script>';
		    }
	}
	//insert image
	if(isset($_POST['update'])){
		
		$id = $_POST['id'];
		$title = $_POST['title']; 

		
	    	$upd_qry = "update category set title = '$title' where id = $id";
	    	$upd_res = mysqli_query($dblink,$upd_qry);
	    	if($upd_res){
	    		 echo '<script> success_message("Success","success","Category edited successfully","category.php"); </script>';
	    	}
	    	else{
	    		$msg = mysqli_error($dblink);
			     echo '<script> my_function("Error in edit"); </script>';
			    }
	   		
		}
?>

<!-- Main Content -->
			<div class="page-wrapper">
				<div class="container-fluid">
					
					<!-- Title -->
					<div class="row heading-bg">
						<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
							<h5 class="txt-dark">Gallery</h5>
						</div>
					
						<!-- Breadcrumb -->
						<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
							<ol class="breadcrumb">
								<li><a href="index.php">Dashboard</a></li>
								<li><a href="photo_gallery.php">Gallery</a></li>
								<li class="active"><span>Category</span></li>
							</ol>
						</div>
						<!-- /Breadcrumb -->
					
					</div>
					<!-- /Title -->
					<div class="row">
						<div class="col-md-12">
							<div class="panel panel-default card-view">
								<div class="panel-heading">
									<div class="pull-left">
										<h6 class="panel-title txt-dark">Category</h6>
									</div>
									<div class="clearfix"></div>
								</div>
								<div class="panel-wrapper collapse in">
									<div class="panel-body">
										<div class="row">
											<div class="col-sm-12 col-xs-12">
												<div class="form-wrap">
													<form method="post">
														<div class="form-group">
															<label class="control-label mb-10" for="exampleInputuname_1">Title *</label>
															<input type="hidden" name="id" id="input1" value="<?php echo $id; ?>">
															<div class="input-group">
																<div class="input-group-addon"><i class="icon-user"></i></div>
																<input type="text" class="form-control" id="input2" placeholder="Title" name="title" placeholder="Icon class name" required  value="<?php echo $title; ?>">
															</div>
														</div>
														
														<?php if($id>0){?>
														<button class="btn  btn-success ml-10" type="submit" name="update">Edit</button>
														<button class="btn  btn-danger ml-10" type="button" onclick="window.location='category.php'">Cancel</button>	
														<?php } else { ?>
														<button class="btn  btn-success ml-10" type="submit" name="add">Add</button>
														<?php } ?>
													</form>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- Row -->
					<!-- Table start -->
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
															<th>Actions</th>
														</tr>
													</thead>
													
													<tbody>
														 <?php														

	                                                     $select_qry = "SELECT * FROM category where status = 0";

	                                                     $result = mysqli_query($dblink,$select_qry) or die("Cannot Fetch Data From Database" .mysqli_error($dblink));
	                                                     	$a=1;
	                                                      while ($row = mysqli_fetch_assoc($result)) { ?>         
													   	<tr>
														  <td><?php echo $a; ?></td>
														  <td> <?php echo $row['title']; ?></td>
														  </td>
														  <td class="text-nowrap">
														  	<ul class="oneline">
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
					<!-- /Table end -->

			
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
	.card-view{
	padding: 15px 15px 15px;
	}
	.butn{
		border: none;
		background: transparent;
	}
	.oneline
{
  display:flex;  
  list-style:none;
}
</style>

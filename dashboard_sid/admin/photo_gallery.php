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
			$del_qry = "update photo_gallery set status = 1 where id = $id";
    	$del_res = mysqli_query($dblink,$del_qry);
    	if($del_res){
    		 echo '<script> success_message("Success","success","image deleted successfully","photo_gallery.php"); </script>';
    	}
    	else{
		     echo '<script> my_function("Error in Image delete"); </script>';
		    }	
	}
	//delete image

	if(isset($_POST['edit']))
	{
		$id = $_POST['id'];
		list($photo) = exc_qry("select * from photo_gallery where id = $id");
		$img = $photo[0]['image'];
		$cat_id = $photo[0]['alb_id'];

		//echo '<script> my_function("'.$img.'"); </script>';
	}
	

	//insert image
	if(isset($_POST['add'])){
		$go = 1;
		$img = $_FILES['img'];
		$tmp_name = strtolower(time()."_".$img['name']); 
		$category = $_POST['category'];
		$imgpath = "../../images/gallery/";

		if(!move_uploaded_file($img["tmp_name"],$imgpath.$tmp_name))//storing image in file
	        {
	            echo '<script> my_function("image upload fail"); </script>';
	            $go=0;
	        }

	    if ($go==1) {
	    	$ins_qry = "insert into photo_gallery set image = '$tmp_name',alb_id = $category , add_date = now()";
	    	$ins_res = mysqli_query($dblink,$ins_qry);
	    	if($ins_res){
	    		 echo '<script> success_message("Success","success","image added successfully","photo_gallery.php"); </script>';
	    	}
	    	else{
	    		$msg = mysqli_error($dblink);
			     echo '<script> my_function("Error in add"); </script>';
			    }
	   		}
	}
	//insert image
	if(isset($_POST['update'])){
		$go = 1;
		$id = $_POST['id'];
		$img = $_FILES['img'];
		$tmp_name = strtolower(time()."_".$img['name']); 
		$category = $_POST['category'];
		$imgpath = "../../images/gallery/";

		if(strlen($img['name']>0)){
			if(!move_uploaded_file($img["tmp_name"],$imgpath.$tmp_name))//storing image in file
		        {
		            echo '<script> my_function("image upload fail"); </script>';
		            $go=0;
		        }
		        else
		        {
		        	$qry = ",image = '$tmp_name'";
		        }
	        }
	    if ($go==1) {
	    	$upd_qry = "update photo_gallery set alb_id = $category, edit_date = now() ".$qry." where id = $id";
	    	$upd_res = mysqli_query($dblink,$upd_qry);
	    	if($upd_res){
	    		 echo '<script> success_message("Success","success","image edited successfully","photo_gallery.php"); </script>';
	    	}
	    	else{
	    		$msg = mysqli_error($dblink);
			     echo '<script> my_function("Error in edit"); </script>';
			    }
	   		}
		}
		$sel_qry = "SELECT * FROM category where status = 0";
		$category = mysqli_query($dblink,$sel_qry) or die("Cannot Fetch Data From Database" .mysqli_error($dblink));
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
								<li class="active"><span>Photo Gallery</span></li>
							</ol>
						</div>
						<!-- /Breadcrumb -->
					
					</div>
					<!-- /Title -->
					
					<!-- Row -->
				<div class="row card-view">
					<button class="btn btn-primary mb-10 btn-rounded" onclick="window.location='category.php'">Add Category  + </button>
					<form method="post" class="" enctype="multipart/form-data">
						<div class="col-sm-12 ol-md-12 col-xs-12">
							<div class="panel panel-default card-view">
								<div class="panel-heading">
									<div class="pull-left">
										<h6 class="panel-title txt-dark">Photo gallery</h6>
									</div>
									<div class="clearfix"></div>
								</div>
								<div class="panel-wrapper collapse in">
									<div class="panel-body">
										<div class="mt-40 ">
											<input type="hidden" name="id" value="<?php echo $id;?>">
											<input type="file" accept="image/gif, image/jpg, image/jpeg, image/png" id="input-file-max-fs" class="dropify" name="img" value="" data-max-file-size="2M" data-default-file="../../images/gallery/<?php echo $img; ?>" <?php if($id>0){} else{ echo "required";}?> />
										</div>
										<div class="mt-30 form-group">
											<label class="control-label mb-10" for="exampleInputuname_1">Category *</label>
											<div class="input-group">
												<div class="input-group-addon"><i class="icon-user"></i></div>
												<select class="form-control" name="category">
												<?php while ($row = mysqli_fetch_assoc($category)) { ?>
													<option value="<?php echo $row['id'];?>" <?php 
													if($row['id']==$cat_id){ echo "selected"; } ?>>
														<?php echo $row['title'];?>	
													</option>
												<?php } ?>
												</select>
											</div>
										</div>	
									</div>
									<?php if($id>0){?>
									<button class="btn  btn-success ml-10" type="submit" name="update">Edit</button>
									<button class="btn  btn-danger ml-10" type="button" onclick="window.location='photo_gallery.php'">Cancel</button>	
									<?php } else { ?>
									<button class="btn  btn-success ml-10" type="submit" name="add">Add </button>
									<?php } ?>
								</div>
							</div>
						</div>
					</form>
				</div>
					<br/>

			<div  class="row class="card-view"">
					<?php list($gallery) = exc_qry("select * from photo_gallery where status = 0 order by id desc");
										//echo count($slider);
										 for ($i=0; $i < count($gallery); $i++) { ?>
					<div class="col-sm-3 ol-md-3 col-xs-12">
						<div class="panel panel-default card-view">
							<div class="panel-heading">
								<div class="pull-left">
									<h6 class="panel-title txt-dark"><?php
									$cat_id = $gallery[$i]['alb_id'];
									echo $cat_name = get_photo_cat_name($cat_id);?> </h6>
								</div>
								<div class="pull-right">
									<ul class="oneline">
										<li>
											<form method="post" enctype="multipart/form-data">
												<input type="hidden" name="id" value="<?php echo $gallery[$i]['id'];?>">
												<button type="submit" name="edit" class="butn text-inverse pr-10" data-toggle="tooltip" data-original-title="Edit" aria-describedby="tooltip650762">
													<i class="zmdi zmdi-edit txt-warning"></i>
												</button>
											</form>
										</li>
										<li>
											<form method="post" enctype="multipart/form-data">
												<input type="hidden" name="id" value="<?php echo $gallery[$i]['id'];?>">
												<button type="submit" name="delete" class="butn text-inverse" data-toggle="tooltip" data-original-title="Delete"><i class="zmdi zmdi-delete txt-danger"></i>
												</button>
											</form>
										</li>
									</ul>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="panel-wrapper collapse in row">
								<div class="panel-body col-sm-12">
									<div class="ml-20">
										<img src="../../images/gallery/<?php echo $gallery[$i]['image']; ?>" alt="image" class="img-responsive img-rounded height-200 card-view">
									</div>	
								</div>
							</div>
						</div>
					</div>
					<?php } ?>
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
	.height-200{
		height: 250px;
	}
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

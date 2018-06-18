 <link href="vendors/bower_components/dropify/dist/css/dropify.min.css" rel="stylesheet" type="text/css"/>

 <div class="wrapper theme-1-active pimary-color-blue">

<?php include("header.php");  if(!isValidUser())   redirect("login.php"); ?>
<?php include("left_sidebar.php"); ?>
<?php include("right_sidebar_backdrop.php"); 

	//delete image
	if (isset($_POST['delete']))
	{
		
		$id = $_POST['id'];
			$del_qry = "update slider set status = 1 where id = $id";
	    	$del_res = mysqli_query($dblink,$del_qry);
	    	if($del_res){
	    		 echo '<script> success_message("Success","success","image deleted successfully","slider.php"); </script>';
	    	}
	    	else{
			     echo '<script> my_function("Error in Image delete"); </script>';
			    }
		
	}
	//delete image

	//insert image
	if(isset($_POST['add'])) {
		$go = 1;
		$desk_img = $_FILES['desk_img'];
		$desk_tmp_name = strtolower(time()."_".$desk_img['name']); 
		$mob_img = $_FILES['mob_img'];
		$mob_tmp_name = strtolower(time()."_".$mob_img['name']); 
		$imgpath = "../../images/slider/";

		if(!move_uploaded_file($desk_img["tmp_name"],$imgpath.$desk_tmp_name))//storing image in file
	        {
	            echo '<script> my_function("image upload fail"); </script>';
	            $go=0;
	        }
	    if(!move_uploaded_file($mob_img["tmp_name"],$imgpath.$mob_tmp_name))//storing image in file
	        {
	             echo '<script> my_function("image upload fail"); </script>';
	            $go=0;
	        }

	    if ($go==1) {
	    	$ins_qry = "insert into slider set desk_img = '$desk_tmp_name', mob_img = '$mob_tmp_name',add_date = now()";
	    	$ins_res = mysqli_query($dblink,$ins_qry);
	    	if($ins_res){
	    		 echo '<script> success_message("Success","success","image added successfully","slider.php"); </script>';
	    	}
	    	else{
	    		$msg = mysqli_error($dblink);
			     echo '<script> my_function("Error"); </script>';
			    }
	   		}
	}
	//insert image

?>

<!-- Main Content -->
			<div class="page-wrapper">
				<div class="container-fluid">
					
					<!-- Title -->
					<div class="row heading-bg">
						<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
							<h5 class="txt-dark">Slider</h5>
						</div>
					
						<!-- Breadcrumb -->
						<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
							<ol class="breadcrumb">
								<li><a href="index.php">Dashboard</a></li>
								<li class="active"><span>Slider</span></li>
							</ol>
						</div>
						<!-- /Breadcrumb -->
					
					</div>
					<!-- /Title -->
					
					<!-- Row -->
				<div class="row">
					<form method="post" class="card-view" enctype="multipart/form-data">
						<div class="col-sm-6 ol-md-6 col-xs-12">
							<div class="panel panel-default card-view">
								<div class="panel-heading">
									<div class="pull-left">
										<h6 class="panel-title txt-dark">Desktop Slider Image</h6>
									</div>
									<div class="clearfix"></div>
								</div>
								<div class="panel-wrapper collapse in">
									<div class="panel-body">
										<div class="mt-40">
											<input type="file" accept="image/gif, image/jpg, image/jpeg, image/png" required="required" id="input-file-max-fs" class="dropify" name="desk_img" value="../../images/slider/1527664389_5.jpg" data-max-file-size="2M" />
										</div>	
									</div>
								</div>
							</div>
						</div>
						<div class="col-sm-6 ol-md-6 col-xs-12">
							<div class="panel panel-default card-view">
								<div class="panel-heading">
									<div class="pull-left">
										<h6 class="panel-title txt-dark">Mobile Slider Image</h6>
									</div>
									<div class="clearfix"></div>
								</div>
								<div class="panel-wrapper collapse in">
									<div class="panel-body">
										<div class="mt-40">
											<input type="file"  name="mob_img" accept="image/gif, image/jpg, image/jpeg, image/png" required="required" id="input-file-max-fs" class="dropify" data-max-file-size="2M" />
										</div>	
									</div>
								</div>
							</div>
						</div>
						<button class="btn  btn-success" type="submit" name="add">Add Images</button>
					</form>
				</div>
					<br/>
			<!--/Row-->

			<!--Row-->
			<div  class="row">
				<?php list($slider) = exc_qry("select * from slider where status = 0 order by id desc");
				for ($i=0; $i < count($slider); $i++) { ?>
				<!--slider image-->
				<div class="col-sm-6 ol-md-6 col-xs-12">
					<div class="panel panel-default card-view">
						<div class="panel-heading">
							<div class="pull-left">
								<h6 class="panel-title txt-dark">Slider Image</h6>
							</div>
							<div class="pull-right">
								<ul class="oneline">
									<li>
										<form method="post" enctype="multipart/form-data" action="edit_slider.php">
											<input type="hidden" name="id" value="<?php echo $slider[$i]['id'];?>">
											<button type="submit" name="edit_redirect" class="butn text-inverse pr-10" data-toggle="tooltip" data-original-title="Edit" aria-describedby="tooltip650762">
												<i class="zmdi zmdi-edit txt-warning"></i>
											</button>
										</form>
									</li>
									<li>
										<form method="post" enctype="multipart/form-data">
											<input type="hidden" name="id" value="<?php echo $slider[$i]['id'];?>">
											<button type="submit" name="delete" class="butn text-inverse" data-toggle="tooltip" data-original-title="Delete"><i class="zmdi zmdi-delete txt-danger"></i>
											</button>
										</form>
									</li>
								</ul>
							</div>
						<div class="clearfix"></div>
						</div>
						<div class="panel-wrapper collapse in row">
							<div class="panel-body col-sm-8">
								<div class="ml-20">
									<img src="../../images/slider/<?php echo $slider[$i]['desk_img']; ?>" alt="image" class="img-responsive img-rounded height-200 card-view">
								</div>	
							</div>
							<div class="panel-body col-sm-4">
								<div class="mr-10">
									<img src="../../images/slider/<?php echo $slider[$i]['mob_img']; ?>" alt="image" class="img-responsive img-rounded height-200 card-view">
								</div>	
							</div>
						</div>
					</div>
				</div>
				<!--/slider image-->
				<?php } ?>
			</div>
			<!--/Row-->	
				
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
		height: 200px;
	}
	.card-view{
	padding: 15px 15px 15px;
	}
	.oneline
	{
	  display:flex;  
	  list-style:none;
	}
	.butn{
		border: none;
		background: transparent;
	}
</style>

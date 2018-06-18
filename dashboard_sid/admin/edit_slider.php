 <link href="vendors/bower_components/dropify/dist/css/dropify.min.css" rel="stylesheet" type="text/css"/>

 <div class="wrapper theme-1-active pimary-color-blue">

<?php include("header.php");
if(!isValidUser())   redirect("login.php"); ?>
<?php include("left_sidebar.php"); ?>
<?php include("right_sidebar_backdrop.php"); 
$id = $_POST['id'];
if(isset($_POST['edit'])){
	$go = 1;
	$id = $_POST['id'];
	$desk_img = $_FILES['desk_img'];
	$desk_tmp_name = strtolower(time()."_".$desk_img['name']); 
	$mob_img = $_FILES['mob_img'];
	$mob_tmp_name = strtolower(time()."_".$mob_img['name']); 
	$imgpath = "../../images/slider/";
	$qry = "";
	 if((strlen($desk_img['name'])>0) || (strlen($mob_img['name'])>0))
        {
        	if(strlen($desk_img['name'])>0){
				if(!move_uploaded_file($desk_img["tmp_name"],$imgpath.$desk_tmp_name))//storing desk image in file
			        {
			           echo '<script> my_function("image upload fail"); </script>';
			            $go=0;
			        }
			        else{
			        	$qry .= ",desk_img = '$desk_tmp_name'";
			        }
	    		}

	    	if (strlen($mob_img['name'])>0) {
	    		 if(!move_uploaded_file($mob_img["tmp_name"],$imgpath.$mob_tmp_name))//storing image in file
		        	{
		            echo '<script> my_function("image upload fail"); </script>';
		            $go=0;
		        	}
		        	else{
		        		$qry .= ",mob_img = '$mob_tmp_name'";
		        	}
	    		}

	    if ($go==1) {
	    	$upd_qry = "update slider set edit_date = now() ".$qry." where id = $id";
	    	$upd_res = mysqli_query($dblink,$upd_qry);
		    	if($upd_res){
		    		 echo '<script> success_message("Updated","success","image updated successfully","slider.php"); </script>';
		    	}
		    	else{
		    		$msg = mysqli_error($dblink);
		    		  echo '<script> my_function("'.$msg.'"); </script>';
		    	}
			}
    }
    else{
    	
    	echo '<script>
    	my_function("Please Select image");
    	</script>';
    }
}

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
								<li><a href="slider.php">Slider</a></li>
								<li class="active"><span>Edit Slider Images</span></li>
							</ol>
						</div>
						<!-- /Breadcrumb -->
					
					</div>
					<!-- /Title -->
					
					<!-- Row -->
				<div class="row">
					<form method="post" class="card-view" enctype="multipart/form-data">
						<input type="text" name="id" value="<?php echo $id;?>">
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
											<input type="file" accept="image/gif, image/jpg, image/jpeg, image/png" id="input-file-max-fs" class="dropify" name="desk_img" value="../../images/slider/1527664389_5.jpg" data-max-file-size="2M" />
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
											<input type="file"  name="mob_img" accept="image/gif, image/jpg, image/jpeg, image/png" id="input-file-max-fs" class="dropify" data-max-file-size="2M" />
										</div>	
									</div>
								</div>
							</div>
						</div>
						<button class="btn  btn-success" type="submit" name="edit" id="edit-warning">Edit</button>
						<button class="btn  btn-default" type="button" onclick="window.location = 'slider.php';">Back</button>
					</form>
				</div>
					<br/>

			<div  class="row class="card-view"">
					<?php list($slider) = exc_qry("select * from slider where status = 0 and id = ".$id);
										//echo count($slider);
					if(count($slider)>0){
					 	for ($i=0; $i < count($slider); $i++) { ?>
						<div class="col-sm-12 ol-md-12 col-xs-12">
							<div class="panel panel-default card-view">
								<div class="panel-heading">
									<div class="pull-left">
										<h6 class="panel-title txt-dark">Preview</h6>
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
										<div class="mr-10 ml-10">
											<img src="../../images/slider/<?php echo $slider[$i]['mob_img']; ?>" alt="image" class="img-responsive img-rounded height-200 card-view">
										</div>	
									</div>
								</div>
							</div>
						</div>
						<?php } 
					} else{ //header("location:slider.php"); 
				} ?>
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
		height: 200px;
	}
	.card-view{
	padding: 15px 15px 15px;
	}
</style>


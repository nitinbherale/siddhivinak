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
			$del_qry = "update financial_result set status = 1 where id = $id";
    	$del_res = mysqli_query($dblink,$del_qry);
    	if($del_res){
    		 echo '<script> success_message("Success","success","deleted successfully","financial_results.php"); </script>';
    	}
    	else{
		     echo '<script> my_function("Error in delete"); </script>';
		    }	
	}
	//delete image

	if(isset($_POST['edit']))
	{
		$id = $_POST['id'];
		list($financial_result) = exc_qry("select * from financial_result where id = $id");
		$year = $financial_result[0]['year'];
	}
	

	//insert image
	if(isset($_POST['add'])){
		$go = 1;
		$file = $_FILES['file'];
		$tmp_name = strtolower(time()."_".$file['name']); 
		$year = $_POST['year'];
		$filepath = "../../upload/";
			if(!move_uploaded_file($file["tmp_name"],$filepath.$tmp_name))//storing image in file
		        {
		            echo '<script> my_function("File upload failed"); </script>';
		            $go=0;
		        }
	    
	   
	    if ($go==1) {
	    	$ins_qry = "insert into financial_result set document = '$tmp_name',year = $year , add_date = now()";
	    	$ins_res = mysqli_query($dblink,$ins_qry);
	    	if($ins_res){
	    		 echo '<script> success_message("Success","success","File added successfully","financial_results.php"); </script>';
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
		$file = $_FILES['file'];
		$tmp_name = strtolower(time()."_".$file['name']); 
		$year = $_POST['year'];
		$filepath = "../../upload/";
		$length = strlen($file['name']); 
		if($length>0){
			
				if(!move_uploaded_file($file["tmp_name"],$filepath.$tmp_name))//storing image in file
		        {
		            echo '<script> my_function("'.upload_max_filesize.'"); </script>';
		            $go=0;
		        }
				    else{
				    	$qry = ",document = '$tmp_name'";
				    }
	    	
	    	
	    }


	    if ($go==1) {
	    	$upd_qry = "update financial_result set year = $year , edit_date = now() ".$qry." where id = $id";
	    	$upd_res = mysqli_query($dblink,$upd_qry);
	    	if($upd_res){
	    		 echo '<script> success_message("Success","success","file edited successfully","financial_results.php"); </script>';
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
							<h5 class="txt-dark">Finanacial Report</h5>
						</div>
					
						<!-- Breadcrumb -->
						<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
							<ol class="breadcrumb">
								<li><a href="index.php">Dashboard</a></li>
								<li class="active"><span>Financial Report</span></li>
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
									<h6 class="panel-title txt-dark">Financial Report</h6>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="panel-wrapper collapse in">
								<div class="panel-body">
									<div class="row">
										<div class="col-md-12">
											<div class="form-wrap">
												<form method="post" enctype="multipart/form-data">
													<input type="hidden" name="id" value="<?php echo $id; ?>">
													<div class="form-group">
														<label for="inputName" class="control-label mb-10">File (PDF only) (Max 3 MB)</label>
														<input type="file" class="form-control" accept="application/pdf" name="file" <?php if($id>0){} else{echo "required"; } ?>>
													</div>
													<div class="form-group">
														<label for="inputName" class="control-label mb-10">Year</label>
														<input type="number" class="form-control" min="2000" max="2100" name="year" placeholder="Year" required value="<?php echo $year; ?>">
													</div>
													<div class="form-group mb-0">
														<?php if($id>0){?>
														<button class="btn  btn-success ml-10" type="submit" name="update">Edit</button>
														<button class="btn  btn-danger ml-10" type="button" onclick="window.location='photo_gallery.php'">Cancel</button>	
														<?php } else { ?>
														<button type="submit" name = "add" class="btn btn-success">Submit</button>
														<?php } ?>
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
														<th>Document</th>
														<th>Year</th>
														<th>Actions</th>
													</tr>
												</thead>
												
												<tbody>
													 <?php														

                                                     $select_qry = "SELECT * FROM financial_result where status = 0";

                                                     $result = mysqli_query($dblink,$select_qry) or die("Cannot Fetch Data From Database" .mysqli_error($dblink));
                                                     	$a=1;
                                                      while ($row = mysqli_fetch_assoc($result)) { ?>
                                                        
												   <tr>
													  <td><?php echo $a; ?></td>
													  <td><a href="../../upload/<?php echo $row['document']; ?>" target="_blank" ><?php echo $row['document']; ?></a></td>
													  <td> <?php echo $row['year']; ?></td>
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
	
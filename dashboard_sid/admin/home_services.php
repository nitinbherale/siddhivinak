<div class="wrapper theme-1-active pimary-color-blue">


<?php include("header.php");
if(!isValidUser())   redirect("login.php");  ?>
<?php include("left_sidebar.php") ?>

<?php include("right_sidebar_backdrop.php") ?>

	<?php
	//after click on edit data fetched
	 if (isset($_POST['edit'])) {
       		$edit_id = $_POST['id'];
       		list($service) = exc_qry("select * from services where ser_id = $edit_id");
       		$ser_img = $service[0]['ser_icon'];
       		$ser_title = $service[0]['ser_title'];
       		$ser_description = $service[0]['ser_description'];
       }

      if (isset($_POST['add'])) {
      	 $edit_id = $_POST['edit_id'];
         $ser_img = mysqli_real_escape_string($dblink,$_POST['icon_img']);
         $ser_title = mysqli_real_escape_string($dblink,$_POST['ser_title']);
         $ser_desc = mysqli_real_escape_string($dblink,$_POST['ser_description']);
         //for edit
         if($edit_id>0){
	       	$insert_query = "update services set ser_icon='$ser_img',ser_title ='$ser_title', ser_description = '$ser_desc' , edit_date=now()  where ser_id = $edit_id";
		           $run_query = mysqli_query($dblink,$insert_query);
		         if ($run_query) {
		         	
		         	echo '<script> success_message("Success","success","Service Edited","home_services.php"); </script>';
		         }
		         else{
		         	$msg = mysqli_error($dblink);
		         	echo '<script> my_function("Error in Update"); time_out();  </script>';
		         }	
	     }  
	     else{ //for add
	     	$insert_query = "INSERT INTO services (ser_icon, ser_title, ser_description , add_date)
	               VALUES ('$ser_img', '$ser_title' , '$ser_desc', now())";
		           $run_query = mysqli_query($dblink,$insert_query);
		         if ($run_query) {
		         	echo '<script> success_message("Success","success","Service Added","home_services.php"); </script>';
		         }
		         else{
		         	$msg = mysqli_error($dblink);
		         	echo '<script> my_function("Error in Add"); </script>';
		         }
	     }

      }

       if (isset($_POST['delete'])) {                                      
           $id = $_POST['id'];
        $del_query = "update services set status = 1 WHERE ser_id = '$id' ";
        $run_query = mysqli_query($dblink,$del_query);
        if ($run_query) {
        	echo '<script> success_message("Success","success","Service Deleted","home_services.php"); </script>';
        }
        else{
        	$msg = mysqli_error($dblink);
				echo '<script> my_function("Error"); </script>';
        }
      }

      
    ?>
<!-- Main Content -->
			<div class="page-wrapper">
				<div class="container-fluid">
					
					<!-- Title -->
					<div class="row heading-bg">
						<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
							<h5 class="txt-dark">Home Services</h5>
						</div>
					
						<!-- Breadcrumb -->
						<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
							<ol class="breadcrumb">
								<li><a href="index.php">Dashboard</a></li>
								<li class="active"><span>Services</span></li>
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
										<h6 class="panel-title txt-dark">Services</h6>
									</div>
									<div class="clearfix"></div>
								</div>
								<div class="panel-wrapper collapse in">
									<div class="panel-body">
										<div class="row">
											<div class="col-sm-12 col-xs-12">
												<div class="form-wrap">
													<form method="post" action="">
														<div class="form-group">
															<label class="control-label mb-10" for="exampleInputuname_1">Icon *</label>
															<input type="hidden" name="edit_id" id="input1" value="<?php echo $edit_id; ?>">
															<div class="input-group">
																<div class="input-group-addon"><i class="icon-user"></i></div>
																<input type="text" class="form-control" id="input2" placeholder="Insert Icon" name="icon_img" placeholder="Icon class name" required  value="<?php echo $ser_img; ?>">
															</div>
														</div>
														<div class="form-group">
															<label class="control-label mb-10" for="exampleInputEmail_1">Service Name *</label>
															<div class="input-group">
																<div class="input-group-addon"><i class="icon-envelope-open"></i></div>
																<input type="text" class="form-control" id="input3" placeholder="Enter Service Name" name="ser_title" value="<?php echo $ser_title; ?>" required >
															</div>
														</div>
														<div class="form-group">
															<label class="control-label mb-10" for="exampleInputpwd_1">Service Description *</label>
															<div class="input-group">
																<div class="input-group-addon"><i class="icon-lock"></i></div>
																<textarea class="form-control" id="input4" placeholder="Service Description" name="ser_description" rows="4" required><?php echo $ser_description; ?></textarea> 
															</div>
														</div>
														
														<button type="submit" class="btn btn-success mr-10" name="add">Submit</button>
														
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
					<!--table starts -->
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
															<th>Icon Class</th>
															<th>Title</th>
															<th>Description</th>
															<th>Actions</th>
														</tr>
													</thead>
													
													<tbody>
														 <?php														

	                                                     $select_qry = "SELECT * FROM services where status = 0";

	                                                     $result = mysqli_query($dblink,$select_qry) or die("Cannot Fetch Data From Database" .mysqli_error($dblink));
	                                                     $a = 1;
	                                                      while ($row = mysqli_fetch_assoc($result)) { ?>
	                                                        
													   <tr>
														  <td><?php echo $a; ?></td>
														  <td> <?php echo $row['ser_icon']; ?></td>
														  <td> <?php echo $row['ser_title']; ?></td>
														  <td><?php echo $row['ser_description']; ?> </td>
														  <td class="text-nowrap">
														  <ul class="oneline">
															<li>
																<!--edit button-->
														    <form method="post">
														    <input type="hidden" name="id" value="<?php echo $row['ser_id'];?>">
															  <button class="butn" type="submit" data-toggle="tooltip" data-original-title="Edit" name="edit"> <i class="fa fa-pencil text-inverse m-r-10"></i> </button>
	                                                        </form>
	                                                        	<!--edit button-->
	                                                         </li>
	                                                         <li>
	                                                         	<!--delete button-->
	                                                        <form method="post">
	                                                          <input type="hidden" name="id" value="<?php echo $row['ser_id'];?>">
															  <button class="butn" type="submit" data-toggle="tooltip" data-original-title="Delete" name="delete"> <i class="fa fa-trash text-danger"></i> </button>
															</form>
																<!--delete button-->
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
					<!--table end-->
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

<style type="text/css">
 thead{background:#f05737;}
 .table > thead > tr > th{color: #fff;font-weight: 600;font-size: 14px;}
 .butn {background-color: transparent;border: none;}
 .oneline
{
  display:flex;  
  list-style:none;
}
 </style>
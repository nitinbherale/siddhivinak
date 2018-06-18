<div class="wrapper theme-1-active pimary-color-blue">
<?php include("header.php");
 if(!isValidUser())   redirect("login.php");  ?>
<?php include("left_sidebar.php") ?>

<?php include("right_sidebar_backdrop.php") ?>

<?php

                        
  if (isset($_POST['add'])) {

     $type_pooja = mysqli_real_escape_string($dblink,$_POST['type_pooja']);
     $reporting_time = mysqli_real_escape_string($dblink,$_POST['reporting_time']);
     $frequency = mysqli_real_escape_string($dblink,$_POST['frequency']);
     $duration = mysqli_real_escape_string($dblink,$_POST['duration']);
     $amount = mysqli_real_escape_string($dblink,$_POST['amount']);
     $persons = mysqli_real_escape_string($dblink,$_POST['persons']);
     $prasad = mysqli_real_escape_string($dblink,$_POST['prasad']);
     //echo ;

   $insert_query = "INSERT INTO pooja_details (type_of_pooja, reporting_time, frequency, duration, amount, persons, prasad)
           VALUES ('$type_pooja','$reporting_time','$frequency',$duration, $amount, '$persons', '$prasad')";
           echo '<script> window.alert("qry'.$insert_query.'");// time_out();</script>';
       $run_query = mysqli_query($dblink,$insert_query);

     if ($run_query) {
     	echo '<script> success_message("Success","success","Data Added Successfully","pooja_details.php"); </script>';
     }
     else{
     	$msg = mysqli_error($dblink);
     	echo '<script> my_function("'.$insert_query.'"); </script>';
     }

  }

  if (isset($_POST['edit'])) {
 	$id = $_POST['id'];
 	list($pooja_details) = exc_qry("select * from pooja_details where id = $id");
 	$type_pooja = $pooja_details[0]['type_of_pooja'];
 	$reporting_time = $pooja_details[0]['reporting_time'];
 	$frequency = $pooja_details[0]['frequency'];
 	$duration = $pooja_details[0]['duration'];
 	$amount = $pooja_details[0]['amount'];
 	$persons = $pooja_details[0]['persons'];
 	$prasad = $pooja_details[0]['prasad'];
 }
 	

 	if (isset($_POST['delete'])) {
      	$id = $_POST['id'];
      	 $del_query = "update pooja_details set status = 1 WHERE id = '$id' ";
        $run_query = mysqli_query($dblink,$del_query);

        if ($run_query) {
        	echo '<script> success_message("Success","success","Data Deleted","pooja_details.php");  </script>';
        }
        else{
        	$msg = mysqli_error($dblink);
				echo '<script> my_function("Error");  </script>';
        }
      }


      if (isset($_POST['edit_details'])) {

     	$id = $_POST['id'];
     	 $type_pooja = mysqli_real_escape_string($dblink,$_POST['type_pooja']);
	     $reporting_time = mysqli_real_escape_string($dblink,$_POST['reporting_time']);
	     $frequency = mysqli_real_escape_string($dblink,$_POST['frequency']);
	     $duration = mysqli_real_escape_string($dblink,$_POST['duration']);
	     $amount = mysqli_real_escape_string($dblink,$_POST['amount']);
	     $persons = mysqli_real_escape_string($dblink,$_POST['persons']);
	     $prasad = mysqli_real_escape_string($dblink,$_POST['prasad']);
			
       $upd_query = "update pooja_details set type_of_pooja = '$type_pooja', reporting_time = '$reporting_time', frequency = '$frequency', duration = $duration, amount = $amount, persons = '$persons', prasad = '$prasad' where id = $id";
           $run_query = mysqli_query($dblink,$upd_query);
         if ($run_query) {
         	echo '<script> success_message("Success","success","Data updated Successfully","pooja_details.php"); </script>';
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
							<h5 class="txt-dark">Pooja Details</h5>
						</div>

						<!-- Breadcrumb -->
						<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
							<ol class="breadcrumb">
								<li><a href="index.php">Dashboard</a></li>
								<li class="active"><span>Pooja Details</span></li>
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
										<h6 class="panel-title txt-dark">Pooja Details</h6>
									</div>
									<div class="clearfix"></div>
								</div>
								<div class="panel-wrapper collapse in">
									<div class="panel-body">
										<div class="row">
											<div class="col-sm-12 col-xs-12">
												<div class="form-wrap">
													<form method="post" >
														<input type="hidden" name="id"  value="<?php echo($id); ?>">
														<div class="form-group">
															<label class="control-label mb-10" for="exampleInputuname_1">Type of Pooja *</label>
															<div class="input-group">
																<div class="input-group-addon"><i class="icon-user"></i></div>
																<input type="text" class="form-control" id="exampleInputuname_1" placeholder="Type of Pooja" name="type_pooja" required value="<?php echo $type_pooja; ?>">
															</div>
														</div>
														<div class="form-group">
															<label class="control-label mb-10" for="exampleInputuname_1">Reporting Time *</label>
															<div class="input-group">
																<div class="input-group-addon"><i class="icon-user"></i></div>
																<input type="text" class="form-control" id="exampleInputuname_1" placeholder="Reporting Time" name="reporting_time" required value="<?php echo $reporting_time; ?>">
															</div>
														</div>
														<div class="form-group">
															<label class="control-label mb-10" for="exampleInputuname_1">Frequency *</label>
															<div class="input-group">
																<div class="input-group-addon"><i class="icon-user"></i></div>
																<input type="text" class="form-control" id="exampleInputuname_1" placeholder="Frequency" name="frequency" required value="<?php echo $frequency; ?>">
															</div>
														</div>
														<div class="form-group">
															<label class="control-label mb-10" for="exampleInputuname_1">Duration (mins) *</label>
															<div class="input-group">
																<div class="input-group-addon"><i class="icon-user"></i></div>
																<input type="number" class="form-control" id="exampleInputuname_1" placeholder="Duration" name="duration" required value="<?php echo $duration; ?>">
															</div>
														</div>
														<div class="form-group">
															<label class="control-label mb-10" for="exampleInputuname_1">Amount *</label>
															<div class="input-group">
																<div class="input-group-addon"><i class="icon-user"></i></div>
																<input type="number" min="0" class="form-control" id="exampleInputuname_1" placeholder="Amount" name="amount" required value="<?php echo $amount; ?>">
															</div>
														</div>
														<div class="form-group">
															<label class="control-label mb-10" for="exampleInputuname_1">Persons Allowed</label>
															<div class="input-group">
																<div class="input-group-addon"><i class="icon-user"></i></div>
																<input type="text" class="form-control" id="exampleInputuname_1" placeholder="Persons Allowed" name="persons" required value="<?php echo $persons; ?>">
															</div>
														</div>
														<div class="form-group">
															<label class="control-label mb-10" for="exampleInputuname_1">Prasad</label>
															<div class="input-group">
																<div class="input-group-addon"><i class="icon-user"></i></div>
																<input type="text" class="form-control" id="exampleInputuname_1" placeholder="Prasad" name="prasad" required value="<?php echo $prasad; ?>">
															</div>
														</div>
														<?php if($id > 0) {?>
														<button type="submit" class="btn btn-success mr-10" name="edit_details">Edit</button>
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
															<th>Type of Pooja</th>
															<th>Reporting Time</th>
															<th>Frequency</th>
															<th>Duration</th>
															<th>Amount</th>
															<th>Persons</th>
															<th>Prasad</th>
															<th>Actions</th>
														</tr>
													</thead>
													
													<tbody>
														 <?php														

	                                                     $select_qry = "SELECT * FROM pooja_details where status = 0";

	                                                     $result = mysqli_query($dblink,$select_qry) or die("Cannot Fetch Data From Database" .mysqli_error($dblink));
	                                                     	$a=1;
	                                                      while ($row = mysqli_fetch_assoc($result)) { ?>
	                                                        
													   <tr>
														  <td><?php echo $a; ?></td>
														  <td> <?php echo $row['type_of_pooja']; ?></td>
														  <td> <?php echo $row['reporting_time']; ?></td>
														  <td> <?php echo $row['frequency']; ?></td>
														  <td> <?php echo $row['duration']; ?></td>
														  <td> <?php echo $row['amount']; ?></td>
														  <td> <?php echo $row['persons']; ?></td>
														  <td> <?php echo $row['prasad']; ?></td>
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
					<!-- /Row -->	
									
				
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
	.butn{border: none;background: transparent;}
.oneline{
  display:flex;  
  list-style:none;
}
thead{background:#f05737;}
 .table > thead > tr > th {color: #fff;font-weight: 600;font-size: 14px;}
</style>

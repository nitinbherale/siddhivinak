<div class="wrapper theme-1-active pimary-color-blue">
	<?php include("header.php");
 if(!isValidUser())   redirect("login.php");  ?>
<?php include("left_sidebar.php") ?>

<?php include("right_sidebar_backdrop.php") ?>
<?php
	
    //add                    
  	if (isset($_POST['add'])) {
	     $title = mysqli_real_escape_string($dblink,$_POST['title']);
	     $date = mysqli_real_escape_string($dblink,$_POST['date']);
	     $moon_rise = mysqli_real_escape_string($dblink,$_POST['moon_rise']);
	     $yog = mysqli_real_escape_string($dblink,$_POST['yog']);
	   	$insert_query = "INSERT INTO imp_dates (title, date, moon_rise, yog)
	           VALUES ('$title', '$date' , '$moon_rise', '$yog')";
	       $run_query = mysqli_query($dblink,$insert_query);
	     if ($run_query) {
	     	echo '<script> success_message("Success","success","Data Added Successfully","imp_dates.php"); </script>';
	    }
	     else{
	     	echo '<script> my_function("Error");</script>';
	    }
  	}

  //fetch data for edit
  	if (isset($_POST['edit'])) {
	 	$id = $_POST['id'];
	 	list($events) = exc_qry("select * from imp_dates where id = $id");
	 	$title = $events[0]['title'];
	 	$date = $events[0]['date'];
	 	$moon_rise = $events[0]['moon_rise'];
	 	$yog = $events[0]['yog'];
 	}
 	
	if (isset($_POST['delete'])) {
	  	$id = $_POST['id'];
	  	 $del_query = "update imp_dates set status = 1 WHERE id = '$id' ";
	    $run_query = mysqli_query($dblink,$del_query);
	    if ($run_query) {
	    	echo '<script> success_message("Success","success","Data Deleted","imp_dates.php"); </script>';
	    }
	    else{
	    	$msg = mysqli_error($dblink);
				echo '<script> my_function("Error");</script>';
	    }
  	}


    if (isset($_POST['edit_dates'])) {
     	$id = $_POST['id'];
     	$title = mysqli_real_escape_string($dblink,$_POST['title']);
		$date = mysqli_real_escape_string($dblink,$_POST['date']);
		 $moon_rise = mysqli_real_escape_string($dblink,$_POST['moon_rise']);
	     $yog = mysqli_real_escape_string($dblink,$_POST['yog']);

        $upd_query = "update imp_dates set title = '$title', date = '$date', moon_rise = '$moon_rise', yog = '$yog' where id = $id";
        $run_query = mysqli_query($dblink,$upd_query);
	    if ($run_query) {
	     	echo '<script> success_message("Success","success","Data updated Successfully","imp_dates.php");</script>';
	    }
	    else{
	     	$msg = mysqli_error($dblink);
	     	echo '<script> my_function("Error");</script>';
	    }	
    }

    $Days = array('Angarki Chaturthi','Sankashti Chaturthi','Vinayaki Chaturthi');

     ?>
					



<!-- Main Content -->
<div class="page-wrapper">
	<div class="container-fluid">
		
		<!-- Title -->
		<div class="row heading-bg">
			<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
				<h5 class="txt-dark">Important Dates</h5>
			</div>

			<!-- Breadcrumb -->
			<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
				<ol class="breadcrumb">
					<li><a href="index.php">Dashboard</a></li>
					<li class="active"><span>Important Dates</span></li>
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
							<h6 class="panel-title txt-dark">Important Dates </h6>
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="panel-wrapper collapse in">
						<div class="panel-body">
							<div class="row">
								<div class="col-sm-12 col-xs-12">
									<div class="form-wrap">
										<form method="post" >
											<div class="row">
												<div class="col-md-5">
													<input type="hidden" name="id" value="<?php echo $id; ?>">
													<div class="form-group">
													<label class="control-label mb-10" for="exampleInputuname_1">Day *</label>
													<div class="input-group">
														<div class="input-group-addon"><i class="icon-user"></i></div>
														<select class="form-control" name="title">
															<?php for ($i=0; $i < count($Days) ; $i++) { ?>
																<option value="<?php echo $Days[$i]; ?>" <?php if ($Days[$i]==$title) {
																	echo "selected";
																} ?> ><?php echo $Days[$i]; ?></option>
															<?php } ?>
															
														</select>
													</div>
													</div>
												</div>
												<div class="col-md-5">
													<div class="form-group">
													<label class="control-label mb-10" for="exampleInputuname_1">Date *</label>
													<div class="input-group">
														<div class="input-group-addon"><i class="icon-user"></i></div>
														<input type="date" class="form-control" id="exampleInputuname_1" value="<?php echo $date; ?>"  placeholder="Enter Date Here" name="date" required>
													</div>
													</div>
												</div>
												<div class="col-md-5">
													<div class="form-group">
													<label class="control-label mb-10" for="exampleInputuname_1">Moon Rise *</label>
													<div class="input-group">
														<div class="input-group-addon"><i class="icon-user"></i></div>
														<input type="time" class="form-control" id="exampleInputuname_1" value="<?php echo $moon_rise; ?>" placeholder="Enter Time Here" name="moon_rise">
													</div>
													</div>
												</div>
												<div class="col-md-5">
													<div class="form-group">
													<label class="control-label mb-10" for="exampleInputuname_1">Yog *</label>
													<div class="input-group">
														<div class="input-group-addon"><i class="icon-user"></i></div>
														<input type="text" class="form-control" id="exampleInputuname_1" value="<?php echo $yog; ?>" placeholder="Enter Yog Here" name="yog">
													</div>
													</div>
												</div>
												<div class="col-md-2">
													<?php if($id > 0) {?>
													<button type="submit" class="btn btn-success mt-30"        name="edit_dates" >Edit</button>
													<?php } else { ?>
													<button type="submit" class="btn btn-success mt-30" name="add">Add</button>
												<?php  } ?>
												</div>
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
		<!--/Row-->
		<!--table-->
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
												<th>Day</th>
												<th>Date</th>
												<th>Moon Rise</th>
												<th>Yog</th>
												<th>Actions</th>
											</tr>
										</thead>
										
										<tbody>
											 <?php														

                                             $select_qry = "SELECT * FROM imp_dates where status = 0 order by id desc";

                                             $result = mysqli_query($dblink,$select_qry) or die("Cannot Fetch Data From Database" .mysqli_error($dblink));
                                             	$a=1;
                                              while ($row = mysqli_fetch_assoc($result)) { ?>
                                                
										   <tr>
											  <td><?php echo $a; ?></td>
											  <td> <?php echo $row['title']; ?></td>
											  <td><?php echo $row['date']; ?> </td>
											  <td><?php if($row['moon_rise']!="00:00:00"){ 
											  	echo date('h : i a', strtotime($row['moon_rise']));
											  } ?> </td>
											  <td><?php echo $row['yog']; ?> </td>
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
		<!-- /Table -->	
						
	
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
td ul{
  display:flex;  
  list-style:none;
}
thead{background:#f05737;}
 .table > thead > tr > th {color: #fff;font-weight: 600;font-size: 14px;}
</style>

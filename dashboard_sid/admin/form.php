 <div class="wrapper theme-1-active pimary-color-blue">

<?php include("header.php") ?>
<?php include("left_sidebar.php") ?>
<?php include("right_sidebar_backdrop.php") ?>

<!-- Main Content -->
			<div class="page-wrapper">
				<div class="container-fluid">
					
					<!-- Title -->
					<div class="row heading-bg">
						<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
							<h5 class="txt-dark">form layout</h5>
						</div>
					
						<!-- Breadcrumb -->
						<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
							<ol class="breadcrumb">
								<li><a href="#">Dashboard</a></li>
								<li><a href="#"><span>form</span></a></li>
								<li class="active"><span>form-layout</span></li>
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
										<h6 class="panel-title txt-dark">Form with icon</h6>
									</div>
									<div class="clearfix"></div>
								</div>
								<div class="panel-wrapper collapse in">
									<div class="panel-body">
										<div class="row">
											<div class="col-sm-12 col-xs-12">
												<div class="form-wrap">
													<form>
														<div class="form-group">
															<label class="control-label mb-10" for="exampleInputuname_1">User Name</label>
															<div class="input-group">
																<div class="input-group-addon"><i class="icon-user"></i></div>
																<input type="text" class="form-control" id="exampleInputuname_1" placeholder="Username">
															</div>
														</div>
														<div class="form-group">
															<label class="control-label mb-10" for="exampleInputEmail_1">Email address</label>
															<div class="input-group">
																<div class="input-group-addon"><i class="icon-envelope-open"></i></div>
																<input type="email" class="form-control" id="exampleInputEmail_1" placeholder="Enter email">
															</div>
														</div>
														<div class="form-group">
															<label class="control-label mb-10" for="exampleInputpwd_1">Password</label>
															<div class="input-group">
																<div class="input-group-addon"><i class="icon-lock"></i></div>
																<input type="password" class="form-control" id="exampleInputpwd_1" placeholder="Enter email">
															</div>
														</div>
														<div class="form-group">
															<label class="control-label mb-10" for="exampleInputpwd_2">Confirm Password</label>
															<div class="input-group">
																<div class="input-group-addon"><i class="icon-lock"></i></div>
																<input type="password" class="form-control" id="exampleInputpwd_2" placeholder="Enter email">
															</div>
														</div>
														<div class="form-group">
															<label class="control-label mb-10">Gender</label>
															<div>
																<div class="radio">
																	<input type="radio" name="radio1" id="radio_1" value="option1" checked="">
																	<label for="radio_1">
																	M
																	</label>
																</div>
																<div class="radio">
																	<input type="radio" name="radio1" id="radio_2" value="option2" checked="">
																	<label for="radio_2">
																	F
																	</label>
																</div>
															</div>
														</div>
														<div class="form-group">
															<div class="checkbox checkbox-success">
																<input id="checkbox_1" type="checkbox">
																<label for="checkbox_1"> Remember me </label>
															</div>
														</div>
														<button type="submit" class="btn btn-success mr-10">Submit</button>
														<button type="submit" class="btn btn-default">Cancel</button>
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
									
					<!-- Row -->
					<div class="row">
						<div class="col-md-12">
							<div class="panel panel-default card-view">
								<div class="panel-heading">
									<div class="pull-left">
										<h6 class="panel-title txt-dark">with two columns</h6>
									</div>
									<div class="clearfix"></div>
								</div>
								<div class="panel-wrapper collapse in">
									<div class="panel-body">
										<div class="row">
											<div class="col-sm-12 col-xs-12">
												<div class="form-wrap">
													<form action="#">
														<div class="form-body">
															<h6 class="txt-dark capitalize-font"><i class="zmdi zmdi-account mr-10"></i>Person's Info</h6>
															<hr class="light-grey-hr"/>
															<div class="row">
																<div class="col-md-6">
																	<div class="form-group">
																		<label class="control-label mb-10">First Name</label>
																		<input type="text" id="firstName" class="form-control" placeholder="John doe">
																		<span class="help-block"> This is inline help </span> 
																	</div>
																</div>
																<!--/span-->
																<div class="col-md-6">
																	<div class="form-group has-error">
																		<label class="control-label mb-10">Last Name</label>
																		<input type="text" id="lastName" class="form-control" placeholder="12n">
																		<span class="help-block"> This field has error. </span> 
																	</div>
																</div>
																<!--/span-->
															</div>
															<!-- /Row -->
															<div class="row">
																<div class="col-md-6">
																	<div class="form-group">
																		<label class="control-label mb-10">Gender</label>
																		<select class="form-control">
																			<option value="">Male</option>
																			<option value="">Female</option>
																		</select>
																		<span class="help-block"> Select your gender </span> 
																	</div>
																</div>
																<!--/span-->
																<div class="col-md-6">
																	<div class="form-group">
																		<label class="control-label mb-10">Date of Birth</label>
																		<input type="text" class="form-control" placeholder="dd/mm/yyyy">
																	</div>
																</div>
																<!--/span-->
															</div>
															<!-- /Row -->
															<div class="row">
																<div class="col-md-6">
																	<div class="form-group">
																		<label class="control-label mb-10">Category</label>
																		<select class="form-control" data-placeholder="Choose a Category" tabindex="1">
																			<option value="Category 1">Category 1</option>
																			<option value="Category 2">Category 2</option>
																			<option value="Category 3">Category 5</option>
																			<option value="Category 4">Category 4</option>
																		</select>
																	</div>
																</div>
																<!--/span-->
																<div class="col-md-6">
																	<div class="form-group">
																		<label class="control-label mb-10">Membership</label>
																		<div class="radio-list">
																			<div class="radio-inline pl-0">
																				<span class="radio radio-info">
																					<input type="radio" name="radio5" id="radio_5" value="option1">
																			<label for="radio_5">Option 1</label>
																			</span>
																			</div>
																			<div class="radio-inline">
																				<span class="radio radio-info">
																					<input type="radio" name="radio5" id="radio_6" value="option2">
																			<label for="radio_6">Option 2 </label>
																			</span>
																			</div>
																		</div>
																	</div>
																</div>
																<!--/span-->
															</div>
															<!-- /Row -->
															
															<div class="seprator-block"></div>
															
															<h6 class="txt-dark capitalize-font"><i class="zmdi zmdi-account-box mr-10"></i>address</h6>
															<hr class="light-grey-hr"/>
															<div class="row">
																<div class="col-md-12 ">
																	<div class="form-group">
																		<label class="control-label mb-10">Street</label>
																		<input type="text" class="form-control">
																	</div>
																</div>
															</div>
															<div class="row">
																<div class="col-md-6">
																	<div class="form-group">
																		<label class="control-label mb-10">City</label>
																		<input type="text" class="form-control">
																	</div>
																</div>
																<!--/span-->
																<div class="col-md-6">
																	<div class="form-group">
																		<label class="control-label mb-10">State</label>
																		<input type="text" class="form-control">
																	</div>
																</div>
																<!--/span-->
															</div>
															<!-- /Row -->
															<div class="row">
																<div class="col-md-6">
																	<div class="form-group">
																		<label class="control-label mb-10">Post Code</label>
																		<input type="text" class="form-control">
																	</div>
																</div>
																<!--/span-->
																<div class="col-md-6">
																	<div class="form-group">
																		<label class="control-label mb-10">Country</label>
																		<select class="form-control">
																			<option>--Select your Country--</option>
																			<option>India</option>
																			<option>Sri Lanka</option>
																			<option>USA</option>
																		</select>
																	</div>
																</div>
																<!--/span-->
															</div>
														</div>
														<div class="form-actions mt-10">
															<button type="submit" class="btn btn-success  mr-10"> Save</button>
															<button type="button" class="btn btn-default">Cancel</button>
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
					<!-- /Row -->
					
					<!-- Row -->
					<div class="row">
						<div class="col-md-12">
							<div class="panel panel-default card-view">
								<div class="panel-heading">
									<div class="pull-left">
										<h6 class="panel-title txt-dark">with two columns horizontal form</h6>
									</div>
									<div class="clearfix"></div>
								</div>
								<div class="panel-wrapper collapse in">
									<div class="panel-body">
										<div class="row">
											<div class="col-md-12">
												<div class="form-wrap">
													<form action="#" class="form-horizontal">
														<div class="form-body">
															<h6 class="txt-dark capitalize-font"><i class="zmdi zmdi-account mr-10"></i>Person's Info</h6>
															<hr class="light-grey-hr"/>
															<div class="row">
																<div class="col-md-6">
																	<div class="form-group">
																		<label class="control-label col-md-3">First Name</label>
																		<div class="col-md-9">
																			<input type="text" class="form-control" placeholder="John doe">
																			<span class="help-block"> This is inline help </span> 
																		</div>
																	</div>
																</div>
																<!--/span-->
																<div class="col-md-6">
																	<div class="form-group has-error">
																		<label class="control-label col-md-3">Last Name</label>
																		<div class="col-md-9">
																			<input type="text" class="form-control" placeholder="12n">
																			<span class="help-block"> This field has error. </span> 
																		</div>
																	</div>
																</div>
																<!--/span-->
															</div>
															<!-- /Row -->
															<div class="row">
																<div class="col-md-6">
																	<div class="form-group">
																		<label class="control-label col-md-3">Gender</label>
																		<div class="col-md-9">
																			<select class="form-control">
																				<option value="">Male</option>
																				<option value="">Female</option>
																			</select>
																			<span class="help-block"> Select your gender. </span> 
																		</div>
																	</div>
																</div>
																<!--/span-->
																<div class="col-md-6">
																	<div class="form-group">
																		<label class="control-label col-md-3">Date of Birth</label>
																		<div class="col-md-9">
																			<input type="text" class="form-control" placeholder="dd/mm/yyyy">
																		</div>
																	</div>
																</div>
																<!--/span-->
															</div>
															<!-- /Row -->
															<div class="row">
																<div class="col-md-6">
																	<div class="form-group">
																		<label class="control-label col-md-3">Category</label>
																		<div class="col-md-9">
																			<select class="form-control" data-placeholder="Choose a Category" tabindex="1">
																				<option value="Category 1">Category 1</option>
																				<option value="Category 2">Category 2</option>
																				<option value="Category 3">Category 5</option>
																				<option value="Category 4">Category 4</option>
																			</select>
																		</div>
																	</div>
																</div>
																<!--/span-->
																<div class="col-md-6">
																	<div class="form-group">
																		<label class="control-label col-md-3">Membership</label>
																		<div class="col-md-9">
																			<div class="radio-list">
																				<div class="radio-inline pl-0">
																					<span class="radio radio-info">																					<input type="radio" name="radio7" id="radio_9" value="option1">
																						<label for="radio_9">Option 1</label>
																					</span>
																				</div>
																				<div class="radio-inline pl-0">
																					<span class="radio radio-info">																				<input type="radio" name="radio7" id="radio_10" value="option2">
																						<label for="radio_10">Option 2</label>
																					</span>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
																<!--/span-->
															</div>
															
															<div class="seprator-block"></div>
															
															<h6 class="txt-dark capitalize-font"><i class="zmdi zmdi-account-box mr-10"></i>address</h6>
															<hr class="light-grey-hr"/>
															<!-- /Row -->
															<div class="row">
																<div class="col-md-6">
																	<div class="form-group">
																		<label class="control-label col-md-3">Address 1</label>
																		<div class="col-md-9">
																			<input type="text" class="form-control">
																		</div>
																	</div>
																</div>
																<div class="col-md-6">
																	<div class="form-group">
																		<label class="control-label col-md-3">Address 2</label>
																		<div class="col-md-9">
																			<input type="text" class="form-control">
																		</div>
																	</div>
																</div>
															</div>
															<div class="row">
																<div class="col-md-6">
																	<div class="form-group">
																		<label class="control-label col-md-3">City</label>
																		<div class="col-md-9">
																			<input type="text" class="form-control">
																		</div>
																	</div>
																</div>
																<!--/span-->
																<div class="col-md-6">
																	<div class="form-group">
																		<label class="control-label col-md-3">State</label>
																		<div class="col-md-9">
																			<input type="text" class="form-control">
																		</div>
																	</div>
																</div>
																<!--/span-->
															</div>
															<!-- /Row -->
															<div class="row">
																<div class="col-md-6">
																	<div class="form-group">
																		<label class="control-label col-md-3">Post Code</label>
																		<div class="col-md-9">
																			<input type="text" class="form-control">
																		</div>
																	</div>
																</div>
																<!--/span-->
																<div class="col-md-6">
																	<div class="form-group">
																		<label class="control-label col-md-3">Country</label>
																		<div class="col-md-9">
																			<select class="form-control">
																				<option>Country 1</option>
																				<option>Country 2</option>
																			</select>
																		</div>
																	</div>
																</div>
																<!--/span-->
															</div>
															<!-- /Row -->
														</div>
														<div class="form-actions mt-10">
															<div class="row">
																<div class="col-md-6">
																	<div class="row">
																		<div class="col-md-offset-3 col-md-9">
																			<button type="submit" class="btn btn-success  mr-10">Submit</button>
																			<button type="button" class="btn btn-default">Cancel</button>
																		</div>
																	</div>
																</div>
																<div class="col-md-6"> </div>
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
					<!-- /Row -->
					
					<!-- Row -->
					<div class="row">
						<div class="col-md-12">
							<div class="panel panel-default card-view">
								<div class="panel-heading">
									<div class="pull-left">
										<h6 class="panel-title txt-dark">Read only</h6>
									</div>
									<div class="clearfix"></div>
								</div>
								<div class="panel-wrapper collapse in">
									<div class="panel-body">
										<div class="row">
											<div class="col-md-12">
												<div class="form-wrap">
													<form class="form-horizontal" role="form">
														<div class="form-body">
															<h6 class="txt-dark capitalize-font"><i class="zmdi zmdi-account mr-10"></i>Person's Info</h6>
															<hr class="light-grey-hr"/>
															<div class="row">
																<div class="col-md-6">
																	<div class="form-group">
																		<label class="control-label col-md-3">First Name:</label>
																		<div class="col-md-9">
																			<p class="form-control-static"> John </p>
																		</div>
																	</div>
																</div>
																<!--/span-->
																<div class="col-md-6">
																	<div class="form-group">
																		<label class="control-label col-md-3">Last Name:</label>
																		<div class="col-md-9">
																			<p class="form-control-static"> Doe </p>
																		</div>
																	</div>
																</div>
																<!--/span-->
															</div>
															<!-- /Row -->
															<div class="row">
																<div class="col-md-6">
																	<div class="form-group">
																		<label class="control-label col-md-3">Gender:</label>
																		<div class="col-md-9">
																			<p class="form-control-static"> Male </p>
																		</div>
																	</div>
																</div>
																<!--/span-->
																<div class="col-md-6">
																	<div class="form-group">
																		<label class="control-label col-md-3">Date of Birth:</label>
																		<div class="col-md-9">
																			<p class="form-control-static"> 24/05/1990 </p>
																		</div>
																	</div>
																</div>
																<!--/span-->
															</div>
															<!-- /Row -->
															<div class="row">
																<div class="col-md-6">
																	<div class="form-group">
																		<label class="control-label col-md-3">Category:</label>
																		<div class="col-md-9">
																			<p class="form-control-static"> Category1 </p>
																		</div>
																	</div>
																</div>
																<!--/span-->
																<div class="col-md-6">
																	<div class="form-group">
																		<label class="control-label col-md-3">Membership:</label>
																		<div class="col-md-9">
																			<p class="form-control-static"> Free </p>
																		</div>
																	</div>
																</div>
																<!--/span-->
															</div>
															<!-- /Row -->
															
															<div class="seprator-block"></div>
															
															<h6 class="txt-dark capitalize-font"><i class="zmdi zmdi-account-box mr-10"></i>address</h6>
															<hr class="light-grey-hr"/>
															<div class="row">
																<div class="col-md-6">
																	<div class="form-group">
																		<label class="control-label col-md-3">Address:</label>
																		<div class="col-md-9">
																			<p class="form-control-static"> 827 Deerfield Ave. 
																			Greenwood</p>
																		</div>
																	</div>
																</div>
															</div>
															<div class="row">
																<div class="col-md-6">
																	<div class="form-group">
																		<label class="control-label col-md-3">City:</label>
																		<div class="col-md-9">
																			<p class="form-control-static"> Los Angeles </p>
																		</div>
																	</div>
																</div>
																<!--/span-->
																<div class="col-md-6">
																	<div class="form-group">
																		<label class="control-label col-md-3">State:</label>
																		<div class="col-md-9">
																			<p class="form-control-static"> California</p>
																		</div>
																	</div>
																</div>
																<!--/span-->
															</div>
															<!-- /Row -->
															<div class="row">
																<div class="col-md-6">
																	<div class="form-group">
																		<label class="control-label col-md-3">Post Code:</label>
																		<div class="col-md-9">
																			<p class="form-control-static"> 457890 </p>
																		</div>
																	</div>
																</div>
																<!--/span-->
																<div class="col-md-6">
																	<div class="form-group">
																		<label class="control-label col-md-3">Country:</label>
																		<div class="col-md-9">
																			<p class="form-control-static"> USA </p>
																		</div>
																	</div>
																</div>
																<!--/span-->
															</div>
														</div>
														<div class="form-actions mt-10">
															<div class="row">
																<div class="col-md-6">
																	<div class="row">
																		<div class="col-md-offset-3 col-md-9">
																			<button type="submit" class="btn btn-info btn-icon left-icon  mr-10"> <i class="zmdi zmdi-edit"></i> <span>Edit</span></button>
																			<button type="button" class="btn btn-default">Cancel</button>
																		</div>
																	</div>
																</div>
																<div class="col-md-6"> </div>
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


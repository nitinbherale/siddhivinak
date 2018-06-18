<section id="home_other_ser">
	<div class="container">
		<div class="row">
			<?php list($services) = exc_qry("select * from services where status = 0"); 
			//echo count($services);
				for ($i=0; $i < count($services); $i++) { 
			?>
			<div class="col-md-3 home_ser1">
				<div class="icon">
					<i class="<?php echo $services[$i]['ser_icon']; ?>" aria-hidden="true"></i>
				</div>
				<h3><?php echo $services[$i]['ser_title']; ?></h3>
				<center><a class="btn custom-btn" href="#" >Read More</a></center>
			</div>
			<?php } 
			?>
			<!--<div class="col-md-3 home_ser1">
				<div class="icon">
					<i class="fa fa-cog faa-spin animated" aria-hidden="true"></i>
				</div>
				<h3>Online Pooja Booking</h3>
				<center><a class="btn custom-btn" href="#">Read More </a></center>
			</div>
			<div class="col-md-3 home_ser1">
				<div class="icon">
					<i class="fa fa-video-camera faa-tada animated" aria-hidden="true"></i>
				</div>
				<h3>Online Darshan</h3>
				<center><a class="btn custom-btn" href="#">Read More </a></center>
			</div>
			<div class="col-md-3 home_ser1">
				<div class="icon">
					<i class="fa fa-bell faa-ring animated" aria-hidden="true"></i>
				</div>
				<h3>Book Archana Pooja</h3>
				<center><a class="btn custom-btn" href="#">Read More</a></center>
			</div>
		-->
		</div>
	</div>
</section>
<style type="text/css">
    #home_other_ser{padding-top: 50px;padding-bottom: 10px;}
	#home_other_ser .home_ser1{border-right: 10px solid #fff;background: #f05636;padding-top: 10px;padding-bottom: 10px;}
	#home_other_ser .home_ser1 .icon{text-align: center;font-size: 75px;}
	#home_other_ser .home_ser1 .icon .fa{color: #fff;}
	#home_other_ser .home_ser1 h3 {color: #fff;text-align: center;font-weight: 600;margin-top: 12px;}
	#home_other_ser .home_ser1 .custom-btn{background: #fff;margin-top: 10px;margin-bottom: 15px;    transition: all 0.5s ease;border:1px solid #fff;}
	#home_other_ser .home_ser1 .custom-btn:hover{background: #f05636;margin-top: 10px;margin-bottom: 15px;color: #fff;border:1px solid #fff;}




	@media screen and (max-width: 767px){
		#home_other_ser .home_ser1{border-bottom: 5px solid #fff;}
		#home_other_ser .home_ser1{border-right: 0px;}
                #home_other_ser{padding-top: 5px;}

	}
</style>
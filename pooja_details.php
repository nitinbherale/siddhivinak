<?php include("header.php") ?>
<script src="sidebar/js/jquery.contact-buttons.js"></script>
<script src="sidebar/js/demo.js"></script>
<link rel="stylesheet" href="sidebar/css/contact-buttons.css">
<script src="https://use.fontawesome.com/966db455dc.js"></script>

<section class="page_titlle" style="background :rgba(204, 204, 204, 0.44);height: 170px;">

</section>

<section id="live_casting_section">
	<div class="container">
		<div class="row">
			<div class="col-md-9">
				<h2 class="section-title wow fadeInUp ng-binding" data-wow-delay="0.4s">Pooja Details</h2>
	            <div class="pooja_details" style="overflow-x:auto;">
	            	<table class="table table-hover table-bordered table-responsive">
					  <thead>
					    <tr>
					      <th scope="col">#</th>
					      <th scope="col">Types Of Poojas</th>
					      <th scope="col">Reporting Time</th>
					      <th scope="col">Frequency</th>
					      <th scope="col">Duration</th>
					      <th scope="col">Amount</th>
					       <th scope="col">Person Allowed</th>
					    </tr>
					  </thead>
					  <tbody>
					  	<?php list($pooja_details) = exc_qry("select * from pooja_details where status = 0"); 
				for ($i=0; $i < count($pooja_details); $i++) { ?>
					    <tr>
					      <th scope="row"><?php echo $i+1; ?></th>
					      <td><?php echo $pooja_details[$i]['type_of_pooja']; ?></td>
					      <td><?php echo $pooja_details[$i]['reporting_time']; ?></td>
					      <td><?php echo $pooja_details[$i]['frequency']; ?></td>
					      <td><?php echo $pooja_details[$i]['duration']; ?></td>
					      <td><?php echo $pooja_details[$i]['amount']; ?>/-</td>
					      <td><?php echo $pooja_details[$i]['persons']; ?></td>
					    </tr>	
					    <?php } ?>			   
					  </tbody>
					</table>
	            </div>
                
			</div><!--col-md-9-->
			<div class="col-md-3 col-lg-3 col-xl-3 blog-sidebar">
				<h2 class="widget-title" style="text-align: center;">Advertisement</h2>
 
				<div class="ad_images">
					 
					<img src="images/ad7.jpg" class="img-responsive">
					
					<img src="images/agarbatti.jpg" class="img-responsive">
				</div>
			</div><!--col-md-3-->
		</div>
	</div>
</section>

<?php include("main_footer.php") ?>
<?php include("footer.php") ?>

<style type="text/css">
	#live_casting_section{padding-top: 50px;padding-bottom: 50px;}
	#live_casting_section .table-bordered>thead>tr>th{color: #000;}
	#live_casting_section .table>tbody>tr>td{color: #000;}

	.page-area {background: url(images/slider/2.jpg);background-repeat: no-repeat;background-size: cover;background-position: top center;position: relative;height: 320px;}
    .breadcumb-overlay {position: absolute;background: rgba(10, 27, 40, 0.6) none repeat scroll 0 0;top: 0;width: 100%;left: 0;height: 100%;}
    .section-headline.white-headline h3 {color: #fff;}
.section-headline h3 {display: inline-block;font-size: 30px;font-weight: 700;text-transform: uppercase;line-height: 35px;margin-top: 170px;}
.ad_images h4{text-align: center;background: #f7f7f7;padding: 5px;color: #f05737;font-weight: 600;}
.ad_images img{width: 100%;margin: 10px auto;}

@media screen and (max-width: 768px){
    h2.widget-title {margin-bottom: 20px;margin-top: 20px;}
}
</style>
<?php include("header.php") ?>

<script src="sidebar/js/jquery.contact-buttons.js"></script>
<script src="sidebar/js/demo.js"></script>
<link rel="stylesheet" href="sidebar/css/contact-buttons.css">
<script src="https://use.fontawesome.com/966db455dc.js"></script>

<div class="page-area">
    <div class="breadcumb-overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="breadcrumb text-center">
                            <div class="section-headline white-headline text-center">
                                <h3>Tenders</h3>
                             </div>
                    </div>
            </div>
        </div>
    </div>
</div>

<section id="live_casting_section">
	<div class="container">
		<div class="row">
			<div class="col-md-9">
				<h2 class="section-title wow fadeInUp ng-binding" data-wow-delay="0.4s">Tenders</h2>
	            <div class="pooja_details" style="overflow-x:auto;">

	            	<!-- <form class="form-inline sselect_fm">
                       <label class="my-1 mr-2" for="inlineFormCustomSelectPref">Tender Department</label>
                       <select class="custom-select my-1 mr-sm-2 form-control">
                       <option selected>-Any-</option>
                       <option value="1">Acct. Department</option>
                       <option value="2">Admin Department</option>
                       <option value="3">Canteen Dept.</option>
                       <option value="3">Construction Dept.</option>
                        <option value="3">Internet Audit</option>
                        <option value="3">Mechanical</option>
                        <option value="3">Purchase Dept.</option>
                      </select>
                      <label class="my-1 mr-2" for="inlineFormCustomSelectPref">Tender Type</label>
                       <select class="custom-select my-1 mr-sm-2 form-control">
                       <option selected>-Any-</option>
                       <option value="1">E-Tender</option>
                       <option value="2">Online Tender</option>
                       <option value="3">Open Tender</option>
                       <option value="3">Quotation</option>
                       <option value="3">Re E-Tender</option>
                      </select>
                    </form> -->
	            	<table class="table table-hover table-responsive">
					  <thead style="background: #ddd;">
					    <tr>
					      <th scope="col">No.</th>
					      <th scope="col">Title</th>
					      <th scope="col">Tender Type</th>
					      <th scope="col">Tender Ref No.</th>
					       <th scope="col">Date Of Issue</th>
					        <th scope="col">Download</th>
					    </tr>
					  </thead>
					  <tbody>
					  	<?php list($tenders) = exc_qry("select * from tenders where status = 0 order by id desc"); 
			//echo count($services);
				for ($i=0; $i < count($tenders); $i++) { 
			?>
					    <tr>
					      <th scope="row"><?php echo $i+1; ?></th>
					      <td><?php echo $tenders[$i]['tender_title']; ?></td>
					      <td><?php echo $tenders[$i]['tender_type']; ?></td>
					      <td><?php echo $tenders[$i]['tender_refe_no']; ?></td>
					       <td><?php echo $tenders[$i]['issue_date']; ?></td>
					     <td><center><a href="upload/tenders/<?php echo $tenders[$i]['tender_file'];?>" download><i class="fa fa-download"></i></a></center></td>	
					    </tr>
					<?php } ?>
					    <!-- <tr>
					      <th scope="row">24</th>
					      <td>Tender for Expression of Interest of Government Valuer</td>
					      <td>E-Tender</td>
					      <td></td>
					       <td>26/04/2018</td>
					      <td><center><a href="#"><i class="fas fa-download"></i></a></center></td>
					    </tr> -->
					  </tbody>
					</table>
	            </div>
                
			</div><!--col-md-9-->
			<div class="col-md-3 col-lg-3 col-xl-3 blog-sidebar">
				<h2 class="widget-title" style="text-align: center;">Advertisement</h2>
 
				<div class="ad_images">
					 
					<img src="images/ad7.jpg" class="img-responsive">
					
					<img src="images/ad4.png" class="img-responsive">
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

	.page-area {background: url(images/tender.jpg);background-repeat: no-repeat;background-size: cover;background-position: top center;position: relative;height: 320px;}
    .breadcumb-overlay {position: absolute;background: rgba(10, 27, 40, 0.6) none repeat scroll 0 0;top: 0;width: 100%;left: 0;height: 100%;}
    .section-headline.white-headline h3 {color: #fff;}
.section-headline h3 {display: inline-block;font-size: 30px;font-weight: 700;text-transform: uppercase;line-height: 35px;margin-top: 170px;}
.ad_images h4{text-align: center;background: #f7f7f7;padding: 5px;color: #f05737;font-weight: 600;}
.ad_images img{width: 100%;margin: 10px auto;}
.table>thead>tr>th{color: #000;}
.sselect_fm{padding-bottom: 10px;}
.sselect_fm .form-control{border-radius: 25px;}

@media screen and (max-width: 768px){
    h2.widget-title {margin-bottom: 20px;margin-top: 20px;}
}
</style>
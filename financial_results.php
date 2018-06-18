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
                                <h3>Financial Results</h3>
                             </div>
                    </div>
            </div>
        </div>
    </div>
</div>


<section id="financial_results">
	<div class="container">
		<div class="full-width"><div class="vc_row-fluid">
	<div class="vc_col-sm-12 wpb_column vc_column_container ">
		<div class="wpb_wrapper">
			
	<div class="wpb_text_column wpb_content_element ">
		<div class="wpb_wrapper">
			<section class="piller-of-islam section-padding">
	<div class="container">
		<div class="row">

			<h2 class="section-title wow fadeInUp" data-wow-delay="0.2s">Financial Results</h2><!-- /.section-title -->
			<div class="section-detail wow fadeInUp" data-wow-delay="0.4s">Arguably the most popular & significant places of worship are the Shree Siddhivinayak Ganapati Mandir situated at Prabhadevi. This temple was first consecrated on Thursday 19th November 1801, a fact that is noted in government records.</div><!-- /.section-detail -->


			<div class="col-md-10 centered">
				<div class="piler-of-islam">
					<?php list($result) = exc_qry("select * from financial_result where status = 0 order by year limit 5"); 
			//echo count($services);
				for ($i=0; $i < count($result); $i++) { 
			?>
					<div class="col-5">
						<a href="upload/<?php echo $result[$i]['document']; ?>" target="_blank">
							<div class="item item-<?php echo $i+1 ?> wow fadeInUp" data-wow-delay="0.5s">
								<div class="item-element">
	                                  <i class="fa fa-book" aria-hidden="true"></i>
									<div class="text">
										<?php echo $result[$i]['year']; ?>
									</div>
								</div>
							</div>
						</a>
					</div><!-- /.col-md-3 -->
				<?php } ?>
				</div>
			</div>

		</div><!-- /.row -->
				<div class="curve-line hidden-xs"></div>
	</div><!-- /.container -->
		</section><!-- /#piller-of-islam -->
		

		</div> 
	</div> 
	</div>
</section>


<?php include("main_footer.php") ?>
<?php include("footer.php") ?>



<style type="text/css">
	#financial_results{background: #7f7f7;padding-top: 60px;padding-bottom: 80px;}

	.page-area {background: url(images/slider/5.jpg);background-repeat: no-repeat;background-size: cover;background-position: top center;position: relative;height: 320px;}
    .breadcumb-overlay {position: absolute;background: rgba(10, 27, 40, 0.6) none repeat scroll 0 0;top: 0;width: 100%;left: 0;height: 100%;}
    .section-headline.white-headline h3 {color: #fff;}
   .section-headline h3 {display: inline-block;font-size: 30px;font-weight: 700;text-transform: uppercase;line-height: 35px;margin-top: 170px;}
   .item .fa{font-size: 34px;}
</style>
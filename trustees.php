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
                                <h3>Trustees</h3>
                             </div>
                    </div>
            </div>
        </div>
    </div>
</div>

<!-- Blog Heading end -->
<section id="trustees_section">
  <div class="container">
	<div class="row">
		<div class="col-md-9 md-bm50">

			<h2 class="section-title wow fadeInUp" data-wow-delay="0.4s">Trustees </h2><!-- /.section-title -->
		<div class="section-detail wow fadeInUp" data-wow-delay="0.6s">
            <?php list($abt_trustee) = exc_qry("select * from about_trustee where id = 1");
            echo $abt_trustee[0]['description'];
             ?>
        </div><!-- /.section-detail -->

			<div id="primary-area">			
                 <?php list($trustee) = exc_qry("SELECT * FROM trustees where status = 0 order by seniority desc ,trustee_id");
             $round = ceil(count($trustee)/4);// no of rows 
             $d =0;
             for ($i=1; $i <= $round; $i++) {   ?>      
                <div class="row">
                    <?php for ($a=$d; $a < 4*$i ; $a++) { 
                        if($a<count($trustee)){ ?>
                    <div class="col-md-3">
                        <div class="trustee_dv thumbnail">
                            <img src="images/trustees/<?php echo $trustee[$a]['trustee_image']; ?>">
                            <div class="caption">
                                <p class="name"><?php echo $trustee[$a]['trustee_name'] ?></p>
                                <p>(<?php echo $trustee[$a]['trustee_work'] ?>)</p>
                            </div>
                        </div>
                    </div>
                    <?php } } $d = 4*$i; ?>
                </div>
            <?php } ?>

                <div class="row">
                    <center><img src="images/vivo_ad.jpg" class="img-responsive"></center>
                </div>
			</div><!--primary_area-->
		</div><!-- col-md-9 md-bm50 -->
			<div class="col-md-3 blog-sidebar">
				<h2 class="widget-title" style="text-align: center;">Advertisement</h2>

				<div class="ad_images">
					
					<img src="images/ad7.jpg" class="img-responsive">
					
					<img src="images/ad4.png" class="img-responsive">
					
					<img src="images/agarbatti.jpg" class="img-responsive">
				</div>
			</div>
		</div>
	</div>
</section>
<?php include("main_footer.php") ?>
<?php include("footer.php") ?>


<style type="text/css">
	#trustees_section {padding-top: 60px;padding-bottom: 50px;background: #fff;}
	.thumbnail .caption{text-align: center;font-weight: 600;text-transform: uppercase;background:linear-gradient(rgb(255, 255, 255) 0%, rgb(255, 228, 184) 100%);}
    .thumbnail .caption p{margin-bottom: 0px;color: #000;}
    .thumbnail .caption .name{color: #f05737;font-weight: 800;font-size: 16px;padding-bottom: 5px;padding-top: 5px;}
	.top_bar_heading{background: url("images/internal_banner.jpg");height: 250px;}
	.page-area {background: url(images/slider/2.jpg);background-repeat: no-repeat;background-size: cover;background-position: top center;position: relative;height: 320px;}
    .breadcumb-overlay {position: absolute;background: rgba(10, 27, 40, 0.6) none repeat scroll 0 0;top: 0;width: 100%;left: 0;height: 100%;}
    .section-headline.white-headline h3 {color: #fff;}
.section-headline h3 {display: inline-block;font-size: 30px;font-weight: 700;text-transform: uppercase;line-height: 35px;margin-top: 170px;}
.ad_images h4{text-align: center;background: #f7f7f7;padding: 5px;color: #f05737;font-weight: 600;}
.ad_images img{width: 100%;margin: 10px auto;}

@media screen and (max-width: 768px){
    h2.widget-title {margin-bottom: 10px; margin-top: 42px;}
}
</style>
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
                                <h3>Temple Activities</h3>
                             </div>
                    </div>
            </div>
        </div>
    </div>
</div>


<section id="activities_section">
	<div class="container">
		<div class="row">
			<div class="col-md-9 col-lg-9 col-xl-9">
				
			
	<h2 class="section-title wow fadeInUp" data-wow-delay="0.4s">Temple Activities</h2><!-- /.section-title -->
	<div class="section-detail wow fadeInUp" data-wow-delay="0.6s">Temple Trust utilizes its resources mainly on following four categories of activities.</div><!-- /.section-detail -->
	<div class="sermons">
	<?php list($tmp_activity) = exc_qry("select * from temple_activities where status = 0 order by id desc"); 
		for ($i=0; $i < count($tmp_activity); $i++) { 
	?>	 
		<div class="col-md-6 col-sm-6">
			<div class="portal wow fadeInUp shine_hover" data-wow-delay="0.6s">
			  <figure>
			  <img width="150" height="150" src="images/activities/<?php echo $tmp_activity[$i]['image']; ?>" class="attachment-thumbnail size-thumbnail wp-post-image" alt="" srcset="images/activities/<?php echo $tmp_activity[$i]['image']; ?> 150w, images/activities/<?php echo $tmp_activity[$i]['image']; ?> 300w, images/activities/<?php echo $tmp_activity[$i]['image']; ?> 100w" sizes="(max-width: 150px) 100vw, 150px" /></figure>
			  <div class="content"><a href="temple_activities_details.php?rg=<?php echo $tmp_activity[$i]['id'] ?>"> <?php echo $tmp_activity[$i]['title']; ?>	</a>
			  	<p><?php echo substr($tmp_activity[$i]['description'],0,100)."..."; ?></p>
			  	
				</div>
			
			</div>
		</div>
	<?php } ?>
	 
		<!-- <div class="col-md-6 col-sm-6">
			<div class="portal wow fadeInUp" data-wow-delay="0.6s">
				<img width="150" height="150" src="images/activities/activities1.jpg" class="attachment-thumbnail size-thumbnail wp-post-image" alt="" srcset="images/activities/activities1.jpg 150w, images/activities/activities1.jpg 300w, images/activities/activities1.jpg 100w" sizes="(max-width: 150px) 100vw, 150px" /><div class="content"><a href="index.php">Cultural Activities : </a>
					<p>Cultural programs during Maghi and Bhadrapad Ganeshotsav	</p>
				
				</div>
			
			</div>
		</div> -->

	
</div>
<center><img src="images/vivo_ad.jpg" class="img-responsive"></center>

		
			</div>
			<div class="col-md-3 col-lg-3 col-xl-3 blog-sidebar">
				<h2 class="widget-title" style="text-align: center;">Advertisement</h2>

				<div class="ad_images">
					 
					
					
					<img src="images/ad4.png" class="img-responsive">
					
					<img src="images/agarbatti.jpg" class="img-responsive">
					<img src="images/ad7.jpg" class="img-responsive">
				</div>
			</div>
		</div>
	</div>
</section>

<?php include("main_footer.php") ?>
<?php include("footer.php") ?>

<style type="text/css">
	#activities_section{padding-top: 50px;background: #fff;padding-bottom: 50px;}
	#activities_section .sermons .portal img{float: none;width: 100%;border-radius: 0px;height: auto;}
	#activities_section .sermons .portal .content {display: block;text-align: center;background: linear-gradient(rgb(255, 255, 255) 0%, rgb(255, 228, 184) 100%);margin-bottom: 0px;padding-top: 15px;padding-bottom: 15px;}
	#activities_section .sermons .portal .content p{margin-bottom: 0px;}
	#activities_section .sermons .portal{padding: 0px;}
	.home .portal a { font-size: 22px; line-height: 33px;color: #f05737;border-bottom: 0px solid;
    font-family: roboto;}
	.page-area {background: url(images/slider/1.jpg);background-repeat: no-repeat;background-size: cover;background-position: top center;position: relative;height: 320px;}
    .breadcumb-overlay {position: absolute;background: rgba(10, 27, 40, 0.6) none repeat scroll 0 0;top: 0;width: 100%;left: 0;height: 100%;}
    .section-headline.white-headline h3 {color: #fff;}
.section-headline h3 {display: inline-block;font-size: 30px;font-weight: 700;text-transform: uppercase;line-height: 35px;margin-top: 170px;}

.ad_images h4{text-align: center;background: #f7f7f7;padding: 5px;color: #f05737;font-weight: 600;}
.ad_images img{width: 100%;margin: 10px auto;}

.shine_hover figure{position: relative;}
.shine_hover figure {
	width: 100%;
	height: auto;
	margin: 0;
	padding: 0;
	background: #fff;
	overflow: hidden;
}
.shine_hover figure::before {
	position: absolute;
	top: 0;
	left: -75%;
	z-index: 2;
	display: block;
	content: '';
	width: 50%;
	height: 100%;
	background: -webkit-linear-gradient(left, rgba(255,255,255,0) 0%, rgba(255,255,255,.3) 100%);
	background: linear-gradient(to right, rgba(255,255,255,0) 0%, rgba(255,255,255,.3) 100%);
	-webkit-transform: skewX(-25deg);
	transform: skewX(-25deg);
}
.shine_hover figure:hover::before {
	-webkit-animation: shine .75s;
	animation: shine .75s;
}
@-webkit-keyframes shine {
	100% {
		left: 125%;
	}
}
@keyframes shine {
	100% {
		left: 125%;
	}
}


@media screen and (max-width: 768px){
	h2.widget-title {margin-bottom: 10px; margin-top: 42px;}
}
</style>
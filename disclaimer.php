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
                                <h3>Disclaimer</h3>
                             </div>
                    </div>
            </div>
        </div>
    </div>
</div>

<section id="about_top_section">
	<div class="container">
		<div class="row">
         <h2 class="section-title wow fadeInUp" data-wow-delay="0.4s">Disclaimer</h2>

			<div class="short_info">
				
				<div class="col-md-8">
					<?php list($disclaimer) = exc_qry("select * from disclaimer where id = 1");
					echo $disclaimer[0]['disclaimer']; 
			?>
						<center><img src="images/vivo_ad.jpg" class="img-responsive"></center>
				</div>

			</div>

			<div class="col-md-4">
				<div class="ad_module">
					<h2 class="widget-title" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;text-align:center;">Adverisement</h2><hr />
					<img src="images/ad4.png" class="img-responsive">
				</div>
			</div>

		</div><!--row-->
	</div><!--container-->
</section>


	

<?php include("main_footer.php") ?>
<?php include("footer.php") ?>

<style type="text/css">
	.page-area {background: url(images/slider/7.jpg);background-repeat: no-repeat;background-size: cover;background-position: top center;position: relative;height: 320px;}
    .breadcumb-overlay {position: absolute;background: rgba(10, 27, 40, 0.6) none repeat scroll 0 0;top: 0;width: 100%;left: 0;height: 100%;}
    .section-headline.white-headline h3 {color: #fff;}
.section-headline h3 {display: inline-block;font-size: 30px;font-weight: 700;text-transform: uppercase;line-height: 35px;margin-top: 170px;}
 #about_top_section{padding-top: 50px;padding-bottom: 40px;}

 @media screen and (max-width: 768px){
    h2.widget-title {margin-bottom: 10px; margin-top: 42px;}
}
</style>
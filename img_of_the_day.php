<?php include("header.php") ?>
<script src="sidebar/js/jquery.contact-buttons.js"></script>
<script src="sidebar/js/demo.js"></script>
<link rel="stylesheet" href="sidebar/css/contact-buttons.css">
<script src="https://use.fontawesome.com/966db455dc.js"></script>

<section class="page_titlle" style="background :rgba(204, 204, 204, 0.44);height: 170px;">

</section>


<section id="img_day_section">
	<div class="container">
		<div class="row">
			<div class="col-md-9 col-lg-9">
				<!--<img src="images/gallery/1528887117_4.jpg" class="img-responsive">-->
				<div class="img_div">
					 <figure>
					  <img src="images/gallery/1528887117_4.jpg" class="img-responsive">
					 </figure>
				</div>
			</div>
			<div class="col-md-3 col-lg-3">
				<div class="ad_v">
					<img src="images/agarbatti.jpg" class="img-responsive">
					<img src="images/agarbatti.jpg" class="img-responsive" style="margin-top: 15px;">
				</div>
			</div>
		</div>
	</div>
</section>
<?php include("main_footer.php") ?>
<?php include("footer.php") ?>

<style type="text/css">
	#img_day_section {padding: 25px 0 25px;}
	#img_day_section .img_div figure{width: 100%;height: 470px;display: flex;justify-content: center;align-items: center;overflow: hidden;margin: 0;padding: 0;}
	#img_day_section .img_div img{flex-shrink: 0;max-width: 100%;max-height: 100%;-webkit-flex-shrink :0;border:10px solid #eee;}
	.img_div figure img {
	-webkit-transform: scale(1);
	transform: scale(1);
	-webkit-transition: .3s ease-in-out;
	transition: .3s ease-in-out;
}
  .img_div figure:hover img {
	-webkit-transform: scale(1.3);
	transform: scale(1.3);
}

</style>
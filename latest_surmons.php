<div class="vc_row-full-width latest_sur"></div><div data-vc-full-width="true" data-vc-full-width-init="false" data-vc-stretch-content="true" class="vc_row-fluid  vc_row-no-padding"><div class="container">
	<div class="vc_col-sm-12 wpb_column vc_column_container ">
		<div class="wpb_wrapper">
			
	<h2 class="section-title wow fadeInUp" data-wow-delay="0.4s">Temple Activities</h2><!-- /.section-title -->
	<div class="section-detail wow fadeInUp" data-wow-delay="0.6s">Temple Trust utilizes its resources mainly on following four categories of activities.</div><!-- /.section-detail -->
	<div class="sermons">
	<?php list($tmp_activity) = exc_qry("select * from temple_activities where status = 0 order by id desc"); 
				for ($i=0; $i < count($tmp_activity); $i++) { 
			?>	 
		<div class="col-md-6 col-sm-6">
			<div class="portal wow fadeInUp" data-wow-delay="0.6s">
			  <img width="180" height="150" src="images/activities/<?php echo $tmp_activity[$i]['image']; ?>" class="attachment-thumbnail size-thumbnail wp-post-image" alt="" srcset="images/activities/<?php echo $tmp_activity[$i]['image']; ?> 150w, images/activities/<?php echo $tmp_activity[$i]['image']; ?> 300w, images/activities/<?php echo $tmp_activity[$i]['image']; ?> 100w" sizes="(max-width: 150px) 100vw, 150px" /><div class="content"><a href="temple_activities_details.php?rg=<?php echo $tmp_activity[$i]['id'] ?>"><?php echo $tmp_activity[$i]['title']; ?>:	</a>
			  	<p><?php echo substr($tmp_activity[$i]['description'], 0,30)." ..."; ?></p>  	
				</div>
				<!--<div class="post-date">
					Post By Bablu | Post On 07 Oct 2016				
				</div>-->
				<a class="btn btn-primary" href="temple_activities_details.php?rg=<?php echo $tmp_activity[$i]['id'] ?>" role="button">Read more</a>
				
			</div>
		</div>
	 <?php } ?>
		
	 
		
		
	
</div>

		</div> 
	</div> 
</div></div>

<style type="text/css">
	.latest_sur{padding-top: 15px;padding-bottom: 15px;}
	.sermons .portal {padding: 0px;padding-bottom: 0px;}
	.sermons .portal .btn{background: #f05737;float: right;margin-right: 12px; font-size: 15px;line-height: 18px;}
	.sermons .portal img{border-radius: 0px;}
	.portal .btn-primary{color: #fff;}

	@media screen and (max-width: 768px){
		.sermons .portal .btn{background: #f05737;float: none;margin-right: 12px; font-size: 15px;line-height: 18px;width: 100%;}
	}
</style>
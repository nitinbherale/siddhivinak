<div class="vc_row-full-width"></div><div data-vc-full-width="true" data-vc-full-width-init="false" data-vc-stretch-content="true" class="vc_row-fluid vc_row-no-padding"><div class="container">
	<div class="vc_col-sm-12 wpb_column vc_column_container ">
		<div class="wpb_wrapper">
			<div class="vc_empty_space"   style="height: auto;" ><span class="vc_empty_space_inner"></span></div>


	<h2 class="section-title wow fadeInUp" data-wow-delay="0.4s" style="padding-top: 20px;"> News </h2><!-- /.section-title -->
		<div class="section-detail wow fadeInUp" data-wow-delay="0.6s">Sankashti Chaturthi is an auspicious day dedicated to Ganesha. This day is observed in every lunar month of the Hindu calendar on the fourth day of Krishna Paksha</div><!-- /.section-detail -->
				 
<?php list($news) = exc_qry("select * from news where status = 0 order by news_id desc"); 
			//echo count($services);
				for ($i=0; $i < 3; $i++) { 
			?>
		<div class="col-md-4 col-lg-4">
			<div class="all-event wow fadeInUp" data-wow-delay="0.6s">
				<div class="event-post">
					<div class="feature-img">
						<img width="300" height="179" src="images/news/<?php echo $news[$i]['image']; ?>" class="attachment-medium size-medium wp-post-image" alt="" srcset="images/news/<?php echo $news[$i]['image']; ?> 300w, images/news/<?php echo $news[$i]['image']; ?> 570w" sizes="(max-width: 300px) 100vw, 300px" />					
					</div>
					
					<div class="events-date">
						<span class="event-date"><?php echo date('d', strtotime($news[$i]['news_date'])); ?></span><br>
						<span class="event-month"><?php echo date('F', strtotime($news[$i]['news_date'])); ?></span>
					</div>
					
					<h2 class="uppercase"><a href="news_details.php?de=<?php echo $news[$i]['news_id']; ?>" title="Sankashta Chaturthi"><?php echo $news[$i]['news_title']; ?></a></h2>
					<div class="event-period">
						<div class="row">
							<p class="col-md-10 period-session">
								<i class="fa fa-calendar-o"></i> <?php echo $news[$i]['news_date']; ?> <br>
								</p>
							<p class="col-md-2 comments-share">
							<i class="fa fa-share-alt">
							    <span class="social-button">
								<a href="http://www.facebook.com/" title="Share this post on Facebook!" onclick="window.open(this.href); return false;"><i class="fa fa-facebook"></i></a>	
							    <a href="https://plus.google.com/" title="Share this post on google plus!" target="_blank"><i class="fa fa-google-plus"></i></a>
								<a class="linkedin" href="http://www.linkedin.com/" title="Share on LinkedIn" rel="external nofollow" target="_blank"><i class="fa fa-linkedin"></i></a>
								<a class="pinterest" href="http://pinterest.com/" title="Pinterest" rel="nofollow" target="_blank"><i class="fa fa-pinterest"></i></a>
								</span>
								</i>

							</p><!-- /.comments-share -->
						</div>
					</div><!-- /.event-period -->

					<div class="event-description"><?php echo substr($news[$i]['news_description'],0,130)." ..."; ?></div>
						 <div class="clearfix"></div>
						<div class="read-more"><a href="news_details.php?de=<?php echo $news[$i]['news_id']; ?>">Read More</a></div>
				</div>
			</div>
		</div>
		<?php } ?>
	 
	<!--<div class="col-md-4 col-lg-4">
		<div class="all-event wow fadeInUp" data-wow-delay="0.6s">
			<div class="event-post">
					<div class="feature-img">
						<img width="300" height="179" src="images/uploads/DSC_0588.jpg" class="attachment-medium size-medium wp-post-image" alt="" srcset="images/uploads/DSC_0588.jpg 300w, images/uploads/DSC_0588.jpg 570w" sizes="(max-width: 300px) 100vw, 300px" />	
					</div>
					
										<div class="events-date">
						<span class="event-date">5</span><br>

						<span class="event-month">Feb</span>
					</div>
					
					<h2 class="uppercase"><a href="index.php" title="Spacial Monazat">Sankashti Chaturthi</a></h2>
					<div class="event-period">
						<div class="row">
							<p class="col-md-10 period-session">
								<i class="fa fa-clock-o"></i> 3 Hours <br>
								<i class="fa fa-map-marker"></i>  S.K.Bole Marg, Prabhadevi, Mumbai 400028</p>
							<p class="col-md-2 comments-share">
								<i class="fa fa-share-alt">
									<span class="social-button">
										<a href="http://www.facebook.com/" title="Share this post on Facebook!" onclick="window.open(this.href); return false;"><i class="fa fa-facebook"></i></a>
										<a href="https://plus.google.com/" title="Share this post on google plus!" target="_blank"><i class="fa fa-google-plus"></i></a>
										<a class="linkedin" href="http://www.linkedin.com/" title="Share on LinkedIn" rel="external nofollow" target="_blank"><i class="fa fa-linkedin"></i></a>
										<a class="pinterest" href="http://pinterest.com/" title="Pinterest" rel="nofollow" target="_blank"><i class="fa fa-pinterest"></i></a>
									</span>
								</i>

							</p><!-- /.comments-share 
						</div>
					</div><!-- /.event-period

					<div class="event-description">
						Sankashti Chaturthi is an auspicious day dedicated to Ganesha. This day is observed in every lunar month of the Hindu calendar on the fourth day of Krishna Paksha</div>
						<div class="clearfix"></div>
						<div class="read-more"><a href="#">Read More</a></div>
				</div>
			</div>
		</div> 
	 
	<div class="col-md-4 col-lg-4">
		<div class="all-event wow fadeInUp" data-wow-delay="0.6s">
			<div class="event-post">
										<div class="feature-img">
						<img width="300" height="199" src="images/uploads/DSC_0587.jpg" class="attachment-medium size-medium wp-post-image" alt="" srcset="images/uploads/DSC_0587.jpg 300w, images/uploads/DSC_0587.jpg 600w, images/uploads/DSC_0587.jpg 800w" sizes="(max-width: 300px) 100vw, 300px" />					</div>
					
										<div class="events-date">
						<span class="event-date">17</span><br>

						<span class="event-month">March</span>
					</div>
					
					<h2 class="uppercase"><a href="index.php" title="Open Rededication 1">Vinayaki Chaturthi</a></h2>
					<div class="event-period">
						<div class="row">
							<p class="col-md-10 period-session">
								<i class="fa fa-clock-o"></i> 3 Hours <br>
								<i class="fa fa-map-marker"></i> S.K.Bole Marg, Prabhadevi, Mumbai 400028</p>
							<p class="col-md-2 comments-share">
								<i class="fa fa-share-alt">
									<span class="social-button">
										<a href="http://www.facebook.com/" title="Share this post on Facebook!" onclick="window.open(this.href); return false;"><i class="fa fa-facebook"></i></a>
										<a href="https://plus.google.com/" title="Share this post on google plus!" target="_blank"><i class="fa fa-google-plus"></i></a>
										<a class="linkedin" href="http://www.linkedin.com/" title="Share on LinkedIn" rel="external nofollow" target="_blank"><i class="fa fa-linkedin"></i></a>
										<a class="pinterest" href="http://pinterest.com/" title="Pinterest" rel="nofollow" target="_blank"><i class="fa fa-pinterest"></i></a>
									</span>
								</i>

							</p><!-- /.comments-share 
						</div>
					</div><!-- /.event-period 

					<div class="event-description">
						Sankashti Chaturthi is an auspicious day dedicated to Ganesha. This day is observed in every lunar month of the Hindu calendar on the fourth day of Krishna Paksha</div>
						<div class="clearfix"></div>
						<div class="read-more"><a href="#">Read More</a></div>
				</div>
			</div>
		</div>-->

	
	
		</div> 
	</div> 
</div></div>

<style type="text/css">
	.all-event{clear: both;}
</style>
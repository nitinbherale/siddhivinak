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
                                <h3>Recents News</h3>
                             </div>
                    </div>
            </div>
        </div>
    </div>
</div>


<section id="news_section">
	<div class="container">
		<div class="row">
			<div class="col-md-9">
				<div class="row">
					<?php list($news) = exc_qry("select * from news where status = 0 order by news_id desc"); 
					list($more_news) = exc_qry("select * from news where status=0 order by news_id desc limit 5");
			//echo count($services);
				for ($i=0; $i < count($news); $i++) { 
			?>
				    <div class="col-md-6">
				    	<article id="post-175" class="post-175 post type-post status-publish format-standard has-post-thumbnail hentry">
				    		        <figure>
									<img width="828" height="800" src="images/news/<?php echo $news[$i]['image']; ?>" class="attachment-full size-full wp-post-image" alt="" srcset="images/news/<?php echo $news[$i]['image']; ?> 828w, images/news/<?php echo $news[$i]['image']; ?> 600w, images/news/<?php echo $news[$i]['image']; ?> 300w, images/news/<?php echo $news[$i]['image']; ?> 768w" sizes="(max-width: 828px) 100vw, 828px" />
								  </figure>

									<header class="entry-header">
										<h1 class="entry-title"><a href="news_details.php?de=<?php echo $news[$i]['news_id']; ?>"><?php echo substr($news[$i]['news_title'],0,50)." ..."; ?></a></h1>

										<div class="entry-meta">
											<span class="news-author">
                                           <span class="tm"><i class="fa fa-calendar-o"></i><?php echo  date('d F Y', strtotime($news[$i]['news_date'])); ?></span>  <!-- | 
                                           <span class="usr"><i class="fa fa-user"></i>Author</span> | <span class="cmnt"><i class="fa fa-comments-o"></i>0 Comment</span> -->
                                          </span>
										</div><!-- .entry-meta -->
									</header><!-- .entry-header -->

									<div class="entry-content">
										<?php echo substr($news[$i]['news_description'],0,200)." ..."; ?>
										<div class="clearfix"></div>
										<div class="read-more"><a href="news_details.php?de=<?php echo $news[$i]['news_id']; ?>">Read More</a></div>
									</div><!-- .entry-content -->

								</article>
				    </div>

				    <?php } ?>
				    

				    <!-- <div class="col-md-6">
				    	<article id="post-175" class="post-175 post type-post status-publish format-standard has-post-thumbnail hentry category-muslim">
									<img width="828" height="800" src="images/news3.jpg" class="attachment-full size-full wp-post-image" alt="" srcset="images/news3.jpg 828w, images/news3.jpg 600w, images/news3.jpg 300w, images/news3.jpg 768w" sizes="(max-width: 828px) 100vw, 828px" />									
									<header class="entry-header">
										<h1 class="entry-title"><a href="index.php">History Of Siddhivinayak Temple </a></h1>

										<div class="entry-meta">
											<span class="news-author">
                                            <span class="tm"><i class="fa fa-calendar-o"></i>10 Feb 2018</span>  | <span class="usr"><i class="fa fa-user"></i>Author</span> | <span class="cmnt"><i class="fa fa-comments-o"></i><a href="#">0 Comment</a></span>
                                        </span>
										</div><!-- .entry-meta -->
									</header><!-- .entry-header 

									<div class="entry-content">
										Shree Ganesh is the first to be worshipped before beginning any new project or venture as he is the destroyer of obstacles (Vighnaharta). This is Shree Siddhivinayak Ganapati Temple at Prabhadevi in Mumbai..

										<div class="clearfix"></div>
										<div class="read-more"><a href="index.php">Read More</a></div>
									</div><!-- .entry-content 
								</article>
				    </div> -->
				   <center> <img src="images/vivo_ad.jpg" class="img-responsive"></center>

				</div><!--row-->
			</div>
			<div class="col-md-3 col-lg-3 col-xl-3 blog-sidebar">
								<aside id="search-2" class="widget widget_search"><h2 class="widget-title">Search Now</h2><div class="blog-search-bar"><form role="search" method="get" class="form-search" action="#">
			<div class="input-append">
				<input type="search" class="form-control search-field" placeholder="Type and Hit Enter ..." value="" name="s" title="Search for:">
				<button type="submit" class="add-on"><i class="fa fa-search"></i></button>
			</div></form></div></aside><aside id="ccr_popular_posts-4" class="widget widget_ccr_popular_posts"><h2 class="widget-title">Recent News</h2>         
			<ul class="popular-post">
					<?php 	for ($i=0; $i < count($more_news); $i++) {  ?>
                    <li>
                        <img width="150" height="150" src="images/news/<?php echo $more_news[$i]['image']; ?> 1000w, images/news/<?php echo $more_news[$i]['image']; ?>" class="attachment-thumbnail size-thumbnail wp-post-image" alt="" srcset="images/news/<?php echo $more_news[$i]['image']; ?> 1000w, images/news/<?php echo $more_news[$i]['image']; ?> 150w, images/news/<?php echo $more_news[$i]['image']; ?> 1000w, images/news/<?php echo $more_news[$i]['image']; ?> 300w, images/news/<?php echo $more_news[$i]['image']; ?> 1000w, images/news/<?php echo $more_news[$i]['image']; ?> 100w" sizes="(max-width: 150px) 100vw, 150px" />
                        <a href="news_details.php?de=<?php echo $more_news[$i]['news_id']; ?>" title="Collaboratively coordinate."><?php echo $more_news[$i]['news_title']; ?></a> <br>
                    <i class="fa fa-calendar-o"></i><time class="post-meta-element" datetime="2015-09-10"><?php echo  date('d F, Y', strtotime($more_news[$i]['news_date'])); ?></time>
                    </li>
                    <?php }?>
                                            </ul><!-- /.latest-post -->

            </aside><aside id="tag_cloud-3" class="widget widget_tag_cloud"><h2 class="widget-title">Advertisement</h2>
            <img src="images/ad7.jpg" class="img-responsive">
            
  </aside>

</div>
			</div><!--col-md-3-->
		</div><!--row-->
	</div>
</section>

<?php include("main_footer.php") ?>
<?php include("footer.php") ?>


<style type="text/css">
#news_section{background: #fff;padding-top: 60px;padding-bottom: 50px;}
#news_section .post figure{margin: 0px;height: 0px;overflow: hidden;height: 270px;width: 100%;}
#news_section .post img{height:270px;-webkit-transform: scale(1);transform: scale(1);-webkit-transition: .3s ease-in-out;transition: .3s ease-in-out;}
#news_section .post img:hover{-webkit-transform: scale(1.3);transform: scale(1.3);overflow: hidden;}
.entry-header h1{font-size: 27px;}
.page-area {background: url(images/slider/1.jpg);background-repeat: no-repeat;background-size: cover;background-position: top center;position: relative;height: 320px;}
.breadcumb-overlay {position: absolute;background: rgba(10, 27, 40, 0.6) none repeat scroll 0 0;top: 0;width: 100%;left: 0;height: 100%;}
    .section-headline.white-headline h3 {color: #fff;}
.section-headline h3 {display: inline-block;font-size: 30px;font-weight: 700;text-transform: uppercase;line-height: 35px;margin-top: 170px;}
.ad_images h4{text-align: center;background: #f7f7f7;padding: 5px;color: #f05737;font-weight: 600;}
.ad_images img{width: 100%;margin: 10px auto;}
</style>
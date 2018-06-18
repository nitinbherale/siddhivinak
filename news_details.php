<?php include("header.php");
$id = $_GET['de'];
list($news) = exc_qry("select * from news where status=0 and news_id = $id");
list($more_news) = exc_qry("select * from news where status=0 and news_id != $id limit 5");
//echo count($activities); 
if(count($news)>0){
//echo count($news);
}
else
{
    header('location:news.php');
}
?>

<!--<div class="page-area">
    <div class="breadcumb-overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="breadcrumb text-center">
                            <div class="section-headline white-headline text-center">
                                <h3>News Details</h3>
                             </div>
                    </div>
            </div>
        </div>
    </div>
</div>-->


<section id="news_section">
	<div class="container">
		<div class="row">
			<div class="col-md-9 col-lg-9">
				<div class="row">
                     <img src="images/news/<?php echo $news[0]['image']; ?>" class="img-responsive">

                     <div class="news_txt">
                        <ul class="meta-info">
                                <li><a ><i class="fa fa-calendar-o" aria-hidden="true"></i><?php echo  date('d F Y', strtotime($news[0]['news_date'])); ?></a></li>
                               <!--  <li><a href="#"><i class="fa fa-folder-open" aria-hidden="true"></i>Social, Media</a></li>
                                <li><a href="#"><i class="fa fa-comments" aria-hidden="true"></i>24 Comments</a></li> -->
                            </ul>

                     	<h3><?php echo $news[0]['news_title']; ?></h3>
                     	<p><?php echo $news[0]['news_description']; ?></p>
                     </div>
				</div><!--row-->
			</div>
			<div class="col-md-3 col-lg-3 col-xl-3 blog-sidebar">
				<aside id="search-2" class="widget widget_search"><h2 class="widget-title">Search Now</h2><div class="blog-search-bar"><form role="search" method="get" class="form-search" action="#">
			  <div class="input-append">
				<input type="search" class="form-control search-field" placeholder="Type and Hit Enter ..." value="" name="s" title="Search for:">
				<button type="submit" class="add-on"><i class="fa fa-search"></i></button>
			   </div></form></div></aside><aside id="ccr_popular_posts-4" class="widget widget_ccr_popular_posts"><h2 class="widget-title">Recent Post</h2>         
			    <ul class="popular-post">
                  <?php     for ($i=0; $i < count($more_news); $i++) {  ?>
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
	.entry-header h1{font-size: 27px;}

	.page-area {background: url(images/slider/1.jpg);background-repeat: no-repeat;background-size: cover;background-position: top center;position: relative;height: 320px;}
    .breadcumb-overlay {position: absolute;background: rgba(10, 27, 40, 0.6) none repeat scroll 0 0;top: 0;width: 100%;left: 0;height: 100%;}
    .section-headline.white-headline h3 {color: #fff;}
.section-headline h3 {display: inline-block;font-size: 30px;font-weight: 700;text-transform: uppercase;line-height: 35px;margin-top: 170px;}
.ad_images h4{text-align: center;background: #f7f7f7;padding: 5px;color: #f05737;font-weight: 600;}
.ad_images img{width: 100%;margin: 10px auto;}
.news_txt h3{font-weight: 600;color: #161f3c;font-family: 'Roboto', sans-serif;margin-bottom: 15px;}
.news_txt p{color: #8B8B8B;font-weight: 400;font-size: 15px;line-height: 26px;font-family: 'Roboto', sans-serif;margin: 0 0 10px;}
#news_section .news_txt ul {margin-bottom: 13px;overflow: hidden;text-align: center;list-style: none;margin-top: 15px;}
#news_section .news_txt ul li{ display: inline-block;float: left;line-height: 24px;margin-right: 20px;}
#news_section .news_txt ul li a{color: #8a8a8a;font-size: 16px;font-weight: 300;}
#news_section .news_txt ul li a i{ display: inline-block;padding-right: 7px;font-size: 15px;color: #ea531c;}
</style>
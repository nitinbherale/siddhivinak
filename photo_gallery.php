<?php include("header.php") ?>

<script src="sidebar/js/jquery.contact-buttons.js"></script>
<script src="sidebar/js/demo.js"></script>
<link rel="stylesheet" href="sidebar/css/contact-buttons.css">
<script src="https://use.fontawesome.com/966db455dc.js"></script>

 <!-- Magnific popup js -->
<script src="dist/fancybox.js"></script>
<script src="dist/jquery.mixitup.min.js"></script>
<script src="dist/script.js"></script>
 <!-- Magnific popup cjquery.magnific-popup.minss -->
<link href="dist/magnific_popup.css" rel="stylesheet">
<link href="dist/hover.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="dist/jquery_fancybox.css">


<section class="page_titlle" style="background :rgba(204, 204, 204, 0.44);height: 170px;">

</section>

 <section id="project-version-one">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <ul class="gallery-filter">
                        <li data-filter="all" class="filter active">
                            <span>All</span>
                        </li>
                         <?php list($category) = exc_qry("select * from category where status = 0 order by id desc"); 
                        for ($i=0; $i < count($category); $i++) { ?>
                        <li data-filter=".<?php echo $category[$i]['id']; ?>" class="filter">
                            <span><?php echo $category[$i]['title']; ?></span>
                        </li>
                        <?php } ?>
                        
                        <!-- <li data-filter=".talking" class="filter">
                            <span>Ornament</span>
                        </li>
                        <li data-filter=".conference" class="filter">
                            <span>Visitors Photo</span>
                        </li>
                        <li data-filter=".events" class="filter">
                            <span>Angarki</span>
                        </li>
                        <li data-filter=".party" class="filter">
                            <span>Mumbai Eye Care Campaign</span>
                        </li>
                        <li data-filter=".concert" class="filter">
                            <span>Exihibition Of Shadu Pen</span>
                        </li> -->
                    </ul>
                </div>
            </div>
            <div class="row nor4al-gallery" id="image-gallery-mix">
                 <?php list($photo) = exc_qry("select * from photo_gallery where status = 0 order by id desc"); 
                        for ($i=0; $i < count($photo); $i++) { ?>
                <div class="col-lg-4 col-sm-6 col-xs-12 <?php echo $photo[$i]['alb_id']; ?> mix" style="display: inline-block;">
                    <div class="img-wrap">
                        <img src="images/gallery/<?php echo $photo[$i]['image']; ?>" alt="">
                        <a class="fancybox" href="images/gallery/<?php echo $photo[$i]['image']; ?>"><div class="content-wrap hvr-rectangle-out">
                            <div class="border">
                                <div class="content">
                                    <!--<h4>Awesome Image Really Awesome</h4>
                                    <span>This is Our Gallery image</span>-->
                                    <center><i class="fa fa-plus-circle faa-flash animated" aria-hidden="true"></i></center>
                                </div>
                            </div>
                        </div></a>
                    </div>
                </div>
            <?php } ?>
                <!-- <div class="col-lg-4 col-sm-6 col-xs-12 events party mix" style="display: inline-block;">
                    <div class="img-wrap">
                        <img src="images/siddhi.jpeg" alt="">
                        <a class="fancybox" href="images/siddhi.jpeg"><div class="content-wrap hvr-rectangle-out">
                            <div class="border">
                                <div class="content">
                                    <h4>Awesome Image Really Awesome</h4>
                                    <span>This is Our Gallery image</span>
                                </div>
                            </div>
                        </div></a>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-xs-12 conference events talking mix" style="display: inline-block;">
                    <div class="img-wrap">
                        <img src="images/siddhi.jpeg" alt="">
                        <a class="fancybox" href="images/siddhi.jpeg"><div class="content-wrap hvr-rectangle-out">
                            <div class="border">
                                <div class="content">
                                    <h4>Awesome Image Really Awesome</h4>
                                    <span>This is Our Gallery image</span>
                                </div>
                            </div>
                        </div></a>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-xs-12 meeting party conference talking mix" style="display: inline-block;">
                    <div class="img-wrap">
                        <img src="images/siddhi.jpeg" alt="">
                        <a class="fancybox" href="images/siddhi.jpeg"><div class="content-wrap hvr-rectangle-out">
                            <div class="border">
                                <div class="content">
                                    <h4>Awesome Image Really Awesome</h4>
                                    <span>This is Our Gallery image</span>
                                </div>
                            </div>
                        </div></a>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-xs-12 meeting  talking mix" style="display: inline-block;">
                    <div class="img-wrap">
                        <img src="images/siddhi.jpeg" alt="">
                        <a class="fancybox" href="images/siddhi.jpeg"><div class="content-wrap hvr-rectangle-out">
                            <div class="border">
                                <div class="content">
                                    <h4>Awesome Image Really Awesome</h4>
                                    <span>This is Our Gallery image</span>
                                </div>
                            </div>
                        </div></a>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-xs-12 meeting conference  mix" style="display: inline-block;">
                    <div class="img-wrap">
                        <img src="images/siddhi.jpeg" alt="">
                        <a class="fancybox" href="images/siddhi.jpeg"><div class="content-wrap hvr-rectangle-out">
                            <div class="border">
                                <div class="content">
                                    <h4>Awesome Image Really Awesome</h4>
                                    <span>This is Our Gallery image</span>
                                </div>
                            </div>
                        </div></a>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-xs-12 meeting conference talking mix" style="display: inline-block;">
                    <div class="img-wrap">
                        <img src="images/siddhi.jpeg" alt="">
                        <a class="fancybox" href="images/siddhi.jpeg"><div class="content-wrap hvr-rectangle-out">
                            <div class="border">
                                <div class="content">
                                    <h4>Awesome Image Really Awesome</h4>
                                    <span>This is Our Gallery image</span>
                                </div>
                            </div>
                        </div></a>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-xs-12 meeting conference talking mix" style="display: inline-block;">
                    <div class="img-wrap">
                        <img src="images/siddhi.jpeg" alt="">
                        <a class="fancybox" href="images/siddhi.jpeg"><div class="content-wrap hvr-rectangle-out">
                            <div class="border">
                                <div class="content">
                                    <h4>Awesome Image Really Awesome</h4>
                                    <span>This is Our Gallery image</span>
                                </div>
                            </div>
                        </div></a>
                    </div>
                </div> -->
               <!--  <div class="col-lg-4 col-sm-6 col-xs-12 meeting conference talking mix" style="display: inline-block;">
                    <div class="img-wrap">
                        <img src="images/siddhi.jpeg" alt="">
                        <a class="fancybox" href="images/siddhi.jpeg"><div class="content-wrap hvr-rectangle-out">
                            <div class="border">
                                <div class="content">
                                    <h4>Awesome Image Really Awesome</h4>
                                    <span>This is Our Gallery image</span>
                                </div>
                            </div>
                        </div></a>
                    </div>
                </div> -->
            </div>
        </div>
    </section>


<?php include("main_footer.php") ?>
<?php include("footer.php") ?>

<style type="text/css">
	#gallery_section{background: ;padding-top: 60px;padding-bottom: 50px;}
	/*.page-area {background: url(images/slider/2.jpg);background-repeat: no-repeat;background-size: cover;background-position: top center;position: relative;height: 320px;}
    .breadcumb-overlay {position: absolute;background: rgba(10, 27, 40, 0.6) none repeat scroll 0 0;top: 0;width: 100%;left: 0;height: 100%;}
    .section-headline.white-headline h3 {color: #fff;}
.section-headline h3 {display: inline-block;font-size: 30px;font-weight: 700;text-transform: uppercase;line-height: 35px;margin-top: 170px;}*/

</style>
<style type="text/css">
    /**
* Projects Version one Styles.
**/

#project-version-one {
    padding: 80px 0 50px;
}
#project-version-one .gallery-filter {
    margin-bottom: 50px;
    text-align: center;
    border-bottom: 1px solid #E2E2E2;
}
#project-version-one .gallery-filter li {
    display: inline;
}
#project-version-one .gallery-filter li span {
    display: inline-block;
    font-size: 13px;
    line-height: 45px;
    color: #787878;
    font-weight: 600;
    text-transform: uppercase;
    cursor: pointer;
    padding: 0 20px;
    position: relative;
    transition: all .3s ease;
}
#project-version-one .gallery-filter li.active span:before {
    content: ' ';
    display: block;
    width: 100%;
    height: 2px;
    background: #f05737;
    position: absolute;
    bottom: -1px;
    left: 0;
}
#project-version-one .gallery-filter li.active span,
#project-version-one .gallery-filter li:hover span {
    color: #f05737;
}
#project-version-one .col-lg-4 {
    margin-bottom: 20px;
    display: none;
    padding: 0 10px;
    box-sizing: border-box;
}
#project-version-one .col-lg-4 .img-wrap {
    position: relative;
}
#project-version-one .col-lg-4 .img-wrap img {
    width: 100%;
    height: 270px;
}
#project-version-one .col-lg-4 .img-wrap .content-wrap {
    width: 100%;
    height: 100%;
    position: absolute;
    top: 0;
    left: 0;
    padding: 10px;
    cursor: pointer;
    opacity: 0;
    background-color: transparent;
    transition: all .3s ease;
}
#project-version-one .col-lg-4 .img-wrap .content-wrap:before{

    background: rgba(252, 90, 27, .85);
}

#project-version-one .col-lg-4:hover .img-wrap .content-wrap {
    opacity: 1;
}
#project-version-one .col-lg-4 .img-wrap .content-wrap .border {
    width: 100%;
    height: 100%;
    border: 1px solid #fff;
}
#project-version-one .col-lg-4 .img-wrap .content-wrap h4 {
    color: #fff;
    margin: 0;
    font-size: 16px;
    line-height: 22px;
    text-transform: uppercase;
    font-weight: bold;
    text-align: center;
}
#project-version-one .col-lg-4 .img-wrap .content-wrap .content i {font-size: 35px;text-align: center;}
#project-version-one .col-lg-4 .img-wrap .content-wrap span {
    color: #fff;
    display: block;
    font-size: 14px;
    line-height: 22px;
    text-transform: capitalize;
    font-weight: 600;
    text-align: center;
}
#project-version-one .col-lg-4 .img-wrap .content-wrap .content {
    position: relative;
    top: 45%;
}
</style>
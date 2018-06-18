<?php include("header.php") ?>

<script src="sidebar/js/jquery.contact-buttons.js"></script>
<script src="sidebar/js/demo.js"></script>
<link rel="stylesheet" href="sidebar/css/contact-buttons.css">
<script src="https://use.fontawesome.com/966db455dc.js"></script>

<link href="dist/ganesha_resorces.css" rel="stylesheet" media="all">
<link href="dist/animate.min.css" rel="stylesheet" media="all">
<script type="text/javascript" src="dist/responsive_tab.js"></script>
<script type="text/javascript" src="dist/wow.min.js"></script>

<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>-->

<section class="page_titlle" style="background :rgba(204, 204, 204, 0.44);height: 170px;">
  

</section>

<section id="ganesha_resources-section" style="padding-top: 50px;padding-bottom: 50px;">
    <!--<h2 class="section-title wow fadeInUp" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">Ganesha Resources</h2>-->
 <div class="container">
             
           <div class="responsive-tabs">

            <h2>Atharva Sheersha</h2>
            <div class="tab_content">
               <div class="text-center">
               <a href="#" class="download-btn theme-btn"><span class="fa fa-file-pdf-o" aria-hidden="true"></span> DOWNLOAD .PDF atharva sheersha</a>
             </div>
            </div>

      
            <h2>Ashtavinayaka Yatra</h2>
            <div class="tab_content">
               <p>There are many important and famous places of Lord Ganesha all over the world. Among these some places are more powerful & important than the others. There are eight such powerful places, which are called as Ashtavinayaka. These eight place are in India in the state of Maharashtra. A lot of importance is given to these places in India and in Hindu religion. The incarnation stories of these Ganesha’s are ancient, the places are also ancient. Some of the temples are built recently. Among these, few are rebuilt in Madhavrao Peshwa’s period. The idols of Ashtavinayaka are self-existent. They are installed in the temples as they were found. Each idol is an incarnation of Lord Ganesha. There are some mythological stories giving the importance of each Ganesha (idol). These stories tell us about why and how these idols of Ganesha got their names and came into existence. The idols are not beautiful like the man made ones but the self-existent appearance of then does please the devotees.</p>
               <p>The mangalashtaka (poetic lines spoken at the time of marriage or thread ceremony) of Ashtavinayaka is sang on holy occasions. The sequence of Ashtavinayak pilgrimage, according to the Stotra (poetic lines) mentioned in the Puran is as follows.</p>    

               <div class="asht_vinayk">

                  <?php list($ashtavinayak) = exc_qry("SELECT * FROM ashtavinayak order by id");
                     $round = ceil(count($ashtavinayak)/4);// no of rows 
                     $d =0;
                     for ($i=1; $i <= $round; $i++) {   ?>  
                  <div class="row btm_row">
                    <?php for ($a=$d; $a < 4*$i ; $a++) { 
                          if($a<count($ashtavinayak)){ ?>

                     <div class="col-md-3 col-lg-3 mb10">
                        <div class="box"> <img src="images/ashtavinayak/<?php echo $ashtavinayak[$a]['image']; ?>" class="img-responsive">
                           <div class="overbox">
                              <div class="title overtext"><?php echo $ashtavinayak[$a]['name']; ?></div>
                               <center><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#ashtavinayak<?php echo $ashtavinayak[$a]['id']; ?>">Read More</button></center>
                            </div>
                        </div>
                     </div>
                     <?php } } $d = 4*$i; ?>

                  </div>
                  <?php } ?>
               </div>
            </div><!--Tab content-->
            
            <h2>Ganesha Stories</h2>
           <div class="tab_content">
               <p>Philisophy, mysticism, and mythology; All are interrelated. The stories of God's divine pastimes look ordinary stories, but they could be elaborated on for years, eons, life after life, because they are related to you and me. They are not somebody else's story. They have great symbolic meaning but require thought with full mind and concentration. Whoever listens to these stories of God will be blessed with happiness and peace. Whoever understands the inner and outer meanings of these stories becomes free from ignorance and achieves his goal. Below given are some of the Stories of Lord Ganesha.</p>
               
               <!--accordion-->
                <div class="row">
                  <div class="col-lg-12">
                    <div class="general-question">
                      <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">

                        <?php list($story) = exc_qry("select * from stories where status = 0 order by id desc");
                          for ($i=0; $i < count($story); $i++) { 
                        ?>
                          <div class="panel panel-default">
                            <div class="panel-heading headback" role="tab" id="headingOne">
                              <h4 class="panel-title">
                                <a role="button" data-toggle="collapse" data-parent="#accordion" href="#story<?php echo $i; ?>" aria-expanded="false" aria-controls="collapseOne" class="collapsed">
                                  <?php echo $story[$i]['title']; ?>
                                </a>
                              </h4>
                            </div>
                            <div id="story<?php echo $i; ?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne" aria-expanded="false" style="height: 0px;">
                              <div class="panel-body">
                                <div class="panel_body_up">
                                   <?php echo $story[$i]['story']; ?>
                                </div>
                              </div>
                            </div>
                          </div>
                        <?php } ?>

                      </div>
                    </div>
                  </div>
                </div>
              </div><!--Tab content-->

            <h2>Ganesha FAQ's</h2>
            <div class="tab_content">
              <div class="general-question">
                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">

                     <?php 
                     list($faq) = exc_qry("select * from faq where status = 0 order by id desc"); 
                     for ($i=1; $i < count($faq); $i++) { ?>               
                      <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingTwo">
                          <h4 class="panel-title">
                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#faq<?php echo $i; ?>" aria-expanded="false" aria-controls="collapseTwo">
                              <?php echo $faq[$i]['question']; ?>
                            </a>
                          </h4>
                        </div>
                        <div id="faq<?php echo $i; ?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo" aria-expanded="false" style="height: 0px;">
                          <div class="panel-body">
                            <div class="panel_body_up">
                                <h2> <?php echo $faq[$i]['question']; ?></h2>
                                <p> <?php echo $faq[$i]['answer']; ?></p>
                            </div>
                          </div>
                        </div>
                      </div>
                    <?php } ?>

                </div>
              </div>
            </div><!--Tab content-->

            <h2>Ganesha Books</h2>
            <div class="tab_content">

               <?php list($books) = exc_qry("SELECT * FROM ganesha_book where status = 0 order by id desc");
               $round = ceil(count($books)/3);// no of rows 
               $d =0;
               for ($i=1; $i <= $round; $i++) {   ?>  

                 <div class="row book_rw">

                     <?php for ($a=$d; $a < 3*$i ; $a++) { 
                          if($a<count($books)){ ?>

                   <div class="col-lg-4 col-lg-4">
                      <div class="books_ganesha">
                         <h4><?php echo $books[$a]['bk_name']; ?></h4>
                         <p><?php echo $books[$a]['bk_writer']; ?></p>
                      </div>
                    </div>

                       <?php } } $d = 3*$i; ?>
                 </div>

              <?php } ?>

            </div><!--Tab Content-->


    </div><!--Responsive Tabs-->
</div><!--container-->

<!-- Modal -->
<?php  for ($i=0; $i < count($ashtavinayak); $i++) { ?>
<div class="modal fade asht_vinayk_modal" id="ashtavinayak<?php echo $ashtavinayak[$i]['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="ashtavinayak<?php echo $ashtavinayak[$i]['id']; ?>Title" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="ashtavinayak<?php echo $ashtavinayak[$i]['id']; ?>Title"><i class="fa fa-cog faa-spin animated" aria-hidden="true"></i> <?php echo $ashtavinayak[$i]['name']; ?>  <i class="fa fa-cog faa-spin animated" aria-hidden="true"></i></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <p><?php echo $ashtavinayak[$i]['description']; ?></p>
      </div>
    </div>
  </div>
</div>
<?php  } ?>
<!--/modal-->

</section>
<?php include("main_footer.php") ?>
<?php include("footer.php") ?>


<script>
        $(document).ready(function() {
            RESPONSIVEUI.responsiveTabs();
        })
</script>

<style type="text/css">

.books_ganesha {border: 1px solid #ddd;padding: 10px;text-align: center;transition: all 0.5s ease;cursor: crosshair;}
.books_ganesha:hover{-webkit-box-shadow: 0 10px 6px -6px #777;
       -moz-box-shadow: 0 10px 6px -6px #777;
            box-shadow: 0 10px 6px -6px #777;}
.book_rw{padding-top: 25px;margin-top:3px;}
 .asht_vinayk .btm_row{margin-top: 20px;}
  .asht_vinayk .box {
  cursor: pointer;
  position: relative;
  overflow: hidden;
  width: 100%;
}

.asht_vinayk .box img {

  left: 0;
  top: 0;
  right: 0;

  -webkit-transition: all 300ms ease-out;
  -moz-transition: all 300ms ease-out;
  -o-transition: all 300ms ease-out;
  -ms-transition: all 300ms ease-out;
  transition: all 300ms ease-out;
}
.asht_vinayk .box .overbox {
  background-color: rgba(251, 111, 1, 0.87);
  position: absolute;
  top: 0;
  left: 0;
  color: #fff;
  z-index: 100;
  -webkit-transition: all 300ms ease-out;
  -moz-transition: all 300ms ease-out;
  -o-transition: all 300ms ease-out;
  -ms-transition: all 300ms ease-out;
  transition: all 300ms ease-out;
  opacity: 0;
  width: 100%;
  height: 100%;
}
.asht_vinayk .box .overbox .btn{background: #fff;color: #f25104;border:1px solid #fff;}

.asht_vinayk .box:hover .overbox { opacity: 1; }
.asht_vinayk .box .overtext {
  -webkit-transition: all 300ms ease-out;
  -moz-transition: all 300ms ease-out;
  -o-transition: all 300ms ease-out;
  -ms-transition: all 300ms ease-out;
  transition: all 300ms ease-out;
  transform: translateY(40px);
  -webkit-transform: translateY(40px);
}

.asht_vinayk .box .title {
  font-size: 1.1em;
  opacity: 0;
  transition-delay: 0.1s;
  transition-duration: 0.2s;
  text-align: center;
  padding-top: 65px;
  padding-bottom: 20px;
}

.asht_vinayk .box:hover .title,
.asht_vinayk .box:focus .title {
  opacity: 1;
  transform: translateY(0px);
  -webkit-transform: translateY(0px);
}

.asht_vinayk .box .tagline {
  font-size: 0.8em;
  opacity: 0;
  transition-delay: 0.2s;
  transition-duration: 0.2s;
}

.asht_vinayk .box:hover .tagline,
.asht_vinayk .box:focus .tagline {
  opacity: 1;
  transform: translateX(0px);
  -webkit-transform: translateX(0px);
}
.asht_vinayk_modal .modal-body p{color: #f25104;line-height: 29px;font-size: 17px;}
.asht_vinayk_modal .modal-header{background: #f25104;color: #fff;text-align: center;}
.asht_vinayk_modal .modal-header h5{font-size: 20px;font-weight: 600;}

.mb10{margin-bottom: 20px;}
.download-btn {
    position: relative;
    display: inline-block;
    line-height: 24px;
    padding: 10px 25px 8px;
    margin-bottom: 20px;
    border: 2px solid #a0a0a0;
    color: #a6a6a6;
    font-size: 14px;
    margin-top: 20px;
    font-family: 'Montserrat',sans-serif;
    text-transform: uppercase;transition: all 300ms ease;
    -webkit-transition: all 300ms ease;
    -ms-transition: all 300ms ease;
    -o-transition: all 300ms ease;
    -moz-transition: all 300ms ease;}
    .download-btn:hover{background-color: #fc5a1b;color:#fff;font-weight: 600;border: 2px solid #fc5a1b;}
<!--Ganesha Stories-->


<!--end-->


</style>


<div class="vc_row-full-width"></div><div data-vc-full-width="true" data-vc-full-width-init="false" data-vc-stretch-content="true" class="vc_row-fluid">
	<div class="vc_col-sm-12 wpb_column vc_column_container ">
	   <div class="wpb_wrapper">
		  <section class="shedule section-padding" style="background: url(images/Important_dates2.jpg);position: relative;">

		  	<div class="layer"></div>
		<div class="container">
		  <div class="row">
			 <div class="col-md-4 wow fadeInLeft" data-wow-delay="0.6s">
			  <h2 class="section-title"><a href="important_dates.php" >Important Dates </a></h2> 
			   <div class="section-detail">
                Shree Ganesh is the first to be worshipped before beginning any new project or venture as he is the destroyer of obstacles (Vighnaharta). This is Shree Siddhivinayak Ganapati Temple at Prabhadevi in Mumbai, a two-century-old Temple that fulfills the desires of the worshipers.

			   Important Angarakhi Chaturthi,Vinayaki Chaturthi And Sankashti Chaturthi dates in 2018 calender year.</div>
			   </div>
		     <div class="col-md-8">									
                <div class="shedule-list col-md-12 wow fadeInUp" data-wow-delay="0.6s">
               <?php list($imp_dates) = exc_qry("select * from imp_dates where status = 0 and date > '".date('Y-m-d')."' order by date limit 6"); 
				for ($i=0; $i < count($imp_dates); $i++) { ?>
				  <div class="shedule-time shedule-before col-md-6 col-xs-12 wow fadeInUp" data-wow-delay="0.6s">
					 <div class="schedule-name col-xs-7">
					   <h3><?php echo $imp_dates[$i]['title'] ?></h3>
						  <span><?php echo date('d F Y', strtotime($imp_dates[$i]['date'])); ?></span>
						</div>
					<div class="col-xs-5 pad0" data-countdown="<?php echo date('Y/m/d', strtotime($imp_dates[$i]['date'])); ?>"></div>
					</div>
				<?php } ?>
				</div>
                <div class="sunrise col-md-6 wow fadeInLeft" data-wow-delay="0.6s">
                   <div class="col-md-5">
                    <img src="images/sun.png" alt="sunrise">
                   </div>	
                <div class="col-md-7">
                   <h2>SUNRISE</h2>
                    <span>6:20 am</span>
                </div>
                </div>
               <div class="sunrise sunset col-md-6 wow fadeInRight" data-wow-delay="0.6s">
                  <div class="col-md-5">
                    <img src="images/sun2.png" alt="sunset">
                  </div>
                <div class="col-md-7">
                   <h2>SUNSET</h2>
                <span>7:00 pm</span>
                </div>
              </div>
                 </div>                     
			</div><!-- /.row -->
		</div><!-- /.container -->
	</section>

		</div> 
	</div> 
</div>

<style type="text/css">
	.layer{position: absolute;background: rgba(0, 0, 0, 0.84) none repeat scroll 0 0;top: 0;width: 100%;left: 0;height: 100%;}
	
</style>
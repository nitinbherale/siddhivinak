<?php include("header.php") ?>

<section class="page_titlle" style="background :rgba(204, 204, 204, 0.44);height: 170px;">
  

</section>

<section id="ganesha_resources-section" style="padding-top: 50px;padding-bottom: 50px;">
    <!--<h2 class="section-title wow fadeInUp" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">Ganesha Resources</h2>-->
 <div class="container">
   <div class="row">
       <div class="col-md-9 col-lg-9">
           <div class="tbl_imp_dates">

    <h4>Angarki Chaturthi Dates for the year 2018</h4><hr />
       <table class="table table-bordered table-hover">
  <thead>
    <tr class="head">
     
      <th scope="col">Day</th>
      <th scope="col">Date</th>
      <th scope="col">Moon Rise</th>
    </tr>
  </thead>
  <tbody>
    <?php list($angarkhi) = exc_qry("select * from imp_dates where status = 0 and title = 'Angarki Chaturthi' order by date"); 
        for ($i=0; $i < count($angarkhi); $i++) { ?> 
    <tr>
      <td><?php echo date('l', strtotime($angarkhi[$i]['date']));?></td>
      <td><?php echo date('d F Y', strtotime($angarkhi[$i]['date']));?></td>
      <td><?php echo date('h.i a', strtotime($angarkhi[$i]['moon_rise']));?></td>
    </tr>
  <?php } ?>
  </tbody>
</table>

<h4>Sankashti Chaturthi Dates for the year 2018</h4><hr />
 <table class="table table-bordered">
  <thead>
    <tr class="head">
      <th scope="col">Day</th>
      <th scope="col">Date</th>
      <th scope="col">Moon Rise</th>
    </tr>
  </thead>
  <tbody>
   <?php list($sankashti) = exc_qry("select * from imp_dates where status = 0 and title = 'Sankashti Chaturthi' order by date"); 
        for ($i=0; $i < count($sankashti); $i++) { ?> 
    <tr>
      <td><?php echo date('l', strtotime($sankashti[$i]['date']));?></td>
      <td><?php echo date('d F Y', strtotime($sankashti[$i]['date']));?></td>
      <td><?php echo date('h.i a', strtotime($sankashti[$i]['moon_rise']));?></td>
    </tr>
  <?php } ?>

  </tbody>
</table>

<h4>Vinayaki Chaturthi Dates for the year 2018</h4><hr />
 <table class="table table-bordered">
  <thead>
    <tr class="head">
      <th scope="col">Day</th>
      <th scope="col">Date</th>
      <th scope="col">Yog</th>
    </tr>
  </thead>
  <tbody>
   <?php list($vinayaki) = exc_qry("select * from imp_dates where status = 0 and title = 'Vinayaki Chaturthi' order by date"); 
        for ($i=0; $i < count($vinayaki); $i++) { ?> 
    <tr>
      <td><?php echo date('l', strtotime($vinayaki[$i]['date']));?></td>
      <td><?php echo date('d F Y', strtotime($vinayaki[$i]['date']));?></td>
      <td><?php echo $vinayaki[$i]['yog'];?></td>
    </tr>
  <?php } ?>

  </tbody>
</table>

   </div>   
       </div>

   <div class="col-md-3 col-lg-3 col-xl-3 blog-sidebar">
                <h2 class="widget-title" style="text-align: center;">Advertisement</h2>
 
                <div class="ad_images">
                     
                    <img src="images/ad7.jpg" class="img-responsive">
                    
                    <img src="images/ad4.png" class="img-responsive">
                
                </div>
            </div>
   </div>
</div><!--container-->
</section>
<?php include("main_footer.php") ?>
<?php include("footer.php") ?>

<style type="text/css">
    .head{background: #ddd;color:#000;}
    .tbl_imp_dates h4{text-align: center;font-weight: 600;color: #f14d04;}
    .head th{color: #000;}
    .table-bordered>thead>tr>th {
    color: #000;text-align: center;}
    .table-bordered>tbody>tr>td{text-align: center;}
</style>



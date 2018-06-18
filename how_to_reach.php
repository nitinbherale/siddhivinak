<?php include("header.php") ?>

<script src="sidebar/js/jquery.contact-buttons.js"></script>
<script src="sidebar/js/demo.js"></script>
<link rel="stylesheet" href="sidebar/css/contact-buttons.css">
<script src="https://use.fontawesome.com/966db455dc.js"></script>

<section class="page_titlle" style="background :rgba(204, 204, 204, 0.44);height: 170px;">

</section>
 
 <section class="reach_hw" >
   <div class="container">
  <div class="accordion-option">
    <h3 class="title">How To Reach Temple</h3>
    <a href="javascript:void(0)" class="toggle-accordion active" accordion-id="#accordion"></a>
  </div>
  <div class="clearfix"></div>
  <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
    <div class="panel panel-default">
      <div class="panel-heading" role="tab" id="headingOne">
        <h4 class="panel-title">
        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne"><i class="fa fa-bus faa-passing animated" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;
           Bus
        </a>
      </h4>
      </div>
      <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
        <div class="panel-body">

              <h3>B.E.S.T Bus Routes To Shree Siddhivinayak Mandir</h3><hr />
             <table class="table table-hover table-bordered">
                <thead>
                  <tr>
                   <th>SR.No.</th>
                   <th>Route</th>
                   <th>Buses</th>
                   <th>From</th>
                   <th>To</th>
                   <th>Trips</th>
                 </tr>
               </thead>
               <tbody>
                <?php list($reach) = exc_qry("select * from reach where status = 0"); 
                for ($i=0; $i < count($reach); $i++) { 
                ?>
                  <tr>
                   <td><?php echo $i+1; ?></td>
                   <td><?php echo $reach[$i]['route'] ?></td>
                   <td><?php echo $reach[$i]['buses']; ?></td>
                   <td><?php echo $reach[$i]['from_route']; ?></td>
                   <td><?php echo $reach[$i]['to_route']; ?></td>
                   <td><?php echo $reach[$i]['trips']; ?></td>
                  </tr>
                <?php } ?>
              </tbody>
          </table>
        </div>
      </div>
    </div>
    <div class="panel panel-default">
      <div class="panel-heading" role="tab" id="headingTwo">
        <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo"><i class="fa fa-train faa-pulse animated" aria-hidden="true"></i>
          Train &nbsp;&nbsp;&nbsp;
        </a>
      </h4>
      </div>
      <div id="collapseTwo" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingTwo">
        <div class="panel-body">
          Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird
          on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table,
          raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
        </div>
      </div>
    </div>

  </div>
</div>
 </section>

<?php include("main_footer.php") ?>
<?php include("footer.php") ?>
<script type="text/javascript">
  $(document).ready(function() {

  $(".toggle-accordion").on("click", function() {
    var accordionId = $(this).attr("accordion-id"),
      numPanelOpen = $(accordionId + ' .collapse.in').length;
    
    $(this).toggleClass("active");

    if (numPanelOpen == 0) {
      openAllPanels(accordionId);
    } else {
      closeAllPanels(accordionId);
    }
  })

  openAllPanels = function(aId) {
    console.log("setAllPanelOpen");
    $(aId + ' .panel-collapse:not(".in")').collapse('show');
  }
  closeAllPanels = function(aId) {
    console.log("setAllPanelclose");
    $(aId + ' .panel-collapse.in').collapse('hide');
  }
     
});
</script>
<style type="text/css">
.ad_module{padding-top: 30px;padding-bottom: 30px;}
.reach_hw{background: #f5f5f5;padding-top: 30px;padding-bottom: 30px;}
.panel-default>.panel-heading {
  color: #333;
  background-color: #fff;
  border-color: #e4e5e7;
  padding: 0;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}

.panel-default>.panel-heading a {
  display: block;
  padding: 10px 15px;
}

.panel-default>.panel-heading a:after {
  content: "";
  position: relative;
  top: 1px;
  display: inline-block;
  font-family: 'Glyphicons Halflings';
  font-style: normal;
  font-weight: 400;
  line-height: 1;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  float: right;
  transition: transform .25s linear;
  -webkit-transition: -webkit-transform .25s linear;
}

.panel-default>.panel-heading a[aria-expanded="true"] {
  background-color: #eee;
}

.panel-default>.panel-heading a[aria-expanded="true"]:after {
  content: "\2212";
  -webkit-transform: rotate(180deg);
  transform: rotate(180deg);
}

.panel-default>.panel-heading a[aria-expanded="false"]:after {
  content: "\002b";
  -webkit-transform: rotate(90deg);
  transform: rotate(90deg);
}

.accordion-option {
  width: 100%;
  float: left;
  clear: both;
  margin: 15px 0;
}

.accordion-option .title {
  font-size: 20px;
  font-weight: bold;
  float: left;
  padding: 0;
  margin: 0;
}

.accordion-option .toggle-accordion {
  float: right;
  font-size: 16px;
  color: #6a6c6f;
}

.accordion-option .toggle-accordion:before {
  content: "Expand All";
}

.accordion-option .toggle-accordion.active:before {
  content: "See All";
}
.panel-body h3{text-align: center;color: #f05636;font-weight: 600;}
.panel-body .table thead {background: #ddd;}
.panel-body .table thead th{color: #000;text-align: center;}
.panel-body .table tbody td{text-align: center;color: #000;}
</style>




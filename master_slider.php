<section>
  <?php list($slider) = exc_qry("select * from slider where status = 0 order by id desc"); ?>
	<div id="carousel-example-generic" class="carousel slide desktop_view" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <?php for ($i=1; $i < count($slider); $i++) {  ?>
    <li data-target="#carousel-example-generic" data-slide-to="<?php echo $i; ?>"></li>
    <?php } ?>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="images/slider/<?php echo $slider[0]['desk_img'] ?>" alt="...">
    </div>
     <?php for ($i=1; $i < count($slider); $i++) {  ?>
    <div class="item">
      <img src="images/slider/<?php echo $slider[$i]['desk_img'] ?>" alt="...">
    </div>
  <?php } ?>
  </div>

</div>

  <div id="carousel-example-generic" class="carousel slide mobile_view" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <?php for ($i=1; $i < count($slider); $i++) {  ?>
    <li data-target="#carousel-example-generic" data-slide-to="<?php echo($i); ?>"></li>
  <?php } ?>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="images/slider/<?php echo $slider[0]['mob_img'] ?>" alt="...">
    </div>
    <?php for ($i=1; $i < count($slider); $i++) {  ?>
    <div class="item">
      <img src="images/slider/<?php echo $slider[$i]['mob_img'] ?>" alt="...">
    </div>
     <?php } ?>
  </div>

</div>

</section>

<style>
.desktop_view{display: block;}
.mobile_view{display: none;}
@media screen and (max-width:767px){
.carousel-indicators{display:none;}
.desktop_view{display: none;}
.mobile_view{display: block;}

}</style>
<?php include("header.php");
$id = $_GET['rg'];
list($activity) = exc_qry("select * from temple_activities where status=0 and id = $id");
list($activities) = exc_qry("select * from temple_activities where status=0 and id != $id order by id desc limit 8");
//echo count($activities); 
if(count($activity)>0){

}
else
{
    header('location:temple_activities.php');
}
?>
<section class="page_titlle" style="background :rgba(204, 204, 204, 0.44);height: 170px;">
  
</section>

<section class="templ_acti">
    <div class="container">
        <div class="single_acti row">

            <h3><?php echo $activity[0]['title']; ?></h3><hr />
            <p class="desc_act"><?php echo $activity[0]['description']; ?></p>
            
        <div class="col-md-6 col-sm-6 col-xs-12 pull-left content-side wow fadeInRight animated" data-wow-delay="0ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInLeft;">
                
            <div class="img_acti img-zoom-in">
                <img src="images/activities/<?php echo $activity[0]['image'] ?>" >
            </div>
        </div>
        <div class="col-md-6 col-sm-6 col-xs-12 pull-right content-side wow fadeInRight animated" data-wow-delay="0ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInRight;">
                    
                    <div class="check-listing listing">
                        <ul>
                            <?php for ($i=0; $i < count($activities); $i++) {  ?>
                            <li><a href="temple_activities_details.php?rg=<?php echo $activities[$i]['id'] ?>"><?php echo $activities[$i]['title']; ?></a></li>
                        <?php } ?>
                        </ul>
                    </div>
                    
                </div>
        </div>
    </div>
</section>


<?php include("main_footer.php") ?>
<?php include("footer.php") ?>


<style type="text/css">
    .templ_acti{padding-top: 50px;padding-bottom: 50px;}
    .single_acti{height: auto;background: #fff;margin-top: 10px;margin-bottom: 20px;box-shadow: 0 5px 13px 0 rgba(0, 0, 0, 0.1);
    -webkit-box-shadow: 0 5px 13px 0 rgba(0, 0, 0, 0.1);
    -ms-box-shadow: 0 5px 13px 0 rgba(0, 0, 0, 0.1);
    -moz-box-shadow: 0 5px 13px 0 rgba(0, 0, 0, 0.1);
    -o-box-shadow: 0 5px 13px 0 rgba(0, 0, 0, 0.1);
    padding: 15px 0px 15px;
}
.check-listing li {
    position: relative;
    line-height: 26px;
    padding: 0px 0px 10px 50px;
    margin-bottom: 10px;
    list-style: none;
}
.check-listing li:hover:before {
    background: #fc5a1b;
    border-color: #fc5a1b;
    color: #ffffff;
}
.check-listing li:before {
    font-family: 'FontAwesome';
    content: '\f00c';
    position: absolute;
    left: 0px;
    top: 0px;
    width: 30px;
    height: 30px;
    border: 1px solid #999999;
    text-align: center;
    line-height: 28px;
    font-size: 18px;
    color: #fc5a1b;
    transition: all 500ms ease;
    -moz-transition: all 500ms ease;
    -webkit-transition: all 500ms ease;
    -ms-transition: all 500ms ease;
    -o-transition: all 500ms ease;
}
.single_acti h3{text-align: center;color: #f25005;font-weight: 600;font-family: 'Montserrat', sans-serif;}
.single_acti p{text-align: center;font-family: 'Montserrat', sans-serif;}

.img-zoom-in img 
{
transition:all .2s ease-in-out;
-webkit-transition:all .2s ease-in-out;
-moz-transition:all .2s ease-in-out;
-ms-transition:all .2s ease-in-out;
-o-transition:all .2s ease-in-out;
}

.img-zoom-in:hover img 
{
transform:scale(0.9);
-webkit-transform:scale(0.9);
-moz-transform:scale(0.9);
-ms-transform:scale(0.9);
-o-transform:scale(0.9)
}


</style>

<?php include('header.php');


  $filter = array(
        'table'=>'ci_banners',
        'sort'=>'sort_order',
        'order'=>'asc',
        'where'=> 'is_active=1'
       );  
     $bannerData = postData('listing', $filter);

     $id = $_GET['id'];
     $details = getData('news_details',$id);


?>


    <div class="inner-banner blog" style="background:url(<?=ADMIN_PATH.$bannerData['data'][2]['image']?>);">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="content">
                        <h1>News </h1>
                        <p></p>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <section class="about inner padding-lg">
        <div class="container">
            <div class="row" style="padding-bottom: 30px;">
                <div class="col-md-7 left-block">
                    <h4><?=$details['data']['name']?></h4>
                       <p class="text-justify"><?=$details['data']['description']?></p>
                    <h6 class="text">Date : <?=$details['data']['news_date']?></h6>
                     <h6 class="text">Location : <?=$details['data']['news_location']?></h6>
                    
                </div>
                <div class="col-md-5 new-right"> <img src="<?=ADMIN_PATH.$details['data']['image']?>"  class="img-responsive" alt=""> </div>
            </div>
        </div>
    </section>   
<?php include('footer.php');?>
   
<?php include('header.php');

    $filter = array(
        'table'=>'ci_banners',
        'sort'=>'sort_order',
        'order'=>'asc',
        'start'=>'0',
        'limit'=>'2',
        'where'=> 'is_active=1'
    );  
$bannerData = postData('listing', $filter);


          $filter = array(
            'table'=>'ci_services',
             'sort'=>'sort_order',
            'order'=>'asc',
            'where'=> 'is_active=1',
            'limit'=>4
        );  
        $ServiceData = postData('listing', $filter);


        $filter = array(
            'table'=>'ci_newsupdates',
            'order'=>'asc',
            'where'=> 'is_active=1'
        );  
        $newsupdates = postData('listing', $filter);


        $aboutdata = getData('cms',38);


        $filter = array(
            'table'=>'ci_teams',
            'order'=>'asc',
            'where'=> 'is_active=1'
        );  
        $teamData = postData('listing', $filter);

?>


    <div class="banner-outer">
        <div class="banner-slider">
                            <?php if(!empty($bannerData['data'])){
                                                foreach ($bannerData['data'] as $Data) { ?>
            <div class="slide1" style="background: url(<?=ADMIN_PATH.$Data['image']?>) no-repeat center top / cover;">
                <div class="container">
                    <div class="content animated fadeInRight">
                        <div class="fl-right">
                            <h1 class="animated fadeInRight"><?=$Data['name']?><span class="animated fadeInRight"><?=$Data['title_first']?></span> </h1>
                            <p class="animated fadeInRight"><?=$Data['title_second']?></p>
                            <a href="<?=BASE_PATH?>about" class="btn animated fadeInRight">Know More <span class="icon-more-icon"></span></a>
                        </div>
                    </div>
                </div>
            </div>
        <?php }}?>
       
           
        </div>
    </div>

<section class="about inner padding-lg">
        <div class="container">
            <div class="row">
                <div class="col-md-7 left-block">
                    <h2><?=$aboutdata['data']['meta_title']?></h2><hr>
                    <p><?=$aboutdata['data']['cms_contant']?></p>
                    
                </div>
                <div class="col-md-5 about-right">
                 <div class="container">
                    <h2>Adminstrator Desk</h2><hr>
                    <div class="row">
                         <?php if(!empty($teamData['data'])){
                                                foreach ($teamData['data'] as $Data) { ?> 
                       <section class="col-md-6 col-md-4">
                          <img class="icon" src='<?=ADMIN_PATH.$Data['image']?>' alt="Icon">
                             <p class="ab-p"><?=$Data['name']?></p>
                             <p class="ab-p"><?=$Data['department']?></p>
                         </section>
                     <?php }} ?>

             <!--         <div class="container">
                        <h2>ADMINISTRATOR DESK</h2><hr>

                <?php if(!empty($teamData['data'])){
                                                foreach ($teamData['data'] as $Data) { ?> 
                    <img src="<?=ADMIN_PATH.$Data['image']?>" width="144" height="123"class="img-responsive" alt="">
                     <span class="designation" style="padding-left: 50px;"><?=$Data['name']?></span>
                    <p class="equal-hight"<?=$Data['department']?>></p> 
                <?php }} ?>
               </div> -->
                </div>
            </div>
            </div>
        </div>
    </div>
    </section>
    <section class="our-impotance padding-lg">
        <div class="container">
            <h2 style="text-align: center;">Our Facilities</h2>
            <ul class="row">
                   <?php if(!empty($ServiceData['data'])){
                    $i=0;
                    foreach ($ServiceData['data'] as $sdata) { 
                        if($i==4){ echo '</div> <div class="row">'; $i=0; }?>
                <li class="col-sm-4 equal-hight">
                    <div class="inner"> 
                        <img src="<?=ADMIN_PATH.$sdata['icon']?>" height="80" width="80"alt="Malleable Study Time">  <h3><?=$sdata['name']?></h3>
                        <p class="text-justify"><?=mb_strimwidth($sdata['sort_description'],0,100,'...')?></p>
                    </div>
                </li>
                <?php $i++; }} ?>
            </ul>
        </div>
    </section>
 
    <section class="news-events padding-lg">
        <div class="container">
            <h2>About News & Updates</h2>
            <ul class="row cs-style-3">
                  <?php if(!empty($newsupdates['data'])){
                                                foreach ($newsupdates['data'] as $fdata) { ?>
                <li class="col-sm-4">
                    <div class="inner">
                        <figure> <a href="<?=BASE_PATH?>news/<?=$fdata['slug']?>"><img src="<?=ADMIN_PATH.$fdata['image']?>" class="img-responsive"></a>
                            <figcaption>
                                <div class="cnt-block"></a>
                                    <h3 class="new-h"><a href="<?=BASE_PATH?>news/<?=$fdata['slug']?>"><?=$fdata['name']?></a></h3>
                                </div>
                            </figcaption>
                        </figure>
                    </div>
                </li>
            <?php }}?>
          
       
            </ul>
            
        </div>
    </section>

<?php include('footer.php');?> 
    
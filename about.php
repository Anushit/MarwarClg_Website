<?php include('header.php');
$aboutdata = getData('cms',38);
$side_image = getData('sideimage',8);

     $filter = array(
            'table'=>'ci_teams',
            'order'=>'asc',
            'where'=> 'is_active=1'
        );  
        $teamData = postData('listing', $filter);


?>


    <div class="inner-banner blog" style="background:url(<?=ADMIN_PATH.$aboutdata['data']['cms_banner']?>);">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="content">
                        <h1>About Us</h1>
                        <p></p>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <section class="about inner padding-lg">
        <div class="container">
            <div class="row">
                <div class="col-md-7 left-block">
                    <h2><?=$aboutdata['data']['meta_title']?></h2>
                    <p><?=$aboutdata['data']['cms_contant']?></p>
                    
                </div>
                <div class="col-md-5 about-right"> <img src="<?=ADMIN_PATH.$side_image['data']['image']?>" class="img-responsive" alt=""> </div>
            </div>
        </div>
    </section>

  

   
    <section class="browse-teacher grey-bg padding-lg">
        <div class="container">
            <h2>Administrator Desk</h2>
            <ul class="row browse-teachers-list clearfix">
                         <?php if(!empty($teamData['data'])){
                                                foreach ($teamData['data'] as $Data) { ?>
                <li class="col-xs-6 col-sm-3">
                    <figure> <img src="<?=ADMIN_PATH.$Data['image']?>" width="123" height="124" alt=""> </figure>
                    <h3>Bruno Acselrad</h3>
                    <span class="designation"><?=$Data['name']?></span>
                    <p class="equal-hight"<?=$Data['department']?></p>
                    
                </li>
            <?php }} ?>    
                
            </ul>
        </div>
    </section>


    
<?php include('footer.php');?>
   
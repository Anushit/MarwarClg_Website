<?php require_once('config.php');

$filter = array(
'table'=>'ci_banners',
'sort'=>'sort_order',
'order'=>'asc',
'where'=> 'is_active=1'
 );  
$bannerData = postData('listing', $filter);



$filter = array(
        'table'=>'ci_gallery',
        'sort'=>'sort_order',
        'order'=>'asc',
        'start'=>'0',
        'limit'=>'10',
        'where'=> 'is_active=1'
    );  
$galleryData = postData('listing', $filter);
/*echo "<pre>";print_r($galleryData);die;*/




?>

<?php include('header.php');?>
    <div class="inner-banner blog" style="background:url(<?=ADMIN_PATH.$bannerData['data'][2]['image']?>);">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="content">
                        <h1>Gallery</h1>
                        <p></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

   
    <section class="campus-tour padding-lg">
        <div class="container text-center">
            <div class="isotopeFilters">
                <ul class="gallery-filter clearfix">
                    
                     
                  <li><a href="<?=BASE_PATH?>gallery" >All</a></li>

                    <?php if(!empty($galleryData['data'])){
                                foreach ($galleryData['data'] as $key => $Data) {
                                
                            ?>

                    <li ><a href="<?=BASE_PATH?>gallery/<?=$Data['id']?>" data-filter=".<?=$Data['album']?>"><?=$Data['album']?></a></li>
                <?php }} ?>
                    
                </ul>
            </div>
        </div>
        <!-- end filter -->
        <ul class="gallery clearfix isotopeContainer">
            <?php
                  if(!empty($galleryData['data'])){
                    foreach ($galleryData['data'] as $Data) {
                        
                    $filter = array(
                     'table'=>'ci_gallery_details',
                    'sort'=>'sort_order',
                    'order'=>'asc',
                    'where'=> 'is_active=1 && gallery_id='.$Data['id']
                     );  
                     $imageData = postData('listing', $filter);
                    /* echo "<pre>";print_r($imageData);die;*/

                     
                     ?>
                     <div class="gmimage">
                         <?php
                          if(!empty($imageData['data'])){
                              foreach ($imageData['data'] as $key => $mvalue) { ?>
              
            <li class="isotopeSelector Party contest <?=str_replace(' ', '', $Data['album']);?>">
                <div class="overlay">
                    <a class="galleryItem" href="<?=ADMIN_PATH.$mvalue['value']?>"><span class="icon-enlarge-icon"></span></a> 
                </div>
                <figure><img src="<?=ADMIN_PATH.$mvalue['value']?>"  height="200" class="img-responsive" alt=""></figure>
          
                 </li>
            <?php }}
            
             ?>
        </div>
    <?php }} ?>
      
        </ul>
      <div class="text-center">
           <ul class="pagination blue">
                <!-- <li> <a href="#" aria-label="Previous"> <span aria-hidden="true"><i class="fa fa-angle-left" aria-hidden="true"></i> Back</span> </a> </li>
                <li><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li> <a href="#" aria-label="Next"> <span aria-hidden="true">Next <i class="fa fa-angle-right" aria-hidden="true"></i></span> </a> </li> -->
            </ul> 
        </div> 
    </section>
<?php include('footer.php');?>
<?php include('header.php');

     $filter = array(
        'table'=>'ci_banners',
        'sort'=>'sort_order',
        'order'=>'asc',
        'where'=> 'is_active=1'
       );  
     $bannerData = postData('listing', $filter);

             $filter = array(
            'table'=>'ci_blogs',
            'order'=>'asc',
            'where'=> 'is_active=1'
        );  
        $courseData = postData('listing', $filter);



?>

<div class="inner-banner blog" style="background:url(<?=ADMIN_PATH.$bannerData['data'][2]['image']?>);">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="content">
                        <h1>Courses </h1>
                        <p></p>
                    </div>
                </div>
            </div>
        </div>
    </div>



    
    <section class="news-events padding-lg">
        <div class="container">
            <h2>Courses</h2>
            <ul class="row cs-style-3">
                  <?php if(!empty($courseData['data'])){
                                                foreach ($courseData['data'] as $cdata) { ?>
                <li class="col-sm-4">
                    <div class="inner">
                        <figure> <img src="<?=ADMIN_PATH.$cdata['image']?>" class="img-responsive">
                            <figcaption>
                                <div class="cnt-block"></a>
                                    <h3 class="new-h"><a href="<?=BASE_PATH?>course_detail/<?=$cdata['slug']?>"><?=$cdata['name']?></a></h3>
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
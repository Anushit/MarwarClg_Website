  <?php include('header.php');



   $filter = array(
        'table'=>'ci_banners',
        'sort'=>'sort_order',
        'order'=>'asc',
        'start'=>'0',
        'limit'=>'1',
        'where'=> 'is_active=1 && name=Banner3'
    );  
$bannerData = postData('listing', $filter);

  $filter = array(
        'table'=>'ci_faq',
        'sort'=>'sort_order',
        'order'=>'asc',
        'start'=>'0',
        'limit'=>'5',
        'where'=> 'is_active=1'
    );  
  $faqs = postData('listing', $filter);
  
?>
    <div class="inner-banner blog" style="background:url(<?=ADMIN_PATH.$bannerData['data']['image']?>); ">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="content">
                        <h1>Faq</h1>
                        <p></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ==============================================
    ** FAQ **
    =================================================== -->
    <section class="faq-wrapper padding-lg">
        <div class="container">
        <!--     <div class="row">
                <div class="col-sm-10 col-sm-offset-1">
                    <div class="search-block clearfix">
                        <input name="Search" placeholder="Search Now" type="text">
                        <button class="search"><span class="icon-search-icon"></span></button>
                    </div>
                </div>
            </div> -->
            <ul class="row faq-listing">
                    <?php if(!empty($faqs['data'])){
                            foreach ($faqs['data'] as $key => $fq) {?>
                <li class="col-sm-6">
                    <div class="inner equal-hight">
                        <h2><?=$fq['question']?>?</h2>
                        <p><?=$fq['answer']?></p>
                    </div>
                </li>
            <?php }}?>
            </ul>
            <hr>
        <!--     <div class="text-center">
                <ul class="pagination blue">
                    <li> <a href="#" aria-label="Previous"> <span aria-hidden="true"><i class="fa fa-angle-left" aria-hidden="true"></i> Back</span> </a> </li>
                    <li><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li> <a href="#" aria-label="Next"> <span aria-hidden="true">Next <i class="fa fa-angle-right" aria-hidden="true"></i></span> </a> </li>
                </ul>
            </div> -->
        </div>
    </section>

   <?php include('footer.php');?>
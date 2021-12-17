<?php include('header.php');

       $id = $_GET['id'];
       $filter = array(
            'table'=>'ci_cms',
            'order'=>'asc',
            'where'=> 'is_active=1 && cms_name="Faculty" && id='.$id 
        );  
        $FacultyData = postData('listing', $filter); 

     $filter = array(
        'table'=>'ci_banners',
        'sort'=>'sort_order',
        'order'=>'asc',
        'where'=> 'is_active=1'
       );  
     $bannerData = postData('listing', $filter);
         
?>


    <div class="inner-banner blog" style="background:url(<?=ADMIN_PATH.$bannerData['data'][2]['image']?>);">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="content">
                        <h1>Faculties</h1>
                        <p></p>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <section class="about inner padding-lg">
        <div class="container">
            <div class="row">
                  <?php if(!empty($FacultyData['data'])){
                                                foreach ($FacultyData['data'] as $Data) { ?>
                <div class="col-md-12 left-block">
                    <h2><?=$Data['cms_title']?></h2>
                    <p><?=$Data['cms_contant']?></p>
                    
                </div>
            <?php }}?>
  
            </div>
        </div>
    </section>

<?php include('footer.php');?>
   
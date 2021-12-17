<?php require_once('config.php');
$general_setting = getData('setting');

if(isset($general_setting['data']['meta_title']) && !empty($general_setting['data']['meta_title'])){
    $meta_title = $general_setting['data']['meta_title'];
}
if(isset($general_setting['data']['phone']) && !empty($general_setting['data']['phone'])){
    $phone = $general_setting['data']['phone'];
}
if(isset($general_setting['data']['email']) && !empty($general_setting['data']['email'])){
    $email = $general_setting['data']['email'];
}
if(isset($general_setting['data']['blacklogo']) && !empty($general_setting['data']['blacklogo'])){
    $logo = $general_setting['data']['blacklogo'];
}
if(isset($general_setting['data']['favicon']) && !empty($general_setting['data']['favicon'])){
    $icon = $general_setting['data']['favicon'];
}
$facebook_link = $general_setting['data']['facebook_link'];
$twitter_link = $general_setting['data']['twitter_link'];
$linkedin_link = $general_setting['data']['linkedin_link'];
$youtube_link = $general_setting['data']['youtube_link'];
$instagram_link = $general_setting['data']['instagram_link'];

       $filter = array(
            'table'=>'ci_cms',
            'order'=>'asc',
            'where'=> 'is_active=1 && cms_name="About"'
        );  
        $abtData = postData('listing', $filter);

           $filter = array(
            'table'=>'ci_cms',
            'order'=>'asc',
            'where'=> 'is_active=1 && cms_name="Trades"'
        );  
        $tradesData = postData('listing', $filter);
      

           $filter = array(
            'table'=>'ci_cms',
            'order'=>'asc',
            'where'=> 'is_active=1  && cms_name="Faculty"'
        );  
        $FacultyData = postData('listing', $filter);

            $filter = array(
            'table'=>'ci_services',
            'order'=>'asc',
            'where'=> 'is_active=1'
        );  
        $ServiceData = postData('listing', $filter);


            $filter = array(
            'table'=>'ci_cms',
            'order'=>'asc',
            'where'=> 'is_active=1 && cms_name="Monitoring"'
        );  
        $MoniterData = postData('listing', $filter);
      /*   echo "<pre>";print_r($ServiceData);die;*/

              $filter = array(
            'table'=>'ci_blogs',
            'order'=>'asc',
            'where'=> 'is_active=1'
        );  
        $courseData = postData('listing', $filter);
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <link rel="shortcut icon" type="image/x-icon" href="<?=ADMIN_PATH.$icon; ?>">
    <title><?=$meta_title?></title>

    <!-- CSS -->

    <link href="<?=BASE_PATH?>css/reset.css" rel="stylesheet">
    <link href="<?=BASE_PATH?>css/fonts.css" rel="stylesheet">
    <link href="<?=BASE_PATH?>assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?=BASE_PATH?>assets/select2/css/select2.min.css" rel="stylesheet">
    <link href="<?=BASE_PATH?>assets/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?=BASE_PATH?>assets/magnific-popup/css/magnific-popup.css" rel="stylesheet">
    <link href="<?=BASE_PATH?>assets/iconmoon/css/iconmoon.css" rel="stylesheet">
    <link href="<?=BASE_PATH?>assets/owl-carousel/css/owl.carousel.min.css" rel="stylesheet">
    <link href="<?=BASE_PATH?>css/animate.css" rel="stylesheet">
    <link href="<?=BASE_PATH?>css/custom.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?=BASE_PATH?>css/style.css">
    
    
</head>

<body>

    <!-- ==============================================
    ** Preloader **
    =================================================== -->
    <div id="loading">
        <div class="element">
            <div class="sk-folding-cube">
                <div class="sk-cube1 sk-cube"></div>
                <div class="sk-cube2 sk-cube"></div>
                <div class="sk-cube4 sk-cube"></div>
                <div class="sk-cube3 sk-cube"></div>
            </div>
        </div>
    </div>

    <!-- ==============================================
    ** Header **
    =================================================== -->
    <header>
        <!-- Start Header top Bar -->
        <div class="header-top">
            <div class="container clearfix">
                <ul class="follow-us hidden-xs">
                    <li <?php if(empty($twitter_link)){?>style="display: none;"<?php }?>><a href="<?=$twitter_link?>" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                    <li <?php if(empty($facebook_link)){?>style="display: none;"<?php }?>><a href="<?=$facebook_link?>"  target="_blank"><i class="fa fa-facebook-official" aria-hidden="true"></i></a></li>
                    <li<?php if(empty($linkedin_link)){?>style="display: none;"<?php }?>><a href="<?=$linkedin_link?>" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                    <li<?php if(empty($youtube_link)){?>style="display: none;"<?php }?>><a href="<?=$youtube_link?>" target="_blank"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
                    <li<?php if(empty($instagram_link)){?>style="display: none;"<?php }?>><a href="<?=$instagram_link?>" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                </ul>
                <div class="right-block clearfix">
                    <ul class="top-nav hidden-xs">
                       <!--  <li><a href="">Apply Online</a></li> -->
                        <li><a href="<?=BASE_PATH?>faq">FAQs</a></li>
                        <li><a href="<?=BASE_PATH?>about">About Us</a></li>
                    </ul>
                 <!--    <div class="lang-wrapper">
                        <div class="select-lang">
                            <select id="currency_select">
                                <option value="usd">USD</option>
                                <option value="aud">AUD</option>
                                <option value="gbp">GBP</option>
                            </select>
                        </div>
                        <div class="select-lang2">
                            <select class="custom_select">
                                <option value="en">English</option>
                                <option value="fr">French</option>
                                <option value="de">German</option>
                            </select>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
        <!-- End Header top Bar -->
        <!-- Start Header Middle -->
        <div class="container header-middle">
            <div class="row"> <span class="col-xs-6 col-sm-3"><a href="<?=BASE_PATH?>index"><img src="<?=ADMIN_PATH.$logo?>" class="img-responsive" alt=""></a></span>
                <div class="col-xs-6 col-sm-3"></div>
                <div class="col-xs-6 col-sm-9">
                    <div class="contact clearfix">
                        <ul class="hidden-xs">
                            <li <?php if(empty($email)){?>style="display: none;"<?php }?>> <span>Email</span> <a href="mailto:<?=$email?>"><?=$email?></a> </li>
                            <li <?php if(empty($phone)){?>style="display: none;"<?php }?>> <span>Phone</span> <?=$phone?> </li>
                        </ul>
                        <a href="<?=BASE_PATH?>contact" class="login">Contact Now<span class="icon-more-icon"></span></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Header Middle -->
        <!-- Start Navigation -->
        <nav class="navbar navbar-inverse">
            <div class="container">
                <div class="navbar-header">
                    <button aria-controls="navbar" aria-expanded="false" data-target="#navbar" data-toggle="collapse" class="navbar-toggle collapsed" type="button"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                </div>
                <div class="navbar-collapse collapse" id="navbar">
                 <!--    <form class="navbar-form navbar-right">
                        <input type="text" placeholder="Search Now" class="form-control">
                        <button class="search-btn"><span class="icon-search-icon"></span></button>
                    </form> -->
                    <ul class="nav navbar-nav">
                      
                        <li> <a href="<?=BASE_PATH?>index">Home</a></li>
                          <li class="dropdown"> <a data-toggle="dropdown" href="<?=BASE_PATH?>about">About <i class="fa fa-angle-down" aria-hidden="true"></i></a>
                            <ul class="dropdown-menu">
                                         <?php if(!empty($abtData['data'])){
                                                foreach ($abtData['data'] as $Data) { ?>
                                <li><a href="<?=BASE_PATH?>about_detail/<?=$Data['id']?>"><?=$Data['cms_title']?></a></li>
                            <?php }}?>
                            </ul>
                        </li>
                        <li class="dropdown"> <a data-toggle="dropdown" href="#">Trades<i class="fa fa-angle-down" aria-hidden="true"></i></a>
                            <ul class="dropdown-menu">
                                 <?php if(!empty($tradesData['data'])){
                                                foreach ($tradesData['data'] as $tdata) { ?>
                                <li><a href="<?=BASE_PATH?>trade_detail/<?=$tdata['id']?>"><?=$tdata['cms_title']?></a></li>
                            <?php }}?>
                                
                            </ul>
                        </li>
                          <li class="dropdown"> <a data-toggle="dropdown" href="#">Faculty <i class="fa fa-angle-down" aria-hidden="true"></i></a>
                            <ul class="dropdown-menu">
                                     <?php if(!empty($FacultyData['data'])){
                                                foreach ($FacultyData['data'] as $fdata) { ?>
                                <li><a href="<?=BASE_PATH?>Faculty_detail/<?=$fdata['id']?>"><?=$fdata['cms_title']?></a></li>
                                <?php }}?>
                            </ul>
                        </li>
                          <li class="dropdown"> <a data-toggle="dropdown" href="#">Courses <i class="fa fa-angle-down" aria-hidden="true"></i></a>
                            <ul class="dropdown-menu">
                                <?php if(!empty($courseData['data'])){
                                                foreach ($courseData['data'] as $cdata) { ?>
                                <li><a href="<?=BASE_PATH?>course_detail/<?=$cdata['slug']?>"><?=$cdata['name']?></a></li>
                                <?php }} ?>
                            </ul>
                        </li>
                            <li class="dropdown"> <a data-toggle="dropdown" href="#">Facilities <i class="fa fa-angle-down" aria-hidden="true"></i></a>
                            <ul class="dropdown-menu">
                                 <?php if(!empty($ServiceData['data'])){
                                                foreach ($ServiceData['data'] as $sdata) { ?>
                                <li><a href="<?=BASE_PATH?>facilities/<?=$sdata['id']?>"><?=$sdata['name']?></a></li>
                                <?php }}?>
                            </ul>
                        </li>
                        <li class="dropdown"> <a data-toggle="dropdown" href="#">Monitering <i class="fa fa-angle-down" aria-hidden="true"></i></a>
                            <ul class="dropdown-menu">
                                <?php if(!empty($MoniterData['data'])){
                                                foreach ($MoniterData['data'] as $mdata) { ?>
                                <li><a href="<?=BASE_PATH?>Monitoring/<?=$mdata['id']?>"><?=$mdata['cms_title']?></a></li>
                                <?php }} ?>
                            </ul>
                        </li>
                        <li> <a href="<?=BASE_PATH?>contact">Contact</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- End Navigation -->
    </header>

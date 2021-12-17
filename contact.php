<?php include('header.php');

    $filter = array(
        'table'=>'ci_banners',
        'sort'=>'sort_order',
        'order'=>'asc',
        'where'=> 'is_active=1'
       );  
     $bannerData = postData('listing', $filter);

$map = $general_setting['data']['google_iframe'];
$address = $general_setting['data']['address'];

if(isset($_POST['submit'])){ 
    $msg = '';
    if($msg==''){
        $data = $_POST;
        $contactData = postData('saveinquery', $data);
        $msg = $contactData['message'];
    } 
}
?>


    <div class="inner-banner contact" style="background:url(<?=ADMIN_PATH.$bannerData['data'][2]['image']?>);">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 col-lg-9">
                    <div class="content">
                        <h1>Contact Us</h1>
                    </div>
                </div>
               <!--  <div class="col-sm-4 col-lg-3"> <a href="apply-online.html" class="apply-online clearfix">
                        <div class="left clearfix"> <span class="icon"><img src="<?=ADMIN_PATH.$bannerData['data']['image']?>" class="img-responsive" alt=""></span> <span class="txt">Apply Online</span> </div>
                        <div class="arrow"><i class="fa fa-angle-right" aria-hidden="true"></i></div>
                    </a></div> -->
            </div>
        </div>
    </div>

    <!-- ==============================================
    ** Contact Us **
    =================================================== -->
    <section class="form-wrapper padding-lg">
        <div class="container">
              <div style="background-color: white; border:0;">
              <?php
                  if(!empty($msg)){
                  echo "<div class='alert alert-success text-center'>".$msg."</div>";
                  } 
              ?>
        </div> 
            <form name="contact-form" method="post" id="ContactForm">
                <div class="row input-row">
                    <div class="col-sm-6">
                        <input name="name" id="name" type="text" placeholder="Name">
                    </div>
                    <div class="col-sm-6">
                        <input name="email" id="email" type="email" placeholder="Email">
                    </div>
                </div>
                <div class="row input-row">
                    <div class="col-sm-6">
                        <input name="mobile" id="mobile" type="text" placeholder="Mobile">
                    </div>
                    <div class="col-sm-6">
                        <input name="subject" id="subject" type="text" placeholder="Subject">
                    </div>
                </div>
                <div class="row input-row">
                    <div class="col-sm-6">
                        <input name="message" id="message" type="text" placeholder="Message">
                    </div>
                   
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <button class="btn" type="submit" name="submit"
                        id="submit-form">Apply Now <span class="icon-more-icon"></span></button>
                        <div class="msg"></div>
                    </div>
                </div>
            </form>
        </div>
    </section>

    <!-- ==============================================
    ** Google Map **
    =================================================== -->
    <section class="google-map">
        <div id="map"><?=$map?></div>
        <div class="container">

            <div class="contact-detail">
                <div class="address">
                    <div class="inner">
                        <h3 <?php if(empty($address)){?>style="display: none;"<?php }?>><?=$address?></h3>
                        <p></p>
                    </div>
                    <div class="inner">
                        <h3 <?php if(empty($phone)){?>style="display: none;"<?php }?>><?=$phone?></h3>
                    </div>
                    <div class="inner" <?php if(empty($email)){?>style="display: none;"<?php }?>> <a href="mailto:<?=$email?>"><?=$email?></a> </div>
                </div>
                <div class="contact-bottom">
                    <ul class="follow-us clearfix">
                        <li <?php if(empty($twitter_link)){?>style="display: none;"<?php }?>><a href="<?=$twitter_link?>" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                    <li <?php if(empty($facebook_link)){?>style="display: none;"<?php }?>><a href="<?=$facebook_link?>"  target="_blank"><i class="fa fa-facebook-official" aria-hidden="true"></i></a></li>
                    <li<?php if(empty($linkedin_link)){?>style="display: none;"<?php }?>><a href="<?=$linkedin_link?>" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                    <li<?php if(empty($youtube_link)){?>style="display: none;"<?php }?>><a href="<?=$youtube_link?>" target="_blank"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
                    <li<?php if(empty($instagram_link)){?>style="display: none;"<?php }?>><a href="<?=$instagram_link?>" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    
    <?php include('footer.php');?>

    <script type="text/javascript"> 
        //Refresh Captcha
        jQuery(document).ready(function(){

            jQuery(document).on("click", "#contact-form", function(e){  
            if (jQuery("#ContactForm").valid()) { 
                // alert("asdf");
                jQuery("#ContactForm").submit();
            }
        });

        jQuery("#ContactForm").validate({
            rules: {
                name: "required",
                email: {required: true, email: true},
                mobile: {
                    required: true, 
                    number: true,
                    minlength:10,
                    maxlength:10,
                },
                subject: "required",
                message: "required", 
            },
            messages: {
                name: "Please Enter Full Name",
                email: { 
                  "required": "Please Enter Email Address",
                  "email": "Please Enter Valid Email Address",
                },
                mobile: { 
                  "required": "Please Enter Mobile No.",
                  "number": "Please Enter Valid Mobile No",
                  "minlength": "Mobile No Should Be 10 Digits",
                  "maxlength": "Mobile No Should Be 10 Digits",
                },
                subject: "Please Enter Subject",
                message: "Please Enter Message",  
            }
        }); 

        });
  

</script>
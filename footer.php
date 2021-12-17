 <?php 

$facebook_link = $general_setting['data']['facebook_link'];
$twitter_link = $general_setting['data']['twitter_link'];
$linkedin_link = $general_setting['data']['linkedin_link'];
$youtube_link = $general_setting['data']['youtube_link'];
$instagram_link = $general_setting['data']['instagram_link'];
$sticky_logo = $general_setting['data']['logo'];


/*echo "<pre>";print_r($general_setting);die;*/

if(isset($general_setting['data']['whatsapp_button']) && !empty($general_setting['data']['whatsapp_button'])){
    $whatsapp_button = $general_setting['data']['whatsapp_button'];
}

  $filter = array(
            'table'=>'ci_cms',
            'order'=>'asc',
            'where'=> 'is_active=1 && cms_name="About"'
        );  
        $abtData = postData('listing', $filter);

            $filter = array(
            'table'=>'ci_services',
            'order'=>'asc',
            'where'=> 'is_active=1'
        );  
        $ServiceData = postData('listing', $filter);
 ?>

 <footer class="footer">
        <!-- Start Footer Top -->
        <div class="bottom">
            <div class="container">
                <div class="footer-row">

                    <div class="col-sm-4" style="display: flex;align-items: center;">
                        <h2 style="padding: 0px;">Join Our Newsletter</h2>

                    </div>
                 
                    <div class="col-sm-8">
                        <div class="subscribe col-sm-6" style="padding-bottom: 0px;">
                         
                            <div id="mc_embed_signup">

                                <form class="sub-form" method="post" id="sub-form">
                                    <div id="mc_embed_signup_scroll">
                                        <input type="email" name="email" class="email" id="email" placeholder="enter your email address">

                                        <div class="clear">
                                            <input type="submit" name="submit" id="subscribe-form" value="Subscribe" class="button">
                                           

                                        </div>
                                         
                                    </div>
                                    
                                </form>

                            </div>
                            <label id="email-error" style='display: none;float: inherit;' class="error" for="email">Please Enter Email Address</label>

                        </div>

                    </div> 
      
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row row1">
                <div class="col-sm-9 clearfix">
                    <div class="foot-nav">
                        <h3>About US</h3>
                        <ul>
                            <?php if(!empty($abtData['data'])){
                                                foreach ($abtData['data'] as $Data) { ?>
                                <li><a href="<?=BASE_PATH?>about_detail/<?=$Data['id']?>"><?=$Data['cms_title']?></a></li>
                            <?php }}?>
                            
                        </ul>
                    </div>
                    <div class="foot-nav">
                        <h3>Facilities</h3>
                        <ul>
                             <?php if(!empty($ServiceData['data'])){
                                                foreach ($ServiceData['data'] as $sdata) { ?>
                                <li><a href="<?=BASE_PATH?>facilities/<?=$sdata['id']?>"><?=$sdata['name']?></a></li>
                                <?php }}?>
                            
                        </ul>
                    </div>
                    <div class="foot-nav">
                        <h3>UseFul Links</h3>
                        <ul>
                            <li><a >DGET New Delhi</a></li>
                            <li><a>DTE,Rajasthan</a></li>
                            
                        </ul>
                    </div>
                    <div class="foot-nav">
                        <h3>Quick Links</h3>
                        <ul>
                                <li><a href="<?=BASE_PATH?>index">Home</a></li>
                                <li><a href="<?=BASE_PATH?>about">About</a></li>
                                <li><a href="<?=BASE_PATH?>courses">Courses</a></li>
                                <li><a href="<?=BASE_PATH?>gallery">Photo Gallery</a></li>
                                 <!-- <li><a href="">Video Gallery</a></li> -->
                                  <li><a href="<?=BASE_PATH?>contact">Contact</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="footer-logo hidden-xs"><a href="index-2.html"><img src="<?=ADMIN_PATH.$sticky_logo?>" class="img-responsive" alt=""></a></div>
                        <div class="connect-us">
                            <h3>Connect with Us</h3>
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
        </div>

            <div>
            <?=$whatsapp_button?>

        </div>

        <div class="container footer" style="background: #2e5f85;width: 100%;">
              <p style="text-align: center;"><?=$general_setting['data']['copyright']?>  | Developed By : <a href="https://adiyogitechnosoft.com" target="_blank"style="color:white">Adiyogi Technosoft</a></p>
              
          </div>

    </footer>
    


    <a href="#" class="scroll-top"><i class="fa fa-chevron-up" aria-hidden="true"></i></a>

    <script src="<?=BASE_PATH?>js/jquery.min.js"></script>
    <script src="<?=BASE_PATH?>assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?=BASE_PATH?>assets/select2/js/select2.min.js"></script>
    <script src="<?=BASE_PATH?>assets/matchHeight/js/matchHeight-min.js"></script>
    <script src="<?=BASE_PATH?>assets/bxslider/js/bxslider.min.js"></script>
    <script src="<?=BASE_PATH?>assets/magnific-popup/js/magnific-popup.min.js"></script>
    <script src="<?=BASE_PATH?>assets/owl-carousel/js/owl.carousel.min.js"></script>
    <script src="<?=BASE_PATH?>js/modernizr.custom.js"></script>
    <script src="<?=BASE_PATH?>/assets/isotope/js/isotope.min.js"></script>
    <script src="<?=BASE_PATH?>js/custom.js"></script>
      <script src="<?=BASE_PATH?>js/wimmViewer.min.js"></script>   
    <script src='https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/jquery.validate.min.js' >
    </script> 
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/css/toastr.css" rel="stylesheet"/>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/js/toastr.js"></script>  
<script type="text/javascript">
        //Refresh Captcha
        jQuery(document).ready(function(){

            jQuery(document).on("click", "#subscribe-form", function(e){  

            if (jQuery("#sub-form").valid()) { 
                jQuery("#email-error").hide();
               
                jQuery("#sub-form").submit();
            }
            else
            {
                jQuery("#email-error").show();
            }
        });

        jQuery("#sub-form").validate({
            rules: {
                email: {required: true, email: true},
                
            },
            messages: {
                email: { 
                  "required": "Please Enter Email Address",
                  "email": "Please Enter Valid Email Address",
                },
                   
            },

            errorPlacement:function( error, element ){
                return false;
             
           }
        }); 

        });
  
  if ( window.history.replaceState ) {
  window.history.replaceState( null, null, window.location.href );
}

</script>
<?php 
if (isset($_POST['submit']) && isset($_POST['email'] ) && $_POST['email'] != "") {
        $msg = '';
        $error = '';
        if($error==''){
            $data = $_POST;  
            $formdata = postData('savenewsletter', $data);
            /*$_POST['email'] =''; */
            echo '<script type="text/javascript">toastr.success("Your request received successfully")</script>';
        } 
                                
    }


?>
</body>


<!-- Mirrored from protechtheme.com/edumart/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 10 Aug 2021 07:59:36 GMT -->
</html>

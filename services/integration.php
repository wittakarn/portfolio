<?php
ini_set('display_errors', 1); 
error_reporting(E_ALL);
require_once("../config.php");
?>

  <!DOCTYPE html>
  <html lang="th">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="รับเขียนโปรแกรม รับทำเว็บไซต์ พัฒนาระบบฐานข้อมูล">
    <meta name="author" content="">

    <title>รับเขียนโปรแกรม, พัฒนาระบบ, พัฒนาระบบฐานข้อมูล</title>

    <link rel='shortcut icon' href='<?php echo ROOT; ?>favicon.ico' type='image/x-icon' />
    <link rel="icon" href="<?php echo ROOT; ?>favicon.ico" type="image/x-icon">

    <!-- Bootstrap core CSS -->
    <link href="<?php echo ROOT; ?>bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">


    <!-- Custom CSS -->
    <link href="<?php echo ROOT; ?>css/theme.css" rel="stylesheet">
    <link href="<?php echo ROOT; ?>css/stylish-portfolio.css" rel="stylesheet">

    <!-- Image gallery CSS -->
    <link href="<?php echo ROOT; ?>css/blueimp-gallery.css" rel="stylesheet">
    <link href="<?php echo ROOT; ?>css/blueimp-gallery-indicator.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo ROOT; ?>font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <link rel="stylesheet" type="text/css" href="<?php echo ROOT; ?>css/error.message.css" />

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <script src="<?php echo ROOT; ?>lib/jquery/jquery-1.11.3.min.js"></script>
    <script src="<?php echo ROOT; ?>bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- Image gallery JavaScript -->
    <script src="<?php echo ROOT; ?>lib/jquery/blueimp-helper.js"></script>
    <script src="<?php echo ROOT; ?>lib/jquery/blueimp-gallery.js"></script>
    <script src="<?php echo ROOT; ?>lib/jquery/blueimp-gallery-fullscreen.js"></script>
    <script src="<?php echo ROOT; ?>lib/jquery/blueimp-gallery-indicator.js"></script>
    <script src="<?php echo ROOT; ?>lib/jquery/jquery.blueimp-gallery.js"></script>
  </head>

  <body>
    <?php
      include DOCUMENT_ROOT.'include/services-menu.php';
    ?>
      <div class="container">
        <div class="panel panel-default">
          <div class="panel-body">
            <div class="panel-body row">
              <div class="cpl-md-12">
                <h2>เชื่อต่อกับระบบต่างๆ</h2>
                <p class="text-indent">
                  การเชื่อมต่อกับระบบภายนอกเป็นสิ่งที่ขาดไม่ได้ในระบบปัจจุบันนี้ หากท่านต้องการระบบ login ที่สามารถเข้าสู่ระบบของท่านได้ด้วย
                  <a href="https://www.facebook.com/" title="Facebook" target="_blank">Facebook</a> login การเชื่อมกับ Facebook
                  เป็นสิ่งที่ขาดไม่ได้ หรือหากท่านต้องการมี <a href="https://maps.google.com" target="_blank">Google map</a>                  บนระบบของท่านการเชื่อมต่อกับ Google ก็เป็นสิ่งจำเป็น ทางเรามีประสบการณ์การเขียนโปรแกรมเชื่อมต่อระบบภายนอกมากมาย
                  เช่น Google, Facebook, <a href="https://www.google.com/recaptcha" title="reCAPTCHA">reCAPTCHA</a>, <a href="https://en.wikipedia.org/wiki/Single_sign-on"
                    title="Single sign-on" target="_blank">Single sign-on</a> ฯลฯ
                </p>
                <br/><br/>
                <h3>การเชื่อมต่อระบบต่างๆ</h3>
                <hr/>
                <div class="row">
                  <div class="col-lg-10 col-lg-offset-1 text-center">
                    <div class="row">
                      <div class="col-md-6">
                        <h4>reCAPTCHA</h4>
                        <img class="img-portfolio img-responsive" src="<?php echo ROOT.'img/ipst/2.jpg' ?>" alt="reCAPTCHA" />
                      </div>
                      <div class="col-md-6">
                        <h4>Facebook login</h4>
                        <img class="img-portfolio img-responsive" src="<?php echo ROOT.'img/other/1.jpg' ?>" alt="Facebook login" />
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <?php
        include DOCUMENT_ROOT.'include/services-footer.php';
      ?>
      <section id="seo" class="call-to-action bg-primary">
        <?php
          include DOCUMENT_ROOT.'include/index-seo.php';
        ?>
      </section>
  </body>

  </html>
  <script src="<?php echo ROOT; ?>js/menu-event.js"></script>
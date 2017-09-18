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
                <h2>ออกแบบเว็บไซต์</h2>
                <hr/>
                <p class="text-indent">
                  การออกแบบเว็บไซต์ที่ดีต้องคำนึงถึงประสบการณ์การใช้งานของผู้ใช้งาน, ความรู้สึกของผู้ใช้งาน, ดูใช้งานง่าย, ทำงานได้รวดเร็ว
                  ทางเรามีประสบการ์ออกแบบเว็บไซต์มากกว่า 10 ปี โดยใช้หลักการ <a href="https://en.wikipedia.org/wiki/User_experience_design"
                    title="User experience design" target="_blank">User experience design</a>
                </p>
                <br/><br/>
                <h3>ระบบขายสินค้า ออกใบเสนอราคา</h3>
                <hr/>
                <p class="text-indent">
                  เป็นระบบที่ทางเราทำให้บริษัท <a href="http://www.sirichaielectric.com/" target="_blank" title="ศิริชัย อิเล็คทริค">ศิริชัย อิเล็คทริค</a> โดยตัวระบบสามารถ ออกใบเสนอราคา, ออกใบเสร็จรับเงิน, ดูสถานะของลูกค้า ฯลฯ. ทุกวันนี้ระบบใช้ออกใบเสร็จรับเงินมากกว่า 500 รายการต่อวัน ทำให้เป็นที่พอใจของลูกค้าเป็นอย่างมาก
                </p>
                <div class="row">
                  <div class="col-lg-10 col-lg-offset-1 text-center">
                    <div class="row">
                      <div class="col-md-6">
                        <h4>เพิ่มรายการสินค้า</h4>
                        <div class="portfolio-item">
                          <img class="img-portfolio img-responsive" src="<?php echo ROOT.'img/sequot/1.jpg' ?>" alt="เพิ่มรายการสินค้า" />
                        </div>
                      </div>
                      <div class="col-md-6">
                        <h4>เพิ่มลูกค้า</h4>
                        <div class="portfolio-item">
                          <img class="img-portfolio img-responsive" src="<?php echo ROOT.'img/sequot/2.jpg' ?>" alt="เพิ่มลูกค้า" />
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <h4>ปรับราคาสินค้า</h4>
                        <div class="portfolio-item">
                          <img class="img-portfolio img-responsive" src="<?php echo ROOT.'img/sequot/3.jpg' ?>" alt="ปรับราคาสินค้า" />
                        </div>
                      </div>
                      <div class="col-md-6">
                        <h4>ขายสินค้า</h4>
                        <div class="portfolio-item">
                          <img class="img-portfolio img-responsive" src="<?php echo ROOT.'img/sequot/4.jpg' ?>" alt="ขายสินค้า" />
                        </div>
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
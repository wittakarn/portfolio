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
                <h2>จัดการฐานข้อมูล, ออกรายงาน</h2>
                <hr/>
                <p class="text-indent">
                  DBMS เป็นกลุ่มโปรแกรมที่ทำหน้าที่เป็นตัวกลางในระบบติดต่อระหว่างผู้ใช้กับฐานข้อมูล เพื่อจัดการและควบคุมความถูกต้อง ความซ้ำซ้อน
                  และความสัมพันธ์ระหว่างข้อมูลต่างๆ ภายในฐานข้อมูล โดยปกติแล้วระบบฐานข้อมูลจะใช้สำหรับเก็บข้อมูล หากลูกค้าต้องการดึงข้อมูลแบบซับซ้อนเพื่อมาออกรางาน
                  จึงจำเป็นต้องทำระบบเพื่อดึงข้อมูลสำหรับออกรายงาน ทางเรามีประสบการณ์การเขียนโปรแกรมดึงข้อมูลจากฐานข้อมูลมาแสดงเป็นรายงานแบบต่างๆมากมาย
                  เช่น pdf, excel, word ฯลฯ
                </p>
                <h4>
                  ทางเรามีประสบการณ์ในการออกแบบฐานข้อมูลต่างๆดังนี้
                </h4>
                <ul>
                  <li>Mysql</li>
                  <li>Oracle</li>
                  <li>DB2</li>
                </ul>
                <br/><br/>
                <h3>รายงานแบบต่างๆที่เคยจัดทำ</h3>
                <hr/>
                <div class="row">
                  <div class="col-lg-10 col-lg-offset-1 text-center">
                    <div class="row">
                      <div class="col-md-6">
                        <h4>ออกใบเสร็จรับเงิน</h4>
                        <a href="<?php echo ROOT.'img/sequot/quotation-detail1.pdf' ?>" title="ออกใบเสร็จรับเงิน" target="_blank">
                          <img class="img-portfolio img-responsive" src="<?php echo ROOT.'img/sequot/5.jpg' ?>" alt="ออกใบเสร็จรับเงิน" />
                        </a>
                      </div>
                      <div class="col-md-6">
                        <h4>ใบเสนอราคาพร้อมรูปสินค้า</h4>
                        <a href="<?php echo ROOT.'img/sequot/quotation-detail2.pdf' ?>" title="ใบเสนอราคาพร้อมรูปสินค้า" target="_blank">
                          <img class="img-portfolio img-responsive" src="<?php echo ROOT.'img/sequot/6.jpg' ?>" alt="ใบเสนอราคาพร้อมรูปสินค้า" />
                      </a>
                      </div>
                    </div>
                    <br/>
                    <div class="row">
                      <div class="col-md-8 center">
                        <h4>กราฟ สถิติ รายงานแบบสอบถาม</h4>
                        <a href="<?php echo ROOT.'img/ipst/7.pdf' ?>" title="กราฟ สถิติ รายงานแบบสอบถาม" target="_blank">
                        <img class="img-portfolio img-responsive" src="<?php echo ROOT.'img/ipst/6.jpg' ?>" alt="กราฟ สถิติ รายงานแบบสอบถาม" />
                      </a>
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
  </body>

  </html>
  <script src="<?php echo ROOT; ?>js/menu-event.js"></script>
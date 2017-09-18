<?php
ini_set('display_errors', 1); 
error_reporting(E_ALL);
require_once("config.php");
include DOCUMENT_ROOT.'include/permission.php';
?>

  <!DOCTYPE html>
  <html lang="th">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="รับเขียนโปรแกรม รับทำเว็บไซต์ พัฒนาระบบฐานข้อมูล ราคาถูก">
    <meta name="author" content="">

    <title>รับเขียนโปรแกรม พัฒนาระบบ พัฒนาระบบฐานข้อมูล ราคาถูก</title>

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

    <!-- Navigation -->
    <a id="menu-toggle" href="#" class="btn btn-dark btn-lg toggle"><i class="fa fa-bars"></i></a>
    <nav id="sidebar-wrapper">
      <ul class="sidebar-nav">
        <a id="menu-close" href="#" class="btn btn-light btn-lg pull-right toggle"><i class="fa fa-times"></i></a>
        <li class="sidebar-brand">
          <a href="#top" onclick=$("#menu-close").click(); title="เมนู">เมนู</a>
        </li>
        <li>
          <a href="#top" onclick=$("#menu-close").click(); title="หน้าแรก">หน้าแรก</a>
        </li>
        <li>
          <a href="#services" onclick=$("#menu-close").click(); title="บริการต่างๆ">บริการต่างๆ</a>
        </li>
        <li>
          <a href="#about" onclick=$("#menu-close").click(); title="เกี่ยวกับเรา">เกี่ยวกับเรา</a>
        </li>
        <li>
          <a href="#portfolio" onclick=$("#menu-close").click(); title="ผลงานของเรา">ผลงานของเรา</a>
        </li>
        <li>
          <a href="#contact" onclick=$("#menu-close").click(); title="ติดต่อเรา">ติดต่อเรา</a>
        </li>
      </ul>
    </nav>

    <!-- Header -->
    <header id="top" class="header">
      <?php
      include DOCUMENT_ROOT.'include/index-header.php';
      ?>
    </header>

    <!-- Services -->
    <!-- The circle icons use Font Awesome's stacked icon classes. For more information, visit http://fontawesome.io/examples/ -->
    <section id="services" class="services bg-primary">
      <?php
      include DOCUMENT_ROOT.'include/index-service.php';
      ?>
    </section>

    <!-- About -->
    <section id="about" class="about">
      <?php
      include DOCUMENT_ROOT.'include/index-about.php';
      ?>
    </section>

    <!-- Callout -->
    <aside class="callout">
      <div>
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2>ข้อดีของการสั่งพัฒนาโปรแกรม</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-1 col-md-1 col-sm-1"></div>
          <div class="col-lg-10 col-md-10 col-sm-10">
            <ul>
              <li>ได้โปรแกรม ตรงตามความต้องการกับงานของลูกค้าอย่างแน่นอน</li>
              <li>ทันสมัย ใช้งานสะดวก ออกแบบสวยงาม เหมาะกับผู้ใช้งานทุกระดับ</li>
              <li>ประเมินราคาจากขอบเขตงานจริง ในอนาคตท่านสามารถสั่งพัฒนาโปรแกรมต่อยอดได้ ทันที</li>
              <li>บริการ ดูแล และให้คำปรึกษา ด้าน Software จากทีมงาน และ ผู้เชี่ยวชาญโดยตรง</li>
              <li>มีการให้บริการอบรมการใช้งานให้แก่ผู้ใช้งานใช้งาน</li>
            </ul>
          </div>
          <div class="col-lg-1 col-md-1 col-sm-1"></div>
        </div>
      </div>
    </aside>

    <!-- Portfolio -->
    <section id="portfolio" class="portfolio">
      <?php
      include DOCUMENT_ROOT.'include/index-portfolio.php';
      ?>
    </section>

    <!-- Call to Action -->
    <aside class="call-to-action bg-primary">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
          </div>
        </div>
      </div>
    </aside>

    <!-- Footer -->
    <footer>
      <section id="contact" class="contact">
        <?php
          include DOCUMENT_ROOT.'include/index-contact.php';
        ?>
      </section>
    </footer>
    
    <section id="seo" class="call-to-action bg-primary">
      <?php
        include DOCUMENT_ROOT.'include/index-seo.php';
      ?>
    </section>
  </body>

  </html>
  <script src="<?php echo ROOT; ?>js/menu-event.js"></script>
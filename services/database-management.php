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
                <h2>Window application</h2>
                <p class="text-indent">Window application คือโปรแกรม หรือ กลุ่มของโปรแกรม ที่ออกแบบให้ตรงตามความต้องการของลูกค้า โดยทำงานอยู่บนระบบ
                  Window ซึ่งจะต้องทำการติดตั้งลงบนเครื่องลูกค้าทุกเครื่องที่ต้องการใช้งาน.</p>
                <p>
                  <u>ข้อดี</u>
                </p>
                <ul>
                  <li>ไม่ต้องมีเครื่อง Server ทำให้เสียค่าใช้จ่ายน้อยกว่า</li>
                  <li>ทำงานได้รวดเร็วกว่า Web applicaion เพราะติดตั้งอยู่บนเครื่องของผู้ใช้งานโดยตรง ข้อเสีย</li>
                </ul>
                <p>
                  <u>ข้อเสีย</u>
                </p>
                <ul>
                  <li>การ Update โปรแกรมทำได้ยากกว่าเพราะต้องไป Update ที่เครื่องใช้งานทุกเครื่อง</li>
                  <li>เนื่องจากโปรแกรมอยู่บนเครื่องของลูกค้าแต่ละเครื่องทำให้ลูกค้าแต่ละคนเจอปัญหาที่แตกต่างกันไป</li>
                </ul>
                <h2>Web application</h2>
                <p class="text-indent">Web application คือโปรแกรม หรือ กลุ่มของโปรแกรม ที่ออกแบบให้ตรงตามความต้องการของลูกค้า โดยตัวโปรแกรมจะถูกติดตั้งไว้บน
                  Server ซึ่งสามารถเข้าใช้งานได้ผ่าน Browser(Google chrome, Firefox, Internet Explorer, Safari).</p>
                <p>
                  <u>ข้อดี</u>
                </p>
                <ul>
                  <li>ไม่ต้องติดตั้ง Software ทางฝั่งผู้ใช้งานแค่มี Browser ก็สามารถใช้งานได้เลย</li>
                  <li>การ Update program แค่แก้ไขหรือ Copy โปรแกรมใหม่ไปไว้ที่ Server ก็สามารถใช้งานได้ทันที</li>
                  <li>เนื่องจาก Update program ทำได้ง่าย ทำให้สะดวกต่อการพัฒนาต่อยอด</li>
                </ul>
                <p>
                  <u>ข้อเสีย</u>
                </p>
                <ul>
                  <li>ต้องมีเครื่อง Server</li>
                  <li>ทำงานช้ากว่า Window application</li>
                </ul>
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
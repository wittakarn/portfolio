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
  <meta name="description" content="รับเขียนโปรแกรม รับทำเว็บไซต์ พัฒนาระบบฐานข้อมูล">
  <meta name="author" content="">

  <title>รับเขียนโปรแกรม</title>

  <link rel='shortcut icon' href='<?php echo ROOT; ?>favicon.ico' type='image/x-icon'/ >
  <link rel="icon" href="<?php echo ROOT; ?>favicon.ico" type="image/x-icon">

  <!-- Bootstrap core CSS -->
  <link href="<?php echo ROOT; ?>bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">


  <!-- Custom CSS -->
  <link href="<?php echo ROOT; ?>css/stylish-portfolio.css" rel="stylesheet">

  <!-- Custom Fonts -->
  <link href="<?php echo ROOT; ?>font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

  <link rel="stylesheet" type="text/css" href="<?php echo ROOT; ?>css/error.message.css" />

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <script src="<?php echo ROOT; ?>lib/jquery/jquery-1.11.3.min.js"></script>
    <script src="<?php echo ROOT; ?>bootstrap/dist/js/bootstrap.min.js"></script>
    
    <script src="<?php echo ROOT; ?>lib/jquery/jquery.validate.min.js" type="text/javascript"></script>
    <script src="<?php echo ROOT; ?>lib/jquery/jquery.validate.custom.message.js" type="text/javascript"></script>
    <script src="<?php echo ROOT; ?>lib/jquery/additional-methods.min.js"></script>
    <script src="<?php echo ROOT; ?>lib/jquery/jquery.blockUI.js" type="text/javascript"></script>
    <script src="<?php echo ROOT; ?>lib/jquery/jquery.blockUI.custom.message.js" type="text/javascript"></script>
    <!-- Custom Theme JavaScript -->
    <script>
    // Closes the sidebar menu
    $(document)
    .ready(
      function() {

        $("#menu-close").click(function(e) {
          e.preventDefault();
          $("#sidebar-wrapper").toggleClass("active");
        });

        // Opens the sidebar menu
        $("#menu-toggle").click(function(e) {
          e.preventDefault();
          $("#sidebar-wrapper").toggleClass("active");
        });

        // Scrolls to the selected menu item on the page
        $(function() {
          $('a[href*=#]:not([href=#])').click(function() {
            if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') || location.hostname == this.hostname) {

              var target = $(this.hash);
              target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
              if (target.length) {
                $('html,body').animate({
                  scrollTop: target.offset().top
                }, 1000);
                return false;
              }
            }
          });
        });

      });
    </script>
  </head>

  <body>

    <!-- Navigation -->
    <a id="menu-toggle" href="#" class="btn btn-dark btn-lg toggle"><i class="fa fa-bars"></i></a>
    <nav id="sidebar-wrapper">
      <ul class="sidebar-nav">
        <a id="menu-close" href="#" class="btn btn-light btn-lg pull-right toggle"><i class="fa fa-times"></i></a>
        <li class="sidebar-brand">
          <a href="#top"  onclick = $("#menu-close").click(); >Start Bootstrap</a>
        </li>
        <li>
          <a href="#top" onclick = $("#menu-close").click(); >Home</a>
        </li>
        <li>
          <a href="#about" onclick = $("#menu-close").click(); >About</a>
        </li>
        <li>
          <a href="#services" onclick = $("#menu-close").click(); >Services</a>
        </li>
        <li>
          <a href="#portfolio" onclick = $("#menu-close").click(); >Portfolio</a>
        </li>
        <li>
          <a href="#contact" onclick = $("#menu-close").click(); >Contact</a>
        </li>
      </ul>
    </nav>

    <!-- Header -->
    <header id="top" class="header">
      <div class="text-vertical-center">
        <h1>พัฒนาระบบสู่สิ่งที่ดีกว่า</h1>
        <h3>รับเขียนโปรแกรม ทำเว็บไซต์ พัฒนาระบบฐานข้อมูลโดยทีมงานมืออาชีพ</h3>
        <br>
        <a href="#about" class="btn btn-dark btn-lg">เพิ่มเติม</a>
      </div>
    </header>

    <!-- Services -->
    <!-- The circle icons use Font Awesome's stacked icon classes. For more information, visit http://fontawesome.io/examples/ -->
    <section id="services" class="services bg-primary">
      <div class="container">
        <div class="row text-center">
          <div class="col-lg-10 col-lg-offset-1">
            <h2>บริการหลัก</h2>
            <hr class="small">
            <div class="row">
              <div class="col-md-3 col-sm-6">
                <div class="service-item">
                  <span class="fa-stack fa-4x">
                    <i class="fa fa-circle fa-stack-2x"></i>
                    <i class="fa fa-keyboard-o fa-stack-1x text-primary"></i>
                  </span>
                  <h4>
                    <strong>พัฒนาระบบ</strong>
                  </h4>
                  <p>พัฒนา Window Application และ Web Application ตามความต้องการของลูกค้า</p>
                  <a href="#" class="btn btn-light">เพิ่มเติม</a>
                </div>
              </div>
              <div class="col-md-3 col-sm-6">
                <div class="service-item">
                  <span class="fa-stack fa-4x">
                    <i class="fa fa-circle fa-stack-2x"></i>
                    <i class="fa fa-cloud fa-stack-1x text-primary"></i>
                  </span>
                  <h4>
                    <strong>ออบแบบเว็บไซต์</strong>
                  </h4>
                  <p>พัฒนา Web Site แบบ responsive แสดงผลได้อย่างเหมาะสม บนอุปกรณ์ที่แตกต่างกัน</p>
                  <a href="#" class="btn btn-light">เพิ่มเติม</a>
                </div>
              </div>
              <div class="col-md-3 col-sm-6">
                <div class="service-item">
                  <span class="fa-stack fa-4x">
                    <i class="fa fa-circle fa-stack-2x"></i>
                    <i class="fa fa-database fa-stack-1x text-primary"></i>
                  </span>
                  <h4>
                    <strong>จัดการฐานข้อมูล</strong>
                  </h4>
                  <p>พัฒนาระบบฐานข้อมูลด้วยประสบการณ์มากกว่า 10 ปี</p>
                  <a href="#" class="btn btn-light">เพิ่มเติม</a>
                </div>
              </div>
              <div class="col-md-3 col-sm-6">
                <div class="service-item">
                  <span class="fa-stack fa-4x">
                    <i class="fa fa-circle fa-stack-2x"></i>
                    <i class="fa fa-connectdevelop fa-stack-1x text-primary"></i>
                  </span>
                  <h4>
                    <strong>เชื่อมต่อกับระบบต่างๆ</strong>
                  </h4>
                  <p>เขียนโปรแกรมเชื่อมต่อกับระบบภายนอก เช่น Facebook, Google Map</p>
                  <a href="#" class="btn btn-light">เพิ่มเติม</a>
                </div>
              </div>
            </div>
            <!-- /.row (nested) -->
          </div>
          <!-- /.col-lg-10 -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container -->
    </section>

    <!-- About -->
    <section id="about" class="about">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2>ข้อดีของการสั่งพัฒนาโปรแกรม</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-1 col-md-1 col-sm-1"></div>
          <div class="col-lg-10">
            <p>ท่านมั่นใจได้ว่า ได้โปรแกรม ตรงตามความต้องการกับงานของท่านอย่างแน่นอน โปรแกรมที่ได้ไป จะเป็นโปรแกรม ที่ทันสมัย ใช้งานสะดวก ออกแบบสวยงาม เหมาะกับ User ทุกระดับ เรื่องราคา ยุติธรรม เที่ยงตรง เพราะประเมินราคาจากขอบเขตงานจริง ในอนาคตท่านสามารถ สั่งพัฒนาโปรแกรมต่อยอดได้ ทันที มีให้บริการ ดูแล และให้คำปรึกษา ด้าน Software จากทีมงาน และ ผู้เชี่ยวชาญโดยตรง มีการให้บริการอบรมการใช้งานให้แก่ User ใช้งาน พร้อมคู่มือการใช้งาน เรื่องลิขสิทธิ์ ของ Source Code ท่านจะได้รับเมื่อสั่งพัฒนาโปรแกรมกับทางเรา ทันที โดยไม่คิดค่าบริการการบริการรายปี ดูแลระบบคอมพิวเตอร์ เพื่อความมั่นใจของลูกค้าตลอดการใช้งาน</p>
          </div>
          <div class="col-lg-1 col-md-1 col-sm-1"></div>
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container -->
    </section>

    <!-- Callout -->
    <aside class="callout">
      <div class="text-vertical-center">
        <h1>Vertically Centered Text</h1>
      </div>
    </aside>

    <!-- Portfolio -->
    <section id="portfolio" class="portfolio">
      <div class="container">
        <div class="row">
          <div class="col-lg-10 col-lg-offset-1 text-center">
            <h2>Our Work</h2>
            <hr class="small">
            <div class="row">
              <div class="col-md-6">
                <div class="portfolio-item">
                  <a href="#">
                    <img class="img-portfolio img-responsive" src="img/portfolio-1.jpg">
                  </a>
                </div>
              </div>
              <div class="col-md-6">
                <div class="portfolio-item">
                  <a href="#">
                    <img class="img-portfolio img-responsive" src="img/portfolio-2.jpg">
                  </a>
                </div>
              </div>
              <div class="col-md-6">
                <div class="portfolio-item">
                  <a href="#">
                    <img class="img-portfolio img-responsive" src="img/portfolio-3.jpg">
                  </a>
                </div>
              </div>
              <div class="col-md-6">
                <div class="portfolio-item">
                  <a href="#">
                    <img class="img-portfolio img-responsive" src="img/portfolio-4.jpg">
                  </a>
                </div>
              </div>
            </div>
            <!-- /.row (nested) -->
            <a href="#" class="btn btn-dark">View More Items</a>
          </div>
          <!-- /.col-lg-10 -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container -->
    </section>

    <!-- Call to Action -->
    <aside class="call-to-action bg-primary">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h3>The buttons below are impossible to resist.</h3>
            <a href="#" class="btn btn-lg btn-light">Click Me!</a>
            <a href="#" class="btn btn-lg btn-dark">Look at Me!</a>
          </div>
        </div>
      </div>
    </aside>

    <!-- Footer -->
    <footer>
      <section id="contact" class="contact">
        <div class="container">
          <div class="row">
            <div class="col-lg-10 col-lg-offset-1 text-center">
              <h4><strong>สามารถแจ้งความต้องการเบื้องต้นผ่านท่าง</strong>
              </h4>
              <ul class="list-unstyled">
                <li><i class="fa fa-phone fa-fw"></i>094-498-0991</li>
                <li><i class="fa fa-envelope-o fa-fw"></i>  <a href="mailto:wittakarn.expert@gmail.com">wittakarn.expert@gmail.com</a>
                  <li>LINE ID : wittakarn
                  </li>
                </ul>
                <br>
                <ul class="list-inline">
                  <li>
                    <a href="https://www.facebook.com/wittakarn.keeratichayakorn"><i class="fa fa-facebook fa-fw fa-3x"></i></a>
                  </li>
                  <li>
                    <a href="https://twitter.com/Wittakarn"><i class="fa fa-twitter fa-fw fa-3x"></i></a>
                  </li>
                </ul>
                <hr class="small">
                <p class="text-muted">Copyright &copy; Your Website 2016</p>
              </div>
            </div>
          </div>
        </section>
      </footer>

    </body>

    </html>
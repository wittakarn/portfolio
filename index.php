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
          <a href="#top"  onclick = $("#menu-close").click(); >เมนู</a>
        </li>
        <li>
          <a href="#top" onclick = $("#menu-close").click(); >หน้าแรก</a>
        </li>
        <li>
          <a href="#services" onclick = $("#menu-close").click(); >บริการต่างๆ</a>
        </li>
        <li>
          <a href="#about" onclick = $("#menu-close").click(); >เกี่ยวกับเรา</a>
        </li>
        <li>
          <a href="#portfolio" onclick = $("#menu-close").click(); >ผลงานของเรา</a>
        </li>
        <li>
          <a href="#contact" onclick = $("#menu-close").click(); >ติดต่อเรา</a>
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
      <div class="text-vertical-center">
        <h1>Vertically Centered Text</h1>
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
        <?php
        include DOCUMENT_ROOT.'include/index-contact.php';
        ?>
      </footer>

    </body>

    </html>
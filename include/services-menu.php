<?php
ini_set('display_errors', 1); 
error_reporting(E_ALL);
require_once("../config.php");
?>
<!-- Navigation -->
<a id="menu-toggle" href="#" class="btn btn-dark btn-lg toggle"><i class="fa fa-bars"></i></a>
<nav id="sidebar-wrapper">
    <ul class="sidebar-nav">
        <a id="menu-close" href="#" class="btn btn-light btn-lg pull-right toggle"><i class="fa fa-times"></i></a>
        <li class="sidebar-brand">
            <a href="<?php echo ROOT.'index.php#top';?>" title="เมนู">เมนู</a>
        </li>
        <li>
            <a href="<?php echo ROOT.'index.php#top';?>#top" title="หน้าแรก">หน้าแรก</a>
        </li>
        <li>
            <a href="<?php echo ROOT.'index.php#services';?>" title="บริการต่างๆ">บริการต่างๆ</a>
        </li>
        <li>
            <a href="<?php echo ROOT.'index.php#about';?>" title="เกี่ยวกับเรา">เกี่ยวกับเรา</a>
        </li>
        <li>
            <a href="<?php echo ROOT.'index.php#portfolio';?>" title="ผลงานของเรา">ผลงานของเรา</a>
        </li>
        <li>
            <a href="#contact" title="ติดต่อเรา">ติดต่อเรา</a>
        </li>
    </ul>
</nav>
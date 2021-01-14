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
    <meta name="description" content="เข้าสู่ระบบ">

    <title>เข้าสู่ระบบ</title>

    <link rel='shortcut icon' href='<?php echo ROOT; ?>favicon.ico' type='image/x-icon' />
    <link rel="icon" href="<?php echo ROOT; ?>favicon.ico" type="image/x-icon">

    <!-- Bootstrap core CSS -->
    <link href="<?php echo ROOT; ?>bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo ROOT; ?>font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <script src="<?php echo ROOT; ?>lib/jquery/jquery-1.11.3.min.js"></script>
    <script src="<?php echo ROOT; ?>bootstrap/dist/js/bootstrap.min.js"></script>
    <style>
      .panel {
        position: absolute;
        width: 25%;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
      }
    </style>
  </head>

  <body>
    <div class="container">
      <form id="signInForm" class="form-signin" action="<?php echo ROOT.'document/file-list.php'?>" method="post">
      <div class="panel panel-primary">
  			<div class="panel-heading">เข้าสู่ระบบ</div>
  			<div class="panel-body">
          <div class="form-group">
            <label for="password" class="sr-only">รหัสผ่าน</label>
            <input type="password" name="password" class="form-control" placeholder="รหัสผ่าน" required autofocus>
          </div>
          <button class="btn btn-primary btn-block" name="nigol" id="nigol" type="submit">เข้าสู่ระบบ</button>
        </div>
    </div>
	</form>
  </body>

</html>
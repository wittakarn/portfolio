<?php
ini_set('display_errors', 1); 
error_reporting(E_ALL);
session_start();
require_once("../config.php");

if(!isset($_SESSION["hasPermission"]) || !$_SESSION["hasPermission"]){
	if($_SERVER['REQUEST_METHOD'] == 'POST' && "wittakarn-".date("d") == $_POST['password']){
		$_SESSION['hasPermission'] = true;
	}else{
		$_SESSION['hasPermission'] = false;
		header('Location: '.WEB_ROOT.'document');
   		die();
	}
}

?>
<!DOCTYPE HTML>
<html lang="en-US">
    <head>
        <meta charset="UTF-8">
        <title>Download เอกสาร</title>
    </head>
    <body>
		<ul>
		<?php 
			foreach (new DirectoryIterator(__DIR__."/doc") as $file) {
				if ($file->isFile()) {
					$filenames[] = $file->getFilename();
				}
			}
			sort($filenames);
			foreach ($filenames as $filename) {
				echo "<li><a href='".WEB_ROOT."document/download.php?filename=".$filename."' target='_blank'>".$filename."</a></li>";
			}
		?>
		</ul>
    </body>
</html>
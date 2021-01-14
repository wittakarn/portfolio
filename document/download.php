<?php
ini_set('display_errors', 1); 
error_reporting(E_ALL);
session_start();
require_once("../config.php");
if(isset($_SESSION['hasPermission']) && $_SESSION['hasPermission'] && isset($_REQUEST['filename'])){
	$attachment_location = __DIR__."/doc/".$_REQUEST['filename'];
	if (file_exists($attachment_location)) {

		header($_SERVER["SERVER_PROTOCOL"] . " 200 OK");
		header("Cache-Control: public"); // needed for internet explorer
		header("Content-Type: application/octet-stream");
		header("Content-Transfer-Encoding: Binary");
		header("Content-Length:".filesize($attachment_location));
		header("Content-Disposition: attachment; filename=".$_REQUEST['filename']);
		readfile($attachment_location);
		die();        
	} else {
		die("ไม่พบ File ที่ต้องการ Download");
	} 
}else{
	echo "<H2>คุณไม่มีสิทธิ์ Download</H2>";
}
?>
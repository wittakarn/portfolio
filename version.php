<?php
echo 'Current PHP version: ' . phpversion();
echo '<br/>';
$max_time = ini_set("max_execution_time", 300);
$max_time = ini_get("max_execution_time");
echo $max_time;
?>
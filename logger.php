<?php
$logFile = __DIR__ . "/visitor.log";

$ip        = $_SERVER['REMOTE_ADDR'];
$userAgent = $_SERVER['HTTP_USER_AGENT'];
$time      = date("Y-m-d H:i:s");

$log = "[$time] IP: $ip | User-Agent: $userAgent" . PHP_EOL;
file_put_contents($logFile, $log, FILE_APPEND);

echo "ok";

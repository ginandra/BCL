<?php
// File log
$logFile = __DIR__ . "/visitor.log";

// Data pengunjung
$ip       = $_SERVER['REMOTE_ADDR'];
$userAgent= $_SERVER['HTTP_USER_AGENT'];
$time     = date("Y-m-d H:i:s");

// Isi log
$log = "[$time] IP: $ip | User-Agent: $userAgent\n";

// Simpan ke file (akan buat file baru kalau belum ada)
file_put_contents($logFile, $log, FILE_APPEND);
?>

<?php
// index.php

// tampilkan pesan untuk memastikan script jalan
echo "Hello World! PHP script running via Jenkins.\n";

// contoh: log tanggal & waktu
echo "Build time: " . date('Y-m-d H:i:s') . "\n";

// kalau mau, bisa juga nulis ke file log
$logFile = __DIR__ . '/build_log.txt';
file_put_contents($logFile, "Build executed at " . date('Y-m-d H:i:s') . "\n", FILE_APPEND);
?>

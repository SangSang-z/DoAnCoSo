<?php
session_start();

// Đặt đường dẫn gốc cho ứng dụng
$basePath = __DIR__ . '/app/views/pages/';

// Đường dẫn đến tệp home.php
$home = $basePath . 'home.php';

// Kiểm tra file tồn tại trước khi include
if (file_exists($home)) {
    include $home;
} else {
    echo "Không tìm thấy home.php<br>";
}


?>
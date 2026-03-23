<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/806e755555.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <title>Header VéXe</title>
    <link rel="stylesheet" type="text/css" href="/app/views/shares/header.css">
   
</head>
<body>
    <header class="header">
        <div class="logo">
        <i class="fas fa-bus fa-2xl icon_bus"></i>
            <!-- <img src="bus-icon.png" alt="Bus Icon">  Thay bằng đường dẫn icon xe buýt -->
            <div>
                <strong>VéXe.com</strong><br>
                <small>Hệ thống bán vé xe</small>
            </div>
        </div>
        <nav class="nav">
            <a href="/app/views/pages/home.php">Trang chủ</a>
            
            <a href="/app/views/pages/contact.php">Liên Hệ</a>
        </nav>
        <div class="login">
            <button class="btn_login"><i class="fa-solid fa-user" ></i> <a href="/app/views/account/login.php"><span>Đăng nhập / Đăng ký</span></a></button>
        </div> 
    </header>
</body>
</html>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng Ký Tài Khoản</title>
    <link rel="stylesheet" href="/app/views/account/register.css">
</head>
<body>
<?php  
      include __DIR__ . '/../shares/header.php';
  ?>

<div class="search-container"></div>
    <div class="container-registration">
        <div class="registration-form">
            <h2>Đăng ký tài khoản</h2>
            <form>
                <div class="input-group">
                    <input type="text" id="username" placeholder="Nhập tên người dùng">
                </div>
                <div class="input-group">
                    <input type="text" id="phone" placeholder="Nhập số điện thoại">
                </div>
                <div class="input-group">
                    <input type="text" id="email" placeholder="Nhập email">
                </div>
                <div class="input-group">
                    <input type="password" id="password" placeholder="Nhập mật khẩu">
                    <i class="eye-icon" id="togglePassword">&#128065;</i>
                </div>
                <button type="submit" class="btn">Đăng ký</button>
            </form>
        </div>
    </div>
    
    <!-- <script src="script.js"></script> -->

    <?php  
      include(__DIR__ . '/../shares/footer.php');

  ?>
</body>
</html>
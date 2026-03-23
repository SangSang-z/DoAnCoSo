<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng Nhập Tài Khoản</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="/app/views/account/login.css">
</head>
<body>

<?php  
      include __DIR__ . '/../shares/header.php';
  ?>
     <div class="search-container"></div>
<div class="search-container1"></div>
    <div class="login-container">
        <h2>Đăng nhập tài khoản</h2>
        <form>
            <div class="input-group">
            
            `       
                <input type="text" id="phone" placeholder= "Nhập số điện thoại">
            </div>
            <div class="input-group">
                
                <div class="password-container">
                    <input type="password" id="password" placeholder="Nhập mật khẩu">
                    <i class="fa fa-eye" id="toggle-password" onclick="togglePassword()"></i>
                </div>
            </div>
            <button type="submit" class="login-btn1">Đăng nhập</button>
            <p class="forgot-password"><a href="#">Quên mật khẩu</a></p>
            <p class="registration-link"><a href="\app\views\account\register.php"> Bạn chưa có tài khoản ?</a></p>
            <p class="admin-link"><a href="\app\views\admin\staff.php"> coi tạm admin ở đây</a></p>
        </form>
    </div>

    
    <?php  
      include(__DIR__ . '/../shares/footer.php');

  ?>
</body>
</html>
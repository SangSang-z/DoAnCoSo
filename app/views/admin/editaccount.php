<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách nhân viên</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    
    <link rel="stylesheet" href="/app/views/admin/editaccount.css">
</head>
<body>
    <div class="container">
       <div class="staff_management">
       <div class="sidebar">
            <div class="logo">
            <i class="fas fa-bus fa-2xl icon_bus"></i>
                <span>VéXe.com</span>
                
            </div>
        
            <div class="menu-item">
                <div class="header">
                    <i class="fa fa-user"></i>
                    <span>Quản Lý Nhân Viên</span>
                    <span class="arrow">&#x25BC;</span>
                </div>
                <ul class="submenu">
                    <li><a href="/app/views/admin/staff.php">Danh sách nhân viên</a></li>
                </ul>
            </div>

            <div class="menu-item">
                <div class="header">
                    <i class="fa fa-user"></i>
                    <span>Quản Lý Khách Hàng</span>
                    <span class="arrow">&#x25BC;</span>
                </div>
                <ul class="submenu">
                    <li><a href="/app/views/admin/customer.php">Danh sách khách hàng</a></li>
                    
                </ul>
            </div>

            <div class="menu-item">
                <div class="header">
                    <i class="fa fa-user"></i>
                    <span>Quản Lý Khuyến Mãi</span>
                    <span class="arrow">&#x25BC;</span>
                </div>
                <ul class="submenu">
                    <li><a href="#">Danh sách khuyến mãi</a></li>
                    
                </ul>
            </div>

            <div class="menu-item">
                <div class="header">
                    <i class="fa fa-user"></i>
                    <span>Quản Lý Chuyến Xe</span>
                    <span class="arrow">&#x25BC;</span>
                </div>
                <ul class="submenu">
                    <li><a href="#">Danh sách chuyến xe</a></li>
                </ul>
            </div>

            <div class="menu-item">
                <div class="header">
                    <i class="fa fa-user"></i>
                    <span>Quản Lý Xe</span>
                    <span class="arrow">&#x25BC;</span>
                </div>
                <ul class="submenu">
                    <li><a href="#">Danh sách xe</a></li>
                </ul>
            </div>

            <div class="menu-item">
                <div class="header">
                    <i class="fa fa-user"></i>
                    <span>Quản Lý Hóa Đơn</span>
                    <span class="arrow">&#x25BC;</span>
                </div>
                <ul class="submenu">
                    <li><a href="#">Cập nhật hóa đơn</a></li>
                </ul>
            </div>

            <div class="menu-item">
                <div class="header">
                    <i class="fa fa-user"></i>
                    <span>Thống Kê</span>
                    <span class="arrow">&#x25BC;</span>
                </div>
                <ul class="submenu">
                    <li><a href="#">Doanh thu</a></li>
                </ul>
            </div>

            <div class="user-info">
            <div class="user_icon">
            <i class="bi bi-person-circle" style="color: white"></i>
            <p>Thi Thư mặt trăng</p>
            </div>
                <span>Admin</span>
            </div>
            <div class="logout">
            <i class="bi bi-box-arrow-right" style="color: white"></i>
                <a href="/app/views/account/login.php">Đăng xuất</a>
            </div>
        </div>
        
        <div class="main-content">
            <div class="header">
                <h1>Danh sách nhân viên -> Thông tin nhân viên  -> Chỉnh sửa</h1>
                
            </div>

            <div class="profile-container">
        <div class="avatar-container">
            <img src="https://i.pinimg.com/736x/5f/48/ac/5f48ac591adc0fc37b5e543062c2c656.jpg" alt="Avatar">
        </div>

        <form class="profile-form">
            <div class="form-row">
                <div class="form-group">
                    <label for="username">Tên tài khoản(*)</label>
                    <input type="text" id="username" placeholder="User01" disabled>
                </div>
                <div class="form-group">
                    <label for="email">Email(*)</label>
                    <input type="email" id="email" placeholder="User01@Email.com" disabled>
                </div>
            </div>

            <div class="form-row">
                <div class="form-group">
                    <label for="password">Mật khẩu(*)</label>
                    <input type="password" id="password" placeholder="123456" disabled>
                </div>
                <div class="form-group">
                    <label for="phone">SDT(*)</label>
                    <input type="text" id="phone" placeholder="012345678" disabled>
                </div>
            </div>

            <div class="form-group">
                <label for="address">Địa chỉ(*)</label>
                <input type="text" id="address" placeholder="123/456 Hutech" disabled>
            </div>

            <div class="button-group">
                <button type="button" class="btn cancel"><a href="/app/views/admin/userinfo.php">Hủy</a></button>
                <button type="submit" class="btn update">Cập nhật</button>
            </div>
        </form>
    </div>

        </div>
       </div>
    </div>
    <script>
// Lấy tất cả các menu item có menu con
const menuItems = document.querySelectorAll('.menu-item');

// Lặp qua từng menu và gán sự kiện click
menuItems.forEach(item => {
    const header = item.querySelector('.header');
    const submenu = item.querySelector('.submenu');
    const arrow = item.querySelector('.arrow');

    // Thêm sự kiện click vào tiêu đề menu
    header.addEventListener('click', function() {
        // Kiểm tra nếu menu con đang mở hay không
        const isVisible = submenu.style.display === 'block';

        // Ẩn tất cả các menu con
        document.querySelectorAll('.submenu').forEach(sub => {
            sub.style.display = 'none';
            sub.previousElementSibling.querySelector('.arrow').innerHTML = '&#x25BC;'; // Đặt lại mũi tên xuống
        });

        // Nếu menu con chưa hiển thị, mở nó ra
        if (!isVisible) {
            submenu.style.display = 'block';
            arrow.innerHTML = '&#x25B2;'; // Đổi mũi tên lên
        }
    });
});

// xử lý sự kiện khi click vào user -> userinfo
document.querySelectorAll('.user-row').forEach(row => {
        row.addEventListener('click', () => {
            const username = row.dataset.username;
            window.location.href = `userinfo.php?username=${username}`;
        });
    });

    document.querySelectorAll('.dropdown-btn').forEach(btn => {
    btn.addEventListener('click', function (e) {
      e.stopPropagation();
      const dropdown = this.parentElement;
      dropdown.classList.toggle('show');
    });
  });

  // Đóng dropdown khi click bên ngoài
  window.addEventListener('click', function () {
    document.querySelectorAll('.dropdown').forEach(d => d.classList.remove('show'));
  });
    </script>
</body>
</html>
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
    
    <link rel="stylesheet" href="/app/views/admin/createaccount.css">
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
                
                <div class= create-customer>
                        <p class="breadcrumb">Danh sách khách hàng → <span>Tạo tài khoản</span></p>
                <div class="form-box">
                            <h2>Thêm tài khoản</h2>
                    <form>
                        <div class="form-group">
                            <i class="fa fa-user"></i>
                            <input type="text" placeholder="Nhập tên tài khoản">
                        </div>

                        <div class="form-group">
                            <i class="fa fa-envelope"></i>
                            <input type="email" placeholder="Nhập Email tài khoản">
                        </div>

                        <div class="form-group">
                            <i class="fa fa-phone"></i>
                            <input type="text" placeholder="Nhập số điện thoại">
                        </div>

                        <div class="form-group">
                            <i class="fa fa-lock"></i>
                            <input type="password" placeholder="Nhập mật khẩu">
                        </div>
                            <button type="submit" class="btn-submit">Tạo tài khoản</button>
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
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
    
    <link rel="stylesheet" href="/app/views/admin/staff.css">
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
                <h1>Danh sách nhân viên</h1>
                <div class="actions">
                    <input type="text" placeholder="Tìm kiếm">
                    <button ><a href="/app/views/admin/createaccount.php"> + Tạo tài khoản</a></button>
                </div>
            </div>

            <table>
                <thead>
                    <tr>
                        <th>STT</th>
                        <th>Tên tài khoản</th>
                        <th>Email</th>
                        <th>SĐT</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="user-row" data-username="user01">
                        <td>1</td>
                        <td>user01</td>
                        <td>user01@email.com</td>
                        <td>0111111111</td>
                    </tr>
                    <tr class="user-row" data-username="user02">
                        <td>2</td>
                        <td>user02</td>
                        <td>user02@email.com</td>
                        <td>0222222222</td>
                    </tr>
                    <tr class="user-row" data-username="user03">
                        <td>3</td>
                        <td>user03</td>
                        <td>user03@email.com</td>
                        <td>0333333333</td>
                    </tr>
                    <tr class="user-row" data-username="user04">
                        <td>4</td>
                        <td>user04</td>
                        <td>user04@email.com</td>
                        <td>0444444444</td>
                    </tr>
                    <tr class="user-row" data-username="user05">
                        <td>5</td>
                        <td>user05</td>
                        <td>user05@email.com</td>
                        <td>0xxxxxxxxx</td>
                    </tr>
                </tbody>
            </table>
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
    </script>
</body>
</html>
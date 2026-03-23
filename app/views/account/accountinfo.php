<?php
if (session_status() === PHP_SESSION_NONE) session_start();

// Chuyển hướng nếu chưa đăng nhập
if (!isset($_SESSION['user'])) {
    header("Location: /WEBVEXE/app/views/pages/login.php");
    exit;
}

include __DIR__ . '/../shares/header.php';
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Thông tin tài khoản</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    
</head>
<body>
    <div class="container main-container">
        <div class="sidebar card-custom">
            <ul>
                <li class="active">Thông tin tài khoản</li>
                <li>Lịch sử hóa đơn</li>
            </ul>
        </div>

        <div id="account-info" class="account-content">
            <h2 class="section-title">Thông tin tài khoản</h2>
            <div class="card-custom">
                <form method="POST" action="update_account.php">
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label class="form-label">Họ và tên</label>
                            <input type="text" name="name" class="form-control" value="<?= htmlspecialchars($_SESSION['user']['name'] ?? '') ?>">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Địa chỉ</label>
                            <input type="text" name="address" class="form-control" value="<?= htmlspecialchars($_SESSION['user']['address'] ?? '') ?>">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label class="form-label">Ngân hàng</label>
                            <input type="text" name="bank" class="form-control" value="<?= htmlspecialchars($_SESSION['user']['bank'] ?? '') ?>">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Số tài khoản</label>
                            <input type="text" name="account_number" class="form-control" value="<?= htmlspecialchars($_SESSION['user']['account_number'] ?? '') ?>">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label class="form-label">Số điện thoại</label>
                            <input type="text" class="form-control" value="<?= htmlspecialchars($_SESSION['user']['phone'] ?? '') ?>" readonly>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Ngày sinh</label>
                            <input type="date" name="dob" class="form-control" value="<?= $_SESSION['user']['dob'] ?? '' ?>">
                        </div>
                    </div>

                    <div class="mb-4">
                        <label class="form-label">Giới tính</label>
                        <select name="gender" class="form-select">
                            <option value="Nam" <?= ($_SESSION['user']['gender'] ?? '') === 'Nam' ? 'selected' : '' ?>>Nam</option>
                            <option value="Nữ" <?= ($_SESSION['user']['gender'] ?? '') === 'Nữ' ? 'selected' : '' ?>>Nữ</option>
                            <option value="Khác" <?= ($_SESSION['user']['gender'] ?? '') === 'Khác' ? 'selected' : '' ?>>Khác</option>
                        </select>
                    </div>

                    <div class="text-center">
                        <button type="submit" class="btn btn-update px-4">Cập nhật</button>
                    </div>
                </form>
            </div>
        </div>

        <div id="invoice-history" class="account-content" style="display: none;">
            <h2 class="section-title">Lịch sử hóa đơn</h2>
            <div class="card-custom">
                <h5 class="mb-3 text-danger fw-bold">DANH SÁCH HÓA ĐƠN</h5>
                <div class="table-responsive">
                    <table class="table table-bordered text-center align-middle">
                        <thead class="table-light">
                            <tr>
                                <th>Mã vé</th>
                                <th>Số vé</th>
                                <th>Tên chuyến xe</th>
                                <th>Ngày đi</th>
                                <th>Số tiền</th>
                                <th>Trạng thái</th>
                                <th>Hủy vé</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $invoices = []; // tạm thời chưa có hóa đơn
                            if (empty($invoices)) {
                                echo '<tr><td colspan="7" class="text-center text-muted">Chưa có hóa đơn nào.</td></tr>';
                            } else {
                                foreach ($invoices as $invoice) {
                                    echo "<tr>
                                        <td>{$invoice['code']}</td>
                                        <td>{$invoice['quantity']}</td>
                                        <td>{$invoice['trip_name']}</td>
                                        <td>{$invoice['date']}</td>
                                        <td>{$invoice['amount']}</td>
                                        <td>" . ($invoice['status'] ? '✅' : '❌') . "</td>
                                        <td><button class='btn btn-danger btn-sm'>Hủy vé</button></td>
                                    </tr>";
                                }
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        const menuItems = document.querySelectorAll('.sidebar li');
        const accountContent = document.getElementById('account-info');
        const invoiceContent = document.getElementById('invoice-history');

        menuItems.forEach((item, index) => {
            item.addEventListener('click', () => {
                menuItems.forEach(el => el.classList.remove('active'));
                item.classList.add('active');
                accountContent.style.display = (index === 0) ? 'block' : 'none';
                invoiceContent.style.display = (index === 1) ? 'block' : 'none';
            });
        });

        const urlParams = new URLSearchParams(window.location.search);
        const activeTab = urlParams.get('tab');
        if (activeTab === 'invoice') {
            menuItems[1].click();
        } else {
            menuItems[0].click();
        }
    </script>
</body>
</html>

<?php include __DIR__ . '/../shares/footer.php'; ?>

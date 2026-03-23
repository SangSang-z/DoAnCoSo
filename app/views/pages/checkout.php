<!DOCTYPE html>
<html lang="vi">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tìm chuyến xe</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" type="text/css"  href="/app/views/pages/checkout.css">
</head>
<body>
<?php  
      include __DIR__ . '/../shares/header.php';
      ?>
     
    <section class="check_out">
     <div class="search-container"></div>
        <div class="checkout row">
            <div class="col-sm-5">
                    <div class="modal-checkout">
                    <h2>Thanh toán</h2>
                    <p>Lựa chọn hình thức thanh toán sau:</p>
                    <form>
                        <div class="payment-options">
                            <label>
                                <i class="fa-solid fa-money-check-dollar fa-xl"></i>
                                <input type="radio" name="payment-method" value="cash"> Thanh toán tiền mặt
                            </label>
                            <label>
                                <i class="fa-solid fa-building-columns fa-xl"></i>
                                <input type="radio" name="payment-method" value="bank-transfer" checked> Chuyển khoản ngân hàng
                            </label>
                        </div>
                        <div class="form-actions">
                            <button type="button" class="close-btn">Đóng</button>
                            <button type="submit" class="confirm-btn">Xác nhận</button>
                        </div>
                    </form>
                </div>

            </div>

            <div class="col-sm-5">
                    <div class="info-checkout">
                        <div class="customer-info">
                            <h3>Thông tin hành khách</h3>
                            <p>Họ và tên: <strong>Sang Lê</strong></p>
                            <p>Số điện thoại: <strong>0346652717</strong></p>
                            <p>Email: <strong>sangle@Gmail.com</strong></p>
                        </div>

                        <div class="ticket-info">
                            <h3>Thông tin vé xe</h3>
                            <p>Tuyến xe: <strong>Bx.Mien Tay - Bx.Da Lat</strong></p>
                            <p>Thời gian xuất bến: <strong>00:30 01/04/2025</strong></p>
                            <p>Số lượng ghế: <strong>2 Ghế</strong></p>
                            <p>Số ghế: <strong>A01, B06</strong></p>
                            <p>Điểm lên xe: <strong>BX Miền Tây</strong></p>
                            <p>Điểm trả khách: <strong>DA LAT</strong></p>
                        </div>

                        <div class="price-info">
                            <h3>Chi tiết giá vé</h3>
                            <p>Giá vé: <strong>1.000.000đ</strong></p>
                            <p>Phí phát sinh: <strong>0đ</strong></p>
                            <p><strong>Tổng tiền: 1.000.000đ</strong></p>
                        </div>

                        <div class="note-checkout">
                            <p>(*) Vui lòng kiểm tra thông tin trước khi bấm xác nhận. Mọi chi tiết thắc mắc vui lòng liên hệ số hotline hoặc quầy bán vé</p>
                        </div>
        </div>

                    
     
    </section>








    <?php  
      include(__DIR__ . '/../shares/footer.php');

  ?>
</body>
</html>

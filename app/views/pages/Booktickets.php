<!DOCTYPE html>
<html lang="vi">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tìm chuyến xe</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" type="text/css"  href="/app/views/pages/Booktickets.css">
</head>
<body>
<?php  
      include __DIR__ . '/../shares/header.php';
  ?>

<div class="background_color"></div>
<div class="search-container"></div>
  <main class="main_container row">
    <section class="seat-section col-sm-3">
      <h2>Chọn ghế</h2>
      <div class="seats-container">
        <div>
          <h4>Tầng dưới</h4>
          <div class="seats">
            <button class="seat">A01</button>
            <button class="seat">A02</button>
            <button class="seat">A03</button>
            <button class="seat">A04</button>
            <button class="seat">A05</button>
            <button class="seat">A06</button>
            <button class="seat">A07</button>
            <button class="seat">A08</button>
            <button class="seat">A09</button>
            <button class="seat">A10</button>
            <button class="seat">A11</button>
            <button class="seat">A12</button>
            <button class="seat booked">A15</button>
            <button class="seat booked">A16</button>
            <button class="seat booked">A17</button>
          </div>
        </div>
        <div>
          <h4>Tầng trên</h4>
          <div class="seats">
            <button class="seat">B01</button>
            <button class="seat">B02</button>
            <button class="seat selected">B05</button>
            <button class="seat">B06</button>
            <button class="seat">B07</button>
            <button class="seat">B08</button>
            <button class="seat">B09</button>
            <button class="seat booked">B13</button>
            <button class="seat booked">B15</button>
            <button class="seat booked">B16</button>
            <button class="seat booked">B17</button>
          </div>
        </div>
      </div>
    <div class="state">
            <i class="fa-solid fa-circle" style="color: #c0c0c0;"></i>
            <a>còn trống</a>
            <i class="fa-solid fa-circle" style="color: #9acbed;"></i>
            <a>đã bán</a>
            <i class="fa-solid fa-circle" style="color: #d52626;"></i>
            <a>đang chọn</a>
    </div>
      <p class="note">
        (*) Quý khách vui lòng có mặt tại bến xe ít nhất 30 phút trước giờ khởi hành. Gọi <span class="hotline">1900 2717</span> để được hỗ trợ.
      </p>
    </section>

    <section class="form-section col-sm-3">
      <h2>Thông tin khách hàng</h2>
      <form>
        <div class="info">
        <label>Họ và tên <span>*</span></label>
        <input type="text" required>
        <label>Số điện thoại <span>*</span></label>
        <input type="text" required>
        <label>Email <span>*</span></label>
        <input type="email" required>
     
        </div>
        <div class="tb1">(*) Quý khách vui lòng kiểm tra thông tin trước khi xác nhận</div>
      </form>
      
    </section>

    <section class="ticket-section col-sm-3">
      <h2>Thông tin vé</h2>
      <ul>
        <li><strong>Tuyến xe:</strong> BX.Miền Tây - BX.Đà Lạt</li>
        <li><strong>Thời gian:</strong> 00:00 1/4/2025</li>
        <li><strong>Số lượng ghế:</strong> 2 ghế</li>
        <li><strong>Số ghế:</strong> A01, B01</li>
        <li><strong>Tổng tiền:</strong> <span class="total">1.000.000đ</span></li>
        
      </ul>
      <div class="tb"> (*) Quý khách vui lòng kiểm tra thông tin vé xe trước khi đặt vé</div>
    </section>
  </main>
 
  <div class="note_container row">
    <div class="notice-broard col-sm-3">
        <a> (*) Quý khách vui lòng có mặt tại bến xe xuất phát của xe trước ít nhất 30 phút giờ xe khởi hành , mang theo thông báo đã thanh toán vé thành công có chứa mã vé được gửi từ hệ thống .Vui lòng liên hệ Trung tâm hỗ trợ tổng đài 1900 2717 để được hỗ trợ </a>
   </div>
 
    <div class="money col-sm-6">
    <div class="price">1.000.000đ</div>
    <div class="actions">
        <button class="cancel">Hủy</button>
        <button class="submit"><a href="/app/views/pages/checkout.php">Thanh toán</button>
    </div>
   </div>
  </div>
  
  <?php  
      include(__DIR__ . '/../shares/footer.php');

  ?>
</body>
</html>
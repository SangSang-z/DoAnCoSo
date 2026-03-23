<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Liên Hệ</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css"  href="/app/views/pages/contact.css">
</head>
<body>
<?php  
      include __DIR__ . '/../shares/header.php';
      ?>

<div class="container-contact contact-wrapper">
    <div class="row g-5 align-items-start">
        <!-- Cột trái: Thông tin & Form -->
        <div class="col-md-6">
            <h4 class="section-title">VEXE</h4>
            <ul class="list-unstyled contact-info mb-4">
                <li class="mb-2"><i class="bi bi-geo-alt"></i> 10/80c Song Hành Xa Lộ Hà Nội, Phường Tân Phú, Thủ Đức, Hồ Chí Minh</li>
                <li class="mb-2"><i class="bi bi-envelope"></i> Email: hotro@vexe.vn</li>
                <li class="mb-4"><i class="bi bi-telephone"></i> Hotline: 1900 2717</li>
            </ul>

            <h5 class="section-title">Liên hệ với chúng tôi</h5>
            <form>
                <div class="mb-3">
                    <input type="text" class="form-control" placeholder="Họ và tên" required>
                </div>
                <div class="mb-3">
                    <input type="email" class="form-control" placeholder="Email" required>
                </div>
                <div class="mb-3">
                    <input type="tel" class="form-control" placeholder="Điện thoại*" required>
                </div>
                <div class="mb-3">
                    <textarea class="form-control" rows="4" placeholder="Nội dung" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Gửi thông tin</button>
            </form>
        </div>

        <!-- Cột phải: Bản đồ -->
        <div class="col-md-6">
            <iframe 
                class="map-frame"
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3918.4276420661968!2d106.78537299999999!3d10.8550427!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x317527c3debb5aad%3A0x5fb58956eb4194d0!2zxJDhuqFpIEjhu41jIEh1dGVjaCBLaHUgRQ!5e0!3m2!1svi!2s!4v1742326519082!5m2!1svi!2s"
                allowfullscreen="" 
                loading="lazy" 
                referrerpolicy="no-referrer-when-downgrade">
            </iframe>
        </div>
    </div>
</div>

<?php include __DIR__ . '/../shares/footer.php'; ?>
</body>
</html>
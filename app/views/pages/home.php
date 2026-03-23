
<!DOCTYPE html>
<html lang="vi">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tìm chuyến xe</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="/app/views/pages/home.css">
</head>
<body>
<?php  
      include __DIR__ . '/../shares/header.php';
  ?>
   <div class="background_color"></div>
    <div class="search-container">
       <div class="filter">
       <div class="location-row">
            <div class="location">
            <div class="location-icons">    
            <i class="fa-regular fa-compass"></i>
            </div>
            <input type="text"  placeholder="Nơi đi">
            <div class="swap-icon">⇄</div>
            <div class="location-icon">
            <i class="fa-solid fa-location-dot"></i>
            </div>
            <div class="location">
            <input type="text" placeholder="Nơi đến">
            </div>
        </div>
        
        <div class="date-row">
            <div class="date-label">Ngày đi:</div>
            <input type="text"  class="date-value"  placeholder="Vui lòng nhập ngày">
            
        </div>
        <button class="search-button" ><a href="/app/views/pages/searchforthecar.php">Tìm chuyến xe</a>


        </button>
       </div>
    </div>


    <div class="container1">
        <div class="title1">Ưu đãi nổi bật</div>
        <div class="scroll-container1">
            <div class="offer-card">
                <img src="https://f1e425bd6cd9ac6.cmccloud.com.vn/cms-tool/post/images/163/img_card.png?v=202" alt="Ưu đãi 1">
                <div class="offer-content">12h - 14h Thứ 3 - Flash Sale đến 50%</div>
            </div>
            <div class="offer-card">
                <img src="https://f1e425bd6cd9ac6.cmccloud.com.vn/cms-tool/post/images/324/img_card.png?v=19" alt="Ưu đãi 2">
                <div class="offer-content">Giảm 50% khi đặt xe limousine Hải Phòng lần đầu tại Vexere</div>
            </div>
            <div class="offer-card">
                <img src="https://f1e425bd6cd9ac6.cmccloud.com.vn/cms-tool/post/images/344/img_card.png?v=1" alt="Ưu đãi 3">
                <div class="offer-content">Giảm 25% khi đặt xe đi Hải Phòng lần đầu tại Vexere</div>
            </div>
            <div class="offer-card">
                <img src="https://f1e425bd6cd9ac6.cmccloud.com.vn/cms-tool/post/images/166/img_card.png?v=5" alt="Ưu đãi 4">
                <div class="offer-content">Giới thiệu bạn mới - Nhận quà khủng từ Vexe</div>
            </div>
            <div class="offer-card">
                <img src="https://f1e425bd6cd9ac6.cmccloud.com.vn/cms-tool/post/images/210/img_card.png?v=7" alt="Ưu đãi 4">
                <div class="offer-content">Ưu đãi bất ngờ khi đặt Vexe</div>
            </div>
            
        </div>
    </div>

   
    <div class="container2">
        <div class="title2">Vexe có gì mới?</div>
        <div class="scroll-container2">
            <div class="offer-card">
                <img src="https://f1e425bd6cd9ac6.cmccloud.com.vn/cms-tool/post/images/290/img_card.png?v=5" alt="Ưu đãi 1">
                <div class="offer-content">Bí kíp chọn xe khách chất lượng cao tại Vexe</div>
            </div>
            <div class="offer-card">
                <img src="https://f1e425bd6cd9ac6.cmccloud.com.vn/cms-tool/post/images/302/img_card.png?v=5" alt="Ưu đãi 2">
                <div class="offer-content">Tìm xe theo nhu cầu dựa trên các tiêu chí phổ thông</div>
            </div>
            <div class="offer-card">
                <img src="https://f1e425bd6cd9ac6.cmccloud.com.vn/cms-tool/post/images/301/img_card.png?v=4" alt="Ưu đãi 3">
                <div class="offer-content">Cách chọn điểm đón xe gần bạn nhất</div>
            </div>
            <div class="offer-card">
                <img src="https://f1e425bd6cd9ac6.cmccloud.com.vn/cms-tool/post/images/291/img_card.png?v=5" alt="Ưu đãi 4">
                <div class="offer-content">Bí kíp săn deal xe khách giá hời khi đặt dịch vụ xe tại Vexe</div>
            </div>
            <div class="offer-card">
                <img src="https://f1e425bd6cd9ac6.cmccloud.com.vn/cms-tool/post/images/137/img_card.png?v=11" alt="Ưu đãi 4">
                <div class="offer-content">Tổng hợp chương trình khuyến mãi trong tháng</div>
            </div>
            
        </div>
    </div>

   
    <div class="container3">
        <div class="title3">Tin tức mới</div>
        <div class="scroll-container3">
            <div class="offer-card">
                <img src="https://cdn.futabus.vn/futa-busline-web-cms-prod/599x343_be53a3aca1/599x343_be53a3aca1.png" alt="Ưu đãi 1">
                <div class="offer-content">Công Ty Phương Trang tưng bừng khia trương tuyến mới từ Bến xe Bình Dương - Bến xe Ô Môn</div>
            </div>
            <div class="offer-card">
                <img src="https://thanhbuoi.com.vn/wp-content/uploads/2024/12/Img-2.webp" alt="Ưu đãi 2">
                <div class="offer-content">Hệ thống xe hiện đại mới của</div>
            </div>
            <div class="offer-card">
                <img src="https://f1e425bd6cd9ac6.cmccloud.com.vn/cms-tool/post/images/301/img_card.png?v=4" alt="Ưu đãi 3">
                <div class="offer-content">Cách chọn điểm đón xe gần bạn nhất</div>
            </div>
            <div class="offer-card">
                <img src="https://f1e425bd6cd9ac6.cmccloud.com.vn/cms-tool/post/images/291/img_card.png?v=5" alt="Ưu đãi 4">
                <div class="offer-content">Bí kíp săn deal xe khách giá hời khi đặt dịch vụ xe tại Vexe</div>
            </div>
            <div class="offer-card">
                <img src="https://f1e425bd6cd9ac6.cmccloud.com.vn/cms-tool/post/images/137/img_card.png?v=11" alt="Ưu đãi 4">
                <div class="offer-content">Tổng hợp chương trình khuyến mãi trong tháng</div>
            </div>
            
        </div>
    </div>
    <?php  
      include(__DIR__ . '/../shares/footer.php');

  ?>
</body>
</html>
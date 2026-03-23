<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Footer</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }
        .content {
            flex: 1;
        }
        .footer {
            
            background: #e0e0e0;
            padding: 5px;
            display: flex;
            justify-content: center;
            align-items: flex-start;
            /* margin-top: 500px; */
           
          
        }
        .container {
        display: flex; /* Sử dụng flexbox để căn chỉnh các cột */
        justify-content: space-around; /* Chia đều không gian giữa các cột */
            gap: 200px;
            padding: 2px;
            margin-left:100px;
            
        }   

        .column {
        flex: 1; /* Chia đều chiều rộng cho các cột */
        text-align: left; /* Căn chỉnh văn bản trong cột sang trái */
        padding: 20px; /* Thêm khoảng đệm xung quanh nội dung trong cột */
        }

        /* Tùy chỉnh thêm nếu cần */
        .column h3 {
        font-size: 1.2em;
        margin-bottom: 10px;
        }

        .column p {
        margin: 5px 0;
        }
        
        
        .SDT{
            color:red;
            font-size: 25px;
            flex-wrap:nowrap;
        }
        .
        .social{
            display: flex;
           
            gap:100px;
        }
        a{
            color:black;
            text-decoration: none;
        }
    </style>
</head>
<body>

    <footer class="footer">
    <div class="container">
  <div class="column">
    <h3>TRUNG TÂM TỔNG ĐÀI</h3>
    <div class="SDT">
    <p>1900 2717</p>
    </div>
    <p>Địa chỉ : 83/86 Thảo Điền , Quận 2 , TP.HCM</p>
    <p>Email : hotro@vexe.vn</p>
  </div>
  <div class="column">
    <h3>Về chúng tôi</h3>
    <p>Hệ thống quản lý bán vé xe</p>
    <p>Tin tức</p>
    <p>Liên hệ</p>
  </div>
  <div class="column">
    <h3>Chính sách</h3>
    <p>Chính sách bảo mật thông tin</p>
    <p>Chính sách bảo mật thanh toán</p>
  </div>
  <div class="column">
    <h3>Kết nối</h3>
   <div class="social">
   <p><i class="fa-brands fa-square-facebook fa-2xl"></i></p>
   
   </div>
  </div>
</div>
    </footer>
</body>
</html>

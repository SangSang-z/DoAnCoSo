
<!DOCTYPE html>
<html lang="vi">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tìm chuyến xe</title>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" type="text/css"  href="/app/views/pages/searchforthecar.css">
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
        <button class="search-button" ><a href="app/views/pages/searchforthecar.php">Tìm chuyến xe</a></button>
       </div>
    </div>

    <div class="container-searchforthecar">
        <aside class="filter-box">
            <h3>Bộ Lọc Tìm Kiếm</h3>
            <label><input type="checkbox"> Sáng sớm 00:00 - 08:00</label><br>
            <label><input type="checkbox"> Buổi sáng 06:00 - 12:00</label><br>
            <label><input type="checkbox"> Buổi chiều 12:00 - 18:00</label><br>
            <label><input type="checkbox"> Buổi tối 18:00 - 24:00</label><br>
            <h4>Loại xe</h4>
            <label><input type="checkbox"> Ghế</label>
            <label><input type="checkbox"> Giường</label>
            <label><input type="checkbox"> Limousine</label>
            <h4>Hàng ghế</h4>
            <label><input type="checkbox"> Hàng đầu</label>
            <label><input type="checkbox"> Hàng giữa</label>
            <label><input type="checkbox"> Hàng cuối</label>
            <h4>Tầng</h4>
            <label><input type="checkbox"> Tầng trên</label>
            <label><input type="checkbox"> Tầng dưới</label>
            <h4>Nhà xe</h4>
            <label><input type="checkbox"> Phương Trang (FUTA Bus Lines)</label><br>
            <label><input type="checkbox"> Thành Bưởi</label><br>
            <label><input type="checkbox"> Hùng Cường</label><br>
            <label><input type="checkbox"> Huệ Nghĩa</label><br>
            <label><input type="checkbox"> Long Vân Limousine</label><br>
            <label><input type="checkbox"> Tuấn Hưng</label><br>
            <label><input type="checkbox"> Toàn Thắng</label><br>
        </aside>
        <section class="results">
            <div class="bus-card">
                <div class="bus-info">
                     <div class="bus-details">
                        <div class="info1">
                             <div class="garage">
                                <i class="fas fa-bus fa-xl icon_bus"></i>
                                 <h3>Phương Trang (FUTA Bus Lines)</h3>
                             </div>
                         </div>
                         <div class="route">
                            <div class="departure-point">
                                <div class="dp">
                                <p>00:00 </p>
                                <p> Bến xe Miền Tây</p>
                                </div>
                                <div class="icon1">
                                <i class="fa-solid fa-street-view fa-2xl"></i>
                                </div>
                             </div>
                             <div class="destination">
                                <div class="icon2">
                                <i class="fa-solid fa-location-dot fa-2xl"></i>
                                 </div>
                                 <div class="des">
                                <p>07:00</p>
                                <p>Bến Xe Đà Lạt</p>
                                 </div>
                            </div>
                        </div>
                    </div>
                   <div class="bus_infor">
                   <div class="chair">
                        <p><i class="fa-solid fa-2xs fa-circle"></i> Limousine</p>
                        <p><i class="fa-solid fa-2xs fa-circle"></i>10 chỗ trống</p>
                    </div>
                    <div class="order">
                        <span class="price">600.000đ</span>
                        <span class="dash"></span>
                        <button class="select-btn"><a href ="/app/views/pages/Booktickets.php">Chọn chuyến</a></button>
                    </div>
                   </div>
                </div>
               
            </div>
            
            
            <div class="bus-card">
                <div class="bus-info">
                     <div class="bus-details">
                        <div class="info1">
                             <div class="garage">
                                <i class="fas fa-bus fa-xl icon_bus"></i>
                                 <h3>Long Vân Limousine</h3>
                             </div>
                         </div>
                         <div class="route">
                            <div class="departure-point">
                                <div class="dp">
                                <p>12:00 </p>
                                <p> Bến xe Miền Tây</p>
                                </div>
                                <div class="icon1">
                                <i class="fa-solid fa-street-view fa-2xl"></i>
                                </div>
                             </div>
                             <div class="destination">
                                <div class="icon2">
                                <i class="fa-solid fa-location-dot fa-2xl"></i>
                                 </div>
                                 <div class="des">
                                <p>18:00</p>
                                <p>Bến Xe Đà Lạt</p>
                                 </div>
                            </div>
                        </div>
                    </div>
                   <div class="bus_infor">
                   <div class="chair">
                        <p><i class="fa-solid fa-2xs fa-circle"></i> Limousine</p>
                        <p><i class="fa-solid fa-2xs fa-circle"></i>15 chỗ trống</p>
                    </div>
                    <div class="order">
                        <span class="price">750.000đ</span>
                        <span class="dash"></span>
                        <button class="select-btn"><a href ="/app/views/pages/Booktickets.php">Chọn chuyến</a></button>
                    </div>
                   </div>
                </div>
               
            </div>

            <div class="bus-card">
                <div class="bus-info">
                     <div class="bus-details">
                        <div class="info1">
                             <div class="garage">
                                <i class="fas fa-bus fa-xl icon_bus"></i>
                                 <h3>Huệ Nghĩa</h3>
                             </div>
                         </div>
                         <div class="route">
                            <div class="departure-point">
                                <div class="dp">
                                <p>06:00 </p>
                                <p> Bến xe Miền Đông</p>
                                </div>
                                <div class="icon1">
                                <i class="fa-solid fa-street-view fa-2xl"></i>
                                </div>
                             </div>
                             <div class="destination">
                                <div class="icon2">
                                <i class="fa-solid fa-location-dot fa-2xl"></i>
                                 </div>
                                 <div class="des">
                                <p>12:00</p>
                                <p>Bến Xe Đà Lạt</p>
                                 </div>
                            </div>
                        </div>
                    </div>
                   <div class="bus_infor">
                   <div class="chair">
                        <p><i class="fa-solid fa-2xs fa-circle"></i> Limousine</p>
                        <p><i class="fa-solid fa-2xs fa-circle"></i>20 chỗ trống</p>
                    </div>
                    <div class="order">
                        <span class="price">750.000đ</span>
                        <span class="dash"></span>
                        <button class="select-btn"><a href ="/app/views/pages/Booktickets.php">Chọn chuyến</a></button>
                    </div>
                   </div>
                </div>
               
            </div>

            <div class="bus-card">
                <div class="bus-info">
                     <div class="bus-details">
                        <div class="info1">
                             <div class="garage">
                                <i class="fas fa-bus fa-xl icon_bus"></i>
                                 <h3>Hùng Cường</h3>
                             </div>
                         </div>
                         <div class="route">
                            <div class="departure-point">
                                <div class="dp">
                                <p>12:00 </p>
                                <p> Bến xe Miền Tây</p>
                                </div>
                                <div class="icon1">
                                <i class="fa-solid fa-street-view fa-2xl"></i>
                                </div>
                             </div>
                             <div class="destination">
                                <div class="icon2">
                                <i class="fa-solid fa-location-dot fa-2xl"></i>
                                 </div>
                                 <div class="des">
                                <p>18:00</p>
                                <p>Bến Xe Đà Lạt</p>
                                 </div>
                            </div>
                        </div>
                    </div>
                   <div class="bus_infor">
                   <div class="chair">
                        <p><i class="fa-solid fa-2xs fa-circle"></i> Limousine</p>
                        <p><i class="fa-solid fa-2xs fa-circle"></i>17 chỗ trống</p>
                    </div>
                    <div class="order">
                        <span class="price">650.000đ</span>
                        <span class="dash"></span>
                        <button class="select-btn"><a href ="/app/views/pages/Booktickets.php">Chọn chuyến</a></button>
                    </div>
                   </div>
                </div>
               
            </div>

            <div class="bus-card">
                <div class="bus-info">
                     <div class="bus-details">
                        <div class="info1">
                             <div class="garage">
                                <i class="fas fa-bus fa-xl icon_bus"></i>
                                 <h3>Thành Bưởi</h3>
                             </div>
                         </div>
                         <div class="route">
                            <div class="departure-point">
                                <div class="dp">
                                <p>12:00 </p>
                                <p> Bến xe Miền Tây</p>
                                </div>
                                <div class="icon1">
                                <i class="fa-solid fa-street-view fa-2xl"></i>
                                </div>
                             </div>
                             <div class="destination">
                                <div class="icon2">
                                <i class="fa-solid fa-location-dot fa-2xl"></i>
                                 </div>
                                 <div class="des">
                                <p>18:00</p>
                                <p>Bến Xe Đà Lạt</p>
                                 </div>
                            </div>
                        </div>
                    </div>
                   <div class="bus_infor">
                   <div class="chair">
                        <p><i class="fa-solid fa-2xs fa-circle"></i> Limousine</p>
                        <p><i class="fa-solid fa-2xs fa-circle"></i>21 chỗ trống</p>
                    </div>
                    <div class="order">
                        <span class="price">750.000đ</span>
                        <span class="dash"></span>
                        <button class="select-btn"><a href ="/app/views/pages/Booktickets.php">Chọn chuyến</a></button>
                    </div>
                   </div>
                </div>
               
            </div>

            <div class="bus-card">
                <div class="bus-info">
                     <div class="bus-details">
                        <div class="info1">
                             <div class="garage">
                                <i class="fas fa-bus fa-xl icon_bus"></i>
                                 <h3>Tuấn Hưng</h3>
                             </div>
                         </div>
                         <div class="route">
                            <div class="departure-point">
                                <div class="dp">
                                <p>12:00 </p>
                                <p> Bến xe Miền Tây</p>
                                </div>
                                <div class="icon1">
                                <i class="fa-solid fa-street-view fa-2xl"></i>
                                </div>
                             </div>
                             <div class="destination">
                                <div class="icon2">
                                <i class="fa-solid fa-location-dot fa-2xl"></i>
                                 </div>
                                 <div class="des">
                                <p>18:00</p>
                                <p>Bến Xe Đà Lạt</p>
                                 </div>
                            </div>
                        </div>
                    </div>
                   <div class="bus_infor">
                   <div class="chair">
                        <p><i class="fa-solid fa-2xs fa-circle"></i> Limousine</p>
                        <p><i class="fa-solid fa-2xs fa-circle"></i>10 chỗ trống</p>
                    </div>
                    <div class="order">
                        <span class="price">660.000đ</span>
                        <span class="dash"></span>
                        <button class="select-btn"><a href ="/app/views/pages/Booktickets.php">Chọn chuyến</a></button>
                    </div>
                   </div>
                </div>
               
            </div>

            <div class="bus-card">
                <div class="bus-info">
                     <div class="bus-details">
                        <div class="info1">
                             <div class="garage">
                                <i class="fas fa-bus fa-xl icon_bus"></i>
                                 <h3>Toàn Thắng</h3>
                             </div>
                         </div>
                         <div class="route">
                            <div class="departure-point">
                                <div class="dp">
                                <p>12:00 </p>
                                <p> Bến xe Miền Tây</p>
                                </div>
                                <div class="icon1">
                                <i class="fa-solid fa-street-view fa-2xl"></i>
                                </div>
                             </div>
                             <div class="destination">
                                <div class="icon2">
                                <i class="fa-solid fa-location-dot fa-2xl"></i>
                                 </div>
                                 <div class="des">
                                <p>18:00</p>
                                <p>Bến Xe Đà Lạt</p>
                                 </div>
                            </div>
                        </div>
                    </div>
                   <div class="bus_infor">
                   <div class="chair">
                        <p><i class="fa-solid fa-2xs fa-circle"></i> Limousine</p>
                        <p><i class="fa-solid fa-2xs fa-circle"></i>5 chỗ trống</p>
                    </div>
                    <div class="order">
                        <span class="price">700.000đ</span>
                        <span class="dash"></span>
                        <button class="select-btn"><a href ="/app/views/pages/Booktickets.php">Chọn chuyến</a></button>
                    </div>
                   </div>
                </div>
               
            </div>
        </section>
    </div>
    <?php  
      include __DIR__ . '/../shares/footer.php';

  ?>
</body>
</html>
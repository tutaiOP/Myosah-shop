<?php require "layout/header.php" ?>

<div class="slider">
    <div class="list">
        <div class="item">
            <img src="../upload/slider1.jpg" alt="">
        </div>
        <div class="item">
            <img src="../upload/slider2.jpg" alt="">
        </div>
        <div class="item">
            <img src="../upload/slider3.jpg" alt="">
        </div>
    </div>
    <!-- button prev and next -->
    <div class="buttons">
        <button id="prev"><</button>
        <button id="next">></button>
    </div>
    <!-- dots (if 3 item => 3 dot) -->
    <ul class="dots">
        <li class="active"></li>
        <li></li>
        <li></li>
    </ul>
</div>

<div class="section">
    <div class="grid section-introduce">
        <div class="grid__row section-content">
            <div class="grid__col-9 section-content-left ">
                <h4 class="section-content-left-title">Mỹ phẩm làm từ thiên nhiên</h4>
                <div class="is-divider"></div>
                <p class="section-content-left-content">Từ những nguyên liệu tự nhiên xanh, sạch và bằng tình yêu thiên
                    nhiên vô điều kiện, Laco mang đến những sản phẩm mỹ phẩm chuẩn hữu cơ để đáp ứng nhu cầu làm đẹp lớn
                    của phái đẹp đồng thời hứa hẹn sẽ mang đến cho các Nàng những sản phẩm an toàn và chất lượng nhất,
                    vươn tầm quốc tế.
                </p>
                <p class="section-content-left-content">Hệ sinh thái Laco ngày càng hoàn thiện với hệ thống nhà máy
                    chuẩn GMP độc lập, vườn thảo dược, hệ thống bán hàng với hơn 3000 nhà phân phối toàn quốc. Các sản
                    phẩm Laco đưa ra thị trường như Amla Detox, Máy rửa mặt Laco Luxury.
                </p>
                <p class="section-content-left-content">Mỹ Phẩm Laco không ngừng nghiên cứu nâng cao chất lượng để đưa
                    ra thị trường những sản phẩm tốt hơn, ưu Việt hơn. Đồng thời chúng tôi cũng hoàn thiện quy tắc bán
                    hàng của hệ thống để phục vụ khách hàng tốt hơn.
                </p>
            </div>
            <div class="grid__col-3 section-content-right">
                <img src="../upload/img-introduce.jpg" alt="">
            </div>
        </div>
        <div class="grid__row">
            <div class="grid__col-4">
                <div class="item-inner">
                    <div class="item-inline">
                        <div class="item-inline-logo">
                            <img src="../upload/icon-thanhtoan.png" alt="">
                        </div>
                        <div class="item-inline-text">
                            <h4>Chính sách bảo hành</h4>
                            <span>Bảo hành 12 tháng 1 đổi 1</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="grid__col-4">
                <div class="item-inner">
                    <div class="item-inline">
                        <div class="item-inline-logo">
                            <img src="../upload/icon-vanchuyen.png" alt="">
                        </div>
                        <div class="item-inline-text">
                            <h4>Chính sách vận chuyển</h4>
                            <span>Miễn phí vận chuyển toàn quốc</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="grid__col-4">
                <div class="item-inner">
                    <div class="item-inline">
                        <div class="item-inline-logo">
                            <img src="../upload/icon-thanhtoan1.png" alt="">
                        </div>
                        <div class="item-inline-text">
                            <h4>Chính sách thanh toán</h4>
                            <span>Thanh toán khi nhận hàng</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="grid__row section-contact">
            <div class="grid__col-6">
                <div class="section-contact-left">
                    <h2 class="section-contact-title">Trở thành đại lý của chúng tôi</h2>
                    <span>Nếu bạn muốn trở thành đại lý phân phối mỹ phẩm của chúng tôi, vui lòng để lại SĐT: </span>
                </div>
            </div>
            <div class="grid__col-6">
                <div class="section-contact-right">
                    <div class="section-contact-input">
                        <input type="text" placeholder="Nhập số điện thoại..." />
                    </div>
                    <div class="section-contact-button">
                        <button type="submit" value="Đăng ký">Đăng ký</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="grid ">
        <div class="grid__row home-content ">
            <div class="grid__col-4">
                <b></b>
            </div>
            <div class="grid__col-4">
                <div class="home-title">
                    <h2 class="home-title-text">Sản phẩm nổi bật</h2>
                </div>
            </div>
            <div class="grid__col-4">
                <b></b>
            </div>
        </div>
        <div class="grid__row">
            <?php foreach ($featuredProducts as $product): ?>
            <div class="grid__col-3">
                <?php require "layout/product.php" ?>
            </div>
            <?php endforeach ?>


        </div>

        <div class="grid__row home-content ">
            <div class="grid__col-4">
                <b></b>
            </div>
            <div class="grid__col-4">
                <div class="home-title">
                    <h2 class="home-title-text">Sản phẩm mới nhất</h2>
                </div>
            </div>
            <div class="grid__col-4">
                <b></b>
            </div>
        </div>
        <div class="grid__row">
            <?php foreach($newProducts as $product): ?>
            <div class="grid__col-3">
                <?php require "layout/product.php" ?>
            </div>
            <?php endforeach ?>
        </div>
        <?php foreach($categoryProducts as $categoryName => $products): ?>
        <div class="grid__row home-content ">
            <div class="grid__col-4">
                <b></b>
            </div>
            <div class="grid__col-4">
                <div class="home-title">
                    <h2 class="home-title-text"><?=$categoryName?></h2>
                </div>
            </div>
            <div class="grid__col-4">
                <b></b>
            </div>
            </div>
          <div class="grid__row">
            <?php foreach($products as $product): ?>
            <div class="grid__col-3">
               <?php require "layout/product.php" ?>
            </div>
             <?php endforeach ?>   
        </div>
        <?php endforeach ?>
    </div>
</div>

<?php require "layout/footer.php"  ?>
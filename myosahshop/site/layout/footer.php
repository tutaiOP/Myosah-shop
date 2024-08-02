<!-- Modal cart -->
<!-- The Modal -->
<div id="myModal" class="modal">

    <!-- Modal content -->
    <div class="modal-content" id="modal-cart-detail">
        <div class="modal-header">
            <span class="close">&times;</span>
            <h2 class="text-center">Giỏ hàng</h2>
        </div>
        <div class="modal-body">
            <div class="page-content">
                <div class="grid">
                    <div class="grid__row">
                        <div class="grid__col-2"></div>
                        <div class="grid__col-3">Sản phẩm</div>
                        <div class="grid__col-2">Đon giá</div>
                        <div class="grid__col-2">Số lượng</div>
                        <div class="grid__col-2">Thành tiền</div>
                        <div class="grid__col-1">def</div>
                    </div>
                    <div class="cart-product">
                        <!-- <hr>
                        <div class="grid__row ">
                            <div class="grid__col-2">
                                <img src="../upload/Sua-tam-ong-chua.jpeg" class="img-width-50" alt="">
                            </div>
                            <div class="grid__col-3">
                                <a class="product-name" href="#">Kem làm trắng da dưỡng ẩm 5 trong 1</a>
                            </div>
                            <div class="grid__col-2">
                                <span class="product-item-discount">190.000đ</span>
                            </div>
                            <div class="grid__col-2">
                                <input type="number" min="1" value="1" />
                            </div>
                            <div class="grid__col-2">190.000đ</div>
                            <div class="grid__col-1">
                                <a class="glyphicon-trash">
                                    <i class="fa-solid fa-trash-can"></i>
                                </a>
                            </div>
                        </div> -->

                    </div>
                </div>

            </div>
        </div>
        <div class="modal-footer">


            <div class="gird__col-12 text-right">
                <p>
                    <span>Tổng tiền: </span>
                    <span class="price-total">đ</span>
                </p>
                <input type="button" name="checkout" class="btn-submit-cart" value="Đặt hàng">
            </div>


        </div>
    </div>
</div>

<!-- Footer -->
  <div class="footer">
            <div class="grid">
                <div class="grid__row">
                    <div class="grid__col-3">
                        <div class="footer-image">
                            <img src="../upload/logo.png" alt="">
                        </div>
                    </div>
                    <div class="grid__col-3">
                        <div class="footer-link">
                            <h3 class="footer-link-title">Myosah Cosmetic</h3>
                            <ul class="list-unstyled">
                                <li>Địa chỉ: Chung cư Riverside, quận 7, TP.HCM</li>
                                <li>Điện thoại: 0905.185.626</li>
                                <li>Email: hotutai2002@gmail.com</li>
                                <li>Website: tutaishop.com</li>
                            </ul>
                        </div>
                    </div>
                    <div class="grid__col-3">
                        <div class="footer-link">
                        <h3 class="footer-link-title">Liên hệ lấy giá sỉ</h3>
                        <p>Quý khách có nhu cầu mua giá sỉ,
                             vui lòng liên hệ trực tiếp với nhân viên tư vấn
                              của chúng tôi qua hotline:  0905.185.626
                        </p>
                
                        <p>Mọi ý kiến thắc mắc và góp ý,
                             vui lòng gửi về email: hotutai2002@gmail.com
                        </p>
                    </div>
                    </div>
                    <div class="grid__col-3">
                        <div class="footer-link">
                        <h3 class="footer-link-title">Danh mục sản phẩm</h3>
                        <?php 
                            $categoryRepository = new CategoryRepository();
                            $categories = $categoryRepository->getAll();
                        ?>
                        <ul class="list-unstyled">
                            <?php foreach($categories as $category):?>
                            <li><a href="#"><?=$category->getName()?></a></li>
                            <?php endforeach ?>
                        </ul>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<script src="https://code.jquery.com/jquery-3.7.1.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js" integrity="sha512-HGOnQO9+SP1V92SrtZfjqxxtLmVzqZpjFFekvzZVWoiASSQgSr4cw9Kqd2+l8Llp4Gm0G8GIFJ4ddwZilcdb8A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.js" integrity="sha512-eP8DK17a+MOcKHXC5Yrqzd8WI5WKh6F1TIk5QZ/8Lbv+8ssblcz7oGC8ZmQ/ZSAPa7ZmsCU4e/hcovqR8jfJqA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="public/vendor/jquery-validation-1.19.5//dist/jquery.validate.min.js"></script>
<script src="public/js/app.js"></script>
</html>
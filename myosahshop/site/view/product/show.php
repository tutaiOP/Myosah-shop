<?php require "layout/header.php" ?>
<div class="container">
            <div class="grid">
                <div class="grid__row">
                    <div class="grid__col-6">
                        <ul class="breadcrumb">
                            <li><a href="#">Trang chủ</a></li>
                            <li><span>/</span></li>
                            <li class=""><span><?=$product->getCategory()->getName()?></span></li>
                        </ul>
                    </div>
                </div>
<?php require "layout/sidebar.php" ?>
                    <div class="grid__col-9">
                          <div class="grid__row mrt-top product-info">
                            <div class="grid__col-6 product-content-left ">
                                <div class="grid__row">
                                    <div class="grid__col-9 product-big-img thumbnail">
                                        <img class="img-reposive" src="../upload/<?=$product->getFeaturedImage()?>" alt="">
                                    </div>
                                    <div class="grid__col-3 product-small-img">
                                        <div class="thumbnail">
                                            <img class="img-reposive" src="../upload/<?=$product->getFeaturedImage()?>" alt="">
                                        </div>
                                        <?php foreach($product->getImageItems() as $imageItem): ?>
                                        <div class="thumbnail">
                                            <img class="img-reposive" src="../upload/<?=$imageItem->getName()?>" alt="">
                                        </div>
                                            <?php endforeach ?>
                                     </div>
                                </div>
                               
                          </div>
                          <div class="grid__col-6"> 
                            <h5 class="product-name"><?=$product->getName()?></h5>
                            <div class="brand">
                                <span>Nhãn hàng: </span>
                                <span><?=$product->getBrand()->getName()?></span>
                            </div>
                            <div class="product-status">
                                <span>Trạng thái: </span>
                            <?php if($product->getInventoryQty() > 0): ?>
                                <span>Còn hàng</span>
                            <?php else: ?>
                            <span>hết hàng</span>
                            <?php endif ?>
                            </div>
                            <div class="product-item-price">
                                <span>Giá: </span>
                               <?php if($product->getPrice() != $product->getSalePrice()): ?> 
                                <span class="product-item-regular">
                                <?=number_format($product->getPrice())?>đ</span>
                                <?php endif?>
                                <span class="product-item-discount">
                                <?=number_format($product->getSalePrice())?>đ</span>
                            </div>

                            <div class="input-group">
                                <input type="number" class="product-quantity " value="1" min="1"/>
                                <a href="" class="cart-add-button product-button 
                                            <?=$product->getInventoryQty() == 0 ? "disabled" : ""?>">
                                    <i class="fa-solid fa-cart-shopping cart-icon"></i>Thêm vào giỏ hàng
                                </a>
                            </div>

                          </div>
                
                   <div class="grid__col-12 product-description">
                       
                            <div class="tabpanel">
                                <!-- Tab items -->

                                    <ul class="tab ">
                                        <li class="tab-item active "><a href="#">Mô tả</a></li>
                                        <li class="tab-item"><a href="#">Đánh giá</a></li>
                                    </ul>
                              
                                <!-- Tab content -->
                                <div class="tab-content">
                                    <div class="tab-panel active">
                                       <?=$product->getDescription()?>
                                    </div>
                                    <div class="tab-panel">
                                        <form action="" class="form-comment" method="POST" role="form">
                                            <label>Đánh giá của bạn</label>
                                            <div class="form-group">
                                                <div class="rating-box">
                                                    <div class="stars">
                                                        <span class="fa fa-star "></span>
                                                        <span class="fa fa-star "></span>
                                                        <span class="fa fa-star "></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                    </div>
                                                </div>
                                                <input type="text" class="form-control" name="fullname" placeholder="Tên *"/>
                                                <input type="email" class="form-control" name="email" placeholder="Email *">
                                                <textarea name="description" id="input" class="form-control" rows="3" required placeholder="Nội dung *"></textarea>
                                               
                                            </div>
                                            <button type="submit" class="btn-submit">Gửi</button>
                                        </form>
                                        <div class="comment-list">

                                            <hr>
                                            <span class="date pull-right">7/7/2024 11:19:36</span>
                                            <div class="rating-box">
                                                <div class="stars">
                                                    <span class="fa fa-star "></span>
                                                    <span class="fa fa-star "></span>
                                                    <span class="fa fa-star "></span>
                                                    <span class="fa fa-star"></span>
                                                    <span class="fa fa-star"></span>
                                                </div>
                                            </div>
                                            <span>ABCSA</span>
                                            <p>test</p>
                                        </div>
                                    </div>
                                </div>

                            </div>
                       
                   </div>
                        </div>
                        <div class="grid__row product-related">
                            <div class="grid__col-12">
                                <h4 class="product-related-title text-center">Sản phẩm liên quan</h4>
                                <div class="filtering ">
                                    <?php foreach($relatedProducts as $product): ?>
                                    <div class="product-related-item">
                                        <?php require "layout/product.php" ?>
                                    </div>
                                        <?php endforeach ?>
                                  </div>
                                  
                            </div>
                        </div>

                </div>
            </div>
        </div>
<?php require "layout/footer.php" ?>
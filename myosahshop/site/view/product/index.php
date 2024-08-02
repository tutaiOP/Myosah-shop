<?php require "layout/header.php" ?>
<div class="container">
            <div class="grid">
                <div class="grid__row">
                    <div class="grid__col-6">
                        <ul class="breadcrumb">
                            <li><a href="#">Trang chủ</a></li>
                            <li><span>/</span></li>
                            <li class=""><span><?=$categoryName?></span></li>
                        </ul>
                    </div>
                </div>
<?php require "layout/sidebar.php" ?>
<div class="grid__col-9">
                          <div class="grid__row mrt-top">
                            <div class="grid__col-6 ">
                                <div class="home-title">
                                    <h5 class="home-title-text"><?=$categoryName?></h5>
                                    <div class="is-divider"></div>
                                </div>
                                
                            </div>
                            <div class="grid__col-6">
                                <div class="pull-right">
                                    <label for="sort-select">Sắp xếp: </label>
                                    <select name="" id="sort-select">
                                        <option value="" <?=empty($sort) ? "selected" : ""?>>Mặc định</option>
                                        <option value="price-asc" <?=$sort=="price-asc" ? "selected" : ""?>>Giá tăng dần</option>
                                        <option value="price-desc" <?=$sort=="price-desc" ? "selected" : ""?> >Giá giảm dần</option>
                                        <option value="alpha-asc" <?=$sort=="alpha-asc" ? "selected" : ""?> >Từ A-Z</option>
                                        <option value="alpha-desc" <?=$sort=="alpha-desc" ? "selected" : ""?> >Từ Z-A</option>
                                        <option value="created-asc" <?=$sort=="created-asc" ? "selected" : ""?> >Cũ đến mới</option>
                                        <option value="created-desc" <?=$sort=="created-desc" ? "selected" : ""?> >Mới đến cũ</option>
                                    </select>
                                </div>
                            </div>
                            <?php foreach($products as $product):  ?>
                            <div class="grid__col-4">
                                <?php require "layout/product.php" ?>
                            </div>
                            <?php endforeach ?>
                          </div>

                          <!-- Paging -->
                        <ul class="pagination pull-right">
                            <?php if($page !=1): ?>
                            <li><a href="#" onclick="goToPage(<?=$page-1?>)">Trước</a></li>
                            <?php endif ?>
                            <?php for($i=1;$i <= $pageNumber; $i++): ?>
                            <li class="<?=$page == $i ? "active" : ""?>"><a href="#" onclick="goToPage(<?=$i?>)"><?=$i?></a></li>
                            <?php endfor ?>
                            <?php if($page != $pageNumber): ?>
                            <li class=""><a href="#" onclick="goToPage(<?=$page+1?>)">Sau</a></li>
                            <?php endif ?>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
<?php require "layout/footer.php" ?>
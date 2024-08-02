                <div class="grid__row">
                    <div class="grid__col-3">
                        <div class="category">
                            <h5>Danh mục sản phẩm</h5>
                            <ul>
                                <li class="<?=empty($category_id) ? "active" : ""?>"><a href="index.php?c=product" title="Tất cả sản phẩm">Tất cả sản phẩm</a></li>
                        
                                <?php foreach($categories as $category): ?>
                                <li class="<?=!empty($category_id) && $category_id==$category->getId() ? "active" : ""?>"><a href="index.php?c=product&category_id=<?=$category->getId()?>" title="<?=$category->getName()?>"><?=$category->getName()?></a></li>
                                <?php endforeach ?>
                            </ul>
                        </div>

                        <div class="price-range">
                            <h5>Khoảng giá</h5>
                            <ul>
                                <li><label for="filter-less-100">
                                    <input type="radio" id="filter-less-100" name="filter-price" value="0-100000" <?=!empty($price_range) && $price_range == "0-100000" ? "checked" : ""?>>
                                    Giá dưới 100.000đ
                                </label></li>
                                <li><label for="filter-100-200">
                                    <input type="radio" id="filter-100-200" name="filter-price" value="100000-200000" <?=!empty($price_range) && $price_range == "100000-200000" ? "checked" : ""?>>
                                     100.000đ - 200.000đ
                                </label></li>
                                <li><label for="filter-200-300">
                                    <input type="radio" id="filter-200-300" name="filter-price" value="200000-300000" <?=!empty($price_range) && $price_range == "200000-300000" ? "checked" : ""?>>
                                    200.000đ - 300.000đ
                                </label></li>
                                <li><label for="filter-300-500">
                                    <input type="radio" id="filter-300-500" name="filter-price" value="300000-500000" <?=!empty($price_range) && $price_range == "300000-500000" ? "checked" : ""?>>
                                    300.000đ - 500.000đ
                                </label></li>
                                <li><label for="filter-500-1000">
                                    <input type="radio" id="filter-500-1000" name="filter-price" value="500000-1000000" <?=!empty($price_range) && $price_range == "500000-1000000" ? "checked" : ""?>>
                                    500.000đ - 1.000.000đ
                                </label></li>
                                <li><label for="filter-greater-1000">
                                    <input type="radio" id="filter-greater-1000" name="filter-price" value="1000000-greater">
                                    Giá trên 1.000.000đ
                                </label></li>
                            </ul>
                        </div>
                    </div>
                  
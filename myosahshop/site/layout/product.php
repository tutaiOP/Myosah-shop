<div class="box-product">
    <div class="box-image">
        <a href="index.php?c=product&a=show&id=<?=$product->getId()?>">
            <img src="../upload/<?=$product->getFeaturedImage()?>" alt="">
        </a>
    </div>
    <div class="box-text">
        <p class="product-name"><a href="index.php?c=product&a=show&id=<?=$product->getId()?>"><?=$product->getName()?></a></p>
        <div class="product-item-price">
            <?php if($product->getPrice() != $product->getSalePrice()): ?>
            <span class="product-item-regular"><?=number_format($product->getPrice())?>đ</span>
            <?php endif ?>
            <span class="product-item-discount"><?=number_format($product->getSalePrice())?>đ</span>
        </div>
        <div>
            <button class="product-button buy" product-id="<?=$product->getId()?>">Thêm vào giỏ hàng</button>
        </div>
    </div>
</div>
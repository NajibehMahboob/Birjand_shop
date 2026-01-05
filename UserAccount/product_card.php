<?php
// product_card.php
$weights = json_decode($product['weight_options'], true);
$firstWeightPrice = reset($weights);
$firstWeightName = key($weights);
?>
<div class="product-card">
    <?php if($product['discount'] > 0): ?>
        <div class="discount-badge"><?php echo $product['discount']; ?>٪ تخفیف</div>
    <?php endif; ?>
    
    <div class="product-image">
        <img src="../<?php echo htmlspecialchars($product['image_url']); ?>" 
             alt="<?php echo htmlspecialchars($product['name']); ?>">
    </div>
    
    <div class="product-info">
        <h4 class="product-name"><?php echo htmlspecialchars($product['name']); ?></h4>
        
        <?php if($product['old_price']): ?>
            <p class="old-price"><?php echo number_format($product['old_price']); ?> تومان</p>
        <?php endif; ?>
        
        <p class="current-price" id="price_<?php echo $product['id']; ?>">
            <?php echo number_format($product['current_price']); ?> تومان
        </p>
        
        <div class="weight-options">
            <span class="weight-label">وزن/اندازه:</span>
            <select class="weight-select" data-product-id="<?php echo $product['id']; ?>">
                <?php foreach ($weights as $weight => $price): ?>
                    <option value="<?php echo $price; ?>" 
                            data-weight-name="<?php echo $weight; ?>"
                            <?php echo $weight == $firstWeightName ? 'selected' : ''; ?>>
                        <?php echo $weight; ?>
                    </option>
                <?php endforeach; ?>
            </select>
        </div>
        
        <div class="add-to-cart">
            <div class="quantity-control">
                <button class="qty-btn decrease-qty">-</button>
                <input type="text" value="1" class="qty-input" readonly>
                <button class="qty-btn increase-qty">+</button>
            </div>
            <button class="add-btn" 
                    data-product-id="<?php echo $product['id']; ?>"
                    data-product-name="<?php echo htmlspecialchars($product['name']); ?>"
                    data-product-image="../<?php echo htmlspecialchars($product['image_url']); ?>"
                    data-product-price="<?php echo $firstWeightPrice; ?>"
                    data-product-weight-name="<?php echo $firstWeightName; ?>">
                افزودن به سبد خرید
            </button>
        </div>
    </div>
</div>
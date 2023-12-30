<div class="card m-4" style="width: 15em">

<img src="<?php echo "resources/assets/products/" . $product["image"] . ".webp" ?>" class="card-img-top product-image" alt="...">

<div class="card-body">
    <h5 class="card-title"><?php echo $product['name']; ?></h5>
    <p class="card-price"><?php echo number_format($product['price'], 0, ',', '.') . "đ"; ?></p>

    <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
</div>
</div>
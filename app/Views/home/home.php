<?php
$productController = new ProductController();
$productArray = $productController->getProduct();
?>
<div class="container p-5">
    <div class="row row-cols-5">
        <?php
        foreach ($productArray as $product) :
        require "card/card.php";
            
        endforeach;
        ?>
    </div>
</div>
<ul class="dropdown-menu" aria-labelledby="navbarDropdown<?= $category['id'] ?>">
    <?php
    $subCategories = $categoryController->getSubCategory($category['id']);
    foreach ($subCategories as $subCategory) :
    ?>
        <li><a class="dropdown-item" href=""><?php echo $subCategory['name'] ?></a></li>
    <?php endforeach; ?>
</ul>
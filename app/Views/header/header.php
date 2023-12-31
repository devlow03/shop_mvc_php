<?php
$categoryController = new CategoryController();
$categoryArray = $categoryController->getCategory();
?>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Mode Fashion</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Trang chủ</a>
        </li>
        <?php foreach ($categoryArray as $category): ?>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown<?= $category['id'] ?>" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              <?php echo $category["name"] ?>
            </a>
            <?php require "drop_down/drop_down.php" ?>
          </li>
        <?php endforeach; ?>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Nhập sản phẩm cần tìm" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>

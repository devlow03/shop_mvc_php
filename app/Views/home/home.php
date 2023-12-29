<?php
require "../../Controllers/CategoryController.php";
require "../../Models/CategoryModel.php";
require "../../../config/conn.php";
$categoryController = new CategoryController();
$categoryController->getCategory();

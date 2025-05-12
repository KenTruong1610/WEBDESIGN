<?php 
    require_once "config.php";
    require_once "db_module.php";
?>

<div class="row">
    <?php
    abstract class ProductSearchBase {
        protected $link;

        public function __construct($link) {
            $this->link = $link;
        }

        abstract public function search();
    }

    require_once("models/model.php");

    $productSearch = new ProductSearch($link);
    $result = $productSearch->search();
    ProductRenderer::renderProducts($result);
    ?>
</div>
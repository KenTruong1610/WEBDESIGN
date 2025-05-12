<?php
require_once "db_module.php";
require_once "ajax_handler.php";
class ProductModel {
    public $link;

    public function __construct($link) {
        $this->link = $link;
    }

    public function showProductDetail($product_id) {
        $product_id = mysqli_real_escape_string($this->link, $product_id);
        $result = chayTruyVanTraVeDL($this->link, "SELECT * FROM tbl_products WHERE id_product = $product_id");

        if(mysqli_num_rows($result) > 0) {
            $product = mysqli_fetch_assoc($result);
            $html = '
            <div class="col-md-6 d-flex justify-content-center align-items-center">
                <img src="'.$product['url_product'].'" class="img-fluid product-detail-img" alt="'.$product['name_product'].'">
            </div>
            <div class="col-md-6 d-flex flex-column justify-content-center">
                <h2>'.$product['name_product'].'</h2>
                <h4 class="text-danger my-3">'.number_format($product['price'], 0, ',', '.').' ₫</h4>
                <div class="d-grid gap-2 d-md-block mb-4">
                    <button class="btn btn-primary me-md-2" type="button">
                        <i class="bi bi-cart-plus"></i> Thêm vào giỏ hàng
                    </button>
                    <button class="btn btn-outline-primary" type="button">
                        <i class="bi bi-heart"></i> Yêu thích
                    </button>
                </div>
                <div class="card">
                    <div class="card-header">
                        <h5 class="mb-0">Thông tin chi tiết</h5>
                    </div>
                    <div class="card-body">
                        <p>'.$product['detail_product'].'</p>
                    </div>
                </div>
            </div>';
        } else {
            $html = '<div class="col-12 text-center py-5">
                    <h4 class="text-muted">Sản phẩm không tồn tại</h4>
                    <a href="index.php" class="btn btn-outline-primary mt-3">Quay lại trang chủ</a>
                  </div>';
        }
        echo $html;
    }
}

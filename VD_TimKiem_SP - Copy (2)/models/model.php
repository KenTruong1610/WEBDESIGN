<?php
class ProductSearch extends ProductSearchBase
{
    public function search()
    {
        if (isset($_GET['keyword'])) {
            $keyword = mysqli_real_escape_string($this->link, $_GET['keyword']);
            return chayTruyVanTraVeDL(
                $this->link,
                "SELECT * FROM tbl_products WHERE name_product LIKE '%$keyword%'"
            );
        } else {
            return chayTruyVanTraVeDL(
                $this->link,
                "SELECT * FROM tbl_products"
            );
        }
    }

    // Thêm phương thức mới cho AJAX
    public function searchAjax($keyword)
    {
        $keyword = mysqli_real_escape_string($this->link, $keyword);
        $result = chayTruyVanTraVeDL(
            $this->link,
            "SELECT * FROM tbl_products WHERE name_product LIKE '%$keyword%'"
        );
        
        $products = [];
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                $products[] = $row;
            }
        }
        return $products;
    }
}

abstract class ProductRendererBase
{
    abstract public static function renderProducts($result);
}

class ProductRenderer extends ProductRendererBase
{
    public static function renderProducts($result)
    {
        if (mysqli_num_rows($result) > 0) {
            while ($rows = mysqli_fetch_assoc($result)) {
                echo '
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="card product-card">
                        <img src="' . $rows['url_product'] . '" class="card-img-top product-img" alt="' . $rows['name_product'] . '">
                        <div class="card-body">
                            <h5 class="card-title">' . $rows['name_product'] . '</h5>
                            <p class="card-text text-success fw-bold">' . number_format($rows['price'], 0, ',', '.') . ' ₫</p>
                            <a href="detail.php?sp=' . $rows['id_product'] . '" class="btn btn-primary w-100">
                                <i class="bi bi-eye"></i> Xem chi tiết
                            </a>
                        </div>
                    </div>
                </div>';
            }
        } else {
            echo '
            <div class="col-12 text-center py-5">
                <h4 class="text-muted">Không tìm thấy sản phẩm nào</h4>
                <a href="index.php" class="btn btn-outline-primary mt-3">Quay lại trang chủ</a>
            </div>';
        }
    }

    // Thêm phương thức mới cho AJAX
    public static function renderProductsAjax($products)
    {
        $output = '';
        if (!empty($products)) {
            foreach ($products as $row) {
                $output .= '
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="card product-card">
                        <img src="' . $row['url_product'] . '" class="card-img-top product-img" alt="' . $row['name_product'] . '">
                        <div class="card-body">
                            <h5 class="card-title">' . $row['name_product'] . '</h5>
                            <p class="card-text text-success fw-bold">' . number_format($row['price'], 0, ',', '.') . ' ₫</p>
                            <a href="detail.php?sp=' . $row['id_product'] . '" class="btn btn-primary w-100">
                                <i class="bi bi-eye"></i> Xem chi tiết
                            </a>
                        </div>
                    </div>
                </div>';
            }
        } else {
            $output = '
            <div class="col-12 text-center py-5">
                <h4 class="text-muted">Không tìm thấy sản phẩm nào</h4>
                <a href="index.php" class="btn btn-outline-primary mt-3">Quay lại trang chủ</a>
            </div>';
        }
        return $output;
    }
}
?>
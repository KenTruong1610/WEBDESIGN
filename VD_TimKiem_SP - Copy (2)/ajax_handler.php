<?php
require_once("models/model.php");
require_once("models/models.php");

header('Content-Type: text/html; charset=utf-8');

if (isset($_POST['action'])) {
    $action = $_POST['action'];
    
    // Kết nối database (giả sử $link là biến kết nối)
    $link = mysqli_connect("host", "user", "password", "database");
    
    switch ($action) {
        case 'search_products':
            $keyword = isset($_POST['keyword']) ? $_POST['keyword'] : '';
            $search = new ProductSearch($link);
            $products = $search->searchAjax($keyword);
            echo ProductRenderer::renderProductsAjax($products);
            break;
            
        case 'get_product_detail':
            $productId = isset($_POST['product_id']) ? $_POST['product_id'] : 0;
            $model = new ProductModel($link);
            $product = $model->getProductByIdAjax($productId);
            if ($product) {
                echo $model->renderProductDetailAjax($product);
            } else {
                echo $model->renderMessageAjax('Sản phẩm không tồn tại');
            }
            break;
            
        default:
            echo 'Hành động không hợp lệ';
    }
    
    mysqli_close($link);
}
?>
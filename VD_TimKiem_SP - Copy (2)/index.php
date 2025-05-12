<!DOCTYPE html>
<html lang="vi">

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Cửa hàng HATIMEDIA</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
<style>
    .product-card {
        transition: transform 0.3s, box-shadow 0.3s;
        margin-bottom: 20px;
        height: 100%;
    }
    .product-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 20px rgba(0,0,0,0.1);
    }
    .product-img {
        height: 200px;
        object-fit: contain;
        padding: 10px;
    }
    .search-box {
        max-width: 600px;
        margin: 30px auto;
    }
    .navbar-brand {
        font-weight: 700;
    }
    footer {
        background-color: #f8f9fa;
        padding: 20px 0;
        margin-top: 50px;
    }
</style>

<body>
    <!-- Navigation -->
    <?php
        require_once("views/header.php");
        include_once("db_module.php");
        $link = NULL;
        taoKetNoi($link);
    ?>
    
    <div class="container">
        <!-- Search Box -->
        <div class="row">
            <div class="col-12 search-box">
                <form class="d-flex" method="GET">
                    <input class="form-control me-2" type="search" name="keyword" placeholder="Tìm kiếm sản phẩm..." aria-label="Search">
                    <button class="btn btn-outline-primary" type="submit">
                        <i class="bi bi-search"></i> Tìm kiếm
                    </button>
                </form>
            </div>
        </div>

        <!-- Product Grid -->
        <?php
            require_once("controllers/controller.php");
        ?>
        <style>
            /* Canh chỉnh lề cho phần AJAX và chi tiết sản phẩm */
            #product-container, #product-detail-container {
            margin-top: 30px;
            margin-bottom: 30px;
            }
        </style>
        <script>
        // Tìm kiếm sản phẩm bằng AJAX
        function searchProductsAjax(keyword) {
            $.ajax({
            url: 'ajax_handler.php',
            type: 'POST',
            data: {
                action: 'search_products',
                keyword: keyword
            },
            success: function(response) {
                $('#product-container').html(response);
            },
            error: function() {
                alert('Có lỗi xảy ra khi tìm kiếm sản phẩm');
            }
            });
        }

        // Lấy chi tiết sản phẩm bằng AJAX
        function getProductDetailAjax(productId) {
            $.ajax({
            url: 'ajax_handler.php',
            type: 'POST',
            data: {
                action: 'get_product_detail',
                product_id: productId
            },
            success: function(response) {
                $('#product-detail-container').html(response);
            },
            error: function() {
                alert('Có lỗi xảy ra khi tải chi tiết sản phẩm');
            }
            });
        }

        // Sử dụng khi người dùng nhập vào ô tìm kiếm
        $('#search-input').on('input', function() {
            var keyword = $(this).val();
            if (keyword.length > 2) {
            searchProductsAjax(keyword);
            } else if (keyword.length === 0) {
            searchProductsAjax(''); // Load tất cả sản phẩm
            }
        });

        // Sử dụng khi xem chi tiết sản phẩm
        $(document).on('click', '.view-detail-btn', function(e) {
            e.preventDefault();
            var productId = $(this).data('product-id');
            getProductDetailAjax(productId);
        });
        </script>
    </div>

    <!-- Footer -->
    <?php
    require_once("views/footer.php");
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <?php
    giaiPhongBoNho($link, $result);
    ?>
</body>
</html>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Chi tiết sản phẩm</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
    <style>
        .product-detail-img {
            max-height: 400px;
            object-fit: contain;
        }
        .back-btn {
            margin-bottom: 20px;
        }
        .detail-section {
            margin-top: 30px;
        }
    </style>
</head>
<body>
    <!-- Navigation (giống như trang chủ) -->
    <?php
        require_once("views/header.php");
        include_once("db_module.php");
        $link = NULL;
        taoKetNoi($link);
    ?>
    
    <div class="container detail-section">
        <a href="index.php" class="btn btn-outline-secondary back-btn">
            <i class="bi bi-arrow-left"></i> Quay lại
        </a>
        
        <?php
            require_once("controllers/controllers.php");
        ?>
        
    </div>

    <?php
    
    require_once("views/footer.php");
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <?php
    giaiPhongBoNho($link, $result);
    ?>
</body>
</html>
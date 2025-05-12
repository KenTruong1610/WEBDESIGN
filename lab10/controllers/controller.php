<?php 
require_once "config.php";
require_once "db_module.php";
require_once "models/user-model.php";

// Tạo kết nối database
$link = NULL;
taoKetNoi($link);

// Lấy dữ liệu ban đầu
$userModel = new UserModel($link);
$users = $userModel->getAllUsers();
?>

<div class="container mt-4">
    <h2 class="mb-4">Danh sách người dùng</h2>
    
    <!-- Thanh tìm kiếm AJAX -->
    <div class="row mb-4">
        <div class="col-md-6">
            <div class="input-group">
                <input type="text" id="searchInput" class="form-control" placeholder="Tìm theo tên hoặc website...">
                <button id="searchBtn" class="btn btn-primary" type="button">
                    <i class="bi bi-search"></i> Tìm kiếm
                </button>
            </div>
        </div>
    </div>

    <!-- Khu vực hiển thị kết quả -->
    <div id="searchResults">
        <?php if (!empty($users)): ?>
            <table class="table table-striped table-hover">
                <thead class="table-dark">
                    <tr>
                        <th>Tên</th>
                        <th>Url</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($users as $user): ?>
                        <tr>
                            <td><?php echo htmlspecialchars($user['name']); ?></td>
                            <td>
                                <?php if (!empty($user['url'])): ?>
                                    <a href="<?php echo htmlspecialchars($user['url']); ?>" 
                                       target="_blank" 
                                       class="text-decoration-none">
                                        <?php echo htmlspecialchars($user['url']); ?>
                                    </a>
                                <?php else: ?>
                                    <span class="text-muted">Không có</span>
                                <?php endif; ?>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        <?php else: ?>
            <div class="alert alert-info">Không có người dùng nào</div>
        <?php endif; ?>
    </div>
</div>

<?php
// Đóng kết nối
giaiPhongBoNho($link, NULL);
?>

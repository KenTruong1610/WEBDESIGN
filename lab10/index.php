<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản lý người dùng</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
    <style>
        #searchResults {
            transition: opacity 0.3s;
        }
        .search-loading {
            opacity: 0.77;
            position: relative;
        }
        .search-loading::after {
        }
    </style>
</head>
<body>
    <?php require_once("views/header.php"); ?>
    
    <main class="container py-4">
        <?php require_once("controllers/controller.php"); ?>
    </main>

    <?php require_once("views/footer.php"); ?>
    
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
    $(function() {
        const $searchInput = $('#searchInput');
        const $searchBtn = $('#searchBtn');
        const $searchResults = $('#searchResults');
        const $searchStatus = $('#searchStatus');
        
        // Tìm kiếm khi nhấn nút hoặc Enter
        function handleSearch() {
            const keyword = $searchInput.val().trim();
            $searchResults.addClass('search-loading');
            
            
            $.ajax({
                url: 'ajax_handler.php',
                type: 'POST',
                dataType: 'json',
                data: { search: keyword },
                success: function(response) {
                    if (response.success) {
                        renderResults(response.data);
                        $searchStatus.text(`Tìm thấy ${response.data.length} kết quả`);
                    } else {
                        showError(response.message || 'Có lỗi xảy ra');
                    }
                },
                error: function(xhr) {
                    showError('Lỗi kết nối: ' + xhr.statusText);
                },
                complete: function() {
                    $searchResults.removeClass('search-loading');
                }
            });
        }
        
        // Hiển thị kết quả
        function renderResults(users) {
            if (users.length > 0) {
                let html = '<div class="table-responsive"><table class="table table-striped table-hover">';
                html += '<thead class="table-dark"><tr><th>Tên</th><th>Url</th></tr></thead><tbody>';
                
                users.forEach(user => {
                    html += `<tr>
                        <td>${escapeHtml(user.name)}</td>
                        <td>${user.url ? 
                            `<a href="${escapeHtml(user.url)}" target="_blank" class="text-decoration-none">${escapeHtml(user.url)}</a>` : 
                            '<span class="text-muted">Không có</span>'}
                        </td>
                    </tr>`;
                });
                
                html += '</tbody></table></div>';
                $searchResults.html(html);
            } else {
                $searchResults.html('<div class="alert alert-info">Không tìm thấy kết quả phù hợp</div>');
            }
        }
        
        // Hiển thị lỗi
        function showError(message) {
            $searchResults.html(`<div class="alert alert-danger">${escapeHtml(message)}</div>`);
            $searchStatus.text('Tìm kiếm thất bại');
        }
        
        // Escape HTML
        function escapeHtml(unsafe) {
            return unsafe ? 
                unsafe.toString()
                    .replace(/&/g, "&amp;")
                    .replace(/</g, "&lt;")
                    .replace(/>/g, "&gt;")
                    .replace(/"/g, "&quot;")
                    .replace(/'/g, "&#039;") : '';
        }
        
        // Event handlers
        $searchBtn.on('click', handleSearch);
        $searchInput.on('keypress', function(e) {
            if (e.which === 13) handleSearch();
        });
        
        // Tải dữ liệu ban đầu nếu chưa có
        if ($searchResults.is(':empty')) {
            handleSearch();
        }
    });
    </script>
</body>
</html>
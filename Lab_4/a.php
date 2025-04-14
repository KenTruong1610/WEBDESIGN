<?php
$employees = [
    ["id" => 1, "ho_lot" => "Trương Thanh", "ten" => "Tùng", "que_quan" => "Tiền Giang", "trinh_do" => "Đại học", "he_so_luong" => 4.0],
    ["id" => 2, "ho_lot" => "Lê Ngọc", "ten" => "Thanh", "que_quan" => "Long An", "trinh_do" => "Cao đẳng", "he_so_luong" => 2.2],
    ["id" => 3, "ho_lot" => "Nguyễn Thanh", "ten" => "Cường", "que_quan" => "Đà Nẵng", "trinh_do" => "Trung cấp", "he_so_luong" => 1.8],
    ["id" => 4, "ho_lot" => "Nguyễn Thị", "ten" => "Duyên", "que_quan" => "An Giang", "trinh_do" => "Trung cấp", "he_so_luong" => 1.4],
    ["id" => 5, "ho_lot" => "Văn", "ten" => "Phúc", "que_quan" => "Bình Thuận", "trinh_do" => "Thạc Sĩ", "he_so_luong" => 4.3],
    ["id" => 6, "ho_lot" => "Phạm", "ten" => "Khánh", "que_quan" => "Hà Nội", "trinh_do" => "Đại học", "he_so_luong" => 2.8],
    ["id" => 7, "ho_lot" => "Đinh Thị", "ten" => "Lan", "que_quan" => "Hải Phòng", "trinh_do" => "Cao đẳng", "he_so_luong" => 2.0],
    ["id" => 8, "ho_lot" => "Ngô Minh", "ten" => "Huy", "que_quan" => "Cần Thơ", "trinh_do" => "Trung cấp", "he_so_luong" => 1.7],
    ["id" => 9, "ho_lot" => "Hoàng Gia", "ten" => "Bảo", "que_quan" => "Bắc Giang", "trinh_do" => "Đại học", "he_so_luong" => 2.6],
    ["id" => 10, "ho_lot" => "Tô Ngọc", "ten" => "Bích", "que_quan" => "Quảng Nam", "trinh_do" => "Cao đẳng", "he_so_luong" => 2.1]
];
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Danh Sách Nhân Viên</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        function removeRow(rowId) {
            document.getElementById("row-" + rowId).style.display = "none";
        }
    </script>
    <style>
    body {
        background-color:rgb(201, 223, 245);
    }
    </style>
</head>
<body>
    <div class="container mt-4 text-center">
        <h2 class="text-center">DANH SÁCH NHÂN VIÊN</h2>
        <table class="table table-bordered table-striped">
            <thead class="table-success">
                <tr>
                    <th>Xóa</th>
                    <th>STT</th>
                    <th>Họ lót</th>
                    <th>Tên</th>
                    <th>Quê quán</th>
                    <th>Trình độ</th>
                    <th>Hệ số lương</th>  
                </tr>
            </thead>
            <tbody>
                <?php foreach ($employees as $index => $emp) : ?>
                    <tr id="row-<?= $emp['id'] ?>">
                        <td>
                            <button class="btn btn-danger" onclick="removeRow(<?= $emp['id'] ?>)">Xóa Dữ Liệu</button>
                        </td>
                        <td><?= $index + 1 ?></td>
                        <td><?= $emp['ho_lot'] ?></td>
                        <td><?= $emp['ten'] ?></td>
                        <td><?= $emp['que_quan'] ?></td>
                        <td><?= $emp['trinh_do'] ?></td>
                        <td><?= $emp['he_so_luong'] ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>
</html>

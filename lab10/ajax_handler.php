<?php
require_once "config.php";
require_once "db_module.php";
require_once "models/user-model.php";

header('Content-Type: application/json');

// Tạo kết nối database
$link = NULL;
taoKetNoi($link);

$response = ['success' => false, 'data' => []];

if (isset($_POST['search'])) {
    $searchKeyword = trim($_POST['search']);
    $userModel = new UserModel($link);
    
    if (!empty($searchKeyword)) {
        $users = $userModel->searchUsers($searchKeyword);
    } else {
        $users = $userModel->getAllUsers();
    }
    
    $response['success'] = true;
    $response['data'] = $users;
}

echo json_encode($response);
giaiPhongBoNho($link, NULL);
?>
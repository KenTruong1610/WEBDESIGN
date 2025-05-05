<?php
include "class.database.php";
global $conn;
//$result = mysqli_query($conn,"SELECT * FROM users");
//var_dump(mysqli_fetch_all($result));
if(!$_SESSION['login']) {
    header("Location:login.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Danh sách người dùng</title>

    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>

<body id="page-top">
     <div class="card-body">
        <h1> Đây là trang cho quyền user </h1>
        <h1> Hello </h1>
        <div style="text-align: center; margin-top: 20px;">
		    <a href="logout.php" class="logout-button">Logout</a>
		</div>
		<style>
			.logout-button {
			  display: inline-block;
			  padding: 10px 20px;
			  background-color: red;
			  color: white;
			  text-decoration: none;
			  border: 2px solid darkred;
			  border-radius: 4px;
			  font-weight: bold;
			  text-align: center;
			}
		</style>
     </div>
     </body>
</html>
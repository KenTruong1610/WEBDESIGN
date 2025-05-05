<?php
include "class.database.php";
if(!$_SESSION['login']) {
    header("Location:login.php");
}
if($_SESSION['login'] && $_SESSION['login']!='admin') {
    header("Location:index.php");
}
global $conn;
$result = mysqli_query($conn,"SELECT * FROM users");
//var_dump(mysqli_fetch_assoc($result));
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Danh sách người dùng </title>

    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <link href="css/sb-admin-2.min.css" rel="stylesheet">

    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>

<body id="page-top">
     <div class="card-body">
		<div class="table-responsive">
			<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
				<thead>
					<tr>
						<th>ID</th>
						<th>Name</th>
						<th>Phone</th>
						<th>Address</th>                                           
						<th>City</th>  
						<th>Email</th>    
						<th>Role</th>						
					</tr>
				</thead>
			   
				<tbody>
				<?php while($row=mysqli_fetch_assoc($result)):?>
					<tr>
						<td><?=$row['ID']?></td>
						<td><?=$row['Name']?></td>
						 <td><?=$row['Phone']?></td>
						<td><?=$row['Address']?></td>
						<td><?=$row['City']?></td>   
						<td><?=$row['email']?></td>  
						<td><?=$row['role']?></td> 						
					</tr>
					<?php endwhile; ?>
				  
				</tbody>
			</table>
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
	</div>

    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <script src="js/sb-admin-2.min.js"></script>

    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <script src="js/demo/datatables-demo.js"></script>

</body>

</html>
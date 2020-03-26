<?php 
	session_start();
	require_once('../db_connect/connect_db.php');
	require_once('process/check_login.php');
	require_once('../process/redirect.php');
 ?>
<html>
<head>
<title>Giao Diện Quản Trị</title>
<meta charset="utf-8">
<link rel="shortcut icon" href="../asset/admin/img/devil-icon.png"> 
<link rel="stylesheet" type="text/css" href="../asset/admin/css/mos-style.css">
<link rel="stylesheet" type="text/css" href="../asset/admin/css/style-of-me.css">
<script type="text/javascript" src="../asset/user/js/jquery1.min.js"></script>
<script src="../asset/admin/js/myscript.js"></script>

</head>
<body>
<div id="header">
	<div class="inHeader">
		<div class="mosAdmin">
		Xin Chào <?php echo $_SESSION['this_admin']; ?><br>
		<a href="index.php?router=change_pass">Đổi Mật Khẩu</a> | <a href="process/process.php?action=logout">Logout</a>
		</div>
	<div class="clear"></div>
	</div>
</div>

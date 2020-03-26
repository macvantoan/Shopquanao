<?php 
	session_start();
    require_once('../db_connect/connect_db.php');
    require_once('redirect.php');
    unset($_SESSION['username']);
   redirect("shopdemo/index");

	
 ?>
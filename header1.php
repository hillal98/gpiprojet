<?php
ob_start();
session_start();
include 'db_conn.php';

if(!empty($_SESSION['admin']) ){
    $admin_email=$_SESSION['admin'];

 }

?>
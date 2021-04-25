<?php
ob_start();
session_start();
error_reporting(E_PARSE);
unset($_SESSION['user']);
header("location:index.php");
?>
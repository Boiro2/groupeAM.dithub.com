<?php
session_start();
$_session = array(); 
session_destroy();
header('location: connect.php');
?>
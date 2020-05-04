<?php

session_start();
unset($_SESSION["taikhoan"]);

header("Location:\admin\dangnhap.php");

?>

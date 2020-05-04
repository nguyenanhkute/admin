<?php 
include_once('/var/www/html/admin/conn.php');
 	function login($user0,$pass0) {
		$conn = connect();
    	$strSQL = "SELECT * FROM admin WHERE Email='" . $user0. "' and MatKhau='" . $pass0. "'";
		echo $strSQL;
    	$result = mysqli_query($conn, $strSQL) Or die('nouser');//header("Location:\admin\dangnhap.php"));
    	return $result;
	}
?>

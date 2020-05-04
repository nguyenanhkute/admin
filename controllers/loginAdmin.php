<?php
	session_start();
	if (!isset($_POST["username"])){
        die('');
    }
	include_once('/var/www/html/admin/model/login.php');
	$user1=$_POST["username"];
	$pass1=$_POST["password"];   
	$sql = login($user1,$pass1);
	
    if ($sql != 'nouser') {
		$result = array();
		$result['login'] = array();
		//$response = mysqli_query($conn, $sql);
		$row  = mysqli_fetch_array($sql);///mysqli_fetch_array($response);
		if(is_array($row)) 
		{
			$_SESSION["taikhoan"] = $row['Email'];
		} 
		
		if(mysqli_num_rows($sql) > 0){
			$row = mysqli_fetch_assoc($sql);
			$index['name'] = $row["HoTen"];
			$index['email'] = $row["Email"];
			$index['id'] = $row["MaAdmin"];
			
			
			array_push($result['login'], $index);
			$result['success'] = "1";
			$result['message'] = "success";
			//echo json_encode($result);
			header("Location:\admin\main.php");
			mysqli_close($conn);
			
		}		
		else {
			$result['success'] = "0";
			$result['message'] = "error";
			//echo json_encode($result);
			header("Location:\admin\dangnhap.php");
			$_SESSION["TESTLOGIN"]= 1;
			mysqli_close($conn);
		}
	}else {header("Location:\admin\dangnhap.php");}

?>

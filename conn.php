<?php
function connect(){
	$SERVER = "localhost";
	$USERNAME = "root"; 
	$PASSWORD = "Anh18121998"; 
	$DBNAME = "qlbhtrasua";
	$conn= mysqli_connect($SERVER, $USERNAME, $PASSWORD,$DBNAME); 
	if ( !$conn )
	{ 
		die('Không nết nối được vào MySQL server');
		 echo "Kết nối thành công"; 
	} 
	mysqli_set_charset($conn ,'utf8');
	return $conn;
}
?>

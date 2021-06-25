<?php
	$currency = '$';
	$servername	=	"localhost";
	$username	=	"root";
	$pass		=	"";
	$dbname		=	"rabbit_house";
	$conn		=	@mysqli_connect($servername, $username, $pass, $dbname);
	if(!$conn)
		echo "Kết nối thất bại".mysqli_connect_error();
?>
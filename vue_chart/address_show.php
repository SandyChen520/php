<?php
	require_once("connect.php");
	$sql = "select * from product_address";
	$query = mysqli_query($con, $sql);
	$arrdata = [];
	if($query&&mysqli_num_rows($query)){
		while($row = mysqli_fetch_assoc($query)){
			$data[] = $row;
		}
//		print_r($data);
		echo json_encode($data);
	}
?>
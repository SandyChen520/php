<?php
	require_once("../connect.php");
	print_r($_GET);
	$id = $_GET["addressId"];
	$setstr = "update product_address set isDefault=1 where addressId=$id";
	$setstr1 = "update product_address set isDefault=0";
	
//	print_r($setstr);
$response['success'] = true;
	if(mysqli_query($con, $setstr1) && mysqli_query($con, $setstr)){
		echo json_encode($response);
	}else{
		echo mysqli_error($con);
		echo "<script>alert('修改失败');</script>";
	}
?>
<?php
	require_once("../connect.php");
//	print_r($_GET);
	$id = $_GET["productId"];
	$setstr = "delete from product_cart where productId='$id'";
//	print_r($setstr);
	$response['success'] = true;
	if(mysqli_query($con, $setstr)){
		echo json_encode($response);
	}else{
		echo mysqli_error($con);
		echo "<script>alert('删除失败');</script>";
	}
?>
<?php
	require_once("../connect.php");
	print_r($_POST);
	$productId = $_POST["productId"];
	$productName = $_POST["productName"];
	$productPrice = $_POST["productPrice"];
	$productQuentity = $_POST["productQuentity"];
	$productImage = $_POST["productImage"];
	$parts = $_POST["parts"];
	$setstr = "insert into product_cart(productId, productName, productPrice, productQuentity, productImage, parts) values('$productId', '$productName', '$productPrice', '$productQuentity', '$productImage', '$parts')";
	print_r($setstr);
	if(mysqli_query($con, $setstr)){
		echo "<script>alert('发布文章成功');</script>";
	}else{
		echo mysqli_error($con);
		echo "<script>alert('发布失败');</script>";
	}
?>
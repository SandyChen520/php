<?php
	require_once("../connect.php");
	print_r($_POST);
	$addressId = $_POST["addressId"];
	$userName = $_POST["userName"];
	$streetName = $_POST["streetName"];
	$postCode = $_POST["postCode"];
	$tel = $_POST["tel"];
	$isDefault = $_POST["isDefault"];
	if($isDefault == "true"){
		$isDefault = true;
	}else{
		$isDefault = false;
	}
	$setstr = "insert into product_address(addressId, userName, streetName, postCode, tel, isDefault) values('$addressId', '$userName', '$streetName', '$postCode', '$tel', '$isDefault')";
	print_r($setstr);
	if(mysqli_query($con, $setstr)){
		echo "<script>alert('插入成功');</script>";
	}else{
		echo mysqli_error($con);
		echo "<script>alert('插入失败');</script>";
	}
?>
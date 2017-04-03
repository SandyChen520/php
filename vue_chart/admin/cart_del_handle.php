<?php
	require_once("../connect.php");
	print_r($_GET);
	$id = $_GET["id"];
	$setstr = "delete from article where id='$id'";
	print_r($setstr);
	if(mysqli_query($con, $setstr)){
		echo "<script>alert('删除文章成功');</script>";
	}else{
		echo mysqli_error($con);
		echo "<script>alert('删除失败');</script>";
	}
?>
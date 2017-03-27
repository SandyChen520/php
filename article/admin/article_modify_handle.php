<?php
	require_once("../connect.php");
	print_r($_POST);
	$id = $_POST["id"];
	$title = $_POST["title"];
	$author = $_POST["author"];
	$description = $_POST["description"];
	$content = $_POST["content"];
	$dateline = time();
	$setstr = "update article set title='$title', author='$author', description='$description', content='$content', dateline='$dateline' where id=$id";
	print_r($setstr);
	if(mysqli_query($con, $setstr)){
		echo "<script>alert('修改文章成功');</script>";
	}else{
		echo mysqli_error($con);
		echo "<script>alert('修改失败');</script>";
	}
?>
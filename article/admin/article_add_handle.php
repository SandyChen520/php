<?php
	require_once("../connect.php");
	print_r($_POST);
	$title = $_POST["title"];
	$author = $_POST["author"];
	$description = $_POST["description"];
	$content = $_POST["content"];
	$dateline = time();
	$setstr = "insert into article(title, author, description, content, dateline) values('$title', '$author', '$description', '$content', $dateline)";
	print_r($setstr);
	if(mysqli_query($con, $setstr)){
		echo "<script>alert('发布文章成功');</script>";
	}else{
		echo mysqli_error($con);
		echo "<script>alert('发布失败');</script>";
	}
?>
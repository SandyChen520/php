<?php
	require_once("config.php");
//连库
	$con = mysqli_connect(HOST, USERNAME, PASSWORD);
	if(!$con){
		echo mysqli_error($con);
	}
//选择库
	if(!mysqli_select_db($con, "phpchen")){
		echo mysqli_error($con);
		
	};
	if(!mysqli_query($con, "set names utf8")){
		echo mysqli_error($con);
		
	};
	
?>
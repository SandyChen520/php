<?php
	require_once("connect.php");
	$sql = "select * from product_cart";
	$query = mysqli_query($con, $sql);
	$arrdata = [];
	$i = 1;
	if($query&&mysqli_num_rows($query)){
		while($row = mysqli_fetch_assoc($query)){

			$str = $row['parts'];
			if($str){
				$arr = [];
				$arr = explode('+', $str);
				foreach($arr as $value){
					$arrsql = "select * from product_parts where partsId=".$value;
					$arrquery = mysqli_query($con, $arrsql);
					$arrdata[] = mysqli_fetch_assoc($arrquery);
				}
				$aaa = json_encode($arrdata);
				$row['parts'] = json_decode($aaa);
			}
			$data[] = $row;
			
		}

		
//		print_r($data);
		echo json_encode($data);
	}
?>
<?php
	$data = array(1,2,3,4,5,6,7,8,9,10);
	shuffle($data); // 要素を入れ替える
	$dsize = sizeof($data);
	foreach ($data as $one) { // 要素をすべて表示
	echo "$one ";
	}
	print(PHP_EOL);
	
	for($i = 0; $i < $dsize; $i++){ // 配列回数の繰り返し
		$min = $i; // 回数個目の要素の値
		for($j = $i + 1; $j < $dsize; $j++){
			if($data[$j] < $data[$min]){
				$min = $j; //最小値格納
			}
		}
		$tmp = $data[$i]; // 元の要素を入れておく
		$data[$i] = $data[$min]; // 先に最小値を入れる
		$data[$min] = $tmp; // 最小値があった場所に元の値を入れる
		foreach ($data as $one) { // 要素をすべて表示
			echo "$one ";
		}
		print(PHP_EOL);
	}
?>

	
<?php

	$data = array();
	
	for($i = 1; $i < $argc; $i++) { // コマンドライン引数を配列に追加
		try{
			if(is_numeric($argv[$i])){ // 数値判定
				array_push($data, $argv[$i]); // 配列に追加
			}else{
				throw new Exception($argv[$i]."は数値ではありません"); // 例外を投げる
			}	
		}catch(Exception $e){
			print($e->getmessage().PHP_EOL); // メッセージ出力
		}
	}
	
	$dsize = sizeof($data);
	
	print("ソート前".PHP_EOL);
	foreach ($data as $one) { // 要素をすべて表示
		print("$one ");
	}
	print(PHP_EOL);
	
	for($i = 0; $i < $dsize; $i++){ // ソートの繰り返し
		for($j = $i + 1; $j < $dsize; $j++){ // ソートする配列の要素
			if($data[$i] < $data[$j]){
				$tmp = $data[$i]; // 元の要素を入れておく
				$data[$i] = $data[$j]; // 先に最小値を入れる
				$data[$j] = $tmp; // 最小値があった場所に元の値を入れる
			}
			print("ソート途中経過");
			print(PHP_EOL);
			foreach ($data as $one) { // 要素をすべて表示
				print("$one ");
			}
			print(PHP_EOL);
		}
	}
	print(PHP_EOL);
	print("ソート後");
	print(PHP_EOL);
	foreach ($data as $one) { // 要素をすべて表示
		print("$one ");
	}
	print(PHP_EOL);
?>
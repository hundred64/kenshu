<?php 
	require_once 'Person.php';
	
	$data = array();
	array_push( //配列の要素を追加する
		$data,//配列名
		new Person("佐藤太郎", "東京都", 20, "03123456"), //要素
		new Person("山田花子", "青森県", 80, "0170123456"), //要素
		new Person("木村次郎", "京都府", 38, "0750123456") //要素
	);
	
	foreach ($data as $person) { // 要素をすべて表示
		$person->printperson();
	}
	
?>
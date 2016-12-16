<?php 
	require_once 'Person.php';
	require_once 'Employee.php';
	require_once 'Engineer.php';
	
	$data = array();
	array_push( //配列の要素を追加する
		$data,//配列名
		new Employee("佐藤太郎", 20, "金融システム部", "03123456"), //社員クラスの要素
		new Engineer("山田花子", "青森県", 30, "java", "0170123456"), //技術者クラス要素
		new Person("木村次郎", "京都府", 38, "0750123456") //要素
	);
	
	foreach ($data as $person) { // 要素をすべて表示
		$person->printdata();
	}
	
?>
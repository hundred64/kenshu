<?php 
	require_once 'Person.php';
	
	$Person1 = new Person("佐藤太郎", "東京都", 20, "03123456"); //Personクラスのインスタンス化
	$Person2 = new Person("山田花子", "青森県", 80, "0170123456"); //Personクラスのインスタンス化
	$Person3 = new Person("木村次郎", "京都府", 38, "0750123456"); //Personクラスのインスタンス化
	
	$Person1->printperson(); //内容を表示
	$Person2->printperson(); //内容を表示
	$Person3->printperson(); //内容を表示
?>
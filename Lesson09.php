<?php
	require_once 'MyListItem.php';
	require_once 'MyListManager.php';
	
	$list = new MyListManager();
	
	print("末尾追加");
	print(PHP_EOL);
	
	$list->add1("最初");
	$list->add1("中央");
	$list->add1("最後");

	$list->print();

	print(PHP_EOL);

	print("指定先挿入");
	print(PHP_EOL);
	
	$list->add2("中央前", 1);
	$list->add2("中央後", 3);

	$list->print();

	print(PHP_EOL);
	print("指定先削除");
	print(PHP_EOL);
	
	$list->remove(1);
	$list->remove(2);

	$list->print();

?>
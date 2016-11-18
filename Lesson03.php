<?php
	$array1 = array();
	$array1[0] = 10;
	$array1[1] = 20;
	$array1[2] = 30;
	
	$array2 = $array1;
	
	foreach ($array1 as $one) { // 配列1の要素をすべて表示
	echo "$one ";
	}
	echo "<br>";
	foreach ($array2 as $one2) { // 配列2の要素をすべて表示
	echo "$one2 ";
	}
	echo "<br>";
	
	echo "array1だけ値を変更します<br>";
	
	$array1[0] = 100;
	
	echo "arrayだけ値を変更しました<br>";
	
	foreach ($array1 as $one) { // 配列1の要素をすべて表示
	echo "$one ";
	}
	echo "<br>";
	foreach ($array2 as $one2) { // 配列2の要素をすべて表示
	echo "$one2 ";
	}
	echo "<br>";
	
	
?>


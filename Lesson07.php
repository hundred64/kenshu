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
	
		do{
			print("機能を選択".PHP_EOL);
			print("1:追加 2:全件表示 3:検索 0:プログラム終了".PHP_EOL);
			$process = trim(fgets(STDIN)); 
			if($process == 1){
				do{
					print("追加する分類を選択".PHP_EOL);
					print("1:個人クラス 2:社員クラス 3:技術者クラス 0:追加処理終了".PHP_EOL);
					$type = trim(fgets(STDIN)); 
					if($type == 1){	//Personクラスの追加処理
						print("名前を入力".PHP_EOL);
						$name = trim(fgets(STDIN)); 
						print("住所を入力".PHP_EOL);
						$adress = trim(fgets(STDIN)); 
						print("年齢を入力".PHP_EOL);
						$age = trim(fgets(STDIN)); 
						print("電話番号を入力".PHP_EOL);
						$tel = trim(fgets(STDIN)); 
						$person = new Person($name,$adress,$age,$tel);
						array_push($data, $person);
					}
					else if($type == 2){//Employeeクラスの追加処理
						print("名前を入力".PHP_EOL);
						$name = trim(fgets(STDIN)); 
						print("年齢を入力".PHP_EOL);
						$age = trim(fgets(STDIN)); 
						print("所属部署名を入力".PHP_EOL);
						$sec = trim(fgets(STDIN)); 
						print("電話番号を入力".PHP_EOL);
						$tel = trim(fgets(STDIN)); 
						$emp = new Employee($name, $sec, $age, $tel);
						array_push($data, $emp);
					}
					else if($type == 3){//Engineerクラスの追加処理
						print("名前を入力".PHP_EOL);
						$name = trim(fgets(STDIN)); 
						print("住所を入力".PHP_EOL);
						$adress = trim(fgets(STDIN)); 
						print("年齢を入力".PHP_EOL);
						$age = trim(fgets(STDIN)); 
						print("保有技術を入力".PHP_EOL);
						$skill = trim(fgets(STDIN)); 
						print("電話番号を入力".PHP_EOL);
						$tel = trim(fgets(STDIN)); 
						$eng = new Engineer($name, $adress, $age, $skill, $tel);
						array_push($data, $eng);
					}
					else if($type > 3){
						print("分類を正しく選択してください");
					}
				}while($type != 0);
			}
			else if($process == 2){
				foreach ($data as $person) { // 要素をすべて表示
					$person->printdata();
					print(PHP_EOL);
				}
			}
			else if($process == 3){
				print("検索する文字列を入力(前方一致)".PHP_EOL);
				$str = trim(fgets(STDIN)); 
				print("検索する文字列:".$str);
				$cnt = 0;
				foreach ($data as $person) { // 要素をすべて表示
					if(strpos($person->getname(), $str) !=0){
						$person->printname();
						print("".PHP_EOL);
						$cnt++;
					}
				}
				if($cnt != 0){//見つかったか判定
					print($cnt."件一致しました。".PHP_EOL);
				}
				else{
					print("一致する名前はありませんでした。".PHP_EOL);
				}
			}
		}while($process != 0);
	
?>
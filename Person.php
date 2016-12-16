<?php
	class Person {
		private $name; //名前
		private $adress; //住所
		private $age; //年齢
		private $telephone; //電話番号
		
		function __construct($pname, $padress, $page, $ptel){ //コンストラクタ
			$this->setname($pname); //名前を設定
			$this->setadress($padress); //住所の設定
			$this->setage($page); //年齢を設定
			$this->settelephone($ptel); //電話番号を設定
		}
		
		function printdata(){ //表示メソッド
			$this->printname();
			$this->printadress();
			$this->printage();
			$this->printtelephone();
			PHP_EOL;
		}
		function getname(){ //名前を返す
			return $this->name;
		}
		function getadress(){ //住所を返す
			return $this->adress;
		}
		function getage(){ //年齢を返す
			return $this->age;
		}
		function gettelephone(){ //電話番号を返す
			return $this->telephone;
		}
		function printname(){ //名前を表示
			print("氏名:".$this->getname().PHP_EOL);
		}
		function printadress(){ //住所を表示
			print("住所:".$this->getadress().PHP_EOL);
		}
		function printage(){ //年齢を表示
			print("年齢:".$this->getage().PHP_EOL);
		}
		function printtelephone(){ //電話番号を表示
			print("電話番号:".$this->gettelephone().PHP_EOL);
		}
		function setname($pname){//名前を設定
			$this->name = $pname;
		}
		function setadress($padress){//住所を設定
			$this->adress = $padress;
		}
		function setage($page){//年齢を設定
			$this->age = $page;
		}
		function settelephone($ptel){//電話番号を設定
			$this->telephone = $ptel;
		}
	}
?>
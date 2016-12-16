<?php
	class Employee extends Person{
		protected $section; //所属部署名
		
		function __construct($pname, $psection, $page, $ptel){ //コンストラクタ
			$this->setname($pname); //名前を設定
			$this->setsection($psection); //所属部署名を設定
			$this->setage($page); //年齢を設定
			$this->settelephone($ptel); //電話番号を設定
		}
		
		function printdata(){ //表示メソッド
			$this->printname();
			$this->printsection();
			$this->printage();
			$this->printtelephone();
			PHP_EOL;
		}
		function getsection(){ //所属部署を返す
			return $this->section;
		}
		
		function printsection(){ //所属部署を表示
			print("所属部署名:".$this->getsection().PHP_EOL);
		}
		
		function setsection($psection){//所属部署を設定
			$this->section = $psection;
		}
	}
?>
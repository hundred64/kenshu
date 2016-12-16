<?php
	class Engineer extends Person{
		protected $skill; //保有技術
		
		function __construct($pname, $padress, $page, $pskill, $ptel){ //コンストラクタ
			$this->setname($pname); //名前を設定
			$this->setadress($padress); //住所の設定
			$this->setage($page); //年齢を設定
			$this->setskill($pskill); //保有技術の設定
			$this->settelephone($ptel); //電話番号を設定
		}
		
		function printdata(){ //表示メソッド
			$this->printname();
			$this->printadress();
			$this->printage();
			$this->printskill();
			$this->printtelephone();
			PHP_EOL;
		}
		function getskill(){ //保有技術を返す
			return $this->skill;
		}
		function printskill(){ //保有技術を表示
			print("保有技術:".$this->getskill().PHP_EOL);
		}
		function setskill($pskill){//保有技術を設定
			$this->skill = $pskill;
		}
	}
?>
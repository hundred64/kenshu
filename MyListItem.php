<?php
	class MyListItem {
		private $next;
		private $item;
		
		function __construct(){ //コンストラクタです。
		}
		
		
		function getnext(){ // 次の要素を取得
			return $this->next;
		}
		
		function getitem(){ // 要素の内容を取得
			return $this->item;
		}
		
		function setnext($n){
			$this->next = $n;
		}
		
		function setnext1($n){ //次の要素を設定
			$li = new MyListItem();
			$li->setitem($n);
			$this->next = $li;
		}
		
		function setnext2($o, $n){ //間に要素を設定
			$li = new MyListItem();
			$li->setitem($o);
			$li->setnext($n);
			$this->next = $li;
		}
		
		function  setitem($o){ //要素の内容を設定
			$this->item = $o;
		}
	}
?>
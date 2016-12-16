<?php
	require_once 'MyListItem.php';

	class MyListManager {
		private $firstItem; //リストの最初のアイテムです。
		
		function __construct(){ // コンストラクタ
			$this->firstItem = new MyListItem();
		}
		function add1($o){// 引数で指定されたオブジェクトをリストの末尾に追加します。
			$item = $this->firstItem;
			while($item->getnext() != null){//現在の末尾へ移動
				$item = $item->getnext();
			}
			$item->setnext1($o);//オブジェクトを追加
		}
		function add2($o, $i){ // 引数で指定されたオブジェクトを引数で指定された位置に追加します。
			$item = $this->firstItem;
			for($j = 0; $j < $i; $j++){//指定された位置の前まで移動
				if($item->getnext() != null){
					$item = $item->getnext();
				}else{
					print("現在の範囲外に追加できません。");
					return 0;
				}
			}
			$n = $item->getnext();//指定された位置の前のnextを保持
			$item->setnext2($o, $n);//指定された位置にオブシェクトを追加
		}
		
		function remove($i){ // 引数で指定された位置のオブジェクトを削除します。
			$removeitem = $this->firstItem;
			$item = $this->firstItem;
			for($j = 0; $j <= $i; $j++){//削除するオブジェクトのnextを探す
				$removeitem = $removeitem->getnext();
			}
			$n = $removeitem->getnext();
			for($j = 0; $j < $i; $j++){//削除するオブジェクトの前のオブジェクトのnextの値を変更
				$item = $item->getnext();
			}
			$item->setnext($n);
		}
		 
		function print(){ // 保持している全てのデータを先頭から順に出力します。
			$item = $this->firstItem;
			$i = 0;
			$item = $item->getnext();
			while($item != null){
				print($i."番目のデータは".$item->getitem().PHP_EOL);
				$item = $item->getnext();
				$i++;
			}
		}
	}
?>
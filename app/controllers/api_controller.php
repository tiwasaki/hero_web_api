<?php
/**
 * API コントローラクラス
 */
class ApiController extends AppController {
	/** コントローラ名 */
	var $name   = 'api';
	/** 使用モデル配列 */
	var $uses = null;
	/** 使用レイアウト **/
	var $layout = null;
	
	/**
	 * テスト通信用
	 */
	function test() {
		$params = $this->params['form']['params'];
		if(empty($params)){
			$this->_jsonOutPut(array(), false);
		} else {
			$this->_jsonOutPut(array());
		}
	}
}
?>

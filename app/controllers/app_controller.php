<?php
/***
 * 共通Controller
 */
class AppController extends Controller {
	var $name = 'AppController';
	var $view = 'Smarty';
	/** 使用コンポーネント **/
	var $components = array('Oauth');
	var $logger = false;
	var $autoRender = false;
	
	/**
	 * コンストラクタ
	 */
	function __construct(){
		parent::__construct();
		// ログコンポーネント
		App::import('Vendor', 'logger');
		$this->logger = new Logger();
		$this->logger->write_access_log();
		
		//PHPのエラーをログに出力するように設定	
		error_reporting(E_ALL);
	    ini_set('log_errors', 1);
	    ini_set('error_log', LOGS . 'error.log');
	}
	
	
	/**
	 * 処理前フィルター
	 */
	function beforeFilter() {
		//キャッシュしない
		header("Cache-Control: no-cache");
	}
	
	/**
	 * 処理後フィルター
	 */
	function afterFilter() {
	}
	
	/***
	 * 例外共通処理
	 * @param $code エラーコード
	 * @param $msg エラーメッセージ
	 */
	function _ex($code, $msg, $logOutput = true) {
		if($logOutput){
			$this->log($msg, LOG_ERROR);
		}
		$data = array('errorcode' => $code, 'msg' => $msg);
		$this->_jsonOutPut($data, false);
	}

	/***
	 * 配列からJSON形式のデータを出力する
	 * @param $data データ配列
	 * @param $result 結果
	 */
	function _jsonOutPut($data = array(), $result = true) {
		$data['result'] = ($result) ? RESULT_SUCCESS : RESULT_FAILURE;
		echo json_encode($data);
		exit;
	}
}
?>
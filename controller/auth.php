<?php
require(APP_PATH.'/include/auth/invite.php');
class auth extends spController{
	function index()
	{
		
	}
	/*
	 * 跳转到人人认证
	 */
	function go_to_renren()
	{
		_check();
		$oauth = new RenRenOauth();
		$url=$oauth->getAuthorizeUrl();
		
		$this->url=$url;
		$this->display("default/auth/index.html");
	}
	/*
	 * 从人人页面跳转回来
	 */
	function come_from_renren()
	{
		$oauth = new RenRenOauth();
		$client = new RenRenClient();
		
		$code = $_GET['code'];
		//dump($code);
		/**
		 * 返回以下格式的数组
		 *array(
		 *	'access_token' => '130705|5.a2bf7f751cc195cbb310ff15e3cd793a.86400.1305525600-223378553',
		 *	'expires_in' => 87048,
		 *);
		 */
		$access_token = $oauth->getAccessToken($code);
		//dump($access_token);
		$key = $oauth->getSessionKey($access_token);
		//dump($key);
		$client->setSessionKey($key['renren_token']['session_key']);
		$_SESSION["session_key"]=$key['renren_token']['session_key'];
		$_SESSION["uid"]=$key["user"]["id"];
		$this->jump(spUrl("renren","get_user_info"));
		
	}
}
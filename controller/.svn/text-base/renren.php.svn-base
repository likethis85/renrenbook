<?php
require(APP_PATH.'/include/auth/invite.php');
class renren extends spController{
	function get_index()
	{
		
		_check();
		_use();
		$this->display("default/renren/get_status_all.html");
	}
	function get_status_all()
	{
		_check();
		$client = new RenRenClient();
		$client->setSessionKey($_SESSION["session_key"]);
		$status=$client->POST("status.gets",array("5","20"));
		//dump($status);
		echo json_encode($status);
	}
	function get_status_page_count()
	{
		_check();
		$client = new RenRenClient();
		$client->setSessionKey($_SESSION["session_key"]);
		$status=$client->POST("status.gets",array($_GET["page"],$_GET["count"]));
		//dump($status);
		//echo json_encode(str_replace('"', "'",$status));
		echo json_encode($status);
	}
	function get_user_info()
	{
		_check();
		$client = new RenRenClient();
		$client->setSessionKey($_SESSION["session_key"]);
		$status=$client->POST("users.getInfo");
		$_SESSION["tinyurl"]=$status[0]["tinyurl"];
		$_SESSION["uid"]=$status[0]["uid"];
		$_SESSION["name"]=$status[0]["name"];
		setcookie("tinyurl",$status[0]["tinyurl"]);
		setrawcookie("name",$status[0]["name"]);
		//dump($status[0]["tinyurl"]);
		
		//dump($status);
		$this->jump(spUrl("renren","get_index"));
	}
	function get_user_blog()
	{
		_check();
		$client=new RenRenClient();
		$client->setSessionKey($_SESSION["session_key"]);
		$blog_list=$client->POST("blog.gets",array($_SESSION["uid"],'1','500'));
		$result=$blog_list;
		echo json_encode($result["blogs"]);
	}
	function get_user_friends()
	{
		_check();
		$client=new RenRenClient();
		$client->setSessionKey($_SESSION["session_key"]);
		$blog_list=$client->POST("friends.getFriends",'1','3000');
		$result=$blog_list;
		//dump($result);
		echo json_encode($result);
	}
	function get_status_comments()
	{
		_check();
		$client=new RenRenClient();
		$client->setSessionKey($_SESSION["session_key"]);
		$blog_list=$client->POST("status.getComment",array($_GET["status_id"],$_SESSION["uid"],'1','3000'));
		//dump($_SESSION["uid"]);
		$result=$blog_list;
		//dump($result);
		echo json_encode($result);
	}
}
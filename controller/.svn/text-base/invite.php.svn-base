<?php
class invite extends spController{
	function check(){
		$InviteCode=$_POST['iv'];
		$t=spClass("lib_Invite");
		$c="select * from lib_Invite where CodeNum='".$InviteCode."' and CountNum>=1 ";
		$result=$t->findSql($c);
		//dump($result);
		if(count($result)>=1)
		{
			$_SESSION["Invited"]="true";
			$_SESSION["CodeNum"]=$InviteCode;
			$this->jump(spUrl("auth","go_to_renren"));
		}
		else
		{
			$_SESSION["Invited"]=false;
			$this->jump("tpl/default/invite/error.html");
			
		}
	}
	function not_invite()
	{
		
	}
	function get_rest()
	{
		$InviteCode=$_SESSION["CodeNum"];
		$t=spClass("lib_Invite");
		$c=array("CodeNum"=>$InviteCode);
		$result=$t->find($c);
		echo "剩余试用次数".$result["CountNum"];
		
	}
}
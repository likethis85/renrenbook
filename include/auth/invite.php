<?php
function _check()
{
if($_SESSION["Invited"]==null&&$_SESSION["Invited"]=='')
{
	Header("Location:http://renrenbook.sinaapp.com/tpl/default/invite/error.html");
}
}
function _use()
{
	try {
	$t=spClass("lib_Invite");
	$result=$t->find(array("CodeNum"=>$_SESSION["CodeNum"]));
	$c=array("CodeNum"=>$_SESSION["CodeNum"]);
	$row=array("CountNum"=>intval($result["CountNum"])-1);
	$t->update($c, $row);
	
	$tt=spClass("lib_Usage");
	$row=array("CodeNum"=>$_SESSION["CodeNum"],
	 "UseTime"=>date("Y-m-d H:i:s"));
	$tt->create($row);
	}
	catch(Exception $e)
	{
		Header("Location:http://renrenbook.sinaapp.com/tpl/default/invite/error.html");
	}
}
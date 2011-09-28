<?php
define("SP_PATH",dirname(__FILE__)."/SpeedPHP");
define("APP_PATH",dirname(__FILE__));
$spConfig = array(

);
require(SP_PATH."/SpeedPHP.php");
require(APP_PATH."/include/renren/requires.php");
require(APP_PATH.'/include/dompdf/dompdf_config.inc.php');
require(APP_PATH."/include/word/PHPWord.php");
spRun();
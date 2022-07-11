<?php 
include_once('/home/sl/public_html/sl_init.php'); //公用函式庫

include_once(  $mtp_url."class.TemplatePower.inc.php"  ); 
$f_var["tp"] = new  TemplatePower ( "./test.tpl"  );  // 樣版畫面檔
$f_var["tp"]-> prepare ();

$f_var["tp"]->newBlock("tb");


$a = "http://eip.slc.com.tw/~gas/gasdoc_upfile/2020振興券措施.pdf";

$f_var["tp"]->assign("href",$a);


$f_var["tp"]-> printToScreen ();


// echo "<a target='' href='{$a}'>油站文管系統項目設定檔</a>";
?>
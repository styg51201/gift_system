<?php 
include_once('/home/sl/public_html/sl_init.php'); //���Ψ禡�w

include_once(  $mtp_url."class.TemplatePower.inc.php"  ); 
$f_var["tp"] = new  TemplatePower ( "./test.tpl"  );  // �˪��e����
$f_var["tp"]-> prepare ();

$f_var["tp"]->newBlock("tb");


$a = "http://eip.slc.com.tw/~gas/gasdoc_upfile/2020�����鱹�I.pdf";

$f_var["tp"]->assign("href",$a);


$f_var["tp"]-> printToScreen ();


// echo "<a target='' href='{$a}'>�o����ިt�ζ��س]�w��</a>";
?>
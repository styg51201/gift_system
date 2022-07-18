


<?php
error_reporting(E_ALL & ~E_DEPRECATED & ~E_STRICT & ~E_NOTICE);
// error_reporting(E_ALL);
header("Content-type: text/html; charset=big-5");
date_default_timezone_set("Asia/Taipei");
 

$f_var['server_name']  = 'https://'.$_SERVER["SERVER_NAME"];
$f_var['dateTime'] = date('Y-m-d H:i:s'); //今天
$f_var['upd_img'] = '<img src="../picture/修改.png" border="0" alt="修改此筆" title="修改此筆">';
$f_var['del_img'] = '<img src="../picture/作廢.png" border="0" alt="作廢此筆" title="作廢此筆">';
$f_var['save_img'] = '<img src="../picture/儲存.png" border="0" alt="確定儲存" title="確定儲存">';


// **************************************************************************
//  函數名稱: sl_open()
//  函數功能: 開啟資料庫
//  使用方式: sl_open()
//  程式設計: Tony
//  設計日期: 92.02.13
// **************************************************************************
function sl_open($db) {

  if($_SERVER["SERVER_NAME"] == 'localhost'){
    $host = 'localhost';
    $user = 'root';
    $pasd = '';
    $db = 'nkn6x5gvbk1t56z3';
  }else{
    $host = 'ctgplw90pifdso61.cbetxkdyhwsb.us-east-1.rds.amazonaws.com';
    $user = 'z7q9a301il6z9uk0';
    $pasd = 'hk492ylby573ak0i';
    $db = 'nkn6x5gvbk1t56z3';
  }

  $con = mysqli_connect($host,$user,$pasd) or die(date('Y-m-d H:i:s')."資料庫連結失敗!!");
  mysqli_select_db($con,$db) or die(date('Y-m-d H:i:s')."無法讀取資料庫!!-sl_open()-$db");
  mysqli_query($con,"SET NAMES Big5;");
  mysqli_query($con,"SET @@session.time_zone = '+08:00';");

  return $con;
}

// **************************************************************************
//  函數名稱: u_showproc()
//  函數功能: 秀程式名稱
//  使用方式: u_showproc()
//  程式設計: Tony
//  設計日期: 92.02.13
// **************************************************************************
function u_showproc() {
  //$vtoday    = date("Y.m.d");
  // 0123456789012345678
  //$vfilename = $GLOBALS["PHP_SELF"]; // 目前檔案名稱 (~/xxx/xxxx/xxxx.php) php.ini register_globals = On 才可以使用
  $vfilename = $_SERVER["PHP_SELF"];; // 目前檔案名稱 (~/xxx/xxxx/xxxx.php)
  $vfilelen  = strlen($vfilename);   // 檔案字串長度
  $vstrrpos  = strrpos($vfilename,'/'); // '/' 最後出現位置 以上範例為 11
  $vprocname = substr($vfilename,$vstrrpos+1,($vfilelen-$vstrrpos-5)); // -5 不秀出 .php
  return($vprocname);
}

// **************************************************************************
//  函數名稱: sl_jreplace()
//  函數功能: 重新指向網址，使用 javascript 函數
//  使用方式: echo sl_jreplace($go_url); 一定要用 echo 不然會失敗
//  程式設計: Tony
//  設計日期: 2006.11.07
// **************************************************************************
function sl_jreplace($go_url,$vtarget='') {
  $vurl  = "<script language=\"javascript\">";
  if(NULL<>$vtarget) {
     $vurl .= "$vtarget.";
  }
  $vurl .= "location.replace(\"$go_url\");";
  $vurl .= "</script>";
  return ($vurl);
}

?>
<script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

<?php
error_reporting(E_ALL & ~E_DEPRECATED & ~E_STRICT & ~E_NOTICE);
// error_reporting(E_ALL);
header("Content-type: text/html; charset=big-5");
 

$f_var['server_name']  = 'https://'.$_SERVER["SERVER_NAME"];


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
  mysqli_query($con,"SET NAMES Big5");

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
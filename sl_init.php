<script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

<?php
error_reporting(E_ALL & ~E_DEPRECATED & ~E_STRICT & ~E_NOTICE);
// error_reporting(E_ALL);
header("Content-type: text/html; charset=big-5");
 

$f_var['server_name']  = 'https://'.$_SERVER["SERVER_NAME"];


// **************************************************************************
//  ��ƦW��: sl_open()
//  ��ƥ\��: �}�Ҹ�Ʈw
//  �ϥΤ覡: sl_open()
//  �{���]�p: Tony
//  �]�p���: 92.02.13
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

  $con = mysqli_connect($host,$user,$pasd) or die(date('Y-m-d H:i:s')."��Ʈw�s������!!");
  mysqli_select_db($con,$db) or die(date('Y-m-d H:i:s')."�L�kŪ����Ʈw!!-sl_open()-$db");
  mysqli_query($con,"SET NAMES Big5");

  return $con;
}

// **************************************************************************
//  ��ƦW��: u_showproc()
//  ��ƥ\��: �q�{���W��
//  �ϥΤ覡: u_showproc()
//  �{���]�p: Tony
//  �]�p���: 92.02.13
// **************************************************************************
function u_showproc() {
  //$vtoday    = date("Y.m.d");
  // 0123456789012345678
  //$vfilename = $GLOBALS["PHP_SELF"]; // �ثe�ɮצW�� (~/xxx/xxxx/xxxx.php) php.ini register_globals = On �~�i�H�ϥ�
  $vfilename = $_SERVER["PHP_SELF"];; // �ثe�ɮצW�� (~/xxx/xxxx/xxxx.php)
  $vfilelen  = strlen($vfilename);   // �ɮצr�����
  $vstrrpos  = strrpos($vfilename,'/'); // '/' �̫�X�{��m �H�W�d�Ҭ� 11
  $vprocname = substr($vfilename,$vstrrpos+1,($vfilelen-$vstrrpos-5)); // -5 ���q�X .php
  return($vprocname);
}

// **************************************************************************
//  ��ƦW��: sl_jreplace()
//  ��ƥ\��: ���s���V���}�A�ϥ� javascript ���
//  �ϥΤ覡: echo sl_jreplace($go_url); �@�w�n�� echo ���M�|����
//  �{���]�p: Tony
//  �]�p���: 2006.11.07
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
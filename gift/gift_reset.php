<?php

include_once('/app/init/sl_init.php'); 
// include_once('../init/sl_init.php'); 


$f_var['mdb'] = 'heroku'; // db name
$f_var['con_db'] = sl_open($f_var['mdb']); 


if( $argv[1] == "reset" ){

  // 每晚0點重置DB資料
  $sql = file_get_contents("/app/gift/gift_reset.sql");
  $arr = explode(';',$sql);
  foreach($arr as $str){
    $result = mysqli_query($f_var['con_db'],mb_convert_encoding($str,'big5','UTF-8'));
  }

}else{
  header('Location: /app/gift/');
}


?>
<?php 
include_once('../init/sl_init.php'); 



if( $argv[0] == "stacey" ){

    $f_var['mdb'] = 'heroku'; // db name
    $f_var['con_db'] = sl_open($f_var['mdb']); // 開啟資料庫

    $sql = "UPDATE empno set `name` = concat(`name`,{date(Hi)})
                where empno = 2030088";

    $result = mysqli_query($f_var['con_db'],$sql);

}


?>
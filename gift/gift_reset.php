<?php

include_once('../init/sl_init.php'); 



$f_var['mdb'] = 'heroku'; // db name
$f_var['con_db'] = sl_open($f_var['mdb']); // �}�Ҹ�Ʈw
$sql = '';


if( $argv[0] == "stacey" ){

$sql = "UPDATE empno set `name` = concat(`name`,".date('Hi').")
            where empno = 2030088";
}else{

$sql = "UPDATE empno set `name` = concat(`name`,".date('i').")
            where empno = 2030088";
}

$result = mysqli_query($f_var['con_db'],$sql);

?>
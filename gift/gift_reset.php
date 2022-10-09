<?php

include_once('/app/init/sl_init.php'); 



$f_var['mdb'] = 'heroku'; // db name
$f_var['con_db'] = sl_open($f_var['mdb']); // ¶}±Ò¸ê®Æ®w
$sql = '';


if( $argv[1] == "stacey" ){

$sql = "UPDATE empno set `name` = ".date('His')."
            where empno = 2030088";
}else{

$sql = "UPDATE empno set `name` = ".date('is')."
            where empno = 2030088";
}

$result = mysqli_query($f_var['con_db'],$sql);

?>
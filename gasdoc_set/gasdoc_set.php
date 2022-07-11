<?php
//┌─────┬───────────────────────────────┐
//│系統名稱: │gasdoc_set.php　  　                                       │
//│          │                                                        │
//│程式名稱: │gasdoc_set.php                                         │
//│程式說明: |油站文管系統項目設定檔                                                      │
//│樣板名稱: │gasdoc_set.tpl                                                 │
//│          │                                                              │
//│資料庫  : │gas                                              │
//│資料表  : │gasdoc_set
//|          |                                           │
//│          │                                                              │
//│相關程式: │/home/sl/public_html/sl_init.php 共用函數                     │
//│          │                                                              │
//│          │                                                │
//│          │                                                              │
//│程式設計: │翊靖                                                          │
//│設計日期: │2020.05.26                                                    │
//└─────┴───────────────────────────────┘


// include_once('/home/sl/public_html/sl_init.php'); //公用函式庫


u_setvar(&$f_var); // 程式變數設定,全部改用陣列變數,不再用 global u_setvar(&$f_var),需要用&,傳值,可以將值回傳,後面繼續用值

include_once( "/home/TemplatePower/class.TemplatePower.inc.php"  ); 
$f_var["tp"] = new  TemplatePower ( $f_var['tpl']  );  // 樣版畫面檔
$f_var["tp"]-> prepare ();


//--------for ajax-----------
  if($_REQUEST['ajax_add'] == 'Y'){
    u_add_input(&$f_var);
    exit;
  }
  if( $_REQUEST['add_info']){
    $req = $_REQUEST['add_info'];
    u_insert(&$f_var,$req);
    exit;
  }
  if( $_REQUEST['ajax_update'] ){
    $req = $_REQUEST['ajax_data'];
    u_update(&$f_var,$req);
    exit;
  }
//------end ajax -------------

// include_once($sl_header_php); // header


// if( u_chk_master() ){
  // sl_open($f_var['mdb']); // 開啟資料庫
  $f_var["tp"]-> newBlock('tb_css&js');
  u_list(&$f_var);

  mysql_close(); // 關閉資料庫
// }else{
  // sl_errmsg("僅 總務(總公司)及油站負責人 有權限觀看");
// }




$f_var["tp"]-> printToScreen ();

// include_once($sl_footer_php); // footer


// **************************************************************************
//  函數名稱: u_add_input($f_var)
//  函數功能: 新增一筆的tpl
//  使用方式: u_add_input($f_var)
//  程式設計: Tony
//  設計日期: 2006.09.27
// **************************************************************************
function u_add_input($f_var){

  $f_var["tp"]-> newBlock('tb_add_tr');

  while(list($key , $val) = each($f_var['fd'])){
    $f_var["tp"]-> newBlock('tb_add_td');


    $f_var["tp"]-> newBlock("tb_{$val['type']}");
    $f_var["tp"]-> assign('tv_ename' ,$val['ename'] );
    $f_var["tp"]-> assign('tv_value' ,$val['value'] );
    
    switch($val['type']){
      case 'select' :
        while(list($show , $value) = each($val['option'])){
          $f_var["tp"]-> newBlock('tb_option');
          $f_var["tp"]-> assign('tv_show' ,$show);
          $f_var["tp"]-> assign('tv_value' ,$value);
        }
      break;
    }
    
  }
  $res = $f_var["tp"]-> getOutputContent();
  $res = mb_convert_encoding($res ,'UTF-8','big5');
  echo trim($res);
}
// **************************************************************************
//  函數名稱: u_update($f_var , $data)
//  函數功能: update DB (包含作廢)
//  使用方式: u_update($f_var , $data)
//  程式設計: Tony
//  設計日期: 2006.09.27
// **************************************************************************

function u_update ($f_var , $data){
  sl_open($f_var['mdb']);

  switch($_REQUEST['ajax_update']){
    case 'delete':
      $sql = "UPDATE `{$f_var['mtable']['gasdoc_set']}`
              SET `d_empno`= '{$_SESSION['login_empno']}' ,
                  `d_dept_id`= '{$_SESSION['login_dept_id']}' ,
                  `d_proc`= '{$f_var['mphp_name']}' ,
                  `d_date`= '{$f_var['dateTime']}' 
              WHERE `itemno` = '{$data}' ";
    break;
    case 'update':
      $data = stripslashes($data);
      $data = json_decode($data,true);

      foreach($data as $key => $val){
        $data[$key] = mb_convert_encoding($data[$key],'Big5','utf-8'); //ajax 過來是utf-8 ,轉成big5
      }

      $sql = "UPDATE `{$f_var['mtable']['gasdoc_set']}`
              SET `item_name` = '{$data['item_name']}',
                  `field_type` = '{$data['field_type']}',
                  `default` = '{$data['default']}',
                  `memo` = '{$data['memo']}',
                  `m_empno`= '{$_SESSION['login_empno']}' ,
                  `m_dept_id`= '{$_SESSION['login_dept_id']}' ,
                  `m_proc`= '{$f_var['mphp_name']}' ,
                  `m_date`= '{$f_var['dateTime']}' 
              WHERE `itemno` = '{$data['itemno']}' ";
    break;
  }

  $result = mysql_query($sql);
  print_r ($result);
  mysql_close();
}
// **************************************************************************
//  函數名稱: u_insert()
//  函數功能: 寫進DB
//  使用方式: u_insert()
//  程式設計: Tony
//  設計日期: 2006.09.27
// **************************************************************************

function u_insert ($f_var , $data){
  sl_open($f_var['mdb']);

  //取得A,B,C代碼 流水號的最大值
  $sql_que = "SELECT 
        (SELECT SUBSTR( MAX(`itemno`), 2, 3 ) FROM `gasdoc_set` WHERE `block_type` = 'A.油站基本資料' group by `block_type` ) as A ,
        (SELECT SUBSTR( MAX(`itemno`), 2, 3 ) FROM `gasdoc_set` WHERE `block_type` = 'B.油站相關文件' group by `block_type`) as B ,
        (SELECT SUBSTR( MAX(`itemno`), 2, 3 ) FROM `gasdoc_set`WHERE `block_type` = 'C.函文附件' group by `block_type` ) as C
        FROM `{$f_var['mtable']['gasdoc_set']}` group by A";

  $result_que = mysql_query($sql_que);
  $item_num = mysql_fetch_assoc($result_que); // => array([A]=>001,[B]=>002,[C]=>001)

  $b_empno = $_SESSION['login_empno'];
  $b_dept_id = $_SESSION['login_dept_id'];
  $b_proc = $f_var['mphp_name'];
  $b_date = $f_var['dateTime'];
  $fromip  = $_SERVER["REMOTE_ADDR"]; 

  $sql = "INSERT INTO `{$f_var['mtable']['gasdoc_set']}` 
          (`itemno`, `item_name`, `block_type`, `field_type`, `default`,`memo`,`b_empno`, `b_dept_id`, `b_proc`, `b_date`,`fromip`) VALUE ";

  $data = stripslashes($data);
  $data = json_decode($data,true);

  for( $i=0 ;$i<count($data); $i++ ){
    $type = substr($data[$i]['block_type'] , 0 ,1); // 取得 A or B or C
    $item_num[ $type ] += 1;  // 帶進arr裡 讓流水號+1

    $itemno = $type.str_pad( $item_num[ $type ],3,'0',STR_PAD_LEFT); //  英文字 + 流水號(不足三位則補0) ex:A001
    $item_name = mb_convert_encoding($data[$i]['item_name'],'Big5','utf-8');  //ajax 過來是utf-8 ,轉成big5
    $block_type = mb_convert_encoding($data[$i]['block_type'],'Big5','utf-8');
    $field_type = mb_convert_encoding($data[$i]['field_type'],'Big5','utf-8');
    $default = $data[$i]['default'];
    $memo = mb_convert_encoding($data[$i]['memo'],'Big5','utf-8');
     

    $sql_val .= ",( '{$itemno}' , '{$item_name}' , '{$block_type}' , '{$field_type}' , '{$default}' , '{$memo}' ,'$b_empno' , '$b_dept_id' , '$b_proc' , '$b_date' , '$fromip' )";
    
  }

  $sql_val = substr($sql_val,1); //去掉第一個逗號
  $sql .= $sql_val;

  $result = mysql_query($sql);
  print_r ($result);
  mysql_close();
}


// **************************************************************************
//  函數名稱: u_chk_master()
//  函數功能: 權限設定
//  使用方式: u_chk_master()
//  程式設計: Tony
//  設計日期: 2006.09.27
// **************************************************************************
function u_chk_master (){
  // 權限 => 採購(全)(PD0001)
  sl_open('it');
  $sql = "SELECT gp_id, dept_id
          FROM  it.ap_deptgroup  
          WHERE d_date =  '0000-00-00 00:00:00'
          AND dept_id = '{$_SESSION["login_hrm_dept_id"]}'
          AND  gp_id = 'PD0001' ";

  $result = mysql_query($sql);
  $result = mysql_num_rows($result);
  mysql_close();


  $option = sl_add_select_gas('gas','Y','S111');

  if( $result || (count($option[0]) > 1) ){
    return true;
  }else{
    return false;
  }
}
// **************************************************************************
//  函數名稱: u_list()
//  函數功能: 列表
//  使用方式: u_list(&$f_var)
//  程式設計: Tony
//  設計日期: 2006.09.27
// **************************************************************************
function u_list($f_var){


  $f_var["tp"]-> newBlock('tb_list');
  $f_var["tp"]-> newBlock('tb_edit_select');
  $f_var["tp"]-> assign('tv_ename' ,$f_var['fd']['field_type']['ename'] );
  while(list($show , $value) = each($f_var['fd']['field_type']['option'])){
    $f_var["tp"]-> newBlock('tb_edit_option');
    $f_var["tp"]-> assign('tv_show' ,$show);
    $f_var["tp"]-> assign('tv_value' ,$value);
  }


  $sql = "SELECT `itemno`,`item_name`,`block_type`,`field_type`,`default`,`memo`,`b_date`,`b_empno` 
          FROM  {$f_var['mtable']['gasdoc_set']} 
          WHERE `gasdoc_set`.`d_date` = '0000-00-00 00:00:00' ORDER BY `itemno` ASC";

  $result = mysql_query($sql);

  if( mysql_num_rows($result) > 0){

    while( $row = mysql_fetch_assoc($result) ){
      $f_var["tp"]-> newBlock('tb_gasdoc');

      // 找建檔人姓名
      sl_open('sl');
      $result_name = mysql_query("SELECT `name` FROM `pass` WHERE `empno` = '{$row['b_empno']}'");
      $row_name = mysql_fetch_assoc($result_name);


      $f_var['tp'] -> assign('tv_type',substr($row['block_type'],0,1));

      $f_var['tp'] -> assign('tv_block_type',$row['block_type']);
      $f_var['tp'] -> assign('tv_itemno',$row['itemno']);
      $f_var['tp'] -> assign('tv_item_name',$row['item_name']);
      $f_var['tp'] -> assign('tv_field_type',$row['field_type']);

      if($row['default'] == 'Y'){
        $f_var['tp'] -> assign('tv_default','checked');
      }else{
        $f_var['tp'] -> assign('tv_default','');
      }

      if ($row['memo']){ 
        $f_var['tp'] -> assign('tv_memo', nl2br($row['memo']) );
      }else{
        $f_var['tp'] -> assign('tv_memo','-'); //沒有或NULL 
      }

      
      $f_var['tp'] -> assign('tv_b_name',$row_name['name']);
      $f_var['tp'] -> assign('tv_b_date',$row['b_date']);
      $f_var['tp'] -> assign('tv_del_img','<img src="/~sl/img/del.png">');

      

    }

  }

}  
// **************************************************************************
//  函數名稱: u_setvar()
//  函數功能: 變數設定
//  使用方式: u_setvar(&$f_var)
//  程式設計: Tony
//  設計日期: 2006.09.27
// **************************************************************************
function u_setvar ($f_var){

  // post or get data Begin ............................................//
    if(is_array($_REQUEST)){
      while(list($f_fd_name,$f_fd_value) = each($_REQUEST)){
        $f_var[$f_fd_name] = $f_fd_value;
      }
    }
  // post or get data End ..............................................//
  
  // 未傳入值之預設值設定 Begin.................................................//
    if($f_var['msel'] == NULL){
      $f_var['msel'] = 4;
    }
  // 未傳入值之預設值設定 End ..................................................//

  
    $f_var['mphp_name'] = u_showproc(); //程式名稱
    $f_var['show_year'] = '4';
    $f_var['msel_name'] = array('1'=>'新增','2'=>'修改','3'=>'刪除','4'=>'瀏覽','5'=>'查詢','6'=>'未定義','7'=>'列印'); // msel 中文
    $f_var['ie_h_title'] = '油站文管系統項目設定檔'; // 頁面標題
    $f_var['msub_title'] = '油站文管系統項目設定檔'; // 程式副標題
    $f_var['mdb'] = 'gas'; // db name
    $f_var['mtable'] = array('gasdoc_set'=>'gasdoc_set'); // 使用 table 名稱 
    $f_var['tpl'] = 'gasdoc_set.tpl'; // 樣版畫面檔
    $f_var['dateTime'] = date('Y-m-d H:i:s'); //今天

  
    // form表單欄位定義
    $fd_var['block_type'] = array( 
      'ename' => 'block_type',
      'cname' => '項目類別',
      'type' => 'select',
      'option' => array(
        '--請選擇--' => null,
        'A.油站基本資料' => 'A.油站基本資料',
        'B.油站相關文件' => 'B.油站相關文件',
        'C.函文附件' => 'C.函文附件',
      ),
      'memo' => '',
    );
  
    $fd_var['itemno'] = array( 
      'ename' => 'itemno',
      'cname' => '項目代碼',
      'type' => 'p',
      'value' => '<I>(系統自動編碼)</I>',
      'readonly' => 'readonly',
      'memo' => '',
    );
  
    $fd_var['item_name'] = array(
      'ename' => 'item_name',
      'cname' => '項目名稱',
      'type' => 'text',
      'value' => '',
      'memo' => "",
    );
  
    $fd_var['field_type'] = array(
      'ename' => 'field_type',
      'cname' => '登打類型',
      'type' => 'select',
      'option' => array(
        '--請選擇--' => null,
        '01.單行文字說明' => '01.單行文字說明',
        '02.多行文字說明' => '02.多行文字說明',
        '03.日期區間' => '03.日期區間',
        '04.單一日期' => '04.單一日期',
        '05.檔案上傳' => '05.檔案上傳',
      ),
      'memo' => '',
    );

    $fd_var['default'] = array(
      'ename' => 'default',
      'cname' => '預設顯示',
      'type' => 'checkbox',
      'value' => '',
      'checked' => '',
      'memo' => '',
    );

    $fd_var['memo'] = array(
      'ename' => 'memo',
      'cname' => '範例說明',
      'type' => 'textarea',
      'value' => '',
      'checked' => '',
      'memo' => '',
    );

    $fd_var['b_name'] = array(
      'ename' => 'b_name',
      'cname' => '建檔人',
      'type' => 'p',
      'value' => $_SESSION['login_name'],
      'readonly' => 'readonly',
      'memo' => '',
    );

    $fd_var['b_date'] = array(
      'ename' => 'b_date',
      'cname' => '建檔日期',
      'type' => 'p',
      'value' => $f_var['dateTime'],
      'readonly' => 'readonly',
      'memo' => '',
    );

    $fd_var['delete'] = array(
      'ename' => 'delete',
      'cname' => '作廢',
      'type' => 'p',
      'value' => '<button class="add_del">清除</button>',
      'memo' => '',
    );

    $f_var['fd'] = $fd_var;
    return;
  }

?>
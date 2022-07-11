<?php
//┌─────┬───────────────────────────────┐
//│系統名稱: │gasdoc.php　  　                                       │
//│          │                                                        │
//│程式名稱: │gasdoc.php                                         │
//│程式說明: |油站文管系統                                                      │
//│樣板名稱: │gasdoc.tpl                                                 │
//│          │                                                              │
//│資料庫  : │gas                                              │
//│資料表  : │gasdoc
//|          |gasdoc_his
//|          |                                           │
//│          │                                                              │
//│相關程式: │/home/sl/public_html/sl_init.php 共用函數                      │
//│          │                                                              │
//│          │                                                │
//│          │                                                              │
//│程式設計: │翊靖                                                          │
//│設計日期: │2020.06.01                                                    │
//└─────┴───────────────────────────────┘


include_once('/home/sl/public_html/sl_init.php'); //公用函式庫


u_setvar(&$f_var); // 程式變數設定,全部改用陣列變數,不再用 global u_setvar(&$f_var),需要用&,傳值,可以將值回傳,後面繼續用值

include_once(  $mtp_url."class.TemplatePower.inc.php"  ); 
$f_var["tp"] = new  TemplatePower ( $f_var["tpl"] );  // 樣版畫面檔
$f_var["tp"]-> prepare ();

// ------- for ajax -------

if( $_REQUEST['ajax_hist'] == 'Y' ){
  u_hist(&$f_var);
  exit;
}
if( $_REQUEST['ajax_upfile'] == 'Y' ){
  u_insert(&$f_var);
  exit;
}
if( $_REQUEST['ajax_add'] == 'Y'){
  sl_open($f_var['mdb']);
  $sql = "UPDATE `gasdoc_set` SET `default` = 'Y' WHERE `itemno` = '{$_POST['itemno']}'";
  $result = mysql_query($sql);
  echo mysql_affected_rows();
  mysql_close();
  exit;
}
// ------- end ajax -------

include_once($sl_header_php); // header

if( u_chk_master() ){
  sl_open($f_var['mdb']); // 開啟資料庫
  $f_var["tp"]-> newBlock('tb_css&js');

  switch($f_var['msel']){
    case '5' : // 列表查詢
      u_list(&$f_var); 
    break;
    case '4' : // 站別資訊
      u_info(&$f_var);
    break;
  }

  mysql_close(); // 關閉資料庫
}else{
  sl_errmsg("僅 總務(總公司)及油站負責人 有權限觀看");
}


$f_var["tp"]-> printToScreen ();


include_once($sl_footer_php); // footer



// **************************************************************************
//  函數名稱: u_hist($f_var)
//  函數功能: 回傳歷史文件小視窗
//  使用方式: u_hist($f_var)
//  程式設計: Tony
//  設計日期: 2006.09.27
// **************************************************************************
function u_hist($f_var){
  sl_open($f_var['mdb']);
  $sql = "SELECT `item_name`,`gd_1`,`gd_2`,h.`itemno`,h.`b_empno`,h.`b_date`
          FROM `{$f_var['mtable']['gasdoc_hist']}` AS h
          LEFT JOIN `gasdoc_set` ON h.`itemno` = `gasdoc_set`.`itemno`
          WHERE `code` = '{$_POST['code']}' AND h.`itemno` = '{$_POST['itemno']}'
          ORDER BY h.`b_date` DESC";

  $result = mysql_query($sql);
  $f_var["tp"]-> newBlock('tb_hist');
  $f_var["tp"]-> assign('tv_item_name',mb_convert_encoding($_POST['item_name'] ,'big5','UTF-8'));
  
  $download = "http://eip.slc.com.tw/~gas/gasdoc_upfile/";
  $i = 1;
  while( $row = mysql_fetch_assoc($result) ){
    $f_var["tp"]-> newBlock('tb_hist_tr');
    $f_var["tp"]-> assign('tv_num',$i);
    $f_var["tp"]-> assign('tv_b_date',$row['b_date']);

    // 找建檔人姓名
    sl_open('sl');
    $result_name = mysql_query("SELECT `name` FROM `pass` WHERE `empno` = '{$row['b_empno']}'");
    $row_name = mysql_fetch_assoc($result_name);

    $f_var["tp"]-> assign('tv_b_empno',$row_name['name']);

    if( $row['gd_2'] ){
      $row['gd_1'] = sl_4ymd($row['gd_1'],'/').' ~ '.sl_4ymd($row['gd_2'],'/');
    }


    if( substr($_POST['itemno'],0,1) == 'A' ){
      $f_var["tp"]-> newBlock('tb_hist_p');
      $f_var["tp"]-> assign('tv_gd_1',nl2br($row['gd_1']));
    }else{
      $f_var["tp"]-> newBlock('tb_hist_a');
      $file = mb_convert_encoding($row['gd_1'],"UTF-8","big5");
      $file = urlencode($file);
      $f_var["tp"]-> assign('tv_href',$download.$file);
      $f_var["tp"]-> assign('tv_gd_1',$row['gd_1']);
    }

    $i++;
  }

  $res = $f_var["tp"]-> getOutputContent();
  $res = mb_convert_encoding($res ,'UTF-8','big5');
  echo trim($res);
  mysql_close();
}
// **************************************************************************
//  函數名稱: u_insert($f_var)
//  函數功能: 寫進DB
//  使用方式: u_insert($f_var)
//  程式設計: Tony
//  設計日期: 2006.09.27
// **************************************************************************

function u_insert ($f_var){
  sl_open($f_var['mdb']);

  //找出此油站所有的項目資料,比對用
  $db_itemno = array();
  $sql_chk = "SELECT *
              FROM `{$f_var['mtable']['gasdoc']}`
              WHERE `d_date` = '0000-00-00 00:00:00' AND `code` = '{$f_var['code']}'";

  $result_chk = mysql_query($sql_chk);
  while ( $row_chk = mysql_fetch_assoc($result_chk) ){
    $db_itemno[ $row_chk['itemno'] ] = $row_chk;
  }


  $pattern ='/^([A-C]\d{3})(_s)?$/'; //正規表達式 ex: A002 or A002_s(日期區間)

  $b_info = " '{$_SESSION['login_empno']}' , '{$_SESSION['login_dept_id']}' , '{$f_var['mphp_name']}' , '{$f_var['dateTime']}' , '{$_SERVER['REMOTE_ADDR']}'";

  
  // print_r($_FILES);
  // exit;

  foreach ( $_FILES as $key => $val ){
    $name = $val['name'];
    if( $val['error'] == 4 ) continue; // 沒有上傳文件就跳過
    if( !move_uploaded_file($_FILES[ $key ]['tmp_name'], $f_var['mupload_dir'].$name) ){
      echo mb_convert_encoding('檔案上傳失敗!' ,'UTF-8','big5');
      exit;
    }
     $_POST[ $key ] = $name;  // 把項目itemno 存到post裡,下面寫進DB要用
  }


  foreach( $_POST as $key => $val ){

    $val = mb_convert_encoding($val,'Big5','utf-8'); //ajax 過來是utf-8 ,轉成big5

    if( $key == 'rent_type' ){
      $sql = "UPDATE `company`
              SET `rent_type` = '{$val}',
                  `m_empno`= '{$_SESSION['login_empno']}' ,
                  `m_dept_id`= '{$_SESSION['login_dept_id']}' ,
                  `m_proc`= '{$f_var['mphp_name']}' ,
                  `m_date`= '{$f_var['dateTime']}' 
              WHERE `code` = '{$f_var['code']}'";
    }else{

      if( preg_match($pattern,$key,$matches) ){ //符合代碼格式的 , $matches[1] = 項目代碼(A002)
        
        if( !$db_itemno[ $matches[1] ] && $val ){  // 判斷DB有沒有資料 && 不是空值 true -> insert

          $sql = "INSERT INTO `{$f_var['mtable']['gasdoc']}` 
                  (`code`,`itemno`,`gd_1`,`gd_2`,`b_empno`,`b_dept_id`,`b_proc`,`b_date`,`fromip`) 
                  VALUE ( '{$f_var['code']}' , '{$matches[1]}' ,'{$val}' , '{$_POST[ $matches[1].'_e' ]}' ,{$b_info})";

        }else if( $db_itemno[ $matches[1] ]['gd_1'] ==  $val && $db_itemno[ $matches[1] ]['gd_2'] ==  $_POST[ $matches[1].'_e' ] ){ // 判斷與DB的資料是否一致 true -> 跳過,不更新
          continue;
        }else{

          $sql = "UPDATE `{$f_var['mtable']['gasdoc']}`
                  SET `gd_1` = '{$val}',
                      `gd_2` = '{$_POST[ $matches[1].'_e' ]}',
                      `m_empno`= '{$_SESSION['login_empno']}' ,
                      `m_dept_id`= '{$_SESSION['login_dept_id']}' ,
                      `m_proc`= '{$f_var['mphp_name']}' ,
                      `m_date`= '{$f_var['dateTime']}' 
                  WHERE `code` = '{$f_var['code']}' AND `itemno` = '{$matches[1]}'";
            
            $hist_b_info = "'{$db_itemno[ $matches[1] ]['b_empno']}' ,
                            '{$db_itemno[ $matches[1] ]['b_dept_id']}' ,
                            '{$db_itemno[ $matches[1] ]['b_proc']}' ,
                            '{$db_itemno[ $matches[1] ]['b_date']}' ,
                            '{$db_itemno[ $matches[1] ]['fromip']}'";

            $hist_m_info = "'{$db_itemno[ $matches[1] ]['m_empno']}' , 
                            '{$db_itemno[ $matches[1] ]['m_dept_id']}' ,
                            '{$db_itemno[ $matches[1] ]['m_proc']}' ,
                            '{$db_itemno[ $matches[1] ]['m_date']}' ,
                            '{$db_itemno[ $matches[1] ]['fromip']}'";

            // $info = m_empno有的話就是m系列 , 無的話是b系列 (第一次新增的沒有m系列)
            $info = $db_itemno[ $matches[1] ]['m_empno'] ? $hist_m_info : $hist_b_info;
            
            $sql_hist = "INSERT INTO `{$f_var['mtable']['gasdoc_hist']}` 
                        (`code`,`itemno`,`gd_1`,`gd_2`,`memo`,`b_empno`,`b_dept_id`,`b_proc`,`b_date`,`fromip`) 
                        VALUE ( '{$f_var['code']}' , 
                                '{$matches[1]}' , 
                                '{$db_itemno[ $matches[1] ]['gd_1']}', 
                                '{$db_itemno[ $matches[1] ]['gd_2']}' , 
                                '{$db_itemno[ $matches[1] ]['memo']}' , 
                                {$info})";

        }

      }else{
        continue;
      }
    }

    //  echo "<pre>";
    // print_r($sql);
    // echo "</pre>";

    if( $sql_hist ){
      $result_hist = mysql_query($sql_hist);
      if( !mysql_affected_rows() || !$result_hist ){
        echo mb_convert_encoding('備份儲存失敗! 請在試一次' ,'UTF-8','big5');
        mysql_close();
        exit;
      }
    }

    $result = mysql_query($sql);
    if( !mysql_affected_rows() || !$result){
      echo mb_convert_encoding('儲存失敗!' ,'UTF-8','big5');
      mysql_close();
      exit;
    }
   
  }


  // echo "<pre>";
  // print_r($sql_hist);
  // echo "</pre>";
  echo mb_convert_encoding('儲存成功!' ,'UTF-8','big5');
  mysql_close();

}



// **************************************************************************
//  函數名稱: u_info()
//  函數功能: 基本資料列表
//  使用方式: u_info(&$f_var)
//  程式設計: Tony
//  設計日期: 2006.09.27
// **************************************************************************
function u_info($f_var){

  $block_arr = array('A'=>array('name'=>'油站基本資料'),
                    'B'=>array('name'=>'油站相關文件'),
                    'C'=>array('name'=>'函文附件') );

  // for 油站代碼,名稱,供油廠商等
  $sql_company = "SELECT `code`,`sname`,`rent_type`,
                  CASE `oil_supply` WHEN 1 THEN '中油'
                  WHEN 2 THEN '台塑' END AS `oil_supply`
                  FROM `company` WHERE `code` = {$f_var['code']}";
  $result_company = mysql_query($sql_company);
  $row_company = mysql_fetch_assoc($result_company);

  //定義欄位
  $block_arr['A']['item'][]=array('item_name'=>'站別代碼','type'=>'p','value'=>$row_company['code'],'memo'=>'-');
  $block_arr['A']['item'][]=array('item_name'=>'站別名稱','type'=>'p','value'=>$row_company['sname'],'memo'=>'-');
  $block_arr['A']['item'][]=array('item_name'=>'供油廠商','type'=>'p','value'=>$row_company['oil_supply'],'memo'=>'-');
  $block_arr['A']['item'][]=array('item_name'=>'自用/租賃',
                                  'ename'=>'rent_type',
                                  'memo'=>'-',
                                  'pkey'=>'<span style="color:red">*</span>',
                                  'type'=>'select',
                                  'value'=>$row_company['rent_type'],
                                  'option'=>array(
                                            '--請選擇--' => null,
                                            '1.自用' => '1',
                                            '2.租賃' => '2',
                                            '3.租地自建' => '3',) 
                                  );
  
  // for 登打項目列出
  $sql = "SELECT  `gasdoc_set`.`itemno`,`item_name`, `gasdoc_set`.`itemno` AS `ename`,`memo`, `gd_1`,`gd_2`,SUBSTR(`block_type`,1,1) AS `block_type`,
          CASE `field_type` WHEN '01.單行文字說明' THEN 'text'
          WHEN '02.多行文字說明' THEN 'textarea'
          WHEN '03.日期區間' THEN 'dt2dt'
          WHEN '04.單一日期' THEN 'date'
          WHEN '05.檔案上傳' THEN 'file' END AS `type`
          FROM `gasdoc_set`
          LEFT JOIN `gasdoc` ON `gasdoc_set`.`itemno` = `gasdoc`.`itemno` AND `gasdoc`.`code` = {$f_var['code']}
          WHERE  `gasdoc_set`.`d_date` = '0000-00-00 00:00:00' AND `default` = 'Y' 
          ORDER BY  `gasdoc_set`.`itemno`";

  $result = mysql_query($sql);
  while ( $row = mysql_fetch_assoc($result) ){
    $block_arr[ $row['block_type'] ]['item'][] = $row; // $block_arr[ 'A' ]['item'][0] = $row;
  }


  // 預設為不顯示,要放在新增項目裡的
  $sql_add = "SELECT `itemno`,`item_name`,SUBSTR(`block_type`,1,1) AS `block_type`
              FROM `gasdoc_set`
              WHERE `d_date` = '0000-00-00 00:00:00' AND `default` = 'N'
              ORDER BY  `itemno`" ;
  $result_add = mysql_query($sql_add);
  $add_block = array();
  while ( $row_add = mysql_fetch_assoc($result_add) ){
    $add_block[ $row_add['block_type'] ][] = $row_add;
  }


  $f_var["tp"]-> newBlock('tb_info');

  foreach($block_arr as $key => $val){   // $key = 'A','B','C'
    $f_var["tp"]-> newBlock('tb_info_block');
    $f_var["tp"]-> assign('tv_block_type',$key);
    $f_var["tp"]-> assign('tv_title',$val['name']); //$val['name'] = '油站相關文件' line:299

    //新增項目
    $f_var["tp"]-> newBlock('tb_item_select');
    $f_var["tp"]-> assign('tv_ename',$key);
    if( $add_block[ $key ] ){ // 沒加判斷的話 空陣列會出現錯誤訊息
      foreach( $add_block[ $key ] as $add){
        $f_var["tp"]-> newBlock('tb_item_option');
        $f_var["tp"]-> assign('tv_value',$add['itemno']);
        $f_var["tp"]-> assign('tv_show',$add['item_name']);
      }
    }
    

    if( $val['item'] ){ // 沒加判斷的話 空陣列會出現錯誤訊息

      foreach( $val['item'] as $row ){
    
        $f_var["tp"]-> newBlock('tb_info_tr');
        if( $row['itemno'] ){ // for 歷史小視窗
          $f_var["tp"]-> assign('tv_hist','hist');
        }
        $f_var["tp"]-> assign('tv_cname',$row['item_name']);
        $f_var["tp"]-> assign('tv_key',$row['pkey']);
        $f_var["tp"]-> assign('tv_memo1',nl2br($row['memo']));

        $f_var["tp"]-> assign('tv_itemno',$row['itemno']);
  
  
        $f_var["tp"]-> newBlock("tb_info_".$row['type']);
        $f_var["tp"]-> assign('tv_ename',$row['ename']);

        switch ($row['type']){
          case 'p' :
            $f_var["tp"]-> assign('tv_p',$row['value']);

          case 'file' : 
            $download = "http://eip.slc.com.tw/~gas/gasdoc_upfile/";

            $f_var["tp"]-> assign('tv_value',$row['gd_1']);
            // 要轉UTF-8 不明所以? 
            $file = mb_convert_encoding($row['gd_1'],"UTF-8","big5"); 
            $file = urlencode($file);
            $f_var["tp"]-> assign('tv_href',$download.$file);
          break;
          case 'select':
            $f_var["tp"]-> assign('tv_value',$row['value']);
            foreach( $row['option'] as $show => $value ){
              $f_var["tp"]-> newBlock('tb_info_option');
              $f_var["tp"]-> assign('tv_show' ,$show);
              $f_var["tp"]-> assign('tv_value' ,$value);
              if( $row['value'] == $value ) $f_var["tp"]-> assign('tv_selected' ,'selected');
            }
          break;
          case 'dt2dt':
            $f_var["tp"]-> assign('tv_value_s',$row['gd_1']);
            $f_var["tp"]-> assign('tv_value_e',$row['gd_2']);
          break;
          default:
            $f_var["tp"]-> assign('tv_value',$row['gd_1']);
          break;
        }
     
      }
    }
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

  // 權限 => 採購(全)(PD0001)
  sl_open('it');
  $sql = "SELECT gp_id, dept_id
          FROM  it.ap_deptgroup  
          WHERE d_date =  '0000-00-00 00:00:00'
          AND dept_id = '{$_SESSION["login_hrm_dept_id"]}'
          AND gp_id = 'PD0001' ";

  $result = mysql_query($sql);
  $result = mysql_num_rows($result);
  mysql_close();
  $empno =  $result ? $_SESSION["login_empno"] : '';


  $option = sl_add_select_gas('gas','Y',"S111/{$empno}",'where_list');

  $f_var["tp"]-> newBlock('tb_gas_list');

  sl_open($f_var['mdb']); // 開啟資料庫
  $sql = "SELECT `hr_deptid` , `code` , `sname` ,
          CASE SUBSTR(`hr_deptid`, 4, 1 ) 
          WHEN '5' THEN '北區'
          WHEN '6' THEN '中區' 
          WHEN '8' THEN '南區' END AS `type` ,
          CASE SUBSTR(`hr_deptid`, 6, 1 ) 
          WHEN '1' THEN '第一區'
          WHEN '2' THEN '第二區' 
          WHEN '3' THEN '第三區' END AS `class` 
          FROM `company` 
          WHERE `stop_flag` != 'Y' 
          AND `hr_deptid` != '' 
          AND `code` in ({$option})
          ORDER BY `hr_deptid` ASC";
  

  $result = mysql_query($sql);

  if( mysql_num_rows($result) > 0){
    $arr = array();
    while( $row = mysql_fetch_assoc($result) ){
      $arr[ $row['type'] ][ $row['class'] ][] = $row['code'].'-'.$row['sname']; 
      //$arr['北區']['第一區'][0] = '301-龍德站'
    }
  }

  // print_r($arr);
  foreach($arr as $key => $val){
    $f_var["tp"]-> newBlock('tb_gas_table');
    $f_var["tp"]-> assign('tv_title',$key);

    foreach($val as $ind => $value){
      $f_var["tp"]-> newBlock('tb_gas_tr');
      $f_var["tp"]-> assign('tv_subtitle',$ind);

      sort($value);//照code排序
      foreach($value as $station){
        $f_var["tp"]-> newBlock('tb_gas_td');
        $f_var["tp"]-> assign('tv_gas_station',$station);
        $str = explode('-',$station);
        $f_var["tp"]-> assign('tv_href'," {$f_var['mphp_name']}.php?msel=4&code={$str[0]} ");
      }
    }
  }
  return;
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
      $f_var['msel'] = 5;
    }
  // 未傳入值之預設值設定 End ..................................................//

  
    $f_var['mphp_name'] = u_showproc(); //程式名稱
    $f_var['show_year'] = '4';
    $f_var['msel_name'] = array('1'=>'新增','2'=>'修改','3'=>'刪除','4'=>'瀏覽','5'=>'查詢','6'=>'未定義','7'=>'列印'); // msel 中文
    $f_var['ie_h_title'] = '油站文管系統'; // 頁面標題
    $f_var['msub_title'] = '油站文管系統'; // 程式副標題
    $f_var['mdb'] = 'gas'; // db name
    $f_var['mupload_dir']  = "/home/gas/public_html/gasdoc_upfile/" ; //上傳檔案到此資料夾
    $f_var['mtable'] = array('gasdoc'=>'gasdoc' ,'gasdoc_hist'=>'gasdoc_hist'); // 使用 table 名稱 
    $f_var['tpl'] = 'gasdoc.tpl'; // 樣版畫面檔
    $f_var['dateTime'] = date('Y-m-d H:i:s'); //今天

  
    
    return;
}

?>
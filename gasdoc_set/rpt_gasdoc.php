<?php
//┌─────┬───────────────────────────────┐
//│系統名稱: │rpt_gasdoc.php　  　                                       │
//│          │                                                        │
//│程式名稱: │rpt_gasdoc.php                                         │
//│程式說明: |油站文管系統報表                                                      │
//│樣板名稱: │rpt_gasdoc.tpl                                                 │
//│          │                                                              │
//│資料庫  : │gas                                              │
//│資料表  : │gasdoc
//|          |gasdoc_set
//|          |company
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


// ------- for excel -------
if($_POST['table'] ){ //必須在tpl前面,因為tpl會傳送header
  u_excel(&$f_var);
  exit;   
}
// ------- end excel -------



include_once(  $mtp_url."class.TemplatePower.inc.php"  ); 
$f_var["tp"] = new  TemplatePower ( $f_var["tpl"] );  // 樣版畫面檔
$f_var["tp"]-> prepare ();



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
//  函數名稱: u_excel($f_var)
//  函數功能: 基本資料列表
//  使用方式: u_info(&$f_var)
//  程式設計: Tony
//  設計日期: 2006.09.27
// **************************************************************************
function u_excel($f_var){

  //傳送來的json轉成arr
  $data = stripslashes($_POST['table']);
  $data = mb_convert_encoding($data,"UTF-8","big5"); 
  $data = json_decode($data,true);


  include '/home/gas/public_html/sap/include/PHPExcel/Classes/PHPExcel.php';
  $objPHPExcel = new PHPExcel();
  $objPHPExcel->setActiveSheetIndex(0);
  $sheet = $objPHPExcel->getActiveSheet();

  
  //excel的單元格(ex:B3) ; chr(65) = 'A' (10進位轉字符)
  //$arr_AZ[] = [A,B,C,....,ZY,ZZ,AAA,AAB,...,ZZZZ.....] 
  $arr_AZ = array();
  for($i = "A"; count($arr_AZ) < count($data['arr_td'][0]) ; $i++) {
    $arr_AZ[] = $i;
  }
  $col = end($arr_AZ); //最後一個的col ex:L 
  
  // print("<pre>".print_r($arr_AZ)."</pre>");
  // exit;



  //title 設定值 (油站文管系統報表)
  $sheet->setCellValue( 'A1' , mb_convert_encoding($f_var['ie_h_title'],"UTF-8","big5") );
  $sheet->setCellValue( 'A2' , trim($data['p_que']) );

  //內容設定  $i => excel的row用 , i從3開始,1,2上面設定title了
  //          $j,$k => arr的index用
  for( $i = 3 ,$j = 0 ; $j < count($data['arr_td']) ;$i++,$j++ ){

    for( $k = 0 ; $k < count($arr_AZ) ;$k++  ){
      $sheet->setCellValue( $arr_AZ[$k].$i , $data['arr_td'][$j][$k] );
    }
    $sheet->getRowDimension($i)->setRowHeight(20); //列高
    $row = $i;        //最後一個的row ex:18
  }


  //title合併單元格
  $objPHPExcel->getActiveSheet()->mergeCells("A1:{$col}1");
  $objPHPExcel->getActiveSheet()->mergeCells("A2:{$col}2");


  //樣式設定
  $sheet->getStyle("A1:{$col}{$row}")
        ->getBorders()->getAllborders()
        ->setBorderStyle(PHPExcel_Style_Border::BORDER_THIN); //設定全部邊框

  $sheet->getStyle("A1")->getFont()->setSize(18); //title 大小
  $sheet->getStyle("A3:{$col}3")->getFont()->setBold(true); //th粗體


  //欄位寬度 ABCD => 固定的輸出 (內容較少) , 其他不曉得長度,先設20 
  //TODO setAutoSize(true) 變得更窄 ?
  for( $k = 0 ; $k < count($arr_AZ) ;$k++  ){
    if( $arr_AZ[$k] == "A" || $arr_AZ[$k] == "B" || $arr_AZ[$k] == 'C' || $arr_AZ[$k] == 'D' ){
      $sheet->getColumnDimension( $arr_AZ[$k] )->setWidth(10);
    }else{
      $sheet->getColumnDimension( $arr_AZ[$k] )->setWidth(20);
    }
  }

  // 設定偶數列的 BG-color 
  for( $i = 3 ; $i <= $row ; $i++ ){
    if( $i % 2 == 1 ){
      $sheet->getStyle("A{$i}:{$col}{$i}")->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID)->getStartColor()->setRGB('f0f0f6');
    }
  }

  // 檔名 = 程式名稱+員編
  $filename = $f_var['msub_title'].'-'.$_SESSION['login_empno'];

  // 傳送下載的檔頭
  header('Content-Type: application/vnd.ms-excel');  
  header("Content-Disposition: attachment;filename={$filename}.xls");  
  header('Cache-Control: max-age=0');  

  $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007'); 
  $objWriter->save('php://output');

}

// **************************************************************************
//  函數名稱: u_info($f_var)
//  函數功能: 基本資料列表
//  使用方式: u_info(&$f_var)
//  程式設計: Tony
//  設計日期: 2006.09.27
// **************************************************************************
function u_info($f_var){

  $pattern ='/([0,5,6,8])00$/'; //000全部;500北區全部;600中區全部;800南區全部
  $pattern2 ='/00([1-9])$/'; //001第一區;002第二區;003第三區;.....

  if( $f_var['code'] != '--' ){
    $code = substr($f_var['code'],3);
    if( preg_match($pattern,$code,$matches) ){ //判斷為 全部?北區?中區?南區?
      if( $matches[1] != 0 ){ //0=>代表全部,則跳過
      $sql_com_where .= "AND substr(`hr_deptid`,4,1) = {$matches[1]}";
      }
    }else if( preg_match($pattern2,$code,$matches) ){ //判斷為 第一區?第二區?第三區?

      $num = substr($f_var['code'],0,1); //判斷為 北區?中區?南區?
      $num2 = $matches[1] % 3; 
      $num2 = $num2 == 0 ? 3 : $num2;

      $sql_com_where .= " AND substr(`hr_deptid`,4,1) = {$num} 
                          AND substr(`hr_deptid`,6,1) = {$num2}";
    }else{ // 指定站別的
      $sql_com_where .= " AND `code` = {$code}";
    }
  }

  //條件字串設定
  $tv_q_code = array_search( $f_var['code'] , $f_var['fd']['code']['option'] );
  $tv_q_code = explode('-',$tv_q_code);
  $tv_q_code = $tv_q_code[1] == '請選擇' ? '全部' : $tv_q_code[1];


  if( $f_var['oil_supply'] && $f_var['oil_supply'] != 'all' ){
    $sql_com_where .= " AND `oil_supply` = {$f_var['oil_supply']}";

    //條件字串設定
    $tv_q_oil = array_search( $f_var['oil_supply'] , $f_var['fd']['oil_supply']['option'] );
  }else{
    $tv_q_oil = '全部';
  }

  if( $f_var['rent_type'] && $f_var['rent_type'] != 'all' ){
    $sql_com_where .= " AND `rent_type` = {$f_var['rent_type']}";

    //條件字串設定
    $tv_q_rent = array_search( $f_var['rent_type'] , $f_var['fd']['rent_type']['option'] );
  }else{
    $tv_q_rent = '全部';
  }

  // 子查詢用
  $sql_com = "SELECT `code` FROM `company`
              WHERE `stop_flag` != 'Y' 
              AND `hr_deptid` != ''";
  $sql_com .= $sql_com_where;


  if ( in_array('all',$_POST['itemno']) ){
    $sql_gs_where = ''; //選擇全部的話,就不設定條件
  }else{
    foreach( $_POST['itemno'] as $key => $val){
      $_POST['itemno'][ $key ] = "'".$val."'"; //前後加上單引號,sql用
    }
    $str = implode(',',$_POST['itemno']);  // 用逗號連結 $str = 'A001','B002','C003'
    $sql_gs_where = "AND gs.itemno in ({$str})"; 
  }



  $sql = "  SELECT com.`code`,`sname`,`rent_type`, gs.`itemno`,`item_name`,`field_type`,
            CASE `oil_supply` WHEN 1 THEN '中油' 
            WHEN 2 THEN '台塑' END AS `oil_supply`,
            CASE `rent_type` WHEN 1 THEN '自用' 
            WHEN 2 THEN '租賃' 
            WHEN 3 THEN '租地自建' END AS `rent_type`,
            CASE WHEN `gd_2`<>'' THEN  CONCAT( `gd_1`,'~',`gd_2`)
            ELSE `gd_1` END AS `gd_1`
            FROM `gasdoc` AS gd
            RIGHT JOIN `gasdoc_set` AS gs ON gs.itemno = gd.itemno {$sql_gs_where} 
            RIGHT JOIN `company` AS com ON com.`code` = gd.`code` 
            WHERE com.`code` in ({$sql_com})";

  // echo "<br>";
  // echo $sql;

  // 列出thead用
  $sql_item = "SELECT `itemno`,`item_name` FROM `gasdoc_set` AS gs WHERE d_date = '0000-00-00 00:00:00' {$sql_gs_where} ORDER BY `itemno` ASC";

  $result_item = mysql_query($sql_item);
  while( $row_item = mysql_fetch_assoc($result_item) ){
    $arr_item[ $row_item['itemno'] ] = $row_item['item_name']; //$arr_item['A0001'] = '租賃年限'
  }



  $result = mysql_query($sql);
  if( mysql_num_rows($result) > 0 ){

    while( $row = mysql_fetch_assoc($result) ){
      // print("<pre>".print_r($row)."</pre>");
      $arr_rpt[ $row['code'] ]['sname'] = $row['sname'];
      $arr_rpt[ $row['code'] ]['oil_supply'] = $row['oil_supply'];
      $arr_rpt[ $row['code'] ]['rent_type'] = $row['rent_type'];
  
      if( $row['field_type'] == '03.日期區間' ){
        $arr_str = explode('~',$row['gd_1']);
        $arr_rpt[ $row['code'] ]['itemno'][ $row['itemno'] ] = sl_4ymd($arr_str[0],'/').' ~ '.sl_4ymd($arr_str[1],'/');
      }else if ( $row['field_type'] == '04.單一日期' ){
        $arr_rpt[ $row['code'] ]['itemno'][ $row['itemno'] ] = sl_4ymd($row['gd_1'],'/');
      }else{
        $arr_rpt[ $row['code'] ]['itemno'][ $row['itemno'] ] = $row['gd_1'];
      }
    }

    $f_var["tp"]-> newBlock('tb_gas_list');
    $f_var["tp"]-> assign('tv_q_code',$tv_q_code);
    $f_var["tp"]-> assign('tv_q_oil',$tv_q_oil);
    $f_var["tp"]-> assign('tv_q_rent',$tv_q_rent);


    foreach($arr_item as $val){
      $f_var["tp"]-> newBlock('tb_gas_list_th');
      $f_var["tp"]-> assign('tv_th',$val);
    }

    $i = 1;
    foreach($arr_rpt as $val){
      $f_var["tp"]-> newBlock('tb_gas_list_tr');
      $f_var["tp"]-> assign('tv_num',$i);
      $f_var["tp"]-> assign('tv_sname',$val['sname']);
      $f_var["tp"]-> assign('tv_oil',$val['oil_supply']);
      $f_var["tp"]-> assign('tv_rent',$val['rent_type']);

      foreach($arr_item as $key => $value){
        $f_var["tp"]-> newBlock('tb_gas_list_td');
        if( $val['itemno'][$key] ){
          $f_var["tp"]-> assign('tv_td',$val['itemno'][$key]);
        }else{
          $f_var["tp"]-> assign('tv_td','-');
        }
      }
      $i++;
    }

  }else{
    sl_errmsg("查無資料");
  }

}
// **************************************************************************
//  函數名稱: u_list($f_var)
//  函數功能: 列出查詢table
//  使用方式: u_list($f_var)
//  程式設計: Tony
//  設計日期: 2006.09.27
// **************************************************************************
function u_list($f_var){




  $sql = "SELECT `itemno`,`item_name`,`block_type`
          FROM `gasdoc_set` WHERE `d_date` = '0000-00-00 00:00:00'
          ORDER BY `itemno` ASC";

  $result = mysql_query($sql);
  if( mysql_num_rows($result) > 0 ){
    while( $row = mysql_fetch_assoc($result) ){
      $item[ $row['block_type'] ]['block'] = array('itemno'=>substr($row['block_type'],0,1),'item_name'=>$row['block_type']);
      $item[ $row['block_type'] ][] = $row;
    }
  }else{
    $item = array();
  }
  
  // print("<pre>".print_r($item)."</pre>");
  $f_var['fd']['itemno']['value'] = $item ;



  $f_var["tp"]-> newBlock('tb_gas_que');
  $f_var["tp"]-> assign('tv_action',"{$f_var['mphp_name']}.php?msel=4");
  $f_var["tp"]-> assign('tv_title','請輸入查詢條件');

  foreach( $f_var['fd'] as $td ){
    $f_var["tp"]-> newBlock('tb_gas_tr');
    $f_var["tp"]-> assign('tv_cname',$td['cname']);

    switch( $td['type'] ){
      case 'select':
        $f_var["tp"]-> newBlock('tb_gas_select');
        $f_var["tp"]-> assign('tv_ename',$td['ename']);
        foreach( $td['option'] as $show => $value ){
          $f_var["tp"]-> newBlock('tb_gas_option');
          $f_var["tp"]-> assign('tv_show',$show);
          $f_var["tp"]-> assign('tv_value',$value);
        }
      break;
      case 'checkbox':
        if( count($td['value']) ){
          $f_var["tp"]-> newBlock('tb_gas_checkbox');
          foreach( $td['value'] as $name => $val ){
            $f_var["tp"]-> newBlock('tb_gas_checkbox_tr');
            $f_var["tp"]-> assign('tv_class',$val['block']['itemno']);

            foreach( $val as $value1 ){
              $f_var["tp"]-> newBlock('tb_gas_checkbox_td');
              $f_var["tp"]-> assign('tv_ename',$td['ename']);
              $f_var["tp"]-> assign('tv_value',$value1['itemno']);
              $f_var["tp"]-> assign('tv_cname',$value1['item_name']);
            }
          }
        }else{
          $f_var["tp"]-> newBlock('tb_gas_checkbox_none');
        }
        
      break;
    }
  }
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
    $f_var['ie_h_title'] = '油站文管系統報表'; // 頁面標題
    $f_var['msub_title'] = '油站文管系統報表'; // 程式副標題
    $f_var['mdb'] = 'gas'; // db name
    $f_var["mupload_dir"]  = "/home/gas/public_html/gasdoc_upfile/" ; //上傳檔案到此資料夾
    $f_var['mtable'] = array('gasdoc'=>'gasdoc' ,'gasdoc_hist'=>'gasdoc_hist'); // 使用 table 名稱 
    $f_var['tpl'] = 'rpt_gasdoc.tpl'; // 樣版畫面檔
    $f_var['dateTime'] = date('Y-m-d H:i:s'); //今天


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
    $empno =  $result ? $_SESSION["login_empno"] : '';
    

    $option = sl_add_select_gas('b_gid','Y',"S111/{$empno}");
    $code_option = array();
    foreach ( $option[1] as $key => $val){
      if( substr($val,0,3)  == 'C01' || substr($val,0,3)  == 'T01') continue; // 中油站,台塑站 跳過
      $code_option[ substr($val,3) ] = $option[0][ $key ]; // $code_option['301-龍德站'] = 301
    }
    // print("<pre>".print_r($code_option)."</pre>");
  
 
    $fd_var['code'] = array(  'cname' => '單位別',
                                  'ename' => 'code',
                                  'type' => 'select',
                                  'option' => $code_option,
                                );
    $fd_var['oil_supply'] = array(  'cname' => '油品',
                                  'ename' => 'oil_supply',
                                  'type' => 'select',
                                  'option' => array('--請選擇--' => NULL,
                                                    '全部' => 'all',
                                                    '中油' => 1,
                                                    '台塑' => 2
                                                  ),
                                );
    $fd_var['rent_type'] = array( 'cname' => '自用/租賃',
                                  'ename' => 'rent_type',
                                  'type' => 'select',
                                  'option' => array('--請選擇--' => NULL,
                                                    '全部' => 'all',
                                                    '自用' => 1,
                                                    '租賃' => 2,
                                                    '租地自建' => 3
                                                  ),
                                );
    $fd_var['itemno'] = array( 'cname' => '顯示欄位',
                                  'ename' => 'itemno',
                                  'type' => 'checkbox',
                                  'value' => array(),
                                );                            

    $f_var['fd'] = $fd_var;
    
    return;
  }
?>
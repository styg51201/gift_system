<?php 
//┌─────┬───────────────────────────────┐
//│系統名稱: │gift_quota　  　                                              │
//│         │                                                              │
//│程式名稱: │gift_quota.php                                                │
//│程式說明: │禮品管理系統-基數&額度設定                                      │
//│樣板名稱: │gift_quota.tpl                                                 │
//│          │                                                              │
//│資料庫:   │docs                                                          │
//│資料表  : │gift_quota                                                     │
//│         │gift_config (設定檔)                                                             │
//|
//│相關程式: │/home/sl/public_html/sl_init.php 共用函數                     │
//│          │/home/sl/public_html/tp/*.*      樣板套件                     │
//│          │                                                              │
//│          │/home/sl/public_html/sl.css      css 檔                       │
//│          │/home/sl/public_html/sl.js        javascript 自訂函數         │
//│          │/home/sl/public_html/sl_header.inc.php  頁首                  │
//│          │/home/sl/public_html/sl_footer.inc.php  頁尾                  │
//│          │                                                              │
//│程式設計: │翊靖                                                          │
//│設計日期: │2021.03.03                                                    │
//└─────┴───────────────────────────────┘

include_once('../init/sl_init.php'); 
u_setvar($f_var);
include_once('../init/sl_header.php');
include_once("../TemplatePower/class.TemplatePower.inc.php");
$f_var["tp"] = new  TemplatePower($f_var['tpl']);
$f_var["tp"]-> prepare();


// include_once('./gift_access.php'); 

$f_var['con_db'] = sl_open($f_var['mdb']); // 開啟資料庫


switch ($f_var['msel']) {
  case '11':
    u_save($f_var);
  break;
  default:
    u_list($f_var);
  break;
}



u_link($f_var); //連結設定

$f_var["tp"]-> printToScreen ();
mysqli_close($f_var['con_db']); // 關閉資料庫

// include_once($sl_footer_php); // footer






// **************************************************************************
//  函數名稱: u_link()
//  函數功能: 連結設定
//  使用方式: u_link(&$f_var)
//  程式設計: Tony
//  設計日期: 2006.09.27
// **************************************************************************
function u_link(&$f_var){

  $f_var["tp"]-> newBlock('tb_link');
  $f_var["tp"]-> assign("tv_home","./"); //首頁

}


// **************************************************************************
//  函數名稱: u_list()
//  函數功能: 列表
//  使用方式: u_list(&$f_var)
//  程式設計: Tony
//  設計日期: 2006.09.27
// **************************************************************************
function u_list(&$f_var){

  $f_var['tp']-> newBlock('tb_list');

  $sql = "SELECT * FROM {$f_var['mtable']['config']}
          WHERE `d_date` = '0000-00-00 00:00:00' 
          AND `config_key` = 'gift_quota_type'";


  $result = mysqli_query($f_var['con_db'],$sql);
  if( mysqli_num_rows($result) > 0 ){
    $f_var['tp']-> newBlock('tb_main_table');
    $f_var['tp']-> assign('tv_colspan',mysqli_num_rows($result));

    $i = 0;
    $main_table = array(); //總表用，儲存個各種類的資料 $main_table[運輸][基數] = 額度;
    $main_base_num = array(); //總表用，儲存所有基數
    
    while( $row = mysqli_fetch_assoc($result) ){
      $i++;

      //tab
      $f_var['tp']-> newBlock('tb_list_li');
      $f_var['tp']-> assign('tv_num',$i);
      $f_var['tp']-> assign('tv_name',$row['config_value']);

      //總表table
      $f_var['tp']-> newBlock('tb_main_th');
      $f_var['tp']-> assign('tv_name',$row['config_value']);

      //各自的table
      $f_var['tp']-> newBlock('tb_list_card');
      $f_var['tp']-> assign('tv_num',$i);
      $f_var['tp']-> assign('tv_name',$row['config_value']);
      $f_var['tp']-> assign('tv_type',$row['config_value']);
      $f_var['tp']-> newBlock('tb_list_add');

      

      $sql_2 = "SELECT *,
                       CASE `base_num` WHEN 'MAX' THEN '1' ELSE '0' END AS order_num ,
                       (SELECT MAX( CONVERT( `base_num` , UNSIGNED ) ) 
                        FROM {$f_var['mtable']['quota']}
                        WHERE `d_date` = '0000-00-00 00:00:00' 
                        AND `type` = '{$row['config_value']}') AS max_base
                FROM {$f_var['mtable']['quota']}
                WHERE `d_date` = '0000-00-00 00:00:00' 
                AND `type` = '{$row['config_value']}'
                ORDER BY order_num ASC,CONVERT(`base_num`,UNSIGNED) ASC";
      

      $result_2 = mysqli_query($f_var['con_db'],$sql_2);
      if( mysqli_num_rows($result_2) > 0 ){
        while($row_2 = mysqli_fetch_assoc($result_2)){
          $f_var['tp']-> assign('tb_list_card.tv_version',$row_2['version']);

          if( $row_2['base_num'] == 'MAX'){ //最大值
            $f_var['tp']-> newBlock('tb_list_tr_max');
            $f_var['tp']-> assign('tv_base','>'.$row_2['max_base']);
            $f_var['tp']-> assign('tv_upd',$f_var['upd_img']);

            $main_table[ $row['config_value'] ][ '>'.$row_2['max_base'] ] = $row_2['quota'];

            $main_base_num[] = '>'.$row_2['max_base'];

          }else{
            $f_var['tp']-> newBlock('tb_list_tr');
            $f_var['tp']-> assign('tv_base',$row_2['base_num']);
            $f_var['tp']-> assign('tv_del',$f_var['del_img']);
            $main_table[ $row['config_value'] ][ $row_2['base_num'] ] = $row_2['quota'];

            $main_base_num[] = $row_2['base_num'];
          }

          $f_var['tp']-> assign('tv_quota',$row_2['quota']);

        }

      }else{
        //還沒資料時,預設max=500元
        $f_var['tp']-> assign('tb_list_card.tv_version','0');
        $f_var['tp']-> newBlock('tb_list_tr_max');
        $f_var['tp']-> assign('tv_base','>1');
        $f_var['tp']-> assign('tv_quota','500');
        $f_var['tp']-> assign('tv_upd',$f_var['upd_img']);
        $main_table[ $row['config_value'] ][ '>1' ] = '500';
        $main_base_num[] = '>1';
      }
    }

    // 總表print

    $main_base_num = array_unique($main_base_num); //去掉重複的基數
    usort($main_base_num,'ar_sort'); //小到大排序

    // echo '<pre>'.print_r($main_base_num,1).'</pre>';

    foreach( $main_base_num as $ind => $num ){
      $f_var['tp']-> newBlock('tb_main_tr');
      $f_var['tp']-> newBlock('tb_main_td');
      $f_var['tp']-> assign('tv_value',$num);
      if( substr($num,0,1) == '>' ){
        $f_var['tp']-> assign('tv_class','red');
      }

      foreach( $main_table as $key => $val ){
        $f_var['tp']-> newBlock('tb_main_td');
        $f_var['tp']-> assign('tv_value',$val[$num]);
        if( substr($num,0,1) == '>' ){
          $f_var['tp']-> assign('tv_class','red');
        }
      }
    }

  }else{
    $f_var['tp']-> newBlock('tb_list_none');
  }

  return;
} 

// **************************************************************************
//  函數名稱: ar_sort($a,$b)
//  函數功能: 自訂陣列排序
//  使用方式: ar_sort($a,$b)
// **************************************************************************
function ar_sort($a,$b){
  $x = substr($a,0,1) == '>' ? substr($a,1) : $a ;
  $y = substr($b,0,1) == '>' ? substr($b,1) : $b ;
  if( $x == $y ){
    return substr($a,0,1) == '>' ? 1 : -1;
  }
  return ($x > $y) ? 1 : -1;
}
// **************************************************************************
//  函數名稱: u_save()
//  函數功能: 儲存
//  使用方式: u_save(&$f_var)
//  程式設計: Tony
//  設計日期: 2006.09.27
// **************************************************************************
function u_save(&$f_var){

  // echo '<pre>'.print_r($_POST,1).'</pre>';
  // exit;
  
  $b_info = " '{$_SESSION['login_empno']}',
              '{$_SESSION['login_dept_id']}',
              '{$f_var['mphp_name']}',
                now()";

  $str = '';
  $new_version = (int)$_POST['version']+1;

  foreach( $_POST['base_num'] as $ind => $val ){
    $str .= ",('{$_POST['type']}',
                '{$new_version}',
                '{$_POST['base_num'][$ind]}',
                '{$_POST['quota'][$ind]}',
                {$b_info})";

  }

  $str = substr($str,1); //去掉第一個逗號

  $sql = "INSERT INTO {$f_var['mtable']['quota']}
          (`type`,`version`,`base_num`,`quota`,`b_empno`,`b_dept_id`,`b_proc`,`b_date`) 
          VALUES {$str} ";

  $result = mysqli_query($f_var['con_db'],$sql);
  if(!$result){
    $f_var["tp"]-> assign("_ROOT.tv_alert",'儲存失敗!!');
    $f_var["tp"]-> assign("_ROOT.tv_sql_error",mysqli_error($f_var['con_db']));
    return;
  }

  
  if($_POST['version'] != '0'){
    $sql_2 = "UPDATE {$f_var['mtable']['quota']}
              SET `d_empno`= '{$_SESSION['login_empno']}' ,
                  `d_dept_id`= '{$_SESSION['login_dept_id']}' ,
                  `d_proc`= '{$f_var['mphp_name']}' ,
                  `d_date`= now()
              WHERE `type` = '{$_POST['type']}'
                AND `version` = '{$_POST['version']}'
                AND `d_date` = '0000-00-00 00:00:00'";

    $result_2 = mysqli_query($f_var['con_db'],$sql_2);
    if(!$result){
      $f_var["tp"]-> assign("_ROOT.tv_alert",'儲存失敗!!(舊資料無法作廢)');
      $f_var["tp"]-> assign("_ROOT.tv_sql_error",mysqli_error($f_var['con_db']));
      return;
    }
  }

  echo sl_jreplace($f_var['mphp_name'].'.php');

}


// **************************************************************************
//  函數名稱: u_setvar()
//  函數功能: 變數設定
//  使用方式: u_setvar(&$f_var)
//  程式設計: Tony
//  設計日期: 2006.09.27
// **************************************************************************
function u_setvar(&$f_var) {

  //echo $_REQUEST.'---------';
  if(is_array($_REQUEST)) { // 有資料才處理
    foreach($_REQUEST as $f_fd_name => $f_fd_value){
      $f_var[$f_fd_name] = $f_fd_value;
    }
  }

  // 未傳入值之預設值設定 Begin.................................................//
  if($f_var['msel'] == NULL){
    $f_var['msel'] = 4;
  }
  if(NULL==$f_var['f_page']) {
    $f_var['f_page']  = 1;  //頁次
  }
  if(NULL==$f_var['max_page']) {
    $f_var['max_page']  = 1;  //最大頁次
  }

  // 未傳入值之預設值設定 End ..................................................//


  $f_var['mphp_name'] = u_showproc(); //程式名稱
  $f_var['show_year'] = '4';
  $f_var['msel_name'] = array('1'=>'新增','2'=>'修改','3'=>'刪除','4'=>'瀏覽','5'=>'查詢','6'=>'未定義','7'=>'列印'); // msel 中文
  $f_var['ie_h_title'] = '年節禮品管理系統-基數&額度設定'; // 頁面標題
  $f_var['msub_title'] = '年節禮品管理系統-基數&額度設定'; // 程式副標題
  $f_var['mmaxline'] = 10; // 每頁最大筆數
  $f_var['mdb'] = 'heroku'; // db name
  $f_var['mupload_dir']  = "./gift_upfile/" ; //上傳檔案到此資料夾
  $f_var['mtable'] = array('head'=>'gift_head','body'=>'gift_body','type'=>'gift_type','quota'=>'gift_quota',
                          'config'=>'gift_config','guest'=>'gift_guest','item'=>'gift_item'); // 使用 table 名稱
  $f_var['tpl'] = 'gift_quota.tpl'; // 樣版畫面檔


  return;
}

// **************************************************************************
//  函數名稱: ReturnInt()
//  函數功能: 轉換函式，傳入的資料若不是數字，一律轉成0
//  使用方式: ReturnInt($data)
//  程式設計: Bruce
//  設計日期: 2020.06.18
// **************************************************************************
function ReturnInt($data){
  $result=is_numeric($data)?$data:"0";
  return $result;
}


?>
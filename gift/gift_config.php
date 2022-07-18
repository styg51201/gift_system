<?php 
//┌─────┬───────────────────────────────┐
//│系統名稱: │gift_config　  　                                              │
//│         │                                                              │
//│程式名稱: │gift_config.php                                                │
//│程式說明: │禮品管理系統-設定檔                                      │
//│樣板名稱: │gift_config.tpl                                                 │
//│          │                                                              │
//│資料庫  : │docs                                                          │
//│資料表  : │gift_config (設定檔)                                                    │
//│          │                                                              │
//│相關程式: │/home/sl/public_html/sl_init.php 共用函數                     │
//│          │/home/sl/public_html/tp/*.*      樣板套件                     │
//│          │                                                              │
//│          │/home/sl/public_html/sl.css      css 檔                       │
//│          │/home/sl/public_html/sl.js        javascript 自訂函數         │
//│          │/home/sl/public_html/sl_header.inc.php  頁首                  │
//│          │/home/sl/public_html/sl_footer.inc.php  頁尾                  │
//│          │                                                              │
//│程式設計: │翊靖                                                          │
//│設計日期: │2021.03.09                                                    │
//└─────┴───────────────────────────────┘

include_once('../init/sl_init.php');
u_setvar($f_var);
include_once("../TemplatePower/class.TemplatePower.inc.php");
$f_var["tp"] = new  TemplatePower($f_var['tpl']);
$f_var["tp"]-> prepare();

// for ajax 
if ($_REQUEST['ajax_get']=='ajax_get_emp') {
  $q = mb_convert_encoding($_REQUEST["q"],'big5','utf-8');

  $f_var['con_db'] = sl_open($f_var['mdb']); // 開啟資料庫

  $query = "select empno,name from empno
            where empno like '{$q}%' or name like '%{$q}%' order by empno ASC";
  $result = mysqli_query($f_var['con_db'],$query);
  // print_r($row) ;
  while ($row = mysqli_fetch_assoc($result)) {
    $data = mb_convert_encoding("{$row['empno']}-{$row['name']}",'UTF-8','big5');
    echo "{$data}\n";
  }
  exit;
}

// end ajax
include_once('../init/sl_header.php');

// include_once('./gift_access.php'); 

$f_var['con_db'] = sl_open($f_var['mdb']); // 開啟資料庫
switch ($f_var['msel']) {
  case "21": // 修改-儲存
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
  $f_var['tp']-> assign('tv_action',$f_var['mphp_name'].'.php?msel=21');


  if( $f_var['IT0002'] == 'Y' ){
    $f_var['tp']-> newBlock('tb_it_add');

    $sql = "SELECT * FROM {$f_var['mtable']['config']} 
          WHERE d_date = '0000-00-00 00:00:00'
          AND `config_key` = 'gift_quota_type'";

    $result = mysqli_query($f_var['con_db'],$sql);
    while( $row = mysqli_fetch_assoc($result) ){
      $f_var['tp']-> newBlock('tb_area_option');
      $f_var['tp']-> assign('tv_value',$row['config_value']);
      $f_var['tp']-> assign('tv_show',$row['config_value']);
    }
  }


  $sql = "SELECT con.*,e.name FROM {$f_var['mtable']['config']} as con
          LEFT JOIN  empno as e ON con.access_empno = e.empno
          WHERE con.d_date = '0000-00-00 00:00:00'
          ";

  $result = mysqli_query($f_var['con_db'],$sql);
  if( mysqli_num_rows($result) > 0 ){
    $i = 0;
    while( $row = mysqli_fetch_assoc($result) ){
      
      switch( $row['config_key'] ){
        case 'gift_head_area':
          $i++;
          $f_var['tp']-> newBlock('tb_area_tr');
          $f_var['tp']-> assign('tv_s_num',$row['s_num']);
          $f_var['tp']-> assign('tv_num',$i);
          $f_var['tp']-> assign('tv_area',$row['config_value']);
          $f_var['tp']-> assign('tv_quota',$row['quota_type']);
          $f_var['tp']-> assign('tv_empno',$row['access_empno']);
          $f_var['tp']-> assign('tv_name',$row['name']);
          $f_var['tp']-> assign('tv_address',$row['address']);
          $f_var['tp']-> assign('tv_upd',$f_var['upd_img']);
        break;
        case 'base_rev':
          $f_var['tp']-> assign('tb_list.tv_rev',$row['config_value']);
        break;
        case 'base_gp':
          $f_var['tp']-> assign('tb_list.tv_gp',$row['config_value']);
        break;
        case 'fina_access':
          $f_var['tp']-> assign('tb_list.tv_fina_empno',$row['access_empno']);
          $f_var['tp']-> assign('tb_list.tv_fina_name',$row['name']);
        break;
      }
    }
  }


  
  
  
  return;
} 

// **************************************************************************
//  函數名稱: u_save()
//  函數功能: 儲存
//  使用方式: u_save(&$f_var)
//  程式設計: Tony
//  設計日期: 2006.09.27
// **************************************************************************
function u_save(&$f_var){

  if( isset($_POST['s_num']) ){ //各區設定

    // echo '<pre>'.print_r($_POST,1).'</pre>';
    // exit;

    $str = '';
    foreach( $_POST['s_num'] as $ind => $val ){
      $s_num = trim($_POST['s_num'][$ind]);
      $empno = trim($_POST['empno'][$ind]);
      $address = trim($_POST['address'][$ind]);
      $str .= ",(".$s_num.",'".$empno."','".$address."')";
    }

    $str = substr($str,1);//去掉第一個逗號

      // INSERT INTO ... ON DUPLICATE KEY UPDATE =>DB若有相同資料就UPD,沒有就新增(可批量),需要有唯一值去判斷
      $sql = "INSERT INTO {$f_var['mtable']['config']} (s_num,access_empno,address) 
              VALUES {$str} 
              ON DUPLICATE KEY UPDATE 
              `access_empno` = VALUES(access_empno),
              `address` = VALUES(address),
              `m_empno`= '{$_SESSION['login_empno']}',
              `m_dept_id`= '{$_SESSION['login_dept_id']}',
              `m_proc`= '{$f_var['mphp_name']}',
              `m_date`= now()";
      if( !mysqli_query($f_var['con_db'],$sql) ){
        sl_showsql($sql);
        $f_var["tp"]-> assign("_ROOT.tv_alert",'修改失敗!!');
        $f_var["tp"]-> assign("_ROOT.tv_sql_error",mysqli_error());
        return;
      }


  }else{ //其他設定

    foreach( $_POST as $key => $val ){
    
      $upd_key = '';
      $upd_val = '';
      $sql_where = '';
  
      switch( $key ){
        case 'base_rev':
          $upd_key = 'config_value';
          $upd_val = trim($val);
          $sql_where = "and config_key = 'base_rev'";
        break;
        case 'base_gp':
          $upd_key = 'config_value';
          $upd_val = trim($val);
          $sql_where = "and config_key = 'base_gp'";
        break;
        case 'fina_empno':
          $upd_key = 'access_empno';
          $upd_val = trim($val);
          $sql_where = "and config_key = 'fina_access'";
        break;
      }
  
      if( $upd_key == '' ) continue;
  
      $sql = "UPDATE {$f_var['mtable']['config']}
              SET {$upd_key} = '{$upd_val}', 
              `m_empno`= '{$_SESSION['login_empno']}',
              `m_dept_id`= '{$_SESSION['login_dept_id']}',
              `m_proc`= '{$f_var['mphp_name']}',
              `m_date`= now()
              WHERE d_date = '0000-00-00 00:00:00'
              {$sql_where} ";
  
      $result = mysqli_query($f_var['con_db'],$sql);
      if( !$result ){
        sl_showsql($sql);
        $f_var["tp"]-> assign("_ROOT.tv_alert",'修改失敗!!');
        $f_var["tp"]-> assign("_ROOT.tv_sql_error",mysqli_error());
        return;
      }
  
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
  $f_var['ie_h_title'] = '禮品管理系統-設定檔'; // 頁面標題
  $f_var['msub_title'] = '禮品管理系統-設定檔'; // 程式副標題
  $f_var['mmaxline'] = 10; // 每頁最大筆數
  $f_var['mdb'] = 'heroku'; // db name
  $f_var['mupload_dir']  = "./gift_upfile/" ; //上傳檔案到此資料夾
  $f_var['mtable'] = array('head'=>'gift_head','body'=>'gift_body','type'=>'gift_type','quota'=>'gift_quota',
                          'config'=>'gift_config','guest'=>'gift_guest','item'=>'gift_item'); // 使用 table 名稱
  $f_var['tpl'] = 'gift_config.tpl'; // 樣版畫面檔


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
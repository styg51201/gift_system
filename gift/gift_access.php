<?php 
//┌─────┬───────────────────────────────┐
//│系統名稱: │gift_access.php　  　                                              │
//│         │                                                              │
//│程式名稱: ││gift_access.php                                                │
//│程式說明: │禮品管理系統-權限設定檔                                      │      
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
//│設計日期: │2021.04.28                                                   │
//└─────┴───────────────────────────────┘



// **************************************************************************
//  函數名稱: u_chk_access()
//  函數功能: 權限設定
//  使用方式: u_chk_access(&$f_var)
//  程式設計: Tony
//  設計日期: 2006.09.27
// **************************************************************************
function u_chk_access(&$f_var){

  $f_var["admin"] = 'N'; //最高權限
  $f_var["fina"] = 'N'; //會計審核人員
  $f_var["PD0001"] = 'N'; //採購部
  $f_var["job_5019"] = 'N'; //職階是協理的
  $f_var["normal"] = 'N'; //一般窗口人員


  $dept_id  = sl_dept_gp($_SESSION["login_hrm_dept_id"]);

  //IT0002 資訊設計
  if( strstr($dept_id,"IT0002") ){
    // $f_var["IT0002"] = 'Y';
    $f_var["admin"] = 'Y';
  }

  //PD0001 採購(全)
  if( strstr($dept_id,"PD0001") ){ 
    $f_var["PD0001"] = 'Y';
  }


  sl_open($f_var['mdb']); // 開啟資料庫

  //找config裡的權限人員
  $sql = "SELECT * FROM {$f_var['mtable']['config']}
          WHERE access_empno LIKE '%{$_SESSION['login_empno']}%' 
          AND d_date ='0000-00-00 00:00:00'";

  $result = mysql_query($sql);
  if( mysql_num_rows($result) > 0 ){
    while( $row = mysql_fetch_assoc($result) ){

      //admin權限
      if($row['config_key'] == 'admin'){
        $f_var["admin"] = 'Y';
      }
      //會計審核權限
      if($row['config_key'] == 'fina_access'){
        $f_var["fina"] = 'Y';
      }
      
      //一般窗口權限
      if( $row['config_key'] == 'gift_head_area' ){

        if( $f_var["admin"] != 'Y'){ //不是admin的話,
          $f_var["normal"] = 'Y'; 
        }

      }

    }
  }else{ //若config裡沒找到權限,則 找職位判斷是不是協理

    sl_openhrmdb('HRMDB');
    $sql_hrm = "SELECT e.code,e.CnName,j.code
                FROM Employee AS e
                LEFT JOIN Job AS j ON e.JobId = j.JobId
                WHERE e.code = '{$_SESSION['login_empno']}'
                AND j.code = '5019' /*5019 = 協理*/
                ";
    $rs_hrm = mssql_query($sql_hrm);
    if( mssql_num_rows($rs_hrm) > 0 ){
      //設定協理權限--僅可以觀看
      $f_var['job_5019'] = 'Y';
    }

  }



  //判斷是哪隻程式 根據權限通過
  
  switch( $f_var['mphp_name'] ){

    case 'gift_config': //設定檔
    case 'gift_quota': //基數&額度設定
      if( $f_var['admin'] == 'Y' ){
        return true;
      }
    break;
    case 'gift_type': //禮品品項管理
      if( $f_var['admin'] == 'Y' ){
        return true;
      }else if( $f_var['PD0001'] == 'Y' ){
        return true;
      }
    break;
    case 'gift_rpt': //報表
      if( $f_var['admin'] == 'Y' || $f_var['PD0001'] == 'Y' || $f_var['fina'] == 'Y' ){
        return true;
      }else if( $f_var['normal'] == 'Y' || $f_var['job_5019'] == 'Y' ){
        return true;
      }
    break;
    case 'gift_list': //贈禮對象規劃表
      if( $f_var['admin'] == 'Y' || $f_var['fina'] == 'Y' ){
        return true;
      }else if( $f_var['normal'] == 'Y' || $f_var['job_5019'] == 'Y' ){
        return true;
      }
    break;
    default:
     return false;
  }

}




?>
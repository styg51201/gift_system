<?php
//┌─────┬───────────────────────────────┐
//│系統名稱: │sl        PHP開發函數                                         │
//│程式名稱: │sl_init.php 共用自訂函數與變數設定                            │
//│程式說明: │自行開發的函數，以及變數設定                                  │
//│          │                                                              │
//│程式設計: │黃昭陽                                                        │
//│設計日期: │2004.03.12                                                    │
//│程式修改: │                                                              │
//│修改日期: │                                                              │
//└─────┴───────────────────────────────┘
//┌───────────────┬─────────────────────────────┐
//│函數名稱                      │函數功能                                                  │
//├───────────────┼─────────────────────────────┤
//│u_open()                      │開啟資料庫                                                │
//│sl_open()                     │開啟資料庫                                                │
//│sl_openi()                    │開啟資料庫使用 mysqli                                     │
//│u_openms()                    │開啟ms資料庫                                              │
//│u_chkuser()                   │檢查使用者                                                │
//│u_chk_run()                   │檢查是否可以執行                                          │
//│u_showdate()                  │秀日期                                                    │
//│u_title()                     │秀程式代號、抬頭、今天日期                                │
//│u_msg()                       │秀訊息                                                    │
//│u_bot()                       │網頁表??                                                 │
//│u_showproc()                  │秀程式名稱                                                │
//│u_sel()                       │新增、修改、刪除、查詢、列印點選項目                      │
//│u_showtime()                  │秀時間 (時分hh:mm)                                        │
//│u_chkid()                     │身分證字號檢查                                            │
//│u_chkemail()                  │電子郵件檢查                                              │
//│u_bad_login()                 │登入錯誤                                                  │
//│u_que_form()                  │查詢畫面                                                  │
//│u_qed()                       │點選 Q E D (新增、修改、刪除)                             │
//│u_chk_badword()               │髒字檢查                                                  │
//│u_chg_num()                   │阿拉伯數字轉換國字                                        │
//│u_add_select()                │增加 select 的資料                                        │
//│u_add_select1()               │增加 select 的資料，後台使用                              │
//│u_add_select2()               │增加 select 的資料，TemplatePower 使用                    │
//│sl_add_select3()              │增加 select 的資料- 讀取 mysql 資料                       │
//│u_upload()                    │檔案上傳                                                  │
//│u_int()                       │取整數(去掉小數值)                                        │
//│u_count_upd()                 │更新計數器                                                │
//│u_count_list()                │秀出計數器，回傳陣列                                      │
//│u_upd_log()                   │寫入異動 log File                                         │
//│u_yymmdd2yyyymmdd()           │民國日期轉西元日期                                        │
//│u_add_space()                 │欄位補空白                                                │
//│sl_send_msg()                 │傳送訊息中心訊息                                          │
//│iif()                         │iif(cond,true_set,false_set)類似db4的iif()                │
//│Sl_Jreplace()                 │重新指向網址，使用 javascript 函數                        │
//│sl_errmsg()                   │秀錯誤訊息-精簡版                                         │
//│sl_get()                      │秀出輸入的欄位($f_var['fd'])                              │
//│sl_get_re()                   │秀出回應所要輸入的欄位($f_var['fd_re'])                   │
//│sl_js_rule()                  │傳入 js 欄位檢查資料                                      │
//│sl_list()                     │秀出瀏覽的固定欄位抬頭名稱                                │
//│sl_disp_1()                   │列出單筆資料                                              │
//│sl_conv_date()                │西元/民國日期互轉                                         │
//│sl_ymd()                      │秀出西元年月日或是民國年月日                              │
//│sl_4ymd()                     │秀出西元年月日 ex: 2006-10-22                             │
//│sl_2ymd()                     │秀出民元年月日 ex: 95-10-22                               │
//│sl_cht_ymd()                  │秀出中文年月日 ex: 2015年11月17日                         │
//│sl_chk_msg()                  │抓取超過系統今天日期且目前尚未讀取的訊息數量              │
//│sl_chk_qa()                   │抓取超過系統今天日期且目前尚未結案的電腦報修數量          │
//│sl_web_log()                  │紀錄瀏覽LOG                                               │
//│sl_dept_mr()                  │傳回ERP部門層級中的部門代號                               │
//│sl_eval_fnc_name()            │解譯字串，執行函數                                        │
//│sl_date_diff()                │日期相減，回傳天數                                        │
//│sl_span_str()                 │將字串反白，但過濾不要替換的字串                          │
//│sl_save()                     │資料儲存                                                  │
//│sl_sel_link()                 │點選選單設定                                              │
//│sl_mgr_dept()                 │回傳管理多站使用的員編                                    │
//│sl_chk_login2()               │檢查第二層密碼                                            │
//│sl_showsql()                  │僅對資訊部同仁顯示SQL敘述                                 │
//│sl_range_gas()                │                                                          │
//│sl_mgr_pid()                  │依管理多站資料sl.multi_dept，重整六碼油品站別陣列 $a_pid  │
//│sl_add_select_gas()           │依管理多站的權限,秀出下拉式選單, 抓取/~gas/g_pid.itm      │
//│sl_area_get_dept()            │選擇區別後,列出油站代碼,或人事部門代號,或ERP部門代號      │
//│sl_eip2flw($f_var)            │EIP各式資料轉電子簽核-簽核單                              │
//│sl_custcomp_get_code($f_var)  │選擇客戶總號後,列出客戶編號                               │
//│sl_timediff($atime,$btime)    │兩日期時間相減，得到天、時、分、秒                        │
//│sl_show_sname($dept_id)       │站別id轉中文名                                            │
//│sl_show_name($empno)          │員編轉人名                                                │
//│sl_resaj($class_id)           │山隆班別明細陣列                                          │
//│u_ERP_MA083_SAP_ZTERM_V2()    │針對 ERP 收款條件去比對出 SAP 的收款條件 erp TABLE-->COPMA│
//│sl_flwset()                   │web簽核後,回寫欄位                                        │
//│sl_sap_up_msg()               │轉址用                                                    │
//│u_get_sap_bp_s()              │取得成本中心                                              │
//│sl_get_file()                 │秀出輸入的動態附件欄位                                    │
//│sl_disp_file()                │顯示已有的動態附件欄位                                    │
//│sl_save_file()                │儲存動態附件資料                                          │
//│sl_b_gid()                    │顯示全油站統計checkbox畫面                                │
//│sl_sapid2bgid($sap_id)        │部門代號轉換 sap -> b_gid                                 │
//└───────────────┴─────────────────────────────┘
session_cache_limiter("nocache");
//session_cache_limiter("private");
session_start();

include_once("/home/sl/public_html/sl_session.inc.php"); // hr_is_session load


//$login_empno     = $_SESSION["login_empno"];
//$login_name      = $_SESSION["login_name"];
//$login_dept_id   = $_SESSION["login_dept_id"];
//$login_dept_name = $_SESSION["login_dept_name"];
//$login_time      = $_SESSION["login_time"];
//$login_state     = $_SESSION["login_state"];
//$login_mode      = $_SESSION["login_mode"];
//$_SESSION['cnt']=0;
$f_var["no_save"] = 'file/hr/';  // 儲存時不處理
$f_var["prn_title"] = '山隆通運股份有限公司';
$f_var["today"]     = date('Ymd');
$f_var['server_name']  = 'http://'.$_SERVER["SERVER_NAME"];
$f_var['mysql_set_names'] = 'big5'; // 預設 mysql 字集
$f_var['home_link']='http://eip.slc.com.tw/';
if(strstr($_SERVER["PHP_SELF"],'mslb_st')) { // 大陸山通，要用 utf8 來處理 Add by Tony 2010.03.08
  $f_var['mysql_set_names'] = 'utf8';
  $f_var['home_link']='/~docs/mslb_st/';
}
// Add by Tony 2011-03-10 增加油品的測試區於 slt.slc.com.tw
$f_var['gas_connect'] = 'gas2.slc.com.tw'; // gas2 預設連結
$f_var['gas_db']      = 'gas';             // gas2 預設 db
// Add by Tony 2011-03-10 增加判斷 db 是否開測試機
if('192.168.2.19'==$_SERVER["SERVER_ADDR"] or 'slt.slc.com.tw'==$_SERVER["SERVER_NAME"]) { // 測試機
  $f_var['gas_connect'] = 'localhost';      // 測試機
  $f_var['gas_db']      = 'gas_eip_960125'; // 測試機 gas 預設 db
}


// Add by Tony 2011-04-08
$f_var['msg_img']['qa_new']='<img src=/~sl/img/wrench_orange.png border=0 alt=新報修>'; // 新報修
$f_var['msg_img']['qa_re']='<img src=/~sl/img/wrench.png border=0 alt=新回應>';         // 回應報修
$f_var['msg_img']['qa_ok']='<img src=/~sl/img/money.png border=0 alt=結案,收錢...>';    // 結案
$f_var['msg_img']['wt']='<img src=/~sl/img/user.png border=0 alt=今天要值班...>';       // 值班

$mindex        = "index.php";    // 前端首頁
$mmain         = "index.php";    // 前端主功能畫面
$mlogin        = "sl_login.php"; // 前端登入作業

$bg_time       = u_caclutime();                       // 程式起始時間

//$mtp_url     = 'tp/';
//$mbase_url   = './';
$mtp_url       = '/home/sl/public_html/tp/';
$mbase_url     = '/home/sl/public_html/';
$sl_header_php = '/home/sl/public_html/sl_header.inc.php';
$sl_footer_php = '/home/sl/public_html/sl_footer.inc.php';
$sl_tp_file    = "/home/sl/public_html/tp/class.TemplatePower.inc.php";
$sl_erp_db     = 'Leader9503';
$sl_eip_db     = 'sl';
$mdat3         = "Leader9503";                         // ms 資料庫

$mmenu         = "admin_main.php"; // 後端主功能畫面

$mlogin        = "{$f_var['server_name']}/~sl/sl_login.php";  // 前端登入作業
$mlogout       = "{$f_var['server_name']}/~sl/sl_logout.php"; // 登出

$memailurl     = "{$f_var['server_name']}/~sl/";   // 預設傳送郵件網站位置，抓圖用
$mbaseurl      = "{$f_var['server_name']}/~sl/";   // base href 位置
$mboturl       = "slc2.slc.com.tw/"; // 表尾訊息URL
$mbottitle     = "山隆"; // 表尾訊息
//$mtitle1       = "山隆EIP-使用者登入"; // 瀏覽器抬頭
$mtitle1       = "山隆EIP-"; // 瀏覽器抬頭
$mtitle1img    = ""; // 瀏覽器抬頭圖檔名稱
$mtitle2       = "山隆EIP"; // 網頁抬頭
$mprn_title    = "山隆通運股份有限公司"; // 報表抬頭
$mservermail   = "tony@slc.com.tw";  // 傳送郵件的回覆位址
$mservername   = "tony";     // 傳送郵件的回覆名稱
$mtarget       = "";            // 網頁開啟位置
$mmaxline      = 10;             // 每頁最大筆數
$mbmaxline     = 20;             // 每頁最大筆數-後端
$msnum         = 0;             // 起始筆數
$menum         = 10;             // 結束筆數
$mselmsgcolor  ='000060';       // 目前訊息的顏色...新增、修改....
$mtitleg_color ='BBD8F9';       // 抬頭背景顏色
$mtitlef_color ='000000';       // 抬頭字型顏色
$mbody_text_color  = '#000000'; // body-text 顏色
$mbody_link_color  = '#800080'; // body-link 顏色
$mbody_vlink_color = '#800080'; // body-vlink 顏色
$mbody_alink_color = '#800080'; // body-alink 顏色

//$adepart['S102'] = 'S102'; // 總公司

$ctoday  = date("Ymd");
$ctoday  = strval(substr($ctoday,0,4)-1911).substr($ctoday,4,4);
$cyy     = substr($ctoday,0,3);
$cmm     = substr($ctoday,3,2);
$cdd     = substr($ctoday,5,2);


$mdat1       = "sl"; // 資料庫

$mtable_ap   = "ap";   // 系統對照主檔
$mtable_dept = "dept"; // 廠部對照主檔
$mtable_ct   = "ct";   // 網頁員工控制檔
$mtable_pass = "pass"; // 網頁員工登入檔

$mdat3        = "Leader9503";                         // ms 資料庫
$mtable_cmsna = "CMSNA";                              // 付款條件
$mtable_purta = "PURTA";                              // 進貨單


//if($_SESSION['login_empno'] == '1430174' || $_SESSION['login_empno'] == '1130937'){
  if($_REQUEST['msel']=='ajax_get_title'){
    $f_title = iconv('UTF-8','BIG5',$_REQUEST['f_title']);
    sl_open('sl');
    $upd = "
           update use_log
              set pg_title = '{$f_title}'
            where pg_name = '{$_SERVER['PHP_SELF']}'
           ";
    mysql_query($upd);
    //$d = iconv('BIG5','UTF-8',$_SERVER['PHP_SELF']);
    //$d = json_encode($d);
    //echo $d;
    exit;
  }
  $f_var['ban_web'] = array('/~docs/eip-new/v4/personal/func.js.php',//add20150212 by 小樵測試v4個人專區介面
                            '/~docs/eip-new/v3/func.js.php',
                            '/~docs/eip-new/v3/func.js_test.php',
                            '/~docs/it/docs/it_tools/it_tools_ajax.php',
                            '/~docs/leeyen/it_tools/it_tools_ajax.php',
                            '/~docs/sle/docs/e09_que.php',
                            '/~gas/gas_trandelv.php',
                            './gas_trandelv.php',
                            '/home/gas/public_html/gas_trandelv.php',
                            '/~gas/gas_tranrecv.php',
                            './gas_tranrecv.php',
                            '/home/gas/public_html/gas_tranrecv.php',
                            '/home/gas/public_html/gas_touchtrandelv.php',
                            '/~gas/gas_touchtrandelv.php',
                            './gas_touchtrandelv.php',
                            './gas_loginone.php',
                            './tran_delv2acco.php',
                            '/home/gas/public_html/tran_delv2acco.php',
                            './db_iconv.php',
                            '/home/docs/public_html/1430174/db_iconv.php',
                            '/~docs/sle/docs/index.php',
                            '/~docs/sle/docs/e09_que_emp.php',
                            '/~docs/gaswork/admin/sl_main.php',
                            './get_shipping.php',
                            '/~docs/wwrpt/wwrpt.php',
                            '/~docs/wwrpt/wwrpt_manage.php',		// add by 善翔 20210115 週報判斷
                            '/~docs/wwrpt/HR_config.php',			// add by 善翔 20210209 週報判斷
                            '/~docs/wwrpt/test/wwrpt.php',
                            '/~docs/wwrpt/test/wwrpt_manage.php',	// add by 善翔 20210115 週報判斷
                            '/~docs/wwrpt/test/HR_config.php', 		// add by 善翔 20210219 週報判斷
                            '/~gas/1330075/api/maininvoout.php', 		// add by 小樵 20210513 api判斷
                            '/~gas/1330075/api/v1/maininvo.php', 		// add by 小樵 20210513 api判斷
                            '/~gas/1330075/api/invosubsoout.php', 		// add by 小樵 20210521 api判斷
                            '/~gas/1330075/api/v1/invosubs.php' 		// add by 小樵 20210521 api判斷
						); 
  if('' == $_REQUEST['msel'] || is_numeric($_REQUEST['msel'])){   // 限制 msel=數字 防止ajax列入計算
    use_log($_SERVER["PHP_SELF"]);//測試中請勿關閉
    //if('/~docs/eip-new/v3/func.js.php' != $_SERVER["PHP_SELF"] &&
    //   '/~docs/it/docs/it_tools/it_tools_ajax.php' != $_SERVER["PHP_SELF"] &&
    //   '/~docs/leeyen/it_tools/it_tools_ajax.php' != $_SERVER["PHP_SELF"]){
    if(!in_array($_SERVER["PHP_SELF"],$f_var['ban_web'])){
      sl_open('sl');
      $sql = "
             select *
               from use_log
              where pg_name = '{$_SERVER['PHP_SELF']}'
             ";
      $result = mysql_query($sql);
      $qty = mysql_num_rows($result);
      $row = mysql_fetch_assoc($result);
      if($qty > 0){
        if('' == $row['pg_title']){
          echo "<script src='https://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js'></script>\n";
          echo "<script language=\"javascript\">";
          echo "$(document).ready(function(){";
          echo "  var title = $(document).attr(\"title\");";
          echo "  $.getJSON( location.href ,";
          echo "    { f_title : title , msel : \"ajax_get_title\" },";
          echo "    function(json){";
          echo "    });";
          echo "});";
          echo "</script>\n";
        }
      }
    }
  }
//}
// **************************************************************************
//  函數名稱: use_log()
//  函數功能: 計算程式使用次數
//  使用方式: use_log($pg_path)
//  程式設計: 朝鈞
//  設計日期: 2014.07.21
// **************************************************************************
function use_log($pg_path) {

  //-------------------------- 取得程式中文名稱 START --------------------------
  //$_POST['url'] = $_SERVER['HTTP_HOST'].$pg_path;   // 取得 URL 頁面資料
  //另外一種讀網頁抓title tag的方法
  //if($_SESSION['login_empno'] == '1130937'){
  //$buffer = file("http://".$_POST['url']); //將網址讀入buffer變數
  //for($i=0;$i<sizeof($buffer);$i++){ //將每段文字讀出來,以換行為單位,sizeof會傳回共有幾筆
  //  $n1=strpos(" ".$buffer[$i],"<title>"); //檢查你要找的字,是否存在,假設我想找<title>中的內容為何,為什麼前面要加空白,因為如果找到位置如果是第一個位置是0,0跟找不到在判斷會有問題
  //  //echo $n1."<br>";
  //  if($n1>0){
  //    $n2=strrpos($buffer[$i],"</title>"); //找出</title>的位置
  //    $title=substr($buffer[$i],$n1+6,$n2-$n1-6); //+6的意思是<title>的長度減掉前面的一個空白,-6的話是把長度減掉
  //    break;//考慮加上這個試試看？只要找到title就直接離開迴圈
  //    //$title=iconv("UTF-8","big5",$title);
  //    //echo $title."<br>\n"; //將title的內容值印出\n代表顯示原始碼的時候會換行,<BR>是brower顯示會換行
  //  }
  //}
  //}

  //curl的做法
  //echo $_POST['url'];exit;
  //
  //if(!isset($_POST['url']) || $_POST['url'] == ''){   // 檢查 URL
  //  //echo "URL 錯誤";exit;
  //}
  //
  //$ch = curl_init();   // 初始化 CURL
  //
  //curl_setopt ($ch, CURLOPT_URL, $_POST['url']); // 設定 URL
  //curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);  // 讓 curl_exec() 獲取的信息以資料流的形式返回，而不是直接輸出。
  //curl_setopt ($ch, CURLOPT_CONNECTTIMEOUT, 0);  // 在發起連接前等待的時間，如果設置為0，則不等待
  //curl_setopt ($ch, CURLOPT_TIMEOUT, 30);        // 設定 CURL 最長執行的秒數
  //$store = curl_exec ($ch);                      // 嘗試取得文件內容
  //
  //if(!curl_errno($ch)){                          // 檢查文件是否正確取得
  //  //echo "無法取得 URL 資料";
  //  //echo curl_error($ch);exit;   //顯示錯誤訊息
  //}
  //
  //curl_close($ch);    // 關閉 CURL
  //
  //preg_match("/<head.*>(.*)<\/head>/smUi",$store, $htmlHeaders);   // 解析 HTML 的 <head> 區段
  //if(!count($htmlHeaders)){
  //  //echo "無法解析資料中的 <head> 區段";exit;
  //}
  //
  //if(preg_match("/<meta[^>]*http-equiv[^>]*charset=(.*)(\"|')/Ui",$htmlHeaders[1], $results)){     // 取得 <head> 中 meta 設定的編碼格式
  //   $charset =  $results[1];
  //}else{
  //   $charset = "None";
  //}
  //
  //if(preg_match("/<title>(.*)<\/title>/Ui",$htmlHeaders[1], $htmlTitles)){    // 取得 <title> 中的文字
  //  if(!count($htmlTitles)){
  //     //echo "無法解析 <title> 的內容";exit;
  //  }
  //  $title = $htmlTitles[1];  // 取得title  EX：山隆EIP--補休單
  //  //echo $title;
  //}

  //-------------------------- 取得程式中文名稱 END --------------------------

  sl_open('sl');
  $use_log_sql = "INSERT INTO use_log (pg_name,  pg_cnt)
                       VALUES ('{$pg_path}', '1')
                  ON DUPLICATE KEY
                       UPDATE pg_cnt = pg_cnt+1
                 ";//,pg_title='{$title}'
  if(!mysql_query($use_log_sql)){
    sl_errmsg('程式錯誤，請通知資訊人員!!');
    //exit;
  }

}
// **************************************************************************
//  函數名稱: u_open()
//  函數功能: 開啟資料庫
//  使用方式: u_open($vdat)
//  程式設計: Tony
//  設計日期: 2004.03.12
// **************************************************************************
function u_open($vdat) {
  global $f_var;
  if ($vdat == 'gas' || $vdat == 'gas_sap') {
    //$vdat = $f_var['gas_db']; // Add by Tony 2011-03-10
    mysql_connect($f_var['gas_connect'],'slprg','sl85') or die("資料庫連結失敗!!");
    $year = date('Y');
    if ($_SESSION[db_year]) {
      switch ($_SESSION[db_year]) {
        case "$year":
          $vdat = $vdat;
          break;
        default:
          $vdat = $vdat.'_'.$_SESSION[db_year];
          break;
      }
    }
  }
  else {
    mysql_connect('localhost','slprg','sl85') or die("資料庫連結失敗!!");
  }
  mysql_select_db($vdat) or die("無法讀取資料庫!!-u_open()-$vdat");
  mysql_query("SET NAMES {$f_var['mysql_set_names']}");
  //echo $f_var['mysql_set_names'].'---';
  //if('8966389'==$_SESSION['login_empno']) {
  //  mysql_query("SET NAMES 'utf8'");
  //  echo 'utf8';
  //}
  //else {
  //  mysql_query("SET NAMES 'big5'");
  //}
  return;
}

function sl_open($vdat) {
  //echo $vdat;
  GLOBAL $f_var;
  //if(strstr('1130937/',$_SESSION['login_empno'])){
  //  $_SESSION['cnt']++;
  //  echo "<pre>";
  //  echo 'cnt'.$_SESSION['cnt']."<br>";
  //  print_r($f_var);
  //
  //  echo "</pre>";
  //}
  if ((substr($vdat,0,4) == 'gas_' || $vdat == 'gas') && ($vdat != 'gas_docs' && $vdat != 'gas_eip_960125' && $vdat != 'gas_ge' && $vdat != 'gas_t' && $vdat != 'gas_test') ) {
    //$vdat = $f_var['gas_db']; // Add by Tony 2011-03-10
    mysql_connect($f_var['gas_connect'],'slprg','sl85') or die(date('Y-m-d H:i:s')."資料庫連結失敗!!");
    $year = date('Y');
    if ($_SESSION[db_year]) {
      switch ($_SESSION[db_year]) {
        case "$year":
          $vdat = $vdat;
          break;
        default:
          $vdat = $vdat.'_'.$_SESSION[db_year];
          break;
      }
    }
  }
  else {
    mysql_connect('localhost','slprg','sl85') or die(date('Y-m-d H:i:s')."資料庫連結失敗!!");
  }
  mysql_select_db($vdat) or die(date('Y-m-d H:i:s')."無法讀取資料庫!!-sl_open()-$vdat");
  mysql_query("SET NAMES Big5");
  //sl_open2();
  return;
}

function sl_open2() {
  GLOBAL $f_var;
  echo '*'.$f_var['gas_connect'].'*<br>';
}


// **************************************************************************
//  函數名稱: u_openi()
//  函數功能: 開啟資料庫使用 mysqli
//  使用方式: u_openi($vdat)
//  程式設計: Tony
//  設計日期: 2008.11.11
// **************************************************************************
function sl_openi($vdat) { // 20210315 update by 善翔 修改判斷式讓GAS的測試資料庫也可以使用
  global $f_var;  
  if ((substr($vdat,0,4) == 'gas_' || $vdat == 'gas') && ($vdat != 'gas_docs' && $vdat != 'gas_eip_960125' && $vdat != 'gas_ge' && $vdat != 'gas_t' && $vdat != 'gas_test') ) {
    //$vdat = $f_var['gas_db']; // Add by Tony 2011-03-10
    $vlink = mysqli_connect($f_var['gas_connect'],'slprg','sl85',$vdat) or die("資料庫連結失敗!!");
    $year = date('Y');
    if ($_SESSION[db_year]) {
      switch ($_SESSION[db_year]) {
        case "$year":
          //$vdat = $vdat;
          $vdat = $f_var['gas_db'];
          break;
        default:
          $vdat = $vdat.'_'.$_SESSION[db_year];
          break;
      }
    }
  }
  else {
    $vlink = mysqli_connect('localhost','slprg','sl85',$vdat) or die("資料庫連結失敗!!");
  }
  mysqli_query($vlink,"SET NAMES {$f_var['mysql_set_names']}");
  return($vlink);
}

// **************************************************************************
//  函數名稱: u_openms()
//  函數功能: 開啟資料庫
//  使用方式: u_openms($vdat)
//  程式設計: Tony
//  設計日期: 2005.10.11
// **************************************************************************
function u_openms($vdat) {
  //$msdb = mssql_connect("59.120.26.162","sa","") or die("資料庫連結失敗!!");
  $msdb = mssql_connect("slg.slc.com.tw:1433","sa","sanloong") or die("資料庫連結失敗!!");
  //$msdb = mssql_connect("slg.slc.com.tw:1433","sa","dsc") or die("資料庫連結失敗!!");
  //$msdb = mssql_connect("slg.slc.com.tw:1433","slprg","sl85") or die("資料庫連結失敗!!");
  mssql_select_db($vdat) or die("無法讀取資料庫!!");
  return;
}

function u_openef2k($vdat) {
  $msdb = mssql_connect("flow.slc.com.tw","sa","s9704") or die("資料庫連結失敗!!");
  //$msdb = mssql_connect("192.168.2.190","sa","s9704") or die("資料庫連結失敗!!");
  mssql_select_db($vdat) or die("無法讀取資料庫!!");
  return;
}

function sl_openef2k($vdat) {
  //$vfileopen = fopen("/home/sl/public_html/sl_opdb.log",'a');
  //$vstr = "mssql;FLOW;sl_openef2k;{$vdat};{$_SERVER['PHP_SELF']}\n";
  //fwrite($vfileopen,$vstr);
  //fclose($vfileopen); // 關閉檔案
  
  $msdb = mssql_connect("flow.slc.com.tw","sa","s9704") or die("資料庫連結失敗!!");
  //$msdb = mssql_connect("192.168.2.190","sa","s9704") or die("資料庫連結失敗!!");
  mssql_select_db($vdat) or die("無法讀取資料庫!!");
  return;
}

function sl_openef2kc($vdat) { //add by 佳玟 2020.08.26 雲端電簽主機
  //$msdb = mssql_connect("flow1.slc.com.tw","sa","s9704") or die("資料庫連結失敗!!");
  $msdb = mssql_connect("175.98.134.105:1433","sa","s9704") or die("資料庫連結失敗!!");
  mssql_select_db($vdat) or die("無法讀取資料庫!!");
  return;
}


function sl_openel($vdat) {
  $msdb = mssql_connect("elearn.slc.com.tw:9000","sa","sanloong") or die("資料庫連結失敗!!");
  mssql_select_db($vdat) or die("無法讀取資料庫!!");
  return;
}

function sl_openms($vdat) {
  //add by mimi 報修-15424 增加93測試區的判斷
  global $f_var;
  //echo $f_var['f_comp'].'----initbig5';
  $ex_comp=explode('-',$f_var['f_comp']);
  if('93版測試區'==$ex_comp[1] or '93'==$f_var['f_comp']){
    sl_openms_new($vdat);
  }
  else{
    $msdb = mssql_connect("slg.slc.com.tw","sa","sanloong") or die("資料庫連結失敗!!");
    //$msdb = mssql_connect("slg.slc.com.tw","slprg","sl85") or die("資料庫連結失敗!!");
    //$msdb = mssql_connect("slg.slc.com.tw","sa","dsc") or die("資料庫連結失敗!!");
    mssql_select_db($vdat) or die("無法讀取資料庫!!");
  }
  return;
}
function sl_openms_new($vdat) {//add by 東巖 報修-15424 增加93測試區的判斷
  if('192.168.2.19'==$_SERVER["SERVER_ADDR"] or 'slt.slc.com.tw'==$_SERVER["SERVER_NAME"]) { // 測試機
    $msdb = mssql_connect("192.168.2.10:1433","sa","sanloong") or die("資料庫連結失敗!!");
  }
  else{
    //$msdb = mssql_connect("slg.slc.com.tw:1533","sa","sanloong") or die("資料庫連結失敗!!");
    //$msdb = mssql_connect("slg.slc.com.tw","slprg","sl85") or die("資料庫連結失敗!!");
    //$msdb = mssql_connect("slg.slc.com.tw","sa","dsc") or die("資料庫連結失敗!!");
    $msdb = mssql_connect("slg.slc.com.tw","sa","sanloong") or die("資料庫連結失敗!!");
  }
  mssql_select_db($vdat) or die("無法讀取資料庫!!");
  return;
}
function sl_openfwd($vdat='fwd3'){
  //$msdb = mssql_connect("59.120.26.170:1433","sa","slcperfect") or die("資料庫連結失敗!!");
  // Modify by Tony 2012-03-29 改用DNS,並將良美主機開放sql:1433的防火牆信任EIP的IP
//$msdb = mssql_connect("fwd.slc.com.tw:1433","sa","slcperfect") or die("資料庫連結失敗!!");
// modify 106.07.18 fwd.slc.com.tw 改為 210.201.104.136
  $msdb = mssql_connect("210.201.104.136:1433","sa","slcperfect") or die("資料庫連結失敗!!");
  mssql_select_db($vdat) or die("無法讀取資料庫!!");
  return;
}
function sl_openhrmdb($vdat){
  //$vfileopen = fopen("/home/sl/public_html/sl_opdb.log",'a');
  //$vstr = "mssql;HRM;sl_openhrmdb;{$vdat};{$_SERVER['PHP_SELF']}\n";
  //fwrite($vfileopen,$vstr);
  //fclose($vfileopen); // 關閉檔案
  
  //$msdb = mssql_connect("192.168.1.8:1433","slprg","sl9611prg") or die("資料庫連結失敗!!");
  $msdb = mssql_connect("175.98.134.108:1433","slprg","sl9611prg") or die("資料庫連結失敗!!");
  mssql_select_db($vdat) or die("無法讀取資料庫!!");
  //mssql_query("SET NAMES 'big5'");
  return;
}
function sl_openhrmdbmy($vdat){ //add by 佳玟 2020.06.08 待辦15370-臉部辨識打卡, 員工基本檔轉至hrm mysql
  $msdb = mysql_connect("175.98.134.108:3306","slprg","sl8611prg") or die("資料庫連結失敗!!");
  mysql_select_db($vdat) or die(date('Y-m-d H:i:s')."無法讀取資料庫!!-$vdat");
  //mysql_query("SET NAMES Big5");
  return;
}
function sl_openhrbpm($vdat){
  $msdb = mssql_connect("175.98.134.104:1433","slprg","sl9611prg") or die("資料庫連結失敗!!");
  mssql_select_db($vdat) or die("無法讀取資料庫!!");
  //mssql_query("SET NAMES 'big5'");
  return;
}
function sl_openrtm($vdat) {
  Global $_SESSION;
  //if ($_SESSION['login_dept_id']=='S122' || $_SESSION['login_dept_id']=='S121') {
  //if (strstr($_SERVER["PHP_SELF"],'rtmtest')) {
  //  $vdat = 'RTMDBTEST';
  //}
  //$msdb = mssql_connect("60.251.72.111:1433","sa","sl98") or die("資料庫連結失敗!!");
  mysql_connect('localhost','slprg','sl85') or die("資料庫連結失敗!!");
  mysql_select_db($vdat) or die("無法讀取資料庫!!");
  return;
}
function sl_opengps($vdat='MjCarcenter') {
  $f_port = '1433';
  //if($vdat == 'FI_PAY_SLC' || $vdat == 'FI_PAY_SLC_TEST2'){
  //  $f_port='2433';
  //}
  if($vdat == 'FI_PAY_SLC' || $vdat == 'FI_PAY_SLC_TEST2'){
    $msdb = mssql_connect("175.98.134.106:{$f_port}","sa","sanloong") or die("資料庫連結失敗!!");
  }
  else{
    $msdb = mssql_connect("gps.slc.com.tw:{$f_port}","sa","sanloong") or die("資料庫連結失敗!!");
  }
  //$msdb = mssql_connect("59.120.26.174:1433","sa","sanloong") or die("資料庫連結失敗!!");
// modify 2016.11.23 by markliu
//$msdb = mssql_connect("gps.slc.com.tw:1433","sa","sanloong") or die("資料庫連結失敗!!");
  mssql_select_db($vdat) or die("無法讀取資料庫!!");
  return;
}
function u_opengps($vdat){
  //$msdb = mssql_connect("59.120.26.174:1433","sa","sanloong") or die("資料庫連結失敗!!");
  $msdb = mssql_connect("gps.slc.com.tw:1433","sa","sanloong") or die("資料庫連結失敗!!");
  mssql_select_db($vdat) or die("無法讀取資料庫!!");
  return;
}
function u_openvip($vdat){
  $msdb = mssql_connect("vip.slc.com.tw:1433","it","sl85") or die("vip資料庫連結失敗!!");
  //$msdb = mssql_connect("59.120.26.166:1433","it","sl85") or die("vip資料庫連結失敗!!");
  //'192.168.2.19'==$_SERVER["SERVER_ADDR"] or 'slt.slc.com.tw'==$_SERVER["SERVER_NAME"] or
  //if(  'eip.slc.com.tw'==$_SERVER["SERVER_NAME"]) { // 測試機
  //  $vdat='TESTDB';
  //}
  mssql_select_db($vdat) or die("無法讀取資料庫!!");
  return;
}
function sl_openvip($vdat){
  //$msdb = mssql_connect("59.120.26.166:1433","it","sl85") or die("vip資料庫連結失敗!!");
  $msdb = mssql_connect("vip.slc.com.tw:1433","it","sl85") or die("vip資料庫連結失敗!!");
  //'192.168.2.19'==$_SERVER["SERVER_ADDR"] or 'slt.slc.com.tw'==$_SERVER["SERVER_NAME"] or
  //if(  'eip.slc.com.tw'==$_SERVER["SERVER_NAME"]) { // 測試機
  //  $vdat='TESTDB';
  //}
  mssql_select_db($vdat) or die("無法讀取資料庫!!");
  return;
}
function u_opengas1($vdat){
  //$msdb = mysql_connect("gas1.slc.com.tw","slprg","sl85") or die("資料庫連結失敗!!");
  $msdb = mysql_connect("192.168.1.6","slprg","sl85") or die("資料庫連結失敗!!");
  mysql_select_db($vdat) or die("無法讀取資料庫!!");
  mysql_query("SET NAMES Big5");
  return;
}
function sl_opengas($b_gid){//2010.10.26 add by 東巖
  // sl_openpos($b_gid)      // Mark by tony 2010-11-09
  return(sl_openpos($b_gid));
}
function sl_openpos($b_gid){
  $vconnect='Y'; // 是否連線成功 Add by Tony 2010-11-09
        $f_var['b_gid']=$b_gid;
        $f_var['db']='gas';
        u_open('gas');

        $sql="select mysql_port,sname from company where b_gid = '{$f_var['b_gid']}'";
        $rs=mysql_query($sql);
        $row=mysql_fetch_array($rs);
        $f_var['port'] = $row['mysql_port'];
        $f_var['mbtime'] = date('Y-m-d H:i:s');
  //add by 東巖 2010.10.19 先ping油站是否有在線
  //if('507'==$f_var['b_gid'] && date('Ymd')<'20110901' ){
  //   $f_var['b_gid'] = '517';
  //}
  //Line:368~370 2011.08.01 add by 東巖
  //平鎮站電腦架在介壽網段 連平鎮要轉到介壽的5506,開放到201108月底
  //MARK by 東巖 2011.08.10 取消
  
  $a= shell_exec("ping {$f_var['b_gid']}.slc.com.tw -c 3");
  $chk = strstr($a,'rtt min/avg/max/mdev');
  
  if(''!=$chk){
    //echo "{$f_var['b_gid']}.slc.com.tw:{$f_var['port']}";
    //$f_var['link_pos'] = mysql_connect("{$f_var['b_gid']}.slc.com.tw:{$f_var['port']}", 'it', 'sl85') or die("{$f_var['b_gid']}-連結失敗!!{$f_var['mbtime']}");
    //$f_var['link_pos'] = mysql_connect("{$f_var['b_gid']}.slc.com.tw:{$f_var['port']}", 'it', 'sl85') or die("{$f_var['b_gid']}:{$f_var['port']}-連結失敗!!{$f_var['mbtime']}");
    $f_var['link_pos'] = @mysql_connect("{$f_var['b_gid']}.slc.com.tw:{$f_var['port']}", 'it', 'sl85') or $vconnect='N';//upd by 逸凡 2012-06-27
    
    //$chk2 = strstr($f_var['link_pos'],'連結失敗!!');
    if('N'!=$vconnect){           //upd by 逸凡 2012-06-27
      mysql_select_db($f_var['db'],$f_var['link_pos']);
      mysql_query("SET NAMES big5");
    }
    //else {
      //$vconnect='N'; // 是否連線成功 Add by 東巖 2012-06-27
    //  sl_errmsg($row['sname'].'連線異常,請通知系統維護人員,謝謝!');  //upd by 東巖 2012-06-27
    //}
  }
  else {
    $vconnect='N'; // 是否連線成功 Add by Tony 2010-11-09
    sl_errmsg($row['sname'].'連線異常,請通知系統維護人員,謝謝!');  //upd by mimi 2010.10.21 秀出站別名稱
  }
  return($vconnect);
}

// **************************************************************************
//  函數名稱: sl_opensl8()
//  函數功能: 開啟sl8資料庫
//  使用方式: sl_opensl8($b_gid,$port)
//  程式設計: 逸凡
//  設計日期: 2012.06.27
// **************************************************************************
function sl_opensl8($b_gid,$port){
  $vconnect='Y'; // 是否連線成?\ Add by Tony 2010-11-09
        $f_var['b_gid']=$b_gid;
        $f_var['db']='gas';
        $f_var['port'] = $port;
        $f_var['mbtime'] = date('Y-m-d H:i:s');
  //add by 東巖 2010.10.19 先ping油站是否有在線
  $a= shell_exec("ping {$f_var['b_gid']}.slc.com.tw -c 3");
  $chk = strstr($a,'rtt min/avg/max/mdev');
  if(''!=$chk){
    //$f_var['link_pos'] = mysql_connect("{$f_var['b_gid']}.slc.com.tw:{$f_var['port']}", 'it', 'sl85') or die("{$f_var['b_gid']}:{$f_var['port']}-連結失敗!!{$f_var['mbtime']}");
    $f_var['link_pos'] = @mysql_connect("{$f_var['b_gid']}.slc.com.tw:{$f_var['port']}", 'it', 'sl85') or $vconnect='N';//upd by 逸凡 2012-06-27
    //$chk2 = strstr($f_var['link_pos'],'連結失敗!!');
    if('N'!=$vconnect){           //upd by 逸凡 2012-06-27
      mysql_select_db($f_var['db'],$f_var['link_pos']);
      mysql_query("SET NAMES big5");
    }
    //else {
      //$vconnect='N'; // 是否連線成功 Add by 東巖 2012-06-27
    //  sl_errmsg($row['sname'].'連線異常,請通知系統維護人員,謝謝!');  //upd by 東巖 2012-06-27
    //}
  }
  else {
    $vconnect='N'; // 是否連線成功 Add by Tony 2010-11-09
    sl_errmsg($row['sname'].'連線異常,請通知系統維護人員,謝謝!');  //upd by mimi 2010.10.21 秀出站別名稱
  }
  return($vconnect);
}
// **************************************************************************
//  函數名稱: sl_openoci()
//  函數功能: 開啟資料庫使用
//  使用方式: sl_openoci($vdat)
//  程式設計: supergk
//  設計日期: 2013.03.10
// **************************************************************************
function sl_openoci($vdat) {
  global $f_var;
  switch($vdat){
    case "DEV":
      $vdat = "172.16.4.28:1527/DEV";
      $ac = 'SLCODBC';
      $pwd = 'SLCODBC';
    break;
    case"SN1":
      $vdat = "172.16.4.137:1526/SN1";
      $ac = 'SLCODBC';
      $pwd = 'SLCODBC';
    break;
    case "PRD":
      $vdat = "172.16.4.30:1527/E68";
      $ac = 'SLCODBC';
      $pwd = 'SLCODBC';
      break;
    case "SND":  //add by 佳玟 2015.03.11 金源說,SND為新的測試區
      $vdat = "172.16.4.166:1526/SND";
      $ac = 'SLCODBC';
      $pwd = 'SLCODBC';
      break;
    case "SB1"://add by 逸凡 2015.06.23 utf8測試區
      $vdat = "172.16.4.167:1527/SB1";
      $ac = 'SLCODBC';
      $pwd = 'SLCODBC';
      break;
    case "SB2"://add by 嘉賢 2015.10.06 測試區
      $vdat = "172.16.4.167:1528/SB2";
      $ac = 'SLCODBC';
      $pwd = 'SLCODBC';
      break;
    case "SB3"://add by 逸凡 2018.12.26 測試區
      $vdat = "172.16.4.19:1527/SB3";
      $ac = 'SLCODBC';
      $pwd = 'SLCODBC';
      break;
  }
  //$vlink = oci_connect($ac,$pwd,$vdat,'WE8DEC');
  //$vlink = oci_pconnect($ac,$pwd,$vdat,'WE8DEC');
  $vlink = oci_pconnect($ac,$pwd,$vdat,'utf8');
  if(!$vlink) {
    die("無法連結【oracle】!!請洽總公司應用組 \n");
  }
  return($vlink);
}

// **************************************************************************
//  函數名稱: u_chkuser()
//  函數功能: 檢查使用者
//  使用方式: u_chkuser($使用者代號)
//  程式設計: Tony
//  設計日期: 92.02.19
// **************************************************************************
function u_chkuser($vuser_no,$vuser_pw) {
  $v_chkok  = 'Y';                // 傳回值是否正確
  global $mtable_pass; // 網頁員工登入檔

  $query = "select PASSWORD('$vuser_pw') as vuser_pw";
  $result = mysql_query($query);
  $row = mysql_fetch_row($result);
  list($vuser_pw) = $row;

  $query1  = "select * from $mtable_pass where empno='$vuser_no' and password='$vuser_pw' and state='Y' and d_date='0000-00-00 00:00:00'";
  $row1 = mysql_fetch_array(mysql_query($query1));
  if(empty($row1["empno"])) { // 沒有資料
    $v_chkok  = 'N'; // 傳回值是否正確
    //u_msg(4,'center','FF0000','','資料有誤!! 錯誤代號:init: 01');
  }
  return($v_chkok);
}

// **************************************************************************
//  函數名稱: u_chk_run()
//  函數功能: 檢查是否可以執行
//  使用方式: u_chk_run()
//  程式設計: Tony
//  設計日期: 93.11.04
// **************************************************************************
function u_chk_run($f_var) {
  //echo  $f_var['ap_id'];
  Global $_SERVER;
  Global $_SESSION;
  Global $vlogin_mode;
  Global $mlogin; // 登入頁面

  if (substr($_SERVER['PHP_SELF'],0,5) == '/~gas') {
    $f_var['ap_id'] = 'gas';
  }
  //var_dump($f_var);

  if(NULL<>$f_var['ap_id']) {
     sl_open('sl');
     $query2       = "select *
                             from ct
                             where d_date='0000-00-00' and empno='{$_SESSION["login_empno"]}' and ap_id='{$f_var['ap_id']}'
                             order by empno
                     ";

     //echo $query2;
     $row2 = mysql_fetch_array(mysql_query($query2));

     $vlogin_mode = $row2["mode"];
     if(NULL<>trim($vlogin_mode)) {
       $_SESSION["login_mode"] = $row2["mode"];
     }

  }
  else {
     $vlogin_mode  = $_SESSION["login_mode"]; // 權限
     //echo $vlogin_mode;
  }
  //echo $vlogin_mode.'-----';
  if($vlogin_mode!='1'&&$vlogin_mode!='2'&&$vlogin_mode!='3'&&$vlogin_mode!='4'&&$vlogin_mode!='5'&&$vlogin_mode!='6') {
    echo '<br>';
    echo '<br>';
    echo '<br>';
    echo '<br>';
    echo '<br>';
    if (substr($_SERVER['PHP_SELF'],0,5) == '/~gas') {// add by 小樵20201127 由月碧把關誰可以進油品總部
      if(strstr(sl_gas_ct($_SESSION['login_empno'], u_showproc()), u_showproc())){
        return;
      }else{
        //sl_errmsg('抱歉！您無權限使用油品總部系統，如有疑問請洽總公司-油品特助 分機815...<a href="http://'.$_SERVER['SERVER_NAME'].'">請點此登入</a>');
        sl_errmsg('抱歉！您無權限使用油品總部系統，油品人員請貼報修處理，其餘人員如有疑問請洽總公司-油品特助 分機815...<a href="http://'.$_SERVER['SERVER_NAME'].'">請點此登入</a>');
      }
    }else{
      sl_errmsg('抱歉！您尚未登入，或權限無法使用此系統...<a href="http://'.$_SERVER['SERVER_NAME'].'">請點此登入</a>');
    }
    echo '<br>';
    echo '<br>';
    echo '<br>';
    echo '<br>';
    echo '<br>';
    //include_once("/home/sl/public_html/sl_footer.inc.php");
    exit;
  }
  return;
}
// **************************************************************************
//  函數名稱: sl_chk_ct()
//  函數功能: 檢查系統是否可以執行
//  使用方式: sl_chk_ct($f_var)
//  程式設計: Tony
//  設計日期: 2007.07.04
// **************************************************************************
function sl_chk_ct($f_var) {
  //echo  $f_var['ap_id'];
  Global $_SESSION;
  global $mlogin; // 登入頁面

  if(NULL<>$f_var['ap_id']) {
     sl_open('sl');
     $query2       = "select *
                             from ct
                             where d_date='0000-00-00 00:00:00' and empno='{$_SESSION["login_empno"]}' and ap_id='{$f_var['ap_id']}'
                             order by empno
                     ";

     //echo $query2;
     $row2 = mysql_fetch_array(mysql_query($query2));

     $vlogin_mode = $row2["mode"];
     $_SESSION["login_mode"] = $row2["mode"];
  }
  else {
     $vlogin_mode  = $_SESSION["login_mode"]; // 權限
  }
  //echo $vlogin_mode.'-----';
  if($vlogin_mode!='1'&&$vlogin_mode!='2'&&$vlogin_mode!='3'&&$vlogin_mode!='4'&&$vlogin_mode!='5'&&$vlogin_mode!='6') {
    echo '<br>';
    echo '<br>';
    echo '<br>';
    echo '<br>';
    echo '<br>';
    sl_errmsg('抱歉！您尚未登入，或權限無法使用此系統...<a href="http://'.$_SERVER['SERVER_NAME'].'">請點此登入</a>');
    echo '<br>';
    echo '<br>';
    echo '<br>';
    echo '<br>';
    echo '<br>';
    include_once("sl_footer.inc.php");
    exit;
  }
  return;
}
// **************************************************************************
//  函數名稱: u_showdate()
//  函數功能: 秀日期 (年月日yyyy.mm.dd 或 yy.mm.dd)
//  使用方式: u_showdate($日期,$分隔格式<'.'、'/'、'-'>)
//  程式設計: Tony
//  設計日期: 92.02.17
// **************************************************************************
function u_showdate($vdate,$vstyle='.') { // $vstyle='.' = $vstyle 沒有傳遞參數時的預設值
  $vokdate = ''; // 回傳日期變數
  $vdatelen = strlen(trim($vdate)); // 日期字串長度
  switch ($vdatelen) {
    case 0: // empty
    $vokdate = '';
    break ;
    case 4: // yymm or mmdd
    $vokdate = substr($vdate,0,2).$vstyle.substr($vdate,2,2);
    break ;
    case 5: // yyymm
    $vokdate = substr($vdate,0,3).$vstyle.substr($vdate,3,2);
    break ;
    case 6: // yymmdd
    $vokdate = substr($vdate,0,2).$vstyle.substr($vdate,2,2).$vstyle.substr($vdate,4,2);
    break ;
    case 7: // yyymmdd
    $vokdate = substr($vdate,0,3).$vstyle.substr($vdate,3,2).$vstyle.substr($vdate,5,2);
    break ;
    case 8: // yyyymmdd
    $vokdate = substr($vdate,0,4).$vstyle.substr($vdate,4,2).$vstyle.substr($vdate,6,2);
    break ;
    default:
    $vokdate = '????';
    break ;
  }
  return($vokdate);
}
// **************************************************************************
//  函數名稱: u_title()
//  函數功能: 秀畫面代號與名稱
//  使用方式: u_title($畫面抬頭,$字型顏色,$背景顏色)
//  程式設計: Tony
//  設計日期: 92.02.13
// **************************************************************************
function u_title($vstr,$vfontcolor,$vgbcolor) {
  $vtoday    = date("Y.m.d");
  // 0123456789012345678
  //$vfilename = $GLOBALS["PHP_SELF"]; // 目前檔案名稱 (~/xxx/xxxx/xxxx.php)
  //$vfilelen  = strlen($vfilename);   // 檔案字串長度
  //$vstrrpos  = strrpos($vfilename,'/'); // '/' 最後出現位置 以上範例為 11
  //$vprocname = substr($vfilename,$vstrrpos+1,($vfilelen-$vstrrpos-5)); // -5 不秀出 .php
  $vprocname = u_showproc();
     ?>
       <table border="0" cellpadding="0" cellspacing="0" align="center" width="100%">
         <tr bgColor="#<? echo $vgbcolor;?>">
           <td width="30%" align="left">  <b><font color="#<? echo $vfontcolor;?>">畫面:&nbsp;<? echo $vprocname; ?></b></font></td>
           <td width="40%" align="center"><b><font color="#<? echo $vfontcolor;?>"><? echo $vstr; ?></b></font></td>
           <td width="30%" align="right"> <b><font color="#<? echo $vfontcolor;?>">日期:&nbsp;<? echo $vtoday; ?></b></font></td>
         </tr>
       </table>
     <?
     return;
}
// **************************************************************************
//  函數名稱: u_msg()
//  函數功能: 秀訊息
//  使用方式: u_msg($字型大小,$位置,$字型顏色,$背景顏色,$訊息)
//  程式設計: Tony
//  設計日期: 92.02.13
// **************************************************************************
function u_msg($vfontsize,$vtalign,$vcolor,$vbgcolor,$vmsg) {
  if(empty($vtalign)) {
    $vtalign = 'left'; // 預設置左
  }
     ?>
       <table border="0" cellspacing="0" cellpadding="0" width="100%">
         <tr bgColor="<? echo $vbgcolor;?>">
           <td width="100%" align="<?echo $vtalign;?>"><font size="<? echo $vfontsize;?>" color="#<? echo $vcolor;?>"><? echo $vmsg;?></font></td>
         </tr>
       </table>
     <?
     return;
}
// **************************************************************************
//  函數名稱: u_errmsg()
//  函數功能: 秀訊息
//  使用方式: u_errmsg($字型大小,$位置,$字型顏色,$背景顏色,$表格外框顏色,$訊息)
//            u_errmsg('2','left','000000','66FF00','FF9966','資料儲存成功!!');
//  程式設計: Tony
//  設計日期: 92.02.13
// **************************************************************************
function u_errmsg($vfontsize=2,$vtalign,$vcolor,$vbgcolor,$vbordercolor='FF9966',$vmsg) {
  if(empty($vtalign)) {
    $vtalign = 'left'; // 預設置左
  }
     ?>
       <table width="60%" border="1" cellpadding="3" cellspacing="0" bordercolor="<?=$vbordercolor;?>" class="font" style="border-collapse: collapse">
         <tr bgColor="<? echo $vbgcolor;?>">
           <td align="<?echo $vtalign;?>"><font size="<? echo $vfontsize;?>" color="#<? echo $vcolor;?>"><? echo $vmsg;?></font></td>
         </tr>
       </table>
       <br>
     <?
     return;
}
// **************************************************************************
//  函數名稱: u_bot()
//  函數功能: 網頁表尾
//  使用方式: u_bot()
//  程式設計: Tony
//  設計日期: 92.02.13
// **************************************************************************
function u_bot() {
  global $mboturl;
  global $mbottitle;
     ?>
       <hr>
       <center>
         <font size="2">
           [ <A HREF="http://<? echo $mboturl;?>" target="_top"><? echo $mbottitle; ?></A> ]
         </font>
       </center>
       </body></html>
     <?
     return;
}
// **************************************************************************
//  函數名稱: u_showproc()
//  函數功能: 秀程式名稱
//  使用方式: u_showproc()
//  程式設計: Tony
//  設計日期: 92.02.13
// **************************************************************************
function u_showproc() {
  //$vtoday    = date("Y.m.d");
  // 0123456789012345678
  //$vfilename = $GLOBALS["PHP_SELF"]; // 目前檔案名稱 (~/xxx/xxxx/xxxx.php) php.ini register_globals = On 才可以使用
  $vfilename = $_SERVER["PHP_SELF"];; // 目前檔案名稱 (~/xxx/xxxx/xxxx.php)
  $vfilelen  = strlen($vfilename);   // 檔案字串長度
  $vstrrpos  = strrpos($vfilename,'/'); // '/' 最後出現位置 以上範例為 11
  $vprocname = substr($vfilename,$vstrrpos+1,($vfilelen-$vstrrpos-5)); // -5 不秀出 .php
  if ($_SERVER['PHP_SELF'] == '/~gas/main.php') {
    $vprocname = 'gas';
  }
  return($vprocname);
}
// **************************************************************************
//  函數名稱: u_sel()
//  函數功能: 新增、修改、刪除、查詢、列印點選項目
//  使用方式: u_sel($程式名稱,$位置,$可用選項,$不可使用的字型顏色)
//  程式設計: Tony
//  設計日期: 92.07.23
// **************************************************************************
function u_sel($vphpname,$vtalign,$vasel,$vdisfcolor,$vpage) {

  global $mbmaxline; // 每頁最大筆數
  global $msnum;    // 起始筆數
  global $menum;    // 結束筆數
  global $msel;     // 目前執行狀況
  global $morder;   // 索引

  if(empty($vpage)) {
    $vpage = 1;
  }

  //$msnum = $menum;
  $menum = $mbmaxline*$vpage;
  $msnum = $menum-$mbmaxline;
  $vppage = $vpage-1; // 上一頁
  $vnpage = $vpage+1; // 下一頁


  //global $mempname;
  //global $mlogintime;
     ?>
         <table border="0" cellspacing="3" cellpadding="3" width="100%">
           <tr>
             <td width="100%" align="<?echo $vtalign;?>">
               <font size="2">
     <?
     switch (count($vasel)) {
       case 4:
       if($vasel[0]=='Y') {
               ?>
                 [<a href='<?echo $vphpname;?>?msel=1&morder=<? echo $morder;?>&f_page=<?echo $vpage;?>'>新增</a>]
               <?
       }
       else {
               ?>
                 [<font color='<?echo $vdisfcolor;?>'>新增</font>]
               <?
       }

       if($vasel[1]=='Y') {
               ?>
                 [<a href='<?echo $vphpname;?>?msel=4&morder=<? echo $morder;?>&f_page=<?echo $vpage;?>'>瀏覽</a>]
               <?
       }
       else {
               ?>
                 [<font color='<?echo $vdisfcolor;?>'>瀏覽</font>]
               <?
       }

       if($vasel[2]=='Y') {
               ?>
                 [<a href='<?echo $vphpname;?>?msel=5&morder=<? echo $morder;?>&f_page=<?echo $vpage;?>'>查詢</a>]
               <?
       }
       else {
               ?>
                 [<font color='<?echo $vdisfcolor;?>'>查詢</font>]
               <?
       }
       if($vasel[3]=='Y') {
               ?>
                 [<a href='<?echo $vphpname;?>?msel=6&morder=<? echo $morder;?>&f_page=<?echo $vpage;?>'>列印</a>]
               <?
       }
       else {
               ?>
                 [<font color='<?echo $vdisfcolor;?>'>列印</font>]
               <?
       }
       break ;
       default:
             ?>
               <font color='<?echo $vdisfcolor;?>'>
                 [新增]
                 [瀏覽]
                 [查詢]
                 [列印]
               </font>
             <?
             break ;
     }
     ?>
          [<A href="<?echo $GLOBALS['mmenu'];?>">回主選單</a>]
             </td>
             </font>
           </tr>
           <tr>
              <td width="100%" align="<?echo $vtalign;?>">
                 <font size="2">
                    <?
                    if(substr($msel,0,1)=='4') {
                      $vprocname = u_showproc(); // 程式名稱
                      switch ($vprocname) {
                        case 'xxxxxxxxxxx':
                                 ?>
                                   [<a href='<? echo $vprocname ;?>.php?msel=4&morder=<? echo $morder;?>&f_page=1'>首筆</a>]
                                   [<a href='<? echo $vprocname ;?>.php?msel=4&morder=<? echo $morder;?>&f_page=<? echo $vppage;?>'>上頁</a>]
                                   [<a href='<? echo $vprocname ;?>.php?msel=4&morder=<? echo $morder;?>&f_page=<? echo $vnpage;?>'>下頁</a>]
                                 <?
                                 break ;
                                 default:
                                 ?>
                                   [<a href='<? echo $vprocname ;?>.php?msel=4&f_page=1'>首筆</a>]
                                   [<a href='<? echo $vprocname ;?>.php?msel=4&f_page=<? echo $vppage;?>'>上頁</a>]
                                   [<a href='<? echo $vprocname ;?>.php?msel=4&f_page=<? echo $vnpage;?>'>下頁</a>]
                                 <?
                                 break ;
                      }
                    }
                    else {
                        ?>
                          <font color='<?echo $vdisfcolor;?>'>
                            [首筆]
                            [上頁]
                            [下頁]
                          </font>
                        <?
                    }
                    if($vpage>=10) {
                      $vspace = '';
                    }
                    else {
                      $vspace = '&nbsp;&nbsp;';
                    }
                    ?>
                    [頁次：<? echo $vspace;?><font color='009900'><? echo $vpage;?></font>]
                 </font>
              </td>
           </tr>
         </table>
     <?
}
return;
// **************************************************************************
//  函數名稱: u_showtime()
//  函數功能: 秀時間 (時分hh:mm)
//  使用方式: u_showdate($時間,$分隔格式<':'、'-'>)
//  程式設計: Tony
//  設計日期: 92.07.23
// **************************************************************************
function u_showtime($vtime,$vstyle=':') { // $vstyle=':' = $vstyle 沒有傳遞參數時的預設值
  $voktime = ''; // 回傳時間變數
  $vtimelen = strlen(trim($vtime)); // 時間字串長度
  switch ($vtimelen) {
    case 0: // empty
    $voktime = '';
    break ;
    case 4: // hh:mm
    $voktime = substr($vtime,0,2).$vstyle.substr($vtime,2,2);
    break ;
    case 6: // hh:mm:ss
    $voktime = substr($vtime,0,2).$vstyle.substr($vtime,2,2).$vstyle.substr($vtime,4,2);
    break ;
    default:
    $voktime = '????';
    break ;
  }
  return($voktime);
}
// **************************************************************************
//  函數名稱: u_chkid()
//  函數功能: 身分證字號檢查
//  使用方式: u_chkid($vid)
//  程式設計: Tony
//  設計日期: 92.10.30
//
//  upd by 2012.10.08 佳玟
//  增加函數功能: 身分證字號檢查(外籍人士)
//            範例 :
//            GB20004930
//              1612000493  0                     --> 步驟一
//            * 1987654321                        --> 步驟二
//            -------------
//              1484000283 = 30 -> 0              --> 步驟三
//                           0 比對第10碼檢查碼   --> 步驟四
//
//            GB00003982
//              1610000398  2
//            * 1987654321
//            -------------
//              1480000988 = 38 -> 8
//                           10 - 8 = 2
// **************************************************************************
function u_chkid($vid) {
  $vchk_ok = 'Y';
  $vid1 = $vid2 = $vid3 = $vid4 = $vid5 = $vid6 = $vid7 = $vid8 = $vid9 = $vid10 = '';
  if(empty($vid)||strlen($vid)<>10) {
    $vchk_ok = 'N';
  }
  else {
    $vid1  = ucfirst(substr($vid,0,1)); // 第 1碼
    $vid2  = substr($vid,1,1); // 第 2碼
    $vid3  = substr($vid,2,1); // 第 3碼
    $vid4  = substr($vid,3,1); // 第 4碼
    $vid5  = substr($vid,4,1); // 第 5碼
    $vid6  = substr($vid,5,1); // 第 6碼
    $vid7  = substr($vid,6,1); // 第 7碼
    $vid8  = substr($vid,7,1); // 第 8碼
    $vid9  = substr($vid,8,1); // 第 9碼
    $vid10 = substr($vid,9,1); // 第10碼
  }
  if( !is_numeric($vid2) ){  //add by 佳玟 2012.10.08 (報18375)外籍人士身分證判斷
          // 字母對應特定數
          $ar_abc = array('10'=>'A','11'=>'B','12'=>'C','13'=>'D','14'=>'E','15'=>'F','16'=>'G','17'=>'H','34'=>'I','18'=>'J',
                          '19'=>'K','20'=>'L','21'=>'M','22'=>'N','35'=>'O','23'=>'P','24'=>'Q','25'=>'R','26'=>'S','27'=>'T',
                          '28'=>'U','29'=>'V','32'=>'W','30'=>'X','31'=>'Y','33'=>'Z');

          // 步驟一 >> 將1~10碼分別放置於變數中
          $vid1  = array_search(ucfirst(substr($vid,0,1)),$ar_abc);  //ucfirst(substr($vid,0,1)); // 第 1碼
          $vid2  = substr(array_search(ucfirst(substr($vid,1,1)),$ar_abc),1,1);  //ucfirst(substr($vid,1,1)); // 第 2碼

          // 步驟二 >> 第1~9碼分別乘以特定數 1987654321
          $vidchk[0]  = substr($vid1,0,1);
          $vidchk[1]  = substr($vid1,1,1)*9;
          $vidchk[2]  = $vid2*8;
          $vidchk[3]  = $vid3*7;
          $vidchk[4]  = $vid4*6;
          $vidchk[5]  = $vid5*5;
          $vidchk[6]  = $vid6*4;
          $vidchk[7]  = $vid7*3;
          $vidchk[8]  = $vid8*2;
          $vidchk[9]  = $vid9*1;
          $vidchk[10] = $vid10;
          //print_r($vidchk);
          // 步驟三 >> 將1~9碼相乘後個位數相加總和
          $vt = 0;
          for( $i=0;$i<(count($vidchk)-1);$i++){
            $vn = $vidchk[$i];
            if( $vidchk[$i]>=10 ){ //雙位數
              $vn = substr($vidchk[$i],1,1);
            }
            $vt += $vn;
          }
          // 相加後取尾數
          if( $vt>=10 ){
            $vt = substr($vt,1,1);
          }
          // 檢查號碼＝10－相乘後個位數相加總和之尾數
          if( $vt<>0 ){
            $vt = 10 - $vt;
          }
          // 步驟四 >> 比對是否等於檢查碼
          if( $vt!=$vidchk[10] ){
            $vchk_ok = 'N';
          }
  }else{  //本國人士身份證
          switch ($vid1) { // 身份証字號第一碼
            case "A": //
            $vidnum1 = '10';
            break ;
            case "B": //
            $vidnum1 = '11';
            break ;
            case "C": //
            $vidnum1 = '12';
            break ;
            case "D": //
            $vidnum1 = '13';
            break ;
            case "E": //
            $vidnum1 = '14';
            break ;
            case "F": //
            $vidnum1 = '15';
            break ;
            case "G": //
            $vidnum1 = '16';
            break ;
            case "H": //
            $vidnum1 = '17';
            break ;
            case "I": //
            $vidnum1 = '34';
            break ;
            case "J": //
            $vidnum1 = '18';
            break ;
            case "K": //
            $vidnum1 = '19';
            break ;
            case "L": //
            $vidnum1 = '20';
            break ;
            case "M": //
            $vidnum1 = '21';
            break ;
            case "N": //
            $vidnum1 = '22';
            break ;
            case "O": //
            $vidnum1 = '35';
            break ;
            case "P": //
            $vidnum1 = '23';
            break ;
            case "Q": //
            $vidnum1 = '24';
            break ;
            case "R": //
            $vidnum1 = '25';
            break ;
            case "S": //
            $vidnum1 = '26';
            break ;
            case "T": //
            $vidnum1 = '27';
            break ;
            case "U": //
            $vidnum1 = '28';
            break ;
            case "V": //
            $vidnum1 = '29';
            break ;
            case "W": //
            $vidnum1 = '32';
            break ;
            case "X": //
            $vidnum1 = '30';
            break ;
            case "Y": //
            $vidnum1 = '31';
            break ;
            case "Z": //
            $vidnum1 = '33';
            break ;
            default:
            break ;
          }
          $vidchk0  = substr($vidnum1,0,1);
          $vidchk1  = substr($vidnum1,1,1)*9;
          $vidchk2  = $vid2*8;
          $vidchk3  = $vid3*7;
          $vidchk4  = $vid4*6;
          $vidchk5  = $vid5*5;
          $vidchk6  = $vid6*4;
          $vidchk7  = $vid7*3;
          $vidchk8  = $vid8*2;
          $vidchk9  = $vid9*1;
          $vidchk10 = $vid10;

          $vidchknum = $vidchk0+$vidchk1+$vidchk2+$vidchk3+$vidchk4+$vidchk5+$vidchk6+$vidchk7+$vidchk8+$vidchk9+$vidchk10;
          if($vidchknum%10<>0) { // 有餘數，錯誤
            $vchk_ok = 'N';
          }
        }
        return($vchk_ok);
}
// **************************************************************************
//  函數名稱: u_checkID()
//  函數功能: 統編檢查
//  使用方式: u_checkID($vid)
//  程式設計: 周小樵
//  設計日期: 2014.12.11
// **************************************************************************
function u_checkID($vid){
  $tbNum = array(1,2,1,2,1,2,4,1);
   if(strlen($vid)!=8 || !eregi("^[0-9*]{8}",$vid)){//eregi正規化8碼都必須為數字
     $vchk_ok = 'N';
     return $vchk_ok;
   }
   $intSum = 0;
   for($i = 0; $i < count($tbNum); $i++){
     $intMultiply=substr($vid,$i,1)*$tbNum[$i];
     $intAddition=(floor($intMultiply / 10) + ($intMultiply % 10));
     $intSum+=$intAddition;
   }
   if(($intSum % 10 == 0 ) || ($intSum%10==9 && substr($vid,6,1)==7)){
     $vchk_ok = 'Y';
   }else{
     $vchk_ok = 'N';
   }
        return($vchk_ok);
}
// **************************************************************************
//  函數名稱: u_chkemail()
//  函數功能: 電子郵件檢查
//  使用方式: u_chkemail($vmail)
//  程式設計: Tony
//  設計日期: 92.10.30
// **************************************************************************
function u_chkemail($vmail) {
  $vchk_ok = 'Y';
  if(empty($vmail)||strlen($vmail)<7||strpos($vmail,'@')===false||strpos($vmail,'.')===false) {
    $vchk_ok = 'N';
  }
  return($vchk_ok);
}
// **************************************************************************
//  函數名稱: u_bad_login()
//  函數功能: 登入錯誤
//  使用方式: u_bad_login()
//  程式設計: Tony
//  設計日期: 93.02.12
// **************************************************************************
function u_bad_login() {
    ?>
      <script language="JavaScript">
      //window.location.replace('index.php'); // 回登入頁面
      alert('登入錯誤!!請重新登入..');
      //top.location.href='index.php'; // 回到登入畫面
      top.location.replace(''); // 回登入頁面
      </script>
    <?
}

// **************************************************************************
//  函數名稱: u_que_form()
//  函數功能: 查詢畫面
//  使用方式: u_que_form($程式名稱,$頁次)
//  程式設計: Tony
//  設計日期: 93.02.04
// **************************************************************************
function u_que_form($vproc,$vpage) {
     ?>
       <table border="0" width="100%">
          <tr>
              <td width="100%" align="left"><font color="#0000FF">選擇輸入您欲搜尋的關鍵字:</font></td>
          </tr>
       </table>
       <table border="0" width="100%">
         <form method="POST" action="<? echo $vproc; ?>.php?msel=51&f_page=<? echo $vpage ;?>">
           <tr>
             <td width="15%">查詢字串：</td>
             <td width="85%"><input type="text" name="f_quetext" size="50"><font color="#0000FF" size="2">&nbsp;(空白=查詢全部)</font></td>
           </tr>
           <tr>
             <td width="15%" align="center"></td>
             <td width="85%"><input type="submit" value="確定查詢" name="f_ok"><input type="reset" value="重新輸入" name="f_reset"></td>
           </tr>
         </form>
       </table>
    <?
}

// **************************************************************************
//  函數名稱: u_qud()
//  函數功能: 點選 Q E D (新增、修改、刪除)
//  使用方式: u_qud($序,$程式名稱,$欄位名稱,$欄位值,$頁次)
//  程式設計: Tony
//  設計日期: 2004.03.26
// **************************************************************************
function u_qed($vnum,$vprocname,$vfield_name,$vmfield_name,$vpage) {
  echo "<a href='".$vprocname."?msel=41&".$vfield_name."=".$vmfield_name."&f_page=".$vpage."'>";
  if($vnum%2==0) {
    echo '<font color="#009900">';
  }
  echo " Q";
  echo "</a>";
  echo " ";
  if($vnum%2==0) {
    echo '</font>';
  }
  echo "<a href='".$vprocname."?msel=21&".$vfield_name."=".$vmfield_name."&f_page=".$vpage."'>";
  if($vnum%2==0) {
    echo '<font color="#009900">';
  }
  echo " E";
  echo "</a>";
  echo " ";
  if($vnum%2==0) {
    echo '</font>';
  }
  echo "<a href='".$vprocname."?msel=31&".$vfield_name."=".$vmfield_name."&f_page=".$vpage."'>";
  if($vnum%2==0) {
    echo '<font color="#009900">';
  }
  echo " D";
  echo "</a>";
  echo " ";
  return;
}
// **************************************************************************
//  函數名稱: u_chk_badword()
//  函數功能: 髒字檢查
//  使用方式: u_chk_badword($vchkfield)
//  程式設計: Tony
//  設計日期: 2004.04.05
// **************************************************************************
function u_chk_badword($vchkfield,$vsel) {
  global $mdat1;    // 資料庫
  global $mtable24; // 留言版設定-髒字

  u_open($mdat1); // 開啟資料庫
  // 髒字過濾
  $mchk_ok = 'Y'; // 是否正確，可以儲存
  $query1       = "select zl024_1,zl024_2,zl024_3,zl024_4,zl024_5,zl024_6,zl024_9,zl024_10
                             from $mtable24
                             where zl024_1='$vsel' and d_date='0000-00-00 00:00:00'
                     ";
  $result1      = mysql_query($query1);
  $row1 = mysql_fetch_row($result1);
  list($mzl024_1,$mzl024_2,$mzl024_3,$mzl024_4,$mzl024_5,$mzl024_6,$mzl024_9,$mzl024_10) = $row1;
  $abadword     = explode(',',$mzl024_9); //字串切割 鳥,屌......用 ',' 區分 $abadword[0] = '鳥' ; $abadword[1] = '屌'
  $abadwordlen  = count($abadword); // 髒字字數
  $abadword1    = explode(',',$mzl024_10); //字串切割
  $abadword1len = count($abadword1); // 髒字字數
  //echo 'mzl021_9:'.$mzl024_9.'<br>';
  //echo 'mzl021_10:'.$mzl024_10.'<br>';
  //echo 'f_zl021_9:'.$f_zl021_9.'<br>';
  for($ii=0;$ii<=$abadwordlen;$ii++) {
    if($mchk_ok=='N'){  // 不可以儲存
      break;
    }

    $mbadpos1 = strpos($vchkfield,$abadword[$ii]); // 是否有出現在髒字過濾中
    //echo 'mbadpos1:'.$mbadpos1.'<br>';
    //echo 'abadword[ii]:'.$abadword[$ii].'<br>';
    if($mbadpos1===false) { // 沒有出現，可以通過
      // 繼續搜尋下一個
    }
    else {
      for($jj=0;$jj<=$abadword1len;$jj++) {
        $mbadpos2 = strpos($vchkfield,$abadword1[$jj]); // 是否有出現在可通過的髒字..
        //echo 'mbadpos2:'.$mbadpos1.'<br>';
        //echo 'abadword[jj]:'.$abadword1[$jj].'<br>';
        if($mbadpos2===false) { // 沒有出現，不可以通過
          $mchk_ok = 'N'; // 不可以儲存
        }
        else {
          $mchk_ok = 'Y'; // 可以儲存
          break;
        }

      }
    }
  }
  return($mchk_ok);
}
// **************************************************************************
//  函數名稱: u_add_select()
//  函數功能: 增加 select 的資料
//  使用方式: u_add_select('xxx.txt')
//  程式設計: Tony
//  設計日期: 2004.04.14
// **************************************************************************
function u_add_select($vfile) {
  $vopenfile = file($vfile);
  foreach($vopenfile as $vlist) { // 逐行讀出
    $vdatalen = strlen(trim($vlist));     // 資料長度
    $vdatapos = strpos(trim($vlist),";"); // ; 號位置
        ?>
          <option value="<? echo trim(substr(trim($vlist),0,$vdatapos));?>">
             <? echo trim(substr(trim($vlist),$vdatapos+1,$vdatalen-$vdatapos));?>
          </option>
        <?
  }
}
// **************************************************************************
//  函數名稱: u_add_select1()
//  函數功能: 增加 select 的資料，後台使用
//  使用方式: u_add_select('xxx.txt','欄位名稱')
//  程式設計: Tony
//  設計日期: 2004.04.14
// **************************************************************************
function u_add_select1($vfile,$vfieldname) {
  global $aadd_f_select;
  $vopenfile = file($vfile);
  foreach($vopenfile as $vlist) { // 逐行讀出
    $vdatalen = strlen(trim($vlist));     // 資料長度
    $vdatapos = strpos(trim($vlist),";"); // ; 號位置
    $aadd_f_select[$vfieldname]['value'][] = trim(substr(trim($vlist),0,$vdatapos));
    $aadd_f_select[$vfieldname]['show'][]  = trim(substr(trim($vlist),$vdatapos+1,$vdatalen-$vdatapos));
  }
}
// **************************************************************************
//  函數名稱: u_add_select2()
//  函數功能: 增加 select 的資料-TemplatePower 使用
//  使用方式: list($adept_value,$adept_show,$mdept_qty) = u_add_select2('xxx.txt')
//  程式設計: Tony
//  設計日期: 2004.04.14
// **************************************************************************
function u_add_select2($vfile) {
  $vopenfile = file($vfile);
  if( !empty($vopenfile) ){
    foreach($vopenfile as $key => $vlist) { // 逐行讀出
      $vdatalen = strlen(trim($vlist));     // 資料長度
      $vdatapos = strpos(trim($vlist),";"); // ; 號位置
      $avalue[] = trim(substr(trim($vlist),0,$vdatapos));
      $ashow[]  = trim(substr(trim($vlist),$vdatapos+1,$vdatalen-$vdatapos));
    }
  }
  else{
    sl_errmsg("無法開啟{$vfile}");
  }

  return array($avalue,$ashow,count($avalue));
}

// **************************************************************************
//  函數名稱: sl_add_select3()
//  函數功能: 增加 select 的資料- 讀取 mysql 資料
//  使用方式:
//            $mfd_show  = array('fy01','fy02');
//            $mfd_value = array('fy01');
//            list($f_var['pp12_show'],$f_var['pp12_value']) = sl_add_select3($f_var['mdb'],$f_var['mtable']['factory'],'1=1','fy01',$mfd_show,$mfd_value);
//  程式設計: Tony
//  設計日期: 2004.04.14
// **************************************************************************
function sl_add_select3($vdb,$vtable,$vwhere,$vorder,$vfd_show,$vfd_value) {
   sl_open($vdb); // 開啟資料庫
   $query1  = "select *
                      from $vtable
                      where $vwhere
                      order by $vorder
              ";
  //   echo $query1."<BR>";

   $result1  = mysql_query($query1);
   $ashow[]  = '--請選擇--';
   $avalue[] = '--';
   while ($row1 = mysql_fetch_array($result1)) {
          $vvalue = '';

          $vshow     = '';
          $mshow_cnt = count($vfd_show);
          for($i=0;$i<$mshow_cnt;$i++) {
              $vshow .= $row1[ $vfd_show[$i] ];
               //echo $vshow."<BR>";
              if($mshow_cnt-1>$i) {
                 $vshow .= '-';
              }
          }

          $vvalue     = '';
          $mvalue_cnt = count($vfd_value);
          for($i=0;$i<$mvalue_cnt;$i++) {
              $vvalue .= $row1[ $vfd_value[$i] ];
              if($mvalue_cnt-1>$i) {
                 $vvalue .= '-';
              }
          }
          $ashow[]  = $vshow;
          $avalue[] = $vvalue;
          //echo $vvalue.'<br>';
   }
   mysql_close();
   return array($ashow,$avalue);
}


// **************************************************************************
//  函數名稱: sl_add_select4()
//  函數功能: 增加 select 的資料- 讀取 mssql-flow 資料
//  使用方式:
//            $mfd_show  = array('fy01','fy02');
//            $mfd_value = array('fy01');
//            list($f_var['pp12_show'],$f_var['pp12_value']) = sl_add_select3($f_var['mdb'],$f_var['mtable']['factory'],'1=1','fy01',$mfd_show,$mfd_value);
//  程式設計: Mimi
//  設計日期: 2008.07.03
// **************************************************************************
function sl_add_select4($vdb,$vtable,$vwhere,$vorder,$vfd_show,$vfd_value) {
   u_openef2k($vdb); // 開啟資料庫
   $query1  = "select *
                      from $vtable
                      where $vwhere
                      order by $vorder
              ";
     //echo $query1."<BR>";

   $result1  = mssql_query($query1);
   $ashow[]  = '--請選擇--';
   $avalue[] = '--';
   while ($row1 = mssql_fetch_array($result1)) {
          $vvalue = '';

          $vshow     = '';
          $mshow_cnt = count($vfd_show);
          for($i=0;$i<$mshow_cnt;$i++) {
              $vshow .= $row1[ $vfd_show[$i] ];
               //echo $vshow."<BR>";
              if($mshow_cnt-1>$i) {
                 $vshow .= '-';
              }
          }

          $vvalue     = '';
          $mvalue_cnt = count($vfd_value);
          for($i=0;$i<$mvalue_cnt;$i++) {
              $vvalue .= $row1[ $vfd_value[$i] ];
              if($mvalue_cnt-1>$i) {
                 $vvalue .= '-';
              }
          }
          $ashow[]  = $vshow;
          $avalue[] = $vvalue;
          //echo $vvalue.'<br>';
   }
   mssql_close();
   return array($ashow,$avalue);
}

// **************************************************************************
//  函數名稱: sl_add_select5()
//  函數功能: 增加 select 的資料- 讀取 mssql-flow 資料
//  使用方式:
//            $mfd_show  = array('fy01','fy02');
//            $mfd_value = array('fy01');
//            list($f_var['pp12_show'],$f_var['pp12_value']) = sl_add_select3($f_var['mdb'],$f_var['mtable']['factory'],'1=1','fy01',$mfd_show,$mfd_value);
//  程式設計: Mimi
//  設計日期: 2009.08.06
// **************************************************************************
function sl_add_select5($vdb,$vtable,$vwhere,$vorder,$vfd_show,$vfd_value) {
   sl_openrtm($vdb); // 開啟資料庫
   $query1  = "select *
                      from $vtable
                      where $vwhere
                      order by $vorder
              ";
     //echo $query1."<BR>";

   $result1  = mysql_query($query1);
   $ashow[]  = '--請選擇--';
   $avalue[] = '--';
   while ($row1 = mysql_fetch_array($result1)) {
          $vvalue = '';

          $vshow     = '';
          $mshow_cnt = count($vfd_show);
          for($i=0;$i<$mshow_cnt;$i++) {
              $vshow .= $row1[ $vfd_show[$i] ];
               //echo $vshow."<BR>";
              if($mshow_cnt-1>$i) {
                 $vshow .= '-';
              }
          }

          $vvalue     = '';
          $mvalue_cnt = count($vfd_value);
          for($i=0;$i<$mvalue_cnt;$i++) {
              $vvalue .= $row1[ $vfd_value[$i] ];
              if($mvalue_cnt-1>$i) {
                 $vvalue .= '-';
              }
          }
          $ashow[]  = $vshow;
          $avalue[] = $vvalue;
          //echo $vvalue.'<br>';
   }
   mysql_close();
   return array($ashow,$avalue);
}
// **************************************************************************
//  函數名稱: u_chg_num()
//  函數功能: 阿拉伯數字轉換國字
//  使用方式: u_chg_num($數字,$類型),如果$vkind=2,轉換大寫國字
//  程式設計: Tony
//  設計日期: 2004.04.19
//  修改程式: Mimi
//  設計日期: 2009.01.22
// **************************************************************************
function u_chg_num($vnum,$vkind) {
  $vrtn_str = '';
  $vkind = iif($vkind=='','1',$vkind);
  if($vkind=='2'){
    switch ($vnum) {
      case 0:
      $vrtn_str = '零';
      break;
      case 1:
      $vrtn_str = '壹';
      break;
      case 2:
      $vrtn_str = '貳';
      break;
      case 3:
      $vrtn_str = '參';
      break;
      case 4:
      $vrtn_str = '肆';
      break;
      case 5:
      $vrtn_str = '伍';
      break;
      case 6:
      $vrtn_str = '陸';
      break;
      case 7:
      $vrtn_str = '柒';
      break;
      case 8:
      $vrtn_str = '捌';
      break;
      case 9:
      $vrtn_str = '玖';
      break;
    }
  }
  else{
    switch ($vnum) {
      case 0:
      $vrtn_str = '○';
      break;
      case 1:
      $vrtn_str = '一';
      break;
      case 2:
      $vrtn_str = '二';
      break;
      case 3:
      $vrtn_str = '三';
      break;
      case 4:
      $vrtn_str = '四';
      break;
      case 5:
      $vrtn_str = '五';
      break;
      case 6:
      $vrtn_str = '六';
      break;
      case 7:
      $vrtn_str = '七';
      break;
      case 8:
      $vrtn_str = '八';
      break;
      case 9:
      $vrtn_str = '九';
      break;
      case 10:
      $vrtn_str = '十';
      break;
      case 11:
      $vrtn_str = '十一';
      break;
      case 12:
      $vrtn_str = '十二';
      break;
    }
  }
  return($vrtn_str);
}
// **************************************************************************
//  函數名稱: u_upload()
//  函數功能: 檔案上傳
//  使用方式: u_upload($vsfile,$vtfile,$vtfsize,$vtftype,$vfpath)
//  程式設計: Tony
//  設計日期: 2004.05.28
// **************************************************************************
function u_upload($vsfile,$vtfile,$vtfsize,$vtftype,$vfpath) {
  //echo $vsfile.','.$vsfile.','.$vtfile.','.$vtfsize.','.$vtftype.','.$vfpath;exit;
  $mstrrpos = strrpos($vtfile,".");
  if(!empty($vtfile)) {
    $msubname = substr($vtfile,$mstrrpos+1,3);

    if($msubname=="jpg"||$msubname=="JPG"||$msubname=="gif"||$msubname=="GIF") {
      $vtcpfile = $vtfile; // 儲存用
            ?>
              <script language="javascript">
              //fshowmsg.innerHTML='檔案上傳中...請稍候...';
              </script>
            <?
            //if(copy( $vsfile, "$vfpath".$vtfile)) {
            if(copy( $vsfile, $vfpath.$vtfile)) {
              // 上傳成功
            }
            else {
              $mchk_err = 'N';
               ?>
                 <script language="javascript">
                 alert("上傳檔案失敗!!請重新上傳檔案...");
                 history.go(-1) // 回上一頁
                 </script>
               <?
            }
    }
    else {
      $mchk_err = 'N';
           ?>
             <script language="javascript">
             alert("檔案格式錯誤!!請按上一頁重新上傳檔案...");
             history.go(-1) // 回上一頁
             </script>
           <?
    }
  }
  //echo $vtcpfile.'up';exit;
  return($vtcpfile);
}

// **************************************************************************
//  函數名稱: u_int()
//  函數功能: 取整數(去掉小數值)
//  使用方式: u_int($數字)
//  程式設計: Tony
//  設計日期: 2004.06.11
// **************************************************************************
function u_int($vint) {
  $vrtn_int = $vint;           // 回傳值
  $avint = explode('.',$vint); // 以 . 切割資料，去除小數點
  if(count($avint)>0) { // 有小數點
    $vrtn_int = $avint[0];           // 抓整數
  }
  return($vrtn_int);
}

// **************************************************************************
//  函數名稱: u_count_upd()
//  函數功能: 更新計數器
//  使用方式: u_count_upd($vfield_name)
//  程式設計: Tony
//  設計日期: 2004.07.08
// **************************************************************************
function u_count_upd($vfield_name) {
  global $mtable2;

  $vfromip  = $_SERVER["REMOTE_ADDR"]; // 建檔 IP
  $vzc02_where = "zc02_2 = '".$vfield_name."' and d_date='0000-00-00 00:00:00'";

  $query2  = "update $mtable2 set   zc02_3    = (zc02_3+1),
                                       fromip    = '$vfromip'
                                 where $vzc02_where
                ";
  //echo $query2;exit;
  if(!mysql_query($query2)) { // 寫入失敗
        ?>
          <script language="javascript">
          alert("計數器資料寫入失敗!!\n請聯絡管理人員!!")
          </script>
        <?

  }
  return;
}

// **************************************************************************
//  函數名稱: u_count_list()
//  函數功能: 秀出計數器，回傳陣列
//  使用方式: u_count_list($vfield_name)
//  程式設計: Tony
//  設計日期: 2004.07.08
// **************************************************************************
function u_count_list($vfield_name) {
  global $mtable2;

  $vzc02_where = "zc02_2 = '".$vfield_name."' and d_date='0000-00-00 00:00:00'";

  $query2       = "select zc02_1,zc02_2,zc02_3
                             from $mtable2
                             where $vzc02_where
                             order by zc02_1 desc
                     ";
  //echo $query1;exit;

  $result2      = mysql_query($query2);
  $row2 = mysql_fetch_row($result2);
  list($mzc02_1,$mzc02_2,$mzc02_3) = $row2;
  //echo $mzc02_2.'<br>';
  //echo $mzc02_3.'<br>';
  //exit;
  for($ii=0;$ii<strlen($mzc02_3);$ii++) {
    if(substr($mzc02_3,$ii,1)=='0') {
      $azc02_3[]='010.gif';
    }
    else {
      $azc02_3[]='00'.substr($mzc02_3,$ii,1).'.gif';
    }
  }
  //return array($azc02_3);
  return($azc02_3);
}

// **************************************************************************
//  函數名稱: u_upd_log();
//  函數功能: 秀出計數器，回傳陣列
//  使用方式: u_upd_log($vfile_name,$vdata)
//  程式設計: Tony
//  設計日期: 2004.09.30
// **************************************************************************
function u_upd_log($vfile_name,$vdata) {
  $vfileopen = fopen($vfile_name,'a+');
  if(fwrite($vfileopen,$vdata)) { // 將資料寫入
    //u_msg('2','left','000000','66FF00','FF9966',$itm_name.'資料儲存成功!!');
  }
  else {
    //u_msg('2','left','000000','66FF00','FF9966',$itm_name.'資料儲存失敗!!');
  }
  fclose($vfileopen); // 關閉檔案
  return;
}
// **************************************************************************
//  函數名稱: u_yymmdd2yyyymmdd()
//  函數功能: 民國日期轉西元日期
//  使用方式: u_yymmdd2yyyymmdd($vdate)
//  使用方式: u_yymmdd2yyyymmdd($vdate,$vstyle) 暫時取消
//  程式設計: Tony
//  設計日期: 2004.10.18
// **************************************************************************
function u_yymmdd2yyyymmdd($vdate) {
  $vrtn_date = '';  // 回傳日期
  if(strlen($vdate)!=6) {
    $vrtn_date = 'error!!';  // 回傳日期
  }
  else {
    $vyy = substr($vdate,0,2)+1911;
    $vrtn_date = $vyy.substr($vdate,2,2).substr($vdate,4,2); // 回傳日期
    //$vrtn_date = $vyy.$vstyle.substr($vdate,2,2).$vstyle.substr($vdate,4,2); // 回傳日期
  }
  return($vrtn_date);
}
function u_yyyymmdd2yymmdd($vdate) {
  $vrtn_date = '';  // 回傳日期
  if(strlen($vdate)!=8) {
    $vrtn_date = 'error!!';  // 回傳日期
  }
  else {
    $vyy = substr($vdate,0,4)-1911;
    $vrtn_date = $vyy.substr($vdate,4,2).substr($vdate,6,2); // 回傳日期
  }
  return($vrtn_date);
}
// **************************************************************************
//  函數名稱: u_add_space()
//  函數功能: ?璁鼽阞聽?
//  使用方式: u_add_space("字串","長度","要補的字串",$valign='left') {
//  程式設計: Tony
//  設計日期: 2005.06.14
// **************************************************************************
function u_add_space($vstr,$vlen,$addstr=' ',$valign='left') {
  $vrtn_str  = "";
  $voldlen   = strlen($vstr);
  $maddspace = $vlen-$voldlen;
  //echo $maddspace.'-';
  if($maddspace<=0) {
    $maddspace = 0;
  }
  //echo '('.$vlen.'-'.$voldlen.')='.$maddspace;
  if($valign=='left') {
    //echo $vstr.str_repeat(' ',$maddspace);
    $vrtn_str = $vstr.str_repeat($addstr,$maddspace);
  }
  else {
    //echo str_repeat(' ',$maddspace).$vstr;
    $vrtn_str = str_repeat($addstr,$maddspace).$vstr;
  }
  //echo '('.$maddspace.')';
  //echo '('.$vlen-$voldlen.')';
  //echo ' ';
  return($vrtn_str);
}
// **************************************************************************
//  函數名稱: sl_send_msg()
//  函數功能: 傳送訊息
//  使用方式: sl_send_msg(寄件者員編,收件者員編,主旨,內容);
//  程式設計: Tony
//  設計日期: 2005.06.14
// **************************************************************************
function sl_send_msg($vmb05='it',$vmb07,$vmb10,$vmb11,$scnt='0') {
  global $mdat1;       // 資料庫
  global $mtable_ap;   // 系統對照主檔
  global $mtable_dept; // 廠部對照主檔下午 04:32 2011/11/17
  global $mtable_ct;   // 網頁員工控制檔
  global $mtable_pass; // 網頁員工登入檔.
  include_once('/home/docs/public_html/message/message_init.php');  // 訊息中心共用函數



  // 突然不能使用自動傳送訊息,被Mark 真怪...暫時取消Mark 2008-03-31 by Tony

  $vchk_rtn                  = 'N'; // 傳送是否成功，N=失敗、Y=成功
  $mmsg_file                 = '/home/docs/public_html/message/msgid.itm';      // 訊息代號檔
  $mtable_message_box        = "message_box_new";       // 訊息匣
  $mtable_message_trace      = "message_trace";     // 寄件匣/追蹤-主檔
  $mtable_message_trace_sub  = "message_trace_sub"; // 寄件匣/追蹤-明細檔
  $mtable_message_my_book    = "message_my_book";   // ?q訊錄
  $mtable_message_del        = "message_del";       // 個人訊息_刪除備份匣

  //echo $vmb01.'<br>'; // 訊息代號
  //echo $vmb02.'<br>'; // 資料匣代號
  //echo $vmb03.'<br>'; // 寄件者部門代號
  //echo $vmb04.'<br>'; // 寄件者部門名稱
  //echo $vmb05.'<br>'; // 寄件者代號
  //echo $vmb06.'<br>'; // 寄件者姓名
  //echo $vmb07.'<br>'; // 收件者代號
  //echo $vmb08.'<br>'; // 收件者姓名
  //echo $vmb09.'<br>'; // 讀取期限
  //echo $vmb10.'<br>'; // 主旨
  //echo $vmb11.'<br>'; // 內容
  //echo $vmb12.'<br>'; // 最後狀態
  //echo $vmb13.'<br>'; // 最後狀態日期
  //exit;

  if(NULL==$vmb05 || NULL==$vmb07 || NULL==$vmb10 || NULL==$vmb11) { // 有資料沒有傳入，就取消新增
    u_errmsg('3','left','FFFFFF','FF0000','FF9966','傳送訊息失敗！！請聯絡資訊部！！錯誤代碼：e_message_add_001');
    exit;
  }

  u_open($mdat1);
  //---------- 寄件者部門代號資料抓取 ----------//
  //$query_dept  = "select * from $mtable_dept
  //                         where dept_id='$vmb03' and d_date='0000-00-00 00:00:00'
  //           ";
  //
  ////echo $query_dept;exit;
  //$row_dept = mysql_fetch_array(mysql_query($query_dept));
  //$vmb04 = $row_dept["dept_name"]; // 寄件者部門名稱
  //---------- 寄件者部門代號資料抓取 ----------//

  //---------- 寄件者資料抓取 ----------//
  $query_pass1  = "select $mtable_pass.*,$mtable_dept.dept_name
                               from $mtable_pass
                               left join $mtable_dept on $mtable_dept.dept_id=$mtable_pass.dept_id
                               where $mtable_pass.empno='$vmb05' and $mtable_pass.d_date='0000-00-00 00:00:00'
                       ";

  //echo $query_pass1."<br>\n";
  $row_pass1 = mysql_fetch_array(mysql_query($query_pass1));
  $vmb03 = $row_pass1["dept_id"];   // 寄件者部門代號
  $vmb04 = $row_pass1["dept_name"]; // 寄件者部門名稱
  $vmb06 = $row_pass1["name"]; // 寄件者姓名
  //---------- 寄件者資料抓取 ----------//

  //---------- 收件者資料抓取 ----------//
  $query_pass2  = "select * from $mtable_pass
                                 where empno='$vmb07' and d_date='0000-00-00 00:00:00'
                       ";

  //echo $query_pass2."<br>\n";
  //echo $mdat1;

  $row_pass2 = mysql_fetch_array(mysql_query($query_pass2));
  $vmb08 = addslashes($row_pass2["name"]); // 收件者姓名
  //---------- 收件者資料抓取 ----------//
  //mysql_close(); // 關閉資料庫
  if(NULL<>$vmb08) {
     if(NULL==$vmb04 || NULL==$vmb06 || NULL==$vmb08) { // 有資料沒有查詢到名稱
       u_errmsg('3','left','FFFFFF','FF0000','FF9966',$vmb06.'-'.$vmb04.'-'.$vmb08.'-傳送訊息失敗！！請聯絡資訊部！！錯誤代碼：e_message_add_002');
       exit;
     }
  } else {
    return($vchk_rtn);
  }



  $vmb02 = "A"; // 資料匣代號 A=新訊息
  $vmb12 = "1"; // 最後狀態 1=未讀取


  $mmsg_ok = '資料新增成功!';
  $mmsg_ng = '資料新增失敗';
  $mmsg_ng_num  = '178534';
  $mmsg_ng_num2 = '243673';

  $query_data  = '';
  $query_data2 = '';



  $login_empno = $vmb05; // 收件者員編
  $mb_date  = date("Y-m-d H:i:s");     // 建檔日期時間
  $m_date   = date("Y-m-d H:i:s");     // 建檔日期時間
  $m_proc   = u_showproc();            // 建檔程式名稱
  $mfromip  = $_SERVER["REMOTE_ADDR"]; // 建檔 IP
  $mmb01  = u_get_lastno($mmsg_file,'r'); // 讀取下一個號碼
  $query_data = " insert into $mtable_message_box (s_num,
                                                      mb01 ,
                                                      mb02 ,
                                                      mb03 ,
                                                      mb04 ,
                                                      mb05 ,
                                                      mb06 ,
                                                      mb07 ,
                                                      mb08 ,
                                                      mb09 ,
                                                      mb10 ,
                                                      mb11 ,
                                                      mb12 ,
                                                      mb13 ,

                                                      b_empno,
                                                      b_proc ,
                                                      b_date ,
                                                      fromip
                                                     )
                                              values (0,
                                                      '$mmb01'  ,
                                                      '$vmb02'  ,
                                                      '$vmb03'  ,
                                                      '$vmb04'  ,
                                                      '$vmb05'  ,
                                                      '".stripslashes($vmb06)."'  ,
                                                      '$vmb07'  ,
                                                      '".stripslashes($vmb08)."'  ,
                                                      '$vmb09'  ,
                                                      '$vmb10'  ,
                                                      '$vmb11'  ,
                                                      '$vmb12'  ,
                                                      '$m_date'  ,
                                                      '$login_empno',
                                                      '$m_proc' ,
                                                      '$m_date' ,
                                                      '$mfromip'
                                                     )
                   ";

  //if('it'!=$vmb05){//add Mimi 2008-02-19 如果是系統發送的就不存追蹤
    $query_data2 = " insert into $mtable_message_trace (s_num,
                                                           mt01 ,
                                                           mt02 ,
                                                           mt03 ,
                                                           mt04 ,
                                                           mt05 ,
                                                           mt06 ,
                                                           mt07 ,
                                                           mt08 ,
                                                           mt09 ,
                                                           mt10 ,
                                                           mt11 ,
                                                           mt12 ,
                                                           mt13 ,

                                                           b_empno,
                                                           b_proc ,
                                                           b_date ,
                                                           fromip
                                                          )
                                                   values (0,
                                                           '$mmb01'  ,
                                                           '$vmb02'  ,
                                                           '$vmb03'  ,
                                                           '$vmb04'  ,
                                                           '$vmb05'  ,
                                                           '".stripslashes($vmb06)."'  ,
                                                           '$vmb07'  ,
                                                           '".stripslashes($vmb08)."'  ,
                                                           '$vmb09'  ,
                                                           '$vmb10'  ,
                                                           '$vmb11'  ,
                                                           '$vmb12'  ,
                                                           '$m_date'  ,
                                                           '$login_empno',
                                                           '$m_proc' ,
                                                           '$m_date' ,
                                                           '$mfromip'
                                                          )
                      ";

  //}

  //echo $query_data.'<br>';
  //echo $query_data2.'<hr>';
  //exit;
  $proc = u_showproc();
  u_open1('message_center');
  if($query_data<>NULL) {
    if(!mysql_query($query_data)) { // 寫入失敗
      u_errmsg('3','left','FF99FF','FF0000','FF9966',$query_data.'<br>'.$mmsg_ng.'，請再試一次...errno:'.$mmsg_ng_num.'<br>請確認本文或主旨是否有使用到簡體字或以下衝碼字結尾<br>么、娉、稞、擺、功、<br>
                                                                                                                                                                                 珮、鈾、黠、吒、豹、<br>
                                                                                                                                                                                 暝、孀、吭、崤、蓋、<br>
                                                                                                                                                                                 髏、沔、淚、墦、躡、<br>
                                                                                                                                                                                 坼、許、穀、歿、廄、<br>
                                                                                                                                                                                 閱、俞、琵、璞、枯、<br>
                                                                                                                                                                                 跚、餐、苒、愧、縷、<br>
                                                                                                                                                                                 泜、揉、育、魯、琍、<br>
                                                                                                                                                                                 慝、鸛、尚、逖、罵、<br>
                                                                                                                                                                                 坑、悴、誡、疊、帆、<br>
                                                                                                                                                                                 院、漏、辮、咽、稅、<br>
                                                                                                                                                                                 糕、洱、閏、嚐、迢、<br>
                                                                                                                                                                                 會、舉、弋、徑、腮、<br>
                                                                                                                                                                                 甕、四、砝、頌、牘<br>可以在最後一個字後加標點符號排除錯誤。<br>EX:主旨：請參閱改為請參閱~');
      $vchk_rtn = 'NG'; // 傳送是否成功，N=失敗、Y=成功
    }
  }
  if($query_data2<>NULL) {
    if(!mysql_query($query_data2)) { // 寫入失敗
      u_errmsg('3','left','FF99FF','FF0000','FF9966',$query_data2.'<br>'.$mmsg_ng.'，請再試一次...errno:'.$mmsg_ng_num2);
      $vchk_rtn = 'NG'; // 傳送是否成功，N=失敗、Y=成功
    }
  }
  //mysql_close(); // 關閉資料庫
  u_get_lastno($mmsg_file,'w'); // 寫入下一個號碼
  //2016.06.20 supergk 移動到可以生效的位置

  //2017.06.23 supergk 逸凡說5日訊息會失敗,先測試設定自動重發一次
  if('NG'==$vchk_rtn &&  '1' != $scnt){
    sl_send_msg($vmb05='it',$vmb07,$vmb10,$vmb11,$scnt='1');
  }

  return($vchk_rtn); //mark by 朝鈞 2016.06.21 line:2124 已經有return

}

// **************************************************************************
//  函數名稱: iif()
//  函數功能: db4 的 iif
//  使用方式:
//  程式設計: Mark
//  設計日期:
// **************************************************************************
function iif($cond,$ok_value,$ng_value){
  $r_value = $cond ? $ok_value : $ng_value;
  return ($r_value);
}

// **************************************************************************
//  函數名稱: sl_jreplace()
//  函數功能: 重新指向網址，使用 javascript 函數
//  使用方式: echo sl_jreplace($go_url); 一定要用 echo 不然會失敗
//  程式設計: Tony
//  設計日期: 2006.11.07
// **************************************************************************
  function sl_jreplace($go_url,$vtarget='') {
     $vurl  = "<script language=\"javascript\">";
     if(NULL<>$vtarget) {
        $vurl .= "$vtarget.";
     }
     $vurl .= "location.replace(\"$go_url\");";
     $vurl .= "</script>";
     return ($vurl);
  }

// **************************************************************************
//  函數名稱: sl_jgetdate()
//  函數功能:
//  使用方式: echo sl_jgetdate($vdate_fd); 一定要用 echo 不然會失敗
//  程式設計: Tony
//  設計日期: 2006.11.07
// **************************************************************************
function sl_jgetdate($vdate_fd) {
  $vurl  = "<script language=\"javascript\">";
  $vurl .=   "var time   = new Date();       ";
  $vurl .=   "var year   = time.getYear();   ";
  $vurl .=   "var month  = time.getMonth();  ";
  $vurl .=   "var date   = time.getDate();   ";
  $vurl .=   "var hour   = time.getHours();  ";
  $vurl .=   "var minute = time.getMinutes();";
  $vurl .=   "var second = time.getSeconds();";
  $vurl .=   "";
  $vurl .=   "var nowdate  = year;                             ";
  $vurl .=   "    nowdate += ((month < 10) ? \":0\":\":\")+month;  ";
  $vurl .=   "    nowdate += ((date  < 10) ? \":0\":\":\")+date;   ";
  $vurl .=   "    nowdate += ((hour  < 10) ? \":0\":\":\")+hour;   ";
  $vurl .=   "    nowdate += ((minute < 10) ? \":0\":\":\")+minute;";
  $vurl .=   "    nowdate += ((second < 10) ? \":0\":\":\")+second;";
  $vurl .=   "vdate_fd = nowdate;";
  $vurl .=   "alert(gw_form.f_gw07_s.value);";
  $vurl .= "</script>";
  return ($vurl);
}



// **************************************************************************
//  函數名稱: sl_errmsg()
//  函數功能: 秀錯誤訊息
//  使用方式: sl_errmsg($訊息)
//  程式設計: Tony
//  設計日期: 2006.11.07
// **************************************************************************
function sl_errmsg($vmsg) {
     ?>
       <table width="100%" border="1" cellpadding="3" cellspacing="0" bordercolor="FF9966" class="font" style="border-collapse: collapse">
         <tr bgColor="#FFFF99">
           <td align="left"><font size="2" color="#000000"><? echo $vmsg;?></font></td>
         </tr>
       </table>
       <br>
     <?
     return;
}

// **************************************************************************
//  函數名稱: sl_get_file()
//  函數功能: 秀出輸入的動態附件欄位($f_var['fd_file'])
//  使用方式: sl_get_file()
//  程式設計: 姿俞
//  設計日期: 2018.02.06
// **************************************************************************
function sl_get_file($f_var,$sql_type='mysql') {
        $f_init_cnt = 1;
  switch(substr($f_var['msel'],0,1)){
    // 新增
    case '1':
      break;
    // 修改
    case '2':
      $query = "select {$f_var['mtable']['head']}.*
                from {$f_var['mtable']['head']}
                where s_num='{$f_var['f_s_num']}'
                ";
      //echo "<pre>".$query."</pre>";
      $db_attach = mysql_fetch_array( mysql_query($query));
      if($db_attach['attach'] == 'Y') {
        $query = "select sl.dyn_upfile.*
                  from sl.dyn_upfile
                  where index_num  = '{$f_var['f_s_num']}'
                    and b_proc     = '{$db_attach['b_proc']}'
                    and d_date     = '0000-00-00 00:00:00'
                ";
        //echo $query;
        if(!mysql_query($query)) {
          sl_errmsg($f_var['mmsg_ng']);
          exit;
        }
        $f_count = 0;
        $f_var['disp_result'] = mysql_query($query);
        while($row = mysql_fetch_array($f_var['disp_result'])) {
          $f_count++;
          $f_var["tp"]-> newBlock ("tb_edit_file"                 ); // 刪除檔案
          $f_var["tp"]-> assign   ("tv_f_link"    , $f_var["mupload_dir"].$row['file_name']);
          $f_var["tp"]-> assign   ("tv_filename"  , $row['file_name']);
          $f_var["tp"]-> assign   ("tv_f_value"   , $row['file_name']);
          $f_var["tp"]-> assign   ("tv_f_card_num", $row['index_num']);
          $f_var["tp"]-> assign   ("tv_count"     , $f_count);
          $f_var["tp"]-> assign   ("tv_cnt"       , $f_count);
          $f_var["tp"]-> assign   ("tv_f_count"   , $f_count);
        }
      }
      //echo $f_count;
      $f_var["tp"]-> newBlock ("tb_edit_file_total" );
      $f_var["tp"]-> assign   ("tv_f_total"   , $f_count);
      if($f_count != 0) {
        $f_count++;
        $f_init_cnt = $f_count;
      }
    break;
  }
  $f_var["tp"]-> newBlock ("tb_file_dyn");
  $f_var["tp"]-> assign   ("tv_name"     , $f_var['fd_dyn_file']);
  $f_var["tp"]-> assign   ("tv_init_cnt" , $f_init_cnt);
}

// **************************************************************************
//  函數名稱: sl_disp_file()
//  函數功能: 顯示已有的動態附件欄位($f_var['fd_file'])
//  使用方式: sl_disp_file()
//  程式設計: 姿俞
//  設計日期: 2018.02.06
// **************************************************************************
function sl_disp_file($f_var) {
        $query      = "select {$f_var['mtable']['head']}.*
                           from {$f_var['mtable']['head']}
                           where s_num='{$f_var['f_s_num']}'
                   ";
   //echo "<pre>".$query."</pre>";
   $db_attach = mysql_fetch_array( mysql_query($query));
   if($db_attach['attach'] == 'Y') {
        $query      = "select sl.dyn_upfile.*
                           from sl.dyn_upfile
                           where index_num  = '{$f_var['f_s_num']}'
                                                                                        and b_proc     = '{$db_attach['b_proc']}'
                                                                                        and d_date     = '0000-00-00 00:00:00'
                   ";
        //echo $query;
        if(!mysql_query($query)) {
        sl_errmsg($f_var['mmsg_ng']);
                exit;
                }
                $i = 0;
        $f_var['disp_result'] = mysql_query($query);
        while($row = mysql_fetch_array($f_var['disp_result'])) {
                $i++;
                $f_var["tp"]-> newBlock ("tb_disp_file"                 ); // 動態附件
                        $f_var["tp"]-> assign   ("tv_f_link"    , $f_var["mupload_dir"].$row['file_name']);
                        $f_var["tp"]-> assign   ("tv_filename"  , $row['file_name']);
                        $f_var["tp"]-> assign   ("tv_count"     , $i);
        }
   }
}

// **************************************************************************
//  函數名稱: sl_save_file()
//  函數功能: 儲存動態附件資料
//  使用方式: sl_save_file()
//  程式設計: 姿俞
//  設計日期: 2018.02.06
// **************************************************************************
function sl_save_file($f_var) {
          $vb_empno   = $_SESSION["login_empno"];
  $vb_dept_id = $_SESSION["login_dept_id"];
  $vb_date    = date("Y-m-d H:i:s");
  $vfromip    = $_SERVER["REMOTE_ADDR"];
  $vproc      = u_showproc(); // 程式代號
  $f_var['mmsg_ng'] = "資料{$f_var['msel_name'][ substr($f_var['msel'],0,1) ]}失敗...";
  include_once("HTTP/Upload.php"); // PEAR 上傳套件
  $vupload = new HTTP_Upload();
  $file_name_fix = date('dmHis');
  $chk_attach = '';
  $f_name     = $f_var['fd_dyn_file'];
  $f_file_cnt = count($_FILES[$f_name]["name"]);
  if($f_file_cnt <> 0){
    for($i=0; $i < $f_file_cnt; $i++) {
      if($_FILES[$f_name]["name"][$i] != "") {
        $chk_attach = 'Y'; // 顯?雃陬L附檔
        //取得最新一筆新增資料的s_num
        if( $f_var['f_s_num'] == ''){
          $query ="select s_num from {$f_var['mtable']['head']} order by b_date desc limit 1";
          $db_s_num = mysql_fetch_array( mysql_query($query));
          $f_var['f_s_num'] = $db_s_num['s_num'];
        }
        $_FILES[$f_name]["name"][$i] = date('ymdHis')."_".$_FILES[$f_name]["name"][$i];
        $query = "insert into sl.dyn_upfile
                          set index_num = '{$f_var['f_s_num']}',
                              file_name = '{$_FILES[$f_name]["name"][$i]}',
                              b_empno   = '$vb_empno',
                              b_dept_id = '$vb_dept_id',
                              b_proc    = '$vproc'   ,
                              b_date    = '$vb_date'";
        if(!mysql_query($query)) {
          sl_errmsg($f_var['mmsg_ng']);
          exit;
        }
        move_uploaded_file($_FILES[$f_name]["tmp_name"][$i], $f_var["mupload_dir"].$_FILES[$f_name]["name"][$i]);
      }
    }
  }
  switch(substr($f_var['msel'],0,1)){
    //新增
    case '1':
      $query ="update {$f_var['mtable']['head']}
                 set attach = '{$chk_attach}'
               where s_num  = '{$db_s_num['s_num']}'
               ";
    break;
    //修改
    case '2':
      //刪除檔案
      $exit_file = 0;
      for($i=1; $i <= $f_var['exit_f_total']; $i++){
        if($f_var['d_file_'.$i] == "Y") { //刪除檔案
          $exit_file++;
          $f_name = $f_var['m_file_'.$i];
          $query ="update sl.dyn_upfile
                  set d_empno   = '$vb_empno',
                      d_dept_id = '$vb_dept_id',
                      d_proc    = '$vproc'   ,
                      d_date    = '$vb_date'
                where index_num = '{$f_var['f_s_num']}'
                  and file_name = '{$f_name}'
                  and b_proc    = '$vproc'
               ";
          //  echo $query;
          if(!mysql_query($query)) {
            sl_errmsg($f_var['mmsg_ng']);
            exit;
          }
          unlink($f_var["mupload_dir"].$f_var['m_file_'.$i]);
        }
      }
      $f_var['exit_f_total'] = $f_var['exit_f_total'] - $exit_file;
      if($f_var['exit_f_total'] > 0) {
        $chk_attach = 'Y';
      }
      $query ="update {$f_var['mtable']['head']}
                  set attach    = '{$chk_attach}',
                      m_empno   = '$vb_empno',
                      m_dept_id = '$vb_dept_id',
                      m_proc    = '$vproc'   ,
                      m_date    = '$vb_date'
                where s_num     = '{$f_var['f_s_num']}'
               ";
      //echo $query."</br>";
    break;
    //作廢
    case '3':
      $query ="update {$f_var['mtable']['head']}
                  set d_empno   = '$vb_empno',
                      d_dept_id = '$vb_dept_id',
                      d_proc    = '$vproc'   ,
                      d_date    = '$vb_date'
                where s_num     = '{$f_var['f_s_num']}'
               ";
      //echo $query."</br>";
      if(!mysql_query($query)) {
        sl_errmsg($f_var['mmsg_ng']);
        exit;
      }
      $query ="update sl.dyn_upfile
                  set m_empno   = '$vb_empno',
                      m_dept_id = '$vb_dept_id',
                      m_proc    = '$vproc'   ,
                      m_date    = '$vb_date'
                where index_num = '{$f_var['f_s_num']}'
                  and b_proc    = '$vproc'
               ";
      //echo $query;
    break;
  }
  if(!mysql_query($query)) {
    sl_errmsg($f_var['mmsg_ng']);
    exit;
  }
}

// **************************************************************************
//  函數名稱: sl_get()
//  函數功能: 秀出輸入的欄位($f_var['fd'])
//  使用方式: sl_get()
//  程式設計: Tony
//  設計日期: 2006.09.27
// **************************************************************************
function sl_get($f_var,$sql_type='mysql') { // add by mimi 2009.04.13 $sql_type='mysql' = $sql_type 沒有傳遞參數時的預設??為mysql
  $vjs_rule = ''; // 欄位條件設定
  $mpkey_str = ''; // 必要輸入的鍵值字串 Add by Tony 2007.08.20

  if('2'==substr($f_var['msel'],0,1) OR 'C'==substr($f_var['msel'],0,1) OR '85'==$f_var['msel']) { // 2=修改 C=複製 85=驗收簽核,upd by mimi 2011.01.06 採購追蹤 驗收簽核會用到~
    if(NULL==$f_var['in_scr_row']) { // 沒有傳入筆數  Add by Mimi 2007.08.20
      $f_var['mwhere'] = "s_num='{$f_var['f_s_num']}'";
      $f_var['morder'] = "s_num";
      $query1      = "select {$f_var['mtable']['head']}.*
                                 from {$f_var['mtable']['head']}
                                 where {$f_var['mwhere']}
                                 order by {$f_var['morder']}
                         ";
      //echo $query1."<BR>";
     //upd by mimi 2009.04.13 讓mssql也能用
     $result_scr  = call_user_func($sql_type.'_query',$query1);//mysql_query($query1);
     $row_scr     = call_user_func($sql_type.'_fetch_array',$result_scr);//mysql_fetch_array($result_scr);
     $f_var['in_scr_row'] = $row_scr;
    }
  }

  reset($f_var['fd']); // 將陣列的指標指到陣列第一個元素
  while(list($mfd_id)=each($f_var['fd'])) {
    if('N'==$f_var['fd'][$mfd_id]['show_scr']) { // 不秀在畫面上
      continue; // loop 回到 while
    }

    if('hidden'==$f_var['fd'][$mfd_id]['type']) { // 如果 type 是 hidden 就不在畫面多秀表格
      //echo $f_var['fd'][$mfd_id]['type'].'-----';
      $f_var["tp"]-> newBlock (  "tb_".$f_var['fd'][$mfd_id]['type']                  ); // 欄位 type
      reset($f_var['fd'][$mfd_id]); // 將陣列的指標指到陣列第一個元素
      while(list($mfd_name)=each($f_var['fd'][$mfd_id])) {
          if('value'==$mfd_name && '2'==$f_var['msel']) { // 如果是 value and 2=修改，就抓取 $f_var['in_scr_row'][] 資料
            $mfd_value = $f_var['in_scr_row'][$mfd_id];
            $f_var["tp"]-> assign   (  "tv_value", $mfd_value     );
          }
          else{
            $f_var["tp"]-> assign   (  "tv_".$mfd_name , $f_var['fd'][$mfd_id][$mfd_name]     );
          }
      }
      continue; // loop 回到 while
    }

    // Add by Tony 2006.12.12
    if('hr'==$f_var['fd'][$mfd_id]['type']) { // 如果 type 是 hr 就在畫面多增加一個<tr>
       $f_var["tp"]-> newBlock (  "tb_get_hr"      ); // 分格線
       $f_var["tp"]-> assign   (  "tv_cname"      , $f_var['fd'][$mfd_id]['cname']   ); // 欄位中文名稱
       $f_var["tp"]-> assign   (  "tv_class"      , $f_var['fd'][$mfd_id]['class']   ); // class
       continue; // loop 回到 while
    }

    $mmemo = '';
    if(''<>$f_var['fd'][$mfd_id]['memo']) {
      $mmemo = '&nbsp;('.$f_var['fd'][$mfd_id]['memo'].')';
    }

    // Add by Tony 2007.08.20 增加 pkey 必填欄位
    if('Y'==$f_var['fd'][$mfd_id]['pkey']) { // 必要輸入的鍵值字串
       //$mpkey_str = '<span class=pkey>＊</span>';
       $mpkey_str = '<span class=pkey>*</span>';
    }
    else {
       $mpkey_str = '';
    }

    $f_var["tp"]-> newBlock (  "tb_in_get_fd"         ); // 輸入畫面
    $f_var["tp"]-> assign   (  "tv_width1"     , $f_var["mwidth1"]                  ); //
    $f_var["tp"]-> assign   (  "tv_width2"     , $f_var["mwidth2"]                  ); //
    $f_var["tp"]-> assign   (  "tv_cname"      , $mpkey_str.$f_var['fd'][$mfd_id]['cname']   ); // 欄位中文名稱
    $f_var["tp"]-> assign   (  "tv_fd_ename"   , $f_var['fd'][$mfd_id]['ename']   ); // 欄位英文名稱

    $f_var["tp"]-> assign   (  "tv_memo"       , $mmemo      ); // 欄位 memo
    $f_var["tp"]-> newBlock (  "tb_".$f_var['fd'][$mfd_id]['type']                  ); // 欄位 type

    $url = 'http://'.$_SERVER['SERVER_NAME'].'/~sl/sl_download.php?show=1&file=';
    reset($f_var['fd'][$mfd_id]); // 將陣列的指標指到陣列第一個元素
    while(list($mfd_name)=each($f_var['fd'][$mfd_id])) {
      if('value'==$mfd_name && ('2'==substr($f_var['msel'],0,1) OR 'C'==substr($f_var['msel'],0,1)) ) { // 如果是 value and 2=修改，就抓取 $f_var['in_scr_row'][] 資料
        $mfd_value = $f_var['in_scr_row'][$mfd_id];
        //echo $f_var['fd'][$mfd_id]['type'].'---'.$mfd_id.'---'.$mfd_value.'<hr>';
        //增加file2來讓讀取資料是作判斷
        if(('file'==$f_var['fd'][$mfd_id]['type'] or 'file2'==$f_var['fd'][$mfd_id]['type'] )&& NULL<>$mfd_value) {
           //$file_path   = $f_var['proc_upfile_path'][u_showproc()].trim($f_var['in_scr_row'][$mfd_id]);
           $strpos = strrpos($_SERVER['SCRIPT_FILENAME'],'/');
           $strlen = substr($_SERVER['SCRIPT_FILENAME'],0,$strpos+1);
           $file_path = $strlen.$f_var[mupload_dir].trim($f_var['in_scr_row'][$mfd_id]);
           $file_uri  = 'http://'.$_SERVER['SERVER_NAME'].$_SERVER['SCRIPT_NAME']."?f_sid={$f_var['f_sid']}";
           //echo $filE_uri.$_SERVER['HTTP_REFERER'];
           //phpinfo();
           //$mfile_name      = '<a href='.$f_var[mupload_dir].trim($f_var['in_scr_row'][$mfd_id]).'>'.trim($f_var['in_scr_row'][$mfd_id]).'</a>';
           $mfile_name      = '<a href='.$url.base64_encode(getcwd().'/'.$f_var[mupload_dir].trim($f_var['in_scr_row'][$mfd_id])).'>'.trim($f_var['in_scr_row'][$mfd_id]).'</a>';
           $mfile_del_link  = "http://".$_SERVER['SERVER_NAME']."/~sl/sl_del_file.php?f_field_name={$mfd_id}&f_db={$f_var['mdb']}&f_table={$f_var['mtable']['head']}&f_wrere_field=s_num&f_no={$f_var['in_scr_row'][s_num]}&f_file_path={$file_path}&f_file_url={$file_uri}&f_file_name=".trim($f_var['in_scr_row'][$mfd_id]);
           //$mre_url = "&re_url=".u_showproc().".php?msel=2&f_s_num={$f_var['in_scr_row'][s_num]}&f_page={$f_var['f_page']}&f_order_fd={$f_var['f_order_fd']}&f_order_md={$f_var['f_order_md']}";
           // 一定要編碼，不然回傳值會有誤？真是奇怪！！！ 2006.11.20 By Tony
           //upd by mimi 2012.06.01 報修-13608 增加回傳f_change1與f_change2
           $mre_url = u_showproc().".php?msel=2&f_sid={$f_var['f_sid']}&f_s_num={$f_var['in_scr_row'][s_num]}&f_page={$f_var['f_page']}&f_order_fd={$f_var['f_order_fd']}&f_order_md={$f_var['f_order_md']}&f_del={$f_var['f_del']}&f_change1={$f_var['f_change1']}&f_change2={$f_var['f_change2']}";
           $mfile_del_link .= "&re_url=".urlencode($mre_url); // return url
           //echo $mfd_id.'-1-'.$f_var['fd'][$mfd_id]['type'].'-2-'.$mfd_value.'-3-<br>';
           if('file'==$f_var['fd'][$mfd_id]['type']){
             $f_var["tp"]-> newBlock (  "tb_in_file_del"                              ); // 刪除檔案 Block
           }
           else{
             $f_var["tp"]-> newBlock (  "tb_in_file_del2"                              ); // 刪除檔案 Block
           }
           //$f_var["tp"]-> newBlock (  "tb_in_file_del"                              ); // 刪除檔案 Block
           $f_var["tp"]-> assign   (  "tv_file_name"       , $mfile_name            ); // 檔案名稱
           $f_var["tp"]-> assign   (  "tv_file_del_link"   , $mfile_del_link        ); // 欄位中文名稱
           $mfd_value = $f_var['fd'][$mfd_id][$mfd_name];
        }
        if('0000-00-00'==substr($mfd_value,0,10)) {
           $mfd_value = '';
        }
        if('sign'==$f_var['fd'][$mfd_id]['type'] && ''!=trim($mfd_value)){
          $mfd_value1 = "<img style='border:1px grey dashed' src='/~sl/sl_sign/sign_img/".trim($mfd_value)."'>";
          $f_var["tp"]-> assign   (  "tb_".$f_var['fd'][$mfd_id]['type'].".tv_value1" , $mfd_value1      );
        }
        //add by 小樵20190418 為了加上b_gid function
        $fd_type=$f_var['fd'][$mfd_id]['type'];
        if('2'==substr($f_var['msel'],0,1) and $fd_type=='checkbox2' and $mfd_name=='value'){
          $fd_boxval = $mfd_value;
        }
      }
      else {
        $mfd_value = $f_var['fd'][$mfd_id][$mfd_name];
      }
      $f_var["tp"]-> assign   (  "tb_".$f_var['fd'][$mfd_id]['type'].".tv_".$mfd_name , $mfd_value      );
    }
    //add by 小樵20190418 為了加上b_gid function
    $ex_key = explode(",",$fd_boxval);
    /*
    if(isset($_SESSION['insert'])) {//add by 姿俞 2018.06.08 新增儲存欄位session
	    if('1'==substr($f_var['msel'],0,1)){
		   //echo $f_var['fd'][$mfd_id]['type'].": ".$mfd_id.": ".$_SESSION['insert'][$mfd_id]."</br>";
		    $f_var["tp"]-> assign   (  "tv_value"      , $_SESSION['insert'][$mfd_id] );
		    $f_var['fd'][$mfd_id]['selected'] = $_SESSION['insert'][$mfd_id]; //select session
		    $f_var['fd'][$mfd_id]['checked'] = $_SESSION['insert'][$mfd_id]; //radio session
	    }
    }
    */
    switch($f_var['fd'][$mfd_id]['type']) {
      case "select":
      reset($f_var['fd'][$mfd_id]['value']); // 將陣列的指標指到陣列第一個元素
      while( list($mvalue)=each($f_var['fd'][$mfd_id]['value']) ) {
        $f_var["tp"]-> newBlock (  "tb_option"                  ); // option
        //$f_var["tp"]-> assign   (  "tv_value"      , $mvalue                                    );
        $f_var["tp"]-> assign   (  "tv_value"      , $f_var['fd'][$mfd_id]['value'][$mvalue]  );
        $f_var["tp"]-> assign   (  "tv_show"       , $f_var['fd'][$mfd_id]['show'][$mvalue]   );

        if('1'==$f_var['msel']) { // 如果新增指定預設值
          //echo $f_var['fd'][$mfd_id]['selected']."-------<br>";
          //echo $mvalue."----<br>";
          //echo $f_var['fd'][$mfd_id]['value'][$mvalue]."******<br>";
          if( "qah_2" == $mfd_id && substr($f_var['fd']['qah_2']['value'][$mvalue],1,1)==substr($_SESSION["login_dept_id"],1,1)){  // 報修區別預設 By Job 2014.05.30
            $f_var["tp"]-> assign   (  "tv_selected"   , 'selected'                             );
          }else if($f_var['fd'][$mfd_id]['value'][$mvalue]==$f_var['fd'][$mfd_id]['selected']) {
            $f_var["tp"]-> assign   (  "tv_selected"   , 'selected'                             );
          }
        }
        if('81'==$f_var['msel']) { // 如果新增指定預設值
          //echo $f_var['fd'][$mfd_id]['selected']."-------<br>";
          //echo $mvalue."----<br>";
          //echo $f_var['fd'][$mfd_id]['value'][$mvalue]."******<br>";
          if($f_var['fd'][$mfd_id]['value'][$mvalue]==$f_var['fd'][$mfd_id]['selected']) {
             $f_var["tp"]-> assign   (  "tv_selected"   , 'selected'                             );
          }
        }

        if('2'==substr($f_var['msel'],0,1) OR 'C'==substr($f_var['msel'],0,1) OR '85'==$f_var['msel']) { // 2=修改 C=複製 85=驗收簽核,upd by mimi 2011.01.06 採購追蹤 驗收簽核會用到~
          // 將 select 停在資料位置
          if($f_var['fd'][$mfd_id]['value'][$mvalue]==trim($f_var['in_scr_row'][$mfd_id])) {
            $f_var["tp"]-> assign   (  "tv_selected"   , 'selected'                             );
          }
        }
      }
      //echo $mfd_id.'--------';
      //echo $f_var['fd'][$mfd_id]['value']['3'];
      //echo $f_var['fd'][$mfd_id]['value'][0]['3'].'++++++++';
      break;
      case "select2":
      reset($f_var['fd'][$mfd_id]['value']); // 將陣列的指標指到陣列第一個元素
      while( list($mvalue)=each($f_var['fd'][$mfd_id]['value']) ) {
        $f_var["tp"]-> newBlock (  "tb_option2"                  ); // option
        //$f_var["tp"]-> assign   (  "tv_value"      , $mvalue                                    );
        $f_var["tp"]-> assign   (  "tv_value"      , $f_var['fd'][$mfd_id]['value'][$mvalue]  );
        $f_var["tp"]-> assign   (  "tv_show"       , $f_var['fd'][$mfd_id]['show'][$mvalue]   );

        if('1'==$f_var['msel']) { // 如果新增指定預設值
          if($f_var['fd'][$mfd_id]['value'][$mvalue]==$f_var['fd'][$mfd_id]['selected']) {
             $f_var["tp"]-> assign   (  "tv_selected"   , 'selected'                             );
          }
        }
        if('2'==substr($f_var['msel'],0,1) OR 'C'==substr($f_var['msel'],0,1) OR '85'==$f_var['msel']) { // 2=修改 C=複製 85=驗收簽核,upd by mimi 2011.01.06 採購追蹤 驗收簽核會用到~
          // 將 select 停在資料位置
          if($f_var['fd'][$mfd_id]['value'][$mvalue]==trim($f_var['in_scr_row'][$mfd_id])) {
            $f_var["tp"]-> assign   (  "tv_selected"   , 'selected'                             );
          }
        }
      }
      //echo $mfd_id.'--------';
      //echo $f_var['fd'][$mfd_id]['cname'];
      //echo $f_var['fd'][$mfd_id]['value'][0]['3'].'++++++++';
      break;
      case "select4":
      reset($f_var['fd'][$mfd_id]['value']); // 將陣列的指標指到陣列第一個元素
      while( list($mvalue)=each($f_var['fd'][$mfd_id]['value']) ) {
        $f_var["tp"]-> newBlock (  "tb_option4"                  ); // option
        //$f_var["tp"]-> assign   (  "tv_value"      , $mvalue                                    );
        $f_var["tp"]-> assign   (  "tv_value"      , $f_var['fd'][$mfd_id]['value'][$mvalue]  );
        $f_var["tp"]-> assign   (  "tv_show"       , $f_var['fd'][$mfd_id]['show'][$mvalue]   );

        if('1'==$f_var['msel']) { // 如果新增指定預設值
          //echo $f_var['fd'][$mfd_id]['selected']."-------<br>";
          //echo $mvalue."----<br>";
          //echo $f_var['fd'][$mfd_id]['value'][$mvalue]."******<br>";
          if( "qah_2" == $mfd_id && substr($f_var['fd']['qah_2']['value'][$mvalue],1,1)==substr($_SESSION["login_dept_id"],1,1)){  // 報修區別預設 By Job 2014.05.30
            $f_var["tp"]-> assign   (  "tv_selected"   , 'selected'                             );
          }else if($f_var['fd'][$mfd_id]['value'][$mvalue]==$f_var['fd'][$mfd_id]['selected']) {
            $f_var["tp"]-> assign   (  "tv_selected"   , 'selected'                             );
          }
        }
        if('81'==$f_var['msel']) { // 如果新增指定預設值
          //echo $f_var['fd'][$mfd_id]['selected']."-------<br>";
          //echo $mvalue."----<br>";
          //echo $f_var['fd'][$mfd_id]['value'][$mvalue]."******<br>";
          if($f_var['fd'][$mfd_id]['value'][$mvalue]==$f_var['fd'][$mfd_id]['selected']) {
             $f_var["tp"]-> assign   (  "tv_selected"   , 'selected'                             );
          }
        }

        if('2'==substr($f_var['msel'],0,1) OR 'C'==substr($f_var['msel'],0,1) OR '85'==$f_var['msel']) { // 2=修改 C=複製 85=驗收簽核,upd by mimi 2011.01.06 採購追蹤 驗收簽核會用到~
          // 將 select 停在資料位置
          if($f_var['fd'][$mfd_id]['value'][$mvalue]==trim($f_var['in_scr_row'][$mfd_id])) {
            $f_var["tp"]-> assign   (  "tv_selected"   , 'selected'                             );
          }
        }
      }
      //echo $mfd_id.'--------';
      //echo $f_var['fd'][$mfd_id]['value']['3'];
      //echo $f_var['fd'][$mfd_id]['value'][0]['3'].'++++++++';
      break;
      case "select5":
      reset($f_var['fd'][$mfd_id]['value']); // 將陣列的指標指到陣列第一個元素
      while( list($mvalue)=each($f_var['fd'][$mfd_id]['value']) ) {
        $f_var["tp"]-> newBlock (  "tb_option5"                  ); // option
        //$f_var["tp"]-> assign   (  "tv_value"      , $mvalue                                    );
        $f_var["tp"]-> assign   (  "tv_value"      , $f_var['fd'][$mfd_id]['value'][$mvalue]  );
        $f_var["tp"]-> assign   (  "tv_show"       , $f_var['fd'][$mfd_id]['show'][$mvalue]   );

        if('1'==$f_var['msel']) { // 如果新增指定預設值
          if($f_var['fd'][$mfd_id]['value'][$mvalue]==$f_var['fd'][$mfd_id]['selected']) {
             $f_var["tp"]-> assign   (  "tv_selected"   , 'selected'                             );
          }
        }
        if('2'==substr($f_var['msel'],0,1) OR 'C'==substr($f_var['msel'],0,1) OR '85'==$f_var['msel']) { // 2=修改 C=複製 85=驗收簽核,upd by mimi 2011.01.06 採購追蹤 驗收簽核會用到~
          // 將 select 停在資料位置
          $f_tmp3 = $f_var['in_scr_row'][substr($mfd_id,0,9)."3"];
          //upd by 小樵20180814 車輛違規紀錄會出現strstr空值跳一串Warning,先判定如果是空值就continue,觀察看看
          if($f_var['in_scr_row'][$mfd_id]==''){
            continue;
          }
          if($f_var['in_scr_row'][substr($mfd_id,0,9)."3"] < 1 && strstr('17條/29-2條1項/30條',$f_var['in_scr_row'][$mfd_id])){
            $f_tmp3 = "2/";
          }
          else if($f_var['in_scr_row'][substr($mfd_id,0,9)."3"] < 1){
            $f_tmp3 = "1/";
          }
          if($f_var['fd'][$mfd_id]['value'][$mvalue]==trim($f_var['in_scr_row'][$mfd_id].';'.$f_tmp3)) {
            $f_var["tp"]-> assign   (  "tv_selected"   , 'selected'                             );
            $f_var["tp"]-> assign   (  "tb_select5.tv_value2"   , $f_var['in_scr_row'][substr($mfd_id,0,9)."2"]     );
            $f_var["tp"]-> assign   (  "tb_select5.tv_value3"   , $f_var['in_scr_row'][substr($mfd_id,0,9)."3"]      );
          }
          // echo $f_var['in_scr_row'][substr($mfd_id,0,9)."3"]."<br>";
        }
      }
      //echo $mfd_id.'--------';
      //echo $f_var['fd'][$mfd_id]['cname'];
      //echo $f_var['fd'][$mfd_id]['value'][0]['3'].'++++++++';
      break;
      case "textarea":
      case "sign":
      reset($f_var['fd'][$mfd_id]['size']); // 將陣列的指標指到陣列第一個元素
      while( list($msize)=each($f_var['fd'][$mfd_id]['size']) ) {
        $f_var["tp"]-> assign   (  "tv_".$msize    , $f_var['fd'][$mfd_id]['size'][$msize]     ); // 設定 cols、rows、wrap
      }
      //echo $msize.'---';
      //echo $f_var['fd'][$mfd_id]['size'][$msize].'+++';
      break;
      case "date2":
        if('2'==substr($f_var['msel'],0,1) OR 'C'==substr($f_var['msel'],0,1) OR '85'==$f_var['msel']) { // 2=修改 C=複製 85=驗收簽核,upd by mimi 2011.01.06 採購追蹤 驗收簽核會用到~
          $mfd_value = iif($f_var['in_scr_row'][$mfd_id]=='',$f_var['in_scr_row'][$mfd_id],$f_var['in_scr_row'][$mfd_id]-19110000);
          $f_var["tp"]-> assign   (  "tv_value"      , $mfd_value   );
        }
      break;
      case "checkbox":
        reset($f_var['fd'][$mfd_id]['value']); // 將陣列的指標指到陣列第一個元素

        foreach($f_var['fd'][$mfd_id]['value'] as $i => $mfd_value){
          $f_var["tp"]-> newBlock (  "tb_box" );
          $f_var["tp"]-> assign   (  "tv_ename"  , "f_".$mfd_id  );
          $f_var["tp"]-> assign   (  "tv_value"  , $mfd_value   );
          if(!empty($f_var['fd'][$mfd_id]['show'])){
            $f_var["tp"]-> assign   (  "tv_show"  , $f_var['fd'][$mfd_id]['show'][$i]   );
          }else{
            $f_var["tp"]-> assign   (  "tv_show"  , $mfd_value   );
          }

          //Add by TzuYu 2017.10.11 增加 選擇預設資料
				  if('2'==substr($f_var['msel'],0,1) OR 'C'==substr($f_var['msel'],0,1) OR '85'==$f_var['msel']) { // 2=修改 C=複製 85=驗收簽核,upd by mimi 2011.01.06 採購追蹤 驗收簽核會用到~
		        // 將 select 停在資料位置
		        if($f_var['fd'][$mfd_id]['value'][$i]==trim($f_var['in_scr_row'][$mfd_id])) {
		          $f_var["tp"]-> assign   (  "tv_checked"   , 'checked'                             );
		        }
		      }else{ //add by 姿俞 2018.06.08 新增儲存欄位session
		      	if($f_var['fd'][$mfd_id]['value'][$i]==trim($f_var['fd'][$mfd_id]['checked'])) {
		          $f_var["tp"]-> assign   (  "tv_checked"   , 'checked'                             );
		        }
		      }

        }
      break;
      //add by 小樵20190418 為了加上b_gid function checkbox2
      case "checkbox2":
             if( $f_var['fd'][$mfd_id]['ename'] == 'f_ScName'){
               $f_var['check']['value'] = $f_var['ScName']['value'];  //油站廠部分開
               $f_var['check']['show'] = $f_var['ScName']['show'];
             }

             $f_var["tp"]-> newBlock(  "tb_ckbox_all"            ); // checkboxall
             $f_var["tp"]-> assign  (  "tv_name"   , $f_var['fd'][$mfd_id]['ename']);
             $f_var["tp"]-> assign  (  "tv_value"  , "全選"      );
             $fd_num=0;     //
             $fd_num2=0;
             //$f_var['check']['value'] = $f_var['web']['value'];  //油站廠部分開
             //$f_var['check']['show'] = $f_var['web']['show'];
             while( list($mvalue)=each($f_var['check']['value'])) {
               if('--'!=$f_var['check']['value'][$mvalue]){
                 if('8'==$fd_num or '0'==$fd_num){ //add by mimi 2010.12.22 一行八個選項
                   $fd_num=0;
                   $f_var["tp"]-> newBlock("tb_ckbox_tr"                            ); // checkbox
                 }
                 $fd_num ++;
                 $fd_num2 ++;
                 $f_var["tp"]-> newBlock("tb_ckbox_{$fd_num}"                       ); // checkbox
                 $f_var["tp"]-> assign  ("tv_name"   , $f_var['fd'][$mfd_id]['ename']);
                 $f_var["tp"]-> assign  ("tv_value"  , "{$f_var['check']['show'][$mvalue]}");
                 $fd_value = $f_var['check']['value'][$mvalue];

                 //echo $f_var['check']['value'][$mvalue]."<br>";
                 //echo substr($f_var['msel'],0,1);
                 if('2'==substr($f_var['msel'],0,1)){
                   for($i=0;$i<count($ex_key);$i++){
                     $ex_key2 = explode(",",$ex_key[$i]);
                     //echo $fd_value."---".$ex_key[$i]."<br>";
                     if($fd_value==$ex_key2[0]){
                       $f_var["tp"]-> assign  ("checked"   , "checked");
                     }
                   }
                 }
               }
             }
             $f_var["tp"]-> newBlock("tb_ckbox_hr");

             //$vjs_rule .="var fd_ck = $('input[name^={$f_var['fd'][$mfd_id]['ename']}]').length; //複選數量
             //             var fd_cked = $('input[name^={$f_var['fd'][$mfd_id]['ename']}]:checked').length; //已勾選數量
             //             if(fd_cked<=0){
             //               alert('『{$f_var['fd'][$mfd_id]['cname']}』最少選一項!!') ;
             //               return(false)
             //             };
             //            ";
             break;
      case "radio":
        reset($f_var['fd'][$mfd_id]['value']); // 將陣列的指標指到陣列第一個元素

        foreach($f_var['fd'][$mfd_id]['value'] as $i => $mfd_value){
          $f_var["tp"]-> newBlock (  "tb_item" );
          $f_var["tp"]-> assign   (  "tv_ename"  , "f_".$mfd_id  );
          $f_var["tp"]-> assign   (  "tv_value"  , $mfd_value   );
          if(!empty($f_var['fd'][$mfd_id]['show'])){
            $f_var["tp"]-> assign   (  "tv_show"  , $f_var['fd'][$mfd_id]['show'][$i]   );
          }else{
            $f_var["tp"]-> assign   (  "tv_show"  , $mfd_value   );
          }

          //Add by TzuYu 2017.10.11 增加 選擇預設資料
				  if('2'==substr($f_var['msel'],0,1) OR 'C'==substr($f_var['msel'],0,1) OR '85'==$f_var['msel']) { // 2=修改 C=複製 85=驗收簽核,upd by mimi 2011.01.06 採購追蹤 驗收簽核會用到~
		        // 將 select 停在資料位置
		        if($f_var['fd'][$mfd_id]['value'][$i]==trim($f_var['in_scr_row'][$mfd_id])) {
		          $f_var["tp"]-> assign   (  "tv_checked"   , 'checked'                             );
		        }
		      }else{ //add by 姿俞 2018.06.08 新增儲存欄位session
		      	if($f_var['fd'][$mfd_id]['value'][$i]==trim($f_var['fd'][$mfd_id]['checked'])) {
		          $f_var["tp"]-> assign   (  "tv_checked"   , 'checked'                             );
		        }
		      }

        }
      break;
      case "datetime":
        if($f_var['fd'][$mfd_id]['hhmm']['picker'] != "N"){
          $f_var["tp"]-> newBlock (  "tb_picker" );
          $f_var["tp"]-> assign   (  "tv_ename"  , "f_".$mfd_id  );
          $f_var["tp"]-> assign   (  "tv_value_date"  , substr($f_var['in_scr_row'][$mfd_id],0,8) );
        }

        foreach($f_var['fd'][$mfd_id]['hhmm'] as $a_key => $a_val){
          if($a_key != "picker"){
            foreach($a_val[0] as $b_key => $b_val){
              $f_var["tp"]-> newBlock (  "tb_option_".$a_key  ); // option
              $f_var["tp"]-> assign   (  "tv_value_".$a_key      , $f_var['fd'][$mfd_id]['hhmm'][$a_key][0][$b_key]  );
              $f_var["tp"]-> assign   (  "tv_show_".$a_key       , $f_var['fd'][$mfd_id]['hhmm'][$a_key][0][$b_key]  );

              switch($f_var['msel']){ // 如果新增指定預設值
                case"1":
                case"81":
                  if($f_var['fd'][$mfd_id]['hhmm'][$a_key][1] == $f_var['fd'][$mfd_id]['hhmm'][$a_key][0][$b_key]) {
                    $f_var["tp"]-> assign   (  "tv_selected_".$a_key   , 'selected'                             );
                  }
                  break;
                default:
                  if('2'==substr($f_var['msel'],0,1) OR 'C'==substr($f_var['msel'],0,1) OR '85'==$f_var['msel']) { // 2=修改 C=複製 85=驗收簽核,upd by mimi 2011.01.06 採購追蹤 驗收簽核會用到~
                    // 將 select 停在資料位置
                    if($f_var['fd'][$mfd_id]['hhmm']['picker'] != "N"){
                      $f_var['tmp_hh'] = substr($f_var['in_scr_row'][$mfd_id],9,2);
                      $f_var['tmp_mm'] = substr($f_var['in_scr_row'][$mfd_id],11,2);
                      if($f_var['tmp_'.$a_key] == $f_var['fd'][$mfd_id]['hhmm'][$a_key][0][$b_key]) {
                        $f_var["tp"]-> assign   (  "tv_selected_".$a_key   , 'selected'  );
                      }
                    }else{
                      $f_var['tmp_hh'] = substr($f_var['in_scr_row'][$mfd_id],0,2);
                      $f_var['tmp_mm'] = substr($f_var['in_scr_row'][$mfd_id],2,2);
                      if($f_var['tmp_'.$a_key] == $f_var['fd'][$mfd_id]['hhmm'][$a_key][0][$b_key]) {
                        $f_var["tp"]-> assign   (  "tv_selected_".$a_key   , 'selected'  );
                      }
                    }

                  }
                  break;
              }
            }
          }
        }
      break;
      default:
      break;
    }

    // js_rule 設定
    if(NULL!=$f_var['fd'][$mfd_id]['js_rule']['kind']) {
       $vjs_rule .= sl_js_rule($f_var['fd'][$mfd_id]['js_rule']['kind'],
                               $f_var['fd'][$mfd_id]['ename'],
                               $f_var['fd'][$mfd_id]['cname'],
                               $f_var['fd'][$mfd_id]['js_rule']['chk_value'],
                               $f_var['fd'][$mfd_id]['js_rule']['chk_len']
                             );
    }

    if('sign'==$f_var['fd'][$mfd_id]['type'] &&  'required'==$f_var['fd'][$mfd_id]['js_rule']['kind'] && '1'==$f_var['msel']){
       $f_var["tp"]-> assignglobal   (  "tv_signJs"    , 'Y'  );
    }

    ///// js_rule 設定
    ///switch ($f_var['fd'][$mfd_id]['js_rule']['kind']) {
    ///  case "required":  // 一定要輸入值，也就是檢查是否為空白
    ///  $vjs_rule .= "
    ///                                   if(this.{$f_var['fd'][$mfd_id]['ename']}.value=='{$f_var['fd'][$mfd_id]['js_rule']['chk_value']}'){;
    ///                                     alert('『{$f_var['fd'][$mfd_id]['cname']}』輸入有誤!!') ;
    ///                                     this.{$f_var['fd'][$mfd_id]['ename']}.focus();
    ///                                     return(false)
    ///                                   };
    ///                                 ";
    ///  break;
    ///  default:
    ///  break;
    ///}

    $f_var["tp"]-> assignglobal   (  "tv_js_rule"    , $vjs_rule                                   ); // js rule

  }

  //add by 姿俞 2018.02.07 報修33239 回應2 動態附件欄位 >>
  if($f_var['fd_dyn_file'] != "") { //顯示動態附件欄位
        sl_get_file($f_var);
  }
  //add by 姿俞 2018.02.07 報修33239 回應2 動態附件欄位 <<
  return;
}

// **************************************************************************
//  函數名稱: sl_get_re()
//  函數功能: 秀出回應所要輸入的欄位($f_var['fd_re'])
//  使用方式: sl_get_re()
//  程式設計: Tony
//  設計日期: 2007.08.21
// **************************************************************************
function sl_get_re($f_var,$sql_type='mysql') {// add by mimi 2009.04.13 $sql_type='mysql' = $sql_type 沒有傳遞參數時的預設值為mysql
  $vjs_rule = ''; // 欄位條件設定
  $mpkey_str = ''; // 必要輸入的鍵值字串 Add by Tony 2007.08.20

  if('62'==$f_var['msel']) { // 2=修改
    if(NULL==$f_var['in_scr_row']) { // 沒有傳入筆數  Add by Mimi 2007.08.20
      $f_var['mwhere'] = "s_num='{$f_var['f_s_num']}'";
      $f_var['morder'] = "s_num";
      $query1      = "select {$f_var['mtable']['body']}.*
                                 from {$f_var['mtable']['body']}
                                 where {$f_var['mwhere']}
                                 order by {$f_var['morder']}
                         ";
      //echo $query1."<BR>";
      //upd by mimi 2009.04.13 讓mssql也能用
      $result_scr  = call_user_func($sql_type.'_query',$query1);//mysql_query($query1);
      $row_scr     = call_user_func($sql_type.'_fetch_array',$result_scr);//mysql_fetch_array($result_scr);
      $f_var['in_scr_row'] = $row_scr;
    }
  }


  reset($f_var['fd_re']); // 將陣列的指標指到陣列第一個元素
  while(list($mfd_id)=each($f_var['fd_re'])) {
    if('N'==$f_var['fd_re'][$mfd_id]['show_scr']) { // 不秀在畫面上
      continue; // loop 回到 while
    }

    //echo $f_var['fd_re'][$mfd_id]['type'].'-----';
    if('hidden'==$f_var['fd_re'][$mfd_id]['type']) { // 如果 type 是 hidden 就不在畫面多秀表格
      //echo $f_var['fd_re'][$mfd_id]['type'].'-----';
      $f_var["tp"]-> newBlock (  "tb_re_".$f_var['fd_re'][$mfd_id]['type']                  ); // 欄位 type
      reset($f_var['fd_re'][$mfd_id]); // 將陣列的指標指到陣列第一個元素
      while(list($mfd_name)=each($f_var['fd_re'][$mfd_id])) {
            $f_var["tp"]-> assign   (  "tv_".$mfd_name , $f_var['fd_re'][$mfd_id][$mfd_name]     );
      }
      continue; // loop 回到 while
    }

    // Add by Tony 2006.12.12
    if('hr'==$f_var['fd_re'][$mfd_id]['type']) { // 如果 type 是 hr 就在畫面多增加一個<tr>
       $f_var["tp"]-> newBlock (  "tb_re_get_hr"      ); // 分格線
       $f_var["tp"]-> assign   (  "tv_cname"      , $f_var['fd_re'][$mfd_id]['cname']   ); // 欄位中文名稱
       $f_var["tp"]-> assign   (  "tv_class"      , $f_var['fd_re'][$mfd_id]['class']   ); // class
       continue; // loop 回到 while
    }


    $mmemo = '';
    if(''<>$f_var['fd_re'][$mfd_id]['memo']) {
      $mmemo = '&nbsp;('.$f_var['fd_re'][$mfd_id]['memo'].')';
    }

    // Add by Tony 2007.08.20 增加 pkey 必填欄位
    if('Y'==$f_var['fd_re'][$mfd_id]['pkey']) { // 必要輸入的鍵值字串
       //$mpkey_str = '<span class=pkey>＊</span>';
       $mpkey_str = '<span class=pkey>*</span>';
    }
    else {
       $mpkey_str = '';
    }

    $f_var["tp"]-> newBlock (  "tb_re_in_get_fd"         ); // 輸入畫面
    $f_var["tp"]-> assign   (  "tv_width1"     , $f_var["mwidth1"]                  ); //
    $f_var["tp"]-> assign   (  "tv_width2"     , $f_var["mwidth2"]                  ); //
    $f_var["tp"]-> assign   (  "tv_cname"      , $mpkey_str.$f_var['fd_re'][$mfd_id]['cname']   ); // 欄位中文名稱
    $f_var["tp"]-> assign   (  "tv_fd_ename"   , $f_var['fd_re'][$mfd_id]['ename']   ); // 欄位英文名稱

    $f_var["tp"]-> assign   (  "tv_memo"       , $mmemo      ); // 欄位 memo
    $f_var["tp"]-> newBlock (  "tb_re_".$f_var['fd_re'][$mfd_id]['type']                  ); // 欄位 type
    //echo $f_var['fd_re'][$mfd_id]['type'].'++++';

    reset($f_var['fd_re'][$mfd_id]); // 將陣列的指標指到陣列第一個元素
    while(list($mfd_name)=each($f_var['fd_re'][$mfd_id])) {
      if('value'==$mfd_name && '62'==$f_var['msel']) { // 如果是 value and 62=回應修改，就抓取 $f_var['in_scr_row'][] 資料
         //echo $mfd_id.'---';
         $mfd_value = $f_var['in_scr_row'][$mfd_id];
         if('file'==$f_var['fd_re'][$mfd_id]['type'] && NULL<>$mfd_value) {
           $file_path   = $f_var['proc_upfile_path'][u_showproc()].trim($f_var['in_scr_row'][$mfd_id]);
           $strpos = strrpos($_SERVER['SCRIPT_FILENAME'],'/');
           $strlen = substr($_SERVER['SCRIPT_FILENAME'],0,$strpos+1);
           $file_path = $strlen.$f_var[mupload_dir].trim($f_var['in_scr_row'][$mfd_id]);
           $file_uri  = 'http://'.$_SERVER['SERVER_NAME'].$_SERVER['SCRIPT_NAME']."?f_sid={$f_var['f_sid']}";
           //echo $file_uri;
           //phpinfo();
           $mfile_name      = '<a href='.$f_var['proc_upfile_path'][u_showproc()].trim($f_var['in_scr_row'][$mfd_id]).'>'.trim($f_var['in_scr_row'][$mfd_id]).'</a>';
           $mfile_del_link  = "http://".$_SERVER['SERVER_NAME']."/~sl/sl_del_file.php?f_field_name={$mfd_id}&f_db={$f_var['mdb']}&f_table={$f_var['mtable']['body']}&f_wrere_field=s_num&f_no={$f_var['in_scr_row'][s_num]}&f_file_path={$file_path}&f_file_url={$file_uri}&f_file_name=".trim($f_var['in_scr_row'][$mfd_id]);
           //$mre_url = "&re_url=".u_showproc().".php?msel=2&f_s_num={$f_var['in_scr_row'][s_num]}&f_page={$f_var['f_page']}&f_order_fd={$f_var['f_order_fd']}&f_order_md={$f_var['f_order_md']}";
           // 一定要編碼，不然回傳值會有誤？真是奇怪！！！ 2006.11.20 By Tony
           //upd by mimi 2012.06.01 報修-13608 增加回傳f_change1與f_change2
           $mre_url = u_showproc().".php?msel=2&f_sid={$f_var['f_sid']}&f_s_num={$f_var['in_scr_row'][s_num]}&f_page={$f_var['f_page']}&f_order_fd={$f_var['f_order_fd']}&f_order_md={$f_var['f_order_md']}&f_del={$f_var['f_del']}&f_change1={$f_var['f_change1']}&f_change2={$f_var['f_change2']}";
           $mfile_del_link .= "&re_url=".urlencode($mre_url); // return url
           //$mfile_name      = '<a href='.$f_var['proc_upfile_path'][u_showproc()].trim($f_var['in_scr_row'][$mfd_id]).'>'.trim($f_var['in_scr_row'][$mfd_id]).'</a>';
           //$mfile_del_link  = "http://eip.slc.com.tw/~sl/sl_del_file.php?f_field_name={$mfd_id}&f_table={$f_var['mtable']['head']}&f_wrere_field=s_num&f_no={$f_var['in_scr_row'][s_num]}&f_file_path={$f_var['proc_upfile_path'][u_showproc()]}&f_file_name=".trim($f_var['in_scr_row'][$mfd_id]);
            //$mre_url = "&re_url=".u_showproc().".php?msel=2&f_s_num={$f_var['in_scr_row'][s_num]}&f_page={$f_var['f_page']}&f_order_fd={$f_var['f_order_fd']}&f_order_md={$f_var['f_order_md']}";
            // 一定要編碼，不然回傳值會有誤？真是奇怪！！！ 2006.11.20 By Tony
           //$mre_url = u_showproc().".php?msel=2&f_s_num={$f_var['in_scr_row'][s_num]}&f_page={$f_var['f_page']}&f_order_fd={$f_var['f_order_fd']}&f_order_md={$f_var['f_order_md']}";
           //$mfile_del_link .= "&re_url=".urlencode($mre_url); // return url
            //echo $mfd_id.'-1-'.$f_var['fd_re'][$mfd_id]['type'].'-2-'.$mfd_value.'-3-<br>';
            $f_var["tp"]-> newBlock (  "tb_re_in_file_del"                              ); // 刪除檔案 Block
            $f_var["tp"]-> assign   (  "tv_file_name"       , $mfile_name            ); // 檔案名稱
            $f_var["tp"]-> assign   (  "tv_file_del_link"   , $mfile_del_link        ); // 欄位中文名稱
            $mfd_value = $f_var['fd_re'][$mfd_id][$mfd_name];
         }
         if('0000-00-00'==substr($mfd_value,0,10)) {
            $mfd_value = '';
         }
      }
      else {
        $mfd_value = $f_var['fd_re'][$mfd_id][$mfd_name];
      }
      //echo $mfd_id.'---';
      $f_var["tp"]-> assign   (  "tb_re_".$f_var['fd_re'][$mfd_id]['type'].".tv_".$mfd_name , $mfd_value      );
    }

    switch($f_var['fd_re'][$mfd_id]['type']) {
      case "select":
           reset($f_var['fd_re'][$mfd_id]['value']); // 將陣列的指標指到陣列第一個元素
           while( list($mvalue)=each($f_var['fd_re'][$mfd_id]['value']) ) {
             $f_var["tp"]-> newBlock (  "tb_re_option"                  ); // option
             //$f_var["tp"]-> assign   (  "tv_value"      , $mvalue                                    );
             $f_var["tp"]-> assign   (  "tv_value"      , $f_var['fd_re'][$mfd_id]['value'][$mvalue]  );
             $f_var["tp"]-> assign   (  "tv_show"       , $f_var['fd_re'][$mfd_id]['show'][$mvalue]   );
             if('41'==$f_var['msel']){ // 報修區別預設 By Job 2014.05.30
               if( "qab_2" == $mfd_id && substr($f_var['fd_re'][$mfd_id]['value'][$mvalue],1,1)==substr($_SESSION["login_dept_id"],1,1)){
                 $f_var["tp"]-> assign   (  "tv_selected"   , 'selected'                             );
               }else if($f_var['fd_re'][$mfd_id]['value'][$mvalue]==$f_var['fd_re'][$mfd_id]['selected']) {
                 $f_var["tp"]-> assign   (  "tv_selected"   , 'selected'                             );
               }
             }

             if('62'==$f_var['msel']) { // 62=修改
               // 將 select 停在資料位置
               if($f_var['fd_re'][$mfd_id]['value'][$mvalue]==trim($f_var['in_scr_row'][$mfd_id])) {
                 $f_var["tp"]-> assign   (  "tv_selected"   , 'selected'                             );
               }
             }
           }
           //echo $mfd_id.'--------';
           //echo $f_var['fd_re'][$mfd_id]['value']['3'];
           //echo $f_var['fd_re'][$mfd_id]['value'][0]['3'].'++++++++';
           break;
      case "select2":
           reset($f_var['fd_re'][$mfd_id]['value']); // 將陣列的指標指到陣列第一個元素
           while(list($mvalue)=each($f_var['fd_re'][$mfd_id]['value']) ) {
                 $f_var["tp"]-> newBlock (  "tb_re_option2"                  ); // option
                 //$f_var["tp"]-> assign   (  "tv_value"      , $mvalue                                    );
                 $f_var["tp"]-> assign   (  "tv_value"      , $f_var['fd_re'][$mfd_id]['value'][$mvalue]  );
                 $f_var["tp"]-> assign   (  "tv_show"       , $f_var['fd_re'][$mfd_id]['show'][$mvalue]   );

                 if('62'==$f_var['msel']) { // 62=修改
                   // 將 select 停在資料位置
                   if($f_var['fd_re'][$mfd_id]['value'][$mvalue]==trim($f_var['in_scr_row'][$mfd_id])) {
                     $f_var["tp"]-> assign   (  "tv_selected"   , 'selected'                             );
                   }
                 }
           }
           //echo $mfd_id.'--------';
           //echo $f_var['fd_re'][$mfd_id]['value']['3'];
           //echo $f_var['fd_re'][$mfd_id]['value'][0]['3'].'++++++++';
           break;
      case "select4":
           reset($f_var['fd_re'][$mfd_id]['value']); // 將陣列的指標指到陣列第一個元素
           while( list($mvalue)=each($f_var['fd_re'][$mfd_id]['value']) ) {
             $f_var["tp"]-> newBlock (  "tb_re_option4"                  ); // option
             //$f_var["tp"]-> assign   (  "tv_value"      , $mvalue                                    );
             $f_var["tp"]-> assign   (  "tv_value"      , $f_var['fd_re'][$mfd_id]['value'][$mvalue]  );
             $f_var["tp"]-> assign   (  "tv_show"       , $f_var['fd_re'][$mfd_id]['show'][$mvalue]   );
             if('41'==$f_var['msel']){ // 報修區別預設 By Job 2014.05.30
               if( "qab_2" == $mfd_id && substr($f_var['fd_re'][$mfd_id]['value'][$mvalue],1,1)==substr($_SESSION["login_dept_id"],1,1)){
                 $f_var["tp"]-> assign   (  "tv_selected"   , 'selected'                             );
               }else if($f_var['fd_re'][$mfd_id]['value'][$mvalue]==$f_var['fd_re'][$mfd_id]['selected']) {
                 $f_var["tp"]-> assign   (  "tv_selected"   , 'selected'                             );
               }
             }

             if('62'==$f_var['msel']) { // 62=修改
               // 將 select 停在資料位置
               if($f_var['fd_re'][$mfd_id]['value'][$mvalue]==trim($f_var['in_scr_row'][$mfd_id])) {
                 $f_var["tp"]-> assign   (  "tv_selected"   , 'selected'                             );
               }
             }
           }
           //echo $mfd_id.'--------';
           //echo $f_var['fd_re'][$mfd_id]['value']['3'];
           //echo $f_var['fd_re'][$mfd_id]['value'][0]['3'].'++++++++';
           break;
      case "textarea":
      case "textarea2":  // Add By Job 2014.05.05 textarea2
           reset($f_var['fd_re'][$mfd_id]['size']); // 將陣列的指標指到陣列第一個元素
           while( list($msize)=each($f_var['fd_re'][$mfd_id]['size']) ) {
             $f_var["tp"]-> assign   (  "tv_".$msize    , $f_var['fd_re'][$mfd_id]['size'][$msize]     ); // 設定 cols、rows、wrap
           }
           //echo $msize.'---';
           //echo $f_var['fd_re'][$mfd_id]['size'][$msize].'+++';
           break;
      default:
           break;
    }

    // js_rule 設定
    if(NULL!=$f_var['fd_re'][$mfd_id]['js_rule']['kind']) {
       $vjs_rule .= sl_js_rule($f_var['fd_re'][$mfd_id]['js_rule']['kind'],
                               $f_var['fd_re'][$mfd_id]['ename'],
                               $f_var['fd_re'][$mfd_id]['cname'],
                               $f_var['fd_re'][$mfd_id]['js_rule']['chk_value'],
                               $f_var['fd_re'][$mfd_id]['js_rule']['chk_len']
                             );
    }
    ///// js_rule 設定
    ///switch ($f_var['fd_re'][$mfd_id]['js_rule']['kind']) {
    ///  case "required":  // 一定要輸入值，也就是檢查是否為空白
    ///  $vjs_rule .= "
    ///                                   if(this.{$f_var['fd_re'][$mfd_id]['ename']}.value=='{$f_var['fd_re'][$mfd_id]['js_rule']['chk_value']}'){;
    ///                                     alert('『{$f_var['fd_re'][$mfd_id]['cname']}』輸入有誤!!') ;
    ///                                     this.{$f_var['fd_re'][$mfd_id]['ename']}.focus();
    ///                                     return(false)
    ///                                   };
    ///                                 ";
    ///  break;
    ///  default:
    ///  break;
    ///}

    $f_var["tp"]-> assignglobal   (  "tv_js_rule"    , $vjs_rule                                   ); // js rule
  }
  return;
}

  // **************************************************************************
  //  函數名稱: sl_js_rule()
  //  函數功能: 傳入 js 欄位檢查資料
  //  使用方式: sl_js_rule($vkind,$vfd_ename,$vfd_cname,$vchk_value,$vchk_len)
  //  程式設計: Tony
  //  設計日期: 2006.11.20
  // **************************************************************************
  function sl_js_rule($vkind,$vfd_ename,$vfd_cname,$vchk_value,$vchk_len) {
     if(NULL!=$vkind) {
        switch ($vkind) {
             case "required":  // 一定要輸入值，也就是檢查是否為空白
                  $vchk = "$.trim($('[name={$vfd_ename}]').val()) == '{$vchk_value}'"; // edit by Job 2015.03.31 修正IE8無法驗證空白
                  //$vchk = "this.{$vfd_ename}.value.trim()=='{$vchk_value}'";    // upd by 朝鈞 2015.01.09 增加trim()去空白
                  break;
             case "chkstr":  // u_chkstr 函數 zi.js
                  $vchk = "u_chkstr(this.{$vfd_ename}.value,'{$vchk_value}',{$vchk_len})==false";
                  break;
             case "chkdate":  // 檢查日期
                  $vchk = "!u_chkdate1(this.{$vfd_ename}.value,{$vchk_len})";
                  break;
             case "chkid":  // 檢查身分證
                  $vchk = "!u_chkid(this.{$vfd_ename}.value)";
                  break;
             default:
                  break;
        }
        $vjs_rule .= "
                       if($vchk){
                         alert('『{$vfd_cname}』輸入有誤!!') ;
                         this.{$vfd_ename}.focus();
                         return(false);
                       };
                     ";
     }
     return($vjs_rule);
  }
// **************************************************************************
//  函數名稱: sl_list()
//  函數功能: 秀出瀏覽抬頭與欄位資料
//  使用方式: sl_list($f_var)
//  程式設計: Tony
//  設計日期: 2006.11.08
// **************************************************************************
function sl_list($f_var,$sql_type='mysql') {// add by mimi 2009.04.13 $sql_type='mysql' = $sql_type 沒有傳遞參數時的預設值為mysql
  //echo $sql_type.'<hr>';
  reset($f_var["list"]); // 將陣列的指標指到陣列第一個元素
  $f_var["tp"]-> newBlock (  "tb_list_01"                                ); // 秀出資料


  // Add by Tony 2007.08.16 直接由主程式傳入此($f_var['qty_cnt'])變數就不需要再重算筆數
  //echo $f_var['qty_cnt'].'------';
  if(NULL==$f_var['qty_cnt']) { // 沒有傳入筆數
     $query_qty   =  "select count(*) as max_cnt
                              from {$f_var['mtable']['head']}  {$f_var['from_join']} /* add by 健昌 為了這支程式(http://eip.slc.com.tw/~docs/slcar/sl_car07.php)增加的{$f_var['from_join']}(離職人員查詢) */
                              where {$f_var['mwhere']}
                              order by {$f_var['morder']}
                     ";
     sl_showsql($query_qty);
     //upd by mimi 2009.04.13 讓mssql也能用
     $result_qty  = call_user_func($sql_type.'_query',$query_qty);//mysql_query($query_qty);
     $row_qty     = call_user_func($sql_type.'_fetch_array',$result_qty);//mysql_fetch_array($result_qty);

     $f_var['qty_cnt']    = $row_qty['max_cnt']; // 目前總筆數
  }


  $f_var['msnum']  = ($f_var['f_page']*$f_var['mmaxline'])-$f_var['mmaxline']; // 起始比數
  $mpagetot = floor(((($f_var['mmaxline']-1)+$f_var['qty_cnt'])/$f_var['mmaxline'])); // 求整數，最大頁次
  $f_var["tp"]-> assign   ( array("tv_page"     => number_format($f_var['f_page']),     // 目前頁次
                                  "tv_maxpage"  => number_format($mpagetot),   // 總頁次
                                  "tv_reccount" => number_format($f_var['qty_cnt'])  // 資料筆數
                                 )
                          );

  for($i=0;$i<count($f_var['list']['th_width']);$i++) {
    $morder_link = '#';
    $morder_pic = '';

    //upd by leeyen 2012.02.24 修正使用自訂顯示函式時不能排序的問題
    if( strstr($f_var['list']['fd_name'][$i] ,$f_var['f_order_fd']) ) {
    //$func_b = strpos($f_var['list']['fd_name'][$i],'('); // function 名稱 "(" 位置
    //$func_e = strpos($f_var['list']['fd_name'][$i],')'); // function 名稱 ")" 位置
    //if($f_var['f_order_fd']==$f_var['list']['fd_name'][$i] || $f_var['f_order_fd'] == substr($f_var['list']['fd_name'][$i],$func_b+1,$func_e-$func_b-1)) {
      //if('8966389'==$_SESSION["login_empno"]) {
      //   echo $f_var['list']['fd_name'][$i].'------';
      //}
      $morder_md = iif('asc'==$f_var['f_order_md'],'desc','asc');
      $f_var['f_order_md'] = $morder_md;
      $morder_pic_name = iif('asc'==$morder_md,'desc_order.png','asc_order.png');
      $morder_pic_alt  = iif('asc'==$morder_md,'遞減','遞增');
      $morder_pic      = "&nbsp;<img src='/~sl/img/{$morder_pic_name}' alt='{$morder_pic_alt}' title='{$morder_pic_alt}'>";
    }
    else {
      $morder_md = 'asc';
    }

    //if(!strstr('u_upd/u_del/u_close',$f_var['list']['fd_name'][$i])) {
    if(!strstr('u_upd/u_del/u_close/u_2flow',$f_var['list']['fd_name'][$i])) {//upd by mimi 2011.07.01 增加轉簽核功能
       // Mark by Tony 2007.09.05
       //$morder_link = u_showproc().".php?msel=4&f_page={$f_var['f_page']}&f_que={$f_var['f_que']}&f_del={$f_var['f_del']}&f_order_fd={$f_var['list']['fd_name'][$i]}&f_order_md={$morder_md}&f_que={$f_var['f_que']}&f_change1={$f_var['f_change1']}&f_change2={$f_var['f_change2']}";

       // Add by Tony 2007.09.05 list 如果有使用 function 或是多個資料合併一欄處理，就另外處理
       $mfd_name = $f_var['list']['fd_name'][$i];
       $morder_fd = $mfd_name;
       if(strstr($mfd_name,',')) {
          $afd_name = explode(",",$mfd_name);
          $morder_fd = $afd_name[0]; // 第一個欄位名稱當作索引值
          $func_b = strpos($afd_name[0],'('); // function 名稱 "(" 位置
          $func_e = strpos($afd_name[0],')'); // function 名稱 ")" 位置
          if($func_b>0 && $func_e>0) { // 有資料
             $morder_fd = substr($afd_name[0],$func_b+1,$func_e-$func_b-1); // 抓取傳入funcfion的值 sl_xxxx(fd_name)->fd_name
          }
       }
       else {
          $func_b = strpos($morder_fd,'('); // function 名稱 "(" 位置
          $func_e = strpos($morder_fd,')'); // function 名稱 ")" 位置
          if($func_b>0 && $func_e>0) { // 有資料
             $morder_fd = substr($morder_fd,$func_b+1,$func_e-$func_b-1); // 抓取傳入funcfion的值 sl_xxxx(fd_name)->fd_name
          }
       }
       if('4'==$f_var['msel']){
        $morder_link = u_showproc().".php?msel=4&f_page={$f_var['f_page']}&f_que={$f_var['f_que']}&f_del={$f_var['f_del']}&f_order_fd={$morder_fd}&f_order_md={$morder_md}&f_que={$f_var['f_que']}&f_change1={$f_var['f_change1']}&f_change2={$f_var['f_change2']}&f_sid={$f_var['f_sid']}";
       }
    }


    $f_var["tp"]-> newBlock (  "tb_list_01_th"                         ); // 秀出資料
    $f_var["tp"]-> assign   (  "tv_th_width"   , $f_var['list']['th_width'][$i]      ); //
    $f_var["tp"]-> assign   (  "tv_th_name"    , $f_var['list']['th_name'][$i]       ); //
    $f_var["tp"]-> assign   (  "tv_fd_ename"   , $f_var['list']['fd_name'][$i]       ); //
    $f_var["tp"]-> assign   (  "tv_order_link" , $morder_link                        ); //
    $f_var["tp"]-> assign   (  "tv_order_pic"  , $morder_pic                         ); //
    //echo $f_var['list']['th_width'][$i].'++++++++';
    //echo $f_var['list']['th_name'][$i].'++++++++';
  }

  $mnum = 1;
  while ($row1 = call_user_func($sql_type.'_fetch_array',$f_var['list_result'])){  //mysql_fetch_array($f_var['list_result'])) {
    $mclass = iif($mnum%2==0,'field_color','white_color'); // Add by Tony 2008-04-16 update by MIMI 2008-12-23
    $f_var["tp"]-> newBlock (  "tb_list_01_body_th"        ); // 秀出資料 // qq:這段有些複雜
    $f_var["tp"]-> assign   (  "tv_class"   , $mclass ); //
    for($i=0;$i<count($f_var['list']['fd_name']);$i++) {   // 將 $f_var['list'] 定義的欄位輸出
      $mmsel = iif($f_var['mmsel'] == NULL,'41',$f_var['mmsel']);  // 欲設為瀏覽的 link
      $mfd_value      = '';   // 預設欄位值
      $mfd_name       = $f_var['list']['fd_name'][$i];   // 欄位名稱
      $morder_fd = $f_var['list']['fd_name'][$i];
      // 多個欄位合併請參閱wh01_init.php中的$f_var["list"] Add by Tony 2007.08.24
      if(strstr($mfd_name,',')) {
         $afd_name = explode(",",$mfd_name);
         $mfd_row1_value = '';
         for($j=0;$j<count($afd_name);$j++) {
             $func_b = strpos($afd_name[$j],'('); // function 名稱 "(" 位置
             $func_e = strpos($afd_name[$j],')'); // function 名稱 ")" 位置
             if($func_b>0 && $func_e>0) { // 有資料
                $mfunc_name     = substr($afd_name[$j],0,$func_b); // 抓取 function name
                $mfd_name       = substr($afd_name[$j],$func_b+1,$func_e-$func_b-1); // 抓取傳入funcfion的值 sl_xxxx(fd_name)->fd_name
                //echo $afd_name[$j];
                //echo $mfd_name.'___';
                //echo $row1[$afd_name[$j]].'+++';
                //add by yifun 2014.04.14
                if(strstr($mfd_name,'date') && strstr($row1[$mfd_name],'-')){
                  $mfd_name = substr($mfd_name,0,10);
                }
                $mfd_row1_value .= " " . sl_eval_fnc_name($mfunc_name,$row1[$mfd_name]);
                //echo $mfd_row1_value.'____<br>';
             }
             else {
               //add by yifun 2014.04.14
               if(strstr($mfd_name,'date') && strstr($row1[$afd_name[$j]],'-')){
                 $mfd_row1_value .= " " . sl_2ymd(str_replace('-','',substr($row1[$afd_name[$j]],0,10)),'');
               }
               else{
                 $mfd_row1_value .= " " . $row1[$afd_name[$j]];                // 欄位值
               }
               //echo $mfd_name."<br>";
               //echo $mfd_row1_value."<br>";
             }
         }
         // 因為多重欄位相加，故強迫欄位型態為TEXT否則會有誤! by Tony 2007.08.24
         $mfd_type       = 'text'; // 欄位型態

      }
      else {
         $mfd_row1_value = $row1[$mfd_name];                // 欄位值
         if(''==$f_var['list']['fd_type'][$i]){
            $mfd_type       = $f_var['fd'][$mfd_name]['type']; // 欄位型態
         }
         else{
            $mfd_type       = $f_var['list']['fd_type'][$i]; // 欄位型態
         }
      }


      $msubstr_s      = $f_var['fd'][$mfd_name]['start']; // substr 起始位置
      $msubstr_e      = $f_var['fd'][$mfd_name]['end'];   // substr 結束位置




      // Add by Tony 2007.05.28 抓取函數秀出相關資料
      $func_b = strpos($mfd_name,'('); // function 名稱 "(" 位置
      $func_e = strpos($mfd_name,')'); // function 名稱 ")" 位置
      if($func_b>0 && $func_e>0) { // 有資料
         $mfunc_name     = substr($mfd_name,0,$func_b); // 抓取 function name
         $mfd_name       = substr($mfd_name,$func_b+1,$func_e-$func_b-1); // 抓取傳入funcfion的值 sl_xxxx(fd_name)->fd_name
         //$mfd_row1_value = $row1[$mfd_name];                // 欄位值
         //$mfd_row1_value = $row1[$mfd_name].'-'.sl_eval_fnc_name($mfunc_name,$row1[$mfd_name]);
         $mfd_row1_value = sl_eval_fnc_name($mfunc_name,$row1[$mfd_name]);
      }

   switch ($mfd_name) {
        //case "s_num":
        //    if("Y" == $row1["attach"]){
        //        $f_var['show'] = '<img src="/~sl/img/attach.png" border="0" alt="有附件">';
        //        $mfd_value = "{$f_var['show']}";
        //        $mfd_value .= $row1["s_num"];
        //     }
        //     else{
        //        $mfd_value = $row1["s_num"];
        //     }
        //    break;
        case "u_add":
                if('0000-00-00 00:00:00'==$row1['d_date'] or ''==$row1['d_date']) { //add by mimi因為麥寮slb01,d_date是民國年
                   $mfd_value = '<img src="/~sl/img/add.png"   border="0">';
                }
             $mmsel = '99'; // 修改
             break;

        case "u_upd":
             $mmsel = '2'; // 修改
             $vct_ok = 'N';
             //echo $f_var["upd_ct"];
             switch ($f_var["upd_ct"]) {
                  case "empno": // 檢查員工編號
                       if($row1['b_empno']==$_SESSION["login_empno"]) {
                          $vct_ok = 'Y';
                       }
                       break;
                  case "dept": // 檢查部門代號
                       if('Y'==$_SESSION["it_mode"]) {
                          if('S121'==$_SESSION["login_dept_id"] or 'S122'==$_SESSION["login_dept_id"]) {
                             $vct_ok = 'Y';
                          }
                       }
                       else {
                          if($row1['b_dept_id']==$_SESSION["login_dept_id"]) {
                             $vct_ok = 'Y';
                          }
                       }
                       break;
                  case "user_def": // 使用者自行定義
                       if('Y'==$f_var['user_def']) {
                          $vct_ok = 'Y';
                       }
                       if('empno'==$f_var['user_def_empno']) { //檢查員工編號.....2008/01/21..MIMI
                         if($row1['b_empno']==$_SESSION["login_empno"]) {
                            $vct_ok = 'Y';
                         }
                       }
                       break;
                  default: // 不檢查，通通都可以修改
                       $vct_ok = 'Y';
                       break;
             }
             if('Y'==$vct_ok) {
                if($f_var['close'] == 'N' && substr($row1['dh02'],0,2) == '02'){//20141113 add by 筠樵 安保組修改判斷
                }else{
                  if('0000-00-00 00:00:00'==$row1['d_date'] or ''==$row1['d_date']) { //add by mimi因為麥寮slb01,d_date是民國年
                    $mfd_value = '<img src="/~sl/img/upd.png"   border="0" alt="修改此筆" title="修改此筆">';
                  }
                }
             }

             break;
        case "u_del":
             $mmsel = '3'; // 作廢
             if(NULL !=$f_var["del_ct"]){//add 2008.02.29 by:Mimi 判斷誰可以作廢
               if('Y'==$f_var['d_user_def']){
                 //add by mimi 2009.10.23 RTMDB 的d_date預設是NULL
                 if('0000-00-00 00:00:00'==$row1['d_date'] or NULL==$row1['d_date']) {
                   $mfd_value = "<img src='/~sl/img/del.png'   border='0' alt='作廢此筆' title='作廢此筆'>";
                 }
               }
               if('S'==$f_var['d_user_def']){
                 //add by 小樵 2017.02.07
                 if('0000-00-00 00:00:00'==$row1['d_date'] && '0000-00-00 00:00:00'!=$row1['d_date2']) {
                   $mfd_value = "<img src='/~sl/img/del.png'   border='0' alt='作廢此筆' title='作廢此筆'>";
                 }
               }
             }
             else{
               if($row1['b_empno']==$_SESSION["login_empno"]) {
                 if($f_var['close'] == 'N' && substr($row1['dh02'],0,2) == '02'){//20141113 add by 筠樵 安保組作廢判斷
                 }else{
                   if('0000-00-00 00:00:00'==$row1['d_date']) {
                      $mfd_value = "<img src='/~sl/img/del.png'   border='0' alt='作廢此筆' title='作廢此筆'>";
                   }
                 }
               }
             }
             break;
        case "u_close":
             if(NULL==$f_var["close_ct"]) {
                sl_send_msg('it',"0775711","u_close-變數未定義程式",$_SERVER["PHP_SELF"]);
                sl_send_msg('it',"8966389","u_close-變數未定義程式",$_SERVER["PHP_SELF"]);
                $f_var["close_ct"]=$f_var["upd_ct"];
             }
             else{
              $f_var["close_ct"]=$f_var["close_ct"];
             }
             $mmsel = '9'; // 結案
             $vct_ok = 'N';
             switch ($f_var["close_ct"]) {
                  case "empno": // 檢查員工編號
                       if($row1['b_empno']==$_SESSION["login_empno"]) {
                          $vct_ok = 'Y';
                       }
                       break;
                  case "dept": // 檢查部門代號
                       if('Y'==$_SESSION["it_mode"]) {
                          if('S121'==$_SESSION["login_dept_id"] or 'S122'==$_SESSION["login_dept_id"]) {
                             $vct_ok = 'Y';
                          }
                       }
                       else {
                          if($row1['b_dept_id']==$_SESSION["login_dept_id"]) {
                             $vct_ok = 'Y';
                          }
                       }
                       break;
                  case "user_def": // 使用者自行定義
                       //echo $row1['b_empno'].'--'.$_SESSION["login_empno"].'<br>';
                       if('Y'==$f_var['user_def']) { //指定某部門等...
                          $vct_ok = 'Y';
                       }
                       if('empno'==$f_var['user_def_empno']) { //檢查員工編號.....2008/01/21..MIMI
                         if($row1['b_empno']==$_SESSION["login_empno"]) {
                            $vct_ok = 'Y';
                         }
                       }
                       break;
                  default: // 不檢查，通通都可以修改
                       $vct_ok = 'Y';
                       break;
             }
             if('Y'==$vct_ok) {
                if($f_var['close']=='N' && substr($row1['dh02'],0,2) == '02'){//20141113 add by 筠樵 安保組結案判斷
                }else{
                  if('0000-00-00 00:00:00'==$row1['d_date']) {
                    $mfd_value = '<img src="/~sl/img/lock.png" border="0" alt="結案此筆" title="結案此筆">';
                  }
                }
             }
             break;
        case "u_copy":
             $mmsel = 'C'; // 修改
             $vct_ok = 'N';
             switch ($f_var["upd_ct"]) {
                  case "empno": // 檢查員工編號
                       if($row1['b_empno']==$_SESSION["login_empno"]) {
                          $vct_ok = 'Y';
                       }
                       break;
                  case "dept": // 檢查部門代號
                       if('Y'==$_SESSION["it_mode"]) {
                          if('S121'==$_SESSION["login_dept_id"] or 'S122'==$_SESSION["login_dept_id"]) {
                             $vct_ok = 'Y';
                          }
                       }
                       else {
                          if($row1['b_dept_id']==$_SESSION["login_dept_id"]) {
                             $vct_ok = 'Y';
                          }
                       }
                       break;
                  case "user_def": // 使用者自行定義
                       if('Y'==$f_var['user_def']) {
                          $vct_ok = 'Y';
                       }
                       if('empno'==$f_var['user_def_empno']) { //檢查員工編號.....2008/01/21..MIMI
                         if($row1['b_empno']==$_SESSION["login_empno"]) {
                            $vct_ok = 'Y';
                         }
                       }
                       break;
                  default: // 不檢查，通通都可以修改
                       $vct_ok = 'Y';
                       break;
             }
             if('Y'==$vct_ok) {
                if('0000-00-00 00:00:00'==$row1['d_date'] or ''==$row1['d_date']) { //add by mimi因為麥寮slb01,d_date是民國年
                   $mfd_value = '<img src="/~sl/img/copy.png"   border="0" alt="複製此筆" title="複製此筆">';
                }
             }
             break;
        case "u_trace":
           $mmsel = 'A'; // 追蹤
           $vct_ok = 'N';
           switch ($f_var["trace_ct"]) {
             case "empno": // 檢查員工編號
               if($row1['b_empno']==$_SESSION["login_empno"]) {
                 $vct_ok = 'Y';
               }
               break;
             case "dept": // 檢查部門代號
               if('Y'==$_SESSION["it_mode"]) {
                 if('S121'==$_SESSION["login_dept_id"] or 'S122'==$_SESSION["login_dept_id"]) {
                    $vct_ok = 'Y';
                 }
               }
               else {
                 if($row1['b_dept_id']==$_SESSION["login_dept_id"]) {
                    $vct_ok = 'Y';
                 }
               }
               break;
             case "user_def": // 使用者自行定義
               //echo $row1['b_empno'].'--'.$_SESSION["login_empno"].'<br>';
               if('Y'==$f_var['user_def']) { //指定某部門等...
                 $vct_ok = 'Y';
               }
               if('empno'==$f_var['user_def_empno']) { //檢查員工編號.....2008/01/21..MIMI
                 if($row1['b_empno']==$_SESSION["login_empno"]) {
                   $vct_ok = 'Y';
                 }
               }
               break;
             default: // 不檢查，通通都可以修改
               $vct_ok = 'Y';
               break;
           }
           if('Y'==$vct_ok) {
             if('0000-00-00 00:00:00'==$row1['d_date']) {
               $mfd_value = '<img src="/~sl/img/trace.png" border="0" alt="追蹤此筆" title="追蹤此筆">';
             }
           }
           break;
        case "u_2flow"://add by mimi 2011.07.01 增加轉簽核功能
             if(NULL==$f_var["2flow_ct"]) {
                $f_var["2flow_ct"]=$f_var["upd_ct"];
             }
             else{
              $f_var["2flow_ct"]=$f_var["2flow_ct"];
             }
             $mmsel = 'f'; // 轉簽核
             $vct_ok = 'N';
             switch ($f_var["2flow_ct"]) {
                  case "empno": // 檢查員工編號
                       if($row1['b_empno']==$_SESSION["login_empno"]) {
                          $vct_ok = 'Y';
                       }
                       break;
                  case "dept": // 檢查部門代號
                       if('Y'==$_SESSION["it_mode"]) {
                          if('S121'==$_SESSION["login_dept_id"] or 'S122'==$_SESSION["login_dept_id"]) {
                             $vct_ok = 'Y';
                          }
                       }
                       else {
                          if($row1['b_dept_id']==$_SESSION["login_dept_id"]) {
                             $vct_ok = 'Y';
                          }
                       }
                       break;
                  case "user_def": // 使用者自行定義
                       //echo $row1['b_empno'].'--'.$_SESSION["login_empno"].'<br>';
                       if('Y'==$f_var['user_def']) { //指定某部門等...
                          $vct_ok = 'Y';
                       }
                       if('empno'==$f_var['user_def_empno']) { //檢查員工編號.....2008/01/21..MIMI
                         if($row1['b_empno']==$_SESSION["login_empno"]) {
                            $vct_ok = 'Y';
                         }
                       }
                       break;
                  default: // 不檢查，通通都可以修改
                       $vct_ok = 'Y';
                       break;
             }
             if('Y'==$vct_ok) {
                if('0000-00-00 00:00:00'==$row1['d_date']) {
                   $mfd_value = '<img src="/~sl/img/flow.png" border="0" alt="此筆轉簽核單" title="此筆轉簽核單">';
                }
             }
             break;
        default:
            switch ($mfd_type) {
                 case "select":
                      //upd by mimi 2012.03.06 第三碼之後,可能會有異常,所以修正...
                      $str_value = str_replace('.','-',$mfd_row1_value);
                      $ex_value  = explode('-',$str_value);
                      $mfd_value = trim($ex_value[1]);
                      //$mfd_value = trim(substr($mfd_row1_value,3,999));
                      break;
                 case "select2":
                      $mfd_value = trim($mfd_row1_value);
                      break;
                 case "textarea":
                      //$mfd_value = nl2br($mfd_row1_value); // Mark by Tony 2007.09.03
                      $mfd_value = '<pre>'.$mfd_row1_value.'</pre>';
                      break;
                 case "date":
                      switch ($f_var['show_year']) {
                          case "2":
                               $mfd_value = sl_2ymd(trim($mfd_row1_value),'.');   //2008.04.17 add by mimi 加退保瀏覽匯出時..日期型態會被改變..所以改為"."
                               break;
                          case "4":
                               $mfd_value = sl_4ymd(trim($mfd_row1_value));
                               break;
                          default:
                               $mfd_value = (trim($mfd_row1_value));
                               break;
                      }
                      break;
                 case "date2":
                        $mfd_value = sl_2ymd(trim($mfd_row1_value));
                      break;
                 //add by mimi 2009.08.31 值班表瀏覽要秀出星期
                 case "date3":
                        $mfd_value = sl_2ymd(trim($mfd_row1_value),'.').' '.sl_day_week($mfd_row1_value);
                      break;
                 case "date4": //add by 佳玟 2015.08.19 全顯示出來 日期 時分秒
                        $mfd_value = $mfd_row1_value;
                      break;
                 case "time":
                        $mfd_value = substr(trim($mfd_row1_value),0,2).':'.substr(trim($mfd_row1_value),2,2);
                      break;
                 case "substr":
                      if('0000'==substr($mfd_row1_value,0,4) ) {
                         $mfd_value = '';
                      }
                      else {
                         $mfd_value = trim(substr($mfd_row1_value,$msubstr_s,$msubstr_e));
                      }

                      break;
                 default:
                      //if(strstr($mfd_name,'date')) { // 日期欄位，另外處理
                        //echo $mfd_row1_value.'---';
                        if('0000-00-00' == substr($mfd_row1_value,0,10)) {
                          $mfd_value = '';
                        }
                        else {
                          //$mfd_name = '<font color=red>'.substr($row1[$f_var['list']['fd_name'][$i]],0,10).'</font>';
                          //$mfd_value = substr($mfd_row1_value,0,10);
                          //if(strstr($mfd_name,'date') ) { // Mark by Tony 2009.06.23 強迫 sl_hosts 秀出時分秒
                          if(strstr($mfd_name,'date') and ('sl_hosts'<>u_showproc() and 'acct01'<>u_showproc())) { // 日期欄位，另外處理 //modify by phil 20101105 acct01該程式加SHOW時分秒

                             $mfd_value = substr($mfd_row1_value,0,10);
                          }
                          else {
                             $mfd_value = $mfd_row1_value;
                          }
                        }
                      //}
                      //else {
                      //  $mfd_value = trim($mfd_row1_value);
                      //}
                      break;
             }

             break;

      }
      $f_var['new']='';
      $f_var['show']='';
      $proc = u_showproc();
      if('slp01'!=$proc){
        if($mfd_name ==$f_var['list']['fd_name'][0]){    //針對第一個欄位秀圖的處理
          //if('8966389'==$_SESSION['login_empno']) {
            //echo $_SERVER["PHP_SELF"].'---';
            //echo $row1['s_num'].'---';
            //echo $_SESSION['login_empno'].'***';
          sl_open('sl');//2009-08-18 add by東巖
          //upd by mimi 2009-05-03 沒閱讀過的就秀出NEW
          $query_web   =  "select *
                                   from sl.web_log
                                   where sl.web_log.wg01='{$_SESSION['login_empno']}' and
                                         sl.web_log.wg05='{$_SERVER["PHP_SELF"]}' and
                                         sl.web_log.wg06='{$row1['s_num']}'
                                   order by sl.web_log.wg01,sl.web_log.wg05,sl.web_log.wg06
                          ";
          $result_web = mysql_query($query_web);
          $row_web = mysql_fetch_array($result_web);
          //echo $query_web;
          //echo 'row_web:'.$row_web['m_date'].'---';
          //echo 'row_web:'.$row_web['s_num'].'---<br>';
          //echo 'row1_b_date:'.$row1['b_date'].'---';
          //echo 'row_web_date:'.$row_web['b_date'].'---<br>';
          //echo 'row1_m_date:'.$row1['m_date'].'---';
          //echo 'row_web_date:'.$row_web['m_date'].'---<br>';
          //upd by mimi 2010-03-23 報修-9356 改成使用7日內秀NEW就好了
          //if($row_web['m_date']<$row1['b_date'] or $row_web['m_date']<$row1['m_date']) {
          //  $f_var['new']  ='<img src="/~sl/img/new.gif" border="0">';
          //}
          //}

          //upd by mimi 2009-05-03 不使用七日內的秀NEW了
          if(date("Y-m-d",time()-60*60*24*7)<=substr($row1['b_date'],0,10)){  //七日內
            //echo date("Y-m-d",time()-60*60*24*7).'----'.substr($row1['b_date'],0,10).'<hr>';
            $f_var['new']  ='<img src="/~sl/img/new.gif" border="0">';
          }
          if("Y" == $row1["attach"] and NUll != $row1["attach"]){             //有附件
            $f_var['show'] = '<img src="/~sl/img/attach.png" border="0" alt="有附件">';
          }
          //$mfd_value = $f_var['new'].$f_var['show'].$row1["{$f_var['list']['fd_name'][0]}"];
          //update by mimi 2008-12-23
          $mfd_value = $f_var['new'].$f_var['show'].$mfd_value;
        }
      }
      //if(NUll != $row1["attach"]){
      //  //echo $row1["attach"];
      //   if($mfd_name ==$f_var['list']['fd_name'][0]){
      //   //echo $f_var['list']['fd_name'][0].'----';
      //   //echo $row1["{$f_var['list']['fd_name'][0]}"].'****';
      //   //echo $row1["attach"].'<br>';
      //     if("Y" == $row1["attach"]){
      //         $f_var['show'] = '<img src="/~sl/img/attach.png" border="0" alt="有附件">';
      //         $mfd_value = "{$f_var['show']}";
      //         $mfd_value .= $row1["{$f_var['list']['fd_name'][0]}"];
      //
      //         //echo $f_var['list']['fd_name'][0].'----';
      //         //echo $f_var['show'];
      //         //echo $row1["{$f_var['list']['fd_name'][0]}"].'****';
      //         //echo $row1["attach"].'<br>';
      //     }
      //     else{
      //         $mfd_value = $row1["{$f_var['list']['fd_name'][0]}"];
      //     }
      //   }
      //}
      //echo $mfd_value.'++++++++++++++++++++++++++';
      if(NULL<>$f_var["f_que"]) { // 查詢必須對字串作反白處理
        //$mfd_value = str_replace($f_var["f_que"],"<span style='{$f_var['mque_color']}'>{$f_var['f_que']}</span>",$mfd_row1_value);
        //$mfd_value = str_replace($f_var["f_que"],"<span style='{$f_var['mque_color']}'>{$f_var['f_que']}</span>",$mfd_value);
        $str_que  = substr_count($f_var['f_que']," ");
        if('0'<$str_que){
          $fd_que=explode(" ",$f_var['f_que']);
                  for($j=0;$j<count($fd_que);$j++){
                    $f_var['f_que_ary'] = $fd_que[$j];
            $mfd_value = sl_span_str($f_var,$mfd_value);
                  }
        }
        else{
          $mfd_value = sl_span_str($f_var,$mfd_value);
        }
      }
      $url = 'http://'.$_SERVER['SERVER_NAME'].'/~sl/sl_download.php?show=1&file=';
      switch ($mfd_type) {
        case "file":
          $mfd_value=$mfd_value;
          //$mfd_link = $f_var[mupload_dir].$mfd_value;  //mark by 朝鈞 2016.09.10
          $mfd_link = $url.base64_encode(getcwd().'/'.$f_var[mupload_dir].$mfd_value);  // add by 朝鈞 2016.09.10 報修29884-檔案含中文檔名會無法開啟
          break;
        case "file2":
          //$mfd_link = $f_var[mupload_dir].$mfd_value);  //mark by 朝鈞 2016.09.10
          $mfd_link = $url.base64_encode(getcwd().'/'.$f_var[mupload_dir].$mfd_value);  // add by 朝鈞 2016.09.10 報修29884-檔案含中文檔名會無法開啟
          $mfd_arr=split("/",$mfd_value);
          $mfd_value=$mfd_arr[1];
          break;
        default:
          $mfd_value=$mfd_value;

          //upd by mimi 2012.06.01 報修-13608 增加回傳f_change1與f_change2
          //upd by 周小樵 2014.10.31 增加回傳f_h_s_num
          $mfd_link = u_showproc().".php?msel=".$mmsel."&f_s_num=".$row1["s_num"]."&f_h_s_num=".$row1["h_s_num"]."&f_page=".$f_var['f_page']."&f_del=".$f_var["f_del"]."&f_que=".$f_var["f_que"]."&mnf01=".$_GET[mnf01]."&f_sid={$f_var['f_sid']}&f_order_fd={$f_var['f_order_fd']}&f_order_md={$f_var['f_order_md']}&f_change1={$f_var['f_change1']}&f_change2={$f_var['f_change2']}&f_id=".$row1["id"]."&f_date_s=".$row1["date_s"]."&f_date_e=".$row1["date_e"]."&f_empno=".$row1["empno"]."";
          break;
      }
      //$mfd_link = iif($mfd_type=='file',$f_var[mupload_dir].$mfd_value,u_showproc().".php?msel=".$mmsel."&f_s_num=".$row1["s_num"]."&f_page=".$f_var['f_page']."&f_del=".$f_var["f_del"]."&f_que=".$f_var["f_que"]."&mnf01=".$_GET[mnf01]."&f_sid={$f_var['f_sid']}");
      $f_var["tp"]-> newBlock (  "tb_list_01_body_detail"                               ); // 秀出資料

      // Add by Tony 2008-04-16
      if('hr_is'==$f_var['ap_id']) { // 加退保系統，顏色另外處理
         if('W'==$row1['im02'] or 'W'==$row1['ic06']) {
            $mclass = 'field_color_hr_w';
         }
         else {
            $mclass = 'field_color';
         }
         $f_var["tp"]-> assign   (  "tv_class"      , $mclass ); //
      }

      // Add by Mimi 2008-09-17
      if('tran03.php'==u_showproc().".php"){ // 麥寮貨櫃查詢，針對結關日顏色另外處理
        $fd_year = date("Y")-1911;
        $fd_date = $fd_year.date("-m-d");
        //echo $fd_date.'--'.$row1['b01_14'].'<hr>';
        if($row1['b01_14']==$fd_date) {
           $mclass = 'field_color_hr_w';
        }
        if(''==$mclass){
           $mclass = 'field_color';
        }
        if('field_color'==$mclass){
           $mclass = '';
        }
        $f_var["tp"]-> assign   (  "tv_class"      , $mclass ); //
      }
      // Mark by Tony 2009-05-19 取消,不然無法出現光棒的位置
      //$f_var["tp"]-> assign   (  "tv_class"      , $mclass ); //
      $f_var["tp"]-> assign   (  "tv_fd_align"   , $f_var['list']['fd_align'][$i]       ); // align
      $f_var["tp"]-> assign   (  "tv_fd_name"    , $mfd_value                           ); // field value
      $f_var["tp"]-> assign   (  "tv_link"       , $mfd_link                            ); // 連結
      $mfd_link='#';
    }

    $mnum++;
  }
  return;
}

// **************************************************************************
//  函數名稱: sl_disp_1()
//  函數功能: 列出單筆資料
//  使用方式: sl_disp_1($f_var)
//  程式設計: Tony
//  設計日期: 2006.11.08
//  程式修改: Tony
//  設計日期: 2007.08.21
//  修改內容: 主要針對回應的部分增加列出與輸入功能
// **************************************************************************
function sl_disp_1($f_var,$sql_type='mysql') {// add by mimi 2009.04.13 $sql_type='mysql' = $sql_type 沒有傳遞參數時的預設值為mysql
  //upd by mimi 2009.04.13 讓mssql也能用
  $row1     = call_user_func($sql_type.'_fetch_array',$f_var['disp_result']);//$row1 = mysql_fetch_array($f_var['disp_result']);
  //echo $sql_type;
  //echo $f_var['disp_result'];

  $f_var['row1'] = $row1;
  if(NULL==$f_var['action_del']) {
     $f_var['action_del'] = u_showproc().".php?msel=31&f_sid={$f_var['f_sid']}&f_s_num={$row1['s_num']}&f_page={$f_var['f_page']}&f_que={$f_var['f_que']}&f_del={$f_var['f_del']}";
  }
  else {
      $f_var['action_del'] .= $row1['s_num'];
  }
  // Add by Mimi 2008.02.13
  if(NULL==$f_var['action_other']) {
     $f_var['action_other'] = u_showproc().".php?msel=811&f_sid={$f_var['f_sid']}&f_s_num={$row1['s_num']}&f_page={$f_var['f_page']}&f_que={$f_var['f_que']}&f_del={$f_var['f_del']}";
  }
  else {
     $f_var['action_other'] .= $row1['s_num'];
  }

  // Add by Tony 2007.09.06
  if(NULL==$f_var['action_close']) {
     $f_var['action_close'] = u_showproc().".php?msel=91&f_sid={$f_var['f_sid']}&f_s_num={$row1['s_num']}&f_page={$f_var['f_page']}&f_que={$f_var['f_que']}&f_del={$f_var['f_del']}";
  }
  else {
     $f_var['action_close'] .= $row1['s_num'];
  }

  // Add by Mimi 2009.02.03
  if(NULL==$f_var['action_trace']) {
     $f_var['action_trace'] = u_showproc().".php?msel=A1&f_sid={$f_var['f_sid']}&f_s_num={$row1['s_num']}&f_page={$f_var['f_page']}&f_que={$f_var['f_que']}&f_del={$f_var['f_del']}";
  }
  else {
     $f_var['action_trace'] .= $row1['s_num'];
  }

  // add by mimi 2011.07.01 增加轉簽核功能
  if(NULL==$f_var['action_2flow']) {
     $f_var['action_2flow'] = u_showproc().".php?msel=f1&f_sid={$f_var['f_sid']}&f_s_num={$row1['s_num']}&f_page={$f_var['f_page']}&f_que={$f_var['f_que']}&f_del={$f_var['f_del']}";
  }
  else {
     $f_var['action_2flow'] .= $row1['s_num'];
  }


  $f_var["tp"]-> newBlock (  "tb_disp_01"                 ); // 明細
  $f_var["tp"]-> assign   (  "tv_disp_title"     , $f_var['msel_name'][substr($f_var['msel'],0,1)]   ); //

  if($row1['d_date']>'0000-00-00 00:00:00') { // 作廢
    $f_var["tp"]-> newBlock (  "tb_disp_del"                ); // 作廢
    $f_var["tp"]-> assign   (  "tv_d_date"     , "<b><font size=3 color=red>此筆資料已作廢：($row1[d_date])</font></b>"     );
  }


  reset($f_var['fd']); // 將陣列的指標指到陣列第一個元素
  while(list($mfd_id)=each($f_var['fd'])) {
    //echo $mfd_id.'<br>';
    if('f_read_cnt'==$f_var['fd'][$mfd_id]['ename'] ) { // 計算點閱次數 add 2008.03.03 by Mimi
      // 更新閱讀次數
      $query_head = "
                     update {$f_var['mtable']['head']} set read_cnt = (read_cnt+1)
                                                    where s_num='{$row1['s_num']}'
                    ";
      //echo $query_head.'---';
      if(!mysql_query($query_head)) { // 寫入失敗
         sl_errmsg('<b>注意!!</b>閱讀次數新失敗!!!!-sl_init:2477');
         exit;
      }
    }
    //echo $f_var['fd'][$mfd_id]['ename'].'--<br>';
    if('N'==$f_var['fd'][$mfd_id]['show_scr'] || 'hidden'==$f_var['fd'][$mfd_id]['type']) { // 不秀在畫面上
      //echo $f_var['fd'][$mfd_id]['ename'].'******<br>';
      continue; // loop 回到 while
    }
    //echo $f_var['fd'][$mfd_id]['type'].'--------';
    if('hr'==$f_var['fd'][$mfd_id]['type']) { // 如果 type 是 hr 就在畫面多增加一個<tr>
       $f_var["tp"]-> newBlock (  "tb_disp_hr"    ); // 分格線
       $f_var["tp"]-> assign   (  "tv_cname"      , $f_var['fd'][$mfd_id]['cname']   ); // 欄位中文名稱
       $f_var["tp"]-> assign   (  "tv_class"      , $f_var['fd'][$mfd_id]['class']   ); // class
       continue; // loop 回到 while
    }

    $mfd_value = '';
    $url = 'http://'.$_SERVER['SERVER_NAME'].'/~sl/sl_download.php?show=1&file=';
    $path = pathinfo($_SERVER['SCRIPT_NAME']);
    switch($f_var['fd'][$mfd_id]['type']) {
      case "file":
           if(NULL<>trim($row1[$mfd_id])) { // 有資料才列出
              //$mfd_res = str_replace(" ","%20",$row1[$mfd_id]);
              $mext_name = trim(substr($row1[$mfd_id],strrpos($row1[$mfd_id],'.')+1,4));
              if(strstr('jpg/JPG/jpeg/JPEG/gif/GIF/png/PNG/bmp/BMP',$mext_name)) { // 圖檔就直接秀出
                //echo $f_var['server_name'].$path['dirname'].'/'.$f_var["mupload_dir"].$mhistory_dir.$row1[$mfd_id].'<br>';
                 //$mfd_value = "<div id='album_pic'><a  href='".$f_var[mupload_dir].trim($mfd_res)."' target='_blank' class='album_img'><img  border='0' src=".$f_var[mupload_dir].trim($mfd_res)."></a></div>";//add by mimi 2011.01.12 圖片等比例縮小
                 //$mfd_value = "<a  href='".$f_var[mupload_dir].trim($mfd_res)."' target='_blank' class='album_img'><img  border='0' src=".$f_var[mupload_dir].trim($mfd_res)." onload='javascript:DrawImage(this)'></a>";//add by mimi 2011.01.12 圖片等比例縮小
                 //$mfd_value = "<a  href='".$url.base64_encode(getcwd().'/'.$f_var[mupload_dir].trim($mfd_res))."' target='_blank' class='album_img'><img  border='0' src=".$url.base64_encode(getcwd().'/'.$f_var[mupload_dir].trim($mfd_res))." onload='javascript:DrawImage(this)'></a>";//add by mimi 2011.01.12 圖片等比例縮小

                 $mfd_value = "<a href='".$url.base64_encode(getcwd().'/'.$f_var[mupload_dir].$row1[$mfd_id])."' target='_blank' class='album_img'><img src='./thumb/phpThumb.php?src={$f_var['server_name']}{$path['dirname']}/{$f_var["mupload_dir"]}{$mhistory_dir}{$row1[$mfd_id]}'></a>";//add by mimi 2011.01.12 圖片等比例縮小 //Edit By Job 2014.06.12 取消空白字元轉%20
                 //echo $f_var['mupload_dir'].$row1['$mfd_id'];
              }
              else {
                //upd by mimi 2011.12.08 於共用樣板增加判斷連結部份$mfd_value = '<a href='.$url.base64_encode(getcwd().'/'.$f_var[mupload_dir].trim($mfd_res)).'>'.trim($mfd_res).'</a>';
                //$mfd_value = '<a href='.$f_var[mupload_dir].trim($mfd_res).'>'.trim($mfd_res).'</a>';
                //upd by LeeYen 2012.08.13 待辦14620 下載檔案方式改以sl_download.php
                //$mfd_value = '<a href="'.$url.base64_encode(getcwd().'/'.$f_var[mupload_dir].trim($mfd_res)).'">'.trim($mfd_res).'</a>';
                $mfd_value = '<a href="'.$url.base64_encode(getcwd().'/'.$f_var[mupload_dir].$row1[$mfd_id]).'">'.$row1[$mfd_id].'</a>';
              }
              //$mfd_value = '<a href='.$f_var[mupload_dir].trim($mfd_res).'>'.trim($mfd_res).'</a>';
           }
           break;
      case "file2":
           if(NULL<>trim($row1[$mfd_id])) { // 有資料才列出
              $mfd_res = str_replace(" ","%20",$row1[$mfd_id]);
              $mext_name = trim(substr($mfd_res,strrpos($mfd_res,'.')+1,4));
              if(strstr('jpg/JPG/jpeg/JPEG/gif/GIF/png/PNG/bmp/BMP',$mext_name)) { // 圖檔就直接秀出
                 $mfd_value = "<a href='".$url.base64_encode(getcwd().'/'.$f_var[mupload_dir].trim($mfd_res))."' target='_blank' class='album_img'><img src='./thumb/phpThumb.php?src={$f_var['server_name']}{$path['dirname']}/{$f_var["mupload_dir"]}{$mhistory_dir}{".trim($mfd_res)."'></a>";//add by mimi 2011.01.12 圖片等比例縮小 //Edit By Job 2014.06.12 取消空白字元轉%20
                 //$mfd_value = "<a  href='".$f_var[mupload_dir].trim($mfd_res)."' target='_blank' class='album_img'><img  border='0' src=".$url.base64_encode(getcwd().'/'.$f_var[mupload_dir].trim($mfd_res))." onload='javascript:DrawImage(this)'></a>";//add by mimi 2011.01.12 圖片等比例縮小
              }
              else {
                 $mfd_arr = split('/',trim($mfd_res));
                 $mfd_value = '<a href="'.$url.base64_encode(getcwd().'/'.$f_var[mupload_dir].trim($mfd_res)).'">'.trim($mfd_res).'</a>';
                 //$mfd_value = '<a href='.$f_var[mupload_dir].trim($mfd_res).'>'.$mfd_arr[1].'</a>';
              }
              //$mfd_value = '<a href='.$f_var[mupload_dir].trim($mfd_res).'>'.trim($mfd_res).'</a>';
           }
           break;
      case "select":
           //upd by mimi 2012.03.06 第三碼之後,可能會有異常,所以修正...
           $str_value = str_replace('.','-',$row1[$mfd_id]);
           $ex_value  = explode('-',$str_value);
           $mfd_value = trim($ex_value[1]);
           //$mfd_value = trim(substr($row1[$mfd_id],3,999));
           break;
      case "select2":
           $mfd_value = trim($row1[$mfd_id]);
           break;
      case "textarea":
           //$mfd_value = nl2br($row1[$mfd_id]);
           //$mfd_value = '<pre>'.nl2br($row1[$mfd_id]).'</pre>';
           $mfd_value = '<pre>'.$row1[$mfd_id].'</pre>';
           break;
      case "date":
           switch ($f_var['show_year']) {
               case "2":
                    $mfd_value = sl_2ymd(trim($row1[$mfd_id]));
                    break;
               case "4":
                    $mfd_value = sl_4ymd(trim($row1[$mfd_id]));
                    break;
               default:
                    $mfd_value = trim($row1[$mfd_id]);
                    break;
           }
           break;
      case "date2":
             $mfd_value = sl_2ymd(trim($row1[$mfd_id]));
           break;
      //add by mimi 2009.08.31 值班表瀏覽要秀出星期
      case "date3":
             $mfd_value = sl_2ymd(trim($mfd_row1_value),'.').' '.sl_day_week($mfd_row1_value);
           break;
      case "time":
             $mfd_value = substr(trim($row1[$mfd_id]),0,2).':'.substr(trim($row1[$mfd_id]),2,2);
           break;

      case "sign":
           if(''!=trim($row1[$mfd_id])){
             $mfd_value = "<img style='border:1px grey dashed' src='/~sl/sl_sign/sign_img/".trim($row1[$mfd_id])."'>";
           }
           break;

      default:
           $mfd_value = trim($row1[$mfd_id]);
           break;
    }
    if($f_var['fd'][$mfd_id]['for_dispre'] == 'Y'){
       //echo $f_var['fd'][$mfd_id]['cname']."<br>";
       //echo $mfd_id."<br>";
       $f_var['for_dispre'] = $mfd_value;
       //echo $f_var['for_dispre'];
    }
    //echo $mfd_value.'--------<br>';
    if(NULL<>$f_var['fd'][$mfd_id]['func_name']) { // 有自訂函數要秀資料
      // Add by Tony 2007.05.28 抓取函數秀出相關資料
      $mfd_name = $f_var['fd'][$mfd_id]['func_name'];
      $func_b = strpos($mfd_name,'('); // function 名稱 "(" 位置
      $func_e = strpos($mfd_name,')'); // function 名稱 ")" 位置
      if($func_b>0 && $func_e>0) { // 有資料
         $mfunc_name  = substr($mfd_name,0,$func_b); // 抓取 function name
         $mfd_name    = substr($mfd_name,$func_b+1,$func_e-$func_b-1); // 抓取傳入funcfion的值 sl_xxxx(fd_name)->fd_name
         $mfd_value   = $mfd_value.'-'.sl_eval_fnc_name($mfunc_name,$mfd_value);
      }
    }

    if(NULL<>$f_var["f_que"]) { // List
      $str_que  = substr_count($f_var['f_que']," ");
        if('0'<$str_que){
          $fd_que=explode(" ",$f_var['f_que']);
                  for($j=0;$j<count($fd_que);$j++){
                    $f_var['f_que_ary'] = $fd_que[$j];
            $mfd_value = sl_span_str($f_var,$mfd_value);
                  }
        }
        else{
          if(!strstr($mfd_value,'</a>')){
            $mfd_value = sl_span_str($f_var,$mfd_value);
          }
        }       //$mfd_value = str_replace($f_var["f_que"],"<span style='{$f_var['mque_color']}'>{$f_var['f_que']}</span>",$mfd_value);
      // Mark by tony 2007.07.19 增加判斷是否為檔案或是圖檔，取消反白
      //$mfd_value = str_replace($f_var["f_que"],"<span style='{$f_var['mque_color']}'>{$f_var['f_que']}</span>",$mfd_value);
    }

    if($f_var['fd'][$mfd_id]['type'] == "file" && !$mfd_value){ // Add by Job 2015.04.30 沒有附件就不秀出
      continue;
    }
    $f_var["tp"]-> newBlock (  "tb_disp_fd"                                       ); // 輸入畫面
    $f_var["tp"]-> assign   (  "tv_width1"     , $f_var["mwidth1"]                ); //
    $f_var["tp"]-> assign   (  "tv_width2"     , $f_var["mwidth2"]                ); //
    $f_var["tp"]-> assign   (  "tv_cname"      , $f_var['fd'][$mfd_id]['cname']   ); // 欄位中文名稱
    $f_var["tp"]-> assign   (  "tv_fd_ename"   , $f_var['fd'][$mfd_id]['ename']   ); // 欄位英文名稱
    $f_var["tp"]-> assign   (  "tv_fd_value"   , $mfd_value                       ); // 欄位內容
    if('02'==substr($row1[$f_var['close_name']],0,2)){
      echo "<span style='position: absolute; left: 25%; top: 20% ; z-index: 1'><img src='/~sl/img/close2.gif' width='70' height='68' alt='結案了啦'></span>";
    }
    //if('02'==substr($row1[$f_var['close_name']],0,2)){
    //  echo "<span id='close_pic' style='position:absolute ; left:25% ; top:15% ; z-index:1 ; width:400px ; height:400px ; background-image: url(/~sl/img/close.png); opacity : 0.2'></span>";
    //}
    //if ($f_var['fd'][$mfd_id]['cname'] === "上傳附件") {
    //  //$d_tmp = @read_dir("$f_var[mupload_dir].$_POST[nf03]");
    //  //$dd = read_dir($f_var[mupload_dir]);
    //  $dd = read_dir($f_var[mupload_dir]."095004");
    //  echo $f_var[mupload_dir].'----';
    //  echo $dd.'++++';
    //  $f_var["tp"]-> assign   (  "tv_fd_value"   , $dd                       ); // 欄位中文名稱
    //} else {
    //  $f_var["tp"]-> assign   (  "tv_fd_value"   , $mfd_value                       ); // 欄位中文名稱
    //}
    //@read_dir("$f_var[mupload_dir].$_POST[nf03]");

  }

  // 另外處理的 msel
  switch ($f_var['msel']) {
    case "3": // 刪除
         $f_var["tp"]-> newBlock (  "tb_del_btn"                              ); // 作廢按鈕畫面
         $f_var["tp"]-> assign   (  "tv_action"        , $f_var['action_del'] ); // form action
         break;
    case "81": // 其它 add Mimi 2008.02.13
         $f_var["tp"]-> newBlock (  "tb_other_btn"                              ); // 其它按鈕畫面 ex:staf/doc01.php(採購業務)
         $f_var["tp"]-> assign   (  "tv_action"        , $f_var['action_other'] ); // form action
         break;
    case "9": // 結案
         $f_var["tp"]-> newBlock (  "tb_close_btn"                              ); // 結案按鈕畫面
         $f_var["tp"]-> assign   (  "tv_action"        , $f_var['action_close'] ); // form action
         break;
    case "A": // 追蹤
         $f_var["tp"]-> newBlock (  "tb_trace_btn"                              ); // 追蹤按鈕畫面
         $f_var["tp"]-> assign   (  "tv_action"        , $f_var['action_trace'] ); // form action
         break;
    case "f": // 轉簽核單 add by mimi 2011.07.01 增加轉簽核功能
         $f_var["tp"]-> newBlock (  "tb_2flow_btn"                              ); // 轉簽核單按鈕畫面
         $f_var["tp"]-> assign   (  "tv_action"        , $f_var['action_2flow'] ); // form action
         break;
    default:
         break;
  }


  // 有設定回應就使用這段 Display
  if(count($f_var['fd_re']) > 0 && '41' == $f_var['msel']) {  // 有 body 資料
    if('f_read_cnt'==$f_var['fd'][$mfd_id]['ename'] ) {//upd by yifun 2014.04.21
      // 更新閱讀次數
      $query_head = "
                     update {$f_var['mtable']['head']} set read_cnt = (read_cnt+1)
                                                    where s_num='{$row1['s_num']}'
                    ";
      //echo $query_head.'---';
      if(!mysql_query($query_head)) { // 寫入失敗
        sl_errmsg('<b>注意!!</b>閱讀次數新失敗!!!!-sl_init:2315');
        exit;
      }
    }
     if(NULL == $f_var['body_order']){
       $f_var['body_order']  = "b_date DESC";
       $f_var['body_order2'] = "b_date ASC";
     }else{
       $f_var['body_order2'] = "b_date DESC";
     }
     if(isset($_REQUEST['f_s_num'])){
       $row1['s_num'] = $_REQUEST['f_s_num'];
     }
     $query_body  = "select {$f_var['mtable']['body']}.*
                            from {$f_var['mtable']['body']}
                            where {$f_var['mtable']['body']}.h_s_num = {$row1['s_num']} and {$f_var['mtable']['body']}.d_date='0000-00-00 00:00:00'
                            order by {$f_var['mtable']['body']}.{$f_var['body_order']}
                    ";
     //echo $query_body."<BR>";

     $result_body = mysql_query($query_body);
     $body_cnt    = mysql_num_rows($result_body); // body 總筆數
     $maxlen = mb_strlen($body_cnt); // body_cnt 字串長度，補0用
     if($body_cnt>0) { // 有資料
        //$mnum = 1;
        $f_var["tp"]-> newBlock (  "tb_disp_re_01"                              ); // body 列出
        //-----------------------------------By Job 2014.05.06 回應分頁---------------------------------------------------
        $a_bpage = '50';
        $max_page=  ceil($body_cnt/$a_bpage);
        $b_page = '1'; // 給show_all用
        if($max_page > 1){
          if($_REQUEST['show_all'] != 'Y'){   // Add By Job 2014.07.28 加入列出全部判斷
            $b_page = (''==$_REQUEST['f_bpage'])?$max_page:$_REQUEST['f_bpage'];
            $limt = 'LIMIT '.$a_bpage*($b_page-1).','.$a_bpage;
          }
          /*$query_body  = "select {$f_var['mtable']['body']}.*
                         from {$f_var['mtable']['body']}
                         where {$f_var['mtable']['body']}.h_s_num = {$row1['s_num']} and {$f_var['mtable']['body']}.d_date='0000-00-00 00:00:00'
                         order by {$f_var['mtable']['body']}.{$f_var['body_order']} {$limt}
                  ";*/
          $query_body  = "select * from
                                    (select {$f_var['mtable']['body']}.* from {$f_var['mtable']['body']}
                                              where {$f_var['mtable']['body']}.h_s_num = {$row1['s_num']} and {$f_var['mtable']['body']}.d_date='0000-00-00 00:00:00'
                                              order by {$f_var['mtable']['body']}.{$f_var['body_order2']} {$limt}) as a
                          order by a.{$f_var['body_order']}
                          ";
          //echo $f_var['body_order']."<BR>";
          //echo $query_body."<BR>";
          $result_body = mysql_query($query_body);
          $body_cnt    = mysql_num_rows($result_body); // body 總筆數

          $f_var["tp"]-> newBlock (  "tp_in_page_list"                                     ); //
          $f_var["tp"]-> assign   (  "tv_all_link" , "<a href='".u_showproc().".php?msel=41&f_s_num=".$row1[s_num]."&show_all=Y'>"         ); // Add By Job 2014.07.28 加入列出全部
          $f_var["tp"]-> assign   (  "tv_all"      , '不分頁列出'             );
          for($i=1;$i<=$max_page;$i++){
            $f_var["tp"]-> newBlock (  "tp_in_page"              ); //
            $f_var["tp"]-> assign   (  "tv_re_link" , "<a href='".u_showproc().".php?msel=41&f_s_num=".$row1[s_num]."&f_bpage=".$i."'>"             );
            $f_var["tp"]-> assign   (  "tv_page"    , '第'.$i.'頁'             );
            $f_var["tp"]-> assign   (  "tv_re_link_foot" , '</a>'             );
          }
        }
        //----------------------------------------------------------------------------------------------------------------
        //-----------------------------------By Job 2014.05.07 回應排序---------------------------------------------------
        if(strstr($f_var['body_order'],"DESC")){
          $mnum = $body_cnt;
        }else{
          $mnum = 1;
        }
        $mnum    = $mnum + $a_bpage*($b_page-1);
        //----------------------------------------------------------------------------------------------------------------
        while ($row_body = mysql_fetch_array($result_body)) {
               $mb_date = substr($row_body[b_date],5,11); // 建檔日期
               $f_var["tp"]-> newBlock (  "tb_disp_re_detail"                       ); // body 資料
               $vct_ok = 'N';
               $f_var["tp"]-> newBlock (  "tb_disp_re_upd"               ); // 可以修改 // edit by Job 2014.04.29 將回應抬頭拆成兩區塊
               switch ($f_var["upd_ct"]) {
                    case "empno": // 檢查員工編號
                         if($row_body['b_empno']==$_SESSION["login_empno"]) {
                            $vct_ok = 'Y';
                         }
                         break;
                    case "dept": // 檢查部門代號
                         if('Y'==$_SESSION["it_mode"]) {
                            if('S121'==$_SESSION["login_dept_id"] or 'S122'==$_SESSION["login_dept_id"] or 'S102'==$_SESSION["login_dept_id"]) {
                               $vct_ok = 'Y';
                            }
                         }
                         else {
                            if($row1['b_dept_id']==$_SESSION["login_dept_id"]) {
                               $vct_ok = 'Y';
                            }
                         }
                         break;
                    case "user_def": // 使用者自行定義
                         if('Y'==$f_var['user_def']) {
                            $vct_ok = 'Y';
                         }
                         if('empno'==$f_var['user_def_empno']) { //檢查員工編號.....2008/01/21..MIMI
                           if($row1['b_empno']==$_SESSION["login_empno"]) {
                              $vct_ok = 'Y';
                           }
                         }
                         break;
                    case "reply": // 報修回應不修改
                         $vct_ok = 'N';
                         break;
                    default: // 不檢查，通通都可以修改
                         $vct_ok = 'Y';
                         break;
               }
               if('Y'==$vct_ok) {
                  $f_var["tp"]-> newBlock (  "tb_disp_re_upd_01"               );// Edit By Job 2014.04.29 將回應抬頭拆成兩區塊，修改獨立顯示
                  $f_var["tp"]-> assign   (  "tv_upd_link"        , u_showproc().".php?msel=62&f_page={$f_var['f_page']}&f_s_num={$row_body['s_num']}&f_h_s_num={$f_var['f_s_num']}&f_que={$f_var['f_que']}"               ); //
               }
               reset($f_var["list_re_title"]); // 將陣列的指標指到陣列第一個元素
               $mt_cnt = count($f_var["list_re_title"]);
               $mre_title = '';
               for($i=0;$i<$mt_cnt;$i++) {
                 if(strstr($f_var["list_re_title"][$i],'date')) { // 日期欄位，另外處理
                   if('0000-00-00' == substr($row_body[$f_var["list_re_title"][$i]],0,10) ) {
                      $mre_title .= '';
                   }
                   else {
                      //$mre_title .= substr($row_body[ $f_var["list_re_title"][$i] ],5,11);
                      $mre_title .= substr($row_body[$f_var["list_re_title"][$i]],0,16);
                   }
                 }
                 else {
                   if(strpos($row_body[$f_var["list_re_title"][$i]], ".") || empty($row_body[$f_var["list_re_title"][$i]])) {
                     //$mre_title .= substr($row_body[$f_var["list_re_title"][$i]],3);
                     $mre_title .= str_pad(substr($row_body[$f_var["list_re_title"][$i]],3),6,'　',STR_PAD_RIGHT); //Edit By Job 2014.05.07 回應title區別補空位
                   }else{
                     //$mre_title .= $row_body[$f_var["list_re_title"][$i]];
                     switch ( mb_strlen($row_body[$f_var["list_re_title"][$i]])) {
                          case "1":
                          case "3":
                          case "5":
                          case "7":
                               $row_body[$f_var["list_re_title"][$i]] = $row_body[$f_var["list_re_title"][$i]].' ';//Edit By Job 2014.05.08 回應title名字半形補空
                            break;
                       default:
                            break;
                     }
                     $mre_title .= str_pad($row_body[$f_var["list_re_title"][$i]],8,'　',STR_PAD_RIGHT);            //Edit By Job 2014.05.07 回應title名字預留四個字的空位
                   }
                   if($mt_cnt>$i) {
                     $mre_title .= '&nbsp;-&nbsp;';
                   }
                 }
               }

               //echo "<pre>";
               //echo $mnum;
               //print_r($f_var['body_order']);
               //echo "</pre>";
               //-----------------------------------By Job 2014.05.07 回應排序---------------------------------------------------
               $mnum2 = str_pad($mnum,$maxlen,'0',STR_PAD_LEFT);   //Edit By Job 2014.05.07 回應流水號補0
               $f_var["tp"]-> assign   (  "tb_disp_re_detail.tv_disp_re_title"   , "({$mnum2} - {$mre_title})"               );
               $f_var["tp"]-> assign   (  "tb_disp_re_detail.tp_num"   , $mnum               );
               //----------------------------------------------------------------------------------------------------------------
               reset($f_var['fd_re']); // 將陣列的指標指到陣列第一個元素
               $f_var['file_count'] = 1;
               //---------------------------------By Job 2014.05.06 改善回應收合問題----------------------------------
               $f_var["tp"]-> newBlock (  "tb_disp_re_fd"    ); // 開啟回應區塊
               $f_var["tp"]-> assign   (  "tb_disp_re_fd.tp_num"   , $mnum               );
               //-----------------------------------------------------------------------------------------------------
               while(list($mfd_re_id)=each($f_var['fd_re'])) {
                     if('N'==$f_var['fd_re'][$mfd_re_id]['disp_re'] || 'hidden'==$f_var['fd_re'][$mfd_re_id]['type']) { // 不秀在畫面上
                        continue; // loop 回到 while
                     }
                     $mfd_re_value = '';
                     //echo $mfd_re_id.'---';
                     //echo $f_var['fd_re'][$mfd_re_id]['type'].'_____';
                     switch($f_var['fd_re'][$mfd_re_id]['type']) {
                            case "file":
                                 $url = 'http://'.$_SERVER['SERVER_NAME'].'/~sl/sl_download.php?show=1&file=';
                                 $path = pathinfo($_SERVER['SCRIPT_NAME']);
                                 if(NULL<>trim($row_body[$mfd_re_id])) { // 有資料才列出
                                    //$mfd_res = str_replace(" ","%20",$row_body[$mfd_re_id]);
                                    $mext_name = trim(substr($row_body[$mfd_re_id],strrpos($row_body[$mfd_re_id],'.')+1,4));
                                    if(strstr('jpg/JPG/jpeg/JPEG/gif/GIF/png/PNG/bmp/BMP',$mext_name)) { // 圖檔就直接秀出
                                       //$mfd_re_value = '<hr>附件'.$f_var['file_count']."：<br><a  href='".$f_var[mupload_dir].trim($mfd_res)."' target='_blank' class='album_img'><img  border='0' src=".$f_var[mupload_dir].trim($mfd_res)." onload='javascript:DrawImage(this)'></a>";//add by mimi 2011.01.12 圖片等比例縮小
                                       //upd by LeeYen 2012.08.13 待辦14620 下載檔案方式改以sl_download.php
                                       //$mfd_re_value = '<hr>附件'.$f_var['file_count']."：<br><a href='/~sl/sl_download.php?show=1&file=".base64_encode(getcwd()."/".$f_var[mupload_dir].trim(str_replace("%20", ' ',$mfd_res)))."' target='_blank' class='album_img'><img  border='0' src='/~sl/sl_download.php?show=1&file=".base64_encode(getcwd()."/".$f_var[mupload_dir].trim(str_replace("%20", ' ',$mfd_res)))."' onload='javascript:DrawImage(this)'></a>";//add by mimi 2011.01.12 圖片等比例縮小
                                       //if('0883430'==$_SESSION['login_empno']){
                                         //echo 'http://'.$_SERVER['SERVER_NAME'].'/~docs/it/docs/'.$f_var[mupload_dir].$row_body[$mfd_re_id].'<br>';
                                         //if (file_exists('http://'.$_SERVER['SERVER_NAME'].'/~docs/it/docs/'.$f_var[mupload_dir].$row_body[$mfd_re_id])){
                                         if(file_exists(getcwd().'/'.$f_var[mupload_dir].$row_body[$mfd_re_id])){
                                           $f_path = getcwd().'/'.$f_var[mupload_dir].$row_body[$mfd_re_id];
                                         } else {
                                           $f_path = getcwd().'/'.$f_var[mupload_dir].substr($row_body[$mfd_re_id],0,2).'/'.$row_body[$mfd_re_id];
                                           $f_year = substr($row_body[$mfd_re_id],0,2).'/';
                                         }
                                         //echo $f_var["mupload_dir"].'<br>';
                                       //}
                                       $mfd_re_value = "<hr>附件".$f_var['file_count']."：<br><a href='".$url.base64_encode($f_path)."' target='_blank' class='album_img'><img src='./thumb/phpThumb.php?src={$f_var['server_name']}{$path['dirname']}/{$f_var["mupload_dir"]}{$f_year}{$mhistory_dir}{$row_body[$mfd_re_id]}'></a>";//add by mimi 2011.01.12 圖片等比例縮小 //Edit By Job 2014.06.12 取消空白字元轉%20
                                       $f_var['file_count']++;
                                    }
                                    else {
                                       //$mfd_re_value = '<hr>附件'.$f_var['file_count'].'：<br>  <a href='.$f_var[mupload_dir].trim($mfd_res).'>'.trim($mfd_res).'</a>';
                                       //upd by LeeYen 2012.08.13 待辦14620 下載檔案方式改以sl_download.php
                                       //$mfd_re_value = '<hr>附件'.$f_var['file_count'].'：<br><a href="/~sl/sl_download.php?show=1&file='.base64_encode(getcwd()."/".$f_var[mupload_dir].trim($mfd_res)).'">'.trim($mfd_res).'</a>';
                                       if(file_exists(getcwd().'/'.$f_var[mupload_dir].$row_body[$mfd_re_id])){
                                         $f_path = getcwd().'/'.$f_var[mupload_dir].$row_body[$mfd_re_id];
                                       } else {
                                         $f_path = getcwd().'/'.$f_var[mupload_dir].substr($row_body[$mfd_re_id],0,2).'/'.$row_body[$mfd_re_id];
                                       }
                                       //$mfd_re_value = '<hr>附件'.$f_var['file_count'].'：<br><a href="'.$url.base64_encode(getcwd().'/'.$f_var[mupload_dir].$row_body[$mfd_re_id]).'">'.$row_body[$mfd_re_id].'</a>';
                                       $mfd_re_value = '<hr>附件'.$f_var['file_count'].'：<br><a href="'.$url.base64_encode($f_path).'">'.$row_body[$mfd_re_id].'</a>';
                                       $f_var['file_count']++;
                                    }
                                    //$mfd_value = '<a href='.$f_var[mupload_dir].trim($mfd_res).'>'.trim($mfd_res).'</a>';
                                    //$mfd_re_value = '<hr><a href='.$f_var[mupload_dir].trim($row_body[$mfd_re_id]).'>'.trim($row_body[$mfd_re_id]).'</a>';
                                 }
                                 break;
                            case "select":
                                 //upd by mimi 2012.03.06 第三碼之後,可能會有異常,所以修正...
                                 $str_value = str_replace('.','-',$row_body[$mfd_re_id]);
                                                                                                 $ex_value  = explode('-',$str_value);
                                 $mfd_re_value = trim($ex_value[1]);
                                 //$mfd_re_value = trim(substr($row_body[$mfd_re_id],3,999));
                                 break;
                            case "select2":
                                 $mfd_re_value = trim($row_body[$mfd_re_id]);
                                 break;
                            case "textarea":
                                 $mfd_re_value = '<pre>'.$row_body[$mfd_re_id].'</pre>';
                                 break;
                            case "textarea2":  // Add By Job 2014.05.05 textarea2
                                 if(!empty($row_body[$mfd_re_id])) {
                                   $mfd_re_value = '<pre><span class="comp-fd"><hr>資訊專用回應:(只有資訊看的到(⊙.⊙)凸)</span><br>'.sl_span_str($f_var,$row_body[$mfd_re_id]).'</pre>'; // 將查詢字串反白
                                 }
                                 break;
                            case "date":
                                 switch ($f_var['show_year']) {
                                     case "2":
                                          $mfd_re_value = sl_2ymd(trim($row_body[$mfd_re_id]));
                                          break;
                                     case "4":
                                          $mfd_re_value = sl_4ymd(trim($row_body[$mfd_re_id]));
                                          break;
                                     default:
                                          $mfd_re_value = trim($row_body[$mfd_re_id]);
                                          break;
                                 }
                                 break;
                            case "time":
                                   $mfd_value = substr(trim($row_body[$mfd_re_id]),0,2).':'.substr(trim($row_body[$mfd_re_id]),2,2);
                                 break;
                            default:
                                 $mfd_re_value = trim($row_body[$mfd_re_id]);
                                 break;
                     }
                     if(NULL != $f_var['fd_re'][$mfd_re_id]['disp_extra']){
                      $mfd_re_value = str_replace('#value#',$mfd_re_value,$f_var['fd_re'][$mfd_re_id]['disp_extra']);
                     }

                     $f_var["tp"]-> assign   (  "tv_width1"        , $f_var["mwidth1"]                ); //
                     $f_var["tp"]-> assign   (  "tv_width2"        , $f_var["mwidth2"]                ); //
                     //---------------------------------By Job 2014.05.06---------------------------------------------
                     $f_var["tp"]-> newBlock (  "tb_disp_re_fd_value"    ); // 列出欄位資料
                     $f_var["tp"]-> assign   (  "tv_fd_re_value"   , $mfd_re_value );
                     //-----------------------------------------------------------------------------------------------

                     if ($f_var['fd_re'][$mfd_re_id]['type']=='textarea') {
                       $f_var["tp"]-> assign   (  "tp_num", $mnum      );
                       $f_var["tp"]-> assign   (  "tb_disp_re_upd.tp_display_flag" , $reply_cnt?'+':'-'             ); //收合的預設+
                       $f_var["tp"]-> assign   (  "tb_disp_re_fd.tp_display_value", $reply_cnt?'close':''      );      //回應內文預設close屬性
                       $patterns = array('/\s*<[^>]*>/','/-->|\/|\-|\.|,|\*\*|:|&nbsp;/','/\t|\s|\r|\n/');
                       $mfd_re_value_cut = mb_substr(preg_replace($patterns,'',$mfd_re_value),0,40,'BIG5').'...';      //摘要擷取前幾個字檢視
                       $f_var["tp"]-> assign   (  "tb_disp_re_detail.tp_qab_5_cut"   , $mfd_re_value_cut             );//title的摘要
                       $f_var["tp"]-> assign   (  "tb_disp_re_detail.tp_qab_5_value" , $reply_cnt?'':'close'      );   //title預設顯示
                       $reply_cnt++;
                       //$f_var["tp"]-> newBlock (  "tb_disp_re_fd_close"    ); // edit by Job 2014.05.05 回應的[close]最後列出
                       //$f_var["tp"]-> assign   (  "tp_num", $mnum      );
                     }
               }
               //$f_var["tp"]-> newBlock (  "tb_disp_re_fd_close"    );           // edit by Job 2014.05.05 回應的[close]最後列出
               $f_var["tp"]-> assign   (  "tp_num", $mnum      );
               if(strstr($f_var['body_order'],"DESC")){
                 $mnum--;
               }else{
                 $mnum++;
               }
        }
     }

     if('4' == substr($f_var['msel'],0,1) && $f_var['fd_close_re'] != 'Y' && '02'!=substr($row1[$f_var['close_name']],0,2)){  //edit by Job 2014.06.11 非結案
       $f_var["tp"]-> newBlock (  "tb_in_re"                 ); // 新增資料
       $f_var["tp"]-> assign   (  "tv_scrmsg"     , '回應'   ); // 按鈕文字
       $f_var["tp"]-> assign   (  "tv_re_action" , u_showproc().".php?msel=61&f_sid={$f_var['f_sid']}&f_h_s_num={$row1['s_num']}"    ); // form action
       /*if(NULL!=$f_var['close_btn']){    // add Mimi2008.02.29 增加結案按鈕
          $f_var["tp"]-> newBlock (  "tb_re_in_close"                 ); // 結案
          $f_var["tp"]-> assign   (  "tv_close_link" ,  $f_var['close_btn']  ); // form action
       }*/
       sl_get_re($f_var); // sl_init.php
      }
  }
  //add by 小樵 2019.04.19 如果要顯示body油站,$f_var['sl_b_gid']一定要給值
  if($f_var['msel'] == '41' && $f_var['sl_b_gid'] == 'Y' || $f_var['msel'] == '3' && $f_var['sl_b_gid'] == 'Y'){
    $f_var["tp"]-> newBlock ("tb_table_bd2"        ); //檔身
    $b_gid = sl_b_gid2($row1['b_gid']);
    $f_var["tp"]-> assign   ("tv_dept"      , $b_gid                 );
  }
  // Mark by Tony 2007.05.11
  //$f_var['f_wg06'] = $row1['s_num'];
  //sl_web_log($f_var);

  //add by 姿俞 2018.02.07 報修33239 回應2 動態附件欄位 >>
  if($f_var['fd_dyn_file'] != "") { //顯示動態附件欄位
        sl_disp_file($f_var);
  }
  //add by 姿俞 2018.02.07 報修33239 回應2 動態附件欄位 <<

  return;
}








function read_dir($dir) {
   $path = opendir($dir);
   while (false !== ($file = readdir($path))) {
       if($file!="." && $file!="..") {
           if(is_file($dir."/".$file))
               $files[]=$file;
           else
               $dirs[]=$dir."/".$file;
       }
   }
   if($dirs) {
       natcasesort($dirs);
       foreach($dirs as $dir) {
           //echo $dir;
           read_dir($dir);
       }
   }
   if($files) {
       natcasesort($files);
       foreach ($files as $file) {
           //echo $file."\n";
           $dd[] = $file;
       }
       $dd = implode(',',$dd);

   }
   return $dd;
   closedir($path);
}
// **************************************************************************
//  函數名稱: sl_array_count()
//  函數功能: 加總陣列 value 數值
//  使用方式: sl_array_count($array)
//  程式設計: kenny
//  設計日期: 2006.11.10
// **************************************************************************
function sl_array_count($a) {
  if(!is_array($a)) return $a;
  foreach($a as $key=>$value)
  $totale += sl_array_count($value);
  return $totale;
}

/*
名稱: sl_conv_date()    轉換西元年 - 民國年
用法: ch_date(來源日期, 來源分隔符號[選填], 輸出分隔符號[選填]);
範例: echo ch_date(2006/12/31,'/','-'); // output: 95-12-31
設計: kenny
日期: 2006-12-25
*/
function sl_conv_date($date="", $from="", $to="") {
  if (!$date) $date = date('Ymd');
  $m = substr($date,-4,2);
  $d = substr($date,-2,2);
  if (strlen($date)>7) {
    $mode = 1;
  } else $mode = 2;
  switch ($mode) {
    case "1":
    if ($from == '') {
      $y = substr($date,0,4)-1911;
    } else {
      $tok = explode($from,$date);
      $y = $tok[0]-1911;
      $m = $tok[1];
      $d = $tok[2];
    }
    break;
    case "2":
    if ($from == '') {
      if (strlen($date)==7) {
        $y = substr($date,0,3)+1911;
      } else $y = substr($date,0,2)+1911;
    } else {
      $tok = explode($from,$date);
      $y = $tok[0]+1911;
      $m = $tok[1];
      $d = $tok[2];
    }
    break;
  }
  $date = $y.$to.$m.$to.$d;
  return $date;
}
  function sl_left($str,$str_n) {
    return(substr($str."                    ",0,$str_n));
  }
  function sl_right($str,$str_n) {
    $str_n=$str_n * -1;
    return(substr("                    ".trim($str),$str_n));
  }
  function sl_iif($cond,$ok_value,$ng_value){
      $r_value = $cond ? $ok_value : $ng_value;
      return ($r_value);
  }
  function left($str,$str_n) {
    return(substr($str."                    ",0,$str_n));
  }
  function right($str,$str_n) {
    $str_n=$str_n * -1;
    return(substr("                    ".trim($str),$str_n));
  }

// **************************************************************************
//  函數名稱: sl_ymd()
//  函數功能: 秀出西元年月日或是民國年月日
//  使用方式: sl_ymd($f_var['show_year'],'20061022','$分隔格式<'.'、'/'、'-'>);   return 2006-10-22
//                                                   ^^^^^^^^^不傳值預設為"-"
//  說    明: 傳入日期一律為西元年月日，$f_var['show_year'] 於 xx_init.php 設定
//  程式設計: Tony
//  設計日期: 2007.02.28
// **************************************************************************
function sl_ymd($vshow_year,$vdate,$vstyle='-') {
  switch ($vshow_year) {
      case "2":
           $vrtn_date = sl_2ymd(trim($vdate),$vstyle);
           break;
      case "4":
           $vrtn_date = sl_4ymd(trim($vdate),$vstyle);
           break;
      default:
           $vrtn_date = trim($vdate);
           break;
  }
  return($vrtn_date);
}
// **************************************************************************
//  函數名稱: sl_4ymd()
//  函數功能: 秀西元年月日 (yyyy-mm-dd)
//  使用方式: sl_4ymd('20061022',$分隔格式<'.'、'/'、'-'>);   return 2006-10-22
//                               ^^^^^^^^^不傳值預設為"-"
//  說    明: 傳入日期一律為西元年月日
//  程式設計: Tony
//  設計日期: 2007.01.10
// **************************************************************************
function sl_4ymd($vdate,$vstyle='-') { // $vstyle='.' = $vstyle 沒有傳遞參數時的預設值
  $vokdate = ''; // 回傳日期變數
  $vdatelen = strlen(trim($vdate)); // 日期字串長度
  if(8==$vdatelen) {
     $vokdate = substr($vdate,0,4).$vstyle.substr($vdate,4,2).$vstyle.substr($vdate,6,2);
  }
  //else {
  //   $vokdate = '日期有誤-sl_4ymd()';
  //}
  return($vokdate);
}

// **************************************************************************
//  函數名稱: sl_2ymd()
//  函數功能: 秀民國年月日 (yyyy-mm-dd)
//  使用方式: sl_4ymd('20061022',$分隔格式<'.'、'/'、'-'>);   return 95-10-22
//                               ^^^^^^^^^不傳值預設為"-"
//  說    明: 傳入日期一律為西元年月日
//  程式設計: Tony
//  設計日期: 2007.01.10
// **************************************************************************
function sl_2ymd($vdate,$vstyle='-') { // $vstyle='.' = $vstyle 沒有傳遞參數時的預設值
  $vokdate = ''; // 回傳日期變數
  $vdatelen = strlen(trim($vdate)); // 日期字串長度
  if(8==$vdatelen) {
     $vokdate =  strval(substr($vdate,0,4)-1911).$vstyle.substr($vdate,4,2).$vstyle.substr($vdate,6,2);
  }
  //else {
  //   $vokdate = '日期有誤-sl_2ymd()';
  //}
  return($vokdate);
}

// **************************************************************************
//  函數名稱: sl_cht_ymd()
//  函數功能: 秀中文年月日 (yyyy年mm月dd)
//  使用方式: sl_cht_ymd('20061022','ad(西元年)'或'roc(民國年)');
//                                   ^^^^^^^^^不傳值預設為"西元年"
//  說    明: 傳入日期一律為西元年月日
//  程式設計: Job
//  設計日期: 2015.11.19
// **************************************************************************
function sl_cht_ymd($vdate,$vstyle='ad') { // $vstyle 沒有傳遞參數時的預設值
  $vokdate = ''; // 回傳日期變數
  $vdatelen = strlen(trim($vdate)); // 日期字串長度
  if(8==$vdatelen) {
        switch($vstyle){
          case "ad":
                $vokdate =  substr($vdate,0,4)."年".substr($vdate,4,2)."月".substr($vdate,6,2)."日";
                break;
          case "roc":
                $vokdate =  strval(substr($vdate,0,4)-1911)."年".substr($vdate,4,2)."月".substr($vdate,6,2)."日";
                break;
        }
  }

  return($vokdate);
}

// **************************************************************************
//  函數名稱: sl_chk_msg()
//  函數功能: 抓取超過系統今天日期且目前尚未讀取的訊息數量
//  程式設計: Tony
//  設計日期: 2007.02.06
// **************************************************************************
   function sl_chk_msg($vempno,$vshow_msg='N') {
      $vtoday = date('Y-m-d');

      u_open('message_center');
      $query_msg  = "select count(*) as new_msg_qty
                            from message_box_new
                            where mb02 = 'A'            AND
                                  mb12 = '1'            AND
                                  mb07 = '$vempno' AND
                                  substring(mb13,1,10) < '$vtoday'     AND
                                  mb17<='{$vtoday}' and
                                  d_date = '0000-00-00 00:00:00'
                            order by mb07
                    ";
      //echo $query_msg.'----------';
      $result_msg = mysql_query($query_msg);
      $row_msg    = mysql_fetch_array($result_msg);

      $mmsg_qty = $row_msg["new_msg_qty"];
      //echo $mmsg_qty;
      if('Y'==$vshow_msg && $mmsg_qty>0) {
         sl_errmsg('您有 <font class=new>'.$mmsg_qty.'</font> 封超過一天以上的訊息尚未讀取！<br>請先至<a href="/~docs/message/message_main.php?msel=4&mmb02=A">【訊息中心】</a>讀取後，才可繼續使用其他系統！');
      }

      return($mmsg_qty);
   }
// **************************************************************************
//  函數名稱: sl_chk_qa()
//  函數功能: 抓取超過系統今天日期且目前尚未結案的電腦報修數量
//  程式設計: Tony
//  設計日期: 2007.06.12
// **************************************************************************
   function sl_chk_qa($vempno,$vshow_msg='N') {
      $vtoday = date('Y-m-d');
      u_open('qa');
      $query1  = "select *
                         from qah
                         where substring(qah_6,1,2 ) = '04'       AND
                               b_empno = '$vempno'                AND
                               substring(m_date,1,10) < '$vtoday' AND
                               d_date = '0000-00-00 00:00:00'
                         order by s_num
                 ";
      //echo $query1.'----------';
      $result1  = mysql_query($query1);
      $mmax_qty = mysql_num_rows($result1);   // 未結案數量
      if('Y'==$vshow_msg && $mmax_qty>0) {
         sl_errmsg('您有 <font class=new>'.$mmax_qty.'</font> 個超過一天以上的未結案件！<br>請至【電腦報修】結案，才可繼續使用其他系統！');
         while($row1 = mysql_fetch_array($result1)) {
               $vm_date = substr($row1['m_date'],5,5);
               $mlink    = "/~docs/erp_qa/erp_qa.php?msel=6&mqah_no={$row1['s_num']}";
               $msubject = "<a href={$mlink}>序號:{$row1['s_num']}&nbsp;({$vm_date})&nbsp;{$row1['qah_4']}</a>";
               sl_errmsg($msubject);
         }
      }
      return($mmax_qty);
   }
// **************************************************************************
//  函數名稱: sl_chk_hr()
//  函數功能: 抓取超過系統一個月且目前尚未確認的加退保異動資料
//  程式設計: Mimi
//  設計日期: 2011.11.01
// **************************************************************************
   function sl_chk_hr($vempno,$vshow_msg='N') {
      $vtoday = date('Y-m-d');
      $fd_one_month = date("Y-m-d",strtotime(date("Ymd")." -1 month")); ;
      sl_open('hr');
     
      ///$query_msg  = "SELECT count(*) as cnt
       //              FROM is_mf_mdfy
       //                LEFT JOIN sl.dept on is_mf_mdfy.im01=dept.dept_id
       //              WHERE is_mf_mdfy.a_date = '0000-00-00 00:00:00'
       //                    AND is_mf_mdfy.d_date = '0000-00-00 00:00:00'
       //                    AND ( ({$vempno}='9167722' and (p_gid like 'S1%' or p_gid like 'E1%' or p_gid like 'T1%') )
       //                         or ({$vempno}='0778320' and (p_gid like 'S2%') )
       //                         or ({$vempno}='9203443' and (p_gid like 'S3%') )
       //                         /*or ({$vempno}='0775711' and (p_gid like 'S3%') )*/
       //                        )
       //                    AND is_mf_mdfy.b_date < '{$fd_one_month}'
      
       //             ";     
      $query_msg  = "SELECT count(*) as cnt
                     FROM is_mf_mdfy
                       LEFT JOIN sl.dept on is_mf_mdfy.im01=dept.dept_id
                     WHERE is_mf_mdfy.a_date = '0000-00-00 00:00:00'
                           AND is_mf_mdfy.d_date = '0000-00-00 00:00:00'
                           AND {$vempno}='9167722'
                           AND is_mf_mdfy.b_date < '{$fd_one_month}'
      
                    ";  //upd by 佳玟 2020.06.15 目前收訊息的人不是異動部門就是不在了, 已和小傅告知後, 先都給姿含 
      //if($vempno=='9167722'){
      //  echo '<pre>'.$query_msg.'</pre>----------';
      //}
      $result_msg = mysql_query($query_msg);
      $row_msg    = mysql_fetch_array($result_msg);

      $mmsg_qty = $row_msg["cnt"];
      //echo $mmsg_qty;
      if('Y'==$vshow_msg && $mmsg_qty>0) {
         sl_errmsg('您有 <font class=new>'.$mmsg_qty.'</font> 筆超過系統一個月且目前尚未確認的加退保異動資料！<br>請先至<a href="/~hr/hr_is/is_mf02.php?msel=8&f_page=1&f_del=A">員工/眷屬【資料異動】</a>確認後，才可繼續使用其他系統！');
      }

      return($mmsg_qty);
   }
// **************************************************************************
//  函數名稱: sl_chk_meet()
//  函數功能: 檢查是否有使用者找你線上會議，會自動開啟會議視窗
//  程式設計: Tony
//  設計日期: 2007.02.06
// **************************************************************************
   function sl_chk_meet() {
      $f_var['mdb']          = 'docs';                  // db name
      $f_var['mtable']       = array('head'=>'rtmeet_h','body'=>'rtmeet_b');

      sl_open($f_var['mdb']);

      $f_var['mwhere'] = "{$f_var['mtable']['head']}.rt22='0000-00-00' and {$f_var['mtable']['head']}.b_date>'0000-00-00' and ({$f_var['mtable']['head']}.rt01 ='{$_SESSION['login_empno']}' or {$f_var['mtable']['head']}.rt11 ='{$_SESSION['login_empno']}') ";
      //echo $f_var['mwhere']."<BR>";
      $f_var['morder'] = "{$f_var['mtable']['head']}.b_date DESC";

      $query      = "select {$f_var['mtable']['head']}.*
                             from {$f_var['mtable']['head']}
                             where {$f_var['mwhere']}
                             order by {$f_var['morder']}
                     ";

      //echo $query;
      $result  = mysql_query($query);
      //$row = mysql_fetch_array($result);
      while($row = mysql_fetch_array($result)){
       $f_var['url_empno0'] = base64_encode($row['rt01']);
       $f_var['url_name0'] = urlencode($row['rt02']);
       $f_var['url_empno1'] = base64_encode($row['rt11']);
       $f_var['url_name1'] = urlencode($row['rt12']);
       if($_SESSION['login_name'] == $row['rt02']){
          $f_var['window'] = $row['rt12'];
       }
       else{
          $f_var['window'] = $row['rt02'];
       }
            echo "<script language='JavaScript'>";
            echo "window.open('/~docs/meeting/meetingbox.php?s_num={$row['s_num']}&rt01={$f_var['url_empno0']}&rt02={$f_var['url_name0']}&rt11={$f_var['url_empno1']}&rt12={$f_var['url_name1']}','{$f_var['window']}','width=700,height=500,toolbar=no,center=yes,help=yes,resizable=yes,status=yes');";
            //echo "alert('{$f_var['window']}');";
            echo "</script>";
      }
      return;
   }

// **************************************************************************
//  函數名稱: sl_showsql()
//  函數功能: 僅對資訊部同仁顯示SQL敘述
//  使用方式: sl_showsql($str1,str2,...loop)
//  程式設計: kenny
//  設計日期: 2007.03.12
// **************************************************************************
/*
function sl_showsql($sql='',$ar='') {
  Global $_SESSION;
  include_once('/home/sl/public_html/geshi/geshi.php');
  $geshi =& new GeSHi($sql, 'mysql');
  $sql = $geshi->parse_code();
  $sql = str_replace('<pre', '<div' ,$sql);
  $sql = str_replace('</pre>', '</div>' ,$sql);
  if ($_SESSION['it_mode'] == "Y") {
    echo '<input type="button" value="顯示資訊部除錯資料" onclick=\'$(this).toggle(function(){var thisValue=$(this).val();switch(thisValue){case"顯示資訊部除錯資料":$(".sl_showsql").show("normal");$(this).val("隱藏資訊部除錯資料");$(this).fadeIn();break;case"隱藏資訊部除錯資料":$(".sl_showsql").fadeOut("normal");$(this).val("顯示資訊部除錯資料");$(this).fadeIn();break}});\' class="showsql_tog" /><br style="margin:0;height:0;clear:both;" />';
    echo '<pre name="sl_showsql" class="sl_showsql">';
    echo $sql."\n";
    if ($ar!='') print_r($ar);
    echo '</pre>';
  }
}
*/
function sl_showsql() {
  $no = rand(01,99);
  Global $_SESSION;
  include_once('/home/sl/public_html/geshi/geshi.php');

  if (func_get_args()) {
    foreach (func_get_args() as $k=>$v) {
      if (is_array($v) == false) {
        $geshi =& new GeSHi($v, 'mysql');
        $v = $geshi->parse_code();
        $v = str_replace('<pre', '<div' ,$v);
        $v = str_replace('</pre>', '</div>' ,$v);
      }
      $output[] = $v;
    }
  } else {
    $output = array('無資料！');
  }

  if ($_SESSION['it_mode'] == "Y") {
    echo '<input type="button" value="顯示資訊部除錯資料" onclick=\'$(this).toggle(function(){var thisValue=$(this).val();switch(thisValue){case"顯示資訊部除錯資料":$("#sl_showsql_'.$no.'").show("normal");$(this).val("隱藏資訊部除錯資料");$(this).fadeIn();break;case"隱藏資訊部除錯資料":$("#sl_showsql_'.$no.'").hide("normal");$(this).val("顯示資訊部除錯資料");$(this).fadeIn();break}});\' class="showsql_tog" /><br style="margin:0;height:0;clear:both;" />';
    echo '<pre id="sl_showsql_'.$no.'" class="sl_showsql">';
    foreach ($output as $k=>$v) {
      if ($k>0) {
        echo '<hr />';
      }
      print_r($v);
    }
    echo '</pre>';
  }
}
// **************************************************************************
//  函數名稱: sl_web_log()
//  函數功能: 紀錄 web log
//  使用方式: sl_web_log($f_var)
//  程式設計: Tony
//  設計日期: 2007.05.11
// **************************************************************************
  function sl_web_log($f_var) {
     // Add by Tony 2007.05.11
     // Add by supergk 2016.03.02 奉主管指示關閉功能
     //if('S122'==$_SESSION['login_dept_id']) {
        $f_var["tp"]-> newBlock (  "tb_list_web_log"                         ); // show web log
        $f_var["tp"]-> newBlock (  "tb_list_web_log_head"                    );
        sl_open('sl');

        //$query1 = "
        //           select distinct web_log.*,sl_hosts.sh04,sle24.E24_3,dept.sname
        //                  from web_log
        //                  left join sl_hosts  on web_log.fromip = sl_hosts.sh05
        //                  left join pass      on web_log.wg01   = pass.empno
        //                  left join dept      on web_log.wg03   = dept.dept_id
        //                  left join sle.sle24 on sle.sle24.E24_2 = sl.pass.job_id
        //                  where web_log.wg04   = '{$_REQUEST["f_sid"]}'      and
        //                        web_log.wg05   = '{$_SERVER["PHP_SELF"]}'    and
        //                        web_log.wg06   = '{$f_var["f_wg06"]}'        and
        //                        web_log.d_date = '0000-00-00 00:00:00'
        //                  order by web_log.m_date desc
        //          ";
        //if('1130091'==$_SESSION["login_empno"]) {
        $query1 = "
                   select distinct web_log.*,
                          sl_hosts.sh04,
                          sle24.E24_3,
                          pass.hr_deptid AS wg03,
                          dept.sname
                   from web_log
                          left join sl_hosts  on web_log.fromip = sl_hosts.sh05
                          left join pass      on web_log.wg01   = pass.empno
                          /*left join dept      on web_log.wg03   = dept.dept_id*/
                          left join dept      on pass.hr_deptid   = dept.dept_id
                          left join sle.sle24 on sle.sle24.E24_2 = sl.pass.job_id
                   where web_log.wg04   = '{$_REQUEST["f_sid"]}'      and
                                web_log.wg05   = '{$_SERVER["PHP_SELF"]}'    and
                                web_log.wg06   = '{$f_var["f_wg06"]}'        and
                                web_log.d_date = '0000-00-00 00:00:00'
                   order by web_log.m_date desc
                  ";
                                // web_log.wg05   = '{$_SERVER["REQUEST_URI"]}' and
        
        //   echo $query1.'---';
        //}
        //echo $query1;
        $result1  = mysql_query($query1);

        while ($row1 = mysql_fetch_array($result1)) {
          $fd_ipname=iif($row1['si03']=='',$row1['si03'],$row1['fromip']);
               $f_var["tp"]-> newBlock (  "tb_list_web_log_body"                    );
               $f_var["tp"]-> assign   (  "tv_wg03"          , $row1['wg03'] ); // dept_id
               $f_var["tp"]-> assign   (  "tv_sname"         , $row1['sname'] ); // 部門簡稱
               $f_var["tp"]-> assign   (  "tv_wg02"          , $row1['wg02'] ); // name
               $f_var["tp"]-> assign   (  "tv_e24_3"         , $row1['E24_3'] ); // job id
               $f_var["tp"]-> assign   (  "tv_wg07"          , $row1['wg07'] ); // cnt
               //$f_var["tp"]-> assign   (  "tv_date"          , iif($row1['wg07']>1,$row1['m_date'],$row1['b_date']) ); // date
               $f_var["tp"]-> assign   (  "tv_date"          , $row1['m_date'] ); // date

               $fromip = ($row1['sh04']=='')?$row1['fromip']:$row1['sh04'];
               $f_var["tp"]-> assign   (  "tv_from"          , $fromip ); // ip_name
        }

     //}
     return($f_var);
  }
// **************************************************************************
//  函數名稱: sl_dept_mr()
//  函數功能: 傳回ERP部門層級中的部門代號
//  使用方式: $mdept_mr = sl_dept_mr($f_var)
//  備    註: 需設定此變數帶入erp部門代號才能使用 $f_var["erp_dept_id"] = '5200'
//            回傳值為字串 '5200','5201','5202','5203','5204','5205','5206','5207','5208','5209','5210','5211','5212','5213','2201','2202','2203','5214'
//            只要 select 修改抓取部門為 in(...) 即可
//
//            SELECT *
//                   FROM dept
//                   WHERE erp_dept_id IN ('5200', '5201', '5202', '5203', '5204', '5205', '5206', '5207', '5208', '5209', '5210', '5211', '5212', '5213', '2201', '2202', '2203', '5214')
//
//  程式設計: Tony
//  設計日期: 2007.05.16
// **************************************************************************
   function sl_dept_mr($f_var) {
      //sl_open('sl');
      //
      //if ($f_var['usedb']=='forwarder') {
      //  $tb = 'actmr_fw';
      //} else {
      //  $tb = 'actmr';
      //}
      //echo $f_var['usedb'];
      if ($f_var['usedb']=='forwarder') {//upd by mimi 2011.02.15 報修-12763 直接讀ERP即可
        $tb = 'forwarder';
      } else {
        $tb = 'Leader9503';
      }
      sl_openms($tb);     // sl_openms($sl_erp_db); // 開啟 MSSQL 資料庫
      $vdept_mr = '';
      $query1 = "
                 select *
                 from ACTMR
                 where MR001  = '{$f_var['erp_dept_id']}'
                ";
      //echo $tb.'---'.$query1.'<br>';
      $result1  = mssql_query($query1);
      $row1 = mssql_fetch_array($result1);
      if(NULL<>$row1['MR001']) { // 有資料
         $vmr002 = trim($row1['MR002']); // 抓取層級資料
         $query2 = "
                    select *
                    from ACTMR
                    where MR002  like '$vmr002%'
                    order by MR002
                   ";
         //echo $query2.'---';
         $result2  = mssql_query($query2);
         $vcnt = mssql_num_rows($result2); // 資料總筆數
         $vnum = 0;
         while($row2 = mssql_fetch_array($result2)) {
               //echo $row2['mr001'].'---';
               //echo $row2['mr002'].'<br>';
               $vdept_mr .= "'{$row2['MR001']}'";
               $vnum++;
               if($vnum<$vcnt) {
                  $vdept_mr .= ',';
               }
         }
      }
      return($vdept_mr);
   }
// **************************************************************************
//  函數名稱: sl_dept_name()
//  函數功能: 傳回部門名稱
//  使用方式: $mdept_name = sl_dept_name($mdept_id)
//  程式設計: Tony
//  設計日期: 2007.05.16
// **************************************************************************
   function sl_dept_name($vdept_id) {
      sl_open('sl');

      $vdept_name = '';
      $query1 = "
                 select *
                        from  dept
                        where dept_id = '$vdept_id'          and
                              d_date = '0000-00-00 00:00:00'
                        order by dept_id
                ";
      //echo $query1.'---';
      $result1  = mysql_query($query1);
      $row1 = mysql_fetch_array($result1);
      if(NULL<>$row1['s_num']) { // 有資料
         $vdept_name = $row1['sname'];
      }
      return($vdept_name);
   }
// **************************************************************************
//  函數名稱: sl_eval_fnc_name()
//  函數功能: 解譯字串，執行函數
//  使用方式: sl_eval_fnc_name($func_name,$value)
//  程式設計: Tony
//  設計日期: 2007.05.16
// **************************************************************************
   function sl_eval_fnc_name($vfunc_name,$vvalue) {
      //echo $vfunc_name.'+++';
      //echo $vvalue.'+++';
      return eval('return $vfunc_name($vvalue);');
   }

  // **************************************************************************
  //  函數名稱: sl_date_diff()
  //  函數功能: 日期相減，回傳天數
  //  使用方式: sl_date_diff('20060531','20060501')
  //  程式設計: Tony
  //  設計日期: 2006.04.17
  // **************************************************************************
  function sl_date_diff($vdate1,$vdate2) {
     $vdate1_yy = substr($vdate1,0,4);
     $vdate1_mm = substr($vdate1,4,2);
     $vdate1_dd = substr($vdate1,6,2);

     $vdate2_yy = substr($vdate2,0,4);
     $vdate2_mm = substr($vdate2,4,2);
     $vdate2_dd = substr($vdate2,6,2);

     //echo $vdate1_yy.$vdate1_mm.$vdate1_dd.'<hr>';
     //echo $vdate2_yy.$vdate2_mm.$vdate2_dd.'<hr>';

     $vday1 = mktime(0,0,0,$vdate1_mm,$vdate1_dd,$vdate1_yy);
     $vday2 = mktime(0,0,0,$vdate2_mm,$vdate2_dd,$vdate2_yy);
     //echo $vday1.'<hr>';
     //echo $vday2.'<hr>';
     //$vrtn_day = (($vday1-$vday2)/86000-1);
     $vrtn_day = floor((($vday1-$vday2)/86000));
     return($vrtn_day);
  }
// **************************************************************************
//  函數名稱: u_caclutime()
//  函數功能: 計算程式執行時間
//  使用方式: $b_times=u_caclutime();$e_times=ucalcutime();$t_times=$b_times-$e_times;
//  程式設計: sharbui
//  設計日期: 2005.11.24
// **************************************************************************
function u_caclutime(){
  $time = explode( " ", microtime());
  $usec = (double)$time[0];
  $sec = (double)$time[1];
  return $sec + $usec;
}
// **************************************************************************
//  函數名稱: u_read_username()
//  函數功能: 用員編讀出使用者名稱
//  使用方式: u_read_username($empno)
//  程式設計: sharbui
//  設計日期: 2005.12.06
// **************************************************************************
function u_read_username($user_empno) {
  Global $mdat1;
  Global $mtable_pass;
  u_open($mdat1);
  if (NULL == $user_empno) {
    $noname = "無";
    return $noname;
  }
  else {
    $q_user_data = "SELECT * from $mtable_pass
                                WHERE empno='$user_empno'
                               ";
    //echo $q_user_data.'----';
    $r_user_data = mysql_query($q_user_data);
    $user_data   = mysql_fetch_array($r_user_data);
    return $user_data["name"];
  }
}
// **************************************************************************
//  函數名稱: sl_span_str()
//  函數功能: 將字串反白，但過濾不要替換的字串
//  使用方式: lspan_str($f_var,$vstr)
//  程式設計: Tony
//  設計日期: 2007.06.12
// **************************************************************************
function sl_span_str($f_var,$vstr) {
   $vchg = 'Y'; // 更換字串

   $achk_str[] = 'http'; // url
   $achk_str[] = 'src';  // img
   $achk_str[] = '.doc';  // doc
   $achk_str[] = '.xls';  // xls
   $achk_str[] = '.pdf';  // pdf
   for($i=0;$i<count($achk_str);$i++) {
       if(strstr($vstr,$achk_str[$i])) {
          $vchg = 'N'; // 更換字串
          break;
       }
   }
   if('Y'==$vchg) {
     if(''!=$f_var['f_que_ary']){
       $vrtn_str = str_replace($f_var['f_que_ary'],"<span style='".$f_var['mque_color']."'>".$f_var['f_que_ary']."</span>",$vstr);
     }
     else{
       $vrtn_str = str_replace($f_var['f_que'],"<span style='".$f_var['mque_color']."'>".$f_var['f_que']."</span>",$vstr);
     }
   }
   else {
      $vrtn_str = $vstr;
   }
   return $vrtn_str;
}
// **************************************************************************
//  函數名稱: sl_save()
//  函數功能: 資料儲存
//  使用方式: sl_save($f_var)
//  程式設計: Tony
//  設計日期: 2006.09.27
//  程式修改: Tony
//  修改日期: 2007.08.15
// **************************************************************************
function sl_save($f_var) {

   $vb_empno = $_SESSION["login_empno"];
   $vb_dept_id =$_SESSION["login_dept_id"];
   $vb_date  = date("Y-m-d H:i:s");
   $vfromip  = $_SERVER["REMOTE_ADDR"];
   $vproc    = u_showproc(); // 程式代號

   //$f_var['mgo_url'] = u_showproc().'.php?msel=4';
   $f_var['mgo_url'] = u_showproc().".php?msel=4&f_sid={$f_var['f_sid']}&f_page=".$f_var["f_page"].'&f_que='.$f_var["f_que"];
   $f_var['mmsg_ok'] = "資料{$f_var['msel_name'][ substr($f_var['msel'],0,1) ]}成功...";
   $f_var['mmsg_ng'] = "資料{$f_var['msel_name'][ substr($f_var['msel'],0,1) ]}失敗...";

   include_once("HTTP/Upload.php"); // PEAR 上傳?M件
   $vupload = new HTTP_Upload();
   $file_name_fix = date('dmHis');
   switch ($f_var['msel']) {
        case "11": // 新增-儲存
        case "C1": // 複製-儲存
             $chk_attach = 'N';//add by mimi 2012.01.13 報修-16013 增加秀出是否有附件
             $vins_fd    = 's_num,';
             $vins_value = '0,';
             reset($f_var['fd']); // 將陣列的指標指到陣列第一個元素
             while(list($vfd_id)=each($f_var['fd'])) {
                   if('N'==$f_var['fd'][$vfd_id]['save']) { // 不執行儲存  Add by Mimi 2007.08.20
                      continue; // loop 回到 while
                   }
                   if(!strstr($f_var["no_save"],$f_var['fd'][$vfd_id]['type'])) {
                     if($f_var['fd'][$vfd_id]['type'] == "datetime"){
                       if($f_var['fd'][$vfd_id]['hhmm']['picker'] != 'N'){
                         $hh = $f_var[$f_var['fd'][$vfd_id]['ename']."_hh"];
                         $mm = $f_var[$f_var['fd'][$vfd_id]['ename']."_mm"];
                         $vfd_value = stripslashes($f_var[ $f_var['fd'][$vfd_id]['ename'] ]);
                         $vfd_value2 = $hh.$mm."00";
                         $vins_fd    .= $vfd_id.',';
                         $vins_value .= "'$vfd_value $vfd_value2',";
                       }else{
                         $hh = $f_var[$f_var['fd'][$vfd_id]['ename']."_hh"];
                         $mm = $f_var[$f_var['fd'][$vfd_id]['ename']."_mm"];
                         $vfd_value = $hh.$mm;
                         $vins_fd    .= $vfd_id.',';
                         $vins_value .= "'$vfd_value',";
                       }
                     }else{
                       $vfd_value = stripslashes($f_var[ $f_var['fd'][$vfd_id]['ename'] ]);
                       $vins_fd    .= $vfd_id.',';
                       $vins_value .= "'$vfd_value',";

                     }
                     //echo $vfd_id.'------'.$f_var[ $f_var['fd'][$vfd_id]['ename'] ]."<br>";
                   	 /*
	                   if('1'==substr($f_var['msel'],0,1)){ //add by 姿俞 2018.06.08 新增儲存欄位session
                     	 $_SESSION['insert'][$vfd_id] = $f_var[ $f_var['fd'][$vfd_id]['ename'] ];
                     }*/
                   }

                   // Mark by Tony 2006.10.02 無法處理中文...嗯~~~失敗!!
                   // 上傳才需要執行
                   if('file'==$f_var['fd'][$vfd_id]['type']) {
                      $vfile = $vupload->getFiles($f_var['fd'][$vfd_id]['ename']);
                      if($vfile->isValid()) {
                         if('Y'==$f_var["set_file_name"]) {  //xxx_init.php裡設定
                            $vf_prop   = $vfile->getProp();             //找出原本檔名
                            $vf_explode=explode('.',$vf_prop['name']);  //字串切割,找出副檔名
                            $vf_name   =$f_var['fd'][$vfd_id]['u_file_name'];
                            //要有$f_var['fd'][$vfd_id]['u_file_name'] 有"$vfd_id"才知道是對應哪個欄位
                            $vfile->setName("{$vf_name}.{$vf_explode[1]}"); // 自己定義檔名 abc.xxx by mimi 2008.12.24
                         }
                         else {
                            $vfile->setName("real",date('ymdHis').'_'); // 更改檔名 yymmddhhiiss_xxxxxx.xxx
                         }
                         //$vfile->setName("real");
                         $vfd_name = $vfile->moveTo($f_var["mupload_dir"]);
                         $vins_fd    .= $vfd_id.',';
                         $vins_value .= "'$vfd_name',";
                         if(trim($vfd_name)<>''){
                           $chk_attach = "Y";//add by mimi 2012.01.13 報修-16013 增加秀出是否有附件
                         }
                      }
                   }

             }
             //add by mimi 2012.01.13 報修-16013 增加秀出是否有附件
             $query = "SHOW COLUMNS FROM {$f_var['mtable']['head']} WHERE field = 'attach'";
             //echo $query."<BR>";
             $result = mysql_query($query);
             $num = mysql_num_rows($result);
             //echo $num.'<hr>';
             //echo $chk_attach.'<hr>';
             if($num>0 and 'Y'==$chk_attach){
               $vins_fd    .= "attach ,";
               $vins_value .= "'Y',";
             }
             //-----------------------------------------------------

             //echo '<hr>';
             //echo $vins_fd.'++++';
             //echo $vins_value.'***';
             //if($vproc=='reach01_set'){//開拓現銷客戶設定作業讓課長自行登打建檔日   2014/11/13關閉此功能
             //
             //
             //  $f_b_date = substr($f_var['f_b_date'],0,4)."-".substr($f_var['f_b_date'],4,2)."-".substr($f_var['f_b_date'],6,2);
             //  echo $f_b_date;
             //  $vins_fd    .= 'b_proc,b_empno,b_dept_id,b_date,fromip';
             //  $vins_value .= "'$vproc','$vb_empno','$vb_dept_id','$f_b_date','$vfromip'";
             //}
             //else{
               $vins_fd    .= 'b_proc,b_empno,b_dept_id,b_date,fromip';
               $vins_value .= "'$vproc','$vb_empno','$vb_dept_id','$vb_date','$vfromip'";
             //}
             // $vins_value = stripslashes($vins_value);
             $f_var['query_data'] = "insert into {$f_var['mtable']['head']} ($vins_fd) values ($vins_value)";
             //echo"<pre>";
             //echo $f_var['query_data'];
             //echo"</pre>";
             //exit;
             break;
        case "21": // 修改-儲存
             $chk_attach='N';//add by mimi 2012.01.13 報修-16013 增加秀出是否有附件
             $vsetupd = "m_empno='$vb_empno',
                         m_dept_id='$vb_dept_id',
                         m_proc ='$vproc'   ,
                         m_date ='$vb_date'
                        ";
             reset($f_var['fd']); // 將陣列的指標指到陣列第一個元素
             while(list($vfd_id)=each($f_var['fd'])) {
              if('N'==$f_var['fd'][$vfd_id]['save']) { // 不執行儲存  Add by Mimi 2007.08.20
                   continue; // loop 回到 while
              }
                   if(!strstr($f_var["no_save"],$f_var['fd'][$vfd_id]['type'])) {
                     if($f_var['fd'][$vfd_id]['type'] == "datetime"){
                       if($f_var['fd'][$vfd_id]['hhmm']['picker'] != 'N'){
                         $hh = $f_var[$f_var['fd'][$vfd_id]['ename']."_hh"];
                         $mm = $f_var[$f_var['fd'][$vfd_id]['ename']."_mm"];
                         $vfd_value = stripslashes($f_var[ $f_var['fd'][$vfd_id]['ename'] ]);
                         $vfd_value2 = $hh.$mm."00";
                         $vsetupd .= ", $vfd_id='{$vfd_value} {$vfd_value2}'";
                       }else{
                         $hh = $f_var[$f_var['fd'][$vfd_id]['ename']."_hh"];
                         $mm = $f_var[$f_var['fd'][$vfd_id]['ename']."_mm"];
                         $vfd_value = $hh.$mm;
                         $vsetupd .= ", $vfd_id='{$vfd_value}'";
                       }
                     }else{
                       $vfd_value = stripslashes($f_var[ $f_var['fd'][$vfd_id]['ename'] ]);
                       $vsetupd .= ", $vfd_id='{$vfd_value}'";
                     }
                     //echo $vfd_id.'------'.$f_var[ $f_var['fd'][$vfd_id]['ename'] ]."<br>";
                   }

                   // 上傳才需要執行
                   if('file'==$f_var['fd'][$vfd_id]['type']) {
                      $vfile = $vupload->getFiles($f_var['fd'][$vfd_id]['ename']);
                         //echo '<pre>';
                         //var_dump($vfile);
                         //echo '</pre>';
                         //exit;
                      if($vfile->isValid()) {
                         if('Y'==$f_var["set_file_name"]) {  //xxx_init.php裡設定
                            //要有$f_var['fd'][$vfd_id]['u_file_name'] 有"$vfd_id"才知道是對應哪個欄位
                            //echo '*****'.$f_var['fd'][$vfd_id]['u_file_name'].'*****';
                            $vf_prop   = $vfile->getProp();             //找出原本檔名
                            $vf_explode=explode('.',$vf_prop['name']);  //字串切割,找出副檔名
                            $vf_name   =$f_var['fd'][$vfd_id]['u_file_name'];
                            $vfile->setName("{$vf_name}.{$vf_explode[1]}"); // 自己定義檔名 abc.xxx by mimi 2008.12.24
                         }
                         else {
                            $vfile->setName("real",date('ymdHis').'_'); // 更改檔名 yymmddhhiiss_xxxxxx.xxx
                         }
                         $vfd_value  = $vfile->moveTo($f_var["mupload_dir"]);
                         $vsetupd   .= ", $vfd_id='{$vfd_value}'";
                         if(trim($vfd_value)<>''){
                           $chk_attach = "Y";//add by mimi 2012.01.13 報修-16013 增加秀出是否有附件
                         }
                      }
                   }

             }
             //add by mimi 2012.01.13 報修-16013 增加秀出是否有附件
             $query = "SHOW COLUMNS FROM {$f_var['mtable']['head']} WHERE field = 'attach'";
             //echo $query."<BR>";
             $result = mysql_query($query);
             $num = mysql_num_rows($result);
             //echo $num;exit;
             //echo $chk_attach;
             if($num>0 and 'Y'==$chk_attach){
               $vsetupd   .= ",attach='Y'";
             }
             //-----------------------------------------------------
             //exit;
             // $vsetupd = stripslashes($vsetupd);
             $f_var['query_data'] = "
                                      update {$f_var['mtable']['head']} set $vsetupd
                                                                        where s_num='{$f_var['f_s_num']}'
                                    ";
             // echo $f_var['query_data']."*****<br>".$vsetupd;exit;
             break;
        case "31": // 作廢-儲存
             sl_del2flw(&$f_var);
             $f_var['query_data'] = "
                                     update {$f_var['mtable']['head']} set   d_empno='$vb_empno',
                                                                             d_dept_id='$vb_dept_id',
                                                                             d_proc ='$vproc',
                                                                             d_date ='$vb_date'
                                                                    where s_num='{$f_var['f_s_num']}'
                                    ";
             //echo $f_var['query_data'];exit;
             break;
        case "f1": // 轉簽核-儲存 add by mimi 2011.07.01
          //建檔人員+資料庫+資料表+s_num+類別+簽呈內容+轉檔次數 不可為空值
          //echo "{$f_var['f_b_empno']}<>'' and {$f_var['f_db']}<>'' and {$f_var['f_table']}<>'' and {$f_var['f_s_num']}<>'' and {$f_var['f_type']}<>'' and {$f_var['f_content']}<>'' and {$f_var['f_cnt']}<>''";
          if($f_var['f_b_empno']<>'' and $f_var['f_db']<>'' and $f_var['f_table']<>'' and $f_var['f_s_num']<>'' and $f_var['f_type']<>'' and $f_var['f_content']<>'' and $f_var['f_cnt']<>''){
            sl_eip2flw(&$f_var);//add by mimi 2011.06.02 轉簽核表
          }
          else{
            sl_errmsg("轉簽核單失敗，請通知資訊人員，謝謝！ PS.建檔人員+資料庫+資料表+s_num+類別+簽呈內容+轉檔次數 不可為空值。"); //qq:para只丟str不丟font
            exit;
          }
          break;
        default:
             break;
   }
   /*
   //add by 姿俞 2018.06.08 新增族存欄位SESSION
   //echo $f_var['query_data']."</br>";
   if(!empty($f_var['query_data'])) { //如果query_data有資料,就執行mysql_query(),only for新增儲存,修改儲存,作廢儲存,
    if(!mysql_query($f_var['query_data'])) { // 寫入失敗
      sl_errmsg('<font color="#FFFFFF"><b>注意!!</b></font>'.$f_var['mmsg_ng'].'!!'); //qq:para只丟str不丟font
      exit;
    }else {
    	unset($_SESSION['insert']);
    }
    $f_var['query_data'] = "";
    echo sl_jreplace($f_var['mgo_url']);
   }
   */
   return;
}
  // **************************************************************************
  //  函數名稱: sl_del2flw()
  //  函數功能: 作廢電子簽核-簽核單
  //  使用方式: sl_del2flw(&$f_var)
  //  程式設計: Mimi
  //  設計日期: 2011.06.02
  // **************************************************************************
  function sl_del2flw(&$f_var) {
    sl_open('docs');
    $count_table= substr_count($f_var['mtable']['head'],'.');
    $ex_table   = explode('.',$f_var['mtable']['head']);
    $fd_table   = iif($count_table==0,$f_var['mtable']['head'],$ex_table[1]);
    $vb_empno   = $_SESSION["login_empno"];
    $vb_date    = date("Ymd");
    $vb_time    = date("His");
    $vproc      = u_showproc(); // 程式代號
    $fd_b_empno = $_SESSION["login_empno"];
    $fd_date    = date('Y/m/d H:i:s');
    $vdat1      = 'EF2KWeb';
    $query1 = "SELECT *
               FROM docs.sleip2flw
               where sleip2flw003='{$f_var['mdb']}' and sleip2flw004='{$fd_table}' and sleip2flw010='{$f_var['f_s_num']}'";
    //echo $query1;
    //exit;
    $result1  = mysql_query($query1);
    $num1 = mysql_num_rows($result1);  //筆數
    //echo $num1;
    if($num1>0){
      $row1 = mysql_fetch_array($result1);
      if('3'==$row1['resda020'] or '4'==$row1['resda020']){
        echo "<script language='JavaScript'>";
        echo "alert('已簽核完畢或已抽單，無法作廢。');";
        echo "location.replace(\"{$vproc}.php?msel=4\");";
        echo "</script>";
        exit;
      }
      else{
        $query_date = "update docs.sleip2flw set  resda019='{$vb_date}',resda020='4',resda021='4',m_empno='{$vb_empno}', m_dept_id='{$vb_date}', m_proc='{$vproc}', m_date='{$vb_date}'
                        where sleip2flw001='{$row1['sleip2flw001']}' and sleip2flw002='{$row1['sleip2flw002']}'
                       ";
        //echo $query_date.'<hr>';
        if(!mysql_query($query_date)) { // 寫入失敗
          sl_errmsg("<b>注意!!</b>{$query_date}-sl_init:391");
        }
        sl_openef2k($vdat1);
        $query_date1 = "update resda set  resda020='4',resda021='4',resda902='{$fd_b_empno}',resda903='{$fd_date}'
                        where resda001='{$row1['sleip2flw001']}' and resda002='{$row1['sleip2flw002']}'
                       ";
        //echo $query_date1.'<hr>';
        if(!mssql_query($query_date1)) { // 寫入失敗
          sl_errmsg("<b>注意!!</b>{$query_date1}-sl_init:391");
        }
        $query_date2 = "update resdc set  resdc007='11',resdc008='9',resdc902='{$fd_b_empno}',resdc903='{$fd_date}'
                        where resdc001='{$row1['sleip2flw001']}' and resdc002='{$row1['sleip2flw002']}'
                       ";
        //echo $query_date2.'<hr>';
        if(!mssql_query($query_date2)) { // 寫入失敗
          sl_errmsg("<b>注意!!</b>{$query_date2}-sl_init:391");
        }
        $query_date3 = "update resdd set  resdd014='11',resdd015='9',resdd902='{$fd_b_empno}',resdd903='{$fd_date}'
                        where resdd001='{$row1['sleip2flw001']}' and resdd002='{$row1['sleip2flw002']}'
                       ";
        //echo $query_date3.'<hr>';
        if(!mssql_query($query_date3)) { // 寫入失敗
          sl_errmsg("<b>注意!!</b>{$query_date3}-sl_init:391");
        }
        //$f_var['f_msg']="作廢完成！並作廢簽核單 {$row1['sleip2flw001']}-{$row1['sleip2flw002']} 請前往電子簽核查看。"; //訊息
      }
    }
    sl_open($f_var['mdb']);//避免原先的連線被關掉，重新再開一次 add by 逸凡 2014.06.27
    return;
  }
  // **************************************************************************
  //  函數名稱: sl_sel_link()
  //  函數功能: 點選選單設定
  //  使用方式: sl_sel_link(&$f_var)
  //  備    註: 點選選單設定
  //  程式設計: Tony
  //  設計日期: 2007.08.21
  // **************************************************************************
  function sl_sel_link($f_var) {
    if($f_var['msel'] == 81){
      reset($f_var['fd_que']); // 將陣列的指標指到陣列第一個元素
      while(list($vfd_id)=each($f_var['fd_que'])) {
        switch ($f_var['fd_que'][$vfd_id]['type']) {
          case "text":
          case "select":
            $vfd_value = stripslashes($f_var[ $f_var['fd_que'][$vfd_id]['ename'] ]);
            if(trim($vfd_value) != ''){
              $q_url[$f_var['fd_que'][$vfd_id]['ename']] = $vfd_value;
            }
            break;
          case "date3":
              $vfd_value_s = stripslashes($f_var[$f_var['fd_que'][$vfd_id]['ename'].'_s'].' 00:00:00');
              $vfd_value_e = stripslashes($f_var[$f_var['fd_que'][$vfd_id]['ename'].'_e'].' 23:59:59');
              if(trim($vfd_value_s) != '00:00:00'){
                $q_url[$f_var['fd_que'][$vfd_id]['ename'].'_s'] = $vfd_value_s;
              }
              if(trim($vfd_value_e) != '23:59:59'){
                $q_url[$f_var['fd_que'][$vfd_id]['ename']."_e"] = $vfd_value_e;
              }
            break;
          default:
            break;
        }
      }
      if(!empty($q_url)){
        //print_r($q_url);
        $f_var['q_url'] = http_build_query($q_url);
      }
    }
     if($f_var['f_page']==1) {  // 首頁，不可再往上
        $f_var['mup_page'] = $f_var['f_page'];
     }
     else {
        $f_var['mup_page'] = $f_var['f_page']-1;
     }
     if($f_var['f_page']==$f_var['mpagetot']) {  // 末頁，不可再往上
        $f_var['mdn_page'] = $f_var['f_page'];
     }
     else {
        $f_var['mdn_page'] = $f_var['f_page']+1;
     }

     /*
     if('71'<>$f_var['msel'] ) {  // 列印不要有抬頭
         $f_var["tp"]-> newBlock ("tb_sel_link"              ); // 新增資料
         $f_var["tp"]-> assign   ("tv_index"   , $f_var['index_url']); // 首頁
         $f_var["tp"]-> assign   ("tv_add"     , u_showproc().".php?msel=1&f_page={$f_var['f_page']}&f_del={$f_var['f_del']}&f_order_fd={$f_var['f_order_fd']}&f_order_md={$f_var['f_order_md']}&f_sid={$f_var['f_sid']}"              ); // 新增
         $f_var["tp"]-> assign   ("tv_list"    , u_showproc().".php?msel=4&f_page=1&f_del={$f_var['f_del']}&f_sid={$f_var['f_sid']}"                                                                                                   ); // 瀏覽
         $f_var["tp"]-> assign   ("tv_que"     , u_showproc().".php?msel=5&f_page={$f_var['f_page']}&f_del={$f_var['f_del']}&f_order_fd={$f_var['f_order_fd']}&f_order_md={$f_var['f_order_md']}&f_sid={$f_var['f_sid']}"              ); // 查詢
         $f_var["tp"]-> assign   ("tv_prn"     , u_showproc().".php?msel=7&f_page={$f_var['f_page']}&f_del={$f_var['f_del']}&f_order_fd={$f_var['f_order_fd']}&f_order_md={$f_var['f_order_md']}&f_sid={$f_var['f_sid']}"              ); // 列印
         $f_var["tp"]-> assign   ("tv_help"    , "/~docs/erp/doc/erphelp.htm"   ); // 查詢
         //$f_var["tp"]-> assign   ("tv_up_page" , u_showproc().".php?msel=4&f_page=".$f_var['mup_page']."&f_del=".$f_var['f_del']."&f_que=".$f_var['f_que'] ); // 上頁
         $f_var["tp"]-> assign   ("tv_up_page" , u_showproc().".php?msel=4&f_page={$f_var['mup_page']}&f_del={$f_var['f_del']}&f_que={$f_var['f_que']}&f_order_fd={$f_var['f_order_fd']}&f_order_md={$f_var['f_order_md']}&f_sid={$f_var['f_sid']}" ); // 上頁
         $f_var["tp"]-> assign   ("tv_dn_page" , u_showproc().".php?msel=4&f_page={$f_var['mdn_page']}&f_del={$f_var['f_del']}&f_que={$f_var['f_que']}&f_order_fd={$f_var['f_order_fd']}&f_order_md={$f_var['f_order_md']}&f_sid={$f_var['f_sid']}" ); // 下頁
         $f_var["tp"]-> assign   ("tv_del_n"   , u_showproc().".php?msel=4&f_page=1&f_del=N&f_order_fd={$f_var['f_order_fd']}&f_order_md={$f_var['f_order_md']}&f_sid={$f_var['f_sid']}"                                   ); // N.未廢
         $f_var["tp"]-> assign   ("tv_del_y"   , u_showproc().".php?msel=4&f_page=1&f_del=Y&f_order_fd={$f_var['f_order_fd']}&f_order_md={$f_var['f_order_md']}&f_sid={$f_var['f_sid']}"                                   ); // Y.作廢
         $f_var["tp"]-> assign   ("tv_del_a"   , u_showproc().".php?msel=4&f_page=1&f_del=A&f_order_fd={$f_var['f_order_fd']}&f_order_md={$f_var['f_order_md']}&f_sid={$f_var['f_sid']}"                                   ); // A.全部
     }
     */
     switch ($f_var['msel']) {
      case 71:
      break;
      case 81:
         $f_var["tp"]-> newBlock ("tb_sel_link"              ); // 進階查詢
         $f_var["tp"]-> assign   ("tv_index"   , $f_var['index_url']); // 首頁
         $f_var["tp"]-> assign   ("tv_add"     , u_showproc().".php?msel=1&f_page={$f_var['f_page']}&f_del={$f_var['f_del']}&f_order_fd={$f_var['f_order_fd']}&f_order_md={$f_var['f_order_md']}&f_sid={$f_var['f_sid']}"              ); // 新增
         $f_var["tp"]-> assign   ("tv_list"    , u_showproc().".php?msel=4&f_page=1&f_del={$f_var['f_del']}&f_sid={$f_var['f_sid']}"                                                                                                   ); // 瀏覽
         $f_var["tp"]-> assign   ("tv_que"     , u_showproc().".php?msel=5&f_page={$f_var['f_page']}&f_del={$f_var['f_del']}&f_order_fd={$f_var['f_order_fd']}&f_order_md={$f_var['f_order_md']}&f_sid={$f_var['f_sid']}"              ); // 查詢
         $f_var["tp"]-> assign   ("tv_advque"  , u_showproc().".php?msel=8&f_page=1"          ); // 進階查詢
         $f_var["tp"]-> assign   ("tv_up_page" , u_showproc().".php?msel=81&f_page={$f_var['mup_page']}&{$f_var['q_url']}" ); // 上頁
         $f_var["tp"]-> assign   ("tv_dn_page" , u_showproc().".php?msel=81&f_page={$f_var['mdn_page']}&{$f_var['q_url']}" ); // 下頁
      break;
      case 'gmaps':
      break;
      default:
         $f_var["tp"]-> newBlock ("tb_sel_link"              ); // 預設
         $f_var["tp"]-> assign   ("tv_index"   , $f_var['index_url']); // 首頁
         $f_var["tp"]-> assign   ("tv_add"     , u_showproc().".php?msel=1&f_page={$f_var['f_page']}&f_del={$f_var['f_del']}&f_order_fd={$f_var['f_order_fd']}&f_order_md={$f_var['f_order_md']}&f_sid={$f_var['f_sid']}"              ); // 新增
         $f_var["tp"]-> assign   ("tv_list"    , u_showproc().".php?msel=4&f_page=1&f_del={$f_var['f_del']}&f_sid={$f_var['f_sid']}"                                                                                                   ); // 瀏覽
         $f_var["tp"]-> assign   ("tv_que"     , u_showproc().".php?msel=5&f_page={$f_var['f_page']}&f_del={$f_var['f_del']}&f_order_fd={$f_var['f_order_fd']}&f_order_md={$f_var['f_order_md']}&f_sid={$f_var['f_sid']}"              ); // 查詢
         $f_var["tp"]-> assign   ("tv_advque"  , u_showproc().".php?msel=8&f_page=1"          ); // 進階查詢
         $f_var["tp"]-> assign   ("tv_prn"     , u_showproc().".php?msel=7&f_page={$f_var['f_page']}&f_del={$f_var['f_del']}&f_order_fd={$f_var['f_order_fd']}&f_order_md={$f_var['f_order_md']}&f_sid={$f_var['f_sid']}"              ); // 列印
         $f_var["tp"]-> assign   ("tv_help"    , "/~docs/erp/doc/erphelp.htm"   ); // 查詢
         //$f_var["tp"]-> assign   ("tv_up_page" , u_showproc().".php?msel=4&f_page=".$f_var['mup_page']."&f_del=".$f_var['f_del']."&f_que=".$f_var['f_que'] ); // 上頁
         $f_var["tp"]-> assign   ("tv_up_page" , u_showproc().".php?msel=4&f_page={$f_var['mup_page']}&f_del={$f_var['f_del']}&f_que={$f_var['f_que']}&f_order_fd={$f_var['f_order_fd']}&f_order_md={$f_var['f_order_md']}&f_sid={$f_var['f_sid']}&f_qk={$f_var['f_qk']}&f_maxline={$f_var['f_maxline']}&{$f_var['f_sift']}" ); // 上頁
         $f_var["tp"]-> assign   ("tv_dn_page" , u_showproc().".php?msel=4&f_page={$f_var['mdn_page']}&f_del={$f_var['f_del']}&f_que={$f_var['f_que']}&f_order_fd={$f_var['f_order_fd']}&f_order_md={$f_var['f_order_md']}&f_sid={$f_var['f_sid']}&f_qk={$f_var['f_qk']}&f_maxline={$f_var['f_maxline']}&{$f_var['f_sift']}" ); // 下頁
         $f_var["tp"]-> assign   ("tv_del_n"   , u_showproc().".php?msel=4&f_page=1&f_del=N&f_order_fd={$f_var['f_order_fd']}&f_order_md={$f_var['f_order_md']}&f_sid={$f_var['f_sid']}"                                   ); // N.未廢
         $f_var["tp"]-> assign   ("tv_del_y"   , u_showproc().".php?msel=4&f_page=1&f_del=Y&f_order_fd={$f_var['f_order_fd']}&f_order_md={$f_var['f_order_md']}&f_sid={$f_var['f_sid']}"                                   ); // Y.作廢
         $f_var["tp"]-> assign   ("tv_del_a"   , u_showproc().".php?msel=4&f_page=1&f_del=A&f_order_fd={$f_var['f_order_fd']}&f_order_md={$f_var['f_order_md']}&f_sid={$f_var['f_sid']}"                                   ); // A.全部
      break;
     }
     return;
  }
  // **************************************************************************
  //  函數名稱: sl_day_week()
  //  函數功能: 某一日期為星期幾?
  //  使用方式: sl_day_week($f_day)
  //  備    註: 某一日期為星期幾?
  //  程式設計: Mimi
  //  設計日期: 2007.08.24
  // **************************************************************************
  function sl_day_week($f_day) {
      $week = strftime("%w",strtotime($f_day));
      switch($week){
        case "1":
            $week = "(一)";
            break;
        case "2":
            $week = "(二)";
            break;
        case "3":
            $week = "(三)";
            break;
        case "4":
            $week = "(四)";
            break;
        case "5":
            $week = "(五)";
            break;
        case "6":
            $week = "(六)";
            break;
        case "0":
            $week = "(日)";
            break;
         default:
            $week = "(xx)";
            break;
      }

    return($week);
  }
  // **************************************************************************
  //  函數名稱: sl_day()
  //  函數功能: 秀出日月
  //  使用方式: sl_day($f_day)
  //  備    註: 秀出日月
  //  程式設計: Mimi
  //  設計日期: 2007.09.05
  // **************************************************************************
  function sl_day($f_day) {
      if('0000'==substr($f_day,0,4)) {
         $month_day = '-';
      }
      else {
         $month_day = substr($f_day,5,5);
      }
      //echo $month_day;
    return($month_day);
  }
  // **************************************************************************
  //  函數名稱: sl_day2()
  //  函數功能: 秀出日月
  //  使用方式: sl_day($f_day)
  //  備    註: 秀出日月
  //  程式設計: Mimi
  //  設計日期: 2007.09.05
  // **************************************************************************
  function sl_day2($f_day) {
      $month_day = substr($f_day,4,2)."-".substr($f_day,6,2);
    return($month_day);
  }

  // **************************************************************************
  //  函數名稱: sl_mgr_dept()
  //  函數功能: 回傳特定人員或部門可管理的複數站別
  //  使用方式: sl_mgr_dept('S102,S161');
  //            └ 若為資訊/會計,直接回傳all,其餘回傳登入員編可用的(SLE/GAS/ERP)代號
  //            sl_mgr_dept();
  //            └ 回傳登入員編可用的(SLE/GAS/ERP)代號
  //  備    註: $ignore = 忽略的部門代號?峟?工編號,以逗號分隔可混合輸入
  //            $sql_f = 是否輸出SQL用格式(預設1=YES  0=NO)
  //            $ignore_show = 忽略的部門仍輸出部門代號(預設0=輸出false  1=輸出代號)
  //  回    傳: array('gas' => '301,302,303',
  //                  'sle' => 'S100,S101,S102',
  //                  'erp' => '1000,1010,1030'
  //                 );
  //  範    例:   $dept = sl_mgr_dept();
  //              if ($f_var['show_dept']['erp']<>'all') {
  //                $mwhere .= " and b_gid in (".$dept['erp'].") ";
  //              }
  //  Array
  //  (
  //      [gas] => '802','805','801','804','807','808','811','812','813','815','816','817','818','819','820','821','822','823','824','825','826'
  //      [erp] => '8201','8202','8203','8205','8207','8208','8211','8212','8213','8215','8216','8217','8218','8219','8220','8221','8222','8223','8224','8225','8226'
  //      [sle] => 'S8A1','S8A2','S8A3','S8A5','S8C7','S8A8','S8B2','S8B3','S8B4','S8B6','S8B7','S8B9','S8B8','S8C2','S8C1','S8C5','S8C3','S8C4','S8C6','S8C9','S8C8'
  //      [area] => 800,006,007
  //  )
  //
  //  程式設計: kenny
  //  設計日期: 2007.11.22
  // **************************************************************************
  function sl_mgr_dept($ignore='',$sql_f=1,$ignore_show=0) {
    Global $_SESSION;
    Global $f_var;
    Global $a_pid;
    //include_once('/home/gas/public_html/sl_init.php');

    sl_open('sl');
    $sql = "select * from multi_dept where empno='".$_SESSION['login_empno']."' and ap_id like '%".$f_var['ap_id']."%'";
    //echo $sql;
    $rs = mysql_query($sql);
    $rows = mysql_num_rows($rs);
    if ($rows>0) {
      $ar = mysql_fetch_assoc($rs);
      //if ($ar['area']) $tmp_gas[$ar['area']] = $ar['area'];
      //$query_dept_area = $ar['area'];
      //$dept['area'] = $query_dept_area;
      $dept['area'] = $ar['area'];
      $query_dept_ar = explode(',',str_replace("\r\n","",$ar['dept_id'])); //upd by mimi 2010.10.13 報修-11140 會計陳珮瑜無法選擇部分站別,因為SQL裡有段行的關係,目前已排除
      $query_dept = "'".implode("','",$query_dept_ar)."'";
      $sql = "select dept_id as sle,erp_dept_id as erp,b_gid as gas from dept where dept_id in (".$query_dept.") and stop='N'  order by erp_dept_id";
      $rs = mysql_query($sql);
      while ($ar = mysql_fetch_assoc($rs)) {
        if ($ar['gas']) { $tmp_gas[$ar['gas']] = $ar['gas']; }
        if ($ar['erp']) { $tmp_erp[$ar['erp']] = $ar['erp']; }
        if ($ar['sle']) { $tmp_sle[$ar['sle']] = $ar['sle']; }
      }
      if (strstr($query_dept, "614")!=false) { // 針對 梧棲站 特別修正
        $tmp_gas['614'] = '614';
        $tmp_erp['6213'] = '6213';
      }
      if ($sql_f==0) {
        $dept['gas'] = @implode(",",$tmp_gas);
        $dept['erp'] = @implode(",",$tmp_erp);
        $dept['sle'] = @implode(",",$tmp_sle);
      } else {
        $dept['gas'] = "'".@implode("','",$tmp_gas)."'";
        $dept['erp'] = "'".@implode("','",$tmp_erp)."'";
        $dept['sle'] = "'".@implode("','",$tmp_sle)."'";
      }
    } else {
      if ($sql_f==0) {
        /*
        $dept['gas'] = $ar['gas'];
        $dept['erp'] = $ar['erp'];
        $dept['sle'] = $ar['sle'];
        */
        $dept['gas'] = $_SESSION['login_gas_id'];
        $dept['erp'] = $_SESSION['login_erp_dept_id'];
        $dept['sle'] = $_SESSION['login_dept_id'];
      } else {
        /*
        $dept['gas'] = "'".$ar['gas']."'";
        $dept['erp'] = "'".$ar['erp']."'";
        $dept['sle'] = "'".$ar['sle']."'";
        */
        $dept['gas'] = "'".$_SESSION['login_gas_id']."'";
        $dept['erp'] = "'".$_SESSION['login_erp_dept_id']."'";
        $dept['sle'] = "'".$_SESSION['login_dept_id']."'";
      }
    }
    if ($ignore) {
      $ignore = 'S121,S122,S140,S141,S181,S153,S154,'.$ignore;
    } else {
      $ignore = 'S121,S122,S140,S141,S181,S153,S154';
    }
    if (strstr($ignore, $_SESSION['login_dept_id'])!=false || strstr($ignore, $_SESSION['login_empno'])!=false) {
      if ($ignore_show==0) {
        $dept = array('gas'=>'all','erp'=>'all','sle'=>'all');
      } else {
        $dept = '';
        $sql = "select dept_id as sle,erp_dept_id as erp,b_gid as gas from dept where stop='N' order by erp_dept_id";
        $rs = mysql_query($sql);
        while ($ar = mysql_fetch_assoc($rs)) {
          if ($ar['gas']) { $tmp_gas[$ar['gas']] = $ar['gas']; }
          if ($ar['erp']) { $tmp_erp[$ar['erp']] = $ar['erp']; }
          if ($ar['sle']) { $tmp_sle[$ar['sle']] = $ar['sle']; }
        }

        if ($sql_f==0) {
          $dept['gas'] = @implode(",",$tmp_gas);
          $dept['erp'] = @implode(",",$tmp_erp);
          $dept['sle'] = @implode(",",$tmp_sle);
        } else {
          $dept['gas'] = "'".@implode("','",$tmp_gas)."'";
          $dept['erp'] = "'".@implode("','",$tmp_erp)."'";
          $dept['sle'] = "'".@implode("','",$tmp_sle)."'";
        }
      }
    }
    //$dept['area'] = $query_dept_area;
    if (is_array($a_pid) && $dept['area']) {
      foreach ($a_pid as $k=>$v) {
        if ($dept['area']=='000' && trim($k) && (substr($k,4,2)=='00' || substr($k,3,1)=='0')) {
          $tmp_dept['area'][substr($k,3,3)] = substr($k,3,3);
        } else if (substr($dept['area'],1,2)=='00' && trim($k)) { // 副理
          if (substr($k,4,2)=='00' && substr($dept['area'],0,1)==substr($k,0,1)) {
            $tmp_dept['area'][substr($k,3,3)] = substr($k,3,3); // 區
          } else if (substr($k,3,1)=='0' && substr($dept['area'],0,1)==substr($k,0,1)) {
            $tmp_dept['area'][substr($k,3,3)] = substr($k,3,3); // 課
          }
        } else { // 課長
          if (substr($k,3,1)=='0' && $dept['area']==substr($k,0,3)) {
            $tmp_dept['area'][substr($k,3,3)] = substr($k,3,3); // 課
          }
        }
      }
      //$dept['area'] = '';
      $dept['area'] = @implode(',',$tmp_dept['area']);
      //$dept['area'] = $tmp_dept['area'];
    }

    $f_var['show_dept'] = $dept;
    return $f_var['show_dept'];
  }
  // **************************************************************************
  //  函數名稱: sl_get_ap()
  //  函數功能: 檢查ap_id判斷資料庫名稱
  //  使用方式: sl_get_ap($ap_id,$row_ad)
  //  程式設計: Mimi
  //  設計日期: 2008.02.29
  // **************************************************************************
  function sl_get_ap($f_var) {
    sl_open(sl);
    $query = "select sl.ap.* from sl.ap where sl.ap.ap_id='{$f_var['f_sid']}'";
    //echo $query;
    $result = mysql_query($query);
    $row = mysql_fetch_array($result);
    $f_var['sl_ap_db']     = $row['ap_db'];
    $f_var['sl_ap_dept']   = $row['ap_dept'];
    $f_var['sl_ap_job_id'] = $row['ap_job_id'];
    $f_var['sl_ap_gp'] = $row['ap_gp'];  //add by ChiaWen 2021.11.30 增加hrm部門群組判斷
    return $f_var;
  }

  // **************************************************************************
  //  函數名稱: sl_chk_login2()
  //  函數功能: 檢查第二層密碼
  //  使用方式: sl_chk_login2($f_var)
  //  程式設計: Tony
  //  設計日期: 2007.11.28
  // **************************************************************************
  function sl_chk_login2($f_var) {
    global $mtable_pass; // 網頁員工登入檔
    //echo $f_var['f_pwd2'].'--------';
    $query = "select old_PASSWORD('{$f_var['f_pwd2']}') as pwd2";
    $result = mysql_query($query);
    $row = mysql_fetch_array($result);
    //sl_open('sl');
    $query1  = "select * from sl.$mtable_pass where empno='{$_SESSION['login_empno']}' and pwd2='{$row['pwd2']}' and d_date='0000-00-00 00:00:00'";
    //echo $query1.'<br>';
    $row1    = mysql_fetch_array(mysql_query($query1));
    //echo $row1["empno"].'++++';
    if(NULL!=trim($row1["empno"])) { // 有資料
       $_SESSION['login_2'] = 'Y'; // 認證 ok 將 login2 寫入 Y , 這樣就不用再問密碼了，直到登出
       if( ''!=$f_var['f_tohref'] ){ //薪稅查詢會一直跳回選單畫面, 增加參數判斷
         echo sl_jreplace($f_var['f_tohref']);
       }else{
         echo sl_jreplace(u_showproc().'.php');
       }
    }
    else {
       //sl_errmsg('密碼錯誤!!請重新輸入!!您還剩餘'..'次');
       sl_errmsg('個人密碼錯誤!!請重新輸入!!');
       //exit;
    }
    //echo $_SESSION['login_2'].'-function-';
    return;
  }
  // **************************************************************************
  //  函數名稱: sl_range_gas()
  //  函數功能: 回傳指定區別內的油站代碼
  //  使用方式: sl_range_gas('001') 回傳 '301','302','303' ...
  //  程式設計: kenny
  //  設計日期: 2008-03-27
  // **************************************************************************
  function sl_range_gas($gas) {
    //u_open('gas'); // Mark by Tony 2010-07-06 開啟EIP的資料庫使用,不然只有總部能用!!
    if(!mysql_select_db('gas')) {
      sl_open('gas_eip_960125');
      //sl_open('gas');
    }

    $mwhere = " and stop_flag!='Y' ";
    $mlen = strlen($gas);
    $gas_short = substr($gas,0,3);
    if ($mlen=='3') {
      switch ($gas) {
        case '001':
        case '002':
        case '003':
        case '004':
        case '005':
        case '006':
        case '007':
        case '008':
        case '009':
        case '010':
          $sql = "select b_gid from company where substring(p_gid,2,2)='".substr($gas,1,2)."' $mwhere order by p_gid";
        break;
        case '500':
        case '600':
        case '800':
          $sql = "select b_gid from company where substring(p_gid,1,1)='".substr($gas,0,1)."' $mwhere order by p_gid";
        break;
        case '501':
        case '502':
        case '603':
        case '604':
        case '605':
        case '806':
        case '807':
          $sql = "select b_gid from company where substring(p_gid,1,3)='".$gas."' $mwhere order by p_gid";
        break;
        case '000':
          $sql = "select b_gid from company where 1 $mwhere order by p_gid";
        break;
        default:
          $sql = "select b_gid from company where substring(p_gid,4,3)='".$gas."' $mwhere order by p_gid";
        break;
      }
    } else {
      switch ($gas) {
        case '800800':
        case '500500':
        case '600600':
          $sql = "select b_gid from company where substring(p_gid,1,1)='".substr($gas_short,0,1)."' $mwhere order by p_gid";
        break;
        case '501001':
        case '502002':
        case '603003':
        case '604004':
        case '605005':
        case '806006':
        case '807007':
          $sql = "select b_gid from company where substring(p_gid,1,3)='".substr($gas_short,0,3)."' $mwhere order by p_gid";
        break;
        case '000000':
          $sql = "select b_gid from company where 1 $mwhere order by p_gid";
        break;
        default:
          $sql = "select b_gid from company where p_gid='".$gas."' $mwhere order by p_gid";
        break;
      }
    }
    $rs = mysql_query($sql);
    while ($ar = mysql_fetch_assoc($rs)) {
      $array[] = $ar['b_gid'];
    }
    $dump = "'".@implode("','", $array)."'";
    return $dump;
  }
  // **************************************************************************
  //  函數名稱: sl_tb_log()
  //  函數功能:
  //  使用方式: sl_tb_log($f_var)
  //  程式設計: Mimi
  //  設計日期: 2008.04.24
  // **************************************************************************
  function sl_tb_log($f_var) {
    //echo "<pre>";
    //var_dump($f_var);
    //echo "</pre>";exit;
    sl_open($f_var['mdb']); // 開啟資料庫
    $query_log = "INSERT INTO {$f_var['mtable']['log']}
                  SELECT *
                  FROM {$f_var['mtable']['head']}
                  WHERE {$f_var['mtable']['head']}.s_num='{$f_var['f_s_num']}'
                   ";
    //echo $query_log;exit;
    if(!mysql_query($query_log)) { // 寫入失敗
      sl_errmsg('<font color="#FFFFFF"><b>注意!!</b></font>'.$query_log.'!!---1139-head');
      exit;
    }
    return ($f_var);
  }
  // **************************************************************************
  //  函數名稱: sl_rebuild_msg()
  //  函數功能: 為配合新版首頁訊息顯示並減輕系統資源使用率
  //            增加訊息彙整檔於sl目錄

  //  使用方式: sl_rebuild_msg()
  //  程式設計: 東巖
  //  設計日期: 2009.04.16
  // **************************************************************************
function sl_rebuild_msg(){
    sl_open('docs');
    $f_var['content_qty'] = 3; //
    $sql_num = "select * from news_board where d_date = '0000-00-00 00:00:00'";
    $rs_num = mysql_query( $sql_num );
    $eip_num = mysql_num_rows($rs_num);
    if($eip_num>0){
      $f_var['content_title']   []="訊息發布";
      $f_var['content_fd_name'] []="nb04,nb01,nb02";
      $f_var['content_fd_type'] []="date,text";
      $f_var['content_link']    []="{$f_var['server_name']}/~docs/news_board/nb01.php?msel=41&f_s_num='s_num'"; // list 單筆
      $f_var['content_sql' ]    []="select * from docs.news_board where docs.news_board.d_date='0000-00-00' order by docs.news_board.s_num desc limit {$f_var['content_qty']}";  // sql
      $f_var['content_more']    []="{$f_var['server_name']}/~docs/news_board/nb01.php";
    }
    //stop by mimi 2010.11.04 報修-11469 會議通知回寫,有異常
    //open by 東巖 2011.05.02 報修-13531 熱門討論區重新開放
    $f_var['content_title']   []="熱門討論";
    $f_var['content_fd_name'] []="dh03,dh02,dh07";
    $f_var['content_fd_type'] []="date,text,text";
    $f_var['content_link']    []="{$f_var['server_name']}/~docs/moderated/doc02.php?mnf01=02&msel=41&f_s_num='s_num'"; // list 單筆
    $f_var['content_sql' ]    []="select * from moderated.doc02_h  where moderated.doc02_h.d_date='0000-00-00' and moderated.doc02_h.dh10='' order by moderated.doc02_h.b_date desc limit {$f_var['content_qty']}";  // sql

    $f_var['content_title']   []="最近公告";
    //$f_var['content_fd_name'] []="nf03,nf021,nf022,nf023,nf05";
    //$f_var['content_fd_type'] []="date,text,text,text,text";
    $f_var['content_fd_name'] []="nf03,nf05";
    $f_var['content_fd_type'] []="date,text";
    $f_var['content_link']    []="{$f_var['server_name']}/~docs/notify/nf01.php?mnf01=01&msel=41&f_s_num='s_num'"; // list 單筆
    $f_var['content_sql' ]    []="select * from notify.notify1 where substring(notify.notify1.nf01,1,2)='01' and notify.notify1.d_date='0000-00-00' order by notify.notify1.s_num desc limit {$f_var['content_qty']}";  // sql

    //add by zihan 2020.02.07 報修37721-待辦15338-eip首頁新增人事公告    20.02.11更新eip
    //edit by 姿俞 2020.02.21 依資訊副理指示需將「人事公告」從EIP首頁頂端, 改至「最近公告」下方
    $f_var['content_title']   []="人事公告";
    $f_var['content_fd_name'] []="nf03,nf05";
    $f_var['content_fd_type'] []="date,text";
    $f_var['content_link']    []="{$f_var['server_name']}/~docs/notify/nf03.php?mnf01=05&msel=41&f_s_num='s_num'"; // list 單筆
    $f_var['content_sql' ]    []="select * from notify.notify3 where substring(notify.notify3.nf01,1,2)='05' and notify.notify3.d_date='0000-00-00' order by notify.notify3.s_num desc limit {$f_var['content_qty']}";  // sql

    $f_var['content_title']   []="最近通報";
    $f_var['content_fd_name'] []="nf03,nf05";
    $f_var['content_fd_type'] []="date,text";
    $f_var['content_link']    []="{$f_var['server_name']}/~docs/notify/nf01.php?mnf01=02&msel=41&f_s_num='s_num'"; // list 單筆
    $f_var['content_sql' ]    []="select * from notify.notify1 where substring(notify.notify1.nf01,1,2)='02' and notify.notify1.d_date='0000-00-00' order by notify.notify1.s_num desc limit {$f_var['content_qty']}";  // sql

    $f_var['content_title']   []="最近通知";
    $f_var['content_fd_name'] []="nf03,nf05";
    $f_var['content_fd_type'] []="date,text";
    $f_var['content_link']    []="{$f_var['server_name']}/~docs/notify/nf01.php?mnf01=03&msel=41&f_s_num='s_num'"; // list 單筆
    $f_var['content_sql' ]    []="select * from notify.notify1 where substring(notify.notify1.nf01,1,2)='03' and notify.notify1.d_date='0000-00-00' order by notify.notify1.s_num desc limit {$f_var['content_qty']}";  // sql

    $f_var['content_title']   []="部門通知";
    $f_var['content_fd_name'] []="nf02,sname,nf03";
    $f_var['content_fd_type'] []="date,text,text";
    $f_var['content_link']    []="{$f_var['server_name']}/~docs/notify/nf06.php?msel=41&mnf01='nf01_dept'&f_s_num='s_num'"; // list 單筆
    /*$f_var['content_sql' ]    []="select notify.notify6.*,sl.dept.sname
                                         from notify.notify6
                                         inner join sl.dept on sl.dept.dept_id=notify.notify6.nf01
                                         where notify.notify6.d_date = '0000-00-00'
                                         order by notify.notify6.nf02 desc
                                         limit {$f_var['content_qty']}
                                 "; // sql*/
    $f_var['content_sql' ]    []="select notify.notify6.*,case
                                         when sl.dept.dept_id = 'S122'
                                         then '資訊組'
                                         else sl.dept.sname
                                         end as sname
                                         from notify.notify6
                                         inner join sl.dept on sl.dept.dept_id=notify.notify6.nf01
                                         where notify.notify6.d_date = '0000-00-00'
                                         order by notify.notify6.nf02 desc
                                         limit {$f_var['content_qty']}
                                 "; // sql
    $f_var['content_title']   []="會議通知";
    $f_var['content_fd_name'] []="nf02,nf01";
    $f_var['content_fd_type'] []="date,substr";
    $f_var['content_link']    []="{$f_var['server_name']}/~docs/notify/nf10.php?msel=41&f_s_num='s_num'"; // list 單筆
    $f_var['content_sql' ]    []="select * from notify.notify10 where  notify.notify10.d_date='0000-00-00 00:00:00' and notify.notify10.nf12='Y' order by notify.notify10.nf02 desc limit {$f_var['content_qty']}";  // sql

    $f_var['content_title']   []="最近會議";
    $f_var['content_fd_name'] []="nf02,nf01";
    $f_var['content_fd_type'] []="date,substr";
    $f_var['content_link']    []="{$f_var['server_name']}/~docs/notify/nf10.php?msel=41&f_s_num='s_num'"; // list 單筆
    $f_var['content_sql' ]    []="select * from notify.notify10 where  notify.notify10.d_date='0000-00-00 00:00:00' and notify.notify10.nf12<>'Y' and nf02>='".date('Ymd')."' order by notify.notify10.nf02 limit {$f_var['content_qty']}";  // sql

    //stop by mimi 2010.11.04 報修-11469 會議通知回寫,有異常
        //$f_var['content_title']   []="最近會議";
        //$f_var['content_fd_name'] []="nf021,nf01,nf022,nf03";
        //$f_var['content_fd_type'] []="date,substr,substr_time,substr";
        //$f_var['content_link']    []="{$f_var['server_name']}/~docs/notify/nf09.php?mnf01='nf01_meet'&msel=41&f_s_num='s_num'"; // list 單筆
        //$f_var['content_sql' ]    []="select * from notify.notify9 where substring(notify.notify9.nf01,1,1) in('0','1') and notify.notify9.d_date='0000-00-00' and nf022!='--' order by notify.notify9.nf021 desc limit {$f_var['content_qty']}";  // sql
        //$f_var['content_sql' ]    []="select * from notify.notify9 where notify.notify9.nf021>=(curdate()+0) /*and substring(notify.notify9.nf01,1,1) in('0','1')*/ and notify.notify9.d_date='0000-00-00' and nf022!='--' order by notify.notify9.nf021 desc limit {$f_var['content_qty']}";  // sql

    //add by 朝鈞 2016.06.04 報修29184-公司EIP首頁增加教育訓練欄位
    $f_var['content_title']   []="教育訓練";
    $f_var['content_fd_name'] []="nf03,nf05";
    $f_var['content_fd_type'] []="date,text";
    $f_var['content_link']    []="{$f_var['server_name']}/~docs/notify/nf01.php?mnf01=04&msel=41&f_s_num='s_num'"; // list 單筆
    $f_var['content_sql' ]    []="select * from notify.notify1 where substring(notify.notify1.nf01,1,2)='04' and notify.notify1.d_date='0000-00-00' order by notify.notify1.s_num desc limit {$f_var['content_qty']}";  // sql

    $f_var['content_title']   []="剪報資料";
    $f_var['content_fd_name'] []="nf02,nf04";
    $f_var['content_fd_type'] []="date,text";
    $f_var['content_link']    []="{$f_var['server_name']}/~docs/notify/nf07.php?msel=41&f_s_num='s_num'"; // list 單筆
    $f_var['content_sql' ]    []="select * from notify.notify7 where notify.notify7.d_date='0000-00-00' order by notify.notify7.nf02 desc limit {$f_var['content_qty']}";  // sql

    //stop by mimi 2010.11.04 報修-11469 會議通知回寫,有異常
    $f_var['content_title']   []="最新提案";
    $f_var['content_fd_name'] []="pah01,pah02,pah04";
    $f_var['content_fd_type'] []="date,text,text";
    $f_var['content_link']    []="{$f_var['server_name']}/~docs/pap/pa01.php?msel=41&f_s_num='s_num'"; // list 單筆
    $f_var['content_sql' ]    []="select * from pap.pap_h where pap.pap_h.d_date='0000-00-00' order by pap.pap_h.b_date desc limit {$f_var['content_qty']}";  // sql

    $open = fopen('/home/sl/public_html/eip_public_msg.itm','w+');

     for($i=0;$i<count($f_var['content_title']);$i++) {

         $afd_name = explode(',',$f_var['content_fd_name'][$i]);
         $afd_type = explode(',',$f_var['content_fd_type'][$i]);

         $result = mysql_query($f_var['content_sql'][$i]);
         //if('0775711'==$_SESSION['login_empno']){
         // echo ($f_var['content_sql'][$i]).'<br>';
         //}
         while ($row = mysql_fetch_array($result)) {
                $mlist_fd = $f_var['content_title'][$i].';';
                $mlink = str_replace("'s_num'",$row['s_num'],$f_var['content_link'][$i]); // 抓取 s_num 的值
                $mlink = str_replace("'nf01_meet'",substr($row['nf01'],0,2),$mlink);      // 會議通知要另外處理
                $mlink = str_replace("'nf01_dept'",$row['nf01'],$mlink);                  // 部門通知要另外處理
                //echo $mlink;
                $mlist_fd.= $mlink.';';
                for($j=0;$j<count($afd_name);$j++) {
                    switch ($afd_type[$j]) {
                       case "date":
                            $mlist_fd .= sl_ymd($f_var['show_year'],$row[ $afd_name[$j] ],'.').';';
                            break;
                       case "date4":
                            $mlist_fd .= '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.u_showdate($row[ $afd_name[$j] ],'.').';';
                            break;
                       case "substr_time":
                            $mlist_fd .= u_showtime(substr($row[ $afd_name[$j] ],3,999) ).';';
                            break;
                       case "time":
                            $mlist_fd .= u_showtime($row[ $afd_name[$j] ]).';';
                            break;
                       case "dept":
                            $mlist_fd .= trim(substr($row[ $afd_name[$j] ],3,999)).';';
                            break;
                       case "substr":
                            //$mlist_fd .= trim(substr($row[ $afd_name[$j] ],3,999)).';';
                            if( $afd_name[$j]=='nf01' ){  // 會議通知、最近會議要另外處理  add by 佳玟 2013.07.08
                              $ex_td03  = explode(".",$row[ $afd_name[$j] ]);
                              $mlist_fd .= trim($ex_td03[1]).';';
                            }else{
                              $mlist_fd .= trim(substr($row[ $afd_name[$j] ],3,999)).';';
                            }

                            break;
                       default:
                            $mlist_fd .= $row[ $afd_name[$j] ].';';
                            break;
                    }
                }
                $data = $mlist_fd."\r\n";
                fwrite( $open,$data );
         }
     }
     //exit;
}
  // **************************************************************************
  //  函數名稱: sl_month_change()
  //  函數功能: 回傳前月或次月（西元年月日）
  //  使用方式: sl_month_change('20090131','+1') ??20090201
  //            sl_month_change('20090131','-1') → 20081201
  //  程式設計: kenny
  //  設計日期: 2009.09.01
  // **************************************************************************
  function sl_month_change($ymd,$calc) {
    switch ($calc{0}) {
      case '+':
        $calc = (int)$calc;
        $ymd = date('Ymd',mktime(0,0,0,(date('n',strtotime($ymd))+$calc>12)?1:date('n',strtotime($ymd))+$calc,1,date('Y',strtotime($ymd.' +'.$calc.' months'))));
      break;
      case '-':
        $calc = abs($calc);
        $ymd = date('Ymd',mktime(0,0,0,(date('n',strtotime($ymd))-$calc)<1?13-$calc:date('n',strtotime($ymd))-$calc,1,date('Y',strtotime($ymd.' -'.$calc.' months'))));
      break;
    }
    return $ymd;
  }

  // **************************************************************************
  //  函數名稱: sl_mgr_pid()
  //  函數功能: 依管理多站資料sl.multi_dept，重整六碼油品站別陣列 $a_pid
  //  使用方式: sl_mgr_pid($a_pid,$ignore)
  //            or
  //            foreach (sl_mgr_pid($a_pid) as $k=>$v) { ... }
  //            $ignore = 可看全部油站的四碼人事部門代號或是員編（逗點分隔）
  //  Array
  //  (
  //      [800800] => 南區
  //      [806006] => 第六區
  //      [807007] => 第七區
  //      [806801] => 大林站
  //      [807802] => 高雄站
  //      ...
  //  )
  //  程式設計: kenny
  //  設計日期: 2010.02.02
  // **************************************************************************
  function sl_mgr_pid($a_pid,$ignore='') {
    Global $a_pid;
    if (is_array($a_pid)) {
      $mgr_dept = sl_mgr_dept($ignore);
      foreach ($a_pid as $k=>$v) {
        if (strstr($mgr_dept['gas'].$mgr_dept['area'],substr($k,3,3))!=false || trim($k)=='') {
          $new_a_pid[$k] = $v;
        } else if ($mgr_dept['gas']=='all') {
          $new_a_pid[$k] = $v;
        }
      }
    } else {
      sl_errmsg('查無站別陣列資料[$a_pid]！');
    }
    return $new_a_pid;
  }
  // **************************************************************************
  //  函數名稱: sl_in()
  //  函數功能: 查詢指定字串是否有符合（可用在權限設定）
  //  使用方式: if (sl_in('S122','S111,S122,S133')) { ... }
  //  程式設計: kenny
  //  設計日期: 2010.03.29
  // **************************************************************************
  function sl_in($str_a,$str_b) {
    return (strstr($str_b,$str_a)!=false)?true:false;
  }
  // **************************************************************************
  //  函數名稱: sl_str_explode()
  //  函數功能: 字串切割,每十個字就段行
  //  使用方式: sl_str_explode($vstr,$vqty,$vstyle)
  //            ex.sl_str_explode('2;3;4;5;6;7;8;9;10','3',';')
  //            輸出後, 2;3;4;
  //                    5;6;7;
  //                    8;9;10
  //  備    註: 字串切割,每十個字就段行
  //  程式設計: Mimi
  //  設計日期: 2009.04.13
  // **************************************************************************
  function sl_str_explode($vstr,$vqty='10',$vstyle=',',$vtype='str') {
    global $f_var;
    $fd_exp = explode("{$vstyle}",$vstr);
    $mfd_value= '';
    $fd_cnt   = 0;
    for($i=0;$i<count($fd_exp);$i++) {
      //$fd_key = iif(ereg("[^0-9]",substr($fd_exp[$i],0,1)),$fd_exp[$i],substr($fd_exp[$i],0,3));//前三碼如果不是數字就全秀
      //upd by mimi 2011.06.28 判斷字串形態
      $fd_key = $fd_exp[$i];
      $fd_cnt++;
      //10個字串就跳行
      $mfd_value .= iif(0==($fd_cnt%$vqty),
                        //最後一個不要有逗點
                        iif($fd_cnt==count($fd_exp),$fd_key,"{$fd_key}{$vstyle}<br>"),
                        //最後一個不要有逗點
                        iif($fd_cnt==count($fd_exp),$fd_key,"{$fd_key}{$vstyle}"));
    }
    return($mfd_value);
  }


  // **************************************************************************
  //  函數名稱: sl_add_select_gas()
  //  函數功能: 依管理多站的權限,秀出下拉式選單, 抓取 /~gas/g_pid.itm
  //  使用方式: 1.全部都是用預設的,下拉選單秀出油站代號,且能選擇區別
  //              list($adept_value,$adept_show,$mdept_qty) = sl_add_select_gas()
  //            2.想要自己設定秀出 油站代號 OR ERP代號..等等
  //              list($adept_value,$adept_show,$mdept_qty) = sl_add_select_gas('erp','N','0775711/S123')
  //            $vkind:  b_gid=秀出油站代號 ; erp_dept_id=秀出ERP代號 ; dept_id=人事系統部門代號 ; gas=油站代號 EX.301 ; hrm=HRM人事新部門代碼(8碼)
  //            $varea:  Y=要有區別選項 ; N=僅秀出站別
  //            $voption:部門代號或員工編號另外要秀出全部油站的人,可以 / 分隔可混合輸入
  //            $voutput:array=回傳陣列的值,可應用於下拉式選單 ; where_list=回傳逗點分隔的值,可應用於SQL的where條件
  //  程式設計: Mimi
  //  設計日期: 2010.05.27
  // **************************************************************************
  function sl_add_select_gas($vkind='b_gid',$varea='Y',$voption='',$voutput='array',$vempno='') {
    Global $_SESSION;
    Global $f_var;

    $ashow[]  = '----請選擇----';
    $avalue[] = '--';

    $vempno  = iif($vempno=='',$_SESSION['login_empno'],$vempno);//add by mimi 2012.04.03 增加變數使用員編查管理哪幾站
    $vjob_id = iif($vjob_id=='',$_SESSION['login_job_id'],$vjob_id);
    if( 'hrm'!=$vkind ){ //add by 2018.07.03 針對hrm部門代號處理
      $vdept_id= iif($vdept_id=='',$_SESSION['login_dept_id'],$vdept_id);
    }else{
      $vdept_id= iif($vdept_id=='',$_SESSION['login_hrm_dept_id'],$vdept_id);
    }
    // Add by Tony 2011-03-11 應該要改絕對路徑，直接開網頁會有問題???可是EIP確可以???
    $fd_p_gid_file= "/home/gas/public_html/g_pid.itm";    // 油站代號檔
    //$fd_p_gid_file= "http://slt.slc.com.tw/~gas/g_pid.itm";    // 油站代號檔
    //$fd_p_gid_file= "http://eip.slc.com.tw/~gas/g_pid.itm";    // 油站代號檔

    list($ar_p_gid_value    ,$ar_p_gid_show    ,$ar_p_gid_qty)   = u_add_select2($fd_p_gid_file);   // 代號轉入 陣列

    sl_open('sl');
    //$fv_hu = '';
    //$sql_sp = "SELECT *
    //          FROM   hr.set_pview
    //          WHERE  set_pview.d_date='0000-00-00 00:00:00'
    //                 and empno = '{$_SESSION['login_empno']}'
    //          ORDER BY set_pview.b_date";
    //$res_sp = mysql_query($sql_sp);
    //$cnt_sp = mysql_num_rows($res_sp);
    //if( $cnt_sp>0 ){
    //  while ($ar_sp = mysql_fetch_assoc($res_sp)) {
    //    $fv_hu = $ar_sp['dept'];   //人事權限
    //  }
    //}
    $fv_dept_mf = '';
    $fv_hrdept_mf = '';
    $sql_mf = "SELECT is_mf_set.dept, is_mf_set.hr_dept
              FROM    hr.is_mf_set
                      LEFT JOIN sl.pass on pass.empno = is_mf_set.empno
                      LEFT JOIN hr.set_pview on pass.empno = set_pview.empno
                                                and set_pview.d_date='0000-00-00 00:00:00'
              WHERE  is_mf_set.d_date='0000-00-00 00:00:00'
                     and pass.d_date='0000-00-00 00:00:00'
                     /*and pass.dept_id = 'S116'*/
                     and is_mf_set.empno = '{$_SESSION['login_empno']}'
                     and set_pview.empno != ''
              ORDER BY is_mf_set.b_date";
    $res_mf = mysql_query($sql_mf);
    $cnt_mf = mysql_num_rows($res_mf);
    if( $cnt_mf>0 ){
      while ($ar_mf = mysql_fetch_assoc($res_mf)) {
        $fv_dept_mf = $ar_mf['dept'];   //人事分區權限
        $fv_hrdept_mf = $ar_mf['hr_dept'];   //人事分區權限
      }
    }
    mysql_query(" insert into dept (dept_id,erp_dept_id,b_gid,p_gid,sap_dept_id,sap_ba) values ('614','6213','614','S3605613','L613','L613'); ");//另外增加梧棲站

    //add by mimi 2012.04.03 列出管理全油站的人員有哪些
    //add by zihan 2021.09.16 財會新增支援組... S126 通運-財會處-支援組
    if( 'hrm'!=$vkind ){
      $query_s1     = "select group_concat(empno order by empno separator '/') as empno, '' as hr_deptid
                       from sl.pass
                       where dept_id in ('S121','S122','S112','S131','S132','S133','S136','S137','S138','S139','S155','S156','S181','S183','S184','S188','S196','S191','S177','S119','S179','S126')
                             and d_date='0000-00-00 00:00:00'
                    ";
    }
    else{
      $query_s1     = "select group_concat(pass.empno order by pass.empno separator '/') as empno,
                              group_concat(pass.dept_id order by pass.dept_id separator '/') as hr_deptid
                       from   sl.dept_hrm
                              left join sl.pass on dept_hrm.dept_id = pass.hr_deptid
                       where  dept_hrm.sle_dept_id in ('S121','S122','S112','S131','S132','S133','S136','S137','S138','S139','S151','S153','S154','S155','S156','S181','S196','S191','S177','S119','S126')
                              and dept_hrm.d_date='0000-00-00 00:00:00'
                              and pass.d_date='0000-00-00 00:00:00'
                              and dept_hrm.end_date >= '".date("Ymd")."'
                      ";
    }
    //echo "<pre>{$query_s1}</pre>";
    $result_s1 = mysql_query($query_s1);
    $row_s1 = mysql_fetch_array($result_s1);
    $fd_empno_s1 = $row_s1['empno'];
    $fd_hrdept_s1 = $row_s1['hr_deptid'];
    //echo $fd_empno_s1;

    //--要另外判斷秀出全油站的人------------------------------------------//upd by mimi 2011.06.21 報修-14064 增加會計駐廠組權限
    //upd by 小樵2019.06.17 鄭超群經理升遷至財會處主管,反映S102油品擔保品看不到資料
    $fd_exdept_id= strstr("{$voption}/S121/S122/S112/S131/S132/S133/S136/S137/S138/S139/S153/S154/S155/S156/S181/S196/S191/S102/S177/S190/S119",$vdept_id);
    if( 'hrm'==$vkind ){ //add by 佳玟 2018.06.21 針對hrm部門代號處理
      $fd_exdept_id= strstr("{$voption}/{$fd_hrdept_s1}",$vdept_id);
      //echo $voption."-".$fd_hrdept_s1."-".$vdept_id."<br>";
    }
    //2011.02.09 S196.S191 ADD BY 東巖-報修
    $fd_exempno  = strstr("{$voption}/{$fd_empno_s1}/0883174/7800053/0970534/7865309/9475036/1631161/9478752/1530453",$vempno); //upd by 佳玟 2015.01.07 經理反應沒有權限!!因為將5020拿掉後,無管理多站權限,導致無權限觀看各站,增加7800053
                                                                                //upd by 朝鈞 2016.10.24 報修30217-法務林立民升組長, JOB_ID 1026改5030 改用員編0970534判斷
                                                                                //upd by 小樵 2016.12.06 韓月卿需要油站權限
                                                                                //upd by 小樵 2020.02.21 報修37829 鄭超元 - 1631161
                                                                                //upd by 小樵 2020.09.03 李孟禪 9478752
                                                                                //upd by 姿於 2022.03.25 胡楨瑩 1530453
    //$fd_exjob_id = strstr("{$voption}/5001/5002/5003/5019/5020/5042/1026",$vjob_id);//upd by mimi 2011.03.09 代辦-5126 增加副主管可瀏覽全部油站的權限
    $fd_exjob_id = strstr("{$voption}/5001/5002/5003/5019/5042/1026",$vjob_id);//upd by mimi 2011.03.09 代辦-5126 增加副主管可瀏覽全部油站的權限  upd by 佳玟 2015.01.06 移除經理看全區, 因為有油品區經理
    //echo $fd_exdept_id.'--'.$fd_exempno.'--'.$fd_exjob_id.'<hr>';
    if($fd_exdept_id<>null or $fd_exempno<>null or $fd_exjob_id<>null){
      if( 'hrm'!=$vkind ){
        $query1     = "SELECT group_concat( dept_id ORDER BY dept_id SEPARATOR ',' )  as dept_id
                       FROM sl.dept
                       where stop='N'
                             and d_date='0000-00-00 00:00:00'
                             and substring(p_gid,1,3) in ('S35','S36','S38')
                       ORDER BY dept_id ASC
                      ";
      }else{
        $query1 = "SELECT group_concat( dept_id ORDER BY dept_id SEPARATOR ',' )  as dept_id
                   FROM   sl.dept_hrm
                   where  stop='N'
                          and d_date='0000-00-00 00:00:00'
                          and dept_id like 'S23%'
                          and dept_hrm.end_date >= '".date("Ymd")."'
                   ORDER BY dept_id ASC
                  ";
      }
      //echo "<pre>{$query1}</pre>";
      $result1 = mysql_query($query1);
      $row1 = mysql_fetch_array($result1);
      //echo $row1['dept_id'];
      $rep_dept_id = str_replace(",","','",$row1['dept_id']);
      $add_ct = 'Y';
    }
    //--------------------------------------------------------------------
    else{
      $rep_dept_id = '';
      //---判斷管理多站的人-------------------------------------------------------
      //upd by mimi 2011.05.10 管理多站改抓人事系統轉出的
      //$query2     = "select *
      //               from sl.multi_dept
      //               where empno='{$vempno}'
      //                     and ap_id like '%{$f_var['ap_id']}%'
      //                     and d_date='0000-00-00 00:00:00'
      //              ";
      //$query2     = "SELECT pass.empno,pass.name,dept_group.group_id,dept_group.group_name,dept_group.dept_id
      //               FROM sl.pass
      //                 left join dept_group on pass.group_id=dept_group.group_id
      //                                         and dept_group.d_date='0000-00-00 00:00:00'
      //               where pass.empno='{$vempno}'
      //                     and pass.group_id <>''
      //                     and pass.d_date='0000-00-00 00:00:00'
      //               order by dept_group.group_id
      //              ";
      //------------------------------------------------------------------------------------------------------

      //if( '1025'==$_SESSION['login_job_id'] or ''!=$fv_hu ){ //add by 佳玟 2016.04.08 報修28672-人事沒有管理多站,但又要分區查詢
      if( '1025'==$_SESSION['login_job_id'] or ''!=$fv_dept_mf ){
        if( 'hrm'!=$vkind ){
          //switch( substr($_SESSION['login_dept_id'],0,2) ){
          //  case 'S2':
          //       $fd_swhere_pgid = " and substring(p_gid,1,5) in ('S3501') ";
          //       break;
          //  case 'S5':
          //       $fd_swhere_pgid = " and substring(p_gid,1,5) in ('S3502','S3503') ";
          //       break;
          //  case 'S6':
          //       $fd_swhere_pgid = " and (substring(p_gid,1,3) in ('S36')
          //                              or substring(p_gid,1,5) in ('S3504','S3505') )";
          //       break;
          //  case 'S8':
          //       $fd_swhere_pgid = " and substring(p_gid,1,3) in ('S38') ";
          //       break;
          //  default:
          //       break;
          //
          //}
          //$sql_dt = "SELECT group_concat( dept_id ORDER BY dept_id SEPARATOR ',' )  as dept_id
          //           FROM   sl.dept
          //           where  stop='N'
          //                  and d_date='0000-00-00 00:00:00'
          //                  {$fd_swhere_pgid}
          //           ORDER BY dept_id ASC
          //           ";
          $rep_dept_id = str_replace(",","','",$fv_dept_mf);
        }
        else{
          //switch( substr($_SESSION['login_hrm_dept_id'],3,1) ){
          //  case '5':
          //       if( 'S2151102'==$_SESSION['login_hrm_dept_id'] ){
          //         $fd_swhere_pgid_hrm = " and (dept_id like 'S23511%'
          //                                      or dept_id in ('S2010000','S2110000','S2150000','S2151100','S2151102',
          //                                       'S2151202','S2152000','S2152100','S2152101','S2152102',
          //                                       'S2152103','S2310000','S2350000') )";
          //       }else{
          //         $fd_swhere_pgid_hrm = " and ( dept_id like 'S23512%'
          //                                     or dept_id like 'S23513%'
          //                                     or dept_id like 'S2352%' ) ";
          //       }
          //       break;
          //  case '6':
          //       $fd_swhere_pgid_hrm = " and ( dept_id like 'S236%' or dept_id like 'S2362%' ) ";
          //       break;
          //  case '8':
          //       $fd_swhere_pgid_hrm = " and ( dept_id like 'S238%' or dept_id like 'S2382%' ) ";
          //       break;
          //  default:
          //       break;
          //
          //}
          //$sql_dt = "SELECT group_concat( dept_id ORDER BY dept_id SEPARATOR ',' )  as dept_id
          //         FROM   sl.dept_hrm
          //         where  stop='N'
          //                and d_date='0000-00-00 00:00:00'
          //                {$fd_swhere_pgid_hrm}
          //         ORDER BY dept_id ASC
          //         ";
          $rep_dept_id = str_replace(",","','",$fv_hrdept_mf);

        }
        //echo "<pre>{$sql_dt}</pre>";
        //$res_dt = mysql_query($sql_dt);
        //$ar_dt  = mysql_fetch_array($res_dt);
        //$rep_dept_id = str_replace(",","','",$ar_dt['dept_id']);
      }

      if( substr($_SESSION['login_dept_id'],2,1) == 'Z' ){ //add by 逸凡 2018.12.10 報修35136-油品營業沒有管理多站,但又要分區查詢
        if( 'hrm'!=$vkind ){
          switch( substr($_SESSION['login_dept_id'],0,2) ){
            case 'S5':
                 $fd_swhere_pgid = " and substring(p_gid,1,4) in ('S350') ";
                 break;
            case 'S6':
                 $fd_swhere_pgid = " and substring(p_gid,1,4) in ('S360') ";
                 break;
            case 'S8':
                 $fd_swhere_pgid = " and substring(p_gid,1,4) in ('S380') ";
                 break;
            default:
                 break;

          }
          $sql_dt = "SELECT group_concat( dept_id ORDER BY dept_id SEPARATOR ',' )  as dept_id
                     FROM   sl.dept
                     where  stop='N'
                            and d_date='0000-00-00 00:00:00'
                            {$fd_swhere_pgid}
                     ORDER BY dept_id ASC
                     ";
        }
        else{

          switch( substr($_SESSION['login_hrm_dept_id'],3,1) ){
            case '5':
                 $fd_swhere_pgid_hrm = " and ( dept_id like 'S235%') ";
                 break;
            case '6':
                 $fd_swhere_pgid_hrm = " and ( dept_id like 'S236%' ) ";
                 break;
            case '8':
                 $fd_swhere_pgid_hrm = " and ( dept_id like 'S238%' ) ";
                 break;
            default:
                 break;
          }
          $sql_dt = "SELECT group_concat( dept_id ORDER BY dept_id SEPARATOR ',' )  as dept_id
                   FROM   sl.dept_hrm
                   where  stop='N'
                          and d_date='0000-00-00 00:00:00'
                          and dept_hrm.end_date >= '".date("Ymd")."'
                          {$fd_swhere_pgid_hrm}
                   ORDER BY dept_id ASC
                   ";

        }
        //echo "<pre>{$sql_dt}</pre>";
        $res_dt = mysql_query($sql_dt);
        $ar_dt  = mysql_fetch_array($res_dt);
        $rep_dept_id = str_replace(",","','",$ar_dt['dept_id']);
      }


      if( 'hrm'!=$vkind ){
        if( '7865694'!=$vempno ){  //upd by 佳玟 2016.03.01 報修28343, 楊文華取代靖佳的工作
          //if( '9167781'!=$vempno ){   //upd by 佳玟 2014.08.26 報修24394,靖佳9167781非人事部門,job_id也非人事,group_id為空值,所以增加例外判斷可以看到中區油站
          $query2     = "SELECT pass.empno,pass.name,dept_group.group_id,dept_group.group_name,dept_group.dept_id
                         FROM sl.pass
                           left join dept_group on pass.group_id = dept_group.group_id
                                                   and dept_group.d_date='0000-00-00 00:00:00'
                         where pass.empno='{$vempno}'
                               and pass.group_id <>''
                               and pass.d_date='0000-00-00 00:00:00'
                         order by dept_group.group_id
                        ";
        }else{
          $query2     = "SELECT pass.empno,pass.name,dept_group.group_id,dept_group.group_name,dept_group.dept_id
                         FROM sl.pass
                              left join dept_group on 'SG6G' = dept_group.group_id
                                                   and dept_group.d_date='0000-00-00 00:00:00'
                         where pass.empno='{$vempno}'
                               and pass.d_date='0000-00-00 00:00:00'
                         order by dept_group.group_id
                        ";
        }
      }
      else{
        if( '7865694'!=$vempno ){  //upd by 佳玟 2016.03.01 報修28343, 楊文華取代靖佳的工作
          //if( '9167781'!=$vempno ){   //upd by 佳玟 2014.08.26 報修24394,靖佳9167781非人事部門,job_id也非人事,group_id為空值,所以增加例外判斷可以看到中區油站
          $query2     = "SELECT pass.empno,pass.name,dept_group.group_id,dept_group.group_name,dept_group.dept_id
                         FROM sl.pass
                           left join dept_group on pass.ulyqq_id = dept_group.group_id
                                                   and dept_group.d_date='0000-00-00 00:00:00'
                         where pass.empno='{$vempno}'
                               and pass.ulyqq_id <>''
                               and pass.d_date='0000-00-00 00:00:00'
                         order by dept_group.group_id
                        ";
        }else{
          $query2     = "SELECT dept_group.group_id,dept_group.group_name,dept_group.dept_id
                         FROM   dept_group
                         where  d_date='0000-00-00 00:00:00'
                                and group_id = 'H60000'
                         order by dept_group.group_id
                        ";
        }
      }

      $result2 = mysql_query($query2);
      $num2 = mysql_num_rows($result2);
      if ($num2>0 and ''==$rep_dept_id ) {
        $row2 = mysql_fetch_array($result2);
        $rep_dept_id = str_replace(",","','",str_replace("\r\n","",$row2['dept_id'])); //upd by mimi 2010.10.13 報修-11140 會計陳珮瑜無法選擇部分站別,因為SQL裡有段行的關係,目前已排除
        $fd_group_id = $row2['group_id'];
        //echo $rep_dept_id;
      }
      else if( ''==$rep_dept_id ){
        if( 'hrm'!=$vkind ){
          $query3     = "SELECT dept_id
                         FROM sl.pass
                         where empno='{$vempno}'
                               and d_date='0000-00-00 00:00:00'
                        ";
        }else{
          $query3     = "SELECT hr_deptid as dept_id
                         FROM sl.pass
                         where empno='{$vempno}'
                               and d_date='0000-00-00 00:00:00'
                        ";
        }
        //echo "<pre>{$query3}</pre>";
        $result3 = mysql_query($query3);
        $row3 = mysql_fetch_array($result3);
        $rep_dept_id =  $row3['dept_id'];
      }
    }
    if('S6B4'==$_SESSION['login_dept_id'] and 'hrm'!=$vkind){//upd by mimi 2011.05.31 將清水站寫死,永遠都要列出兩站
      $rep_dept_id="S6B4','614";
    }
    //echo $rep_dept_id;
    if( 'hrm'!=$vkind ){
      $query4     = "select *
                     from sl.dept
                     where dept_id in ('{$rep_dept_id}')
                           and d_date='0000-00-00 00:00:00'
                    ";
    }
    else{
      $query4     = "select *
                     from sl.dept_hrm
                     where dept_id in ('{$rep_dept_id}')
                           and d_date='0000-00-00 00:00:00'
                           and dept_hrm.end_date >= '".date("Ymd")."'
                    ";
    }

    //echo "<pre>{$query4}</pre>{$vempno}";//exit;
    $result4 = mysql_query($query4);
    $num4 = mysql_num_rows($result4);
    if ($num4>0) {
      while($row4 = mysql_fetch_array($result4)){
        $fd_b_gid=$row4['b_gid'];
        $ar_gas[$fd_b_gid]=$fd_b_gid;
        $ar_erp[$fd_b_gid]=$row4['erp_dept_id'];
        $ar_sle[$fd_b_gid]=$row4['dept_id'];
        $ar_ba[$fd_b_gid]=$row4['sap_ba'];
      }
    }
    if('Y'==$varea){//要秀出區別
      //if($fd_exdept_id<>null or $fd_exempno<>null or $fd_exjob_id<>null
      // or 'SG00'==$fd_group_id or ('SG'==substr($fd_group_id,0,2) and 'G'==substr($fd_group_id,3,1) )
      // or 'SGG'==substr($fd_group_id,0,3) ){
        reset ($ar_p_gid_value);
        //echo '<pre>';
        //print_r($ar_p_gid_value);
        //echo '</pre>';
        while(list($dvalue)=each($ar_p_gid_value)){
          if( 'hrm'!=$vkind ){
            if( ( ($fd_exdept_id<>null or $fd_exempno<>null or $fd_exjob_id<>null or 'SG00'==$fd_group_id ) /*upd by mimi 2011.05.31 增加列出區的選項-全油品*/
                  and (substr($ar_p_gid_value[$dvalue],6,2)== '00' or substr($ar_p_gid_value[$dvalue],7,2) == '00' )
                ) or
                ( ('SG'==substr($fd_group_id,0,2) and 'G'==substr($fd_group_id,3,1))/*upd by mimi 2011.05.31 增加列出區的選項-區長*/
                  and (substr($ar_p_gid_value[$dvalue],3,1)==substr($fd_group_id,2,1) and (substr($ar_p_gid_value[$dvalue],6,2)== '00' or substr($ar_p_gid_value[$dvalue],7,2) == '00') )
                ) or
                ( ('SGG'==substr($fd_group_id,0,3))/*upd by mimi 2011.05.31 增加列出區的選項-課長*/
                  and (substr($ar_p_gid_value[$dvalue],5,1)==substr($fd_group_id,3,1)  and substr($ar_p_gid_value[$dvalue],6,2) == '00' ) )){
              $ex_value = explode('.',trim($ar_p_gid_value[$dvalue]));
              $avalue[] = $ex_value[1];
              $ashow[]  = trim($ar_p_gid_show[$dvalue]);
            }
          }
          else{
            $ex_p_gid_val = explode('.',trim($ar_p_gid_value[$dvalue]));
            switch($fd_group_id){
              case 'H10000':
                   if( ($fd_exdept_id<>null or $fd_exempno<>null or $fd_exjob_id<>null)
                      and ('00'==substr($ex_p_gid_val[1],1,2) or '00'==substr($ex_p_gid_val[1],3,2)) ){
                     $avalue[] = $ex_p_gid_val[1];
                     $ashow[]  = trim($ar_p_gid_show[$dvalue]);
                   }
                   break;
              case 'H50000':  //北區
              case 'H60000':  //中區
              case 'H80000':  //南區
                   if( substr($fd_group_id,1,1)==substr($ex_p_gid_val[1],0,1) and '00'==substr($ex_p_gid_val[1],1,2) ){
                     $avalue[] = $ex_p_gid_val[1];
                     $ashow[]  = trim($ar_p_gid_show[$dvalue]);
                   }
                   break;
              default:
                   if( ''!=$fd_group_id ){
                     switch(substr($fd_group_id,0,2)){ //北油一區...中油一區....
                       case 'H5':
                            if( strstr("1,2,3",substr($ex_p_gid_val[1],2,1))!=null and '00'==substr($ex_p_gid_val[1],3,2) ){
                              if( substr($ex_p_gid_val[1],2,1)==substr($fd_group_id,3,1) ){
                                $avalue[] = $ex_p_gid_val[1];
                                $ashow[]  = trim($ar_p_gid_show[$dvalue]);
                              }
                            }
                            break;
                       case 'H6':
                            if( strstr("4,5,6",substr($ex_p_gid_val[1],2,1))!=null and '00'==substr($ex_p_gid_val[1],3,2) ){
                              if( substr($ex_p_gid_val[1],2,1)==(substr($fd_group_id,3,1)+3) ){
                                $avalue[] = $ex_p_gid_val[1];
                                $ashow[]  = trim($ar_p_gid_show[$dvalue]);
                              }
                            }
                            break;
                       case 'H8':
                            if( strstr("7,8,9",substr($ex_p_gid_val[1],2,1))!=null and '00'==substr($ex_p_gid_val[1],3,2) ){
                              if( substr($ex_p_gid_val[1],2,1)==(substr($fd_group_id,3,1)+6) ){
                                $avalue[] = $ex_p_gid_val[1];
                                $ashow[]  = trim($ar_p_gid_show[$dvalue]);
                              }
                            }
                            break;
                       default:
                            break;
                     }
                   }
                   else{
                     if( ($fd_exdept_id<>null or $fd_exempno<>null or $fd_exjob_id<>null)
                        and ('00'==substr($ex_p_gid_val[1],1,2) or '00'==substr($ex_p_gid_val[1],3,2)) ){
                       $avalue[] = $ex_p_gid_val[1];
                       $ashow[]  = trim($ar_p_gid_show[$dvalue]);
                     }
                   }
                   break;
            }
          }
        }
      //}
      if('Y'==$add_ct && '/~gas'==substr($_SERVER["PHP_SELF"],0,5)){
      //echo $_SERVER["PHP_SELF"];
        $avalue[] = 'C01C01';
        $ashow[]  = 'C01C01-中油站';
        $avalue[] = 'T01T01';
        $ashow[]  = 'T01T01-台塑站';
      }
    }

    reset ($ar_p_gid_value);
    while(list($dvalue)=each($ar_p_gid_value)){
      $ex_value = explode('.',trim($ar_p_gid_value[$dvalue]));
      $ex_show  = explode('-',trim($ar_p_gid_show[$dvalue]));
      $key      = substr($ex_value[1],3,3);

      if($key==$ar_gas[$key] and $key<>NULL){
        switch ($vkind) {
          case "b_gid":  // 油站代號   EX.501301
            $avalue[] = $ex_value[1];
            $ashow[]  = "{$ex_value[1]}-{$ex_show[1]}";
            break;
          case "erp_dept_id":  // ERP代號    EX.2201
            $avalue[] = $ar_erp[$key];
            $ashow[]  = "{$ar_erp[$key]}-{$ex_show[1]}";
            break;
          case "gas":  // 油站代號    EX.301
            $avalue[] = $ar_gas[$key];
            $ashow[]  = "{$ar_gas[$key]}-{$ex_show[1]}";
            break;
          case "sap_ba":  // SAP油站代號    EX.L301
            $avalue[] = $ar_ba[$key];
            $ashow[]  = "{$ar_ba[$key]}-{$ex_show[1]}";
            //ECHO $ar_ba[$key]." - ".$ex_show[1];
            break;
          default:    //人事部門代號 EX.S2A1
            $avalue[] = $ar_sle[$key];
            $ashow[]  = "{$ar_sle[$key]}-{$ex_show[1]}";
            break;
        }
      }
    }
    // echo "<pre>";
    // print_r($avalue);
    // echo "</pre>";
    mysql_query(" delete from dept where dept_id = '614'; ");//刪除暫時增加的梧?炟?
    if('where_list'==$voutput){
      $fd_where = substr("'".implode("','",$avalue)."'" ,5,99999);

      return $fd_where;
    }
    else{
      return array($avalue,$ashow,count($avalue));
    }
  }
  // **************************************************************************
  //  函數名稱: sl_area_get_dept()
  //  函數功能: 選擇區別後,列出油站代碼,或人事部門代號,或ERP部門代號
  //  使用方式: sl_area_get_dept('501001','b_gid'),就會列出 '301','302','303','304'........
  //            $vfd : b_gid=列出油站代號 ; dept_id=部門代號 ; erp_dept_id= erp部門代號
  //  程式設計: Mimi
  //  設計日期: 2010.05.27
  // **************************************************************************
  function sl_area_get_dept($v_b_gid,$vfd='b_gid') {
    Global $f_var;
    sl_open('sl');
    mysql_query(" insert into dept (dept_id,erp_dept_id,b_gid,p_gid,sap_dept_id,stop) values ('614','6213','614','S3605613','L613','N'); ");//另外增加梧棲站
    mysql_query(" insert into dept (dept_id,erp_dept_id,b_gid,p_gid) values ('501','','501','S3502501'); ");//add by mimi 2011.09.27 另外增加基隆站
    switch ($v_b_gid) {
      case "000000"://全部
        $vwhere  = " and ( ( substring(sl.dept.p_gid, 1, 3 ) in ('S35','S36','S38') )
                           or (sl.dept.dept_id like 'S235%' and LENGTH(sl.dept.dept_id)>4 ) ) ";
        break;
      case "500500"://北區
        //$vwhere  = " and substring(sl.dept.p_gid, 3, 1 ) = '5'";
        $vwhere  = " and ( ( substring(sl.dept.p_gid, 3, 1 ) = '5' and substring(sl.dept.p_gid, 1, 3 ) in ('S35','S36','S38') )
                           or (sl.dept.dept_id like 'S235%' and LENGTH(sl.dept.dept_id)>4 ) ) ";
        break;
      case "600600"://中區
        //$vwhere = " and substring(sl.dept.p_gid, 3, 1 ) = '6'";
        $vwhere = " and ( ( substring(sl.dept.p_gid, 3, 1 ) = '6' and substring(sl.dept.p_gid, 1, 3 ) in ('S35','S36','S38') )
                           or (sl.dept.dept_id like 'S236%' and LENGTH(sl.dept.dept_id)>4 ) ) ";
        break;
      case "800800"://南區
        //$vwhere = " and substring(sl.dept.p_gid, 3, 1 ) = '8'";
        $vwhere = " and ( ( substring(sl.dept.p_gid, 3, 1 ) = '8' and substring(sl.dept.p_gid, 1, 3 ) in ('S35','S36','S38') )
                           or (sl.dept.dept_id like 'S238%' and LENGTH(sl.dept.dept_id)>4 ) ) ";
        break;
      case "501001"://第一區
        //$vwhere = " and substring(sl.dept.p_gid, 3, 3 ) = '501'";
        $vwhere = " and ( ( substring(sl.dept.p_gid, 3, 3 ) = '501' and substring(sl.dept.p_gid, 1, 3 ) in ('S35','S36','S38') )
                           or (sl.dept.dept_id like 'S23511%' and LENGTH(sl.dept.dept_id)>4 ) ) ";
        break;
      case "502002"://第二區
        //$vwhere = " and substring(sl.dept.p_gid, 3, 3 ) = '502'";
        $vwhere = " and ( ( substring(sl.dept.p_gid, 3, 3 ) = '502' and substring(sl.dept.p_gid, 1, 3 ) in ('S35','S36','S38') )
                           or (sl.dept.dept_id like 'S23512%' and LENGTH(sl.dept.dept_id)>4 ) ) ";
        break;
      case "503003"://第三區  // upd by 朝鈞 2016.12.15 報修30675-油品廠部、組織代碼變動
        //$vwhere = " and substring(sl.dept.p_gid, 3, 3 ) = '503'";
        $vwhere = " and ( ( substring(sl.dept.p_gid, 3, 3 ) = '503' and substring(sl.dept.p_gid, 1, 3 ) in ('S35','S36','S38') )
                           or (sl.dept.dept_id like 'S23513%' and LENGTH(sl.dept.dept_id)>4 ) ) ";
        break;
      case "604004"://第四區
        //$vwhere = " and substring(sl.dept.p_gid, 3, 3 ) = '604'";
        $vwhere = " and ( ( substring(sl.dept.p_gid, 3, 3 ) = '604' and substring(sl.dept.p_gid, 1, 3 ) in ('S35','S36','S38') )
                           or (sl.dept.dept_id like 'S23611%' and LENGTH(sl.dept.dept_id)>4 ) ) ";
        break;
      case "605005"://第五區
        //$vwhere = " and substring(sl.dept.p_gid, 3, 3 ) = '605'";
        $vwhere = " and ( ( substring(sl.dept.p_gid, 3, 3 ) = '605' and substring(sl.dept.p_gid, 1, 3 ) in ('S35','S36','S38') )
                           or (sl.dept.dept_id like 'S23612%' and LENGTH(sl.dept.dept_id)>4 ) ) ";
        break;
      case "606006"://第六區  // upd by 朝鈞 2016.12.15 報修30675-油品廠部、組織代碼變動
        //$vwhere = " and substring(sl.dept.p_gid, 3, 3 ) = '606'";
        $vwhere = " and ( ( substring(sl.dept.p_gid, 3, 3 ) = '606' and substring(sl.dept.p_gid, 1, 3 ) in ('S35','S36','S38') )
                           or (sl.dept.dept_id like 'S23613%' and LENGTH(sl.dept.dept_id)>4 ) ) ";
        break;
      case "807007"://第七區
        //$vwhere = " and substring(sl.dept.p_gid, 3, 3 ) = '807'";
        $vwhere = " and ( ( substring(sl.dept.p_gid, 3, 3 ) = '807' and substring(sl.dept.p_gid, 1, 3 ) in ('S35','S36','S38') )
                           or (sl.dept.dept_id like 'S23811%' and LENGTH(sl.dept.dept_id)>4 ) ) ";
        break;
      case "808008"://第八區 add by 逸凡 2012.01.02
        //$vwhere = " and substring(sl.dept.p_gid, 3, 3 ) = '808'";
        $vwhere = " and ( ( substring(sl.dept.p_gid, 3, 3 ) = '808' and substring(sl.dept.p_gid, 1, 3 ) in ('S35','S36','S38') )
                           or (sl.dept.dept_id like 'S23812%' and LENGTH(sl.dept.dept_id)>4 ) ) ";
        break;
      case "809009"://第九區 add by 朝鈞 2016.12.15 報修30675-油品廠部、組織代碼變動
        //$vwhere = " and substring(sl.dept.p_gid, 3, 3 ) = '809'";
        $vwhere = " and ( ( substring(sl.dept.p_gid, 3, 3 ) = '809' and substring(sl.dept.p_gid, 1, 3 ) in ('S35','S36','S38') )
                           or (sl.dept.dept_id like 'S23813%' and LENGTH(sl.dept.dept_id)>4 ) ) ";
        break;
      case "T01T01"://台塑站 add by 逸凡 2012.01.02
        //$mleft = "left join gas_eip_960125.company on gas_eip_960125.company.sle_dept = sl.dept.dept_id ";
        $mleft = "left join gas_eip_960125.company on gas_eip_960125.company.sle_dept = sl.dept.dept_id
                                                      or gas_eip_960125.company.hr_deptid = sl.dept.dept_id ";
        $vwhere = " and company.oil_supply = '2'
                    and ( substring(sl.dept.p_gid, 1, 3 ) in ('S35','S36','S38')
                          or ( sl.dept.dept_id like 'S23%' and LENGTH(sl.dept.dept_id)>4 ) ) ";
        break;
      case "C01C01"://中油站 add by 逸凡 2012.01.02
        //$mleft = "left join gas_eip_960125.company on gas_eip_960125.company.sle_dept = sl.dept.dept_id ";
        $mleft = "left join gas_eip_960125.company on gas_eip_960125.company.sle_dept = sl.dept.dept_id
                                                      or gas_eip_960125.company.hr_deptid = sl.dept.dept_id ";
        $vwhere = " and company.oil_supply = '1'
                    and ( substring(sl.dept.p_gid, 1, 3 ) in ('S35','S36','S38')
                          or ( sl.dept.dept_id like 'S23%' and LENGTH(sl.dept.dept_id)>4 ) ) ";
        break;
      default:
        $len_b_gid= strlen($v_b_gid);
        $fd_b_gid = iif($len_b_gid=='6',substr($v_b_gid,3,3),$v_b_gid);
        $vwhere = " and dept.b_gid = '{$fd_b_gid}'
                    and ( substring(sl.dept.p_gid, 1, 3 ) in ('S35','S36','S38')
                          or ( sl.dept.dept_id like 'S23%' and LENGTH(sl.dept.dept_id)>4 ) ) ";
        break;
    }
    $query1     = "SELECT group_concat( sl.dept.{$vfd} ORDER BY sl.dept.{$vfd} SEPARATOR ',' )  as {$vfd}
                   FROM sl.dept
                   {$mleft}
                   where stop='N'
                         and dept.d_date='0000-00-00 00:00:00'
                         {$vwhere}
                   ORDER BY dept_id ASC
                  ";

    //echo "<pre>{$query1}</pre>";//exit;
    $result1 = mysql_query($query1);
    $row1 = mysql_fetch_array($result1);
    $rep_dept_id = str_replace(",","','",$row1[$vfd]);
    $fd_dept_id  = "'{$rep_dept_id}'";
    mysql_query(" delete from dept where dept_id in ('614','501'); ");//刪除暫時增加的梧棲站//add by mimi 2011.09.27 另外刪除基隆站
    return ($fd_dept_id);
  }

  // **************************************************************************
  //  函數名稱: u_chk_pay()
  //  函數功能: 台糖運費計算使用
  //  使用方式: u_chk_pay(自外車別,客編,實際送達日期)
  //  程式設計: 東巖
  //  設計日期: 2011.01.24
  // **************************************************************************

function u_chk_pay($kind,$custno,$adate){
  u_open('taisugar');
  $sql = "select pay,custno from pd_set
              where substring(kind,1,1) = '{$kind}' and
                    start_date <= '{$adate}' and
                    end_date >= '{$adate}'
             ";
  $rs = mysql_query($sql);
  $num = mysql_num_rows($rs);
  if ($num>1){
    while($row=mysql_fetch_array($rs)){
      if($row['custno']==$custno && $row['custno']!=''){
        $cost = $row['pay'];
      } else {
        if($row['custno']==''){
          $cost = $row['pay'];
        }
      }
    }
  } else {
    $row=mysql_fetch_array($rs);
    $cost = $row['pay'];
  }
  return $cost;
}
  // **************************************************************************
  //  函數名稱: sl_eip2flw()
  //  函數功能: EIP各式資料轉電子簽核-簽核單
  //  使?峇閬?
  //  程式設計: Mimi
  //  設計日期: 2011.05.31
  // **************************************************************************
  function sl_eip2flw(&$f_var) {
    Global $_SESSION;
    Global $f_var;
    $vb_empno   = $_SESSION["login_empno"];
    $vb_name    = $_SESSION["login_name"];
    $vb_dept_id = $_SESSION["login_dept_id"];
    $vb_date    = date("Y-m-d H:i:s");
    $vfromip    = $_SERVER["REMOTE_ADDR"];
    $vproc      = u_showproc(); // 程式代號
    //$f_var['mgo_url'] = "/~docs/erp_qa/erp_qa.php?msel=6&mqah_no={$_REQUEST['f_s_num']}";
    //$f_var['f_s_num'] = '6173';

    if(is_array($_REQUEST)) { // 有資料才處理
       while (list($f_fd_name,$f_fd_value) = each($_REQUEST)) {
              //echo "$f_fd_name=$f_fd_value----";
              $f_var[$f_fd_name] = $f_fd_value;
       }
    }
    $count_table= substr_count($f_var['f_table'],'.');
    $ex_table   = explode('.',$f_var['f_table']);
    $fd_table   = iif($count_table==0,$f_var['f_table'],$ex_table[1]);

    $fd_b_empno      = $f_var['f_b_empno'];                                          //建檔者員編
    $fd_sleip2flw003 = str_replace("\"","",$f_var['f_db']);                          //DB
    $fd_sleip2flw004 = str_replace("\"","",$fd_table);                               //table
    $fd_sleip2flw005 = str_replace("\"","",$f_var['f_file_path']);                   //附件路徑
    $fd_sleip2flw006 = date('Y/m/d',strtotime($f_var['f_b_date']));                  //填單日期
    $fd_sleip2flw007 = str_replace("\"","",$f_var['f_title']);                       //主旨
    $fd_sleip2flw008 = str_replace("\"","",$f_var['f_type']);                        //類別
    $fd_sleip2flw009 = str_replace("\"","",str_replace("'","",$f_var['f_content'])); //內容
    $fd_sleip2flw010 = str_replace("\"","",$f_var['f_s_num']);                       //s_num
    $fd_sleip2flw011 = str_replace("\"","",$f_var['f_cnt']);                         //次數 //upd by mimi 2011.06.13 增加轉檔次數
    $fd_resda020 = "2"; // Add By Tails 2015.06.09 新的簽核狀態預設
    $fd_resda021 = "1"; // Add By Tails 2015.06.09 新的簽核結果預設
    //if($f_var['f_file1'] <> ''){
    //  $remote_file[]= $f_var['f_file1'];         // remote的檔案名稱
    //}
    //if($f_var['f_file2'] <> ''){
    //  $remote_file[]= $f_var['f_file2'];         // remote的檔案名稱
    //}
    //if($f_var['f_file3'] <> ''){
    //  $remote_file[]= $f_var['f_file3'];         // remote的檔案名稱
    //}
    //upd by mimi 2011.07.01 增加至10個附件
    $fd_cnt=1;
    for($i=0;$i<10;$i++){
      $fd_file = "f_file".($fd_cnt+$i);
      if($f_var[$fd_file] <> ''){
        $remote_file[]= $f_var[$fd_file];         // remote的檔案名稱
      }
    }

    //echo '<pre>'.$fd_qah_5.'</pre>';exit;
    //echo $query1.'<br>'.$fd_b_empno;exit;
    $eipsql= 'docs';
    $vdat1 = 'EF2KWeb';
    $mftp_server  = "flow.slc.com.tw";         // ftp server
    $mftp_user    = "it";                   // ftp user name
    $mftp_pass    = "sl85";                 // ftp user password
    sl_openef2k($vdat1);
    //***************************************************************************
    // (報修20585)upd by 佳玟 2013.07.08 不給予權限人員在resak004會以員編+_U顯示
    //***************************************************************************
    $u_query = "SELECT resak001,resak002,resak015,resal002,resak013
                FROM resak
                     LEFT JOIN resal
                               ON resak015 = resal001
                WHERE LTrim(RTrim(resak004)) = '{$fd_b_empno}'
               ";
    $u_res   = mssql_query($u_query);
    $u_count = mssql_num_rows($u_res);
    if( $u_count==0 ){
      sl_errmsg("<b><font color='#FF0000'>注意!!</font> 員工: {$vb_name}({$fd_b_empno}) 電子簽核基本資料異常(組織.上層主管)請聯絡人事維護資料，謝謝！。</b>"); //qq:para只丟str不丟font
      exit;
    }
    //******************************************************************

    $query2 = "SELECT resak001,resak002,resak015,resal002,resak013
               FROM resak
                 LEFT JOIN resal
                   ON resak015 = resal001
               WHERE resak001 = '{$fd_b_empno}'
              ";
    $result2 = mssql_query($query2);
    $row2 = mssql_fetch_array($result2);
    $fd_resak015 = $row2['resak015'];  //FLW-部門代號
    $fd_resal002 = $row2['resal002'];  //FLW-部門名稱
    $fd_resak013 = $row2['resak013'];  //FLW-直屬主管

    $query3 = "SELECT top 1 resdz001,resdz002
               FROM resdz
               where resdz001 = 'SL-EIP2FLW'
               order by resdz002 DESC
              ";
    $result3 = mssql_query($query3);
    $row3 = mssql_fetch_array($result3);
    $fd_resdz001 = 'SL-EIP2FLW';    //FLW-單號
    $fd_resdz002 = str_pad(($row3['resdz002']+1),10,0,STR_PAD_LEFT);  //FLW-單別
    $fd_ymd      = date('Y/m/d');
    $fd_date     = date('Y/m/d H:i:s');

    //resdz 表單單號紀錄檔 (RESDZ) upd by mimi 2011.11.18 讀到單號單號後馬上寫入,如果又有重覆的則停止寫入,以避免程式異常~
    $query_head6 ="insert into {$vdat1}..resdz (resdz001,resdz002) values ('{$fd_resdz001}','{$fd_resdz002}')";
    //echo $query_head6.'<hr>';
    if(!mssql_query($query_head6)) { // 寫入失敗
       sl_errmsg('<font color="#FF0000"><b>注意!!單別單號重覆，請重新輸入!!</b></font>'.$query_head6.'!!'); //qq:para只丟str不丟font
       exit;
    }


    $vins_fd1    ="sleip2flw001,sleip2flw002,
                   sleip2flw003,sleip2flw004,sleip2flw005,sleip2flw006,
                   sleip2flw007,sleip2flw008,sleip2flw009,sleip2flw010,sleip2flw011
                  ";
    $vins_value1 ="'{$fd_resdz001}','{$fd_resdz002}',
                   '{$fd_sleip2flw003}','{$fd_sleip2flw004}','{$fd_sleip2flw005}','{$fd_sleip2flw006}',
                   '{$fd_sleip2flw007}','{$fd_sleip2flw008}','{$fd_sleip2flw009}','{$fd_sleip2flw010}','{$fd_sleip2flw011}'
                  ";

    //eip-docs.sleip2flw
    sl_open($eipsql);
    $query_head7 ="insert into {$eipsql}.sleip2flw ({$vins_fd1},resda020,resda021,b_empno,b_dept_id,b_proc,b_date)
                   values ({$vins_value1},'{$fd_resda020}','{$fd_resda021}','{$vb_empno}','{$vb_dept_id}','{$vproc}','{$vb_date}')";
    if(!mysql_query($query_head7)) { // 寫入失敗
       sl_errmsg('<font color="#FF0000"><b>注意!!</b></font>'.$query_head7.'!!'); //qq:para只丟str不丟font
    }

    //flw-sleip2flw
    sl_openef2k($vdat1);
    $query_head1 ="insert into {$vdat1}..sleip2flw ({$vins_fd1},sleip2flw900,sleip2flw901,sleip2flw904)
                   values ({$vins_value1},'{$fd_b_empno}','{$fd_date}','{$fd_resak015}')";
    //echo $query_head1.'<hr>';
    if(!mssql_query($query_head1)) { // 寫入失敗
       sl_errmsg('<font color="#FF0000"><b>注意!!</b></font>'.$query_head1.'!!'); //qq:para只丟str不丟font
       //echo $f_var['query_data'];
       //exit;
    }

    //resda 表單流程異動主檔 (RESDA)
    $vins_fd2    =" resda001,resda002,resda015,resda016,resda017,resda018,resda019,resda020,resda021,resda022,resda023 ";
    $vins_value2 =" '{$fd_resdz001}','{$fd_resdz002}','{$fd_date}','{$fd_b_empno}','{$fd_b_empno}','{$fd_date}','','2','1','','' ";
    $vins_fd2   .=" ,resda030,resda031,resda032,resda033,resda034,resda900,resda901,resda904 ";
    $vins_value2.=" ,'','{$fd_sleip2flw007}','1','Y','','{$fd_b_empno}','{$fd_date}','{$fd_resak015}' ";
    $query4 = "SELECT resca.*
               FROM resca
               where resca001 = '{$fd_resdz001}'
              ";
    $result4 = mssql_query($query4);
    $row4 = mssql_fetch_array($result4);
    ksort($row4);
    while (list($key4,$value4) = each($row4)){
      if (ereg("^[r]",substr($key4,0,1))){
          switch ($key4) {
            case "resca004": //流程種類
              $vins_fd2   .=",resda003";
              $vins_value2.=",'{$value4}'";
              break;
            case "resca005": //自動編號?
            case "resca017": //填表人可否變更表單性質?
              break;
            case "resca006": //逾時警示開關
            case "resca007": //逾時警示-填表人
            case "resca008": //逾時警示-逾時人員之主??
            case "resca009": //逾時警示-指定管理人
            case "resca010": //逾時警示-指定管理人員工代號
            case "resca011": //逾時警示-警示間隔天數
            case "resca012": //逾時警示-警示次數
            case "resca013": //是否結案後通知所有人員?
            case "resca014": //是否逐級回報?
            case "resca015": //填表人可否強迫
            case "resca016": //填表人可否抽單?
              $fd_resda    ="resda".str_pad((substr($key4,5,3)-2),3,'0',STR_PAD_LEFT);
              $vins_fd2   .=",{$fd_resda}";
              $vins_value2.=",'{$value4}'";
              break;
            case "resca018": //原稿可否列印？
            case "resca019": //原稿可否轉寄？
            case "resca020": //原稿可否閱讀附件？
            case "resca021": //回函可否列印？
            case "resca022": //回函可否轉寄？
            case "resca023": //回函可否閱讀附件？
              $fd_resda    ="resda".str_pad((substr($key4,5,3)+6),3,'0',STR_PAD_LEFT);
              $vins_fd2   .=",{$fd_resda}";
              $vins_value2.=",'{$value4}'";
              break;
            default:
              break;
          }
      }
    }
    $query_head2 ="insert into {$vdat1}..resda ($vins_fd2) values ($vins_value2)";
    //echo $query_head2.'<hr>';
    if(!mssql_query($query_head2)) { // 寫入失敗
       sl_errmsg('<font color="#FF0000"><b>注意!!</b></font>'.$query_head2.'!!'); //qq:para只丟str不丟font
       //echo $f_var['query_data'];
       //exit;
    }

    //resdb 表單流程異動子檔 (RESDB),resdc 表單流程異動明細檔 (RESDC),resdd 表單流程異動明細檔 (RESDD)
    //$query51 = "SELECT rescd.rescd001,rescd.rescd002,rescd.rescd003,rescd.rescd004,EFormWizardCond.OperationDef,
    //                   rescd.rescd006,rescd.rescd007,rescc006,rescc007
    //           FROM rescd
    //             LEFT JOIN EFormWizardCond ON EFormWizardCond.CondID=rescd005
    //             LEFT JOIN rescc ON rescd001=rescc001 AND rescd002=rescc002 AND rescd003=rescc003
    //           WHERE rescd001='SL-EIP2FLW' AND rescd007='{$fd_sleip2flw008}'
    //          ";使用流程條件的方法
    $query51 = "SELECT rescf005,EFormWizardCond.OperationDef,rescf006,rescf007,resce005
                FROM rescf
                  LEFT JOIN  resce ON rescf001=resce001 AND rescf003=resce003
                  LEFT JOIN EFormWizardCond ON EFormWizardCond.CondID=rescf005
                WHERE rescf001='{$fd_resdz001}' AND CONVERT(VARCHAR(999), rescf007)='{$fd_sleip2flw008}'
              ";//使用子流程定義的方法
    $result51 = mssql_query($query51);
    $row51 = mssql_fetch_array($result51);
    $int_rescc006 = intval($row51['rescc006']);
    $int_rescc007 = intval($row51['rescc007']);
    $num_resdb    = 0;
    //echo $int_rescc006.'~~~~'.$int_rescc007.'<br>';
    //$query52 = "SELECT *
    //           FROM rescc
    //           WHERE rescc001='SL-EIP2FLW'
    //          ";
    $query52 = "SELECT *
                FROM resch
                WHERE resch001 = '{$row51['resce005']}'
              ";
    $result52 = mssql_query($query52);
    while($row52 = mssql_fetch_array($result52)){
      //echo $row52['rescc002'].'~~~~'.$row52['rescc003'].'<br>';

      $vins_fd3    =" resdb001,resdb002 ";
      $vins_value3 =" '{$fd_resdz001}','{$fd_resdz002}' ";
      $vins_fd3   .=" ,resdb900,resdb901,resdb904 ";
      $vins_value3.=" ,'{$fd_b_empno}','{$fd_date}','{$fd_resak015}' ";

      $num_resdb++;
      if('1'==$num_resdb){
        $vins_fd3   .=" ,resdb026 ";
        $vins_value3.=" ,'Y'";
        $resdc006=iif($row52['resch006']=='',$fd_resak013,$row52['resch006']);
        if($row52['resch004']=='3' && strlen($resdc006)<>'7'){
          $query_an = "SELECT resan003
                         FROM resan
                        WHERE resan.resan001 = '{$row52['resch006']}'
                          AND resan.resan004 = '{$row52['resch007']}'
                      ";
          $result_an = mssql_query($query_an);
          $row_an = mssql_fetch_array($result_an);
          $resdc006 = $row_an['resan003'];
        }
        $resdd020 = sl_get_resck($resdc006,$fd_resdz001,$fd_date); //add by 佳玟 2017.09.30 是否有設定代理人
        //resdc 表單流程異動明細檔 (RESDC)
        $vins_fd4    =" resdc001,resdc002,resdc005,resdc006,resdc007,resdc008,resdc900,resdc901,resdc904 ";
        $vins_value4 =" '{$fd_resdz001}','{$fd_resdz002}','0001','{$resdc006}','3','1','{$fd_b_empno}','{$fd_date}','{$fd_resak015}' ";

        //resdd 表單流程?妍囥?細??(RESDD)
        $vins_fd5    =" resdd001,resdd002,resdd005,resdd006,resdd007,resdd008,resdd009,resdd020 ";
        $vins_value5 =" '{$fd_resdz001}','{$fd_resdz002}','0001','01','{$resdc006}','','{$fd_date}','{$resdd020}' ";
        $vins_fd5   .=" ,resdd013,resdd014,resdd015,resdd017,resdd018,resdd019,resdd900,resdd901,resdd904 ";
        $vins_value5.=" ,'0','2','1','N','8','Y','{$fd_b_empno}','{$fd_date}','{$fd_resak015}' ";
      }
      else{
        $vins_fd3   .=" ,resdb026 ";
        $vins_value3.=" ,'N'";
      }
      //echo $row52['rescc002'].'---'.$row52['rescc003'].'<br>';
      ksort($row52);
      while (list($key52,$value52) = each($row52)){
        if (ereg("^[r]",substr($key52,0,1))){
          switch ($key52) {
            case "resch002": //關號
            case "resch003": //支號
              $fd_resdb    ="resdb".str_pad((substr($key52,5,3)+1),3,'0',STR_PAD_LEFT);
              $vins_fd3   .=",{$fd_resdb}";
              $vins_value3.=",'{$value52}'";

              if('1'==$num_resdb){
                $fd_resdc    ="resdc".str_pad((substr($key52,5,3)+1),3,'0',STR_PAD_LEFT);
                $vins_fd4   .=",{$fd_resdc}";
                $vins_value4.=",'{$value52}'";

                $fd_resdd    ="resdd".str_pad((substr($key52,5,3)+1),3,'0',STR_PAD_LEFT);
                $vins_fd5   .=",{$fd_resdd}";
                $vins_value5.=",'{$value52}'";
              }
              break;
            case "resch004": //流程角色
            case "resch005": //簽核種類
            case "resch006": //流程角色參數1
            case "resch007": //流程角色參數2
            case "resch008": //流程角色參數3
            case "resch009": //流程角色參數4
            case "resch010": //容許簽核時間
            case "resch011": //自動ByPass?
            case "resch012": //ByPass方式
            case "resch013": //是否強制簽核?
            case "resch014": //是否單一簽核
            case "resch015": //可否列印?
            case "resch016": //可否撤簽?
            case "resch017": //可否加簽?
            case "resch018": //可否轉會?
            case "resch019": //可否轉寄?
            case "resch020": //可否新增附加檔?
            case "resch021": //可否修改附加檔?
            case "resch022": //可否刪除附加檔?
            case "resch023": //可否閱讀附加檔?
            case "resch024": //簽核時密碼驗證?
              $fd_resdb    ="resdb".str_pad((substr($key52,5,3)+1),3,'0',STR_PAD_LEFT);
              $vins_fd3   .=",{$fd_resdb}";
              $vins_value3.=",'{$value52}'";
              break;
            default:
              break;
          }
        }
      }
      $query_head3 ="insert into {$vdat1}..resdb ($vins_fd3) values ($vins_value3)";
      //echo $query_head3.'<hr>';
      if(!mssql_query($query_head3)) { // 寫入失敗
         sl_errmsg('<font color="#FF0000"><b>注意!!</b></font>'.$query_head3.'!!'); //qq:para只丟str不丟font
         //echo $f_var['query_data'];
         //exit;
      }
    }
    //resdc 表單流程異動明細檔 (RESDC)
    $query_head4 ="insert into {$vdat1}..resdc ($vins_fd4) values ($vins_value4)";
    //echo $query_head4.'<hr>';
    if(!mssql_query($query_head4)) { // 寫入失敗
       sl_errmsg('<font color="#FF0000"><b>注意!!</b></font>'.$query_head4.'!!'); //qq:para只丟str不丟font
       //echo $f_var['query_data'];
       //exit;
    }

    $query_head5 ="insert into {$vdat1}..resdd ($vins_fd5) values ($vins_value5)";
    //echo $query_head5.'<hr>';
    if(!mssql_query($query_head5)) { // 寫入失敗
       sl_errmsg('<font color="#FF0000"><b>注意!!</b></font>'.$query_head5.'!!'); //qq:para只丟str不丟font
       //echo $f_var['query_data'];
       //exit;
    }

    //resde 表單流程附加檔 (RESDE) add by mimi 2010.07.07
    // **************************************************************************
    //  函數名稱: u_ftp_put()
    //  函數功能: 將檔案上傳至190
    //  使用方式: u_ftp_put($f_var)
    //  程式設計: Mimi
    //  設計日期: 2010.07.08
    // **************************************************************************
    $mftp_connect = ftp_connect($mftp_server); // connect ftp
    if($mftp_connect) {
      $mftp_login   = ftp_login($mftp_connect,$mftp_user,$mftp_pass); // login
      ftp_pasv($mftp_connect, FALSE);
      //ftp_chdir($mftp_connect, "/wms/{$f_var['f_stock_cd']}");
      $remote_dir = "/SL-EIP2FLW/{$fd_resdz002}/";
      //$local_dir  = "/home/docs/public_html/erp_qa/upfile/";
      //echo $remote_dir.'<br>';
      @ftp_mkdir($mftp_connect,$remote_dir);
      //$local_file
      //-----丟到.190的主機----------------------------------------------------------------
      $fd_resde003 = 0;  //序號
      for($i=0;$i<count($remote_file);$i++){
        if(ftp_put($mftp_connect,"{$remote_dir}{$remote_file[$i]}","{$fd_sleip2flw005}{$remote_file[$i]}", FTP_BINARY)) {
          //ftp_chmod($mftp_connect,0666,"{$remote_dir1}{$remote_file[$i]}");
          //u_errmsg('3','left','000000','FFFF99','FF9966',"{$remote_file[$i]} 資料轉檔成功\!!");
          $fd_resde003 ++;
          $fd_resde003 = str_pad($fd_resde003,4,'0',STR_PAD_LEFT);
          $fd_resde010 = filesize("{$fd_sleip2flw005}{$remote_file[$i]}");
          $vins_fd8    ="resde001,resde002,resde003,resde004,resde005,resde006,resde010,resde011,resde900,resde901,resde904";
          $vins_value8 ="'{$fd_resdz001}','{$fd_resdz002}','{$fd_resde003}',
                         '{$remote_file[$i]}','{$remote_file[$i]}','{$remote_file[$i]}','{$fd_resde010}','{$fd_date}',
                         '{$fd_b_empno}','{$fd_date}','{$fd_resak015}'";
          $query_head8 ="insert into {$vdat1}..resde ($vins_fd8) values ($vins_value8)";
          //echo $query_head8.'<hr>';
          if(!mssql_query($query_head8)) { // 寫入失敗
             sl_errmsg('<font color="#FF0000"><b>注意!!</b></font>'.$query_head8.'!!'); //qq:para只丟str不丟font
             //echo $f_var['query_data'];
             //exit;
          }
        }
        else{
          u_errmsg('3','left','000000','FFFF99','FF9966',"{$remote_file[$i]} 檔案上傳失敗!!");
        }
      }
      //-------------------------------------------------------------------------------------
      ftp_close($mftp_connect);                  // close ftp
      //-------------------------------------------------------------------------------------

    }
    else {
       u_errmsg('3','left','000000','FFFF99','FF9966','FWL主機連線失敗，請通知資訊部!!');
    }
    $f_var['f_resdz001']=$fd_resdz001;//upd by mimi 2011.06.02 回傳簽核表單別
    $f_var['f_resdz002']=$fd_resdz002;//upd by mimi 2011.06.02 回傳簽核表單號
    return $f_var;
  }
  // **************************************************************************
  //  函數名稱: sl_chk_rak013()
  //  函數功能: 確認是否有直屬主管 add by mimi 2011.11.28 報修-15581 確認是否有直屬主管
  //  使用方式:
  //  程式設計: Mimi
  //  設計日期: 2011.11.28
  // **************************************************************************
  function sl_chk_rak013(&$f_var) {
    Global $_SESSION;
    Global $f_var;
    $vdat1 = 'EF2KWeb';
    sl_openef2k($vdat1);
    $query2 = "SELECT resak001,resak002,resak015,resal002,resak013
               FROM resak
                 LEFT JOIN resal
                   ON resak015 = resal001
               WHERE resak001 = '{$_SESSION['login_empno']}'
              ";
    $result2 = mssql_query($query2);
    $row2 = mssql_fetch_array($result2);
    if(''==$row2['resak013']){
      echo "<script language='JavaScript'>";
      echo "alert('查無直屬主管，請聯絡總公司人事協助處理。');";
      echo "history.back();";
      echo "</script>";

    }
    return $f_var;
  }
  // **************************************************************************
  //  函數名稱: sl_prn()
  //  函數功能: 列印
  //  使用方式: sl_prn($f_var)
  //  程式設計: yifun
  //  設計日期: 2012.02.10
  // **************************************************************************
  function sl_prn($f_var){
    $f_var["tp"] -> newBlock( 'tb_print'      );
    $f_var["tp"] -> newBlock( 'tb_prn_select' );
    $f_var["tp"] -> assign  ("tv_action",u_showproc().".php?msel=71&f_page={$f_var['f_page']}&f_del={$f_var['f_del']}&f_order_fd={$f_var['f_order_fd']}&f_order_md={$f_var['f_order_md']}&f_sid={$f_var['f_sid']}");
    //設定查詢選單
    if( !isset($f_var['prn_mode']) ){
      $f_var['prn_mode'] = '1';
    }
    //head的欄位
    foreach($f_var['fd'] as $t_key =>$t_val){
      if( $f_var['fd'][$t_key]['que'] == 'Y' ){
        $f_var["tp"] -> newBlock( 'tb_select_prn1' );
        $f_var["tp"] -> assign( 'tv_ename' , "{$f_var['mtable']['head']}.{$t_key};{$f_var['fd'][$t_key]['cname']}");
        $f_var["tp"] -> assign( 'tv_cname' , "{$t_key}-{$f_var['fd'][$t_key]['cname']}");
      }
    }
    //body的欄位
    if( $f_var['prn_mode'] == '2' ){
      foreach($f_var['fd_re'] as $t_key =>$t_val){
        if($f_var['fd_re'][$t_key]['que'] == 'Y' ){
          $f_var["tp"] -> newBlock( 'tb_select_prn1' );
          $f_var["tp"] -> assign( 'tv_ename' , "{$f_var['mtable']['body']}.{$t_key};{$f_var['fd_re'][$t_key]['cname']}" );
          $f_var["tp"] -> assign( 'tv_cname' , "{$t_key}-{$f_var['fd_re'][$t_key]['cname']}" );
        }
      }
    }
  }
  // **************************************************************************
  //  函數名稱: sl_prn_list()
  //  函數功能: 列印查詢結果
  //  使用方式: sl_prn_list($f_var)
  //  程式設計: yifun
  //  設計日期: 2012.02.10
  // **************************************************************************
  function sl_prn_list($f_var){
    $f_var["tp"] -> newBlock( 'tb_print' );
    $selprn = $_POST['selprn'];
    $sel    = $_POST['selname2'];//選取的查詢欄位選項
    $chkcsv = $_POST['chkcsv'];  //是否下載csv檔選項
    $f_var["tp"] -> newBlock( 'tb_prn_query' );
    $table_width = 0 ;
    $selquery    = '';//查詢欄位設定變數
    $selwhere    = '';//查詢條件設定變數
    $seltitle    = '';//csv檔檔頭設定變數
    $selcsv      = '';//csv檔檔身設定變數
    $oth_where   = '';//例外處理的sql語法設定(初值一律設為空)
    $width       = array();
    //如果選要下載csv檔的話才設定檔名並開啟檔案
    if($chkcsv == 'Y'){
      $filename = '/home/sl/public_html/dlcsv/'.$_SESSION['login_empno'].'.csv';
      $fp = fopen( $filename , "w+" );
    }

    //設定表頭、查詢欄位、查詢條件
    for($i = 0 ; $i < count($sel) ; $i++ ){
      $sellen     = strlen(trim($sel[$i]));     // 資料長度
      $selpos     = strpos(trim($sel[$i]),";"); // ; 號位置
      $selvalue[] = trim(substr(trim($sel[$i]),0,$selpos));
      $selshow[]  = trim(substr(trim($sel[$i]),$selpos+1,$sellen-$selpos));
      if($i != 0){
        $selquery .= ',';
        $seltitle .= ',';
        $selwhere .= ' or ';
      }
      $selquery .= $selvalue[$i];
      $seltitle .= $selshow[$i];
      $selwhere .= "{$selvalue[$i]} like '%{$_POST['selprn']}%'";
    }

    //設定查詢結果表頭
    if( isset($f_var['pnt_title']) != ''){
      $f_var["tp"] -> assign( 'tv_title' , "{$f_var['pnt_title']}明細表" );
    }
    else{
      $f_var["tp"] -> assign( 'tv_title' , "{$f_var['msub_title']}明細表" );
    }
    //顯示查詢條件
    $f_var["tp"] -> assign( 'tv_selprn' , $selprn   );

    //顯示查詢欄位
    $f_var["tp"] -> assign( 'tv_seltab' , $seltitle );

    //設定例外條件
    if( isset($f_var['prn_where_other']) != ''){
      $oth_where = "and({$f_var['prn_where_other']}) " ;
      $f_var["tp"] -> assign( 'tv_exception' , '<font color=red>※</font>' );
    }
    if( !isset($f_var['prn_mode']) ){
      $f_var['prn_mode'] = '1';
    }
    switch( $f_var['prn_mode'] ){
      case '1':
      //只有head單一一個table時的sql語法
        $sql= "select {$selquery},{$f_var['mtable']['head']}.s_num
               from {$f_var['mtable']['head']}
               where ({$selwhere})
               {$oth_where}
               and {$f_var['mtable']['head']}.d_date like '0000-00-00 00:00:00'";
        break;
      case '2':
      //head和body兩個table都有時的sql語法
        $sql = "select {$selquery},{$f_var['mtable']['head']}.s_num
                from {$f_var['mtable']['head']}
                join {$f_var['mtable']['body']}
                on ( {$f_var['mtable']['head']}.s_num = {$f_var['mtable']['body']}.h_s_num )
                where ({$selwhere})
                {$oth_where}
                and {$f_var['mtable']['head']}.d_date like '0000-00-00 00:00:00'
                order by {$f_var['mtable']['head']}.s_num";
        break;
    }
    //echo '<pre>'.$sql.'</pre>';
    $result = mysql_query($sql);

    //echo $seltitle."<br>";
    //設定欄位寬度
    for($i = 0 ; $i < count($f_var['list']['th_width']) ; $i++){
      for($j = 0 ; $j < count($selvalue) ; $j++){
        $sel_lab = substr($selvalue[$j],strpos($selvalue[$j],".")+1);
        if( $f_var['list']['fd_name'][$i] == $sel_lab ){
          $width[$sel_lab] = $f_var['list']['th_width'][$i];
        }
      }
    }

    $f_var["tp"] -> newBlock( 'tb_tr_prn' );
    if($result){
      $row_num = mysql_num_rows($result);
      $col_num = mysql_num_fields($result);
      $f_var["tp"] -> assign( 'tv_color' , "bgcolor='#CDDDED'" );
      if($row_num != 0){
        $f_var["tp"] -> newBlock( 'tb_query' );
        $f_var["tp"] -> assign( 'tv_align'    , 'center'            );
        $f_var["tp"] -> assign( 'tv_td_width' , "1%"                );
        $f_var["tp"] -> assign( 'tv_query'    , '序'                );
        for($i = 0 ; $i < count($selshow) ; $i++){
          $f_var["tp"] -> newBlock( 'tb_query' );
          $f_var["tp"] -> assign( 'tv_align'    , 'center'                   );
          $f_var["tp"] -> assign( 'tv_td_width' , "{$width[$selvalue[$i]]}%" );
          $f_var["tp"] -> assign( 'tv_query'    , $selshow[$i]               );//顯示查詢結果表格表頭內容
        }
        //如果選要下載csv檔的話才寫入檔頭資料
        if($chkcsv == 'Y'){
          fwrite( $fp , $seltitle."\n" );
        }
        $j = 1;
        $k = 0;
        $redo_num = '';
        while( $a = mysql_fetch_array($result) ){
          $f_var["tp"] -> newBlock( 'tb_tr_prn' );
          $selcsv = '';//執行過一次之後就清空用來記錄下一筆

          if($redo_num != $a['s_num']){
            $k++;
          }
          if($k % 2 == 0 ){
            $f_var["tp"] -> assign( 'tv_color' , "bgcolor='#EBFFEB'" );
          }
          $f_var["tp"] -> newBlock( 'tb_query' );
          $f_var["tp"] -> assign( 'tv_align'    , 'center' );
          $f_var["tp"] -> assign( 'tv_td_width' , "1%"     );
          $f_var["tp"] -> assign( 'tv_query'    , $j       );
          for($i = 0 ; $i < count($selvalue) ; $i++ ){
            if($i != 0){
              //$seldata .= ',';
              $selcsv  .= ',';
            }
            //去掉欄位名稱，取出表格名稱
            $sel_tbl = substr($selvalue[$i], 0, strpos($selvalue[$i],"."));
            //去掉表格名稱，取出欄位名稱
            $sel_lab = substr($selvalue[$i],strpos($selvalue[$i],".")+1);
            //echo $selvalue[$i]."*<br>";
            //echo $sel_tbl."**<br>";
            //echo $sel_lab."***<br>";
            $field = mysql_field_type($result , $i);
            //echo $field."<br>";
            $f_var["tp"] -> newBlock( 'tb_query' );
            if($field == 'varchar' or $field == 'char' or $field == 'text' or $field == 'longtext' or $field == 'string' or $field == 'blob' ){
              $f_var["tp"] -> assign( 'tv_align' , 'left' );
            }
            if($field == 'date' or $field == 'datetime' or $field == 'time' ){
              $f_var["tp"] -> assign( 'tv_align' , 'center' );
            }
            if($field == 'int' or $filed == 'double' or $field == 'float' ){
              $f_var["tp"] -> assign( 'tv_align' , 'right' );
            }
            if( $a['s_num'] != $redo_num and $f_var['mtable']['head'] == $sel_tbl ){
              $f_var["tp"] -> assign( 'tv_td_width' , "{$width[$selvalue[$i]]}%" );
              $f_var["tp"] -> assign( 'tv_query'    , $a[$sel_lab]               );//顯示查詢結果表格表身內容
            }
            if( $f_var['mtable']['body'] == $sel_tbl ){
              $f_var["tp"] -> assign( 'tv_td_width' , "{$width[$selvalue[$i]]}%" );
              $f_var["tp"] -> assign( 'tv_query'    , $a[$sel_lab]               );//顯示查詢結果表格表身內容
            }
            //$seldata .= $a[$selvalue[$i]];
            $selcsv  .= $a[$sel_lab];
          }
          $redo_num = $a['s_num'];
          //如果選要下載csv檔的話才寫入資料
          if($chkcsv == 'Y'){
            fwrite( $fp , $selcsv."\n" );
          }
          //$seldata .= "<br>";
          $j++;
        }
      }
    }
    else{
      $row_num = 0;
      $col_num = 0;
    }

    $f_var["tp"] -> assignGlobal( 'tv_cnt' , $row_num     );//顯示本次查詢共幾筆資料

    //如果選要下載csv檔 且 有查到資料 才顯示下載csv檔的連結
    if($chkcsv == 'Y' and $result){
      $downloadcsv = "location.replace('/~sl/dlcsv/{$_SESSION['login_empno']}.csv');";
      $f_var["tp"] -> newBlock( 'tb_csv' );
      $f_var["tp"] -> assignGlobal( 'tv_col' , $col_num  );
      $f_var["tp"] -> assignGlobal( 'tv_csv' , $downloadcsv );
      fclose($fp);
    }
    //echo $seldata."<br>";
  }
  // **************************************************************************
  //  函數名稱: sl_custcomp_get_code()
  //  函數功能: 選擇客戶總號後,列出客戶編號
  //  使用方式: sl_custcomp_get_code('1004'),就會列出 '068019','068018','068017'........
  //            $v_custcomp_id : 客戶總號
  //  程式設計: Mimi
  //  設計日期: 2012.02.15
  // **************************************************************************
  function sl_custcomp_get_code($v_custcomp_id) {
    Global $f_var;
    sl_open('gas');
    $query1     = "SELECT group_concat( code ORDER BY code SEPARATOR ',' )  as code
                   FROM gas.custcomp_id
                   where d_date='0000-00-00 00:00:00'
                         and id='{$v_custcomp_id}'
                   ORDER BY code ASC
                  ";
    //echo "<pre>{$query1}</pre>";exit;
    $result1 = mysql_query($query1);
    $row1 = mysql_fetch_array($result1);
    $rep_code = str_replace(",","','",$row1['code']);
    $fd_code  = "'{$rep_code}'";
    return ($fd_code);
  }

  // **************************************************************************
  //  函數名稱: sl_chkpwd()
  //  函數功能: 判斷是否強迫修改密碼
  //  使用方式: sl_chkpwd($vproc)  $vproc = u_showproc();
  //  程式設計: 佳玟
  //  設計日期: 2012.05.02
  // **************************************************************************
  function sl_chkpwd($vproc) {
    if('Y'==$_SESSION['chg_pass']){
        if(strstr("/eip_forget/sl_person/sl_ps/sl_pm/sl_mail/sl_chgpass/index/func.js",$vproc)){  //個人設定頁面可執行
                return;
        }else{
                //if('7137109'<>$_SESSION["login_empno"] and '5074002'<>$_SESSION["login_empno"] and '6918069'<>$_SESSION["login_empno"]){
                        echo '<br>';
                        echo '<br>';
                        echo '<br>';
                        sl_errmsg("抱歉！您的密碼已超過三個月尚未更換，為確保資料安全性，請至【<a href='/~sl/sl_person.php?f_tab_name=eip'>個人基本資料設定</a>】重新設置密碼。");
                        echo '<br>';
                        echo '<br>';
                        echo '<br>';
            exit;
                //}
        }
    }
    return;
  }
  // **************************************************************************
  //  函數名稱: sl_area_list()
  //  函數功能: 列出區內站別
  //  使用方式: sl_area_list($group_id,$type='b_gid')  $vproc = b_gid or p_gid;
  //  程式設計: 東巖
  //  設計日期: 2012.09.25
  // **************************************************************************
  function sl_area_list($group_id,$type='b_gid'){
    sl_open('sl');
    $data_sql="select dept.dept_id,dept.b_gid,dept.sname,gas_eip_960125.company.p_gid
               from dept
               left join gas_eip_960125.company on gas_eip_960125.company.b_gid = dept.b_gid
               where dept.stop <> 'Y' and dept.b_gid<>''";
    $data_rs = mysql_query($data_sql);
    while($data_row=mysql_fetch_array($data_rs)){
      //echo $data_row['dept_id'].'<br>';
      $arr_data[$data_row['dept_id']]['b_gid'] = $data_row['b_gid'];
      $arr_data[$data_row['dept_id']]['sname'] = $data_row['sname'];
      $arr_data[$data_row['dept_id']]['p_gid'] = $data_row['p_gid'];
    }
    $sql="select * from dept_group where group_id ='{$group_id}' ";
    $rs=mysql_query($sql);
    $row=mysql_fetch_array($rs);
    $arr_list = explode(',',$row['dept_id']);
    foreach( $arr_list as $no => $id ){
      $ans[$arr_data[$id][$type]] = $arr_data[$id]['sname'];
    }
    if(''!=$ans['613']) $ans['614']='梧棲站';
    if(''!=$ans['605613']) $ans['605614']='梧棲站';
    return $ans;
  }
  // **************************************************************************
  //  函數名稱: sl_getPageTotal($path)
  //  函數功能: 取得pdf檔案頁數
  //  使用方式: sl_getPageTotal('/home/gas/public_html/0970312/10038.pdf');
  //  程式設計: 東巖
  //  設計日期: 2013.06.13 擷取自網路
  // **************************************************************************
  function sl_getPageTotal($path){
    // 打開文件
    if (!$fp = @fopen($path,'r')) {
        $error = '打開文件{$path}失敗';
        return false;
    }
    else {
        $max=0;
        while(!feof($fp)) {
            $line = fgets($fp,255);
            if (preg_match('/\/Count [0-9]+/', $line, $matches)){
                preg_match('/[0-9]+/',$matches[0], $matches2);
                if ($max<$matches2[0]) $max=$matches2[0];
            }
        }
        fclose($fp);
        // 返回頁數
        return $max;
    }
  }

// **************************************************************************
//  函數名稱: sl_timediff()
//  函數功能: 兩日期時間相減，得到天、時、分、秒
//  使用方式: sl_timediff($atime,$btime)
//            傳入格式 -> yyyy-mm-dd hh:ii:ss
//            範例 : $atime = 2012-07-09 01:40:00
//                   $btime = 2012-07-10 01:40:00
//                   ["day"] = 1
//            傳回陣列，day -> 天  hour -> 小時  min -> 分  sec -> 秒
//  程式設計: 佳玟
//  設計日期: 2012.07.09
// **************************************************************************
function sl_timediff($atime,$btime){ //2012-07-09 01:40:00  -> 傳入格式
  //echo "<font color=red>{$atime}---{$btime}</font><br>";
  if($atime > $btime){
    $start_time = strtotime($btime);
    $end_time   = strtotime($atime);
  }else{
    $start_time = strtotime($atime);
    $end_time   = strtotime($btime);
  }
  //echo "<font color=red>{$start_time}---{$end_time}</font><br>";
  $fd_timediff = $end_time - $start_time;
  $days  = str_pad(floor($fd_timediff/3600/24),2,0,STR_PAD_LEFT ); //天
  $works  = str_pad(floor($fd_timediff/3600/8),2,0,STR_PAD_LEFT ); //工作天
  $hours = str_pad(floor($fd_timediff%(24*3600)/3600),2,0,STR_PAD_LEFT );  //時
  $mins  = str_pad(floor($fd_timediff%3600/60),2,0,STR_PAD_LEFT);     //分
  $secs  = str_pad(floor($fd_timediff%3600%60), 2, 0, STR_PAD_LEFT);  //秒
  //echo "<font color=red>{$days}---{$hours}---{$mins}---{$secs}</font><br>";
  $ar_timediff = array("day" => $days,"work" => $works,"hour" => $hours,"min" => $mins,"sec" => $secs);
  return $ar_timediff;
}

  // **************************************************************************
  //  函數名稱: sl_olddept()
  //  函數功能: 查詢人員在某一特定時間的基本資料
  //  使用方式: sl_olddept($vemp, $vdate=date('Ymd'))
  //            $vemp = 員編
  //            $vdate = 日期
  //            回傳 陣列
  //            $ar_olddept['E09_3']   /*部門代號*/
  //            $ar_olddept['E09_15']  /*職務代碼*/
  //            $ar_olddept['E09_16']  /*工別*/
  //            $ar_olddept['E09_17']  /*職*/
  //            $ar_olddept['E09_18']  /*級*/
  //            $ar_olddept['E09_19']  /*時薪/月薪*/
  //            $ar_olddept['E09_36']  /*group_id*/
  //            $ar_olddept['E09_371'] /*職務津貼1*/
  //            $ar_olddept['E09_372'] /*職務津貼2*/
  //            $ar_olddept['E09_373'] /*職務津貼3*/
  //            $ar_olddept['E09_374'] /*職務津貼4*/
  //            $ar_olddept['E09_375'] /*職務津貼5*/
  //            $ar_olddept['E09_376'] /*職務津貼6*/
  //            $ar_olddept['E09_58']  /*時薪薪水*/
  //            $ar_olddept['b_gid']
  //            $ar_olddept['erp_dept_id']  /*erp部門代號*/
  //            $ar_olddept['sname']        /*部門名稱*/
  //            $ar_olddept['E26_6']        /*本俸*/
  //            $ar_olddept['E26_7']        /*本俸*/
  //
  //  程式設計: 佳玟
  //  設計日期: 2013.06.27
  // **************************************************************************
  function sl_olddept($vid, $vdate){
    //ECHO "vid:  ".$vid." -- ".$vdate."<br>";
    sl_open('sle');
    if ( $vdate=='' ) {
      $vdate = date('Ymd');
    }
    //民國年
    if( strlen($vdate)>7 ) {
      $vdate_roc = $vdate-19110000;
    }else{
      $vdate_roc = $vdate;
    }
    
    if( strlen($vid)==7 ) { //員編  一個身份證可能多個員編
      $vempno = $vid;
    }
    
    if( strlen($vdate_roc)<7 ){
      $vdate_roc = "0".$vdate_roc;
    }

    $sqlx = "select sle.sle09.E09_24,
                    sle.sle09.E09_26,
                    sle.sle09.E09_1
                 from   sle.sle09
                 where  (sle.sle09.E09_45 = '{$vid}'
                        OR sle.sle09.E09_1 = '{$vempno}'  )
                ";
    $resx = mysql_query($sqlx);
    $numx = mysql_num_rows($resx);  //筆數
    $fv_e09_26 = '';
    if( $numx>0 ){
      //$ar_olddept['yn'] = "Y";
      while( $rowx = mysql_fetch_array($resx) ){
        $fv_e09_24 = $rowx['E09_24'];
        $fv_e09_26 = '';
        if( ''<>$rowx['E09_26'] ){
          $fv_e09_26 = $rowx['E09_26']+19110000;  //離職日
        }
        $vemp = $rowx['E09_1'];
        //echo $rowx['E09_2']."<br>";
      }
    }


    if( $fv_e09_24 <= $vdate_roc ){
                $sql2 = "select sle.sle09.E09_1  as E09_1,  /*員編*/
                                sle.sle09.E09_2  as E09_2,  /*姓名*/
                                sle.sle09.E09_14 as E09_14, /*到職日*/
                                /*↓ 調任後 ↓*/
                          sle.sle09.E09_3  as E09_3,  /*部門代號*/
                          sle.sle09.E09_15 as E09_15,  /*職務代碼*/
                          sle.sle09.E09_16 as E09_16,  /*工別*/
                          sle.sle09.E09_17 as E09_17,  /*職*/
                          sle.sle09.E09_18 as E09_18,  /*級*/
                          sle.sle09.E09_19 as E09_19,  /*時薪/月薪*/
                          sle.sle09.E09_36 as E09_36,  /*group_id*/
                          sle.sle09.E09_371 as E09_371,  /*職務津貼1*/
                          sle.sle09.E09_372 as E09_372,  /*職務津貼2*/
                          sle.sle09.E09_373 as E09_373,  /*職務津貼3*/
                          sle.sle09.E09_374 as E09_374,  /*職務津貼4*/
                          sle.sle09.E09_375 as E09_375,  /*職務津貼5*/
                          sle.sle09.E09_376 as E09_376,  /*職務津貼6*/
                          sle.sle09.E09_58 as E09_58,  /*時薪薪水*/
                          sle.sle09.E09_26 as E09_26,  /*離職日*/
                          sl.dept.b_gid as b_gid,
                          sl.dept.erp_dept_id as erp_dept_id,
                          sl.dept.sname as sname,
                      /*sle.sle26.E26_6,
                      sle.sle26.E26_7,*/
                      sle.sle23.E23_3,
                      sle.sle23b.E23B_3,
                      CASE WHEN (hr.is_mf.im02='W' && hr.is_mf.im23<>'') THEN 'WN'
                             WHEN (hr.is_mf.im02='W' && hr.is_mf.im23='')THEN 'MY'
                             WHEN (sle.sle09.E09_31='' || sle.sle09.E09_32='' || sle.sle09.E09_33='')THEN 'MY'
                        ELSE 'AN'
                      END AS take
                   from   sle.sle09
                          left join sl.dept on sle.sle09.E09_3 = sl.dept.dept_id
                          /*left join sle.sle26 on substring(sle.sle09.E09_3,1,1) = sle.sle26.E26_1
                                             and sle.sle09.E09_6 = sle.sle26.E26_2
                                             and sle.sle09.E09_16 = sle.sle26.E26_3
                                             and sle.sle09.E09_17 = sle.sle26.E26_4
                                             and sle.sle09.E09_18 = sle.sle26.E26_5*/
                      left join sle.sle23b on sle.sle23b.E23B_A = sle.sle09.E09_16
                      left join sle.sle23  on sle.sle23.E23_A   = '1'
                                              and sle.sle23.E23_1 = sle.sle09.E09_17
                                              and sle.sle23.E23_2 = sle.sle09.E09_18
                      left join hr.is_mf on sle.sle09.E09_45 = hr.is_mf.im05
                   where  (sle.sle09.E09_45 = '{$vid}'
                           OR sle.sle09.E09_1 = '{$vempno}' )
                          and (sle.sle09.E09_26 = '' or sle.sle09.E09_26>'{$vdate_roc}') /*判斷離職日要為空值，基本資料內容才會準*/
                   order by sle.sle09.E09_14 desc
                   limit 1
                  ";
          $res2 = mysql_query($sql2);
          $num2 = mysql_num_rows($res2);  //筆數
          if( $num2>0 ){
            while( $row2 = mysql_fetch_array($res2) ){

              //echo $row2['E09_14']." -- ".$row2['E09_26']." -- ".$vdate;
            if( $row2['E09_14']<=$vdate_roc AND ($row2['E09_26']>=$vdate_roc OR $row2['E09_26']=='') ){
            $ar_olddept['E09_2'] = $row2['E09_2'];
            $ar_olddept['E09_3'] = $row2['E09_3'];
            $ar_olddept['E09_15'] = $row2['E09_15'];
            $ar_olddept['E09_16'] = $row2['E09_16'];
            $ar_olddept['E09_17'] = $row2['E09_17'];
            $ar_olddept['E09_18'] = $row2['E09_18'];
            $ar_olddept['E09_19'] = $row2['E09_19'];
            $ar_olddept['E09_36'] = trim(substr($row2['E09_36'],0,4));
            $ar_olddept['E09_371'] = $row2['E09_371'];
            $ar_olddept['E09_372'] = $row2['E09_372'];
            $ar_olddept['E09_373'] = $row2['E09_373'];
            $ar_olddept['E09_374'] = $row2['E09_374'];
            $ar_olddept['E09_375'] = $row2['E09_375'];
            $ar_olddept['E09_376'] = $row2['E09_376'];
            $ar_olddept['E09_58'] = $row2['E09_58'];
            $ar_olddept['b_gid'] = $row2['b_gid'];
            $ar_olddept['erp_dept_id'] = $row2['erp_dept_id'];
            $ar_olddept['sname'] = $row2['sname'];
            //$ar_olddept['E26_6'] = $row2['E26_6'];
            //$ar_olddept['E26_7'] = $row2['E26_7'];
            $ar_olddept['E23_1'] = $row2['E23_3'];
            $ar_olddept['E23_2'] = $row2['E23B_3'];
            //$ar_olddept['take'] = $row2['take'];
          }
        }
      }
    }else{
        $sql  = "select sle.sle09.E09_2  as E09_2,  /*姓名*/
                        sle.sle07.E07_1  as E07_1,  /*員編*/
                        sle.sle07.E07_14 as E07_14, /*生效日*/
                        sle.sle07.E07_2 as E07_2,
                        /*↓ 調任後 ↓*/
                      sle.sle07.E07_3  as E07_3,  /*部門代號*/
                      sle.sle07.E07_15 as E07_15,  /*職務代碼*/
                      sle.sle07.E07_16 as E07_16,  /*工別*/
                      sle.sle07.E07_17 as E07_17,  /*職*/
                      sle.sle07.E07_18 as E07_18,  /*級*/
                      sle.sle07.E07_21 as E07_21,  /*時薪/月薪*/
                      /*(case
                        when sle.sle07.E07_36<>'' then sle.sle07.E07_36
                        else sle.sle09.E09_36
                       end) as E07_36, */
                      sle.sle07.E07_36 as E07_36,  /*group_id  */
                      sle.sle07.E07_371 as E07_371,  /*職務津貼1*/
                      sle.sle07.E07_372 as E07_372,  /*職務津貼2*/
                      sle.sle07.E07_373 as E07_373,  /*職務津貼3*/
                      sle.sle07.E07_374 as E07_374,  /*職務津貼4*/
                      sle.sle07.E07_375 as E07_375,  /*職務津貼5*/
                      sle.sle07.E07_376 as E07_376,  /*職務津貼6*/
                      sle.sle07.E07_58 as E07_58,  /*時薪薪水*/
                      sl.dept.b_gid as b_gid,
                      sl.dept.erp_dept_id as erp_dept_id,
                      sl.dept.sname as sname,
                      /*sle.sle26.E26_6,
                      sle.sle26.E26_7,*/
                      sle.sle23.E23_3,
                      sle.sle23b.E23B_3,
                      CASE WHEN (hr.is_mf.im02='W' && hr.is_mf.im23<>'') THEN 'WN'
                           WHEN (hr.is_mf.im02='W' && hr.is_mf.im23='')THEN 'MY'
                        ELSE 'AN'
                      END AS take
               from   sle.sle07
                      left join sl.dept on sle.sle07.E07_3 = sl.dept.dept_id
                      left join hr.is_mf on  sle.sle07.E07_1 = hr.is_mf.im07
                      left join sle.sle09 on sle.sle09.E09_1 = sle.sle07.E07_1
                        /*left join sle.sle26 on substring(sle.sle07.E07_3,1,1) = sle.sle26.E26_1
                                             and sle.sle09.E09_6 = sle.sle26.E26_2
                                             and sle.sle07.E07_16 = sle.sle26.E26_3
                                             and sle.sle07.E07_17 = sle.sle26.E26_4
                                             and sle.sle07.E07_18 = sle.sle26.E26_5   */
                      left join sle.sle23b on sle.sle23b.E23B_A = sle.sle09.E09_16
                      left join sle.sle23  on sle.sle23.E23_A   = '1'
                                              and sle.sle23.E23_1 = sle.sle09.E09_17
                                              and sle.sle23.E23_2 = sle.sle09.E09_18
               where  sle.sle07.E07_1 = '{$vemp}'
                      and sle.sle07.E07_14 <= '{$vdate_roc}'
               order by sle.sle07.E07_14 desc
               limit 1
              ";
      $res = mysql_query($sql);
      $num = mysql_num_rows($res);  //筆數
      if( $num>0 ){
        while( $row = mysql_fetch_array($res) ){
          if('1530120'==$vemp && $row['E07_2']=='10630855'){//add by 朝鈞 2019.08.28 1530120許玉鈴 8/1調任前部門應該是S5B5大溪站
            $row['E07_3'] = 'S5B5';
            $row['E07_15'] = '0005';
            $row['b_gid'] = '513';
            $row['erp_dept_id'] = '5212';
            $row['sname'] = '大溪站';
          }
          $ar_olddept['E09_2'] = $row['E09_2'];
          $ar_olddept['E09_3'] = $row['E07_3'];
          $ar_olddept['E09_15'] = $row['E07_15'];
          $ar_olddept['E09_16'] = $row['E07_16'];
          $ar_olddept['E09_17'] = $row['E07_17'];
          $ar_olddept['E09_18'] = $row['E07_18'];
          $ar_olddept['E09_19'] = $row['E07_21'];
          $ar_olddept['E09_36'] = trim(substr($row['E07_36'],0,4));
          $ar_olddept['E09_371'] = $row['E07_371'];
          $ar_olddept['E09_372'] = $row['E07_372'];
          $ar_olddept['E09_373'] = $row['E07_373'];
          $ar_olddept['E09_374'] = $row['E07_374'];
          $ar_olddept['E09_375'] = $row['E07_375'];
          $ar_olddept['E09_376'] = $row['E07_376'];
          $ar_olddept['E09_58'] = $row['E07_58'];
          $ar_olddept['b_gid'] = $row['b_gid'];
          $ar_olddept['erp_dept_id'] = $row['erp_dept_id'];
          $ar_olddept['sname'] = $row['sname'];
          //$ar_olddept['E26_6'] = $row['E26_6'];
          //$ar_olddept['E26_7'] = $row['E26_7'];
          $ar_olddept['E23_1'] = $row['E23_3'];
          $ar_olddept['E23_2'] = $row['E23B_3'];
          //$ar_olddept['take'] = $row['take'];
        }
      }
    }
    sl_open('sl');
    $sql_3 = " select *
               from   sl.dept
               where  stop <> 'Y'
                      and d_date = '0000-00-00 00:00:00'
                      and dept_id = '{$ar_olddept['E09_3']}'
             ";
    $res_3 = mysql_query($sql_3);
    $num_3 = mysql_num_rows($res_3);  //筆數
    if( $num_3>0 ){
      //echo "<pre>".$sql."</pre>";
      while( $row_3 = mysql_fetch_array($res_3) ){
        $ar_olddept['sap_ba']    = $row_3['sap_ba'];    //利潤中心
        $ar_olddept['sap_ekgrp'] = $row_3['sap_ekgrp']; //採購群組
        $ar_olddept['sap_vk']    = $row_3['sap_vk'];    //銷售群組代碼
        $ar_olddept['sap_bp']    = $row_3['sap_bp'];    //bp
        $ar_olddept['sap_bp_s']  = $row_3['sap_bp_s'];  //成本中心 s銷售
        $ar_olddept['sap_bp_a']  = $row_3['sap_bp_a'];  //成本中心 a管理
        $ar_olddept['sap_bp_c']  = $row_3['sap_bp_c'];  //成本中心 c營業
      }
    }
    //ECHO $vid."-".$ar_olddept['E23_2']."<BR>";
    return $ar_olddept;
  }

// **************************************************************************
//  函數名稱: u_call_rfc()
//  函數功能: 轉換類別名稱
//  使用方式: u_call_rfc($f_intable,$sap_import,$sap_itable,$sap_export,$sap_otable)
//            $f_intable  => rfc名稱
//            $sap_import => import的變數 ex:$a = array('P_WERKS'=> '2201',..,...)
//            $sap_itable => import的陣列 ex:$b = array(array('TRN_LOG'=> 要傳入的陣列 ,'TRN_LOG_2'=> 要傳入的陣列))
//            $sap_export => export的變數 ex:$c = array('SCNT'=> 'SCNT',..,...)
//            $sap_otable => export的陣列 ex:$d = array('TRN_LOG'=> 'TRN_LOG',..,...)
//  回傳結果: $f_return['export']=>rfc回傳的變數
//            $f_return['otable']=>rfc回傳的陣列
//  程式設計: 逸凡
//  設計日期: 2013.04.21  健昌 課長告知  EIP RFC OK 搬移過來
// **************************************************************************
function u_call_rfc($f_intable,$sap_import,$sap_itable,$sap_export,$sap_otable,$f_saplogin="PRD"){ //$f_saplogin="DEV" 當$f_saplogin 變數沒有給值時，預設給"DEV"
  /*↓↓↓call rfc↓↓↓*/
  //echo $f_saplogin;
  sl_open("sl");
  $f_proc   = u_showproc();
  $fs_import = serialize($sap_import);
  $fs_itable = serialize($sap_itable);
  $fs_export = serialize($sap_export);
  $fs_otable = serialize($sap_otable);
  $f_pid     = getmypid();
  $f_empno  = $_SESSION['login_empno'];
  $f_date   = date("Y-m-d H:i:s");
  if('' == $f_empno){
    $f_empno = 'IT';
  }
  $f_var['sap_login'] = array(
                            "DEV" =>  array ("ASHOST"   => "DEV [SLC]",
                                             "SYSNR"    => "00",
                                             "CLIENT"   => "600",
                                             "USER"     => "SLCPHP",
                                             "PASSWD"   => "@ver2slc!",
                                             "MSHOST"   => "172.16.4.28",
                                             "R3NAME"   => "DEV",
                                             "GROUP"    => "SLC",
                                             "LANG"     => "ZF",
                                             "CODEPAGE" => "8300"),
                            "SN1" =>  array("ASHOST"  =>  "SN1 [SLC]",
                                            "SYSNR"   =>  "10",
                                            "CLIENT"  =>  "368",
                                            "USER"    =>  "SLCPHP",
                                            "PASSWD"  =>  "@ver2slc!",
                                            "MSHOST"  =>  "172.16.4.137",
                                            "R3NAME"  =>  "E68",
                                            "GROUP"   =>  "slc",
                                            "LANG"    => "ZF",
                                            "CODEPAGE"=> "8300"),
                            "PRD" =>  array("ASHOST"  => "E68 [SLC]",
                                            "SYSNR"   => "10",
                                            "CLIENT"  => "368",
                                            "USER"    => "slcphp",
                                            "PASSWD"  => "@ver2slc!",
                                            "MSHOST"  => "172.16.4.30",
                                            "R3NAME"  => "E68",
                                            "GROUP"   => "slc",
                                            "LANG"    => "ZF"  ,
                                            "CODEPAGE"=> "8300"), //4110
                            "PRD1" => array("ASHOST"  => "E68 [SLC]",
                                            "SYSNR"   => "10",
                                            "CLIENT"  => "668",
                                            "USER"    => "SLCPHP",
                                            "PASSWD"  => "@ver2slc!",
                                            "MSHOST"  => "172.16.4.30",
                                            "R3NAME"  => "E68",
                                            "GROUP"   => "slc",
                                            "LANG"    => "ZF"  ,
                                            "CODEPAGE"=> "8300"),
                            "PRD2" => array("ASHOST"  => "E68 [SLC]",
                                            "SYSNR"   => "10",
                                            "CLIENT"  => "368",
                                            "USER"    => "slcphp",
                                            "PASSWD"  => "@ver2slc!",
                                            "MSHOST"  => "172.16.4.30",
                                            "R3NAME"  => "E68",
                                            "GROUP"   => "slc2",
                                            "LANG"    => "ZF"  ,
                                            "CODEPAGE"=> "8300"),
                            "SB1" => array("ASHOST"  => "SB1 [SB1]",
                                           "SYSNR"   => "10",
                                           "CLIENT"  => "368",
                                           "USER"    => "slcphp",
                                           "PASSWD"  => "@ver2slc!",
                                           "MSHOST"  => "172.16.4.167",
                                           "R3NAME"  => "SB1",
                                           "GROUP"   => "slc",
                                           "LANG"    => "ZF"  ,
                                           "CODEPAGE"=> "4110"),
                            "SB2" => array("ASHOST"  => "SB2 [SB2]",
                                           "SYSNR"   => "10",
                                           "CLIENT"  => "368",
                                           "USER"    => "slcphp",
                                           "PASSWD"  => "@ver2slc!",
                                           "MSHOST"  => "172.16.4.167",
                                           "R3NAME"  => "SB2",
                                           "GROUP"   => "slc",
                                           "LANG"    => "ZF"  ,
                                           "CODEPAGE"=> "4110"),
                            "SB3" => array("ASHOST"  => "SB3 [SB3]",
                                           "SYSNR"   => "00",
                                           "CLIENT"  => "368",
                                           "USER"    => "slcphp",
                                           "PASSWD"  => "@ver2slc!",
                                           "MSHOST"  => "172.16.4.19",
                                           "R3NAME"  => "SB3",
                                           "GROUP"   => "slc",
                                           "LANG"    => "ZF"  ,
                                           "CODEPAGE"=> "4110")
                          );
    $rfc = saprfc_open($f_var['sap_login'][$f_saplogin]);
  if(!$rfc){
    echo "RFC connection failed with error:".saprfc_error();
    exit;
  }
  //$f_intable = 'YNM0RECV01xxx';
  //echo $rfc;
  //echo $f_intable.'<br>';
  $fce = saprfc_function_discover($rfc,$f_intable);
  if(!$fce){
    echo "Discovering interface of function module RFC_READ_REPORT failed";
    exit;
  }
  //傳入rfc的變數
  if( $sap_import != '' && is_array($sap_import) ){
    foreach($sap_import as $i_key => $i_val){
      //echo $i_key .','.$i_val."<br>";
      saprfc_import($fce , $i_key,$i_val);//$fce name value
    }
  }
  //傳入rfc的陣列


   //echo "<pre>";
   //var_dump($sap_itable);
   //echo "</pre>";//exit;
  if( $sap_itable !='' && is_array($sap_itable) ){
    foreach( $sap_itable as $i_key => $i_val ){
      saprfc_table_init($fce , $i_key );
      //echo $i_key.'---'.$i_val.'</br>';
      foreach($i_val as $v_key => $v_val  ){
         //echo $v_key.'---'.$v_val.'</br>';
         //echo "<pre>";
         //print_r($v_val);
         //echo "</pre>";
         //ECHO $fce." -- ".$i_key." -- ".$v_val;
        saprfc_table_append($fce , $i_key , $v_val);
      }
    }
  }
  $rc = saprfc_call_and_receive($fce);//call rfc
  //echo "RC:".$rc."<BR>";
  if ($rc != SAPRFC_OK) {
    if ($rfc == SAPRFC_EXCEPTION ){
      echo ("Exception raised: ".saprfc_exception($fce));
    }
    else{
      echo (saprfc_error($fce));
    }
    //exit;
  }
  //rfc return的變數
  if( $sap_export != '' && is_array($sap_export) ){
    foreach( $sap_export as $e_key => $e_val ){
      $f_export[$e_key] = saprfc_export($fce,$e_key);
    }
    // echo '<pre>';
    // print_r($sap_export) ;
    // echo '</pre>';
  }
  //rfc return的陣列
  if( $sap_otable != '' && is_array($sap_otable) ){
    foreach( $sap_otable as $o_key => $o_val ){
      //ECHO $o_key."<BR>";
      $rows = saprfc_table_rows($fce,$o_key);
      for($i = 1 ; $i <= $rows ; $i++){
        //ECHO $o_key." ----  ".$i."<BR>";
        $f_otable[$o_key][] = saprfc_table_read($fce , $o_key , $i);
      }
      //echo "<pre>";
      //print_r($f_otable[$o_key]);
      //echo "</pre>";
      saprfc_function_free($fce);
      saprfc_close($rfc);
      /*↑↑↑call rfc↑↑↑*/
    }
  }

  $f_return = array( 'rfcname'=>$f_intable,
                     'export' => $f_export,
                     'otable' => $f_otable);
  $fr_return = serialize($f_return);
  $sql = "insert into sap_rfc_log
                (s_num           ,slc_proc      ,sap_rfc       ,s_return
                 s_import        ,s_itable      ,s_export      ,s_otable,
                 s_login         ,b_empno       ,b_date        ,b_proc)
          values(0               ,'{$f_proc}'   ,'{$f_intable}','{$fr_return}'
                 '{$fs_import}'  ,'{$fs_itable}','{$fs_export}','{$fs_otable}',
                 '{$f_saplogin}' ,'{$f_empno}'  ,'{$f_date}'   ,'{$f_pid}')";
  mysql_query($sql);
  return $f_return;
}
  // **************************************************************************
  //  函數名稱: sl_ERP_MA083_SAP_ZTERM()
  //  函數功能: 針對 ERP 收款條件去比對出 SAP 的收款條件 erp TABLE-->COPMA
  //  使用方式: sl_ERP_MA083_SAP_ZTERM($MA041 , $MA083)
  //  程式設計: 健昌
  //  設計日期: 2013.08.19
  // **************************************************************************
  function sl_ERP_MA083_SAP_ZTERM($MA083) { //限MA041 收款方式 等於 --> 02.支票 ，不在另外增加if判斷是否為MA041-->02 的判斷。
      $MA083 = (substr($MA083,1,2)=='31')?substr($MA083,0,1).'30'.substr($MA083,3,3):$MA083; //財務張副理告知，第二~三碼只要是31的，都改為30 例:131015 --> 130015。
      $sap_ZTERM = $MA083;
      $f_var["ygs0_v4_2_2"]    = "/home/gas/ygsonatr_v4_2_2.itm";    // 付款單檔 山隆支票條件
      list($f_var['ygs0_v4_2_2_value']    ,$f_var['ygs0_v4_2_2_show']    ,$f_var['ygs0_v4_2_2_qty'])   = u_add_select2($f_var["ygs0_v4_2_2"]);   // 收款單_支票轉入 陣列
      $f_var['ygs0_v4_2_2'] = array('value'=> $f_var['ygs0_v4_2_2_value']  ,'show'=> $f_var['ygs0_v4_2_2_show'] ,'qty'=> $f_var['ygs0_v4_2_2']);
      for($i=0 ; $i<count($f_var['ygs0_v4_2_2']['show']) ; $i++){
        $f_var['ygs0_v4_2_2_item'] = $f_var['ygs0_v4_2_2']['show'][$i] ;
        $f_var['ygs0_v4_2_2_MEINS'][$f_var['ygs0_v4_2_2_item']] = $f_var['ygs0_v4_2_2']['value'][$i] ;
      }
        $sap_ZTERM = (Trim($f_var['ygs0_v4_2_2_MEINS'][$MA083])=='')?'':Trim($f_var['ygs0_v4_2_2_MEINS'][$MA083]);
        if($sap_ZTERM==''){ //如果陣列比對不到資料，才進入迴圈去一筆一筆判斷。
          for($i=0 ; $i<count($f_var['ygs0_v4_2_2']['show']) ; $i++){
            $j = $i + 1 ;
            if($f_var['ygs0_v4_2_2']['show'][$j] > $MA083 and $f_var['ygs0_v4_2_2']['show'][$i] < $MA083 ){
              $sap_ZTERM = $f_var['ygs0_v4_2_2']['value'][$j];
            }
          }
        }
    return  $sap_ZTERM   ;
  }

  // **************************************************************************
  //  函數名稱: sl_ERP_MA083_SAP_ZTERM_V2()
  //  函數功能: 針對 ERP 收款條件去比對出 SAP 的收款條件 erp TABLE-->COPMA //2013/11/14 健昌 迴圈判斷有誤，需要再修改~~。
  //  使用方式: sl_ERP_MA083_SAP_ZTERM_V2( $MA083)
  //  程式設計: 健昌
  //  設計日期: 2013.08.19
  // **************************************************************************
  function sl_ERP_MA083_SAP_ZTERM_V2($MA083) { //限MA041 收款方式 等於 --> 2-電匯        ，不在另外增加if判斷是否為MA041-->02 的判斷。
      $MA083 = (substr($MA083,1,2)=='31')?substr($MA083,0,1).'30'.substr($MA083,3,3):$MA083; //財務張副理告知，第二~三碼只要是31的，都改為30 例:131015 --> 130015。
      $sap_ZTERM = $MA083;
      $MA083_v2 = substr($MA083,3,3); //財務張副理告知，電匯的只要比對後3碼

      $f_var["ygs0_v4_2"]    = "/home/gas/ygsonatr_v4_2.itm";    // 收款單檔
      list($f_var['ygs0_v4_2_value']    ,$f_var['ygs0_v4_2_show']    ,$f_var['ygs0_v4_2_qty'])   = u_add_select2($f_var["ygs0_v4_2"]);   // 收款單轉入 陣列
      $f_var['ygs0_v4_2'] = array('value'=> $f_var['ygs0_v4_2_value']  ,'show'=> $f_var['ygs0_v4_2_show'] ,'qty'=> $f_var['ygs0_v4_2']);
      for($i=1 ; $i<count($f_var['ygs0_v4_2']['show']) ; $i++){
        $f_var['ygs0_2_item'] = $f_var['ygs0_v4_2']['show'][$i] ;
        $f_var['ygs0_2_MEINS'][$f_var['ygs0_2_item']] = $f_var['ygs0_v4_2']['value'][$i] ;
      }
        $sap_ZTERM = (Trim($f_var['ygs0_2_MEINS'][$MA083])=='')?'':Trim($f_var['ygs0_2_MEINS'][$MA083]);
        if($sap_ZTERM==''){ //如果陣列比對不到資料，才進入迴圈去一筆一筆判斷。
          for($i=0 ; $i<count($f_var['ygs0_v4_2']['show']) ; $i++){
            $j = $i + 1 ;
            // echo $MA083_v2 .'<---三碼的銀行電匯'.'</br>';
            // echo substr($f_var['ygs0_v4_2']['show'][$j],3,3) .'<---三碼一___'.substr($f_var['ygs0_v4_2']['show'][$i],3,3).'<--三碼二'.'</br>';
            if(substr($f_var['ygs0_v4_2']['show'][$j],3,3) == $MA083_v2){ //電匯的只要比對後3碼 如果後三碼一樣，就給新的變數值。
              $sap_ZTERM_v2 = $f_var['ygs0_v4_2']['value'][$j];
            }elseif( substr($f_var['ygs0_v4_2']['show'][$j],3,3) >= $MA083_v2 and substr($f_var['ygs0_v4_2']['show'][$i],3,3) <= $MA083_v2 ){
              // if( substr($f_var['ygs0_v4_2']['show'][$j],3,3) >= $MA083_v2){
                $sap_ZTERM = $f_var['ygs0_v4_2']['value'][$j];
              }
          }
          $sap_ZTERM = ($sap_ZTERM_v2=='')?$sap_ZTERM:$sap_ZTERM_v2;   //如果 sap_ZTERM_v2 有值，就給 sap_ZTERM_v2 的值。
        }
    return  $sap_ZTERM   ;
  }


  // **************************************************************************
  //  函數名稱: u_dept_sap_werks()
  //  函數功能: 針對 ERP 部門別去比對出 存放在sl.dept  的 sap 利潤中心與銷售組織
  //  使用方式: u_dept_sap_werks($MA015)
  //  程式設計: 健昌
  //  設計日期: 2013.08.26
  // **************************************************************************
  function u_dept_sap_werks($MA015) { //限MA041 收款方式 等於 --> 02.支票 ，不在另外增加if判斷是否為MA041-->02 的判斷。
    u_open('sl');
      $werks = '';
      $f_var['where_v1='] = '';
      switch(substr($MA015,0,1)){
        case "L":
            $f_var['where_v1']  = "sap_ba='$MA015'  and";
          break;
        default:
            $f_var['where_v1'] = "b_gid='$MA015'  and";
          break;
      }
      $sql  = "select *
               from dept
               where {$f_var['where_v1']}   stop <>'Y'  and sap_ba <>'' and  sap_vk <>'' " ;
      // echo $sql.'</br>';
      $re = mysql_query($sql);
      $num = mysql_num_rows($re);
      if($num >= 1 ){
        while($row = mysql_fetch_assoc($re)){
          $werks =  $row['sap_ba'].'_'.$row['sap_vk'].'_'.$row['b_gid'];
          // $werks =  $row['sap_ba'].'_'.$row['sap_vk'].'_'.$row['ef_dept'];
        }
      }
    return $werks   ;
  }

  // **************************************************************************
  //  函數名稱: u_MA083_NAME()
  //  函數功能: 針對 鼎新ERP收款條件轉換為收款條件代碼+中文說明
  //  使用方式: u_MA083_NAME($MA015)
  //  程式設計: 健昌
  //  設計日期: 2013.08.26
  // **************************************************************************
  function u_MA083_NAME($MA015) { //限MA041 收款方式 等於 --> 02.支票 ，不在另外增加if判斷是否為MA041-->02 的判斷。
    // u_openms("forwarder");
    u_openms("Leader9503");
      $werks = $MA015;
      $sql  = "SELECT  * FROM Leader9503..CMSNA  WHERE NA002 = '{$MA015}'  " ;
      // echo $sql.'</br>';
      $re = mssql_query($sql);
      $num = mssql_num_rows($re);
      if($num >= 1 ){
        while($row = mssql_fetch_array($re)){
          $werks =  $row['NA002'].'_'.$row['NA003'];
        }
      }else{
        u_openms("forwarder");
          $werks = $MA015;
          $sql2  = "SELECT  * FROM forwarder..CMSNA  WHERE NA002 = '{$MA015}'  " ;
          // echo $sql.'</br>';
          $re2 = mssql_query($sql2);
          $num2 = mssql_num_rows($re2);
          if($num2 >= 1 ){
            while($row2 = mssql_fetch_array($re2)){
              $werks =  $row2['NA002'].'_'.$row2['NA003'];
            }
          }
      }
    return $werks   ;
  }

  // **************************************************************************
  //  函數名稱: u_SAP_ZTERM_NAME()
  //  函數功能: 針對 SAP收款條件轉換為收款條件代碼+中文說明
  //  使用方式: u_SAP_ZTERM_NAME($MA015)
  //  程式設計: 健昌
  //  設計日期: 2013.08.26
  // **************************************************************************
  function u_SAP_ZTERM_NAME($MA015) { //限MA041 收款方式 等於 --> 02.支票 ，不在另外增加if判斷是否為MA041-->02 的判斷。
    sl_open("SAP_test");
      $werks = $MA015;
      $sql  = "SELECT  * FROM SAP_KNB1  WHERE ZTERM = '{$MA015}'  " ;
      // echo $sql.'</br>';
      $re = mysql_query($sql);
      $num = mysql_num_rows($re);
      if($num >= 1 ){
        while($row = mysql_fetch_array($re)){
          $werks =  $row['ZTERM'].'_'.$row['LIFNR'];
        }
      }
    return $werks   ;
  }


// **************************************************************************
//  函數名稱: sl_mb_substr()
//  函數功能: 因無法使用mb_substr..所以直接做一個函數
//  使用方式: sl_mb_substr($vdate)
//  程式設計: 健昌
//  設計日期: 2013.010.08
// **************************************************************************
function  sl_mb_substr( $str ,  $start  =  0 ,  $length  =  0 ,  $encode  =  'utf-8' )  {
    /*該編碼每個非英文字符的字節長度*/
    $encode_len  =  $encode  == 'utf -8' ? 3  :  2 ;
    /*計算開始字節*/
    for ( $byteStart  =  $i  =  0 ;  $i  <  $start ;  ++ $i )  {
        $byteStart  +=  ord ( $str { $byteStart } )  <  128 ? 1  :  $encode_len ;
        /*當起始坐標超出字符串，則返回空值*/
        if (  $str { $byteStart }  ==  ''  )  return  '' ;
    }
    /*計算字節長度*/
    for ( $i  =  0 ,  $byteLen  =  $byteStart ;  $i  <  $length ;  ++ $i ){
        $byteLen  +=  ord ( $str { $byteLen } )  <  128 ? 1  :  $encode_len ;
    }
    // echo '要切割的名稱-->'.$str .'___要開始的切字串地方-->'. $byteStart .'___最後的切字串地方-->'. $byteLen - $byteStart.'</br>';
    return  substr (  $str ,  $byteStart ,  $byteLen - $byteStart  ) ;
  }
  // **************************************************************************
  //  函數名稱: sl_advque()
  //  函數功能: 進階查詢
  //  使用方式: sl_advque($f_var['fd_que'])
  //  程式設計: Job
  //  設?p日期: 2014.05.12
  // **************************************************************************
  function sl_advque($f_var,$sql_type='mysql') { // add by mimi 2009.04.13 $sql_type='mysql' = $sql_type 沒有傳遞參數時的預設值為mysql
    $vjs_rule = ''; // 欄位條件設定

    reset($f_var['fd_que']); // 將陣列的指標指到陣列第一個元素
    while(list($mfd_id)=each($f_var['fd_que'])) {
      if('N'==$f_var['fd_que'][$mfd_id]['show_que']) { // 不秀在畫面上
        continue; // loop 回到 while
      }

      if('hidden'==$f_var['fd_que'][$mfd_id]['type']) { // 如果 type 是 hidden 就不在畫面多秀表格
        //echo $f_var['fd_que'][$mfd_id]['type'].'-----';
        $f_var["tp"]-> newBlock (  "tb_".$f_var['fd_que'][$mfd_id]['type']                  ); // 欄位 type
        reset($f_var['fd_que'][$mfd_id]); // 將陣列的指標指到陣列第一個元素
        while(list($mfd_name)=each($f_var['fd_que'][$mfd_id])) {
            if('value'==$mfd_name && '2'==$f_var['msel']) { // 如果是 value and 2=修改，就抓取 $f_var['in_scr_row'][] 資料
              $mfd_value = $f_var['in_scr_row'][$mfd_id];
              $f_var["tp"]-> assign   (  "tv_value", $mfd_value     );
            }
            else{
              $f_var["tp"]-> assign   (  "tv_".$mfd_name , $f_var['fd_que'][$mfd_id][$mfd_name]     );
            }
        }
        continue; // loop 回到 while
      }


      $mmemo = '';
      if(''<>$f_var['fd_que'][$mfd_id]['memo']) {
        $mmemo = '&nbsp;('.$f_var['fd_que'][$mfd_id]['memo'].')';
      }
      $f_var["tp"]-> newBlock (  "tb_in_get_fd"         ); // 輸入畫面
      $f_var["tp"]-> assign   (  "tv_width1"     , $f_var["mwidth1"]                  ); //
      $f_var["tp"]-> assign   (  "tv_width2"     , $f_var["mwidth2"]                  ); //
      $f_var["tp"]-> assign   (  "tv_cname"      , $mpkey_str.$f_var['fd_que'][$mfd_id]['cname']   ); // 欄位中文名稱
      $f_var["tp"]-> assign   (  "tv_fd_ename"   , $f_var['fd_que'][$mfd_id]['ename']   ); // 欄位英文名稱
      $f_var["tp"]-> assign   (  "tv_class"      , $f_var['fd_que'][$mfd_id]['class']              ); //
      $f_var["tp"]-> assign   (  "tv_memo"       , $mmemo      ); // 欄位 memo
      $f_var["tp"]-> newBlock (  "tb_".$f_var['fd_que'][$mfd_id]['type']                  ); // 欄位 type

      reset($f_var['fd_que'][$mfd_id]); // 將陣列的指標指到陣列第一個元素
      while(list($mfd_name)=each($f_var['fd_que'][$mfd_id])) {
        if('value'==$mfd_name && ('2'==substr($f_var['msel'],0,1) OR 'C'==substr($f_var['msel'],0,1)) ) { // 如果是 value and 2=修改，就抓取 $f_var['in_scr_row'][] 資料
          $mfd_value = $f_var['in_scr_row'][$mfd_id];
          //echo $f_var['fd_que'][$mfd_id]['type'].'---'.$mfd_id.'---'.$mfd_value.'<hr>';
          //增加file2來讓讀取資料是作判斷
          if('0000-00-00'==substr($mfd_value,0,10)) {
             $mfd_value = '';
          }
        }
        else {
          $mfd_value = $f_var['fd_que'][$mfd_id][$mfd_name];
        }
        //echo $mfd_id.'---';
        $f_var["tp"]-> assign   (  "tb_".$f_var['fd_que'][$mfd_id]['type'].".tv_".$mfd_name , $mfd_value      );
      }

      switch($f_var['fd_que'][$mfd_id]['type']) {
        case "text":
          $f_var["tp"]-> assign   (  "tv_value"      , $_SESSION['advque_memo']["f_".$mfd_id]      );
          break;
        case "date3":
          $f_var["tp"]-> assign   (  "tv_value_s"    , $_SESSION['advque_memo']["f_".$mfd_id."_s"] );
          $f_var["tp"]-> assign   (  "tv_value_e"    , $_SESSION['advque_memo']["f_".$mfd_id."_e"] );
          break;
        case "select":
        $f_var["tp"]-> newBlock (  "tb_all_option"                  ); // all_option
        // reset($f_var['fd_que'][$mfd_id]['value']); // 將陣列的指標指到陣列第一個元素
        while( list($mvalue)=each($f_var['fd_que'][$mfd_id]['value']) ) {
          $f_var["tp"]-> newBlock (  "tb_option"                  ); // option
          //$f_var["tp"]-> assign   (  "tv_value"      , $mvalue                                    );
          if($_SESSION['advque_memo']["f_".$mfd_id] == $f_var['fd_que'][$mfd_id]['value'][$mvalue]){
            $f_var["tp"]-> assign   (  "tv_selected"      , "selected"); //
          }
          $f_var["tp"]-> assign   (  "tv_value"      , $f_var['fd_que'][$mfd_id]['value'][$mvalue]  );
          $f_var["tp"]-> assign   (  "tv_show"       , $f_var['fd_que'][$mfd_id]['show'][$mvalue]   );
        }
        //echo $mfd_id.'--------';
        //echo $f_var['fd_que'][$mfd_id]['value']['3'];
        //echo $f_var['fd_que'][$mfd_id]['value'][0]['3'].'++++++++';
        break;
        case "select2":
        $f_var["tp"]-> newBlock (  "tb_all_option2"                  ); // all_option2
        reset($f_var['fd_que'][$mfd_id]['value']); // 將陣列的指標指到陣列第一個元素
        while( list($mvalue)=each($f_var['fd_que'][$mfd_id]['value']) ) {
          $f_var["tp"]-> newBlock (  "tb_option2"                  ); // option
          //$f_var["tp"]-> assign   (  "tv_value"      , $mvalue                                    );
          $f_var["tp"]-> assign   (  "tv_value"      , $f_var['fd_que'][$mfd_id]['value'][$mvalue]  );
          $f_var["tp"]-> assign   (  "tv_show"       , $f_var['fd_que'][$mfd_id]['show'][$mvalue]   );

        }
        //echo $mfd_id.'--------';
        //echo $f_var['fd_que'][$mfd_id]['cname'];
        //echo $f_var['fd_que'][$mfd_id]['value'][0]['3'].'++++++++';
        break;
        default:
        break;
      }

      // js_rule 設定
      if(NULL!=$f_var['fd_que'][$mfd_id]['js_rule']['kind']) {
         $vjs_rule .= sl_js_rule($f_var['fd_que'][$mfd_id]['js_rule']['kind'],
                                 $f_var['fd_que'][$mfd_id]['ename'],
                                 $f_var['fd_que'][$mfd_id]['cname'],
                                 $f_var['fd_que'][$mfd_id]['js_rule']['chk_value'],
                                 $f_var['fd_que'][$mfd_id]['js_rule']['chk_len']
                               );
      }
      ///// js_rule 設定
      ///switch ($f_var['fd_que'][$mfd_id]['js_rule']['kind']) {
      ///  case "required":  // 一定要輸入值，也就是檢查是否為空白
      ///  $vjs_rule .= "
      ///                                   if(this.{$f_var['fd_que'][$mfd_id]['ename']}.value=='{$f_var['fd_que'][$mfd_id]['js_rule']['chk_value']}'){;
      ///                                     alert('『{$f_var['fd_que'][$mfd_id]['cname']}』輸入有誤!!') ;
      ///                                     this.{$f_var['fd_que'][$mfd_id]['ename']}.focus();
      ///                                     return(false)
      ///                                   };
      ///                                 ";
      ///  break;
      ///  default:
      ///  break;
      ///}

      $f_var["tp"]-> assignglobal   (  "tv_js_rule"    , $vjs_rule                                   ); // js rule

    }
    return;
  }
  // **************************************************************************
  //  函數名稱: sl_advpo()
  //  函數功能: 案例紀錄
  //  使用方式: sl_advpo($f_var['fd_po'])
  //  程式設計: 朝鈞
  //  設計日期: 2016.10.24
  // **************************************************************************
  function sl_advpo($f_var,$sql_type='mysql') { // add by mimi 2009.04.13 $sql_type='mysql' = $sql_type 沒有傳遞參數時的預設值為mysql
    $vjs_rule = ''; // 欄位條件設定

    if( '10'==$f_var['msel']) {
      if(NULL==$f_var['in_scr_row']) {
        $f_var['mwhere'] = "s_num='{$f_var['f_s_num']}'";
        $f_var['morder'] = "s_num";
        $query1      = "select {$f_var['mtable']['head']}.*
                                   from {$f_var['mtable']['head']}
                                   where {$f_var['mwhere']}
                                   order by {$f_var['morder']}
                           ";
        //echo $query1."<BR>";
       //upd by mimi 2009.04.13 讓mssql也能用
       $result_scr  = call_user_func($sql_type.'_query',$query1);//mysql_query($query1);
       $row_scr     = call_user_func($sql_type.'_fetch_array',$result_scr);//mysql_fetch_array($result_scr);
       $f_var['in_scr_row'] = $row_scr;
      }
    }

    reset($f_var['fd_po']); // 將陣列的指標指到陣列第一個元素
    while(list($mfd_id)=each($f_var['fd_po'])) {
      if('N'==$f_var['fd_po'][$mfd_id]['show_que']) { // 不秀在畫面上
        continue; // loop 回到 while
      }

      if('hidden'==$f_var['fd_po'][$mfd_id]['type']) { // 如果 type 是 hidden 就不在畫面多秀表格
        //echo $f_var['fd_po'][$mfd_id]['type'].'-----';
        $f_var["tp"]-> newBlock (  "tb_".$f_var['fd_po'][$mfd_id]['type']                  ); // 欄位 type
        reset($f_var['fd_po'][$mfd_id]); // 將陣列的指標指到陣列第一個元素
        while(list($mfd_name)=each($f_var['fd_po'][$mfd_id])) {
            if('value'==$mfd_name && '2'==$f_var['msel']) { // 如果是 value and 2=修改，就抓取 $f_var['in_scr_row'][] 資料
              $mfd_value = $f_var['in_scr_row'][$mfd_id];
              $f_var["tp"]-> assign   (  "tv_value", $mfd_value     );
            }
            else{
              $f_var["tp"]-> assign   (  "tv_".$mfd_name , $f_var['fd_po'][$mfd_id][$mfd_name]     );
            }
        }
        continue; // loop 回到 while
      }

      // Add by Tony 2007.08.20 增加 pkey 必填欄位
      if('Y'==$f_var['fd_po'][$mfd_id]['pkey']) { // 必要輸入的鍵值字串
         //$mpkey_str = '<span class=pkey>＊</span>';
         $mpkey_str = '<span class=pkey>*</span>';
      }
      else {
         $mpkey_str = '';
      }

      $mmemo = '';
      if(''<>$f_var['fd_po'][$mfd_id]['memo']) {
        $mmemo = '&nbsp;('.$f_var['fd_po'][$mfd_id]['memo'].')';
      }
      $f_var["tp"]-> newBlock (  "tb_in_get_fd"         ); // 輸入畫面
      $f_var["tp"]-> assign   (  "tv_width1"     , $f_var["mwidth1"]                  ); //
      $f_var["tp"]-> assign   (  "tv_width2"     , $f_var["mwidth2"]                  ); //
      $f_var["tp"]-> assign   (  "tv_cname"      , $mpkey_str.$f_var['fd_po'][$mfd_id]['cname']   ); // 欄位中文名稱
      $f_var["tp"]-> assign   (  "tv_fd_ename"   , $f_var['fd_po'][$mfd_id]['ename']   ); // 欄位英文名稱
      $f_var["tp"]-> assign   (  "tv_class"      , $f_var['fd_po'][$mfd_id]['class']              ); //
      $f_var["tp"]-> assign   (  "tv_memo"       , $mmemo      ); // 欄位 memo
      $f_var["tp"]-> newBlock (  "tb_".$f_var['fd_po'][$mfd_id]['type']                  ); // 欄位 type

      reset($f_var['fd_po'][$mfd_id]); // 將陣列的指標指到陣列第一個元素
      while(list($mfd_name)=each($f_var['fd_po'][$mfd_id])) {
        if('value'==$mfd_name && '10'==$f_var['msel'] ) { // 如果是 value and 2=修改，就抓取 $f_var['in_scr_row'][] 資料
          $mfd_value = $f_var['in_scr_row'][$mfd_id];
          //echo $f_var['fd_po'][$mfd_id]['type'].'---'.$mfd_id.'---'.$mfd_value.'<hr>';
          //增加file2來讓讀取資料是作判斷
          if(('file'==$f_var['fd_po'][$mfd_id]['type'] or 'file2'==$f_var['fd_po'][$mfd_id]['type'] ) && NULL<>$mfd_value) {
             //$file_path   = $f_var['proc_upfile_path'][u_showproc()].trim($f_var['in_scr_row'][$mfd_id]);
             $strpos = strrpos($_SERVER['SCRIPT_FILENAME'],'/');
             $strlen = substr($_SERVER['SCRIPT_FILENAME'],0,$strpos+1);
             $file_path = $strlen.$f_var[po_mupload_dir].trim($f_var['in_scr_row'][$mfd_id]);
             $file_uri  = 'http://'.$_SERVER['SERVER_NAME'].$_SERVER['SCRIPT_NAME']."?f_sid={$f_var['f_sid']}";
             //echo $filE_uri.$_SERVER['HTTP_REFERER'];
             //phpinfo();
             //$mfile_name      = '<a href='.$f_var[po_mupload_dir].trim($f_var['in_scr_row'][$mfd_id]).'>'.trim($f_var['in_scr_row'][$mfd_id]).'</a>';
             $mfile_name      = '<a href='.$url.base64_encode(getcwd().'/'.$f_var[po_mupload_dir].trim($f_var['in_scr_row'][$mfd_id])).'>'.trim($f_var['in_scr_row'][$mfd_id]).'</a>';
             $mfile_del_link  = "http://".$_SERVER['SERVER_NAME']."/~sl/sl_del_file.php?f_field_name={$mfd_id}&f_db={$f_var['mdb']}&f_table={$f_var['mtable']['head']}&f_wrere_field=s_num&f_no={$f_var['in_scr_row'][s_num]}&f_file_path={$file_path}&f_file_url={$file_uri}&f_file_name=".trim($f_var['in_scr_row'][$mfd_id]);
             //$mre_url = "&re_url=".u_showproc().".php?msel=2&f_s_num={$f_var['in_scr_row'][s_num]}&f_page={$f_var['f_page']}&f_order_fd={$f_var['f_order_fd']}&f_order_md={$f_var['f_order_md']}";
             // 一定要編碼，不然回傳值會有誤？真是奇怪！！！ 2006.11.20 By Tony
             //upd by mimi 2012.06.01 報修-13608 增加回傳f_change1與f_change2
             $mre_url = u_showproc().".php?msel=2&f_sid={$f_var['f_sid']}&f_s_num={$f_var['in_scr_row'][s_num]}&f_page={$f_var['f_page']}&f_order_fd={$f_var['f_order_fd']}&f_order_md={$f_var['f_order_md']}&f_del={$f_var['f_del']}&f_change1={$f_var['f_change1']}&f_change2={$f_var['f_change2']}";
             $mfile_del_link .= "&re_url=".urlencode($mre_url); // return url
             //echo $mfd_id.'-1-'.$f_var['fd'][$mfd_id]['type'].'-2-'.$mfd_value.'-3-<br>';
             if('file'==$f_var['fd_po'][$mfd_id]['type']){
               $f_var["tp"]-> newBlock (  "tb_in_file_del"                              ); // 刪除檔案 Block
             }
             else{
               $f_var["tp"]-> newBlock (  "tb_in_file_del2"                              ); // 刪除檔案 Block
             }
             //$f_var["tp"]-> newBlock (  "tb_in_file_del"                              ); // 刪除檔案 Block
             $f_var["tp"]-> assign   (  "tv_file_name"       , $mfile_name            ); // 檔案名稱
             $f_var["tp"]-> assign   (  "tv_file_del_link"   , $mfile_del_link        ); // 欄位中文名稱
             $mfd_value = $f_var['fd_po'][$mfd_id][$mfd_name];
          }
          if('0000-00-00'==substr($mfd_value,0,10)) {
             $mfd_value = '';
          }
        }
        else {
          $mfd_value = $f_var['fd_po'][$mfd_id][$mfd_name];
        }
        //echo $mfd_id.'---';
        $f_var["tp"]-> assign   (  "tb_".$f_var['fd_po'][$mfd_id]['type'].".tv_".$mfd_name , $mfd_value      );
      }

      switch($f_var['fd_po'][$mfd_id]['type']) {
        case "select":
        reset($f_var['fd_po'][$mfd_id]['value']); // 將陣列的指標指到陣列第一個元素
        while( list($mvalue)=each($f_var['fd_po'][$mfd_id]['value']) ) {
          $f_var["tp"]-> newBlock (  "tb_option"                  ); // option
          //$f_var["tp"]-> assign   (  "tv_value"      , $mvalue                                    );
          $f_var["tp"]-> assign   (  "tv_value"      , $f_var['fd_po'][$mfd_id]['value'][$mvalue]  );
          $f_var["tp"]-> assign   (  "tv_show"       , $f_var['fd_po'][$mfd_id]['show'][$mvalue]   );
          if('10'==$f_var['msel']) {
            // 將 select 停在資料位置
            if($f_var['fd_po'][$mfd_id]['value'][$mvalue]==trim($f_var['in_scr_row'][$mfd_id])) {
              $f_var["tp"]-> assign   (  "tv_selected"   , 'selected'                             );
            }
          }
        }
        //echo $mfd_id.'--------';
        //echo $f_var['fd_po'][$mfd_id]['value']['3'];
        //echo $f_var['fd_po'][$mfd_id]['value'][0]['3'].'++++++++';
        break;
        case "textarea":
        reset($f_var['fd_po'][$mfd_id]['size']); // 將陣列的指標指到陣列第一個元素
        while( list($msize)=each($f_var['fd_po'][$mfd_id]['size']) ) {
          $f_var["tp"]-> assign   (  "tv_".$msize    , $f_var['fd_po'][$mfd_id]['size'][$msize]     ); // 設定 cols、rows、wrap
        }
        //echo $msize.'---';
        //echo $f_var['fd_po'][$mfd_id]['size'][$msize].'+++';
        break;;
        default:
        break;
      }

      // js_rule 設定
      if(NULL!=$f_var['fd_po'][$mfd_id]['js_rule']['kind']) {
         $vjs_rule .= sl_js_rule($f_var['fd_po'][$mfd_id]['js_rule']['kind'],
                                 $f_var['fd_po'][$mfd_id]['ename'],
                                 $f_var['fd_po'][$mfd_id]['cname'],
                                 $f_var['fd_po'][$mfd_id]['js_rule']['chk_value'],
                                 $f_var['fd_po'][$mfd_id]['js_rule']['chk_len']
                               );
      }
      ///// js_rule 設定
      ///switch ($f_var['fd_po'][$mfd_id]['js_rule']['kind']) {
      ///  case "required":  // 一定要輸入值，也就是檢查是否為空白
      ///  $vjs_rule .= "
      ///                                   if(this.{$f_var['fd_po'][$mfd_id]['ename']}.value=='{$f_var['fd_po'][$mfd_id]['js_rule']['chk_value']}'){;
      ///                                     alert('『{$f_var['fd_po'][$mfd_id]['cname']}』輸入有誤!!') ;
      ///                                     this.{$f_var['fd_po'][$mfd_id]['ename']}.focus();
      ///                                     return(false)
      ///                                   };
      ///                                 ";
      ///  break;
      ///  default:
      ///  break;
      ///}

      $f_var["tp"]-> assignglobal   (  "tv_js_rule"    , $vjs_rule                                   ); // js rule

    }
    return;
  }
  // **************************************************************************
  //  函數名稱: sl_show_name()
  //  函數功能: 太多地方另外加程式了,寫一個在這裡
  //  使用方式: sl_show_name($empno)
  //  程式設計: supergk
  //  設計日期: 2014.10.09
  // **************************************************************************
  function  sl_show_name($empno){
    if($empno){
      sl_open('sl');
      $sql ="select name from sl.pass where empno = '{$empno}'";
      $rs = mysql_query($sql);
      $row = mysql_fetch_array($rs);
      return($row['name']);
    }else{
      return;
    }
  }

  // **************************************************************************
  //  函數名稱: sl_eip2flwV2()
  //  函數功能: EIP各式資料轉電子簽核-簽核單,二版本
  //  使用方式:
  //  程式設計: 佳玟
  //  設計日期: 2015.03.11
  // **************************************************************************
  function sl_eip2flwV2(&$f_var) {
    //ignore_user_abort(true);
    //set_time_limit(60);
    Global $_SESSION;
    Global $f_var;
    if( ''!=$f_var['f_b_empno'] ){
      $vb_empno   = $f_var['f_b_empno'];
      $vb_name    = '';
      $vb_dept_id = '';
    }else if( ''==$_SESSION["login_empno"] ){
      $vb_empno   = $f_var['f_b_empno'];
      $vb_name    = '';
      $vb_dept_id = '';
    }else{
      $vb_empno   = $_SESSION["login_empno"];
      $vb_name    = $_SESSION["login_name"];
      $vb_dept_id = $_SESSION["login_dept_id"];
    }

    $vb_date    = date("Y-m-d H:i:s");
    $vfromip    = $_SERVER["REMOTE_ADDR"];
    $vproc      = u_showproc(); // 程式代號
    $eipdb       = 'docs';
    $flwdb       = 'EF2KWeb';
    $fp         = fopen("http://eip.slc.com.tw/~sl/eip2flwV2.log", 'a'); //重覆單號頻繁,存log查明
    $mftp_server = "flow.slc.com.tw";         // ftp server


    //sl_chk_rak013($f_var); //確認是否有設定直屬主管
    $vdat1 = 'EF2KWeb';
    sl_openef2k($vdat1);
    $query2 = "SELECT resak001,resak002,resak015,resal002,resak013
               FROM resak
                 LEFT JOIN resal
                   ON resak015 = resal001
               WHERE resak001 = '{$vb_empno}'
              ";
    $result2 = mssql_query($query2);
    $row2 = mssql_fetch_array($result2);
    if(''==$row2['resak013']){
      echo "<script language='JavaScript'>";
      echo "alert('查無直屬主管，請聯絡總公司人事協助處理。');";
      echo "history.back();";
      echo "</script>";

    }

    sl_openef2k($flwdb);
    //↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓
    // (報修20585)upd by 佳玟 2013.07.08 不給予權限人員在resak004會以員編+_U顯示
    $u_query = "SELECT resak001,resak002,resak015,resal002,resak013
                FROM resak
                     LEFT JOIN resal
                               ON resak015 = resal001
                WHERE LTrim(RTrim(resak004)) = '{$vb_empno}'
               ";
    $u_res   = mssql_query($u_query);
    $u_count = mssql_num_rows($u_res);
    if( $u_count==0 ){
      echo "<script language='JavaScript'>";
      echo "alert('注意!! 員工: ".$vb_name."(".$vb_empno.") 無電子簽核使用權限。');";
      echo "history.back();";
      echo "</script>";
      exit;
    }
    //↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑

    $fd_stop = 'N'; //是否可轉簽核
    if(is_array($_REQUEST)) {
      while (list($f_fd_name,$f_fd_value) = each($_REQUEST)) {
        //echo "$f_fd_name=$f_fd_value----";
        $f_var[$f_fd_name] = $f_fd_value;
        //if( strstr("f_table/f_b_empno/f_db/f_file_path/f_b_date/f_title/f_type/f_content/f_s_num/f_cnt",$f_fd_name)!=NULL ){
        if( strstr("f_db/f_table/f_b_empno/f_b_date/f_title/f_content/f_s_num",$f_fd_name)!=NULL ){
          if( $f_var[$f_fd_name]=='' ){
            $fd_stop = 'Y';
            $inLog .= "E..流水號: {$f_var['f_s_num']}({$vb_date})..傳入參數, 有空值者: ".$f_fd_name."\n";
          }
        }
      }
    }
    if( 'Y'==$fd_stop ){
      fwrite($fp, $inLog);
      fclose($fp);
      echo "<script language='JavaScript'>";
      echo "alert('注意!! 電簽參數資料有誤!!');";
      echo "history.back();";
      echo "</script>";
      $fd_stop = 'Y'; //是否可轉簽核
    }
    else{
      $count_table= substr_count($f_var['f_table'],'.');
      $ex_table   = explode('.',$f_var['f_table']);
      $fd_table   = iif($count_table==0,$f_var['f_table'],$ex_table[1]);

      $fd_b_empno      = $f_var['f_b_empno'];                                          //建檔者員編
      $fd_sleip2flw001 = 'SL-EIP2FLW';
      $fd_sleip2flw002 = '';
      $fd_sleip2flw003 = str_replace("\"","",$f_var['f_db']);                          //DB
      $fd_sleip2flw004 = str_replace("\"","",$fd_table);                    //table
      $fd_sleip2flw005 = str_replace("\"","",$f_var['f_file_path']);                   //附件路徑
      $fd_sleip2flw006 = date('Y/m/d',strtotime($f_var['f_b_date']));                  //填單日期
      $fd_sleip2flw007 = str_replace("\"","",$f_var['f_title']);                       //主旨
      $fd_sleip2flw008 = str_replace("\"","",$f_var['f_type']);                        //類別
      $fd_sleip2flw009 = str_replace("\"","",str_replace("'","",$f_var['f_content'])); //內容
      $fd_sleip2flw010 = str_replace("\"","",$f_var['f_s_num']);                       //s_num
      $fd_sleip2flw011 = str_replace("\"","",$f_var['f_cnt']);                         //次數 //upd by mimi 2011.06.13 增加轉檔次數
      $fd_cnt=1;
      $ins_key = '';
      $ins_val = '';
      for($i=0;$i<10;$i++){ //upd by mimi 2011.07.01 增加至10個附件
        $fd_file = "f_file".($fd_cnt+$i);
        if($f_var[$fd_file] <> ''){
          //$remote_file[]= $f_var[$fd_file];         // remote的檔案名稱
          $fd_num = str_pad(($fd_cnt+$i),3,'0',STR_PAD_LEFT);
          $ins_key .= " file{$fd_num}, ";
          $ins_val .= " '{$f_var[$fd_file]}', ";
        }
      }

      sl_open($eipdb);
      $sql = "insert into docs.mid2flw
                          (sleip2flw001,sleip2flw002,sleip2flw003,sleip2flw004,sleip2flw005,
                           sleip2flw006,sleip2flw007,sleip2flw008,sleip2flw009,sleip2flw010,sleip2flw011, {$ins_key}
                           b_empno,b_dept_id,b_proc,b_date,fromip)
                   values ('{$fd_sleip2flw001}','{$fd_sleip2flw002}','{$fd_sleip2flw003}','{$fd_sleip2flw004}','{$fd_sleip2flw005}',
                           '{$fd_sleip2flw006}','{$fd_sleip2flw007}','{$fd_sleip2flw008}','{$fd_sleip2flw009}','{$fd_sleip2flw010}','{$fd_sleip2flw011}', {$ins_val}
                           '{$fd_b_empno}','{$vb_dept_id}','{$vproc}','{$vb_date}','{$vfromip}')
             ";
      if(!mysql_query($sql)) {
        sl_errmsg("資料儲存失敗!!{$sql}");
        exit;
      }else{
        $fk_snum = mysql_insert_id();
        if( !ftp_connect($mftp_server) ){
          $sql_upd = " update docs.mid2flw
                       set    t_result = 'C',
                              t_date = '{$vb_date}',
                              t_proc = '{$vproc}'
                       where  s_num = '{$fk_snum}'
                     ";
          mysql_query($sql_upd);
          echo "<script language='JavaScript'>";
          echo "alert('電子簽核主機FLW連線異常, 請重新使用!!!!');";
          echo "history.back();";
          echo "</script>";
          $fd_stop = 'Y'; //是否可轉簽核
        }
        echo $fd_stop."\n";
        if( 'N'==$fd_stop ){
        
        
          $f_var['ewbUrl'] = "http://eip.slc.com.tw/~sl/t_mid2flw_curl.php";
          $ch = curl_init();
          curl_setopt($ch, CURLOPT_URL, $f_var['ewbUrl']);
          curl_setopt($ch, CURLOPT_POST, 1 );
          curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query(
            array("f_s_num" => $fk_snum)
            ));    
          curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0); // 跳過host驗證
          curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0); //規避ssl的證書檢查。
          curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); //output才能回傳回來
          curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
          $output = curl_exec($ch);
          //echo "T_EWB: ".$output;
          curl_close($ch);
           
          //$t_path = "/home/sl/public_html/t_mid2flw.php {$fk_snum} &";
          //$t_popen = popen($t_path,"r");
          //if($t_popen){
          //  while (!feof($t_popen)) {      //?通道里面取得?西
          //    $out = fgets($t_popen, 4096);
          //    //echo $out;         //打印出?
          //  }
          //}
          //pclose($t_popen);
          
        }

      }
    }
  }



  // **************************************************************************
  //  函數名稱: sl_show_sname()
  //  函數功能: 站別id替換成中文名
  //  使用方式: sl_show_sname($dept_id)
  //  程式設計: Job
  //  設計日期: 2015.06.02
  // **************************************************************************
  function sl_show_sname($dept_id) {
    sl_open('sl');
    $query = "select sname
                from dept
               where sap_dept_id = '{$dept_id}'
             ";
    //echo '<pre>'.$query_es.'</pre>';
    $result = mysql_query($query);
    $row    = mysql_fetch_array($result);
    $dept_sname = $row['sname'];

    return $dept_sname;
  }
  // **************************************************************************
  //  函數名稱: sl_resaj()
  //  函數功能: 山隆班別明細陣列(2015.06.09 經理說要寫死)
  //  使用方式: sl_resaj($class_id)
  //  程式設計: Job
  //  設計日期: 2015.06.10
  // **************************************************************************
  function sl_resaj($class_id) {
    $f_var['resaj'] = array('resaj001'  => array('A'        ,'B'            ,'C'            ,'D'                      ,'E'          ,'F'            ,'G'            ,'H'            ,'I'            ,'J'            ,'K'            ,'L'     ),
                            'resaj003'  => array('08:30'        ,'08:00'        ,'06:00'        ,'15:00'                  ,'13:00'      ,'06:30'        ,'13:00'        ,'10:00'        ,'23:00'  ,'07:00'      ,'03:00'        ,'09:00' ),
                            'resaj004'  => array('17:30'        ,'17:00'        ,'15:00'        ,'23:59'                  ,'22:00'      ,'15:30'        ,'21:30'        ,'19:00'        ,'08:00'  ,'16:00'      ,'12:00'        ,'18:00' ),
                            'resaj005'  => array('8'        ,'8'            ,'8'            ,'7.98333333333333' ,'8'        ,'8'            ,'8'            ,'8'        ,'8'        ,'8'            ,'8'            ,'8'     ),
                            'resaj006'  => array('12:00'        ,'12:00'        ,'12:00'        ,'18:00'                  ,'17:00'      ,'12:00'        ,'17:00'        ,'12:00'        ,'03:00'  ,'12:00'      ,'07:00'        ,'12:00' ),
                            'resaj007'  => array('13:00'        ,'13:00'        ,'13:00'        ,'19:00'                  ,'18:00'      ,'13:00'        ,'17:30'        ,'13:00'        ,'04:00'  ,'13:00'      ,'08:00'        ,'13:00' )
                           );

    $class_key = array_search($class_id,$f_var['resaj']['resaj001']);

    $f_var['f_resaj']['wtime_s']   = $f_var['resaj']['resaj003'][$class_key];
    $f_var['f_resaj']['wtime_e']   = $f_var['resaj']['resaj004'][$class_key];
    $f_var['f_resaj']['wtime_cnt'] = $f_var['resaj']['resaj005'][$class_key];
    $f_var['f_resaj']['rtime_s']   = $f_var['resaj']['resaj006'][$class_key];
    $f_var['f_resaj']['rtime_e']   = $f_var['resaj']['resaj007'][$class_key];

    return($f_var["f_resaj"]);
  }
  // **************************************************************************
  //  函數名稱: u_ERP_MA083_SAP_ZTERM()
  //  函數功能: 針對 ERP 收款條件去比對出 SAP 的收款條件 erp TABLE-->COPMA
  //  使用方式: u_ERP_MA083_SAP_ZTERM($MA041 , $MA083)
  //  程式設計: 健昌
  //  設計日期: 2013.08.19
  // **************************************************************************
  function u_ERP_MA083_SAP_ZTERM($MA083) { //限MA041 收款方式 等於 --> 02.支票 ，不在另外增加if判斷是否為MA041-->02 的判斷。
      $MA083 = (substr($MA083,1,2)=='31')?substr($MA083,0,1).'30'.substr($MA083,3,3):$MA083; //財務張副理告知，第二~三碼只要是31的，都改為30 例:131015 --> 130015。
      $sap_ZTERM = $MA083;
      $f_var["ygs0_v4_2_2"]    = "/home/sl/public_html/ygsonatr_v4_2_2.itm"; //"./ygsonatr_v4_2_2.itm";    // 付款單檔 山隆支票條件
      list($f_var['ygs0_v4_2_2_value']    ,$f_var['ygs0_v4_2_2_show']    ,$f_var['ygs0_v4_2_2_qty'])   = u_add_select2($f_var["ygs0_v4_2_2"]);   // 收款單_支票轉入 陣列
      $f_var['ygs0_v4_2_2'] = array('value'=> $f_var['ygs0_v4_2_2_value']  ,'show'=> $f_var['ygs0_v4_2_2_show'] ,'qty'=> $f_var['ygs0_v4_2_2']);
      for($i=0 ; $i<count($f_var['ygs0_v4_2_2']['show']) ; $i++){
        $f_var['ygs0_v4_2_2_item'] = $f_var['ygs0_v4_2_2']['show'][$i] ;
        $f_var['ygs0_v4_2_2_MEINS'][$f_var['ygs0_v4_2_2_item']] = $f_var['ygs0_v4_2_2']['value'][$i] ;
      }
        //echo $f_var['ygs0_v4_2_2_MEINS'][$MA083];
        //exit;
        $sap_ZTERM = (Trim($f_var['ygs0_v4_2_2_MEINS'][$MA083])=='')?'':Trim($f_var['ygs0_v4_2_2_MEINS'][$MA083]);
        //直接對應，如果對應不到，就不要進迴圈，給財務他們增加對照檔，不然就不寫入，
        if($sap_ZTERM==''){ //如果陣列比對不到資料，才進入迴圈去一筆一筆判斷。
          for($i=0 ; $i<count($f_var['ygs0_v4_2_2']['show']) ; $i++){
            $j = $i + 1 ;
            if($f_var['ygs0_v4_2_2']['show'][$j] > $MA083 and $f_var['ygs0_v4_2_2']['show'][$i] < $MA083 ){
              $sap_ZTERM = $f_var['ygs0_v4_2_2']['value'][$j];
            }
          }
        }
    return  $sap_ZTERM   ;
  }
  // **************************************************************************
  //  函數名稱: u_ERP_MA083_SAP_ZTERM_V2()
  //  函數功能: 針對 ERP 收款條件去比對出 SAP 的收款條件 erp TABLE-->COPMA //2013/11/14 健昌 迴圈判斷有誤，需要再修改~~。
  //  使用方式: u_ERP_MA083_SAP_ZTERM_V2( $MA083)
  //  程式設計: 健昌
  //  設計日期: 2013.08.19
  // **************************************************************************
  function u_ERP_MA083_SAP_ZTERM_V2($MA083) { //限MA041 收款方式 等於 --> 2-電匯         ，不在另外增加if判斷是否為MA041-->02 的判斷。
      $MA083 = (substr($MA083,1,2)=='31')?substr($MA083,0,1).'30'.substr($MA083,3,3):$MA083; //財務張副理告知，第二~三碼只要是31的，都改為30 例:131015 --> 130015。
      $MA083_v2 = substr($MA083,3,3); //財務張副理告知，電匯的只要比對後3碼
      $sap_ZTERM = $MA083;
      $f_var["ygs0_v4_2"]    = "/home/sl/public_html/ygsonatr_v4_2.itm"; //"./ygsonatr_v4_2.itm";    // 收款單檔
      list($f_var['ygs0_v4_2_value']    ,$f_var['ygs0_v4_2_show']    ,$f_var['ygs0_v4_2_qty'])   = u_add_select2($f_var["ygs0_v4_2"]);   // 收款單轉入 陣列
      $f_var['ygs0_v4_2'] = array('value'=> $f_var['ygs0_v4_2_value']  ,'show'=> $f_var['ygs0_v4_2_show'] ,'qty'=> $f_var['ygs0_v4_2']);
      for($i=1 ; $i<count($f_var['ygs0_v4_2']['show']) ; $i++){
        $f_var['ygs0_2_item'] = $f_var['ygs0_v4_2']['show'][$i] ;
        $f_var['ygs0_2_MEINS'][$f_var['ygs0_2_item']] = $f_var['ygs0_v4_2']['value'][$i] ;
      }
        $sap_ZTERM = (Trim($f_var['ygs0_2_MEINS'][$MA083])=='')?'':Trim($f_var['ygs0_2_MEINS'][$MA083]);
        if($sap_ZTERM==''){ //如果陣列比對不到資料，才進入迴圈去一筆一筆判斷。
          for($i=0 ; $i<count($f_var['ygs0_v4_2']['show']) ; $i++){
            $j = $i + 1 ;
            // echo $MA083_v2 .'<---三碼的銀行電匯'.'</br>';
            // echo substr($f_var['ygs0_v4_2']['show'][$j],3,3) .'<---三碼一___'.substr($f_var['ygs0_v4_2']['show'][$i],3,3).'<--三碼二'.'</br>';
            if(substr($f_var['ygs0_v4_2']['show'][$j],3,3) == $MA083_v2){ //電匯的只要比對後3碼 如果後三碼一樣，就給新的變數值。
              $sap_ZTERM_v2 = $f_var['ygs0_v4_2']['value'][$j];
            }elseif( substr($f_var['ygs0_v4_2']['show'][$j],3,3) >= $MA083_v2 and substr($f_var['ygs0_v4_2']['show'][$i],3,3) <= $MA083_v2 ){
              // if( substr($f_var['ygs0_v4_2']['show'][$j],3,3) >= $MA083_v2){
                $sap_ZTERM = $f_var['ygs0_v4_2']['value'][$j];
              }
          }
          $sap_ZTERM = ($sap_ZTERM_v2=='')?$sap_ZTERM:$sap_ZTERM_v2;   //如果 sap_ZTERM_v2 有值，就給 sap_ZTERM_v2 的值。
        }
    return  $sap_ZTERM   ;
  }
// **************************************************************************
//  函數名稱: u_werks_sap()
//  函數功能: 轉換類別名稱
//  使用方式: u_werks_sap($pos)
//            $pos => 四碼代號 ex: 2201 -> 龍德站  1010 -> 總公司
//  回傳結果: $sap => sap代碼
//  程式設計: 佳玟
//  設計日期: 2013.04.23
// **************************************************************************
function u_werks_sap($pos){
  $oracle_server = sl_openoci("PRD");
  if (!$oracle_server) {
    die("無法連結【oracle】!!請洽系統管理員 \n");
  }
  $sap = '';
  $sap_sel = "select WERKS_POS, WERKS_SAP
              from   SAPE68.YGSSTN
              where  WERKS_POS LIKE '{$pos}'
                         ";
        //echo "<pre>".$sap_sel."</pre>";
  $stid = oci_parse($oracle_server,$sap_sel);
  $result  = oci_execute($stid);
  if($result){
    while ($ar =  oci_fetch_array($stid, OCI_ASSOC)) {
      $sap = trim($ar['WERKS_SAP']);
    }
  }
  return $sap;
}
  // **************************************************************************
  //  函數名稱: u_set_y3()
  //  函數功能: 列出薪工總表 與 傳票明細
  //  使用方式: u_set_y3($f_var)
  //  程式設計: 東巖
  //  設計日期: 2013.04.09
  // **************************************************************************
  function u_set_y3(&$f_var) {
    //開始傳票的部分--------------------------------------------------------------------
    $ar_sap['y0003']['MANDT']   = $f_var['f_MANDT'];
    $ar_sap['y0003']['BUKRS']   = $f_var['f_BUKRS'];
    $ar_sap['y0003']['GJAHR']   = substr($f_var['f_yymm'],0,4);
    $ar_sap['y0003']['MONAT']   = substr($f_var['f_yymm'],4,2);
    $ar_sap['y0003']['CLASS']   = $f_var['f_CLASS'];
    $ar_sap['y0003']['VOUCHER'] = $f_var['f_VOUCHER']; //001 -> 薪工傳票
    $ar_sap['y0003']['DADAT']   = $f_var['f_DADAT'];
    $ar_sap['y0003']['BELNR_F'] = $f_var['f_BELNR_F'];
    $ar_sap['y0003']['BELNR_A'] = $f_var['f_BELNR_A'];
    $f_var['fv_y0003'] = implode(",",$ar_sap['y0003']);
    //ECHO "★init_fv_y0003: ".$f_var['fv_y0003'];
    $f_var['y0003'][$f_var['fv_y0003']]['MANDT']    = $f_var['f_MANDT'];//用戶端
    $f_var['y0003'][$f_var['fv_y0003']]['BUKRS']    = $f_var['f_BUKRS'];//公司代碼
    $f_var['y0003'][$f_var['fv_y0003']]['GJAHR']    = substr($f_var['f_yymm'],0,4);//會計年度
    $f_var['y0003'][$f_var['fv_y0003']]['MONAT']    = substr($f_var['f_yymm'],4,2);//會計期間
    $f_var['y0003'][$f_var['fv_y0003']]['CLASS']    = $f_var['f_CLASS']; //傳票類別
    $f_var['y0003'][$f_var['fv_y0003']]['VOUCHER']  = $f_var['f_VOUCHER']; //001 -> 薪工傳票//傳票ID
    $f_var['y0003'][$f_var['fv_y0003']]['DADAT']    = $f_var['f_DADAT'];//資料日期
    $f_var['y0003'][$f_var['fv_y0003']]['BELNR_F']  = $f_var['f_BELNR_F'];//前端文件號碼
    $f_var['y0003'][$f_var['fv_y0003']]['BELNR_A']  = $f_var['f_BELNR_A'];//會計文件號碼
    $f_var['y0003'][$f_var['fv_y0003']]['BELNR_R']  = $f_var['f_BELNR_R']; //迴轉:會計文件號碼
    $f_var['y0003'][$f_var['fv_y0003']]['BLART']    = $f_var['f_BLART']; //文件類型
    $f_var['y0003'][$f_var['fv_y0003']]['BUDAT']    = $f_var['f_BUDAT']; //文件中的過帳日期
    $f_var['y0003'][$f_var['fv_y0003']]['CONDAT']   = $f_var['f_CONDAT']; //確認日期
    $f_var['y0003'][$f_var['fv_y0003']]['CONTIME']  = $f_var['f_CONTIME']; //確認時間
    $f_var['y0003'][$f_var['fv_y0003']]['CONSTAFF'] = $f_var['f_CONSTAFF']; //確認人員編
    $f_var['y0003'][$f_var['fv_y0003']]['CONSTNAME']= $f_var['f_CONSTNAME']; //確認人姓名
    $f_var['y0003'][$f_var['fv_y0003']]['TVDAT']    = $f_var['f_TVDAT']; //轉傳票日期
    $f_var['y0003'][$f_var['fv_y0003']]['TVTIME']   = $f_var['f_TVTIME']; //轉傳票時間
    $f_var['y0003'][$f_var['fv_y0003']]['TVSTAFF']  = $f_var['f_TVSTAFF']; //轉傳票人員員編
    $f_var['y0003'][$f_var['fv_y0003']]['TVSTNAME'] = $f_var['f_TVSTNAME']; //轉傳票人員姓名
    $f_var['y0003'][$f_var['fv_y0003']]['RTVDAT']   = $f_var['f_RTVDAT']; //迴轉:轉傳票日期
    $f_var['y0003'][$f_var['fv_y0003']]['RTVTIME']  = $f_var['f_RTVTIME']; //迴轉:轉傳票時間
    $f_var['y0003'][$f_var['fv_y0003']]['RTVSTAFF'] = $f_var['f_RTVSTAFF']; //迴轉:轉傳票人員員編
    $f_var['y0003'][$f_var['fv_y0003']]['RTVSTNAME']= $f_var['f_RTVSTNAME']; //迴轉:轉傳票人員姓名
    $f_var['y0003'][$f_var['fv_y0003']]['ERR_TEXT'] = $f_var['f_ERR_TEXT']; //MESSAGE
    return;
  }
  // **************************************************************************
  //  函數名稱: u_set_y4()
  //  函數功能: 列出薪工總表 與 傳票明細
  //  使用方式: u_set_y4($f_var)
  //  程式設計: 東巖
  //  設計日期: 2013.04.09
  // **************************************************************************
  function u_set_y4(&$f_var) {
    //***************************************************************************//
    //  【YFIGL0004】 存入 SAP 系統
    //***************************************************************************//
    //MANDT, BUKRS,   GJAHR,   MONAT,   CLASS,   VOUCHER,DADAT,   BELNR_F,     BUZEI,                   BELNR_A
    //用戶端,公司代碼,會計年度,會計期間,傳票類別,傳票ID, 資料日期,前端文件號碼,會計文件中的明細項目號碼,會計文件號碼
    $bschl = ('S'==$f_var['SHKZG'])?'40':'50';
    $ar_sap['y0004']['MANDT']   = $f_var['f_MANDT'];
    $ar_sap['y0004']['BUKRS']   = $f_var['f_BUKRS'];
    $ar_sap['y0004']['GJAHR']   = substr($f_var['f_yymm'],0,4);
    $ar_sap['y0004']['MONAT']   = substr($f_var['f_yymm'],4,2);
    $ar_sap['y0004']['CLASS']   = $f_var['f_CLASS'];
    $ar_sap['y0004']['VOUCHER'] = $f_var['f_VOUCHER']; //001 -> 薪工傳票
    $ar_sap['y0004']['DADAT']   = $f_var['f_DADAT'];
    $ar_sap['y0004']['BELNR_F'] = $f_var['f_BELNR_F'];
    $ar_sap['y0004']['BUZEI']   = $f_var['f_BUZEI'];
    $ar_sap['y0004']['BELNR_A'] = $f_var['f_BELNR_A'];
    $f_var['fv_y0004'] = implode(",",$ar_sap['y0004']);
    $f_var['y0004'][$f_var['fv_y0004']]['MANDT']    = $f_var['f_MANDT'];//用戶端
    $f_var['y0004'][$f_var['fv_y0004']]['BUKRS']    = $f_var['f_BUKRS'];//公司代碼
    $f_var['y0004'][$f_var['fv_y0004']]['GJAHR']    = substr($f_var['f_yymm'],0,4);//會計年度
    $f_var['y0004'][$f_var['fv_y0004']]['MONAT']    = substr($f_var['f_yymm'],4,2);//會計期間
    $f_var['y0004'][$f_var['fv_y0004']]['CLASS']    = $f_var['f_CLASS'];//傳票類別
    $f_var['y0004'][$f_var['fv_y0004']]['VOUCHER']  = $f_var['f_VOUCHER']; //001 -> 薪工傳票//傳票ID
    $f_var['y0004'][$f_var['fv_y0004']]['DADAT']    = $f_var['f_DADAT'];//資料日期
    $f_var['y0004'][$f_var['fv_y0004']]['BELNR_F']  = $f_var['f_BELNR_F'];//前端文件號碼
    $f_var['y0004'][$f_var['fv_y0004']]['BUZEI']    = $f_var['f_BUZEI']; //會計文件中的明細項目號碼
    $f_var['y0004'][$f_var['fv_y0004']]['BELNR_A']  = $f_var['f_BELNR_A'];//會計文件號碼
    $f_var['y0004'][$f_var['fv_y0004']]['BELNR_R']  = $f_var['f_BELNR_R']; //迴轉:會計文件號碼
    $f_var['y0004'][$f_var['fv_y0004']]['SHKZG']    = $f_var['f_SHKZG']; //借S/貸H方指示碼
    $f_var['y0004'][$f_var['fv_y0004']]['BUDAT']    = $f_var['f_BUDAT']; //文件中的過帳日期
    $f_var['y0004'][$f_var['fv_y0004']]['BSCHL']    = $f_var['f_BSCHL']; //過帳碼
    $f_var['y0004'][$f_var['fv_y0004']]['HKONT']    = $f_var['f_HKONT']; //總帳科目
    $f_var['y0004'][$f_var['fv_y0004']]['UMSKZ']    = $f_var['f_UMSKZ']; //特殊總帳指示碼
    $f_var['y0004'][$f_var['fv_y0004']]['KUNNR']    = $f_var['f_KUNNR']; //客戶編號 1
    $f_var['y0004'][$f_var['fv_y0004']]['LIFNR']    = $f_var['f_LIFNR']; //供應商或貸方的帳號
    $f_var['y0004'][$f_var['fv_y0004']]['MWSKZ']    = $f_var['f_MWSKZ']; //營業稅代碼
    $f_var['y0004'][$f_var['fv_y0004']]['GL']       = $f_var['f_GL']; //GL FLAG
    $f_var['y0004'][$f_var['fv_y0004']]['AP']       = $f_var['f_AP']; //AP FLAG
    $f_var['y0004'][$f_var['fv_y0004']]['AR']       = $f_var['f_AR']; //AR FLAG
    $f_var['y0004'][$f_var['fv_y0004']]['TX']       = $f_var['f_TX']; //TX FLAG
    $f_var['y0004'][$f_var['fv_y0004']]['COPA']     = $f_var['f_COPA']; //COPA FLAG
    $f_var['y0004'][$f_var['fv_y0004']]['PA']       = $f_var['f_PA']; //PORTFOLIO FLAG
    $f_var['y0004'][$f_var['fv_y0004']]['KOSTL']    = $f_var['f_KOSTL']; //成本中心
    $f_var['y0004'][$f_var['fv_y0004']]['GSBER']    = $f_var['f_GSBER']; //業務範圍  ADD BY 佳玟 2015.04.02 吳課長說水/電費需要這個欄位
    $f_var['y0004'][$f_var['fv_y0004']]['WAERS']    = "TWD"; //幣別碼
    $f_var['y0004'][$f_var['fv_y0004']]['WRBTR']    = $f_var['f_WRBTR']/100; //文件貨幣金額 upd by 逸凡 2014.05.06 金額需除100 call rfc後才會正確
    $f_var['y0004'][$f_var['fv_y0004']]['LONG_TEXT']= $f_var['f_LONG_TEXT']; //長文
    $f_var['y0004'][$f_var['fv_y0004']]['SGTXT']    = $f_var['f_SGTXT']; //項目內文
    $f_var['y0004'][$f_var['fv_y0004']]['ZUONR']    = $f_var['f_ZUONR']; //指派號碼
    $f_var['y0004'][$f_var['fv_y0004']]['XREF3']    = $f_var['f_XREF3']; //明細項目參考碼
    $f_var['y0004'][$f_var['fv_y0004']]['FKBER']    = $f_var['f_FKBER']; //功能範圍 add by 小樵 20150610 福委會使用
      ECHO $f_var['f_BUKRS'].'-'.$f_var['f_FKBER'].'+++'.'<BR>';
    return;
  }
  // **************************************************************************
  //  函數名稱: u_set_y7()
  //  函數功能: 寫入付款請示單設定
  //  使用方式: u_set_y7($f_var)
  //  程式設計: 逸凡
  //  設計日期: 2013.04.12
  // **************************************************************************
  function u_set_y7(&$f_var) {
    //***************************************************************************//
    //  【YFIGL0007】 存入 SAP 系統
    //***************************************************************************//
    //MANDT, BUKRS,   GJAHR,   MONAT,   CLASS,   VOUCHER,
    //用戶端,公司代碼,會計年度,會計期間,傳票類別,傳票ID ,
    $ar_sap['y0007']['MANDT']   = $f_var['f_MANDT'];
    $ar_sap['y0007']['BUKRS']   = $f_var['f_BUKRS'];
    $ar_sap['y0007']['GJAHR']   = substr($f_var['f_yymm'],0,4);
    $ar_sap['y0007']['MONAT']   = substr($f_var['f_yymm'],4,2);
    $ar_sap['y0007']['CLASS']   = $f_var['f_CLASS'];
    $ar_sap['y0007']['VOUCHER'] = $f_var['f_VOUCHER'];
    $ar_sap['y0007']['WTNOTE']  = $f_var['f_WTNOTE'];
    $ar_sap['y0007']['WTNO']    = $f_var['f_WTNO'];
    $f_var['fv_y0007'] = implode(",",$ar_sap['y0007']);
    $f_var['y0007'][$f_var['fv_y0007']]['MANDT']    = $f_var['f_MANDT'];//用戶端
    $f_var['y0007'][$f_var['fv_y0007']]['BUKRS']    = $f_var['f_BUKRS'];//公司代碼
    $f_var['y0007'][$f_var['fv_y0007']]['GJAHR']    = substr($f_var['f_yymm'],0,4);//會計年度
    $f_var['y0007'][$f_var['fv_y0007']]['MONAT']    = substr($f_var['f_yymm'],4,2);//會計期間
    $f_var['y0007'][$f_var['fv_y0007']]['CLASS']    = $f_var['f_CLASS'];//傳票類別
    $f_var['y0007'][$f_var['fv_y0007']]['VOUCHER']  = $f_var['f_VOUCHER'];//傳票ID
    $f_var['y0007'][$f_var['fv_y0007']]['WTNOTE']   = $f_var['f_WTNOTE']; //水電費註記
    $f_var['y0007'][$f_var['fv_y0007']]['WTNO']     = $f_var['f_WTNO'];//水/電號
    $f_var['y0007'][$f_var['fv_y0007']]['BLNO']     = $f_var['f_BLNO']; //請款單號
    $f_var['y0007'][$f_var['fv_y0007']]['LIFNR']    = $f_var['f_LIFNR']; //供應商或貸方的帳號
    $f_var['y0007'][$f_var['fv_y0007']]['NOTE_BANK']= $f_var['f_NOTE_BANK']; //註記是否是銀行扣繳資料
          $f_var['y0007'][$f_var['fv_y0007']]['KOSTL']    = $f_var['f_KOSTL']; //成本中心
    $f_var['y0007'][$f_var['fv_y0007']]['WAERS']    = "TWD"; //幣別碼
          $f_var['y0007'][$f_var['fv_y0007']]['BUPLA']    = $f_var['f_BUPLA']; //營業處
          $f_var['y0007'][$f_var['fv_y0007']]['GSBER']    = $f_var['f_GSBER']; //業務範圍
          $f_var['y0007'][$f_var['fv_y0007']]['MWSKZ']    = $f_var['f_MWSKZ']; //營業稅代碼
          $f_var['y0007'][$f_var['fv_y0007']]['HKONT_D']  = $f_var['f_HKONT_D']; //總帳科目
    $f_var['y0007'][$f_var['fv_y0007']]['AMT_FEE']  = $f_var['f_AMT_FEE']/100; //費用金額 add by 逸凡 2014.05.06 需除100 call rfc後金額才會正常
    $f_var['y0007'][$f_var['fv_y0007']]['AMT_TAX']  = $f_var['f_AMT_TAX']/100; //進項金額 add by 逸凡 2014.05.06 需除100 call rfc後金額才會正常
    $f_var['y0007'][$f_var['fv_y0007']]['AMT_AP']   = $f_var['f_AMT_AP']/100; //應付金額  add by 逸凡 2014.05.06 需除100 call rfc後金額才會正常
    $f_var['y0007'][$f_var['fv_y0007']]['HKONT_BANK'] = $f_var['f_HKONT_BANK']; //總帳科目
    $f_var['y0007'][$f_var['fv_y0007']]['PAYNO']    = $f_var['f_PAYNO']; //付款請示單號
    $f_var['y0007'][$f_var['fv_y0007']]['BELNR_A']  = $f_var['f_BELNR_A'];//會計文件號碼
    $f_var['y0007'][$f_var['fv_y0007']]['BELNR_F']  = $f_var['f_BELNR_F']; //財務文件號碼
    $f_var['y0007'][$f_var['fv_y0007']]['SGTXT']    = $f_var['f_SGTXT'];//項目內文
    $f_var['y0007'][$f_var['fv_y0007']]['ZUONR']    = $f_var['f_ZUONR']; //指派號碼
    return;
  }
  // **************************************************************************
  //  函數名稱: u_set_y8()
  //  函數功能: 寫入類別傳票明細-COPA
  //  使用方式: u_set_y8($f_var)
  //  程式設計: 逸凡
  //  設計日期: 2013.04.12
  // **************************************************************************
  function u_set_y8(&$f_var) {
    //***************************************************************************//
    //  【YFIGL0008】 存入 SAP 系統
    //***************************************************************************//
    //MANDT, BUKRS,   GJAHR,   MONAT,   CLASS,   VOUCHER,
    //用戶端,公司代碼,會計年度,會計期間,傳票類別,傳票ID ,
    $ar_sap['y0008']['MANDT']   = $f_var['f_MANDT'];
    $ar_sap['y0008']['BUKRS']   = $f_var['f_BUKRS'];
    $ar_sap['y0008']['GJAHR']   = substr($f_var['f_yymm'],0,4);
    $ar_sap['y0008']['MONAT']   = substr($f_var['f_yymm'],4,2);
    $ar_sap['y0008']['CLASS']   = $f_var['f_CLASS'];
    $ar_sap['y0008']['VOUCHER'] = $f_var['f_VOUCHER'];
    $ar_sap['y0008']['DADAT']   = $f_var['f_DADAT'];
    $ar_sap['y0008']['BELNR_F'] = $f_var['f_BELNR_F'];
    $ar_sap['y0008']['BUZEI']   = $f_var['f_BUZEI'];
    $f_var['fv_y0008'] = implode(",",$ar_sap['y0008']);
    $f_var['y0008'][$f_var['fv_y0008']]['MANDT']   = $f_var['f_MANDT'];//用戶端
    $f_var['y0008'][$f_var['fv_y0008']]['BUKRS']   = $f_var['f_BUKRS'];//公司代碼
    $f_var['y0008'][$f_var['fv_y0008']]['GJAHR']   = substr($f_var['f_yymm'],0,4);//會計年度
    $f_var['y0008'][$f_var['fv_y0008']]['MONAT']   = substr($f_var['f_yymm'],4,2);//會計期間
    $f_var['y0008'][$f_var['fv_y0008']]['CLASS']   = $f_var['f_CLASS'];//傳票類別
    $f_var['y0008'][$f_var['fv_y0008']]['VOUCHER'] = $f_var['f_VOUCHER'];//傳票ID
    $f_var['y0008'][$f_var['fv_y0008']]['DADAT']   = $f_var['f_DADAT']; //資料日期
    $f_var['y0008'][$f_var['fv_y0008']]['BELNR_F'] = $f_var['f_BELNR_F']; //前端文件號碼
    $f_var['y0008'][$f_var['fv_y0008']]['BUZEI']   = $f_var['f_BUZEI']; //會計文件中的明細項目號碼
    //$f_var['y0008'][$f_var['fv_y0008']]['KOSTL']   = $f_var['f_KOSTL']; //成本中心
    $f_var['y0008'][$f_var['fv_y0008']]['VKORG']   = $f_var['f_VKORG'];//銷售組織
    $f_var['y0008'][$f_var['fv_y0008']]['VERSI']   = $f_var['f_VERSI']; //計劃版本(CO-PA)
    $f_var['y0008'][$f_var['fv_y0008']]['WAERS']   = "TWD"; //幣別碼
    $f_var['y0008'][$f_var['fv_y0008']]['FRWAE']   = "TWD"; //幣別碼
    $f_var['y0008'][$f_var['fv_y0008']]['VRGAR']   = $f_var['f_VRGAR']; //記錄類型
    $f_var['y0008'][$f_var['fv_y0008']]['WERKS']   = $f_var['f_WERKS']; //工廠
    $f_var['y0008'][$f_var['fv_y0008']]['PRCTR']   = $f_var['f_PRCTR']; //利潤中心
    $f_var['y0008'][$f_var['fv_y0008']]['GSBER']   = $f_var['f_GSBER']; //業務範圍
    $f_var['y0008'][$f_var['fv_y0008']]['KMVKBU']  = $f_var['f_KMVKBU'];//銷售據點
    $f_var['y0008'][$f_var['fv_y0008']]['KDGRP']   = $f_var['f_KDGRP']; //客戶群組
    $f_var['y0008'][$f_var['fv_y0008']]['SPART']   = $f_var['f_SPART']; //產品部
    $f_var['y0008'][$f_var['fv_y0008']]['VTWEG']   = $f_var['f_VTWEG']; //配銷通路
    //$f_var['y0008'][$f_var['fv_y0008']]['KUNNR']   = $f_var['f_KUNNR']; //客戶編號1
    $f_var['y0008'][$f_var['fv_y0008']]['KMVTNR']  = $f_var['f_KMVTNR']; //銷售人員
    //$f_var['y0008'][$f_var['fv_y0008']]['MATNR']   = $f_var['f_MATNR'];//物料號碼
    //$f_var['y0008'][$f_var['fv_y0008']]['VBEL2']   = $f_var['f_VBEL2']; //銷售文件
    //$f_var['y0008'][$f_var['fv_y0008']]['POSN2']   = $f_var['f_POSN2']; //銷售文件項目
    $f_var['y0008'][$f_var['fv_y0008']]['MATKL']   = $f_var['f_MATKL']; //物類群組
    //$f_var['y0008'][$f_var['fv_y0008']]['WW040']   = $f_var['f_WW040']; //產品大類
    $f_var['y0008'][$f_var['fv_y0008']]['WW160']   = $f_var['f_WW160']; //款別
    //$f_var['y0008'][$f_var['fv_y0008']]['WW100']   = $f_var['f_WW100'];//組別
    $f_var['y0008'][$f_var['fv_y0008']]['WW110']   = $f_var['f_WW110']; //車別
    $f_var['y0008'][$f_var['fv_y0008']]['WW120']   = $f_var['f_WW120']; //車號
    $f_var['y0008'][$f_var['fv_y0008']]['WW130']   = $f_var['f_WW130']; //司機
    $f_var['y0008'][$f_var['fv_y0008']]['WW140']   = $f_var['f_WW140']; //派車性質
    //$f_var['y0008'][$f_var['fv_y0008']]['VVQ10']   = $f_var['f_VVQ10']/100; //Q10-銷售數-SOu  ADD BY 佳玟 2014.05.16
    //$f_var['y0008'][$f_var['fv_y0008']]['VVQ20']   = $f_var['f_VVQ20']/100; //Q20-銷售數-STu
    //$f_var['y0008'][$f_var['fv_y0008']]['VVR10']   = $f_var['f_VVR10']/100; //R10-銷貨收入
    $f_var['y0008'][$f_var['fv_y0008']]['VVQ10_ME']   = $f_var['f_VVQ10_ME']; //基礎計量單位
    $f_var['y0008'][$f_var['fv_y0008']]['VVQ20_ME']   = $f_var['f_VVQ20_ME']; //基礎計量單位

    $f_var['y0008'][$f_var['fv_y0008']]['KOKRS']   = $f_var['f_KOKRS']; //成本控制範圍
    $f_var['y0008'][$f_var['fv_y0008']]['ARTNR']   = $f_var['f_ARTNR']; //產品號碼
    $f_var['y0008'][$f_var['fv_y0008']]['PERIO']   = $f_var['f_PERIO'];
    return;
  }
  // **************************************************************************
  //  函數名稱: u_set_y9()
  //  函數功能: 寫入類別傳票明細-COPA
  //  使用方式: u_set_y9($f_var)
  //  程式設計: 逸凡
  //  設計日期: 2013.04.12
  // **************************************************************************
  function u_set_y9(&$f_var) {
    //***************************************************************************//
    //  【YFIGL0009】 存入 SAP 系統
    //***************************************************************************//
    //MANDT, BUKRS,   GJAHR,   MONAT,   CLASS,   VOUCHER,
    //用戶端,公司代碼,會計年度,會計期間,傳票類別,傳票ID ,
    $ar_sap['y0009']['MANDT']   = $f_var['f_MANDT'];
    $ar_sap['y0009']['BUKRS']   = $f_var['f_BUKRS'];
    $ar_sap['y0009']['GJAHR']   = substr($f_var['f_yymm'],0,4);
    $ar_sap['y0009']['MONAT']   = substr($f_var['f_yymm'],4,2);
    $ar_sap['y0009']['CLASS']   = $f_var['f_CLASS'];
    $ar_sap['y0009']['VOUCHER'] = $f_var['f_VOUCHER'];
    $ar_sap['y0009']['BELNR_F'] = $f_var['f_BELNR_F'];
    $ar_sap['y0009']['BUZEI']   = $f_var['f_BUZEI'];
    $ar_sap['y0009']['SEQNO']   = $f_var['f_SEQNO'];
    $f_var['fv_y0009'] = implode(",",$ar_sap['y0009']);
    $f_var['y0009'][$f_var['fv_y0009']]['MANDT']      = $f_var['f_MANDT'];//用戶端
    $f_var['y0009'][$f_var['fv_y0009']]['BUKRS']      = $f_var['f_BUKRS'];//公司代碼
    $f_var['y0009'][$f_var['fv_y0009']]['GJAHR']      = substr($f_var['f_yymm'],0,4);//會計年度
    $f_var['y0009'][$f_var['fv_y0009']]['MONAT']      = substr($f_var['f_yymm'],4,2);//會計期間
    $f_var['y0009'][$f_var['fv_y0009']]['CLASS']      = $f_var['f_CLASS'];//傳票類別
    $f_var['y0009'][$f_var['fv_y0009']]['VOUCHER']    = $f_var['f_VOUCHER'];//傳票ID
    $f_var['y0009'][$f_var['fv_y0009']]['BELNR_F']    = $f_var['f_BELNR_F']; //前端文件號碼
    $f_var['y0009'][$f_var['fv_y0009']]['BUZEI']      = $f_var['f_BUZEI']; //會計文件中的明細項目號碼
    $f_var['y0009'][$f_var['fv_y0009']]['SEQNO']      = $f_var['f_SEQNO']; //不重覆號碼
    $f_var['y0009'][$f_var['fv_y0009']]['BSEG_BUPLA'] = $f_var['f_BSEG_BUPLA']; //營業處
    $f_var['y0009'][$f_var['fv_y0009']]['GSBER']      = $f_var['f_GSBER']; //業務範圍
    $f_var['y0009'][$f_var['fv_y0009']]['GUIDT']      = $f_var['f_GUIDT']; //發票日期
    $f_var['y0009'][$f_var['fv_y0009']]['INVO_STECG'] = $f_var['f_INVO_STECG']; //統一編號
    $f_var['y0009'][$f_var['fv_y0009']]['INVO_NO']    = $f_var['f_INVO_NO']; //發票號碼
    $f_var['y0009'][$f_var['fv_y0009']]['BSCHL']      = $f_var['f_BSCHL']; //過帳碼
    $f_var['y0009'][$f_var['fv_y0009']]['MWSKZ']      = $f_var['f_MWSKZ']; //營業稅代碼
    $f_var['y0009'][$f_var['fv_y0009']]['NOTE_AMT']   = $f_var['f_NOTE_AMT']/100; //匯票額度(本國貨幣)
    $f_var['y0009'][$f_var['fv_y0009']]['TAX_AMT']    = $f_var['f_TAX_AMT']/100; //文件貨幣計的稅基金額
    $f_var['y0009'][$f_var['fv_y0009']]['FINSTAFF']   = $f_var['f_FINSTAFF']; //財務人員
    $f_var['y0009'][$f_var['fv_y0009']]['FINSTNAME']  = $f_var['f_FINSTNAME']; //財務人員姓名
    $f_var['y0009'][$f_var['fv_y0009']]['INDATE']     = $f_var['f_INDATE']; //輸入日期
    $f_var['y0009'][$f_var['fv_y0009']]['INTIME']     = $f_var['f_INTIME']; //輸入時間
    $f_var['y0009'][$f_var['fv_y0009']]['LONG_TEXT']  = $f_var['f_LONG_TEXT']; //長文文字
    $f_var['y0009'][$f_var['fv_y0009']]['ACTSTAFF']   = $f_var['f_ACTSTAFF']; //處理會計員編
    $f_var['y0009'][$f_var['fv_y0009']]['ACTSTNAME']  = $f_var['f_ACTSTNAME']; //處理會計姓名
    $f_var['y0009'][$f_var['fv_y0009']]['PRDATE']     = $f_var['f_PRDATE']; //處理日期
    $f_var['y0009'][$f_var['fv_y0009']]['PRTIME']     = $f_var['f_PRTIME']; //處理時間
    $f_var['y0009'][$f_var['fv_y0009']]['PRMESG']     = $f_var['f_PRMESG']; //處理訊息
    return;
  }
  // **************************************************************************
  //  函數名稱: sl_webflw()
  //  函數功能: 轉web簽核
  //  使用方式: sl_webflw($f_var)
  //  程式設計: 佳玟
  //  設計日期: 2016.03.02
  // **************************************************************************
  function sl_webflw(&$f_var){
    sl_open('docs');
    $fd_db = $f_var['f_db'];
    $fd_tb = $f_var['f_tb'];
    $fd_th_num = $f_var['f_s_num'];
    $fd_class = $f_var['f_class'];
    $fd_subject = $f_var['f_subject'];
    $fd_content = $f_var['f_content'];
    $fd_upfile_path = $f_var['f_upfile_path'];
    $fd_cstatus = '2';
    $fd_cresult = '1';
    $fd_bgid = iif($_SESSION["login_gwbgid"]=='',$f_var['f_bgid'],$_SESSION["login_gwbgid"]);
    $fd_bempno = iif($_SESSION["login_gwempno"]=='',$_SESSION["login_empno"],$_SESSION["login_gwempno"]);
    $fd_bproc = u_showproc();
    $fd_bdate = date("Y-m-d H:i:s");
    $fd_fromip = $_SERVER["REMOTE_ADDR"];
    $vb_ym = date('Ym');
    $fd_nodate = (date("Y")-1911).date("md");
    $f_var['log_yf'] = '';
    $ins_flwh ="insert into docs.webflw_h
                set  s_num    = '',
                     flwno    = ( case
                                    when (select (max(wf2.flwno)+1)
                                                      from   docs.webflw_h as wf2
                                                            where  wf2.flwno like '{$fd_nodate}%') != ''
                                      then (select (max(wf2.flwno)+1)
                                                        from   docs.webflw_h as wf2
                                                              where  wf2.flwno like '{$fd_nodate}%')
                                    else '{$fd_nodate}001' end
                                 ),
                     db       = '{$fd_db}',
                     tb       = '{$fd_tb}',
                     tb_num   = '{$fd_th_num}',
                     class    = '{$fd_class}',
                     subject  = '{$fd_subject}',
                     content  = '{$fd_content}',
                     upfile_path  = '{$fd_upfile_path}',
                     c_status = '2',
                     c_result = '1',
                     b_gid    = '{$fd_bgid}',
                     b_empno  = '{$fd_bempno}',
                     b_proc   = '{$fd_bproc}',
                     b_date   = '{$fd_bdate}',
                     fromip   = '{$fd_fromip}'
               ";
    if( !mysql_query($ins_flwh) ){
      sl_errmsg('<font color="#FF0000"><b>請假單轉簽核異常!! 異常代號: 44</b></font>...請聯絡站長轉達資訊部處理!!(<font color="#FF0000">請告知異常代號</font>)');
      $f_var['log_yf'] .= "Error => ".$ins_flwh."\n";
    }
    else{
      $fd_autoindex = mysql_insert_id(); //新增的s_num
      $sql_flwh = "select *
                   from   docs.webflw_h
                   where  s_num = '{$fd_autoindex}'
                  ";
      //echo $sql_flwh."<br>";
      $res_flwh = mysql_query($sql_flwh);
      $ar_flwh  = mysql_fetch_assoc($res_flwh);

      $sql_itm = " select *
                    from   docs.webflw_item
                    where  d_date = '0000-00-00 00:00:00'
                           and db = '{$ar_flwh['db']}'
                           and tb = '{$ar_flwh['tb']}'
                           and class = '{$ar_flwh['class']}'
                    order by itemno
                  ";
      $res_itm = mysql_query($sql_itm);
      $cnt_itm = mysql_num_rows($res_itm);
      if( $cnt_itm>0 ){
        sl_open('sl');
        while( $ar_itm = mysql_fetch_assoc($res_itm) ){
          $sql_boss ="select pass.name, pass.empno, pass.job_id
                      from   sl.dept
                             left join sl.pass on dept.dept_id = pass.dept_id
                                                  and pass.d_date = '0000-00-00 00:00:00'
                      where  dept.b_gid = '{$fd_bgid}'
                             and dept.d_date = '0000-00-00 00:00:00'
                             and job_id in ('{$ar_itm['job_id']}')
                      union
                      select slpas.name, slpas.empno, slpas.job_id
                      from   sl.dept_group
                             left join sl.pass slpas on sl.dept_group.group_id=slpas.group_id
                                                        and (slpas.job_id = '{$ar_itm['job_id']}'
                                                             or slpas.job_id = '5021'/*副理*/ )
                                                        and substring(slpas.dept_id,1,3) not in ('S13','S18')
                                                        and slpas.d_date = '0000-00-00 00:00:00'
                      where  sl.dept_group.dept_id like CONCAT('%',(select dept_id
                                                                    from   dept
                                                                    where  b_gid='{$fd_bgid}' and
                                                                           stop='N'),'%')
                             and slpas.empno is not null
                             and ( slpas.dept_id in ('S132','S191','S196')
                                   OR slpas.dept_id LIKE '%A%'
                                   OR slpas.dept_id LIKE '%B%'
                                   OR slpas.dept_id LIKE '%C%'
                                   OR slpas.dept_id LIKE '%D%'  )
                             and dept_group.d_date = '0000-00-00 00:00:00'
                     ";
          //echo "<pre>".$sql_boss."</pre>";
          $res_boss = mysql_query($sql_boss);
          $cnt_boss = mysql_num_rows($res_boss);
          if( $cnt_boss>0 ){
            while($ar_boss = mysql_fetch_assoc($res_boss)){
              if( $ar_itm['job_id']==$ar_boss['job_id'] ){
                $fd_boss_emp = $ar_boss['empno'];
              }
              if( '5021'==$ar_boss['job_id'] ){ //油品副理
                $fd_boss5021_emp = $ar_boss['empno'];
              }
            }
          }else{
            $fd_boss_emp = '';
          }

          if( ''==$fd_boss_emp AND '5027'==$ar_itm['job_id'] ){ //油品課長找詢不到, 則塞油品副理
            $fd_boss_emp = $fd_boss5021_emp;
          }
          if( ''!=$fd_boss_emp ){
            $ins_flwb ="insert into docs.webflw_b
                                   (s_num, flwno, itemno, empno, getdate,
                                    b_empno, b_proc, b_date, fromip)
                            values (0,'{$ar_flwh['flwno']}','{$ar_itm['itemno']}','{$fd_boss_emp}','{$fd_bdate}',
                                    '{$fd_bempno}','{$fd_bproc}','{$fd_bdate}','{$fd_fromip}')
                      ";
            //echo "<pre>".$ins_flwb."</pre>";
            if(!mysql_query($ins_flwb)) { //寫入失敗,重新取號
              sl_errmsg('<font color="#FF0000"><b>請假單轉簽核異常!! 異常代號: 835</b></font>...請聯絡站長轉達資訊部處理!!(<font color="#FF0000">請告知異常代號</font>)');
              $f_var['log_yf'] .= "Error => ".$ins_flwb."\n";
            }else{
              $f_var['webflw_no'] = $ar_flwh['flwno'];
              return;
            }

          }
        }
      }
    }

    if( ''!=$f_var['log_yf'] ){
      $f_var['mupload_dir'] = getcwd().'/webflw/';
      if( !$f_var['mupload_dir'] ){
        echo '存放資料夾未正確建立，請洽資訊部人員協助處理。\n';
      }else{
        $up_dir = $f_var['mupload_dir'];
        if(!is_dir($up_dir.$vb_ym)){
          mkdir($up_dir.$vb_ym);
          chmod($up_dir.$vb_ym, 0777);
          $up_dir .= $vb_ym;
        }else{
          $up_dir .= $vb_ym;
        }
        $f_var['mupload_dir'] = $up_dir."/";
      }
      $f_var['fp_yf'] = fopen($f_var['mupload_dir']."{$fd_bgid}_{$fd_bempno}_{$fd_tb}_{$fd_th_num}.txt","w");
      fputs($f_var['fp_yf'],$f_var['log_yf']);
      fclose($f_var['fp_yf']);
    }
    return;

  }

  // **************************************************************************
  //  函數名稱: sl_flwset()
  //  函數功能: web簽核後回寫欄位
  //  使用方式: sl_flwset($f_var)
  //  程式設計: 佳玟
  //  設計日期: 2015.08.21
  // **************************************************************************
  function sl_flwset(&$f_var) {
    sl_open('docs');
    $sql_1 = " select *
               from   webflw_set
               where  db = '{$f_var['f_db']}'
                      and tb = '{$f_var['f_tb']}'
                      and class = '{$f_var['f_class']}'
                      and d_date = '0000-00-00 00:00:00'
             ";
    //echo $sql_1."<br>";
    $rs_1 = mysql_query($sql_1);
    $cnt_1 = mysql_num_rows($rs_1);
    if( $cnt_1>0 ){
      while( $rows_1 = mysql_fetch_assoc($rs_1) ){
        switch( $rows_1['method'] ){
          case '1':
               if( 'gwsle03'==$f_var['f_tb'] AND '11'==$f_var['f_class'] ){

                  $f_var['gwUrl'] = "http://eip.slc.com.tw/~docs/gaswork/admin/t_leavegw_curl.php";
                  $ch = curl_init();
                  curl_setopt($ch, CURLOPT_URL, $f_var['gwUrl']);
                  curl_setopt($ch, CURLOPT_POST, 1 );
                  curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query(
                    array("f_db" => $f_var['f_db'],
                    "f_tb" => $f_var['f_tb'],
                    "f_class" => $f_var['f_class'],
                    "f_tb_num" => $f_var['f_tb_num'])
                    ));    
                  curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0); // 跳過host驗證
                  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0); //規避ssl的證書檢查。
                  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); //output才能回傳回來
                  curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
                  $output = curl_exec($ch);
                  curl_close($ch);
                  /*
                 $t_path = "/home/docs/public_html/gaswork/admin/t_leavegw.php {$f_var['f_db']} {$f_var['f_tb']} {$f_var['f_class']} {$f_var['f_tb_num']} &";
                 $t_popen = popen($t_path,"r");
                 if($t_popen){
                   while (!feof($t_popen)) {
                     $out = fgets($t_popen, 4096);
                   }
                 }
                 pclose($t_popen);    .
                 */
               }else{
                 $fins_to = '';
                 $fins_from = '';
                 $ex_filed = explode(';',$rows_1['field']);
                 foreach($ex_filed as $key1=>$val1) {
                   $ex_ffield = explode('#',$ex_filed[$key1]);
                   $fins_to .= ",{$ex_ffield[0]} ";
                   $fins_from .= ",{$ex_ffield[1]} ";
                 }
                 $fins_to = substr($fins_to,1);
                 $fins_from = substr($fins_from,1);
                 sl_open($rows_1['to_db']);
                 $sql_ins = " insert into {$rows_1['to_db']}.{$rows_1['to_tb']} ({$fins_to})
                              select {$fins_from}
                              from   {$rows_1['from_db']}.{$rows_1['from_tb']}
                              where  {$rows_1['factor']} = '{$f_var['f_tb_num']}'
                            ";
                 echo "<pre>".$sql_ins."</pre>";
                 sl_send_msg('it','1130091','[加油員請假系統]新增gaswork資料',$sql_ins);
//                 if(!mysql_query($sql_ins)) { // 寫入失敗
//                   sl_errmsg('<font color="#FFFFFF"><b>注意!!</b></font>'.$sql_ins.'!!'); //qq:para只丟str不丟font
//                   exit;
//                 }
               }
               break;
          case '2':
               break;
          case '3':
               sl_open($rows_1['to_db']);
               $sql_else = " {$rows_1['field']}
                             where  {$rows_1['factor']} = '{$f_var['f_tb_num']}'
                           ";
               //echo "<pre>".$sql_else."</pre>";
               //exit;
               if(!mysql_query($sql_else)) { // 寫入失敗
                 sl_errmsg('<font color="#FFFFFF"><b>注意!!</b></font>'.$sql_else.'!!'); //qq:para只丟str不丟font
                 exit;
               }
               break;
          default:
               break;
        }
      }
    }
  }
  // **************************************************************************
  //  函數名稱: sl_invoclose()
  //  函數功能: 判斷發票是否關帳
  //  使用方式: sl_invoclose($f_werks,$f_year,$f_month,$prd="PRD")
  //  程式設計: 逸凡
  //  設計日期: 2015.09.09
  // **************************************************************************
  function sl_invoclose($f_werks,$f_year,$f_month,$prd="PRD"){

    $oracle_server = sl_openoci($prd);
    $sql = "select ZCLOSE
            from SAPE68.ZCBCLOSE
            where MANDT = '368'
              and WERKS = '{$f_werks}'
              and GJAHR = '{$f_year}'
              and MONAT = '{$f_month}'
              and ZWORK = 'R'";
    $stid = oci_parse($oracle_server,$sql);
    $result  = oci_execute($stid);
    $ar =  oci_fetch_array($stid, OCI_ASSOC);
    return $ar['ZCLOSE'];
  }
  // **************************************************************************
  //  函數名稱: sl_sap_up_msg()
  //  函數功能: .12改版過度小程式
  //  使用方式: sl_sap_up_msg()
  //  程式設計: supergk
  //  設計日期: 2015.09.18
  // **************************************************************************
  function sl_sap_up_msg(){
    if('0883430'==$_SESSION['login_empno']){

    } else {
      if(date('YmdHis')>'20150918190000'){//||'0883430'==$_SESSION['login_empno']||'S122'==$_SESSION['login_dept_id']
        echo "<script type=text/javascript>";
        echo " if(confirm('此功能需從SAP版更程式區使用，請點確認後請登入版更區，謝謝！！')){
                 document.location.href='http://slt2.slc.com.tw/~docs/eip-new/v3/';
               } else {
                  history.go(-1);
               }
               ";
        echo "</script>";
      }
    }
  }
  // **************************************************************************
  //  函數名稱: u_get_sap_bp_s()
  //  函數功能: 取得成本中心
  //  使用方式: u_get_sap_bp_s()
  //  程式設計: 朝鈞
  //  設計日期: 2015.05.12
  // **************************************************************************
  function u_get_sap_bp_s(){
    sl_open('sl');
    $sql_sap_bp_s = "select distinct
                            dept.b_gid,
                            dept.sap_dept_id,
                            dept.sap_bp_a,
                            dept.sap_bp_s,
                            dept.sap_bp_c,
                            dept.sap_bp
                       from dept
                      where dept.d_date='0000-00-00 00:00:00' and dept_id not like 'S23%' and LENGTH(dept.dept_id) = '4'
                        and dept.stop<>'Y' and dept.sap_dept_id<>''";
    //echo '<pre>'.$sql_sap_bp_s.'</pre>';
    $result_sap_bp_s = mysql_query($sql_sap_bp_s);
    while($row_sap_bp_s = mysql_fetch_array($result_sap_bp_s)){
      //echo $row_sap_bp_s['sap_bp_s'].'+++<br>';
      if ( ''<>trim($row_sap_bp_s['b_gid']) ) {
        if( $row_sap_bp_s['sap_dept_id'] == substr($row_sap_bp_s['sap_bp_s'],0,4) ){
          $sap_bp_s[$row_sap_bp_s['b_gid']]['sap_bp_s'] = $row_sap_bp_s['sap_bp_s'];//油站銷售成本中心
          $sap_bp_s[$row_sap_bp_s['sap_dept_id']]['sap_bp_s'] = $row_sap_bp_s['sap_bp_s'];//油站銷售成本中心
        }
        if( $row_sap_bp_s['sap_dept_id'] == substr($row_sap_bp_s['sap_bp_a'],0,4) ){
          $sap_bp_s[$row_sap_bp_s['b_gid']]['sap_bp_a'] = $row_sap_bp_s['sap_bp_a'];//油站管理成本中心
          $sap_bp_s[$row_sap_bp_s['sap_dept_id']]['sap_bp_a'] = $row_sap_bp_s['sap_bp_a'];//油站管理成本中心
        }
        if( $row_sap_bp_s['sap_dept_id'] == substr($row_sap_bp_s['sap_bp_c'],0,4) ){
          $sap_bp_s[$row_sap_bp_s['b_gid']]['sap_bp_c'] = $row_sap_bp_s['sap_bp_c'];//油站營業成本中心
          $sap_bp_s[$row_sap_bp_s['sap_dept_id']]['sap_bp_c'] = $row_sap_bp_s['sap_bp_c'];//油站營業成本中心
        }
      }
      else {
        //if('LF4Z'==$row_sap_bp_s['sap_bp']){//中壢新倉
        //  $row_sap_bp_s['sap_bp']='LF4J';
        //}
        if( $row_sap_bp_s['sap_dept_id'] == substr($row_sap_bp_s['sap_bp_s'],0,4) ){
          $sap_bp_s[$row_sap_bp_s['sap_dept_id']]['sap_bp_s'] = $row_sap_bp_s['sap_bp_s'];//本業銷售成本中心
        }
        if( $row_sap_bp_s['sap_dept_id'] == substr($row_sap_bp_s['sap_bp_a'],0,4) ){
          $sap_bp_s[$row_sap_bp_s['sap_dept_id']]['sap_bp_a'] = $row_sap_bp_s['sap_bp_a'];//本業管理成本中心
        }
        if( $row_sap_bp_s['sap_dept_id'] == substr($row_sap_bp_s['sap_bp_c'],0,4) ){
          $sap_bp_s[$row_sap_bp_s['sap_dept_id']]['sap_bp_c'] = $row_sap_bp_s['sap_bp_c'];//本業營業成本中心
        }
      }
    }
    $sap_bp_s['L110']['sap_bp_a'] = 'L11000';  // add by 朝鈞 2016.05.09 詢問會計敏鳳, 總公司一律歸屬L11000
    return $sap_bp_s;
  }
  // **************************************************************************
  //  函數名稱: sl_get_resck()
  //  函數功能: 取得代理人
  //  使用方式: sl_get_resck($f_empno,$f_kind,$f_date) 員編，簽呈單別，日期(y/m/d H:i:s)
  //  程式設計: 逸凡
  //  設計日期: 2017.09.26
  // **************************************************************************
  function sl_get_resck($f_empno,$f_kind,$f_date,$resck003='0010'){
    u_openef2k('EF2KWeb');
    $f_resdd020 = '';
    $sql = "select resck006
            from resck
            where resck001 = '{$f_empno}'
              and resck002 ='{$f_kind}'
              and resck003 = '{$resck003}'
              and '{$f_date}' between resck004 and resck005";
    $rs = mssql_query($sql);
    $ar = mssql_fetch_assoc($rs);
    if($ar['resck006'] <> ''){
      $f_resdd020 = $ar['resck006'];
    }
    return $f_resdd020;
  }

  // **************************************************************************
  //  函數名稱: sl_hrmws()
  //  函數功能: hrm ws
  //  使用方式: sl_hrmws($f_var)
  //            $f_var['hrmws']['method']、$f_var['hrmws']['method_item']
  //            $f_var['hrmws']['parm'][] <<參數
  //  回傳值:   $f_var['hrmws'][status] 非0為失敗
  //            $f_var['hrmws'][error] 錯誤訊息
  //            $f_var['hrmws'][rtn][] 回傳ws的資料 (array)
  //  程式設計: 佳玟
  //  設計日期: 2018.01.09
  // **************************************************************************
  function sl_hrmws(&$f_var){
    $f_var['wsUrl'] = "http://slt2.slc.com.tw/~sl/t_hrmws.php";
    //$f_var['wsUrl'] = "http://192.168.1.13/t_hrmws.php";
    //if( '1130091'==$_SESSION["login_empno"] ){
    //  $f_var['wsUrl'] = "http://slt2.slc.com.tw/~sl/t_hrmws.php";
    //}
    $vb_date  = date("Y-m-d H:i:s");
    $vfromip  = $_SERVER["REMOTE_ADDR"];
    $vproc    = u_showproc(); // 程式代號
    $vb_empno = $_SESSION["login_empno"];
    if( strstr('gw_essf03/rpt_gwessf03',$vproc)!=null ){
      $vb_empno = $_SESSION["login_gwempno"];
    }
    $fd_parm = serialize($f_var['hrmws']['parm']);
    //unserialize($a); //unserialize將資料還原成陣列
    sl_open('hrm');
    $use_log_sql_field = "serviceType, method, parameterType, parm, b_empno, b_date, b_proc, fromip";
    $use_log_sql_value = "'{$f_var['hrmws']['serviceType']}',
                          '{$f_var['hrmws']['method']}',
                          '{$f_var['hrmws']['parameterType']}',
                          '{$fd_parm}',
                          '{$vb_empno}','{$vb_date}','{$vproc}','{$vfromip}'";
    if( ''!=$f_var['hrmws']['serviceType'] ){
      $fd_pxml  = "<Request><Access><Authentication user='gp' password=''/></Access>";
      $fd_pxml .= "<RequestContent>
                     <ServiceType>{$f_var['hrmws']['serviceType']}</ServiceType>
                     <Method>{$f_var['hrmws']['method']}</Method>
                   <Parameters>";

      if( 'System.Object'==$f_var['hrmws']['parameterType'] ){
        $fd_pxml .= '<Parameter type="'.$f_var['hrmws']['parameterType'].'" IsArray="1"><DATA>';
        reset($f_var['hrmws']['parm']); // 將?}列的指標指到陣列第一個元素
        while(list($key1,$val1)=each($f_var['hrmws']['parm'])){
          reset($f_var['hrmws']['parm'][$key1]); // 將陣列的指標指到陣列第一個元素
          while(list($key2,$val2)=each($f_var['hrmws']['parm'][$key1])){
            $fd_pxml .=  "<{$key2}>{$f_var['hrmws']['parm'][$key1][$key2]}</{$key2}>";
          }
        }
        $fd_pxml .= '</DATA></Parameter>';
      }else if( ''!=$f_var['hrmws']['parameterType'] and 'System.Object'!=$f_var['hrmws']['parameterType'] ){
        $fd_pxml .= '<Parameter type="'.$f_var['hrmws']['parameterType'].'"><![CDATA[<TWALReg xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:xsd="http://www.w3.org/200 1/XMLSchema">';
        reset($f_var['hrmws']['parm']); // 將陣列的指標指到陣列第一個元素
        while(list($key,$value)=each($f_var['hrmws']['parm'])){
          $fd_pxml .=  "<{$key}>{$f_var['hrmws']['parm'][$key]}</{$key}>";
        }
        $fd_pxml .= "</TWALReg>]]></Parameter>";
      }else{
        reset($f_var['hrmws']['parm']); // ?N陣列的指標指到陣列第一個元素
        while(list($key1,$val1)=each($f_var['hrmws']['parm'])){
          reset($f_var['hrmws']['parm'][$key1]); // 將陣列的指標指到陣列第一個元素
          while(list($key2,$val2)=each($f_var['hrmws']['parm'][$key1])){
              $fd_pxml .=  "<Parameter type='System.{$key2}'>{$f_var['hrmws']['parm'][$key1][$key2]}</Parameter>";
          }
        }
      }
      $fd_pxml .= "</Parameters></RequestContent></Request>";
    }else{
      sl_errmsg('hrm ws 參數異常! 請確認。');
      echo "<pre>";
      print_r($f_var['hrmws']);
      echo "</pre>";
      exit;
    }
    $f_var['hrmws']['pxml'] = $fd_pxml;
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $f_var['wsUrl']);
    curl_setopt($ch, CURLOPT_POST, 1 );
    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query(array("pXml"=>$f_var['hrmws']['pxml'])));
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); //output才能回傳回來
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
    $output = curl_exec($ch);
    if(curl_errno($ch)){
      $f_var['hrmws']['rtn'][] = curl_error($ch);
    }else{
      $output_big5 = mb_convert_encoding($output,'big5','utf-8');
      $status_site_start = strpos($output_big5,'<Execution>');
      $status_site_end = strpos($output_big5,'</Execution>');
      $status_str = substr($output_big5,$status_site_start,($status_site_end-$status_site_start)); //<Execution><Status Code="0" description="" />
      //echo htmlspecialchars($status_str,ENT_QUOTES)."<br>";
      $code_site_start = strpos($status_str,'Code="');  //Code=" 位置
      $code_site_end = 10;
      $code_str = substr($status_str,$code_site_start,$code_site_end); //從Code雙引號開始取5位, 因為不確定DS會傳什麼錯誤代碼,所以暫先取5字元
      $ex_code = explode('"',$code_str);
      $f_var['hrmws']['status'] = $ex_code[1]; //code 錯誤碼 非0則為錯誤
      $description_site_start = strpos($status_str,'description="');  //description=" 位置
      $description_str = substr($status_str,$description_site_start);
      $ex_description = explode('"',$description_str);
      $f_var['hrmws']['error'] = $ex_description[1]; //description 錯誤訊息
      $record_site_start = strpos($output_big5,'<Data>');
      $record_site_end = strpos($output_big5,'</Data>');
      $record_str = substr($output_big5,$record_site_start,$record_site_end);
      if( strstr($record_str,"<Record id=")==null ){
        $ex_data = explode("</Data>",$record_str);
        for($i=0; $i<count($ex_data); $i++){
          if( ''!=strip_tags($ex_data[$i]) ){
            $f_var['hrmws']['rtn'][] = strip_tags($ex_data[$i]);
          }
        }
      }else{
        $ex_record = explode("<Record id=",$record_str);
        for($i=0; $i<count($ex_record); $i++){
          if( ''!=strip_tags($ex_record[$i]) ){
            $ex_row = explode(">",strip_tags($ex_record[$i]));  //"f07ec15ad867430c8ac08e22ed44fb36">特休?琍2017/12/13 上午 12:00:00|08:30|2017/12/13 上午 12:00:00|09:00|PlanState_003|excel導入
            if( !empty($ex_row) ){
              $f_var['hrmws']['rtn'][] = $ex_row[1];  // 特休假|2017/12/13 上午 12:00:00|08:30|2017/12/13 上午 12:00:00|09:00|PlanState_003|excel導入
            }
          }
        }
      }
      if( !empty($f_var['hrmws']['rtn']) ){
        $fv_rtn = implode("<br>",$f_var['hrmws']['rtn']);
      }else{
        $fv_rtn = "";
      }

      //if( !empty($f_var['hrmws']['status']) ){
      sl_open('hrm');
      $use_log_sql = "INSERT INTO hrm.hrmws_log ({$use_log_sql_field},status,error)
                      VALUES ({$use_log_sql_value},'{$f_var['hrmws']['status']}','{$fv_rtn}')
                   ";
      mysql_query($use_log_sql);
      //}
    }
    //echo "<pre>";
    //print_r($f_var['hrmws']);
    //echo "</pre>";
    curl_close($ch);
    //$f_var['hrmws']['serviceType']="";
    //$f_var['hrmws']['method']="";
    //$f_var['hrmws']['parameterType']="";

    return $f_var;
  }
  // **************************************************************************
  //  函數名稱: sl_get_oil_set()
  //  函數功能: 取得油品折扣設定
  //  使用方式: sl_get_oil_set($s_date,$oil_supply) 日期 ，供應商(1or2)1是中油2是台塑
  //  程式設計: 逸凡
  //  設計日期: 2018.12.19
  // **************************************************************************
  function sl_get_oil_set(&$f_var,$s_date,$oil_supply='1') {
    sl_open('gas');
    $sql = "select *
            from oil_dis
            where '{$s_date}' >= s_date
            and oil_supply = '{$oil_supply}'
            order by s_date desc";
    if($_SESSION['it_mode']=='Y' && $_SESSION['login_empno'] == '1130937'){
      echo $sql."<br>";
    }
    // echo $sql;
    $rs = mysql_query($sql);
    $cnt = mysql_num_rows($rs);
    if( $cnt>0 ){
      $ar = mysql_fetch_assoc($rs);
      $f_var['oil']['300'] = $ar['dis_300'];
      $f_var['oil']['200'] = $ar['dis_200'];
      $f_var['oil']['500'] = $ar['dis_500'];
      $f_var['oil']['800'] = $ar['dis_800'];
      $f_var['oil']['e258'] = $ar['exp_dis258'];
      $f_var['oil']['e300'] = $ar['exp_dis300'];

    }
    else{
      sl_send_msg('IT','0883430','油品折扣設定異常！','請檢查<a href="http://eip.slc.com.tw/~gas/oil_dis_set.php?msel=4">油品折扣設定檔</a>是否有誤'. u_showproc());
      sl_send_msg('IT','1130937','油品折扣設定異常！','請檢查<a href="http://eip.slc.com.tw/~gas/oil_dis_set.php?msel=4">油品折扣設定檔</a>是否有誤'. u_showproc());
      sl_send_msg('IT','0883086','油品折扣設定異常！','請檢查<a href="http://eip.slc.com.tw/~gas/oil_dis_set.php?msel=4">油品折扣設定檔</a>是否有誤'. u_showproc());
      sl_send_msg('IT','1430175','油品折扣設定異常！','請檢查<a href="http://eip.slc.com.tw/~gas/oil_dis_set.php?msel=4">油品折扣設定檔</a>是否有誤'. u_showproc());
      exit;
    }
    // return $f_var['oil'];
    // return ;
  }

  // **************************************************************************
  //  函數名稱: sl_re_match()
  //  函數功能: 進行排班、補登、請假、銷假後檢查判斷原異常出勤是否正常
  //  函數功能:     出退勤若檢查已正常才作廢異常紀錄
  //  使用方式: sl_re_match($油站三碼站別,$計薪年月,$加油員身分證字號,$加油員出/退勤日期,$登打異動表人員編號)
  //  程式設計: zihan
  //  設計日期: 2019.01.02
  // **************************************************************************
  function sl_re_match($updgid, $updym='', $updid, $updwkdate, $updempno){ 
    //HRM關閉時所有的功能都會失效所以不能更新紀錄 add by zihan 2019.12.19  
    $vb_date = date("Y-m-d H:i:s");
    $f_var['hrmctrl'] = "";
    $f_var['hrmctrl_ing'] = "";
    sl_open('hrm');
    $sql_tr = "select startime, endtime, reason
                from  hrm.hrmupdatectrl
                where '{$vb_date}' >= startime
                      and chk = 'Y'
                      and d_date = '0000-00-00 00:00:00'
               ";
    $res_tr = mysql_query($sql_tr);
    $qty_tr = mysql_num_rows($res_tr);
    if($qty_tr > 0){
      while($row_tr = mysql_fetch_array($res_tr)){
        $f_var['hrmctrl_ing'] = "<font size='+2' style='font-family:Microsoft JhengHei;'><font style='font-weight:bold;color:red;'>注意!! 鼎新人事系統版更維護中。</font><br>
                             版更時間: <font style='font-weight:bold;color:blue;'>{$row_tr['startime']} ~ {$row_tr['endtime']}</font> <br>
                             版更原因: <font style='font-weight:bold;color:blue;'>{$row_tr['reason']}</font><br>
                             請等版更結束後, 再使用。<br>
                             <font style='font-weight:bold;color:green;'>(鼎新給予的預計結束時間,會有延後的可能)</font></font>";
      } 
    }  
    if( ''!=trim($f_var['hrmctrl_ing']) ){ //add by zihan 2019.12.19 依資訊網頁/權限管理/鼎新版更時間控制設定 控制開放始用時間
      return;
    }else{ 
      $f_var["at_errmsg"] = "";
      $upddproc = "sl_re_match";
      $updddate = date("Y-m-d H:i:s");
      
      sl_openhrmdb("HRMDB");//班別陣列
      $sqlcc = " SELECT Code, Name, ShortName, WorkBeginTime, WorkEndTime, WorkHours, JobHours, Flag, IsDisPlayInEss, IsStop
                 FROM  AttendanceRank
                 WHERE  ( Code LIKE '[0-9]%' OR Code LIKE '%P%' )
                   and Flag = '1' and IsDisPlayInEss = '1' and IsStop = '0'
                 ORDER BY Code
               ";
      $rescc = mssql_query($sqlcc);
      $qtycc = mssql_num_rows($rescc);
      if ( $qtycc>0 ){
        while( $rowcc = mssql_fetch_array($rescc) ){
          $f_var['ClassAR'][$rowcc["Code"]]["time_start"] = $rowcc["WorkBeginTime"];
          $f_var['ClassAR'][$rowcc["Code"]]["time_end"]   = $rowcc["WorkEndTime"];
          $f_var['ClassAR'][$rowcc["Code"]]["hr_rule"]    = $rowcc["WorkHours"];
          $f_var['ClassAR'][$rowcc["Code"]]["class_name"] = $rowcc["Name"];
        }
      }
      
      if ( strlen($updym)==6 ){  //(1) gid+ym
        $query = " SELECT *
                     FROM shiftmatch
                    WHERE d_date ='0000-00-00 00:00:00'
                      AND gid = '{$updgid}'
                      AND ym = '{$updym}'
                      AND deduct < 4
                 ";
      }else{  //(2) gid+id+wkday
        $query = " SELECT *
                     FROM shiftmatch
                    WHERE d_date ='0000-00-00 00:00:00'
                      AND gid = '{$updgid}'
                      AND id = '{$updid}'
                      AND workdt = '{$updwkdate}'
                      AND deduct < 4
                 ";
      }
      sl_open("gaswork");
      //異常
      $res = mysql_query($query);
      $qty = mysql_num_rows($res);
      if( $qty > 0 ){
        while( $row = mysql_fetch_array($res) ){
          $chkError[$row["ym"]][$row["workdt"]][$row["gid"]][$row["s_num"]] = $row["id"];
        }
        //echo "<pre>";  print_r($chkError);  echo "</pre><hr>";
      
        foreach( $chkError as $Erym => $val1 ){
          foreach( $val1 as $Erwkday => $val2 ){
            foreach( $val2 as $Ergid => $val3 ){
              foreach( $val3 as $Ernum => $Eruid ){
                //排班
                $query2 = " SELECT *
                              FROM gwshift
                             WHERE d_date = '0000-00-00 00:00:00'
                               /*AND b_gid = '$Ergid'*/
                               AND id = '$Eruid'
                               AND ym = '$Erym'
                               AND wkdate = '$Erwkday'
                          ";
                $res2 = mysql_query($query2);
                $qty2 = mysql_num_rows($res2);
                if( $qty2 > 0 ){
                  $NewClassCode = $NewClassTimeStart = $NewClassTimeEnd = $NewClassWorkHr = "";
                  $row2 = mysql_fetch_array($res2);
                  if( strlen( $row2["wkclass1"] )>="2" ){  //正確班別
                    $NewClassCode      = $row2["wkclass1"];
                    $NewClassTimeStart = $f_var['ClassAR'][$row2["wkclass1"]]["time_start"]; //如果有排班要再比對出勤時間<=排班開始時間
                    $NewClassTimeEnd   = $f_var['ClassAR'][$row2["wkclass1"]]["time_end"];
                    $NewClassWorkHr    = $f_var['ClassAR'][$row2["wkclass1"]]["hr_rule"];
      
                    //請假
                    $query3 = " SELECT *
                                  FROM gwsle03
                                 WHERE d_date = '0000-00-00 00:00:00'
                                   /*AND b_gid = '$Ergid'*/
                                   AND id = '$Eruid'
                                   AND ( date_s = '$Erwkday' OR date_e = '$Erwkday' )
                              ";
                    $res3 = mysql_query($query3);
                    $qty3 = mysql_num_rows($res3);
                    if( $qty3 > 0 ){              //有沒有請假紀錄都沒關係
                      $NewSleDayStart = $NewSleDayEnd = $NewSleTimeStart = $NewSleTimeEnd = "";
                      $row3 = mysql_fetch_array($res3);
                      $gwsle = "Y";
                      $NewSleDayStart  = $row3["date_s"]; //YYYYMMDD  如果有請假要比對 請假起訖時間 是否與 出勤時間 和 班次時間 有關
                      $NewSleDayEnd    = $row3["date_e"]; //YYYYMMDD
                      $NewSleTimeStart = $row3["time_s"]; //hhii
                      $NewSleTimeEnd   = $row3["time_e"]; //hhii
                      //echo "  $Ergid - $Eruid - $Erwkday($Erym) -> 找到一筆符合的請假紀錄。 <br>";
                    }else{
                      $gwsle = "N";
                    }
                    //出勤
                    $f2gw_wkday = sl_4ymd($Erwkday,"-");
                    $query4 = " SELECT *,
                                       DATE_FORMAT( gw08_s, '%Y%m%d' ) AS wkD1,
                                       DATE_FORMAT( gw08_e, '%Y%m%d' ) AS wkD2,
                                       DATE_FORMAT( gw08_s, '%H%i' )   AS wkT1,
                                       DATE_FORMAT( gw08_e, '%H%i' )   AS wkT2,
                                       DATE_FORMAT( gw07_s, '%Y%m%d' ) AS wkD11,
                                       DATE_FORMAT( gw07_e, '%Y%m%d' ) AS wkD12,
                                       DATE_FORMAT( gw07_s, '%H%i' )   AS wkT11,
                                       DATE_FORMAT( gw07_e, '%H%i' )   AS wkT12,
                                       DATE_FORMAT( gw08_s, '%H:%i' )  AS strwkT1,
                                       DATE_FORMAT( gw08_e, '%H:%i' )  AS strwkT2,
                                       DATE_FORMAT( gw07_s, '%H:%i' )  AS strwkT11,
                                       DATE_FORMAT( gw07_e, '%H:%i' )  AS strwkT12,
                                       DATE_FORMAT( min(gw08_s), '%H:%i' )  AS wktimemin1,
                                       DATE_FORMAT( max(gw08_e), '%H:%i' )  AS wktimemax2,
                                       DATE_FORMAT( min(gw08_s), '%H%i' )  AS wktimeS,
                                       DATE_FORMAT( max(gw08_e), '%H%i' )  AS wktimeE,
                                       sum( gw09) AS wksumhr
                                  FROM gaswork
                                 WHERE d_date = '0000-00-00 00:00:00'
                                   /*AND gw04 = '$Ergid'*/
                                   AND gw02 = '$Eruid'
                                   AND ( ( left(gw08_s,10) between '$f2gw_wkday' and '$f2gw_wkday' ) OR
                                         ( left(gw08_e,10) between '$f2gw_wkday' and '$f2gw_wkday' ) OR
                                         ( ownerdate = '$Erwkday' )
                                       )
                                 GROUP BY  DATE_FORMAT( gw08_s, '%Y%m%d' )
                              ";
                    $res4 = mysql_query($query4);
                    $qty4 = mysql_num_rows($res4);
                    if( $qty4 > 0 ){              //有沒有請假紀錄都沒關係
                      $stimeLESS = $etimeLESS = $wkinoutLESS = -1;
                      while( $row4 = mysql_fetch_array($res4)){
                        //upd by zihan 2019.01.17 使用加總後的紀錄(出勤時間+退勤時間+出勤加總時數)做判斷
                        $stimeLESS   = (date("H",strtotime($NewClassTimeStart))-date("H",strtotime($row4["wktimemin1"])))*60+(date("i",strtotime($NewClassTimeStart))-date("i",strtotime($row4["wktimemin1"])));
                        $etimeLESS   = (date("H",strtotime($row4["wktimemax2"]))-date("H",strtotime($NewClassTimeEnd)))*60+(date("i",strtotime($row4["wktimemax2"]))-date("i",strtotime($NewClassTimeEnd)));
                        $wkinoutLESS = $row4["wksumhr"];
                        //add by zihan 2019.01.28 歸屬日最優先判斷
                        if( $row4["ownerdate"]==$Erwkday && $gwsle == "Y" ){
                          $query5 = "SELECT *,
                                           DATE_FORMAT( gw08_s, '%Y%m%d' ) AS wkD1,
                                           DATE_FORMAT( gw08_e, '%Y%m%d' ) AS wkD2,
                                           DATE_FORMAT( gw08_s, '%H%i' )   AS wkT1,
                                           DATE_FORMAT( gw08_e, '%H%i' )   AS wkT2,
                                           DATE_FORMAT( gw07_s, '%Y%m%d' ) AS wkD11,
                                           DATE_FORMAT( gw07_e, '%Y%m%d' ) AS wkD12,
                                           DATE_FORMAT( gw07_s, '%H%i' )   AS wkT11,
                                           DATE_FORMAT( gw07_e, '%H%i' )   AS wkT12,
                                           DATE_FORMAT( gw08_s, '%H:%i' )  AS strwkT1,
                                           DATE_FORMAT( gw08_e, '%H:%i' )  AS strwkT2,
                                           DATE_FORMAT( gw07_s, '%H:%i' )  AS strwkT11,
                                           DATE_FORMAT( gw07_e, '%H:%i' )  AS strwkT12,
                                           DATE_FORMAT( min(gw08_s), '%H:%i' )  AS wktimemin1,
                                           DATE_FORMAT( max(gw08_e), '%H:%i' )  AS wktimemax2,
                                           DATE_FORMAT( min(gw08_s), '%H%i' )  AS wktimeS,
                                           DATE_FORMAT( max(gw08_e), '%H%i' )  AS wktimeE,
                                           sum( gw09 ) AS wksumhr
                                      FROM gaswork
                                     WHERE d_date = '0000-00-00 00:00:00'
                                       /*AND gw04 = '$Ergid'*/
                                       AND gw02 = '$Eruid'
                                       AND gw09 > 0
                                       AND ( ( left(gw08_s,10) between '$f2gw_wkday' and '$f2gw_wkday' AND flwno <> '' ) OR
                                             ( left(gw08_e,10) between '$f2gw_wkday' and '$f2gw_wkday' AND flwno <> '' ) OR
                                             ( ownerdate = '$Erwkday' )
                                           )
                                     GROUP BY  gw02
                                    ";
                          $res5 = mysql_query($query5);
                          $qty5 = mysql_num_rows($res5);
                          if( $qty5 > 0 ){
                            while( $row5=mysql_fetch_array($res5) ){
                              $stimeLESS   = (date("H",strtotime($NewClassTimeStart))-date("H",strtotime($row5["wktimemin1"])))*60+(date("i",strtotime($NewClassTimeStart))-date("i",strtotime($row5["wktimemin1"])));
                              $etimeLESS   = (date("H",strtotime($row5["wktimemax2"]))-date("H",strtotime($NewClassTimeEnd)))*60+(date("i",strtotime($row5["wktimemax2"]))-date("i",strtotime($NewClassTimeEnd)));
                              $wkinoutLESS = $row5["wksumhr"];
      
                              if( strstr($f_var['ClassAR'][$NewClassCode]["class_name"],"休息") OR
                                  strstr($f_var['ClassAR'][$NewClassCode]["class_name"],"例假") OR
                                  strstr($f_var['ClassAR'][$NewClassCode]["class_name"],"國定") OR
                                  $NewClassCode == "--" ){
                                  $queryupd = " update shiftmatch
                                                   set d_empno = '$updempno',
                                                       d_proc = '$upddproc',
                                                       d_date = '$updddate'
                                                 where s_num = '$Ernum'
                                                   and d_date = '0000-00-00 00:00:00'
                                              ";
                                  sl_open("gaswork");
                                  if( !mysql_query($queryupd) ){
                                    $f_var["at_errmsg"] .= "加油員[休息/例假/國定/空班(--)] 排班出勤已正常，但d_date失敗:<br>$queryupd<br>";
                                  }
                                  //echo " 加油員[休息/例假/國定/空班(--)] 排班出勤已正常，出勤異常編號: $Ernum 結案 <br>";
                              }else{
                                //有可能加班到跨日
                                if( $stimeLESS >= 0 AND $stimeLESS < 30 ){
                                  if( strstr($f_var['ClassAR'][$NewClassCode]["class_name"],"PT") ){
                                    $queryupd = " update shiftmatch
                                                     set d_empno = '$updempno',
                                                         d_proc = '$upddproc',
                                                         d_date = '$updddate'
                                                   where s_num = '$Ernum'
                                                     and d_date = '0000-00-00 00:00:00'
                                                ";
                                    sl_open("gaswork");
                                    if( !mysql_query($queryupd) ){
                                      $f_var["at_errmsg"] .= "PT加油員 排班出勤已正常，但d_date失敗:<br>$queryupd<br>";
                                    }
                                    //echo " PT加油員 排班出勤已正常，出勤異常編號: $Ernum 結案 <br>";
                                  }else{
                                    //echo "<pre> $etimeLESS / $row5[wktimeS] / $row5[wktimeE] / $row5[wkD2] / $row5[wkD1] / $wkinoutLESS  / $NewClassWorkHr  </pre>";
                                    if( ( $etimeLESS>=0 OR ( $row5["wktimeS"]>$row5["wktimeE"] AND $row5["wkD2"]>$row5["wkD1"] ) ) AND $wkinoutLESS>=$NewClassWorkHr ){
                                      $queryupd = " update shiftmatch
                                                       set d_empno = '$updempno',
                                                           d_proc = '$upddproc',
                                                           d_date = '$updddate'
                                                     where s_num = '$Ernum'
                                                       and d_date = '0000-00-00 00:00:00'
                                                  ";
                                      sl_open("gaswork");
                                      if( !mysql_query($queryupd) ){
                                        $f_var["at_errmsg"] .= "月薪加油員 出勤$wkinoutLESS[小] 排班出勤已正常，但d_date失敗:<br>$queryupd<br>";
                                      }
                                      //echo " 月薪加油員 出勤$wkinoutLESS[小] 排班出勤已正常，出勤異常編號: $Ernum 結案 <br>";
                                    }else{
                                      $f_var["at_errmsg"] .=  " 月薪加油員1 出勤$wkinoutLESS[小] 時數不滿最低工時 或 退勤時間異常，不更新資料！！！  <br>";
                                    }
                                  }
                                }else{
                                  if( strstr($f_var['ClassAR'][$NewClassCode]["class_name"],"PT") && $wkinoutLESS>0 ){
                                    $queryupd = " update shiftmatch
                                                     set d_empno = '$updempno',
                                                         d_proc = '$upddproc',
                                                         d_date = '$updddate'
                                                   where s_num = '$Ernum'
                                                     and d_date = '0000-00-00 00:00:00'
                                                ";
                                    sl_open("gaswork");
                                    if( !mysql_query($queryupd) ){
                                      $f_var["at_errmsg"] .= "PT加油員 排班出勤已正常$wkinoutLESS[小]，但d_date失敗:<br>$queryupd<br>";
                                    }
                                    //echo " PT加油員 排班出勤已正常，出勤異常編號: $Ernum 結案 <br>";
                                  }else{
                                    $f_var["at_errmsg"] .= " 異常出勤日期:$Erwkday      班次: $NewClassCode  出勤時數:$wkinoutLESS 小 <br>";
                                    $f_var["at_errmsg"] .= " 上班時間$NewClassTimeStart 與 實際出勤時間".$row5["wktimemin1"]." 相差 ".$stimeLESS." 分，<br>";
                                    $f_var["at_errmsg"] .= " 下班時間$NewClassTimeEnd   與 實際退勤時間".$row5["wktimemax2"]." 相差 ".$etimeLESS." 分，異常出退勤不更新資料！！！ <hr>";
                                      
                                  }  
                                }
      
                              }
      
                            }
                          }
                        }else if( $row4["wkD1"]==$Erwkday ){
                          if( strstr($f_var['ClassAR'][$NewClassCode]["class_name"],"休息") OR
                              strstr($f_var['ClassAR'][$NewClassCode]["class_name"],"例假") OR
                              strstr($f_var['ClassAR'][$NewClassCode]["class_name"],"國定") OR
                              $NewClassCode == "--" ){
                              $queryupd = " update shiftmatch
                                               set d_empno = '$updempno',
                                                   d_proc = '$upddproc',
                                                   d_date = '$updddate'
                                             where s_num = '$Ernum'
                                               and d_date = '0000-00-00 00:00:00'
                                          ";
                              sl_open("gaswork");
                              if( !mysql_query($queryupd) ){
                                $f_var["at_errmsg"] .= "加油員[休息/例假/國定/空班] 排班出勤已正常，但d_date失敗:<br>$queryupd<br>";
                              }
                              //echo " 加油員[休息/例假/國定/空班] 排班出勤已正常，出勤異常編號: $Ernum 結案 <br>";
                          }else{
                            //有可能加班到跨日
                            if( $stimeLESS >= 0 AND $stimeLESS < 30 ){
                              if( strstr($f_var['ClassAR'][$NewClassCode]["class_name"],"PT") ){
                                $queryupd = " update shiftmatch
                                                 set d_empno = '$updempno',
                                                     d_proc = '$upddproc',
                                                     d_date = '$updddate'
                                               where s_num = '$Ernum'
                                                 and d_date = '0000-00-00 00:00:00'
                                            ";
                                sl_open("gaswork");
                                if( !mysql_query($queryupd) ){
                                  $f_var["at_errmsg"] .= "PT加油員 排班出勤已正常，但d_date失敗:<br>$queryupd<br>";
                                }
                                //echo " PT加油員 排班出勤已正常，出勤異常編號: $Ernum 結案 <br>";
                              }else{
                                if( ( $etimeLESS>=0 OR ( $row4["wktimeS"]>$row4["wktimeE"] AND $row4["wkD2"]>$row4["wkD1"] ) ) AND $wkinoutLESS>=$NewClassWorkHr ){
                                  $queryupd = " update shiftmatch
                                                   set d_empno = '$updempno',
                                                       d_proc = '$upddproc',
                                                       d_date = '$updddate'
                                                 where s_num = '$Ernum'
                                                   and d_date = '0000-00-00 00:00:00'
                                              ";
                                  sl_open("gaswork");
                                  if( !mysql_query($queryupd) ){
                                    $f_var["at_errmsg"] .= "月薪加油員 出勤$wkinoutLESS[小] 排班出勤已正常，但d_date失敗:<br>$queryupd<br>";
                                  }
                                  //echo " 月薪加油員 出勤$wkinoutLESS[小] 排班出勤已正常，出勤異常編號: $Ernum 結案 <br>";
                                }else{
                                  $f_var["at_errmsg"] .= " 月薪加油員 出勤$wkinoutLESS[小] 時數不滿最低工時 或 退勤時間異常，不更新資料！！！  <br>";
                                }
                              }
                            }else{
                              if( strstr($f_var['ClassAR'][$NewClassCode]["class_name"],"PT") && $wkinoutLESS>0 ){
                                $queryupd = " update shiftmatch
                                                 set d_empno = '$updempno',
                                                     d_proc = '$upddproc',
                                                     d_date = '$updddate'
                                               where s_num = '$Ernum'
                                                 and d_date = '0000-00-00 00:00:00'
                                            ";
                                sl_open("gaswork");
                                if( !mysql_query($queryupd) ){
                                  $f_var["at_errmsg"] .= "PT加油員 排班出勤已正常$wkinoutLESS[小]，但d_date失敗:<br>$queryupd<br>";
                                }
                                //echo " PT加油員 排班出勤已正常，出勤異常編號: $Ernum 結案 <br>";
                              }else{
                                $f_var["at_errmsg"] .= " 異常出勤日期:$Erwkday      班次: $NewClassCode  出勤時數:$wkinoutLESS 小 <br>";
                                $f_var["at_errmsg"] .= " 上班時間$NewClassTimeStart 與 實際出勤時間".$row4["strwkT11"]." 相差 ".$stimeLESS." 分，<br>";
                                $f_var["at_errmsg"] .= " 下班時間$NewClassTimeEnd   與 實際退勤時間".$row4["strwkT12"]." 相?t ".$etimeLESS." 分，異常出退勤不更新資料！！！ <hr>"; 
                              }
                                
                            }
                          }
                        }else{
                          //echo " 抓到多筆 $Erwkday ，判斷日期不符合，不處理  <br>";
                          //抓不到出勤很可能是空班不用出勤，這裡加上不用出勤的判斷
                          if( strstr($f_var['ClassAR'][$NewClassCode]["class_name"],"休息") OR
                              strstr($f_var['ClassAR'][$NewClassCode]["class_name"],"例假") OR
                              strstr($f_var['ClassAR'][$NewClassCode]["class_name"],"國定") OR
                              $NewClassCode == "--" ){
                              $queryupd = " update shiftmatch
                                               set d_empno = '$updempno',
                                                   d_proc = '$upddproc',
                                                   d_date = '$updddate'
                                             where s_num = '$Ernum'
                                               and d_date = '0000-00-00 00:00:00'
                                          ";
                              sl_open("gaswork");
                              if( !mysql_query($queryupd) ){
                                $f_var["at_errmsg"] .= "【多】加油員[休息/例假/國定/空班(--)] 排班出勤已正常，但d_date失敗:<br>$queryupd<br>";
                              }
                              $f_var["at_errmsg"] .=  "【多】 加油員[休息/例假/國定/空班(--)] 排班出勤已正常，出勤異常編號: $Ernum 結案 <br>";
                          }
                          //有可能大夜班(出勤日為前一天)
                          /*if( $stimeLESS >= 0 AND $stimeLESS < 30 ){
                            if( strstr($f_var['ClassAR'][$NewClassCode]["class_name"],"PT") ){
                              $queryupd = " update shiftmatch
                                               set d_empno = '$updempno',
                                                   d_proc = '$upddproc',
                                                   d_date = '$updddate'
                                             where s_num = '$Ernum'
                                               and d_date = '0000-00-00 00:00:00'
                                          ";
                              sl_open("gaswork");
                              if( !mysql_query($queryupd) ){
                                $f_var["at_errmsg"] .=  "PT加油員 排班出勤已正常，但d_date失敗:<br>$queryupd<br>";
                              }
                              $f_var["at_errmsg"] .=  " PT加油員 排班出勤已正常，出勤異常編號: $Ernum 結案 <br>";
                            }else{
                              if( $etimeLESS>=0 AND $wkinoutLESS>=$NewClassWorkHr ){
                                $queryupd = " update shiftmatch
                                                 set d_empno = '$updempno',
                                                     d_proc = '$upddproc',
                                                     d_date = '$updddate'
                                               where s_num = '$Ernum'
                                                 and d_date = '0000-00-00 00:00:00'
                                            ";
                                sl_open("gaswork");
                                if( !mysql_query($queryupd) ){
                                  $f_var["at_errmsg"] .=  "月薪加油員 出勤$wkinoutLESS[小] 排班出勤已正常，但d_date失敗:<br>$queryupd<br>";
                                }
                                $f_var["at_errmsg"] .= " 月薪加油員 出勤$wkinoutLESS[小] 排班出勤已正常，出勤異常編號: $Ernum 結案 <br>";
                              }else{
                                $f_var["at_errmsg"] .= " 月薪加油員2 出勤$wkinoutLESS[小] 時數不滿最低工時 或 退勤時間異常，不更新資料！！！  <br>";
                              }
                            }
                          }*/
                        }
                      }
      
                    }else{
                      if( strstr($f_var['ClassAR'][$NewClassCode]["class_name"],"休息") OR
                          strstr($f_var['ClassAR'][$NewClassCode]["class_name"],"例假") OR
                          strstr($f_var['ClassAR'][$NewClassCode]["class_name"],"國定") OR
                          $NewClassCode == "--" ){
                          $queryupd = " update shiftmatch
                                           set d_empno = '$updempno',
                                               d_proc = '$upddproc',
                                               d_date = '$updddate'
                                         where s_num = '$Ernum'
                                           and d_date = '0000-00-00 00:00:00'
                                      ";
                          sl_open("gaswork");
                          if( !mysql_query($queryupd) ){
                            $f_var["at_errmsg"] .= "加油員[休息/例假/國定/空班] 排班休假不用出勤，已正常，但d_date失敗:<br>$queryupd<br>";
                          }
                          //echo " 加油員[休息/例假/國定/空班] 排班休假不用出勤，已正常，出勤異常編號: $Ernum 結案 <br>";
                      }else{
                        //$f_var["at_errmsg"] .= "  $Ergid - $Eruid - $Erwkday($Erym) -> 未出勤，不更新資料！！！ <br>";
                        $f_var["at_errmsg"] .= "  $Ergid - $Eruid - $Erwkday($Erym) -> 未出勤，檢查當日是否應出勤： <br>";
                        //抓不到出勤很可能是空班不用出勤，這裡加上不用出勤的判斷
                        if( strstr($f_var['ClassAR'][$NewClassCode]["class_name"],"休息") OR
                            strstr($f_var['ClassAR'][$NewClassCode]["class_name"],"例假") OR
                            strstr($f_var['ClassAR'][$NewClassCode]["class_name"],"國定") OR
                            $NewClassCode == "--" ){
                            $queryupd = " update shiftmatch
                                             set d_empno = '$updempno',
                                                 d_proc = '$upddproc',
                                                 d_date = '$updddate'
                                           where s_num = '$Ernum'
                                             and d_date = '0000-00-00 00:00:00'
                                        ";
                            sl_open("gaswork");
                            if( !mysql_query($queryupd) ){
                              $f_var["at_errmsg"] .= "【未出勤】加油員[休息/例假/國定/空班(--)] 排班出勤已正常，但d_date失敗:<br>$queryupd<br>";
                            }
                            $f_var["at_errmsg"] .= "【未出勤】 加油員[休息/例假/國定/空班(--)] 排班出勤已正常，出勤異常編號: $Ernum 結案 <br>";
                        }
                      }
                    }
      
                  }else{
                    $f_var["at_errmsg"] .= "  $Ergid - $Eruid - $Erwkday($Erym) -> 排班班次無設定 或 設定錯誤排班，不更新資料！！！ <br>";
                  }
      
                }else{
                  $f_var["at_errmsg"] .= "  $Ergid - $Eruid - $Erwkday($Erym) -> 未排班，不更新資料！！！ <br>";
                }
      
              }
            }
          }
        }
      }
      if( strlen($f_var["at_errmsg"])>0 ){
        return  $f_var["at_errmsg"];
      }
    }
    
  }
// **************************************************************************
//  函數名稱: ul_group_dept()
//  函數功能: 指定回傳管理多部門
//  使用方式: ul_group_dept($vsource, $vdate, $vtype, $voutdept, $voutput)
//            $vsource: 員編 或 HRM八碼部門代碼
//            $vdate:  查詢某一時間點該人員狀態 (西元年月日)
//            $vtype: (gas)油品、(mslb)運輸、(slh)物流、(空白)全部
//            $voutdept: (gid)油品三碼、(dept)HRM八碼部門代碼、(sap)sap代碼L開頭四碼
//            $voutput: array=回傳陣列的值,可應用於下拉式選單
//                      where_list=回傳逗點分隔的值,可應用於SQL的where條件
//  程式設計: 佳玟
//  設計日期: 2019.03.05
// **************************************************************************
  function sl_group_dept($vsource,$vdate='',$vtype='',$voutdept='dept',$voutput='array'){
    if( ''==trim($vsource) ){
      return;
    }
    $vsource2 = substr($vsource,8,7);
    sl_openhrmdb("HRMDB");
    if( ''==$vsource ){
      $vsource = $_SESSION['login_empno'];
    }
    if( $vdate>date("Ymd") OR ''==trim($vdate) ){
      $vdate = date("Ymd");
    }
    if( strlen($vsource)>7 AND 'S'==substr($vsource,0,1) ){ //使用部門查管理多部門
      $vsource = substr($vsource,0,8);
      $swh_cte_in = " a.Code = '{$vsource}' ";
    }else{ //使用員編查管理多部門
      $swh_cte_in = " Employee.Code = '{$vsource}' ";
    }
    if( $vdate!=date("Ymd") AND strlen($vsource)==7 ){
      $esql="SELECT Department.Code AS dept_id
             FROM   EmployeeTranslation
                    LEFT JOIN Employee on EmployeeTranslation.EmployeeId = Employee.EmployeeId
                    LEFT JOIN Department on EmployeeTranslation.OldDepartmentId = Department.DepartmentId
             WHERE Employee.Code = '{$vsource}'
                   AND CONVERT(varchar(100), EmployeeTranslation.TranslationDate, 112) > '{$vdate}'
            ";  //查詢是否有調任紀錄
      $eres = mssql_query($esql);
      $eqty = mssql_num_rows($eres);
      if($eqty>0){
        while($erow = mssql_fetch_array($eres)){
          $vdpt = $erow['dept_id'];
          $swh_cte_in = " a.Code = '{$vdpt}' "; //如果有就使用該人員原始部門代號去串管理多部門
        }
      }
    }
    if( strpos($vtype,"/") ){ //有指定多個營運類別
      $ex_type = explode("/",$vtype);
      $swhere = " AND ( ";
      foreach($ex_type as $key => $val) {
        switch($ex_type[$key]){
          case 'gas': //油品
               $arwhere[] = " tb.Code LIKE 'S235%'  ";
               $arwhere[] = " tb.Code LIKE 'S236%'  ";
               $arwhere[] = " tb.Code LIKE 'S238%'  ";
               $arwhere[] = " tb.Code NOT LIKE 'S23_2%'  ";
               break; //運輸
          case 'mslb':
               $arwhere[] = " tb.Code LIKE 'S21%' ";
               break;
          case 'slh': //物流
               $arwhere[] = " tb.Code LIKE 'S22%' ";
               break;
          default:
               break;
        }
      }
      $swhere .= implode(" OR ",$arwhere)." ) ";
    }else{
      switch($vtype){
        case 'gas': //油品
             $swhere = " AND (tb.Code LIKE 'S235%' OR
                              tb.Code LIKE 'S236%' OR
                              tb.Code LIKE 'S238%' )
                         /*AND  tb.Code NOT LIKE 'S23_2%'*/ ";
             break; //運輸
        case 'mslb':
             $swhere = " AND tb.Code LIKE 'S21%' ";
             break;
        case 'slh': //物流
             $swhere = " AND tb.Code LIKE 'S22%' ";
             break;
        default:
             break;
      }
    }
    $vsql="WITH tb(DepartmentId,Code,Name,ShortName,enddate) AS
          (
            SELECT a.DepartmentId, a.Code, a.Name, a.ShortName,
                   ISNULL(CONVERT(varchar, a.BeginEndDate_EndDate, 112),'') AS enddate
            FROM   Employee
                   LEFT JOIN Department as a ON Employee.DepartmentId = a.DepartmentId
            WHERE  {$swh_cte_in}
            UNION ALL
            SELECT b.DepartmentId, b.Code, b.Name, b.ShortName,
                   ISNULL(CONVERT(varchar, b.BeginEndDate_EndDate, 112),'') AS enddate
            FROM   Department as b
                   JOIN tb on b.ParentId = tb.DepartmentId
          )
          SELECT tb.Code as dept_id,
                 tb.Name as dept_name,
                 tb.ShortName as dept_sname
          FROM   tb
          WHERE  1=1 {$swhere}
                 AND (tb.enddate > '{$vdate}'
                      OR tb.enddate = ''
                      OR tb.enddate = '99991231')
          ORDER BY tb.Code
          ";
    if( '1130091'==$_SESSION["login_empno"] ){
	echo "<pre>".$vsql."</pre>";
	}
    //echo "<pre>".$vsql."</pre>";
    $vres = mssql_query($vsql);
    $vqty = mssql_num_rows($vres);
    if($vqty>0){
      while($vrow = mssql_fetch_array($vres)){
        $avalue[]=$vrow['dept_id'];
        $ashow[]=$vrow['dept_sname'];
      }
    }
    //兼任人員
    //echo "★: <pre><font color=red>".$vsource."</font></pre>";
    if( strlen($vsource)==7){
      $psql="SELECT Employee.Code AS emp,
                    Employee.CnName AS name,
                    tb.Code AS dept_id,
                    tb.Name AS dept_name
             FROM   EmployeePartJob
                    LEFT JOIN Employee on EmployeePartJob.EmployeeId = Employee.EmployeeId
                    LEFT JOIN Department as tb on EmployeePartJob.DepartmentId = tb.DepartmentId
             WHERE  Employee.Code = '{$vsource}'
                    AND ISNULL(CONVERT(varchar, EmployeePartJob.BeginDate, 112),'') <='{$vdate}'
                    AND ISNULL(CONVERT(varchar, EmployeePartJob.EndDate, 112),'') >'{$vdate}'
                    AND EmployeePartJob.IsEffective = '1'
                    {$swhere}
             ORDER BY Employee.CnName
            ";
          //echo "<pre>".$psql."</pre>";
      $pres = mssql_query($psql);
      $pqty = mssql_num_rows($pres);
      if($pqty>0){
        while($prow = mssql_fetch_array($pres)){
          $vfd_ptj = $prow['dept_id'];
          $v2sql="WITH tb(DepartmentId,Code,Name,ShortName,enddate) AS
                (
                  SELECT a.DepartmentId, a.Code, a.Name, a.ShortName,
                         ISNULL(CONVERT(varchar, a.BeginEndDate_EndDate, 112),'') AS enddate
                  FROM   Employee
                         LEFT JOIN Department as a ON Employee.DepartmentId = a.DepartmentId
                  WHERE  a.Code = '{$vfd_ptj}'
                  UNION ALL
                  SELECT b.DepartmentId, b.Code, b.Name, b.ShortName,
                         ISNULL(CONVERT(varchar, b.BeginEndDate_EndDate, 112),'') AS enddate
                  FROM   Department as b
                         JOIN tb on b.ParentId = tb.DepartmentId
                )
                SELECT tb.Code as dept_id,
                       tb.Name as dept_name,
                       tb.ShortName as dept_sname
                FROM   tb
                WHERE  1=1 {$swhere}
                       AND (tb.enddate > '{$vdate}'
                            OR tb.enddate = ''
                            OR tb.enddate = '99991231')
                ORDER BY tb.Code
                ";
          //echo "<pre>".$v2sql."</pre>";
          $v2res = mssql_query($v2sql);
          $v2qty = mssql_num_rows($v2res);
          if($v2qty>0){
            while($v2row = mssql_fetch_array($v2res)){
              if(!in_array($v2row['dept_id'],$avalue)){
                $avalue[]=$v2row['dept_id'];
                $ashow[]=$v2row['dept_sname'];
              }
            }
          }
        }
      }
    }else if (strlen($vsource)>7){
      $psql="SELECT Employee.Code AS emp,
                    Employee.CnName AS name,
                    tb.Code AS dept_id,
                    tb.Name AS dept_name
             FROM   EmployeePartJob
                    LEFT JOIN Employee on EmployeePartJob.EmployeeId = Employee.EmployeeId
                    LEFT JOIN Department as tb on EmployeePartJob.DepartmentId = tb.DepartmentId
             WHERE  Employee.Code = '{$vsource2}'
                    AND ISNULL(CONVERT(varchar, EmployeePartJob.BeginDate, 112),'') <='{$vdate}'
                    AND ISNULL(CONVERT(varchar, EmployeePartJob.EndDate, 112),'') >'{$vdate}'
                    AND EmployeePartJob.IsEffective = '1'
                    {$swhere}
             ORDER BY Employee.CnName
            ";
      //echo "<pre>".$psql."</pre>";
      $pres = mssql_query($psql);
      $pqty = mssql_num_rows($pres);
      if($pqty>0){
        while($prow = mssql_fetch_array($pres)){
          $vfd_ptj = substr($prow['dept_id'],0,4)."1".substr($prow['dept_id'],5,3);
          $v2sql="WITH tb(DepartmentId,Code,Name,ShortName,enddate) AS
                (
                  SELECT a.DepartmentId, a.Code, a.Name, a.ShortName,
                         ISNULL(CONVERT(varchar, a.BeginEndDate_EndDate, 112),'') AS enddate
                  FROM   Employee
                         LEFT JOIN Department as a ON Employee.DepartmentId = a.DepartmentId
                  WHERE  a.Code = '{$vfd_ptj}'
                  UNION ALL
                  SELECT b.DepartmentId, b.Code, b.Name, b.ShortName,
                         ISNULL(CONVERT(varchar, b.BeginEndDate_EndDate, 112),'') AS enddate
                  FROM   Department as b
                         JOIN tb on b.ParentId = tb.DepartmentId
                )
                SELECT tb.Code as dept_id,
                       tb.Name as dept_name,
                       tb.ShortName as dept_sname
                FROM   tb
                WHERE  1=1 {$swhere}
                       AND (tb.enddate > '{$vdate}'
                            OR tb.enddate = ''
                            OR tb.enddate = '99991231')
                ORDER BY tb.Code
                ";
          //echo "<pre>".$v2sql."</pre>";
          $v2res = mssql_query($v2sql);
          $v2qty = mssql_num_rows($v2res);
          if($v2qty>0){
            while($v2row = mssql_fetch_array($v2res)){
              if(!in_array($v2row['dept_id'],$avalue)){
                $avalue[]=$v2row['dept_id'];
                $ashow[]=$v2row['dept_sname'];
              }
            }
          }
        }
      }
    }
    $vfield = "";
    switch($voutdept){
      case 'gid': //油品三碼
           $vfield = "b_gid";
           break;
      case 'sap': //sap代碼L開頭四碼
           $vfield = "sap_dept_id";
           break;
      default:
           break;
    }
    if( ""!=$vfield and !empty($avalue) ){
      $fv_dept_in = "'".implode("','",$avalue)."'";
      unset($avalue);
      unset($ashow);
      sl_open('sl');
      $esql = "SELECT {$vfield} as dpt, sname
               FROM   sl.dept
               WHERE  dept_id in ({$fv_dept_in})
                      AND {$vfield} != ''
               ";
      //echo "<pre>".$esql."</pre>";
      $eres = mysql_query($esql);
      $eqty = mysql_num_rows($eres);
      if($eqty>0){
        while($erow = mysql_fetch_array($eres) ){
          $avalue[]=$erow['dpt'];
          $ashow[]=$erow['sname'];
        }
      }
    }

    if( !empty($avalue) ){
      if('where_list'==$voutput){
        $fd_where = str_replace("'',","","'".implode("','",$avalue)."'");
        return($fd_where);
      }
      else{
        return array($avalue,$ashow,count($avalue));
      }
    }else{
      return;
    }

  }
// **************************************************************************
//  函數名稱: sl_getboss()
//  函數功能: 傳回直屬主管(員編,姓名)
//  使用方式: $mar_boss = sl_getboss(員編,直屬幾關)
//            $vemp: 員編
//            $vrank: 直屬幾關
//            $voutput: array=回傳陣列的值
//                      where_list=回傳逗點分隔的值,可應用於SQL的where條件
//            $sys: hrm 人事  flw 電簽  flwc 雲端電簽
//  程式設計: 佳玟
//  設計日期: 2019.03.13
// **************************************************************************
  function sl_getboss($vemp,$vrank='1',$voutput='array',$sys='hrm'){
    if( ''==trim($vemp) ){
      return;
    }
    if('hrm'==$sys){
      sl_openhrmdb("HRMDB");    
    }else if( 'flwc'==$sys ){
      sl_openef2kc('EF2KWeb');
    }else{
      sl_openef2k('EF2KWeb');
    } 
    $vcnt=0;
    $do_emp=$vemp;
    do{
      $vcnt++;
      switch($sys){
        case 'hrm':
             $vsql = "SELECT emp2.Code AS empno,
                             emp2.CnName AS name,
                             Job.Code AS job_id,
                             Job.Name AS job_name
                      FROM   Employee AS emp1
                             LEFT JOIN Employee AS emp2 ON emp1.DirectorId = emp2.EmployeeId
                             LEFT JOIN Job ON emp2.JobId = Job.JobId
                      WHERE  emp1.Code = '{$do_emp}'
                    ";
             break;
        case 'flwc': 
        case 'flw':   
             $vsql = "SELECT rsk2.resak001 AS empno,
                             rsk2.resak002 AS name,
                             resan.resan004 AS job_id,
                             resab.resab002 AS job_name
                      FROM   resak AS rsk1
                             LEFT JOIN resak AS rsk2 ON rsk1.resak013 = rsk2.resak001
                             LEFT JOIN resan ON rsk2.resak001 = resan.resan003
                                                and rsk2.resak015 = resan.resan001
                             LEFT JOIN resab ON resan.resan004 = resab.resab001
                      WHERE  rsk1.resak001 = '{$do_emp}'
                    "; 
             break;
        default:
             break;
      }
      //echo "<pre>{$vsql}</pre>";
      $vres = mssql_query($vsql);
      $vqty = mssql_num_rows($vres);
      if($vqty>0){
        while($vrow = mssql_fetch_array($vres)){
          if( $do_emp==$vrow['empno'] ){ //直屬等於本人
            break;
          }
          $ar_getboss[$vcnt]['empno'] = $vrow['empno'];
          $ar_getboss[$vcnt]['name'] = $vrow['name'];
          $ar_getboss[$vcnt]['job'] = $vrow['job_id'];
          $ar_getboss[$vcnt]['jobn'] = $vrow['job_name'];
          $arempboss[$vrow['empno']] = $vrow['empno'];
          $do_emp=$vrow['empno'];
        }
      }else{
        $vcnt=$vrank; //強制跳出迴圈
      }
    }while($vcnt<$vrank);
    if( !empty($arempboss) ){
      if('where_list'==$voutput){
        $vfd_where = str_replace("'',","","'".implode("','",$arempboss)."'");
        return($vfd_where);
      }
      else{
        return($ar_getboss);
      }
    }else{
      return;
    }

  }
// **************************************************************************
//  函數名稱: sl_getstaff()
//  函數功能: 指定回傳部屬
//  使用方式: sl_getstaff($vemp, $vpass, $vjob, $vopt, $vdates, $vdatee, $voutput)
//            $vemp: 員編 或 HRM八碼部門代碼
//            $vpass: Y / N / (空白)全部 是否能登入EIP網頁
//            $vjob: 指定職務代碼job_id), 多種職務可以用「/」分隔
//            $vopt: (gas)油品、(mslb)運輸、(slh)物流、(空白)全部
//            $vdates: 起始, 某一區間在職人員, 預設為系統日期
//            $vdatee: 終止, 某一區間在職人員, 預設為系統日期
//            $voutput: select=回傳陣列的值,可應用於下拉式選單  value->員編 show->姓名
//                      array=回傳陣列的值,提供的資料比較多,可自行運用
//                      where_list=回傳逗點分隔的值,可應用於SQL的where條件
//  程式設計: 佳玟
//  設計日期: 2019.03.21
// **************************************************************************
  function sl_getstaff($vemp,$vpass='',$vjob='',$vopt='',$vdates='',$vdatee='',$voutput='array'){
    if( ''==trim($vemp) ){
      return;
    }
    //echo "{$vemp}-{$vpass}-{$vjob}-{$vopt}-{$voutput}<br>";
    $swhere = "";
    if( 'Y'==$vpass ){ //限定抓取管理員 (能登入eip)
      $swhere .= " AND SUBSTRING(WorkType_Info.ScName,1,1) = '1' ";
    }else if( 'N'==$vpass ){ //限定抓取非管理員
      $swhere .= " AND SUBSTRING(WorkType_Info.ScName,1,1) <> '1' ";
    }
    if( strpos($vjob,"/") ){ //有指定多個job_id
      $wh_in_job = "'".str_replace("/","','",$vjob)."'";
      $swhere .= " AND Job.Code in ({$wh_in_job}) ";
    }else{
      if( ''!=$vjob ){
        $swhere .= " AND Job.Code = '{$vjob}' ";
      }
    }
    switch($vopt){
      case 'gas': //油品
           $swhere .= " AND Department.Code LIKE 'S23%' ";
           break;
      case 'mslb': //運輸
           $swhere .= " AND Department.Code LIKE 'S21%' ";
           break;
      case 'slh': //物流
           $swhere .= " AND Department.Code LIKE 'S22%' ";
           break;
      default:
           break;
    }
    if( !is_numeric($vdates) AND strlen($vdates)!=8 ){
      $vdates = date("Ymd");
    }
    if( !is_numeric($vdatee) AND strlen($vdatee)!=8 ){
      $vdatee = date("Ymd");
    }
    if( $vdatee<$vdates ){
      $vdates = date("Ymd");
      $vdatee = date("Ymd");
    }

    //$vdate_e = '99991231';
    sl_openhrmdb("HRMDB");
    if( strlen($vemp)>7 ){  //部門
      /*
      $vsqlin = "SELECT a.EmployeeId, a.Code, a.CnName, a.EmployeeStateId, a.JobId, a.PositionId, a.DepartmentId, a.WorkTypeId, a.Date, a.IDCardNo
                 FROM   Department AS d1
                        LEFT JOIN Employee AS a ON d1.DepartmentId = a.DepartmentId
                 WHERE  d1.Code = '{$vemp}'
                 UNION ALL
                 SELECT b.EmployeeId, b.Code, b.CnName, b.EmployeeStateId, b.JobId, b.PositionId, b.DepartmentId, b.WorkTypeId, b.Date, b.IDCardNo
                 FROM   Employee as b
                 JOIN tb on b.DirectorId = tb.EmployeeId
                 
                  WITH tb AS (
                    SELECT dpt.Code , dpt.ShortName, dpt.DepartmentId, dpt.Name
                    FROM   Department dpt where dpt.Code = '{$vemp}'
                    UNION ALL
                    SELECT dpt.Code , dpt.ShortName, dpt.DepartmentId, dpt.Name
                    FROM   Department dpt, tb where dpt.ParentId = tb.DepartmentId
                  )  ";
      */
      $vsql = "   WITH tb AS (
                    SELECT dpt.Code , dpt.ShortName, dpt.DepartmentId, dpt.Name
                    FROM   Department dpt where dpt.Code = '{$vemp}'
                    UNION ALL
                    SELECT dpt.Code , dpt.ShortName, dpt.DepartmentId, dpt.Name
                    FROM   Department dpt, tb where dpt.ParentId = tb.DepartmentId
                  ) 
                  SELECT  
                    Employee.Code AS empno,
                    Employee.CnName AS name,
                    Job.Code AS job_id,
                    Job.Name AS job_name,
                    tb.Code AS dept_id,
                    tb.Name AS dept_name,
                    tb.ShortName AS dept_sname,
                    SUBSTRING(WorkType_Info.ScName,1,1) as work_id,
                    ISNULL(CONVERT(varchar, Employee.Date, 112),'') AS begin_date,
                    ISNULL(CONVERT(varchar, EmployeeDimission.PlanDate, 112),'') AS end_date,
                    Employee.IDCardNo AS id,
                    EmployeeState.Code as state
                  FROM  tb
                    LEFT JOIN Employee ON tb.DepartmentId = Employee.DepartmentId
                    LEFT JOIN EmployeeState on Employee.EmployeeStateId = EmployeeState.EmployeeStateId
                    LEFT JOIN Job ON Employee.JobId = Job.JobId
                    LEFT JOIN Position ON Employee.PositionId = Position.PositionId
                    LEFT JOIN CodeInfo AS WorkType_Info on Employee.WorkTypeId = WorkType_Info.CodeInfoId
                    LEFT JOIN EmployeeDimission on Employee.EmployeeId = EmployeeDimission.EmployeeId
                    LEFT JOIN Department ON tb.DepartmentId = Department.DepartmentId
                  WHERE  
                    tb.Code != '{$vemp}'
                    AND CONVERT(varchar, Employee.Date, 112) <= '{$vdatee}'
                    AND ( ( CONVERT(varchar, EmployeeDimission.PlanDate, 112) < '{$vdatee}'
                         AND CONVERT(varchar, EmployeeDimission.PlanDate, 112) > '{$vdates}' )
                        OR EmployeeState.Code IN ('1001','2001') )
                  {$swhere}
                  ORDER BY Department.Code, Job.Code DESC            
                 ";
    }else{  //員編
      $vsqlin = "SELECT a.EmployeeId, a.Code, a.CnName, a.EmployeeStateId, a.JobId, a.PositionId, a.DepartmentId, a.WorkTypeId, a.Date, a.IDCardNo
                 FROM   Employee AS a
                 WHERE  a.Code = '{$vemp}'
                 UNION ALL
                 SELECT b.EmployeeId, b.Code, b.CnName, b.EmployeeStateId, b.JobId, b.PositionId, b.DepartmentId, b.WorkTypeId, b.Date, b.IDCardNo
                 FROM Employee as b
                 JOIN tb on b.DirectorId = tb.EmployeeId
                 ";
      $vsql="WITH tb(EmployeeId,Code,CnName,EmployeeStateId,JobId,PositionId,DepartmentId,WorkTypeId,Date,IDCardNo) AS
            (
              {$vsqlin}
            )
            SELECT tb.Code AS empno,
                   tb.CnName AS name,
                   Job.Code AS job_id,
                   Job.Name AS job_name,
                   Department.Code AS dept_id,
                   Department.Name AS dept_name,
                   Department.ShortName AS dept_sname,
                   SUBSTRING(WorkType_Info.ScName,1,1) as work_id,
                   ISNULL(CONVERT(varchar, tb.Date, 112),'') AS begin_date,
                   ISNULL(CONVERT(varchar, EmployeeDimission.PlanDate, 112),'') AS end_date,
                   tb.IDCardNo AS id,
                   EmployeeState.Code as state
            FROM   tb
                   LEFT JOIN EmployeeState on tb.EmployeeStateId = EmployeeState.EmployeeStateId
                   LEFT JOIN Job ON tb.JobId = Job.JobId
                   LEFT JOIN Position ON tb.PositionId = Position.PositionId
                   LEFT JOIN Department on tb.DepartmentId = Department.DepartmentId
                   LEFT JOIN CodeInfo AS WorkType_Info on tb.WorkTypeId = WorkType_Info.CodeInfoId
                   LEFT JOIN EmployeeDimission on tb.EmployeeId = EmployeeDimission.EmployeeId
            WHERE  tb.Code NOT LIKE 'S%'
                   AND tb.Code != '{$vemp}'
                   /*AND EmployeeState.Code IN ('1001','2001')*/
                   AND CONVERT(varchar, tb.Date, 112) <= '{$vdatee}'
                   AND ( ( CONVERT(varchar, EmployeeDimission.PlanDate, 112) < '{$vdatee}'
                           AND CONVERT(varchar, EmployeeDimission.PlanDate, 112) > '{$vdates}' )
                         OR EmployeeState.Code IN ('1001','2001') )
                   {$swhere}
            ORDER BY Department.Code, Job.Code DESC, tb.Code
            ";
    }

    //ECHO "<PRE>{$vsql}</PRE>";
    $vres = mssql_query($vsql);
    $vqty = mssql_num_rows($vres);
    if( 'select'==$voutput ){
      $ashow[]="--請選擇--";	//add by 姿俞 2021.01.22 
      $avalue[] ="--";					//add by 姿俞 2021.01.22 
    }
    if($vqty>0){
      while($vrow = mssql_fetch_array($vres)){
      	//upd by 姿俞 2021.01.22 
        $avalue[]=$vrow['empno'];  //upd by 佳玟 2021.05.24 改回empno當key值
        //$ashow[]=trim($vrow['name'])."({$vrow['job_name']})";
        //$avalue[]=trim($vrow['name']);
        $ashow[] =$vrow['empno']."-".trim($vrow['name']);	
        
        $fk_emp = $vrow['empno'];
        $ardata[$fk_emp]['empno'] = $vrow['empno'];  //員編
        $ardata[$fk_emp]['name'] = $vrow['name'];  //姓名
        $ardata[$fk_emp]['job'] = $vrow['job_id'];  //職務代碼
        $ardata[$fk_emp]['jobn'] = $vrow['job_name'];  //職務名稱
        $ardata[$fk_emp]['dept'] = $vrow['dept_id'];  //部門代號
        $ardata[$fk_emp]['deptn'] = $vrow['dept_sname'];  //部門名稱
        $ardata[$fk_emp]['begin_date'] = $vrow['begin_date']; //到職日
        $ardata[$fk_emp]['end_date'] = $vrow['end_date'];  //離職日
        $ardata[$fk_emp]['id'] = $vrow['id'];  //身份證
        $ardata[$fk_emp]['loa'] = "N"; //留職停薪註記
        if( $vrow['state']=='2001' AND  $vrow['end_date']!='' ){
          $ardata[$fk_emp]['loa'] = "Y"; //留職停薪 Y
        }
      }
    }
    if(!empty($avalue)){
      switch($voutput){
        case 'where_list':
             $fd_where = str_replace("'',","","'".implode("','",$avalue)."'");
             return($fd_where);
             break;
        case 'select':
             return array($avalue,$ashow,count($avalue));
             break;
        case 'array':
             return $ardata;
             break;
        default:
             return;
             break;
      }
    }else{
      return;
    }
  }
// **************************************************************************
//  函數名稱: sl_getupdept()
//  函數功能: 回傳上層部門
//  使用方式: sl_getupdept($vdept, $lv, $voutput)
//            $vdept: HRM八碼部門代碼
//            $lv: 往上幾層直屬部門
//            $voutput: array=回傳陣列的值,可應用於下拉式選單
//                      where_list=回傳逗點分隔的值,可應用於SQL的where條件
//  程式設計: 佳玟
//  設計日期: 2019.03.22
// **************************************************************************
  function sl_getupdept($vdept,$lv='1',$voutput='array'){
    if( ''==trim($vdept) ){
      return;
    }
    sl_openhrmdb("HRMDB");
    $vnum = $lv;
    $vdept_do = $vdept;
    do{
      $vsql = "SELECT b.Code as dept_id, b.ShortName as dept_sname,
                      Employee.Code as empno, Employee.CnName as name, Job.Code as job_id
               FROM   Department AS h
                      LEFT JOIN Department AS b ON h.ParentId = b.DepartmentId 
                      LEFT JOIN Employee ON b.Principal = Employee.EmployeeId
                      LEFT JOIN Job on Employee.JobId = Job.JobId
               WHERE  h.Code = '{$vdept_do}'
              ";
      $vres = mssql_query($vsql);
      $vqty = mssql_num_rows($vres);
      if($vqty>0){
        while($vrow = mssql_fetch_array($vres)){
          $avalue[]=$vrow['dept_id'];
          $ashow[]=$vrow['dept_sname'];
          $aboss[]=$vrow['empno']."-".$vrow['name']."-".$vrow['job_id'];
          $vdept_do = $vrow['dept_id']; 
        }
      }
      $vnum--;
    }while($vnum>0);
    if( !empty($avalue) ){
      if('where_list'==$voutput){
        $fd_where = str_replace("'',","","'".implode("','",$avalue)."'");
        return($fd_where);
      }
      else{
        return array($avalue,$ashow,$aboss,count($avalue));
      }
    }
    else{
      return;
    }
  }
  // **************************************************************************
  //  函數名稱: sl_show_cust_info()
  //  函數功能: show kna1 客戶中文
  //  使用方式: sl_show_cust_info($parm,$type,$output)
  //                              $type='code'：顯示客戶代號、$type='name'：顯示客戶中文、$type=''：顯示客戶代號-客戶中文
  //                              $output='array'：輸出陣列、$output=''：輸出字串
  //  程式設計: 朝鈞
  //  設計日期: 2014.07.22
  // **************************************************************************
  function sl_show_cust_info($parm,$type='',$output=''){
    //if(trim($parm)==''){
    //  continue;
    //}
    $parm = mb_convert_encoding($parm,'utf-8','big5');
    //echo $parm."-".$type."-".$output."<br>";
    $f_var['oracle_server'] = sl_openoci('PRD'); // 開啟資料庫
    $sql = "
        select KNA1.KUNNR,
               KNA1.SORTL,
               KNA1.NAME1,
               KNA1.NAME2
          from SAPE68.KNA1
         where KNA1.MANDT = '368'
               AND ( KNA1.KUNNR like '%{$parm}%' or KNA1.NAME1 like '%{$parm}%' or KNA1.NAME2 like '%{$parm}%' )
      order by KNA1.KUNNR
           ";
    if('1430174'==$_SESSION['login_empno']){
      //echo $sql.'<br>';
    }
    $stid = oci_parse($f_var['oracle_server'],$sql);
    if(!oci_execute($stid)){
      sl_errmsg('SQL語法錯誤！請聯絡資訊人員！');
      exit ;
    }else{
      while($row = oci_fetch_assoc($stid)) {
        switch($output){
          case 'array':
            switch($type){
              case 'code':
                $value[$row['KUNNR']] = mb_convert_encoding($row['KUNNR'],'big5','utf-8');
                break;
              case 'name':
                $value[$row['KUNNR']] = mb_convert_encoding($row['NAME1'].$row['NAME2'],'big5','utf-8');
                break;
              default:
                $value[$row['KUNNR']] = mb_convert_encoding($row['KUNNR'].'-'.$row['NAME1'].$row['NAME2'],'big5','utf-8');
                break;
            }
            break;
          default:
            switch($type){
              case 'code':
                $value = mb_convert_encoding($row['KUNNR'],'big5','utf-8');
                break;
              case 'name':
                $value = mb_convert_encoding($row['NAME1'].$row['NAME2'],'big5','utf-8');
                break;
              default:
                $value = mb_convert_encoding($row['KUNNR'].'-'.$row['NAME1'].$row['NAME2'],'big5','utf-8');
                break;
            }
            break;
        }
      }
    }
    if('1430174'==$_SESSION['login_empno']){
    //echo '<pre>';
    //print_r($value);
    //echo '</pre>';
    }
    return $value;
  }
  // **************************************************************************
  //  函數名稱: sl_b_gid()
  //  函數功能: 顯示全油站統計checkbox畫面
  //  使用方式: sl_b_gid($f_var)  新增msel=1(只要放在sl_get($f_var)底下即可)
  //                           ex:sl_get($f_var)
  //                              sl_b_gid($f_var);
  //--------------------------------------------------------------------------
  //                              修改msel=2(必輸)
  //                              $f_var['bgid']：油站代號
  //ex:$f_var['bgid'] => 801,812,816,825,826,827,832,833,808,815,817,819,824,828,829,830,831,802,804,805,807,811,813,821,822,823
  //  程式設計: 小樵
  //  設計日期: 2019.04.18
  // **************************************************************************
  function sl_b_gid($f_var){
    //echo '<pre>';
    //print_r($f_var);
    //echo '</pre>';
    $f_var['depts']['dept'] = array('北區'  ,'第一課','第二課','第三課','中區'  ,'第四課','第五課','第六課','南區'  ,'第七課','第八課','第九課');
    $f_var['depts']['flag'] = array('500500','501001','502002','503003','600600','604004','605005','606006','800800','807007','808008','809009');
    $f_var["tp"]-> newBlock ("tb_script_inpt");
    $f_var["tp"]-> newBlock ("tb_list_slbgid"                     ); //
    //表尾
    $f_var["tp"]-> newBlock ("tv_submit"                     ); //
    $f_var["tp"]-> assign   ("tv_value"     , "儲存"         );
    $f_var["tp"]-> newBlock ("tb_table_bd"        ); //檔身
    if('2'==substr($f_var['msel'],0,1)) { // 2=修改 C=複製 85=驗收簽核,upd by mimi 2011.01.06 採購追蹤 驗收簽核會用到~
		  for($j=0;$j<count($f_var['depts']['dept']);$j++){
        switch($f_var['depts']['dept'][$j]){
          case '全部油站':
          case '北區':
          case '第一課':
          case '第二課':
          case '第三課':
          case '中區':
          case '第四課':
          case '第五課':
          case '第六課':
          case '南區':
          case '第七課':
          case '第八課':
          case '第九課':
            $where_mrg_dept = sl_area_get_dept($f_var['depts']['flag'][$j],'b_gid');
            $mwhere = " and b_gid in ({$where_mrg_dept}) ";
          break;
          default:
            $mwhere = "123";
          break;
        }
        sl_open("gas");
        $query2 = "SELECT sname,b_gid
                   FROM company
                   WHERE stop_flag = ' '
                   and code not in ('701','702')
                   {$mwhere}";
        $result2  = mysql_query($query2);
        $str = '';
        $k = 0;
        $str2 = '';
        while($row2 = mysql_fetch_array($result2)){
          $d = $row2['sname'];
          $v = $row2['b_gid'];
          $b_gid = strstr($f_var['bgid'],$row2['b_gid']);
          if($b_gid <> NULL){
            $str .= "<div style='width:100px;height:20px;float:left;'><input type='checkbox' name='f_name_{$f_var['depts']['flag'][$j]}[]' value='{$v}' checked>".$d.'</div>';
          }else{
            $str .= "<div style='width:100px;height:20px;float:left;'><input type='checkbox' name='f_name_{$f_var['depts']['flag'][$j]}[]' value='{$v}'>".$d.'</div>';
          }
        }
        $gsber[] = $str;
      }
		}else{
      for($j=0;$j<count($f_var['depts']['dept']);$j++){
        switch($f_var['depts']['dept'][$j]){
          case '全部油站':
          case '北區':
          case '第一課':
          case '第二課':
          case '第三課':
          case '中區':
          case '第四課':
          case '第五課':
          case '第六課':
          case '南區':
          case '第七課':
          case '第八課':
          case '第九課':
            $where_mrg_dept = sl_area_get_dept($f_var['depts']['flag'][$j],'b_gid');
            $mwhere = " and b_gid in ({$where_mrg_dept}) ";
          break;
          default:
            $mwhere = "123";
          break;
        }
        sl_open("gas");
        $query2 = "SELECT sname,b_gid
                   FROM company
                   WHERE stop_flag = ' '
                    and code not in ('701','702')
                   {$mwhere}";
        //echo $query2.'<br>';
        $result2  = mysql_query($query2);
        $str = '';
        $k = 0;
        while($row2 = mysql_fetch_array($result2)){
          $d = $row2['sname'];
          $v = $row2['b_gid'];
          //$k++;
          //if($k % 5==0){
		      //  $str .= "<div style='width:100px;height:20px;float:left;'><input type='checkbox' name='f_name_{$f_var['depts']['flag'][$j]}[]' value='{$v}'>".$d.'</div><br/>';
		      //}else{
		        $str .= "<div style='width:100px;height:20px;float:left;'><input type='checkbox' name='f_name_{$f_var['depts']['flag'][$j]}[]' value='{$v}'>".$d.'</div>';
		      //}
        }
        $gsber[] = $str;
      }
    }
    //echo '<pre>';
    //print_r($gsber2);
    //echo '</pre>';
    $f_var["tp"]-> newBlock (  "tb_in_que_hr_tr4"                         );
    $f_var["tp"]-> assign   ("tv_f_name"    , '全區');
    $f_var["tp"]-> assign   ("tv_number4"    , '0'                 );
    for($i=0;$i<count($gsber);$i++){
      //echo substr($f_var['depts']['flag'][$i],0,1);
      if('' != $gsber[$i]){
        switch($f_var['depts']['dept'][$i]){
          case '北區':
          case '中區':
          case '南區':
            $f_var["tp"]-> newBlock (  "tb_in_que_hr_tr"                         );
            $f_var["tp"]-> newBlock (  "tb_in_que_hr_tr2"                         );
            $f_var["tp"]-> assign   ("tv_number"      , substr($f_var['depts']['flag'][$i],0,1)                 );
            $f_var["tp"]-> assign   ("tv_f_name2"      , $f_var['depts']['dept'][$i]                 );
            break;
          default:
            $f_var["tp"]-> newBlock (  "tb_in_que_hr_tr"                         );
            $f_var["tp"]-> newBlock (  "tb_in_que_hr_tr3"                         );
            $f_var["tp"]-> assign   ("tv_number"    , $f_var['depts']['flag'][$i]                 );
    	      $f_var["tp"]-> assign   ("tv_f_name"    , $f_var['depts']['dept'][$i]);
    	      $f_var["tp"]-> assign   ("tv_dept"      , $gsber[$i]                 );
    	      $f_var["tp"]-> assign   ("tv_all_name"  , $f_var['depts']['flag'][$i]);
            break;
        }
      }
    }
  }
// **************************************************************************
//  函數名稱: sl_b_gid2()
//  函數功能: 油站代號轉換中文
//  使用方式: sl_b_gid2($f_ary)
//  備    註: sl_disp_1($f_var)的延伸
//
//  使用方式: b_gid油站代號 ex:301
//  程式設計: 周小樵
//  設計日期: 2019.04.19
// **************************************************************************
function sl_b_gid2($f_ary){
  global $f_var;
  $n_gid = str_replace(",","','",$f_ary);
  $mwhere = " and b_gid in ('{$n_gid}') ";
  sl_open("gas");
  $query3 = "SELECT sname
             FROM company
             WHERE stop_flag = ' '
             {$mwhere}";
  //echo $query3.'<br>';
  $result3  = mysql_query($query3);
  $mfd_value = '　　　　　　　　　　　　　　　　　　　';
  $i=1;
  while($row3 = mysql_fetch_array($result3)){
    $u = fmod($i,10);
    //echo $u.'<br>';
    if($u==0){
      $mfd_value .= $row3['sname'].'<br>'.'　　　　　　　　　　　　　　　　　　　';
    }else{
      $mfd_value .= $row3['sname'].'　　';
    }
    $i++;
  }
  //$mfd_value = substr_replace($mfd_value,'',-1);
  return($mfd_value);
}
// **************************************************************************
//  函數名稱: sl_curl_get_acct()
//  函數功能: 取得損益表資料
//  使用方式: sl_curl_get_acct($s_date,$e_date,$s_werks,$f_kind,$f_time,$f_acct)
//  使用說明:  $s_date => 起始日   ex 20190401
//            $e_date => 終止日   ex 20190430
//            $s_werks=> 查詢單位 ex L201
//            $f_kind => 類別
//              mn => 管理費用
//              sa => 銷售費用
//              ss => 營業外收入
//              so => 營業外支出
//              oi => 營業收入
//              oe => 營業費用
//              oo => 營業成本
//            $f_time => 當月或上月 當月給t 上月給p
//            $f_acct => 會計科目 ex 6188010000
//  程式設計:逸凡
//  設計日期:2019.05.30
// **************************************************************************
function sl_curl_get_acct($s_date,$e_date,$f_werks,$f_kind = 'total',$f_time = '',$f_acct = '',$bukrs = 'LV1'){
  $ch = curl_init();
  
  if('LV1'==$bukrs){
    $acctUrl = "http://slt2.slc.com.tw/~gas/1130937/get_yf5311.php?S_DATE1L={$s_date}&S_DATE1H={$e_date}&S_GSBERL={$f_werks}&S_GSBERH={$f_werks}&kind={$f_kind}&time={$f_time}&acct={$f_acct}&P_BUKRS={$bukrs}";
  }
  elseif('LW1'==$bukrs){
    $acctUrl = "http://slt2.slc.com.tw/~gas/1130937/get_yf5311_lw1.php?S_DATE1L={$s_date}&S_DATE1H={$e_date}&S_GSBERL={$f_werks}&S_GSBERH={$f_werks}&kind={$f_kind}&time={$f_time}&acct={$f_acct}&P_BUKRS={$bukrs}";
  }
  curl_setopt($ch,CURLOPT_URL,$acctUrl);
  //排除網頁header meta資訊
  curl_setopt($ch, CURLOPT_HEADER, false);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 0);
  curl_setopt ($ch, CURLOPT_TIMEOUT, 30);
  $html = curl_exec($ch);
  curl_close($ch);
  return iconv('utf8','big5',$html);
}

function sl_recover(&$f_var,$a,$cut,$str){
  $f_var['explode'] = array('@','#','$');
  // echo $cut;
  $b = explode($f_var['explode'][$cut],$a[1]);
  if( $f_var['explode'][$cut] <> '$'){
    $str .= ";{$b[0]}";
    sl_recover($f_var,$b,$cut+1,$str);
  }
  else{
    $a_str = explode(';',$str);
    if($a_str[0] == "\nsa")
      $a_str[0] = "sa";
    $f_var['recover'][$a_str[0]][$a_str[1]][$a_str[2]][$b[0]] = $b[1];
  }
}
function sl_recover2(&$f_var,$a,$cut,$str){
  $f_var['explode'] = array('@','#');
  // echo $cut;
  $b = explode($f_var['explode'][$cut],$a[1]);
  if( $f_var['explode'][$cut] <> '#'){
    $str .= ";{$b[0]}";
    sl_recover2($f_var,$b,$cut+1,$str);
  }
  else{
    $a_str = explode(';',$str);
    if($a_str[0] == "\noi")
      $a_str[0] = "oi";
    $f_var['recover'][$a_str[0]][$a_str[1]][$b[0]] = $b[1];
  }
}
// **************************************************************************
//  函數名稱: sl_dept_gp()
//  函數功能: 權限群組
//  使用方式: sl_dept_gp($dept)
//  使用說明: $dept => login_hrm_dept_id 
//  程式設計: 佳玟
//  設計日期: 2020.02.12
// **************************************************************************
function sl_dept_gp($vdept, $vjob=''){
  sl_open('it');
  $swhere = "";
  if( ''!=trim($vjob) ){
    $swhere = " AND ( job_id = '{$vjob}' OR job_id = '' ) ";
  }
  $sql = "SELECT GROUP_CONCAT( gp_id ) AS gp_id
          FROM it.ap_deptgroup
          WHERE d_date = '0000-00-00 00:00:00'
                AND dept_id = '{$vdept}'
                {$swhere}
         ";
  $res = mysql_query($sql);
  $qty = mysql_num_rows($res);
  if($qty > 0){
    $row = mysql_fetch_assoc($res);
    return $row['gp_id'];
  }
  else{                    
    return;
  }
}


  // **************************************************************************
  //  函數名稱: sl_eip2flwcd()
  //  函數功能: EIP各式資料轉電子簽核-簽核單,雲端主機
  //  使用方式:
  //  程式設計: 佳玟
  //  設計日期: 2020.08.26
  // **************************************************************************
  function sl_eip2flwcd(&$f_var) {
    //ignore_user_abort(true);
    //set_time_limit(60);
    Global $_SESSION;
    Global $f_var;
    if( ''!=$f_var['f_b_empno'] ){
      $vb_empno   = $f_var['f_b_empno'];
      $vb_name    = '';
      $vb_dept_id = '';
    }else if( ''==$_SESSION["login_empno"] ){
      $vb_empno   = $f_var['f_b_empno'];
      $vb_name    = '';
      $vb_dept_id = '';
    }else{
      $vb_empno   = $_SESSION["login_empno"];
      $vb_name    = $_SESSION["login_name"];
      $vb_dept_id = $_SESSION["login_dept_id"];
    }

    $vb_date    = date("Y-m-d H:i:s");
    $vfromip    = $_SERVER["REMOTE_ADDR"];
    $vproc      = u_showproc(); // 程式代號
    $eipdb       = 'docs';
    $flwdb       = 'EF2KWeb';
    $fp         = fopen("http://eip.slc.com.tw/~sl/eip2flwcd.log", 'a'); //重覆單號頻繁,存log查明
    $mftp_server = "175.98.134.105";         // ftp server


    //sl_chk_rak013($f_var); //確認是否有設定直屬主管
    $vdat1 = 'EF2KWeb';
    sl_openef2kc($vdat1);
    $query2 = "SELECT resak001,resak002,resak015,resal002,resak013
               FROM resak
                 LEFT JOIN resal
                   ON resak015 = resal001
               WHERE resak001 = '{$vb_empno}'
              ";
    $result2 = mssql_query($query2);
    $row2 = mssql_fetch_array($result2);
    if(''==$row2['resak013']){
      echo "<script language='JavaScript'>";
      echo "alert('查無直屬主管，請聯絡總公司人事協助處理。');";
      echo "history.back();";
      echo "</script>";

    }

    sl_openef2kc($flwdb);
    //↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓
    // (報修20585)upd by 佳玟 2013.07.08 不給予權限人員在resak004會以員編+_U顯示
    $u_query = "SELECT resak001,resak002,resak015,resal002,resak013
                FROM resak
                     LEFT JOIN resal
                               ON resak015 = resal001
                WHERE LTrim(RTrim(resak004)) = '{$vb_empno}'
               ";
    $u_res   = mssql_query($u_query);
    $u_count = mssql_num_rows($u_res);
    if( $u_count==0 ){
      echo "<script language='JavaScript'>";
      echo "alert('注意!! 員工: ".$vb_name."(".$vb_empno.") 無電子簽核使用權限。');";
      echo "history.back();";
      echo "</script>";
      exit;
    }
    //↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑

    $fd_stop = 'N'; //是否可轉簽核
    if(is_array($_REQUEST)) {
      while (list($f_fd_name,$f_fd_value) = each($_REQUEST)) {
        //echo "$f_fd_name=$f_fd_value----";
        $f_var[$f_fd_name] = $f_fd_value;
        //if( strstr("f_table/f_b_empno/f_db/f_file_path/f_b_date/f_title/f_type/f_content/f_s_num/f_cnt",$f_fd_name)!=NULL ){
        if( strstr("f_db/f_table/f_b_empno/f_b_date/f_title/f_content/f_s_num",$f_fd_name)!=NULL ){
          if( $f_var[$f_fd_name]=='' ){
            $fd_stop = 'Y';
            $inLog .= "E..流水號: {$f_var['f_s_num']}({$vb_date})..傳入參數, 有空值者: ".$f_fd_name."\n";
          }
        }
      }
    }
    if( 'Y'==$fd_stop ){
      fwrite($fp, $inLog);
      fclose($fp);
      echo "<script language='JavaScript'>";
      echo "alert('注意!! 電簽參數資料有誤!!');";
      echo "history.back();";
      echo "</script>";
      $fd_stop = 'Y'; //是否可轉簽核
    }
    else{
      $count_table= substr_count($f_var['f_table'],'.');
      $ex_table   = explode('.',$f_var['f_table']);
      $fd_table   = iif($count_table==0,$f_var['f_table'],$ex_table[1]);

      $fd_b_empno      = $f_var['f_b_empno'];                                          //建檔者員編
      $fd_sleip2flw001 = 'SL-EIP2FLW';
      $fd_sleip2flw002 = '';
      $fd_sleip2flw003 = str_replace("\"","",$f_var['f_db']);                          //DB
      $fd_sleip2flw004 = str_replace("\"","",$fd_table);                    //table
      $fd_sleip2flw005 = str_replace("\"","",$f_var['f_file_path']);                   //附件路徑
      $fd_sleip2flw006 = date('Y/m/d',strtotime($f_var['f_b_date']));                  //填單日期
      $fd_sleip2flw007 = str_replace("\"","",$f_var['f_title']);                       //主旨
      $fd_sleip2flw008 = str_replace("\"","",$f_var['f_type']);                        //類別
      $fd_sleip2flw009 = str_replace("\"","",str_replace("'","",$f_var['f_content'])); //內容
      $fd_sleip2flw010 = str_replace("\"","",$f_var['f_s_num']);                       //s_num
      $fd_sleip2flw011 = str_replace("\"","",$f_var['f_cnt']);                         //次數 //upd by mimi 2011.06.13 增加轉檔次數
      $fd_cnt=1;
      $ins_key = '';
      $ins_val = '';
      for($i=0;$i<10;$i++){ //upd by mimi 2011.07.01 增加至10個附件
        $fd_file = "f_file".($fd_cnt+$i);
        if($f_var[$fd_file] <> ''){
          //$remote_file[]= $f_var[$fd_file];         // remote的檔案名稱
          $fd_num = str_pad(($fd_cnt+$i),3,'0',STR_PAD_LEFT);
          $ins_key .= " file{$fd_num}, ";
          $ins_val .= " '{$f_var[$fd_file]}', ";
        }
      }

      sl_open($eipdb);
      $sql = "insert into docs.mid2flwcd
                          (sleip2flw001,sleip2flw002,sleip2flw003,sleip2flw004,sleip2flw005,
                           sleip2flw006,sleip2flw007,sleip2flw008,sleip2flw009,sleip2flw010,sleip2flw011, {$ins_key}
                           b_empno,b_dept_id,b_proc,b_date,fromip)
                   values ('{$fd_sleip2flw001}','{$fd_sleip2flw002}','{$fd_sleip2flw003}','{$fd_sleip2flw004}','{$fd_sleip2flw005}',
                           '{$fd_sleip2flw006}','{$fd_sleip2flw007}','{$fd_sleip2flw008}','{$fd_sleip2flw009}','{$fd_sleip2flw010}','{$fd_sleip2flw011}', {$ins_val}
                           '{$fd_b_empno}','{$vb_dept_id}','{$vproc}','{$vb_date}','{$vfromip}')
             ";
      if(!mysql_query($sql)) {
        sl_errmsg("資料儲存失敗!!{$sql}");
        exit;
      }else{
        $fk_snum = mysql_insert_id();
        if( !ftp_connect($mftp_server) ){
          $sql_upd = " update docs.mid2flwcd
                       set    t_result = 'C',
                              t_date = '{$vb_date}',
                              t_proc = '{$vproc}'
                       where  s_num = '{$fk_snum}'
                     ";
          mysql_query($sql_upd);
          echo "<script language='JavaScript'>";
          echo "alert('電子簽核主機FLW連線異常, 請重新使用!!!!');";
          echo "history.back();";
          echo "</script>";
          $fd_stop = 'Y'; //是否可轉簽核
        }
        echo $fd_stop."\n";
        if( 'N'==$fd_stop ){
          $t_path = "/home/sl/public_html/t_mid2flwcd.php {$fk_snum} &";
          $t_popen = popen($t_path,"r");
          if($t_popen){
            while (!feof($t_popen)) {      //?通道里面取得?西
              $out = fgets($t_popen, 4096);
              //echo $out;         //打印出?
            }
          }
          pclose($t_popen);
        }

      }
    }
  }
  
// **************************************************************************
//  函數名稱: sl_sapid2bgid()
//  函數功能: 部門代號轉換 sap -> b_gid
//  使用方式: sl_sapid2bgid($sap_id)
//  程式設計: 姿俞
//  設計日期: 2020.09.25
// **************************************************************************
  function sl_sapid2bgid($sap_id) {
  	sl_open('gas');
    $query = "select b_gid, sname
                from company
               where sap_dept_id = '{$sap_id}'
      					and d_date = '0000-00-00 00:00:00'
             ";
		//echo $query;
    //exit;
    $result = mysql_query($query);
    $row    = mysql_fetch_array($result);
    $b_gid = $row['b_gid'];

  	return $b_gid;
  }
  // **************************************************************************
  //  函數名稱: sl_cn_openef2k()
  //  函數功能: 【地端】電子簽呈地端雲端切換, 需要有close db的動作
  //  使用方式: sl_cn_openef2k($vdat)
  //  程式設計: 佳玟
  //  設計日期: 2020.11.11
  // **************************************************************************  
  function sl_cn_openef2k($vdat) {
    $msdb = mssql_connect("flow.slc.com.tw","sa","s9704") or die("資料庫連結失敗!!");
    //$msdb = mssql_connect("192.168.2.190","sa","s9704") or die("資料庫連結失敗!!");
    mssql_select_db($vdat) or die("無法讀取資料庫!!");
    return $msdb;
  }
  // **************************************************************************
  //  函數名稱: sl_cn_openef2kc()
  //  函數功能: 【雲端】電子簽呈地端雲端切換, 需要有close db的動作
  //  使用方式: sl_cn_openef2kc($vdat)
  //  程式設計: 佳玟
  //  設計日期: 2020.11.11
  // ************************************************************************** 
  function sl_cn_openef2kc($vdat) { //add by 佳玟 2020.08.26 雲端電簽主機
    //$msdb = mssql_connect("flow1.slc.com.tw","sa","s9704") or die("資料庫連結失敗!!");
    $msdb = mssql_connect("175.98.134.105","sa","s9704") or die("資料庫連結失敗!!");
    mssql_select_db($vdat) or die("無法讀取資料庫!!");
    return $msdb;
  }
  // **************************************************************************
  //  函數名稱: sl_cn_delflw()
  //  函數功能: 電簽抽單-地端
  //  使用方式: sl_cn_delflw(單別,單號)
  // **************************************************************************
  function sl_cn_delflw($fv_resdz001,$fv_resdz002,$vcon='flw',$vtb='EF2KWeb'){
      $ms_date = date("Y/m/d H:i:s");
      if( 'flw'==$vcon ){
        $fndb = sl_cn_openef2k($vtb); 
      }else{
        $fndb = sl_cn_openef2kc($vtb); 
      }
      $sql_sda = "select resda022
                  from resda
                  where resda001 = '{$fv_resdz001}'
                        and resda002 = '{$fv_resdz002}'";
      $result_sda = mssql_query($sql_sda);
      $a_sda = mssql_fetch_assoc($result_sda);
      if( $a_sda['resda022'] == '' ){
        $fv_resda022 = '0000-0000-0000';
      }
      else{
        $fv_resda022 = "{$a_sda['resda022']};0000-0000-0000";
      }
      $sql_d1 = "update resda
                 set    resda019 = '{$ms_date}',
                        resda020 = 4,
                        resda021 = 4,
                        resda022 = '{$fv_resda022}'
                 WHERE resda001 = '{$fv_resdz001}' 
                       AND resda002 = '{$fv_resdz002}'
                ";
      $sql_d2 = " update resdc
                  set    resdc007 = 11,
                         resdc008 = 9
                  WHERE resdc001 = '{$fv_resdz001}' 
                  AND resdc002 = '{$fv_resdz002}'
                ";
      $sql_d3 = " update resdd
                  set    resdd014 = 11,
                         resdd015 = 9,
                         resdd902 = resdd900,
                         resdd903 = '{$ms_date}'
                  WHERE resdd001 = '{$fv_resdz001}' 
                        AND resdd002 = '{$fv_resdz002}'
                ";
      if(!mssql_query($sql_d1)){
        echo "upd resda error!! .. <pre>{$sql_d1}</pre>"; 
        exit;
      }
      if(!mssql_query($sql_d2)){
        echo "upd resdc error!! .. <pre>{$sql_d2}</pre>";
        exit;
      }
      if(!mssql_query($sql_d3)){
        echo "upd resdd error!! .. <pre>{$sql_d3}</pre>";
        exit;
      }
      mssql_close($fndb);
      return;
  }
  // **************************************************************************
  //  函數名稱: sl_cn_getresck()
  //  函數功能: 查詢是否有代理人 (電簽地端雲端切換使用)
  //  使用方式: sl_cn_getresck($f_empno,$f_kind,$f_date,$resck003='0010',$vcon='flw')
  //           員編, 電簽單別, 日期('Y/m/d H:i:s')
  //  程式設計: 佳玟
  //  設計日期: 2020.11.11
  // **************************************************************************
  function sl_cn_getresck($f_empno,$f_kind,$f_date,$resck003='0010',$vcon='flw',$vtb='EF2KWeb'){
      $fn_flwDB = $vtb;
      if( 'flw'==$vcon ){
        $fndb = sl_cn_openef2k($fn_flwDB);
      }
      else{
        $fndb = sl_cn_openef2kc($fn_flwDB);  
      }
      $f_resdd020 = '';
      $sql = "select resck006
              from resck
              where resck001 = '{$f_empno}'
                and resck002 ='{$f_kind}'
                and resck003 = '{$resck003}'
                and '{$f_date}' between resck004 and resck005";
      //echo "<pre><font color=blue>{$sql}</font></pre>";
      $rs = mssql_query($sql);
      $ar = mssql_fetch_assoc($rs);
      if($ar['resck006'] <> ''){
        $f_resdd020 = $ar['resck006'];
      }
      mssql_close($fndb);
      return $f_resdd020;
  }
  // **************************************************************************
  //  函數名稱: sl_else2flw()
  //  函數功能: 非sleip2flw電簽轉呈(請假單、加班單....等等)
  //  使用方式: sl_else2flw($f_var, $vcon)
  //           $f_var[f_flwType] => 單別
  //           $f_var['flw']['f_b_empno'] => 申請人
  //           $f_var['flw']['f_field'][xxxxx] => 主要table各種欄位 e.g. sla015003 員編 
  //           $f_var['flw']['f_title'] => 主旨
  //           $f_var['flw']['f_resch001'] => 流程關卡
  //           $vcon => flw 地端電子簽呈、flwc 雲端電子簽呈
  //  程式回饋: $f_var['rtn']['code'] => 0   非0為不成功
  //           $f_var['rtn']['meg'] => 轉呈後的系統訊息
  //  程式設計: 佳玟
  //  設計日期: 2020.11.11
  // **************************************************************************
  function sl_else2flw($f_var,$vcon='flw',$vtb='EF2KWeb'){
    //$f_var[f_flwType] //單別
    //$f_var['flw']['f_b_empno'] //申請人
    //$f_var['flw']['f_field'][xxxxx]  主要table各種欄位
    //$f_var['flw']['f_title'] 主旨
    //$f_var['flw']['f_resch001'] 流程關卡
    $fd_pre_flwNum = '';
    if( ''!=$f_var['f_flwNum'] ){
      $fd_pre_flwNum = $f_var['f_flwNum'];
    }
    $fn_flwDB = $vtb;
    $fn_flwTB = str_replace("-","",strtolower($f_var['f_flwType']));
    if( 'SL-D001'==$f_var['f_flwType'] ){
      $fn_flwTB = 'sl_d001';
    }
    $fn_date = date('Y/m/d H:i:s');
    if( 'flw'==$vcon ){
      $fndb = sl_cn_openef2k($fn_flwDB);
      $mftp_server  = "flow.slc.com.tw";      // ftp server
      $mftp_user    = "it";                   // ftp user name
      $mftp_pass    = "sl85";                 // ftp user password
    }
    else if( 'flwc'==$vcon ){
      $fndb = sl_cn_openef2kc($fn_flwDB);  
      $mftp_server  = "175.98.134.105";      // ftp server
      //$mftp_server  = "flow1.slc.com.tw";
      $mftp_user    = "it";                   // ftp user name
      $mftp_pass    = "sl85";                 // ftp user password
    }
    //echo $mftp_server."<br>";
    $fn_test = 'N'; //是否測試 Y 測試  N 正式
    if( 'Y'==$fn_test ){
      echo "<pre>";
      print_r($f_var['flw']);
      echo "</pre>";
    }
    $f_var['rtn']['code'] = '0';
    $f_var['rtn']['meg'] = "已成功轉出電子簽呈!";
    //----------------------------------------------
    //抓取直屬主管
    //----------------------------------------------
    $query2 = "SELECT resak001,resak002,resak015,resal002,resak013
               FROM   {$fn_flwDB}..resak
                      inner JOIN resal ON resak015 = resal001
               WHERE resak001 = '{$f_var['flw']['f_b_empno']}'
              ";
    $result2 = mssql_query($query2);
    $row2 = mssql_fetch_array($result2);
    $fd_resak015 = $row2['resak015'];  //FLW-部門代號
    $fd_resal002 = $row2['resal002'];  //FLW-部門名稱
    $fd_resak013 = $row2['resak013'];  //FLW-直屬主管
    //----------------------------------------------
    // 抓取單號
    //----------------------------------------------
    $query_iNum = "INSERT INTO {$fn_flwDB}..resdz (resdz001,resdz002) 
                   SELECT resdz001 AS resdz001,
                          RIGHT(REPLICATE('0', 10) + CAST((MAX(resdz002)+1) as NVARCHAR), 10) AS resdz002
                   FROM   {$fn_flwDB}..resdz
                   WHERE  resdz001 = '{$f_var['f_flwType']}'
                   GROUP BY resdz001 ";
    if( 'Y'==$fn_test ){
      echo "<pre>{$query_iNum}</pre>";
    }
    else{
      if( !mssql_query($query_iNum) ){
        $f_var['rtn']['code'] = '1';
        $f_var['rtn']['meg'] = "抓取單號失敗!<pre>{$query_iNum}</pre>";
        return;  
      }
    }
  
    $query3 = "SELECT top 1 resdz001,resdz002
               FROM {$fn_flwDB}..resdz
               where resdz001 = '{$f_var['f_flwType']}'
               order by resdz002 DESC
              ";  
    $result3 = mssql_query($query3);
    $row3 = mssql_fetch_array($result3);
    $f_var['f_flwNum'] = $row3['resdz002']; //FLW-單號
    //----------------------------------------------
    // 寫入單別主要table
    //----------------------------------------------
    $f_var['flw']['f_field'][$fn_flwTB.'001'] = $f_var['f_flwType'];
    $f_var['flw']['f_field'][$fn_flwTB.'002'] = $f_var['f_flwNum'];
    $f_var['flw']['f_field'][$fn_flwTB.'900'] = $f_var['flw']['f_b_empno'];
    $f_var['flw']['f_field'][$fn_flwTB.'901'] = $fn_date;
    $f_var['flw']['f_field'][$fn_flwTB.'904'] = $fd_resak015;
    if($f_var["f_flwType"]== 'SL-A016'){
      $f_var['flw']['f_field'][$fn_flwTB.'902'] = $f_var['flw']['f_b_empno'];
      $f_var['flw']['f_field'][$fn_flwTB.'903'] = $fn_date;
      $f_var['flw']['f_field'][$fn_flwTB.'905'] = $fd_resak015;
    }
    $ar_sql[] = "insert into {$fn_flwDB}..{$fn_flwTB} ( ".implode(",",array_keys($f_var['flw']['f_field']))." )
                 values ( '".implode("','",$f_var['flw']['f_field'])."' )";
    //----------------------------------------------
    // resda 表單流程異動主檔 (RESDA)
    //----------------------------------------------
    $vins_fd2    =" resda001,resda002,resda015,resda016,resda017,resda018,resda019,resda020,resda021,resda022,resda023 ";
    $vins_value2 =" '{$f_var['f_flwType']}','{$f_var['f_flwNum']}','{$fn_date}','{$f_var['flw']['f_b_empno']}','{$f_var['flw']['f_b_empno']}','{$fn_date}','','2','1','','' ";
    $vins_fd2   .=" ,resda030,resda031,resda032,resda033,resda034,resda900,resda901,resda904 ";
    $vins_value2.=" ,'','{$f_var['flw']['f_title']}','1','Y','','{$f_var['flw']['f_b_empno']}','{$fn_date}','{$fd_resak015}' ";
    $query4 = "SELECT resca.*
               FROM   {$fn_flwDB}..resca
               where resca001 = '{$f_var['f_flwType']}'
              ";
    $result4 = mssql_query($query4);
    $row4 = mssql_fetch_array($result4);
    ksort($row4);
    while (list($key4,$value4) = each($row4)){
      if (ereg("^[r]",substr($key4,0,1))){
          switch ($key4) {
            case "resca004": //流程種類
              $vins_fd2   .=",resda003";
              $vins_value2.=",'{$value4}'";
              break;
            case "resca005": //自動編號?
            case "resca017": //填表人可否變更表單性質?
              break;
            case "resca006": //逾時警示開關
            case "resca007": //逾時警示-填表人
            case "resca008": //逾時警示-逾時人員之主管
            case "resca009": //逾時警示-指定管理人
            case "resca010": //逾時警示-指定管理人員工代號
            case "resca011": //逾時警示-警示間隔天數
            case "resca012": //逾時警示-警示次數
            case "resca013": //是否結案後通知所有人員?
            case "resca014": //是否逐級回報?
            case "resca015": //填表人可否強迫
            case "resca016": //填表人可否抽單?
              $fd_resda    ="resda".str_pad((substr($key4,5,3)-2),3,'0',STR_PAD_LEFT);
              $vins_fd2   .=",{$fd_resda}";
              $vins_value2.=",'{$value4}'";
              break;
            case "resca018": //原稿可否列印？
            case "resca019": //原稿可否轉寄？
            case "resca020": //原稿可否閱讀附件？
            case "resca021": //回函可否列印？
            case "resca022": //回函可否轉寄？
            case "resca023": //回函可否閱讀附件？
              $fd_resda    ="resda".str_pad((substr($key4,5,3)+6),3,'0',STR_PAD_LEFT);
              $vins_fd2   .=",{$fd_resda}";
              $vins_value2.=",'{$value4}'";
              break;
            default:
              break;
          }
      }
    }
    $ar_sql[] ="insert into {$fn_flwDB}..resda ($vins_fd2) values ($vins_value2)";
  
    //-------------------------------------------------------------
    // resdb
    //-------------------------------------------------------------         
    $num_resdb    = 0;
    $sql_ch = "SELECT *
                FROM  {$fn_flwDB}..resch
                WHERE resch001 = '{$f_var['flw']['f_resch001']}'
                ORDER BY resch002, resch003
               ";
    //echo "<pre>{$sql_ch}</pre>";
    $res_52 = mssql_query($sql_ch);
    $qty_52 = mssql_num_rows($res_52);
    if( $qty_52>0 AND ''!=$f_var['flw']['f_resch001'] ){ //此簽呈有各別子流程
      while($row52 = mssql_fetch_assoc($res_52)){
        $vins_fd3    =" resdb001,resdb002 ";
        $vins_value3 =" '{$f_var['f_flwType']}','{$f_var['f_flwNum']}' ";
        $vins_fd3   .=" ,resdb900,resdb901,resdb904 ";
        $vins_value3.=" ,'{$f_var['flw']['f_b_empno']}','{$fn_date}','{$fd_resak015}' ";
    
        $num_resdb++;
        if('1'==$num_resdb){
          $vins_fd3   .=" ,resdb026 ";
          $vins_value3.=" ,'Y'";
          $resdc006=iif($row52['resch006']=='',$fd_resak013,$row52['resch006']);
          //resdc 表單流程異動明細檔 (RESDC)
          $vins_fd4    =" resdc001,resdc002,resdc005,resdc006,resdc007,resdc008,resdc900,resdc901,resdc904 ";
          $vins_value4 =" '{$f_var['f_flwType']}','{$f_var['f_flwNum']}','0001','{$resdc006}','3','1','{$f_var['flw']['f_b_empno']}','{$fn_date}','{$fd_resak015}' ";
    
          //resdd 表單流程異動明細檔 (RESDD)
          $resdd020 = sl_cn_getresck($resdc006,$f_var['f_flwType'],$fn_date,'0010',$vcon,'EF2KWeb'); //add by 佳玟 2018.07.03 是否有設定代理人
          
          $vins_fd5    =" resdd001,resdd002,resdd005,resdd006,resdd007,resdd008,resdd009,resdd020 ";
          $vins_value5 =" '{$f_var['f_flwType']}','{$f_var['f_flwNum']}','0001','01','{$resdc006}','','{$fn_date}','{$resdd020}' ";
          $vins_fd5   .=" ,resdd013,resdd014,resdd015,resdd017,resdd018,resdd019,resdd900,resdd901,resdd904 ";
          $vins_value5.=" ,'0','2','1','N','8','Y','{$f_var['flw']['f_b_empno']}','{$fn_date}','{$fd_resak015}' ";
        }
        else{
          $vins_fd3   .=" ,resdb026 ";
          $vins_value3.=" ,'N'";
        }
        //echo $row52['resch002'].'---'.$row52['resch003'].'<br>';
        //ksort($row52);
        foreach($row52 as $key52 =>$value52){
        //while (list($key52,$value52) = each($row52)){
          if (ereg("^[r]",substr($key52,0,1))){
            switch ($key52) {
              case "resch002": //關號
              case "resch003": //支號
                $fd_resdb    ="resdb".str_pad((substr($key52,5,3)+1),3,'0',STR_PAD_LEFT);
                $vins_fd3   .=",{$fd_resdb}";
                $vins_value3.=",'{$value52}'";
    
                if('1'==$num_resdb){
                  $fd_resdc    ="resdc".str_pad((substr($key52,5,3)+1),3,'0',STR_PAD_LEFT);
                  $vins_fd4   .=",{$fd_resdc}";
                  $vins_value4.=",'{$value52}'";
    
                  $fd_resdd    ="resdd".str_pad((substr($key52,5,3)+1),3,'0',STR_PAD_LEFT);
                  $vins_fd5   .=",{$fd_resdd}";
                  $vins_value5.=",'{$value52}'";
                }
                break;
              case "resch004": //流程角色
              case "resch005": //簽核種類
              case "resch006": //流程角色參數1
              case "resch007": //流程角色參數2
              case "resch008": //流程角色參數3
              case "resch009": //流程角色參數4
              case "resch010": //容許簽核時間
              case "resch011": //自動ByPass?
              case "resch012": //ByPass方式
              case "resch013": //是否強制簽核?
              case "resch014": //是否單一簽核
              case "resch015": //可否列印?
              case "resch016": //可否撤簽?
              case "resch017": //可否加簽?
              case "resch018": //可否轉會?
              case "resch019": //可否轉寄?
              case "resch020": //可否新增附加檔?
              case "resch021": //可否修改附加檔?
              case "resch022": //可否刪除附加檔?
              case "resch023": //可否閱讀附加檔?
              case "resch024": //簽核時密碼驗證?
                $fd_resdb    ="resdb".str_pad((substr($key52,5,3)+1),3,'0',STR_PAD_LEFT);
                $vins_fd3   .=",{$fd_resdb}";
                $vins_value3.=",'{$value52}'";
                break;
              default:
                break;
            }
          }
        }
        $ar_sql[] ="insert into {$fn_flwDB}..resdb ($vins_fd3) values ($vins_value3)";
      }
      $ar_sql[] ="insert into {$fn_flwDB}..resdc ($vins_fd4) values ($vins_value4)";
      $ar_sql[] ="insert into {$fn_flwDB}..resdd ($vins_fd5,resdd010,resdd011) values ($vins_value5,'','')"; 
    }else if( !empty($f_var['flw']['resdb003']) ){ //非標準流程,自訂流程
      $sql_db="SELECT top 1 resdb.*
               FROM   {$fn_flwDB}..resdb
               WHERE  resdb001 = '{$f_var['f_flwType']}'  ";
      $res_db = mssql_query($sql_db);
      $row_db = mssql_fetch_assoc($res_db);
      foreach ($f_var['flw']['resdb003'] as $k_fd=>$v_fd) {
        ksort($row_db);
        while (list($kdb,$vdb) = each($row_db)){
          if (ereg("^[r]",substr($kdb,0,1))){
            switch ($kdb) {
              case "resdb001": //單別
                $vins_fd3    ="{$kdb}";
                $vins_value3 ="'{$f_var['f_flwType']}'";
                break;
              case "resdb002": //單號
                $vins_fd3   .=",{$kdb}";
                $vins_value3.=",'{$f_var['f_flwNum']}'";
                break;
              case "resdb003": //關號             
              case "resdb004": //支號            
              case "resdb005": //流程角色            
              case "resdb006": //簽核種類            
              case "resdb007": //流程角色參數1       
              case "resdb008": //流程角色參數2       
              case "resdb026": //流程是否已經解析?
                $fd_value    = $f_var['flw'][$kdb][$k_fd];  
                $vins_fd3   .=",{$kdb}";
                $vins_value3.=",'{$fd_value}'";
                break;
              case "resdb900": //建檔人員員編
                $vins_fd3   .=",{$kdb}";
                $vins_value3.=",'{$f_var['flw']['f_b_empno']}'";
                break;
              case "resdb901": //建檔時間
                $vins_fd3   .=",{$kdb}";
                $vins_value3.=",'{$fn_date}'";
                break;
              case "resdb904": //部門代號
                $vins_fd3   .=",{$kdb}";
                $vins_value3.=",'{$fd_resak015}'";         
                break;
              case "resdb014": //是否強制簽核?
              case "resdb017": //可否撤簽?
              case "resdb018": //可否加簽?
              case "resdb019": //可否轉會?
              case "resdb020": //可否轉寄?
              case "resdb021": //可否新增附加檔?
              case "resdb024": //可否閱讀附加檔?
                $vins_fd3   .=",{$kdb}";
                $vins_value3.=",'Y'";
                break;
              case "resdb011": //容許簽核時間
              case "resdb013": //ByPass方式
                $vins_fd3   .=",{$kdb}";
                $vins_value3.=",'0'";
                break;
              case "resdb012": //自動ByPass?
              case "resdb015": //是否單一簽核
              case "resdb016": //可否列印?
              case "resdb022": //可否修改附加檔?
              case "resdb023": //可否刪除附加檔?
              case "resdb025": //簽核時密碼驗證?
                $vins_fd3   .=",{$kdb}";
                $vins_value3.=",'N'";
                break;
              default:
                $vins_fd3   .=",{$kdb}";
                $vins_value3.=",'{$vdb}'";
                break;
            }
          }
        }
        $ar_sql[] ="insert into {$fn_flwDB}..resdb ($vins_fd3) values ($vins_value3)";
      }
      //resdc
      $sql_dc="SELECT top 1 resdc.*
               FROM   {$fn_flwDB}..resdc
               WHERE  resdc001 = '{$f_var['f_flwType']}'  ";
      $res_dc = mssql_query($sql_dc);
      $row_dc = mssql_fetch_assoc($res_dc);
      $arr_resdc  = array('',"{$f_var['f_flwType']}","{$f_var['f_flwNum']}",'0010','0010','0001',"{$fd_resak013}",'2','1');
      $vins_fd4    ="resdc900,resdc901,resdc904";
      $vins_value4 ="'{$f_var['flw']['f_b_empno']}','{$fn_date}','{$fd_resak015}'"; 
      ksort($row_dc);
      while (list($kdc,$vdc) = each($row_dc)){
        if (ereg("^[r]",substr($kdc,0,1)) and ereg("^[0]",substr($kdc,5,1))){
          $fd_key4     =substr($kdc,7,1);
          $vins_fd4   .=",{$kdc}";
          $vins_value4.=",'{$arr_resdc[$fd_key4]}'";
        }
      }
      $ar_sql[] ="insert into {$fn_flwDB}..resdc ($vins_fd4) values ($vins_value4)";
      //resdd
      $sql_dd="SELECT top 1 resdd.*
               FROM   {$fn_flwDB}..resdd
               WHERE  resdd001 = '{$f_var['f_flwType']}'  ";
      $res_dd = mssql_query($sql_dd);
      $row_dd = mssql_fetch_assoc($res_dd);
      $arr_resdd  = array('',"{$f_var['f_flwType']}","{$f_var['f_flwNum']}",'0010','0010','0001','01',"{$fd_resak013}","","{$fn_date}"," "," "," ",'0','2','1'," ",'N','8','Y'," ");
      $vins_fd5    ="resdd900,resdd901,resdd904";
      $vins_value5 ="'{$f_var['flw']['f_b_empno']}','{$fn_date}','{$fd_resak015}'"; 
      ksort($row_dd);
      while (list($kdd,$vdd) = each($row_dd)){
        if (ereg("^[r]",substr($kdd,0,1)) and ereg("^[0]",substr($kdd,5,1))  ){
          $fd_key5     = substr($kdd,6,2)+0;
          $vins_fd5   .=",{$kdd}";
          $vins_value5.=",'{$arr_resdd[$fd_key5]}'";
        }
      }
      $ar_sql[] ="insert into {$fn_flwDB}..resdd ($vins_fd5) values ($vins_value5)";

    }else{  //此簽呈未設定子流程, 跑標準流程
      $query53 = "SELECT *
                  FROM rescc
                  WHERE rescc001='{$f_var['f_flwType']}' 
                        and rescc002<>'9999'
                ";
      $res_53 = mssql_query($query53);
      $qty_53 = mssql_num_rows($res_53);
      while($row53 = mssql_fetch_assoc($res_53)){
        $vins_fd3    =" resdb001,resdb002 ";
        $vins_value3 =" '{$f_var['f_flwType']}','{$f_var['f_flwNum']}' ";
        $vins_fd3   .=" ,resdb900,resdb901,resdb904 ";
        $vins_value3.=" ,'{$f_var['flw']['f_b_empno']}','{$fn_date}','{$fd_resak015}' ";
    
        $num_resdb++;
        if('1'==$num_resdb){
          $vins_fd3   .=" ,resdb026 ";
          $vins_value3.=" ,'Y'";
          $resdc006=iif($row53['rescc006']=='',$fd_resak013,$row53['rescc006']);
          //resdc 表單流程異動明細檔 (RESDC)
          $vins_fd4    =" resdc001,resdc002,resdc005,resdc006,resdc007,resdc008,resdc900,resdc901,resdc904 ";
          $vins_value4 =" '{$f_var['f_flwType']}','{$f_var['f_flwNum']}','0001','{$resdc006}','3','1','{$f_var['flw']['f_b_empno']}','{$fn_date}','{$fd_resak015}' ";
    
          //resdd 表單流程異動明細檔 (RESDD)
          $resdd020 = sl_cn_getresck($resdc006,$f_var['f_flwType'],$fn_date,'0010',$vcon,'EF2KWeb'); //add by 佳玟 2018.07.03 是否有設定代理人
          
          $vins_fd5    =" resdd001,resdd002,resdd005,resdd006,resdd007,resdd008,resdd009,resdd020 ";
          $vins_value5 =" '{$f_var['f_flwType']}','{$f_var['f_flwNum']}','0001','01','{$resdc006}','','{$fn_date}','{$resdd020}' ";
          $vins_fd5   .=" ,resdd013,resdd014,resdd015,resdd017,resdd018,resdd019,resdd900,resdd901,resdd904 ";
          $vins_value5.=" ,'0','2','1','N','8','Y','{$f_var['flw']['f_b_empno']}','{$fn_date}','{$fd_resak015}' ";
        }
        else{
          $vins_fd3   .=" ,resdb026 ";
          $vins_value3.=" ,'N'";
        }
        foreach($row53 as $key53 =>$value53){
        //while (list($key52,$value52) = each($row52)){
          if (ereg("^[r]",substr($key53,0,1))){
            switch ($key53) {
              case "rescc002": //關號
              case "rescc003": //支號
                $fd_resdb    ="resdb".str_pad((substr($key53,5,3)+1),3,'0',STR_PAD_LEFT);
                $vins_fd3   .=",{$fd_resdb}";
                $vins_value3.=",'{$value53}'";
    
                if('1'==$num_resdb){
                  $fd_resdc    ="resdc".str_pad((substr($key53,5,3)+1),3,'0',STR_PAD_LEFT);
                  $vins_fd4   .=",{$fd_resdc}";
                  $vins_value4.=",'{$value53}'";
    
                  $fd_resdd    ="resdd".str_pad((substr($key53,5,3)+1),3,'0',STR_PAD_LEFT);
                  $vins_fd5   .=",{$fd_resdd}";
                  $vins_value5.=",'{$value53}'";
                }
                break;
              case "rescc004": //流程角色
              case "rescc005": //簽核種類
              case "rescc006": //流程角色參數1
              case "rescc007": //流程角色參數2
              case "rescc008": //流程角色參數3
              case "rescc009": //流程角色參數4
              case "rescc010": //容許簽核時間
              case "rescc011": //自動ByPass?
              case "rescc012": //ByPass方式
              case "rescc013": //是否強制簽核?
              case "rescc014": //是否單一簽核
              case "rescc015": //可否列印?
              case "rescc016": //可否撤簽?
              case "rescc017": //可否加簽?
              case "rescc018": //可否轉會?
              case "rescc019": //可否轉寄?
              case "rescc020": //可否新增附加檔?
              case "rescc021": //可否修改附加檔?
              case "rescc022": //可否刪除附加檔?
              case "rescc023": //可否閱讀附加檔?
              case "rescc024": //簽核時密碼驗證?
                $fd_resdb    ="resdb".str_pad((substr($key53,5,3)+1),3,'0',STR_PAD_LEFT);
                $vins_fd3   .=",{$fd_resdb}";
                $vins_value3.=",'{$value53}'";
                break;
              default:
                break;
            }
          }
        }
        $ar_sql[] ="insert into {$fn_flwDB}..resdb ($vins_fd3) values ($vins_value3)";
      }
      $ar_sql[] ="insert into {$fn_flwDB}..resdc ($vins_fd4) values ($vins_value4)";
      $ar_sql[] ="insert into {$fn_flwDB}..resdd ($vins_fd5,resdd010,resdd011) values ($vins_value5,'','')"; 
    }
    //---------------------------------------------------------------------------------------------------------
    //mark by zihan 2020.11.17 請假單會resdc與resdd各重複多叫一次
    //$ar_sql[] ="insert into {$fn_flwDB}..resdc ($vins_fd4) values ($vins_value4)";
    //$ar_sql[] ="insert into {$fn_flwDB}..resdd ($vins_fd5,resdd010,resdd011) values ($vins_value5,'','')"; 
    //---------------------------------------------------------------------------------------------------------
    //echo "f_flwType: ".$f_var['f_flwType'];
    if('SL-A015'==$f_var['f_flwType']){ //請假單
       //add by 佳玟 2017.06.20 待辦15143-請假單經理及區主管二日以上簽核至董事長
       if( ($f_var['flw']['f_field']['sla015008']>=2 AND strstr("5020/5041",$_SESSION['login_job_id'])!=null) or '1130091'==$_SESSION["login_empno"] ){
         $sql_rdb = "select resdb.resdb003, resdb.resdb004,
                            resdd.resdd007
                     from   {$fn_flwDB}..resdb
                            left join {$fn_flwDB}..resdd on resdb.resdb001 = resdd.resdd001
                            and resdb.resdb002 = resdd.resdd002
                            and resdb.resdb003 = resdd.resdd003
                            and resdb.resdb004 = resdd.resdd004
                     where  resdb.resdb001 = '{$f_var['f_flwType']}'
                            and resdb.resdb002 = '{$f_var['f_flwNum']}'
                     ORDER BY resdb.resdb003, resdb.resdb004   
                   ";
         $res_rdb = mssql_query($sql_rdb);
         while($row_rdb = mssql_fetch_array($res_rdb)){
            $fd_db003 = $row_rdb['resdb003'];
            $fd_db004 = $row_rdb['resdb004'];
            if( ''==trim($row_rdb['resdd007'])  ){ 
              $vsql = "SELECT rsk1.resak013 AS empno
                       FROM   resak AS rsk1
                              LEFT JOIN resak AS rsk2 ON rsk1.resak013 = rsk2.resak001
                              LEFT JOIN resan ON rsk2.resak001 = resan.resan003
  							                   and rsk2.resak015 = resan.resan001
                       WHERE  rsk1.resak001 = '{$fd_emp_pre}'
                     "; 
              $vres = mssql_query($vsql);
              $vqty = mssql_num_rows($vres);
              if($vqty>0){
                $vrow = mssql_fetch_array($vres);
                $fd_emp_pre = $vrow['empno'];
              }
            }
            else{
              $fd_emp_pre = $row_rdb['resdd007'];
            }    
         } 
  
         //exit;
         if( ''!=$fd_emp_pre ){
            $fr_pre_db03 = $fd_db003; 
            $fr_pre_db04 = $fd_db004;           
            $fr_next_db03 = str_pad(($fd_db003+10),4,0,STR_PAD_LEFT);
            do{               
                if( empty($fr_next_emp) ){
                  $fr_next_emp = $fd_emp_pre;
                }else{
                  $fr_next_emp = $fr_emp_k;
                }
                $vsql = "SELECT rsk1.resak013 AS empno, resan.resan004 AS job_id
                         FROM   resak AS rsk1
                                LEFT JOIN resak AS rsk2 ON rsk1.resak013 = rsk2.resak001
                                LEFT JOIN resan ON rsk2.resak001 = resan.resan003
                                                  and rsk2.resak015 = resan.resan001
                         WHERE  rsk1.resak001 = '{$fr_next_emp}'
                       "; 
                $vres = mssql_query($vsql);
                $vqty = mssql_num_rows($vres);
                if($vqty>0){
                  $vrow = mssql_fetch_array($vres);
                  $fr_emp_k = $vrow['empno'];
                  $fr_job_k = $vrow['job_id']; //直屬主管, 職務代碼
                }
  
                if( '5001'!=$fr_job_k ){  //已到董事長關卡最後一關
                  //echo $fr_next_db03."--".$fr_emp_k."  (".$fr_next_emp."-".$row_rk2['resak002'].")<br>";  
                  $sql_rk2 = "select resak015 
                              from    {$fn_flwDB}..resak         
                              where   resak001 = '{$fr_emp_k}'
                             ";
                  echo $sql_rk2."<br>";             
                  $res_rk2 = mssql_query($sql_rk2);
                  $row_rk2 = mssql_fetch_array($res_rk2);   
                  $fr_dept_k = $row_rk2['resak015'];
                  $ar_sql[] ="insert into {$fn_flwDB}..resdb (resdb001,resdb002,resdb003,resdb004,resdb005,resdb006,
                                                              resdb007,resdb008,resdb011,resdb012,resdb013,resdb014,
                                                              resdb015,resdb016,resdb017,resdb018,resdb019,
                                                              resdb020,resdb021,resdb022,resdb023,resdb024,
                                                              resdb009,resdb010,
                                                              resdb025,resdb026,resdb027,resdb900,resdb901,resdb904)
                                                      values ('{$f_var['f_flwType']}','{$f_var['f_flwNum']}','{$fr_next_db03}','0010','2','2',
                                                              '{$fr_pre_db03}','{$fr_pre_db04}','0','N','0','Y',
                                                              'N','N','Y','Y','Y',
                                                              'Y','Y','N','N','Y',
                                                              '','',
                                                              'N','N','','{$f_var['flw']['f_b_empno']}','{$fn_date}','{$fd_resak015}')";        
                  $fr_pre_db03 = $fr_next_db03; 
                  $fr_pre_db04 = "0010";                 
                  $fr_next_db03 = str_pad(($fr_next_db03+10),4,0,STR_PAD_LEFT);
                }
            }while( $fr_next_emp!=$fr_emp_k );
         }
       }
    }
    $ar_sqlEr[] = "update {$fn_flwDB}..resda
                   set    resda019 = '{$fn_date}', resda020 = 4, resda021 = 4,
                          resda022 = '0000-0000-0000'
                   where resda001 = '{$f_var['f_flwType']}'
                         and resda002 = '{$f_var['f_flwNum']}' ";
    $ar_sqlEr[] = "update {$fn_flwDB}..resdc
                   set    resdc007 = 11, resdc008 = 9
                   where resdc001 = '{$f_var['f_flwType']}'
                         and resdc002 = '{$f_var['f_flwNum']}' ";
    $ar_sqlEr[] = "update {$fn_flwDB}..resdd
                   set    resdd014 = 11, resdd015 = 9, resdd902 = '{$f_var['flw']['f_b_empno']}',  resdd903 = '{$fn_date}'
                   where resdd001 = '{$f_var['f_flwType']}'
                         and resdd002 = '{$f_var['f_flwNum']}' ";
    // -----------------------------------------------------------------------
    //  檔案上傳至190 resde 表單流程附加檔 (RESDE)
    // -----------------------------------------------------------------------
    //$mftp_server  = "flow.slc.com.tw";      // ftp server
    //$mftp_user    = "it";                   // ftp user name
    //$mftp_pass    = "sl85";                 // ftp user password
    if( 'Y'!=$fn_test ){
      $f_var['mftp_connect'] = ftp_connect($mftp_server) or die("flow.slc.com.tw  Could not connect"); // connect ftp
      if($f_var['mftp_connect']) {
          $f_var['mftp_login'] = ftp_login($f_var['mftp_connect'],$mftp_user,$mftp_pass); // login
          ftp_pasv($f_var['mftp_connect'], FALSE);
          //$remote_r_dir = "./{$f_var['f_flwType']}/";
          //@ftp_mkdir($f_var['mftp_connect'],$remote_r_dir);
          //@ftp_chmod($f_var['mftp_connect'],"0777",$remote_r_dir);
  
          $remote_dir = "./{$f_var['f_flwType']}/{$f_var['f_flwNum']}/";
          @ftp_mkdir($f_var['mftp_connect'],$remote_dir);
          @ftp_chmod($f_var['mftp_connect'],"0777",$remote_dir);
          $fd_resde003 = 0;  //序號
          //$file_count = 0;
          for($i=1;$i<=3;$i++) {
          $fd_file = "f_resde003".$i;
          if($_FILES[$fd_file]['tmp_name']<>''){
              $fd_resde003++;
              $f_var['eipftp_connect'] = "{$fn_flwTB}/{$f_var['f_flwNum']}_";
              $f_var['file_count']     = str_pad($fd_resde003,4,'0',STR_PAD_LEFT);
              $f_var['mftp_dir']       = $remote_dir;
              $f_var['mftp_file']      = $fd_file;
              $f_updname    = $f_var['mftp_file'];
              $file_name    = $f_var['file_count']."_".$f_var['f_flwType']."_".date('Ymd').substr($_FILES[$f_updname]['name'],strpos($_FILES[$f_updname]['name'],'.'));
              $upload_file  = $f_var['eipftp_connect'].$file_name;
              $uplocal_file = $f_var['mftp_dir'].$file_name;
              $upload_temp  = $_FILES[$f_updname]['tmp_name'];
              if( ''!=$fd_pre_flwNum ){
                  $fv_eipftp  = "{$fn_flwTB}/{$fd_pre_flwNum}_";
                  $fv_eipftp .= $f_var['file_count']."_".$f_var['f_flwType']."_".date('Ymd').substr($_FILES[$f_updname]['name'],strpos($_FILES[$f_updname]['name'],'.'));
                  copy($fv_eipftp,$upload_file);
              }
              else{
                  move_uploaded_file( $upload_temp , iconv("big5","UTF-8",$upload_file) );   //上傳至EIP
              }
              if(ftp_put($f_var['mftp_connect'], $uplocal_file, $upload_file,  FTP_BINARY )){  //上傳至電子簽核
                $f_var['flw_name'] = $file_name;
              }else{
                $f_var['rtn']['code'] = '2';
                $f_var['rtn']['meg'] = "附件檔傳送失敗! 請重新新增一筆!".$f_var['f_flwType']."-".$f_var['f_flwNum'];
              }
              $v_resde003 = $f_var['file_count'];
              $ar_resde003[$v_resde003] = $v_resde003;
              $ar_resde004[$v_resde003] = $_FILES[$fd_file]["name"];
              $ar_resde006[$v_resde003] = $f_var['flw_name'];
              $ar_resde010[$v_resde003] = $_FILES[$fd_file]["size"];
              $ar_resde005[$v_resde003] = $f_var['flw_name'];
          }
          }
          //-------------------------------------------------------------------------------------
          ftp_close($f_var['mftp_connect']);                  // close ftp
          //-------------------------------------------------------------------------------------
          if(!empty($ar_resde003)){
          foreach ($ar_resde003 as $key=>$value) {
              $ar_sql[] ="insert into {$fn_flwDB}..resde (resde001,resde002,resde003,resde004,resde006,resde010,resde011,resde005)
                                                  values('{$f_var['f_flwType']}','{$f_var['f_flwNum']}','{$ar_resde003[$key]}','{$ar_resde004[$key]}','{$ar_resde006[$key]}','{$ar_resde010[$key]}','{$fn_date}','{$ar_resde005[$key]}')
                              ";
          }
          }
      }
      else{
          $f_var['rtn']['code'] = '3';
          $f_var['rtn']['meg'] = "FWL主機連線失敗，請通知資訊 應用組!";
      }
    }
    $f_var['rtn']['flwType'] = $f_var['f_flwType'];
    $f_var['rtn']['flwNum'] = $f_var['f_flwNum'];
    if( 'Y'==$fn_test ){
      $f_var['rtn']['code'] = 'T';
      echo "<pre>";
      print_r($ar_sql);
      print_r($ar_sqlEr);
      echo "</pre>";
    }
    else{
      if( '0'==$f_var['rtn']['code'] AND !empty($ar_sql) ){
        $f_var['rtn']['meg'] = '';
        foreach ($ar_sql as $ky=>$vy) {
          if( !mssql_query($ar_sql[$ky]) ){
              $f_var['rtn']['code'] = '5';
              $f_var['rtn']['meg'] .= "儲存異常! ";
              $f_var['rtn']['meg'] .= "<pre>{$ar_sql[$ky]}</pre><br>";
          }
        } 
      }
  
      if( '0'!=$f_var['rtn']['code'] ){ //儲存各項電簽table失敗, 抽單
        foreach ($ar_sqlEr as $ky=>$vy) {
          if( !mssql_query($ar_sqlEr[$ky]) ){
            $f_var['rtn']['code'] = '4';
            $f_var['rtn']['meg'] = "抽單失敗! ";
          }
        }
      }
      if( 'SL-EIP2FLW'==$f_var['f_flwType'] ){
        $vb_b_date = date("Y-m-d H:i:s");
        $vb_dept_id = '';
        $vb_empno = $f_var['flw']['f_b_empno']; 
        $vb_proc = u_showproc(); // 程式代號
        if( 'flwc'==$vcon ){
          $fd_intable = "sleip2flwcd";
        }else if( 'flw'==$vcon ){
          $fd_intable = "sleip2flw";
        }
        if( '0'==$f_var['rtn']['code'] ){
          foreach ($f_var['flw']['f_field'] as $kf=>$vf) {
            if( strstr($kf,"sleip2flw9")==null ){
              $ar_in[$kf] = $f_var['flw']['f_field'][$kf];
            }
          }
          sl_open('docs');
          $ins_eip = "insert into docs.{$fd_intable} ( ".implode(",",array_keys($ar_in)).", resda020, resda021, b_empno, b_dept_id, b_proc, b_date )
                       values ( '".implode("','",$ar_in)."', '2', '1', '{$vb_empno}', '{$vb_dept_id}', '{$vb_proc}', '{$vb_b_date}' )";
          if( !mysql_query($ins_eip) ){                  
            echo "<font color=red>Error！儲存至eip異常, 請擷圖並貼電腦報修敘述, 告知資訊人員, 謝謝！ {$ins_eip}</font>";
          }
        }    
      }
    }
    $f_var['rtn']['meg'] .= " 單別-單號:  {$f_var['f_flwType']}-{$f_var['f_flwNum']}";
    mssql_close($fndb);

    return;
  }
// **************************************************************************
//  函數名稱: sl_gas_ct()
//  函數功能: 權限群組
//  使用方式: sl_gas_ct($dept)
//  使用說明: $dept => login_hrm_dept_id         
//  程式設計: 周小樵
//  設計日期: 2020.12.12
// **************************************************************************
function sl_gas_ct($vdept, $vtpl){
  sl_open('sl');
  $sql = "SELECT es04
          FROM gas_ct
          WHERE d_date = '0000-00-00 00:00:00'
                AND es02 = '{$vdept}'
         ";
  //echo $sql.'<br>';
  $res = mysql_query($sql);
  $qty = mysql_num_rows($res);
  if($qty > 0){
    //echo $vtpl;
    $row = mysql_fetch_assoc($res);
    $f_var['domain1']    = $row['es04'];
    $f_var['domain1']    = strstr($row['es04'],$vtpl);
    //echo $f_var['domain1'].'+++'.'<br>';
    return $f_var['domain1'];
  }
  else{                    
    return;
  }
}
// **************************************************************************
//  函數名稱: sl_gp_emp()
//  函數功能: 權限群組列出員編
//  使用方式: sl_gp_emp($vgp,$voutput )
//  使用說明: $vgp => empno 
//            $voutput:empno=員編 ; name=姓名
//  程式設計: 佳玟
//  設計日期: 2021.05.05
// **************************************************************************
function sl_gp_emp($vgp, $voutput='empno'){
  sl_open('it');
  $sql = "SELECT GROUP_CONCAT( pass.empno order by empno desc) AS empno,
                 GROUP_CONCAT( pass.name order by empno desc) AS name
          FROM   it.ap_deptgroup
                 LEFT JOIN sl.pass ON ap_deptgroup.dept_id = pass.hr_deptid
                                      AND pass.d_date = '0000-00-00 00:00:00'                      
          WHERE  ap_deptgroup.d_date = '0000-00-00 00:00:00'
                 AND ap_deptgroup.gp_id = '{$vgp}'
                 AND (CASE
                       WHEN ap_deptgroup.job_id != '' THEN ap_deptgroup.job_id = pass.job_id 
                      ELSE 1=1 END) 
         ";
  $res = mysql_query($sql);
  $qty = mysql_num_rows($res);
  if($qty > 0){
    $row = mysql_fetch_assoc($res);
    return $row[$voutput];
  }
  else{                    
    return;
  }
}

// **************************************************************************
//  函數名稱: sl_gp_getDept()
//  函數功能: 取得權限群組之HRM代碼
//  使用方式: sl_gp_getDept($dept)
//  使用說明: $gp => 群組代碼 
//  程式設計: 翊靖
//  設計日期: 2022.04.25
// **************************************************************************
function sl_gp_getDept($gp, $vjob=''){
  sl_open('it');
  $swhere = "";
  if( ''!=trim($vjob) ){
    $swhere = " AND ( job_id = '{$vjob}' OR job_id = '' ) ";
  }
  $sql = "SELECT GROUP_CONCAT( dept_id ) AS dept_id
          FROM it.ap_deptgroup
          WHERE d_date = '0000-00-00 00:00:00'
                AND gp_id = '{$gp}'
                {$swhere}
         ";
  $res = mysql_query($sql);
  $qty = mysql_num_rows($res);
  if($qty > 0){
    $row = mysql_fetch_assoc($res);
    return $row['dept_id'];
  }
  else{                    
    return;
  }
}

// **************************************************************************
//  函數名稱: sl_getbrowser()
//  函數功能: 取得瀏覽器
//  使用方式: sl_getbrowser()
//  程式設計: 佳玟
//  設計日期: 2021.06.07
// **************************************************************************
function sl_getbrowser(){
  $user_agent = $_SERVER['HTTP_USER_AGENT'];
  if (strpos($user_agent, 'Opera') || strpos($user_agent, 'OPR/')) return 'Opera';
  elseif (strpos($user_agent, 'Edge')) return 'Edge';
  elseif (strpos($user_agent, 'Chrome')) return 'Chrome';
  elseif (strpos($user_agent, 'Safari')) return 'Safari';
  elseif (strpos($user_agent, 'Firefox')) return 'Firefox';
  elseif (strpos($user_agent, 'MSIE') || strpos($user_agent, 'Trident/7')) return 'IE';
  return 'Other';
}
?>

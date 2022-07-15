<?php 
//┌─────┬───────────────────────────────┐
//│系統名稱: │年節禮品管理系統首頁　  　                                              │
//│         │                                                              │
//│程式名稱: │index.php                                                │
//│程式說明: │年節禮品管理系統首頁                                      │
//│樣板名稱: │index.tpl                                                 │
//│          │                                     │
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
//│設計日期: │2021.04.13                                                   │
//└─────┴───────────────────────────────┘

include_once('../sl_init.php'); 
u_setvar($f_var);
echo   $f_var['mphp_name'] .'=';
// include_once($sl_header_php);

?>


<link rel="stylesheet" href="gift.css" type="text/css">
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

<style>
  a.box{
    text-align:center;
    text-decoration: none;
  }
  a.box:hover{
    text-decoration: none;
    color:'';
  }
  .container{
    display:flex;
    justify-content: center;
    margin:25px;
  }
  .container>.box{
    display: flex;
    width: 200px;
    height: 200px;
    padding:25px 0;
    background-color: #fff;
    margin: 20px 30px;
    border: 2px solid #cbcbcb;
    border-radius: 5%;
    box-shadow: 3px 3px 7px #cbcbcb;
    flex-direction: column;
    transition: .2s;

  }
  .container>.box:hover{
    transform: translateY(-10px);
    box-shadow: none;
  }
  .container>.box:hover i{
    color:#fff;
  }
  .box>div{
    margin:0 auto;
  }
  .box h5{
    font-size: 20px;
    font-weight:bolder;
    text-align-last: justify;
    margin:15px auto 20px;
  }
  .box i{
    font-size:60px;
    padding:10px;
    transition: .3s;
    border-radius: 25%;
  }
  .box ul{
    padding-left:20px;
    color: #777777;
    font-size: 13px;
    letter-spacing: 1px;
    text-align:left;
  }
  .box li{
    list-style: square;
  }
</style>
<script>
  $(document).ready(function(){

    var userAgent = navigator.userAgent;
    if( userAgent.indexOf('Chrome') == -1  ){
      alert('請使用 Google 的「Chrome瀏覽器」開啟，謝謝');
    }

    $('a').click(function(event){
      if( userAgent.indexOf('Chrome') == -1  ){
        alert('請使用 Google 的「Chrome瀏覽器」開啟，謝謝');
        event.preventDefault();
      }
    })

    //hover時 根據自身box的顏色=>icon做顏色變化
    $('a.box').hover(
      function(){
      $(this).css('border','3px solid '+$(this).css('color'))
      $(this).find('i').css('background',$(this).css('color'))
    },function(){
      $(this).css('border','2px solid #cbcbcb')
      $(this).find('i').css('background','transparent')
    })
  });
</script>

<div>
  <h1 style="color:red;font-weight:500;text-align:center">請使用 Google 的「Chrome瀏覽器」開啟，謝謝</h1>

</div>
<div class="container">
  <a class='box' href="gift_list.php" style="color:#33a1f8">
    <div>
      <i class="fad fa-user-edit"></i>
    </div>
    <div>
      <h5>贈禮對象規劃</h5>
      <ul>
        <li>各區窗口登打送禮客戶</li>
        <li>會計審核送禮額度</li>
        <li>選取送禮禮品</li>
      </ul>
    </div>
  </a>
  <a class='box' href="gift_type.php" style="color:#ff9800" >
    <div>
      <i class="fad fa-gifts"></i>
    </div>
    <div>
      <h5>禮品品項管理</h5>
      <ul>
        <li>由採購部管理</li>
        <li>登打年節產品相關資訊</li>
      </ul>
    </div>
  </a>
  <a class='box' href="gift_rpt.php" style="color:#4caf50">
    <div>
      <i class="fad fa-file-alt"></i>
    </div>
    <div>
      <h5>報表查詢</h5>
      <ul>
        <li>年節禮品統計表</li>
        <li>各區贈禮對象規劃表</li>
        <li>匯出Excel檔</li>
      </ul>
    </div>
  </a>
</div>
<div class="container">
  <a class='box' href="gift_quota.php" style="color:#d3b615">
    <div>
      <i class="fad fa-sack-dollar"></i>
    </div>
    <div>
      <h5>送禮額度設定</h5>
      <ul>
        <li>各區送禮額度設定</li>
      </ul>
    </div>
  </a>
  <a class='box' href="gift_config.php" style="color:#795548">
    <div>
      <i class="fad fa-tools"></i>
    </div>
    
    <div>
      <h5>其他設定</h5>
      <ul>
        <li>各區窗口人員設定</li>
        <li>會計人員設定</li>
        <li>基數算法設定</li>
      </ul>
    </div>
  </a>
</div>

<?php



  

// u_link($f_var); //連結設定

// $f_var["tp"]-> printToScreen ();
// mysql_close(); // 關閉資料庫

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
  $f_var["tp"]-> assign("tv_add",u_showproc().".php?msel=1"); //新增
  $f_var["tp"]-> assign("tv_list",u_showproc().".php?msel=4&f_page=1&f_year={$f_var['f_year']}&f_festival={$f_var['f_festival']}"); //瀏覽

  $f_var["tp"]-> assign("tv_f_page",$f_var['f_page']); //目前頁次
  $f_var["tp"]-> assign("tv_max_page",$f_var['max_page']); //最大最次

  $up_page = $f_var['f_page'] - 1 <= 1 ? 1 : $f_var['f_page'] - 1 ; //判斷頁次,最低是1
  $f_var["tp"]-> assign("tv_up_page",u_showproc().".php?msel=4&f_page={$up_page}&f_year={$f_var['f_year']}&f_festival={$f_var['f_festival']}"); //上一頁

  //判斷頁次,最高是$f_var['max_page']
  $dn_page = $f_var['f_page'] + 1 >= $f_var['max_page'] ? $f_var['max_page'] : $f_var['f_page'] + 1 ; 
  $f_var["tp"]-> assign("tv_dn_page",u_showproc().".php?msel=4&f_page={$dn_page}&f_year={$f_var['f_year']}&f_festival={$f_var['f_festival']}"); //下一頁

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

    $sql = "SELECT * FROM {$f_var['mtable']['head']} 
          WHERE d_date = '0000-00-00 00:00:00'
          AND `config_key` = 'gift_quota_type'";

    $result = mysql_query($sql);
    while( $row = mysql_fetch_assoc($result) ){
      $f_var['tp']-> newBlock('tb_area_option');
      $f_var['tp']-> assign('tv_value',$row['config_value']);
      $f_var['tp']-> assign('tv_show',$row['config_value']);
    }
  }


  $sql = "SELECT con.*,p.name FROM {$f_var['mtable']['head']} as con
          LEFT JOIN  sl.pass as p ON con.access_empno = p.empno
          WHERE con.d_date = '0000-00-00 00:00:00'
          ";

  $result = mysql_query($sql);
  if( mysql_num_rows($result) > 0 ){
    $i = 0;
    while( $row = mysql_fetch_assoc($result) ){
      
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
//  函數名稱: u_setvar()
//  函數功能: 變數設定
//  使用方式: u_setvar(&$f_var)
//  程式設計: Tony
//  設計日期: 2006.09.27
// **************************************************************************
function u_setvar(&$f_var) {

  //echo $_REQUEST.'---------';
  if(is_array($_REQUEST)) { // 有資料才處理
    while (list($f_fd_name,$f_fd_value) = @each($_REQUEST)) {
      //echo "$f_fd_name=$f_fd_value----";
      $f_var[$f_fd_name] = $f_fd_value;
    }
  }

  // 未傳入值之預設值設定 Begin.................................................//
  if(!isset($f_var['msel'])){
    $f_var['msel'] = 4;
  }
  if(!isset($f_var['f_page'])) {
    $f_var['f_page']  = 1;  //頁次
  }
  if(!isset($f_var['max_page'])) {
    $f_var['max_page']  = 1;  //最大頁次
  }

  
  // 未傳入值之預設值設定 End ..................................................//


  $f_var['mphp_name'] = u_showproc(); //程式名稱
  $f_var['show_year'] = '4';
  $f_var['msel_name'] = array('1'=>'新增','2'=>'修改','3'=>'刪除','4'=>'瀏覽','5'=>'查詢','6'=>'未定義','7'=>'列印'); // msel 中文
  $f_var['ie_h_title'] = '年節禮品管理系統首頁'; // 頁面標題
  $f_var['msub_title'] = '年節禮品管理系統首頁'; // 程式副標題
  $f_var['mmaxline'] = 10; // 每頁最大筆數
  $f_var['mdb'] = 'docs'; // db name
  $f_var['mupload_dir']  = "/home/docs/public_html/gift/gift_upfile/" ; //上傳檔案到此資料夾
  $f_var['tpl'] = 'index.tpl'; // 樣版畫面檔
  $f_var['dateTime'] = date('Y-m-d H:i:s'); //今天

  $f_var['link'] = array('各區贈禮對象規劃'=>'gift_list.php',
                        '年節產品管理'=>'gift_type.php',
                        '報表查詢'=>'gift_rpt.php',
                        '送禮額度設定'=>'gift_quota.php',
                        '其他設定'=>'gift_config.php',
  );

}




?>
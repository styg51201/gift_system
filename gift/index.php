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

include_once('../init/sl_init.php'); 
u_setvar($f_var);
include_once('../init/sl_header.php');


?>


<link rel="stylesheet" href="gift.css" type="text/css">
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>


<style>
  a.card{
    text-align:center;
    text-decoration: none;
  }
  a.card:hover{
    text-decoration: none;
    color:'';
  }
  .container{
    display:flex;
    justify-content: center;
    margin:25px;
  }
  .container>.card{
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
  .container>.card:hover{
    transform: translateY(-10px);
    box-shadow: none;
  }
  .container>.card:hover i{
    color:#fff;
  }
  .card>div{
    margin:0 auto;
  }
  .card h5{
    font-size: 20px;
    font-weight:bolder;
    text-align-last: justify;
    margin:15px auto 20px;
  }
  .card i{
    font-size:60px;
    padding:10px;
    transition: .3s;
    border-radius: 25%;
  }
  .card ul{
    padding-left:20px;
    color: #777777;
    font-size: 13px;
    letter-spacing: 1px;
    text-align:left;
  }
  .card li{
    list-style: square;
  }
  .set {
    display:none;
    position: fixed;
    top:0; left:0; right:0; bottom:0;
    background-color:#00000045;
  }
  .set.active{
    display:block;
  }
  .set .box{
    width:40%;
    height:80%;
    position: absolute;
    overflow: auto;
    top:50%;
    left:50%;
    transform: translate(-50%, -50%);
    padding:30px;
    background-color: #ffffff;
    border:1px solid #616161;
    border-radius:10px;
    box-shadow:2px 2px 5px #000000;
  }
  .set .close_box{
    position: absolute;
    right: 0%;
    top: 0%;
    z-index: 5;
    width: 40px;
  }
  .set .close_box{
    position: absolute;
    right: 0%;
    top: 0%;
    z-index: 5;
    width: 40px;
  }
  .info_box ul{
    padding-left:25px;
    list-style: disc;
  }
  .info_box li{
    list-style: disc;
    margin:0.5rem 0;
  }
  .info_box .li_title{
    font-size: 1.1rem;
    margin:1rem 0;
    font-weight: bold;
  }

</style>
<script>
  $(document).ready(function(){

    /*
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
    */

    //hover時 根據自身card的顏色=>icon做顏色變化
    $('.card').hover(
      function(){
      $(this).css('border','3px solid '+$(this).css('color'))
      $(this).find('i').css('background',$(this).css('color'))
    },function(){
      $(this).css('border','2px solid #cbcbcb')
      $(this).find('i').css('background','transparent')
    })

    //系統介紹的視窗-開啟&關閉
    $('#info_btn').click(function(even){
      $('.info_box').toggleClass('active');
    })
    $('.info_box').click(function(even){
      if( even.target == $('.info_box')[0] || $(even.target).hasClass('close_box') ){
        $('.info_box').toggleClass('active');
      }
    })

  });
</script>


<div class="container">
  <a class='card' href="gift_list.php" style="color:#33a1f8">
    <div>
      <i class="fad fa-user-edit"></i>
    </div>
    <div>
      <h5>贈禮對象規劃</h5>
      <ul>
        <li>各單位登打送禮客戶</li>
        <li>會計審核送禮額度</li>
        <li>選取送禮禮品</li>
      </ul>
    </div>
  </a>
  <a class='card' href="gift_type.php" style="color:#ff9800" >
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
  <a class='card' href="gift_rpt.php" style="color:#4caf50">
    <div>
      <i class="fad fa-file-alt"></i>
    </div>
    <div>
      <h5>報表查詢</h5>
      <ul>
        <li>年節禮品統計表</li>
        <li>贈禮對象報表</li>
        <li>匯出Excel檔</li>
      </ul>
    </div>
  </a>
</div>
<div class="container">
  <a class='card' href="gift_quota.php" style="color:#e6c300">
    <div>
      <i class="fad fa-sack-dollar"></i>
    </div>
    <div>
      <h5>送禮額度設定</h5>
      <ul>
        <li>各單位送禮額度設定</li>
      </ul>
    </div>
  </a>
  <a class='card' href="gift_config.php" style="color:#795548">
    <div>
      <i class="fad fa-tools"></i>
    </div>
    <div>
      <h5>其他設定</h5>
      <ul>
        <li>各單位窗口人員設定</li>
        <li>會計人員設定</li>
        <li>基數算法設定</li>
      </ul>
    </div>
  </a>

  <div class='card pointer' id="info_btn" style="color:#ee6666">
    <div>
    <i class="fad fa-info-circle"></i>
    </div>
    <div>
      <h5>系統介紹</h5>
      <ul>
        <li>用途說明</li>
        <li>流程介紹</li>
        <li>注意事項</li>
      </ul>
    </div>
  </div>

</div>



<div class="set info_box">
    <div>
      <div class="box">
        <img class="pointer close_box" src="../picture/關閉.png" alt="關閉視窗" title="關閉視窗">
        <h3>系統介紹</h3>
        <ul>
          <li class='li_title'>用途</li>
          <span>每年春節及中秋節，公司會贈禮給客戶，此系統供各個單位規劃欲送禮的客戶，並依照該客戶的平均月營收量對照出送禮額度。</span>
          <li class='li_title'>流程</li>
          <span>採購部建立禮品品項 -> 管理部建立送禮額度規則 -> 各單位窗口登打送禮客戶 -> 會計審核總額度 -> 各單位窗口選擇送禮品項</span>
          <li class='li_title'>注意事項</li>
          <ul>
            <li>若送禮用途為公關用(沒有營收)，則額度為該節禮品中的最低價格</li>
            <li>不同單位若要送相同的客戶時(相同的統一編號)，會跳出提示警告，但仍可儲存，並會列在重複名單內供稽核用</li>
            <li>會記錄曾經規劃的送禮對象，方便快速導入</li>
          </ul>
        </ul>
      </div>
    </div>
</div>
<?php



  

// u_link($f_var); //連結設定

// $f_var["tp"]-> printToScreen ();
// mysql_close(); // 關閉資料庫

// include_once($sl_footer_php); // footer



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
  $f_var['ie_h_title'] = '年節禮品管理系統'; // 頁面標題
  $f_var['msub_title'] = '年節禮品管理系統'; // 程式副標題
  $f_var['mmaxline'] = 10; // 每頁最大筆數
  $f_var['tpl'] = 'index.tpl'; // 樣版畫面檔
  $f_var['dateTime'] = date('Y-m-d H:i:s'); //今天
}




?>
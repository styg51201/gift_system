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

// include_once('../sl_init.php'); 
// u_setvar($f_var);
echo 'index_gift';
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


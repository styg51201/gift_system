<?php 
//�z�w�w�w�w�w�s�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�{
//�x�t�ΦW��: �x�~�`§�~�޲z�t�έ����@  �@                                              �x
//�x         �x                                                              �x
//�x�{���W��: �xindex.php                                                �x
//�x�{������: �x�~�`§�~�޲z�t�έ���                                      �x
//�x�˪O�W��: �xindex.tpl                                                 �x
//�x          �x                                     �x
//�x          �x                                                              �x
//�x�����{��: �x/home/sl/public_html/sl_init.php �@�Ψ��                     �x
//�x          �x/home/sl/public_html/tp/*.*      �˪O�M��                     �x
//�x          �x                                                              �x
//�x          �x/home/sl/public_html/sl.css      css ��                       �x
//�x          �x/home/sl/public_html/sl.js        javascript �ۭq���         �x
//�x          �x/home/sl/public_html/sl_header.inc.php  ����                  �x
//�x          �x/home/sl/public_html/sl_footer.inc.php  ����                  �x
//�x          �x                                                              �x
//�x�{���]�p: �x���t                                                          �x
//�x�]�p���: �x2021.04.13                                                   �x
//�|�w�w�w�w�w�r�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�}

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
      alert('�Шϥ� Google ���uChrome�s�����v�}�ҡA����');
    }

    $('a').click(function(event){
      if( userAgent.indexOf('Chrome') == -1  ){
        alert('�Шϥ� Google ���uChrome�s�����v�}�ҡA����');
        event.preventDefault();
      }
    })
    */

    //hover�� �ھڦۨ�card���C��=>icon���C���ܤ�
    $('.card').hover(
      function(){
      $(this).css('border','3px solid '+$(this).css('color'))
      $(this).find('i').css('background',$(this).css('color'))
    },function(){
      $(this).css('border','2px solid #cbcbcb')
      $(this).find('i').css('background','transparent')
    })

    //�t�Τ��Ъ�����-�}��&����
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
      <h5>��§��H�W��</h5>
      <ul>
        <li>�U���n���e§�Ȥ�</li>
        <li>�|�p�f�ְe§�B��</li>
        <li>����e§§�~</li>
      </ul>
    </div>
  </a>
  <a class='card' href="gift_type.php" style="color:#ff9800" >
    <div>
      <i class="fad fa-gifts"></i>
    </div>
    <div>
      <h5>§�~�~���޲z</h5>
      <ul>
        <li>�ѱ��ʳ��޲z</li>
        <li>�n���~�`���~������T</li>
      </ul>
    </div>
  </a>
  <a class='card' href="gift_rpt.php" style="color:#4caf50">
    <div>
      <i class="fad fa-file-alt"></i>
    </div>
    <div>
      <h5>����d��</h5>
      <ul>
        <li>�~�`§�~�έp��</li>
        <li>��§��H����</li>
        <li>�ץXExcel��</li>
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
      <h5>�e§�B�׳]�w</h5>
      <ul>
        <li>�U���e§�B�׳]�w</li>
      </ul>
    </div>
  </a>
  <a class='card' href="gift_config.php" style="color:#795548">
    <div>
      <i class="fad fa-tools"></i>
    </div>
    <div>
      <h5>��L�]�w</h5>
      <ul>
        <li>�U��쵡�f�H���]�w</li>
        <li>�|�p�H���]�w</li>
        <li>��ƺ�k�]�w</li>
      </ul>
    </div>
  </a>

  <div class='card pointer' id="info_btn" style="color:#ee6666">
    <div>
    <i class="fad fa-info-circle"></i>
    </div>
    <div>
      <h5>�t�Τ���</h5>
      <ul>
        <li>�γ~����</li>
        <li>�y�{����</li>
        <li>�`�N�ƶ�</li>
      </ul>
    </div>
  </div>

</div>



<div class="set info_box">
    <div>
      <div class="box">
        <img class="pointer close_box" src="../picture/����.png" alt="��������" title="��������">
        <h3>�t�Τ���</h3>
        <ul>
          <li class='li_title'>�γ~</li>
          <span>�C�~�K�`�Τ���`�A���q�|��§���Ȥ�A���t�ΨѦU�ӳ��W�����e§���Ȥ�A�è̷ӸӫȤ᪺�������禬�q��ӥX�e§�B�סC</span>
          <li class='li_title'>�y�{</li>
          <span>���ʳ��إ�§�~�~�� -> �޲z���إ߰e§�B�׳W�h -> �U��쵡�f�n���e§�Ȥ� -> �|�p�f���`�B�� -> �U��쵡�f��ܰe§�~��</span>
          <li class='li_title'>�`�N�ƶ�</li>
          <ul>
            <li>�Y�e§�γ~��������(�S���禬)�A�h�B�׬��Ӹ`§�~�����̧C����</li>
            <li>���P���Y�n�e�ۦP���Ȥ��(�ۦP���Τ@�s��)�A�|���X����ĵ�i�A�����i�x�s�A�÷|�C�b���ƦW�椺�ѽ]�֥�</li>
            <li>�|�O�����g�W�����e§��H�A��K�ֳt�ɤJ</li>
          </ul>
        </ul>
      </div>
    </div>
</div>
<?php



  

// u_link($f_var); //�s���]�w

// $f_var["tp"]-> printToScreen ();
// mysql_close(); // ������Ʈw

// include_once($sl_footer_php); // footer



// **************************************************************************
//  ��ƦW��: u_setvar()
//  ��ƥ\��: �ܼƳ]�w
//  �ϥΤ覡: u_setvar(&$f_var)
//  �{���]�p: Tony
//  �]�p���: 2006.09.27
// **************************************************************************
function u_setvar(&$f_var) {

  //echo $_REQUEST.'---------';
  if(is_array($_REQUEST)) { // ����Ƥ~�B�z
    foreach($_REQUEST as $f_fd_name => $f_fd_value){
      $f_var[$f_fd_name] = $f_fd_value;
    }
  }

  // ���ǤJ�Ȥ��w�]�ȳ]�w Begin.................................................//
  if(!isset($f_var['msel'])){
    $f_var['msel'] = 4;
  }
  if(!isset($f_var['f_page'])) {
    $f_var['f_page']  = 1;  //����
  }
  if(!isset($f_var['max_page'])) {
    $f_var['max_page']  = 1;  //�̤j����
  }

  
  // ���ǤJ�Ȥ��w�]�ȳ]�w End ..................................................//


  $f_var['mphp_name'] = u_showproc(); //�{���W��
  $f_var['show_year'] = '4';
  $f_var['msel_name'] = array('1'=>'�s�W','2'=>'�ק�','3'=>'�R��','4'=>'�s��','5'=>'�d��','6'=>'���w�q','7'=>'�C�L'); // msel ����
  $f_var['ie_h_title'] = '�~�`§�~�޲z�t��'; // �������D
  $f_var['msub_title'] = '�~�`§�~�޲z�t��'; // �{���Ƽ��D
  $f_var['mmaxline'] = 10; // �C���̤j����
  $f_var['tpl'] = 'index.tpl'; // �˪��e����
  $f_var['dateTime'] = date('Y-m-d H:i:s'); //����
}




?>
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
      alert('�Шϥ� Google ���uChrome�s�����v�}�ҡA����');
    }

    $('a').click(function(event){
      if( userAgent.indexOf('Chrome') == -1  ){
        alert('�Шϥ� Google ���uChrome�s�����v�}�ҡA����');
        event.preventDefault();
      }
    })

    //hover�� �ھڦۨ�box���C��=>icon���C���ܤ�
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
  <h1 style="color:red;font-weight:500;text-align:center">�Шϥ� Google ���uChrome�s�����v�}�ҡA����</h1>

</div>
<div class="container">
  <a class='box' href="gift_list.php" style="color:#33a1f8">
    <div>
      <i class="fad fa-user-edit"></i>
    </div>
    <div>
      <h5>��§��H�W��</h5>
      <ul>
        <li>�U�ϵ��f�n���e§�Ȥ�</li>
        <li>�|�p�f�ְe§�B��</li>
        <li>����e§§�~</li>
      </ul>
    </div>
  </a>
  <a class='box' href="gift_type.php" style="color:#ff9800" >
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
  <a class='box' href="gift_rpt.php" style="color:#4caf50">
    <div>
      <i class="fad fa-file-alt"></i>
    </div>
    <div>
      <h5>����d��</h5>
      <ul>
        <li>�~�`§�~�έp��</li>
        <li>�U����§��H�W����</li>
        <li>�ץXExcel��</li>
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
      <h5>�e§�B�׳]�w</h5>
      <ul>
        <li>�U�ϰe§�B�׳]�w</li>
      </ul>
    </div>
  </a>
  <a class='box' href="gift_config.php" style="color:#795548">
    <div>
      <i class="fad fa-tools"></i>
    </div>
    
    <div>
      <h5>��L�]�w</h5>
      <ul>
        <li>�U�ϵ��f�H���]�w</li>
        <li>�|�p�H���]�w</li>
        <li>��ƺ�k�]�w</li>
      </ul>
    </div>
  </a>
</div>

<?php



  

// u_link($f_var); //�s���]�w

// $f_var["tp"]-> printToScreen ();
// mysql_close(); // ������Ʈw

// include_once($sl_footer_php); // footer


// **************************************************************************
//  ��ƦW��: u_link()
//  ��ƥ\��: �s���]�w
//  �ϥΤ覡: u_link(&$f_var)
//  �{���]�p: Tony
//  �]�p���: 2006.09.27
// **************************************************************************
function u_link(&$f_var){

  $f_var["tp"]-> newBlock('tb_link');
  $f_var["tp"]-> assign("tv_add",u_showproc().".php?msel=1"); //�s�W
  $f_var["tp"]-> assign("tv_list",u_showproc().".php?msel=4&f_page=1&f_year={$f_var['f_year']}&f_festival={$f_var['f_festival']}"); //�s��

  $f_var["tp"]-> assign("tv_f_page",$f_var['f_page']); //�ثe����
  $f_var["tp"]-> assign("tv_max_page",$f_var['max_page']); //�̤j�̦�

  $up_page = $f_var['f_page'] - 1 <= 1 ? 1 : $f_var['f_page'] - 1 ; //�P�_����,�̧C�O1
  $f_var["tp"]-> assign("tv_up_page",u_showproc().".php?msel=4&f_page={$up_page}&f_year={$f_var['f_year']}&f_festival={$f_var['f_festival']}"); //�W�@��

  //�P�_����,�̰��O$f_var['max_page']
  $dn_page = $f_var['f_page'] + 1 >= $f_var['max_page'] ? $f_var['max_page'] : $f_var['f_page'] + 1 ; 
  $f_var["tp"]-> assign("tv_dn_page",u_showproc().".php?msel=4&f_page={$dn_page}&f_year={$f_var['f_year']}&f_festival={$f_var['f_festival']}"); //�U�@��

}


// **************************************************************************
//  ��ƦW��: u_list()
//  ��ƥ\��: �C��
//  �ϥΤ覡: u_list(&$f_var)
//  �{���]�p: Tony
//  �]�p���: 2006.09.27
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
//  ��ƦW��: u_setvar()
//  ��ƥ\��: �ܼƳ]�w
//  �ϥΤ覡: u_setvar(&$f_var)
//  �{���]�p: Tony
//  �]�p���: 2006.09.27
// **************************************************************************
function u_setvar(&$f_var) {

  //echo $_REQUEST.'---------';
  if(is_array($_REQUEST)) { // ����Ƥ~�B�z
    while (list($f_fd_name,$f_fd_value) = @each($_REQUEST)) {
      //echo "$f_fd_name=$f_fd_value----";
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
  $f_var['ie_h_title'] = '�~�`§�~�޲z�t�έ���'; // �������D
  $f_var['msub_title'] = '�~�`§�~�޲z�t�έ���'; // �{���Ƽ��D
  $f_var['mmaxline'] = 10; // �C���̤j����
  $f_var['mdb'] = 'docs'; // db name
  $f_var['mupload_dir']  = "/home/docs/public_html/gift/gift_upfile/" ; //�W���ɮר즹��Ƨ�
  $f_var['tpl'] = 'index.tpl'; // �˪��e����
  $f_var['dateTime'] = date('Y-m-d H:i:s'); //����

  $f_var['link'] = array('�U����§��H�W��'=>'gift_list.php',
                        '�~�`���~�޲z'=>'gift_type.php',
                        '����d��'=>'gift_rpt.php',
                        '�e§�B�׳]�w'=>'gift_quota.php',
                        '��L�]�w'=>'gift_config.php',
  );

}




?>
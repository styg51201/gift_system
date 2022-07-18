<?php 
//�z�w�w�w�w�w�s�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�{
//�x�t�ΦW��: �xgift_config�@  �@                                              �x
//�x         �x                                                              �x
//�x�{���W��: �xgift_config.php                                                �x
//�x�{������: �x§�~�޲z�t��-�]�w��                                      �x
//�x�˪O�W��: �xgift_config.tpl                                                 �x
//�x          �x                                                              �x
//�x��Ʈw  : �xdocs                                                          �x
//�x��ƪ�  : �xgift_config (�]�w��)                                                    �x
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
//�x�]�p���: �x2021.03.09                                                    �x
//�|�w�w�w�w�w�r�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�w�}

include_once('../init/sl_init.php');
u_setvar($f_var);
include_once("../TemplatePower/class.TemplatePower.inc.php");
$f_var["tp"] = new  TemplatePower($f_var['tpl']);
$f_var["tp"]-> prepare();

// for ajax 
if ($_REQUEST['ajax_get']=='ajax_get_emp') {
  $q = mb_convert_encoding($_REQUEST["q"],'big5','utf-8');

  $f_var['con_db'] = sl_open($f_var['mdb']); // �}�Ҹ�Ʈw

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

$f_var['con_db'] = sl_open($f_var['mdb']); // �}�Ҹ�Ʈw
switch ($f_var['msel']) {
  case "21": // �ק�-�x�s
    u_save($f_var);
  break;
  default:
    u_list($f_var);
  break;
}



u_link($f_var); //�s���]�w

$f_var["tp"]-> printToScreen ();
mysqli_close($f_var['con_db']); // ������Ʈw

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
  $f_var["tp"]-> assign("tv_home","./"); //����

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
//  ��ƦW��: u_save()
//  ��ƥ\��: �x�s
//  �ϥΤ覡: u_save(&$f_var)
//  �{���]�p: Tony
//  �]�p���: 2006.09.27
// **************************************************************************
function u_save(&$f_var){

  if( isset($_POST['s_num']) ){ //�U�ϳ]�w

    // echo '<pre>'.print_r($_POST,1).'</pre>';
    // exit;

    $str = '';
    foreach( $_POST['s_num'] as $ind => $val ){
      $s_num = trim($_POST['s_num'][$ind]);
      $empno = trim($_POST['empno'][$ind]);
      $address = trim($_POST['address'][$ind]);
      $str .= ",(".$s_num.",'".$empno."','".$address."')";
    }

    $str = substr($str,1);//�h���Ĥ@�ӳr��

      // INSERT INTO ... ON DUPLICATE KEY UPDATE =>DB�Y���ۦP��ƴNUPD,�S���N�s�W(�i��q),�ݭn���ߤ@�ȥh�P�_
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
        $f_var["tp"]-> assign("_ROOT.tv_alert",'�ק異��!!');
        $f_var["tp"]-> assign("_ROOT.tv_sql_error",mysqli_error());
        return;
      }


  }else{ //��L�]�w

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
        $f_var["tp"]-> assign("_ROOT.tv_alert",'�ק異��!!');
        $f_var["tp"]-> assign("_ROOT.tv_sql_error",mysqli_error());
        return;
      }
  
    }

  }

  echo sl_jreplace($f_var['mphp_name'].'.php');

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
    foreach($_REQUEST as $f_fd_name => $f_fd_value){
      $f_var[$f_fd_name] = $f_fd_value;
    }
  }

  // ���ǤJ�Ȥ��w�]�ȳ]�w Begin.................................................//
  if($f_var['msel'] == NULL){
    $f_var['msel'] = 4;
  }
  if(NULL==$f_var['f_page']) {
    $f_var['f_page']  = 1;  //����
  }
  if(NULL==$f_var['max_page']) {
    $f_var['max_page']  = 1;  //�̤j����
  }

  
  // ���ǤJ�Ȥ��w�]�ȳ]�w End ..................................................//


  $f_var['mphp_name'] = u_showproc(); //�{���W��
  $f_var['show_year'] = '4';
  $f_var['msel_name'] = array('1'=>'�s�W','2'=>'�ק�','3'=>'�R��','4'=>'�s��','5'=>'�d��','6'=>'���w�q','7'=>'�C�L'); // msel ����
  $f_var['ie_h_title'] = '§�~�޲z�t��-�]�w��'; // �������D
  $f_var['msub_title'] = '§�~�޲z�t��-�]�w��'; // �{���Ƽ��D
  $f_var['mmaxline'] = 10; // �C���̤j����
  $f_var['mdb'] = 'heroku'; // db name
  $f_var['mupload_dir']  = "./gift_upfile/" ; //�W���ɮר즹��Ƨ�
  $f_var['mtable'] = array('head'=>'gift_head','body'=>'gift_body','type'=>'gift_type','quota'=>'gift_quota',
                          'config'=>'gift_config','guest'=>'gift_guest','item'=>'gift_item'); // �ϥ� table �W��
  $f_var['tpl'] = 'gift_config.tpl'; // �˪��e����


  return;
}

// **************************************************************************
//  ��ƦW��: ReturnInt()
//  ��ƥ\��: �ഫ�禡�A�ǤJ����ƭY���O�Ʀr�A�@���ন0
//  �ϥΤ覡: ReturnInt($data)
//  �{���]�p: Bruce
//  �]�p���: 2020.06.18
// **************************************************************************
function ReturnInt($data){
  $result=is_numeric($data)?$data:"0";
  return $result;
}


?>